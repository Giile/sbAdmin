<?php

require_once "./models/ConexaoBanco.php";

class Pessoa extends ConexaoBanco {
    function __construct(){
        parent::__construct();
    }

    function selectAll() {
        $sql = $this->conBD->prepare("SELECT * FROM pessoa ORDER BY nome");
        $sql->execute();
        return $sql->fetchAll();    
    }

    function insert($data) {
        $sql = $this->conBD->prepare("INSERT INTO pessoa (Nome, CPF, Idade, Telefone, Email, Endereco, Observacao) VALUES (:Nome, :CPF, :Idade, :Telefone, :Email, :Endereco, :Observacao)");
        $sql->bindParam(":Nome", $data["Nome"]);
        $sql->bindParam(":CPF", $data["CPF"]);
        $sql->bindParam(":Idade", $data["Idade"]);
        $sql->bindParam(":Telefone", $data["Telefone"]);
        $sql->bindParam(":Email", $data["Email"]);
        $sql->bindParam(":Endereco", $data["Endereco"]);
        $sql->bindParam(":Observacao", $data["Observacao"]); 
        $sql->execute();
        return $sql->rowCount();
    }
}