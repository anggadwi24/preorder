"use strict";
// Header input
$(document).on('change', 'input[name="header-theme"]', function(){
	var context = $('input[name="header-theme"]:checked').val();
	$(".app").removeClass (function (index, className) {
		return (className.match (/(^|\s)header-\S+/g) || []).join(' ');
	}).addClass( 'header-'+ context );
});


// Side Nav input
$(document).on('change', 'input[name="side-nav-color"]', function(){
	var context = $('input[name="side-nav-color"]:checked').val();
	$('.app').removeClass('side-nav-dark side-nav-default');
	$('.app').addClass('side-nav-'+ context);
});

// RTL Toggle
$('#rtl-toogle').on('change', function(e) {
	$('.app').toggleClass("rtl");
	e.preventDefault();
});

