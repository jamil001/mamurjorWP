<div id="wrapper">
	<div id="header-wrapper">
		<div id="header">
			<div id="logo">
				<?php if (current_theme_supports( "custom-logo" )) : ?>
					<div class="logo">
						<?php the_custom_logo() ; ?>
					</div>
				<?php endif; ?>
				<h1><a href="<?php echo site_url() ; ?>"><?php bloginfo( "name" ) ?> </a></h1>
				<p>Design by <a href="#" rel="nofollow"><?php bloginfo( "description" ) ?></a></p>
			</div>
		</div>
	</div>

	<div id="menu">
		
		<?php 

			wp_nav_menu( array(
				'theme_location'  => 'topmenu',
				'menu_id'         => 'menu',
				'menu_class'      => 'current_page_item',
			) );

		 ?>

	</div> 