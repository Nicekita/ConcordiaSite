document.addEventListener('DOMContentLoaded', function(){
let open_modal = document.querySelectorAll('.open_modal');
let close_modal = document.getElementById('close_modal');
let modal = document.getElementById('modal');
let body = document.getElementsByTagName('body')[0];
for (let i = 0; i < open_modal.length; i++) {
    open_modal[i].onclick = function() {
        modal.classList.remove('blur')
        modal.classList.add('modal_vis');
        body.classList.add('body_block');
        console.log(modal.style.display);
    };
}
close_modal.onclick = function() {
    window.setTimeout(function () {
        body.classList.remove('blur');
        modal.classList.remove('modal_vis');
        body.classList.remove('body_block');
    }, 500);
}


let xhttp = new XMLHttpRequest();
let a = 0;
let btn = document.getElementById("btn-ajax");
let error = document.querySelector(".error")


    btn.onclick = function() {
        error.classList.remove('profile-form__error');
        let url = "api/playerbyname";
        let text = document.querySelector(".profile-window__text");
        url += "?Name=" + text.value;
        xhttp.open("GET",url,true);
        xhttp.send();
        xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            myFunction(this.responseText);
           }
        }
    }


function myFunction(json) {
    let data = JSON.parse(json);
    console.log(data);
    let Profile = "/profile/"
        if( data["status"] == 200){
        Profile += data["UUID"];
        document.location.replace(Profile);
        console.log(Profile);
    }
        else {
            error.classList.add('profile-form__error');
        }
}

let btnCity = document.querySelector(".profile-info-button__city");
    let btnPerson = document.querySelector(".profile-info-button__person");
    let windowCity = document.querySelector(".profile-info-main-city");
    let windowPerson = document.querySelector(".profile-info-main-person");
 btnCity.onclick = function () {
     btnPerson.classList.remove("profile-info-button_color_darker");
     btnCity.classList.add("profile-info-button_color_darker");
     windowPerson.classList.add("profile-info-main_theme_hidden");
     windowCity.classList.remove("profile-info-main_theme_hidden");
 }
    btnPerson.onclick = function () {
        btnPerson.classList.add("profile-info-button_color_darker");
        btnCity.classList.remove("profile-info-button_color_darker");
        windowPerson.classList.remove("profile-info-main_theme_hidden");
        windowCity.classList.add("profile-info-main_theme_hidden");
    }


    function headerLogo() {
     let linkHeader = document.querySelector(".header-img");
     let logoHeader = document.querySelector(".header-logo");
     if (window.location.href = "") {
         linkHeader.classList.add("hidden-logo")
         logoHeader.classList.remove("hidden-logo")
     }
     else
     {
         linkHeader.classList.remove("hidden-logo")
         logoHeader.classList.add("hidden-logo")
     }


    }

})