import Swal from 'sweetalert2';

const deleteBtn = document.querySelectorAll('.delete');

deleteBtn.forEach(btn => {
    btn.addEventListener('click', function () {
        return Swal.fire({
            title: 'Apakah kamu yakin ingin menghapus?',
            text: "ini akan di hapus secara permanen!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                this.parentElement.submit()
            }
        })
    })
});
