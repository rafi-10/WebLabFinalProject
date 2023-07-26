<?php
include 'config.php';

$r_username = $_POST['r_username'];
$r_email = $_POST['r_email'];
$r_mobile = $_POST['r_mobile'];
$r_pass = $_POST['r_pass'];
$r_con_pass = $_POST['r_con_pass'];

$username_pattern = "/[A-za-z ._]{3,30}/";
$mobile_pattern = "/(\+88)?-?01[3-9]\d{8}/";
$email_pattern = "/(cse|eee|ce|bba|law|ban|is|eng|thm|acc)_[0-9]+@lus\.ac\.bd/";
$pass_pattern = "/((?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[!@#$%&*_><])).{6,20}/";

$insertQurey = "INSERT INTO `register`(`username`, `email`, `pass`, `mobile`) VALUES ('$r_username','$r_email','$r_pass','$r_mobile')";


$duplicateUsernameQuery = "SELECT * FROM `register` WHERE username= '$r_username'";
$duplicate_username = mysqli_query($conn, $duplicateUsernameQuery);

if (mysqli_num_rows($duplicate_username) > 0) {
    echo "<script>alert('This Username already taken !!')</script>";
    echo "<script> location.href = 'register.php'</script>";

} else if (!preg_match($username_pattern, $r_username)) {
    echo "<script>alert('Invalide Username !!')</script>";
    echo "<script> location.href = 'register.php'</script>";
} else if (!preg_match($email_pattern, $r_email)) {
    echo "<script>alert('Invalide Email !!')</script>";
    echo "<script> location.href = 'register.php'</script>";
} else if (!preg_match($mobile_pattern, $r_mobile)) {
    echo "<script>alert('Invalide Mobile Number !!')</script>";
    echo "<script> location.href = 'register.php'</script>";
} else if (!preg_match($pass_pattern, $r_pass)) {
    echo "<script>alert('Invalide Password  !!')</script>";
    echo "<script> location.href = 'register.php'</script>";
} else if ($r_pass !== $r_con_pass) {
    echo "<script>alert('Password and Confirm password are not matched !!')</script>";
    echo "<script> location.href = 'register.php'</script>";
} else {
    if (!mysqli_query($conn, $insertQurey)) {
        echo "<script>alert('Not Registerd !!')</script>";
        echo "<script> location.href = 'register.php'</script>";
    } else {
        echo "<script>alert('Successfully Registerd !!')</script>";
        echo "<script> location.href = 'login.php'</script>";
    }
}