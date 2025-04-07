$(document).ready(function() {
    var tableElement = $('#datatables-contactus');
    if (tableElement.length) {
        var contactDataUrl = tableElement.data('url');
        var table = tableElement.DataTable({
            pageLength: 6,
            lengthChange: false,
            bFilter: false,
            autoWidth: false,
            processing: true,
            serverSide: true,
            ajax: contactDataUrl,
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                { data: 'name', name: 'name' },
                { data: 'email', name: 'email' },
                { data: 'message', name: 'message' },
                { data: 'action', name: 'action' },
            ],
            initComplete: function() {
                setTimeout(function() {
                    $('#datatables-contactus tbody tr:first').trigger('click');
                }, 500);
            }
        });
    } else {
        console.error("Table with ID 'datatables-contact' not found.");
    }
});
