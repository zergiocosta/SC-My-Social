<?php
// create custom plugin settings menu
add_action('admin_menu', 'sc_my_social_create_menu');

function sc_my_social_create_menu() {

    //create new top-level menu
    add_menu_page('SC MY SOCIAL', 'SC My Social', 'administrator', __FILE__, 'sc_my_social_settings_page', 'dashicons-share' );

    //call register settings function
    add_action( 'admin_init', 'register_sc_my_social_settings' );
}


function register_sc_my_social_settings() {
    //register our settings
    register_setting( 'sc-my-social-settings-group', 'sc_facebook' );
    register_setting( 'sc-my-social-settings-group', 'sc_twitter' );
    register_setting( 'sc-my-social-settings-group', 'sc_github' );
    register_setting( 'sc-my-social-settings-group', 'sc_instagram' );
    register_setting( 'sc-my-social-settings-group', 'sc_pinterest' );
    register_setting( 'sc-my-social-settings-group', 'sc_tumblr' );
    register_setting( 'sc-my-social-settings-group', 'sc_linkedin' );
    register_setting( 'sc-my-social-settings-group', 'sc_youtube' );
    register_setting( 'sc-my-social-settings-group', 'sc_vimeo' );
    register_setting( 'sc-my-social-settings-group', 'sc_gplus' );
    register_setting( 'sc-my-social-settings-group', 'sc_fivehundredpx' );
    register_setting( 'sc-my-social-settings-group', 'sc_wordpress' );
    register_setting( 'sc-my-social-settings-group', 'sc_blogger' );
}

function sc_my_social_settings_page() { ?>
    <div class="wrap sc-my-social-page container">
        <div class="col-md-8 col-md-offset-2">
            <h1>SC My Social Configuration</h1>

            <hr>

            <form method="post" action="options.php">
                <?php settings_fields( 'sc-my-social-settings-group' ); ?>
                <?php do_settings_sections( 'sc-my-social-settings-group' ); ?>

                <div class="row">

                    <div class="form-group col-md-6">
                        <label for="sc_facebook"><i class="icon-sc-facebook"></i> Facebook</label>
                        <input type="text" id="sc_facebook" class="form-control" name="sc_facebook" placeholder="https://www.facebook.com/my_user" value="<?php echo esc_attr( get_option('sc_facebook')); ?>" />
                    </div>

                    <div class="form-group col-md-6">
                        <label for="sc_twitter"><i class="icon-sc-twitter"></i> Twitter</label>
                        <input type="text" id="sc_twitter" class="form-control" name="sc_twitter" placeholder="https://www.twitter.com/my_user" value="<?php echo esc_attr( get_option('sc_twitter')); ?>" />
                    </div>

                    <div class="form-group col-md-6">
                        <label for="sc_github"><i class="icon-sc-github-circled"></i> Github</label>
                        <input type="text" id="sc_github" class="form-control" name="sc_github" placeholder="https://www.github.com/my_user" value="<?php echo esc_attr( get_option('sc_github')); ?>" />
                    </div>

                    <div class="form-group col-md-6">
                        <label for="sc_instagram"><i class="icon-sc-instagram"></i> Instagram</label>
                        <input type="text" id="sc_instagram" class="form-control" name="sc_instagram" placeholder="https://www.instagram.com/my_user" value="<?php echo esc_attr( get_option('sc_instagram')); ?>" />
                    </div>

                    <div class="form-group col-md-6">
                        <label for="sc_pinterest"><i class="icon-sc-pinterest"></i> Pinterest</label>
                        <input type="text" id="sc_pinterest" class="form-control" name="sc_pinterest" placeholder="https://www.pinterest.com/my_user" value="<?php echo esc_attr( get_option('sc_pinterest')); ?>" />
                    </div>

                    <div class="form-group col-md-6">
                        <label for="sc_tumblr"><i class="icon-sc-tumblr"></i> Tumblr</label>
                        <input type="text" id="sc_tumblr" class="form-control" name="sc_tumblr" placeholder="https://my_user.tumblr.com" value="<?php echo esc_attr( get_option('sc_tumblr')); ?>" />
                    </div>

                    <div class="form-group col-md-6">
                        <label for="sc_linkedin"><i class="icon-sc-linkedin"></i> LinkedIn</label>
                        <input type="text" id="sc_linkedin" class="form-control" name="sc_linkedin" placeholder="https://www.linkedin.com/in/my_user" value="<?php echo esc_attr( get_option('sc_linkedin')); ?>" />
                    </div>

                    <div class="form-group col-md-6">
                        <label for="sc_youtube"><i class="icon-sc-youtube-play"></i> YouTube</label>
                        <input type="text" id="sc_youtube" class="form-control" name="sc_youtube" placeholder="https://www.youtube.com/my_user" value="<?php echo esc_attr( get_option('sc_youtube')); ?>" />
                    </div>

                    <div class="form-group col-md-6">
                        <label for="sc_vimeo"><i class="icon-sc-vimeo"></i> Vimeo</label>
                        <input type="text" id="sc_vimeo" class="form-control" name="sc_vimeo" placeholder="https://www.vimeo.com/my_user" value="<?php echo esc_attr( get_option('sc_vimeo')); ?>" />
                    </div>

                    <div class="form-group col-md-6">
                        <label for="sc_gplus"><i class="icon-sc-gplus"></i> Google Plus</label>
                        <input type="text" id="sc_gplus" class="form-control" name="sc_gplus" placeholder="https://plus.twitter.com/+my_user" value="<?php echo esc_attr( get_option('sc_gplus')); ?>" />
                    </div>

                    <div class="form-group col-md-6">
                        <label for="sc_fivehundredpx"><i class="icon-sc-fivehundredpx"></i> 500px</label>
                        <input type="text" id="sc_fivehundredpx" class="form-control" name="sc_fivehundredpx" placeholder="https://www.500px.com/my_user" value="<?php echo esc_attr( get_option('sc_fivehundredpx')); ?>" />
                    </div>

                    <div class="form-group col-md-6">
                        <label for="sc_wordpress"><i class="icon-sc-wordpress"></i> WordPress</label>
                        <input type="text" id="sc_wordpress" class="form-control" name="sc_wordpress" placeholder="https://profiles.wordpress.org/my_user" value="<?php echo esc_attr( get_option('sc_wordpress')); ?>" />
                    </div>

                    <div class="form-group col-md-6">
                        <label for="sc_blogger"><i class="icon-sc-blogger"></i> Blogger</label>
                        <input type="text" id="sc_blogger" class="form-control" name="sc_blogger" placeholder="https://www.blogger.com/profile/my_user" value="<?php echo esc_attr( get_option('sc_blogger')); ?>" />
                    </div>

                </div>

                <?php submit_button(); ?>

            </form>
        </div>
    </div>
<?php } ?>