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
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <a href="../home.php"><div class="logo"><b>MOMENTUM</b></div></a>
        <div class="barraRicerca">
            <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
            <input type="text" name="barra" id="barra" placeholder="Cerca">
            <ion-icon name="search-outline" id="search-outline"></ion-icon>
        </div>
        <?php 
        if($accesso === true){
            echo '<a href="./File_PHP/logout.php"><div class="login"><b>LOGOUT</b></div></a>';

        }
        else{
            echo'<a href="./File_PHP/login.php"><div class="login"><b>LOGIN</b></div></a>';
        }
        ?>

    </header>
    <main>
        <div class="main__menu">
            <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
                <a href="home.php" id="linkHome">
                    <div class="main__menu__selezione" id="home">
                        <div class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </div>
                        <div class="tendina">
                            HOME
                        </div>
                    </div>
                </a>
                <a href="File_PHP/esplora.php" id="linkEsplora">
                    <div class="main__menu__selezione" id="esplora">
                        <div class="icon">
                            <ion-icon name="globe-outline"></ion-icon>
                        </div>
                        <div class="tendina">
                            ESPLORA
                        </div>
                    </div>
                </a>
                <a href="File_PHP/seguiti.php" id="linkSeguiti">
                    <div class="main__menu__selezione" id="seguiti">
                        <div class="icon">
                            <ion-icon name="accessibility-outline"></ion-icon>
                        </div>
                        <div class="tendina">
                            AMICI                                                           
                        </div>
                    </div>
                </a>
                <a href="File_PHP/messaggi.php" id="linkMessaggi">
                    <div class="main__menu__selezione" id="messaggi">
                        <div class="icon">
                            <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                        </div>
                        <div class="tendina">
                            MESSAGGI
                        </div>
                    </div>
                </a>
                <a href="File_PHP/crea.php" id="linkCrea">
                    <div class="main__menu__selezione" id="crea">
                        <div class="icon">
                            <ion-icon name="add-circle-outline"></ion-icon>
                        </div>
                        <div class="tendina">
                            CREA
                        </div>
                    </div>
                </a>
        </div>

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
        linkEsplora.href = linkSeguiti.href =  linkMessaggi.href =  linkCrea. href= "File_PHP/login.php";
        <?php 
        endif
        ?>
    </script>

</body>
</html>