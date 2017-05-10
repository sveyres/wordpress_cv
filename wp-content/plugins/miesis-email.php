<?php

/*
Plugin Name: miesis-email
Description: This is my first plugin.
Author: Miesis
Version: 0.1

*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

add_action('admin_menu', 'miesis_email_menu');

function miesis_email_menu() {
    add_menu_page('List of Emails', 'Emails', 'manage_options', 'miesis-email-menu', 'miesis_emails');
};

function miesis_emails(){
    echo '<p>Emails :</p>';
    echo '<a href="'.get_site_url().'/wp-content/plugins/telecharger.php">Télécharger</a>';
    global $wpdb;
    $myrows = $wpdb->get_results( "SELECT * FROM form" );
    foreach ($myrows as $row) {
        echo '<p>'.$row->email.'</p>';
    }

};








?>
