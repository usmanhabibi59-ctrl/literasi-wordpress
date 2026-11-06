<?php
/**
 * Pattern
 *
 * @package OnlineTraining
 * @since 1.0.0
 *
 * slug: blog-articles
 * title: Blog - Filter & Article Grid
 * categories: online-training
 * keywords: blog
 */

$course_2    = get_template_directory_uri() . '/assets/images/course-2.jpg';
$course_3    = get_template_directory_uri() . '/assets/images/course-3.jpg';
$course_4    = get_template_directory_uri() . '/assets/images/course-4.jpg';
$course_5    = get_template_directory_uri() . '/assets/images/course-5.jpg';
$course_6    = get_template_directory_uri() . '/assets/images/course-6.jpg';
$course_8    = get_template_directory_uri() . '/assets/images/course-8.jpg';
$course_9    = get_template_directory_uri() . '/assets/images/course-9.jpg';
$course_10   = get_template_directory_uri() . '/assets/images/course-10.jpg';
$course_11   = get_template_directory_uri() . '/assets/images/course-11.jpg';
$icon_search = file_get_contents( get_template_directory() . '/assets/images/icons/search.svg' );

return array(
	'title'      => __( 'Blog - Filter & Article Grid', 'online-training' ),
	'categories' => array( 'online-training' ),
	'keywords'   => array( 'blog' ),
	'content'    => '
<!-- wp:group {"metadata":{"patternName":"online-training/blog-articles","name":"Blog - Filter \u0026 Article Grid","categories":["online-training"]},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"background-dark","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group alignfull has-background-dark-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|stroke","width":"1px"},"bottom":{"color":"var:preset|color|stroke","width":"1px"},"left":[],"right":[]},"spacing":{"padding":{"top":"24px","bottom":"24px"},"margin":{"bottom":"56px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--stroke);border-top-width:1px;border-bottom-color:var(--wp--preset--color--stroke);border-bottom-width:1px;margin-bottom:56px;padding-top:24px;padding-bottom:24px"><!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.18em","textTransform":"uppercase"},"spacing":{"padding":{"top":"8px","right":"16px","bottom":"8px","left":"16px"}},"border":{"radius":"999px"}},"backgroundColor":"primary","textColor":"heading-text","fontSize":"x-small"} -->
<p class="has-heading-text-color has-primary-background-color has-text-color has-background has-x-small-font-size" style="border-radius:999px;padding-top:8px;padding-right:16px;padding-bottom:8px;padding-left:16px;font-weight:700;letter-spacing:0.18em;text-transform:uppercase"><a href="#" style="color:inherit;text-decoration:none">All</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"border":{"width":"1px","color":"var:preset|color|stroke","radius":"999px"},"typography":{"fontWeight":"700","letterSpacing":"0.18em","textTransform":"uppercase"},"spacing":{"padding":{"top":"8px","right":"16px","bottom":"8px","left":"16px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-border-color has-muted-text-color has-text-color has-x-small-font-size" style="border-color:var(--wp--preset--color--stroke);border-width:1px;border-radius:999px;padding-top:8px;padding-right:16px;padding-bottom:8px;padding-left:16px;font-weight:700;letter-spacing:0.18em;text-transform:uppercase"><a href="#" style="color:inherit;text-decoration:none">Training</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"border":{"width":"1px","color":"var:preset|color|stroke","radius":"999px"},"typography":{"fontWeight":"700","letterSpacing":"0.18em","textTransform":"uppercase"},"spacing":{"padding":{"top":"8px","right":"16px","bottom":"8px","left":"16px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-border-color has-muted-text-color has-text-color has-x-small-font-size" style="border-color:var(--wp--preset--color--stroke);border-width:1px;border-radius:999px;padding-top:8px;padding-right:16px;padding-bottom:8px;padding-left:16px;font-weight:700;letter-spacing:0.18em;text-transform:uppercase"><a href="#" style="color:inherit;text-decoration:none">Nutrition</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"border":{"width":"1px","color":"var:preset|color|stroke","radius":"999px"},"typography":{"fontWeight":"700","letterSpacing":"0.18em","textTransform":"uppercase"},"spacing":{"padding":{"top":"8px","right":"16px","bottom":"8px","left":"16px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-border-color has-muted-text-color has-text-color has-x-small-font-size" style="border-color:var(--wp--preset--color--stroke);border-width:1px;border-radius:999px;padding-top:8px;padding-right:16px;padding-bottom:8px;padding-left:16px;font-weight:700;letter-spacing:0.18em;text-transform:uppercase"><a href="#" style="color:inherit;text-decoration:none">Recovery</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"border":{"width":"1px","color":"var:preset|color|stroke","radius":"999px"},"typography":{"fontWeight":"700","letterSpacing":"0.18em","textTransform":"uppercase"},"spacing":{"padding":{"top":"8px","right":"16px","bottom":"8px","left":"16px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-border-color has-muted-text-color has-text-color has-x-small-font-size" style="border-color:var(--wp--preset--color--stroke);border-width:1px;border-radius:999px;padding-top:8px;padding-right:16px;padding-bottom:8px;padding-left:16px;font-weight:700;letter-spacing:0.18em;text-transform:uppercase"><a href="#" style="color:inherit;text-decoration:none">Yoga</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"border":{"width":"1px","color":"var:preset|color|stroke","radius":"999px"},"typography":{"fontWeight":"700","letterSpacing":"0.18em","textTransform":"uppercase"},"spacing":{"padding":{"top":"8px","right":"16px","bottom":"8px","left":"16px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-border-color has-muted-text-color has-text-color has-x-small-font-size" style="border-color:var(--wp--preset--color--stroke);border-width:1px;border-radius:999px;padding-top:8px;padding-right:16px;padding-bottom:8px;padding-left:16px;font-weight:700;letter-spacing:0.18em;text-transform:uppercase"><a href="#" style="color:inherit;text-decoration:none">Mobility</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"border":{"width":"1px","color":"var:preset|color|stroke","radius":"999px"},"typography":{"fontWeight":"700","letterSpacing":"0.18em","textTransform":"uppercase"},"spacing":{"padding":{"top":"8px","right":"16px","bottom":"8px","left":"16px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-border-color has-muted-text-color has-text-color has-x-small-font-size" style="border-color:var(--wp--preset--color--stroke);border-width:1px;border-radius:999px;padding-top:8px;padding-right:16px;padding-bottom:8px;padding-left:16px;font-weight:700;letter-spacing:0.18em;text-transform:uppercase"><a href="#" style="color:inherit;text-decoration:none">Mindset</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div style="position:relative;width:280px;max-width:100%"><span style="position:absolute;left:16px;top:50%;transform:translateY(-50%);display:flex;color:var(--wp--preset--color--muted-text);pointer-events:none">' . $icon_search . '</span><label for="blog-search" style="position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border:0">Search articles</label><input type="search" id="blog-search" placeholder="Search articles" style="width:100%;height:44px;border-radius:999px;border:1px solid var(--wp--preset--color--stroke);background:var(--wp--preset--color--white);padding:0 16px 0 44px;font-family:var(--wp--preset--font-family--primary);font-size:14px;color:var(--wp--preset--color--heading-text)"></div>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"48px","left":"48px"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"lightbox":{"enabled":false},"aspectRatio":"16/10","scale":"cover","sizeSlug":"full","linkDestination":"custom","style":{"border":{"radius":"14px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image size-full has-custom-border" style="margin-top:0;margin-bottom:0"><a href="#"><img src="' . esc_url( $course_2 ) . '" alt="" style="border-radius:14px;aspect-ratio:16/10;object-fit:cover"/></a></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.14em","textTransform":"uppercase"},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"0px"}}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:0px;font-weight:700;letter-spacing:0.14em;text-transform:uppercase">Recovery</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"500","letterSpacing":"-0.025em","fontStyle":"normal","lineHeight":"1.38"},"spacing":{"margin":{"top":"12px","bottom":"12px"}}},"textColor":"heading-text","fontSize":"large","fontFamily":"accent"} -->
<h3 class="wp-block-heading has-heading-text-color has-text-color has-accent-font-family has-large-font-size" style="margin-top:12px;margin-bottom:12px;font-style:normal;font-weight:500;letter-spacing:-0.025em;line-height:1.38"><a href="#" style="color:inherit;text-decoration:none">Why Recovery Is Part of our Training</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|minor","fontSize":"14px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px;line-height:var(--wp--custom--typography--line-height--minor)">Sleep, deloads, and easy days are not rewards for hard work. They are the mechanism through which hard wor...</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|flat","fontSize":"12px"},"spacing":{"margin":{"top":"20px","bottom":"0px"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:20px;margin-bottom:0px;font-size:12px;line-height:var(--wp--custom--typography--line-height--flat)">Elena Vos · 4 August 2026 · 6 min read</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"lightbox":{"enabled":false},"aspectRatio":"16/10","scale":"cover","sizeSlug":"full","linkDestination":"custom","style":{"border":{"radius":"14px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image size-full has-custom-border" style="margin-top:0;margin-bottom:0"><a href="#"><img src="' . esc_url( $course_3 ) . '" alt="" style="border-radius:14px;aspect-ratio:16/10;object-fit:cover"/></a></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.14em","textTransform":"uppercase"},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"0px"}}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:0px;font-weight:700;letter-spacing:0.14em;text-transform:uppercase">Training</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"500","letterSpacing":"-0.025em","fontStyle":"normal","lineHeight":"1.38"},"spacing":{"margin":{"top":"12px","bottom":"12px"}}},"textColor":"heading-text","fontSize":"large","fontFamily":"accent"} -->
<h3 class="wp-block-heading has-heading-text-color has-text-color has-accent-font-family has-large-font-size" style="margin-top:12px;margin-bottom:12px;font-style:normal;font-weight:500;letter-spacing:-0.025em;line-height:1.38"><a href="#" style="color:inherit;text-decoration:none">The Beginner\'s Guide to Progressive Overload</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|minor","fontSize":"14px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px;line-height:var(--wp--custom--typography--line-height--minor)">Adding weight is only one of five levers. Learn the others and your progress stops stalling at month three.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|flat","fontSize":"12px"},"spacing":{"margin":{"top":"20px","bottom":"0px"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:20px;margin-bottom:0px;font-size:12px;line-height:var(--wp--custom--typography--line-height--flat)">Marcus Feld · 27 July 2026 · 9 min read</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"lightbox":{"enabled":false},"aspectRatio":"16/10","scale":"cover","sizeSlug":"full","linkDestination":"custom","style":{"border":{"radius":"14px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image size-full has-custom-border" style="margin-top:0;margin-bottom:0"><a href="#"><img src="' . esc_url( $course_4 ) . '" alt="" style="border-radius:14px;aspect-ratio:16/10;object-fit:cover"/></a></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.14em","textTransform":"uppercase"},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"0px"}}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:0px;font-weight:700;letter-spacing:0.14em;text-transform:uppercase">Mobility</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"500","letterSpacing":"-0.025em","fontStyle":"normal","lineHeight":"1.38"},"spacing":{"margin":{"top":"12px","bottom":"12px"}}},"textColor":"heading-text","fontSize":"large","fontFamily":"accent"} -->
<h3 class="wp-block-heading has-heading-text-color has-text-color has-accent-font-family has-large-font-size" style="margin-top:12px;margin-bottom:12px;font-style:normal;font-weight:500;letter-spacing:-0.025em;line-height:1.38"><a href="#" style="color:inherit;text-decoration:none">5 Mobility Habits That Improve Every Workout</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|minor","fontSize":"14px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px;line-height:var(--wp--custom--typography--line-height--minor)">Ten focused minutes before you lift will do more for your positions than an hour of static stretching after.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|flat","fontSize":"12px"},"spacing":{"margin":{"top":"20px","bottom":"0px"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:20px;margin-bottom:0px;font-size:12px;line-height:var(--wp--custom--typography--line-height--flat)">Priya Raman · 19 July 2026 · 5 min read</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"48px","left":"48px"},"margin":{"top":"48px"}}}} -->
<div class="wp-block-columns" style="margin-top:48px"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"lightbox":{"enabled":false},"aspectRatio":"16/10","scale":"cover","sizeSlug":"full","linkDestination":"custom","style":{"border":{"radius":"14px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image size-full has-custom-border" style="margin-top:0;margin-bottom:0"><a href="#"><img src="' . esc_url( $course_11 ) . '" alt="" style="border-radius:14px;aspect-ratio:16/10;object-fit:cover"/></a></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.14em","textTransform":"uppercase"},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"0px"}}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:0px;font-weight:700;letter-spacing:0.14em;text-transform:uppercase">Nutrition</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"500","letterSpacing":"-0.025em","fontStyle":"normal","lineHeight":"1.38"},"spacing":{"margin":{"top":"12px","bottom":"12px"}}},"textColor":"heading-text","fontSize":"large","fontFamily":"accent"} -->
<h3 class="wp-block-heading has-heading-text-color has-text-color has-accent-font-family has-large-font-size" style="margin-top:12px;margin-bottom:12px;font-style:normal;font-weight:500;letter-spacing:-0.025em;line-height:1.38"><a href="#" style="color:inherit;text-decoration:none">Eating Enough Protein Without Obsessing Over It</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|minor","fontSize":"14px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px;line-height:var(--wp--custom--typography--line-height--minor)">A simple anchoring method that keeps intake consistent without weighing every meal you eat.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|flat","fontSize":"12px"},"spacing":{"margin":{"top":"20px","bottom":"0px"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:20px;margin-bottom:0px;font-size:12px;line-height:var(--wp--custom--typography--line-height--flat)">Naomi Cruz · 11 July 2026 · 6 min read</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"lightbox":{"enabled":false},"aspectRatio":"16/10","scale":"cover","sizeSlug":"full","linkDestination":"custom","style":{"border":{"radius":"14px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image size-full has-custom-border" style="margin-top:0;margin-bottom:0"><a href="#"><img src="' . esc_url( $course_10 ) . '" alt="" style="border-radius:14px;aspect-ratio:16/10;object-fit:cover"/></a></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.14em","textTransform":"uppercase"},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"0px"}}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:0px;font-weight:700;letter-spacing:0.14em;text-transform:uppercase">Mindset</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"500","letterSpacing":"-0.025em","fontStyle":"normal","lineHeight":"1.38"},"spacing":{"margin":{"top":"12px","bottom":"12px"}}},"textColor":"heading-text","fontSize":"large","fontFamily":"accent"} -->
<h3 class="wp-block-heading has-heading-text-color has-text-color has-accent-font-family has-large-font-size" style="margin-top:12px;margin-bottom:12px;font-style:normal;font-weight:500;letter-spacing:-0.025em;line-height:1.38"><a href="#" style="color:inherit;text-decoration:none">Training Through Genuinely Stressful Seasons</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|minor","fontSize":"14px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px;line-height:var(--wp--custom--typography--line-height--minor)">What to cut, what to keep, and how to return without losing the months you already invested.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|flat","fontSize":"12px"},"spacing":{"margin":{"top":"20px","bottom":"0px"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:20px;margin-bottom:0px;font-size:12px;line-height:var(--wp--custom--typography--line-height--flat)">Alex Morgan · 13 May 2026 · 7 min read</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"lightbox":{"enabled":false},"aspectRatio":"16/10","scale":"cover","sizeSlug":"full","linkDestination":"custom","style":{"border":{"radius":"14px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image size-full has-custom-border" style="margin-top:0;margin-bottom:0"><a href="#"><img src="' . esc_url( $course_6 ) . '" alt="" style="border-radius:14px;aspect-ratio:16/10;object-fit:cover"/></a></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.14em","textTransform":"uppercase"},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"0px"}}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:0px;font-weight:700;letter-spacing:0.14em;text-transform:uppercase">Yoga</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"500","letterSpacing":"-0.025em","fontStyle":"normal","lineHeight":"1.38"},"spacing":{"margin":{"top":"12px","bottom":"12px"}}},"textColor":"heading-text","fontSize":"large","fontFamily":"accent"} -->
<h3 class="wp-block-heading has-heading-text-color has-text-color has-accent-font-family has-large-font-size" style="margin-top:12px;margin-bottom:12px;font-style:normal;font-weight:500;letter-spacing:-0.025em;line-height:1.38"><a href="#" style="color:inherit;text-decoration:none">Yoga for Lifters: What Actually Transfers</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|minor","fontSize":"14px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px;line-height:var(--wp--custom--typography--line-height--minor)">Not every flow helps your squat. These four sequences do, and here is the reasoning behind each one.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|flat","fontSize":"12px"},"spacing":{"margin":{"top":"20px","bottom":"0px"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:20px;margin-bottom:0px;font-size:12px;line-height:var(--wp--custom--typography--line-height--flat)">Priya Raman · 24 June 2026 · 7 min read</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"48px","left":"48px"},"margin":{"top":"48px"}}}} -->
<div class="wp-block-columns" style="margin-top:48px"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"lightbox":{"enabled":false},"aspectRatio":"16/10","scale":"cover","sizeSlug":"full","linkDestination":"custom","style":{"border":{"radius":"14px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image size-full has-custom-border" style="margin-top:0;margin-bottom:0"><a href="#"><img src="' . esc_url( $course_9 ) . '" alt="" style="border-radius:14px;aspect-ratio:16/10;object-fit:cover"/></a></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.14em","textTransform":"uppercase"},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"0px"}}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:0px;font-weight:700;letter-spacing:0.14em;text-transform:uppercase">Mindset</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"500","letterSpacing":"-0.025em","fontStyle":"normal","lineHeight":"1.38"},"spacing":{"margin":{"top":"12px","bottom":"12px"}}},"textColor":"heading-text","fontSize":"large","fontFamily":"accent"} -->
<h3 class="wp-block-heading has-heading-text-color has-text-color has-accent-font-family has-large-font-size" style="margin-top:12px;margin-bottom:12px;font-style:normal;font-weight:500;letter-spacing:-0.025em;line-height:1.38"><a href="#" style="color:inherit;text-decoration:none">The Two-Week Restart After a Long Break</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|minor","fontSize":"14px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px;line-height:var(--wp--custom--typography--line-height--minor)">Returning after months away is a skill. Do these two weeks properly and you keep more than you expect.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|flat","fontSize":"12px"},"spacing":{"margin":{"top":"20px","bottom":"0px"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:20px;margin-bottom:0px;font-size:12px;line-height:var(--wp--custom--typography--line-height--flat)">Alex Morgan · 13 May 2026 · 7 min read</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"lightbox":{"enabled":false},"aspectRatio":"16/10","scale":"cover","sizeSlug":"full","linkDestination":"custom","style":{"border":{"radius":"14px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image size-full has-custom-border" style="margin-top:0;margin-bottom:0"><a href="#"><img src="' . esc_url( $course_5 ) . '" alt="" style="border-radius:14px;aspect-ratio:16/10;object-fit:cover"/></a></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.14em","textTransform":"uppercase"},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"0px"}}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:0px;font-weight:700;letter-spacing:0.14em;text-transform:uppercase">Training</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"500","letterSpacing":"-0.025em","fontStyle":"normal","lineHeight":"1.38"},"spacing":{"margin":{"top":"12px","bottom":"12px"}}},"textColor":"heading-text","fontSize":"large","fontFamily":"accent"} -->
<h3 class="wp-block-heading has-heading-text-color has-text-color has-accent-font-family has-large-font-size" style="margin-top:12px;margin-bottom:12px;font-style:normal;font-weight:500;letter-spacing:-0.025em;line-height:1.38"><a href="#" style="color:inherit;text-decoration:none">Volume Landmarks: How Much Is Actually Enough?</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|minor","fontSize":"14px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px;line-height:var(--wp--custom--typography--line-height--minor)">Minimum effective volume, maximum recoverable volume, and how to find your own numbers in six weeks.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|flat","fontSize":"12px"},"spacing":{"margin":{"top":"20px","bottom":"0px"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:20px;margin-bottom:0px;font-size:12px;line-height:var(--wp--custom--typography--line-height--flat)">Marcus Feld· 8 July 2026 · 10 min read</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"lightbox":{"enabled":false},"aspectRatio":"16/10","scale":"cover","sizeSlug":"full","linkDestination":"custom","style":{"border":{"radius":"14px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image size-full has-custom-border" style="margin-top:0;margin-bottom:0"><a href="#"><img src="' . esc_url( $course_8 ) . '" alt="" style="border-radius:14px;aspect-ratio:16/10;object-fit:cover"/></a></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.14em","textTransform":"uppercase"},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"0px"}}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:0px;font-weight:700;letter-spacing:0.14em;text-transform:uppercase">Training</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"500","letterSpacing":"-0.025em","fontStyle":"normal","lineHeight":"1.38"},"spacing":{"margin":{"top":"12px","bottom":"12px"}}},"textColor":"heading-text","fontSize":"large","fontFamily":"accent"} -->
<h3 class="wp-block-heading has-heading-text-color has-text-color has-accent-font-family has-large-font-size" style="margin-top:12px;margin-bottom:12px;font-style:normal;font-weight:500;letter-spacing:-0.025em;line-height:1.38"><a href="#" style="color:inherit;text-decoration:none">Core Training That Transfers to Real Lifts</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|minor","fontSize":"14px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px;line-height:var(--wp--custom--typography--line-height--minor)">Anti-rotation, anti-extension, and bracing drills that make heavy squats and carries feel steadier.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|flat","fontSize":"12px"},"spacing":{"margin":{"top":"20px","bottom":"0px"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:20px;margin-bottom:0px;font-size:12px;line-height:var(--wp--custom--typography--line-height--flat)">Elena Vos · 29 May 2026· 6 min read</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
',
);
