<?php
require_once('config.php');
if(isset($_POST['Submit']))
{
     $name = $_POST['name'];
	 $email = $_POST['email'];
	 $comments = $_POST['comments'];
	 $gender = $_POST['optradio'];
	 $id = $_POST['user_id'];
     $msg = User::UpdateUser($id, $name, $email, $gender, $comments);
	 header("location: index.php?msg=$msg");
	 exit;
}	 
?>