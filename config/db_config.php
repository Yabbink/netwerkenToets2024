<?php

$dbhost = 'localhost:3306';
$dbuser = 'net24yhuet';
$dbpass = '}p@hCauYq{M0';
$dbname = 'net24yhuet_netwerkenToets2024';

$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if($conn->connect_error)
{
	die('Failed Connect ! '.$conn->connect_error);
}
?>