<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Requests\UserRequest;
use App\Models\User\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller{
	/**
	 * Show the application admin users.
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function getUsers(){
		$users = User::all();
		return view('admin.users.users', ['users'=>$users]);
	}
	
	
	/**
	 * Show the application admin add users.
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function getAddUser(){
		return view('admin.users.add_user');
	}
	
	
	/**
	 * edit user | give data vuejs
	 *
	 * @param UserRequest $request
	 * @param $id
	 */
	public function postAddUser(UserRequest $request){
		$add_user = new User();
		$add_user->surname = $request->get('surname');
		$add_user->name = $request->get('name');
		$add_user->birthday = $request->get('birthday');
		$add_user->phone = $request->get('phone');
		$add_user->email = $request->get('email');
		$add_user->password = $request->get('password');
		$add_user->comment = $request->get('comment');
		$add_user->code_role = $request->get('code_role');
		$add_user->code_status = $request->get('code_status');
		$add_user->is_send_notifications = ($request->has('is_send_notifications')) ? true : false;
		$add_user->save();
		
		return redirect('admin/users')->with('success', 'Пользователь добавлен');
	}
	
	
	/**
	 * getting user
	 *
	 * @return mixed
	 */
	public function getEditUser($id){
		$user = User::find($id);
		return view('admin.users.edit_user', ['user'=>$user]);
	}
	
	
	/**
	 * edit user
	 *
	 * @param Request $request
	 * @param $id
	 */
	public function postEditUser(Request $request, $id){
		
		$edit_user = User::find($request->id);
		
		if($edit_user->email == request('email')) {
			$this->validate(request(), [
				'name' => 'required',
				'surname' => 'required|',
			]);
		}else
			$this->validate(request(), [
				'name' => 'required',
				'surname' => 'required|',
				'email'=> 'required|email|unique:users,email',
			]);
		$edit_user->surname = $request->get('surname');
		$edit_user->name = $request->get('name');
		$edit_user->birthday = $request->get('birthday');
		$edit_user->phone = $request->get('phone');
		$edit_user->email = $request->get('email');
		$edit_user->balance = $request->get('balance');
		$edit_user->comment = $request->get('comment');
		$edit_user->code_role = $request->get('code_role');
		$edit_user->code_status = $request->get('code_status');
		$edit_user->is_send_notifications = ($request->has('is_send_notifications')) ? true : false;

		$edit_user->save();
		
		return redirect('admin/users')->with('success', 'Пользователь изменен');
	}
	
	
	/**
	 * delete user
	 *
	 * @param $id
	 *
	 * @return mixed
	 */
	public function deleteUser($id){
		$delete = User::whereId($id)->firstOrFail();
		$delete->delete();
		
		return redirect('admin/users')->with('success', 'Пользователь удален');
	}
}
