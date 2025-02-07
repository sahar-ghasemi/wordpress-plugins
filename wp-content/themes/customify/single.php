<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package customify
 */

get_header(); ?>
	<div class="content-inner">
	<h1>video</h1>
	<div id="<?php echo get_metadata('post',$post->ID,'_video_ID',true); ?>"><script type="text/JavaScript"
	 src="<?php echo get_metadata('post',$post->ID,'_video',true); ?>"></script></div>
		<?php
		// c--> return 1 means true
$current_user=wp_get_current_user();
// if(current_user_can("read_vip_content")){
// 	$more=true;
// }
// else{
// 	$more=false;
// }
		do_action( 'customify/content/before' );
		// if($more){
			if(in_array("vip",(array)$current_user->roles)){

			if ( ! customify_is_e_theme_location( 'single' ) ) {
				while ( have_posts() ) :
					$post_type = get_post_type();
					if ( has_action( "customify_single_{$post_type}_content" ) ) {
						do_action( "customify_single_{$post_type}_content" );
					} else {
						customify_single_post();
					}
				endwhile; // End of the loop.
			}
		}
		else{
			echo "This post is available for VIP users";
		}
		do_action( 'customify/content/after' );
		?>
	</div><!-- #.content-inner -->
<?php
get_footer();
