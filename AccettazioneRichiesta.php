<?php 
    session_start();
    require('File_PHP/Sessioni/SessioneInfo.php');
    require('File_PHP/Sessioni/SessioneAmici.php');
    require('File_PHP/Sessioni/Sessione_Controlli_Infoamici.php');
    
    
    if (isset($_POST['valore'])) {
        $valore = $_POST['valore'];
    }
    if (isset($_POST['id'])) {
        $val = $_POST['id'];
    }
        
    $pattern = "/idSpuntaT_/";
    if(preg_match($pattern, $val)){
    $i = str_replace('idSpuntaT_', '', $val);

    }else{
    $i = str_replace('idSpuntaF_', '', $val);
    }


        if($nRichieste > 0) {
            $conn = new mysqli("localhost","root", "", "momentum");
                if ($conn->connect_error) {
                    die("<p>Connesione al database fallita : ".$conn->connect_error."</p>");
                    }else{
                        $myquery = "SELECT email
                            FROM utente
                            WHERE username = '".$nomiRichieste[$i]."'";
                        $ris = $conn->query($myquery);
                        if($ris->num_rows == 0){
                            die('emily');
                        }elseif($ris->num_rows > 0){
                            $emails = array();
                            while ($row = $ris->fetch_assoc()) {
                                $emails[] = $row;
                            }
                            $emailAmico = $emails[0]['email'];
                            if($valore === 'true'){
                                $myquery = "UPDATE amicizia SET accettato = '1' WHERE EmailAmicoM = '$emailAmico' and EmailAmicoR = '$email'";
                                $ris = $conn->query($myquery);
                            }elseif($valore === 'false'){
                                $myquery = "DELETE FROM amicizia WHERE EmailAmicoM = '$emailAmico' and EmailAmicoR = '$email'";
                                $ris = $conn->query($myquery);
                            }
              


                        }
                    }
                }
        

      ?>