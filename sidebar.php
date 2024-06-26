<div class="book-summary">
	<div id="book-search-input" role="search">
		<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
	</div>
	<nav role="navigation">
		<?php do_action( 'before_sidebar' ); ?>
		<ul class="summary">
			<li<?php
			if ( is_home() ) {
				echo ' class="active"';
			} ?>>
			    <a href="<?php echo esc_url( home_url() ); ?>" class="custom-link"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>
			</li>
			<li class="divider"></li>
		</ul>

		<?php
		if ( has_nav_menu( 'summary' ) ) {
			$args = array(
				'theme_location' => 'summary',
				'menu_class' => 'summary',
				'container' => '',
			);
			wp_nav_menu( $args );
		} else if ( is_user_logged_in() ) {
			?>
			<ul class="summary">
				<li>
				    <a href="<?php echo admin_url( 'nav-menus.php' ); ?>" target="_blank" class="custom-link">Click to add the menu</a>
				</li>
				<li class="divider"></li>
			</ul>
			<?php
		}
		do_action( 'after_sidebar' );
		?>
	</nav>
</div>
