<!DOCTYPE html>
<html lang="en">
 <head>
   <title>My Bootstrap</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
<body>
<nav class="navbar navbar-inverse">
 <div class="container-fluid">
   <div class="navbar-header">
    <a href="#" class="navbar-brand">WebsiteName</a>
	 <ul class="nav navbar-nav">
	  <li class="active"><a href="#">menue1</a></li>
	  <li><a href="#">menue2</a></li>
	  <li><a href="#">menue3</a></li>
	  <li><a href="#">menue4</a></li>
	 </ul>
   </div>
 </div>
</nav>
<div class="container">
<div class="page-header">
<h1>My 1st Gallery</h1>
<div class="btn-group">
 <button type="button" class="btn btn-primary disabled"> <span class="badge">7</span>Primary</button>
 <button type="button" class="btn btn-primary active">Info </button>
 <div class="btn-group">
 <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
 Small<span class="caret"></span>
 </button>
 <ul class="dropdown-menu" role="menu">
  <li><a href="#">Tablet</a></li>
  <li><a href="#">SmartPhone</a></li>
 </ul>
 </div>
</div>
</div>
<div class="jumbotron">
    <h1>Bootstrap Tutorial</h1> 
<div class="row">
 <div class="col-sm-4">
 <div class="thumbnail">
 <a href="#">
 <img src="test.jpg" alt="my image" style="width:100%">
 <div class="caption"><p>Loren ipsum...</p></div>
 </a>
 </div>
 </div>
 <div class="col-sm-4">
 <div class="thumbnail">
 <a href="#">
  <img src="test.jpg" alt="my new image" style="width:100%">
  <div class="caption"><p>Lorem Ipsum...</p></div>
  </a>
  </div>
  </div>
  <div class="col-sm-4">
   <div class="thumbnail">
    <a href="#">
	 <img src="test.jpg" alt="my image" style="width:100%">
	 <div class="caption"><p>Lorem Ipsum...</p></div>
	</a>
   </div>
  </div>
 </div>
 </div>
 <div class="alert alert-success alert-dismissible fade in">
 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>normal well</div>
<div class="panel-group">
  <div class="panel panel-success">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" href="#collapse1">Collapsible panel</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse">
      <ul class="list-group">
        <li class="list-group-item">One</li>
        <li class="list-group-item">Two</li>
        <li class="list-group-item">Three</li>
      </ul>
      <div class="panel-footer">Panel Footer</div>
    </div>
  </div>
</div> 
 </div>
</body>
</html>

<?php
/*<echo nl2br("You will find the \n newlines in this string \r\n on the browser window.");

$myName = "Ambreen";
echo nl2br("\n");
echo " my name is ".$myName."\n";

$servername = "localhost";
$username = "root";
$password = "";

// MySQLi connecion(object oriented)
 $con = new mysqli($servername, $username, $password);
 
 if($con->connect_error) {
	 echo nl2br("\n");
	 die("Conection Failed" .$con->connect_error);
 }
 echo nl2br("\n");
 echo "Connected Successfully\n"; 
 // MySQLi Connection ( Procedural )
 $con = mysqli_connect($servername, $username, $password);
 if(!$con) {
	die("Connection Failed". mysqli_connect_error()); 
 }
  echo nl2br("\n");
 echo "\nConnected Successfully\n";*/
?>