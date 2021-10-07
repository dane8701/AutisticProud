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
                <a class="navbar-brand"><img src="../img/test.png" height="100px"></a>
                <div class="navbar" style="padding: 1%;">
                    <a style="margin-right: 10px;" class="a nav-item nav-link btn btn-outline-primary" href="index.html">Accueil</a>
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
            <a class="btn btn-outline-secondary" style="padding: 5px; border-radius: 10px; margin-bottom: 5px; width: 100%; height: max-content;" href="ListerEmployer.php">Lister ses employés</a>
            <a class="btn btn-outline-secondary" style="padding: 5px; border-radius: 10px; margin-bottom: 5px; width: 100%; height: max-content;" href="ConsulterAgenda.php">Consulter l'agenda d'un employé</a>
        </div>
        <div class="headtable" style="width: 70%; height: max-content; padding: 10px; border-radius: 10px; margin-top: 5%; background: rgb(238, 238, 238); color: white; display: flex;">
            <div style="width: 100%;">
                <div style="background-color: rgba(0, 0, 255, 0.349); text-align: center; margin-right: 5px; border-radius: 5px;">Lundi <br/> 17/08/2021</div>

                <div style="color: black; background-color: white; text-align: center; margin-top: 5px; margin-right: 5px; border-radius: 5px;">
                    <b style="font-size: large;">8h - 11h</b> <br/>
                    MANGER <br/>
                    <img src="../img/pause.jpg" style="width: 80%;">
                    <p>Vous devez aller manger, car c'est la pause</p>
                </div>
            </div>
            
            <div style="width: 100%;">
                <div style="background-color: rgba(0, 0, 255, 0.486); text-align: center; margin-right: 5px; border-radius: 5px;">Mardi <br/> 17/08/2021</div>
                
                <div style="color: black; background-color: white; text-align: center; margin-top: 5px; margin-right: 5px; border-radius: 5px;">
                    <b style="font-size: large;">8h - 11h</b> <br/>
                    MANGER <br/>
                    <img src="../img/pause.jpg" style="width: 80%;">
                    <p>Vous devez aller manger, car c'est la pause</p>
                </div>

                <div style="color: black; background-color: white; text-align: center; margin-top: 5px; margin-right: 5px; border-radius: 5px;">
                    <b style="font-size: large;">8h - 11h</b> <br/>
                    MANGER <br/>
                    <img src="../img/pause.jpg" style="width: 80%;">
                    <p>Vous devez aller manger, car c'est la pause</p>
                </div>

                <div style="color: black; background-color: white; text-align: center; margin-top: 5px; margin-right: 5px; border-radius: 5px;">
                    <b style="font-size: large;">8h - 11h</b> <br/>
                    MANGER <br/>
                    <img src="../img/pause.jpg" style="width: 80%;">
                    <p>Vous devez aller manger, car c'est la pause</p>
                </div>
            </div>

            <div style="width: 100%;">
                <div style="background-color: rgba(0, 0, 255, 0.644); text-align: center; margin-right: 5px; border-radius: 5px;">Mercredi <br/> 17/08/2021</div>

                <div style="color: black; background-color: white; text-align: center; margin-top: 5px; margin-right: 5px; border-radius: 5px;">
                    <b style="font-size: large;">8h - 11h</b> <br/>
                    MANGER <br/>
                    <img src="../img/pause.jpg" style="width: 80%;">
                    <p>Vous devez aller manger, car c'est la pause</p>
                </div>
            </div>

            <div style="width: 100%;">
                <div style="background-color: rgba(45, 45, 194, 0.822); text-align: center; margin-right: 5px; border-radius: 5px;">Jeudi <br/> 17/08/2021</div>

                <div style="color: black; background-color: white; text-align: center; margin-top: 5px; margin-right: 5px; border-radius: 5px;">
                    <b style="font-size: large;">8h - 11h</b> <br/>
                    MANGER <br/>
                    <img src="../img/pause.jpg" style="width: 80%;">
                    <p>Vous devez aller manger, car c'est la pause</p>
                </div>

                <div style="color: black; background-color: white; text-align: center; margin-top: 5px; margin-right: 5px; border-radius: 5px;">
                    <b style="font-size: large;">8h - 11h</b> <br/>
                    MANGER <br/>
                    <img src="../img/pause.jpg" style="width: 80%;">
                    <p>Vous devez aller manger, car c'est la pause</p>
                </div>
            </div>
            <div style="width: 100%;">
                <div style="background-color: rgba(55, 55, 179, 0.904); text-align: center; border-radius: 5px;">Vendredi <br/> 17/08/2021</div>

                <div style="color: black; background-color: white; text-align: center; margin-top: 5px; margin-right: 5px; border-radius: 5px;">
                    <b style="font-size: large;">8h - 11h</b> <br/>
                    MANGER <br/>
                    <img src="../img/pause.jpg" style="width: 80%;">
                    <p>Vous devez aller manger, car c'est la pause</p>
                </div>
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