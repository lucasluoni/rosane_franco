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
                    <a href="https://twitter.com/" target="_blank" class="nav-link px-2">
                <ion-icon name="logo-twitter" class=""></ion-icon>                  
                    </a>
                    <a href="https://www.facebook.com/" target="_blank" class="nav-link px-2">
                <ion-icon name="logo-facebook" class=""></ion-icon>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank" class="nav-link px-2">
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

  </body>
</html>