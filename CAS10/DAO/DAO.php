<?php
require_once '../config/db.php';
require_once '../model/Osoba.php';

class DAO {
	private $db;

	private $INSERTOSOBA = "INSERT INTO osobe (ime, prezime, godiste) VALUES (?, ?, ?)";
	private $DELETEOSOBA = "DELETE  FROM osobe WHERE id = ?";
	private $SELECTBYID = "SELECT * FROM osobe WHERE id = ?";	

	private $UPDATEBYID = "UPDATE `osobe` SET ime= ?, prezime= ?, godiste=? WHERE id= ?";
	private $SELECTALL = "SELECT * FROM `osobe` ";
	
	public function __construct()
	{
		$this->db = DB::createInstance();
	}

	public function insert($osoba)
	{
		$statement = $this->db->prepare($this->INSERTOSOBA);
		$statement->bindValue(1, $osoba->ime);
		$statement->bindValue(2, $osoba->prezime);
		$statement->bindValue(3, $osoba->godiste);
		
		$statement->execute();
	}

	public function deleteByID($idosoba)
	{
		$statement = $this->db->prepare($this->DELETEOSOBA);
		$statement->bindValue(1, $idosoba);
		
		$statement->execute();
	}

	public function getByID($idosoba)
	{
		$statement = $this->db->prepare($this->SELECTBYID);
		$statement->bindValue(1, $idosoba);
		
		$statement->execute();
		
		$result = $statement->fetch(PDO::FETCH_OBJ);
		return $result;
	}

	public function editByID($osoba){
		$statemant = $this->db->prepare($this->UPDATEBYID);
		$statemant->bindValue(1,$osoba->ime);
		$statemant->bindValue(2,$osoba->prezime);
		$statemant->bindValue(3,$osoba->godiste);
		$statemant->bindValue(4,$osoba->id);
		$statemant->execute();


	}

	public function selectOsobe(){
		$statement = $this->db->prepare($this->SELECTALL);
		$statement->execute();

		$result = $statement->fetchAll(PDO::FETCH_OBJ);
		return $result;
	}


}
?>
