<?php
/**
 * Title: Starter section
 * Slug: leitvia-child/content-starter
 * Categories: text
 * Description: Example pattern of the child theme with an eyebrow, a heading and a short text in the reading width. Copy it to start a pattern of your own.
 * Keywords: example, starter, child theme, text
 * Viewport Width: 1400
 *
 * @package LeitviaChild
 */

?>
<!-- wp:group {"metadata":{"name":"Starter section"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
	<p class="is-style-eyebrow"><?php esc_html_e( 'Your child theme', 'leitvia-child' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"fontSize":"heading-l"} -->
	<h2 class="wp-block-heading has-heading-l-font-size"><?php esc_html_e( 'Patterns of your own, safe from theme updates.', 'leitvia-child' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"textColor":"ink-muted"} -->
	<p class="has-ink-muted-color has-text-color"><?php esc_html_e( 'This section shows the shape of a pattern in the child theme: role presets for colors, sizes and spacing, a header with title, slug, categories and description, and an entry in the contract of the child theme.', 'leitvia-child' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
