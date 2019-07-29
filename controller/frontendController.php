<?php
require_once 'model/frontendModel.php';

function displayTravels(){
	$travels = getTravels();
	require 'view/displayTravels.php';
}

function displayLogin(){
	require_once 'view/displayLoginForm.php';
}

function displayPage(){
	switch ($_GET['page']) {
		case 'voyages':
			displayTravels();
			break;

		case 'loginForm':
			displayLogin();
			break;

		case 'voyageForm':
			if(isset($_SESSION['mail'])){
				require_once 'backendController.php';
				displayTravelForm();
			} else {
				displayLogin();
			}
			break;
		
		default:
			displayTravels();
			break;
	}
}