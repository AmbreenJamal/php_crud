<?php
require_once('database_conect.php');
class   User  extends Database {
	
public static function SaveUser($name,$email,$comments,$gender) {

$user_id = SELF::insert_user_query("INSERT INTO personal_detail (name,email,comments,gender)  VALUES ('$name','$email','$comments','$gender')");

return   $user_id;
}
public static function GetAllUsers() {

return $result = SELF::Get_All_Users("SELECT * FROM personal_detail");


}
public static function GetOneUser($id) {

return $result = SELF::Get_One_User("SELECT * FROM personal_detail where id = $id");


}
public static function UpdateUser($id, $name, $email, $gender, $comments){

return $result = SELF::Update_User("UPDATE personal_detail SET name='$name', email = '$email', gender = '$gender', comments = '$comments' WHERE id = '$id' ");

}
public static function DeleteUser($id){

return $result = SELF::Delete_User("DELETE FROM personal_detail where id = $id");
}
}
?>