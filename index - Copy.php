<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php wp_head(); ?>
</head>
<body <?php body_class(  ) ;?>>

	
	<div id="wrapper">
		<div id="header_wrapper">
			<div id="header">
				<div id="logo">
					<h1><a href=""> <?php bloginfo( "name" ) ?></a></h1>
					<p><a href="#" rel="nofollow"><?php bloginfo( "description" ) ?></a></p>
				</div>
			</div>
		</div>

		<div id="page">
			<div id="page-bgtop">
				<div id="page-bgbtm">
					<div id="content">
						
						<?php 
							while (have_posts()) {
								the_post(); ?>

							<div class="post" <?php post_class() ; ?>>
								<h2 class="title"><a href="#"><?php the_title() ?></a></h2>;
								<p class="meta">Posted by <a href="#"><?php the_author(); ?></a><?php the_date() ; ?>&nbsp;&bull;&nbsp; <a href="#" class="comments">Comments (64)</a>&nbsp;&bull;&nbsp; <?php echo get_the_tag_list() ;?></p>
								<div class="entry">
									<p>
										<?php 
											if (has_post_thumbnail()) {
												the_post_thumbnail("thumbnail", "class => 'alignleft border'" );

											} 
										 ?>
									</p>
									<p><?php the_content() ?></p>;
								</div>
							</div>


						<?php 
							}
						 ?>

						<div style="clear: both;">&nbsp;</div>
					</div>
				</div>
			</div>
				
				<div class="page-bgtop">
					<div>
						<?php 

							the_posts_pagination( array(
									"screen_reader_text" => ' ',
									"prev_text"          => "<",
									"next_text"          => ">"
							) );

						 ?>
					</div>
				</div>


		</div>
	</div>



	<?php wp_footer(); ?>
</body>
</html>