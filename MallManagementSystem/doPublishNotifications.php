<?php
include './DBProperties.php';
$to = $_POST["to"];
$subject = $_POST["subject"];
$date = $_POST["date"];
$rand = rand(0, 10000);
if (isset($_POST['btn_upload'])) {
    $img1 = $_FILES["file_img"]["name"];
    $imgtmp1 = $_FILES["file_img"]["tmp_name"];
    $imga = $rand . $img1;
    $path1 = "Notifications/" . $imga;
    move_uploaded_file($imgtmp1, "Notifications/" . $imga); //Moving to a Folder
    try {
        if ($con) {
            $query = "insert into notifications values(0,'$to','$subject','$date','$path1')";
            $updatecount = mysqli_query($con, $query);
            if ($updatecount > 0) {
                header("Location:PublishNotifications.php?value=1");
            } else {
                header("Location:PublishNotifications.php?value=2");
            }
        }
    } catch (Exception $exc) {
        echo $exc->getTraceAsString();
    }
}
mysqli_close($con);
?>

