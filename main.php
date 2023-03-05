<?php
session_start();
$con = mysqli_connect('localhost','root','1234');
mysqli_select_db($con, 'FinalProject');
$StId = $_POST['user'];
$password = $_POST['pass'];
$s = "select * from SignUp where StudentId = '$StId' && Password = '$password'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if ($num==1){
    header('location:homepage.php');
} else{
    header('location:invalidLog.php');
}
?>