// Datatable
$(document).ready(function () {
    $('.research-table').DataTable({
        "order": [[1, "desc"]],
        "responsive": true,
        'aoColumnDefs': [{
            'bSortable': false,
            'aTargets': [-1] /* 1st one, start by the right */
    }]
    });
});
