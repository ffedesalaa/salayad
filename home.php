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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <a href="home.php"><div class="logo"><b>MOMENTUM</b></div></a>
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
            <a href="home.php">
                <div class="main__menu__selezione" id="home">
                    <div class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                    </div>
                    <div class="tendina">
                        HOME
                    </div>
                </div>
            </a>

            <a href="File_PHP/esplora.php">
                <div class="main__menu__selezione" id="esplora">
                    <div class="icon">
                        <ion-icon name="globe-outline"></ion-icon>
                    </div>
                    <div class="tendina">
                        ESPLORA
                    </div>
                </div>
            </a>
            <a href="File_PHP/seguiti.php">
                <div class="main__menu__selezione" id="seguiti">
                    <div class="icon">
                        <ion-icon name="accessibility-outline"></ion-icon>
                    </div>
                    <div class="tendina">
                        SEGUITI
                    </div>
                </div>
            </a>
            <a href="File_PHP/messaggi.php">
                <div class="main__menu__selezione" id="messaggi">
                    <div class="icon">
                        <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                    </div>
                    <div class="tendina">
                        MESSAGGI
                    </div>
                </div>
            </a>
            <a href="File_PHP/crea.php">
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
        <div class="main__pagina">
            <div class="main__pagina__post">
                <div class="post">
                    
                </div>
                <div class="post">
                    
                </div>
                <div class="post">
                    
                </div>
            </div>
            <div class="main__pagina__profilo">
                <div class="main__pagina__fotoprofilo">
                    
                </div>
                <div class="main__pagina__profilo__info" id="nickname">
                    <p>Non hai un account?</p>
                </div>
                <a href="File_PHP/signin.php" class="main__pagina__profilo__registrati"><button value="submit" id="signin">SIGNIN</button></a>
            </div>
        </div>
    </main>

    <footer>
        <div><a>Ahmad Fayad - Federico Sala</a></div>
    </footer>
</body>
</html>