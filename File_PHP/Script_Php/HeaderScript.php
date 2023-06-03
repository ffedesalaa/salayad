<?php
    echo '<header>
    <a href="../../home.php"><div class="logo"><b>MOMENTUM</b></div></a>
    <div class="barraRicerca">
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        
    </div>';

    if($accesso === true){
        echo '<div class="contenitore-lognot">
                    <div  id="campanellina">
                        <ion-icon name="notifications-outline"></ion-icon>
                        <div id="numeroNotifica">'.$nRichieste.'</div>
                    </div>
                        <a href="../Accesso/logout.php"><div class="login"><b>LOGOUT</b></div></a> 
            </div>';
    }
    else{
        echo'<a href="../Accesso/login.php"><div class="login"><b>LOGIN</b></div></a>';
    }
    echo'</header>';


?>
