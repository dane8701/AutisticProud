<?php
    session_start();
    if(isset($_GET["IdAutiste"]))
    {
        @$_SESSION["IdAutiste"] = $_GET["IdAutiste"];
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>

<header>
    <nav class="navbar navbar-dark bg-dark static-top">
        <a class="navbar-brand"><img src="../img/logoAP.png" height="100px"></a>
        <a class="navbar-brand"><h1 style="color: white; font-size: xx-large; margin-left: 2% !important;"> AUTISTIC & PROUD</h1></a>
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

<body>

<div style="display: flex;">
    <div class="bg-transparent" style="width: 20%; height: 100%; padding: 10px; margin-top: 5%;">
        <a class="btn btn-outline-secondary" style="padding: 5px; border-radius: 10px; margin-bottom: 5px; width: 100%; height: max-content;" href="AjouterEmployer.php">Ajouter un employé</a>
        <a class="btn btn-outline-secondary" style="padding: 5px; border-radius: 10px; margin-bottom: 5px; width: 100%; height: max-content;" href="../html/AjouterAg.php">Ajouter agenda employé</a>
        <a class="btn btn-outline-secondary" style="padding: 5px; border-radius: 10px; margin-bottom: 5px; width: 100%; height: max-content;" href="ListerEmployer.php">Lister ses employés</a>
        <a class="btn btn-outline-secondary" style="padding: 5px; border-radius: 10px; margin-bottom: 5px; width: 100%; height: max-content;" href="ConsulterAgenda.php">Consulter l'agenda d'un employé</a>
    </div>
    <div style="width: 70%; height: 700px; padding: 10px; border-radius: 10px; margin-top: 5%; background: rgb(238, 238, 238);">
        <div id="tableDivId" class="agendaBody ">
            <br>
            <div style="width: 30%;" class="form-group">
                <div class="datepicker date input-group">
                    <input style="width: 30%" type="text" placeholder="Date" class="form-control" id="reservationDate">
                    <div class="input-group-append"><span class="input-group-text px-4"><i class="bi bi-calendar3"></i></span></div>
                </div>
            </div>
        
            <br>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Début - Fin</th>
                        <th scope="col">Titre</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody id="tableBody">
                    <tr id="0">
                        <th scope="row">
                            <input id="img-0" type="file" accept=".jpg,.jpeg,.png,.svn">
                        </th>
                        <td rowspan="2" style="display: flex;">
                            <select id="beginHour-0" name="beginHour">
                                <option value="8">8h</option>
                                <option value="9">9h</option>
                                <option value="10">10h</option>
                                <option value="11">11h</option>
                                <option value="12">12h</option>
                                <option value="13">13h</option>
                                <option value="14">14h</option>
                                <option value="15">15h</option>
                                <option value="16">16h</option>
                                <option value="17">17h</option>
                                <option value="18">18h</option>
                            </select>
        
                            <select id="finishHour-0" name="finishHour">
                                <option value="8">8h</option>
                                <option value="9">9h</option>
                                <option value="10">10h</option>
                                <option value="11">11h</option>
                                <option value="12">12h</option>
                                <option value="13">13h</option>
                                <option value="14">14h</option>
                                <option value="15">15h</option>
                                <option value="16">16h</option>
                                <option value="17">17h</option>
                                <option value="18">18h</option>
                            </select>
                        </td>
                        <td>
                            <input id="titreTache-0" type="text" placeholder="Titre de la tâche">
                            <textarea id="description-0" cols="100" placeholder="Veuillez rédiger la tâche de cette heure"></textarea>
                        </td>
                        <td ><a onclick='deleteWorkHour()' id="btn-0" class="btn btn-outline-danger"><i class="bi bi-trash"></i></a></td>
                        <br>
                    </tr>
        
                    <tr id="marker">
        
                    </tr>
        
        
                </tbody>
            </table>
            <div id="plusButton">
                <button class="btn btn-primary btn-sm" type="button" id="addLineToTab" onclick="addWorkHour()"><i class="bi bi-plus-lg"></i></button>
            </div>
            <div id="submitForCheckAndTransfer">
                <button class="btn btn-outline-primary" type="button" onclick="checkData()">Créer l'agenda</button>
            </div>
        
            <style>
                #addLineToTab{
                    margin-top: 1.5% !important;
                    display: block;
                    margin: auto;
                }
                .agendaBody{
                    justify-content: center;
                }
                #plusButton{
                    display: block;
                    margin: auto;
                }
                .navbar{
                    background-color: #90C5D6 !important;
                }
                #submitForCheckAndTransfer{
                    text-align: center;
                    margin-top: 1%;
                }
            </style>
        
            <br>
        
        </div>
        
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

<script type="text/javascript" src="../js/function.js"></script>