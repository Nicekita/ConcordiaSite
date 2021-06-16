document.addEventListener('DOMContentLoaded', function(){
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
})
