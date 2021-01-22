<?php namespace App\Controllers;

class Users extends BaseController
{
	public function index()
	{
		$data['title'] = 'Users';
		$data['table'] = '';
		return view('admin/users/table', $data);
	}

	//--------------------------------------------------------------------

}
