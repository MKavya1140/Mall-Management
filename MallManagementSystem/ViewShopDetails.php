<?php include './header.php'; ?>
<?php
$shopno = $_GET['shopno'];
include './DBProperties.php';
if ($con) {
$qry2="select * from shops where shopnumber='$shopno'";
    $result=mysqli_query($con, $qry2);
    while($row=  mysqli_fetch_assoc($result)){
        $photo=$row['photo'];
    }
    $qry = "SELECT * FROM `owner` where shopnumber=$shopno";
    $result = mysqli_query($con, $qry);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <div style="width: 40%;height: 400px;margin-top: 2%;margin-left: 1%;">
                <img src="<?php echo $photo; ?>" style="width: 110%;height: 400px;">
                <div style="margin-left: 120%;text-align: center;margin-top: -65%;width: 100%;">
                    <h3 style="color: red;font-weight: bold;">View Shop</h3>
                    <table class="table  table-hover" style="width: 100%;margin-top: 5%;margin-left: 8%;">
                        <tr><th>Shop Number</th><td><?php echo $row['shopnumber']; ?></td></tr>
                        <tr><th>Category</th><td><?php echo $row['category']; ?></td></tr>
                        <tr><th>Shop Name</th><td><?php echo $row['name']; ?></td></tr>
                        <tr><th>Floor</th><td><?php echo $row['floor']; ?></td></tr>
                        <tr><th>Address</th><td><?php echo $row['address']; ?></td></tr>
                        <tr><th>Mobile</th><td><?php echo $row['mobile']; ?></td></tr>
                        
                    </table>
                </div>
            </div>
            <?php
        }
    }
}
?>