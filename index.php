<?php
require_once('config.php');

	 $result = User::GetAllUsers();

		 include("header.php");
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
	    <th>ID</th>
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
           echo "<tr><td>".$row["id"]."</td><td>". $row["name"]."</td>"."<td>".$row["email"]."</td>"."<td>". $row["gender"]."</td>"."<td>".$row["comments"]."</td>"."<td>"?>
		   <a href="edit_user_record.php?id=<?php echo $row["id"];?>" >edit</a><a href="delete_user_record.php?id=<?php echo $row["id"]; ?>" >/delete</a> </td></tr>          
		   <?php
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
<?php require_once("footer.php");