<?php
    session_start();
    require('File_PHP/Sessioni/SessioneInfo.php');
    require('File_PHP/Sessioni/SessioneAmici.php');
    require('File_PHP/Sessioni/Sessione_Controlli_Infoamici.php');
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
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <header>
        <a href="home.php"><div class="logo"><b>MOMENTUM</b></div></a>
        <div class="barraRicerca">
            <input type="text" name="barra" id="barra" placeholder="Cerca">
            <ion-icon name="search-outline" id="search-outline"></ion-icon>
        </div>
        <?php 
        if($accesso === true){

            echo '<div class="contenitore-lognot">
                    <div  id="campanellina">
                        <ion-icon name="notifications-outline"></ion-icon>
                        <div id="numeroNotifica">'.$nRichieste.'</div>
                    </div>
                        <a href="./File_PHP/Accesso/logout.php"><div class="login"><b>LOGOUT</b></div></a> 
                </div>';

        }
        else{
            echo'<a href="./File_PHP/Accesso/login.php"><div class="login"><b>LOGIN</b></div></a>';
        }
        ?>

    </header>
    <main>
        <div class="main__menu">
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

            <a href="File_PHP/Pagine/esplora.php" id="linkEsplora">
                <div class="main__menu__selezione" id="esplora">
                    <div class="icon">
                        <ion-icon name="globe-outline"></ion-icon>
                    </div>
                    <div class="tendina">
                        ESPLORA
                    </div>
                </div>
            </a>
            <a href="File_PHP/Pagine/amici.php" id="linkAmici">
                <div class="main__menu__selezione" id="amici">
                    <div class="icon">
                        <ion-icon name="accessibility-outline"></ion-icon>
                    </div>
                    <div class="tendina">
                        AMICI                                                           
                    </div>
                </div>
            </a>
            <a href="File_PHP/Pagine/messaggi.php" id="linkMessaggi">
                <div class="main__menu__selezione" id="messaggi">
                    <div class="icon">
                        <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                    </div>
                    <div class="tendina">
                        MESSAGGI
                    </div>
                </div>
            </a>
            <a href="File_PHP/Pagine/crea.php" id="linkCrea">
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

        <div class="main__containerPagina">
            <div class="main__pagina">
                <div class="main__pagina__corpo">
                    <div class="post">
                        
                    </div>
                    <div class="post">
                        
                    </div>
                    <div class="post">
                        
                    </div>
                </div>
                <?php if($accesso === true){
                    echo '<div class="main__pagina__profilo">
                    <div class="main__pagina__fotoprofilo">
                        
                    </div>
                    <div class="main__pagina__profilo__username" id="nickname">
                        <b><p>
                            
                                    @'. $username. '
                            
                        </p></b>
                    </div>
                    <div class="main__pagina__profilo__info" id="profilo">
                        <a href="File_PHP/Pagine/profilo.php">PROFILO</a>
                    </div>
                    <div class="main__pagina__profilo__info" id="modifica">
                        <a href="">MODIFICA</a>
                    </div>
                        
                    </div>';
                }else{
                    echo '  <div class="main__pagina__profilo" id="main__pagina__profiloid">
                                <div class="main__pagina__fotoprofilo">
                                    
                                </div>
                                <div class="main__pagina__profilo__mess">
                                    <p>Non hai un account?</p>
                                </div>
                                <a href="File_PHP/Accesso/signin.php" class="main__pagina__profilo__registrati"><button value="submit" id="signin"><b>SIGNIN</b></button></a>
                            </div>
                            <script>
                                var x = document.getElementById("main__pagina__profiloid");
                                x.style.height = "300px"
                            </script>';

                
                }
                ?>
            
            </div>

        </div>
            
    </main>

    <footer>
        <div><a>Ahmad Fayad - Federico Sala</a></div>
    </footer>
    <script>
        <?php 
        if($accesso === false):
        ?>
            var linkEsplora = document.getElementById('linkEsplora');
            var linkSeguiti = document.getElementById('linkAmici');
            var linkMessaggi = document.getElementById('linkMessaggi');
            var linkCrea = document.getElementById('linkCrea');
            linkEsplora.href = linkSeguiti.href =  linkMessaggi.href =  linkCrea. href= "File_PHP/Accesso/login.php";
        <?php 
        endif
        ?>
    </script>
</body>
</html>