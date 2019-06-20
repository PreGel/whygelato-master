jQuery(document).foundation();
/*
These functions make sure WordPress
and Foundation play nice together.
*/

jQuery(document).ready(function() {

    // Remove empty P tags created by WP inside of Accordion and Orbit
    jQuery('.accordion p:empty, .orbit p:empty').remove();

	 // Makes sure last grid item floats left
	jQuery('.archive-grid .columns').last().addClass( 'end' );

	// Adds Flex Video to YouTube and Vimeo Embeds
  jQuery('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').each(function() {
    if ( jQuery(this).innerWidth() / jQuery(this).innerHeight() > 1.5 ) {
      jQuery(this).wrap("<div class='widescreen flex-video'/>");
    } else {
      jQuery(this).wrap("<div class='flex-video'/>");
    }
  });

});

/* add an animated class when scrolled into view*/

var animateHTML = function () {
  var elems,
    windowHeight
  var init = function () {
    elems = document.getElementsByClassName('ready')
    windowHeight = window.innerHeight
    _addEventHandlers()
  }
  var _addEventHandlers = function () {
    window.addEventListener('scroll', _checkPosition)
    window.addEventListener('resize', init)
  }
  var _checkPosition = function () {
    for (var i = 0; i < elems.length; i++) {
      var posFromTop = elems[i].getBoundingClientRect().top
      if (posFromTop - windowHeight <= 0) {
        elems[i].className = elems[i].className.replace('ready', 'animated')
      }
    }
  }
  return {
    init: init
  }
}
animateHTML().init();


(function() {

  'use strict';

  // define variables
  var items = document.querySelectorAll(".timeline li");

  // check if an element is in viewport
  // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
  function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }

  function callbackFunc() {
    for (var i = 0; i < items.length; i++) {
      if (isElementInViewport(items[i])) {
        items[i].classList.add("in-view");
      }
    }
  }

  // listen for events
  window.addEventListener("load", callbackFunc);
  window.addEventListener("resize", callbackFunc);
  window.addEventListener("scroll", callbackFunc);

})();


/*add a reset button to find a gelateria*/
//jQuery( '.wpgmp_before_listing' ).prepend( '<button>Test</button>' );
jQuery(document).ready(function() {
  //jQuery('select').addClass('button');
  jQuery( '.categories_filter' ).prepend( '<div class="button hollow" id="filterButton">Show all</div>' );
  jQuery('#filterButton').click(function() {
      //jQuery('select').prop('selectedIndex', 0);
      location.reload();
  });
});

/*testing cookie for announcement dismiss*/

function setMsgCookie() {
    var expire=new Date();
    expire=new Date(expire.getTime()+(1*24*60*60*1000));
    document.cookie="notice_seen=true; expires="+expire;
}

jQuery('#dismiss-msg').click(function(){ 
    setMsgCookie();
    //$('#cookiebar').addClass('close-cookies');
});


if (document.cookie.indexOf('notice_seen=') >= 0) {
    jQuery('#info-callout').hide();
}
else {
    jQuery('#info-callout').show();
}

// keep pop form open to show thank you message
jQuery(document).ready(function() {
  if (jQuery('.gform_confirmation_wrapper')[0]){
    jQuery('#business-action-sheet').addClass('is-open');
    }
});
