const burger = document.querySelector('#burger-menu');
const menu = document.querySelector('.menu');
const navItems = document.querySelectorAll('.nav-link');

let showMenu = false;

burger.addEventListener('click', toggleMenu);
// navItems.forEach((item) => item.addEventListener('click', toggleMenu));

function toggleMenu() {
   if (!showMenu) {
      burger.classList.add('open');
      menu.classList.add('open');

      showMenu = true;
   } else {
      burger.classList.remove('open');
      menu.classList.remove('open');
      showMenu = false;
   }
}
