<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserInterest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    public function submit_interests(Request $request)
    {
        $u = UserInterest::where('user_id', Auth::user()->id)->get();

        if (isset($request->interests)) {
            if (count($request->interests) <= 4 || count($u) <= 4) {
                return back()->with('error', 'error, user already have enough interests');
            }
            Validator::make($request->all(), [
                'interests' => 'array|max:4',
                'interests.*' => 'numeric|exists:user_interest,category_id'
            ]);

            foreach ($request->interests as $interest)
                UserInterest::create([
                    'user_id' => Auth::user()->id,
                    'category_id' => $interest
                ]);
            return back()->with('success', 'interests added successfully');
        } else {
            return back()->with('error', 'error, please select interests');
        }
    }

    public function edit()
    {
        $user = auth()->user();
        return view('pages.update-profile', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        $user = auth()->user();

        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);

        if ($request->filled(['current_password', 'new_password', 'confirm_password'])) {
            // Validate current password
            if (!Hash::check($request->input('current_password'), $user->password)) {
                return redirect()->back()->with('error', 'Current password is incorrect.');
            }

            $request->validate([
                'new_password' => 'required|string|min:8|confirmed',
            ]);

            $user->update([
                'password' => bcrypt($request->input('new_password')),
            ]);
        }

        if ($request->hasFile('profile_picture')) {
            $imagePath = $request->file('profile_picture')->store('profile_pictures', 'public');
            $user->profile_picture = $imagePath;
        }

        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully');
    }
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return back()->with('success', 'User deleted successfully.');
    }
    public function updateRole(Request $request)
    {
        $request->validate([
            'role' => 'required|string',
            'userId' => 'required|int'
        ]);

        $user = User::findOrFail($request->userId);
        $user->role = $request->role;
        $user->save();

        return back()->with('success', 'User role updated successfully.');
    }
};
