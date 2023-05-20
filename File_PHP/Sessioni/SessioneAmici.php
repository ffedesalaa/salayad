<?php
    $conn = new mysqli("localhost","root", "", "momentum");

    if ($conn->connect_error) {
        die('Connesione al database fallita :' . $conn->connect_error);
    }else{

        $myquery = "SELECT EmailAmicoM, EmailAmicoR, Accettato
                    FROM amicizia 
                    WHERE (EmailAmicoM = '".$email."' OR EmailAmicoR = '".$email."') AND Accettato = '1' ";
        $ris = $conn->query($myquery);            
        if($ris->num_rows >0) {
            $emailTot = array();
            while ($row = $ris->fetch_assoc()) {
                $emailTot[] = $row;
            }
        
            $nAmici = $ris->num_rows;

            for ($i=0; $i < $nAmici; $i++) { 
                $emailTot[$i] = array_diff($emailTot[$i], array($email));
                $emailTot[$i] = array_diff($emailTot[$i], array('1'));
                $emailTot[$i] = array_values($emailTot[$i]);
            }

            $emailAmici = array_merge_recursive(...$emailTot);

            for ($i=0; $i <$nAmici; $i++) {  
                $myquery = "SELECT Username
                        FROM utente
                        WHERE Email = '".$emailAmici[$i]."'";
                $ris2 = $conn->query($myquery);  
                $nomiAmici[$i] = $ris2->fetch_assoc();
            
            } 

            for ($i=0; $i < $nAmici; $i++) {
                $nomiAmici[$i] = array_values($nomiAmici[$i]);
            }

            $nomiAmici = array_merge_recursive(...$nomiAmici);
            $_SESSION['amici'] = $nomiAmici;
            $_SESSION['nAmici'] = $nAmici;
        }else{
            $_SESSION['amici'] = '';
            $_SESSION['nAmici'] = 0;
        }


        $myquery = "SELECT EmailAmicoM, EmailAmicoR, Accettato
                    FROM amicizia 
                    WHERE (EmailAmicoM = '".$email."' OR EmailAmicoR = '".$email."') AND Accettato = '0' ";
        $ris = $conn->query($myquery);            
        if($ris->num_rows >0) {
            $emailTot = array();
            while ($row = $ris->fetch_assoc()) {
                $emailTot[] = $row;
            }
        
            $nRichieste = $ris->num_rows;

            for ($i=0; $i < $nRichieste; $i++) { 
                $emailTot[$i] = array_diff($emailTot[$i], array($email));
                $emailTot[$i] = array_diff($emailTot[$i], array('0'));
                $emailTot[$i] = array_values($emailTot[$i]);
            }

            $emailRichieste = array_merge_recursive(...$emailTot);

            for ($i=0; $i <$nRichieste; $i++) {  
                $myquery = "SELECT Username
                        FROM utente
                        WHERE Email = '".$emailRichieste[$i]."'";
                $ris2 = $conn->query($myquery);  
                
                $nomiRichieste[$i] = $ris2->fetch_assoc();
            
            } 

            for ($i=0; $i < $nRichieste; $i++) {
                $nomiRichieste[$i] = array_values($nomiRichieste[$i]);
            }

            $nomiRichieste = array_merge_recursive(...$nomiRichieste);
     
            $_SESSION['nRichieste'] = $nRichieste;
            $_SESSION['nomiRichieste'] = $nomiRichieste;
    }else{
        $_SESSION['nRichieste'] = 0;
        $_SESSION['nomiRichieste'] = '';
    }

}
?>



