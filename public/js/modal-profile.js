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



     let linkHeader = document.querySelector(".header-img");
     let logoHeader = document.querySelector(".header-logo");
     let linkPage = window.location;
     console.log(window.location.pathname)
     if (window.location.pathname != "/") {
         console.log("sitepage")
         linkHeader.classList.add("hidden-logo")
         logoHeader.classList.remove("hidden-logo")
     }
      else
     {
         linkHeader.classList.remove("hidden-logo")
         logoHeader.classList.add("hidden-logo")
     }

    let logo = document.querySelector(".header-logo__link");
    logo.onclick = function (){
        window.location.href = "http://" + window.location.hostname;
        console.log(window.location.hostname);
    }




})