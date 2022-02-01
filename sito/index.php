<?php
    $file_data = json_decode(file_get_contents("dati.json"));
    $d;
    foreach ($file_data as $key => $value) {
        $d = $value -> dato;
        echo "[$key] $d<br>";
    }
    $newValore = new stdClass();
    $newValore -> dato = ($d + 1);
    $file_data[] = $newValore;

    file_put_contents("dati.json",json_encode($file_data));
?>