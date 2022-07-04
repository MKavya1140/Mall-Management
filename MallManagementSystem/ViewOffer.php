<?php
 session_start();
 include './ShopOwnerHeader.php'; 
 include './DBProperties.php';
 include './csslinks.php'; 
 $userid=$_SESSION['userid'];
 ?>

<head>
    <style>
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
<body>

    <div class="form-group row col-md-offset-5" style="margin-top: 3%;">
        <div class="tab-pane fade in active">
            <h1 style="color: #000;font-weight: bold;">View Offers</h1>
        </div>        
    </div>
    <?php
    if ($con) {
        try {
            $qry = "SELECT * FROM `offers` where userid='$userid' ORDER BY `offers`.`sno` ASC";
            $result = mysqli_query($con, $qry);
            $count = mysqli_num_rows($result);
            if ($count > 0) {
                ?>
                <table class="table table-bordered table-hover" style="margin-top: 3%;width: 95%;margin-left: 3%;">
                    <tr>
                        <th style="background-color: #000;">Description</th>
                        <th style="background-color: #000;">From Date</th>
                        <th style="background-color: #000;">To Date</th>
                    </tr>
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <td class="case"><?php echo $row['description']; ?></td>
                            <td class="case"><?php echo $row['fromdate']; ?></td>
                            <td class="case"><?php echo $row['todate']; ?></td>
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
</body>
