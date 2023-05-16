function formValidationL(){
    var email = document.forms["formLogin"]["email"].value;
    var password = document.forms["formLogin"]["password"].value;
    const inputEmail = document.getElementById('email');
    const inputPassword = document.getElementById('password');

    if(email === "" || password === ""){


        
        inputEmail.classList.add('colore-placeholder');
        inputEmail.placeholder = "Manca l'email";

        inputPassword.classList.add('colore-placeholder');
        inputPassword.placeholder = 'Manca la password';

        return false;
    }else{
        return true;
    }            
}

function formValidationS(){
    var nome = document.forms["formSignin"]["nome"].value;
    var cognome = document.forms["formSignin"]["cognome"].value;
    var email = document.forms["formSignin"]["email"].value;
    var password = document.forms["formSignin"]["password"].value;
    var conferma = document.forms["formSignin"]["conferma"].value;
    const inputNome = document.getElementById('nome');
    const inputCognome = document.getElementById('cognome');
    const inputEmail = document.getElementById('email');
    const inputPassword = document.getElementById('password');
    const inputConferma = document.getElementById('conferma');

    if(nome === "" || cognome === ""|| email === "" || password === ""){

        inputNome.classList.add('colore-placeholder');
        inputNome.placeholder = "Manca il nome";

        inputCognome.classList.add('colore-placeholder');
        inputCognome.placeholder = "Manca il cognome";
        
        inputEmail.classList.add('colore-placeholder');
        inputEmail.placeholder = "Manca l'email";

        inputPassword.classList.add('colore-placeholder');
        inputPassword.placeholder = 'Manca la password';

        return false;
    } 
    if(password != conferma){

        var labelPass = document.getElementById('labelPass');
        labelPass.innerHTML="Password (le password non corrispondono)";
        labelPass.style.color = "red";
        return false;
    }
    else{
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

    const inputNome = document.getElementById('nome');
    inputNome.classList.remove('colore-placeholder');
    inputNome.placeholder = "Inserire il nome";

    const inputCognome = document.getElementById('cognome');
    inputCognome.classList.remove('colore-placeholder');
    inputCognome.placeholder = "Inserire il cognome";

}



function visibilitaPassword(){
    var password = document.getElementById("password");
    var conferma = document.getElementById("conferma");
    if (password.type === "password" || conferma.type ==="password") {
        password.type = "text";
        conferma.type ="text";
    }else {
        password.type = "password";
        conferma.type ="password";
    }

    
        
}

function changeLabel(){
    var labelPass = document.getElementById('labelPass');
    labelPass.innerHTML="Password";
    labelPass.style.color = "white";
}