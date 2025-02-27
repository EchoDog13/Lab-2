<?php

//replace username with your username e.g. xyz12  in both places
// and password with your password

try {

	$con = new PDO('mysql:host=learn-mysql.cms.waikato.ac.nz;dbname=kb477', 'kb477', 'my413052sql');
} catch (PDOException $e) {
	echo "Database connection error " . $e->getMessage();
}

