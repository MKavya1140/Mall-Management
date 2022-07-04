<?php include './AdminHeader.php'; ?>
<?php include './DBProperties.php'; ?>
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
        table{

                font-weight: bold;
                font-family: sans-serif; 

        }
    </style>
</head>
<body>

    <div class="form-group row col-md-offset-5" style="margin-top: 3%;">
        <div class="tab-pane fade in active">
            <h1 style="color: #000;font-weight: bold;">Edit Shops</h1>
        </div>        
    </div>
    <?php
    if ($con) {
        try {
            $qry = "SELECT * FROM `shops` ORDER BY `shops`.`shopnumber` ASC";
            $result = mysqli_query($con, $qry);
            $count = mysqli_num_rows($result);
            if ($count > 0) {
                ?>
                <table class="table table-bordered table-hover" style="margin-top: 3%;width: 95%;margin-left: 3%;">
                    <tr>
                        <!--<th style="background-color: #000;">SNO</th>-->
                        <th style="background-color: #000;">Shop Number</th>
                        <th style="background-color: #000;">Facing</th>
                        <th style="background-color: #000;">Square Feet</th>
                        <th style="background-color: #000;">Floor</th>
                        <th style="background-color: #000;">Rent</th>
                        <th style="background-color: #000;">Advance</th>
                        <th style="background-color: #000;">Photo</th>
                        <th style="background-color: #000;">Edit</th>
                        <th style="background-color: #000;">Delete</th>

                    </tr>
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            
                            <td class="case"><?php echo $row['shopnumber']; ?></td>
                            <td><?php echo $row['facing']; ?></td>
                            <td><?php echo $row['sqfeet']; ?></td>
                            <td class="case"><?php echo $row['floor']; ?></td>
                            <td class="case"><?php echo $row['rent']; ?></td>
                            <td class="case"><?php echo $row['advance']; ?></td>
                            <td class="case"><input type="button" value="View" class="btn btn-info" data-toggle="modal" data-target="#myModal"></td>
                            <td class="case"><a href="editShop.php?shno=<?php echo $row['shopnumber'];?>"><input type="button" value="Edit" class="btn btn-success" data-toggle="modal" data-target="#myModal"></a></td>
                            <td class="case"><a href="DeleteShop.php?shno=<?php echo $row['shopnumber'];?>"><input type="button" value="Delete" class="btn btn-danger" data-toggle="modal" data-target="#myModal"></a></td>
                            <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog  modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Modal Header</h4>
                                    </div>
                                    <div class="modal-body">
                                        <img src="<?php echo $row['photo']; ?>"  width="50%" height="50%"/>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
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


