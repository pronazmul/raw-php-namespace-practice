<?php
spl_autoload_register(function($class_name){
	$class =  $class_name.".php";
	if (file_exists($class)) {
		require_once $class;
	}else{ return false;}
});

?>