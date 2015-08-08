<div class="container">

	<!-- 포스트 시작 -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="post-preview">
			<h2 class="post-title">
				<a href="<?php the_permalink();?>">
					<?php the_title();?>
				</a>
			</h2>
			<h3 class="post-subtitle">
				<a href="<?php the_permalink();?>">
					<?php the_excerpt();?>
				</a>
			</h3>
			<p class="post-meta">Posted by <a href="<?php the_author_link(); ?>"><?php the_author();?></a> on <?php the_date();?></p>
		</div>
		<hr>
	<?php endwhile; else: ?>
		<div class="post-preview">
			<h2 class="post-title">
				<a href="#">
					No Post...			
				</a>
			</h2>
		</div>
		<hr>
	<?php endif; ?>
	

</div>

<hr>
