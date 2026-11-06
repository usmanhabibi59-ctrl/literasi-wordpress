<?php
/**
 * Constants class.
 *
 * @package OnlineTraining
 * @since 1.0.0
 */

namespace OnlineTraining;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Constants class.
 */
class Constants {

	/**
	 * Product key for the theme.
	 *
	 * @var string
	 */
	const PRODUCT_KEY = 'online-training';

	/**
	 * Product slug for the theme.
	 *
	 * @var string
	 */
	const PRODUCT_SLUG = 'online-training';

	/**
	 * Cache keys used throughout the theme.
	 *
	 * @var array
	 */
	const CACHE_KEYS = array(
		'dismissed-welcome-notice' => 'online_training_dismissed_welcome_notice',
	);

	/**
	 * Text domain for the theme.
	 *
	 * @var string
	 */
	const TEXT_DOMAIN = 'online-training';
}
