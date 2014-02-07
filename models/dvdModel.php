<!-- 
All the functions for the site. 
Such as displaying, reading, adding or deleting data
-->


<?php

class dvdModel { //responsible for managing the data from the database

	private $db;
	
	
	public function __construct($dsn, $user, $pass) {
		try {
		
			$this->db = new \PDO($dsn, $user, $pass);
			
		}//end try
		
		catch (\PDOException $e) {
			
			var_dump($e);
			
		}//end catch
		
	} //end __construct
	
	/**
	* @return array Records from the database, as an array of arrays
	*/

	public function getLatestDvd() {
		$statement = $this->db->prepare("SELECT * FROM DVDs");
	
		try {
			if($statement->execute()) {
				
				$rows = $statement->fetchAll(\PDO::FETCH_ASSOC);
				return $rows;
			
			}//end if
			else{
				echo "No Go<br>";
			}
		}//end try
	
		catch(\PDOException $e) {
	
			echo "Could not query the database."; 
			var_dump($e);
			
		}//end catch
		
		return array();
		
	}//end getLatestDvd


	public function getDetail($id){
	$statement= $this->db->prepare("SELECT * FROM DVDs WHERE dvdId = :dvd_id");
	
	try {
		if($statement->execute(array(":dvd_id"=>$id))){
			
			$rows = $statement->fetchAll(\PDO::FETCH_ASSOC);
			return $rows;
			
		}//end if
	}//end try
	
		catch(\PDOException $e) {
	
			echo "Could not query the database."; 
			var_dump($e);
			
		}//end catch
		
		return array();
	
	} //end getDetail
	
	
	public function updateDetail($id,$title,$year, $producer, $actor){
	
	$statement= $this->db->prepare("UPDATE DVDs SET title = :title, yearMade = :year, producer = :producer, mainActor = :mainActor WHERE dvdId = :dvd_id");
	
	try {
		if($statement->execute(array(":title"=>$title, ":year"=>$year,":producer"=>$producer,":mainActor"=>$actor,":dvd_id"=>$id))){
			
			$rows = $statement->fetchAll(\PDO::FETCH_ASSOC);
			return true;
			
		}//end if
	}//end try
	
		catch(\PDOException $e) {
	
			echo "Could not query the database."; 
			var_dump($e);
			
		}//end catch
	
	} //end updateDetail



	public function deleteDetail($id){
	
	$statement= $this->db->prepare("DELETE FROM DVDs WHERE dvdId = :id");
	
	try {
		if($statement->execute(array(":id"=>$id))){
			
			$rows = $statement->fetchAll(\PDO::FETCH_ASSOC);
			
			header("location: index.php");
			exit;
			
			return true;
			
		}//end if
	}//end try
	
		catch(\PDOException $e) {
	
			echo "Could not query the database."; 
			var_dump($e);
			
		}//end catch
			
	} //end deleteDetail
	
	
	public function createDvd($title,$year, $producer, $actor){
	
	$statement= $this->db->prepare("INSERT INTO DVDs (title, yearMade, producer, mainActor)
		VALUE ('$title','$year','$producer','$actor')
		");
	
	try {
		if($statement->execute(array(":title"=>$title, ":year"=>$year,":producer"=>$producer,":mainActor"=>$actor))){
			
			$rows = $statement->fetchAll(\PDO::FETCH_ASSOC);
			
			return true;
			
		}//end if
	}//end try
	
		catch(\PDOException $e) {
	
			echo "Could not query the database."; 
			var_dump($e);
			
		}//end catch
			
	} //end createDvd	
} //end Class dvdModel

?>