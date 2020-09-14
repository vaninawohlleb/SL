import { tns } from 'tiny-slider/src/tiny-slider';


export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    // JavaScript to be fired on home page
    tns({
      container: '.slider-projects',
      items: 1,
      autoplay: true,
      loop: true,
      mouseDrag: true,
      controls: false,
      nav: true,
      navContainer: '.nav',
      autoPlayText: '',
    });

    // tns({
    //   container: '.slider-products',
    //   items: 2,
    //   autoplay: false,
    //   loop: true,
    //   mouseDrag: true,
    //   arrowKeys: true,
    //   gutter: '65',
    //   controlsContainer: '.controls',
    //   nav: false,
    // });
  },
};
