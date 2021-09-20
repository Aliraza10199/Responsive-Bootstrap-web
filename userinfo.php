<?php
// server connection
$con= mysqli_connect('localhost','root','','myyoutubewebsite','3306');

if($con)
{
	echo "connection successful";
}else{
	echo "no connection";
}


//connection to your database in server
mysqli_select_db($con, 'youtubeuserdata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = "insert into userinfodata (user,email,mobile,comment)
values ('$user','$email','$mobile','$comment')";

mysqli_query($con,$query);

echo"$query";

header('location:index.php');
  ?>