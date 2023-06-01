<?php
    if(isset($_POST['nome'])) $nome = $_POST['nome'];  else $nome = "";     
    if(isset($_POST['cognome'])) $cognome = $_POST['cognome'];  else $cognome = "";     
    if(isset($_POST['username'])) $username = $_POST['username']; else $username = "";
    if(isset($_POST['email'])) $email = $_POST['email'];  else $email = "";     
    if(isset($_POST['password'])) $password = $_POST['password'];  else $password = "";     
    if(isset($_POST['numero'])) $numero= $_POST['numero'];  else $numero = "";  
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
    <link rel="stylesheet" href="../../style.css">
    
</head>
<body>
    <div id="container-pagina">
        <header>
            <a href="../../home.php"><div class="logo"><b>MOMENTUM</b></div></a>
        </header>

        <main class="main-form">
            <div class="conteiner-form" id="form-login">
                <form action="<?php $_SERVER['PHP_SELF'] ?>" name="formLogin" id="formLogin" method="POST" onsubmit="return formValidationL()" class="formLog">
                    <h1>LOGIN</h1>
                    <div class="input-box">
                        <label for="email" id="labelEmail">Email</label>
                        <input type="text" name="email" id="email" placeholder="Inserire l'email" onclick="changePlaceholder()">
                    </div>
                    <div class="input-box">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Inserire la password" onclick="changePlaceholder()">
                        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
                        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
                        <button type="button" onclick="visibilitaPassword()" id="eye-outline"><ion-icon name="eye-outline" ></ion-icon></button>
                    </div> 
                    <div class="link-accesso">
                        <a href="">Non ricordo la password</a>
                        <a href="signin.php">Registrati</a>
                    </div>
                    <button value="submit" id="invio">ACCEDI</button>
                </form>
                <div class="conteiner-form__messaggio" id="messaggioAccesso">
                    <div class="conteiner-form__messaggio__img"><img src="../../Immagini/check.png" alt="check"></div>
                    <p>Accesso effetuato con successo</p>
                </div>
            </div>
        </main>
        
        <footer>
            <div>Sito fatto dai Salayad</div>
        </footer>

        <script src="../.././File_JS/Form_validation.js"></script>

        <?php     
            if(isset($_POST['email']) AND isset($_POST['password']) ){

                $conn = new mysqli("localhost","root", "", "momentum");

                if ($conn->connect_error) {
                    die("<p>Connessione al database fallita : ".$conn->connect_error."</p>");
                }else{
                    $myquery = "SELECT Nome, Cognome, Username, Email, Password, Numero
                                FROM utente 
                                WHERE Email= '".$email. "'
                                    AND Password='".$password."'
                                    ";
                    $ris = $conn->query($myquery);

                    if($ris->num_rows == 0){
                        die("<script>
                                var labelEmail = document.getElementById('labelEmail');
                                labelEmail.innerHTML='Utente non trovato';
                                labelEmail.style.color = 'red';
                            </script>");
                    }elseif($ris->num_rows >0) {
                        $informazioni = array();
                        while ($row = $ris->fetch_assoc()) {
                            $informazioni[] = $row;
                        }

                        session_start();
                        $_SESSION['nome'] = $informazioni[0]['Nome'];
                        $_SESSION['cognome'] = $informazioni[0]['Cognome'];
                        $_SESSION['username'] = $informazioni[0]['Username'];
                        $_SESSION['email'] = $email;
                        $_SESSION['password'] = $password;
                        $_SESSION['numero'] = $informazioni[0]['Numero'];
                        $_SESSION['accesso'] = true; 

                        echo "   <script>
                        var log = document.getElementById('formLogin');
                        log.style.display = 'none';
                        var contLog = document.getElementById('form-login')
                        contLog.style.border = '4px solid rgb(247, 67, 97)';
                        var mesAccesso = document.getElementById('messaggioAccesso');
                        mesAccesso.style.display = 'block';
                        
                        </script>";

                        $conn->close();

                        header("Refresh: 2; URL=../../home.php");             
                    

                    }
                }
            }

        ?>
    </div>
</body>
</html>