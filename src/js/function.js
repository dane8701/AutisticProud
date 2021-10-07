var element = null
$(document).ready(function () {
   console.log("ready");

   element = document.getElementById('0').cloneNode(true);
   console.log(element);
   document.getElementById('btn-0').parentElement.remove();
});
var compteurLineToIncrement = 1;
var numberLineTotal = 1;


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
    console.log(lineToAdd);
    //compteurLineToIncrement++;
    lineToAdd.id = compteurLineToIncrement;
    lineToAdd.children[0].firstElementChild.id= "img-" + compteurLineToIncrement;
    lineToAdd.children[1].firstElementChild.id= "beginHour-" + compteurLineToIncrement;
    lineToAdd.children[1].lastElementChild.id= "finishHour-" + compteurLineToIncrement;
    lineToAdd.children[2].firstElementChild.id= "titreTache-" + compteurLineToIncrement;
    lineToAdd.children[2].lastElementChild.id= "description-" + compteurLineToIncrement;
    lineToAdd.lastElementChild.firstElementChild.id = "btn-" + compteurLineToIncrement;
    markerLineAdd.before(lineToAdd);
    compteurLineToIncrement++;
    numberLineTotal++;
    console.log("ligne ajoutée");
    //checkData();
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
        numberLineTotal--;
        console.log("numberLineTotal ="+numberLineTotal);
        console.log("supprime");
    }
}

function showPopup(){

}
function checkData() {
    var taskTab = new Array();
    showPopup();
    //document.getElementById("marker").remove();

    var tableBody = document.getElementById("tableBody");
    console.log(tableBody);
    var ligne;
    var titre, description, heureDebut, heureFin, date, image, tr;

    for (var compteurI=0; compteurI < numberLineTotal; compteurI++){
        console.log("Ligne No "+compteurI);
        ligne = document.getElementById(compteurI);
        console.log("ligne ="+ligne);
        image = ligne.children[0].firstElementChild.nodeName;
        console.log("image = "+image);

        heureDebut = ligne.children[1].firstElementChild.nodeName;
        console.log("HD :"+ heureDebut);

        heureFin = ligne.children[1].lastElementChild.nodeName;
        console.log("HF :"+ heureFin);

        titre = ligne.children[2].firstElementChild.nodeName;
        console.log("titre :"+ titre);

        description = ligne.children[2].lastElementChild.nodeName;
        console.log("description :"+ description);
        /*
        ligne.children[0].firstElementChild
        ligne.children[1].firstElementChild.id= "beginHour-" + compteurLineToIncrement;
        ligne.children[1].lastElementChild.id= "finishHour-" + compteurLineToIncrement;
        ligne.children[2].firstElementChild.id= "titreTache-" + compteurLineToIncrement;
        ligne.children[2].lastElementChild.id= "description-" + compteurLineToIncrement;

        console.log("titre ="+titre)
        ////////////
        tr = tableBody.getElementsByTagName("tr")[compteurI];// ajout [compteurI] afin de selectionner la bonne tr
        console.log("tr =" + tr);

        //on récupère l'image d'abord
        if (tr == null){
            console.log("null");
        }else{
            console.log("non nul")
        }
        image = tr.item();
        if (image == null){
            console.log("null");
        }else {
            console.log("non null");
        }
        console.log("image ="+image);

        //on récupère les selecteurs
        heureDebut = tr[compteurI].getElementsByTagName("td")[0].firstChild.nodeName;
        heureFin = tr[compteurI].getElementsByTagName("td")[0].nextSibling.nodeName;
        console.log("heureDebut = "+heureDebut);
        console.log("heureFin = "+heureFin);

        //on récupère le titre de la tâche
        titre = tr[compteurI].getElementsByTagName("td")[1].firstChild.nodeName;
        description = tr[compteurI].getElementsByTagName("td")[1].nextSibling.nodeName;
        console.log("titre = "+titre);
        console.log("description = "+ description);
        var task = new Tache(titre, description, heureDebut, heureFin, date, image);
        taskTab.push(task);*/
    }
}


