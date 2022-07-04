<?php
include './AdminHeader.php';
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Register Page</title>
        <style>
            input[type=text],[type=email],[type=password],[type=file],[type=date]{
                border: 1px solid #000;
                font-weight: bold;
                color: #000;
            }
            select option{
                font-weight: bold;
                color: #000;
            }
            label{
                color: #000;
            }
              body{
                font-weight: bold;
                font-family: sans-serif; 

            }
              label{
                font-weight: bold;
                font-family: sans-serif; 

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
                <h3 style="margin-left: 40%; margin-top: 3%; color: green;"><b><?php echo 'Shop Added Successfully..'; ?></b></h3>
                <?php
            } else if ($value == 2) {
                ?>
                <h2 style="margin-left: 45%;margin-top: 3%;color: red;"><b><?php echo 'Failed'; ?></b></h2>
                <?php
            }
        }
        
        include './DBProperties.php';
        if($con){
            $qry="select * from owner";
            $result=mysqli_query($con, $qry);
            $count=mysqli_num_rows($result);
            if($count>0){
        ?>
        <form action="doPublishNotifications.php" method="POST" enctype="multipart/form-data">
            <div>
                <div class="form-group row col-md-offset-5" style="margin-top: 5%;">
                    <div class="tab-pane fade in active">
                        <h1 style="color: #000;font-weight: bold;">Publish Notifications</h1>
                    </div>        
                </div>
                 <div class="form-group row col-md-offset-4">
                    <div class="form-group col-md-5">
                        <label>To</label>
                        <select class="form-control" name="to" style="border: 1px solid #000;">
                            <option>Select Category</option>
                            <option>All</option>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $shopnumber = $row['shopnumber'];
                                    ?>
                                   <option value="<?php echo $shopnumber; ?>"><?php echo $shopnumber; ?></option>
                                    <?php
                                }
                            }
        }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row col-md-offset-4">
                    <div class="form-group col-md-5">
                        <label>Subject</label>
                        <input type="text" name="subject" class="form-control">
                    </div>
                </div>
                <div class="form-group row col-md-offset-4">
                    <div class="form-group col-md-5">
                        <label>Date</label>
                        <input type="date" name="date" class="form-control" required="">
                    </div>
                </div>

                <div class="form-group row col-md-offset-4">
                    <div class="form-group col-md-5">
                        <label>Notification</label>
                        <input type="File" name="file_img" class="form-control" required="">
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


