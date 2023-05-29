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
        <script>
            function changePlaceholder(){
                var ricerca = document.getElementById("amico");
                ricerca.placeholder = "Cerca amico";
                ricerca.classList.remove("colore-placeholder2");
                ricerca.classList.remove("colore-placeholder");
            }
        </script>
    
        <?php
            require('../Script_PHP/HeaderScript.php');
        ?>

        <main>
            <?php
                require('../Script_PHP/MainMenu.php');
            ?>
            <div class="main__containerPagina">
                <div class="main__pagina">
                    <div class="main__pagina__corpo">
                        <div class="main__pagina__corpo__elementi">
                            <nav>
                                <button class="navElement" id="navElementAmici" onclick="switchAmici()"><b>AMICI</b></button>
                                <button class="navElement" id="navElementCerca" onclick="switchCerca()"><b>CERCA</b></button>
                            </nav>
                            <div class="conteiner-form-amici" id="conteiner-form-amici">
                                <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" id="formRicercaAmici" onsubmit="return valoreInserito()">
                                    <div class="barraRicercaAmico">
                                        <input type="text" name="amico" id="amico" placeholder="Cerca amico" autocomplete="off" onclick = "changePlaceholder()">
                                      <button value="submit" id="aggiungi"><b>Aggiungi</b></button>
                                    </div>
                                </form>
                            </div>
                            <div class="tuoiAmici" id="tuoiAmici">
                               
                                
                                    <?php 
                                    for ($i=0; $i < $nAmici; $i++) {

                                        echo '
                                            <div class="lista__amici">
                                            <div class="fp__amici">
                                            </div>
                                            <div class="tuoiAmici__amici">@'.$nomiAmici[$i].'</div></div>';
                                    }
                                    ?>
                                
                            </div>
                        </div>
                    </div>
                    <?php
                        require('../Script_PHP/InfoProfilo.php');
                    ?>
                </div>
            </div>

        </main>
        <footer>
            <div><a>Ahmad Fayad - Federico Sala</a></div>
        </footer>
        <script>
            function switchCerca(){
                var cerca = document.getElementById('conteiner-form-amici');
                cerca.style.display = 'block';
                var amici = document.getElementById('tuoiAmici');
                amici.style.display = 'none';
            }

            function switchAmici(){
                var amici = document.getElementById('tuoiAmici');
                amici.style.display = 'block';
                var cerca = document.getElementById('conteiner-form-amici');
                cerca.style.display = 'none';
            }
            
            function valoreInserito(){
                var amico = document.forms["formRicercaAmici"]["amico"].value;
                var ricerca = document.getElementById("amico");

                if(amico == ''){
                    ricerca.classList.add('colore-placeholder');
                    ricerca.placeholder = "Non è stato inserito nessuno nome";
                    return false;
                }else{
                    return true;
                }

            }
        </script>
        <?php
        
            echo "<script>                
                    var amici = document.getElementById('tuoiAmici');
                    amici.style.display = 'none';
                    var cerca = document.getElementById('conteiner-form-amici');
                    cerca.style.display = 'block';
                </script>";

            if(isset($_POST['amico'])){

                $conn = new mysqli("localhost","root", "", "momentum");

                if ($conn->connect_error) {
                    die("<p>Connesione al database fallita : ".$conn->connect_error."</p>");
                }else{
                    $myquery = "SELECT Username, Email
                                FROM utente 
                                WHERE Username = '".$username."' 
                                    or Username = '".$amico."'";
                    $ris = $conn->query($myquery);

                    if($ris->num_rows == 1){
                        die('<script>
                                var ricerca = document.getElementById("amico");
                                ricerca.placeholder = "Il tuo amico non esiste!";
                                ricerca.classList.add("colore-placeholder");
                                
                            </script>');;
                    }elseif($ris->num_rows > 1) {
                        echo '<script>
                                var ricerca = document.getElementById("amico");
                                ricerca.placeholder = "Richiesta mandata!";
                                ricerca.classList.add("colore-placeholder2");
                                
                            </script>';
                        $informazioni = array();
                        while ($row = $ris->fetch_assoc()) {
                            $informazioni[] = $row;
                        }
                        if($informazioni[0]['Email'] == $email){
                            $emailM = $informazioni[0]['Email'];
                            $emailR = $informazioni[1]['Email'];
                        }else{
                            $emailR = $informazioni[0]['Email'];
                            $emailM = $informazioni[1]['Email'];
                        }

                        $myquery = "SELECT EmailAmicoM, EmailAmicoR
                                    FROM amicizia 
                                    WHERE (EmailAmicoM = '".$emailR."' AND EmailAmicoR = '".$emailM."') OR (EmailAmicoM = '".$emailM."' 
                                        AND EmailAmicoR = '".$emailR."')";
                        $ris = $conn->query($myquery);
                        if($ris->num_rows > 0){
                            die('<script>
                            var ricerca = document.getElementById("amico");
                            ricerca.placeholder = "Sei già amico di '.$amico.'"; 
                            ricerca.classList.remove("colore-placeholder2");
                            ricerca.classList.add("colore-placeholder");
                            </script>');
                        }else{
                            $myquery = "INSERT INTO amicizia (EmailAmicoM, EmailAmicoR)
                            VALUES ('$emailM', '$emailR')";
                            $ris = $conn->query($myquery);
                        }



                    }
                }
            }
        ?>

    </div>



</body>
</html>

