<?php
    if(isset($_SESSION['nome'])) $nome = $_SESSION['nome'];  else $nome = "";     
    if(isset($_SESSION['cognome'])) $cognome = $_SESSION['cognome'];  else $cognome = "";     
    if(isset($_SESSION['username'])) $username = $_SESSION['username']; else $username = "";
    if(isset($_SESSION['email'])) $email = $_SESSION['email'];  else $email = "";     
    if(isset($_SESSION['password'])) $password = $_SESSION['password'];  else $password = "";     
    if(isset($_SESSION['numero'])) $numero = $_SESSION['numero'];  else $numero = "";  
    if(isset($_SESSION['fotoProfilo'])) $nomeFile = $_SESSION['fotoProfilo']; else $nomeFile = '';
    if(isset($_SESSION['infoPost'])) $infoPost = $_SESSION['infoPost'];else $infoPost = '';
    if(isset($_SESSION['infoPostImg'])) $infoPostImg = $_SESSION['infoPostImg']; else $infoPostImg ='';
    if(isset($_SESSION['nPost'])) $nPost = $_SESSION['nPost'];else $nPost = '';
    if(isset($_SESSION['accesso'])) $accesso = $_SESSION['accesso']; else $accesso= false;

    
    
?>