<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?>
		<footer class="site-footer" class="source-org vcard copyright" role="contentinfo">
			&copy; <?php
		  $fromYear = of_get_option('meta_copyright');
		  $thisYear = (int)date('Y');
		  echo $fromYear . (($fromYear != $thisYear) ? '–' . $thisYear : ' '); echo bloginfo('name'); ?>
		</footer>
	</div>

	<?php wp_footer(); ?>

<!-- jQuery is called via the WordPress-friendly way via functions.php -->

<!-- this is where we put our custom functions -->
<script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script>

</body>

</html>
