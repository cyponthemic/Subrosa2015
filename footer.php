</section>
<footer class="row">
	<?php do_action( 'foundationpress_before_footer' ); ?>
	<?php dynamic_sidebar( 'footer-widgets' ); ?>
	<?php do_action( 'foundationpress_after_footer' ); ?>
	<div class="small-10 column"></div>
</footer>

<a class="exit-off-canvas"></a>

	<?php do_action( 'foundationpress_layout_end' ); ?>
		</div>
	</div>
</div>
<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>


<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ;?>/skrollr.js"></script>

<!--
<script type="text/javascript">
    var s = skrollr.init();
</script>
-->
<script>
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $("html, body").animate({
          scrollTop: target.offset().top-100
        }, 1000);
        return false;
      }
    }
  });
});

$(function() {
$('.left-off-canvas-toggle ').click( function() {
		$("html, body").animate({ scrollTop: 0 }, 600);
    
 
		});	
});
$(function() {
$('.menu-item-type-custom>a').click( function() {
		$(".exit-off-canvas").click();
    
 
		});	
});
</script>
</body>
</html>
