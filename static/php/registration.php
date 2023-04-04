<?php
session_start();
header('location:login.php');
$con=mysqli_connect('localhost','root','123456');

$name=$_POST['user'];
$pass=$_POST['password'];

$s="select * from userreg where name='$name'";

$result =mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num==1){
    echo "Username already registred";
}
else{
    $reg="insert into userlogin(name,password) values ('$name','$pass')";
    mysqli_query($con,$reg);
    echo "Registration successfull";
}

?>