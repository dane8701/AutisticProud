<?php
    include("./ConnexionBD.php");
    @$Nom = $_POST["nom"];
    @$Prenom = $_POST["prenom"];
    @$Email = $_POST["email"];
    @$Password = $_POST["mdp"];
    @$Type = 1;
    
    if(isset($Nom) && isset($Prenom) && isset($Email) && isset($Password))
    {
        @$query = "INSERT INTO Utilisateur (Nom, Prenom, Email, MotDePasse, IdType) 
                    VALUES ('$Nom', '$Prenom', '$Email', '$Password', '$Type')";
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