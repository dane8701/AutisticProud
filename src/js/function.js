//checking password
var passwordInput =document.getElementById("password");
var password = null;

var repeatedPassword = document.getElementById("repeatedPassword");
var password2 = null;

var passwordResult = document.getElementById("passwordResult");

var success = "<p>"+"Votre mot de passe est correcte."+"<p>";
success.fontcolor("green");
//success.style.fontStyle = "bold";

var failure = "<p>"+"Votre mot de passe ne correspond pas."+"<p>";
//failure.style.fontStyle = "bold";

passwordInput.addEventListener("input", function (e) {
    password = e.target.value;
    console.log("pass = " + password);
    if (password == password2){
        console.log("oui");
        passwordResult.innerHTML = success;
        success.fontcolor("green");
    }
    else if(password && password2 == " "){
        passwordResult.innerHTML = "<p> </p>";
    }
    else{
        console.log("non");
        passwordResult.innerHTML = failure;
        failure.fontcolor("red");
    }
});

repeatedPassword.addEventListener("input", function (e) {
    password2 = e.target.value;
    console.log("pass2 = " + password2);
    if (password == password2){
        console.log("oui");
        passwordResult.innerHTML = success;
        success.fontcolor("green");
    }else if(password && password2 == " "){
        passwordResult.innerHTML = "<p> </p>";
    }else{
        console.log("non");
        passwordResult.innerHTML = failure;
        failure.fontcolor("red");
    }
});
class Tache {
    constructor(titre, description, heureDebut, heureFin, date, image) {
        this.titre = titre;
        this.description = description;
        this.heureDebut = heureDebut;
        this.heureFin = heureFin;
        this.date = date;
        this.image = image;
    }
}
//For the calendar all the variables and functions
var compteurLine = 1;
var string = "compteurLine";

function addWorkHour(){
    //initialization of the vriables for add
    var markerLineAdd = $("#marker");
    var lineToAdd = "<tr id=\"compteurLine\"><th scope=\"row\"><input type=\"file\" accept=\".jpg,.jpeg,.png,.svn\"></th>\n" +
        "                <td rowspan=\"2\">\n" +
        "                    <select name=\"beginHour\">\n" +
        "                        <option value=\"8\">8h</option>\n" +
        "                        <option value=\"9\">9h</option>\n" +
        "                        <option value=\"10\">10h</option>\n" +
        "                        <option value=\"11\">11h</option>\n" +
        "                        <option value=\"12\">12h</option>\n" +
        "                        <option value=\"13\">13h</option>\n" +
        "                        <option value=\"14\">14h</option>\n" +
        "                        <option value=\"15\">15h</option>\n" +
        "                        <option value=\"16\">16h</option>\n" +
        "                        <option value=\"17\">17h</option>\n" +
        "                        <option value=\"18\">18h</option>\n" +
        "                    </select>\n" +
        "\n" +
        "                    <select name=\"finishHour\">\n" +
        "                        <option value=\"8\">8h</option>\n" +
        "                        <option value=\"9\">9h</option>\n" +
        "                        <option value=\"10\">10h</option>\n" +
        "                        <option value=\"11\">11h</option>\n" +
        "                        <option value=\"12\">12h</option>\n" +
        "                        <option value=\"13\">13h</option>\n" +
        "                        <option value=\"14\">14h</option>\n" +
        "                        <option value=\"15\">15h</option>\n" +
        "                        <option value=\"16\">16h</option>\n" +
        "                        <option value=\"17\">17h</option>\n" +
        "                        <option value=\"18\">18h</option>\n" +
        "                    </select>\n" +
        "                </td>\n" +
        "                <td rowspan=\"2\"><input type=\"text\" placeholder=\"Titre de la tâche\"></td>\n" +
        "                <td rowspan=\"3\"><a id=\"btn-compteurLine\" class=\"btn btn-outline-danger\"><i class=\"bi bi-trash\"></i></a></td>\n" +
        "                <tr></tr>\n" +
        "                <th scope=\"row\"></th>\n" +
        "                <td colspan=\"2\"><textarea cols=\"100\" placeholder=\"Veuillez rédiger la tâche de cette heure\"></textarea></td></tr>";

    markerLineAdd.before(lineToAdd);
    $("#compteurLine").replace(/compteurLine/, compteurLine);
    $("#btn-compteurLine").replace(/btn-compteurLine/, compteurLine);
    compteurLine++;
    console.log("ligne ajoutée");
}

function deleteWorkHour(event){
    var lineToDelete = event.target.id;
    lineToDelete.remove();
}


