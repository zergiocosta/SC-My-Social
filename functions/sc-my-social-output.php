<?php
add_action( 'wp_footer', 'main_sc_my_social' );
function main_sc_my_social() { ?>
    <header class="sc-my-social-list">
        <div class="container">
            <ul> <?php
                $sc_facebook = get_option( 'sc_facebook' );
                if ( $sc_facebook ) { ?>
                    <li>
                        <a href="<?php echo $sc_facebook; ?>" title="Facebook - <?php echo get_bloginfo( 'name' ); ?>" target="_blank">
                            <i class="icon-sc-facebook"></i>
                        </a>
                    </li> <?php
                }
                $sc_twitter= get_option( 'sc_twitter' );
                if ( $sc_twitter) { ?>
                    <li>
                        <a href="<?php echo $sc_twitter; ?>" title="Twitter - <?php echo get_bloginfo( 'name' ); ?>" target="_blank">
                            <i class="icon-sc-twitter"></i>
                        </a>
                    </li> <?php
                }
                $sc_github= get_option( 'sc_github' );
                if ( $sc_github) { ?>
                    <li>
                        <a href="<?php echo $sc_github; ?>" title="Github - <?php echo get_bloginfo( 'name' ); ?>" target="_blank">
                            <i class="icon-sc-github-circled"></i>
                        </a>
                    </li> <?php
                }
                $sc_instagram= get_option( 'sc_instagram' );
                if ( $sc_instagram) { ?>
                    <li>
                        <a href="<?php echo $sc_instagram; ?>" title="Instagram - <?php echo get_bloginfo( 'name' ); ?>" target="_blank">
                            <i class="icon-sc-instagram"></i>
                        </a>
                    </li> <?php
                }
                $sc_pinterest= get_option( 'sc_pinterest' );
                if ( $sc_pinterest) { ?>
                    <li>
                        <a href="<?php echo $sc_pinterest; ?>" title="Pinterest - <?php echo get_bloginfo( 'name' ); ?>" target="_blank">
                            <i class="icon-sc-pinterest"></i>
                        </a>
                    </li> <?php
                }
                $sc_tumblr= get_option( 'sc_tumblr' );
                if ( $sc_tumblr) { ?>
                    <li>
                        <a href="<?php echo $sc_tumblr; ?>" title="Tumblr - <?php echo get_bloginfo( 'name' ); ?>" target="_blank">
                            <i class="icon-sc-tumblr"></i>
                        </a>
                    </li> <?php
                }
                $sc_linkedin= get_option( 'sc_linkedin' );
                if ( $sc_linkedin) { ?>
                    <li>
                        <a href="<?php echo $sc_linkedin; ?>" title="LinkedIn - <?php echo get_bloginfo( 'name' ); ?>" target="_blank">
                            <i class="icon-sc-linkedin"></i>
                        </a>
                    </li> <?php
                }
                $sc_youtube= get_option( 'sc_youtube' );
                if ( $sc_youtube) { ?>
                    <li>
                        <a href="<?php echo $sc_youtube; ?>" title="Pinterest - <?php echo get_bloginfo( 'name' ); ?>" target="_blank">
                            <i class="icon-sc-youtube-play"></i>
                        </a>
                    </li> <?php
                }
                $sc_vimeo= get_option( 'sc_vimeo' );
                if ( $sc_vimeo) { ?>
                    <li>
                        <a href="<?php echo $sc_vimeo; ?>" title="Pinterest - <?php echo get_bloginfo( 'name' ); ?>" target="_blank">
                            <i class="icon-sc-vimeo"></i>
                        </a>
                    </li> <?php
                }
                $sc_gplus= get_option( 'sc_gplus' );
                if ( $sc_gplus) { ?>
                    <li>
                        <a href="<?php echo $sc_gplus; ?>" title="G+ - <?php echo get_bloginfo( 'name' ); ?>" target="_blank">
                            <i class="icon-sc-gplus"></i>
                        </a>
                    </li> <?php
                }
                $sc_fivehundredpx= get_option( 'sc_fivehundredpx' );
                if ( $sc_fivehundredpx) { ?>
                    <li>
                        <a href="<?php echo $sc_fivehundredpx; ?>" title="500px - <?php echo get_bloginfo( 'name' ); ?>" target="_blank">
                            <i class="icon-sc-fivehundredpx"></i>
                        </a>
                    </li> <?php
                }
                $sc_wordpress= get_option( 'sc_wordpress' );
                if ( $sc_wordpress) { ?>
                    <li>
                        <a href="<?php echo $sc_wordpress; ?>" title="WordPress - <?php echo get_bloginfo( 'name' ); ?>" target="_blank">
                            <i class="icon-sc-wordpress"></i>
                        </a>
                    </li> <?php
                }
                $sc_blogger= get_option( 'sc_blogger' );
                if ( $sc_blogger) { ?>
                    <li>
                        <a href="<?php echo $sc_blogger; ?>" title="Blogger - <?php echo get_bloginfo( 'name' ); ?>" target="_blank">
                            <i class="icon-sc-blogger"></i>
                        </a>
                    </li> <?php
                } ?>
            </ul>
        </div>
    </header> <?php
} ?>