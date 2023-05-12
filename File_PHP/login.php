<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
    
</head>
<body>

    <form action="php.php" name="formAccesso" id="formAccesso" method="POST" onsubmit="return formValidation()">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" placeholder="Inserire l'email">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Inserire la password">
        <a href="">Non ricordo la password</a>
        <input type="submit" name="accedi" id="accedi" value="Accedi">
    </form>












    <script>
        function formValidation(){
            var email = document.forms["formAccesso"]["email"].value;
            var password = document.forms["formAccesso"]["password"].value;
            const inputEmail = document.getElementById('email');
            const inputPassword = document.getElementById('password');


            if(email == ""){

                inputEmail.classList.add('colore-placeholder');
                inputEmail.placeholder = 'Manca il nome';
                return false;  
            }
            else{
                inputEmail.classList.remove('colore-placeholder');
            }


            if(Password == ""){
                inputPassword.classList.add('colore-placeholder');
                inputPassword.placeholder = 'Manca il cognome';
                return false;  
            }else{
                inputPassword.classList.remove('colore-placeholder');
                return true;
            }
            



         }
    </script>
</body>
</html>