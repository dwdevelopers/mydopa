$(document).ready(function() {
    var tableElement = $('#datatables-reviews');
    if (tableElement.length) {
        var reviewsDataUrl = tableElement.data('url');
        var table = tableElement.DataTable({
            pageLength: 10,
            lengthChange: false,
            bFilter: false,
            autoWidth: false,
            processing: true,
            serverSide: true,
            ajax: reviewsDataUrl,
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                { data: 'name', name: 'name' },
                { data: 'email', name: 'email' },
                { data: 'phone', name: 'phone' },
                { data: 'title', name: 'title' },
                { data: 'review', name: 'review' },
                { data: 'rating', name: 'rating' },
                { data: 'status', name: 'status' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ],
            initComplete: function() {
                setTimeout(function() {
                    $('#datatables-reviews tbody tr:first').trigger('click');
                }, 500);
            }
        });

    } else {
        console.error("Table with ID 'datatables-reviews' not found.");
    }
});
