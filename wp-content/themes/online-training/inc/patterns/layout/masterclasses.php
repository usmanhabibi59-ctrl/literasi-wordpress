<?php
/**
 * Pattern
 *
 * @package OnlineTraining
 * @since 1.0.0
 *
 * slug: masterclasses
 * title: Video Masterclasses
 * categories: online-training
 * keywords: masterclasses
 */

$course_1         = get_template_directory_uri() . '/assets/images/course-1.jpg';
$course_4         = get_template_directory_uri() . '/assets/images/course-4.jpg';
$course_3         = get_template_directory_uri() . '/assets/images/course-3.jpg';
$icon_circle_play = get_template_directory_uri() . '/assets/images/icons/circle-play.svg';

return array(
	'title'      => __( 'Video Masterclasses', 'online-training' ),
	'categories' => array( 'online-training' ),
	'keywords'   => array( 'masterclasses' ),
	'content'    => '
<!-- wp:group {"metadata":{"patternName":"online-training/masterclasses","name":"Video Masterclasses","categories":["online-training"]},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"heading-text","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group alignfull has-heading-text-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"margin":{"bottom":"56px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-top" style="margin-bottom:56px"><!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|flat"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","fontSize":"medium"} -->
<p class="has-primary-color has-text-color has-medium-font-size" style="margin-top:0px;margin-bottom:0px;line-height:var(--wp--custom--typography--line-height--flat)">──</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.14em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"ink-muted","fontSize":"x-small"} -->
<p class="has-ink-muted-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:0px;font-weight:600;letter-spacing:0.14em;text-transform:uppercase">Video masterclasses</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"style":{"typography":{"fontWeight":"600","lineHeight":"var:custom|typography|line-height|heading-tight","letterSpacing":"-0.01em","fontStyle":"normal"},"spacing":{"margin":{"bottom":"0px","top":"24px"}}},"textColor":"text-soft","fontSize":"heading-h2","fontFamily":"accent"} -->
<h2 class="wp-block-heading has-text-soft-color has-text-color has-accent-font-family has-heading-h-2-font-size" style="margin-top:24px;margin-bottom:0px;font-style:normal;font-weight:600;letter-spacing:-0.01em;line-height:var(--wp--custom--typography--line-height--heading-tight)">Train Anywhere.<br>Progress<br>Everywhere.</h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"390px"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:390px"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|minor","fontSize":"14px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"paragraph-text"} -->
<p class="has-paragraph-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px;line-height:var(--wp--custom--typography--line-height--minor)">Every masterclass streams on any device, downloads for offline sessions, and keeps your place across the web app.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"color":"#ffffff1f","width":"1px","radius":"16px"},"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color" style="border-color:#ffffff1f;border-width:1px;border-radius:16px"><!-- wp:cover {"url":"' . esc_url( $course_1 ) . '","dimRatio":0,"customOverlayColor":"#000000","minHeight":260,"minHeightUnit":"px","contentPosition":"center center","style":{"border":{"radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"0px","bottomRight":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover" style="border-top-left-radius:16px;border-top-right-radius:16px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;min-height:260px"><img class="wp-block-cover__image-background" alt="" src="' . esc_url( $course_1 ) . '" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#000000"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:html -->
<figure class="wp-block-image size-full" style="width:48px;height:48px;background-color:var(--wp--preset--color--white);-webkit-mask-repeat:no-repeat;mask-repeat:no-repeat;-webkit-mask-position:center;mask-position:center;-webkit-mask-size:contain;mask-size:contain;-webkit-mask-image:url(' . esc_url( $icon_circle_play ) . ');mask-image:url(' . esc_url( $icon_circle_play ) . ')"><img src="' . esc_url( $icon_circle_play ) . '" alt="" style="width:100%;height:100%;display:block;opacity:0"/></figure>
<!-- /wp:html --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"},"blockGap":"12px"},"border":{"radius":{"bottomLeft":"16px","bottomRight":"16px"}},"color":{"background":"#191919"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="border-bottom-left-radius:16px;border-bottom-right-radius:16px;background-color:#191919;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"style":{"spacing":{"blockGap":"6px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.22em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:0px;font-weight:700;letter-spacing:0.22em;text-transform:uppercase">Beginner</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","lineHeight":"var:custom|typography|line-height|flat","fontStyle":"normal"},"spacing":{"margin":{"top":"10px","bottom":"10px"}}},"textColor":"text-soft","fontSize":"large","fontFamily":"accent"} -->
<h3 class="wp-block-heading has-text-soft-color has-text-color has-accent-font-family has-large-font-size" style="margin-top:10px;margin-bottom:10px;font-style:normal;font-weight:600;line-height:var(--wp--custom--typography--line-height--flat)">Strength Training Fundamentals</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|minor","fontSize":"14px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"paragraph-text"} -->
<p class="has-paragraph-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px;line-height:var(--wp--custom--typography--line-height--minor)">Technique breakdowns for the six core lifts, plus a progression model you can run for a year.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"22px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"12px"}},"textColor":"paragraph-text"} -->
<p class="has-paragraph-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:12px">42 Lessons</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"12px"}},"textColor":"paragraph-text"} -->
<p class="has-paragraph-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:12px">18 Workouts</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"12px"}},"textColor":"paragraph-text"} -->
<p class="has-paragraph-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:12px">6.5 Hours</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"color":{"background":"#ffffff1f"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);background-color:#ffffff1f;color:#ffffff1f"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"2px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontSize":"12px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"text-soft"} -->
<p class="has-text-soft-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:12px;font-weight:700">Alex Morgan</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"12px"}},"textColor":"paragraph-text"} -->
<p class="has-paragraph-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:12px">4.9 ★ · 1,284 Students</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"heading-text","style":{"border":{"radius":"999px"},"typography":{"fontWeight":"600"},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"16px","right":"16px"}}},"fontSize":"small"} -->
<div class="wp-block-button"><a href="#" class="wp-block-button__link has-heading-text-color has-primary-background-color has-text-color has-background has-small-font-size has-custom-font-size wp-element-button" style="border-radius:999px;padding-top:10px;padding-right:16px;padding-bottom:10px;padding-left:16px;font-weight:600">$89 · Enroll</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"color":"#ffffff1f","width":"1px","radius":"16px"},"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color" style="border-color:#ffffff1f;border-width:1px;border-radius:16px"><!-- wp:cover {"url":"' . esc_url( $course_4 ) . '","dimRatio":0,"customOverlayColor":"#000000","minHeight":260,"minHeightUnit":"px","contentPosition":"center center","style":{"border":{"radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"0px","bottomRight":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover" style="border-top-left-radius:16px;border-top-right-radius:16px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;min-height:260px"><img class="wp-block-cover__image-background" alt="" src="' . esc_url( $course_4 ) . '" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#000000"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:html -->
<figure class="wp-block-image size-full" style="width:48px;height:48px;background-color:var(--wp--preset--color--white);-webkit-mask-repeat:no-repeat;mask-repeat:no-repeat;-webkit-mask-position:center;mask-position:center;-webkit-mask-size:contain;mask-size:contain;-webkit-mask-image:url(' . esc_url( $icon_circle_play ) . ');mask-image:url(' . esc_url( $icon_circle_play ) . ')"><img src="' . esc_url( $icon_circle_play ) . '" alt="" style="width:100%;height:100%;display:block;opacity:0"/></figure>
<!-- /wp:html --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"},"blockGap":"12px"},"border":{"radius":{"bottomLeft":"16px","bottomRight":"16px"}},"color":{"background":"#191919"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="border-bottom-left-radius:16px;border-bottom-right-radius:16px;background-color:#191919;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"style":{"spacing":{"blockGap":"6px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.22em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:0px;font-weight:700;letter-spacing:0.22em;text-transform:uppercase">All Levels</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","lineHeight":"var:custom|typography|line-height|flat","fontStyle":"normal"},"spacing":{"margin":{"top":"10px","bottom":"10px"}}},"textColor":"text-soft","fontSize":"large","fontFamily":"accent"} -->
<h3 class="wp-block-heading has-text-soft-color has-text-color has-accent-font-family has-large-font-size" style="margin-top:10px;margin-bottom:10px;font-style:normal;font-weight:600;line-height:var(--wp--custom--typography--line-height--flat)">Mobility for Strong Bodies</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|minor","fontSize":"14px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"paragraph-text"} -->
<p class="has-paragraph-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px;line-height:var(--wp--custom--typography--line-height--minor)">Joint-by-joint mobility work that supports heavy training instead of replacing it.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"22px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"12px"}},"textColor":"paragraph-text"} -->
<p class="has-paragraph-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:12px">28 Lessons</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"12px"}},"textColor":"paragraph-text"} -->
<p class="has-paragraph-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:12px">14 Workouts</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"12px"}},"textColor":"paragraph-text"} -->
<p class="has-paragraph-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:12px">4.2 Hours</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"color":{"background":"#ffffff1f"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);background-color:#ffffff1f;color:#ffffff1f"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"2px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontSize":"12px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"text-soft"} -->
<p class="has-text-soft-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:12px;font-weight:700">Priya Raman</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"12px"}},"textColor":"paragraph-text"} -->
<p class="has-paragraph-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:12px">4.8 ★ · 964 Students</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"heading-text","style":{"border":{"radius":"999px"},"typography":{"fontWeight":"600"},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"16px","right":"16px"}}},"fontSize":"small"} -->
<div class="wp-block-button"><a href="#" class="wp-block-button__link has-heading-text-color has-primary-background-color has-text-color has-background has-small-font-size has-custom-font-size wp-element-button" style="border-radius:999px;padding-top:10px;padding-right:16px;padding-bottom:10px;padding-left:16px;font-weight:600">$59 · Enroll</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"color":"#ffffff1f","width":"1px","radius":"16px"},"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color" style="border-color:#ffffff1f;border-width:1px;border-radius:16px"><!-- wp:cover {"url":"' . esc_url( $course_3 ) . '","dimRatio":0,"customOverlayColor":"#000000","minHeight":260,"minHeightUnit":"px","contentPosition":"center center","style":{"border":{"radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"0px","bottomRight":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover" style="border-top-left-radius:16px;border-top-right-radius:16px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;min-height:260px"><img class="wp-block-cover__image-background" alt="" src="' . esc_url( $course_3 ) . '" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#000000"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:html -->
<figure class="wp-block-image size-full" style="width:48px;height:48px;background-color:var(--wp--preset--color--white);-webkit-mask-repeat:no-repeat;mask-repeat:no-repeat;-webkit-mask-position:center;mask-position:center;-webkit-mask-size:contain;mask-size:contain;-webkit-mask-image:url(' . esc_url( $icon_circle_play ) . ');mask-image:url(' . esc_url( $icon_circle_play ) . ')"><img src="' . esc_url( $icon_circle_play ) . '" alt="" style="width:100%;height:100%;display:block;opacity:0"/></figure>
<!-- /wp:html --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"},"blockGap":"12px"},"border":{"radius":{"bottomLeft":"16px","bottomRight":"16px"}},"color":{"background":"#191919"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="border-bottom-left-radius:16px;border-bottom-right-radius:16px;background-color:#191919;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"style":{"spacing":{"blockGap":"6px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.22em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:0px;font-weight:700;letter-spacing:0.22em;text-transform:uppercase">Advanced</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","lineHeight":"var:custom|typography|line-height|flat","fontStyle":"normal"},"spacing":{"margin":{"top":"10px","bottom":"10px"}}},"textColor":"text-soft","fontSize":"large","fontFamily":"accent"} -->
<h3 class="wp-block-heading has-text-soft-color has-text-color has-accent-font-family has-large-font-size" style="margin-top:10px;margin-bottom:10px;font-style:normal;font-weight:600;line-height:var(--wp--custom--typography--line-height--flat)">12-Week Athletic Conditioning</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|minor","fontSize":"14px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"paragraph-text"} -->
<p class="has-paragraph-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px;line-height:var(--wp--custom--typography--line-height--minor)">Energy-system training, sprint mechanics, and testing weeks for measurable output gains.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"22px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"12px"}},"textColor":"paragraph-text"} -->
<p class="has-paragraph-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:12px">56 Lessons</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"12px"}},"textColor":"paragraph-text"} -->
<p class="has-paragraph-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:12px">36 Workouts</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"12px"}},"textColor":"paragraph-text"} -->
<p class="has-paragraph-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:12px">9.5 Hours</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"color":{"background":"#ffffff1f"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);background-color:#ffffff1f;color:#ffffff1f"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"2px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontSize":"12px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"text-soft"} -->
<p class="has-text-soft-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:12px;font-weight:700">Marcus Feld</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"12px"}},"textColor":"paragraph-text"} -->
<p class="has-paragraph-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:12px">4.9 ★ · 731 Students</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"heading-text","style":{"border":{"radius":"999px"},"typography":{"fontWeight":"600"},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"16px","right":"16px"}}},"fontSize":"small"} -->
<div class="wp-block-button"><a href="#" class="wp-block-button__link has-heading-text-color has-primary-background-color has-text-color has-background has-small-font-size has-custom-font-size wp-element-button" style="border-radius:999px;padding-top:10px;padding-right:16px;padding-bottom:10px;padding-left:16px;font-weight:600">$159 · Enroll</a></div>
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
