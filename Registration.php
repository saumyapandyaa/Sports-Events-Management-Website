<?php
session_start();
$con = mysqli_connect('localhost','root','1234');
mysqli_select_db($con, 'FinalProject');
$First = $_POST['FName'];
$Last = $_POST['LName'];
$StId = $_POST['StId'];
$password = $_POST['pass'];
$emailaddress = $_POST['email'];
$s1 = "select * from SignUp where StudentID = '$StId'";
$result = mysqli_query($con, $s1);
$num = mysqli_num_rows($result);
if ($num == 1 ) {
    if ($num==1) {
    echo" ID already registered ";
    } else {
        echo" Username already registered! ";
    }
} else{
    $reg = "insert into SignUp(FName, LName, StudentID, Password, Email) values ('$First','$Last','$StId','$password','$emailaddress')";
    mysqli_query($con, $reg);
    header('location:validReg.php');
}
?>