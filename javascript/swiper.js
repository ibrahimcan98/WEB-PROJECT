// Create a new Swiper instance and assign it to the variable "swiper"
const swiper = new Swiper(".slider_wrapper", {
  // Enable infinite loop mode (the slider will continuously loop)
  loop: true,

  // Autoplay configuration (controls how the slides change automatically)
  autoplay: {
    delay: 3000, // Each slide will stay visible for 3 seconds (3000 milliseconds)
    disableOnInteraction: false, // Autoplay will NOT stop when the user interacts with the slider
  },

  // Responsive settings (different number of slides shown at different screen sizes)
  breakpoints: {
    0: {
      slidesPerView: 1, // On small screens (0px and above), show 1 slide at a time
    },
    750: {
      slidesPerView: 2, // On medium screens (750px and above), show 2 slides at a time
    },
    1000: {
      slidesPerView: 3, // On large screens (1000px and above), show 3 slides at a time
    },
    1250: {
      slidesPerView: 4, // On large screens (1250px and above), show 4 slides at a time
    },
    1650: {
      slidesPerView: 5, // On large screens (1500px and above), show 5 slides at a time
    },
    2000: {
      slidesPerView: 6, // On large screens (2000px and above), show 6 slides at a time
    },
  },
});
