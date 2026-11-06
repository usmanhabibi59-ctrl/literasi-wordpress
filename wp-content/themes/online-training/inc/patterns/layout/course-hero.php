<?php
/**
 * Pattern
 *
 * @package OnlineTraining
 * @since 1.0.0
 *
 * slug: course-hero
 * title: Course - Hero
 * categories: online-training
 * keywords: courses
 */

$course_image = get_template_directory_uri() . '/assets/images/course-trailer.png';

return array(
	'title'      => __( 'Course - Hero', 'online-training' ),
	'categories' => array( 'online-training' ),
	'keywords'   => array( 'courses' ),
	'content'    => '
<!-- wp:group {"metadata":{"patternName":"online-training/course-hero","name":"Course - Hero","categories":["online-training"]},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"heading-text","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group alignfull has-heading-text-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:group {"style":{"spacing":{"blockGap":"12px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"var:custom|typography|line-height|flat"},"color":{"text":"var:preset|color|primary"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--primary);margin-top:0px;margin-bottom:0px;font-size:var(--wp--preset--font-size--large);line-height:var(--wp--custom--typography--line-height--flat)">—</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.14em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"ink-muted","fontSize":"x-small"} -->
<p class="has-ink-muted-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:0px;font-weight:600;letter-spacing:0.14em;text-transform:uppercase">Mobility · 8 Weeks · All Levels</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"style":{"typography":{"fontWeight":"700","lineHeight":"0.95","letterSpacing":"-0.04em"},"spacing":{"margin":{"top":"28px","bottom":"28px"}}},"textColor":"text-soft","fontSize":"heading-h1"} -->
<h2 class="wp-block-heading has-text-soft-color has-text-color has-heading-h-1-font-size" style="margin-top:28px;margin-bottom:28px;font-weight:700;letter-spacing:-0.04em;line-height:0.95">Pilates Core Method</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|minor","fontSize":"16px"},"spacing":{"margin":{"top":"22px","bottom":"0px"}}},"textColor":"ink-muted"} -->
<p class="has-ink-muted-color has-text-color" style="margin-top:22px;margin-bottom:0px;font-size:16px;line-height:var(--wp--custom--typography--line-height--minor)">Mat and reformer-inspired sequencing that rebuilds deep core control, pelvic stability, and postural endurance.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"28px","margin":{"top":"30px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:30px"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"14px"}},"textColor":"text-soft"} -->
<p class="has-text-soft-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px">Elena Vos</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"14px"}},"textColor":"ink-muted"} -->
<p class="has-ink-muted-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px"><span style="color:var(--wp--preset--color--primary)">★★★★★</span> 4.7</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"14px"}},"textColor":"ink-muted"} -->
<p class="has-ink-muted-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px">884 students</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"14px"}},"textColor":"ink-muted"} -->
<p class="has-ink-muted-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px">Mat Only</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"40px"}},"blockGap":"14px"},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
<div class="wp-block-buttons" style="margin-top:40px"><!-- wp:button {"backgroundColor":"primary","textColor":"white","style":{"border":{"radius":"999px"},"typography":{"fontWeight":"600","fontSize":"14px"},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"30px","right":"30px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background has-custom-font-size wp-element-button" href="#" style="border-radius:999px;padding-top:16px;padding-right:30px;padding-bottom:16px;padding-left:30px;font-size:14px;font-weight:600">Enroll Now — $69</a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"text-soft","className":"is-style-outline","style":{"border":{"width":"1px","radius":"999px","color":"color-mix(in srgb, var(--wp--preset--color--white) 25%, transparent)"},"typography":{"fontWeight":"600","fontSize":"14px"},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"30px","right":"30px"}}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-soft-color has-text-color has-border-color has-custom-font-size wp-element-button" href="#" style="border-color:color-mix(in srgb, var(--wp--preset--color--white) 25%, transparent);border-width:1px;border-radius:999px;padding-top:16px;padding-right:30px;padding-bottom:16px;padding-left:30px;font-size:14px;font-weight:600">Preview the LMS</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","linkDestination":"none","style":{"border":{"radius":"24px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image has-custom-border" style="margin-top:0;margin-bottom:0"><img src="' . esc_url( $course_image ) . '" alt="Pilates Core Method course preview" style="border-radius:24px;aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
',
);
