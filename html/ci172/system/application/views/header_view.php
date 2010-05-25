<html>
<head>
<title>QuizDish: Kana!</title>
<?php print link_tag('css/main.css'); ?>
<script type="text/JavaScript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script>
$(document).ready(function() {
 // the slickbox stuff is from this great tutorial: http://www.learningjquery.com/2006/09/slicker-show-and-hide 
 // hides the slickbox as soon as the DOM is ready (a little sooner that page load)
  $('#slickbox').hide();
  
 // shows and hides and toggles the slickbox on click  
  $('#slick-show').click(function() {
    $('#slickbox').show('slow');
    return false;
  });
  $('#slick-hide').click(function() {
    $('#slickbox').hide('fast');
    return false;
  });
  $('#slick-toggle').click(function() {
    $('#slickbox').toggle(400);
    return false;
  });

 // slides down, up, and toggle the slickbox on click    
  $('#slick-down').click(function() {
    $('#slickbox').slideDown('slow');
    return false;
  });
  $('#slick-up').click(function() {
    $('#slickbox').slideUp('fast');
    return false;
  });
  $('#slick-slidetoggle').click(function() {
    $('#slickbox').slideToggle(400);
    return false;
  });
});
</script>
</head>
<body>

<div id="Content">
<h1>QuizDish: Kana!</h1>
<div id="tagline">A delicious dish o' quiz, just for you.</div>

