<!DOCTYPE html>
<html lang="<?php bloginfo('language');?>">

<head>

<meta charset="<?php bloginfo('charset');?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title><?php bloginfo('name')?></title>

	<?php get_template_part('template/css');?>

</head>

<body>

    <?php get_template_part('template/nav','def')?>

    <!-- Page Header -->
	<!-- Set your background image for this header on the line below. -->
	<header class="intro-header" style="background-image: url('<?php echo get_template_directory_uri();?>/clean-blog/img/home-bg.jpg')">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
					<div class="site-heading">
						<h1><?php bloginfo('name')?></h1>
						<hr class="small">
						<span class="subheading"><?php bloginfo('description')?></span>
					</div>
				</div>
			</div>
		</div>
	</header>