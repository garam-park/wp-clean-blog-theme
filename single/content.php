
<!-- Main Content -->
<div class="container">

	<!-- 포스트 시작 -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<!-- Post Content -->
	<article>
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
					<?php the_content();?>
					<div class="pull-right">
						<p class="post-meta">Posted by <a href="<?php the_author_link(); ?>"><?php the_author();?></a> on <?php the_date();?></p>
					</div>
				</div>
			</div>
		</div>
	</article>

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
