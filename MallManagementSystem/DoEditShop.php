<?php
        include './DBProperties.php';
        $snumber=$_POST["snumber"];
        $facing=$_POST["facing"];
        $sqfeet=$_POST["sqfeet"];
        $floor=$_POST["floor"];
        $rent=$_POST["rent"];
        $advance=$_POST["advance"];
        if($con){
            $qry="Update shops set facing='$facing',sqfeet='$sqfeet',floor='$floor',rent='$rent',advance='$advance' where shopnumber='$snumber'";
            $count=mysqli_query($con, $qry);
            if($count>0){
                header('Location:EditShops.php');
            }else{
                header('Location:editShop.php');
            }
        }
        
?>