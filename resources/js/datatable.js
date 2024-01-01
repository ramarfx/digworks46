import DataTable from 'datatables.net-dt';
import 'datatables.net-fixedheader-dt';

let table = new DataTable('#postTable', {
    responsive: true,
    scrollX: true,
    autoWidth: false,
    lengthChange: false,
    pageLength: 20,
    pagingType: 'simple',
    columnDefs: [
        {
            className: 'title-col',
            targets: 0,
            width: '500px'
        }
    ]
});
