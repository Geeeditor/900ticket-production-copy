<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class UserProfileController extends Controller
{
    //
    public function index() {
        $user = Auth::user();
        return view('profile', ['user' => $user]);
    }

    public function updateProfilePicture() {

    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'gender' => 'required|in:Male,Female,Other',
        ]);

        $user = Auth::user(); // Assuming you are updating the authenticated user's profile

        $user->update([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'address' => $data['address'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'gender' => $data['gender'],
        ]);

        return redirect()->back()->with('success', 'Profile updated successfully');
    }

    public function updatePassword(Request $request)
{
    $data = $request->validate([
        'current_password' => 'required',
        'password' => ['required', 'string', 'min:8', 'different:current_password'],
        'confirm_password' => ['required', 'string', 'same:password'],
    ]);

    $user = Auth::user();

    // Check if the provided current password matches the user's stored password
    if (Hash::check($data['current_password'], $user->password)) {
        // Provided current password matches, proceed with updating the password
        $user->password = bcrypt($data['password']);
        $user->save();

        return redirect()->back()->with('success', 'Password updated successfully');
    } else {
        // Provided current password does not match
        return redirect()->back()->with('error', 'Current password is incorrect');
    }
}

public function updateProfilePic (Request $request) {
    $data = $request->validate([
        'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $user = Auth::user();

    if ($request->hasFile('profile_picture')) {
        $fileName = 'profile_picture_' . Str::random(4) . substr(time(), 6,8) . '.' . $request->profile_picture->getClientOriginalExtension();

        Storage::disk('public')->put('profile_pictures/' . $fileName, file_get_contents($request->profile_picture));

        $update = $user->update([
            'profile_picture' => 'profile_pictures/' . $fileName,
        ]);

        if (!$update) {
            return redirect()->back()->with('error', 'Failed to update profile picture');
        }

        return redirect()->back()->with('success', 'Profile picture updated successfully');
    } 
}

public function destroy(Request $request): RedirectResponse
{
    // $data = $request->validateWithBag('error', [
    //     'password' => ['required', 'current_password'],
    // ]);
    $data = $request->validate([
        'password' => ['required'],
    ]);

    if (Hash::check($data['password'], $request->user()->password)) {
        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('index')->with('success', 'Account deleted successfully');
    } else {
        return redirect()->back()->with('error', 'Your password is incorrect');
    }
    

    
}
}
