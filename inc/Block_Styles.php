<?php
/**
 * Block Styles Handler.
 *
 * @author Themeisle
 * @package lmscourse-fse
 * @since 1.0.0
 */

namespace LMSCourseFSE;

/**
 * Class Block_Styles
 *
 * @package lmscourse-fse
 */
class Block_Styles {
	/**
	 * Block styles.
	 *
	 * @var \array[][] | void
	 */
	private $styles;

	/**
	 * Block Styles constructor.
	 */
	public function __construct() {
		$this->styles = array();
		add_action( 'init', array( $this, 'run' ) );
	}

	/**
	 * Run the class functionality.
	 *
	 * @return void
	 */
	public function run() {
		$this->add_block_styles();
	}

	/**
	 * Add the block styles.
	 *
	 * @return void
	 */
	public function add_block_styles() {
		foreach ( $this->styles as $block => $styles ) {
			foreach ( $styles as $block_style ) {
				register_block_style( $block, $block_style );
			}
		}
	}
}
