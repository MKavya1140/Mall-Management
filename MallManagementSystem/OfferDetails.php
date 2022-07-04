<?php include './header.php'; ?>
<?php
$sno = $_GET['sno'];
include './DBProperties.php';
if ($con) {
    $qry = "SELECT * FROM `offers` where sno=$sno";
    $result = mysqli_query($con, $qry);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <div style="width: 40%;height: 400px;margin-top: 2%;margin-left: 1%;">
                <img src="<?php echo $row['photo']; ?>" style="width: 110%;height: 400px;">
                <div style="margin-left: 120%;text-align: center;margin-top: -65%;width: 100%;">
                    <h3 style="color: red;font-weight: bold;">Offers in Shop Number <?php echo $row['shopnumber']; ?></h3>
                    <table class="table  table-hover" style="width: 100%;margin-top: 5%;margin-left: 8%;">
                        <tr><th>Shop Number</th><td><?php echo $row['shopnumber']; ?></td></tr>
                        <tr><th>Shop Name</th><td><?php echo $row['shopname']; ?></td></tr>
                        <tr><th>Floor</th><td><?php echo $row['floor']; ?></td></tr>
                        <tr><th>Offer</th><td><?php echo $row['description']; ?></td></tr>
                        <tr><th>Offer Start Date</th><td><?php echo $row['fromdate']; ?></td></tr>
                        <tr><th>Offer End Date</th><td><?php echo $row['todate']; ?></td></tr>
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