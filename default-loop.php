<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  AAA
<?php endwhile; else: ?>
  BBB
<?php endif; ?>