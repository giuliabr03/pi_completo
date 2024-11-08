<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gianna</title>
    <link rel="stylesheet" href="gianna.css">
</head>
<body>
<header>
    <div class="head">
        
        <div class="logo"><img src="giannalogo.png">

        <a href="cad1.html" class="perfb">
       <img src="do-utilizador.png" ></a>
        <a href="cad2.php" class="compb"> 
        <img src="bolsa-de-compras.png"></a>
     </div>
     </div>
</header>
    <center>
     
        <h1>GIANNA</h1>
        <h2>ENTRE OU REGISTRE-SE</h2>
        <P>Crie sua conta para fazer parte do mundo GIANNA e descobrir nossas peças exclusivas</P>
        <br><br>
            <h1>Login</h1>
            <form action="" method="post">
            <input type="text" placeholder="E-mail" name="email" style="background-color: rgba(255, 255, 255, 0); border-color: rgb(0, 0, 0); border-width: 1px; 
             padding-bottom:5px; padding-top: 5px; padding-left: 5px; padding-right: 5px;">
            <br><br>
            <input type="password" placeholder="Senha" name="senha" style="background-color: rgba(255, 255, 255, 0); border-color: rgb(0, 0, 0); border-width: 1px; 
            padding-bottom:5px; padding-top: 5px; padding-left: 5px; padding-right: 5px;">
            <br><br>
            <div class="en">
            <input type="submit" value="Entre" style="background-color: rgb(0, 0, 0);  -webkit-text-fill-color: aliceblue; border: none; 
            padding-bottom:7px; padding-top: 7px; padding-left: 7px; padding-right: 7px;">
            </div>
 </form>         
  </center>
  
</body>
</html>
<?php
include('conexao.php');
if(isset($_POST['email']) || isset($_POST['senha'])){
    if(strlen($_POST['email']) == 0){
        echo"Preencha seu e-mail";
    }elseif(strlen($_POST['senha']) == 0){
        echo"Preencha sua senha";
    }else{
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);
        
        $sql = "SELECT * FROM cadt WHERE email = '$email' 
        AND senha = '$senha'";

        $sql_query = $mysqli->query($sql) or die("Falha ao executar código sql: " .$mysqli->error);

        $qtde = $sql_query->num_rows;
        if($qtde==1){
            $email = $sql_query->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['id'] = $email['id'];
            $_SESSION['nome'] = $email['nome'];
        

        header("Location: conta.php");

        }else{
            echo "<br><center>Falha! E-mail e/ou senha incoretos.</center>";
    
        }
    }
}
?>