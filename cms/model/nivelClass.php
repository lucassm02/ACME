<?php
class Nivel{
    
    private $idNivel;
    private $nome;
	
	public function __construct(){
		require_once('dao/nivelDAO.php');
	}

    public function getIdNivel(){
		return $this->idNivel;
	}

	public function setIdNivel($idNivel){
		$this->idNivel = $idNivel;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}
}


?>