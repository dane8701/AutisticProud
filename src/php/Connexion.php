<?php
    include("./ConnexionBD.php");
    session_start();
    @$_SESSION["NomPrenom"] = null;
    @$_SESSION["IdEmployeur"] = null;
    @$_SESSION["IdAutiste"] = null;
    if(isset($_POST["email"]) && isset($_POST["mdp"]))
    {
        @$Email = $_POST["email"];
        @$Password = $_POST["mdp"];
        
        @$req = "SELECT IdEmployeur, Nom, Prenom, Email, MotDePasse FROM Employeur";
        @$res = $conn -> query($req);
        while($row = $res -> fetch())
        {
            if($Email == $row[3] && $Password == $row[4])
            {   
                $_SESSION["IdEmployeur"] = $row[0];
                $_SESSION["NomPrenom"] = $row[2]." ".$row[1];
                header("location: IndexEmployeur.php");
            }
        }
        
        @$req = "SELECT IdAutiste, Nom, Prenom, Email, MotDePasse FROM Autiste";
        @$res = $conn -> query($req);
        while($row = $res -> fetch())
        {
            if($Email == $row[3] && $Password == $row[4])
            {   
                $_SESSION["IdAutiste"] = $row[0];
                $_SESSION["NomPrenom"] = $row[2]." ".$row[1];
                header("location: IndexAutiste.php");
            }
        }
        
    }
    else
    {
        session_destroy();

        //header("location:../views/account/Email.php");
    }
?>