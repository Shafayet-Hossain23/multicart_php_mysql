<?php

$con=mysqli_connect("localhost","root","","shop");
$query="select * from product";
$data=mysqli_query($con,$query);


$watch="select * from product where p_cat='watches'";
$watchdisplay=mysqli_query($con,$watch);

$Bluetooth="select * from product where p_cat='Bluetooth-Speaker'";
$Bluetoothdisplay=mysqli_query($con,$Bluetooth);

$Camera="select * from product where p_cat='Camera'";
$Cameradisplay=mysqli_query($con,$Camera);

$Headphones="select * from product where p_cat='Headphones'";
$Headphonesdisplay=mysqli_query($con,$Headphones);


$Appliances="select * from product where p_cat='Home Appliances'";
$Appliancesdisplay=mysqli_query($con,$Appliances);

$Smart="select * from product where p_cat='Smart-Device'";
$Smartdisplay=mysqli_query($con,$Smart);


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="">
    <link rel="stylesheet" href="asset/style.css">
    <link rel="stylesheet" href="asset/shop.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;800&family=Poppins:ital,wght@0,300;0,400;0,600;1,400;1,600&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <!--header start-->
    <section>

        <div class="header-all">

            <div class="header-top">
                <div class="container">
                    <div class="header-top-left">
                        <p>Special collection already available.<span class="read-more">Read more...</span> </p>
                    </div>
                    <div class="header-top-right">
                        <p><i class="fa-solid fa-code-compare"></i> Compare <i class="fa-solid fa-user"></i> Login <i class="fa-solid fa-lock"></i> Register</p>
                    </div>
                </div>

            </div>

            <div class="header-bottom-background">

            
                <div class="header-bottom container">
                    

                        <div class="logo">
                            <a href="index.php"><img src="asset/img/logo.png" alt=""></a>
                        </div>
                        <div class="menu">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="shop.php">Shop</a></li>
                                <li><a href="#">Product Page</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="upload.php">New Upload</a></li>
                            </ul>
                        </div>
                        <div class="icons">
                            <i class="fa-solid fa-heart"></i><i class="fa-solid fa-cart-shopping"></i><i class="fa-solid fa-magnifying-glass"></i>
                        </div>

                    

                </div>

            </div>


        </div>

    </section>
   <!--header end-->






   
    <!--shop  banner 1st row start-->
    <section class="shop-banner">
        <div class="shop-banner-content">
            
            <h2>Home Appliance</h2>
            <p><a href="index.php">Home</a> <i class="fa-solid fa-grip-lines-vertical"></i> <a href="shop.php" class="shop-color">Shop</a></p>
        </div>
    </section>
    <!--shop  banner end-->




    <!--shop 2nd row  start-->
    <section>


    
        <div class="shop-page-row container">
            <div class="shop-page-sidebar">
                
                <div class="shop-page-sidebar-row">


               
                    <!--input brand name-->
                    <div class="shoop-page-sid-brand">
                        <h2>BRAND</h2>
                        <ul>
                            <li><a href="cat-Watches.php">Watch</a></li>
                            <li><a href="cat-Smartdevice.php">Smart Device</a></li>
                            <li><a href="cat-Homeappliance.php">Home Appliance</a></li>
                            <li><a href="cat-headphones.php">Headphones</a></li>
                            <li><a href="cat-camera.php">Camera</a></li>
                            <li><a href="cat-bluetooth-speakers.php">Speakers</a></li>
                        </ul>
                    </div>





                    <!--input Color name & code-->


                    <div class="shoop-page-sid-color">
                        <h2>COLORS</h2>
                        <div class="checkbox-colors">
                            <div class="checkbox-colors-one white"></div>
                            <div class="checkbox-colors-one black"></div>
                            <div class="checkbox-colors-one red"></div>
                            <div class="checkbox-colors-one yellow"></div>
                            <div class="checkbox-colors-one green"></div>
                            <div class="checkbox-colors-one orange"></div>
                        </div>
                
                        
                    </div>



                    <!--input size value-->

                    <div class="shoop-page-sid-size">
                        <h2>SIZE</h2>
                        <input type="checkbox" id="ss">
                        <label for="ss"> 10 inch.</label><br>

                        <input type="checkbox" id="sm">
                        <label for="sm"> 15 inch.</label><br>

                        <input type="checkbox" id="sl">
                        <label for="sl">20 inch.</label><br>

                        <input type="checkbox" id="as">
                        <label for="as">25 inch.</label><br>

                        <input type="checkbox" id="ad">
                        <label for="ad"> 30 inch.</label><br>

                        <input type="checkbox" id="af">
                        <label for="af"> 35 inch.</label><br>
                    </div>

                </div>


                <div class="shoop-page-sid-img">
                    <img src="asset/img/side-banner-2.png" alt="">
                </div>


            </div>


            <div class="shop-page-products-all">
                

        <div class="top-pro-row">

            <?php while($result= mysqli_fetch_assoc($Appliancesdisplay)){ ?>

            <a href="productdetails.php?p_id=<?php echo $result["p_id"];?>">

            <div class="top-pro-col shop-pro-col">
                <div class="top-pro-col-img">
                    <img src="admin/pic/<?php echo $result["p_img"];?>" alt="">
                </div>
                <h2 class="pro-name"><?php echo $result["p_name"];?></h2>
                <p class="pro-price">$<?php echo $result["p_price"];?></p>
                <p class="pro-price"><?php echo $result["p_cat"];?></p>
            </div>

            </a>

            <?php } ?>
        </div>










            
            </div>
        </div>

    </section>
    <!--shop form end-->






    <!--footer start-->
    <footer>
        <div class="footer-row container">
            <div class="footer-col">
                <img src="asset/img/logo.png" alt="">
                <p>ANDSHOP is an multi-vendor B2C fast e-commerce company. The company mainly focuses on men,women and children wear, but it also offers other apparel, clothes, accessories, shoes, bags and other fashion items.</p>
                <i class="fa-brands fa-facebook-f"></i><i class="fa-brands fa-instagram"></i><i class="fa-brands fa-facebook-f"></i><i class="fa-brands fa-facebook-f"></i>
            </div>

            <div class="footer-col">
                <h2>INFORMATION</h2>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Private policy</a></li>
                    <li><a href="#">Frequently Questioning</a></li>
                    <li><a href="#">Order Tracking</a></li>
                    <li><a href="#">Compare</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h2>SHOP</h2>
                <ul>
                    <li><a href="#">Cart View One</a></li>
                    <li><a href="#">Cart View Two</a></li>
                    <li><a href="#">Empty Cart</a></li>
                    <li><a href="#">Checkout View One</a></li>
                </ul>
            </div>



            <div class="footer-col">
                <h2>NEWSLATER</h2>
                <input type="email" placeholder="Your Mail">
                <button>Send email</button>
            </div>

        </div>
    </footer>
    <!--footer end-->
</body>
</html>