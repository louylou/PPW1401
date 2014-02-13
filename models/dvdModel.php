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
		$statement = $this->db->prepare("SELECT * FROM profiles");  //was "SELECT * FROM DVDs"
	
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
	
	public function getCal() {
		$statement = $this->db->prepare("SELECT * FROM events");  
	
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
	$statement= $this->db->prepare("SELECT * FROM profiles WHERE profile_id= :pro_id"); // was "SELECT * FROM DVDs WHERE dvdId = :dvd_id"
	
	try {
		if($statement->execute(array(":pro_id"=>$id))){ //was "dvd_id
			
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
	
	
	public function updateDetail($id,$fullname,$clothes,$food,$movies,$hobbies,$other,$dislikes){ //$id,$title,$year, $producer, $actor
	
	//"UPDATE DVDs SET title = :title, yearMade = :year, producer = :producer, mainActor = :mainActor WHERE dvdId = :dvd_id"
	$statement= $this->db->prepare("UPDATE DVDs SET profile_fullname = :fullname, likes_clothes = :clothes, likes_food = :food, likes_movies = :movies, 
	likes_hobbies = :hobbies, likes_other = :other, dislikes = :dislikes, WHERE profile_id = :pro_id");
	
	try {
		if($statement->execute(array(":fullname"=>$fullname, ":clothes"=>$clothes,":food"=>$food,":movies"=>$movies,
		":hobbies"=>$hobbies,":other"=>$other, ":dislikes"=>$dislikes, ":pro_id"=>$id))){
			
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
	
	$statement= $this->db->prepare("DELETE FROM profiles WHERE profile_id = :id"); //"DELETE FROM DVDs WHERE dvdId = :id"
	
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