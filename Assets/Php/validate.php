<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <link rel="stylesheet" type="text/css" href="../Style/my-login.css">
    <script>
        function login() {
            Swal.fire(
                'Login Succesfully 😎',
                '',
                'success'
            )
        }
        function failure() {
            Swal.fire(
                'User not found 😕',
                'Kindly Register !',
                'error'
            )
        }
    </script>
    <title>Validation</title>
</head>

<body>
    <?php
    $email = $_POST['email'];
    $upassword = $_POST['password'];
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'kitoutpass';
    $passw = '';
    $mail = '';
    $connection = mysqli_connect($host, $username, $password, $database);
    if (!$connection) {
        die('Connection error: ' . mysqli_connect_error());
    } else {
        $query = "select  `name`,`email`,`password` from `registration` where `email`='$email'";
        $result = mysqli_query($connection, $query);
        if (!$result) {
            die('Query error: ' . mysqli_error($connection));
        } else {
            $row_count = mysqli_num_rows($result);
            $row = mysqli_fetch_assoc($result);
            $mail = $row['email'];
            $passw = $row['password'];
            if (($email == $mail) && ($passw == $upassword)) {
                include '../Sub_Assets/format.html';
                echo '<script type="text/javascript">login();</script>';
            } else {
                include '../Sub_Assets/create.html';
                echo '<script type="text/javascript">failure();</script>';
            }

        }
    }
    ?>
</body>

</html>