<?php
session_start();
include './DBProperties.php';
$subject = $_POST["subject"];
$date = $_POST["date"];
$userid=$_SESSION['userid'];
$qry2="select * from owner where email='$userid'";
$result=mysqli_query($con, $qry2);
while($row=  mysqli_fetch_assoc($result)){
    $shopno=$row['shopnumber'];
}
$rand = rand(0, 10000);
if (isset($_POST['btn_upload'])) {
    $img1 = $_FILES["file_img"]["name"];
    $imgtmp1 = $_FILES["file_img"]["tmp_name"];
    $imga = $rand . $img1;
    $path1 = "Notifications/" . $imga;
    move_uploaded_file($imgtmp1, "Notifications/" . $imga); //Moving to a Folder
    try {
        if ($con) {
            $query = "insert into shopnotifications values(0,'$subject','$date','$path1','$shopno')";
            $updatecount = mysqli_query($con, $query);
            if ($updatecount > 0) {
                header("Location:ShopNotifications.php?value=1");
                } else {
                    header("Location:ShopNotifications.php?value=2");
                }
        }
    } catch (Exception $exc) {
        echo $exc->getTraceAsString();
    }
}
mysqli_close($con);
?>

