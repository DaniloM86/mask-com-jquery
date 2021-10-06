
<?php

require_once('Usuarios.php');

$User = new Usuarios;


if(isset($_POST['btn'])){
   $Nome = ($_POST['Nome']);
   $SobreNome = addslashes($_POST['SobreNome']);
   $Email = addslashes($_POST['Email']);
   $Telefone = addslashes($_POST['Telefone']);
   $Cpf = addslashes($_POST['Cpf']);
   $Identidade = addslashes($_POST['Identidade']);

   if(!empty($_POST['Nome']) && !empty($_POST['SobreNome']) && !empty($_POST['Email'])
        && !empty($_POST['Telefone']) && !empty($_POST['Cpf']) && !empty($_POST['Identidade'])){

            $User->connect("jquery","localhost","root","");
            if($User->cadastro($Nome,$SobreNome,$Email,$Telefone,$Cpf,$Identidade)){

                echo 'Usuario cadastrado com sucesso';

            }
            else{
                echo 'Usuario já está cadastrado';
            }
   } 
   else{
       echo 'preencha todos os campos';
   }

}
   

