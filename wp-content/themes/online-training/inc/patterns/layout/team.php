<?php
/**
 * Pattern
 *
 * @package OnlineTraining
 * @since 1.0.0
 *
 * slug: team
 * title: Team
 * categories: online-training
 * keywords: team
 */

$coach_1 = get_template_directory_uri() . '/assets/images/coach.jpg';
$coach_2 = get_template_directory_uri() . '/assets/images/course-6.jpg';
$coach_3 = get_template_directory_uri() . '/assets/images/course-3.jpg';
$coach_4 = get_template_directory_uri() . '/assets/images/course-8.jpg';

return array(
	'title'      => __( 'Team', 'online-training' ),
	'categories' => array( 'online-training' ),
	'keywords'   => array( 'team' ),
	'content'    => '
<!-- wp:group {"metadata":{"patternName":"online-training/team","name":"Team","categories":["online-training"]},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"background-light","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group alignfull has-background-light-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"14px","margin":{"bottom":"0"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-bottom:0"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|flat"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","fontSize":"medium"} -->
<p class="has-primary-color has-text-color has-medium-font-size" style="margin-top:0px;margin-bottom:0px;line-height:var(--wp--custom--typography--line-height--flat)">──</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.14em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-muted-text-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:0px;font-weight:600;letter-spacing:0.14em;text-transform:uppercase">Who\'s teaching</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"style":{"typography":{"fontWeight":"800","lineHeight":"var:custom|typography|line-height|heading-tight","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"24px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"heading-h2"} -->
<h2 class="wp-block-heading has-heading-text-color has-text-color has-heading-h-2-font-size" style="margin-top:24px;margin-bottom:0px;font-weight:800;letter-spacing:-0.01em;line-height:var(--wp--custom--typography--line-height--heading-tight)">The Coaching Team</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"margin":{"top":"48px"}}}} -->
<div class="wp-block-columns" style="margin-top:48px"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"has-border-color","style":{"border":{"width":"1px","radius":"16px"},"spacing":{"blockGap":"0"}},"backgroundColor":"white","borderColor":"stroke","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-stroke-border-color has-white-background-color has-background" style="border-width:1px;border-radius:16px"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","linkDestination":"none","style":{"border":{"radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image has-custom-border" style="margin-top:0;margin-bottom:0"><img src="' . esc_url( $coach_1 ) . '" alt="Portrait of Alex Morgan, Founder and Head Performance Coach" style="border-top-left-radius:16px;border-top-right-radius:16px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;aspect-ratio:4/5;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"22px","right":"22px","bottom":"22px","left":"22px"},"blockGap":"6px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:22px;padding-right:22px;padding-bottom:22px;padding-left:22px"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","lineHeight":"var:custom|typography|line-height|flat","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"heading-h5","fontFamily":"accent"} -->
<p class="has-heading-text-color has-text-color has-accent-font-family has-heading-h-5-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600;line-height:var(--wp--custom--typography--line-height--flat)">Alex Morgan</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"16px","top":"8px"}},"typography":{"fontSize":"12px"}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:8px;margin-bottom:16px;font-size:12px">Founder &amp; Head Performance Coach</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.22em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:0px;font-weight:700;letter-spacing:0.22em;text-transform:uppercase">Strength · Performance</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"has-border-color","style":{"border":{"width":"1px","radius":"16px"},"spacing":{"blockGap":"0"}},"backgroundColor":"white","borderColor":"stroke","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-stroke-border-color has-white-background-color has-background" style="border-width:1px;border-radius:16px"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","linkDestination":"none","style":{"border":{"radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image has-custom-border" style="margin-top:0;margin-bottom:0"><img src="' . esc_url( $coach_2 ) . '" alt="Portrait of Priya Raman, Mobility and Yoga Lead, in a standing yoga pose" style="border-top-left-radius:16px;border-top-right-radius:16px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;aspect-ratio:4/5;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"22px","right":"22px","bottom":"22px","left":"22px"},"blockGap":"6px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:22px;padding-right:22px;padding-bottom:22px;padding-left:22px"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","lineHeight":"var:custom|typography|line-height|flat","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"heading-h5","fontFamily":"accent"} -->
<p class="has-heading-text-color has-text-color has-accent-font-family has-heading-h-5-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600;line-height:var(--wp--custom--typography--line-height--flat)">Priya Raman</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"16px","top":"8px"}},"typography":{"fontSize":"12px"}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:8px;margin-bottom:16px;font-size:12px">Mobility &amp; Yoga Lead</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.22em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:0px;font-weight:700;letter-spacing:0.22em;text-transform:uppercase">Yoga · Mobility</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"has-border-color","style":{"border":{"width":"1px","radius":"16px"},"spacing":{"blockGap":"0"}},"backgroundColor":"white","borderColor":"stroke","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-stroke-border-color has-white-background-color has-background" style="border-width:1px;border-radius:16px"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","linkDestination":"none","style":{"border":{"radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image has-custom-border" style="margin-top:0;margin-bottom:0"><img src="' . esc_url( $coach_3 ) . '" alt="Portrait of Marcus Feld, Conditioning Coach, performing a sled push" style="border-top-left-radius:16px;border-top-right-radius:16px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;aspect-ratio:4/5;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"22px","right":"22px","bottom":"22px","left":"22px"},"blockGap":"6px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:22px;padding-right:22px;padding-bottom:22px;padding-left:22px"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","lineHeight":"var:custom|typography|line-height|flat","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"heading-h5","fontFamily":"accent"} -->
<p class="has-heading-text-color has-text-color has-accent-font-family has-heading-h-5-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600;line-height:var(--wp--custom--typography--line-height--flat)">Marcus Feld</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"16px","top":"8px"}},"typography":{"fontSize":"12px"}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:8px;margin-bottom:16px;font-size:12px">Conditioning Coach</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.22em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:0px;font-weight:700;letter-spacing:0.22em;text-transform:uppercase">Conditioning · HIIT</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"has-border-color","style":{"border":{"width":"1px","radius":"16px"},"spacing":{"blockGap":"0"}},"backgroundColor":"white","borderColor":"stroke","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-stroke-border-color has-white-background-color has-background" style="border-width:1px;border-radius:16px"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","linkDestination":"none","style":{"border":{"radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image has-custom-border" style="margin-top:0;margin-bottom:0"><img src="' . esc_url( $coach_4 ) . '" alt="Portrait of Elena Vos, Recovery and Pilates Coach, leading a reformer class" style="border-top-left-radius:16px;border-top-right-radius:16px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;aspect-ratio:4/5;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"22px","right":"22px","bottom":"22px","left":"22px"},"blockGap":"6px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:22px;padding-right:22px;padding-bottom:22px;padding-left:22px"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","lineHeight":"var:custom|typography|line-height|flat","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"heading-h5","fontFamily":"accent"} -->
<p class="has-heading-text-color has-text-color has-accent-font-family has-heading-h-5-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600;line-height:var(--wp--custom--typography--line-height--flat)">Elena Vos</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"16px","top":"8px"}},"typography":{"fontSize":"12px"}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:8px;margin-bottom:16px;font-size:12px">Recovery &amp; Pilates Coach</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.22em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:0px;font-weight:700;letter-spacing:0.22em;text-transform:uppercase">Pilates · Recovery</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
',
);
