<?php
/*
    Projeto: Universidade ACME area do aluno
    Autor: Alcateck
    Data: 22/11/2018
    Objetivo: Controlar as ações do formulário de trabalhos

    Editado por: Gabriel
    Data  da alteração: 22/11/2018
    Conteudo alterado: insert

*/
class controllerTrabalho {

    //Construtor
    public function __construct(){
        @session_start();
        require_once($_SESSION['require']."dashboard/model/trabalhoClass.php");
        require_once($_SESSION['require']."dashboard/model/dao/trabalhoDAO.php");
    }

    //Inserir novo Trabalho
    public function inserirTrabalho($matricula,$idEntrega){
        //Verifica se os dados estão sendo enviados via POST pelo formulário
        if ($_SERVER['REQUEST_METHOD']=="POST") {
            //Instancia da classe Trabalho da Model
            $trabalhoClass = new Trabalho();

            //Guarda os dados retirados do FORM nos atributos da classe Trabalho
            $trabalhoClass->setMatriculaAluno($matricula);
            $trabalhoClass->setIdEntrega($idEntrega);
		  	$postClass->setArquivo($_POST['txtArquivo']);
            $postClass->setData("");

            //Instancia de Trabalho DAO e chamada do método insert
            $trabalhoDAO = new TrabalhoDAO();
            $trabalhoDAO->insert($trabalhoClass);
        }
    }

}

?>
