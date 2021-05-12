<?php
require_once 'db.php';

class DAO {
	private $db;

	// za 2. nacin resenja
	private $INSERTOSOBA = "INSERT INTO osobe (ime, prezime, JMBG, vremeUpisa) VALUES (?, ?, ?, CURRENT_TIMESTAMP)";
	//private $INSERTOSOBA1 = "INSERT INTO osoba (ime, prezime, JMBG, vremeUpisa) VALUES (:ime, :prezime, :jmbg, CURRENT_TIMESTAMP)";
	private $DELETEOSOBA = "DELETE  FROM osobe WHERE idosoba = ?";
	private $SELECTBYID = "SELECT * FROM osobe WHERE idosoba = ?";	
	private $GETLASTNOSOBA = "SELECT * FROM osobe ORDER BY idosoba DESC LIMIT ?";

	private $UPDATEJMBGBYID = "UPDATE `osobe` SET `jmbg`= ? WHERE `idosoba`= ?";
	private $SELECTALL = "SELECT * FROM `osobe` ";

	public function __construct()
	{
		$this->db = DB::createInstance();
	}

	public function getLastNOsoba($n)
	{
		// 1. nacin-NE RADI
		/*
		$statement = $this->db->prepare("SELECT * FROM osoba ORDER BY idosoba DESC LIMIT :n");
		$statement->execute(array(':n' => $n,));	// NE RADI, ???
		
		$result = $statement->fetchAll();
		return $result;
		*/
		
		// 2. nacin
		
		$statement = $this->db->prepare($this->GETLASTNOSOBA);
		$statement->bindValue(1, $n, PDO::PARAM_INT);
		
		$statement->execute();
		
		$result = $statement->fetchAll();
		return $result;
	}

	public function insertOsoba($ime, $prezime, $JMBG)
	{
		// 1. nacin
		/*
		$statement = $this->db->prepare("INSERT INTO osoba (ime, prezime, JMBG, vremeUpisa) VALUES (:ime, :prezime, :JMBG, CURRENT_TIMESTAMP)");
		$statement->execute(array(':ime'=>$ime, ':prezime'=> $prezime, ':JMBG'=>$JMBG));
		*/
		
		// 2. nacin
		$statement = $this->db->prepare($this->INSERTOSOBA);
		$statement->bindValue(1, $ime);
		$statement->bindValue(2, $prezime);
		$statement->bindValue(3, $JMBG);
		
		$statement->execute();
	}

	public function deleteOsoba($idosoba)
	{
		// 1. nacin
		/*
		$statement = $this->db->prepare("DELETE  FROM osoba WHERE idosoba = :idosoba");
		$statement->execute(array(':idosoba' => $idosoba));
		*/
		
		// 2. nacin
		$statement = $this->db->prepare($this->DELETEOSOBA);
		$statement->bindValue(1, $idosoba);
		
		$statement->execute();
	}

	public function getOsobaById($idosoba)
	{
		// 1. nacin
		/*
		$statement = $this->db->prepare("SELECT * FROM osoba WHERE idosoba = :idosoba");
		$statement->execute(array(':idosoba' => $idosoba));
		
		$result = $statement->fetch();
		return $result;
		*/
		
		// 2. nacin
		$statement = $this->db->prepare($this->SELECTBYID);
		$statement->bindValue(1, $idosoba);
		
		$statement->execute();
		
		$result = $statement->fetch();
		return $result;
	}

	public function updateOsobaJMBGbyID($JMBG, $id)
	{
		$statement = $this->db->prepare($this->UPDATEJMBGBYID);
		$statement->bindValue(1, $JMBG);
		$statement->bindValue(2, $id);
		
		$statement->execute();
	}

	public function selectAllOsobe(){
		$statement = $this->db->prepare($this->SELECTALL);
		$statement->execute();

		$res = $statement->fetchAll();
		return $res;
	}
}
?>
