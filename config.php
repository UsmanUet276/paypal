<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php 

define('PAYPAL_ID', 'sb-yjvhd26111324@business.example.com'); 
define('PAYPAL_SANDBOX', TRUE);  
 
define('PAYPAL_RETURN_URL', 'http://localhost/paypaltask/success.php'); 
define('PAYPAL_CANCEL_URL', 'http://localhost/paypaltask/cancel.php'); 
define('PAYPAL_CURRENCY', 'USD'); 
  
define('DB_HOST', 'localhost'); 
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', ''); 
define('DB_NAME', 'paypal'); 
 
define('PAYPAL_URL', (PAYPAL_SANDBOX == true)?"https://www.sandbox.paypal.com/cgi-bin/webscr":"https://www.paypal.com/cgi-bin/webscr");