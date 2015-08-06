<!-- Navigation -->
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">


	<div class="container-fluid">

		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header page-scroll">
			<button type="button" class="navbar-toggle" data-toggle="collapse"
				data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span> <span
					class="icon-bar"></span> <span class="icon-bar"></span> <span
					class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.html">Start Bootstrap</a>
		</div>
		
		<?php
		$defaults = array (
				'theme_location' => 'main_menu',
				'menu' => '',
				'container' => 'div',
				'container_class' => 'collapse navbar-collapse',
				'container_id' => 'bs-example-navbar-collapse-1',
				'menu_class' => 'nav navbar-nav navbar-right',
				'menu_id' => '',
				'echo' => true,
				'fallback_cb' => 'wp_page_menu',
				'before' => '',
				'after' => '',
				'link_before' => '',
				'link_after' => '',
				'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth' => 0,
				'walker' => '' 
		);
		
		wp_nav_menu ( $defaults );
		
		?>
		<!-- Collect the nav links, forms, and other content for toggling -->
<!-- 		<div class="collapse navbar-collapse" -->
<!-- 			id="bs-example-navbar-collapse-1"> -->
<!-- 			<ul class="nav navbar-nav navbar-right"> -->
<!-- 				<li><a href="index.html">Home</a></li> -->
<!-- 				<li><a href="about.html">About</a></li> -->
<!-- 				<li><a href="post.html">Sample Post</a></li> -->
<!-- 				<li><a href="contact.html">Contact</a></li> -->
<!-- 			</ul> -->
<!-- 		</div> -->
		<!-- /.navbar-collapse -->


	</div>
	<!-- /.container -->
</nav>
