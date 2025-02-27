  <footer id="footer-pagina" class="py-2 bg-white">
    
    <div class="container-fluid">
      
      <div class="row">

        <div class="col">
        
        <div class="pos-f-t">

          <!-- <div class="collapse" id="navbarToggleExternalContent"> -->

  				<?php
  				// wp_nav_menu( array(
  				//   'theme_location' => 'primary', // Defined when registering the menu
  				//   'menu_id'        => 'footer-menu',
  				//   'container'      => false,
  				//   'depth'          => 2,
  				//   'menu_class'     => 'nav ml-auto text-uppercase flex-column',
  				//   'walker'         => new Bootstrap_NavWalker(), // This controls the display of the Bootstrap Navbar
  				//   'fallback_cb'    => 'Bootstrap_NavWalker::fallback', // For menu fallback
  				// ) );
  				?>  

    			<!-- </div> -->


          <nav class="navbar navbar-light bg-white">
          <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button> -->


          <div class="justify-content-start py-2">Rosane Franco © 2020. <br /> Todos os Direitos Reservados.</div>

              <ul id="nav-social" class="nav justify-content-end">
                <li class="nav-item">
                    <!-- <a href="https://twitter.com/" target="_blank" class="nav-link px-2">
                <ion-icon name="logo-twitter" class=""></ion-icon>                  
                    </a> -->
                    <a href="https://www.facebook.com/rosane.franco.167" target="_blank" class="nav-link px-2">
                <ion-icon name="logo-facebook" class=""></ion-icon>
                    </a>
                    <a href="https://www.instagram.com/franco_rosane_/" target="_blank" class="nav-link px-2">
                <ion-icon name="logo-instagram" class=""></ion-icon>
                    </a>
                </li>
              </ul>

          </nav><!-- navbar -->
        </div><!-- .pos-f-t -->

        <!-- <div class="col-12 col-sm-12 col-md-7 col-lg-6 col-xl-8">
          <div class="justify-content-start py-2">Rosane Franco © 2020. <br /> Todos os Direitos Reservados.</div>
        </div> -->

      </div>
    </div>

  </div>
    
  </footer>

  <?php wp_footer(); ?>

  <script>
    AOS.init({
      // Global settings:
      disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
      startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
      initClassName: 'aos-init', // class applied after initialization
      animatedClassName: 'aos-animate', // class applied on animation
      useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
      disableMutationObserver: false, // disables automatic mutations' detections (advanced)
      debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
      throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
      

      // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
      offset: 120, // offset (in px) from the original trigger point
      delay: 0, // values from 0 to 3000, with step 50ms
      // duration: 400, // values from 0 to 3000, with step 50ms
      easing: 'ease', // default easing for AOS animations
      once: false, // whether animation should happen only once - while scrolling down
      mirror: false, // whether elements should animate out while scrolling past them
      anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
    })
  </script>

  <script>
    (function toggleSearch(win,doc){
      'use strict'; 
      var searchFake = document.querySelector("#fakeSearchButton");
      var searchReal = document.querySelector("#busca");
      
      searchFake.addEventListener('click', function(event) {
        // alert("Hello! I am an alert box!!");
        event.preventDefault();
        searchFake.style.display = "none";
        searchReal.style.display = "flex";
      },false);
      
    })(window,document);
  </script>


  <script>

    (function(win,doc){
      'use strict';

      // Get the input field
      var input = document.getElementById("SearchField");

      // Execute a function when the user releases a key on the keyboard
      input.addEventListener("keyup", function(event) {
        // Number 13 is the "Enter" key on the keyboard
        if (event.keyCode === 13) {
        // alert('jose!!');
          // Cancel the default action, if needed
          // event.preventDefault();
          // Trigger the button element with a click
          document.getElementById("searchButton").click();
        }
      });

    })(window,document);


  </script>

    <!-- JSocials -->
    <script>
      $("#shareIcons").jsSocials({
        showLabel: true,
        showCount: true,
        shares: ["twitter","facebook"]
      });
    </script>

    <script>
    $(document).ready(function() {
      var owl = $('.owl-carousel');
      owl.owlCarousel({
        margin: 0,
        nav: true,
        // dots: true,
        loop: true,
        responsiveClass:true,
        responsive: {
          0: {
            items: 1
          },
          400: {
            items: 2
          },
          600: {
            items: 2
          },
          1000: {
            items: 5,
          }
        }
      })
    })
    </script>

    <script type="text/javascript">

    //  Load More Eventos na Home (loop-front-page.php) ////////////////////////////////////////////////////// 
    var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";
    var page = 2;
    jQuery(function($) {
      $('body').on('click', '.load-more-home', function() {
      // alert("Hello! I am an alert box!!");
      $('#loading').stop().hide().fadeIn('fast');
      //$('.loadmore').hide().fadeOut('fast');
      $('#loading').html('<img src="<?php echo get_template_directory_uri(); ?>/images/loading.gif" />');
        var data = {
          'action': 'load_posts_home_by_ajax',
          'page': page,
          'security': '<?php echo wp_create_nonce("load_more_posts"); ?>'
        };

        $.post(ajaxurl, data, function(response) {
        $('#loading').hide().fadeOut('fast');
        //$('.loadmore').stop().hide().fadeIn('fast');    
          $('.card-columns').append(response);
          page++;
        });
      });
    });

    // Load More Posts na tela das Obras (ano/tipo-de-obra) (loop-archive.php) ////////////////////////////////////////////////////   
    var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";
    var page = 2;
    jQuery(function($) {
      $('body').on('click', '.load-more-obras', function() {
      // alert("Hello! I am an alert box!!");
      $('#loading').stop().hide().fadeIn('fast');
      //$('.loadmore').hide().fadeOut('fast');
      $('#loading').html('<img src="<?php echo get_template_directory_uri(); ?>/images/loading.gif" />');
        var data = {
          'action': 'load_posts_by_ajax',
          'page': page,
          'security': '<?php echo wp_create_nonce("load_more_posts"); ?>'
        };

        $.post(ajaxurl, data, function(response) {
        $('#loading').hide().fadeOut('fast');
        //$('.loadmore').stop().hide().fadeIn('fast');    
          $('.card-columns').append(response);
          page++;
        });
      });
    });

    </script>

    <script>
      $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
    </script>

    <script>// <![CDATA[
      function goBack() { window.history.back() }
    // ]]></script>

    <script>
        $(".periodo:empty").next().hide();
        $(".periodo:not(:empty)").next().show();            
        $(".periodo:not(:empty)").addClass('mt-4');            
    </script>

    <script>


      (function (win,doc){

        'use strict';

        // alert("Page location is " + window.location.href);

        if ($('body').is('.home')){
          // alert('Homepage!');

        var x = document.readyState;
        console.log(x);

        if (document.readyState === 'loading') {
          var sliderHeight = document.getElementById("carousel_inner").offsetHeight;
        }

        var alturaHeading = sliderHeight / 3;
        var Heading = document.querySelector(".carousel-caption h1");

        var myNodelist = document.querySelectorAll(".carousel-caption");
        var i;
        for (i = 0; i < myNodelist.length; i++) {
          myNodelist[i].insertAdjacentHTML("afterend", 
                "<div id='overlay'></div>");
        }

        var ListaHeadings = document.querySelectorAll(".carousel-caption h1");
        var i;
        for (i=0; i < ListaHeadings.length; i++){
          ListaHeadings[i].style.bottom = alturaHeading + 'px';
        }

      } else {

      // }(window,document));


      // (function (win,doc){

        // 'use strict';

        if (document.readyState === 'loading') {
          var carouselHeightMenor = document.getElementById("banner_menor").offsetHeight;
          console.log(carouselHeightMenor);        
        }


        var alturaHeadingMenor = carouselHeightMenor / 4.5;
        console.log(alturaHeadingMenor);
        var HeadingMenor = document.querySelector("#banner_menor h1");
        console.log(HeadingMenor.innerHTML);

        var captionMenor = document.querySelector(".bannerMenor");
        captionMenor.insertAdjacentHTML("afterend", "<div id='overlay'></div>");

        var banner = document.querySelector(".bannerMenor h1");
        banner.style.bottom = alturaHeadingMenor + 'px';

      }

      }
      (window,document));


      // $(function() {
      
      // var sliderHeight = $('.carousel-inner').height();

      //  $(".carousel-caption h1")
      //  .css({
      //     'bottom': sliderHeight / 4.5,
      //     'z-index': 2000
      //  });

      // $(".carousel-caption").after("<div id='overlay'></div>");

      //  $("#overlay")
      //     .height(sliderHeight)
      //     .css({
      //        'opacity' : 0.4,
      //        'position': 'absolute',
      //        'top': 0,
      //        'left': 0,
      //        'background-color': 'black',
      //        'width': '100%',
      //        'z-index': 1
      //     });

      // });
    
    </script>


  </body>
</html>