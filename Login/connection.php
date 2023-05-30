<?php
$uname=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$con=mysqli_connect("localhost","root","","kitoutpass");
$query="insert into `registration` values('$uname','$email','$password')";
mysqli_query($con,$query);
$data="select * from registration";
$execution=mysqli_query($con,$data);
if($execution){
    include 'index.html';
}
?>