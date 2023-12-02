<?php 
// Product Details 
// Minimum amount is $0.50 US 
// Test Stripe API configuration 

define('STRIPE_API_KEY', 'sk_test_51LASc0KFm2vs15LF18vP8ldp8qpxO2wqpGy3qJnK9YAYrlzSetc9tUU0N9ZWrZvEHFE8lzBbsO90O02S0ishExeW00rPxk6yU2');  
define('STRIPE_PUBLISHABLE_KEY', 'pk_test_51LASc0KFm2vs15LFUXv525PZqJIEBKX0V2QKWCctGiwwSJYPjIsShPQ73pLfXOx4OP9Q9GMsduZ63Cw649WwiH1s002OUceJvB'); 

define('STRIPE_SUCCESS_URL', 'http://localhost/multikart/stripe/success.php'); 
define('STRIPE_CANCEL_URL', 'http://localhost/multikart/cancel.php'); 

// Database configuration   
define('DB_HOST', 'localhost');  
define('DB_USERNAME', 'root');  
define('DB_PASSWORD', '');  
define('DB_NAME', 'shop'); 
?>



