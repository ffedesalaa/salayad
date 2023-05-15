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
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Inserire la password" onclick="changePlaceholder()">
                    <button type="button" onclick="visibilitaPassword()" id="eye-outline"><ion-icon name="eye-outline" ></ion-icon></button>
                </div>
                
                <div class="input-box">
                    <label for="password">Conferma Password</label>
                    <input type="password" name="password" id="password" placeholder="Inserire la password" onclick="changePlaceholder()">
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
    
    <footer>
        <div>Sito fatto dai Salayad</div>
    </footer>

    <script src=".././File_JS/Form_validation.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <?php 
        $nome = $_POST['nome'];
        $cognome = $POST['cognome'];
        $email = $POST['email'];
        $password = $POST['password'];
        
        
        $db_servername = "localhost";
        $db_username = "root";
        $db_password = "";
        $db_name = "momentum";

        $conn = mysqli_connect($db_servername, $db_username, $db_password, $db_name);


        if (!$conn) {
            die('Connesione al database fallita :' . mysqli_connect_error());
        }

        $myquery = "SELECT nome
                    FROM utente
                    WHERE nome = '".$_POST['']. "'";

        $ris = mysqli_query($conn, $myquery);

        if($ris->num_rows > 0){
            echo"<script>

                    
                </script>";
        }else{
            $myquery = "SELECT INTO utente (nome, cognome, passoword, numero )
                        VALUES ($nome, )";
        }
    
        




    ?>
</body>
</html>