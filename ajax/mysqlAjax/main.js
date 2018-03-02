$(function () {
  $('.list__item').on('click', function () {
    // формируем ссылку для ajax обращения
    var url = "user.php?id=" + $(this).data('id');
    // отправляем запрос и выводим результат
    console.log(url);
    console.log(encodeURI(url));
    $.ajax({
      url: encodeURI(url)
    }).done(function (data) {
      $('#info').html(data).removeClass('hidden');
    })
  })
});