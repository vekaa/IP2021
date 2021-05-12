<?php
require_once '../config/db.php';

class DAO {
	private $db;

	// za 2. nacin resenja
	private $SELECT_FIRST_N_PROIZVODJAC = "SELECT * FROM proizvodjac ORDER BY imepr ASC LIMIT ?";

	// jedan prema vise 1-*
	private $SELECT_VOZILA_BY_PROIZVODJAC = "SELECT * FROM vozilo WHERE imepro = ?";
	private $SELECT_VOZILA_BY_ZEMLJAPOREKLA = "SELECT vozilo.*, proizvodjac.zemljaporekla FROM vozilo JOIN proizvodjac ON vozilo.imepro = proizvodjac.imepr WHERE proizvodjac.zemljaporekla = ?";
	private $SELECT_VOZILA_BY_KATEGORIJA_TRAJANJE = "SELECT vozilo.*, kategorije.* FROM vozilo JOIN kategorije ON vozilo.kategorija = kategorije.kategorija WHERE kategorije.trajanje >= ?";

	// vise prema vise *-*
	private $SELECT_VOZILA_BY_VOZAC = "SELECT vozac.*, vozacvozilo.*, vozilo.* FROM vozac JOIN vozacvozilo ON vozac.idvoz = vozacvozilo.idvoz JOIN vozilo ON vozacvozilo.idvzl = vozilo.idvzl WHERE vozac.idvoz = ?";


	public function __construct()
	{
		$this->db = DB::createInstance();
	}

	public function selectFirstNProizvodjac($n)
	{
		// 1. nacin-NE RADI
		/*
		$statement = $this->db->prepare("SELECT * FROM proizvodjac ORDER BY imepr ASC LIMIT :n");
		$statement->execute(array(':n' => $n));	// NE RADI, ???

		$result = $statement->fetchAll();
		return $result;
		*/

		// 2. nacin

		$statement = $this->db->prepare($this->SELECT_FIRST_N_PROIZVODJAC);
		$statement->bindValue(1, $n, PDO::PARAM_INT);

		$statement->execute();

		$result = $statement->fetchAll();
		return $result;
	}

	public function selectVozilaByProizvodjac($p)
	{
		$statement = $this->db->prepare($this->SELECT_VOZILA_BY_PROIZVODJAC);
		$statement->bindValue(1, $p);

		$statement->execute();

		$result = $statement->fetchAll();
		return $result;
	}
	public function selectVozilaByZemljaporekla($p)
	{
		$statement = $this->db->prepare($this->SELECT_VOZILA_BY_ZEMLJAPOREKLA);
		$statement->bindValue(1, $p);

		$statement->execute();

		$result = $statement->fetchAll();
		return $result;
	}
	public function selectVozilaByKategorijaTrajanje($p)
	{
		$statement = $this->db->prepare($this->SELECT_VOZILA_BY_KATEGORIJA_TRAJANJE);
		$statement->bindValue(1, $p);

		$statement->execute();

		$result = $statement->fetchAll();
		return $result;
	}
	public function selectVozilaByVozac($p)
	{
		$statement = $this->db->prepare($this->SELECT_VOZILA_BY_VOZAC);
		$statement->bindValue(1, $p);

		$statement->execute();

		$result = $statement->fetchAll(PDO::FETCH_BOTH);	// da dobijemo rezultate po rednom broju kolona jer imamo dva godista pa nam to ne odgovara
		return $result;
	}
}
?>
