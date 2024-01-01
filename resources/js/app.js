import './bootstrap';
import 'flowbite';
import './navbar';
import './magnificPopup';
import './datatable';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const inputFile = document.getElementById('inputFile');
const previewImage = document.getElementById('preview');

if (inputFile) {
    inputFile.addEventListener('change', function () {
        const file = this.files[0];

        if (file) {
            const reader = new FileReader();

            previewImage.classList.remove('hidden');

            reader.addEventListener('load', function () {
                previewImage.src = reader.result;
            });

            reader.readAsDataURL(file);
        } else {
            previewImage.classList.add('hidden');
            previewImage.src = ''; // Jika tidak ada file yang dipilih, gambar preview dikosongkan
        }
    });
}

const linkCheckbox = document.getElementById('linkCheckbox');
const linkInput = document.getElementById('link');

if (linkCheckbox) {
    linkCheckbox.addEventListener('change', function () {
        if (this.checked) {
            linkInput.style.display = 'block'; // Jika dicentang, tampilkan input URL
        } else {
            linkInput.style.display = 'none'; // Jika tidak dicentang, sembunyikan input URL
            linkInput.value = ''; // Hapus nilai input URL
        }
    });
}





