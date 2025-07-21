<?php
/**
 * Class Test_Loading
 *
 * @package lmscourse-fse
 */

class Test_Loading extends WP_UnitTestCase {
	/**
	 * Test Constants.
	 */
	public function testConstants() {
		$this->assertTrue( defined( 'LMSCOURSE_FSE_VERSION' ) );
		$this->assertTrue( defined( 'LMSCOURSE_FSE_DEBUG' ) );
		$this->assertTrue( defined( 'LMSCOURSE_FSE_DIR' ) );
		$this->assertTrue( defined( 'LMSCOURSE_FSE_URL' ) );
	}

	/**
	 * Make sure debug is false.
	 */
	public function testDebugOff() {
		$this->assertEquals( LMSCOURSE_FSE_DEBUG, WP_DEBUG );
	}

	/**
	 * Make sure Core is loaded.
	 *
	 * @return void
	 */
	public function testCoreLoaded() {
		$this->assertTrue( class_exists( 'LMSCourseFSE\Core', false ) );
	}
}