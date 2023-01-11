<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function updateAvatar(Request $request, $id){
        $user = User::find($id);
        echo $user->id;
        echo $request->new_avatar;

        $request->validate([
            'new_avatar' => 'required',
        ]);

        $image = $request->new_avatar;

        if (!empty ($image)){
            $image_name = $image->getClientOriginalName();
            $image->storeAs('public/users', $image_name);
            $user->avatar = $image_name;

            $user->save();

            return redirect()->back()->with('success', 'Profile Picture Successfully Updated!');
        }
        else
        {
            return back()->with('success', 'Please Select a Profile Picture!');;
        }

    }
}
