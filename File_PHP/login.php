<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
    <link rel="stylesheet" href="../style.css">
    
</head>
<body>
    <header>
        <a href=""><div class="logo"><b>MOMENTUM</b></div></a>
    </header>

    <main class="main-form">
        <div class="conteiner-form">
            <form action="../home.php" name="formAccesso" id="formAccesso" method="POST" onsubmit="return formValidation()">
                <h1>Login</h1>
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
                <div class="link-accesso">
                    <a href="">Non ricordo la password</a>
                    <a href="">Registrati</a>
                </div>
                <button value="submit" id="accesso">Accedi</button>
            </form>
        </div>
    </main>
    
    <footer>
        <div>Sito fatto dai Salayad</div>
    </footer>



    <script>
        function formValidation(){
            var email = document.forms["formAccesso"]["email"].value;
            var password = document.forms["formAccesso"]["password"].value;
            const inputEmail = document.getElementById('email');
            const inputPassword = document.getElementById('password');

            if(email == "" || password == ""){
                inputEmail.classList.add('colore-placeholder');
                inputEmail.placeholder = "Manca l'email";

                inputPassword.classList.add('colore-placeholder');
                inputPassword.placeholder = 'Manca la password';

                return false;
            }else{
                return true;
            }

                
        }
        

         function changePlaceholder(){
            const inputEmail = document.getElementById('email');
            inputEmail.classList.remove('colore-placeholder');
            inputEmail.placeholder = "Inserire l'email";


            const inputPassword = document.getElementById('password');
            inputPassword.classList.remove('colore-placeholder');
            inputPassword.placeholder = 'Inserire la password';
         }

         function visibilitaPassword(){
                var password = document.getElementById("password");
                if (password.type === "password") {
                    password.type = "text";
                } else {
                    password.type = "password";
                }

         }
    </script>
</body>
</html>