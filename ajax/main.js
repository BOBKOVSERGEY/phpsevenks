$(function () {
  $(document).on('click', "input[type='button'][value!='+']", removeField);
  $(document).on('click', "input[type='button'][value!='-']", addField);

  function addField() {
    $('.input:last').clone().insertAfter('div:last');
  }

  function removeField() {
    console.log($(this))
    $('.input:last').remove();
  };

  $('.getTime').on('click', function (e) {
    e.preventDefault();
    $('.result').load('time.php')
  })
});