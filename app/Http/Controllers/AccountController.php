<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
   public function account()
    {
    	return view('account/account');
    }

    public function getPassword()
    {
    	return view('account/password');
    }

    public function postPassword(Request $request)
    {
    	$user = $request->user();

    	if (!Hash::check($request->get('current_password'), $user->password))
		{
			return redirect()->back()->withErrors([
				'current_password' => 'The current password is not valid'
			]);
		}

		$this->validate($request,[
			'password' => 'required|confirmed',
			'password_confirmation' => 'required'
		]);

		$user->password = bcrypt($request->get('password'));
		$user->save();

    	return redirect('account')
    		->with('alert', 'Your password has been changed');
    }

    public function editProfile()
    {
        $user = Auth::user();
        return view('account.edit-profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = $request->user();

        $this->validate($request, [
            'name' => 'required|min:2'
        ]);

        $user->name = $request->get('name');
        $user->save();

        return redirect('account')->with('alert', 'Your profile has been updated');
    }
}
