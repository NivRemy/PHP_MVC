<?php
require_once 'model/backendModel.php';

function login(){
	$user = getUser($_POST['mail']);
	if($user){
		if(password_verify($_POST['password'], $user['password'])){
			$_SESSION['mail'] = $_POST['mail'];
			displayTravels();
		} else {
			echo 'mdp pas bon';
		}
	} else{
		echo 'pas de user';
	}
}

function displayTravelForm(){
	require_once 'view/displayVoyageForm.php';
}

function addTravel(){
	if(isset($_FILES['img']) && !empty($_FILES['img']['name'])){
		$img = $_FILES['img']['name'];
		$ext = pathinfo($_FILES['img']['name'])['extension'];
		if(in_array($ext, ['png','jpg','jpeg'])){
			move_uploaded_file( $_FILES['img']['tmp_name'], 'img/' . $img);
		}
	} else{
		$img = null;
	}
	$topic = [
		'title'=>$_POST['title'],
		'content'=>$_POST['content'],
		'img'=>$img
	];
	setArticle($topic);
	displayTravels('Insertion ok');
}