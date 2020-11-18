<?php

class Model{

	protected $db;
	
	// Data base connection
	public function __construct(){
		try{
			$this->db = new PDO('mysql:host=db5001194055.hosting-data.io;dbname=dbs1021869;charset=utf8','dbu780069','TestWordPress1!');
    		$this->db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    		$this->db -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		}
		catch (Exception $e) { 
			die('Error : ' . $e->getMessage() . "\n");
		}
    }

    // Send a message
	public function sendOneMessage(){
		global $safePost;
		if (!empty($_POST["nickname"]) && !empty($_POST["message"])){
			$sql = 'INSERT INTO messages (nickname, message) VALUES (:nickname, :message)';
			$data = $this->db->prepare($sql);
			$data->execute(array(
				'nickname' => $_POST['nickname'],
				'message' => $_POST['message']
			));
        }
	}

	// Get the messages
	public function getMessages(){
		$sql = 'SELECT * FROM messages ORDER BY id DESC';
		$data = $this->db->query($sql);
		return $data->fetchAll();
    }
    
    // Delete message from ID
	public function deleteOneMessage($id){
		$sql = "DELETE FROM messages WHERE id=" . $id;
		$data = $this->db->query($sql);
		return $data;
	}

}