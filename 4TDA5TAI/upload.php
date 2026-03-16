<?php

if(isset($_FILES['obrazy'])){

    $zipName = "paczka_" . time() . ".zip";
    $zip = new ZipArchive();

    if($zip->open($zipName, ZipArchive::CREATE) === TRUE){
        foreach($_FILES['obrazy']['tmp_name'] as $key => $tmp_name){

            $originalName = $_FILES['obrazy']['name'][$key];
            $extension = strtolower(pathinfo($originalName, PATHINFO_EXTENSION));
            if(in_array($extension, ['jpg','jpeg','png'])){

                $zip->addFile($tmp_name, $originalName);
            } else {
                echo "Plik $originalName został pominięty (niedozwolone rozszerzenie)<br>";
            }
        }

        $zip->close();
        echo "<h3>Archiwum gotowe!</h3>";
        echo "<a href='$zipName'>Pobierz plik ZIP</a>";

    } else {
        echo "Nie udało się utworzyć archiwum.";
    }

}
?>