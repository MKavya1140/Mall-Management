<?php
session_start();
include './csslinks.php';
include './ShopOwnerHeader.php';
include './DBProperties.php';
$userid = $_SESSION['userid'];
if ($con) {
    $qry = "select * from owner where email='$userid'";
    $result = mysqli_query($con, $qry);
    while ($row = mysqli_fetch_assoc($result)) {
        $enddate = $row['enddate'];
        $date = date('Y-m-d');
        $date1 = date('Y-m-d', strtotime("-30 days", strtotime($enddate))) . "\n";
        if (strtotime($date) == strtotime($date1)) {
            
            $to = $userid;
            $subject = 'Expiry of Agreement';
            $message = 'Your Agreement will expire in a month.Please Renewal it';
            $headers = 'From: kavyamaddikunta1995@gmail.com' . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();
            if (mail($to, $subject, $message, $headers)) {
                $to1 = 'mallowner09@gmail.com';
                $subject1 = 'Expiry of Agreement';
                $message1 = $userid . '  Agreement will expire in a month.';
                $headers1 = 'From: kavyamaddikunta1995@gmail.com' . "\r\n" .
                        'X-Mailer: PHP/' . phpversion();
                mail($to1, $subject1, $message1, $headers1);
            } else {
                echo 'Problem Occured';
            }
        } 
    }
}
?>
<div>
    <img src="images/1.jpg" style="width: 100%;max-height: 806px;">
    <h2 style="margin-top: -40%;color: #FFF;margin-left: 30%;font-size: 80px;font-weight: bold;">Welcome</h2>
</div>
