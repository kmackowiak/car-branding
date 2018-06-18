
var cardsArrayPrev = [0, 1, 2];
var cardsArrayNext = [2, 1, 0];
var cards = document.getElementsByClassName("card")

function gallerySliderPrev() {
    cardsArrayPrev.splice(0, 0, cardsArrayPrev.pop());
    console.log(cardsArrayPrev);

    cards[cardsArrayPrev[0]].style.display = "block";
    cards[cardsArrayPrev[1]].style.display = "none";
    cards[cardsArrayPrev[2]].style.display = "none";
}

function gallerySliderNext() {
    cardsArrayNext.splice(0, 0, cardsArrayNext.pop());
    console.log(cardsArrayNext);

    cards[cardsArrayNext[0]].style.display = "block";
    cards[cardsArrayNext[1]].style.display = "none";
    cards[cardsArrayNext[2]].style.display = "none";
}




var hamburger = document.getElementsByClassName("hamburger")[0];

hamburger.addEventListener("click", function() {
    toggleIcon();
    toggleMenu();
    toggleNavRed();
});

function toggleIcon(){
    var hamburgerOpen = document.getElementsByClassName("hamburger--open")[0];
    var hamburgerClose = document.getElementsByClassName("hamburger--close")[0];
    hamburgerOpen.classList.toggle("hamburger--unactive");
    hamburgerClose.classList.toggle("hamburger--unactive");
}

function toggleMenu(){
    var menu = document.getElementsByClassName("menu")[0];
    menu.classList.toggle("unactive");
}

function toggleNavRed(){

    var logo = document.getElementsByClassName("logo")[0];
    var navbar = document.getElementsByClassName("navbar")[0];

    logo.classList.toggle("logo--red");
    navbar.classList.toggle("navbar--red");
    hamburger.classList.toggle("hamburger--red");

    // logo--red
    // navbar--red
    // hamburger--red
}