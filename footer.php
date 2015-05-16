</section>
<div class="row" style="color:black !important; text-align:center;">
	<p style="display:inline-block;" >Contact :</p>
	<li class="fa fa-envelope-o" style="display:inline-block; color:black !important;"><script language="JavaScript">// <![CDATA[
			var username = "info";
			var hostname = "subrosawine.com.au";
			var linktext = username + "@" + hostname ;
			document.write("<a href='" + "mail" + "to:" + username + "@" + hostname + "'>" + "  " + linktext + "</a>");
			// ]]></script>
	</li>
	<li class="fa fa-instagram" style="display:inline-block; color:black !important;">
	<a href="https://instagram.com/subrosawine">@Subrosawine</a>
	</li>
</div>
<footer class="row">
	<?php do_action( 'foundationpress_before_footer' ); ?>
	<?php dynamic_sidebar( 'footer-widgets' ); ?>
	<?php do_action( 'foundationpress_after_footer' ); ?>
	
	<div class="small-10 small-centered columns">
		<p style="text-align: center;">
		WARNING: Under the Liquor Control Reform Act 1998 it is an offence: To supply alcohol to a person under the age of 18 years (penalty exceeds $8,000); For a person under the age of 18 years to purchase or receive liquor (Penalty exceeds $700).<br>

Liquor Licence No. 36136320<br>

Copyright © 2015 www.subrosawine.com - All Rights Reserved - Designed by Alex Chavet
		</p>
	</div>
	
</footer>


<a class="exit-off-canvas"></a>

	<?php do_action( 'foundationpress_layout_end' ); ?>
		</div>
	</div>
</div>
<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>




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
