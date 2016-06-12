$(document).foundation();

// Initial functions
function setters() {
	// Sections - set min-height
	$('.section').attr('style','min-height: '+$(window).height()+'px;');
	$('.page-home .section').attr('style','min-height: '+($(window).height()+1)+'px;');
	
	// Section Copy - set top position
	$('.section').each(function() {
		var style_top = parseInt(( $(this).height() - $(this).find('.section__copy').height() ) / 2);
		$(this).find('.section__copy').attr('style','margin-top: '+style_top+'px;');
	});
	
	// Footer section - set position:fixed if window is too high against contents
	if ( $(window).height() > ($('#blog.page').height()+50) ) {
		$('.footer').addClass('footer--fixed');
	}
	else {
		$('.footer.footer--fixed').removeClass('footer--fixed');
	}
}

$(document).on("scrollstop",function(){
    console.log("Stopped scrolling!");
  }); 

$(document).ready(function(){	
	// Contact Me menu item link - add current-menu-item class
	if(window.location.href.indexOf('#contact-me') > -1) {
		$('.current-menu-item').removeClass('current-menu-item');
		$('#menu-js .contact-me a').parent().addClass('current-menu-item');
    }
	
	// Re-run initial functions when resizing window
	$(window).resize(function() {
		setters();
	});
	
	// SlickNav call
	$('#menu__list-js').slicknav();
		
	var first_scroll = 0;
	$(window).scroll( function(){
		if (document.body.scrollTop==0) {
			first_scroll = 0;
		}
		// Home page Banner section - smooth 1 scroll down
		clearTimeout($.data(this, 'scrollTimer'));
		$.data(this, 'scrollTimer', setTimeout(function() {
			if ( ($('body').hasClass('page-home')) && (first_scroll==0) && (document.body.scrollTop < $(window).height() && (document.body.scrollTop!=0) ) ) {
				$('ul.page-nav li:nth-of-type(2) a').click();
				first_scroll = 1;
			}
		}, 250));
		
		
		// Detect section and add specific classes
		$('.effects').each(function(){
			if ($(window).scrollTop() > ($(this).offset().top-500)) {
				if ($(this).hasClass('effects--fade')) {
					$(this).addClass('fadeIn');
				}
				else if ($(this).hasClass('effects--fade-slow')) {
					$(this).addClass('fadeInSlow');
				}
				else if ($(this).hasClass('effects--slide-left')) {
					$(this).addClass('slideLeft');
				}
				else if ($(this).hasClass('effects--slide-right')) {
					$(this).addClass('slideRight');
				}
				else if ($(this).hasClass('effects--slide-down')) {
					$(this).addClass('slideDown');
				}
			}
		});
		
		// Header section - sticky
		if ($(window).scrollTop() > $('#menu-anchor-js').offset().top) {
			$('#menu-js').addClass('sticky');
		} else {
			$('#menu-js').removeClass('sticky');
		}
	});
	
	// Smooth scrolling to sections
	$(function() {
		$('#menu-js a[href*=#]:not([href=#]), ul.page-nav li a, a.anchor-link').click(function() {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			$('html,body').animate({
				scrollTop: target.offset().top
			}, 1000);
			return false;
		});
	});
	
	// Header Menu - add .current class to # links when clicked
	$('#menu-js a').click(function() {
		$('.current-menu-item').removeClass('current-menu-item');
		$(this).parent().addClass('current-menu-item');
	});
	
	// Blog pages: add home page link to Contact Me menu item
	if ( ($('#home').length == 0) && ($('#services').length == 0) ){
		$('#menu__list-js ul li a').each(function() {
			if($(this).attr('href') == '#contact-me') {
				$(this).attr('href','http://'+window.location.hostname+'#contact-me');
			}
		})
	}
});
$(window).load(function() {
	$('.preloader').fadeOut();
	$('.page').fadeIn();
	
	setters();
});