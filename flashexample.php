

<?php
 require './vendor/plasticbrain/php-flash-messages/src/FlashMessages.php';
// A session is required
if (!session_id()) @session_start();
	
// Instantiate the class
$msg = new \Plasticbrain\FlashMessages\FlashMessages();

// Add messages
$msg->info('This is an info message');
$msg->success('This is a success message');
$msg->warning('This is a warning message');
$msg->error('This is an error message');


// If you need to check for errors (eg: when validating a form) you can:
if ($msg->hasErrors()) {
	// There ARE errors
} else {
  // There are NOT any errors
}
	
// Wherever you want to display the messages simply call:
$msg->display();
?>