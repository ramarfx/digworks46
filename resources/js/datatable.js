import DataTable from 'datatables.net-dt';

let table = new DataTable('#postTable', {
    responsive: true,
    scrollX: true,
    autoWidth: false,
    lengthChange: false,
    pageLength: 10,
    pagingType: 'simple',
    columnDefs: [
        {
            className: 'title-col',
            targets: 0,
            width: '500px'
        },
        {
            targets: -1,
            orderable: false,
            searchable: false
        }
    ]
});

