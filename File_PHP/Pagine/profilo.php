<?php
    session_start();
    if(isset($_SESSION['nome'])) $nome = $_SESSION['nome'];  else $nome = "";     
    if(isset($_SESSION['cognome'])) $cognome = $_SESSION['cognome'];  else $cognome = "";     
    if(isset($_SESSION['username'])) $username = $_SESSION['username']; else $username = "";
    if(isset($_SESSION['email'])) $email = $_SESSION['email'];  else $email = "";     
    if(isset($_SESSION['password'])) $password = $_SESSION['password'];  else $password = "";     
    if(isset($_SESSION['numero'])) $numero = $_SESSION['numero'];  else $numero = "";  
    if(isset($_SESSION['accesso'])) $accesso = $_SESSION['accesso']; else $accesso= false;
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
<?php
        require('../Script_PHP/HeaderScript.php');
    ?>

    <main>
        <?php
            require('../Script_PHP/MainMenu.php');
        ?>

        <div class="main__pagina__profile">
            <div class="main__pagina__infoprofile">
                <div class="main__infoprofile__foto">
                    
                </div>
                <div class="main__infoprofile__username">
                    <?php
                        echo "@".$username;
                    ?>
                </div>
                <a href="" id="likes">
                    <div class="main__infoprofile__info" >
                        <p>124.984 </p> <ion-icon name="heart-outline" class="proficon" ></ion-icon>
                    </div>
                </a>
                <a href="" id="friends">
                    <div class="main__infoprofile__info" >
                        <p>552.532.333 </p> <ion-icon name="accessibility-outline" class="proficon" ></ion-icon>
                    </div>
                </a>
                <a href="" id="settings">
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

</body>
</html>