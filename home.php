<?php get_header();?>
<?php get_template_part('home/content');?>
<?php get_footer();?>

<?php if(is_dev()):?>
<H1>HOME.php</H1>
   <a href="<?php echo get_post_type_archive_link( 'book' ); ?>">book</a>
<?php endif;?>