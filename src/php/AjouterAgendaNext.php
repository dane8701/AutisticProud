<?php
    include("./ConnexionBD.php");

    session_start();
    $IdAutiste = $_SESSION["IdAutiste"];
    $IdEmployeur = $_SESSION["IdEmployeur"];

    $json = file_get_contents('php://input');
    $data = json_decode($json);
    echo var_dump($data);

    $tailleTableau = $_GET['tailleTableau'];

    for ($i = 0; $i < $tailleTableau; $i++) {

        $Titre = null;
        $Description = null;
        $HeureDebut = null;
        $HeureFin = null;
        $DateTache = null;
        $Image = null;

        $Titre = $data[$i]->{'titre'};
        $Description = $data[$i]->{'description'};
        $HeureDebut = (int)$data[$i]->{'heureDebut'};
        $HeureDebut = (int)$HeureDebut;
        $HeureFin = (int)$data[$i]->{'heureFin'};
        $HeureFin = (int)$HeureFin;
        $DateTache = $data[$i]->{'date'};
        $Image = $data[$i]->{'image'};

        $query = null;
        $test = null;

        @$query = 'INSERT INTO `tache`(`Titre`, `Description`, `HeureDebut`, `HeureFin`, `DateTache`, `Image`, `IdAutiste`, `IdEmployeur`) 
                        VALUES (\''.$Titre.'\', \''.$Description.'\', \''.$HeureDebut.':00:00\', \''.$HeureFin.':00:00\', \''.$DateTache.'\', \''.$Image.'\', '.$IdAutiste.', '.$IdEmployeur.')';
        @$test = $conn -> query($query);

        if(@$test)
        {
            echo 'Enregistrement OK !';
        }
        else
        {
            echo @$query;
        }
    }
?>