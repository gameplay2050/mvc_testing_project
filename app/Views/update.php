<?php
    echo view('header');

   

  
    $user_id = $data[0]['id'];
    $first_name = $data[0]['first_name'];
    $last_name = $data[0]['last_name'];
    $email = $data[0]['email'];

    

     //echo base_url('/assets/css/layout.css'); 
?>

<div class="d-flex justify-content-center align-items-center"  style="max-width: 100rem;" >

   <div class="form-row" style="margin-top: 50px; margin-right:25px; float:left">
    
    
	
  <div class="col-14" >
	
  
  
	 <!--- class="card border-primary mb-3" -->
	
		<!-- Card -->
		<div class="col-14">
<div class="card" style="border:3px solid green;">

  <!-- Card body -->
  <div class="card-body">

	<form method="post" action="<?php echo base_url('public/Registration/updatedata')?>">
  <center> <h1>Update User <br/> Form</h1> </center>

  <label class="font-weight-light">ID</label>
	  <div class="form-group">
		<input tabindex="1" type="text" class="form-control" id="user_id" name="user_id" readonly placeholder="User ID" value="<?php echo $user_id?>" required >
      </div>
      

   <label class="font-weight-light">First Name</label>
	  <div class="form-group">
		<input tabindex="1" type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" value="<?php echo $first_name?>"required >
	  </div>
  
    <label class="font-weight-light">Last Name</label>
	  <div class="form-group">
		<input tabindex="2" type="text" class="form-control" id="last_name" name="last_name"placeholder="Last Name" value="<?php echo $last_name?>" required >
	  </div>
  
    
    <label class="font-weight-light">Email</label>
	  <div class="form-group">
		<input tabindex="3" type="text" class="form-control" id="email" name="email" readonly placeholder="Email" value="<?php echo $email?>" required >
	  </div>
  

		 <div class="text-center py-4 mt-3">
        <input class="btn btn-green" name="update" style="font-weight:700;" value="Update User" type="submit"></input>
      </div>
	    </form>
      </div>
  <!-- Card body -->

</div>
</div>
<!-- Card -->
	
	</div>

	</div>
	</div>