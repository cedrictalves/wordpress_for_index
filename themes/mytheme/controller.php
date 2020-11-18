<?php

// call the Model and Viex
require_once "model.php" ;
require_once "view.php" ;

class Controller {

    // Send a message
	public function sendMessage(){
		$send = new Model();
		return $send->sendOneMessage();
	}

    // Get the messages
	public function showAllMessages(){
		$myModel = new Model();
		$data = $myModel->getMessages();
		$myView = new View();
		return $myView->showMessages($data);
    }

    // Delete message by ID
    public function deleteMessage($id){
		$del = new Model();
		return $del->deleteOneMessage($id);
	}
}