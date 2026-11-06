<?php
/**
 * Pattern
 *
 * @package OnlineTraining
 * @since 1.0.0
 *
 * slug: course-instructor
 * title: Course - Instructor
 * categories: online-training
 * keywords: courses
 */

$coach_image = get_template_directory_uri() . '/assets/images/avatar-3.jpg';

return array(
	'title'      => __( 'Course - Instructor', 'online-training' ),
	'categories' => array( 'online-training' ),
	'keywords'   => array( 'courses' ),
	'content'    => '
<!-- wp:group {"metadata":{"patternName":"online-training/course-instructor","name":"Course - Instructor","categories":["online-training"]},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"background-dark","layout":{"type":"constrained","contentSize":"820px"}} -->
<div class="wp-block-group alignfull has-background-dark-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"style":{"typography":{"fontWeight":"600","lineHeight":"var:custom|typography|line-height|heading-tight","letterSpacing":"-0.01em","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"xx-large","fontFamily":"accent"} -->
<h2 class="wp-block-heading has-heading-text-color has-text-color has-accent-font-family has-xx-large-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600;letter-spacing:-0.01em;line-height:var(--wp--custom--typography--line-height--heading-tight)">Your Instructor</h2>
<!-- /wp:heading -->

<!-- wp:columns {"verticalAlignment":"top","style":{"border":{"width":"1px","radius":{"topLeft":"24px","topRight":"24px","bottomLeft":"24px","bottomRight":"24px"}},"spacing":{"padding":{"top":"28px","right":"28px","bottom":"28px","left":"28px"},"blockGap":{"left":"28px"},"margin":{"top":"32px"}}},"backgroundColor":"background-light","borderColor":"stroke"} -->
<div class="wp-block-columns are-vertically-aligned-top has-border-color has-stroke-border-color has-background-light-background-color has-background" style="border-width:1px;border-top-left-radius:24px;border-top-right-radius:24px;border-bottom-left-radius:24px;border-bottom-right-radius:24px;margin-top:32px;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:column {"verticalAlignment":"top","width":"160px"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:160px"><!-- wp:image {"aspectRatio":"1","scale":"cover","linkDestination":"none","style":{"border":{"radius":{"topLeft":"24px","topRight":"24px","bottomLeft":"24px","bottomRight":"24px"}},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image has-custom-border" style="margin-top:0;margin-bottom:0"><img src="' . esc_url( $coach_image ) . '" alt="Elena Vos" style="border-top-left-radius:24px;border-top-right-radius:24px;border-bottom-left-radius:24px;border-bottom-right-radius:24px;aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","lineHeight":"var:custom|typography|line-height|flat","fontStyle":"normal","fontSize":"20px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"heading-text","fontFamily":"accent"} -->
<p class="has-heading-text-color has-text-color has-accent-font-family" style="margin-top:0px;margin-bottom:0px;font-size:20px;font-style:normal;font-weight:500;line-height:var(--wp--custom--typography--line-height--flat)">Elena Vos</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.22em","textTransform":"uppercase"},"spacing":{"margin":{"top":"8px","bottom":"0px"}}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="margin-top:8px;margin-bottom:0px;font-weight:700;letter-spacing:0.22em;text-transform:uppercase">Recovery &amp; Pilates Coach</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|minor","fontSize":"14px"},"spacing":{"margin":{"top":"16px","bottom":"0px"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:16px;margin-bottom:0px;font-size:14px;line-height:var(--wp--custom--typography--line-height--minor)">Ten years teaching mat and reformer Pilates, with a focus on rebuilding core control and pelvic stability for clients returning from injury or years of desk work.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px","margin":{"top":"20px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:20px"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.22em","textTransform":"uppercase"},"spacing":{"padding":{"right":"12px","left":"12px","top":"4px","bottom":"4px"}},"border":{"radius":"999px"}},"backgroundColor":"secondary","textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-muted-text-color has-secondary-background-color has-text-color has-background has-x-small-font-size" style="border-radius:999px;padding-top:4px;padding-right:12px;padding-bottom:4px;padding-left:12px;font-weight:700;letter-spacing:0.22em;text-transform:uppercase">NASM-CPT</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.22em","textTransform":"uppercase"},"spacing":{"padding":{"right":"12px","left":"12px","top":"4px","bottom":"4px"}},"border":{"radius":"999px"}},"backgroundColor":"secondary","textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-muted-text-color has-secondary-background-color has-text-color has-background has-x-small-font-size" style="border-radius:999px;padding-top:4px;padding-right:12px;padding-bottom:4px;padding-left:12px;font-weight:700;letter-spacing:0.22em;text-transform:uppercase">CSCS</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.22em","textTransform":"uppercase"},"spacing":{"padding":{"right":"12px","left":"12px","top":"4px","bottom":"4px"}},"border":{"radius":"999px"}},"backgroundColor":"secondary","textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-muted-text-color has-secondary-background-color has-text-color has-background has-x-small-font-size" style="border-radius:999px;padding-top:4px;padding-right:12px;padding-bottom:4px;padding-left:12px;font-weight:700;letter-spacing:0.22em;text-transform:uppercase">Precision Nutrition L2</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.22em","textTransform":"uppercase"},"spacing":{"padding":{"right":"12px","left":"12px","top":"4px","bottom":"4px"}},"border":{"radius":"999px"}},"backgroundColor":"secondary","textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-muted-text-color has-secondary-background-color has-text-color has-background has-x-small-font-size" style="border-radius:999px;padding-top:4px;padding-right:12px;padding-bottom:4px;padding-left:12px;font-weight:700;letter-spacing:0.22em;text-transform:uppercase">Yoga Alliance RYT-500</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"24px","bottom":"0px"}},"typography":{"fontSize":"14px","textDecoration":"none"},"elements":{"link":{"color":{"text":"var:preset|color|heading-text"}}}},"textColor":"heading-text"} -->
<p class="has-heading-text-color has-text-color has-link-color" style="margin-top:24px;margin-bottom:0px;font-size:14px;text-decoration:none"><a href="#">Read the full story</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
',
);
