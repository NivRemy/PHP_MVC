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

function setArticle($topic){
	$db = connect();

	$sql = 'INSERT INTO topics (title,content,img) VALUES (:title,:content,:img)';

	$request = $db->prepare($sql);

	$request->execute([
		':title' => htmlentities(strip_tags($topic['title'])),
		':content' => htmlentities(strip_tags($topic['content'])),
		':img' => htmlentities(strip_tags($topic['img'])),
	]);
}

function deleteTravel($id){
	$db = connect();

	$sql = 'DELETE FROM topics WHERE id = :id';

	$request = $db->prepare($sql);

	$request->execute([
		':id' => htmlentities(strip_tags($id))
	]);
}