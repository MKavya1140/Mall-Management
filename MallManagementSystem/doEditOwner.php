<?php
    include './DBProperties.php';
    $shopnumber=$_POST['shopnumber'];
    $category=$_POST['category'];
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $password=$_POST['password'];
    
    if($con){
        $qry="update owner set shopnumber='$shopnumber', category='$category', name='$name', mobile='$mobile',address='$address',password='$password' where email='$email'";
        $count=mysqli_query($con, $qry);
        if($count>0){
            header('Location:EditOwner.php');
        }else{
            header('Location:EditOwner.php');
        }
    }
?>
