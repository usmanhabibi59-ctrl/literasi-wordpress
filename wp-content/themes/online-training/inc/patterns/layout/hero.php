<?php
/**
 * Pattern
 *
 * @package OnlineTraining
 * @since 1.0.0
 *
 * slug: hero
 * title: Hero
 * categories: online-training
 * keywords: hero
 */

$hero_img = get_template_directory_uri() . '/assets/images/hero.png';
$hero_bg  = get_template_directory_uri() . '/assets/images/hero-bg.png';

return array(
	'title'      => __( 'Hero', 'online-training' ),
	'categories' => array( 'online-training' ),
	'keywords'   => array( 'hero' ),
	'content'    => '
<!-- wp:group {"metadata":{"patternName":"online-training/hero","name":"Hero","categories":["online-training"]},"align":"full","style":{"color":{"gradient":"var(--wp--preset--color--heading-text) url(' . esc_url( $hero_bg ) . ') center center / cover no-repeat"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group alignfull has-background" style="background:var(--wp--preset--color--heading-text) url(' . esc_url( $hero_bg ) . ') center center / cover no-repeat;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:group {"style":{"spacing":{"blockGap":"12px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"var:custom|typography|line-height|flat"},"color":{"text":"var:preset|color|primary"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--primary);margin-top:0px;margin-bottom:0px;font-size:var(--wp--preset--font-size--large);line-height:var(--wp--custom--typography--line-height--flat)">—</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.16em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"ink-muted","fontSize":"x-small"} -->
<p class="has-ink-muted-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:0px;font-weight:600;letter-spacing:0.16em;text-transform:uppercase">Train with purpose. Live with strength.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":1,"style":{"typography":{"fontWeight":"700","lineHeight":"var:custom|typography|line-height|heading-tight","letterSpacing":"var:custom|typography|letter-spacing|heading"},"spacing":{"margin":{"bottom":"0px","top":"28px"}}},"textColor":"text-soft","fontSize":"heading-h1"} -->
<h1 class="wp-block-heading has-text-soft-color has-text-color has-heading-h-1-font-size" style="margin-top:28px;margin-bottom:0px;font-weight:700;letter-spacing:var(--wp--custom--typography--letter-spacing--heading);line-height:var(--wp--custom--typography--line-height--heading-tight)">Build a Body That <em style="font-family:var(--wp--preset--font-family--accent);color:var(--wp--preset--color--primary);font-style:italic;font-weight:400;">Performs.</em></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|body-loose"},"spacing":{"margin":{"bottom":"0px","top":"32px"}}},"textColor":"paragraph-text","fontSize":"large"} -->
<p class="has-paragraph-text-color has-text-color has-large-font-size" style="margin-top:32px;margin-bottom:0px;line-height:var(--wp--custom--typography--line-height--body-loose)">Personalized training, expert coaching, and structured courses designed to help you become stronger, healthier, and more confident — for life.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"40px","bottom":"0px"}}},"layout":{"type":"flex","justifyContent":"left","flexWrap":"wrap"}} -->
<div class="wp-block-buttons" style="margin-top:40px;margin-bottom:0px"><!-- wp:button {"backgroundColor":"primary","textColor":"white","style":{"border":{"radius":"50px"},"typography":{"fontWeight":"600","lineHeight":"var:custom|typography|line-height|button"},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"28px","right":"28px"}}},"fontSize":"medium"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background has-medium-font-size has-custom-font-size wp-element-button" href="#" style="border-radius:50px;padding-top:16px;padding-right:28px;padding-bottom:16px;padding-left:28px;font-weight:600;line-height:var(--wp--custom--typography--line-height--button)">Explore Courses →</a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"white","textColor":"heading-text","style":{"border":{"radius":"50px"},"typography":{"fontWeight":"600","lineHeight":"var:custom|typography|line-height|button"},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"28px","right":"28px"}}},"fontSize":"medium"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-heading-text-color has-white-background-color has-text-color has-background has-medium-font-size has-custom-font-size wp-element-button" href="#" style="border-radius:50px;padding-top:16px;padding-right:28px;padding-bottom:16px;padding-left:28px;font-weight:600;line-height:var(--wp--custom--typography--line-height--button)">Meet Your Coach</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.1em","textTransform":"uppercase","lineHeight":"var:custom|typography|line-height|flat"},"spacing":{"margin":{"bottom":"0px","top":"48px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-muted-text-color has-text-color has-x-small-font-size" style="margin-top:48px;margin-bottom:0px;font-weight:600;letter-spacing:0.1em;line-height:var(--wp--custom--typography--line-height--flat);text-transform:uppercase">15+ years coaching · 4,800+ transformations · 32 countries</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:45%"><!-- wp:image {"aspectRatio":"4/5","scale":"contain","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image" style="margin-top:0;margin-bottom:0"><img src="' . esc_url( $hero_img ) . '" alt="Female athlete performing a heavy barbell deadlift during strength training" style="aspect-ratio:4/5;object-fit:contain"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
',
);
