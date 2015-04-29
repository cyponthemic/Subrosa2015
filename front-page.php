<?php get_header();add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );?>

<!-- /* SUBROSA LOGO */ -->
<section id="home" class="page">
	<img class="main-heading" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/logo-big.png">
</section>
<!-- /* SUBROSA ABOUT US */ -->
<section id="about-us" class="page">
	<div class="row">
		<div class="title small-8 small-centered large-3 columns left">
			<img class="heading" src="<?php echo get_stylesheet_directory_uri() ;?>/assets/titles/about.png">
			<h1 class="entry-title">About us</h1>
		</div>
	</div>
	<div  class="row">
			
		<div class="entry-content small-12 medium-8 large-4 large-offset-1 columns">
			<p>
			From the Old World of Bordeaux to the New World of Napa,<br>
			<i>Winemaker,</i> <br>
			<span class="bold-line">Adam Louder</span> <br>
			loves to explore the art and intricacies of all things wine.
			In 2013, Adam returned home to the Grampians wine region to make wine with the cool climate grapes he prefers,<br>
			<span class="bold-line">Shiraz</span>
			<p>
		</div>
	</div>
</section>
<!-- /* SUBROSA THE LABEL */ -->
<section  id="the-label" class="page">
	<div class="row">
		<div class="title right large-5 columns">
			<img id="the-label-fix" class="heading-image right" src="<?php echo get_stylesheet_directory_uri() ;?>/assets/img/SubRosa_Label_Final.png">
			<img class="heading" src="<?php echo get_stylesheet_directory_uri() ;?>/assets/titles/label.png">
			<h1 class="entry-title">The label</h1>
		</div>
	</div>
	<div  class="row">
			
		<div class="entry-content right medium-8 large-4 large-offset-1 columns">
			<p>
			SubRosa is latin for under the rose . In ancient times, a rose was hung over the table as a mark of secrecy. What was said or happened around the table, stayed at the table.<br>
			The SubRosa sketch was drawn by artist Janette Lucas. (janettelucas.com)
			<p>
		</div>
	</div>
</section>

<!-- /* SUBROSA WINEMAKER */ -->
<section id="winemaker" class="page">
	<div class="row">
		<div class="title  small-12 large-3 columns">
			<img class="heading-image" src="<?php echo get_stylesheet_directory_uri() ;?>/assets/img/adamlouder.jpg">
			<img class="heading" src="<?php echo get_stylesheet_directory_uri() ;?>/assets/titles/winemaker.png">
			<h1 class="entry-title">Winemaker</h1>
			<p>
				<span class="bold-line">Adam Louder</span><br> grew up in the Grampians surrounded by stunning sunsets, abundant native fauna and vines. It was a part-time job while still at school at the local award-winning winery, Bests of Great Western, that ignited a love affair with creating fine wine.
			<p>
		</div>
		<div class="paragraph large-offset-1 large-8 columns">
			Adam joined forces with one of Australia’s most visionary winemakers Trevor Mast at Mount Langi Ghiran in 1998. This partnership was one of master and apprentice. Trevor shared his extensive knowledge, passion and innovative ideas as Adam actively absorbed every word, phrase and action.<br><br>
			 
			Thirsty for more knowledge and experience, Adam travelled to the Napa Valley at 20 to work at Chimney Rock where he learnt to manage and lead a team through harvest.<br><br>
			 
			Next stop on Adam’s winemaking journey was the home of fine wine – Bordeaux as a winemaker for Chateau Carsin from 2005-2008.<br><br>
			
			Complimenting his time in Bordeaux, Adam worked as a winemaker in Western Australia’s Margaret River, at Xanadu and Pierro.<br><br>
			
			Adam’s dedication to fine winemaking was rewarded in 2011 when he was approached by one of Napa Valley’s most prestigious cult wineries Araujo Estate (acquired by Chateau Latour in 2013). During Adam’s time as harvest winemaker (2011 - 2014) Wine Spectator magazine rated the Araujo Estate flagship Cabernet Sauvignon as one of the most collectable wines in the world. <br>  <br>
			
			In 2015, after 19 years working in vineyards and wineries over 27 harvests in three continents, Adam launched SubRosa - wine made with the greatest care and dedication from high quality Grampians and Pyrenees grapes.
		</div>
	</div>
	
</section>
<!-- /* SUBROSA OUR WINES */ -->
<section id="our-wines" class="page">
<div class="row">
	<div class="title small-8 small-centered large-3 large-centered columns">
		<img class="heading" src="<?php echo get_stylesheet_directory_uri() ;?>/assets/titles/wines.png">
		<h1 class="entry-title">About us</h1>
	</div>
</div>
<div class="row">
	
		
	<?php
		$args = array(
			'post_type' => 'product',
			'posts_per_page' => 12
			);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) {
			while ( $loop->have_posts() ) : $loop->the_post();
				woocommerce_get_template_part( 'content', 'product' );
			endwhile;
		} else {
			echo __( 'No products found' );
		}
		wp_reset_postdata();
	?>


	
	
</div>
</section>
<section id="news-feed" class="page">
	<div class="row">
		<div class="title large-3 columns">
			<img class="heading-image" src="<?php echo get_stylesheet_directory_uri() ;?>/assets/img/adamlouder.jpg">
			<img class="heading" src="<?php echo get_stylesheet_directory_uri() ;?>/assets/titles/news.png">
			<h1 class="entry-title">Winemaker</h1>
			<p>
				<span class="bold-line">Follow us on instagram</span><br>
				@SubrosaWines<br>
				<span class="bold-line">Join our mailing list</span><br>
				<!--
Name<br>
				Email<br>
				<button class="small-12">Submit</button>
-->
			<p>
			<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); }?>
		</div>
		<div class="  large-9 columns">
			<?php juicer_feed('name=subrosa'); ?>
		</div>
	</div>
	
</section>
<!-- /* SUBROSA NEWS FEED */ -->

<?php
get_footer();
?>