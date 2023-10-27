'use strict';

/**
 * navbar variables
 */

const navOpenBtn = document.querySelector("[data-menu-open-btn]");
const navCloseBtn = document.querySelector("[data-menu-close-btn]");
const navbar = document.querySelector("[data-navbar]");
const overlay = document.querySelector("[data-overlay]");

const navElemArr = [navOpenBtn, navCloseBtn, overlay];

for (let i = 0; i < navElemArr.length; i++) {

  navElemArr[i].addEventListener("click", function () {

    navbar.classList.toggle("active");
    overlay.classList.toggle("active");
    document.body.classList.toggle("active");

  });

}



/**
 * header sticky
 */

const header = document.querySelector("[data-header]");

window.addEventListener("scroll", function () {

  window.scrollY >= 10 ? header.classList.add("active") : header.classList.remove("active");

});



/**
 * go top
 */

const goTopBtn = document.querySelector("[data-go-top]");

window.addEventListener("scroll", function () {

  window.scrollY >= 500 ? goTopBtn.classList.add("active") : goTopBtn.classList.remove("active");

});

/**
 * Dernières Sorties Bouton filtre
 */
let sectionDernieresSortie = document.querySelector(".upcoming");
let filtreDernieresSortie = sectionDernieresSortie.querySelectorAll(".filter-btn");
let listeFilmsDernieresSortie = sectionDernieresSortie.querySelector(".movies-list");
let filmsDernieresSortie = listeFilmsDernieresSortie.querySelectorAll("li");

console.log(sectionDernieresSortie);
console.log(filtreDernieresSortie);
console.log(listeFilmsDernieresSortie);
console.log(filmsDernieresSortie);

filtreDernieresSortie.forEach(filtre => {
  filtre.addEventListener('click', function(){
    let comparateur;
    if(filtre.innerHTML === "Films"){
      comparateur = "film";
    }
    else{
      comparateur = "anime";
    }
    
    console.log(comparateur);
    filmsDernieresSortie.forEach(film => {
      let type = film.querySelector('.type-contenu').innerHTML;
      console.log(type);
      if(type === comparateur){
        film.style.display = "flex";
      }
      else{
        film.style.display = "none";
      }
    });
  });
});