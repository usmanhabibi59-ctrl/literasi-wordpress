<?php
/**
 * Pattern
 *
 * @package OnlineTraining
 * @since 1.0.0
 *
 * slug: cta
 * title: CTA
 * categories: online-training
 * keywords: cta, call to action
 */

$section_bg = get_template_directory_uri() . '/assets/images/cta-bg.png';

return array(
	'title'      => __( 'CTA', 'online-training' ),
	'categories' => array( 'online-training' ),
	'keywords'   => array( 'cta', 'call to action' ),
	'content'    => '
<!-- wp:group {"metadata":{"patternName":"online-training/cta","name":"CTA","categories":["online-training"]},"align":"full","style":{"color":{"gradient":"var(--wp--preset--color--heading-text) url(' . esc_url( $section_bg ) . ') center center / cover no-repeat"},"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group alignfull has-background" style="background:var(--wp--preset--color--heading-text) url(' . esc_url( $section_bg ) . ') center center / cover no-repeat;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|flat"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","fontSize":"medium"} -->
<p class="has-primary-color has-text-color has-medium-font-size" style="margin-top:0px;margin-bottom:0px;line-height:var(--wp--custom--typography--line-height--flat)">──</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.14em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"ink-muted","fontSize":"x-small"} -->
<p class="has-ink-muted-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:0px;font-weight:600;letter-spacing:0.14em;text-transform:uppercase">Start today</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"style":{"typography":{"fontWeight":"600","lineHeight":"var:custom|typography|line-height|heading-tight","letterSpacing":"-0.01em","textAlign":"center","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"text-soft","fontSize":"heading-h1","fontFamily":"accent"} -->
<h2 class="wp-block-heading has-text-align-center has-text-soft-color has-text-color has-accent-font-family has-heading-h-1-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600;letter-spacing:-0.01em;line-height:var(--wp--custom--typography--line-height--heading-tight)"><strong>Your Strongest Chapter </strong><em style="font-family:var(--wp--preset--font-family--accent);color:var(--wp--preset--color--primary);font-style:italic;font-weight:400;">Starts Here.</em></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|minor","textAlign":"center"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"paragraph-text","fontSize":"medium"} -->
<p class="has-text-align-center has-paragraph-text-color has-text-color has-medium-font-size" style="margin-top:0px;margin-bottom:0px;line-height:var(--wp--custom--typography--line-height--minor)">Stop guessing. Start training with a plan built around progress.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"0px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:0px"><!-- wp:button {"backgroundColor":"primary","textColor":"white","style":{"border":{"radius":"50px"},"typography":{"fontWeight":"700","fontSize":"14px"},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"28px","right":"28px"}}}} -->
<div class="wp-block-button"><a href="#" class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background has-custom-font-size wp-element-button" style="border-radius:50px;padding-top:16px;padding-right:28px;padding-bottom:16px;padding-left:28px;font-size:14px;font-weight:700">Start Your Journey</a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"heading-text","textColor":"white","style":{"border":{"width":"1px","radius":"50px","color":"color-mix(in srgb, var(--wp--preset--color--background-light) 25%, transparent)"},"typography":{"fontWeight":"700","fontSize":"14px"},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"28px","right":"28px"}}}} -->
<div class="wp-block-button"><a href="#" class="wp-block-button__link has-white-color has-heading-text-background-color has-text-color has-background has-border-color has-custom-font-size wp-element-button" style="border-color:color-mix(in srgb, var(--wp--preset--color--background-light) 25%, transparent);border-width:1px;border-radius:50px;padding-top:16px;padding-right:28px;padding-bottom:16px;padding-left:28px;font-size:14px;font-weight:700">Explore Courses</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
',
);
