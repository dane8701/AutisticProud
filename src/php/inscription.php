<?php
    include("./ConnexionBD.php");
    @$Nom = $_POST["Nom"];
    @$Prenom = $_POST["Prenom"];
    @$Email = $_POST["Email"];
    @$Password = $_POST["Password"];
    
    if(isset($Nom) && isset($Prenom) && isset($Email) && isset($Password))
    {
        @$query = "INSERT INTO produit (Nom, Prenom, Email, Password) 
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