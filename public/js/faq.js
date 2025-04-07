$(document).ready(function() {
    var tableElement = $('#datatables-faq');
    if (tableElement.length) {
        var faqsDataUrl = tableElement.data('url');
        var table = tableElement.DataTable({
            pageLength: 6,
            lengthChange: false,
            bFilter: false,
            autoWidth: false,
            processing: true,
            serverSide: true,
            ajax: faqsDataUrl,
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                { data: 'question', name: 'question'},
                { data: 'answer', name: 'answer'},
                { data: 'category', name: 'category'},
                { data: 'status', name: 'status'},
                { data: 'action', name: 'action'},
            ],
            initComplete: function() {
                setTimeout(function() {
                    $('#datatables-faq tbody tr:first').trigger('click');
                }, 500);
            }
        });
    } else {
        console.error("Table with ID 'datatables-faq' not found.");
    }
});
