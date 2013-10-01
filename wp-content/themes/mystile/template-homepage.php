<?php
// File Security Check
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
    die ( 'You do not have sufficient permissions to access this page!' );
}
?>
<?php
/**
 * Template Name: Homepage
 *
 * This template is the homepage for Heart's Desire Soap. It is full width, with an upper slider and 
 * lower featured content areas.
 *
 * @package WooFramework
 * @subpackage Template
 */
 
 get_header();
 global $woo_options;
?>
       
    <div id="content" class="page col-full">
    
    	<?php woo_main_before(); ?>
    	
		<section id="main" class="fullwidth">
		
		<?php echo get_new_royalslider(1); ?>
		
		<?php $total = 0; ?>
				
		<?php for($i = 1; $i <= 4; $i++){
		
			if ( is_active_sidebar("home-" . $i)) {
				$total++;
			}
		
		}?>
		
		<?php if ($total > 0){ ?>
				<section id="home-widgets-top" class="col-full col-3 fix">
	
                                    <?php 
                                        $homepage_args = array( 'category_name' => 'homepage-features',
                                                'orderby' => 'rand',
                                                'posts_per_page' => 3);
                                        $homepage_post_query =  new WP_Query( $homepage_args ); 
                                        if($homepage_post_query->have_posts()) {
                                            while ($homepage_post_query->have_posts()) {
                                                $homepage_post_query->the_post(); ?>
                                                <div class="homepage-feature">
                                                    <a href="<?php echo get_post_custom_values("url", get_the_id())[0]; ?>" class="homepage-link"><h3><?php the_title(); ?></h3>
                                                    <?php if (has_post_thumbnail()) {
                                                        $attrs = array( 'size' => 'homepage-featured-image',
                                                                'class' => ' homepage-featured-image');
                                                        the_post_thumbnail( 'homepage-featured-image' );
                                                    } ?>
                                                    <div class="homepage-featured-description"><?php the_content(); ?></div>
                                                    </a>
                                                </div>
                                                
                                            <?php }
                                        } ?>
			</section>
			<section id="home-widget-bottom" class="col-full col-1 fix">                           
                                <?php for($i = 1; $i <= 3; $i++){ ?>
				<?php if ( is_active_sidebar( 'home-' . $i ) ) { ?>
		
						<div class="block home-widget-<?php echo $i ?>">
							<?php dynamic_sidebar( 'home-' . $i ); ?>
						</div>
                                        <?php } ?> 
					<?php } ?>
			
			</section>
		<?php } ?>
		
		</section>
		
		<?php woo_main_after(); ?>
		
    </div><!-- /#content -->
		
<?php get_footer(); ?>