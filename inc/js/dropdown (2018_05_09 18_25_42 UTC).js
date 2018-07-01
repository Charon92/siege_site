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

  // operators
  $('.abilities .dropper').click(function() {
    if ($('.info_holder').css('display') == "none") {
        $('.info_holder').slideDown(500);
    } else {
      $('.info_holder').slideUp(500);
    }
  });
  $('.weapons .dropper').click(function() {
    if ($('.weapons_holder').css('display') == "none") {
        $('.weapons_holder').slideDown(500);
    } else {
      $('.weapons_holder').slideUp(500);
    }
  });
  $('.weapon .low_dropper').click(function() {
    if ($('.weapon ul.hidden').css('display') == "none") {
        $('.weapon ul.hidden').slideDown(500);
    } else {
      $('.weapon ul.hidden').slideUp(500);
    }
  });
});
