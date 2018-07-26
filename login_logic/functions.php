<?php 

function isLoggedIn($session){
	if(!isset($session['_chk']) || $session['_chk'] == null){
		return 0;
	} else {
		return 1;
	}
}

 ?>