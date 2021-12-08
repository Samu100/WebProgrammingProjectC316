<?php
	$user = 'root';
	$password = '';
	$db = 'Sculptures';

	$db = new mysqli('localhost', $user, $password, $db) or die("Unable to connect");

	echo "good work";


?>