<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package lmscourse-fse
 * @since 1.0.0
 *
 * slug: content-6
 * title: Content 6
 * categories: LMSCourseFSE
 * keywords: content, testimonials
 */

use LMSCourseFSE\Assets_Manager;

$lmscourse_fse_testimonial03 = Assets_Manager::get_image_url( 'testimonial-3.webp' );
$lmscourse_fse_testimonial04 = Assets_Manager::get_image_url( 'testimonial-4.webp' );

return array(
	'title'      => __( 'Content 6', 'lmscourse-fse' ),
	'categories' => array( 'lmscourse-fse' ),
	'keywords'   => array( 'content', 'course' ),
	'content'    => '

<!-- wp:group {"metadata":{"name":"Content-6"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|80"}},"backgroundColor":"ti-bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-bg-background-color has-background" id="modules" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"grid","minimumColumnWidth":"25rem"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|40"}},"border":{"left":{"color":"var:preset|color|ti-accent","width":"8px"},"top":[],"right":[],"bottom":[]}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-left-color:var(--wp--preset--color--ti-accent);border-left-width:8px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"style":{"typography":{"lineHeight":"1.1"}},"fontSize":"huge"} -->
<h2 class="wp-block-heading has-huge-font-size" style="line-height:1.1">What You\'ll Learn in This Course</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size">Pickum chordis dolor sit fretboard, consectetur scale-tur adipiscing neck. Solo elit string-tremolo, slide do re mi sed tempo eiusmod strumming aliqua.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"fontSize":"medium"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-medium-font-size has-custom-font-size wp-element-button" href="#enroll">Enroll Now!</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"id":92,"width":"100px","height":"100px","scale":"contain","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-default","style":{"border":{"radius":"100px"}}} -->
<figure class="wp-block-image aligncenter size-full is-resized has-custom-border is-style-default"><img src="' . esc_url( $lmscourse_fse_testimonial03 ) . '" alt="" class="wp-image-92" style="border-radius:100px;object-fit:contain;width:100px;height:100px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><em>“Pickum chordis dolor sit fretboard, consectetur scale-tur adipiscing neck. Solo elit string-tremolo, slide do re mi.”</em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|luminous-vivid-amber"}}}},"textColor":"luminous-vivid-amber","fontSize":"normal"} -->
<p class="has-text-align-left has-luminous-vivid-amber-color has-text-color has-link-color has-normal-font-size">★★★★★</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"}},"fontSize":"small"} -->
<p class="has-text-align-left has-small-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase">Student</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"id":238,"width":"100px","height":"100px","scale":"contain","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-default","style":{"border":{"radius":"100px"}}} -->
<figure class="wp-block-image aligncenter size-full is-resized has-custom-border is-style-default"><img src="' . esc_url( $lmscourse_fse_testimonial04 ) . '" alt="" class="wp-image-238" style="border-radius:100px;object-fit:contain;width:100px;height:100px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><em>“Pickum chordis dolor sit fretboard, consectetur scale-tur adipiscing neck. Solo elit string-tremolo, slide do re mi.”</em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|luminous-vivid-amber"}}}},"textColor":"luminous-vivid-amber","fontSize":"normal"} -->
<p class="has-text-align-left has-luminous-vivid-amber-color has-text-color has-link-color has-normal-font-size">★★★★★</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"}},"fontSize":"small"} -->
<p class="has-text-align-left has-small-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase">Student</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"align":"wide","layout":{"type":"grid","minimumColumnWidth":"22rem"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|40"},"border":{"radius":"8px"}},"backgroundColor":"ti-bg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-ti-bg-alt-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|ti-accent"}}}},"textColor":"ti-accent","fontSize":"small"} -->
<p class="has-ti-accent-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase">Module 1</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","level":3} -->
<h3 class="wp-block-heading has-text-align-left">Getting Started</h3>
<!-- /wp:heading -->

<!-- wp:list {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<ul style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)" class="wp-block-list"><!-- wp:list-item -->
<li>Understanding the fundamentals</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Overview of tools and materials needed</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Setting up for success: tips for beginners</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|40"},"border":{"radius":"8px"},"layout":{"columnSpan":1}},"backgroundColor":"ti-bg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-ti-bg-alt-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|ti-accent"}}}},"textColor":"ti-accent","fontSize":"small"} -->
<p class="has-ti-accent-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase">Module 2</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","level":3} -->
<h3 class="wp-block-heading has-text-align-left">Core Skills</h3>
<!-- /wp:heading -->

<!-- wp:list {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<ul style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)" class="wp-block-list"><!-- wp:list-item -->
<li>Step-by-step guide to basic techniques</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Simple practice exercises to build confidence</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Avoiding common beginner mistakes</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|40"},"border":{"radius":"8px"}},"backgroundColor":"ti-bg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-ti-bg-alt-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|ti-accent"}}}},"textColor":"ti-accent","fontSize":"small"} -->
<p class="has-ti-accent-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase">Module 3</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","level":3} -->
<h3 class="wp-block-heading has-text-align-left">Applying What You\'ve Learned</h3>
<!-- /wp:heading -->

<!-- wp:list {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<ul style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)" class="wp-block-list"><!-- wp:list-item -->
<li>Small guided project to apply your skills</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Best practices for improving consistency</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Quick self-assessment exercises</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|40"},"border":{"radius":"8px"}},"backgroundColor":"ti-bg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-ti-bg-alt-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|ti-accent"}}}},"textColor":"ti-accent","fontSize":"small"} -->
<p class="has-ti-accent-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase">Module 4</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","level":3} -->
<h3 class="wp-block-heading has-text-align-left">Final Project &amp; Next Steps</h3>
<!-- /wp:heading -->

<!-- wp:list {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<ul style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)" class="wp-block-list"><!-- wp:list-item -->
<li>Complete a beginner-friendly final project</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Review and progress tracking</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Tips for continuing to learn after finishing the course</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

',
);
