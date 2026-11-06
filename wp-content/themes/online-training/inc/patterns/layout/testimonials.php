<?php
/**
 * Pattern
 *
 * @package OnlineTraining
 * @since 1.0.0
 *
 * slug: testimonials
 * title: Testimonials
 * categories: online-training
 * keywords: testimonials
 */

$avatar_1   = get_template_directory_uri() . '/assets/images/avatar-1.jpg';
$icon_quote = get_template_directory_uri() . '/assets/images/icons/quote.svg';

return array(
	'title'      => __( 'Testimonials', 'online-training' ),
	'categories' => array( 'online-training' ),
	'keywords'   => array( 'testimonials' ),
	'content'    => '
<!-- wp:group {"metadata":{"patternName":"online-training/testimonials","name":"Testimonials","categories":["online-training"]},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"background-light","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group alignfull has-background-light-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"33%","style":{"spacing":{"blockGap":"22px"}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:33%"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|flat"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","fontSize":"medium"} -->
<p class="has-primary-color has-text-color has-medium-font-size" style="margin-top:0px;margin-bottom:0px;line-height:var(--wp--custom--typography--line-height--flat)">──</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.14em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-muted-text-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:0px;font-weight:600;letter-spacing:0.14em;text-transform:uppercase">Member voices</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"style":{"typography":{"fontWeight":"600","lineHeight":"var:custom|typography|line-height|heading-tight","letterSpacing":"-0.01em","fontStyle":"normal"},"spacing":{"margin":{"top":"24px"}}},"textColor":"heading-text","fontSize":"heading-h2","fontFamily":"accent"} -->
<h2 class="wp-block-heading has-heading-text-color has-text-color has-accent-font-family has-heading-h-2-font-size" style="margin-top:24px;font-style:normal;font-weight:600;letter-spacing:-0.01em;line-height:var(--wp--custom--typography--line-height--heading-tight)">What Members Say</h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px","margin":{"top":"32px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:32px"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|flat"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","fontSize":"medium"} -->
<p class="has-primary-color has-text-color has-medium-font-size" style="margin-top:0px;margin-bottom:0px;line-height:var(--wp--custom--typography--line-height--flat)">★★★★★</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|flat","fontSize":"14px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px;line-height:var(--wp--custom--typography--line-height--flat)">4.9 average · 1,120 reviews</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:60%"><!-- wp:html -->
<figure class="wp-block-image size-full quote-icon" style="-webkit-mask-image:url(' . esc_url( $icon_quote ) . ');mask-image:url(' . esc_url( $icon_quote ) . ')"><img src="' . esc_url( $icon_quote ) . '" alt=""/></figure>
<!-- /wp:html -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|body-loose"},"spacing":{"margin":{"top":"32px","bottom":"var:preset|spacing|30"}}},"textColor":"heading-text","fontSize":"xx-large","fontFamily":"accent"} -->
<p class="has-heading-text-color has-text-color has-accent-font-family has-xx-large-font-size" style="margin-top:32px;margin-bottom:var(--wp--preset--spacing--30);line-height:var(--wp--custom--typography--line-height--body-loose)">“Alex is calm, precise, and completely uninterested in hype. Every week had a reason, and the results were quietly obvious by week eight.”</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"40px"},"blockGap":"0"},"layout":{"selfStretch":"fit","flexSize":null},"border":{"bottom":{"color":"var:preset|color|stroke","width":"1px"},"top":[],"right":[],"left":[]}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--stroke);border-bottom-width:1px;padding-top:0;padding-bottom:40px"><!-- wp:group {"style":{"spacing":{"blockGap":"14px"},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"48px","height":"48px","scale":"cover","linkDestination":"none","style":{"border":{"radius":"999px"}}} -->
<figure class="wp-block-image is-resized has-custom-border"><img src="' . esc_url( $avatar_1 ) . '" alt="" style="border-radius:999px;object-fit:cover;width:48px;height:48px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"2px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","lineHeight":"var:custom|typography|line-height|flat","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"medium","fontFamily":"accent"} -->
<p class="has-heading-text-color has-text-color has-accent-font-family has-medium-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600;line-height:var(--wp--custom--typography--line-height--flat)">James Okonkwo</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|flat","fontSize":"12px","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:12px;font-style:normal;font-weight:500;line-height:var(--wp--custom--typography--line-height--flat)">Restaurateur, London · Performance Lab</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"online-training-rating-margin","style":{"typography":{"lineHeight":"var:custom|typography|line-height|flat"},"spacing":{"margin":{"top":"0px","bottom":"0px","left":"60px"}},"layout":{"selfStretch":"fit","flexSize":null}},"textColor":"primary","fontSize":"medium"} -->
<p class="has-primary-color has-text-color has-medium-font-size online-training-rating-margin" style="margin-top:0px;margin-bottom:0px;margin-left:60px;line-height:var(--wp--custom--typography--line-height--flat)">★★★★★</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30)"><!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|flat"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text","fontSize":"small"} -->
<p class="has-muted-text-color has-text-color has-small-font-size" style="margin-top:0px;margin-bottom:0px;line-height:var(--wp--custom--typography--line-height--flat)">──</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|flat"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="margin-top:0px;margin-bottom:0px;line-height:var(--wp--custom--typography--line-height--flat)">──</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|flat"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text","fontSize":"small"} -->
<p class="has-muted-text-color has-text-color has-small-font-size" style="margin-top:0px;margin-bottom:0px;line-height:var(--wp--custom--typography--line-height--flat)">──</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|flat"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text","fontSize":"small"} -->
<p class="has-muted-text-color has-text-color has-small-font-size" style="margin-top:0px;margin-bottom:0px;line-height:var(--wp--custom--typography--line-height--flat)">──</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background-light","textColor":"heading-text","style":{"border":{"radius":"999px","color":"var:preset|color|stroke","width":"1px"},"spacing":{"padding":{"top":"12px","bottom":"12px","left":"16px","right":"16px"}}},"fontSize":"medium"} -->
<div class="wp-block-button"><a href="#" class="wp-block-button__link has-heading-text-color has-background-light-background-color has-text-color has-background has-border-color has-medium-font-size has-custom-font-size wp-element-button" style="border-color:var(--wp--preset--color--stroke);border-width:1px;border-radius:999px;padding-top:12px;padding-right:16px;padding-bottom:12px;padding-left:16px">←</a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"background-light","textColor":"heading-text","style":{"border":{"radius":"999px","color":"var:preset|color|stroke","width":"1px"},"spacing":{"padding":{"top":"12px","bottom":"12px","left":"16px","right":"16px"}}},"fontSize":"medium"} -->
<div class="wp-block-button"><a href="#" class="wp-block-button__link has-heading-text-color has-background-light-background-color has-text-color has-background has-border-color has-medium-font-size has-custom-font-size wp-element-button" style="border-color:var(--wp--preset--color--stroke);border-width:1px;border-radius:999px;padding-top:12px;padding-right:16px;padding-bottom:12px;padding-left:16px">→</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
',
);
