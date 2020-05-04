// Banner slider
const bannerWrapper = document.querySelector(".banner-wrapper");
const banner = document.querySelectorAll(".banner");

//button
const prevBtn = document.querySelectorAll(".arrow-left");
const nextBtn = document.querySelectorAll(".arrow-right");

var counter = 1;

// Initial Position
bannerWrapper.style.transform = `translateX(-${100 * counter}vw)`;

function slideHandle() {
   bannerWrapper.style.transition = "transform 400ms ease-in-out";
   bannerWrapper.style.transform = `translateX(-${100 * counter}vw)`;
}

function slideShow() {
   counter++;
   slideHandle();
   if (banner[counter].id == "last-banner") {
      setTimeout(() => {
         counter = banner.length - 2;
         bannerWrapper.style.transition = "none";
         bannerWrapper.style.transform = `translateX(-${100 * counter}vw)`;
      }, 400);
   }
   if (banner[counter].id == "first-banner") {
      setTimeout(() => {
         counter = banner.length - counter;
         bannerWrapper.style.transition = "none";
         bannerWrapper.style.transform = `translateX(-${100 * counter}vw)`;
      }, 400);
   }
   setTimeout(slideHandle, 5000);

   setTimeout(slideShow, 5000);
}

/*------------AFTER WINDOW LOAD---------- */

window.addEventListener("load", () => {
   // Automatic SlideShow
   slideShow();

   /*-------------add event handler to each button -------------*/

   // slide to the right
   Array.from(nextBtn).forEach((btn) => {
      btn.addEventListener("click", () => {
         if (counter >= banner.length - 1) return;
         counter++;
         slideHandle();
      });
   });

   // slide to the left
   Array.from(prevBtn).forEach((btn) => {
      btn.addEventListener("click", () => {
         if (counter <= 0) return;
         counter--;
         slideHandle();
      });
   });

   /*-------------make infinity loop for banner -------------*/

   bannerWrapper.addEventListener("transitionend", () => {
      if (banner[counter].id == "last-banner") {
         counter = banner.length - 2;
         bannerWrapper.style.transition = "none";
         bannerWrapper.style.transform = `translateX(-${100 * counter}vw)`;
      }
      if (banner[counter].id == "first-banner") {
         counter = banner.length - counter;
         bannerWrapper.style.transition = "none";
         bannerWrapper.style.transform = `translateX(-${100 * counter}vw)`;
      }
   });
});
