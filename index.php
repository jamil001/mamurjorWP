<?php get_header(  ); ?>
<body <?php body_class(  ) ;?>>

<?php get_template_part( "templates/common/hero" )  ; ?>
	<!-- end #header -->
	
	<!-- end #menu -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
				
						<?php 
							while (have_posts()) {
								the_post(); 
						?>
								
								
					<div class="post" <?php post_class() ; ?>>
						<h2 class="title"><a href="<?php the_permalink() ; ?>"><?php the_title() ?> </a></h2>
						<p class="meta">Posted by <a href="#"><?php the_author(); ?></a> <?php echo get_the_date() ; ?>
							&nbsp;&bull;&nbsp; <a href="#" class="comments">Comments (64)</a> &nbsp;&bull;&nbsp; <?php echo get_the_tag_list() ;?></p>
						<div class="entry">
							
							<p>
								<?php 
									if (has_post_thumbnail()) {
										$thumbnail_url = get_the_post_thumbnail_url( null, "large" );
										echo '<a href="'.$thumbnail_url.'" data-featherlight="image">';
										the_post_thumbnail("thumbnail", "class => 'alignleft border'" );
										echo '</a>';

									} 
								 ?>
							</p>
							<p><?php 

									
										the_excerpt() ;
									
									

							 	?>
							 	
							 </p>;
						</div>
					</div>
					
					<?php 
						}
					 ?>
					
					<div style="clear: both;">&nbsp;</div>
				</div>
				<!-- end #content -->
				<!-- <div id="sidebar">
					<ul>
						<li>
							<h2>Aliquam tempus</h2>
							<p>Mauris vitae nisl nec metus placerat perdiet est. Phasellus dapibus semper consectetuer hendrerit.</p>
						</li>
						<li>
							<h2>Categories</h2>
							<ul>
								<li><a href="#">Aliquam libero</a></li>
								<li><a href="#">Consectetuer adipiscing elit</a></li>
								<li><a href="#">Metus aliquam pellentesque</a></li>
								<li><a href="#">Suspendisse iaculis mauris</a></li>
								<li><a href="#">Urnanet non molestie semper</a></li>
								<li><a href="#">Proin gravida orci porttitor</a></li>
							</ul>
						</li>
						<li>
							<h2>Blogroll</h2>
							<ul>
								<li><a href="#">Aliquam libero</a></li>
								<li><a href="#">Consectetuer adipiscing elit</a></li>
								<li><a href="#">Metus aliquam pellentesque</a></li>
								<li><a href="#">Suspendisse iaculis mauris</a></li>
								<li><a href="#">Urnanet non molestie semper</a></li>
								<li><a href="#">Proin gravida orci porttitor</a></li>
							</ul>
						</li>
						<li>
							<h2>Archives</h2>
							<ul>
								<li><a href="#">Aliquam libero</a></li>
								<li><a href="#">Consectetuer adipiscing elit</a></li>
								<li><a href="#">Metus aliquam pellentesque</a></li>
								<li><a href="#">Suspendisse iaculis mauris</a></li>
								<li><a href="#">Urnanet non molestie semper</a></li>
								<li><a href="#">Proin gravida orci porttitor</a></li>
							</ul>
						</li>
					</ul>
				</div> -->
				<!-- end #sidebar -->
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
		
		<div class="post">
					<div>
						<?php 

							the_posts_pagination( array(
									"screen_reader_text" => '  ',
									"prev_text"          => "<",
									"next_text"          => ">"
							) );

						 ?>
					</div>
				</div>
	</div>
	<!-- end #page -->
</div>

<?php get_footer(  ); ?> 