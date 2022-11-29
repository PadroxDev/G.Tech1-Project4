var interval;
var brrrCode = '010202'
var currentCode = ''

var c = 0;

function getRandomColor() {
  var letters = '0123456789ABCDEF';
  var color = '#';
  for (var i = 0; i < 6; i++) {
    color += letters[Math.floor(Math.random() * 16)];
  }
  return color;
}

function addKeyToCode(key) {
  if (currentCode.length >= brrrCode.length) {
    currentCode = currentCode.slice(1, brrrCode.length);
  }
  currentCode += String(key);
}

function goBRRRR() {
  c += 1;
  const color = getRandomColor();
  $('.navbar-parent').css('background-color', color);
  $('.dropdown-content').css('background-color', color);
  $('#welcome').addClass(['animate__animated', 'animate__hinge']);

  if (c > 100) {
    c = 0;
    clearInterval(interval);
  }
}

function getRickRolled() {
  $(this).attr('src', 'img/rickroll-roll-opti.gif');
};

function everythingIsFalling() {
  $('body *').not('.fall-protected').each(function() {
    console.log($(this));
    $(this).addClass(['animate__animated', 'animate__hinge']);
  });
};

$(document).ready(function() {
  $('.sidenav').sidenav();
  $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true
  });
  $('.carousel').carousel({
    indicators: true,
    duration: 500,
    onCycleTo: function(el) {
      addKeyToCode($(el).index());
      if (currentCode == brrrCode) {
        currentCode = '';
        interval = setInterval(goBRRRR, 100);
      }
      switch ($(el).index()) {
        case 0:
          $('#details-0').show();
          $('#details-1').hide();
          $('#details-2').hide();
          break;
        case 1:
          $('#details-0').hide();
          $('#details-1').show();
          $('#details-2').hide();
          break;
        case 2:
          $('#details-0').hide();
          $('#details-1').hide();
          $('#details-2').show();
          break;
      }
    }
  });

  setInterval(function() {
    $('.carousel').carousel('next');
  }, 600000); /* 6000 6s */

  $('.parallax').parallax();
  $('.modal').modal();
  $('.dropdown-trigger').dropdown();
});

$('.contact-button').click(function() {
  $('.modal').modal('open');
});

$(function() {
  new WOW().init();
});

$('.rickroll-left').click(getRickRolled);
$('.rickroll-right').click(getRickRolled);
$('#terms').click(everythingIsFalling);