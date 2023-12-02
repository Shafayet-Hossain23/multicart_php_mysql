


<?php
$p_id=$_GET['p_id'];
$con=mysqli_connect("localhost","root","mysql","shop");
$query="select * from product where p_id='$p_id'";
$data=mysqli_query($con,$query);

$result= mysqli_fetch_assoc($data);


//===============add to cart===============
if(isset($_GET['add_to_cart']))
{
    
$cp_id=$_GET['cp_id'];
$cp_price = $_GET['cp_price'];
$cu_id = $_GET['cu_id'];
$qty = $_GET['qty'];
print_r($_GET);


$query="INSERT INTO temp_cart(qty,cp_price,cu_id,cp_product_id)values('$qty','$cp_price','$cu_id','$cp_id')";
$data=mysqli_query($con,$query);
if($data){
 echo "done";
}

}



?>