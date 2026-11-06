<?php
/**
 * Pattern
 *
 * @package OnlineTraining
 * @since 1.0.0
 *
 * slug: courses
 * title: Courses
 * categories: online-training
 * keywords: courses
 */

$course_1 = get_template_directory_uri() . '/assets/images/course-1.jpg';
$course_3 = get_template_directory_uri() . '/assets/images/course-3.jpg';
$course_4 = get_template_directory_uri() . '/assets/images/course-4.jpg';
$course_5 = get_template_directory_uri() . '/assets/images/course-5.jpg';
$course_6 = get_template_directory_uri() . '/assets/images/course-6.jpg';
$course_7 = get_template_directory_uri() . '/assets/images/course-7.jpg';

return array(
	'title'      => __( 'Courses', 'online-training' ),
	'categories' => array( 'online-training' ),
	'keywords'   => array( 'courses' ),
	'content'    => '
<!-- wp:group {"metadata":{"patternName":"online-training/courses","name":"Courses","categories":["online-training"]},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"background-light","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group alignfull has-background-light-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"margin":{"bottom":"56px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-bottom" style="margin-bottom:56px"><!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|flat"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","fontSize":"medium"} -->
<p class="has-primary-color has-text-color has-medium-font-size" style="margin-top:0px;margin-bottom:0px;line-height:var(--wp--custom--typography--line-height--flat)">──</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.14em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-muted-text-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:0px;font-weight:600;letter-spacing:0.14em;text-transform:uppercase">Structured training</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"style":{"typography":{"fontWeight":"600","lineHeight":"var:custom|typography|line-height|heading-tight","letterSpacing":"-0.01em","fontStyle":"normal"},"spacing":{"margin":{"bottom":"0px","top":"24px"}}},"textColor":"heading-text","fontSize":"heading-h2","fontFamily":"accent"} -->
<h2 class="wp-block-heading has-heading-text-color has-text-color has-accent-font-family has-heading-h-2-font-size" style="margin-top:24px;margin-bottom:0px;font-style:normal;font-weight:600;letter-spacing:-0.01em;line-height:var(--wp--custom--typography--line-height--heading-tight)">Choose Your Path</h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"200px"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:200px"><!-- wp:buttons {"className":"online-training-courses-btn","layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons online-training-courses-btn"><!-- wp:button {"textColor":"heading-text","className":"is-style-link","style":{"typography":{"fontWeight":"600","fontSize":"14px"},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"color":{"background":"transparent"},"border":{"radius":"0px"}}} -->
<div class="wp-block-button is-style-link"><a class="wp-block-button__link has-heading-text-color has-text-color has-background has-custom-font-size wp-element-button" href="#" style="border-radius:0px;background-color:transparent;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-size:14px;font-weight:600">All 12 courses <mark style="background-color:rgba(0, 0, 0, 0);margin-left:4px" class="has-inline-color has-primary-color">↗</mark></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"margin":{"bottom":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns" style="margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"16px","color":"var:preset|color|stroke","width":"1px"},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0"}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-white-background-color has-background" style="border-color:var(--wp--preset--color--stroke);border-width:1px;border-radius:16px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"' . esc_url( $course_1 ) . '","id":14,"dimRatio":0,"customOverlayColor":"#47433c","isUserOverlayColor":false,"minHeight":270,"minHeightUnit":"px","contentPosition":"top left","sizeSlug":"full","style":{"border":{"radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"padding":{"top":"16px","right":"0px","bottom":"0px","left":"16px"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-cover has-custom-content-position is-position-top-left" style="border-top-left-radius:16px;border-top-right-radius:16px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;margin-top:0;margin-bottom:0;padding-top:16px;padding-right:0px;padding-bottom:0px;padding-left:16px;min-height:270px"><img class="wp-block-cover__image-background wp-image-14 size-full" alt="" src="' . esc_url( $course_1 ) . '" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#47433c"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"5px","bottom":"5px","left":"12px","right":"12px"},"blockGap":"7px"},"border":{"width":"1px","radius":"999px"}},"backgroundColor":"heading-text","borderColor":"heading-text","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group has-border-color has-heading-text-border-color has-heading-text-background-color has-background" style="border-width:1px;border-radius:999px;padding-top:5px;padding-right:12px;padding-bottom:5px;padding-left:12px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"9px","fontWeight":"600","textTransform":"uppercase","fontStyle":"normal","letterSpacing":"2px","lineHeight":"1.7"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"text-soft"} -->
<p class="has-text-soft-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:9px;font-style:normal;font-weight:600;letter-spacing:2px;line-height:1.7;text-transform:uppercase">Strength</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"},"blockGap":"16px"},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"16px","bottomRight":"16px"}}},"backgroundColor":"background-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-light-background-color has-background" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:16px;border-bottom-right-radius:16px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:group {"style":{"spacing":{"blockGap":"12px","margin":{"bottom":"24px"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="margin-bottom:24px"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.22em"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-muted-text-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:0px;font-weight:600;letter-spacing:0.22em;text-transform:uppercase">8 Weeks · Beginner</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","lineHeight":"var:custom|typography|line-height|flat","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"large","fontFamily":"accent"} -->
<h3 class="wp-block-heading has-heading-text-color has-text-color has-accent-font-family has-large-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600;line-height:var(--wp--custom--typography--line-height--flat)">Strength Foundations</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6","fontSize":"14px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px;line-height:1.6">Build strength, improve technique, and establish sustainable training habits with a progressive three-day barbell framework.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"20px","bottom":"20px"}}}} -->
<hr class="wp-block-separator has-alpha-channel-opacity" style="margin-top:20px;margin-bottom:20px"/>
<!-- /wp:separator -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"0"},"margin":{"bottom":"24px"}}}} -->
<div class="wp-block-columns" style="margin-bottom:24px"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.22em","textTransform":"uppercase","textAlign":"center"},"spacing":{"margin":{"top":"0px","bottom":"2px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-text-align-center has-muted-text-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:2px;font-weight:600;letter-spacing:0.22em;text-transform:uppercase">Lessons</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontStyle":"normal","textAlign":"center"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"medium","fontFamily":"accent"} -->
<p class="has-text-align-center has-heading-text-color has-text-color has-accent-font-family has-medium-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600">24</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"online-training-col-border","style":{"border":{"left":{"color":"var:preset|color|stroke","width":"1px"}}}} -->
<div class="wp-block-column online-training-col-border" style="border-left-color:var(--wp--preset--color--stroke);border-left-width:1px"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.22em","textAlign":"center"},"spacing":{"margin":{"top":"0px","bottom":"2px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-text-align-center has-muted-text-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:2px;font-weight:600;letter-spacing:0.22em;text-transform:uppercase">Workouts</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontStyle":"normal","textAlign":"center"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"medium","fontFamily":"accent"} -->
<p class="has-text-align-center has-heading-text-color has-text-color has-accent-font-family has-medium-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600">24</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"online-training-col-border","style":{"border":{"left":{"color":"var:preset|color|stroke","width":"1px"}}}} -->
<div class="wp-block-column online-training-col-border" style="border-left-color:var(--wp--preset--color--stroke);border-left-width:1px"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.22em","textAlign":"center"},"spacing":{"margin":{"top":"0px","bottom":"2px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-text-align-center has-muted-text-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:2px;font-weight:600;letter-spacing:0.22em;text-transform:uppercase">Rating</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontStyle":"normal","textAlign":"center"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"medium","fontFamily":"accent"} -->
<p class="has-text-align-center has-heading-text-color has-text-color has-accent-font-family has-medium-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600">4.9</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"large","fontFamily":"accent"} -->
<p class="has-heading-text-color has-text-color has-accent-font-family has-large-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600">$89</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text","fontSize":"x-small","fontFamily":"accent"} -->
<p class="has-muted-text-color has-text-color has-accent-font-family has-x-small-font-size" style="margin-top:0px;margin-bottom:0px">one-time</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background-light","textColor":"heading-text","style":{"border":{"width":"1px","radius":"999px"},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"16px","right":"16px"}},"typography":{"fontSize":"12px"}},"borderColor":"stroke"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-heading-text-color has-background-light-background-color has-text-color has-background has-border-color has-stroke-border-color has-custom-font-size wp-element-button" href="#" style="border-width:1px;border-radius:999px;padding-top:10px;padding-right:16px;padding-bottom:10px;padding-left:16px;font-size:12px">View Course ↗</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"16px","color":"var:preset|color|stroke","width":"1px"},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0"}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-white-background-color has-background" style="border-color:var(--wp--preset--color--stroke);border-width:1px;border-radius:16px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"' . esc_url( $course_3 ) . '","dimRatio":0,"customOverlayColor":"#47433c","isUserOverlayColor":false,"minHeight":270,"minHeightUnit":"px","contentPosition":"top left","sizeSlug":"full","style":{"border":{"radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"padding":{"top":"16px","right":"0px","bottom":"0px","left":"16px"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-cover has-custom-content-position is-position-top-left" style="border-top-left-radius:16px;border-top-right-radius:16px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;margin-top:0;margin-bottom:0;padding-top:16px;padding-right:0px;padding-bottom:0px;padding-left:16px;min-height:270px"><img class="wp-block-cover__image-background size-full" alt="" src="' . esc_url( $course_3 ) . '" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#47433c"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"5px","bottom":"5px","left":"12px","right":"12px"},"blockGap":"7px"},"border":{"width":"1px","radius":"999px"}},"backgroundColor":"heading-text","borderColor":"heading-text","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group has-border-color has-heading-text-border-color has-heading-text-background-color has-background" style="border-width:1px;border-radius:999px;padding-top:5px;padding-right:12px;padding-bottom:5px;padding-left:12px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"9px","fontWeight":"600","textTransform":"uppercase","fontStyle":"normal","letterSpacing":"2px","lineHeight":"1.7"},"spacing":{"margin":{"top":"0px","bottom ":"0px"}}},"textColor":"text-soft"} -->
<p class="has-text-soft-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:9px;font-style:normal;font-weight:600;letter-spacing:2px;line-height:1.7;text-transform:uppercase">WEIGHT LOSS</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"},"blockGap":"16px"},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"16px","bottomRight":"16px"}}},"backgroundColor":"background-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-light-background-color has-background" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:16px;border-bottom-right-radius:16px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:group {"style":{"spacing":{"blockGap":"12px","margin":{"bottom":"24px"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="margin-bottom:24px"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.22em"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-muted-text-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:0px;font-weight:600;letter-spacing:0.22em;text-transform:uppercase">12 Weeks · Intermediate</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","lineHeight":"var:custom|typography|line-height|flat","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"large","fontFamily":"accent"} -->
<h3 class="wp-block-heading has-heading-text-color has-text-color has-accent-font-family has-large-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600;line-height:var(--wp--custom--typography--line-height--flat)">Lean &amp; Defined</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6","fontSize":"14px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px;line-height:1.6">A structured combination of resistance training, conditioning, and nutrition designed for steady, sustainable fat loss.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
<hr class="wp-block-separator has-alpha-channel-opacity" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"/>
<!-- /wp:separator -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"0"},"margin":{"bottom":"24px"}}}} -->
<div class="wp-block-columns" style="margin-bottom:24px"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.22em","textTransform":"uppercase","textAlign":"center"},"spacing":{"margin":{"top":"0px","bottom":"2px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-text-align-center has-muted-text-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:2px;font-weight:600;letter-spacing:0.22em;text-transform:uppercase">Lessons</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontStyle":"normal","textAlign":"center"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"medium","fontFamily":"accent"} -->
<p class="has-text-align-center has-heading-text-color has-text-color has-accent-font-family has-medium-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600">38</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"online-training-col-border","style":{"border":{"left":{"color":"var:preset|color|stroke","width":"1px"}}}} -->
<div class="wp-block-column online-training-col-border" style="border-left-color:var(--wp--preset--color--stroke);border-left-width:1px"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.22em","textAlign":"center"},"spacing":{"margin":{"top":"0px","bottom":"2px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-text-align-center has-muted-text-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:2px;font-weight:600;letter-spacing:0.22em;text-transform:uppercase">Workouts</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontStyle":"normal","textAlign":"center"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"medium","fontFamily":"accent"} -->
<p class="has-text-align-center has-heading-text-color has-text-color has-accent-font-family has-medium-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600">48</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"online-training-col-border","style":{"border":{"left":{"color":"var:preset|color|stroke","width":"1px"}}}} -->
<div class="wp-block-column online-training-col-border" style="border-left-color:var(--wp--preset--color--stroke);border-left-width:1px"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.22em","textAlign":"center"},"spacing":{"margin":{"top":"0px","bottom":"2px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-text-align-center has-muted-text-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:2px;font-weight:600;letter-spacing:0.22em;text-transform:uppercase">Rating</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontStyle":"normal","textAlign":"center"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"medium","fontFamily":"accent"} -->
<p class="has-text-align-center has-heading-text-color has-text-color has-accent-font-family has-medium-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600">4.8</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"large","fontFamily":"accent"} -->
<p class="has-heading-text-color has-text-color has-accent-font-family has-large-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600">$129</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text","fontSize":"x-small","fontFamily":"accent"} -->
<p class="has-muted-text-color has-text-color has-accent-font-family has-x-small-font-size" style="margin-top:0px;margin-bottom:0px">one-time</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background-light","textColor":"heading-text","style":{"border":{"width":"1px","radius":"999px"},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"16px","right":"16px"}},"typography":{"fontSize":"12px"}},"borderColor":"stroke"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-heading-text-color has-background-light-background-color has-text-color has-background has-border-color has-stroke-border-color has-custom-font-size wp-element-button" href="#" style="border-width:1px;border-radius:999px;padding-top:10px;padding-right:16px;padding-bottom:10px;padding-left:16px;font-size:12px">View Course ↗</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"16px","color":"var:preset|color|stroke","width":"1px"},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0"}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-white-background-color has-background" style="border-color:var(--wp--preset--color--stroke);border-width:1px;border-radius:16px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"' . esc_url( $course_5 ) . '","dimRatio":0,"customOverlayColor":"#47433c","isUserOverlayColor":false,"minHeight":270,"minHeightUnit":"px","contentPosition":"top left","sizeSlug":"full","style":{"border":{"radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"padding":{"top":"16px","right":"0px","bottom":"0px","left":"16px"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-cover has-custom-content-position is-position-top-left" style="border-top-left-radius:16px;border-top-right-radius:16px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;margin-top:0;margin-bottom:0;padding-top:16px;padding-right:0px;padding-bottom:0px;padding-left:16px;min-height:270px"><img class="wp-block-cover__image-background size-full" alt="" src="' . esc_url( $course_5 ) . '" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#47433c"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"5px","bottom":"5px","left":"12px","right":"12px"},"blockGap":"7px"},"border":{"width":"1px","radius":"999px"}},"backgroundColor":"heading-text","borderColor":"heading-text","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group has-border-color has-heading-text-border-color has-heading-text-background-color has-background" style="border-width:1px;border-radius:999px;padding-top:5px;padding-right:12px;padding-bottom:5px;padding-left:12px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"9px","fontWeight":"600","textTransform":"uppercase","fontStyle":"normal","letterSpacing":"2px","lineHeight":"1.7"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"text-soft"} -->
<p class="has-text-soft-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:9px;font-style:normal;font-weight:600;letter-spacing:2px;line-height:1.7;text-transform:uppercase">PERFORMANCE</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"},"blockGap":"16px"},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"16px","bottomRight":"16px"}}},"backgroundColor":"background-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-light-background-color has-background" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:16px;border-bottom-right-radius:16px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:group {"style":{"spacing":{"blockGap":"12px","margin":{"bottom":"24px"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="margin-bottom:24px"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.22em"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-muted-text-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:0px;font-weight:600;letter-spacing:0.22em;text-transform:uppercase">10 Weeks · Advanced</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","lineHeight":"var:custom|typography|line-height|flat","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"large","fontFamily":"accent"} -->
<h3 class="wp-block-heading has-heading-text-color has-text-color has-accent-font-family has-large-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600;line-height:var(--wp--custom--typography--line-height--flat)">Performance Lab</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6","fontSize":"14px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px;line-height:1.6">Build power, speed, mobility, and athletic performance through velocity-based lifting and structured sprint work.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
<hr class="wp-block-separator has-alpha-channel-opacity" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"/>
<!-- /wp:separator -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"0"},"margin":{"bottom":"24px"}}}} -->
<div class="wp-block-columns" style="margin-bottom:24px"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.22em","textTransform":"uppercase","textAlign":"center"},"spacing":{"margin":{"top":"0px","bottom":"2px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-text-align-center has-muted-text-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:2px;font-weight:600;letter-spacing:0.22em;text-transform:uppercase">Lessons</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontStyle":"normal","textAlign":"center"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"medium","fontFamily":"accent"} -->
<p class="has-text-align-center has-heading-text-color has-text-color has-accent-font-family has-medium-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600">42</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"online-training-col-border","style":{"border":{"left":{"color":"var:preset|color|stroke","width":"1px"}}}} -->
<div class="wp-block-column online-training-col-border" style="border-left-color:var(--wp--preset--color--stroke);border-left-width:1px"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.22em","textAlign":"center"},"spacing":{"margin":{"top":"0px","bottom":"2px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-text-align-center has-muted-text-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:2px;font-weight:600;letter-spacing:0.22em;text-transform:uppercase">Workouts</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontStyle":"normal","textAlign":"center"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"medium","fontFamily":"accent"} -->
<p class="has-text-align-center has-heading-text-color has-text-color has-accent-font-family has-medium-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600">40</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"online-training-col-border","style":{"border":{"left":{"color":"var:preset|color|stroke","width":"1px"}}}} -->
<div class="wp-block-column online-training-col-border" style="border-left-color:var(--wp--preset--color--stroke);border-left-width:1px"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.22em","textAlign":"center"},"spacing":{"margin":{"top":"0px","bottom":"2px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-text-align-center has-muted-text-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:2px;font-weight:600;letter-spacing:0.22em;text-transform:uppercase">Rating</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontStyle":"normal","textAlign":"center"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"medium","fontFamily":"accent"} -->
<p class="has-text-align-center has-heading-text-color has-text-color has-accent-font-family has-medium-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600">4.9</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"large","fontFamily":"accent"} -->
<p class="has-heading-text-color has-text-color has-accent-font-family has-large-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600">$149</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text","fontSize":"x-small","fontFamily":"accent"} -->
<p class="has-muted-text-color has-text-color has-accent-font-family has-x-small-font-size" style="margin-top:0px;margin-bottom:0px">one-time</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background-light","textColor":"heading-text","style":{"border":{"width":"1px","radius":"999px"},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"16px","right":"16px"}},"typography":{"fontSize":"12px"}},"borderColor":"stroke"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-heading-text-color has-background-light-background-color has-text-color has-background has-border-color has-stroke-border-color has-custom-font-size wp-element-button" href="#" style="border-width:1px;border-radius:999px;padding-top:10px;padding-right:16px;padding-bottom:10px;padding-left:16px;font-size:12px">View Course ↗</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"16px","color":"var:preset|color|stroke","width":"1px"},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0"}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-white-background-color has-background" style="border-color:var(--wp--preset--color--stroke);border-width:1px;border-radius:16px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"' . esc_url( $course_4 ) . '","dimRatio":0,"customOverlayColor":"#47433c","isUserOverlayColor":false,"minHeight":270,"minHeightUnit":"px","contentPosition":"top left","sizeSlug":"full","style":{"border":{"radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"padding":{"top":"16px","right":"0px","bottom":"0px","left":"16px"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-cover has-custom-content-position is-position-top-left" style="border-top-left-radius:16px;border-top-right-radius:16px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;margin-top:0;margin-bottom:0;padding-top:16px;padding-right:0px;padding-bottom:0px;padding-left:16px;min-height:270px"><img class="wp-block-cover__image-background size-full" alt="" src="' . esc_url( $course_4 ) . '" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#47433c"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"5px","bottom":"5px","left":"12px","right":"12px"},"blockGap":"7px"},"border":{"width":"1px","radius":"999px"}},"backgroundColor":"heading-text","borderColor":"heading-text","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group has-border-color has-heading-text-border-color has-heading-text-background-color has-background" style="border-width:1px;border-radius:999px;padding-top:5px;padding-right:12px;padding-bottom:5px;padding-left:12px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"9px","fontWeight":"600","textTransform":"uppercase","fontStyle":"normal","letterSpacing":"2px","lineHeight":"1.7"},"spacing":{"margin":{"top":"0px","bottom ":"0px"}}},"textColor":"text-soft"} -->
<p class="has-text-soft-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:9px;font-style:normal;font-weight:600;letter-spacing:2px;line-height:1.7;text-transform:uppercase">MOBILITY</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"},"blockGap":"16px"},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"16px","bottomRight":"16px"}}},"backgroundColor":"background-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-light-background-color has-background" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:16px;border-bottom-right-radius:16px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:group {"style":{"spacing":{"blockGap":"12px","margin":{"bottom":"24px"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="margin-bottom:24px"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.22em"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-muted-text-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:0px;font-weight:600;letter-spacing:0.22em;text-transform:uppercase">6 Weeks · All Levels</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","lineHeight":"var:custom|typography|line-height|flat","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"large","fontFamily":"accent"} -->
<h3 class="wp-block-heading has-heading-text-color has-text-color has-accent-font-family has-large-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600;line-height:var(--wp--custom--typography--line-height--flat)">Mobility Reset</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6","fontSize":"14px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px;line-height:1.6">Improve flexibility, movement quality, posture, and recovery with 20-minute daily sessions you can do anywhere.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
<hr class="wp-block-separator has-alpha-channel-opacity" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"/>
<!-- /wp:separator -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"0"},"margin":{"bottom":"24px"}}}} -->
<div class="wp-block-columns" style="margin-bottom:24px"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.22em","textTransform":"uppercase","textAlign":"center"},"spacing":{"margin":{"top":"0px","bottom":"2px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-text-align-center has-muted-text-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:2px;font-weight:600;letter-spacing:0.22em;text-transform:uppercase">Lessons</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontStyle":"normal","textAlign":"center"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"medium","fontFamily":"accent"} -->
<p class="has-text-align-center has-heading-text-color has-text-color has-accent-font-family has-medium-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600">28</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"online-training-col-border","style":{"border":{"left":{"color":"var:preset|color|stroke","width":"1px"}}}} -->
<div class="wp-block-column online-training-col-border" style="border-left-color:var(--wp--preset--color--stroke);border-left-width:1px"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.22em","textAlign":"center"},"spacing":{"margin":{"top":"0px","bottom":"2px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-text-align-center has-muted-text-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:2px;font-weight:600;letter-spacing:0.22em;text-transform:uppercase">Workouts</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontStyle":"normal","textAlign":"center"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"medium","fontFamily":"accent"} -->
<p class="has-text-align-center has-heading-text-color has-text-color has-accent-font-family has-medium-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600">30</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"online-training-col-border","style":{"border":{"left":{"color":"var:preset|color|stroke","width":"1px"}}}} -->
<div class="wp-block-column online-training-col-border" style="border-left-color:var(--wp--preset--color--stroke);border-left-width:1px"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.22em","textAlign":"center"},"spacing":{"margin":{"top":"0px","bottom":"2px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-text-align-center has-muted-text-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:2px;font-weight:600;letter-spacing:0.22em;text-transform:uppercase">Rating</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontStyle":"normal","textAlign":"center"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"medium","fontFamily":"accent"} -->
<p class="has-text-align-center has-heading-text-color has-text-color has-accent-font-family has-medium-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600">4.9</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"large","fontFamily":"accent"} -->
<p class="has-heading-text-color has-text-color has-accent-font-family has-large-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600">$59</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text","fontSize":"x-small","fontFamily":"accent"} -->
<p class="has-muted-text-color has-text-color has-accent-font-family has-x-small-font-size" style="margin-top:0px;margin-bottom:0px">one-time</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background-light","textColor":"heading-text","style":{"border":{"width":"1px","radius":"999px"},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"16px","right":"16px"}},"typography":{"fontSize":"12px"}},"borderColor":"stroke"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-heading-text-color has-background-light-background-color has-text-color has-background has-border-color has-stroke-border-color has-custom-font-size wp-element-button" href="#" style="border-width:1px;border-radius:999px;padding-top:10px;padding-right:16px;padding-bottom:10px;padding-left:16px;font-size:12px">View Course ↗</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"16px","color":"var:preset|color|stroke","width":"1px"},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0"}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-white-background-color has-background" style="border-color:var(--wp--preset--color--stroke);border-width:1px;border-radius:16px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"' . esc_url( $course_6 ) . '","dimRatio":0,"customOverlayColor":"#47433c","isUserOverlayColor":false,"minHeight":270,"minHeightUnit":"px","contentPosition":"top left","sizeSlug":"full","style":{"border":{"radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"padding":{"top":"16px","right":"0px","bottom":"0px","left":"16px"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-cover has-custom-content-position is-position-top-left" style="border-top-left-radius:16px;border-top-right-radius:16px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;margin-top:0;margin-bottom:0;padding-top:16px;padding-right:0px;padding-bottom:0px;padding-left:16px;min-height:270px"><img class="wp-block-cover__image-background size-full" alt="" src="' . esc_url( $course_6 ) . '" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#47433c"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"5px","bottom":"5px","left":"12px","right":"12px"},"blockGap":"7px"},"border":{"width":"1px","radius":"999px"}},"backgroundColor":"heading-text","borderColor":"heading-text","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group has-border-color has-heading-text-border-color has-heading-text-background-color has-background" style="border-width:1px;border-radius:999px;padding-top:5px;padding-right:12px;padding-bottom:5px;padding-left:12px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"9px","fontWeight":"600","textTransform":"uppercase","fontStyle":"normal","letterSpacing":"2px","lineHeight":"1.7"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"text-soft"} -->
<p class="has-text-soft-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:9px;font-style:normal;font-weight:600;letter-spacing:2px;line-height:1.7;text-transform:uppercase">YOGA</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"},"blockGap":"16px"},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"16px","bottomRight":"16px"}}},"backgroundColor":"background-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-light-background-color has-background" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:16px;border-bottom-right-radius:16px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:group {"style":{"spacing":{"blockGap":"12px","margin":{"bottom":"24px"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="margin-bottom:24px"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.22em"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-muted-text-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:0px;font-weight:600;letter-spacing:0.22em;text-transform:uppercase">8 Weeks · All Levels</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","lineHeight":"var:custom|typography|line-height|flat","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"large","fontFamily":"accent"} -->
<h3 class="wp-block-heading has-heading-text-color has-text-color has-accent-font-family has-large-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600;line-height:var(--wp--custom--typography--line-height--flat)">Yoga Flow</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6","fontSize":"14px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px;line-height:1.6">Build mobility, balance, breathing control, and mindful movement through progressive vinyasa sequencing.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
<hr class="wp-block-separator has-alpha-channel-opacity" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"/>
<!-- /wp:separator -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"0"},"margin":{"bottom":"24px"}}}} -->
<div class="wp-block-columns" style="margin-bottom:24px"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.22em","textTransform":"uppercase","textAlign":"center"},"spacing":{"margin":{"top":"0px","bottom":"2px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-text-align-center has-muted-text-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:2px;font-weight:600;letter-spacing:0.22em;text-transform:uppercase">Lessons</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontStyle":"normal","textAlign":"center"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"medium","fontFamily":"accent"} -->
<p class="has-text-align-center has-heading-text-color has-text-color has-accent-font-family has-medium-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600">32</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"online-training-col-border","style":{"border":{"left":{"color":"var:preset|color|stroke","width":"1px"}}}} -->
<div class="wp-block-column online-training-col-border" style="border-left-color:var(--wp--preset--color--stroke);border-left-width:1px"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.22em","textAlign":"center"},"spacing":{"margin":{"top":"0px","bottom":"2px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-text-align-center has-muted-text-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:2px;font-weight:600;letter-spacing:0.22em;text-transform:uppercase">Workouts</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontStyle":"normal","textAlign":"center"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"medium","fontFamily":"accent"} -->
<p class="has-text-align-center has-heading-text-color has-text-color has-accent-font-family has-medium-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600">32</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"online-training-col-border","style":{"border":{"left":{"color":"var:preset|color|stroke","width":"1px"}}}} -->
<div class="wp-block-column online-training-col-border" style="border-left-color:var(--wp--preset--color--stroke);border-left-width:1px"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.22em","textAlign":"center"},"spacing":{"margin":{"top":"0px","bottom":"2px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-text-align-center has-muted-text-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:2px;font-weight:600;letter-spacing:0.22em;text-transform:uppercase">Rating</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontStyle":"normal","textAlign":"center"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"medium","fontFamily":"accent"} -->
<p class="has-text-align-center has-heading-text-color has-text-color has-accent-font-family has-medium-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600">4.8</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"large","fontFamily":"accent"} -->
<p class="has-heading-text-color has-text-color has-accent-font-family has-large-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600">$69</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text","fontSize":"x-small","fontFamily":"accent"} -->
<p class="has-muted-text-color has-text-color has-accent-font-family has-x-small-font-size" style="margin-top:0px;margin-bottom:0px">one-time</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background-light","textColor":"heading-text","style":{"border":{"width":"1px","radius":"999px"},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"16px","right":"16px"}},"typography":{"fontSize":"12px"}},"borderColor":"stroke"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-heading-text-color has-background-light-background-color has-text-color has-background has-border-color has-stroke-border-color has-custom-font-size wp-element-button" href="#" style="border-width:1px;border-radius:999px;padding-top:10px;padding-right:16px;padding-bottom:10px;padding-left:16px;font-size:12px">View Course ↗</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"16px","color":"var:preset|color|stroke","width":"1px"},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0"}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-white-background-color has-background" style="border-color:var(--wp--preset--color--stroke);border-width:1px;border-radius:16px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"' . esc_url( $course_7 ) . '","dimRatio":0,"customOverlayColor":"#47433c","isUserOverlayColor":false,"minHeight":270,"minHeightUnit":"px","contentPosition":"top left","sizeSlug":"full","style":{"border":{"radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"padding":{"top":"16px","right":"0px","bottom":"0px","left":"16px"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-cover has-custom-content-position is-position-top-left" style="border-top-left-radius:16px;border-top-right-radius:16px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;margin-top:0;margin-bottom:0;padding-top:16px;padding-right:0px;padding-bottom:0px;padding-left:16px;min-height:270px"><img class="wp-block-cover__image-background size-full" alt="" src="' . esc_url( $course_7 ) . '" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#47433c"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"5px","bottom":"5px","left":"12px","right":"12px"},"blockGap":"7px"},"border":{"width":"1px","radius":"999px"}},"backgroundColor":"heading-text","borderColor":"heading-text","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group has-border-color has-heading-text-border-color has-heading-text-background-color has-background" style="border-width:1px;border-radius:999px;padding-top:5px;padding-right:12px;padding-bottom:5px;padding-left:12px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"9px","fontWeight":"600","textTransform":"uppercase","fontStyle":"normal","letterSpacing":"2px","lineHeight":"1.7"},"spacing":{"margin":{"top ":"0px","bottom ":"0px"}}},"textColor":"text-soft"} -->
<p class="has-text-soft-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:9px;font-style:normal;font-weight:600;letter-spacing:2px;line-height:1.7;text-transform:uppercase">STRENGTH</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"},"blockGap":"16px"},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"16px","bottomRight":"16px"}}},"backgroundColor":"background-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-light-background-color has-background" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:16px;border-bottom-right-radius:16px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:group {"style":{"spacing":{"blockGap":"12px","margin":{"bottom":"24px"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="margin-bottom:24px"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.22em"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-muted-text-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:0px;font-weight:600;letter-spacing:0.22em;text-transform:uppercase">16 Weeks · Advanced</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","lineHeight":"var:custom|typography|line-height|flat","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"large","fontFamily":"accent"} -->
<h3 class="wp-block-heading has-heading-text-color has-text-color has-accent-font-family has-large-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600;line-height:var(--wp--custom--typography--line-height--flat)">Complete Transformation</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6","fontSize":"14px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px;line-height:1.6">A complete fitness, nutrition, mobility, and lifestyle transformation system with coach check-ins every fortnight.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
<hr class="wp-block-separator has-alpha-channel-opacity" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"/>
<!-- /wp:separator -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"0"},"margin":{"bottom":"24px"}}}} -->
<div class="wp-block-columns" style="margin-bottom:24px"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.22em","textTransform":"uppercase","textAlign":"center"},"spacing":{"margin":{"top":"0px","bottom":"2px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-text-align-center has-muted-text-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:2px;font-weight:600;letter-spacing:0.22em;text-transform:uppercase">Lessons</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontStyle":"normal","textAlign":"center"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"medium","fontFamily":"accent"} -->
<p class="has-text-align-center has-heading-text-color has-text-color has-accent-font-family has-medium-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600">64</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"online-training-col-border","style":{"border":{"left":{"color":"var:preset|color|stroke","width":"1px"}}}} -->
<div class="wp-block-column online-training-col-border" style="border-left-color:var(--wp--preset--color--stroke);border-left-width:1px"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.22em","textAlign":"center"},"spacing":{"margin":{"top":"0px","bottom":"2px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-text-align-center has-muted-text-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:2px;font-weight:600;letter-spacing:0.22em;text-transform:uppercase">Workouts</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontStyle":"normal","textAlign":"center"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"medium","fontFamily":"accent"} -->
<p class="has-text-align-center has-heading-text-color has-text-color has-accent-font-family has-medium-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600">72</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"online-training-col-border","style":{"border":{"left":{"color":"var:preset|color|stroke","width":"1px"}}}} -->
<div class="wp-block-column online-training-col-border" style="border-left-color:var(--wp--preset--color--stroke);border-left-width:1px"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.22em","textAlign":"center"},"spacing":{"margin":{"top":"0px","bottom":"2px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-text-align-center has-muted-text-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:2px;font-weight:600;letter-spacing:0.22em;text-transform:uppercase">Rating</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontStyle":"normal","textAlign":"center"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"medium","fontFamily":"accent"} -->
<p class="has-text-align-center has-heading-text-color has-text-color has-accent-font-family has-medium-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600">5.0</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"large","fontFamily":"accent"} -->
<p class="has-heading-text-color has-text-color has-accent-font-family has-large-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600">$249</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text","fontSize":"x-small","fontFamily":"accent"} -->
<p class="has-muted-text-color has-text-color has-accent-font-family has-x-small-font-size" style="margin-top:0px;margin-bottom:0px">one-time</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background-light","textColor":"heading-text","style":{"border":{"width":"1px","radius":"999px"},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"16px","right":"16px"}},"typography":{"fontSize":"12px"}},"borderColor":"stroke"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-heading-text-color has-background-light-background-color has-text-color has-background has-border-color has-stroke-border-color has-custom-font-size wp-element-button" href="#" style="border-width:1px;border-radius:999px;padding-top:10px;padding-right:16px;padding-bottom:10px;padding-left:16px;font-size:12px">View Course ↗</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
',
);
