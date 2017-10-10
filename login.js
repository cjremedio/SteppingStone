$(document).ready(function(){
$("#login").click(function(){
var email = $("#uname").val();
var password = $("#pswd").val();
// Checking for blank fields.
if( email =='' || password ==''){
$('input[type="text"],input[type="password"]').css("border","2px solid red");
$('input[type="text"],input[type="password"]').css("box-shadow","0 0 3px red");
alert("Please fill all fields...!!!!!!");
}else {
$.post("login.php",{ email1: email, password1:password},
function(data) {
if(data=='Invalid Email.......') {
$('input[type="text"]').css({"border":"2px solid red","box-shadow":"0 0 3px red"});
$('input[type="password"]').css({"border":"2px solid #00F5FF","box-shadow":"0 0 5px #00F5FF"});
alert(data);
}else if(data=='Email or Password is wrong...!!!!'){
$('input[type="text"],input[type="password"]').css({"border":"2px solid red","box-shadow":"0 0 3px red"});
alert(data);
} else if(data=='LoginSuccesfull'){
window.location.href='homepage.html';

alert(data);
} else{
alert(data);
}
});
}
});
});