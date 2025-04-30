<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\EmailOtp;
use App\Mail\EmailOtpMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules\Password;

class RegisterWithOtpController extends Controller
{
    //
    public function create() {
        return view('verify.register');
    }

    public function store(Request $request){
        $request->validate([
            'firstname'=> ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase',
            'email', 'max:255', 'unique:'.User::class],
            'phone' => ['required', 'string', 'max:255'],
            'password' => ['required', Password::min(8)->mixedCase()->numbers()->symbols() ]
            // 'confirm_password' => ['required']
        ]);

        // V9p4bGhKHg959vH3^

        $otp = rand(100000, 999999);

        EmailOtp::updateOrCreate(['email' => $request->email], [
            'email' => $request->email,
            'otp' => $otp,
            'expired_at' => Carbon::now()->addMinute(10)
        ]);

        Mail::to($request->email)->send(new EmailOtpMail($otp, $request->firstname));

        $request->session()->put('register_firstname', $request->firstname);
        $request->session()->put('register_lastname', $request->lastname);
        $request->session()->put('register_address', $request->address);
        $request->session()->put('register_email', $request->email);
        $request->session()->put('register_phone', $request->phone);
        $request->session()->put('register_password', Hash::make($request->password));

        return redirect()->route('register.verify.otp');
    }

    public function resendOtp (Request $request) {


        // Get previous session values
        $email = $request->session()->get('register_email');
        $firstname = $request->session()->get('register_firstname');
        $lastname = $request->session()->get('register_lastname');
        $address = $request->session()->get('register_address');
        $phone = $request->session()->get('register_phone');
        $password = $request->session()->get('register_password');

         if (!$email) {
            return redirect()->back()->withErrors(['message' => 'No email found in the session.']);
        }

        // Create a new otp
        $otp = rand(100000, 999999);



        // Update Records

        EmailOtp::updateOrCreate(['email' => $email], [
            'email' => $email,
            'otp' => $otp,

        ]);

        // Send user otp code
        Mail::to($email)->send(new EmailOtpMail($otp, $firstname));





        // Redirect back to route with info
          return redirect()->back()->with('info', 'Your otp has been resent to your mail box');



    }

    public function registerVerifyOtp() {
        return view('verify.otp');
    }


    public function registerVerifyOtpStore(Request $request) {
        $request->validate([
            'otp1' => 'required|digits:1',
            'otp2' => 'required|digits:1',
            'otp3' => 'required|digits:1',
            'otp4' => 'required|digits:1',
            'otp5' => 'required|digits:1',
            'otp6' => 'required|digits:1'
        ]);

        //Concatenate the OTP Digits
        $otp = $request->otp1 . $request->otp2 . $request->otp3 . $request->otp4 . $request->otp5 . $request->otp6;

        //  $request->session()->put('register_firstname', $request->firstname);
        // $request->session()->put('register_lastname', $request->lastname);
        // $request->session()->put('register_address', $request->address);
        // $request->session()->put('register_email', $request->email);
        // $request->session()->put('register_password', Hash::make($request->password));


        // Get previous session values
        $email = $request->session()->get('register_email');
        $firstname = $request->session()->get('register_firstname');
        $lastname = $request->session()->get('register_lastname');
        $address = $request->session()->get('register_address');
        $phone = $request->session()->get('register_phone');
        $password = $request->session()->get('register_password');

        $emailOtp = EmailOtp::where('email', $email)->where('otp', $otp)->where('expired_at', '>=', Carbon::now())->first();

        if(!$emailOtp){
             return redirect()->back()->withInput()->with(['message' => 'Invalid or Expired OTP Provided!']);
        }

        $user = User::create([
            'firstname'=> $firstname,
            'lastname'=> $lastname,
            'address'=> $address,
            'email'=> $email,
            'phone'=> $phone,
            'password'=> $password,
        ]);

        $emailOtp->delete();

        $request->session()->forget('register_email');
        $request->session()->forget('register_firstname');
        $request->session()->forget('register_lastname');
        $request->session()->forget('register_address');
        $request->session()->forget('register_phone');
        $request->session()->forget('register_password');

        // $user = User::create







        Auth::login($user);
        $firstname=Auth()->user()->firstname;
        $lastname=Auth()->user()->lastname;

        return redirect()->route('dashboard')->with(['regsuccess'=> 'Welcome to 900ticket', 'firstname' => $firstname, 'lastname' => $lastname]);





    }

    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}
