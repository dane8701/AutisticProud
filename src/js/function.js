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
$(function () {
    // ACTIVATION DU DATEPICKER
    $('.datepicker').datepicker({
        clearBtn: true,
        format: "yyyy-mm-dd"
    });
});

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

async function readFileAsDataURL(file) {
    let result_base64 = await new Promise((resolve) => {
        let fileReader = new FileReader();
        fileReader.onload = (e) => resolve(fileReader.result);
        fileReader.readAsDataURL(file);
    });

    console.log(result_base64); // aGV5IHRoZXJl...

    return result_base64;
}

function convertDataURIToBinary(dataURI) {
    var BASE64_MARKER = ';base64,';
    var base64Index = dataURI.indexOf(BASE64_MARKER) + BASE64_MARKER.length;
    var base64 = dataURI.substring(base64Index);
    var raw = window.atob(base64);
    var rawLength = raw.length;
    var array = new Uint8Array(new ArrayBuffer(rawLength));

    for(i = 0; i < rawLength; i++) {
        array[i] = raw.charCodeAt(i);
    }
    return array;
}

function request(tab){
    console.log("Tableau :"+tab);
    var data = JSON.stringify(tab);
    console.log("data = "+data);

    var request = $.ajax({
        type: "POST",
        url: "../php/AjouterAgenda.php",
        data: data,
        success: success,
        dataType: json
    });

    request.success(function () {
        window.location.replace("../php/AjouterAgenda.php");
    });
}

async function checkData() {
    var taskTab = new Array();
    var fileReader= new FileReader();

    showPopup();
    //document.getElementById("marker").remove();

    /*var titreAgenda = document.getElementById("tableTitle").value;
    console.log("titre Agenda : "+titreAgenda);

    if (titreAgenda == ""){
        alert("titre agenda vide");
        return;
    }*/

    var date = document.getElementById("reservationDate").value;
    console.log("date choisi : "+ date);

    if (date == ""){
        alert("date vide");
        return;
    }

    var tableBody = document.getElementById("tableBody");
    console.log(tableBody);
    var ligne;
    var titre, description, heureDebut, heureFin, image;

    for (var compteurI=0; compteurI < numberLineTotal; compteurI++){
        console.log("Ligne No "+compteurI);

        ligne = document.getElementById(compteurI);
        console.log("ligne ="+ligne);

        heureDebut = ligne.children[1].firstElementChild.value;
        console.log("HD :"+ heureDebut);

        heureFin = ligne.children[1].lastElementChild.value;
        console.log("HF :"+ heureFin);

        if (parseInt(heureDebut, 10) >= parseInt(heureFin,10)){
            alert("heure début > heure fin recommencez");
            return;
        }

        titre = ligne.children[2].firstElementChild.value;
        console.log("titre :" +titre);

        if (titre == ""){
            alert("Titre vide");
            return;
        }

        description = ligne.children[2].lastElementChild.value;
        console.log("description :"+ description);

        if (description == ""){
            alert("Description vide");
            return;
        }

        image = ligne.children[0].firstElementChild.files[0];
        image = await readFileAsDataURL(image);


        if (image== ""){
            alert("imge non selectionné");
            return;
        }

        var task = new Tache(titre, description, heureDebut, heureFin, date, image);
        taskTab.push(task);
        console.log("Task No "+compteurI);
        console.log("task titre "+ task.titre);
        console.log("task description "+task.description);
        console.log("task heure début "+task.heureDebut);
        console.log("task heure fin "+task.heureFin);
        console.log("task date "+task.date);
        console.log("---------------------");
    }
    request(taskTab);
}


