<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing connection with server..
$db = mysql_select_db("stepping_stone", $connection); // Selecting Database.
$email=$_POST['email1']; // Fetching Values from URL.
$password= sha1($_POST['password1']); // Password Encryption, If you like you can also leave sha1.
// check if e-mail address syntax is valid or not
 
// Matching user input email and password with stored email and password in database.
$result = mysql_query("SELECT * FROM customer_info WHERE username='$email' AND password='$password'");
$data = mysql_num_rows($result);
if($data==1){
echo "LoginSuccesfull";
}else{
echo "Email or Password is wrong...!!!!";
}
 
mysql_close ($connection); // Connection Closed.
?>