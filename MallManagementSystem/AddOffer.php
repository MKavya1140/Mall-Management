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
        label{
            color: #000;
        }
    </style>
</head>
    <body>
        <?php
        $value = "";
        if (!empty($_GET)) {
            $value = $_GET['value'];
            if ($value == 1) {
                ?>
                <h3 style="margin-left: 40%; margin-top: 3%; color: green;"><b><?php echo 'Offer Annnounced Successfully..'; ?></b></h3>
                <?php
            } else if ($value == 2) {
                ?>
                <h2 style="margin-left: 45%;margin-top: 3%;color: red;"><b><?php echo 'Failed'; ?></b></h2>
                <?php
            }
        }
        ?>
        <form action="AddingOffer.php" method="POST">
            <div>
                <div class="form-group row col-md-offset-5">
                    <div class="tab-pane fade in active">
                        <h1 style="color: #000;font-weight: bold;">Add Offers</h1>
                    </div>        
                </div>
                <div class="form-group row col-md-offset-4">
                    <div class="form-group col-md-5">
                        <label>Offer Description</label>
                        <textarea class="form-control" rows="5" style="border: 1px solid black;" name="offerdescription"></textarea>
                    </div>
                </div>
                <div class="form-group row col-md-offset-4">
                    <div class="form-group col-md-5">
                        <label>From Date</label>
                        <input type="date" name="fromdate" style="border: 1px solid black;" class="form-control" required="">
                    </div>
                </div>
                <div class="form-group row col-md-offset-4">
                    <div class="form-group col-md-5">
                        <label>To Date</label>
                        <input type="date" name="todate" style="border: 1px solid black;" class="form-control" required="">
                    </div>
                </div>
                <div class="form-group row col-md-offset-4">
                    <div class="form-group  col-md-6">
                        <input type="submit" value="Submit" class="btn btn-success" name="btn_upload">
                        <input type="reset" value="Reset" class="btn btn-danger col-md-offset-5"><br>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>

