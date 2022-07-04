<?php
include './DBProperties.php';
$shopnumber = $_POST["snumber"];
$facing = $_POST["facing"];
$sqfeet = $_POST["sqfeet"];
$floor = $_POST["floor"];
$rent = $_POST["rent"];
$advance = $_POST["advance"];
$status='available';
$rand = rand(0, 10000);
if (isset($_POST['btn_upload'])) {
    $img1 = $_FILES["file_img"]["name"];
    $imgtmp1 = $_FILES["file_img"]["tmp_name"];
    $imga = $rand . $img1;
    $path1 = "shops/" . $imga;
    $img2 = $_FILES["file_img1"]["name"];
    $imgtmp2 = $_FILES["file_img1"]["tmp_name"];
    $imgb = $rand . $img2;
    $path2 = "shops/" . $imgb;
    $img3 = $_FILES["file_img2"]["name"];
    $imgtmp3 = $_FILES["file_img2"]["tmp_name"];
    $imgc = $rand . $img3;
    $path3 = "shops/" . $imgc;
    $img4 = $_FILES["file_img3"]["name"];
    $imgtmp4 = $_FILES["file_img3"]["tmp_name"];
    $imgd = $rand . $img4;
    $path4 = "shops/" . $imgd;
    move_uploaded_file($imgtmp1, "shops/" . $imga); //Moving to a Folder
    move_uploaded_file($imgtmp2, "shops/" . $imgb);
    move_uploaded_file($imgtmp3, "shops/" . $imgc);
    move_uploaded_file($imgtmp4, "shops/" . $imgd);
if ($con) {
    try {
        $qry = "insert into shops values(0,'$shopnumber','$facing','$sqfeet','$floor','$rent','$advance','$path1','$path2','$path3','$path4','$status')";
         $count = mysqli_query($con, $qry);
        if ($count > 0) {
            header('Location:AddShop.php?value=1');
        } else {
            header('Location:AddShop.php?value=2');
        }
    } catch (Exception $exc) {
        echo $exc->getTraceAsString();
    }
}
}
?>

