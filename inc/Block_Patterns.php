<?php
/**
 * Patterns Handler.
 *
 * @author Themeisle
 * @package lmscourse-fse
 * @since 1.0.0
 */

namespace LMSCourseFSE;

use WP_Block_Pattern_Categories_Registry;

/**
 * Class Block_Patterns
 *
 * @package lmscourse-fse
 */
class Block_Patterns {

	/**
	 * Patterns categories.
	 *
	 * @var array
	 */
	private $categories = array();
	/**
	 * The patterns array.
	 *
	 * These use the file names without termination inside the `inc/patterns` directory.
	 *
	 * @var array
	 */
	private $patterns = array();

	/**
	 * Block_Patterns constructor.
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'run' ) );
	}

	/**
	 * Run the class functionality.
	 *
	 * @return void
	 */
	public function run() {
		$this->setup_properties();
		$this->register_categories();
		$this->register_patterns();
	}

	/**
	 * Setup class properties.
	 *
	 * @return void
	 */
	private function setup_properties() {
		$categories = array(
			'lmscourse-fse'         => array(
				'label'       => __( 'LMSCourse FSE Patterns', 'lmscourse-fse' ),
				'description' => __( 'Patterns for several sections and components', 'lmscourse-fse' ),
			),
			'lmscourse-fse-layouts' => array(
				'label'       => __( 'LMSCourse FSE Layouts', 'lmscourse-fse' ),
				'description' => __( 'Full-page layouts that can be used as templates', 'lmscourse-fse' ),
			),
		);

		$patterns = array(
			// layout templates patterns.
			'templates/single-post-cover-boxed',
			'templates/single-post-cover',
			'templates/archive-cover',
			'templates/archive-list',
			'templates/404',

			// layout patterns.
			'layout/content-1',
			'layout/content-2',
			'layout/content-3',
			'layout/content-4',
			'layout/content-5',
			'layout/content-6',
			'layout/content-7',
			'layout/content-8',
			'layout/content-9',
			'layout/cta-1',
			'layout/cta-2',
			'layout/cta-3',
			'layout/faqs-1',
			'layout/features-1',
			'layout/features-2',
			'layout/hero-1',
			'layout/hero-2',
			'layout/pricing-1',
			'layout/pricing-2',
			'layout/stats-1',
			'layout/stats-2',
			'layout/testimonials-1',
			'layout/testimonials-2',
			'layout/testimonials-3',

			// Post patterns.
			'loops/posts-1',
			'loops/posts-2',
			'loops/posts-3',
			'loops/posts-4',

			// Page title patterns.
			'page_titles/page-title-1',
			'page_titles/page-title-2',
		);

		$this->categories = apply_filters( 'lmscourse_fse_block_patterns_categories', $categories );
		$this->patterns   = apply_filters( 'lmscourse_fse_block_patterns', $patterns );
	}

	/**
	 * Register block patterns categories.
	 *
	 * @return void
	 */
	private function register_categories() {
		foreach ( $this->categories as $slug => $args ) {
			if ( WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $slug ) ) {
				continue;
			}

			register_block_pattern_category( $slug, $args );
		}
	}

	/**
	 * Register Patterns.
	 *
	 * @return void
	 */
	private function register_patterns() {
		foreach ( $this->patterns as $pattern ) {
			$file = LMSCOURSE_FSE_DIR . 'inc/patterns/' . $pattern . '.php';

			if ( ! is_file( $file ) ) {
				continue;
			}

			register_block_pattern( 'lmscourse-fse/' . $pattern, require $file );
		}
	}
}
