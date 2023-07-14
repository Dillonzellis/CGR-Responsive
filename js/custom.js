/*THIS CODE CONTROLS THE MOBILE MAIN MENU ANIMATION*/

$(document).ready(function(e) {
    
	jQuery('li.mobile-menu-item-has-mega-menu').click(function() {	
			jQuery(this).find('ul').toggle();
});

	jQuery('li.mobile-menu-item-has-sub-menu').click(function() {	
			jQuery(this).find('ul').toggle();
});



/*jQuery('li.mobile-menu-item-has-mega-menu').mouseover(function() {	
	jQuery(this).find('ul').slideDown(400);
}).mouseleave(function() {	
	jQuery(this).find('ul').hide(100);
});

jQuery('li.mobile-menu-item-has-sub-menu').mouseover(function() {	
	jQuery(this).find('ul').slideDown(400);
}).mouseleave(function() {	
	jQuery(this).find('ul').hide(100);
});
*/
});
/*THIS CODE CONTROLS THE MOBILE MAIN MENU ANIMATION*/

/*THIS CODE CONTROLS THE MOBILE MAIN MENU ANIMATION*/
jQuery(document).ready(function(e) {
	jQuery('#mobile-menu-bars').click(function(e) {
		jQuery('#mobile-main-menu').slideToggle(800);
	});//end click
});//end ready


jQuery(document).ready(function(e) {
	jQuery('.close-menu').click(function(e) {
		jQuery('#mobile-main-menu').slideUp(800);
	});//end click
});//end ready

/*jQuery(document).ready(function(e) {
	jQuery('#mobile-main-menu li').click(function(e) {
		jQuery('#mobile-main-menu').slideUp(800);
	});//end click
});//end ready

/*THIS CODE CONTROLS THE MOBILE MAIN MENU ANIMATION*/


/*THIS CODE CONTROLS THE MOBILE HOME BANKING MODULE*/

$(document).ready(function(e) {
    jQuery('#home-banking-show-hide').click(function() {
		jQuery('.home-banking-wrapper').slideToggle();
		jQuery('#home-banking-show-hide i').toggleClass('fa-chevron-down');
	});
});

/*THIS CODE CONTROLS THE MOBILE HOME BANKING MODULE*/


/*THIS CODE CONTROLS THE CALL TO ACTION AREA (ICON BORDER)*/

$(document).ready(function(e) {
    jQuery('.cta-image').mouseover(function() {
		jQuery(this).animate({'borderColor':'#B21F17'},400);	
	}).mouseleave(function() {
		jQuery(this).animate({'borderColor':'#FFFFFF'},200);
	});
	
	
});
/*THIS CODE CONTROLS THE CALL TO ACTION AREA (ICON BORDER)*/


/*THIS CODE CONTROLS THE MAIN MENU ANIMATION*/

$(document).ready(function(e) {
    
jQuery('li.menu-item-has-mega-menu').mouseover(function() {	
	jQuery(this).stop().find('ul').slideDown(400);
}).mouseleave(function() {	
	jQuery(this).stop().find('ul').hide(100);
});

jQuery('li.menu-item-has-sub-menu').mouseover(function() {	
	jQuery(this).stop().find('ul').slideDown(400);
}).mouseleave(function() {	
	jQuery(this).stop().find('ul').hide(100);
});

});
/*THIS CODE CONTROLS THE MAIN MENU ANIMATION*/


/*THIS CODE CONTROLS THE ACCORDION*/

  $( function() {
    $( "#club-accounts-accordion" ).accordion({
		collapsible:true,
		active:false
			
	});
  } );
  /*THIS CODE CONTROLS THE ACCORDION*/
  
  /*THIS CODE CONTROLS THE ACCORDION*/

  $( function() {
    $( ".county" ).accordion({
		collapsible:true,
		active:false
			
	});
  } );
  /*THIS CODE CONTROLS THE ACCORDION*/
  