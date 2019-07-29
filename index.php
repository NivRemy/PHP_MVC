<?php
session_start();
require_once 'controller/frontendController.php';
if(isset($_GET['sk'])){
	session_destroy();
	header('Location: index.php');
}elseif(isset($_POST['mail']) && isset($_POST['password'])){
	require_once 'controller/backendController.php';
	login();
} elseif(isset($_GET['page'])) {
	displayPage();
} else {
	displayTravels();
}
