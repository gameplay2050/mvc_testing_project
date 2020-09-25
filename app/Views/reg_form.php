<?php
    echo view('header');

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

	<form method="post" action="savedata">
  <center> <h1>New User <br/> Form</h1> </center>
   <label class="font-weight-light">First Name</label>
	  <div class="form-group">
		<input tabindex="1" type="text" class="form-control" id="first_name" name="first_name"placeholder="First Name" required >
	  </div>
  
    <label class="font-weight-light">Last Name</label>
	  <div class="form-group">
		<input tabindex="2" type="text" class="form-control" id="last_name" name="last_name"placeholder="Last Name" required >
	  </div>
  
    
    <label class="font-weight-light">Email</label>
	  <div class="form-group">
		<input tabindex="3" type="text" class="form-control" id="email" name="email"placeholder="Email" required >
	  </div>
  

		 <div class="text-center py-4 mt-3">
        <input class="btn btn-green" name="save" style="font-weight:700;" value="Add User" type="submit"></input>
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