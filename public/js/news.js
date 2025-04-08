$(document).ready(function() {
    var tableElement = $('#datatables-news');
    if (tableElement.length) {
        var newssDataUrl = tableElement.data('url');
        var table = tableElement.DataTable({
            pageLength: 6,
            lengthChange: false,
            bFilter: false,
            autoWidth: false,
            processing: true,
            serverSide: true,
            ajax: newssDataUrl,
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },

                { data: 'email', name: 'email'},
                { data: 'status', name: 'status'},
                { data: 'action', name: 'action'},
            ],
            initComplete: function() {
                setTimeout(function() {
                    $('#datatables-news tbody tr:first').trigger('click');
                }, 500);
            }
        });
    } else {
        console.error("Table with ID 'datatables-faq' not found.");
    }
});
