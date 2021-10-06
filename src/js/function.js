var compteurLineToIncrement = 1;

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

function addWorkHour(){
    //initialization of the variables for add
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
        "                <td rowspan=\"3\"><a onclick='deleteWorkHour()' id=\"btn-compteurLine\" class=\"btn btn-outline-danger\"><i class=\"bi bi-trash\"></i></a></td>\n" +
        "                <tr></tr>\n" +
        "                <th scope=\"row\"></th>\n" +
        "                <td colspan=\"2\"><textarea cols=\"100\" placeholder=\"Veuillez rédiger la tâche de cette heure\"></textarea></td></tr>";

    markerLineAdd.before(lineToAdd);
    document.getElementById("compteurLine").id = compteurLineToIncrement;
    document.getElementById("btn-compteurLine").id = "btn-"+compteurLineToIncrement;
    compteurLineToIncrement++;
    console.log("ligne ajoutée");
}

function deleteWorkHour(){
    console.log("clique");
    var lineToDelete = this.event.target.id.slice(4,5);
    //lineToDelete = lineToDelete.slice(4,5);
    console.log("Id of line to delete =" + lineToDelete);
    $("#"+lineToDelete).remove();
    console.log("supprime");

}


