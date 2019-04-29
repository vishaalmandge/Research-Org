$(function () {
    var actions = $('#inbox-actions .btn'),
        rows = $('#table-inbox tr');

    $("input[data-select='all']").change(function () {
        $(this).prop('checked') ?
            rows.find('.form-check-input').prop('checked', true) :
            rows.find('.form-check-input').prop('checked', false)
    });
    // editor

    $('#summernote').summernote();
    $('.note-popover').css({
        'display': 'none'
    });
});
