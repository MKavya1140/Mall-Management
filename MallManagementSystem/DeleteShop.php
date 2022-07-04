<?php
    include './DBProperties.php';
    $shopnum=$_GET["shno"];
    if($con){
        $qry="Delete from shops where shopnumber='$shopnum'";
        $count=mysqli_query($con, $qry);
        if($count>0){
            header('Location:EditShops.php');
        }else{
            header('Location:EditShops.php');
        }
    }
?>