<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserRequest;
use App\Models\User\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


/**
 * Class UsersController
 * @package App\Http\Controllers\Admin
 */
class UsersController extends Controller {

		/**
		 * Show the application admin users.
		 *
		 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
		 */
		public function index(){
			return view('admin.users');
		}
	
	
		/**
		 * getting users | give data vuejs
		 *
		 * @return mixed
		 */
		public function getUsers(){
			return User::orderBy('code_role', 'DESC')->get();
		}
	
	
		/**
		 * edit user | give data vuejs
		 *
		 * @param UserRequest $request
		 * @param $id
		 */
		public function edit(UserRequest $request, $id){
			$pb = User::find($request->id);
			$pb->name = $request->name;
			$pb->email = $request->email;
			$pb->code_role = $request->code_role;
			$pb->save();
		}
	
	
		/**
		 * delete user | give data vue.js
		 *
		 * @param $id
		 * @param Request $request
		 */
		public function delete($id, Request $request) {
			$delete = User::whereId($id)->firstOrFail();
			 $delete->delete();
		}
	
	
		/**
		 * Show the application admin add users.
		 *
		 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
		 */
		public function addGetUser(){
			return view('admin.users.add_user');
		}
	
	
		/**
		 * edit user | give data vuejs
		 *
		 * @param UserRequest $request
		 * @param $id
		 */
		public function addPostUser(Request $request){
			$this->validate(request(), [
				'name' => 'required',
				'email' => 'required|email|unique:users',
//				'password' => 'required|min:6|confirmed',
				'surname' => 'required|',
				'phone' => 'numeric|phone',
			]);
			$add_user = new User();
			$add_user->surname = $request->get('surname');
			$add_user->name = $request->get('name');
			$add_user->birthday = $request->get('birthday');
			$add_user->phone = $request->get('phone');
			$add_user->email = $request->get('email');
			$add_user->password = $request->get('password');
//			$add_user->balance = $request->get('balance');
			$add_user->comment = $request->get('comment');
			$add_user->code_role = $request->get('code_role');
			$add_user->code_status = $request->get('code_status');
			$add_user->is_send_notifications = ($request->has('is_send_notifications')) ? true : false;
			$add_user->save();
	
			return redirect('admin/users')->with('success', 'Пользователь добавлен');
		}

}
