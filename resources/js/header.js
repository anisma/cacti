// animation on header when scrolling
const header = document.querySelector('header');

let scroll_position = window.scrollY;
let ticking = false;

function addClass(scroll_pos) {
   header.classList.add('scroll-header');
}

function removeClass(scroll_pos) {
   header.classList.remove('scroll-header');
}

if (scroll_position != 0) {
   addClass(scroll_position);
}

window.addEventListener('scroll', function(e) {
   scroll_position = window.scrollY;

   if (scroll_position != 0) {
      window.requestAnimationFrame(function() {
         addClass(scroll_position);
      });
   } else {
      window.requestAnimationFrame(function() {
         removeClass(scroll_position);
      });
   }
});
