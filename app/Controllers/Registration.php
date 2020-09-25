<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModelUsers;


class Registration extends Controller {

   // view the registration form
    public function index()
	{
		return view('reg_form');
    }
    
   

    public function savedata()
	{
		
        // check the save button pressed

		if($this->request->getPost('save'))
		{
           

            // getting form data
            $data = [

                'first_name' => $this->request->getPost('first_name'),
                'last_name' => $this->request->getPost('last_name'),
                'email' => $this->request->getPost('email'),
                'password' =>12345

            ];
            // create a model
            $new_user = new ModelUsers();

            // pass data to model
           $result= $new_user->saverecord($data);

           if($result == true) {
               $result = 1;
           }
           else if($result == false)
           {
            $result = 0;
           }

           
   
            return redirect()->to(base_url('public/?result='.$result)); 


			
        }
        
	}

}

?>