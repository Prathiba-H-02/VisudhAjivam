<?php
#$dbc=mysqli_connect('localhost', 'root', 'root', 'userdata');
$con=mysqli_connect('localhost:3307','root');
if($con){
	echo "successful connection\n";
}
else{
	echo "failed";
}
mysqli_select_db($con,'userdata');

$user=$_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comments=$_POST['comments'];

$query="insert into usertab (user,email,mobile,comment)
values ('$user','$email','$mobile','$comments')";


mysqli_query($con,$query);

#echo "$query";
echo "\n\n Your data is saved";
#header('location:index.php');
?>