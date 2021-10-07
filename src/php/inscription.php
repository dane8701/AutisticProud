<?php
    include("./ConnexionBD.php");
    @$Nom = $_POST["nom"];
    @$Prenom = $_POST["prenom"];
    @$Email = $_POST["email"];
    @$Password = $_POST["mdp"];
    
    if(isset($Nom) && isset($Prenom) && isset($Email) && isset($Password))
    {
        @$query = "INSERT INTO Employeur (Nom, Prenom, Email, MotDePasse) 
                    VALUES ('$Nom', '$Prenom', '$Email', '$Password')";
        @$test = $conn -> query($query);
    }
    if(@$test)
    {
        echo 'Inscription OK ! <br/>';

        header("location:../html/Connexion.html");
    }
    else
    {
        echo @$query;
    }
?>