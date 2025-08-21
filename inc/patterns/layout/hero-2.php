<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package lmscourse-fse
 * @since 1.0.0
 *
 * slug: hero-2
 * title: Hero 2
 * categories: LMSCourseFSE
 * keywords: hero, columns
 */

use LMSCourseFSE\Assets_Manager;

$lmscourse_fse_img03 = Assets_Manager::get_image_url( 'theme-img-03.webp' );

return array(
	'title'      => __( 'Hero 2', 'lmscourse-fse' ),
	'categories' => array( 'lmscourse-fse' ),
	'keywords'   => array( 'hero' ),
	'content'    => '

<!-- wp:cover {"overlayColor":"ti-bg-inv","isUserOverlayColor":true,"minHeightUnit":"px","metadata":{"name":"Hero-2"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><span aria-hidden="true" class="wp-block-cover__background has-ti-bg-inv-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:image {"id":142,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"16px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="' . esc_url( $lmscourse_fse_img03 ) . '" alt="" class="wp-image-142" style="border-radius:16px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|luminous-vivid-amber"}}}},"textColor":"luminous-vivid-amber","fontSize":"medium"} -->
<p class="has-luminous-vivid-amber-color has-text-color has-link-color has-medium-font-size">★★★★★</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
<h2 class="wp-block-heading has-small-font-size" style="text-transform:uppercase">Join 1000+ students</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Learn Guitar the Right Way!</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size">Pickum chordis dolor sit fretboard, consectetur scale-tur adipiscing neck. Solo elit string-tremolo, slide do re mi sed tempo eiusmod strumming aliqua.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"fontSize":"medium"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-medium-font-size has-custom-font-size wp-element-button" href="#enroll">Enroll Now!</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-fill","style":{"color":{"background":"#388a7700"},"border":{"radius":"5px","width":"1px"}},"fontSize":"medium","borderColor":"ti-fg-alt"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-background has-border-color has-ti-fg-alt-border-color has-medium-font-size has-custom-font-size wp-element-button" href="#modules" style="border-width:1px;border-radius:5px;background-color:#388a7700">View Modules</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->

',
);
