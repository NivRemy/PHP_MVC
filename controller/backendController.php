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

function 