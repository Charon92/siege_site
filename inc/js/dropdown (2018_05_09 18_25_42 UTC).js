$(document).ready(function() {
  $('.floors .dropper').click(function() {
    if ($('.info_holder').css('display') == "none") {
        $('.info_holder').slideDown(500);
    } else {
      $('.info_holder').slideUp(500);
    }
  });
  $('.tips .dropper').click(function() {
    if ($('.tips_holder').css('display') == "none") {
        $('.tips_holder').slideDown(500);
    } else {
      $('.tips_holder').slideUp(500);
    }
  });
  $('.tip .low_dropper').click(function() {
    if ($('.tip ul.hidden').css('display') == "none") {
        $('.tip ul.hidden').slideDown(500);
    } else {
      $('.tip ul.hidden').slideUp(500);
    }
  });
});
