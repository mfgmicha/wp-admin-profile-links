<?php
/**
 * Class SampleTest
 *
 * @package Admin_Profile_Links
 */

/**
 * Sample test case.
 */
class AdminProfileLinksTest extends WP_UnitTestCase {

    public function test_add_profile_links() {
        //WP_Admin_Bar::initialize();
        $wp_admin_bar = new WP_Admin_Bar();

        Admin_Profile_Links::add_profile_links( $wp_admin_bar );

        //TODO: check that the links have been addded
        $this->assertTrue( true );
    }
}
