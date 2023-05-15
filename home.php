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
      
        <a href="./File_PHP/login.php"><div class="login"><b>LOGIN</b></div></a>
    </header>
    <main>
        <div class="main__menu">
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
            <a href="">
                <div class="main__menu__selezione" id="home">
                    <div class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                    </div>
                    <div class="tendina">
                        HOME
                    </div>
                </div>
            </a>
            <a href="">
                <div class="main__menu__selezione" id="esplora">
                    <div class="icon">
                        <ion-icon name="globe-outline"></ion-icon>
                    </div>
                    <div class="tendina">
                        ESPLORA
                    </div>
                </div>
            </a>
            <a href="">
                <div class="main__menu__selezione" id="seguiti">
                    <div class="icon">
                        <ion-icon name="accessibility-outline"></ion-icon>
                    </div>
                    <div class="tendina">
                        SEGUITI
                    </div>
                </div>
            </a>
            <a href="">
                <div class="main__menu__selezione" id="messaggi">
                    <div class="icon">
                        <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                    </div>
                    <div class="tendina">
                        MESSAGGI
                    </div>
                </div>
            </a>
            <a href="">
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
           
        </div>
    </main>

    <footer>
        <div><a>Sito fatto dai Salayad</a></div>
    </footer>
</body>
</html>