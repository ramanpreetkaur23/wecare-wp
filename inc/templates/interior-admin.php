<h1>Interior Theme Options</h1>
<?php settings_errors(); ?>
<form method="post" action="options.php">
    <?php settings_fields( 'interior-settings-group' ); ?>
    <?php do_settings_sections( 'interior_custom' ); ?>
    <?php submit_button(); ?>
</form>