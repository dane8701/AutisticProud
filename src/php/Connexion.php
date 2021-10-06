<?php
    include("./ConnexionBD.php");
    session_start();
    @$_SESSION["NomPrenom"] = null;
    @$_SESSION["IdUtilisateur"] = null;

    if(isset($_POST["email"]) && isset($_POST["mdp"]))
    {
        @$Email = $_POST["email"];
        @$Password = $_POST["mdp"];
        
        @$req = "SELECT IdUtilisateur, Nom FROM Utilisateur WHERE Email='$Email' AND MotDePasse=md5('$Password')";
        @$res = $conn -> query($req);
        while($row = $res -> fetch())
        {
            $_SESSION["IdUtilisateur"] = $row[0];
            $_SESSION["NomPrenom"] = $row[1]." ".$row[2];
        }
        
        
        header("location: indexphp.html");
    }
    else
    {
        session_destroy();
        


        //header("location:../views/account/Email.php");
    }
?>