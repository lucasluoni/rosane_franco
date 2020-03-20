<?php while ( have_posts() ) : the_post(); //Open the loop ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        
		<div class="container-fluid">

			<div class="row">
				<div class="col px-0">

					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			
						<div class="carousel-inner">
					    
					    <div class="carousel-item active">
					    	<img class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/images/banner-contato-rosane-franco.jpg" alt="First slide">
					    	<div class="carousel-caption d-none d-md-block">
								<h1 class="text-capitalize"><?php the_title(); ?></h1>
								<div class="has-overlay"></div>
					  		</div>
					  	</div>

					  </div>
					
					</div>

				</div>
			</div>

		</div>

		<div class="container-fluid pb-5">
			<div class="container">

				<div class="row">
					<div class="col">

						<section id="contato" class="mt-5 text-center">
							
							<h5>Gostou do meu trabalho?</h5>
							<h1 class="text-capitalize">fale comigo</h1>

							<hr class="w-25">
					                
				                <form action="<?php bloginfo('template_directory'); ?>/mail.php" method="POST" autocomplete="off">
				                    <div class="row text-left my-4">
				                
				                        <div class="col-12 col-lg-6 col-md-6 col-12">
					                        <p>
					                        <label for="name" class="text-left"><strong>Nome</strong>:</label>
					                        <input type="text" name="name" class="form-control rounded-0" onfocus="this.value=''" value="Digite o seu nome" required>
						                    </p>
				                        </div>
				                        
				                        <div class="col-6 col-lg-6 col-md-6 col-12">
				                        	<p>
					                        <label for="email"><strong>E-mail</strong>:</label>
					                        <input type="email" name="email" class="form-control rounded-0" name="email" onfocus="this.value=''" value="Digite o seu e-mail" required>
						                    </p>
				                        </div>
				    
				                        <div class="col-12 mt-3">
					                        <label for="message"><strong>Mensagem</strong>:</label>
					                        <p>
					                        <textarea class="form-control w-100 rounded-0 mb-2" rows="5" name="message" placeholder="Digite aqui sua mensagem" required></textarea>
					                        <span class="d-flex justify-content-center mt-3 d-block"><button type="submit" class="btn btn-primary">Enviar</button></span>
						                    </p>
				                        </div>
				    
				                    </div>
				                </form>
					                
						</section>

					</div>
				</div>


			</div>
		</div>

	    <section class="entry-utility">
	        <?php //comments_template(); ?>
	    </section>
        
  </article>

<?php endwhile; // End the loop. ?>	