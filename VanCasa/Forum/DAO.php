<?php
require_once 'db.php';

class DAO {
	private $db;

	private $INSERTOSOBA = "INSERT INTO osobe (ime, prezime, godiste) VALUES (?, ?, ?)";
	private $DELETEOSOBA = "DELETE  FROM osobe WHERE id = ?";
	private $SELECTBYID = "SELECT * FROM osobe WHERE id = ?";	

	private $UPDATEBYID = "UPDATE `osobe` SET ime= ?, prezime= ?, godiste=? WHERE id= ?";

	private $INSERTTOPIC = "INSERT INTO `topics`(`title`, `createTime`, `owner`) VALUES (?, CURRENT_TIMESTAMP, ?) ";
	private $ALLTOPICS = "SELECT * FROM `topics`";
	private $INSERTPOST = "INSERT INTO `posts` ( `tiopicId`, `text`, `createTime`, `owner`) VALUES (?, ?, CURRENT_TIMESTAMP, ?)";
	private $GETTOPIC = "SELECT posts.id, posts.tiopicId, posts.text, posts.createTime, posts.owner FROM topics JOIN posts ON topics.id=posts.tiopicId WHERE topics.id= ?";
	private $GETTOPICNAME = "SELECT id, title FROM `topics` WHERE id = ? ";
	
	public function __construct(){
		$this->db = DB::createInstance();
	}

	public function insertTopic($topic){
		$statement = $this->db->prepare($this->INSERTTOPIC);
		$statement->bindValue(1, $topic->title);
		$statement->bindValue(2, $topic->owner);

		$statement->execute();
	}

	public function insertPost($post){
		$statement = $this->db->prepare($this->INSERTPOST);
		$statement->bindValue(1, $post->topicID);
		$statement->bindValue(2, $post->text);
		$statement->bindValue(3, $post->owner);

		$statement->execute();
	}

	public function selectAll(){
		$statement = $this->db->prepare($this->ALLTOPICS);
		$statement->execute();

		$result = $statement->fetchAll(PDO::FETCH_OBJ);
		return $result;
	}

	public function getTopicByID($id){
		$statement = $this->db->prepare($this->GETTOPIC);
		$statement->bindValue(1,$id);
		$statement->execute();

		$result = $statement->fetchAll(PDO::FETCH_OBJ);
		return $result;
	}

	public function getTopic($id){
		$statement = $this->db->prepare($this->GETTOPICNAME);
		$statement->bindValue(1,$id);
		$statement->execute();

		$result = $statement->fetch();
		return $result;
	}
}
?>
