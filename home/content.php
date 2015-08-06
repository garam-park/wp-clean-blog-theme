
<!-- Main Content -->
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
<!-- 	<div class="row"> -->
<!-- 		<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1"> -->
			
<!-- 			<div class="post-preview"> -->
<!-- 				<a href="post.html"> -->
<!-- 					<h2 class="post-title">Man must explore, and this is exploration atits greatest</h2> -->
<!-- 					<h3 class="post-subtitle">Problems look mighty small from 150 milesup</h3> -->
<!-- 				</a> -->
<!-- 				<p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 24, 2014</p> -->
<!-- 			</div> -->
<!-- 			<hr> -->
			<!-- Pager -->
<!-- 			<ul class="pager"> -->
<!-- 				<li class="next"><a href="#">Older Posts &rarr;</a></li> -->
<!-- 			</ul> -->
<!-- 		</div> -->
<!-- 	</div> -->