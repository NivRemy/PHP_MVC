<?php
require 'bddConfig.php';

function getTravels(){

	$db = connect();

	$response = $db->query('SELECT * FROM topics');

	return $response->fetchAll(PDO::FETCH_ASSOC);
}

function getTravel($id){
	$db = connect();

	$sql = 'SELECT * FROM topics WHERE id = :id';

	$request = $db->prepare($sql);

	$request->execute([
		':id' => htmlentities(strip_tags($id))
	]);

	return $request->fetch(PDO::FETCH_ASSOC);
}
