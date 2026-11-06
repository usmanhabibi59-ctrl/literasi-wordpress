<?php
/**
 * Pattern
 *
 * @package OnlineTraining
 * @since 1.0.0
 *
 * slug: philosophy
 * title: Philosophy
 * categories: online-training
 * keywords: philosophy
 */

$philosophy = get_template_directory_uri() . '/assets/images/philosophy.png';

return array(
	'title'      => __( 'Philosophy', 'online-training' ),
	'categories' => array( 'online-training' ),
	'keywords'   => array( 'philosophy' ),
	'content'    => '
<!-- wp:group {"metadata":{"patternName":"online-training/philosophy","name":"Philosophy","categories":["online-training"]},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"background-dark","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group alignfull has-background-dark-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":{"left":"80px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:50%"><!-- wp:image {"linkDestination":"none","style":{"border":{"radius":"24px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image has-custom-border" style="margin-top:0;margin-bottom:0"><img src="' . esc_url( $philosophy ) . '" alt="" style="border-radius:24px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"50%","style":{"spacing":{"padding":{"top":"24px"}}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-top:24px;flex-basis:50%"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|flat"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","fontSize":"medium"} -->
<p class="has-primary-color has-text-color has-medium-font-size" style="margin-top:0px;margin-bottom:0px;line-height:var(--wp--custom--typography--line-height--flat)">—</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.14em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-muted-text-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:0px;font-weight:600;letter-spacing:0.14em;text-transform:uppercase">Our philosophy</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"style":{"typography":{"fontWeight":"600","lineHeight":"var:custom|typography|line-height|heading-tight","letterSpacing":"-0.01em","fontStyle":"normal"},"spacing":{"margin":{"top":"28px","bottom":"28px"}}},"textColor":"heading-text","fontSize":"heading-h2","fontFamily":"accent"} -->
<h2 class="wp-block-heading has-heading-text-color has-text-color has-accent-font-family has-heading-h-2-font-size" style="margin-top:28px;margin-bottom:28px;font-style:normal;font-weight:600;letter-spacing:-0.01em;line-height:var(--wp--custom--typography--line-height--heading-tight)">Fitness Should Change More Than Your Physique.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|minor"},"spacing":{"margin":{"top":"0px","bottom":"48px"}}},"textColor":"muted-text","fontSize":"medium"} -->
<p class="has-muted-text-color has-text-color has-medium-font-size" style="margin-top:0px;margin-bottom:48px;line-height:var(--wp--custom--typography--line-height--minor)">Training is not about chasing exhaustion. It is about building a stronger relationship with your body, creating sustainable habits, and developing the confidence to perform at your best.</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"opacity":"css","className":"has-text-color has-stroke-color has-alpha-channel-opacity has-stroke-background-color has-background","style":{"spacing":{"margin":{"top":"24px","bottom":"24px"}}}} -->
<hr class="wp-block-separator has-css-opacity has-text-color has-stroke-color has-alpha-channel-opacity has-stroke-background-color has-background" style="margin-top:24px;margin-bottom:24px"/>
<!-- /wp:separator -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"32px"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"22px"} -->
<div class="wp-block-column" style="flex-basis:22px"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"2.42px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="margin-top:0px;margin-bottom:0px;font-weight:700;letter-spacing:2.42px">01</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"6px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"600","lineHeight":"var:custom|typography|line-height|flat","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"large","fontFamily":"accent"} -->
<h4 class="wp-block-heading has-heading-text-color has-text-color has-accent-font-family has-large-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600;line-height:var(--wp--custom--typography--line-height--flat)">Train Intelligently</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|minor","fontSize":"14px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px;line-height:var(--wp--custom--typography--line-height--minor)">Effort is only useful when it is aimed. Every block has a target and a measurable outcome.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"opacity":"css","className":"has-text-color has-stroke-color has-alpha-channel-opacity has-stroke-background-color has-background","style":{"spacing":{"margin":{"top":"24px","bottom":"24px"}}}} -->
<hr class="wp-block-separator has-css-opacity has-text-color has-stroke-color has-alpha-channel-opacity has-stroke-background-color has-background" style="margin-top:24px;margin-bottom:24px"/>
<!-- /wp:separator -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"32px"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"22px"} -->
<div class="wp-block-column" style="flex-basis:22px"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"2.42px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="margin-top:0px;margin-bottom:0px;font-weight:700;letter-spacing:2.42px">02</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"6px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"600","lineHeight":"var:custom|typography|line-height|flat","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"large","fontFamily":"accent"} -->
<h4 class="wp-block-heading has-heading-text-color has-text-color has-accent-font-family has-large-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600;line-height:var(--wp--custom--typography--line-height--flat)">Recover Completely</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|minor","fontSize":"14px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px;line-height:var(--wp--custom--typography--line-height--minor)">Sleep, deloads and nutrition are scheduled with the same seriousness as your heaviest session.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"opacity":"css","className":"has-text-color has-stroke-color has-alpha-channel-opacity has-stroke-background-color has-background","style":{"spacing":{"margin":{"top":"24px","bottom":"24px"}}}} -->
<hr class="wp-block-separator has-css-opacity has-text-color has-stroke-color has-alpha-channel-opacity has-stroke-background-color has-background" style="margin-top:24px;margin-bottom:24px"/>
<!-- /wp:separator -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"32px"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"22px"} -->
<div class="wp-block-column" style="flex-basis:22px"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"2.42px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="margin-top:0px;margin-bottom:0px;font-weight:700;letter-spacing:2.42px">03</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"6px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"600","lineHeight":"var:custom|typography|line-height|flat","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"large","fontFamily":"accent"} -->
<h4 class="wp-block-heading has-heading-text-color has-text-color has-accent-font-family has-large-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600;line-height:var(--wp--custom--typography--line-height--flat)">Progress Consistently</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|minor","fontSize":"14px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px;line-height:var(--wp--custom--typography--line-height--minor)">Small, repeatable increases over months beat heroic weeks you can\'t sustain.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"opacity":"css","className":"has-text-color has-stroke-color has-alpha-channel-opacity has-stroke-background-color has-background","style":{"spacing":{"margin":{"top":"24px","bottom":"24px"}}}} -->
<hr class="wp-block-separator has-css-opacity has-text-color has-stroke-color has-alpha-channel-opacity has-stroke-background-color has-background" style="margin-top:24px;margin-bottom:24px"/>
<!-- /wp:separator -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"40px","bottom":"0px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons" style="margin-top:40px;margin-bottom:0px"><!-- wp:button {"textColor":"heading-text","className":"is-style-link","style":{"typography":{"fontWeight":"600","fontSize":"14px"},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"color":{"background":"transparent"},"border":{"radius":"0px"}}} -->
<div class="wp-block-button is-style-link"><a class="wp-block-button__link has-heading-text-color has-text-color has-background has-custom-font-size wp-element-button" href="#" style="border-radius:0px;background-color:transparent;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-size:14px;font-weight:600">Discover Our Approach <mark style="background-color:rgba(0, 0, 0, 0);margin-left:4px" class="has-inline-color has-primary-color">→</mark></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
',
);
