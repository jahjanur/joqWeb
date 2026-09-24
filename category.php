<?php
/**
 * Category archive.
 *
 * Everything is delegated to templates/newCategory.php, which emits its own
 * <head>/<body> and writes the page to the disk cache.
 *
 * This file used to carry a second, complete copy of the old category markup
 * behind `if (true) { ... } else { get_header(); ... get_footer(); }`. PHP could
 * never take that branch, but it held the only two get_header()/get_footer()
 * calls in the theme -- which is what kept the legacy header/footer system
 * wired in parallel with the current one. It is gone.
 */

get_template_part( 'templates/newCategory' );
