<?php
require_once 'bddConfig.php';

function getUser($mail){
	$db = connect();

	$sql = 'SELECT * FROM users WHERE mail = :mail';

	$request = $db->prepare($sql);

	$request->execute([
		':mail' => htmlentities(strip_tags($mail))
	]);

	return $request->fetch(PDO::FETCH_ASSOC);
}