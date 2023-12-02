<?php

$ip=$_SERVER['REMOTE_ADDR'];


$con=mysqli_connect("localhost","root","mysql","shop");

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
<meta charset="UTF-8">
     <title>Cart page</title>
</head>
<body>
  



  <div class="cart-data">



    <table border="1px" width="90%">


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
        
        <td> <a href="?btndelete=del&did=<?php echo $result["cp_id"];?>"> <?php echo $result["cp_id"];?> Delete</a></td>
      </tr>


      <?php
      $amount1+=$amount;
      echo $user= $result["cp_id"];
      } ?>

      <tr>
      <td colspan="3"> Total Price </td>

      <td colspan="2"><?php echo $amount1;?> </td>

      </tr>

    </table>
    <a href="stripe/index.php?user=<?php echo $user;?>&amount=<?php echo $amount1;?>"> pay </a>





  </div>








</body>
</html>


