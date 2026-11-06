<?php
/**
 * Block patterns
 *
 * @package OnlineTraining
 * @since 1.0.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * Register block patterns.
 *
 * @since 1.0.0
 * @package OnlineTraining
 */
function online_training_register_block_patterns() {

	/**
	 * Block pattern categories.
	 *
	 * @since 1.0.0
	 * @package OnlineTraining
	 */
	$block_pattern_categories = apply_filters(
		'online_training_block_pattern_categories',
		array(
			'online-training' => array( 'label' => __( 'Online Training', 'online-training' ) ),
		)
	);

	// Register pattern categories.
	if ( ! empty( $block_pattern_categories ) ) {
		foreach ( $block_pattern_categories as $category_name => $category_properties ) {
			register_block_pattern_category(
				$category_name,
				$category_properties
			);
		}
	}

	online_training_register_patterns();
}

add_action( 'init', 'online_training_register_block_patterns' );

/**
 * Register block patterns.
 *
 * Patterns live under `inc/patterns/<category>/<slug>.php` and each file
 * returns the pattern definition array. The array key below is the
 * registered pattern slug (kept unprefixed so it matches what templates
 * and template parts already reference as `online-training/<slug>`); the
 * value is the path to the pattern file, relative to `inc/patterns/`.
 *
 * @since 1.0.0
 * @package OnlineTraining
 */
function online_training_register_patterns() {
	$patterns = apply_filters(
		'online_training_block_patterns',
		array(
			'404'                     => 'templates/404',
			'archive'                 => 'templates/archive',
			'articles'                => 'layout/articles',
			'about-hero'              => 'layout/about-hero',
			'about-story'             => 'layout/about-story',
			'about-timeline'          => 'layout/about-timeline',
			'about-training-approach' => 'layout/about-training-approach',
			'blog-articles'           => 'layout/blog-articles',
			'blog-featured'           => 'layout/blog-featured',
			'client-results'          => 'layout/client-results',
			'categories'              => 'layout/categories',
			'courses'                 => 'layout/courses',
			'courses-filter'          => 'layout/courses-filter',
			'course-hero'             => 'layout/course-hero',
			'course-overview'         => 'layout/course-overview',
			'course-pricing-card'     => 'layout/course-pricing-card',
			'course-curriculum'       => 'layout/course-curriculum',
			'course-instructor'       => 'layout/course-instructor',
			'course-reviews'          => 'layout/course-reviews',
			'contact'                 => 'layout/contact',
			'cta'                     => 'layout/cta',
			'categories-disciplines'  => 'layout/categories-disciplines',
			'footer'                  => 'layout/footer',
			'faq'                     => 'layout/faq',
			'header'                  => 'layout/header',
			'home'                    => 'templates/home',
			'hero'                    => 'layout/hero',
			'how-it-works'            => 'layout/how-it-works',
			'coach'                   => 'layout/coach',
			'pricing'                 => 'layout/pricing',
			'philosophy'              => 'layout/philosophy',
			'stats'                   => 'layout/stats',
			'testimonials'            => 'layout/testimonials',
			'team'                    => 'layout/team',
			'masterclasses'           => 'layout/masterclasses',
		)
	);

	foreach ( $patterns as $slug => $path ) {
		$file = get_theme_file_path( 'inc/patterns/' . $path . '.php' );

		if ( ! is_file( $file ) ) {
			continue;
		}

		register_block_pattern( 'online-training/' . $slug, require $file );
	}
}
