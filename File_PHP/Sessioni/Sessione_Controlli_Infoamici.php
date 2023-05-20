<?php
    if(isset($_SESSION['amici'])) $nomiAmici = $_SESSION['amici'] ;  else $nomiAmici = ""; 
    if(isset($_SESSION['nAmici'])) $nAmici = $_SESSION['nAmici'] ;  else $nAmici = ""; 
    if(isset($_SESSION['nRichieste'])) $nRichieste = $_SESSION['nRichieste'] ;  else $nRichieste = ""; 
    if(isset($_SESSION['nomiRichieste'])) $nomiRichieste = $_SESSION['nomiRichieste'];  else $nomiRichieste = ""; 
?>