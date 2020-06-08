// CLICK HAMBURGER RUN ANIMATION AND OPEN MENU


const toggleIcon = document.querySelector('.menu_toggle');
 const mobileMenu = document.querySelector('.mobile-sidebar');
 const pageBackground = document.querySelector('.page-cover');
const page = document.querySelector('.page-in-full');
const fullScreenNav = document.querySelector(".fullscreen-nav-js");

function toggleMenu() {
        toggleIcon.classList.toggle('toggle_on');


        // IF we have logo - left header selected
        if (mobileMenu) {
                mobileMenu.classList.toggle('mobile-menu-appear');
                pageBackground.classList.toggle('page-cover-opacity');
                page.classList.toggle('paged');
        }

        // IF we have logo middle selected

        if (fullScreenNav) {

                fullScreenNav.classList.toggle("opacity-full");
                
        }
}

toggleIcon.addEventListener('click', toggleMenu);


// WHEN YOU SCROLL DOWN HIDE HEADER, REVEAL WHEN SCROLLING UP

const header = document.querySelector('header');
const scrollUp = "js-scroll-up";
const scrollDown = "js-scroll-down";
let lastScroll = 0;
 
window.addEventListener("scroll", () => {
  const currentScroll = window.pageYOffset;
  if (currentScroll == 0) {
    header.classList.remove(scrollUp);
    return;
  }
   
  if (currentScroll > lastScroll && !header.classList.contains(scrollDown)) {
    // down
    header.classList.remove(scrollUp);
    header.classList.add(scrollDown);

    toggleIcon.classList.remove('toggle_on');

    if (fullScreenNav) {

      fullScreenNav.classList.remove("opacity-full");
      
    }


  } else if (currentScroll < lastScroll && header.classList.contains(scrollDown)) {
    // up
    header.classList.remove(scrollDown);
    header.classList.add(scrollUp);
  }
  lastScroll = currentScroll;
});
