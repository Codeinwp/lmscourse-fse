<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package lmscourse-fse
 * @since 1.0.0
 *
 * slug: 404
 * title: 404 Error Page
 * categories: LMSCourseFSE
 * keywords: 404, error, not found
 */

use LMSCourseFSE\Assets_Manager;

$lmscourse_fse_img010 = Assets_Manager::get_image_url( 'theme-img-010.webp' );

return array(
	'title'      => __( '404 Error Page', 'lmscourse-fse' ),
	'categories' => array( 'lmscourse-fse' ),
	'keywords'   => array( '404', 'error', 'not found' ),
	'content'    => '

<!-- wp:cover {"url":"' . esc_url( $lmscourse_fse_img010 ) . '","id":29,"dimRatio":90,"overlayColor":"ti-bg-inv","isUserOverlayColor":true,"minHeight":60,"minHeightUnit":"vh","tagName":"main","sizeSlug":"large","align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|ti-fg-alt"}}}},"textColor":"ti-fg-alt"} -->
<main class="wp-block-cover alignfull has-ti-fg-alt-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0;min-height:60vh"><img class="wp-block-cover__image-background wp-image-29 size-large" alt="" src="' . esc_url( $lmscourse_fse_img010 ) . '" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-ti-bg-inv-background-color has-background-dim-90 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:0"><!-- wp:heading {"textAlign":"center","level":1,"fontSize":"huge"} -->
<h1 class="wp-block-heading has-text-align-center has-huge-font-size">404 - Page Not Found</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Unfortunately the page was not found!</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/">Back to Homepage</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></main>
<!-- /wp:cover -->

',
);
