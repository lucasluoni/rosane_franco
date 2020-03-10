<?php while ( have_posts() ) : the_post(); //Open the loop ?>
        
  <div class="container-fluid">

    <div class="row">
      <div class="col px-0">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    
          <div class="carousel-inner">
            
              <div class="carousel-item active">
                <img class="d-block w-100" src="images/banner-pinturas.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                <h1 class="display-3">Pinturas</h1>
                </div>
              </div>

            </div>

        </div>

      </div>
    </div>

  </div>

  <div class="container mt-5">
              
    <div class="row mx-auto">
        <div class="col">                
            <span class="float-right ListaNoticias"><a class="text-right text-body small" href="<?php echo get_site_url() . '/noticias'; ?>">< Voltar</a></span>
        </div>
    </div>
        
  </div>
    
    <div class="container">          
    	<div class="content">
          
          <div class="row mx-auto">
              <div class="col mt-4">
                  <date class="DataPost roxo"><?php echo get_the_date(); ?></date>
              </div>
          </div>

          <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        
          <div class="row mx-auto">                
              <span class="col-12"><h2 class="entry-title"><?php the_title(); ?></h2></span>
          </div>
                
				<div class="row mx-auto">
                    <span class="col-xl mt-4 mb-4">
                    	<section class="entry-content">
                            <?php the_content(); ?>
                        </section><!-- .entry-content -->	
                    </div>

                <div class="row mx-auto">
                    <div class="col">
                        <hr>
                        <span class="small">Share </span>
                        <span id="shareIcons" class="m-1"></span>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                      <div class="mx-auto d-table">
                        <ul class="pagination">
                          <li class="page-item"><?php previous_post_link('%link', '&lt;' . ' Notícia Anterior') ?></li>
                          <li class="page-item"><?php next_post_link('%link', 'Próxima Notícia &gt;') ?></li>
                        </ul>
                      </div><!--mx-auto d-table-->
                  </div><!--col-->
                </div><!--row-->

                <?php endwhile; // End the loop. ?>

	        </div><!--content-->
        </div><!--container-->
        
</div>	</div><!--container-->
    
            <div class="container-fluid bg-white mt-4 pb-4">
        		<div class="container pt-4 pb-4">
            
                    <div class="row mx-auto">
                       <h2 class="col mt-3 mb-3 CinzaVerde">Outras Notícias</h2>
                    </div>
                            
                    <div class="row mx-auto">
                    
						<?php query_posts('post_type=post&post_status=publish&posts_per_page=3&paged='. get_query_var('paged')); ?>
                        
                        <?php if( have_posts() ): ?>
                          <?php while( have_posts() ): the_post(); ?>
                            
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 mt-1 mb-2">
                            <img class="w-100 border5" src=<?php the_post_thumbnail( array(360,196) ); ?>
                            <span class="bg-white d-block">
                                <h5 class="ml-2 mt-4 mb-2 w-100 d-inline-block"><?php the_title(); ?></h5>
                                <span class="ml-3 d-block text-black-50 CinzaVerde"><?php the_excerpt(); ?></span>
                                <span class="ReadMore bg-secondary small d-block text-right mt-3 mb-3 pr-2 text-uppercase"><a class=" text-light" href="<?php the_permalink(); ?>">leia mais</a></span>
                            </span>
                        </div><!--col-xl-4-->
					
						<?php endwhile; ?>  
                	
                    </div><!--row-->
                    
                    <?php endif; wp_reset_query(); ?>
            
              <div class="row mx-auto">
                  <div class="col">                
                      <span class="float-right ListaNoticias"><a class="text-right text-body small CinzaVerde" href="<?php echo get_site_url() . '/noticias'; ?>">< Lista de Notícias</a></span>
                  </div>
              </div>

            </div><!--container pt-4 pb-4 -->  
            
		</div><!--container-fluid-->                     
                        
