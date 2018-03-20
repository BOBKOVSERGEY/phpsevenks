$(function () {
  $('input[type=checkbox]').on('click', function () {
    $.post(
      'check.php',
      {id: $(this).prop('id'),
       status: $(this).prop('checked')}
    );
  })
});