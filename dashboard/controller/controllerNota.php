<?php
/*
    Projeto: Universidade ACME area do aluno
    Autor: Alcateck
    Data: 23/11/2018
    Objetivo: Controlar as ações do formulário de notas

    Editado por: Gabriel
    Data  da alteração: 23/11/2018
    Conteudo alterado: listarByAluno

*/
class controllerNota {

    //Construtor
    public function __construct(){
        @session_start();
        require_once($_SESSION['require']."dashboard/model/notaClass.php");
        require_once($_SESSION['require']."dashboard/model/dao/notaDAO.php");
    }

    //Listar todas as notas registradas de um aluno
    public function listarNotaByAluno($matricula){

        //Instancia da model Nota
        $notaDAO = new NotaDAO();
        //Chama o método para selecionar todos os registros
        $listNota = $notaDAO->selectByAluno($matricula);
        //Retorna o resultado obtido para a view
        return $listNota;

    }

}

?>
