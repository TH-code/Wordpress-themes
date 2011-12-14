jQuery.noConflict();
jQuery(document).ready(function(){
/*
  jQuery('.sf-menu > li > a').addClass('menu-round');
*/
  jQuery('.widgetcontainer').addClass('big-round');
  jQuery('#s').add('#searchsubmit').addClass('small-round');
});

DD_roundies.addRule('.big-round', '15px');
DD_roundies.addRule('.menu-round', '4px 4px 0 0');
DD_roundies.addRule('.small-round', '4px');

