// JavaScript Document

$( document ).ready(function() {
//  client logo slide
 "use strict";
$("#owl-demo").owlCarousel({

      autoPlay: 3000, //Set AutoPlay to 3 seconds
    items : 4,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
  });
});

$(document).ready(function() {
    $('#example').DataTable();
} );
$(document).ready(function() {
 
  $("#owl-demo-one").owlCarousel({
 
      navigation : false, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
      
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });
 
});
$(document).ready(function() {
 
  $("#owl-demo-history").owlCarousel({
 
      navigation : false, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
      autoPlay : 5000,
      
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });
 
});



