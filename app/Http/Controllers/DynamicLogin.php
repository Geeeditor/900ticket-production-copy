<?php



namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DynamicLogin extends Controller
{
    public function create()
    {
        return view('verify.login');
    }

    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Attempt to authenticate the user
        if (auth()->attempt($request->only(['email', 'password']), $request->filled('remember'))) {
            $usertype = Auth::user()->usertype;
            $firstname = Auth::user()->firstname;
            $lastname = Auth::user()->lastname;

            // Determine the redirect path
            $redirectTo = $request->input('redirect_to', 'dashboard');

            if ($redirectTo === 'back') {
                return redirect()->back()->with([
                    'loginsuccess' => 'Welcome back,',
                    'firstname' => $firstname,
                    'lastname' => $lastname,
                ]);
            }

            if ($usertype == 'user') {
                return redirect()->route($redirectTo)->with([
                    'loginsuccess' => 'Welcome back,',
                    'firstname' => $firstname,
                    'lastname' => $lastname,
                ]);
            } elseif ($usertype == 'admin') {
                return redirect()->route('admin.index');
            } else {
                return redirect()->back();
            }
        }

        // Handle the case where authentication fails
        return back()->withInput()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}

// How to use redirect to a specific route

/* <form method="POST" action="{{ route('login.store') }}">
    @csrf
    <input type="hidden" name="redirect_to" value="{{ request()->input('redirect_to', 'dashboard') }}">
    <input type="email" name="email" required>
    <input type="password" name="password" required>
    <button type="submit">Login</button>
</form> */

// How to redirect back to previouse route
// <input type="hidden" name="redirect_to" value="back">




/* class DynamicLogin extends Controller
{
    public function create() {
        return view('verify.login');
    }

    public function store(Request $request, $redirectRoute = 'dashboard', $sessionData = []) {
        // Validate the incoming request
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Attempt to authenticate the user
        if (auth()->attempt($request->only(['email', 'password']), $request->filled('remember'))) {
            $user = Auth::user();
            $usertype = $user->usertype;
            $firstname = $user->firstname;
            $lastname = $user->lastname;

            // Store additional session data dynamically if needed
            foreach ($sessionData as $key => $value) {
                $request->session()->put($key, $value);
            }

            if ($usertype == 'user') {
                return redirect()->route($redirectRoute)->with([
                    'loginsuccess' => 'Welcome back,',
                    'firstname' => $firstname,
                    'lastname' => $lastname,
                ]);
            } elseif ($usertype == 'admin') {
                return redirect()->route('admin.index');
            } else {
                return redirect()->back();
            }
        }

        // Handle the case where authentication fails
        return back()->withInput()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
} */

// Example usage in a route
/* Route::post('/login', [LoginWithOtpController::class, 'store'])
    ->defaults('redirectRoute', 'dashboard') // Specify the redirect route
    ->defaults('sessionData', [
        'last_login' => now(),
        // Add other session data as needed
    ]); */