#IndexTo
<?php

require_once 'views/header.php';
require_once 'views/sidenav.php';

if( isset($_GET['action']) ){
	switch($_GET['action']){
	case 'home':
		home();
		break;
	case 'story':
		story();
		break;	
	case 'confess':
		confess();
		break;	
	case 'chat':
		chat();
		break;
	case 'account':
		account();
		break;	
	default:
		home();
	}
}
else {
	home();
}

function home(){
	include "views/home.php";
}
function story(){
	include "views/story.php";
}
function confess(){
	include "views/confess.php";
}
function chat(){
	include "views/chat.php";
}
function account(){
	include "views/account.php";
}

require_once 'views/footer.php';
?>