<?php
    session_start();
    require('../Sessioni/SessioneInfo.php');
    require('../Sessioni/SessioneAmici.php');
    require('../Sessioni/Sessione_Controlli_Infoamici.php');
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Network</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <div id="container-pagina">
        <?php
            require('../Script_PHP/HeaderScript.php');
        ?>

        <main>
            <?php
                require('../Script_PHP/MainMenu.php');
            ?>

            <div class="main__containerPagina">
                <div class="main__pagina">
                    <div class="main__pagina__infoprofile">
                        <div class="main__infoprofile__foto">
                            <img src="../../Immagini/Foto_Profilo/<?php echo $nomeFile;?>" alt="">
                        </div>
                        <div class="main__infoprofile__username">
                            <?php
                                echo "@".$username;
                            ?>
                        </div>
                    
                        <a href="amici.php" id="friends">
                            <div class="main__infoprofile__info" id="totamici">
                                <p><?php echo $nAmici;?></p> <ion-icon name="accessibility-outline" class="proficon" ></ion-icon>
                            </div>
                        </a>
                        <a href="modifica.php" id="settings">
                            <div class="main__infoprofile__info">
                                <ion-icon name="settings-outline" class="proficon" ></ion-icon> 
                            </div>
                        </a>
                    </div>
                    <div class="main__infoprofile__post">
                        <div class="infoprofile__post">
                            
                        </div>
                        <div class="infoprofile__post">
                            
                        </div>
                        <div class="infoprofile__post">
                            
                        </div>
                    </div>
                </div>
            </div>
        </main>

    <footer class="footer__profilo">
        <div><a>Ahmad Fayad - Federico Sala</a></div>
    </footer>

        <script>
            <?php 
            if($accesso === false):
            ?>
            var linkEsplora = document.getElementById('linkEsplora');
            var linkSeguiti = document.getElementById('linkSeguiti');
            var linkMessaggi = document.getElementById('linkMessaggi');
            var linkCrea = document.getElementById('linkCrea');
            linkEsplora.href = linkSeguiti.href =  linkMessaggi.href =  linkCrea. href= "../Accesso/login.php";
            <?php 
            endif
            ?>
        </script>
    <div id="container-pagina">
</body>
</html>