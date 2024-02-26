<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class RegisterController extends Controller
{
    /**
     * Show the registration form.
     *
     * @return View
     */
    public function index(): View
    {
        return view('pages.register');
    }

    /**
     * Handle a registration request.
     *
     * @param Request $request
     * @return Application|\Illuminate\Foundation\Application|RedirectResponse|Redirector
     */
    public function register(Request $request): \Illuminate\Foundation\Application|Redirector|RedirectResponse|Application
    {
        $request->validate([
            'name' => 'required|string|max:255|min:4',
            'email' => 'required|string|email|max:255|unique:users|ends_with:@gmail.com',
            'password' => 'required|string|min:8',
            'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        $folderName = 'user_profiles/' . $user->id;
        Storage::disk('public')->makeDirectory($folderName);
        
        $profileImagePath = $request->file('profile_image')->store($folderName, 'public');
        $user->profile_image = $profileImagePath;
        $user->save();

        $token = $user->createToken('MyApp')->accessToken;

        return redirect('/login')->with('success', 'Registration successful. Please login.')->with('token', $token);
    }

}
