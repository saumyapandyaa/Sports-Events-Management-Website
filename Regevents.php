<?php
session_start();
$con = mysqli_connect('localhost','root','1234');
mysqli_select_db($con, 'FinalProject');
$StId = $_POST['user'];
$s1 = "select * from Football where StudentID='$StId'";
$result = mysqli_query($con, $s1);
$num = mysqli_num_rows($result);
$s2 = "select * from Basketball where StudentID='$StId'";
$result2 = mysqli_query($con, $s2);
$num2 = mysqli_num_rows($result2);
$s3 = "select * from Badminton where StudentID='$StId'";
$result3 = mysqli_query($con, $s3);
$num3 = mysqli_num_rows($result3);

if ($num == 0 && $num2==0 && $num3==0) {
    header('location:noReg.php');
    }
?>
<html>

<head>
    <title>Events</title>
    <link rel="stylesheet" type="text/css" href="registered.css" />
</head>

<body>
    <table align="center" border="1px" style="width:600px; line-height:40px;">
        <tr>
            <th colspan="4">
                <h2>Your Matches for Football</h2>
            </th>
        </tr>
        <t>
            <th> Date </th>
            <th> Time </th>
            <th> Event </th>
            <th> Venue </th>
            </t<>
            <?php
        while($rows=mysqli_fetch_assoc($result))
        {
?>
            <tr>
                <td><?php echo $rows['Date'] ?></td>
                <td><?php echo $rows['Time'] ?></td>
                <td><?php echo 'Football'; ?></td>
                <td><?php echo 'Campus Field house'; ?></td>
            </tr>
            <?php
        }
    ?>
    </table><br><br>
    <table align="center" border="1px" style="width:600px; line-height:40px;">
        <tr>
            <th colspan="4">
                <h2>Your Matches for Basketball</h2>
            </th>
        </tr>
        <t>
            <th> Date </th>
            <th> Time </th>
            <th> Event </th>
            <th> Venue </th>
            </t<>
            <?php
        while($rows=mysqli_fetch_assoc($result2))
        {
?>
            <tr>
                <td><?php echo $rows['Date'] ?></td>
                <td><?php echo $rows['Time'] ?></td>
                <td><?php echo 'Basketball'; ?></td>
                <td><?php echo 'GYM 3'; ?></td>
            </tr>
            <?php
        }
    ?>
    </table><br><br>
    <table align="center" border="1px" style="width:600px; line-height:40px;">
        <tr>
            <th colspan="4">
                <h2>Your Matches for Badminton</h2>
            </th>
        </tr>
        <t>
            <th> Date </th>
            <th> Time </th>
            <th> Event </th>
            <th> Venue </th>
            </t<>
            <?php
        while($rows=mysqli_fetch_assoc($result3))
        {
?>
            <tr>
                <td><?php echo $rows['Date'] ?></td>
                <td><?php echo $rows['Time'] ?></td>
                <td><?php echo 'Badminton'; ?></td>
                <td><?php echo 'GYM 1'; ?></td>
            </tr>
            <?php
        }
    ?>
    </table><br><br>
    <form action="homepage.php">
        <button type="submit" class="dashboard"> Go back to dashboard </button>
    </form>
</body>

</html>