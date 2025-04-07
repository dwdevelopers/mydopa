$(document).ready(function() {
    var tableElement = $('#datatables-questions');
    if (tableElement.length) {
        var questionsDataUrl = tableElement.data('url');
        var table = tableElement.DataTable({
            pageLength: 10,
            lengthChange: false,
            bFilter: false,
            autoWidth: false,
            processing: true,
            serverSide: true,
            ajax: questionsDataUrl,
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                { data: 'name', name: 'name' },
                { data: 'email', name: 'email' },
                { data: 'phone', name: 'phone' },
                { data: 'question', name: 'question' },
                { data: 'answer', name: 'answer' },

                { data: 'action', name: 'action', orderable: false, searchable: false }
            ],
            initComplete: function() {
                setTimeout(function() {
                    $('#datatables-questions tbody tr:first').trigger('click');
                }, 500);
            }
        });

    } else {
        console.error("Table with ID 'datatables-questions' not found.");
    }
});
