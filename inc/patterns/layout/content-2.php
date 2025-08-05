<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package lmscourse-fse
 * @since 1.0.0
 *
 * slug: content-2
 * title: Content 2
 * categories: LMSCourseFSE
 * keywords: content, columns
 */

use LMSCourseFSE\Assets_Manager;

$lmscourse_fse_img06 = Assets_Manager::get_image_url( 'theme-img-06.webp' );
$lmscourse_fse_img05 = Assets_Manager::get_image_url( 'theme-img-05.webp' );

return array(
	'title'      => __( 'Content 2', 'lmscourse-fse' ),
	'categories' => array( 'lmscourse-fse' ),
	'keywords'   => array( 'content', 'courses' ),
	'content'    => '

<!-- wp:group {"metadata":{"name":"content-2"},"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|80","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"left":"var:preset|spacing|40"}},"border":{"left":{"color":"var:preset|color|ti-accent","width":"8px"},"top":[],"right":[],"bottom":[]}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="border-left-color:var(--wp--preset--color--ti-accent);border-left-width:8px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"left","align":"wide","fontSize":"huge"} -->
<h2 class="wp-block-heading alignwide has-text-align-left has-huge-font-size">Courses</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"grid","minimumColumnWidth":"30rem"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":19,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="' . esc_url( $lmscourse_fse_img06 ) . '" alt="" class="wp-image-19" style="border-radius:12px;aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading">Essential Guitar for Absolute Beginners</h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"var:preset|spacing|30"}},"border":{"left":{"color":"var:preset|color|ti-accent","width":"4px"},"top":[],"right":[],"bottom":[]}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-left-color:var(--wp--preset--color--ti-accent);border-left-width:4px;padding-right:0;padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"fontSize":"normal"} -->
<p class="has-normal-font-size"><strong>Price: €49</strong> <em>(one-time purchase)</em></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p>Pickum chordis dolor sit fretboard, consectetur scale-tur adipiscing neck. Solo elit string-tremolo, slide do re mi sed tempo eiusmod strumming aliqua.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>15 lessons <strong>·</strong> PDF chord charts included</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button">Enroll Now</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":18,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="' . esc_url( $lmscourse_fse_img05 ) . '" alt="" class="wp-image-18" style="border-radius:12px;aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading">Play Your First Songs (Beginner Songbook)</h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"var:preset|spacing|30"}},"border":{"left":{"color":"var:preset|color|ti-accent","width":"4px"},"top":[],"right":[],"bottom":[]}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-left-color:var(--wp--preset--color--ti-accent);border-left-width:4px;padding-right:0;padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"fontSize":"normal"} -->
<p class="has-normal-font-size"><strong>Price: €49</strong> <em>(one-time purchase)</em></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p>Pickum chordis dolor sit fretboard, consectetur scale-tur adipiscing neck. Solo elit string-tremolo, slide do re mi sed tempo eiusmod strumming aliqua.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>15 lessons <strong>·</strong> PDF chord charts included</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button">Enroll Now</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

',
);
