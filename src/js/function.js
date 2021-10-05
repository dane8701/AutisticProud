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


}

