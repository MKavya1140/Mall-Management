<?php
include './AdminHeader.php';
include './DBProperties.php';
include './csslinks.php';
$shopno = $_GET["shno"];
if ($con) {
    $qry = "select* from shops where shopnumber='$shopno'";
    $result = mysqli_query($con, $qry);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $shopnum = $row['shopnumber'];
            $facing = $row['facing'];
            $sqfeet = $row['sqfeet'];
            $floor = $row['floor'];
            $rent = $row['rent'];
            $advance = $row['advance'];
        }
    }
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Register Page</title>
        <style>
            input[type=text],[type=email],[type=password]{
                border: 1px solid #000;
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
        <form action="DoEditShop.php" method="POST" enctype="multipart/form-data">
            <div>
                <div class="form-group row col-md-offset-5">
                    <div class="tab-pane fade in active">
                        <h1 style="color: #000;font-weight: bold;">Edit Shop</h1>
                    </div>        
                </div>
                <div class="form-group row col-md-offset-4" style="margin-top: 4%;">
                    <div class="form-group col-md-5">
                        <label>Shop Number</label>
                        <input type="text" name="snumber"  value="<?php echo $shopnum ?>" class="form-control" readonly="">
                    </div>
                </div>
                <div class="form-group row col-md-offset-4">
                    <div class="form-group col-md-5">
                        <label>Facing</label>
                        <select class="form-control" name="facing" style="border: 1px solid black;" required="">
                            <option value="<?php echo $facing; ?>"><?php echo $facing; ?></option>
                            <option value="East">East</option>
                            <option value="West">West</option>
                            <option value="North">North</option>
                            <option value="South">South</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row col-md-offset-4">
                    <div class="form-group col-md-5">
                        <label>Square Feet</label>
                        <input type="text" value="<?php echo $sqfeet ?>" name="sqfeet" class="form-control" required="">
                    </div>
                </div>
                <div class="form-group row col-md-offset-4">
                    <div class="form-group col-md-5">
                        <label>Floor</label>
                        <select class="form-control" name="floor" style="border: 1px solid black;" required="">
                            <option value="<?php echo $floor; ?>"><?php echo $floor; ?></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row col-md-offset-4">
                    <div class="form-group col-md-5">
                        <label>Rent</label>
                        <input type="text" name="rent" value="<?php echo $rent; ?>" class="form-control" required="">
                    </div>
                </div>
                <div class="form-group row col-md-offset-4">
                    <div class="form-group col-md-5">
                        <label>Advance</label>
                        <input type="text" name="advance" value="<?php echo $advance; ?>" class="form-control" required="">
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

