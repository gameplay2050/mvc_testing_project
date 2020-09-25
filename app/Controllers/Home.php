<?php namespace App\Controllers;

use App\Models\ModelUsers;

class Home extends BaseController
{
	public function index()
	{
		 // create a model
		 $view_user = new ModelUsers();
		
		 $data = [

			'listusers' => $view_user->getrecord()

		 ];



		return view('view', $data);
	}

	//--------------------------------------------------------------------

}
