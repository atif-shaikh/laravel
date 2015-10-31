<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{

	public function editProfile(Request $request, $id) {
    	if ($request->user()) {
    		$user = new App\User;
    		//$user = User::find($id);
    		dd($user);
    		return view('auth.profile')->withUser($user);
    	}
    }

    public function updateProfile(Request $request, $id) {
    	if ($request->user()) {
    		$user = User::find($id);
    		if (!$user->update(Input::all())) {
		        return Redirect::back()
	                ->with('message', 'Something wrong happened while saving your model')
	                ->withInput();
		    }
		    return Redirect::route('profile/{id}')
                ->with('message', 'User updated.');
    		//return view('auth.profile');
    	}
    }
}
