$(window).on("load",function(){var a=$(".grid").isotope({itemSelector:".grid-item"});a.imagesLoaded().progress(function(){a.isotope("layout")}),$(".button").on("click",function(){var b=$(this).attr("data-filter");a.isotope({filter:b})}),$(".button-group").each(function(a,b){var c=$(b);c.on("click","button",function(){c.find(".is-checked").removeClass("is-checked"),$(this).addClass("is-checked")})})}),$(document).ready(function(){$(function(){$(".filter-toggle").on("click",function(){$(this).toggleClass("open"),$(".button-group").toggleClass("collapse")}),$(".button").on("click",function(){$(".filter-toggle").removeClass("open"),$(".button-group").removeClass("collapse")})})});
