<?php
session_start();
$con = mysqli_connect('localhost','root','1234');
mysqli_select_db($con, 'FinalProject');
$date = "2022/11/29";
$name = $_POST['Name'];
$StId = $_POST['StId'];
$Gender = $_POST['gen'];
$YoS = $_POST['YoS'];
$time = $_POST['time'];
$s1 = "select * from Football where StudentID = '$StId'";
$result = mysqli_query($con, $s1);
$num = mysqli_num_rows($result);
if ($num == 1 ) {
    header('location:alreadyAdded.php');
} else{
    $reg = "insert into Football(Date, Time, Name, StudentID, Gender, YoS) values ('$date','$time','$name','$StId','$Gender','$YoS')";
    mysqli_query($con, $reg);
    header('location:registeredEvent.php');
}
?>