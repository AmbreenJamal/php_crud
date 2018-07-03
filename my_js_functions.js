$(document).ready(function(){
 $('#savebtn').click(function(event){
  event.preventDefault();
	  // var form_data =  $(this).serialize();
   alert("button click");
     
   $.ajax({
    url:'saveData.php',
    success:function(response)
    {
	   if (response.success) {
            console.log('Success!');
            console.log(response.data);
		
        } else {
            console.log('Failure!');
            console.log(response.error);
        }
    }
   });
 });
});