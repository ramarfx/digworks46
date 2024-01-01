import DataTable from 'datatables.net-dt';
import 'datatables.net-fixedheader-dt';

let table = new DataTable('#postTable', {
    responsive: true,
    lengthChange: false,
    pageLength: 20,
    pagingType: 'simple',
    fixedHeader: {
        header: true
    }
});
