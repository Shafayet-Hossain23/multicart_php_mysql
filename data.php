<!--database & links php 


src="admin/pic/<?php echo $result["p_img"];?>"

<?php echo $result["p_name"];?>
<?php echo $result["p_price"];?>
<?php echo $result["p_cat"];?>
<?php echo $result["p_description"];?>


href="sprotab.php?p_id=<?php echo $result["p_id"];?>"







code-->

<!--product upload-->
<?php


$con=mysqli_connect("localhost","root","mysql","shop");
if(!$con)
{
    echo "error";
}
if(isset($_POST['p_button']))
{
    
$Name = $_POST['p_name'];

$price = $_POST['p_price'];
$description=$_POST['p_description'];
$p_cat=$_POST['p_cat'];


$t_name=$_FILES['p_img']['tmp_name'];
$file_name=$_FILES['p_img']['name'];


move_uploaded_file($t_name,"admin/pic/$file_name");

$query="insert into product(p_name,p_description,p_img,p_price,p_cat)values('$Name','$description','$file_name','$price','$p_cat')";
$data=mysqli_query($con,$query);
if($data){
 echo "done";
}

}


?> 



<!--shop & product page links-->
<?php
$p_id=$_GET['p_id'];
$con=mysqli_connect("localhost","root","mysql","shop");
$query="select * from product where p_id='$p_id'";
$data=mysqli_query($con,$query);

$result= mysqli_fetch_assoc($data);


?>




?> 

<!--show products from database-->
<?php

$con=mysqli_connect("localhost","root","mysql","shop");
$query="select * from product";
$data=mysqli_query($con,$query);


?>

<!--shop page data-->
 <?php while($result= mysqli_fetch_assoc($data)){ ?>

    <!--product meta data-->
        href="your product page name?p_id=<?php echo $result["p_id"];?>"
        <?php echo $result["p_name"];?>
        <?php echo $result["p_price"];?>
        <?php echo $result["p_cat"];?>
        <?php echo $result["p_description"];?>
    <!--product meta data-->

  <?php } ?>

