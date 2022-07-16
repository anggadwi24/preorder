"use strict";
+function($, window){

	var app = {
		name: 'Applicator',
		author: 'Theme_Nate',
		breakpoint : {
			mobile: 576,
		    tablet: 767,
		    laptop: 992,
		    desktop: 1440
		},
		colors : {

			//Contextual color
			primary : '#6569df',
			success : '#24d5d8',
			info : '#04a1f4',
			warning : '#fecd2f',
			danger : '#fd3259',

			//Opacity
			primaryOpacity: 'rgba(101, 105, 223, 0.1)',
			successOpacity: 'rgba(36, 213, 216, 0.1)',
			infoOpacity: 'rgba(4, 161, 244, 0.1)',
			warningOpacity: 'rgba(254, 205, 47, 0.1)',
			dangerOpacity: 'rgba(253, 50, 89, 0.1)',
			transparent: 'rgba(255, 255, 255, 0)',

			//Grayscale
			gray : '#fafafa',
			white : '#fff',
			dark : '#515365',
			textColor : '#8a8a8a',
			borderColor : '#e9e9e9',

			//Gradient Start color
			gradientPrimaryStart: '#b603c1',
			gradientSuccessStart: '#1dccdf',
			gradientInfoStart: '#6a4ee1',
			gradientWarningStart: '#f6d365',
			gradientDangerStart: '#f3301a',

			//Gradient Stop color
			gradientPrimaryStop: '#7a38e0',	
			gradientSuccessStop: '#1de4bd',
			gradientInfoStop: '#05bdd7',
			gradientWarningStop: '#fda085',
			gradientDangerStop: '#f37138',		

			//Contextual gradient color
			gradientPrimary : 'url(#gradient-primary)',
			gradientSuccess : 'url(#gradient-success)',
			gradientInfo : 'url(#gradient-info)',
			gradientWarning : 'url(#gradient-warning)',
			gradientDanger : 'url(#gradient-danger)'
			
		}	
	};

	$(function () {
		var defs = d3.select('defs');
		var createGradientPrimary = defs.append('linearGradient')
			.attr('id', 'gradient-primary')
			.attr('x1', '0%')
			.attr('y1', '100%')
			.attr('x2', '100%')
			.attr('y2', '0%');
			createGradientPrimary.append('stop')
			.attr('offset', '0%')
			.attr('style', 'stop-color:' + app.colors.gradientPrimaryStart)
			.attr('stop-opacity', 1);
			createGradientPrimary.append('stop')
			.attr('offset', '100%')
			.attr('style', 'stop-color:' + app.colors.gradientPrimaryStop)
			.attr('stop-opacity', 1);
	});

	$(function () {
		var defs = d3.select('defs');
		var createGradientSuccess = defs.append('linearGradient')
			.attr('id', 'gradient-success')
			.attr('x1', '0%')
			.attr('y1', '100%')
			.attr('x2', '100%')
			.attr('y2', '0%');
			createGradientSuccess.append('stop')
			.attr('offset', '0%')
			.attr('style', 'stop-color:' + app.colors.gradientSuccessStart)
			.attr('stop-opacity', 1);
			createGradientSuccess.append('stop')
			.attr('offset', '100%')
			.attr('style', 'stop-color:' + app.colors.gradientSuccessStop)
			.attr('stop-opacity', 1);
	});

	$(function () {
		var defs = d3.select('defs');
		var createGradientInfo = defs.append('linearGradient')
			.attr('id', 'gradient-info')
			.attr('x1', '0%')
			.attr('y1', '100%')
			.attr('x2', '100%')
			.attr('y2', '0%');
			createGradientInfo.append('stop')
			.attr('offset', '0%')
			.attr('style', 'stop-color:' + app.colors.gradientInfoStart)
			.attr('stop-opacity', 1);
			createGradientInfo.append('stop')
			.attr('offset', '100%')
			.attr('style', 'stop-color:' + app.colors.gradientInfoStop)
			.attr('stop-opacity', 1);
	});

	$(function () {
		var defs = d3.select('defs');
		var createGradientWarning = defs.append('linearGradient')
			.attr('id', 'gradient-warning')
			.attr('x1', '0%')
			.attr('y1', '100%')
			.attr('x2', '100%')
			.attr('y2', '0%');
			createGradientWarning.append('stop')
			.attr('offset', '0%')
			.attr('style', 'stop-color:' + app.colors.gradientWarningStart)
			.attr('stop-opacity', 1);
			createGradientWarning.append('stop')
			.attr('offset', '100%')
			.attr('style', 'stop-color:' + app.colors.gradientWarningStop)
			.attr('stop-opacity', 1);
	});

	$(function () {
		var defs = d3.select('defs');
		var createGradientDanger = defs.append('linearGradient')
			.attr('id', 'gradient-danger')
			.attr('x1', '0%')
			.attr('y1', '100%')
			.attr('x2', '100%')
			.attr('y2', '0%');
			createGradientDanger.append('stop')
			.attr('offset', '0%')
			.attr('style', 'stop-color:' + app.colors.gradientDangerStart)
			.attr('stop-opacity', 1);
			createGradientDanger.append('stop')
			.attr('offset', '100%')
			.attr('style', 'stop-color:' + app.colors.gradientDangerStop)
			.attr('stop-opacity', 1);
	});

	window.app = app;
	
}(jQuery, window);	

// Side Nav
+function($, window){
	
	var sideNav = {};
	
	sideNav.init = function() {

		//Side Nav Item Dropdown Control
		$('.side-nav .side-nav-menu li a').on('click', function(e) {
			if ($(this).parent().hasClass("open")) {

				$(this).parent().children('.dropdown-menu').slideUp(200, function() {
					$(this).parent().removeClass("open");
				});

			} else {
				$(this).parent().parent().children('li.open').children('.dropdown-menu').slideUp(200);
				$(this).parent().parent().children('li.open').children('a').removeClass('open');
				$(this).parent().parent().children('li.open').removeClass("open");
				$(this).parent().children('.dropdown-menu').slideDown(200, function() {
					$(this).parent().addClass("open");
				});
			}
		});

		//Side Nav Folded Control
		$('.sidenav-fold-toggler').on('click', function(e) {
			$('.app').toggleClass("side-nav-folded");
	        e.preventDefault();
		});
		
		//Side Nav Expand Control
		$('.sidenav-expand-toggler').on('click', function(e) {
			if ($('.side-nav-backdrop').length) {
				$('.side-nav-backdrop').remove();
			}
			else {
				var sideNavBackdrop = '<div class="side-nav-backdrop"></div>';
				$('.app').append(sideNavBackdrop);
			}
			$('.app').toggleClass("side-nav-expand");
			e.stopPropagation();

			//Side Nav Backdrop Toggle
			$('.side-nav-backdrop').on('click', function(e) {
				$('.app').removeClass('side-nav-expand');
				$(this).remove();
			});
		});	
	};

	window.sideNav = sideNav;

}(jQuery, window);

// Quickview
+function($, window){
	
	var quickView = {};

	quickView.init = function() {

		// Handle Quick View Toggler
		$('.quick-view-toggler').on('click', function(e) {
			if ($('.quick-view-backdrop').length) {
				$('.quick-view-backdrop').remove();
			}
			else {
				var quickViewBackdrop = '<div class="quick-view-backdrop"></div>';
				$('.app').append(quickViewBackdrop);
			}
			$('.app').toggleClass('quick-view-expand');
			e.stopPropagation();
			
			//Quick View Backdrop Toggle
			$('.quick-view-backdrop').on('click', function(e) {
				$('.app').removeClass('quick-view-expand');
				$(this).remove();
			});
		});

		// Handle Quick View Conversation Toggler
		$('.conversation-toggler').on('click', function(e) {
			$('.quick-view-chat').toggleClass('conversation-expand');
		});
	};	
	
	window.quickView = quickView;

}(jQuery, window);

// Aside
+function($, window){
	
	var aside = {};

	aside.init = function() {
		$('.aside-toggle').on('click', function(e) {
			$('.aside').toggleClass('open');
		});
	};	
	window.aside = aside;

}(jQuery, window);

// Header
+function($, window){
	
	var header = {};

	header.init = function() {

		//Search Input Toggle
		$('.search-toggle').on('click', function(e) {
			$('.search-box, .search-input').toggleClass("active");
			$('.search-input input').focus();
			e.preventDefault();
		});

		//Expand Search Predict
		$('.search-input input').on('keyup',function(){
			if($(this).val().length > 0) {
				$('.search-predict').addClass("active");
			} 
			else {
		       $('.search-predict').removeClass("active");
		    }
		    $('.serach-text-bind').html($(this).val());
		})	
	};	
	window.header = header;

}(jQuery, window);

// Cards
+function($, window){
	
	var cards = {};

	cards.init = function() {

		// Card Collapsible
        $('[data-toggle=card-collapse]').on('click', function(e){
			$(this).toggleClass('active').parents('.card').find('.card-collapsible').slideToggle();
	    });

		//card refresh
		$('[data-toggle=card-refresh]').on('click',function(e) {
			var cardRefreshSelector = $(this).parents('.card');
		    cardRefreshSelector.addClass('card-refresh');
		    window.setTimeout(function () {
		        cardRefreshSelector.removeClass('card-refresh');
		    }, 2000);
		    e.preventDefault();
		    e.stopPropagation();
		});

		//card removable
		$('[data-toggle=card-delete]').on('click',function(e) {
			var cardDeleteSelector = $(this).parents('.card');
		    cardDeleteSelector.addClass('animated zoomOut');
		    cardDeleteSelector.bind('animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd', function () {
		        cardDeleteSelector.remove();
		    });
		    e.preventDefault();
		    e.stopPropagation();
		});
	};	
	window.cards = cards;

}(jQuery, window);

// Tables
+function($, window){
	
	var tables = {};

	tables.init = function() {

		//Table Check All
		$('.checkAll').on('click', function () {
			$(this).closest('table').find('tbody :checkbox')
			.prop('checked', this.checked)
			.closest('tr').toggleClass('selected', this.checked);
		 });
		
		$('tbody :checkbox').on('click', function () {
			$(this).closest('tr').toggleClass('selected', this.checked); 
			$(this).closest('table').find('.checkAll').prop('checked',
			($(this).closest('table').find('tbody :checkbox:checked').length == $(this).closest('table').find('tbody :checkbox').length));
		});
	};	
	window.tables = tables;

}(jQuery, window);


// Miscellaneous
+function($, window){
	
	var misc = {};

	misc.init = function() {

		//Perfect Scrollbar Config
		$('.scrollable').perfectScrollbar();

		//Bootstrap Popovers Init
		$('[data-toggle="popover"]').popover();

		//Bootstrap Tooltip Init
		$('[data-toggle="tooltip"]').tooltip();

	};	
	window.misc = misc;

}(jQuery, window);


// initialize app
+function($) {
	sideNav.init();	
	quickView.init();
	aside.init();
	header.init();	
	cards.init();	
	tables.init();
	misc.init();	
}(jQuery);
