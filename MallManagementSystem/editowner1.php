<?php 
include './AdminHeader.php'; 
include './DBProperties.php';
include './csslinks.php';
$email=$_GET["email"];
if($con){
    $qry="select* from owner where email='$email'";
    $result=mysqli_query($con, $qry);
    $count=mysqli_num_rows($result);
    if($count>0){
        while($row=  mysqli_fetch_array($result)){
            $shopnum=$row['shopnumber'];
            $category=$row['category'];
            $name=$row['name'];
            $mobile=$row['mobile'];
            $address=$row['address'];
            $password=$row['password'];
        }
    }
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Register Page</title>
        <style>
            input[type=text],[type=email],[type=password],[type=file]{
                border: 1px solid #000;
            }
            label{
                color: #000;
            }
            label{
                font-weight: bold;
                font-family: sans-serif; 

            }
            body{
                font-weight: bold;
                font-family: sans-serif; 

            }
                    </style>
    </head>
    <body>
       
            <form action="doEditOwner.php" method="POST" enctype="multipart/form-data">
                <div>
                    <div class="form-group row col-md-offset-5">
                        <div class="tab-pane fade in active">
                            <h1 style="color: #000;font-weight: bold;">Add Owners</h1>
                        </div>        
                    </div>

                <div class="form-group row col-md-offset-4" style="margin-top: 4%;">
                        <div class="form-group col-md-5">
                            <label>Shop Number</label>
                            <input type="text" name="shopnumber" value="<?php echo $shopnum; ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group row col-md-offset-4">
                    <div class="form-group col-md-5">
                        <label>Category</label>
                        <select class="form-control" name="category" style="border: 1px solid black;">
                            <option value="<?php echo $category; ?>"><?php echo $category; ?></option>
                            <option value="Clothing">Clothing</option>
                            <option value="Footware">Footware</option>
                            <option value="Cosmotics">Cosmtics</option>
                            <option value="Gifts & Toys">Gifts & Toys</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row col-md-offset-4">
                    <div class="form-group col-md-5">
                        <label>Owner Name</label>
                        <input type="text" name="name" value="<?php echo $name ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group row col-md-offset-4">
                    <div class="form-group col-md-5">
                        <label>Mobile Number</label>
                        <input type="text" name="mobile" value="<?php echo $mobile ?>" class="form-control" required="">
                    </div>
                </div>
                <div class="form-group row col-md-offset-4">
                    <div class="form-group col-md-5">
                        <label>Email</label>
                        <input type="text" name="email" value="<?php echo $email ?>" readonly="" class="form-control">
                    </div>
                </div>
                <div class="form-group row col-md-offset-4">
                    <div class="form-group col-md-5">
                        <label>Address</label>
                        <textarea class="form-control" rows="5" name="address" style="border: 1px solid black;"><?php echo $address ?></textarea>
                    </div>
                </div>
                <div class="form-group row col-md-offset-4">
                    <div class="form-group col-md-5">
                        <label>Password</label>
                        <input type="text" name="password" value="<?php echo $password ?>" class="form-control">
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




