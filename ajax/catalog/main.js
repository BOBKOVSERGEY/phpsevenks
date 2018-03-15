$(function () {
  $('#fst').on('change', function () {
    // Ajax запрос
    $.ajax({
      url: "select.php?id=" + $(this).val()
    }).done(function (data) {
      $('#snd').html(data);
      $('#snd').prop("disabled", false);
    })
  })
});