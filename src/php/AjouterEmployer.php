<?php
    include("./ConnexionBD.php");
    @$Nom = $_POST["nom"];
    @$Prenom = $_POST["prenom"];
    @$Email = $_POST["email"];
    @$Password = $_POST["mdp"];
    
    if(isset($Nom) && isset($Prenom) && isset($Email) && isset($Password))
    {
        @$query = "INSERT INTO Autiste (Nom, Prenom, Email, MotDePasse) 
                    VALUES ('$Nom', '$Prenom', '$Email', '$Password')";
        @$test = $conn -> query($query);
    }
    if(@$test)
    {
        echo 'Enregistrement OK ! <br/>';

        header("location:ListerEmployer.php");
    }
    else
    {
        echo @$query;
    }
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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-dark bg-dark static-top">
                <a class="navbar-brand"><img src="../img/logoAP.png" height="100px"></a>
                <div class="navbar" style="padding: 1%;">
                    <a style="margin-right: 10px;" class="a nav-item nav-link btn btn-outline-primary" href="../html/index.html">Accueil</a>
                    <a style="margin-right: 10px;" class="a nav-item nav-link btn btn-outline-primary" href="#">Contact</a>
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-person-circle"></i> Mon profil
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Mes agendas <i class="bi bi-calendar-range"></i></a>
                          <a class="dropdown-item" href="Deconnexion.php">Deconnexion <i class="bi bi-box-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
        </nav>
    </header>

    <div style="display: flex;">
        <div class="bg-transparent" style="width: 20%; height: 100%; padding: 10px; margin-top: 5%;">
            <a class="btn btn-outline-secondary" style="padding: 5px; border-radius: 10px; margin-bottom: 5px; width: 100%; height: max-content;" href="AjouterEmployer.php">Ajouter un employé</a>
            <a class="btn btn-outline-secondary" style="padding: 5px; border-radius: 10px; margin-bottom: 5px; width: 100%; height: max-content;" href="AjouterAg.php">Ajouter agenda employé</a>
            <a class="btn btn-outline-secondary" style="padding: 5px; border-radius: 10px; margin-bottom: 5px; width: 100%; height: max-content;" href="ListerEmployer.php">Lister ses employés</a>
            <a class="btn btn-outline-secondary" style="padding: 5px; border-radius: 10px; margin-bottom: 5px; width: 100%; height: max-content;" href="ConsulterAgenda.php">Consulter l'agenda d'un employé</a>
        </div>
        <div style="width: 70%; height: 700px; padding: 10px; border-radius: 10px; margin-top: 5%; background: rgb(238, 238, 238);">
            <form method="POST" action="AjouterEmployer.php">
                <label class="control-label"><b>Nom</b></label>
                <input class="input-group input-group-text" style="width: 50%;" type="text" placeholder="Nom" name="nom" required>

                <br/>
                <label><b>Prénom</b></label>
                <input class="input-group input-group-text" style="width: 50%;" type="text" placeholder="Prénom" name="prenom" required>

                <br/>
                <label class="control-label"><b>Email</b></label>
                <input class="input-group input-group-text" style="width: 50%;" type="email" placeholder="Email" name="email" required>

                <br/>
                <label class="control-label"><b>Mot de passe</b></label>
                <input class="input-group input-group-text" style="width: 50%;" id="password" type="password" placeholder="Mot de passe" name="mdp" required>

                <div style="display: flex; padding-right: 45%;">
                    <input type="submit" class="btn btn-primary text-lg-center" style="margin-top: 15px; height: 80px;" value="Enregistrer"/>
                </div>
            </form>
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