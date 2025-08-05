<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package lmscourse-fse
 * @since 1.0.0
 *
 * slug: content-5
 * title: Content 5
 * categories: LMSCourseFSE
 * keywords: content, columns
 */

use LMSCourseFSE\Assets_Manager;

$lmscourse_fse_img07 = Assets_Manager::get_image_url( 'theme-img-07.webp' );

return array(
	'title'      => __( 'Content 5', 'lmscourse-fse' ),
	'categories' => array( 'lmscourse-fse' ),
	'keywords'   => array( 'content', 'columns','course' ),
	'content'    => '

<!-- wp:group {"metadata":{"name":"content-5"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|80"}},"backgroundColor":"ti-bg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-bg-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"grid","minimumColumnWidth":"25rem"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center"}} -->
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
<p><strong>Strum Ipsum</strong> <strong>·</strong> Strum Ipsum</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button">Enroll Now</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":21,"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="' . esc_url( $lmscourse_fse_img07 ) . '" alt="" class="wp-image-21" style="border-radius:8px;aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"27rem"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|40"},"border":{"radius":"8px"}},"backgroundColor":"ti-bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-ti-bg-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|ti-accent"}}}},"textColor":"ti-accent","fontSize":"small"} -->
<p class="has-ti-accent-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase"><strong>Strum Ipsum</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","level":3} -->
<h3 class="wp-block-heading has-text-align-left">Getting Started</h3>
<!-- /wp:heading -->

<!-- wp:list {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<ul style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)" class="wp-block-list"><!-- wp:list-item -->
<li>Strum Ipsum Dolor Sit Amet</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Strum Ipsum Dolor Sit Amet</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Strum Ipsum Dolor Sit Amet</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|40"},"border":{"radius":"8px"},"layout":{"columnSpan":1}},"backgroundColor":"ti-bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-ti-bg-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|ti-accent"}}}},"textColor":"ti-accent","fontSize":"small"} -->
<p class="has-ti-accent-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase"><strong>Strum Ipsum</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","level":3} -->
<h3 class="wp-block-heading has-text-align-left">Core Skills</h3>
<!-- /wp:heading -->

<!-- wp:list {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<ul style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)" class="wp-block-list"><!-- wp:list-item -->
<li>Strum Ipsum Dolor Sit Amet</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Strum Ipsum Dolor Sit Amet</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Strum Ipsum Dolor Sit Amet</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|40"},"border":{"radius":"8px"}},"backgroundColor":"ti-bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-ti-bg-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|ti-accent"}}}},"textColor":"ti-accent","fontSize":"small"} -->
<p class="has-ti-accent-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase"><strong>Strum Ipsum</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","level":3} -->
<h3 class="wp-block-heading has-text-align-left">Applying What You\'ve Learned</h3>
<!-- /wp:heading -->

<!-- wp:list {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<ul style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)" class="wp-block-list"><!-- wp:list-item -->
<li>Strum Ipsum Dolor Sit Amet</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Strum Ipsum Dolor Sit Amet</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Strum Ipsum Dolor Sit Amet</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|40"},"border":{"radius":"8px"}},"backgroundColor":"ti-bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-ti-bg-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|ti-accent"}}}},"textColor":"ti-accent","fontSize":"small"} -->
<p class="has-ti-accent-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase"><strong>Strum Ipsum</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","level":3} -->
<h3 class="wp-block-heading has-text-align-left">Final Project &amp; Next Steps</h3>
<!-- /wp:heading -->

<!-- wp:list {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<ul style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)" class="wp-block-list"><!-- wp:list-item -->
<li>Strum Ipsum Dolor Sit Amet</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Strum Ipsum Dolor Sit Amet</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Strum Ipsum Dolor Sit Amet</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

',
);