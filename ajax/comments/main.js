$(function () {
  $('#submit-id').on('click', function () {
    // проверяем корректность заполнения полей
    if ($.trim($('#nickname').val()) === "") {
      alert('Пожалуйста, заполните поле автор');
      return false;
    }
    if ($.trim($('#content').val()) === "") {
      alert('Пожалуйста, заполните поле сообщение');
      return false;
    }

    // блокируем кнопку отправки
    $('#submit-id').prop("disabled", true);

    // ajax запрос
    $.ajax({
      url: "addcom.php",
      method: 'post',
      data: {
        nickname: $('#nickname').val(),
        content: $('#content').val()
      }
    }).done(function (data) {
      // успешное получение ответа
      $('#info').html(data);
      $('#submit-id').prop("disabled", false);
    })
  });

});