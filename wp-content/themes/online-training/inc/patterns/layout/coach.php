<?php
/**
 * Pattern
 *
 * @package OnlineTraining
 * @since 1.0.0
 *
 * slug: coach
 * title: Meet the Coach
 * categories: online-training
 * keywords: coach
 */

$coach = get_template_directory_uri() . '/assets/images/coach-stats.png';

return array(
	'title'      => __( 'Meet the Coach', 'online-training' ),
	'categories' => array( 'online-training' ),
	'keywords'   => array( 'coach' ),
	'content'    => '
<!-- wp:group {"metadata":{"patternName":"online-training/coach","name":"Meet the Coach","categories":["online-training"]},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"background-dark","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group alignfull has-background-dark-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"42%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:42%"><!-- wp:image {"aspectRatio":"5/6","scale":"cover","linkDestination":"none","style":{"border":{"radius":"22px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image has-custom-border" style="margin-top:0;margin-bottom:0"><img src="' . esc_url( $coach ) . '" alt="" style="border-radius:22px;aspect-ratio:5/6;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"58%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:58%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|flat"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","fontSize":"medium"} -->
<p class="has-primary-color has-text-color has-medium-font-size" style="margin-top:0px;margin-bottom:0px;line-height:var(--wp--custom--typography--line-height--flat)">──</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.14em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-muted-text-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:0px;font-weight:600;letter-spacing:0.14em;text-transform:uppercase">The coach</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"style":{"typography":{"fontWeight":"600","lineHeight":"var:custom|typography|line-height|heading-tight","letterSpacing":"-0.01em","fontStyle":"normal"},"spacing":{"margin":{"top":"24px","bottom":"16px"}}},"textColor":"heading-text","fontSize":"heading-h2","fontFamily":"accent"} -->
<h2 class="wp-block-heading has-heading-text-color has-text-color has-accent-font-family has-heading-h-2-font-size" style="margin-top:24px;margin-bottom:16px;font-style:normal;font-weight:600;letter-spacing:-0.01em;line-height:var(--wp--custom--typography--line-height--heading-tight)">Meet Alex Morgan</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.22em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:0px;font-weight:700;letter-spacing:0.22em;text-transform:uppercase">Founder &amp; Head Performance Coach</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|minor"},"spacing":{"margin":{"top":"28px","bottom":"32px"}}},"textColor":"muted-text","fontSize":"medium"} -->
<p class="has-muted-text-color has-text-color has-medium-font-size" style="margin-top:28px;margin-bottom:32px;line-height:var(--wp--custom--typography--line-height--minor)">Over the past 15 years, Alex has helped thousands of people build stronger bodies and healthier lives through structured training, intelligent progression, and sustainable coaching.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.22em","textTransform":"uppercase"},"spacing":{"padding":{"top":"8px","right":"14px","bottom":"8px","left":"14px"}},"border":{"radius":"999px"}},"backgroundColor":"secondary","textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-muted-text-color has-secondary-background-color has-text-color has-background has-x-small-font-size" style="border-radius:999px;padding-top:8px;padding-right:14px;padding-bottom:8px;padding-left:14px;font-weight:700;letter-spacing:0.22em;text-transform:uppercase">NASM-CPT</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.22em","textTransform":"uppercase"},"spacing":{"padding":{"top":"8px","right":"14px","bottom":"8px","left":"14px"}},"border":{"radius":"999px"}},"backgroundColor":"secondary","textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-muted-text-color has-secondary-background-color has-text-color has-background has-x-small-font-size" style="border-radius:999px;padding-top:8px;padding-right:14px;padding-bottom:8px;padding-left:14px;font-weight:700;letter-spacing:0.22em;text-transform:uppercase">CSCS</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.22em","textTransform":"uppercase"},"spacing":{"padding":{"top":"8px","right":"14px","bottom":"8px","left":"14px"}},"border":{"radius":"999px"}},"backgroundColor":"secondary","textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-muted-text-color has-secondary-background-color has-text-color has-background has-x-small-font-size" style="border-radius:999px;padding-top:8px;padding-right:14px;padding-bottom:8px;padding-left:14px;font-weight:700;letter-spacing:0.22em;text-transform:uppercase">Precision Nutrition L2</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.22em","textTransform":"uppercase"},"spacing":{"padding":{"top":"8px","right":"14px","bottom":"8px","left":"14px"}},"border":{"radius":"999px"}},"backgroundColor":"secondary","textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-muted-text-color has-secondary-background-color has-text-color has-background has-x-small-font-size" style="border-radius:999px;padding-top:8px;padding-right:14px;padding-bottom:8px;padding-left:14px;font-weight:700;letter-spacing:0.22em;text-transform:uppercase">Yoga Alliance RYT-500</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"40px","bottom":"0px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons" style="margin-top:40px;margin-bottom:0px"><!-- wp:button {"textColor":"heading-text","className":"is-style-link","style":{"typography":{"fontWeight":"600","fontSize":"14px"},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"color":{"background":"transparent"},"border":{"radius":"0px"}}} -->
<div class="wp-block-button is-style-link"><a href="#" class="wp-block-button__link has-heading-text-color has-text-color has-background has-custom-font-size wp-element-button" style="border-radius:0px;background-color:transparent;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-size:14px;font-weight:600">Learn More About Alex <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color">→</mark></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
',
);
