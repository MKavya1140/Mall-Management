<?php
    include './DBProperties.php';
    $email=$_GET["email"];
    if($con){
        $qry="Update owner set status='Deleted' where email='$email'";
        $count=mysqli_query($con, $qry);
        if($count>0){
            header('Location:EditOwner.php');
        }else{
            header('Location:EditOwner.php');
        }
    }
?>

