<?php
    session_start();
    require('../Sessioni/SessioneInfo.php');
    if(isset($_FILES['imgPost'])){
        $nomeFile = $_FILES['imgPost']['name'];
        $percorsoTemporaneo = $_FILES['imgPost']['tmp_name'];
        $percorsoDestinazione = '../../Immagini/Foto_Profilo/' . $nomeFile;   

        move_uploaded_file($percorsoTemporaneo, $percorsoDestinazione);

        $conn = new mysqli("localhost","root", "", "momentum");
        if ($conn->connect_error) {
            die('Connesione al database fallita :' . $conn->connect_error);
        }else{

            $myquery = "UPDATE utente SET PercFotoProf = '".$nomeFile."' WHERE email = '".$email."'";
            $ris = $conn->query($myquery);

            if($ris = $conn->query($myquery) === false){
                echo 'getcancer';
            }else{
                $_SESSION['fotoProfilo'] = $nomeFile;
                
            }
        }
    }elseif(!isset($_FILES['immagine'])){
        $conn = new mysqli("localhost","root", "", "momentum");
        if ($conn->connect_error) {
            die('Connesione al database fallita :' . $conn->connect_error);
        }else{

            $myquery = "UPDATE utente SET PercFotoProf = 'profilo.png' WHERE email = '".$email."'";
            $ris = $conn->query($myquery);

            if($ris = $conn->query($myquery) === false){
                echo 'getcancer';
            }else{
                $_SESSION['fotoProfilo'] = $nomeFile;
                
            }
        }
    }

    



?>
