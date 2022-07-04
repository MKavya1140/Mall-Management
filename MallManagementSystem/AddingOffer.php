<?php
    session_start();
    include './DBProperties.php';
    $description=$_POST['offerdescription'];
    $fromdate=$_POST['fromdate'];
    $todate=$_POST['todate'];
    $userid=$_SESSION['userid'];
    echo $userid;
    if($con){
        $qry="select * from owner where email='$userid'";
        $result=mysqli_query($con, $qry);
        while($row=mysqli_fetch_assoc($result)){
            $shopnumber=$row['shopnumber'];
            echo $shopnumber;
            $category=$row['category'];
            echo $category;
            $name=$row['name'];
            echo $name;
            $mobile=$row['mobile'];
            echo $mobile;
            $address=$row['address'];
            echo $address;
            $qry2="select * from shops where shopnumber=$shopnumber";
            $result2=mysqli_query($con, $qry2);
            while($row1=  mysqli_fetch_assoc($result2)){
                $floor=$row1['floor'];
                echo $floor;
                $photo=$row1['photo'];
                echo $photo;
             $qry3="insert into offers values(0,'$userid',$shopnumber,'$category','$name','$mobile','$address',$floor,'$photo','$description','$fromdate','$todate')";
             $count=mysqli_query($con, $qry3);
             if($count>0){
                 header('Location:AddOffer.php?value=1');
             }else{
                 header('Location:AddOffer.php?value=2');
             }
            }
        }
    }
?>
