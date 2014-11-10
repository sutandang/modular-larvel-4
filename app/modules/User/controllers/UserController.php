<?php namespace App\Modules\User\Controllers;
use App\Modules\User\Models\Users;
use Controller, View;
 
class UserController extends Controller {
	public function getIndex()
	{
		$data['title'] 	= 'nyoban';
		$data['users']	= Users::all();
	
		return View::make('User::userlist',$data);
	}
}