<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <link rel="stylesheet" type="text/css" href="css/my-login.cs">
    <script>
        function login() {
            Swal.fire("Log in successfull");
        }
        function failure() {
            Swal.fire("User Not Found :(");
        }
    </script>
    <title>Validation</title>
</head>

<body>
    <?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mysqli = new mysqli("localhost", "root", "", "kitoutpass");
    $name = "select  `name` from `registration` where `email`='$email'";
    $result = $mysqli->query($name);
    if (mysqli_num_rows($result) == 1) {
        while ($row = $result->fetch_assoc()) {
            $user = $row['name'];
            echo '<script type="text/javascript">login();</script>';
        }
    } else {
        include 'register.html';
    }
    echo '<script type="text/javascript">failure();</script>';
    ?>
</body>

</html>