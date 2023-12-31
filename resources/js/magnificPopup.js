// Import Magnific Popup CSS
import 'magnific-popup/dist/magnific-popup.css';

// Import Magnific Popup JavaScript
import 'magnific-popup';

import $ from 'jquery';

// Your logic to initialize Magnific Popup
$(function() {
  $('.image-link').magnificPopup({
    type: 'image',
    
  });
});
