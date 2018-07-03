<?php
require_once('config.php');

	 $result = User::GetAllUsers();

?>

<!DOCTYPE html>
<html lang="en">
 <head>
  <title>User Record</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="my_js_functions.js"></script>
  </head>
<body>
  <div class="container">
    <div class="page-header">
	 <h1>PHP and BOOTSTRAP practice</h1>
	   <ul class="nav nav-pills">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="add_new_user.php">Add New User</a></li>
        <li><a href="#">Menu 2</a></li>
        <li><a href="#">Menu 3</a></li>
       </ul>
	</div>
	
		 <?php 
		 $msg = '';
		 if(!empty($_GET['msg'])){
			 ?>
	         <div class="alert alert-success alert-dismissible">
             <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <strong>Seccess! </strong><?php echo $_GET['msg'];?>
             </div>
		  <?php 
			 }
		  ?>

  <div class="panel panel-default">
     <div class="panel-heading">
	 All Users Record
	 </div>
	 <div class="panel-body">
	    <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>E-mail</th>
        <th>Gender</th>
		<th>Message</th>
		<th>Action</th>
      </tr>
    </thead>
    <tbody>
		<?php  if ($result->num_rows > 0) {
       //output data of each row//
           while($row = $result->fetch_assoc()) {
           echo "<tr><td>". $row["name"]."</td>"."<td>".$row["email"]."</td>"."<td>". $row["gender"]."</td>"."<td>".$row["comments"]."</td>"."<td> edit/delete </td></tr>";           
		   }		   
           } 
		   else {
           return "Zero result";
          }
      ?>

    </tbody>
  </table>
	 </div>
  </div>
 </div>  
  <footer class="container-fluid text-center">
  <p>Footer Text</p>
  </footer>
</body>
</html>