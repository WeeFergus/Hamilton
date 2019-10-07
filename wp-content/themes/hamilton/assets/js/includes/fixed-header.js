var jQuerydocument = jQuery(document),
    jQueryelement = jQuery('#header'),
    className = 'hasScrolled';

jQuerydocument.scroll(function() {
  if (jQuerydocument.scrollTop() >= 58) {
    // user scrolled 50 pixels or more;
    // do stuff
    jQuery('#header').addClass('fixed');
    jQuery('.placeholder').show();
  } else {
    jQuery('#header').removeClass('fixed');
    jQuery('.placeholder').hide();
  }
});