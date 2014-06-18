<?php



	include ( "NexmoMessage.php" );


	/**
	 * To send a text message.
	 *
	 */

	// Step 1: Declare new NexmoMessage.
	$nexmo_sms = new NexmoMessage('751b4bd3', '520dd4e3');

	// Step 2: Use sendText( $to, $from, $message ) method to send a message.
	$info = $nexmo_sms->sendText( "+91".$_REQUEST[phone], 'demo123', 'Hello Parthiv');

	// Step 3: Display an overview of the message
	echo $nexmo_sms->displayOverview($info);

	// Done!

?>