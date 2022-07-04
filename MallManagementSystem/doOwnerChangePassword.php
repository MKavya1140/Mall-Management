<?php
session_start();
include './DBProperties.php';
$oldpassword = $_POST['oldpassword'];
$newpassword = $_POST['newpassword'];
$confirmpassword = $_POST['confirmpassword'];
$userid=$_SESSION['userid'];
echo $userid;

if ($con) {
    $query = "update login set password='" . $newpassword . "' where userid='$userid' and  password='" . $oldpassword . "'";
//        echo $query;
    $updatecount = mysqli_query($con, $query);
    if ($updatecount > 0) {
        $query1 = "update owner set password='$newpassword' where email='$userid' and password='$oldpassword'";
        $count2=mysqli_query($con, $query1);
        if($count2>0){
        header('Location:OwnerChangepwd.php?value=1');
    } else {
        header('Location:OwnerChangepwd.php?value=2');
    }
}
}
mysqli_close($con);
?>
