<?php

class DBconnection {
	protected $db;
	public function __construct(){
		try{
			$this->db = new PDO("mysql:host=localhost;dbname=shopnerkhuje","root","");
			

		}
		
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
}





?>