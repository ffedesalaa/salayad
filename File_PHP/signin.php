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
            <form action="../home.php" name="formSignin" id="formSignin" method="POST" onsubmit="return formValidationS()">
                <h1>Signin</h1>
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
                    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
                    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
                    <button type="button" onclick="visibilitaPassword()" id="eye-outline"><ion-icon name="eye-outline" ></ion-icon></button>
                </div>
                
                <div class="input-box">
                    <label for="password">Conferma Password</label>
                    <input type="password" name="password" id="password" placeholder="Inserire la password" onclick="changePlaceholder()">
                    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
                    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
                    <button type="button" onclick="visibilitaPassword()" id="eye-outline"><ion-icon name="eye-outline" ></ion-icon></button>
                </div> 
                <div class="input-box">
                    <label for="numero">Numero di telefono (facoltativo)</label>
                    <input type="text" name="numero" id="numero" placeholder="Inserire il numero di telefono" onclick="changePlaceholder()">
                </div>

                <button value="submit" id="invio">Registrati</button>
            </form>
        </div>
    </main>
    
    <footer>
        <div>Sito fatto dai Salayad</div>
    </footer>

    <script src=".././File_JS/Form_validation.js"></script>
</body>
</html>