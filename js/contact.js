"use strict";

var userName = document.getElementById("name");
var userMail = document.getElementById("email");

if(userMail) userMail.addEventListener("blur", checkForm);

var form = document.getElementsByTagName("form")[0];

form.addEventListener("submit", function( evt){
    evt.preventDefault();
    if( checkForm() ) form.submit();

})

function checkForm(){
    var validated = true;
    if( userName.value.length < 2){
        userName.classList.add("mistake");
        validated = false;
    }else{
        userName.classList.remove("mistake");
    }

    if( !validateEmail(userMail.value ) ){
        userMail.classList.add("mistake");
        var mailTag = document.getElementById("emailFailure");
        if(mailTag.childNodes.length < 1){
            document.getElementById("emailFailure").innerHTML += "Die Email Adresse muss das Format &lt;name&gt;&commat;&lt;domain &gt; haben.";
    }
        validated = false;
    }else{
        userMail.classList.remove("mistake");
    }
    if( !validated) {
        alertMistake();
    }
    return validated;
}

function alertMistake(){
    var mistakeNotion = document.getElementById("mistakeNotion");

    if (!mistakeNotion){
        mistakeNotion = document.createElement("p");
        mistakeNotion.setAttribute("id", "mistakeNotion");
        mistakeNotion.classList.add("mistake");
        var parent = form.parentNode;
        parent.insertBefore(mistakeNotion, form);
    }
    mistakeNotion.innerHTML ="Bitte füllen Sie alle Felder aus."
}

function validateEmail(userMail){
    var regexEmail = /\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/; //doublecheck regular expression
        return regexEmail.test(String(userMail).toLocaleLowerCase())
}
