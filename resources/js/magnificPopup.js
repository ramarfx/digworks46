// Import Magnific Popup CSS
import 'magnific-popup/dist/magnific-popup.css';

// Import Magnific Popup JavaScript
import 'magnific-popup';

import $ from 'jquery';

// Your logic to initialize Magnific Popup
if (document.querySelector('.image-link')) {
$(function () {
        $('.image-link').magnificPopup({
            type: 'image',
            zoom: {
                enabled: true,
                duration: 300, // Durasi animasi zoom
                easing: 'ease-in-out', // Jenis animasi
              },
        });
    });
}
