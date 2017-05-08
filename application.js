$( document ).ready(function() {

  $('.submit-candidate').on('click', function (event) {
    event.preventDefault();
    $('img').remove();
    $('.choose-candidate').remove();
    $('#boxes').show();
  })

  $('#thumbs-up-black').on('click', function () {
    $(this).remove();
    $('#thumbs-up-green').show();
  })

  $('#thumbs-down-black').on('click', function () {
    $(this).remove();
    $('#thumbs-down-red').show();
  })
});
