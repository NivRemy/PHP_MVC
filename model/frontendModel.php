<?php
require 'bddConfig.php';

function getTravels(){

	$db = connect();

	$response = $db->query('SELECT * FROM topics');

	return $response->fetchAll(PDO::FETCH_ASSOC);
}
