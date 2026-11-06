<?php
/**
 * Pattern
 *
 * @package OnlineTraining
 * @since 1.0.0
 *
 * slug: 404
 * title: 404
 * categories: online-training
 * keywords: 404
 */

$home_url = home_url( '/' );

return array(
	'title'      => __( '404', 'online-training' ),
	'categories' => array( 'online-training' ),
	'keywords'   => array( '404' ),
	'content'    => '

<!-- wp:group {"tagName":"section","metadata":{"name":"404 Page","patternName":"online-training/404","categories":["online-training"]},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background-light","layout":{"type":"constrained","wideSize":"800px"}} -->
<section class="wp-block-group alignfull has-background-light-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1,"className":"wp-block-heading has-text-align-center has-heading-h2-font-size","style":{"typography":{"fontWeight":"700","lineHeight":"var:custom|typography|line-height|heading","letterSpacing":"var:custom|typography|letter-spacing|heading","fontStyle":"normal","textAlign":"center"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary","fontSize":"heading-h2","fontFamily":"accent"} -->
<h1 class="wp-block-heading has-text-align-center has-heading-h2-font-size has-primary-color has-text-color has-accent-font-family has-heading-h-2-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:700;letter-spacing:var(--wp--custom--typography--letter-spacing--heading);line-height:var(--wp--custom--typography--line-height--heading)">404 – Page Not Found</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center","letterSpacing":"0.1px"},"elements":{"link":{"color":{"text":"var:preset|color|muted-text"}}}},"textColor":"muted-text"} -->
<p class="has-text-align-center has-muted-text-color has-text-color has-link-color" style="letter-spacing:0.1px">Unfortunately the page was not found! Head back to the homepage to continue exploring our articles and resources.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0"><!-- wp:button {"backgroundColor":"primary","textColor":"white","className":"is-style-fill","style":{"border":{"radius":"99px"},"spacing":{"padding":{"top":"13px","bottom":"13px","left":"28px","right":"28px"}},"typography":{"fontWeight":"600","letterSpacing":"var:custom|typography|letter-spacing|heading-xs"}},"fontSize":"small"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background has-small-font-size has-custom-font-size wp-element-button" href="' . esc_url( $home_url ) . '" style="border-radius:99px;padding-top:13px;padding-right:28px;padding-bottom:13px;padding-left:28px;font-weight:600;letter-spacing:var(--wp--custom--typography--letter-spacing--heading-xs)">Back To Homepage</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
',
);
