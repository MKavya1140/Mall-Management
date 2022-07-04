<?php
session_start();
include './DBProperties.php';
$userid = $_POST["userid"];
$_SESSION['userid'] = $userid;
$password = $_POST["password"];
if ($con) {
    $qry = "select * from login where userid='$userid' and password='$password'";
    echo $qry;
    $result = mysqli_query($con, $qry);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $desig = $row['desig'];
            echo $desig;
            if ($desig == 'owner') {
                header('Location:ShopOwnerHome.php');
            } else if ($desig == 'admin') {
                header('Location:AdminHome.php');
            } else {
                header('Location:signin.php?value=2');
            }
        }
    } else {
        header('Location:signin.php?value=2');
    }
}
?>