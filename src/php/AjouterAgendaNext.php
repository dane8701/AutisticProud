<?php
    //$IdAutiste = $_SESSION["IdAutiste"];
    $json = file_get_contents('php://input');
    $data = json_decode($json);
    var_dump($data);

?>