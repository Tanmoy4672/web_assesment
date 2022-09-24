<?php

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['userName'])) {
    header("Location: profile.php");
}
//01714433911
if (isset($_POST['login'])) {

    $userName = $_POST['userName'];
    $userPass = $_POST['userPass'];


    $sql = "select *from users where name = '$userName' and password = '$userPass'";
    $result = mysqli_query($mysqli, $sql);
    
    /*
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
*/
    if ($result->num_rows >0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['userName'] =  $row['userName'];
        header("Location: profile.php");
    } else {

        echo "<script>alert('Email or password is not match')</script>";
    }
}
?>
<html>

<head>
    <title>Log in</title>
</head>

<body>
</body>

</html>