document.addEventListener('DOMContentLoaded', function(){
let logo = document.querySelector(".header-logo__link");
logo.onclick = function (){
    window.location.href = "http://" + window.location.hostname;
    console.log(window.location.hostname);
}


let startGame = document.querySelector(".central-panel-button__button");
startGame.onclick = function () {
    window.scrollTo(0,2600);
}
})