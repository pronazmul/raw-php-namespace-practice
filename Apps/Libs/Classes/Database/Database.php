<?php
namespace Classes\Admin;
use mysqli;

abstract class Connection{

	private $connection;

	public function __construct(){

	$this -> connection = new mysqli('localhost','root','','oop_crud');

	echo "Database Connected Successfully";
	}
}
?>