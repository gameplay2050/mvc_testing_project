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

    public function updatedata()
	{
		
        // check the save button pressed

		if($this->request->getPost('update'))
		{
            

            // getting form data
            $data = [

                'first_name' => $this->request->getPost('first_name'),
                'last_name' => $this->request->getPost('last_name'),
                'email' => $this->request->getPost('email'),
                'password' =>12345,

            ];

           

            
            $user_id = $this->request->getPost('user_id');

            // create a model
            $update_user = new ModelUsers();

            // pass data to model
           $result= $update_user->updaterecord($data, $user_id);


            return redirect()->to(base_url('public/?result='.$result)); 


			
        }
        
    }
    
    public function delete_data($id){

        $data = [

            'id' => $id
        ];

        // create a model
        $delete_user = new ModelUsers();

        // pass data to model
        $result = $delete_user->deleterecord($data);
        return redirect()->to(base_url('public/?result='.$result)); 
    }

    public function getUserInfo($id){

        $data = [

            'id' => $id
        ];

        // create a model
        $get_user_data = new ModelUsers();

        // pass data to model
        $result = [

            'data' => $get_user_data->getspecificrecord($data),

        ];

        return view('update',$result); 
    }
}

?>