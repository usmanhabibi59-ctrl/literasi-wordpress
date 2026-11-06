<?php
/**
 * Pattern
 *
 * @package OnlineTraining
 * @since 1.0.0
 *
 * slug: client-results
 * title: Client Results
 * categories: online-training
 * keywords: client-results
 */

$section_bg = get_template_directory_uri() . '/assets/images/results-bg.png';
$avatar_1   = get_template_directory_uri() . '/assets/images/avatar-1.jpg';
$avatar_2   = get_template_directory_uri() . '/assets/images/avatar-2.jpg';
$avatar_3   = get_template_directory_uri() . '/assets/images/avatar-3.jpg';
$icon_quote = get_template_directory_uri() . '/assets/images/icons/quote.svg';
return array(
	'title'      => __( 'Client Results', 'online-training' ),
	'categories' => array( 'online-training' ),
	'keywords'   => array( 'client-results' ),
	'content'    => '
<!-- wp:group {"metadata":{"patternName":"online-training/client-results","name":"Client Results","categories":["online-training"]},"align":"full","style":{"color":{"gradient":"var(--wp--preset--color--heading-text) url(' . esc_url( $section_bg ) . ') center center / cover no-repeat"},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group alignfull has-background" style="background:var(--wp--preset--color--heading-text) url(' . esc_url( $section_bg ) . ') center center / cover no-repeat;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"margin":{"bottom":"48px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-bottom" style="margin-bottom:48px"><!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|flat"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","fontSize":"medium"} -->
<p class="has-primary-color has-text-color has-medium-font-size" style="margin-top:0px;margin-bottom:0px;line-height:var(--wp--custom--typography--line-height--flat)">──</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.14em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"ink-muted","fontSize":"x-small"} -->
<p class="has-ink-muted-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:0px;font-weight:600;letter-spacing:0.14em;text-transform:uppercase">Client results</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"style":{"typography":{"fontWeight":"600","lineHeight":"var:custom|typography|line-height|heading-tight","letterSpacing":"-0.01em","fontStyle":"normal"},"spacing":{"margin":{"top":"24px"}}},"textColor":"text-soft","fontSize":"heading-h2","fontFamily":"accent"} -->
<h2 class="wp-block-heading has-text-soft-color has-text-color has-accent-font-family has-heading-h-2-font-size" style="margin-top:24px;font-style:normal;font-weight:600;letter-spacing:-0.01em;line-height:var(--wp--custom--typography--line-height--heading-tight)">Real People. Real Progress.</h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"380px"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:380px"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|minor","fontSize":"14px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"paragraph-text"} -->
<p class="has-paragraph-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px;line-height:var(--wp--custom--typography--line-height--minor)">Numbers reported by clients at their final assessment. No crash diets, no extreme protocols.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"color":"#ffffff1f","width":"1px","radius":"16px"},"spacing":{"padding":{"top":"32px","right":"32px","bottom":"32px","left":"32px"},"blockGap":"18px"},"color":{"background":"#191919"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-background" style="border-color:#ffffff1f;border-width:1px;border-radius:16px;background-color:#191919;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:html -->
<figure class="wp-block-image size-full" style="width:26px;height:26px;margin-left:0 !important;margin-right:auto !important;background-color:var(--wp--preset--color--primary);-webkit-mask-repeat:no-repeat;mask-repeat:no-repeat;-webkit-mask-position:center;mask-position:center;-webkit-mask-size:contain;mask-size:contain;-webkit-mask-image:url(' . esc_url( $icon_quote ) . ');mask-image:url(' . esc_url( $icon_quote ) . ')"><img src="' . esc_url( $icon_quote ) . '" alt="" style="width:100%;height:100%;display:block;opacity:0"/></figure>
<!-- /wp:html -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|minor"},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"32px"}}},"textColor":"text-soft","fontSize":"heading-h4","fontFamily":"accent"} -->
<p class="has-text-soft-color has-text-color has-accent-font-family has-heading-h-4-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:32px;line-height:var(--wp--custom--typography--line-height--minor)">“After years of inconsistent workouts, I finally found a system I could actually follow. I feel stronger, more confident, and much more in control of my health.”</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"14px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"44px","height":"44px","scale":"cover","linkDestination":"none","style":{"border":{"radius":"999px"}}} -->
<figure class="wp-block-image is-resized has-custom-border"><img src="' . esc_url( $avatar_3 ) . '" alt="" style="border-radius:999px;object-fit:cover;width:44px;height:44px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"2px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","lineHeight":"var:custom|typography|line-height|flat","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"4px"}}},"textColor":"text-soft","fontSize":"medium","fontFamily":"accent"} -->
<p class="has-text-soft-color has-text-color has-accent-font-family has-medium-font-size" style="margin-top:0px;margin-bottom:4px;font-style:normal;font-weight:500;line-height:var(--wp--custom--typography--line-height--flat)">Sarah Mitchell</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|flat","fontSize":"12px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"paragraph-text"} -->
<p class="has-paragraph-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:12px;line-height:var(--wp--custom--typography--line-height--flat)">12-Week Strength Course</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"10px"},"padding":{"top":"20px"},"margin":{"top":"24px"}},"border":{"top":{"color":"#ffffff1f","width":"1px"},"right":[],"bottom":[],"left":[]}}} -->
<div class="wp-block-columns" style="border-top-color:#ffffff1f;border-top-width:1px;margin-top:24px;padding-top:20px"><!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.22em","textTransform":"uppercase","textAlign":"center"},"spacing":{"margin":{"top":"0px","bottom":"2px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-text-align-center has-muted-text-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:2px;font-weight:600;letter-spacing:0.22em;text-transform:uppercase">Duration</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","textAlign":"center","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","fontSize":"medium","fontFamily":"accent"} -->
<p class="has-text-align-center has-primary-color has-text-color has-accent-font-family has-medium-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600">12 Weeks</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.22em","textTransform":"uppercase","textAlign":"center"},"spacing":{"margin":{"top":"0px","bottom":"2px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-text-align-center has-muted-text-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:2px;font-weight:600;letter-spacing:0.22em;text-transform:uppercase">Body Weight</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","textAlign":"center","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","fontSize":"medium","fontFamily":"accent"} -->
<p class="has-text-align-center has-primary-color has-text-color has-accent-font-family has-medium-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600">−8.4 kg</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.22em","textTransform":"uppercase","textAlign":"center"},"spacing":{"margin":{"top":"0px","bottom":"2px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-text-align-center has-muted-text-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:2px;font-weight:600;letter-spacing:0.22em;text-transform:uppercase">Strength</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","textAlign":"center","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","fontSize":"medium","fontFamily":"accent"} -->
<p class="has-text-align-center has-primary-color has-text-color has-accent-font-family has-medium-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600">+31%</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"color":"#ffffff1f","width":"1px","radius":"16px"},"spacing":{"padding":{"top":"32px","right":"32px","bottom":"32px","left":"32px"},"blockGap":"18px"},"color":{"background":"#191919"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-background" style="border-color:#ffffff1f;border-width:1px;border-radius:16px;background-color:#191919;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:html -->
<figure class="wp-block-image size-full" style="width:26px;height:26px;margin-left:0 !important;margin-right:auto !important;background-color:var(--wp--preset--color--primary);-webkit-mask-repeat:no-repeat;mask-repeat:no-repeat;-webkit-mask-position:center;mask-position:center;-webkit-mask-size:contain;mask-size:contain;-webkit-mask-image:url(' . esc_url( $icon_quote ) . ');mask-image:url(' . esc_url( $icon_quote ) . ')"><img src="' . esc_url( $icon_quote ) . '" alt="" style="width:100%;height:100%;display:block;opacity:0"/></figure>
<!-- /wp:html -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|minor"},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"32px"}}},"textColor":"text-soft","fontSize":"heading-h4","fontFamily":"accent"} -->
<p class="has-text-soft-color has-text-color has-accent-font-family has-heading-h-4-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:32px;line-height:var(--wp--custom--typography--line-height--minor)">“The programming was the first I\'ve followed that actually explained why each block existed. My lifts went up while my knees stopped complaining.”</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"14px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"44px","height":"44px","scale":"cover","linkDestination":"none","style":{"border":{"radius":"999px"}}} -->
<figure class="wp-block-image is-resized has-custom-border"><img src="' . esc_url( $avatar_1 ) . '" alt="" style="border-radius:999px;object-fit:cover;width:44px;height:44px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"2px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","lineHeight":"var:custom|typography|line-height|flat","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"4px"}}},"textColor":"text-soft","fontSize":"medium","fontFamily":"accent"} -->
<p class="has-text-soft-color has-text-color has-accent-font-family has-medium-font-size" style="margin-top:0px;margin-bottom:4px;font-style:normal;font-weight:500;line-height:var(--wp--custom--typography--line-height--flat)">Daniel Carter</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|flat","fontSize":"12px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"paragraph-text"} -->
<p class="has-paragraph-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:12px;line-height:var(--wp--custom--typography--line-height--flat)">16-Week Performance Course</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"10px"},"padding":{"top":"20px"},"margin":{"top":"24px"}},"border":{"top":{"color":"#ffffff1f","width":"1px"},"right":[],"bottom":[],"left":[]}}} -->
<div class="wp-block-columns" style="border-top-color:#ffffff1f;border-top-width:1px;margin-top:24px;padding-top:20px"><!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.22em","textTransform":"uppercase","textAlign":"center"},"spacing":{"margin":{"top":"0px","bottom":"2px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-text-align-center has-muted-text-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:2px;font-weight:600;letter-spacing:0.22em;text-transform:uppercase">Duration</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","textAlign":"center","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","fontSize":"medium","fontFamily":"accent"} -->
<p class="has-text-align-center has-primary-color has-text-color has-accent-font-family has-medium-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600">16 Weeks</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.22em","textTransform":"uppercase","textAlign":"center"},"spacing":{"margin":{"top":"0px","bottom":"2px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-text-align-center has-muted-text-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:2px;font-weight:600;letter-spacing:0.22em;text-transform:uppercase">Squat Strength</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","textAlign":"center","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","fontSize":"medium","fontFamily":"accent"} -->
<p class="has-text-align-center has-primary-color has-text-color has-accent-font-family has-medium-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600">+42%</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.22em","textTransform":"uppercase","textAlign":"center"},"spacing":{"margin":{"top":"0px","bottom":"2px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-text-align-center has-muted-text-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:2px;font-weight:600;letter-spacing:0.22em;text-transform:uppercase">Endurance</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","textAlign":"center","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","fontSize":"medium","fontFamily":"accent"} -->
<p class="has-text-align-center has-primary-color has-text-color has-accent-font-family has-medium-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600">+28%</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"color":"#ffffff1f","width":"1px","radius":"16px"},"spacing":{"padding":{"top":"32px","right":"32px","bottom":"32px","left":"32px"},"blockGap":"18px"},"color":{"background":"#191919"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-background" style="border-color:#ffffff1f;border-width:1px;border-radius:16px;background-color:#191919;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:html -->
<figure class="wp-block-image size-full" style="width:26px;height:26px;margin-left:0 !important;margin-right:auto !important;background-color:var(--wp--preset--color--primary);-webkit-mask-repeat:no-repeat;mask-repeat:no-repeat;-webkit-mask-position:center;mask-position:center;-webkit-mask-size:contain;mask-size:contain;-webkit-mask-image:url(' . esc_url( $icon_quote ) . ');mask-image:url(' . esc_url( $icon_quote ) . ')"><img src="' . esc_url( $icon_quote ) . '" alt="" style="width:100%;height:100%;display:block;opacity:0"/></figure>
<!-- /wp:html -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|minor"},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"32px"}}},"textColor":"text-soft","fontSize":"heading-h4","fontFamily":"accent"} -->
<p class="has-text-soft-color has-text-color has-accent-font-family has-heading-h-4-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:32px;line-height:var(--wp--custom--typography--line-height--minor)">“Twenty minutes a day changed how my back feels at work. I move better now at 44 than I did at 30, and nothing about it felt extreme.”</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"14px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"44px","height":"44px","scale":"cover","linkDestination":"none","style":{"border":{"radius":"999px"}}} -->
<figure class="wp-block-image is-resized has-custom-border"><img src="' . esc_url( $avatar_2 ) . '" alt="" style="border-radius:999px;object-fit:cover;width:44px;height:44px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"2px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","lineHeight":"var:custom|typography|line-height|flat","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"4px"}}},"textColor":"text-soft","fontSize":"medium","fontFamily":"accent"} -->
<p class="has-text-soft-color has-text-color has-accent-font-family has-medium-font-size" style="margin-top:0px;margin-bottom:4px;font-style:normal;font-weight:500;line-height:var(--wp--custom--typography--line-height--flat)">Maya Reynolds</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|flat","fontSize":"12px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"paragraph-text"} -->
<p class="has-paragraph-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:12px;line-height:var(--wp--custom--typography--line-height--flat)">8-Week Mobility Course</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"10px"},"padding":{"top":"20px"},"margin":{"top":"24px"}},"border":{"top":{"color":"#ffffff1f","width":"1px"},"right":[],"bottom":[],"left":[]}}} -->
<div class="wp-block-columns" style="border-top-color:#ffffff1f;border-top-width:1px;margin-top:24px;padding-top:20px"><!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.22em","textTransform":"uppercase","textAlign":"center"},"spacing":{"margin":{"top":"0px","bottom":"2px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-text-align-center has-muted-text-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:2px;font-weight:600;letter-spacing:0.22em;text-transform:uppercase">Duration</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","textAlign":"center","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","fontSize":"medium","fontFamily":"accent"} -->
<p class="has-text-align-center has-primary-color has-text-color has-accent-font-family has-medium-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600">8 Weeks</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.22em","textTransform":"uppercase","textAlign":"center"},"spacing":{"margin":{"top":"0px","bottom":"2px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-text-align-center has-muted-text-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:2px;font-weight:600;letter-spacing:0.22em;text-transform:uppercase">Mobility Score</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","textAlign":"center","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","fontSize":"medium","fontFamily":"accent"} -->
<p class="has-text-align-center has-primary-color has-text-color has-accent-font-family has-medium-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600">+35%</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.22em","textTransform":"uppercase","textAlign":"center"},"spacing":{"margin":{"top":"0px","bottom":"2px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-text-align-center has-muted-text-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:2px;font-weight:600;letter-spacing:0.22em;text-transform:uppercase">Back Discomfort</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","textAlign":"center","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","fontSize":"medium","fontFamily":"accent"} -->
<p class="has-text-align-center has-primary-color has-text-color has-accent-font-family has-medium-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600">−40%</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
',
);
