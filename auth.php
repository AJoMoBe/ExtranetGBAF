<?php

function connect () {
	return !empty($_SESSION['username']);
}

function user_connect () {
	if(!connect()) {
		header('Location: index.php');
  		exit();
	}
  

}
?>