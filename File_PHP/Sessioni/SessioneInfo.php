<?php
    if(isset($_SESSION['nome'])) $nome = $_SESSION['nome'];  else $nome = "";     
    if(isset($_SESSION['cognome'])) $cognome = $_SESSION['cognome'];  else $cognome = "";     
    if(isset($_SESSION['username'])) $username = $_SESSION['username']; else $username = "";
    if(isset($_SESSION['email'])) $email = $_SESSION['email'];  else $email = "";     
    if(isset($_SESSION['password'])) $password = $_SESSION['password'];  else $password = "";     
    if(isset($_SESSION['numero'])) $numero = $_SESSION['numero'];  else $numero = "";  
    if(isset($_SESSION['accesso'])) $accesso = $_SESSION['accesso']; else $accesso= false;

    
    
?>