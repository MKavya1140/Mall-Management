<?php
include './DBProperties.php';
$shopnumber = $_POST["snumber"];
$category = $_POST["category"];
$name = $_POST["name"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$address = $_POST["address"];
$password = $_POST["password"];
$startdate = $_POST["stdate"];
$enddate = $_POST["enddate"];
$status = 'Allocated';
$rand = rand(0, 10000);
if (isset($_POST['btn_upload'])) {
    $img1 = $_FILES["file_img"]["name"];
    $imgtmp1 = $_FILES["file_img"]["tmp_name"];
    $imga = $rand . $img1;
    $path1 = "Agreement/" . $imga;
    move_uploaded_file($imgtmp1, "Agreement/" . $imga); //Moving to a Folder
    try {
        if ($con) {
            $qry1="select * from shops where shopnumber='$shopnumber'";
            $result=mysqli_query($con, $qry1);
            while($row=  mysqli_fetch_assoc($result)){
                $floor=$row['floor'];
            }
            $query = "insert into owner values(0,'$shopnumber','$category','$name','$mobile','$email','$address','$password','$path1','$startdate','$enddate','$floor','$status')";
            $updatecount = mysqli_query($con, $query);
            if ($updatecount > 0) {
                $qry = "update shops set status='Leased' where shopnumber='$shopnumber'";
                $count = mysqli_query($con, $qry);
                if ($count > 0) {
                    $qry="insert into login values(0,'$email','$password','owner')";
                    $count2=mysqli_query($con, $qry);
                    if($count2>0){
                    header("Location:AddOwner.php?value=1");
                } else {
                    header("Location:AddOwner.php?value=2");
                }
            } else {
                header("Location:AddOwner.php?value=2");
            }
        }
        }
    } catch (Exception $exc) {
        echo $exc->getTraceAsString();
    }
}

mysqli_close($con);
?>

