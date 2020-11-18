<?php

require_once "model.php";

class View{

	// crée le template pour les messages
	public function showMessages($dataArray){
		$html = "";
		for ($i=0; $i<count($dataArray); $i++) {	
			$html.= '<div class="card" style="margin: 1rem 0;">
			        	<div class="card-body">
			        		<h5 class="card-title">'.$dataArray[$i]["nickname"].'</h5>
							<p class="card-text">'.$dataArray[$i]["message"] .'</p>
							<form method="POST" action="">
								<input type="hidden" id="id" name="id" value="'.$dataArray[$i]["id"].'"/>
								<input type="submit" onclick="return confirm(\'Êtes-vous sûr de vouloir supprimer ce message ??\')" value="Suuprimer le message" />
							</form>
						</div>
					</div>';
		}
		return $html;
    }
}