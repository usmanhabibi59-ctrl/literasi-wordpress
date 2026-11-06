<?php
/**
 * Pattern
 *
 * @package OnlineTraining
 * @since 1.0.0
 *
 * slug: categories-disciplines
 * title: Categories - Pick Your Discipline
 * categories: online-training
 * keywords: categories
 */

$course_1 = get_template_directory_uri() . '/assets/images/course-1.jpg';
$course_2 = get_template_directory_uri() . '/assets/images/course-2.jpg';
$course_3 = get_template_directory_uri() . '/assets/images/course-3.jpg';
$course_4 = get_template_directory_uri() . '/assets/images/course-4.jpg';
$course_5 = get_template_directory_uri() . '/assets/images/course-5.jpg';
$course_6 = get_template_directory_uri() . '/assets/images/course-6.jpg';
$course_7 = get_template_directory_uri() . '/assets/images/course-7.jpg';
$course_8 = get_template_directory_uri() . '/assets/images/course-8.jpg';

return array(
	'title'      => __( 'Categories - Pick Your Discipline', 'online-training' ),
	'categories' => array( 'online-training' ),
	'keywords'   => array( 'categories' ),
	'content'    => '
<!-- wp:group {"metadata":{"patternName":"online-training/categories-disciplines","name":"Categories - Pick Your Discipline","categories":["online-training"]},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"background-dark","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group alignfull has-background-dark-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|flat"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","fontSize":"medium"} -->
<p class="has-primary-color has-text-color has-medium-font-size" style="margin-top:0px;margin-bottom:0px;line-height:var(--wp--custom--typography--line-height--flat)">──</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.14em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-muted-text-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:0px;font-weight:600;letter-spacing:0.14em;text-transform:uppercase">Categories</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"style":{"typography":{"fontWeight":"600","lineHeight":"var:custom|typography|line-height|heading-tight","letterSpacing":"-0.01em","fontStyle":"normal"},"spacing":{"margin":{"top":"24px"}}},"textColor":"heading-text","fontSize":"heading-h2","fontFamily":"accent"} -->
<h2 class="wp-block-heading has-heading-text-color has-text-color has-accent-font-family has-heading-h-2-font-size" style="margin-top:24px;font-style:normal;font-weight:600;letter-spacing:-0.01em;line-height:var(--wp--custom--typography--line-height--heading-tight)">Pick Your Discipline</h2>
<!-- /wp:heading -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"20px","top":"20px"},"margin":{"top":"48px"}}}} -->
<div class="wp-block-columns" style="margin-top:48px"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"' . esc_url( $course_1 ) . '","minHeight":330,"minHeightUnit":"px","customGradient":"linear-gradient(180deg,transparent 40%,color-mix(in srgb, var(--wp--preset--color--heading-text) 88%, transparent) 100%)","contentPosition":"bottom left","style":{"border":{"radius":"16px"},"spacing":{"padding":{"right":"0px","left":"0px","top":"0px","bottom":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="border-radius:16px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:330px"><img class="wp-block-cover__image-background" alt="" src="' . esc_url( $course_1 ) . '" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,transparent 40%,color-mix(in srgb, var(--wp--preset--color--heading-text) 88%, transparent) 100%)"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"6px","padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"400","lineHeight":"var:custom|typography|line-height|flat","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"text-soft","fontSize":"x-large","fontFamily":"accent"} -->
<h3 class="wp-block-heading has-text-soft-color has-text-color has-accent-font-family has-x-large-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:400;line-height:var(--wp--custom--typography--line-height--flat)"><a href="#" style="color:inherit;text-decoration:none">Strength</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.06em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:0px;font-weight:700;letter-spacing:0.06em;text-transform:uppercase">24 Lessons</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"' . esc_url( $course_5 ) . '","minHeight":330,"minHeightUnit":"px","customGradient":"linear-gradient(180deg,transparent 40%,color-mix(in srgb, var(--wp--preset--color--heading-text) 88%, transparent) 100%)","contentPosition":"bottom left","style":{"border":{"radius":"16px"},"spacing":{"padding":{"right":"0px","left":"0px","top":"0px","bottom":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="border-radius:16px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:330px"><img class="wp-block-cover__image-background" alt="" src="' . esc_url( $course_5 ) . '" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,transparent 40%,color-mix(in srgb, var(--wp--preset--color--heading-text) 88%, transparent) 100%)"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"6px","padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"400","lineHeight":"var:custom|typography|line-height|flat","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"text-soft","fontSize":"x-large","fontFamily":"accent"} -->
<h3 class="wp-block-heading has-text-soft-color has-text-color has-accent-font-family has-x-large-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:400;line-height:var(--wp--custom--typography--line-height--flat)"><a href="#" style="color:inherit;text-decoration:none">HIIT</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.06em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:0px;font-weight:700;letter-spacing:0.06em;text-transform:uppercase">16 Lessons</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"' . esc_url( $course_6 ) . '","minHeight":330,"minHeightUnit":"px","customGradient":"linear-gradient(180deg,transparent 40%,color-mix(in srgb, var(--wp--preset--color--heading-text) 88%, transparent) 100%)","contentPosition":"bottom left","style":{"border":{"radius":"16px"},"spacing":{"padding":{"right":"0px","left":"0px","top":"0px","bottom":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="border-radius:16px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:330px"><img class="wp-block-cover__image-background" alt="" src="' . esc_url( $course_6 ) . '" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,transparent 40%,color-mix(in srgb, var(--wp--preset--color--heading-text) 88%, transparent) 100%)"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"6px","padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"400","lineHeight":"var:custom|typography|line-height|flat","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"text-soft","fontSize":"x-large","fontFamily":"accent"} -->
<h3 class="wp-block-heading has-text-soft-color has-text-color has-accent-font-family has-x-large-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:400;line-height:var(--wp--custom--typography--line-height--flat)"><a href="#" style="color:inherit;text-decoration:none">Yoga</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.06em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:0px;font-weight:700;letter-spacing:0.06em;text-transform:uppercase">18 Lessons</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"' . esc_url( $course_4 ) . '","minHeight":330,"minHeightUnit":"px","customGradient":"linear-gradient(180deg,transparent 40%,color-mix(in srgb, var(--wp--preset--color--heading-text) 88%, transparent) 100%)","contentPosition":"bottom left","style":{"border":{"radius":"16px"},"spacing":{"padding":{"right":"0px","left":"0px","top":"0px","bottom":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="border-radius:16px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:330px"><img class="wp-block-cover__image-background" alt="" src="' . esc_url( $course_4 ) . '" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,transparent 40%,color-mix(in srgb, var(--wp--preset--color--heading-text) 88%, transparent) 100%)"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"6px","padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"400","lineHeight":"var:custom|typography|line-height|flat","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"text-soft","fontSize":"x-large","fontFamily":"accent"} -->
<h3 class="wp-block-heading has-text-soft-color has-text-color has-accent-font-family has-x-large-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:400;line-height:var(--wp--custom--typography--line-height--flat)"><a href="#" style="color:inherit;text-decoration:none">Mobility</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.06em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:0px;font-weight:700;letter-spacing:0.06em;text-transform:uppercase">21 Lessons</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"20px","top":"20px"},"margin":{"top":"20px"}}}} -->
<div class="wp-block-columns" style="margin-top:20px"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"' . esc_url( $course_8 ) . '","minHeight":330,"minHeightUnit":"px","customGradient":"linear-gradient(180deg,transparent 40%,color-mix(in srgb, var(--wp--preset--color--heading-text) 88%, transparent) 100%)","contentPosition":"bottom left","style":{"border":{"radius":"16px"},"spacing":{"padding":{"right":"0px","left":"0px","top":"0px","bottom":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="border-radius:16px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:330px"><img class="wp-block-cover__image-background" alt="" src="' . esc_url( $course_8 ) . '" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,transparent 40%,color-mix(in srgb, var(--wp--preset--color--heading-text) 88%, transparent) 100%)"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"6px","padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"400","lineHeight":"var:custom|typography|line-height|flat","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"text-soft","fontSize":"x-large","fontFamily":"accent"} -->
<h3 class="wp-block-heading has-text-soft-color has-text-color has-accent-font-family has-x-large-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:400;line-height:var(--wp--custom--typography--line-height--flat)"><a href="#" style="color:inherit;text-decoration:none">Pilates</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.06em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:0px;font-weight:700;letter-spacing:0.06em;text-transform:uppercase">14 Lessons</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"' . esc_url( $course_3 ) . '","minHeight":330,"minHeightUnit":"px","customGradient":"linear-gradient(180deg,transparent 40%,color-mix(in srgb, var(--wp--preset--color--heading-text) 88%, transparent) 100%)","contentPosition":"bottom left","style":{"border":{"radius":"16px"},"spacing":{"padding":{"right":"0px","left":"0px","top":"0px","bottom":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="border-radius:16px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:330px"><img class="wp-block-cover__image-background" alt="" src="' . esc_url( $course_3 ) . '" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,transparent 40%,color-mix(in srgb, var(--wp--preset--color--heading-text) 88%, transparent) 100%)"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"6px","padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"400","lineHeight":"var:custom|typography|line-height|flat","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"text-soft","fontSize":"x-large","fontFamily":"accent"} -->
<h3 class="wp-block-heading has-text-soft-color has-text-color has-accent-font-family has-x-large-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:400;line-height:var(--wp--custom--typography--line-height--flat)"><a href="#" style="color:inherit;text-decoration:none">Conditioning</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.06em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:0px;font-weight:700;letter-spacing:0.06em;text-transform:uppercase">19 Lessons</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"' . esc_url( $course_2 ) . '","minHeight":330,"minHeightUnit":"px","customGradient":"linear-gradient(180deg,transparent 40%,color-mix(in srgb, var(--wp--preset--color--heading-text) 88%, transparent) 100%)","contentPosition":"bottom left","style":{"border":{"radius":"16px"},"spacing":{"padding":{"right":"0px","left":"0px","top":"0px","bottom":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="border-radius:16px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:330px"><img class="wp-block-cover__image-background" alt="" src="' . esc_url( $course_2 ) . '" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,transparent 40%,color-mix(in srgb, var(--wp--preset--color--heading-text) 88%, transparent) 100%)"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"6px","padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"400","lineHeight":"var:custom|typography|line-height|flat","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"text-soft","fontSize":"x-large","fontFamily":"accent"} -->
<h3 class="wp-block-heading has-text-soft-color has-text-color has-accent-font-family has-x-large-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:400;line-height:var(--wp--custom--typography--line-height--flat)"><a href="#" style="color:inherit;text-decoration:none">Recovery</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.06em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:0px;font-weight:700;letter-spacing:0.06em;text-transform:uppercase">11 Lessons</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"' . esc_url( $course_7 ) . '","minHeight":330,"minHeightUnit":"px","customGradient":"linear-gradient(180deg,transparent 40%,color-mix(in srgb, var(--wp--preset--color--heading-text) 88%, transparent) 100%)","contentPosition":"bottom left","style":{"border":{"radius":"16px"},"spacing":{"padding":{"right":"0px","left":"0px","top":"0px","bottom":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="border-radius:16px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:330px"><img class="wp-block-cover__image-background" alt="" src="' . esc_url( $course_7 ) . '" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,transparent 40%,color-mix(in srgb, var(--wp--preset--color--heading-text) 88%, transparent) 100%)"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"6px","padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"400","lineHeight":"var:custom|typography|line-height|flat","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"text-soft","fontSize":"x-large","fontFamily":"accent"} -->
<h3 class="wp-block-heading has-text-soft-color has-text-color has-accent-font-family has-x-large-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:400;line-height:var(--wp--custom--typography--line-height--flat)"><a href="#" style="color:inherit;text-decoration:none">Meditation</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.06em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:0px;font-weight:700;letter-spacing:0.06em;text-transform:uppercase">12 Lessons</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
',
);
