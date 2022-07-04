<?php
include './DBProperties.php';
$oldpassword = $_POST['oldpassword'];
$newpassword = $_POST['newpassword'];
$confirmpassword = $_POST['confirmpassword'];

if ($con) {
    $query = "update login set password='" . $newpassword . "' where password='" . $oldpassword . "'";
//        echo $query;
    $updatecount = mysqli_query($con, $query);
    if ($updatecount > 0) {
        header('Location:changePassword.php?value=1');
    } else {
        header('Location:changePassword.php?value=2');
    }
}
mysqli_close($con);
?>