<?php include './header.php'; ?>
<head>

    <style>
        /*            ul {
                        list-style-type: none;
                        margin-top:  -2.1%;
                        padding: 0;
                        overflow: hidden;
                        background-color: #333;
                        height: 50px;
                    }
        
                    li {
                        float: left;
                    }
        
                    li a {
                        display: block;
                        color: #FFF;
                        text-align: center;
                        padding: 8px 85px;
                        text-decoration: none;
                    }
        
        */            li a:hover {
            /*background-color: #FFF;*/
            height: 50px;
            text-decoration: none;
            color: #fff;

        }
        label{
            color: #000;
        }
        th{
            /*background-color: #333;*/
            color: #FFF;
            text-align: center;
        }
        td{
            text-align: center;
        }
        .case{
            text-transform:uppercase;
        }
        th:hover{
            background-color: #000;
            color: #FFF;
        }
    </style>
</head>
<div class="form-group row col-md-offset-4">
    <div class="tab-pane fade in active">
        <h1 style="color: #000;font-weight: bold;margin-top: 2%;">Offers in Clothing</h1>
    </div>        
</div>
<?php
include './DBProperties.php';
if ($con) {
    try {
        $qry = "SELECT * FROM `offers` where category='Clothing' AND todate >= CURDATE() ORDER BY `offers`.`sno` ASC";
        $result = mysqli_query($con, $qry);
        $count = mysqli_num_rows($result);
        if ($count > 0) {
            ?>
            <table class="table table-bordered table-hover" style="margin-top: 3%;width: 75%;margin-left: 8%;">
                <tr>
                    <th style="background-color: #000;">Shop Number</th>
                    <th style="background-color: #000;">Shop Name</th>
                    <th style="background-color: #000;">Description</th>
                    <th style="background-color: #000;">From Date</th>
                    <th style="background-color: #000;">To Date</th>
                    <th style="background-color: #000;">View Details</th>

                </tr>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td class="case"><?php echo $row['shopnumber']; ?></td>
                        <td class="case"><?php echo $row['shopname']; ?></td>
                        <td class="case"><?php echo $row['description']; ?></td>
                        <td class="case"><?php echo $row['fromdate']; ?></td>
                        <td class="case"><?php echo $row['todate']; ?></td>
                        <td><a href="OfferDetails.php?sno=<?php echo $row['sno']; ?>"><input type="button" value="View Offer" class="btn btn-danger"></a></td>
                    </tr>
                    <?php
                }
            } else {
                ?>
                <h2 style="text-align: center; margin-top: 10%;">No Details Found</h2>
                <?php
            }
            mysqli_close($con);
            ?>
        </table>
        <?php
    } catch (Exception $exc) {
        echo $exc->getTraceAsString();
    }
}
?>
        