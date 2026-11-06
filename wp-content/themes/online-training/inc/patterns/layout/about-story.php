<?php
/**
 * Pattern
 *
 * @package OnlineTraining
 * @since 1.0.0
 *
 * slug: about-story
 * title: About - Story
 * categories: online-training
 * keywords: about
 */

$img = get_template_directory_uri() . '/assets/images/coach.jpg';

return array(
	'title'      => __( 'About - Story', 'online-training' ),
	'categories' => array( 'online-training' ),
	'keywords'   => array( 'about' ),
	'content'    => '
<!-- wp:group {"metadata":{"patternName":"online-training/about-story","name":"About - Story","categories":["online-training"]},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"background-light","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group alignfull has-background-light-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:45%"><!-- wp:image {"id":43,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"22px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image size-large has-custom-border" style="margin-top:0;margin-bottom:0"><img src="' . esc_url( $img ) . '" alt="" class="wp-image-43" style="border-radius:22px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:55%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|flat"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","fontSize":"medium"} -->
<p class="has-primary-color has-text-color has-medium-font-size" style="margin-top:0px;margin-bottom:0px;line-height:var(--wp--custom--typography--line-height--flat)">──</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.14em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-muted-text-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:0px;font-weight:600;letter-spacing:0.14em;text-transform:uppercase">The story</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"style":{"typography":{"fontWeight":"800","lineHeight":"var:custom|typography|line-height|heading-tight","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"24px"}}},"textColor":"heading-text","fontSize":"heading-h2"} -->
<h2 class="wp-block-heading has-heading-text-color has-text-color has-heading-h-2-font-size" style="margin-top:24px;font-weight:800;letter-spacing:-0.01em;line-height:var(--wp--custom--typography--line-height--heading-tight)">From One Studio to 32 Countries.</h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0"},"blockGap":"20px","margin":{"top":"32px"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="margin-top:32px;padding-top:0"><!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","lineHeight":"1.85"},"spacing":{"margin":{"bottom":"0px"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-bottom:0px;font-size:14px;line-height:1.85">Alex Morgan started coaching in 2011, working with post-rehabilitation clients who had been told to "take it easy" and given nothing to actually do. That gap — between medical caution and real training — shaped everything that followed.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.85","fontSize":"14px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px;line-height:1.85">By 2015 the first VOLTERRA studio opened with twelve members and a whiteboard. The programming framework that still runs every course today was written in that room: assess, build, measure, adjust, repeat.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.85","fontSize":"14px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px;line-height:1.85">In 2021 the methodology moved online. Not as a video library, but as a structured academy — weekly plans, filmed technique lessons, progress tracking, and coaches who read your check-ins.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"left":{"color":"var:preset|color|primary","width":"1px"},"top":[],"right":[],"bottom":[]},"spacing":{"margin":{"top":"40px","bottom":"0"},"padding":{"left":"24px"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="border-left-color:var(--wp--preset--color--primary);border-left-width:1px;margin-top:40px;margin-bottom:0;padding-left:24px"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-text"}}},"typography":{"fontStyle":"normal","fontWeight":"300","lineHeight":"1.63","fontSize":"20px"}},"textColor":"heading-text","fontFamily":"accent"} -->
<p class="has-heading-text-color has-text-color has-link-color has-accent-font-family" style="margin-top:0px;margin-bottom:0px;font-size:20px;font-style:normal;font-weight:300;line-height:1.63">“The best course is the one you can still be running in eleven months. Everything else is entertainment.”</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|muted-text"}}},"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"16px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-muted-text-color has-text-color has-link-color has-x-small-font-size" style="margin-top:16px;font-style:normal;font-weight:600">ALEX MORGAN</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
',
);
