<?php include './csslinks.php'; ?>
<?php include './AdminHeader.php'; ?>
<?php include './DBProperties.php'; ?>
<!DOCTYPE html>
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
            label{
                color: #000;
                font-weight: bold;
                font-family: sans-serif; 
            }
        </style>
        <script>
            function validate() {
                var snumber = document.getElementById("snumber").value;
                if (snumber == -1) {
                    alert("Select Shop Number");
                    return false;
                }
                var category = document.getElementById("category").value;
                if (category == -1) {
                    alert("Select Category");
                    return false;
                }
                var name = document.getElementById("name").value;
                if (name == "") {
                    alert("Name Should not be Empty");
                    return false;
                }
                var mobile = document.getElementById("mobile").value;
                if (mobile == "") {
                    alert("Mobile Should not be Empty");
                    return false;
                }
                if (mobile.length != 10) {
                    alert("Mobile Number should contain 10 numbers");
                    return false;
                }
                if (isNan(mobile)) {
                    alert("Mobile number should contain Digits Only");
                    return false;
                }
                var email = document.getElementById("email").value;
                if (email == "") {
                    alert("Email should not be Empty");
                    return false;
                }
                var address = document.getElementById("address").value;
                if (address == "") {
                    alert("Address should not be empty");
                    return false;
                }
                var password = document.getElementById("password").value;
                if (password == "") {
                    alert("Password should not be Empty");
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
                <h3 style="margin-left: 40%; margin-top: 3%; color: green;"><b><?php echo 'Owner Added Successfully..'; ?></b></h3>
                <?php
            } else if ($value == 2) {
                ?>
                <h2 style="margin-left: 45%;margin-top: 3%;color: red;"><b><?php echo 'Failed'; ?></b></h2>
                <?php
            }
        }
        ?>
        <?php
        $shopnumber = NULL;
        if ($con) {
            $qry = "select * from shops where status='available'";
            $result = mysqli_query($con, $qry);
            $count = mysqli_num_rows($result);
            ?>
            <form action="AddingOwner.php" method="POST" enctype="multipart/form-data" onsubmit="return validate()">
                <div>
                    <div class="form-group row col-md-offset-5" style="margin-top: 3%;">
                        <div class="tab-pane fade in active">
                            <h1 style="color: #000;font-weight: bold;">Add Owners</h1>
                        </div>        
                    </div>

                    <div class="form-group row col-md-offset-4" style="margin-top: 4%;">
                        <div class="form-group col-md-5">
                            <label>Shop Number</label>
                            <select class="form-control" name="snumber" id="snumber" style="border: 1px solid black;">
                                <option value="-1">Select Shop</option>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $shopnumber = $row['shopnumber'];
                                    ?>
                                    <option value="<?php echo $shopnumber; ?>"><?php echo $shopnumber; ?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row col-md-offset-4">
                    <div class="form-group col-md-5">
                        <label>Category</label>
                        <select class="form-control" name="category" id="category" style="border: 1px solid black;">
                            <option value="-1">Select Category</option>
                            <option value="Clothing">Clothing</option>
                            <option value="Footware">Footware</option>
                            <option value="Cosmotics">Cosmtics</option>
                            <option value="Gifts & Toys">Gifts & Toys</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row col-md-offset-4">
                    <div class="form-group col-md-5">
                        <label>Owner Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                </div>
                <div class="form-group row col-md-offset-4">
                    <div class="form-group col-md-5">
                        <label>Mobile Number</label>
                        <input type="text" name="mobile" id="mobile" class="form-control">
                    </div>
                </div>
                <div class="form-group row col-md-offset-4">
                    <div class="form-group col-md-5">
                        <label>Email</label>
                        <input type="text" name="email" id="email" class="form-control">
                    </div>
                </div>
                <div class="form-group row col-md-offset-4">
                    <div class="form-group col-md-5">
                        <label>Address</label>
                        <textarea class="form-control" rows="5" id="address" name="address" style="border: 1px solid black;"></textarea>
                    </div>
                </div>
                <div class="form-group row col-md-offset-4">
                    <div class="form-group col-md-5">
                        <label>Password</label>
                        <input type="text" name="password" id="password" class="form-control">
                    </div>
                </div>
                <div class="form-group row col-md-offset-4">
                    <div class="form-group col-md-5">
                        <label>Agreement</label>
                        <input type="File" name="file_img" class="form-control" required="">
                    </div>
                </div>
                <div class="form-group row col-md-offset-4">
                    <div class="form-group col-md-5">
                        <label>Agreement Start Date</label>
                        <input type="date" name="stdate" class="form-control" required="">
                    </div>
                </div>
                <div class="form-group row col-md-offset-4">
                    <div class="form-group col-md-5">
                        <label>Agreement End Date</label>
                        <input type="date" name="enddate" class="form-control" required="">
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

