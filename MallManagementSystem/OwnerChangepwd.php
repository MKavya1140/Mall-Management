<?php 
session_start();
$userid=$_SESSION['userid'];
include './ShopOwnerHeader.php'; 
 include './csslinks.php';
 include './DBProperties.php'; 
 
 ?>
<head>
    <style>
        label{
            color:#000;
        }
        input[type=text],[type=email],[type=password],[type=file],[type=date]{
                border: 1px solid #000;
                font-weight: bold;
                color: #000;
            }
    </style>
</head>
<?php 
$password = null;
if ($con) {
    $query = "select * from login where userid='" . $userid . "'";
//        echo $query;
    $resultset = mysqli_query($con, $query);
    if (mysqli_num_rows($resultset) > 0) {
        $values = mysqli_fetch_assoc($resultset);
        $password = $values['password'];
//            echo $password;
    }
}
    $value = " ";
    if (!empty($_GET)) {
        $value = $_GET['value'];
        if ($value == 1) {
            ?>
            <h3 style="margin-left: 35%; margin-top: 3%; color: green;"><?php echo 'Password Changed Successfully...'; ?></h3>
            <?php
        } else if ($value == 2) {
            ?>
            <h2 style="margin-left: 20%;margin-top: 3%;color: red;"><?php echo 'Failed'; ?></h2>
        <?php }
    } ?>
            <form action="doOwnerChangePassword.php" name="changePassword" method="POST" onsubmit="return validateForm()">
    <div>
        <div class="form-group row col-md-offset-5">
            <div class="tab-pane fade in active">
                <h1 style="color: #000;font-weight: bold;">Change Password</h1>
            </div>        
        </div>
        <div class="form-group row col-md-offset-4">
            <div class="form-group col-md-5">
                <label>Old Password</label>
                <input type="text" name="oldpassword" id="oldpassword" class="form-control">
            </div>
        </div>
        <div class="form-group row col-md-offset-4">
            <div class="form-group col-md-5">
                <label>New Password</label>
                <input type="text" name="newpassword" id="newpassword" class="form-control">
            </div>
        </div>
        <div class="form-group row col-md-offset-4">
            <div class="form-group col-md-5">
                <label>Confirm Password</label>
                <input type="text" name="confirmpassword" id="confirmpassword" class="form-control">
            </div>
        </div>
        <input type="text" name="dbpassword" value="<?php echo $password; ?>" class="hidden">
        <div class="form-group row col-md-offset-4">
            <div class="form-group  col-md-6">
                <input type="submit" value="Submit" class="btn btn-success" name="btn_upload">
                <input type="reset" value="Reset" class="btn btn-danger col-md-offset-5"><br>
            </div>
        </div>
    </div>
</form>
            <script>
            function validateForm() {
                if (document.changePassword.oldpassword.value == "") {
                    alert("Please Enter Old Password");
                    document.changePassword.oldpassword.focus();
                    return false;
                }
                if (document.changePassword.newpassword.value == "") {
                    alert("Please Enter New Password");
                    document.changePassword.newpassword.focus();
                    return false;
                }
                if (document.changePassword.confirmpassword.value == "") {
                    alert("Please Enter Confirm Password");
                    document.changePassword.confirmpassword.focus();
                    return false;
                }
                if (document.changePassword.newpassword.value != document.changePassword.confirmpassword.value) {
                    alert("Confirm Password not match");
                    document.changePassword.confirmpassword.focus();
                    return false;
                }
                if (document.changePassword.oldpassword.value != document.changePassword.dbpassword.value) {
                    alert("Old Password Not Correct...");
                    document.changePassword.oldpassword.focus();
                    return false;
                }
            }
        </script>
</body>        