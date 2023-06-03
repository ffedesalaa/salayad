<?php if($accesso === true){
                echo '<div class="main__pagina__profilo">
                    
                <div class="main__pagina__fotoprofilo">
                    <img src="../../Immagini/Foto_Profilo/'.$nomeFile.'" alt="">
                </div>
                <div class="main__pagina__profilo__username" id="nickname">
                    <b><p>
                        
                                @'. $username. '
                        
                    </p></b>
                </div>
                <div class="main__pagina__profilo__info" id="profilo">
                    <a href="profilo.php">PROFILO</a>
                </div>
                <div class="main__pagina__profilo__info" id="modifica">
                    <a href="modifica.php">MODIFICA</a>
                </div>
                    
                </div>';
            }else{
                echo '  <div class="main__pagina__profilo" id="main__pagina__profiloid">
                            <div class="main__pagina__fotoprofilo">
                                
                            </div>
                            <div class="main__pagina__profilo__mess">
                                <p>Non hai un account?</p>
                            </div>
                            <a href="File_PHP/Accesso/signin.php" class="main__pagina__profilo__registrati"><button value="submit" id="signin"><b>SIGNIN</b></button></a>
                        </div>
                        <script>
                            var x = document.getElementById("main__pagina__profiloid");
                            x.style.height = "300px"
                        </script>';

            
            }
        ?>