<?php
    session_start();
    require('../Sessioni/SessioneInfo.php');
    require('../Sessioni/SessioneAmici.php');
    require('../Sessioni/Sessione_Controlli_Infoamici.php');
    if(isset($_POST['nome'])) $nomeM = $_POST['nome'];  else $nomeM = "";     
    if(isset($_POST['cognome'])) $cognomeM = $_POST['cognome'];  else $cognomeM = "";     
    if(isset($_POST['username'])) $usernameM = $_POST['username']; else $usernameM = "";
    if(isset($_POST['email'])) $emailM = $_POST['email'];  else $emailM = "";     
    if(isset($_POST['password'])) $passwordM = $_POST['password'];  else $passwordM = "";     
    if(isset($_POST['numero'])) $numeroM= $_POST['numero'];  else $numeroM = "";  
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
                <div class="main__pagina">
                    <div class="box_info">
                        <div class="box_info__dati">
                            <h1>Informazioni personali</h1>
                            <h2>Nome</h2>
                            <div class="box_info__dati__singolo" >
                                <p id='nomeM'><?php echo $nome; ?></p>
                                <button class="buttonModifica" id='butnome'><ion-icon name="create-outline"></ion-icon></button>
                                <form action="<?php $_SERVER['PHP_SELF'] ?>" method='post' class="formModifica" id='formnome' style="display: none;">
                                    <input type="text" name='nome' id='inputNomeM'value='<?php echo $nome; ?>'>
                                    <button value='submit'>Conferma</button>
                                </form>
                            </div>
                            <h2>Cognome</h2>
                            <div class="box_info__dati__singolo" >
                                <p id='cognomeM'><?php echo $cognome; ?></p>
                                <button class="buttonModifica" id='butcognome'><ion-icon name="create-outline"></ion-icon></button>
                                <form action="<?php $_SERVER['PHP_SELF'] ?>" method='post' class="formModifica" id='formcognome' style="display: none;">
                                    <input type="text" name='cognome' id='inputCognomeM'value='<?php echo $cognome; ?>'>
                                    <button value='submit'>Conferma</button>
                                </form>
                            </div>
                            <h2>Username</h2>
                            <div class="box_info__dati__singolo" >
                                <p id='usernameM'><?php echo $username; ?></p>
                                <button class="buttonModifica" id='butusername'><ion-icon name="create-outline"></ion-icon></button>
                                <form action="<?php $_SERVER['PHP_SELF'] ?>" method='post' class="formModifica" id='formusername' style="display: none;">
                                    <input type="text" name='username' id='inputUsernameM'value='<?php echo $username; ?>'>
                                    <button value='submit'>Conferma</button>
                                </form>
                            </div>
                            <h2>Email</h2>
                            <div class="box_info__dati__singolo" >
                                <p id='emailM'><?php echo $email; ?></p>
                            </div>
                            <h2>Numero</h2>
                            <div class="box_info__dati__singolo" >
                                <p id='numeroM'><?php echo $numero; ?></p>
                                <button class="buttonModifica" id='butnumero'><ion-icon name="create-outline"></ion-icon></button>
                                <form action="<?php $_SERVER['PHP_SELF'] ?>" method='post' class="formModifica" id='formnumero' style="display: none;">
                                    <input type="number" name='numero' id='inputNumeroM'value='<?php echo $numero; ?>'>
                                    <button value='submit'>Conferma</button>
                                </form>
                            </div>
                            <h2>Password</h2>
                            <div class="box_info__dati__singolo" >
                                <p id='passwordM'><?php $pasNascosta = str_repeat('*', strlen($password)); echo $pasNascosta; ?></p>
                                <button class="buttonModifica" id='butpassword'><ion-icon name="create-outline"></ion-icon></button>
                                <form action="<?php $_SERVER['PHP_SELF'] ?>" method='post' class="formModifica" id='formpassword' style="display: none;">
                                    <input type="password" name='password' id='inputPasswordM'value='<?php echo $password; ?>'>
                                    <button value='submit'>Conferma</button>
                                </form>
                            </div>
                            
                        </div>
                        <div class="box_info__img">

                            <div class="main__pagina__fotoprofilo" id='imgModidica'>
                                <img id="anteprima" src="#" alt="Anteprima" style="display: none; z-index:1;" >
                                <img src="../../Immagini/Foto_Profilo/<?php echo $nomeFile; ?>" alt="">
                            </div>
                            <form name="formModificaImg" id="formModificaImg" enctype="multipart/form-data" >
                                <input type="file" name="immagine" id="inputImmagineMod" onchange="anteprimaImg(event)" style='display:none;'>
                                <label for="inputImmagineMod" id='labelImgMod' class='bottoniModifica'>MODIFICA</label>   
                                <button value="submit"  id='butMod'class='bottoniModifica' style='display:none' onclick='sparisci()' >CONFERMA</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
            <footer>
                <div><a>Ahmad Fayad - Federico Sala</a></div>
            </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.buttonModifica').click(function() {
                var button = $(this).attr('id');
                var idTemp = button.replace("but", "");
                var formId = 'form'+idTemp;
                var pId = idTemp +'M';

                var form = document.getElementById(formId);
                var p = document.getElementById(pId);
                if(form.style.display === 'none'){
                    form.style.display = 'flex'; 
                    p.style.display = 'none';
                }else{
                    form.style.display = 'none'; 
                    p.style.display = 'block';
                }

            });
        });    

        function anteprimaImg(event) {
            var input = event.target;
            var anteprima = document.getElementById('anteprima');
            var button = document.getElementById('butMod');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    anteprima.src = e.target.result;
                    anteprima.style.display = 'block';
                    button.style.display = 'block';

                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        $('#formModificaImg').submit(function(e) {
            e.preventDefault();

            var formData = new FormData(this);

            $.ajax({
                url: '../Accesso/ModificaImg.php',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    console.log(response);
                },
                
            });
        });
        function sparisci(){
            var button = document.getElementById('butMod');
            button.style.display = 'none';
        }
    </script>

    <?php 
        if(isset($_POST['nome']) || isset($_POST['cognome']) || isset($_POST['username']) || isset($_POST['email']) || isset($_POST['password']) ){
            $conn = new mysqli("localhost","root", "", "momentum");

            if ($conn->connect_error) {
                die('Connesione al database fallita :' . $conn->connect_error);
            }else{
                if($nomeM != $nome AND $nomeM != ''){
                    $myquery = "UPDATE utente SET nome = '".$nomeM."' WHERE email = '".$email."'";
                    $ris = $conn->query($myquery);
                    if($ris === false){
                        die('andata male fratelli');
                    }else{
                        $_SESSION['nome'] = $nomeM;
                        echo '<script>location.reload();</script>';
                    }
                }

                if($cognomeM != $cognome AND $cognomeM != ''){
                    $myquery = "UPDATE utente SET cognome = '".$cognomeM."' WHERE email = '".$email."'";
                    $ris = $conn->query($myquery);
                    if($ris === false){
                        die('andata male fratelli');
                    }else{
                        
                        $_SESSION['cognome'] = $cognomeM;
                        echo '<script>location.reload();</script>';
                    }
                }
                if($usernameM != $username AND $usernameM != ''){
                    $myquery = "UPDATE utente SET username = '".$usernameM."' WHERE email = '".$email."'";
                    $ris = $conn->query($myquery);
                    if($ris === false){
                        die('andata male fratelli');
                    }else{
                        $_SESSION['username'] = $usernameM;
                        echo '<script>location.reload();</script>';
                    }
                }
                if($numeroM != $numero AND $numeroM != ''){
                    $myquery = "UPDATE utente SET numero = '".$numeroM."' WHERE email = '".$email."'";
                    $ris = $conn->query($myquery);
                    if($ris === false){
                        die('andata male fratelli');
                    }else{
                        $_SESSION['numero'] = $numeroM;
                        echo '<script>location.reload();</script>';
                    }
                }
                if($passwordM != $password AND $passwordM != ''){
                    $myquery = "UPDATE utente SET password = '".$passwordM."' WHERE email = '".$email."'";
                    $ris = $conn->query($myquery);
                    if($ris === false){
                        die('andata male fratelli');
                    }else{
                        $_SESSION['password'] = $passwordM;
                        echo '<script>location.reload();</script>';
                    }
                }
            }
        }

    ?>
</body>
</html>