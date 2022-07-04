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
          body{
                font-weight: bold;
                font-family: sans-serif; 
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
            <h1 style="color: #000;font-weight: bold;">View Shops</h1>
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
                        <th style="background-color: #000;">Status</th>

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
                            <td class="case"><a href="viewimages.php?sno=<?php echo $row['sno']; ?>" style="color: #999999"><input type="button" value="View" class="btn btn-info"></a></td>
                            <td class="case"><?php echo $row['status']; ?></td>
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
