$(function(){$(".nav-toggle").on("click",function(){$(this).toggleClass("open"),$(".mob-menu").slideToggle(400)}),$(".mob-menu a").not(".mob-menu a.hlts, .mob-menu a.hltw").on("click",function(){$(".nav-toggle").removeClass("open"),$(".mob-menu").slideToggle(400)})}),/*$(function(){$(".hlts span").click(function(){$(this).toggleClass("open-serv"),$(".mob-services").toggleClass("blocking")})}),*/$(function(){$(window).scroll(function(){$(this).scrollTop()>200?$(".top-arrow").fadeIn(200):$(".top-arrow").fadeOut(200)}),$(".top-arrow").click(function(){$("body,html").animate({scrollTop:0},500)})}),$(document).ready(function(){$(".about").children().addClass("hidden").viewportChecker({classToAdd:"visible animated fadeIn",offset:0}),$(".service-short").children().addClass("hidden").viewportChecker({classToAdd:"visible animated fadeIn",offset:0}),$(".service-wrap").children().addClass("hidden").viewportChecker({classToAdd:"visible animated fadeIn",offset:0})});

$(document).ready(function() {
  $('.hlts span').click(function() {
    $('.mob-services').slideToggle(300);
    if ($('.mob-wed-services').is(':visible')) {
      $('.mob-wed-services').slideUp(300);
      $('.hltw span').removeClass('open-serv')
    }
    $(this).parent().toggleClass('checked');
    $(this).toggleClass('open-serv');

  });
  $('.hltw span').click(function() {
    $('.mob-wed-services').slideToggle(300);
    if ($('.mob-services').is(':visible')) {
      $('.mob-services').slideUp(300);
      $('.hlts span').removeClass('open-serv')

    }
    $(this).parent().toggleClass('checked');
    $(this).toggleClass('open-serv');
  });

  $(window).on('load', function(){
  if ($(window).width() <= '768'){
      $('.wed-serv-description__item h4').click(function() {
      $(this).next('.wed-serv-description__item p').slideToggle(400);
      $(this).toggleClass('rotate');
      });
    }
  });

/*$(window).scroll(function(){$(this).scrollTop()>48?$('.main-nav').addClass('bg-color'):$('.main-nav').removeClass('bg-color')});
*/
$(".scroll-btn").click(function(e){
  e.preventDefault();
  var scrollBottom = $(window).height();
  $("body,html").animate({scrollTop:scrollBottom},400);
});
$('.more-price, .more-action').click(function(event) {
  $('.modal-popup').fadeIn();
  $('.overlay').fadeIn();
  $('.modal-closer, .overlay').click(function(event) {
    $('.modal-popup').fadeOut();
     $('.overlay').fadeOut();
  });
});
$('.more-price-info').click(function(event) {
  $('.modal-popup2').fadeIn();
  $('.overlay').fadeIn();
  $('.modal-closer2, .overlay').click(function(event) {
    $('.modal-popup2').fadeOut();
     $('.overlay').fadeOut();
  });
});


});