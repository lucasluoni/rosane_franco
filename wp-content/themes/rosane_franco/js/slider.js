                $(document).ready(function() {
                  var owl = $('.owl-carousel');
                  owl.owlCarousel({
                    margin: 30,
                    nav: false,
                    dots: true,
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
                        items: 3
                      },
                      1000: {
                        items: 3,
                      }
                    }
                  })
                })
