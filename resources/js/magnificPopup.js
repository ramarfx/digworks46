// Import Magnific Popup CSS
import 'magnific-popup/dist/magnific-popup.css';

// Import Magnific Popup JavaScript
import 'magnific-popup';

// Your logic to initialize Magnific Popup
if (document.querySelector('.image-link')) {
    document.addEventListener("DOMContentLoaded", () => {
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


