<?php
/**
 * Pattern
 *
 * @package OnlineTraining
 * @since 1.0.0
 *
 * slug: how-it-works
 * title: How It Works
 * categories: online-training
 * keywords: how-it-works
 */

$section_bg = get_template_directory_uri() . '/assets/images/how-it-works-bg.png';

return array(
	'title'      => __( 'How It Works', 'online-training' ),
	'categories' => array( 'online-training' ),
	'keywords'   => array( 'how-it-works' ),
	'content'    => '
<!-- wp:group {"metadata":{"patternName":"online-training/how-it-works","name":"How It Works","categories":["online-training"]},"align":"full","style":{"color":{"gradient":"var(--wp--preset--color--heading-text) url(' . esc_url( $section_bg ) . ') center center / cover no-repeat"},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group alignfull has-background" style="background:var(--wp--preset--color--heading-text) url(' . esc_url( $section_bg ) . ') center center / cover no-repeat;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|flat"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","fontSize":"medium"} -->
<p class="has-primary-color has-text-color has-medium-font-size" style="margin-top:0px;margin-bottom:0px;line-height:var(--wp--custom--typography--line-height--flat)">──</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.14em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"ink-muted","fontSize":"x-small"} -->
<p class="has-ink-muted-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:0px;font-weight:600;letter-spacing:0.14em;text-transform:uppercase">The LMS</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"style":{"typography":{"fontWeight":"600","lineHeight":"var:custom|typography|line-height|heading-tight","letterSpacing":"-0.01em","fontStyle":"normal"},"spacing":{"margin":{"bottom":"0px","top":"24px"}}},"textColor":"text-soft","fontSize":"heading-h2","fontFamily":"accent"} -->
<h2 class="wp-block-heading has-text-soft-color has-text-color has-accent-font-family has-heading-h-2-font-size" style="margin-top:24px;margin-bottom:0px;font-style:normal;font-weight:600;letter-spacing:-0.01em;line-height:var(--wp--custom--typography--line-height--heading-tight)">Your Training.<br>Structured Around You.</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"64px"}},"border":{"color":"#ffffff1f","width":"1px","radius":"18px"}},"backgroundColor":"heading-text","layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color has-heading-text-background-color has-background" style="border-color:#ffffff1f;border-width:1px;border-radius:18px;margin-top:64px"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"0"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"padding":{"top":"32px","right":"33px","bottom":"32px","left":"33px"}},"border":{"right":{"color":"#ffffff1f","width":"1px"},"top":[],"bottom":[],"left":[]}}} -->
<div class="wp-block-column" style="border-right-color:#ffffff1f;border-right-width:1px;padding-top:32px;padding-right:33px;padding-bottom:32px;padding-left:33px"><!-- wp:group {"style":{"spacing":{"blockGap":"14px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"400","lineHeight":"var:custom|typography|line-height|flat","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","fontSize":"heading-h3","fontFamily":"accent"} -->
<p class="has-primary-color has-text-color has-accent-font-family has-heading-h-3-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:400;line-height:var(--wp--custom--typography--line-height--flat)">01</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"600","lineHeight":"var:custom|typography|line-height|card-title","fontStyle":"normal"},"spacing":{"margin":{"top":"32px","bottom":"12px"}}},"textColor":"text-soft","fontSize":"large","fontFamily":"accent"} -->
<h4 class="wp-block-heading has-text-soft-color has-text-color has-accent-font-family has-large-font-size" style="margin-top:32px;margin-bottom:12px;font-style:normal;font-weight:600;line-height:var(--wp--custom--typography--line-height--card-title)">Choose Your Course</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|minor"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"paragraph-text","fontSize":"small"} -->
<p class="has-paragraph-text-color has-text-color has-small-font-size" style="margin-top:0px;margin-bottom:0px;line-height:var(--wp--custom--typography--line-height--minor)">Answer six questions and we match you to the block that fits your goal, schedule, and equipment.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"32px","right":"33px","bottom":"32px","left":"33px"}},"border":{"right":{"color":"#ffffff1f","width":"1px"},"top":[],"bottom":[],"left":[]}}} -->
<div class="wp-block-column" style="border-right-color:#ffffff1f;border-right-width:1px;padding-top:32px;padding-right:33px;padding-bottom:32px;padding-left:33px"><!-- wp:group {"style":{"spacing":{"blockGap":"14px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"400","lineHeight":"var:custom|typography|line-height|flat","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","fontSize":"heading-h3","fontFamily":"accent"} -->
<p class="has-primary-color has-text-color has-accent-font-family has-heading-h-3-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:400;line-height:var(--wp--custom--typography--line-height--flat)">02</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"600","lineHeight":"var:custom|typography|line-height|card-title","fontStyle":"normal"},"spacing":{"margin":{"top":"32px","bottom":"12px"}}},"textColor":"text-soft","fontSize":"large","fontFamily":"accent"} -->
<h4 class="wp-block-heading has-text-soft-color has-text-color has-accent-font-family has-large-font-size" style="margin-top:32px;margin-bottom:12px;font-style:normal;font-weight:600;line-height:var(--wp--custom--typography--line-height--card-title)">Follow Your Weekly Plan</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|minor"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"paragraph-text","fontSize":"small"} -->
<p class="has-paragraph-text-color has-text-color has-small-font-size" style="margin-top:0px;margin-bottom:0px;line-height:var(--wp--custom--typography--line-height--minor)">Sessions land in your dashboard every Sunday, with video for every movement.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"32px","right":"33px","bottom":"32px","left":"33px"}},"border":{"right":{"color":"#ffffff1f","width":"1px"},"top":[],"bottom":[],"left":[]}}} -->
<div class="wp-block-column" style="border-right-color:#ffffff1f;border-right-width:1px;padding-top:32px;padding-right:33px;padding-bottom:32px;padding-left:33px"><!-- wp:group {"style":{"spacing":{"blockGap":"14px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"400","lineHeight":"var:custom|typography|line-height|flat","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","fontSize":"heading-h3","fontFamily":"accent"} -->
<p class="has-primary-color has-text-color has-accent-font-family has-heading-h-3-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:400;line-height:var(--wp--custom--typography--line-height--flat)">03</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"600","lineHeight":"var:custom|typography|line-height|card-title","fontStyle":"normal"},"spacing":{"margin":{"top":"32px","bottom":"12px"}}},"textColor":"text-soft","fontSize":"large","fontFamily":"accent"} -->
<h4 class="wp-block-heading has-text-soft-color has-text-color has-accent-font-family has-large-font-size" style="margin-top:32px;margin-bottom:12px;font-style:normal;font-weight:600;line-height:var(--wp--custom--typography--line-height--card-title)">Track Your Progress</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|minor"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"paragraph-text","fontSize":"small"} -->
<p class="has-paragraph-text-color has-text-color has-small-font-size" style="margin-top:0px;margin-bottom:0px;line-height:var(--wp--custom--typography--line-height--minor)">Log loads, mark lessons complete, and watch your weekly numbers move.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"32px","right":"33px","bottom":"32px","left":"33px"}}}} -->
<div class="wp-block-column" style="padding-top:32px;padding-right:33px;padding-bottom:32px;padding-left:33px"><!-- wp:group {"style":{"spacing":{"blockGap":"14px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"400","lineHeight":"var:custom|typography|line-height|flat","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","fontSize":"heading-h3","fontFamily":"accent"} -->
<p class="has-primary-color has-text-color has-accent-font-family has-heading-h-3-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:400;line-height:var(--wp--custom--typography--line-height--flat)">04</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"600","lineHeight":"var:custom|typography|line-height|card-title","fontStyle":"normal"},"spacing":{"margin":{"top":"32px","bottom":"12px"}}},"textColor":"text-soft","fontSize":"large","fontFamily":"accent"} -->
<h4 class="wp-block-heading has-text-soft-color has-text-color has-accent-font-family has-large-font-size" style="margin-top:32px;margin-bottom:12px;font-style:normal;font-weight:600;line-height:var(--wp--custom--typography--line-height--card-title)">Become Stronger Every Week</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|minor"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"paragraph-text","fontSize":"small"} -->
<p class="has-paragraph-text-color has-text-color has-small-font-size" style="margin-top:0px;margin-bottom:0px;line-height:var(--wp--custom--typography--line-height--minor)">Testing weeks confirm the progress, then the next block is built from your data.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"48px","bottom":"0px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons" style="margin-top:48px;margin-bottom:0px"><!-- wp:button {"backgroundColor":"primary","textColor":"white","style":{"border":{"radius":"50px"},"typography":{"fontWeight":"600","fontSize":"14px"},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"28px","right":"28px"}}}} -->
<div class="wp-block-button"><a href="#" class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background has-custom-font-size wp-element-button" style="border-radius:50px;padding-top:16px;padding-right:28px;padding-bottom:16px;padding-left:28px;font-size:14px;font-weight:600">See the member dashboard →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
',
);
