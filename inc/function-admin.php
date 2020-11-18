<!-- 
//Faceboook handle
//@email
//@phone 
// address -> TextBox
// timing
// logo
 -->

<?php

/*
     ========================================
            ADMIN PAGE
     ========================================
*/

function interior_add_admin_page(){

    // Generate Interior Admin Page
    add_menu_page( 'Interior Theme Options', 'Interior', 'manage_options','interior_custom',
                    'interior_theme_settings_page', 'dashicons-admin-customizer', 110 );

    // Generate Interior Admin Sub Pages
    add_submenu_page( 'interior_custom', 'Interior Settings', 'Settings', 'manage_options',
'interior_custom', 'interior_theme_settings_page' );
    add_submenu_page( 'interior_custom', 'Interior CSS Options', 'Custom CSS', 'manage_options',
'interior_custom_css', 'interior_theme_css_page' );

    //Activate custom settings
    add_action( 'admin_init', 'interior_custom_settings');

}
add_action('admin_menu', 'interior_add_admin_page');

function interior_custom_settings(){
    register_setting('interior-settings-group', 'contact_number');
    register_setting('interior-settings-group', 'facebook_handler');
    register_setting('interior-settings-group', 'email_handler');
    register_setting('interior-settings-group', 'timings');
    register_setting('interior-settings-group', 'address');

    add_settings_section( 'interior-sidebar-options', 'General Options', 'interior_sidebar_options', 'interior_custom' );

    add_settings_field( 'interior-contact-number', 'Contact Number', 'interior_contact_number', 'interior_custom', 'interior-sidebar-options' );
    add_settings_field( 'interior-facebook-handler', 'Facebook', 'interior_facebook_handler', 'interior_custom', 'interior-sidebar-options' );
    add_settings_field( 'interior-email-handler', 'Email', 'interior_email_handler', 'interior_custom', 'interior-sidebar-options' );
    add_settings_field( 'interior-timings', 'Timings', 'interior_timings', 'interior_custom', 'interior-sidebar-options' );
    add_settings_field( 'interior-address', 'Address', 'interior_address', 'interior_custom', 'interior-sidebar-options' );

}

function interior_contact_number(){
    $contact = esc_attr( get_option( 'contact_number' ) );
    echo '<input type="number" name="contact_number" placeholder="Number" value="'.$contact.'" />';
}

function interior_facebook_handler(){
    $facebook = esc_attr( get_option( 'facebook_handler' ) );
    echo '<input type="text" name="facebook_handler" placeholder="Facebook Link" value="'.$facebook.'" />';
}

function interior_email_handler(){
    $email = esc_attr( get_option( 'email_handler' ) );
    echo '<input type="email" name="email_handler" placeholder="Email Address" value="'.$email.'" />';
}

function interior_timings(){
    $timings = esc_attr( get_option( 'timings' ) );
    echo '<input type="text" name="timings" placeholder="Timings" value="'.$timings.'" />';
}

function interior_address(){
    $address = esc_attr( get_option( 'address' ) );
    echo '<textarea rows="3" cols="50" name="address"  placeholder="" >'.$address.'</textarea>';
}


function interior_sidebar_options(){
   echo  'Custom General Options';
}

function interior_theme_settings_page(){

  require_once( get_template_directory(). '/inc/templates/interior-admin.php');

}

function interior_theme_css_page(){
    //generation of our admin page
}

