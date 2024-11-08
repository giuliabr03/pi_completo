<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="gianna.css">
</head>
<header>
    <div class="head">
        
        <div class="logo"><img src="giannalogo.png">

        <a href="conta.php" class="perfb">
       <img src="do-utilizador.png" ></a>
        <a href="" class="compb"> 
        <img src="bolsa-de-compras.png"></a>
     </div>
     </div>
</header>
<body>
<?php
    require_once ("class/dat.class.php");
    $con = new Database();
    $link = $con->getConexao();
    
   
        if(isset($_GET)) {
            $nome=$_GET["nome"];
            $sobrenome=$_GET["sobrenome"];
            $email=$_GET["email"];
            $cpf=$_GET["cpf"];
            $cep=$_GET["cep"];
            $tel=$_GET["tel"];
            $cart=$_GET["cart"];
            $senha=$_GET["senha"];
        

        $smtm = $link->prepare("INSERT INTO cadt (nome, sobrenome, email, cpf, cep, tel, cart, senha)
        VALUES ('$nome', '$sobrenome', '$email','$cpf', '$cep', '$tel', '$cart', '$senha')");
        
        $smtm->execute();
    }
      ?>
   
   <div class="v1">
     <video autoplay loop muted width="100%">
    <source src="Gianna.mp4" type="video/mp4">
   
</video>
</div>      


<section class="zen">
  <a class="botz" href="pi1-0.html">FEMININO</a>
</section>

<section class="fel">
   <a class="botf" href="pi2-0.html">MASCULINO</a>
</section>

<section class="stor">
    <a class="bots" href="pi3-0.html">INFANTIL</a>
</section>
 


</body>
</html>