<?php
    echo '<div class="main__menu">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <a href="../../home.php" id="linkHome">
            <div class="main__menu__selezione" id="home">
                <div class="icon">
                    <ion-icon name="home-outline"></ion-icon>
                </div>
                <div class="tendina">
                    HOME
                </div>
            </div>
        </a>

       
        <a href="amici.php" id="linkAmici">
            <div class="main__menu__selezione" id="amici">
                <div class="icon">
                    <ion-icon name="accessibility-outline"></ion-icon>
                </div>
                <div class="tendina">
                    AMICI                                                           
                </div>
            </div>
        </a>
        <a href="chat.php" id="linkMessaggi">
            <div class="main__menu__selezione" id="messaggi">
                <div class="icon">
                    <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                </div>
                <div class="tendina">
                    MESSAGGI
                </div>
            </div>
        </a>
        <a href="crea.php" id="linkCrea">
            <div class="main__menu__selezione" id="crea">
                <div class="icon">
                    <ion-icon name="add-circle-outline"></ion-icon>
                </div>
                <div class="tendina">
                    CREA
                </div>
            </div>
        </a>
        <a href="../Pagine/profilo.php">
                    
                         <div class="main__menu__profilo">
                        <img src="../../Immagini/Foto_Profilo/'.$nomeFile.'" alt="">
                    </div>   
         </a>
    </div>';
?>

<script>
        <?php 
        if($accesso === false):
        ?>
            var linkEsplora = document.getElementById('linkEsplora');
            var linkSeguiti = document.getElementById('linkAmici');
            var linkMessaggi = document.getElementById('linkMessaggi');
            var linkCrea = document.getElementById('linkCrea');
            linkEsplora.href = linkSeguiti.href =  linkMessaggi.href =  linkCrea. href= "../Accesso/login.php";
        <?php 
        endif
        ?>
    </script>