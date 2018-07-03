<?php
require_once('config.php');
if(isset($_POST['Submit']))
{
     $name = $_POST['name']."<br/>";
	 $email = $_POST['email']."<br/>";
	 $comments = $_POST['comments']."<br/>";
	 $gender = $_POST['optradio']."<br/>";
     $myid = User::SaveUser($name,$email,$comments,$gender);
	 $msg= "Record Added Successfully!";
	//$url = 'http://localhost/test/display_all_users.php?result=' . urlencode(serialize($result));
    //header("Location: $url");
	header("Location:http://localhost/test/add_new_user.php?user_id=$myid&msg=$msg");
	exit;
}
?>