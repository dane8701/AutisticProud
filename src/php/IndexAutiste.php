<?php
    session_start();
    $IdAutiste = $_SESSION["IdAutiste"];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Autistic & Proud</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/Agenda.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-dark bg-dark static-top">
                <a class="navbar-brand"><img src="../img/logoAP.png" height="100px"></a>
                <div class="navbar" style="padding: 1%;">
                    <a style="margin-right: 10px;" class="a nav-item nav-link btn btn-outline-primary" href="../html/index.html">Accueil</a>
                    <a style="margin-right: 10px;" class="a nav-item nav-link btn btn-outline-primary" href="#">Contact</a>
                    <a class="a nav-item nav-link btn btn-outline-primary" href="Deconnexion.php">Deconnexion <i class="bi bi-box-arrow-right"></i></a>
                </div>
        </nav>
    </header>
    <div class="headtable" style="width: 70%; height: max-content; padding: 10px; border-radius: 10px; margin : auto; margin-top: 5%; background: rgb(238, 238, 238); color: white; display: flex;">
            <div style="width: 100%;">
                <div style="background-color: rgba(0, 0, 255, 0.349); text-align: center; margin-right: 5px; border-radius: 5px;">LUNDI <br/> 17/08/2021</div>

                <?php
                    //LUNDI
                    include("./ConnexionBD.php");
                    $req = 'SELECT Titre, Description, DATE_FORMAT(HeureDebut, \'%H\'), DATE_FORMAT(HeureFin, \'%H\'), DATE_FORMAT(DateTache, \'%a\'), Image FROM Tache WHERE IdAutiste='.$IdAutiste.' AND DATE_FORMAT(DateTache, \'%a\')="Mon" AND DateTache > NOW() AND DATE_FORMAT(DateTache, \'%DD\') < DATE_FORMAT(NOW(), \'%DD\') + 7';
                    $res = $conn -> query($req);
                    while($ligne = $res -> fetch())
                    {
                        $Titre = $ligne[0];
                        $Description = $ligne[1];
                        $HeureDebut = $ligne[2];
                        $HeureFin = $ligne[3];
                        $DateTache = $ligne[4];
                        $Image = $ligne[5];
                        echo '<div style="color: black; background-color: white; text-align: center; margin-top: 5px; margin-right: 5px; border-radius: 5px;">
                            <b style="font-size: large;">'.$HeureDebut.'h - '.$HeureFin.'h</b> <br/>
                            '.$Titre.' <br/>
                            <img src="'.$Image.'" style="width: 80%;">
                            <p>'.$Description.'</p>
                        </div>';
                    }
                ?>
            </div>
            
            <div style="width: 100%;">
                <div style="background-color: rgba(0, 0, 255, 0.486); text-align: center; margin-right: 5px; border-radius: 5px;">MARDI <br/> 17/08/2021</div>
                
                <?php
                    //MARDI
                    include("./ConnexionBD.php");
                    $req = 'SELECT Titre, Description, DATE_FORMAT(HeureDebut, \'%H\'), DATE_FORMAT(HeureFin, \'%H\'), DATE_FORMAT(DateTache, \'%a\'), Image FROM Tache WHERE IdAutiste='.$IdAutiste.' AND DATE_FORMAT(DateTache, \'%a\')="Tue" AND DateTache > NOW() AND DATE_FORMAT(DateTache, \'%DD\') < DATE_FORMAT(NOW(), \'%DD\') + 7';
                    $res = $conn -> query($req);
                    while($ligne = $res -> fetch())
                    {
                        $Titre = $ligne[0];
                        $Description = $ligne[1];
                        $HeureDebut = $ligne[2];
                        $HeureFin = $ligne[3];
                        $DateTache = $ligne[4];
                        $Image = $ligne[5];
                        echo '<div style="color: black; background-color: white; text-align: center; margin-top: 5px; margin-right: 5px; border-radius: 5px;">
                            <b style="font-size: large;">'.$HeureDebut.'h - '.$HeureFin.'h</b> <br/>
                            '.$Titre.' <br/>
                            <img src="'.$Image.'" style="width: 80%;">
                            <p>'.$Description.'</p>
                        </div>';
                    }
                ?>
            </div>

            <div style="width: 100%;">
                <div style="background-color: rgba(0, 0, 255, 0.644); text-align: center; margin-right: 5px; border-radius: 5px;">MERCREDI <br/> 17/08/2021</div>

                <?php
                    //MERCREDI
                    include("./ConnexionBD.php");
                    $req = 'SELECT Titre, Description, DATE_FORMAT(HeureDebut, \'%H\'), DATE_FORMAT(HeureFin, \'%H\'), DATE_FORMAT(DateTache, \'%a\'), Image FROM Tache WHERE IdAutiste='.$IdAutiste.' AND DATE_FORMAT(DateTache, \'%a\')="Wed" AND DateTache > NOW() AND DATE_FORMAT(DateTache, \'%DD\') < DATE_FORMAT(NOW(), \'%DD\') + 7';
                    $res = $conn -> query($req);
                    while($ligne = $res -> fetch())
                    {
                        $Titre = $ligne[0];
                        $Description = $ligne[1];
                        $HeureDebut = $ligne[2];
                        $HeureFin = $ligne[3];
                        $DateTache = $ligne[4];
                        $Image = $ligne[5];
                        echo '<div style="color: black; background-color: white; text-align: center; margin-top: 5px; margin-right: 5px; border-radius: 5px;">
                            <b style="font-size: large;">'.$HeureDebut.'h - '.$HeureFin.'h</b> <br/>
                            '.$Titre.' <br/>
                            <img src="'.$Image.'" style="width: 80%;">
                            <p>'.$Description.'</p>
                        </div>';
                    }
                ?>
            </div>

            <div style="width: 100%;">
                <div style="background-color: rgba(45, 45, 194, 0.822); text-align: center; margin-right: 5px; border-radius: 5px;">JEUDI <br/> 17/08/2021</div>

                <?php
                    //JEUDI
                    include("./ConnexionBD.php");
                    $req = 'SELECT Titre, Description, DATE_FORMAT(HeureDebut, \'%H\'), DATE_FORMAT(HeureFin, \'%H\'), DATE_FORMAT(DateTache, \'%a\'), Image FROM Tache WHERE IdAutiste='.$IdAutiste.' AND DATE_FORMAT(DateTache, \'%a\')="Thu" AND DateTache > NOW() AND DATE_FORMAT(DateTache, \'%DD\') < DATE_FORMAT(NOW(), \'%DD\') + 7';
                    $res = $conn -> query($req);
                    while($ligne = $res -> fetch())
                    {
                        $Titre = $ligne[0];
                        $Description = $ligne[1];
                        $HeureDebut = $ligne[2];
                        $HeureFin = $ligne[3];
                        $DateTache = $ligne[4];
                        $Image = $ligne[5];
                        echo '<div style="color: black; background-color: white; text-align: center; margin-top: 5px; margin-right: 5px; border-radius: 5px;">
                            <b style="font-size: large;">'.$HeureDebut.'h - '.$HeureFin.'h</b> <br/>
                            '.$Titre.' <br/>
                            <img src="'.$Image.'" style="width: 80%;">
                            <p>'.$Description.'</p>
                        </div>';
                    }
                ?>
            </div>
            <div style="width: 100%;">
                <div style="background-color: rgba(55, 55, 179, 0.904); text-align: center; border-radius: 5px;">VENDREDI <br/> 17/08/2021</div>

                <?php
                    //VENDREDI
                    include("./ConnexionBD.php");
                    $req = 'SELECT Titre, Description, DATE_FORMAT(HeureDebut, \'%H\'), DATE_FORMAT(HeureFin, \'%H\'), DATE_FORMAT(DateTache, \'%a\'), Image FROM Tache WHERE IdAutiste='.$IdAutiste.' AND DATE_FORMAT(DateTache, \'%a\')="Fri" AND DateTache > NOW() AND DATE_FORMAT(DateTache, \'%DD\') < DATE_FORMAT(NOW(), \'%DD\') + 7';
                    $res = $conn -> query($req);
                    while($ligne = $res -> fetch())
                    {
                        $Titre = $ligne[0];
                        $Description = $ligne[1];
                        $HeureDebut = $ligne[2];
                        $HeureFin = $ligne[3];
                        $DateTache = $ligne[4];
                        $Image = $ligne[5];
                        echo '<div style="color: black; background-color: white; text-align: center; margin-top: 5px; margin-right: 5px; border-radius: 5px;">
                            <b style="font-size: large;">'.$HeureDebut.'h - '.$HeureFin.'h</b> <br/>
                            '.$Titre.' <br/>
                            <img src="'.$Image.'" style="width: 80%;">
                            <p>'.$Description.'</p>
                        </div>';
                    }
                ?>
            </div>
        </div>
    <footer>
        <div class="container-fluid">
            <div class="footer">
                <p>Copyright © 2021. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>