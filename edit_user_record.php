 <?php 
 require_once('config.php');
 include("header.php");
	
if(isset($_GET['id']) && !empty($_GET['id']))
{
		$id =  $_GET['id'];
		$result = User::GetOneUser($id);
		if ($result->num_rows > 0) {
       //output data of each row//
        $row = $result->fetch_assoc();
           } 
		   else {
           return "Zero result";
          }
}
else{
	
	$msg = "ID Not Exist";
	header("location: index.php?msg=$msg");
}		

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
	 PHP FORM
	 </div>
	 <div class="panel-body">
	   <form  class="form-horizontal" method="post" action="update_user.php">
	    <div class="form-group">
		 <label for="name" class="col-sm-2">Name:</label>
		 <div class="col-sm-10">
		  <input type="text" class="form-control" id="name" name="name" value="<?php echo $row["name"];?>">
		 </div>
		</div>
		<div class="form-group">
		 <label for="email" class="col-sm-2"> E-mail:</label>
		 <div class="col-sm-10">
		  <input type="email" class="form-control" id="email" name="email" value="<?php echo $row["email"];?>">
		 </div>
		</div>
		<div class="form-group">
		 <label for="comment" class="col-sm-2">Comments:</label>
		 <div class="col-sm-10">
		 <textarea class="form-control" id="comments" rows="5" name="comments"><?php echo $row["comments"];?></textarea>
		 </div>
		</div>
		<div class="form-group">
		 <label for="comment" class="col-sm-2">Gender:</label>
		 <div class="col-sm-10">
		<?php if($row['gender'] == 'male')
        {
        echo '<label class="radio-inline"><input type="radio" name="optradio" value="male" checked="checked"> Male</label>';
        echo '<label class="radio-inline"><input type="radio" name="optradio" value="female"> Female</label>'; 
         }
       else {
        echo '<label class="radio-inline"><input type="radio" name="optradio" value="male"> Male</label>';
        echo '<label class="radio-inline"><input type="radio" name="optradio" value="female" checked="checked"> Female</label>';
         }
           ?>
		</div>
		</div>
		<div  class="form-group">
		 <div  class="col-sm-2 form-group"></div>
		  <div class="col-sm-10">
		     <input type="hidden" value="<?php echo $row["id"];?>" name="user_id">
		    <input type="submit"  value="Submit"  name="Submit" class="btn btn-info btn-lg"/>
		  </div>
		 </div>
	   </form>
	 </div>
  </div>
<?php include("footer.php"); ?>