<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use App\Http\Requests\UserRequest;
use App\Models\User\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller{
    


		  /**
		 * Show the application user profile.
		 *
		 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
		 */
		public function profile(Guard $auth){
	
			return view('user.profile', ['user' => $auth->user()]);
		}
	
	
		/**
		 * Show the application user edit profile.
		 *
		 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
		 */
		public function getChangeProfile(User $user){
			$user = Auth::user();
			return view('user.edit_profile', ['user' => $user]);
		}
	
	
		 /**
		 * edit user | give data vuejs
		 *
		 * @param UserRequest $request
		 * @param $id
		 */
		public function postChangeProfile(Request $request, $id){
			
			$profile = User::find(Auth::user()->id);
				if(Auth::user()->email == request('email')) {
					$this->validate(request(), [
							'password' => 'required|min:6|confirmed',
							'surname' => 'required|',
							'name' => 'required|',
//							'phone' => 'numeric|phone',
						]);
						$profile->surname = $request->surname;
						$profile->name = $request->name;
						$profile->birthday = $request->birthday;
						$profile->phone = $request->phone;
						$profile->email = $request->email;
						$profile->password = bcrypt($request->password);;
						$profile->comment = $request->comment;
						$profile->is_send_notifications = ($request->has('is_send_notifications')) ? true : false;
						$profile->save();
						return back()->with('success', 'Профиль изменен');
					}
					else{
						$this->validate(request(), [
								'name' => 'required',
								'email' => 'required|email|unique:users',
								'password' => 'required|min:6|confirmed',
								'surname' => 'required|',
//								'phone' => 'numeric|phone',
							]);
						$profile->surname = $request->surname;
						$profile->name = $request->name;
						$profile->birthday = $request->birthday;
						$profile->phone = $request->phone;
						$profile->email = $request->email;
						$profile->name = bcrypt($request->password);;
						$profile->comment = $request->comment;
						$profile->is_send_notifications = ($request->has('is_send_notifications')) ? true : false;
						$profile->save();
		
						return back()->with('success', 'Профиль изменен');
				}
		}
}
