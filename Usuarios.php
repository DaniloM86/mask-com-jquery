<?php

class Usuarios{

    private $pdo;

    public function connect($dbname,$servername,$username,$password){
        global $pdo;

        try {
            $pdo= new PDO("mysql:dbname=".$dbname.";host=".$servername, $username, $password);
            // verifica se não há nenhum erro de conexão

          } catch(PDOException $e) {
            echo "Erro de conexão com banco de dados: " . $e->getMessage();
          }
    }


    public function cadastro($Nome,$SobreNome,$Email,$Telefone,$Cpf,$Indentidade){
        global $pdo;
        $sql = $pdo->prepare("SELECT id FROM tb_jquery WHERE Email = :Email ");
        $sql->bindValue(":Email",$Email);
        $sql->execute();

        if($sql->rowCount() > 0)
        {
            return false;
        }
        else
        {
            $sql = $pdo->prepare('INSERT INTO tb_jquery(Nome,SobreNome,Email,
             Telefone,Cpf,Identidade)
            VALUES(:Nome,:SobreNome,:Email,:Telefone,:Cpf,:Identidade)');

                $sql->bindValue(":Nome",$Nome);
                $sql->bindValue(":SobreNome",$SobreNome);
                $sql->bindValue(":Email",$Email);
                $sql->bindValue(":Telefone",$Telefone);
                $sql->bindValue(":Cpf",$Cpf);
                $sql->bindValue(":Identidade",$Indentidade);
                $sql->execute();
                return true;
            }
        }
    }