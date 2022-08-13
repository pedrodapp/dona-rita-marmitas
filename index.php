<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="stylesheet" href="css/index.css">    
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/page.css">
    <link rel="stylesheet" href="css/contato.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">     
    <title>Marmitas Dona Rita</title>
</head>
<body>
    <header>        
        <a href="index.php">
            <img src="images/logo-dona-rita-marmitas.png" alt="Logo" class="logo">
        </a>        
    </header>
    <nav>
        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="index.php?page=sobre">Sobre</a>
            </li>
            <li>
                <a href="index.php?page=contato">Pedidos</a> 
            </li>
        </ul>
    </nav>
    <div class="container">
        <div class="content">
            <?php
                $page = "home";

                if(isset($_GET['page'])){

                    if(file_exists("pages/".$_GET['page'].".php")){
                        $page = $_GET['page'];
                    }
                }

                include("pages/$page.php");
            ?>
        </div>
    </div>
    <footer class="footer">
        <div>
            <h4>Dona Rita Marmitas</h4>
            <br>            
            <p>📞 48 | 99999-0000</p>
            <p>📍 Rua do Espinafre - Nº750</p>
            <p>🥗 Marmita preparada com carinho!</p>
        </div>
        <div>
            <p class="aluno">&copy; Pedro Flores Silvano - RA:17554365</p>
        </div>
    </footer> 
</body>
</html>