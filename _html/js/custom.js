jQuery(function($){
  /* Mobile responsive Menu*/
  document.getElementById("open_nav").addEventListener("click", open);
      function open() {
          document.getElementById("sidebar1").style.width = "250px";
          document.getElementById("sidebar1").style.display = "block";
          document.getElementById("sidebar1").style.transform = "translate3d(0, 0, 0)";
  }
  document.getElementById("close_nav").addEventListener("click", close);
      function close() {
          document.getElementById("sidebar1").style.width = "0";
          document.getElementById("sidebar1").style.display = "none";
  }
});
jQuery(function() {
  //----- OPEN
  jQuery('[data-popup-open]').on('click', function(e) {
    var targeted_popup_class = jQuery(this).attr('data-popup-open');
    jQuery('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);

    e.preventDefault();
  });

  //----- CLOSE
  jQuery('[data-popup-close]').on('click', function(e) {
    var targeted_popup_class = jQuery(this).attr('data-popup-close');
    jQuery('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);

    e.preventDefault();
  });

  // ---Search box code---//

    new WOW().init();
    jQuery("#menu-item-1111").click(function()
       {
         jQuery(".highlights").css("visibility","hidden");
         jQuery(".menubox .search-form").slideDown('slow');

          
       });
       jQuery(".close-search").click(function()
       {
         jQuery(".menubox .search-form").slideUp('slow');
         jQuery(".highlights").css("visibility","visible");
       });
});

jQuery('document').ready(function(){

  var interval=null;
  function show_loading_box(){
    jQuery(".spinner-loading-box").css("display","none");
    clearInterval(interval);
  }  

  interval = setInterval(show_loading_box,1000);
  
  // ------------ Sticky Navbar -------------------

  var stickyon=jQuery('#sticky-onoff').text().trim();
  var a1=stickyon.length;
  var navbar = document.getElementById("header");
 
  window.onscroll = function() {
    if(a1==3)
    { 
      if(navbar!=null)
      {
        myScrollNav();
      }
    }
  }
  
  if(navbar!=null)
  {
    var sticky = jQuery( navbar ).offset().top;
  }
  function myScrollNav() {
    if (window.pageYOffset > sticky) {
      //alert(window.pageYOffset);
      navbar.classList.add("sticky");
      navbar.classList.add("stickynavbar");
    } else {
      navbar.classList.remove("sticky");
      navbar.classList.remove("stickynavbar");
    }
  }
/* ------------ Scroll Top ---------------  */

  jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
      jQuery('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
      jQuery('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
  });
  jQuery('#return-to-top').click(function() {      // When arrow is clicked
    jQuery('body,html').animate({
      scrollTop : 0                       // Scroll to top of body
    }, 2000);
  });
});