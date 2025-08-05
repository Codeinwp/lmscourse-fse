<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package lmscourse-fse
 * @since 1.0.0
 *
 * slug: content-7
 * title: Content 7
 * categories: LMSCourseFSE
 * keywords: content, cover, columns
 */

use LMSCourseFSE\Assets_Manager;

$lmscourse_fse_img06 = Assets_Manager::get_image_url( 'theme-img-06.webp' );
$lmscourse_fse_img05 = Assets_Manager::get_image_url( 'theme-img-05.webp' );

return array(
	'title'      => __( 'Content 7', 'lmscourse-fse' ),
	'categories' => array( 'lmscourse-fse' ),
	'keywords'   => array( 'content', 'columns', 'course' ),
	'content'    => '

<!-- wp:group {"metadata":{"name":"content-7"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|80","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"ti-bg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-bg-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:heading -->
<h2 class="wp-block-heading">My Courses</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Pickum chordis dolor sit fretboard, consectetur scale-tur adipiscing neck. Solo elit string-tremolo, slide do re mi sed tempo eiusmod strumming aliqua.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"' . esc_url( $lmscourse_fse_img06 ) . '","id":19,"dimRatio":30,"overlayColor":"black","isUserOverlayColor":true,"minHeight":50,"minHeightUnit":"vh","contentPosition":"bottom left","sizeSlug":"full","style":{"spacing":{"blockGap":"var:preset|spacing|50"},"elements":{"link":{"color":{"text":"var:preset|color|ti-fg-alt"}}},"border":{"radius":"12px"}},"textColor":"ti-fg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left has-ti-fg-alt-color has-text-color has-link-color" style="border-radius:12px;min-height:50vh"><img class="wp-block-cover__image-background wp-image-19 size-full" alt="" src="' . esc_url( $lmscourse_fse_img06 ) . '" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-30 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size">Essential Guitar for Absolute Beginners</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><strong>Strum Ipsum</strong></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Enroll Now</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"' . esc_url( $lmscourse_fse_img05 ) . '","id":18,"dimRatio":30,"overlayColor":"black","isUserOverlayColor":true,"minHeight":50,"minHeightUnit":"vh","contentPosition":"bottom left","sizeSlug":"full","style":{"spacing":{"blockGap":"var:preset|spacing|50"},"elements":{"link":{"color":{"text":"var:preset|color|ti-fg-alt"}}},"border":{"radius":"12px"}},"textColor":"ti-fg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left has-ti-fg-alt-color has-text-color has-link-color" style="border-radius:12px;min-height:50vh"><img class="wp-block-cover__image-background wp-image-18 size-full" alt="" src="' . esc_url( $lmscourse_fse_img05 ) . '" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-30 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"left","level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-text-align-left has-x-large-font-size">Play Your First Songs (Beginner Songbook)</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><strong>Strum Ipsum</strong></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"border":{"radius":"12px"}}} -->
<div class="wp-block-buttons" style="border-radius:12px"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Enroll Now</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

',
);
