<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\Models\gender;
use App\Models\UserGroup;

use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function edit(Request $request)
    {
        $genders = gender::all();
        $user_group = UserGroup::all();

        return view('update_profile', ['user' => $request->user(), 'genders' => $genders, 'user_group' => $user_group ]);
    }

    /**
     * Update the user's profile information.
     *
     * @param  \App\Http\Requests\ProfileUpdateRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileUpdateRequest $request)
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $phone_number = $request->phone_number;
        $about = $request->about;
        $group = $request->user_group;
        $gender = $request->gender;

        $request->user()->phone_number = $phone_number;
        $request->user()->about_me = $about;
        $request->user()->user_group = $group;
        $request->user()->gender_id = $gender;

        $request->user()->save();

        return Redirect::route('profile.edit')->with('success', 'Profile succesfully updated!');
    }

    /**
     * Delete the user's account.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function changePasswordForm(){
        return view('password_change_form');
    }

    public function updatePassword(Request $request){
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        $role_id = $request->role_id;

        if($role_id == 3){
            $role_id = 2;
        }

        // dd($role_id);

        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }


        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password),
            'role_id' => $role_id,
        ]);

        return redirect()->route('home')->with("status", "Password changed successfully!");
    }
}
