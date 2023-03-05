<?php
session_start();
$con = mysqli_connect('localhost','root','1234');
mysqli_select_db($con, 'FinalProject');
$StId = $_POST['StId'];
$password = $_POST['pass'];
$s = "select * from SignUp where Username = '$StId' && Password = '$password'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if ($num==1){
    echo 'WELCOME';
} else{
    echo 'Incorrect ID or Password';
}
?>