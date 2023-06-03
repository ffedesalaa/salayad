<?php
    if(isset($_POST['amico'])) $amico = $_POST['amico']; else $amico ="";
    session_start();
    require('../Sessioni/SessioneInfo.php');
    require('../Sessioni/SessioneAmici.php');
    require('../Sessioni/Sessione_Controlli_Infoamici.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amici</title>
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
                    <div class="post">
                        <form action="" id='formPost' enctype="multipart/form-data">
                            <div class="selezione__foto__post">
                                <div class="foto__preview">
                                    <div class='slider' id="slider">
                                        
                                    </div>
                                    <div class="cont-freccia">
                                        <span class="freccia sinistra"><ion-icon name="chevron-back-outline"></ion-icon></span> 
                                        <span class="freccia destra"><ion-icon name="chevron-forward-outline"></ion-icon></span> 
                                    </div>
                                </div>
                                <input type="file" name='imgPost[]' id="imgPost" multiple style="display:none;">
                                <label for='imgPost' id="labelpost" class="selezione__foto">
                                    <ion-icon name="add-outline"></ion-icon>
                                </label>
                            </div>
                            <div class="commento__foto__post">
                                <div class="commento__preview">
                                    <div class="titolo__commento">
                                        <p>Aggiungi un commento</p>
                                    </div>
                                    <div class="scrivi__commento">
                                        <textarea name="messaggio" id="messaggio" cols="42" rows="14"></textarea>
                                    </div>
                                </div>
                                <button value="submit" class="pubblica">PUBBLICA</button>
                            </div>
                            
                        </form>
                        <h2 id='messalva'style="position:absolute; color:white; bottom:0; left:35%; padding: 20px; display:none">Post salvato con successo</h2>
                    </div>
                </div>
            </div>

        </main>
        <footer>
            <div><a>Ahmad Fayad - Federico Sala</a></div>
        </footer>           
        

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        function generaAnteprima(file) {
        var reader = new FileReader();
        reader.onload = function (event) {
            var img = new Image();
            img.src = event.target.result;

            var anteprima = document.createElement("img");
            anteprima.src = img.src;
            var anteprimeDiv = document.createElement("div");
            anteprimeDiv.classList.add('img-singola');
            slider.appendChild(anteprimeDiv);
            anteprimeDiv.appendChild(anteprima);
            
        };

        reader.readAsDataURL(file);
        }
        function gestisciCaricamentoImmagini(event) {
            var slider = document.getElementById("slider");
            var files = event.target.files;
            slider.style.width = (100*files.length)+"%";
            slider.innerHTML ='';
            console.log(100*files.length);
            nFile = files.length;
            for (var i = 0; i < files.length; i++) {
                generaAnteprima(files[i]);
            }
        }
        var inputImmagini = document.getElementById("imgPost");
        inputImmagini.addEventListener("change", gestisciCaricamentoImmagini);


        const slider = document.querySelector('.slider');
        const frecciaSin = document.querySelector('.sinistra');
        const frecciaDes = document.querySelector('.destra');


        var sectionIndex = 0;

        frecciaDes.addEventListener('click', function(){
        sectionIndex = (sectionIndex < (nFile-1)) ? sectionIndex + 1 :nFile-1 ;
        slider.style.transform = 'translate('+(sectionIndex) * -(100/nFile) +'%)';
        });

        frecciaSin.addEventListener('click', function(){
        sectionIndex = (sectionIndex >0) ? sectionIndex - 1 :0 ;
        slider.style.transform = 'translate('+(sectionIndex) * -(100/nFile) +'%)';
        });

        $('#formPost').submit(function(e) {
            e.preventDefault();

            var formData = new FormData(this);
            var input = $('#messaggio').val();
            formData.append('commento', input);
            $.ajax({
                url: '../Accesso/gg.php',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    console.log(response);
                    setTimeout(function(){
                        window.location.href = '../../home.php';
                    }, 3000);
                    var mes= document.getElementById('messalva');
                    mes.style.display = 'block';
                },
                
            });
        });

    </script>


</body>
</html>

