<?php include './AdminHeader.php '; ?>
<?php include './csslinks.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Register Page</title>
        <style>
            input[type=text],[type=email],[type=password]{
                border: 1px solid #000;
                font-weight: bold;
                color: #000;
            }
            label{
                color: #000;
                font-weight: bold;
                font-family: sans-serif; 
            
            }
             body{
                font-weight: bold;
                font-family: sans-serif; 
            }
        </style>
        <script>
            function valid() {
                var snumber = document.getElementById("snumber").value;
                if (snumber == "") {
                    alert("Shop Number Should Not be Empty");
                    return false;
                }
                var facing = document.getElementById("facing").value;
                if (facing == "-1") {
                    alert("Please Select Facing");
                    return false;
                }
                var sqfeet = document.getElementById("sqfeet").value;
                if (sqfeet == "") {
                    alert("Square Feet Should not be Empty");
                    return false;
                }
                var floor = document.getElementById("floor").value;
                if (floor == -1) {
                    alert("Please Select Floor");
                    return false;
                }
                var rent = document.getElementById("rent").value;
                if (rent == "") {
                    alert("Rent Should not be Empty");
                    return false;
                }
            }

        </script>
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
        ?>
        <form action="AddingShop.php" method="POST" enctype="multipart/form-data" onsubmit="return valid();">
            <div>
                <div class="form-group row col-md-offset-5">
                    <div class="tab-pane fade in active">
                        <h1 style="color: #000;font-weight: bold;">Add Shops</h1>
                    </div>        
                </div>
                <div class="form-group row col-md-offset-4" style="margin-top: 4%;">
                    <div class="form-group col-md-5">
                        <label>Shop Number</label>
                        <input type="text" name="snumber" id="snumber" class="form-control">
                    </div>
                </div>
                <div class="form-group row col-md-offset-4">
                    <div class="form-group col-md-5">
                        <label>Facing</label>
                        <select class="form-control" name="facing" id="facing" style="border: 1px solid black;">
                            <option value="-1">Select Facing</option>
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
                        <input type="text" name="sqfeet" id="sqfeet" class="form-control">
                    </div>
                </div>
                <div class="form-group row col-md-offset-4">
                    <div class="form-group col-md-5">
                        <label>Floor</label>
                        <select class="form-control" name="floor" id="floor" style="border: 1px solid black;">
                            <option value="-1">Select Floor</option>
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
                        <input type="text" name="rent" id="rent" class="form-control">
                    </div>
                </div>
                 <div class="form-group row col-md-offset-4">
                    <div class="form-group col-md-5">
                        <label>Advance Amount</label>
                        <input type="text" name="advance" id="advance" class="form-control">
                    </div>
                </div>
                <div class="form-group row col-md-offset-4">
                    <div class="form-group col-md-5">
                        <label>Shop Photo1</label>
                        <input type="File" name="file_img" id="file" required=""  style="border: 1px solid black;" class="form-control">
                    </div>
                </div>
                <div class="form-group row col-md-offset-4">
                    <div class="form-group col-md-5">
                        <label>Shop Photo2</label>
                        <input type="File" name="file_img1" id="file1" required=""  style="border: 1px solid black;" class="form-control">
                    </div>
                </div>
                <div class="form-group row col-md-offset-4">
                    <div class="form-group col-md-5">
                        <label>Shop Photo3</label>
                        <input type="File" name="file_img2" id="file2" required=""  style="border: 1px solid black;" class="form-control">
                    </div>
                </div>
                <div class="form-group row col-md-offset-4">
                    <div class="form-group col-md-5">
                        <label>Shop Photo4</label>
                        <input type="File" name="file_img3" id="file3" required=""  style="border: 1px solid black;" class="form-control">
                    </div>
                </div>-->
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

