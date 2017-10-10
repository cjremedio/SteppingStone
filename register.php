<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing connection with server..
$db = mysql_select_db("stepping_stone", $connection); // Selecting Database.
$name=$_POST['name1']; // Fetching Values from URL.
$username=$_POST['username1'];
$email=$_POST['email1'];
$password= sha1($_POST['password1']); // Password Encryption, If you like you can also leave sha1.
// Check if e-mail address syntax is valid or not
$email = filter_var($email, FILTER_SANITIZE_EMAIL); // Sanitizing email(Remove unexpected symbol like <,>,?,#,!, etc.)
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo "Invalid Email.......";
}else{
$result = mysql_query("SELECT * FROM customer_info WHERE email='$email'");
$data = mysql_num_rows($result);
if(($data)==0){
$query = mysql_query("insert into customer_info(child_name, email,username, password) values ('$name', '$email','$username', '$password')"); // Insert query
if($query){
echo "You have Successfully Registered.....";
}else
{
echo "Error....!!";
}
}else{
echo "This email is already registered, Please try another email...";
}
}
mysql_close ($connection);
?>