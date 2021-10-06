<?php
  // session_start();
   require_once('ValidaCadastro.php');
  

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mask para campos</title>
    <!-- link de icons do bootstrap -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- arquivos bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- arquivos jquery para uso de mask -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>  
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.11.2/jquery.mask.min.js" integrity="sha512-Y/GIYsd+LaQm6bGysIClyez2HGCIN1yrs94wUrHoRAD5RSURkqqVQEU6mM51O90hqS80ABFTGtiDpSXd2O05nw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 
   
    
</head>
<body>
    <div class="container mt-4 pt-4">
      <form method="POST" action="ValidaCadastro.php">
      <h1 class="h3 mb-3 fw-normal text-capitalize">cadastrar-se</h1>
    

          <div class="form-floating">
            <input type="text" class="form-control" id="nome" name="Nome" placeholder="name@example.com">
            <label for="nome">NOME</label>
        </div>
          <div class="form-floating mt-4">
            <input type="text" class="form-control" id="Sobre Nome" name="SobreNome" placeholder="name@example.com">
            <label for="Sobre Nome">SOBRE NOME</label>
        </div>  
          <div class="form-floating mt-4">
            <input type="email" class="form-control" id="floatingInput"name="Email"placeholder="name@example.com">
            <label for="floatingInput">E-MAIL</label>
        </div>
          <div class="form-floating mt-4">
            <input type="tel" class="form-control" id="telefone" name="Telefone" placeholder="name@example.com">
            <label for="telefone">TELEFONE</label>  
        </div>
          <div class="form-floating mt-4">
            <input type="text" class="form-control" id="cpf" name="Cpf" placeholder="name@example.com">
            <label for="cpf">CPF</label>
        </div>
        <!--
          <div class="form-floating mt-4">
            <input type="text" class="form-control" id="identidade" name="Identidade" placeholder="name@example.com">
            <label for="identidade">IDENTIDADE</label>  
        </div>
        -->
          <button class="w-100 btn btn-lg btn-primary mt-4" type="submit" name="btn">Cadastrar-Se</button>
          <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
        </form>
        </div>
</body>
<!-- arquivos interno js  -->
 <script src=js/mask.js></script> 
 <html>



    
    

 


