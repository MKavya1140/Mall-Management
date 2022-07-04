<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home Page</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/customestyle.css" rel="stylesheet">
        <link href="css/base.css" rel="stylesheet" type="text/css"/>
        <!--<link href="css/base.css" rel="stylesheet" type="text/css"/>-->
        <link href="fonts/glyphicons-halflings-regular.svg" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
        <link href="js/custom.js">
        <link href='//fonts.googleapis.com/css?family=Advent Pro' rel='stylesheet'>
        <style>
            /*            ul {
                            list-style-type: none;
                            margin-top:  -2.1%;
                            padding: 0;
                            overflow: hidden;
                            background-color: #333;
                            height: 50px;
                        }
            
                        li {
                            float: left;
                        }
            
                        li a {
                            display: block;
                            color: #FFF;
                            text-align: center;
                            padding: 8px 85px;
                            text-decoration: none;
                        }
            
            */            li a:hover {
                /*background-color: #FFF;*/
                height: 50px;
                text-decoration: none;
                color: #FFF;

            }

            label{
                color: #FFF;
            }
            
            label{
                font-weight: bold;
                font-family: sans-serif; 

            }
            table{

                font-weight: bold;
                font-family: sans-serif; 

            }
            nav{

                /*font-weight: bold;*/
                /*font-family: sans-serif;*/ 

            }
        </style>
        <script>
            $(document).ready(function () {
                $('.dropdown').hover(
                        function () {
                            $(this).children('.sub-menu').slideDown(200);
                        },
                        function () {
                            $(this).children('.sub-menu').slideUp(200);
                        }
                );
            }); // end ready
        </script>
    </head>
    <?php
            include './DBProperties.php';
            $name=null;
            $userid=$_SESSION['userid'];
            if($con){
                $qry="select * from owner where email='$userid'";
                $result=mysqli_query($con, $qry);
                while($row=  mysqli_fetch_assoc($result)){
                    $name=$row['name'];
                }
            }
            
    ?>
    <body style="margin:0px;padding:0px;font-family: sans-serif;font-size:17px;background-color: #FFF;">
       <div style="background-color: #452350;height: 180px;">
            <!--<img src="images/now4.png" style="height: 180px;margin-left: 30%;">-->
            <h1 style="margin-left: 30%;color: #FFF;font-weight: bold;font-size: 40px;font-family: sans-serif;padding-top: 5%;text-transform: uppercase">Mall Management System</h1>
        </div>       
        <nav style="background-color: #000;height: 50px;width: 100%;font-weight: bold;font-family: sans-serif">
            <ul class="content clearfix">
                <li><a href="ShopOwnerHome.php">HOME</a></li>
                <li class="dropdown" style="margin-left: 5%;">
                    <a href="#">OFFERS</a>
                    <ul class="sub-menu" style="background-color: #000;">
                        <li><a href="AddOffer.php">ADD</a></li>
                        <li><a href="ViewOffer.php">VIEW</a></li>
                    </ul>
                </li>
                <li class="dropdown" style="margin-left: 5%;">
                    <a href="#">NOTIFICATIONS</a>
                    <ul class="sub-menu" style="background-color: #000;">
                        <li><a href="ViewShopNotifications.php">VIEW</a></li>
                        <li><a href="ShopNotifications.php">PUBLISH</a></li>
                    </ul>
                </li>
                <li class="dropdown" style="margin-left: 30%;">
                    <a href="#" style="text-transform: uppercase;"><?php echo $name?></a>
                    <ul class="sub-menu" style="background-color: #000;">
                        <li><a href="OwnerChangepwd.php">CHANGE PASSWORD</a></li>
                        <li><a href="Logout.php">LOGOUT</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>