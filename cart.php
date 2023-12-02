<?php

$ip=$_SERVER['REMOTE_ADDR'];


$con=mysqli_connect("localhost","root","","shop");

$query="select * from temp_cart where cu_id='$ip'";
$data=mysqli_query($con,$query);



//=======================delete=====


if(isset($_GET['btndelete']))
{
    $query="DELETE FROM temp_cart where cp_id='$_GET[did]' ";
    if (mysqli_query($con, $query)) {
        echo "Record deleted successfully";
      } else {
        echo "Error deleting record: " . mysqli_error($con);
      }

}
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="">
    <link rel="stylesheet" href="asset/style.css">
    <link rel="stylesheet" href="asset/cart.css">
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

    <div class="kamrul-cart container">
        <h2>Cart</h2>
        <table border="1px" width="100%">

            <tr>
            <th> cp_product_id</th>
            <th>cp_price </th>
            <th> Qty</th>
            <th> Total price</th>
            <th> Action</th>

            </tr>

            <?php 
                $amount1=0;
                $user=0;
                while($result= mysqli_fetch_assoc($data)){

            ?>

            <tr>
            <td> <?php echo $result["cp_product_id"];?></td>
            
            <td> <?php echo $result["cp_price"];?> </td>

            <td> <?php echo $result["qty"];?></td>

            <td> <?php  $amount=$result["qty"]* $result["cp_price"]; echo $amount;?></td>
            
            <td> <a href="?btndelete=del&did=<?php echo $result["cp_id"];?>">  <i class="fa-solid fa-calendar-xmark"></i></a></td>
            </tr>


            <?php
            $amount1+=$amount;
            
            } ?>

            <tr>
            <td colspan="3"> Total Price </td>

            <td colspan="2"><?php echo $amount1;?> </td>

            </tr>

        </table>
        <div class="kamrul-cart-btn">
            <a href="stripe/index.php?user=<?php echo $user;?>&amount=<?php echo $amount1;?>"> pay </a>
        </div>
    
    
    </div>

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