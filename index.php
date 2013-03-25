 <?php get_header(); ?>
	  
		<!--  Carousel - consult the Twitter Bootstrap docs at http://twitter.github.com/bootstrap/javascript.html#carousel -->
		<div id="myCarousel" class="carousel slide carousel-fade"><!-- class of slide for animation -->
		 
		<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li>
		</ol>

		  <div class="carousel-inner">
			<div class="item active"><!-- class of active since it's the first item -->
			  <img src="http://webdesigntutsplus.s3.amazonaws.com/tuts/342_bootstrap_carousel/Carousel-Files-COMPLETE/img/antennae.jpg" alt="" />
			  <div class="carousel-caption">
				<p>Caption text one</p>
			  </div>
			</div>
			<div class="item">
			  <img src="http://webdesigntutsplus.s3.amazonaws.com/tuts/342_bootstrap_carousel/Carousel-Files-COMPLETE/img/echo.jpg" alt="" />
			  <div class="carousel-caption">
				<p>Caption text two</p>
			  </div>
			</div>
			<div class="item">
			  <img src="http://webdesigntutsplus.s3.amazonaws.com/tuts/342_bootstrap_carousel/Carousel-Files-COMPLETE/img/carina.jpg" alt="" />
			  <div class="carousel-caption">
				<p>Caption text three</p>
			  </div>
			</div>
			<div class="item">
			  <img src="http://webdesigntutsplus.s3.amazonaws.com/tuts/342_bootstrap_carousel/Carousel-Files-COMPLETE/img/ngc5866.jpg" alt="" />
			  <div class="carousel-caption">
				<p>Caption text four</p>
			  </div>
			</div>
		  </div><!-- /.carousel-inner -->
		  <!--  Next and Previous controls below
				href values must reference the id for this carousel -->
			<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
			<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
		</div><!-- /.carousel -->
		
		
		
		
      <!-- Example row of columns -->
      <section class="row-fluid">
        <article class="span4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </article><!-- /.span4 -->
        <article class="span4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </article><!-- /.span4 -->
        <article class="span4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </article><!-- /.span4 -->
      </section><!-- /.row-fluid -->

<?php get_footer(); ?>