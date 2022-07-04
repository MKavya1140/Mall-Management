<?php include './header.php'; ?>
<head>
    <style>
          input[type=text],[type=email],[type=password],[type=file],[type=date]{
                border: 1px solid #000;
                font-weight: bold;
                color: #000;
            }
    </style>
</head>    
    <?php
        $value = "";
        if (!empty($_GET)) {
            $value = $_GET['value'];
            if ($value == 2) {
                ?>
                <h2 style="margin-left: 45%;margin-top: 3%;color: red;"><b><?php echo 'Failed'; ?></b></h2>
                <?php
            }
        }
        ?>
        <form action="DoLogin.php" method="POST">
            <div style="margin-top: 3%;" class="col-md-offset-1">
                <div class="form-group row col-md-offset-5">
                    <div class="tab-pane fade in active">
                        <h1 style="color: #000;font-weight: bold;">Login</h1>
                    </div>        
                </div>
                <div class="form-group row col-md-offset-4">
                    <div class="form-group col-md-5">
                        <label>Userid</label>
                        <input type="text" name="userid" class="form-control" required="">
                    </div>
                </div>
                <div class="form-group row col-md-offset-4">
                    <div class="form-group col-md-5">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required="">
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



        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>

</html>

