<?php
include './AdminHeader.php';
include './DBProperties.php';
$sno = $_GET["sno"];
?>
<body>
    <div class="blog" id="team" style="margin-top: 1%;background-color: red;">
        <div class="container">
            <div id="myCarousel2" class="carousel slide"  data-ride="carousel">
                <?php
                $data = array();
                $query = "select * from shops where sno=$sno";
                $resultset = mysqli_query($con, $query);
                $count = mysqli_num_rows($resultset);
                if ($count > 0) {
                    while ($row = mysqli_fetch_array($resultset)) {
                        ?>
                        <div class="container">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 75%; position:absolute;margin-left: 8%; z-index: -900;margin-top: 0%;">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                    <li data-target="#myCarousel" data-slide-to="3"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" style="max-height: 390px;">
                                    <div class="item active">
                                        <img src="<?php echo $row['photo']; ?>" alt="Los Angeles" style="width:100%;">
                                    </div>

                                    <div class="item">
                                        <img src="<?php echo $row['photo1']; ?>" alt="Chicago" style="width:100%;">
                                    </div>

                                    <div class="item">
                                        <img src="<?php echo $row['photo2']; ?>" alt="New york" style="width:100%;">
                                    </div>

                                    <div class="item">
                                        <img src="<?php echo $row['photo3']; ?>" alt="New york" style="width:100%;">
                                    </div>
                                </div>

                                <!-- Left and right controls -->
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>