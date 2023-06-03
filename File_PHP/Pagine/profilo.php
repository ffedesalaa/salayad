<?php
    session_start();
    require('../Sessioni/SessioneInfo.php');
    require('../Sessioni/SessioneAmici.php');
    require('../Sessioni/Sessione_Controlli_Infoamici.php');
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Network</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <div id="container-pagina">
        <?php
            require('../Script_PHP/HeaderScript.php');
        ?>

        <main>
            <?php
                require('../Script_PHP/MainMenu.php');
            ?>

            <div class="main__containerPagina">
                <div class="main__pagina">
                    <div class="main__pagina__infoprofile">
                        <div class="main__infoprofile__foto">
                            <img src="../../Immagini/Foto_Profilo/<?php echo $nomeFile;?>" alt="">
                        </div>
                        <div class="main__infoprofile__username">
                            <?php
                                echo "@".$username;
                            ?>
                        </div>
                    
                        <a href="amici.php" id="friends">
                            <div class="main__infoprofile__info" id="totamici">
                                <p><?php echo $nAmici;?></p> <ion-icon name="accessibility-outline" class="proficon" ></ion-icon>
                            </div>
                        </a>
                        <a href="modifica.php" id="settings">
                            <div class="main__infoprofile__info">
                                <ion-icon name="settings-outline" class="proficon" ></ion-icon> 
                            </div>
                        </a>
                    </div>
                    <div class="main__infoprofile__post">
                        <?php 
                        if($infoPost != '')
                        for ($i=0; $i < count($infoPost); $i++) {?> 

                        <div class="infoprofile__post">

                            <div class="post__foto">
                            <?php 
                                $nImmagini = 0;
                                $immagineper = [];
                                    for($y=0; $y < count($infoPostImg); $y++){
                                        if($infoPost[$i]['idPost'] == $infoPostImg[$y]['idPost']){
                                            $nImmagini++;
                                            $immagineper[]=$infoPostImg[$y]['immagine'];
                                }}
                                    $totImg[$i]= $nImmagini?> 
                                <div class='slider' id="slider<?php echo $i?>" style='width:<?php echo $nImmagini*100;?>%'>
                                <?php 

                                        for($j=0; $j < $nImmagini; $j++){
                                            ?> 
                                    <div class="img-singola img-sing<?php echo $i?>">

                                        <img src="../../Immagini/Immagini_Post/<?php echo $immagineper[$j]?>" alt="">
                                    </div>   
                                    <?php 
                                    }?> 



                                </div>
                                <div class="cont-freccia">
                                        <button class="freccia sinistra" id="<?php echo 'sinistra'.$i ?>"><ion-icon name="chevron-back-outline"></ion-icon></button> 
                                        <button class="freccia destra" id="<?php echo 'destra'.$i ?>"><ion-icon name="chevron-forward-outline"></ion-icon></button> 
                                    </div>
                            </div>
                            <div class="post__commenti">
                                <div class="post__like" style="display:flex">
                                    <div class="data" style="font-size:20px; display:flex; align-items:end; "><?php echo $infoPost[$i]['data'] ?></div>
                                    <div class="post__like__div"  style="padding-left:20px">
                                        <p><?php echo $infoPost[$i]['like'] ?> </p> <ion-icon name="heart-outline" class="proficon" ></ion-icon>
                                    </div>
                                </div>
                                <div class="post__comment">
                                    <div class="commento">
                                    <?php echo '<b>Creator:</b> '.$infoPost[$i]['commento'] ?>
                                    </div>
                                </div>
                                <div class="post__scrivi">
                                    <input type="text">
                                    <button>
                                        <ion-icon name="arrow-forward-circle-outline"></ion-icon>
                                    </button>
                                </div>
                            </div>  
                        </div>
                    <?php 
                        }?> 
                    </div>
                </div>
            </div>
        </main>

    <footer class="footer__profilo">
        <div><a>Ahmad Fayad - Federico Sala</a></div>
    </footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script >
            <?php 
            if($accesso === false):
            ?>
            var linkEsplora = document.getElementById('linkEsplora');
            var linkSeguiti = document.getElementById('linkSeguiti');
            var linkMessaggi = document.getElementById('linkMessaggi');
            var linkCrea = document.getElementById('linkCrea');
            linkEsplora.href = linkSeguiti.href =  linkMessaggi.href =  linkCrea. href= "../Accesso/login.php";
            <?php 
            endif
            ?>


            $(document).ready(function() {
                $('.freccia').click(function() {
                var idDinamico = $(this).attr('id');
                
                var regex = /sinistra/;
                var sectionIndex = 0;
                if(regex.test(idDinamico) === true){
                    var idNum = idDinamico.replace("sinistra", "");
                    var slider = 'slider'+idNum;
                    var id = 'img-sing'+idNum;
                    var divImg = document.getElementsByClassName(id);
                    var num = divImg.length;
                    var slid = document.getElementById(slider);
                    sectionIndex = (sectionIndex >0) ? sectionIndex - 1 :0 ;
                    slid.style.transform = 'translate('+(sectionIndex) * +(100/num) +'%)';

                }
                else{
                    var idNum = idDinamico.replace("destra", "");
                    var slider = 'slider'+idNum;
                    var id = 'img-sing'+idNum;
                    var divImg = document.getElementsByClassName(id);
                    var num = divImg.length;
                    var slid = document.getElementById(slider); 
                    sectionIndex = (sectionIndex >num-1) ? sectionIndex - 1 :num-1 ;
                    slid.style.transform = 'translate('+(sectionIndex) * -(100/num) +'%)';
                }
             });
        });


        </script>
           
    <div id="container-pagina">
</body>
</html>