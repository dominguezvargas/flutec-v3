<?php get_header(); ?>
<div class="container">
	<div><h2><?php the_title(); ?></h2></div>
	<div id="page-main-body-wrapper" class="clearfix">
  		<div class="row-fluid">
  		<?php if (have_posts()) : ?>
        	<?php while (have_posts()) : the_post(); ?>   
  			<div class="span8"><?php the_content(); ?></div>
  		<?php endwhile; ?>
    		<?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>