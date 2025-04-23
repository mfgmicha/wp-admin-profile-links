<?php
/**
 * Plugin Name:     Admin Profile Links
 * Plugin URI:      https://github.com/mfgmicha/wp-admin-profile-link
 * Description:     Adds links to the current author page in the admin bar.
 * Author:          Micha Krapp <micha@mfgmicha.de>
 * Author URI:      https://mfgmicha.de/
 * Text Domain:     admin-profile-links
 * Domain Path:     /languages
 * Version:         1.0.0
 * License:         GPLv2 or later
 * License URI:     https://www.gnu.org/licenses/gpl-2.0.html
 */

class Admin_Profile_Links  {
    public static function add_profile_links( WP_Admin_Bar $wp_admin_bar ): void {
        $profile_link_data = [
            'id'    => 'apl_show_profile_link',
            'title' => esc_html__( 'View User', 'default' ),
            'href'  => get_author_posts_url( get_current_user_id() ),
        ];

        // Add link to show user when on profile edit page.
        if ( is_admin() && get_current_screen()?->id === 'profile' ) {
            $wp_admin_bar->add_node( $profile_link_data );
        }

        // Add link to show user in user actions dropdown.
        $wp_admin_bar->add_node(
            array_merge(
                $profile_link_data,
                [
                    'parent' => 'user-actions',
                    'id' => 'apl_user-actions_show_profile_link'
                ]
            )
        );

        // Re-add the logout node, so that it is the last item.
        $logout_node = $wp_admin_bar->get_node( 'logout' );
        if ( $logout_node ) {
            $wp_admin_bar->remove_node( 'logout' );
            $wp_admin_bar->add_node( $logout_node );
        }
    }
}

add_action( 'admin_bar_menu', [ Admin_Profile_Links::class, 'add_profile_links' ], 80 );
