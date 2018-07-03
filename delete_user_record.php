<?php
require_once('config.php');

if(isset($_GET['id'])&& !empty($_GET['id']))
{
	 $id = $_GET['id'];
     $msg = User::DeleteUser($id);
	 header("location: index.php?msg=$msg");
}
else{
	
	$msg = "ID Not Exist";
	header("location: index.php?msg=$msg");
}
?>