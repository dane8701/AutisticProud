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

function addWorkHour(){
    //initialization of the vriables for add
    var markerLineAdd = $("#marker");
    var lineToAdd = "<tr><th scope=\"row\"><input type=\"file\" accept=\".jpg,.jpeg,.png,.svn\"></th>\n" +
        "                <td rowspan=\"2\">\n" +
        "                    <select name=\"beginHours\">\n" +
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
        "                    \n" +
        "                    <select name=\"finishHours\">\n" +
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
        "                <tr></tr>\n" +
        "                <th scope=\"row\"></th>\n" +
        "                <td colspan=\"2\"><textarea cols=\"120\" placeholder=\"Veuillez rédiger la tâche de cette heure\"></textarea></td>\n</tr>";

    markerLineAdd.before(lineToAdd);
    console.log("ligne ajoutée");
}

function deleteWorkHour(){
    var markerLineDelete = $("#marker");
    //markerLineDelete.remove();


}

