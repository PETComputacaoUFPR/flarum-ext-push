<?php
	
	require 'vendor/autoload.php';
	
	use Petcomputacaoufpr\Push\GCMPushMessage;

	$apiKey = "";
	$devices = array("");
	$message = "The message to send";


	$an = new GCMPushMessage($apiKey);
	$an->setDevices($devices);
	$response = $an->send($message);
