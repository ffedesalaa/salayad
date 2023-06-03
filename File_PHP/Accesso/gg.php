<?php
    session_start();
    require('../Sessioni/SessioneInfo.php');

    $fileCount =  count($_FILES['imgPost']['name']);
    $conn = new mysqli("localhost","root", "", "momentum");

    if ($conn->connect_error) {
        die('Connesione al database fallita :' . $conn->connect_error); 
    }else{
        if(isset($_FILES['imgPost'])){
            for ($i=0; $i < $fileCount; $i++) { 
                $fileName = $_FILES['imgPost']['name'][$i];
                $myquery="INSERT INTO immaginepost (immagine)
                VALUES ('$fileName')";
                echo $fileName;
                if($conn->query($myquery) === true){
                    $idImg[] = mysqli_insert_id($conn);
                }
                $percorsoTemporaneo = $_FILES['imgPost']['tmp_name'][$i];
                $percorsoDestinazione = '../../Immagini/Immagini_Post/'. $fileName; 

                move_uploaded_file($percorsoTemporaneo, $percorsoDestinazione);
            }
        }
        if(isset($_POST['commento'])) $commento = $_POST['commento']; else $commento = "";
        $data = date("Y-m-d H:i:s");
        $myquery="INSERT INTO post (commento, data, idUtente)
            VALUES ('$commento', '$data', '$email')";
        if($conn->query($myquery) === true){
            $idPost = mysqli_insert_id($conn);
        }
        for ($i=0; $i < $fileCount; $i++) { 
            $myquery="INSERT INTO appartiene(idPost,idImg)
            VALUES ('$idPost','$idImg[$i]')";
            if($conn->query($myquery) === true){
              echo $i;
            }

        }
        
        
    }
?>