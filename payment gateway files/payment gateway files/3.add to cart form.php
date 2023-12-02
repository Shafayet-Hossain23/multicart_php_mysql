<form action="" method="get">
  <p>QTY</p>
  <input type="number" name="qty">
                
  <input type="hidden" name="cp_id" value="<?php echo $result['p_id'];?>">
                       
  <input type="hidden" name="cp_price" value="<?php echo $result['p_price'];?>">
                        
  <input type="hidden" name="cu_id"  value="<?php echo $_SERVER['REMOTE_ADDR'];?>">
  <br>
  <input type="submit" name="add_to_cart" class ="add-cart-btn" value="add to cart">  
                            
</form>