<?php     
    session_start();
    require('../Sessioni/SessioneInfo.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personalizza</title>
    <link rel="stylesheet" href="../../style.css">

</head>
<body>
    <div id="container-pagina">
    <header>
        <a href="../../home.php"><div class="logo"><b>MOMENTUM</b></div></a>
    </header>
    <main class="main-form">
            <div class="conteiner-form" id="form-personalizza">
                <form name="formPersonalizza" id="formPersonalizza" enctype="multipart/form-data" >
                    <h1>Personalizza Profilo</h1>
                    <div class="contenitoreFoto">
                        <div class="contenitoreFoto__icona">
                            <input type="file" name="immagine" id="inputImmagine" onchange="anteprimaImg(event)">
                            <label for="inputImmagine" id='labelImg'>Scegli Foto</label>
                            <img id="anteprima" src="#" alt="Anteprima" style="display: none;">
                        </div>         
                    </div>
                    <button value="submit" id="invio" onclick="gg()">CONFERMA</button>

                </form>
                <div class="conteiner-form__messaggio" id="messaggioRegistrazione">
                    <div class="conteiner-form__messaggio__img"><img src="../../Immagini/check.png" alt="check"></div>
                    <p>Foto Profilo Salvata!</p>
                </div>
            </div>
        </main>

        <footer>
            <div><a>Ahmad Fayad - Federico Sala</a></div>
        </footer>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"> </script>
    <script>
        function gg() {
            var sign = document.getElementById('formPersonalizza');
            sign.style.display = 'none';
            var contSign= document.getElementById('form-personalizza');
            contSign.style.border = '4px solid rgb(247, 67, 97)';
            var mesRegistrazione = document.getElementById('messaggioRegistrazione');
            mesRegistrazione.style.display = 'block';
        }
        function anteprimaImg(event) {
            var input = event.target;
            var anteprima = document.getElementById('anteprima');
            var label = document.getElementById('labelImg');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    anteprima.src = e.target.result;
                    anteprima.style.display = 'block';
                    label.innerHTML ='';
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        $('#formPersonalizza').submit(function(e) {
            e.preventDefault();

            var formData = new FormData(this);

            $.ajax({
                url: 'SalvataggioImgProfilo.php',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    console.log(response);
                    setTimeout(function(){
                        window.location.href = '../../home.php';
                    }, 2000);

                },
                
            });
        });

      </script>
    
</body>
</html>