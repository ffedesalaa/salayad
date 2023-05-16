<?php
  if(isset($_POST['nome'])) $nome = $_POST['nome'];  else $nome = "";     
  if(isset($_POST['cognome'])) $cognome = $_POST['cognome'];  else $cognome = "";     
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
    <title>Signin</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    
    <header>
        <a href=""><div class="logo"><b>MOMENTUM</b></div></a>
    </header>

    <main class="main-form">
        <div class="conteiner-form" id="form-signin">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" name="formSignin" id="formSignin" method="POST" onsubmit="return formValidationS()">
                <p>SIGNIN</p>
                <div class="input-box">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" placeholder="Inserire il nome" onclick="changePlaceholder()">
                </div>
                <div class="input-box">
                    <label for="cognome">Cognome</label>
                    <input type="text" name="cognome" id="cognome" placeholder="Inserire il cognome" onclick="changePlaceholder()">
                </div>
                <div class="input-box">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" placeholder="Inserire l'email" onclick="changePlaceholder()">
                </div>
                <div class="input-box">
                    <label for="password" id="labelPass">Password</label>
                    <input type="password" name="password" id="password" placeholder="Inserire la password" onclick="changePlaceholder();changeLabel();">
                    <button type="button" onclick="visibilitaPassword()" id="eye-outline"><ion-icon name="eye-outline" ></ion-icon></button>
                </div>
                
                <div class="input-box">
                    <label for="conferma">Conferma Password</label>
                    <input type="password" name="conferma" id="conferma" placeholder="Inserire la password" onclick="changePlaceholder()">
                    <button type="button" onclick="visibilitaPassword()" id="eye-outline"><ion-icon name="eye-outline" ></ion-icon></button>
                </div> 
                <div class="input-box">
                    <label for="numero">Numero di telefono (facoltativo)</label>
                    <input type="text" name="numero" id="numero" placeholder="Inserire il numero di telefono" onclick="changePlaceholder()">
                </div>

                <button value="submit" id="invio">REGISTRATI</button>
                
            </form>
        </div>
    </main>
    
    

    <script src=".././File_JS/Form_validation.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <?php 
        if(isset($_POST['nome']) AND isset($_POST['cognome']) AND isset($_POST['email']) AND isset($_POST['password']) ){

            $conn = new mysqli("localhost","root", "", "momentum");

            if (!$conn) {
                die('Connesione al database fallita :' . mysqli_connect_error());
            }else{
                $myquery = "SELECT email
                        FROM utente
                        WHERE email = '".$email. "'";

                $ris = $conn->query($myquery);
              
                if($ris->num_rows > 0){
                 
                }else{
                    $myquery = "INSERT INTO utente (Nome, Cognome, Email, Password, Numero )
                                VALUES ('$nome', '$cognome', '$email', '$password', '$numero' )";
                
        
                    if($conn->query($myquery) === true){
                        session_start();
                        $_SESSION['nome'] = $nome;
                        $_SESSION['cognome'] = $cognome;
                        $_SESSION['email'] = $email;
                        $_SESSION['password'] = $password;
                        $_SESSION['numero'] = $numero;

                        $conn->close();
                    }
                }
            }

        }
?>
    <footer>
        <div>Sito fatto dai Salayad</div>
    </footer>


</body>
</html>