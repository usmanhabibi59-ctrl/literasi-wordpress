<?php
/**
 * Pattern
 *
 * @package OnlineTraining
 * @since 1.0.0
 *
 * slug: archive
 * title: Archive
 * categories: online-training
 * keywords: archive
 */

return array(
	'title'      => __( 'Archive', 'online-training' ),
	'categories' => array( 'online-training' ),
	'keywords'   => array( 'archive' ),
	'content'    => '

<!-- wp:group {"tagName":"section","metadata":{"name":"Archive Page","patternName":"online-training/archive","categories":["online-training"]},"align":"full","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<section class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"primary","layout":{"type":"constrained","wideSize":"800px"}} -->
<div class="wp-block-group alignfull has-primary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"12px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"has-text-color","style":{"typography":{"fontWeight":"600","letterSpacing":"2px","textTransform":"uppercase","textAlign":"center"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"text-soft","fontSize":"x-small"} -->
<p class="has-text-align-center has-text-color has-text-soft-color has-x-small-font-size" style="margin-top:0;margin-bottom:0;font-weight:600;letter-spacing:2px;text-transform:uppercase">✦ Browsing</p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","style":{"typography":{"fontWeight":"600","letterSpacing":"var:custom|typography|letter-spacing|heading","lineHeight":"var:custom|typography|line-height|heading","fontStyle":"normal","textAlign":"center"},"color":{"text":"var:preset|color|white"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"heading-h2","fontFamily":"primary"} /-->

<!-- wp:term-description {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|body","textAlign":"center"},"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"medium"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}},"color":{"background":"var:preset|color|background-light"}},"layout":{"type":"constrained","wideSize":"840px"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:var(--wp--preset--color--background-light);margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"excludeCurrent":null},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0"},"border":{"radius":"16px","width":"1px"},"color":{"background":"var:preset|color|white"}},"borderColor":"stroke","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group has-border-color has-stroke-border-color has-background" style="border-width:1px;border-radius:16px;background-color:var(--wp--preset--color--white)"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","style":{"border":{"radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"0px","bottomRight":"0px"}}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"28px","bottom":"32px","left":"32px","right":"32px"},"blockGap":"12px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding-top:28px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"1.5px"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary","fontSize":"x-small"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontWeight":"600","lineHeight":"var:custom|typography|line-height|card-title-lg","letterSpacing":"var:custom|typography|letter-spacing|heading-sm","fontStyle":"normal"},"color":{"text":"var:preset|color|heading-text"},"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-text"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"fontSize":"heading-h3"} /-->

<!-- wp:post-excerpt {"moreText":"Read article","style":{"typography":{"lineHeight":"var:custom|typography|line-height|body"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"muted-text","fontSize":"medium","fontFamily":"primary"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"60px","bottom":"60px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group" style="padding-top:60px;padding-bottom:60px"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|body","textAlign":"center"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"paragraph-text","fontSize":"medium"} -->
<p class="has-text-align-center has-paragraph-text-color has-text-color has-medium-font-size" style="margin-top:0;margin-bottom:0;line-height:var(--wp--custom--typography--line-height--body)">Nothing found. Try browsing a different category.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:query-no-results -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px"},"blockGap":"12px"},"border":{"top":{"color":"var:preset|color|stroke","width":"1px"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--stroke);border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;padding-top:24px;padding-bottom:24px"><!-- wp:query-pagination {"align":"center","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous {"style":{"typography":{"fontWeight":"600"}},"fontSize":"small"} /-->

<!-- wp:query-pagination-numbers {"style":{"typography":{"fontWeight":"600"}},"fontSize":"small"} /-->

<!-- wp:query-pagination-next {"style":{"typography":{"fontSize":"14px","fontWeight":"600"}}} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
',
);
