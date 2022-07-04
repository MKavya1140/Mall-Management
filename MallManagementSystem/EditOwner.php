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
    </style>
</head>
<body>

    <div class="form-group row col-md-offset-5" style="margin-top: 3%;">
        <div class="tab-pane fade in active">
            <h1 style="color: #000;font-weight: bold;">Edit Owner</h1>
        </div>        
    </div>
    <?php
    if ($con) {
        try {
            $qry = "SELECT * FROM `owner` where status='Allocated' ORDER BY `owner`.`shopnumber` ASC";
            $result = mysqli_query($con, $qry);
            $count = mysqli_num_rows($result);
            if ($count > 0) {
                ?>
                <table class="table table-bordered table-hover" style="margin-top: 3%;width: 95%;margin-left: 3%;">
                    <tr>
                        <!--<th style="background-color: #000;">SNO</th>-->
                        <th style="background-color: #000;">Shop Number</th>
                        <th style="background-color: #000;">Category</th>
                        <th style="background-color: #000;">Name</th>
                        <th style="background-color: #000;">Mobile</th>
                        <th style="background-color: #000;">Email</th>
                        <th style="background-color: #000;">Address</th>
                        <th style="background-color: #000;">Agreement</th>
                        <th style="background-color: #000;">Edit</th>
                        <th style="background-color: #000;">Delete</th>
                        

                    </tr>
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            
                            <td class="case"><?php echo $row['shopnumber']; ?></td>
                            <td class="case"><?php echo $row['category']; ?></td>
                            <td class="case"><?php echo $row['name']; ?></td>
                            <td class="case"><?php echo $row['mobile']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td class="case"><?php echo $row['address']; ?></td>
                            <td style="padding-top: 10px"><a href="<?php echo $row['']; ?>" style="color: #999999"><input type="button" value="View" class="btn btn-info"></a></td>
                            <td style="padding-top: 10px"><a href="editowner1.php?email=<?php echo $row['email']; ?>" style="color: #999999"><input type="button" value="Edit" class="btn btn-success"></a></td>
                            <td style="padding-top: 10px"><a href="DeleteOwnler.php?email=<?php echo $row['email']; ?>" style="color: #999999"><input type="button" value="Delete" class="btn btn-danger"></a></td>
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
