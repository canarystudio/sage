// import external dependencies
import 'jquery';

// Import Slick
// commented out – enqueued per page template from lib/setup.php
// import 'slick-carousel/slick/slick.min';

// Import everything from node_modules/bootstrap
// import 'bootstrap';
// import 'bootstrap/js/src/alert.js';
// import 'bootstrap/js/src/button.js';
// import 'bootstrap/js/src/carousel.js';
import 'bootstrap/js/src/collapse.js';
import 'bootstrap/js/src/dropdown.js';
// import 'bootstrap/js/src/index.js';
import 'bootstrap/js/src/modal.js';
// import 'bootstrap/js/src/popover.js';
import 'bootstrap/js/src/scrollspy.js';
import 'bootstrap/js/src/tab.js';
// import 'bootstrap/js/src/tooltip.js';
import 'bootstrap/js/src/util.js';


// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';


/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
