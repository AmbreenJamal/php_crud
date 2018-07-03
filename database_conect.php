<?php 
class Database {
	
	public static $host = "localhost";
	public static $dbname = "userdata";
	public static $password = "";
	public static $username = "root";
	
	public static function connect(){
       $conn = new mysqli(self::$host, self::$username, self::$password, self::$dbname);
       // Check connection
      if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
      }   
      else
	  {
		 return $conn;
	}
}
	public static function insert_user_query($query){
		$stmt = self::connect();
        if (mysqli_query($stmt, $query)) {
        $last_id = mysqli_insert_id($stmt);
          echo "New record created successfully. Last inserted ID is: " . $last_id;
          } else {
                echo "Error: " . $query . "<br>" . mysqli_error($stmt);
                 }
	     }
	public static function Get_All_Users($query){
		$stmt = self::connect();
       return  $result = $stmt->query($query);	
	 }
	 public static function Get_One_User($query)
	 {
		$stmt = self::connect();
       return  $result = $stmt->query($query); 
			
	 }
  public static function  Update_User($query){
	       $stmt = self::connect();
            if (mysqli_query($stmt, $query)) {
             return "Record updated successfully";
               }else {
              return "Error updating record: " . mysqli_error($stmt);
         }
 }
	 public static function Delete_User($query){
		$stmt = self::connect();
		if (mysqli_query($stmt, $query)) {
          return  "Record deleted successfully";
         } else {
           return "Error deleting record: " . mysqli_error($stmt);
           }
	 }
}

?>