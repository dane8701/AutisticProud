<?php
    include("./ConnexionBD.php");
    session_destroy();

    header("location:../html/Index.html")
?>