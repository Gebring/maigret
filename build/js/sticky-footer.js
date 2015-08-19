$(window).bind("load", function() { 

  var footerHeight = 0,
       footerTop = 0,
      $footer = $(".o-global__footer"),
      x = window.innerWidth;
  
  // Run Once the page is loaded
  positionFooter();

  // This function keeps the footer at the bottom of the page
  // without overlaping it's top elements.
  function positionFooter() {
  
    footerHeight = $footer.height();
    footerTop = ($(window).scrollTop()+$(window).height()-footerHeight)+"px";
    documentHeight = $(document.body).height();
    
    // If footer absolute account for it's height
    if($footer.css("position") == "absolute"){
      documentHeight += footerHeight;
    }
    
    if (documentHeight < $(window).height()) {
       $footer.css({
          position: "absolute",
          top: footerTop,
       })
       console.log('banan');
    } else {
        if (window.innerWidth > 568) {
          footerTop = documentHeight + footerHeight;
         $footer.css({
            position: "static",
         })
        } else {
          footerTop = documentHeight + footerHeight + $(window).height();
           $footer.css({
              position: "static",
           })
        }
    }
  
  }
  
  $(window)
    .scroll(positionFooter)
    .resize(positionFooter)
  
    $('.m-arron-num').bind('touchstart mousedown', function(e) {
      e.preventDefault();

      $(window).scroll(function() {
      
        $('.o-global__footer').css({
          position: 'absolute',
          top: footerTop
        })
      
      });
    });

    $('.m-section__search').bind('touchstart mousedown', function(e) {
      e.preventDefault();

      $(window).scroll(function() {
      
        $('.o-global__footer').css({
          position: 'absolute',
          top: footerTop
        })
      
      });
    });

    $(".m-section__search").hover(function() {

      $(window).scroll(function() {
      
        $('.o-global__footer').css({
          position: 'absolute',
          top: footerTop
        })
      
      });
    });
});
