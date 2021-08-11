<?php

$con = mysqli_connect('localhost','root','9007');

  if ($con) {
    echo "Conneection sucessfull";
  }
  else {
    echo "Not connected";
  }

mysqli_select_db($con,'freedata');
$user = $_POST['user'];
$email =$_POST['Email'];
$mobile =$_POST['Mobile'];
$comment =$_POST['comment'];
$query ="insert into userinfodata(user,Email,Mobile,comment) values ('$user','$email','$mobile','$comment')";
 mysqli_query($con,$query);
 echo "$query";

















 ?>
