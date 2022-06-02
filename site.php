<?php
     session_start();
     if ((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true)) {
         header('location:index.php');
     }

    $logado = $_SESSION['login'];
?>
<html> 
    <head>
        <title>SESSÃO LOGADO</title> 
    </head>
    <body>
        <?php echo "usuário logado:" . $logado; ?>
        <from action="deslogar.php" mathod="POST">
            <button type="submit" name="sair">Sair</button>
    </from>
    </body>
    </html>
    