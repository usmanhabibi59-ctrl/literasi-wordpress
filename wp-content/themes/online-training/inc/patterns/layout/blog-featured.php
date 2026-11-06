<?php
/**
 * Pattern
 *
 * @package OnlineTraining
 * @since 1.0.0
 *
 * slug: blog-featured
 * title: Blog - Featured Post
 * categories: online-training
 * keywords: blog
 */

$course_1 = get_template_directory_uri() . '/assets/images/course-1.jpg';

return array(
	'title'      => __( 'Blog - Featured Post', 'online-training' ),
	'categories' => array( 'online-training' ),
	'keywords'   => array( 'blog' ),
	'content'    => '
<!-- wp:group {"metadata":{"patternName":"online-training/blog-featured","name":"Blog - Featured Post","categories":["online-training"]},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"background-dark","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group alignfull has-background-dark-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"spacing":{"padding":{"bottom":"0px","left":"0px","right":"0px","top":"0px"},"blockGap":{"top":"0px","left":"0px"}},"border":{"width":"1px","radius":{"topLeft":"32px","topRight":"32px","bottomLeft":"32px","bottomRight":"32px"}}},"backgroundColor":"white","borderColor":"stroke"} -->
<div class="wp-block-columns has-border-color has-stroke-border-color has-white-background-color has-background" style="border-width:1px;border-top-left-radius:32px;border-top-right-radius:32px;border-bottom-left-radius:32px;border-bottom-right-radius:32px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"width":"50%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:cover {"url":"' . esc_url( $course_1 ) . '","dimRatio":0,"style":{"border":{"radius":{"topLeft":"32px","topRight":"0px","bottomLeft":"32px","bottomRight":"0px"}},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
<div class="wp-block-cover is-light" style="border-top-left-radius:32px;border-top-right-radius:0px;border-bottom-left-radius:32px;border-bottom-right-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><img class="wp-block-cover__image-background" alt="" src="' . esc_url( $course_1 ) . '" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"padding":{"top":"52px","bottom":"52px","left":"72px","right":"60px"}},"border":{"radius":{"topRight":"32px","bottomRight":"32px"}}},"backgroundColor":"white"} -->
<div class="wp-block-column is-vertically-aligned-center has-white-background-color has-background" style="border-top-right-radius:32px;border-bottom-right-radius:32px;padding-top:52px;padding-right:60px;padding-bottom:52px;padding-left:72px;flex-basis:50%"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|flat"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","fontSize":"medium"} -->
<p class="has-primary-color has-text-color has-medium-font-size" style="margin-top:0px;margin-bottom:0px;line-height:var(--wp--custom--typography--line-height--flat)">──</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.14em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-muted-text-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:0px;font-weight:600;letter-spacing:0.14em;text-transform:uppercase">Featured · Training</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"style":{"typography":{"fontWeight":"600","lineHeight":"1.1","letterSpacing":"-0.03em","fontStyle":"normal","fontSize":"36px"},"spacing":{"margin":{"top":"24px","bottom":"0px"}}},"textColor":"heading-text","fontFamily":"accent"} -->
<h2 class="wp-block-heading has-heading-text-color has-text-color has-accent-font-family" style="margin-top:24px;margin-bottom:0px;font-size:36px;font-style:normal;font-weight:600;letter-spacing:-0.03em;line-height:1.1"><a href="#" style="color:inherit;text-decoration:none">How to Build Strength Without Training Every Day</a></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|minor","fontSize":"14px"},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"28px"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:28px;font-size:14px;line-height:var(--wp--custom--typography--line-height--minor)">Three well-structured sessions a week outperform six unfocused ones. Here is the frequency model we use with busy clients.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.75","fontSize":"12px","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"22px","bottom":"0px"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:22px;margin-bottom:0px;font-size:12px;font-style:normal;font-weight:500;line-height:1.75">Alex Morgan · 12 August 2026 · 7 min read</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"32px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons" style="margin-top:32px"><!-- wp:button {"textColor":"heading-text","className":"is-style-link","style":{"typography":{"fontWeight":"600","fontSize":"14px","textTransform":"none"},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"color":{"background":"transparent"},"border":{"radius":"0px"}}} -->
<div class="wp-block-button is-style-link"><a class="wp-block-button__link has-heading-text-color has-text-color has-background has-custom-font-size wp-element-button" href="#" style="border-radius:0px;background-color:transparent;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-size:14px;font-weight:600;text-transform:none">Read the article <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color">→</mark></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
',
);
