<?php
/**
 * Pattern
 *
 * @package OnlineTraining
 * @since 1.0.0
 *
 * slug: header
 * title: Header
 * categories: online-training
 * keywords: header
 */

return array(
	'title'      => __( 'Header', 'online-training' ),
	'categories' => array( 'online-training' ),
	'keywords'   => array( 'header' ),
	'content'    => '
<!-- wp:group {"tagName":"header","metadata":{"patternName":"online-training/header","name":"Header","categories":["online-training"]},"align":"full","className":"site-header","style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"background-dark","layout":{"type":"constrained","contentSize":"1240px"}} -->
<header class="wp-block-group alignfull site-header has-background-dark-background-color has-background" style="padding-top:24px;padding-right:var(--wp--preset--spacing--50);padding-bottom:24px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-text"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-text","fontSize":"large","fontFamily":"accent"} -->
<p class="has-heading-text-color has-text-color has-link-color has-accent-font-family has-large-font-size" style="font-style:normal;font-weight:600"><a href="/" style="text-decoration:none"><strong>Online Training</strong><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color">.</mark></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:navigation {"textColor":"muted-text","style":{"typography":{"fontWeight":"500"},"spacing":{"blockGap":"34px"}},"fontSize":"small","layout":{"type":"flex","justifyContent":"center","flexWrap":"nowrap"}} -->
<!-- wp:navigation-link {"label":"Home","url":"/"} /-->

<!-- wp:navigation-link {"label":"About","url":"#"} /-->

<!-- wp:navigation-link {"label":"Courses","url":"#"} /-->

<!-- wp:navigation-link {"label":"Categories","url":"#"} /-->

<!-- wp:navigation-link {"label":"Blog","url":"#"} /-->

<!-- wp:navigation-link {"label":"Contact","url":"#"} /-->
<!-- /wp:navigation -->

<!-- wp:group {"className":"header-actions","style":{"spacing":{"blockGap":"22px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"right"}} -->
<div class="wp-block-group header-actions"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"small"} -->
<p class="has-heading-text-color has-text-color has-small-font-size" style="margin-top:0px;margin-bottom:0px;font-weight:500"><a href="#" style="text-decoration:none;color:inherit">Login</a></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"heading-text","textColor":"white","style":{"border":{"radius":"50px"},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"500"},"spacing":{"padding":{"top":"14px","bottom":"14px","left":"26px","right":"26px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-heading-text-background-color has-text-color has-background has-custom-font-size wp-element-button" href="#" style="border-radius:50px;padding-top:14px;padding-right:26px;padding-bottom:14px;padding-left:26px;font-size:var(--wp--preset--font-size--small);font-weight:500">Start Training</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></header>
<!-- /wp:group -->
',
);
