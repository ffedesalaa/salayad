<?php
    if(isset($_POST['amico'])) $amico = $_POST['amico']; else $amico ="";
    session_start();
    require('../Sessioni/SessioneInfo.php');
    require('../Sessioni/SessioneAmici.php');
    require('../Sessioni/Sessione_Controlli_Infoamici.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amici</title>
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
                    <div class="post">
                        <div class="selezione__foto__post">
                            <div class="foto__preview">

                            </div>
                            <div class="selezione__foto">
                                <ion-icon name="add-outline"></ion-icon>
                            </div>
                        </div>
                        <div class="commento__foto__post">
                            <div class="commento__preview">
                                <div class="titolo__commento">
                                    <p>Aggiungi un commento</p>
                                </div>
                                <div class="scrivi__commento">
                                    <textarea name="messaggio" id="messaggio" cols="42" rows="14"></textarea>
                                </div>
                            </div>
                            <div class="pubblica">
                                <b>PUBBLICA</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>
        <footer>
            <div><a>Ahmad Fayad - Federico Sala</a></div>
        </footer>           
        

    </div>



</body>
</html>

