$(function(){
  $('.item-type').on('change', function() {
    $('.price-input')
    .val(
      $(this).find(':selected').data('price')
    );
  });
  })