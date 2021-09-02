const menu = document.getElementsByClassName("menu")[0];
const navOpen = document.getElementsByClassName("hamburger")[0];
const navClose = document.getElementsByClassName("close")[0];
const navBar = document.getElementsByClassName("nav")[0];
var navLeft=1;

window.onload = function () {
  navOpen.addEventListener("click", () => {
      menu.classList.add("show");
      document.body.classList.add("show");
      navBar.classList.add("show");
      navLeft=-1;
  });

  navClose.addEventListener("click", () => {
    if (navLeft < 0) {
      menu.classList.remove("show");
      document.body.classList.remove("show");
      navBar.classList.remove("show");
      navLeft=1;
    }
  });

}


// Fixed Nav

const navHeight = navBar.getBoundingClientRect().height;

$(window).scroll(function() {
  if ($(window).scrollTop() > 0) {
    $(".nav").addClass("fix-nav");
  } else if($(window).scrollTop() == 0) {
    $(".nav").removeClass("fix-nav");
  }else{
    $(".nav").removeClass("fix-nav");
  }
});


gsap.from(".logo", { opacity: 0, duration: 1, delay: 0.5, y: -10 });
gsap.from(".hamburger", { opacity: 0, duration: 1, delay: 1, x: 20 });

