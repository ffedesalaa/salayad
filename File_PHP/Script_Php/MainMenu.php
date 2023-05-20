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

        <a href="esplora.php" id="linkEsplora">
            <div class="main__menu__selezione" id="esplora">
                <div class="icon">
                    <ion-icon name="globe-outline"></ion-icon>
                </div>
                <div class="tendina">
                    ESPLORA
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
        <a href="messaggi.php" id="linkMessaggi">
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