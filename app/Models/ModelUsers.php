<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUsers extends Model {

    // connect with db
    function __construct() {
       $this->db = db_connect();
       
        }

        function checkEmail($email) {
            
        $query_1 = $this->db->table('users')->where(array('email'=>$email));

        if ($query_1->countAllResults() > 0){
            return true;
        }
        else{
            return false;
        }

        return false;
    }

    // store data to the database
    function saverecord($data) {
        
        $query =  $this->checkEmail($data['email']);

        if($query == true)
        {
            return true;
        }
        else
        {
            $this->db->table('users')->insert($data);

            return false;
        }

        
    }

    function getrecord() {
        
        $query = $this->db->table('users')->get();

        return $query->getResult();
    }

    function getspecificrecord($data) {
        
        $query = $this->db->table('users')->getWhere($data);

        return $query->getResultArray();
    }


    function deleterecord($data) {
        
        $this->db->table('users')->delete($data);

        return 2;
    }


    // store data to the database
    function updaterecord($data, $id) {
      
        $this->db->table('users')->update($data,array('id'=>$id));
        return 3;
        
    }

    

}

?>