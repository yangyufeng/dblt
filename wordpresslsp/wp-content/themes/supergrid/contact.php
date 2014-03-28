<?php
if(file_exists('../../../wp-load.php')) :
		include '../../../wp-load.php';
	else:
		include '../../../../wp-load.php';
	endif;  
	
// The email address you want all emails to be sent to.
$to = get_option('admin_email');

// The subject will display the senders name
$subject = $_POST['name'];

// The Message
$message = $_POST['message'];

// From
$from = $_POST['email'];

// Header
$headers = "From:" . $from;

// Valid Email Function
function is_valid_email($from) {
  return preg_match('#^[a-z0-9.!\#$%&\'*+-/=?^_`{|}~]+@([0-9.]+|([^\s]+\.+[a-z]{2,6}))$#si', $from);
}

// Check if valid email and send, else display error
if (!is_valid_email($from)) {
  echo 'invalid_email';
} else if (!empty($subject) && !empty($message) && !empty($from)) {
	mail($to,$subject,$message,$headers);
	echo "success";
} else {
	echo "error";
}
?> 