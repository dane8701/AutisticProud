<?php
    include("./ConnexionBD.php");
    session_start();
    @$_SESSION["NomPrenom"] = null;
    @$_SESSION["IdUtilisateur"] = null;
    @$IdType = 0;
    if(isset($_POST["email"]) && isset($_POST["mdp"]))
    {
        @$Email = $_POST["email"];
        @$Password = $_POST["mdp"];
        
        @$req = "SELECT IdUtilisateur, Nom, Prenom, IdType FROM Utilisateur WHERE Email='$Email' AND MotDePasse='$Password'";
        @$res = $conn -> query($req);
        while($row = $res -> fetch())
        {
            $_SESSION["IdUtilisateur"] = $row[0];
            $_SESSION["NomPrenom"] = $row[2]." ".$row[1];
            $IdType = $row[3];

        }
        
        if($IdType == 1)
        {
            header("location: IndexEmployeur.php");
        }
        else
        {
            header("location: IndexAutiste.php");
        }
        
    }
    else
    {
        session_destroy();
        


        //header("location:../views/account/Email.php");
    }
?>