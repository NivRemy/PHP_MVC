<?php
session_start();
require_once 'controller/frontendController.php';
if(isset($_GET['sk'])){
	session_destroy();
	header('Location: index.php');
}else if(isset($_GET['delete']) && isset($_SESSION['mail'])){
	require_once 'controller/backendController.php';
	removeTravel();
}elseif(isset($_POST['title']) && isset($_POST['content'])){
	require_once 'controller/backendController.php';
	addTravel();
}elseif(isset($_POST['mail']) && isset($_POST['password'])){
	require_once 'controller/backendController.php';
	login();
} elseif(isset($_GET['page'])) {
	displayPage();
} else {
	displayTravels();
}
