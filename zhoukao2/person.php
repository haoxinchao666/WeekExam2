<?php 
class Person{
	private static $db = null;
	private function __construct()
	{

	}
	private function __clone()
	{

	}

	public function getInstance()
	{
		if(!(self::$db == null )){
           self::$db = new Person();
		}
		return self::$db;
	}
}






 ?>