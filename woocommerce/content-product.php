<?php
/**
 * The template for displaying product content within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product, $woocommerce_loop;

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) )
	$woocommerce_loop['loop'] = 0;

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) )
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );

// Ensure visibility
if ( ! $product || ! $product->is_visible() )
	return;

// Increase loop count
$woocommerce_loop['loop']++;

// Extra post classes
$classes = array();
if ( 0 == ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] || 1 == $woocommerce_loop['columns'] )
	$classes[] = 'first';
if ( 0 == $woocommerce_loop['loop'] % $woocommerce_loop['columns'] )
	$classes[] = 'last';

?>
<?php
if ($woocommerce_loop['loop'] % 2 != 0) {
   	/* Open the row */
   echo '<div class="row">';
   /* echo 'OPEN'; */
   
}
?>

<div <?php post_class( $classes.' small-12 large-6 left product-container columns'); ?>>
	<div class="row">
		<div class="medium-5 large-5 thumb-container columns">
		
			<!-- <?php do_action( 'woocommerce_before_shop_loop_item' ); ?> -->
			
		
		
			<?php
			
				/**
				 * woocommerce_before_shop_loop_item_title hook
				 *
				 * @hooked woocommerce_show_product_loop_sale_flash - 10
				 * @hooked woocommerce_template_loop_product_thumbnail - 10
				 */
				do_action( 'woocommerce_before_shop_loop_item_title' ); 
			?>
		</div>
		<div class="medium-5 medium-offset-1 large-offset-0 large-7 columns product-info">
		
			<img class="subrosa-logo" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/logo-small.png">
			<?php 
			global $post;
			get_wine_title(); 
			?>
			<p>
			<?php woocommerce_template_single_excerpt();?>
			</p>
			<?php
				/**
				 * woocommerce_after_shop_loop_item_title hook
				 *
				 * @hooked woocommerce_template_loop_rating - 5
				 * @hooked woocommerce_template_loop_price - 10
				 */
				
				/* do_action( 'woocommerce_after_shop_loop_item_title' ); */
				woocommerce_template_single_add_to_cart();
			?>
		</div>
		
		<?php
	
			/**
			 * woocommerce_after_shop_loop_item hook
			 *
			 * @hooked woocommerce_template_loop_add_to_cart - 10
			 */
			/* do_action( 'woocommerce_after_shop_loop_item' );  */
	
		?>
	</div>
</div>

<?php
if ($woocommerce_loop['loop'] % 2 == 0) {
   	/* Open the row */
   echo '</div><div class="row">';
   /* echo 'CLOSE'; */
   
}
?>
