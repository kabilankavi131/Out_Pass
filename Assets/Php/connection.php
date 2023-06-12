<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <link rel="stylesheet" type="text/css" href="css/my-login.cs">
    <script>
        function register() {
            Swal.fire(
                'Registered Succesfully',
                '🤩',
                'success'
            )
        }
        function failure() {
            Swal.fire(
                'Use Different Mail Id !',
                'Mail Already In Use 😐',
                'info'
            )
        }
    </script>
    <title>Validation</title>
</head>
<body>
<?php
$uname=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$con=mysqli_connect("localhost","root","","kitoutpass");
$query="insert into `registration` values('$uname','$email','$password')";
try{
$execution=mysqli_query($con,$query);
if($execution){
   // echo __DIR__;
    include 'C:\xampp\htdocs\Hostel_Pass\index.html';
    echo '<script type="text/javascript">register();</script>';
}
}
catch(Exception $e){
    echo '<script type="text/javascript">failure();</script>';
}
?>
</body>
</html>