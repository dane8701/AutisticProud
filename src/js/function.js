var element = null
$(document).ready(function () {
   console.log("ready");

   element = document.getElementById('0').cloneNode(true);
   console.log(element)
});
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
    var lineToAdd = element.cloneNode(true);
    console.log(lineToAdd)
    compteurLineToIncrement++;
    lineToAdd.id = compteurLineToIncrement
    lineToAdd.lastElementChild.firstElementChild.id = "btn-" + compteurLineToIncrement;
    markerLineAdd.before(lineToAdd);
    console.log("ligne ajoutée");
}

function deleteWorkHour(){
    console.log("clique");
    console.log(this.event.target)
    var lineToDelete = this.event.target.id;
    if(lineToDelete == ''){
        lineToDelete = this.event.target.parentElement.id;
    }
    console.log("Id of line to delete =" + lineToDelete);
    lineToDelete = lineToDelete.slice(4,5);
    if (lineToDelete ==""){
        alert("Veuillez attendre 10 secondes avant de pouvoir supprimer");
    }else{
        console.log(lineToDelete);
        $("#"+lineToDelete).remove();
        console.log("supprime");
    }
    //console.log("Id of line to delete =" + lineToDelete);
    //$(tag.concat(name)).remove();
    //console.log("supprime");

}


