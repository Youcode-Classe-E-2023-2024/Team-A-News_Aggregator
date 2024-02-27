<?php

namespace App\Http\Controllers;

use App\Models\UserInterest;
//use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Spatie\Permission\Models\Role;


class UserController extends Controller
{
    public function submit_interests(Request $request)
    {
        $u = UserInterest::where('user_id', Auth::user()->id)->get();

        if (isset($request->interests)) {
            if (count($request->interests) <= 4 || count($u) <= 4 ) {
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
    public function destroy(Request $request)
    {
        $user = User::find($request->user_id);
        $user->delete();
        return back()->with('success', 'User deleted successfully.');
    }
    public function update_user_role(Request $request)
    {
        $user = User::find($request->user_id);
        $role = Role::where('name', $request->updated_role)->first();
        if ($user && $role) {
            $user->syncRoles([$role->id]);
            return back()->with('success', 'User role updated successfully.');
        } else
            return back()->with('error', 'Something went wrong try again !!!');
    }
};
