<?php


$con = mysqli_connect("localhost", "root", "", "shop");
if (!$con) {
    echo "error";
}
if (isset($_POST['p_button'])) {

    $Name = $_POST['p_name'];

    $price = $_POST['p_price'];
    $description = $_POST['p_description'];
    $p_cat = $_POST['p_cat'];



    $t_name = $_FILES['p_img']['tmp_name'];
    $file_name = $_FILES['p_img']['name'];


    move_uploaded_file($t_name, "admin/pic/$file_name");

    $query = "insert into product(p_name,p_description,p_img,p_price,p_cat)values('$Name','$description','$file_name','$price','$p_cat')";
    $data = mysqli_query($con, $query);
    if ($data) {
        echo "done";
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
    <link rel="stylesheet" href="asset/upload.css">
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



    <div class="form-background-list">
        <div class="form-background">

            <div class="form-list">

                <!--upload form start-->
                <form action="" method="POST" enctype="multipart/form-data">

                    <label for="category">Product Category</label><br>
                    <input id="category" type="text" name="p_cat"><br>

                    <label for="name">Name</label><br>
                    <input id="name" type="text" name="p_name"><br>

                    <label for="price">Price</label><br>
                    <input id="price" type="number" name="p_price"><br>


                    <label for="image">Image</label><br>
                    <input type="file" id="image" name="p_img"><br>

                    <label for="description">Product Long description</label><br>
                    <input type="text" id="description" name="p_description"><br>

                    <input type="submit" value="Upload" name="p_button">
                </form>
                <!--upload form end-->
            </div>

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