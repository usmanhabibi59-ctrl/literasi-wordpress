<?php
/**
 * Pattern
 *
 * @package OnlineTraining
 * @since 1.0.0
 *
 * slug: footer
 * title: Footer
 * categories: online-training
 * keywords: footer
 */

return array(
	'title'      => __( 'Footer', 'online-training' ),
	'categories' => array( 'online-training' ),
	'keywords'   => array( 'footer' ),
	'content'    => '
<!-- wp:group {"tagName":"footer","metadata":{"patternName":"online-training/footer","name":"Footer","categories":["online-training"]},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"heading-text","layout":{"type":"constrained","contentSize":"1240px"}} -->
<footer class="wp-block-group alignfull has-heading-text-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"},"margin":{"bottom":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns" style="margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:column {"width":"32%"} -->
<div class="wp-block-column" style="flex-basis:32%"><!-- wp:group {"style":{"spacing":{"blockGap":"18px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","verticalAlignment":"bottom"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"white","fontSize":"large","fontFamily":"accent"} -->
<p class="has-white-color has-text-color has-link-color has-accent-font-family has-large-font-size" style="font-style:normal;font-weight:600"><a href="/" style="text-decoration:none"><strong>Online Training</strong><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color">.</mark></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"20px","bottom":"0px"}},"typography":{"fontSize":"14px"}},"textColor":"paragraph-text"} -->
<p class="has-paragraph-text-color has-text-color" style="margin-top:20px;margin-bottom:0px;font-size:14px">Train With Purpose. Live With Strength.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"2px","margin":{"top":"24px"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="margin-top:24px"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"14px"}},"textColor":"paragraph-text"} -->
<p class="has-paragraph-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px">412 Harrow Lane, Studio 3 — Portland, Oregon</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"14px"}},"textColor":"ink-muted"} -->
<p class="has-ink-muted-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px"><a href="mailto:hello@example.com" style="color:inherit">hello@example.com</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"22%"} -->
<div class="wp-block-column" style="flex-basis:22%"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.12em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0px","bottom":"18px"}}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:18px;font-weight:700;letter-spacing:0.12em;text-transform:uppercase">Explore</p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"textColor":"paragraph-text","overlayMenu":"never","style":{"typography":{"fontSize":"14px"},"spacing":{"blockGap":"16px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<!-- wp:navigation-link {"label":"Courses","url":"#"} /-->

<!-- wp:navigation-link {"label":"Categories","url":"#"} /-->

<!-- wp:navigation-link {"label":"Masterclasses","url":"#"} /-->

<!-- wp:navigation-link {"label":"About","url":"#"} /-->

<!-- wp:navigation-link {"label":"Blog","url":"#"} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"22%"} -->
<div class="wp-block-column" style="flex-basis:22%"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.12em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0px","bottom":"18px"}}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:18px;font-weight:700;letter-spacing:0.12em;text-transform:uppercase">Support</p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"textColor":"paragraph-text","overlayMenu":"never","style":{"typography":{"fontSize":"14px"},"spacing":{"blockGap":"16px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<!-- wp:navigation-link {"label":"FAQ","url":"#"} /-->

<!-- wp:navigation-link {"label":"Contact","url":"#"} /-->

<!-- wp:navigation-link {"label":"Membership","url":"#"} /-->

<!-- wp:navigation-link {"label":"Help Center","url":"#"} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"22%"} -->
<div class="wp-block-column" style="flex-basis:22%"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.12em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0px","bottom":"18px"}}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:18px;font-weight:700;letter-spacing:0.12em;text-transform:uppercase">Legal</p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"textColor":"paragraph-text","overlayMenu":"never","style":{"typography":{"fontSize":"14px"},"spacing":{"blockGap":"16px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<!-- wp:navigation-link {"label":"Privacy Policy","url":"#"} /-->

<!-- wp:navigation-link {"label":"Terms","url":"#"} /-->

<!-- wp:navigation-link {"label":"Refund Policy","url":"#"} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40"}},"color":{"background":"#ffffff1f"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--40);background-color:#ffffff1f;color:#ffffff1f"/>
<!-- /wp:separator -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"margin":{"bottom":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"6px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","lineHeight":"var:custom|typography|line-height|flat","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"text-soft","fontSize":"large","fontFamily":"accent"} -->
<h3 class="wp-block-heading has-text-soft-color has-text-color has-accent-font-family has-large-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600;line-height:var(--wp--custom--typography--line-height--flat)">Get stronger every week.</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"14px"}},"textColor":"paragraph-text"} -->
<p class="has-paragraph-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px">One training note every Thursday. Programming ideas, no hype.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"420px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:420px"><!-- wp:html -->
<div style="display:flex;justify-content:center;width:100%;gap:8px;">
	<div style="width:100%;max-width:520px;background-color:var(--wp--preset--color--heading-text);border:1px solid rgba(255,255,255,0.12);border-radius:999px;padding:8px 8px 8px 20px;gap:8px;">
	<input type="email" placeholder="@example.com" style="flex:1;background:transparent;border:none;outline:none;color:#ffffff;font-size:15px;font-family:var(--wp--preset--font-family--primary);min-width:0;">
	</div>
	<button type="submit" style="flex-shrink:0;background-color:var(--wp--preset--color--primary);color:var(--wp--preset--color--heading-text);border:none;border-radius:999px;padding:12px 22px;font-size:15px;font-weight:500;font-family:var(--wp--preset--font-family--primary);cursor:pointer;white-space:nowrap;">Subscribe <span style="margin-left:4px;">→</span></button>
</div>
<!-- /wp:html --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}},"color":{"background":"#ffffff1f"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--30);background-color:#ffffff1f;color:#ffffff1f"/>
<!-- /wp:separator -->

<!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"paragraph-text","fontSize":"x-small"} -->
<p class="has-paragraph-text-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:0px">© 2026 ONLINE TRAINING. All rights reserved.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"textAlign":"right"}},"textColor":"paragraph-text","fontSize":"x-small"} -->
<p class="has-text-align-right has-paragraph-text-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:0px">Portland · London · Lisbon</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></footer>
<!-- /wp:group -->
',
);
