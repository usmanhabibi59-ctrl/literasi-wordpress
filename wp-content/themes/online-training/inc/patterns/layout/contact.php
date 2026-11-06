<?php
/**
 * Pattern
 *
 * @package OnlineTraining
 * @since 1.0.0
 *
 * slug: contact
 * title: Contact
 * categories: online-training
 * keywords: contact
 */

$icon_map_pin = get_template_directory_uri() . '/assets/images/icons/map-pin.svg';
$icon_mail    = get_template_directory_uri() . '/assets/images/icons/mail.svg';
$icon_phone   = get_template_directory_uri() . '/assets/images/icons/phone.svg';

return array(
	'title'      => __( 'Contact', 'online-training' ),
	'categories' => array( 'online-training' ),
	'keywords'   => array( 'contact' ),
	'content'    => '
<!-- wp:group {"metadata":{"patternName":"online-training/contact","name":"Contact","categories":["online-training"]},"align":"full","style":{"spacing":{"padding":{"top":"112px","bottom":"112px","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"background-dark","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group alignfull has-background-dark-background-color has-background" style="padding-top:112px;padding-right:var(--wp--preset--spacing--50);padding-bottom:112px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":{"left":"80px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"56.5%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:56.5%"><!-- wp:html -->
<form style="display:flex;flex-direction:column;gap:24px;">
<div style="display:flex;gap:24px;">
<div style="flex:1 1 0;display:flex;flex-direction:column;gap:12px;">
<label for="online-training-name" style="font-size:11px;font-weight:600;letter-spacing:0.22em;text-transform:uppercase;color:var(--wp--preset--color--muted-text);font-family:var(--wp--preset--font-family--primary);">Name</label>
<input id="online-training-name" type="text" name="name" style="height:48px;background:var(--wp--preset--color--background-light);border:1px solid color-mix(in srgb, var(--wp--preset--color--heading-text) 10%, transparent);border-radius:18px;padding:0 16px;font-size:14px;font-family:var(--wp--preset--font-family--primary);color:var(--wp--preset--color--heading-text);outline:none;box-sizing:border-box;">
</div>
<div style="flex:1 1 0;display:flex;flex-direction:column;gap:12px;">
<label for="online-training-email" style="font-size:11px;font-weight:600;letter-spacing:0.22em;text-transform:uppercase;color:var(--wp--preset--color--muted-text);font-family:var(--wp--preset--font-family--primary);">Email</label>
<input id="online-training-email" type="email" name="email" style="height:48px;background:var(--wp--preset--color--background-light);border:1px solid color-mix(in srgb, var(--wp--preset--color--heading-text) 10%, transparent);border-radius:18px;padding:0 16px;font-size:14px;font-family:var(--wp--preset--font-family--primary);color:var(--wp--preset--color--heading-text);outline:none;box-sizing:border-box;">
</div>
</div>

<div style="display:flex;flex-direction:column;gap:12px;">
<span style="font-size:11px;font-weight:600;letter-spacing:0.22em;text-transform:uppercase;color:var(--wp--preset--color--muted-text);font-family:var(--wp--preset--font-family--primary);">What\'s it about?</span>
<div style="display:flex;flex-wrap:wrap;gap:8px;">
<label style="display:inline-flex;align-items:center;padding:8px 16px;border-radius:999px;border:1px solid var(--wp--preset--color--primary);background:var(--wp--preset--color--primary);color:var(--wp--preset--color--heading-text);font-size:12px;font-weight:500;font-family:var(--wp--preset--font-family--primary);cursor:pointer;">
<input type="radio" name="topic" value="course-advice" checked="" style="position:absolute;opacity:0;width:0;height:0;">Course advice</label>
<label style="display:inline-flex;align-items:center;padding:8px 16px;border-radius:999px;background:transparent;border:1px solid color-mix(in srgb, var(--wp--preset--color--heading-text) 10%, transparent);color:var(--wp--preset--color--muted-text);font-size:12px;font-weight:500;font-family:var(--wp--preset--font-family--primary);cursor:pointer;">
<input type="radio" name="topic" value="membership" style="position:absolute;opacity:0;width:0;height:0;">Membership</label>
<label style="display:inline-flex;align-items:center;padding:8px 16px;border-radius:999px;background:transparent;border:1px solid color-mix(in srgb, var(--wp--preset--color--heading-text) 10%, transparent);color:var(--wp--preset--color--muted-text);font-size:12px;font-weight:500;font-family:var(--wp--preset--font-family--primary);cursor:pointer;">
<input type="radio" name="topic" value="one-on-one-coaching" style="position:absolute;opacity:0;width:0;height:0;">1-on-1 coaching</label>
<label style="display:inline-flex;align-items:center;padding:8px 16px;border-radius:999px;background:transparent;border:1px solid color-mix(in srgb, var(--wp--preset--color--heading-text) 10%, transparent);color:var(--wp--preset--color--muted-text);font-size:12px;font-weight:500;font-family:var(--wp--preset--font-family--primary);cursor:pointer;">
<input type="radio" name="topic" value="studio-training" style="position:absolute;opacity:0;width:0;height:0;">Studio training</label>
<label style="display:inline-flex;align-items:center;padding:8px 16px;border-radius:999px;background:transparent;border:1px solid color-mix(in srgb, var(--wp--preset--color--heading-text) 10%, transparent);color:var(--wp--preset--color--muted-text);font-size:12px;font-weight:500;font-family:var(--wp--preset--font-family--primary);cursor:pointer;">
<input type="radio" name="topic" value="something-else" style="position:absolute;opacity:0;width:0;height:0;">Something else</label>
</div>
</div>

<div style="display:flex;flex-direction:column;gap:12px;">
<label for="online-training-message" style="font-size:11px;font-weight:600;letter-spacing:0.22em;text-transform:uppercase;color:var(--wp--preset--color--muted-text);font-family:var(--wp--preset--font-family--primary);">Message</label>
<textarea id="online-training-message" name="message" rows="6" style="background:var(--wp--preset--color--background-light);border:1px solid color-mix(in srgb, var(--wp--preset--color--heading-text) 10%, transparent);border-radius:18px;padding:16px;font-size:14px;font-family:var(--wp--preset--font-family--primary);color:var(--wp--preset--color--heading-text);outline:none;resize:vertical;box-sizing:border-box;"></textarea>
</div>

<a href="#" style="align-self:flex-start;display:inline-flex;align-items:center;height:52px;background:var(--wp--preset--color--heading-text);color:var(--wp--preset--color--white);border:none;border-radius:999px;padding:0 32px;font-size:14px;font-weight:500;letter-spacing:0.025em;font-family:var(--wp--preset--font-family--primary);text-decoration:none;cursor:pointer;margin-top:8px;">Send message</a>
</form>
<!-- /wp:html --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"43.5%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:43.5%"><!-- wp:group {"style":{"border":{"color":"color-mix(in srgb, var(--wp--preset--color--heading-text) 10%, transparent)","width":"1px","radius":"24px"},"spacing":{"padding":{"top":"32px","right":"32px","bottom":"32px","left":"32px"},"blockGap":"32px"}},"backgroundColor":"background-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-background-light-background-color has-background" style="border-color:color-mix(in srgb, var(--wp--preset--color--heading-text) 10%, transparent);border-width:1px;border-radius:24px;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:group {"style":{"spacing":{"blockGap":"12px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"var:custom|typography|line-height|flat"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","fontSize":"medium"} -->
<p class="has-primary-color has-text-color has-medium-font-size" style="margin-top:0px;margin-bottom:0px;line-height:var(--wp--custom--typography--line-height--flat)">──</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.22em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-muted-text-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:0px;font-weight:600;letter-spacing:0.22em;text-transform:uppercase">Studio</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"24px","margin":{"top":"32px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:32px"><!-- wp:group {"style":{"spacing":{"blockGap":"16px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:html -->
<figure class="wp-block-image size-full cred-check-icon" style="-webkit-mask-image:url(' . esc_url( $icon_map_pin ) . ');mask-image:url(' . esc_url( $icon_map_pin ) . ')"><img src="' . esc_url( $icon_map_pin ) . '" alt=""/></figure>
<!-- /wp:html -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"14px"}},"textColor":"heading-text"} -->
<p class="has-heading-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px">412 Harrow Lane, Studio 3 — Portland, Oregon</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"16px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:html -->
<figure class="wp-block-image size-full cred-check-icon" style="-webkit-mask-image:url(' . esc_url( $icon_mail ) . ');mask-image:url(' . esc_url( $icon_mail ) . ')"><img src="' . esc_url( $icon_mail ) . '" alt=""/></figure>
<!-- /wp:html -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"14px"}},"textColor":"heading-text"} -->
<p class="has-heading-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px"><a href="mailto:hello@example.com" style="color:inherit;text-decoration:none;">hello@example.com</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"16px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:html -->
<figure class="wp-block-image size-full cred-check-icon" style="-webkit-mask-image:url(' . esc_url( $icon_phone ) . ');mask-image:url(' . esc_url( $icon_phone ) . ')"><img src="' . esc_url( $icon_phone ) . '" alt=""/></figure>
<!-- /wp:html -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"14px"}},"textColor":"heading-text"} -->
<p class="has-heading-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px"><a href="tel:+14155550182" style="color:inherit;text-decoration:none;">+1 (415) 555-0182</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"40px","bottom":"32px"}}},"backgroundColor":"stroke"} -->
<hr class="wp-block-separator has-text-color has-stroke-color has-alpha-channel-opacity has-stroke-background-color has-background" style="margin-top:40px;margin-bottom:32px"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"blockGap":"16px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.22em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"muted-text","fontSize":"x-small"} -->
<p class="has-muted-text-color has-text-color has-x-small-font-size" style="margin-top:0px;margin-bottom:0px;font-weight:600;letter-spacing:0.22em;text-transform:uppercase">Studio hours</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"14px"}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px">Monday – Friday</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"14px"}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px">6:00 – 20:00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"14px"}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px">Saturday</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"14px"}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px">8:00 – 14:00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"14px"}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px">Sunday</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"14px"}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px">Closed</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
',
);
