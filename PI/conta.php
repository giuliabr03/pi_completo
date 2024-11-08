<?php if(!isset($_SESSION)){
    session_start();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIANNA</title>
    <link rel="stylesheet" href="gianna.css">
</head>
<body>
<header>
        <div class="head">
            
            <div class="logo"><img src="giannalogo.png">
 
            <a href="conta.php" class="perfb">
           <img src="do-utilizador.png" ></a>
            <a href="gianna2.html" class="compb"> 
            <img src="bolsa-de-compras.png"></a>
         </div>
         </div>
    </header>
<center>
 <img src="menina.png" alt="" style="width: 20%; margin-right:4%;">
 <h2 style="margin-right: 3%; font-style:oblique;">MINHA CONTA</h2>
  </center>
  <center>
  <br><br><br>
  
    <h2 style="margin-right: 3%;">Bem-vinda(o) <?php echo $_SESSION['nome'];?></h2>
    </center> 
    
</body>
</html>