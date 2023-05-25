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
    <div id="container-pagina">
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
                    </div>
                    
                    <div class="container_notifiche">
                        <div class="notifiche">
                            <div class="notifiche__titolo">
                                Notifiche
                            </div>';
                     if($nRichieste > 0){
                        for ($i=0; $i < $nRichieste; $i++) {
                            $idSpuntaT = 'idSpuntaT_' . $i;
                            $idSpuntaF = 'idSpuntaF_' . $i;
                            $idNotifica ='idNotifica_'.$i;?>
                        
                             <div class="notifiche__singola" id="<?php echo $idNotifica; ?>">
                                    <div class="notifiche__singola__testo"><?php echo $nomiRichieste[$i]; ?> vuole essere tuo amico</div>
                                        <div class="notifiche__singola__bottoni">
                                                <button class="classSpunta" id="<?php echo $idSpuntaT; ?>"  data-valore="true"><ion-icon name="checkmark-outline"></ion-icon></button>
                                                <button class="classSpunta" id="<?php echo $idSpuntaF; ?>"  data-valore="false"><ion-icon name="close-outline"></ion-icon></button> 
                                        </div>
                                    </div>
                            
                    <?php              
                        

                    }
                
                        echo'<div class="notifiche__singola" id="mesNot" style ="display:none; justify-content: center; align-items: center; padding-left:10px;color: #fff; ">Non hai nessuna notifica</div></div>';
                     }else{
                        echo '<div class="notifiche__singola"><div class="notifiche__singola__testo" style="width:100%; justify-content: center;">Non hai nessuna notifica</div></div></div>';
                     }
                        

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
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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

            
                


                $(document).ready(function() {
                    $('.classSpunta').click(function() {
                    var idDinamico = $(this).attr('id');
                    var valore = $(this).data('valore');
                    inviaDati(idDinamico, valore);

                    var buttons = document.querySelectorAll(".notifiche button");
                    var regex = /idSpuntaT_/;

                    if(regex.test(idDinamico) === true){
                        var idNumero = idDinamico.replace("idSpuntaT_", "");

                        for (var i = 0; i < buttons.length; i++) {
                            var currentButtonId = buttons[i].id;
                            if(regex.test(currentButtonId) === true){
                                var buttonNumber = parseInt(currentButtonId.replace("idSpuntaT_", ""));
                                if (buttonNumber > parseInt(idDinamico.replace("idSpuntaT_", ""))) {
                                    var newButtonNumber = buttonNumber - 1;
                                    var newButtonId = "idSpuntaT_" + newButtonNumber;
                                    buttons[i].id = newButtonId;
                                }
                            }else{
                                var buttonNumber = parseInt(currentButtonId.replace("idSpuntaF_", ""));
                                if (buttonNumber > parseInt(idDinamico.replace("idSpuntaT_", ""))) {
                                    var newButtonNumber = buttonNumber - 1;
                                    var newButtonId = "idSpuntaF_" + newButtonNumber;
                                    buttons[i].id = newButtonId;
                                }
                            }
                        }
                    }else{
                        var idNumero = idDinamico.replace("idSpuntaF_", "");

                        for (var i = 0; i < buttons.length; i++) {
                            var currentButtonId = buttons[i].id;
                            if(regex.test(currentButtonId) === true){
                                var buttonNumber = parseInt(currentButtonId.replace("idSpuntaT_", ""));
                                if (buttonNumber > parseInt(idDinamico.replace("idSpuntaF_", ""))) {
                                    var newButtonNumber = buttonNumber - 1;
                                    var newButtonId = "idSpuntaF_" + newButtonNumber;
                                    buttons[i].id = newButtonId;
                                }
                            }else{
                                var buttonNumber = parseInt(currentButtonId.replace("idSpuntaF_", ""));
                                if (buttonNumber > parseInt(idDinamico.replace("idSpuntaF_", ""))) {
                                    var newButtonNumber = buttonNumber - 1;
                                    var newButtonId = "idSpuntaF_" + newButtonNumber;
                                    buttons[i].id = newButtonId;
                                }
                            }
                        }
                    }


                    var idNotifica = 'idNotifica_' + idNumero;
                    var notifica = document.getElementById(idNotifica);
                    notifica.remove();
                    
                    


                        var notifiche = document.querySelectorAll(".notifiche__singola");
                        for (var i = 0; i < notifiche.length; i++) {
                            var currentNotificaId = notifiche[i].id;
                            var notificaNumber = parseInt(currentNotificaId.replace("idNotifica_", ""));
                            if (notificaNumber > parseInt(idNotifica.replace("idNotifica_", ""))) {
                            var newNotificaNumber = notificaNumber - 1;
                            var newNotificaId = "idNotifica_" + newNotificaNumber;
                            notifiche[i].id = newNotificaId;
                            
                            }
                        }
                        if (notifiche.length === 1){
                            var mesNot = document.getElementById('mesNot');
                            mesNot.style.display = 'flex';
                        }
                    });

                    function inviaDati(idDinamico, valore) {
                    var dati = {
                        id: idDinamico,
                        valore: valore
                    };

                    $.ajax({
                        url: 'AccettazioneRichiesta.php',
                        method: 'POST',
                        data: dati,
                        success: function(response) {
                        console.log(response);
                        },
                        error: function(xhr, status, error) {
                        console.log(error);
                        }
                    });
                    }
                });

        </script>

        
        <script>
        $(document).ready(function(){

            $("#campanellina").click(function(e){

                 $(".notifiche").toggleClass('is-open');
                e.preventDefault();

             });

         });
        </script>


    </div>
</body>
</html>