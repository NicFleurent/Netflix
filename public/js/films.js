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
 * Bouton filtre
 */
let sectionsContenu = document.querySelectorAll(".section-contenu");
sectionsContenu.forEach(section => {
  let filtres = section.querySelectorAll(".filter-btn");
  let listeContenu = section.querySelector(".movies-list");
  let films = listeContenu.querySelectorAll("li");

  filtres.forEach(filtre => {
    filtre.addEventListener('click', function(){
      let comparateur;
      if(filtre.innerHTML === "Films"){
        comparateur = "film";
      }
      else if(filtre.innerHTML === "Séries TV"){
        comparateur = "serie";
      }
      else if(filtre.innerHTML === "Anime"){
        comparateur = "anime";
      }
      else{
        comparateur = "tous";
      }
      
      let nbrFilmAffiche = 0;
  
      films.forEach(film => {
        let type = film.querySelector('.type-contenu').innerHTML;
  
        if(type === comparateur || comparateur === "tous"){
          film.style.display = "flex";
          nbrFilmAffiche++;
        }
        else{
          film.style.display = "none";
        }
      });
  
      let aucunFilm = document.createElement("h3");
      aucunFilm.setAttribute('class', 'section-subtitle');
      aucunFilm.style.textAlign = 'center';
      aucunFilm.innerHTML = "Il n'y a présentement pas de contenu de ce type dans cette section";

      if (section.childNodes.length > 3){
        section.lastChild.remove();
      }
  
      if(nbrFilmAffiche === 0){
        section.appendChild(aucunFilm);
      }
    });
  });
});

/**
 * Modification Durée pour durée par épisode
 */
let pageZoom = document.querySelector(".zoomFilm");
console.log(pageZoom);
let typeContenu = pageZoom.querySelector('.type-contenu span').innerHTML;
console.log(typeContenu);
let duree = pageZoom.querySelector('.bloc-info #duree');
console.log(duree);

let dureeSplit = duree.innerHTML.split(':');
if(typeContenu === "anime"){
  dureeSplit[0] = "Durée par épisode "
  duree.innerHTML = dureeSplit[0] + ": " + dureeSplit[1];
}