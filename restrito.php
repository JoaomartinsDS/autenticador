<html>
    <head>
        <style>
            body{
                text-align: center;
                font-weight: bold;
                font-size: larger;
                color: red;
                        
            
            }
        </style>
        <?php
        session_start();
        if ((!isset($_SESSION["usuario"]) == true) and (!isset($_SESSION["senha"]) == true)){
            unset($_SESSION["usuario"]);
            unset($_SESSION["senha"]);
            header("location: index.php");
        }
        $logado = $_SESSION["usuario"];

        ?>

    </head>
    <body>
        <?php
        echo    "bem vindo $logado";
        ?>
    </body>
</html>