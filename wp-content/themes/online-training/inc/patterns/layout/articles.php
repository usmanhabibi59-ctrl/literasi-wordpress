<?php
/**
 * Pattern
 *
 * @package OnlineTraining
 * @since 1.0.0
 *
 * slug: articles
 * title: Articles
 * categories: online-training
 * keywords: articles
 */

$course_1 = get_template_directory_uri() . '/assets/images/course-1.jpg';
$course_2 = get_template_directory_uri() . '/assets/images/course-2.jpg';
$course_3 = get_template_directory_uri() . '/assets/images/course-3.jpg';
$course_4 = get_template_directory_uri() . '/assets/images/course-4.jpg';

return array(
	'title'      => __( 'Articles', 'online-training' ),
	'categories' => array( 'online-training' ),
	'keywords'   => array( 'articles' ),
	'content'    => '
<!-- wp:group {"metadata":{"patternName":"online-training/articles","name":"Articles","categories":["online-training"]},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"background-dark","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group alignfull has-background-dark-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"margin":{"bottom":"56px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-bottom" style="margin-bottom:56px"><!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:group {"style":{"spacing":{"blockGap":"14px"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.14em","textTransform":"uppercase","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-muted-text-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600;letter-spacing:0.14em;text-transform:uppercase"><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color">──</mark> Training · Nutrition · Recovery · Mobility · Mindset</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"style":{"typography":{"fontWeight":"600","lineHeight":"var:custom|typography|line-height|heading-tight","letterSpacing":"-0.01em","fontStyle":"normal"},"spacing":{"margin":{"bottom":"0px","top":"24px"}}},"textColor":"heading-text","fontSize":"heading-h2","fontFamily":"accent"} -->
<h2 class="wp-block-heading has-heading-text-color has-text-color has-accent-font-family has-heading-h-2-font-size" style="margin-top:24px;margin-bottom:0px;font-style:normal;font-weight:600;letter-spacing:-0.01em;line-height:var(--wp--custom--typography--line-height--heading-tight)">The Training Journal</h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"260px"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:260px"><!-- wp:buttons {"className":"online-training-articles-btn","layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons online-training-articles-btn"><!-- wp:button {"textColor":"heading-text","className":"is-style-link","style":{"typography":{"fontWeight":"600","fontSize":"14px"},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"color":{"background":"transparent"},"border":{"radius":"0px"}}} -->
<div class="wp-block-button is-style-link"><a href="#" class="wp-block-button__link has-heading-text-color has-text-color has-background has-custom-font-size wp-element-button" style="border-radius:0px;background-color:transparent;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-size:14px;font-weight:600">Explore All Articles <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color">→</mark></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"50px","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"14px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"14px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image size-full has-custom-border" style="margin-top:0;margin-bottom:0"><a href="#"><img src="' . esc_url( $course_1 ) . '" alt="" style="border-radius:14px;aspect-ratio:4/3;object-fit:cover"/></a></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.22em","textTransform":"uppercase"},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"12px"}}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:12px;font-weight:700;letter-spacing:0.22em;text-transform:uppercase">Training</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","lineHeight":"var:custom|typography|line-height|card-title","letterSpacing":"-0.01em","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"large","fontFamily":"accent"} -->
<h3 class="wp-block-heading has-heading-text-color has-text-color has-accent-font-family has-large-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600;letter-spacing:-0.01em;line-height:var(--wp--custom--typography--line-height--card-title)"><a href="#" style="color:inherit;text-decoration:none">How to Build Strength Without Training Every Day</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|minor","fontSize":"14px"},"spacing":{"margin":{"top":"12px","bottom":"20px"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:12px;margin-bottom:20px;font-size:14px;line-height:var(--wp--custom--typography--line-height--minor)">Three well-structured sessions a week outperform six unfocused ones. Here is…</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|flat","fontSize":"12px"},"spacing":{"margin":{"top":"6px","bottom":"0px"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:6px;margin-bottom:0px;font-size:12px;line-height:var(--wp--custom--typography--line-height--flat)">Alex Morgan · 12 August 2026 · 7 min read</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"14px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"14px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image size-full has-custom-border" style="margin-top:0;margin-bottom:0"><a href="#"><img src="' . esc_url( $course_2 ) . '" alt="" style="border-radius:14px;aspect-ratio:4/3;object-fit:cover"/></a></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.22em","textTransform":"uppercase"},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"12px"}}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:12px;font-weight:700;letter-spacing:0.22em;text-transform:uppercase">Recovery</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","lineHeight":"var:custom|typography|line-height|card-title","letterSpacing":"-0.01em","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"large","fontFamily":"accent"} -->
<h3 class="wp-block-heading has-heading-text-color has-text-color has-accent-font-family has-large-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600;letter-spacing:-0.01em;line-height:var(--wp--custom--typography--line-height--card-title)"><a href="#" style="color:inherit;text-decoration:none">Why Recovery Is Part of Your Training</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|minor","fontSize":"14px"},"spacing":{"margin":{"top":"12px","bottom":"20px"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:12px;margin-bottom:20px;font-size:14px;line-height:var(--wp--custom--typography--line-height--minor)">Sleep, deloads, and easy days are not rewards for hard work. They are the…</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|flat","fontSize":"12px"},"spacing":{"margin":{"top":"6px","bottom":"0px"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:6px;margin-bottom:0px;font-size:12px;line-height:var(--wp--custom--typography--line-height--flat)">Elena Vos · 4 August 2026 · 6 min read</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"14px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"14px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image size-full has-custom-border" style="margin-top:0;margin-bottom:0"><a href="#"><img src="' . esc_url( $course_3 ) . '" alt="" style="border-radius:14px;aspect-ratio:4/3;object-fit:cover"/></a></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.22em","textTransform":"uppercase"},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"12px"}}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:12px;font-weight:700;letter-spacing:0.22em;text-transform:uppercase">Training</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","lineHeight":"var:custom|typography|line-height|card-title","letterSpacing":"-0.01em","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"large","fontFamily":"accent"} -->
<h3 class="wp-block-heading has-heading-text-color has-text-color has-accent-font-family has-large-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600;letter-spacing:-0.01em;line-height:var(--wp--custom--typography--line-height--card-title)"><a href="#" style="color:inherit;text-decoration:none">The Beginner\'s Guide to Progressive Overload</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|minor","fontSize":"14px"},"spacing":{"margin":{"top":"12px","bottom":"20px"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:12px;margin-bottom:20px;font-size:14px;line-height:var(--wp--custom--typography--line-height--minor)">Adding weight is only one of five levers. Learn the others and your progress sto…</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|flat","fontSize":"12px"},"spacing":{"margin":{"top":"6px","bottom":"0px"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:6px;margin-bottom:0px;font-size:12px;line-height:var(--wp--custom--typography--line-height--flat)">Marcus Feld · 27 July 2026 · 9 min read</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"14px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"14px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image size-full has-custom-border" style="margin-top:0;margin-bottom:0"><a href="#"><img src="' . esc_url( $course_4 ) . '" alt="" style="border-radius:14px;aspect-ratio:4/3;object-fit:cover"/></a></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.22em","textTransform":"uppercase"},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"12px"}}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:12px;font-weight:700;letter-spacing:0.22em;text-transform:uppercase">Mobility</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","lineHeight":"var:custom|typography|line-height|card-title","letterSpacing":"-0.01em","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"large","fontFamily":"accent"} -->
<h3 class="wp-block-heading has-heading-text-color has-text-color has-accent-font-family has-large-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600;letter-spacing:-0.01em;line-height:var(--wp--custom--typography--line-height--card-title)"><a href="#" style="color:inherit;text-decoration:none">5 Mobility Habits That Improve Every Workout</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|minor","fontSize":"14px"},"spacing":{"margin":{"top":"12px","bottom":"20px"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:12px;margin-bottom:20px;font-size:14px;line-height:var(--wp--custom--typography--line-height--minor)">Ten focused minutes before you lift will do more for your positions than an hour…</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|flat","fontSize":"12px"},"spacing":{"margin":{"top":"6px","bottom":"0px"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:6px;margin-bottom:0px;font-size:12px;line-height:var(--wp--custom--typography--line-height--flat)">Priya Raman · 19 July 2026 · 5 min read</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
',
);
