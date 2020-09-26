<?php
    echo view('header');

    if(isset($_GET['result']))
    {
  if($_GET['result'] == 1)
  {
      $result = "Email already exits.";

      echo ' <br/> <center> <h3 style="color:red; background:silver; width:100%;">' . $result . '</h3> </center>';
  }
  if($_GET['result'] == 0)
  {
    $result = "Record Saved.";

    echo ' <br/> <center> <h3 style="color:green; background:silver; width:100%;">' . $result . '</h3> </center>';
  }

  if($_GET['result'] == 2)
  {
      $result = "Record Deleted.";

      echo ' <br/> <center> <h3 style="color:green; background:silver; width:100%;">' . $result . '</h3> </center>';
  }

  if($_GET['result'] == 3)
  {
      $result = "Record Updated.";

      echo ' <br/> <center> <h3 style="color:green; background:silver; width:100%;">' . $result . '</h3> </center>';
  }

}
?>

<br/>

<center> <h1>List of Users</h1> </center>

<table id="dtHorizontalExample" class="table table-striped table-bordered table-sm"  cellspacing="0" width="100%">
    <thead>
    <tr>
    <th class="th-sm">User ID</th>
    <th class="th-sm">First Name</th>
    <th class="th-sm">Last Name</th>
    <th class="th-sm">Email</th>
    <th class="th-sm">Delete</th>
    <th class="th-sm">Update</th>
    </tr>
    </thead>
    <tbody>
    <?php 
       foreach($listusers as $display) { 
    ?>

        <tr>
        <th class="th-sm"><?php echo $display->id;?></th>
        <th class="th-sm"><?php echo $display->first_name;?></th>
        <th class="th-sm"><?php echo $display->last_name;?></th>
        <th class="th-sm"><?php echo $display->email;?></th>
        <th class="th-sm"> <a href="Registration/delete_data/<?php echo $display->id;?>"> Delete </a></th>
        <th class="th-sm"> <a href="Registration/getUserInfo/<?php echo $display->id;?>"> Update </a></th>
        </tr>

    <?php 
       }
    ?>
    </tbody>

</table>

<script>
$(document).ready(function () {
$('#dtHorizontalExample').DataTable({
"scrollX": true,
});



});


</script>