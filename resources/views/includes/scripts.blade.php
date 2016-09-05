    <!-- Scripts -->
    <script src="/js/app.js"></script>
    
    
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
    <script>
    // Window load event used just in case window height is dependant upon images
    $(window).bind("load", function() { 

           var footerHeight = 0,
               footerTop = 0,
               $footer = $(".page-footer");

           positionFooter();

           function positionFooter() {

                    footerHeight = $footer.height() + 40; // Added 40px to flush the browser footer
                    footerTop = ($(window).scrollTop()+$(window).height()-footerHeight)+"px";

                   if ( ($(document.body).height()+footerHeight) < $(window).height()) {
                       $footer.css({
                            position: "absolute",
                            top: footerTop,
                            width: "100%"
                       })
                   } else {
                       $footer.css({
                            position: "static"
                       })
                   }

           }

           $(window)

                   .resize(positionFooter)

    });
    </script>
    
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-placeholder/2.3.1/jquery.placeholder.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.6/fastclick.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>