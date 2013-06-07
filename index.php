<?php get_header(); ?>

<div id="body-background">
	<div id="index-title">Welcome to Flutec</div>
    <div id="index-tagline">Join us and explore the current state of affairs of the HVAC industry and how we are helping to solve some of the 21st centry's toughest energy challenges.</div>
	<div id="explore-nav"></div>
	<div id="section-holder">
  		<!-- <div id="explore-navigation-button"><a class="prev" href="#">Prev</a> <a class="next" href="#">Next</a> </div> -->
        	<div id="first-wp-dump">
        		<div class="editor-link"><?php edit_post_link('Edit', '<p>', '</p>'); ?></div>
				<?php while (have_posts()) : the_post(); ?>
				<?php the_content('Read the rest of this entry »'); ?>
				<?php endwhile;?>
			</div>
			<div id="news-holder">
				<div id="news-holder-title">Recent Stories</div>
				<?php query_posts(array('showposts' => 4, 'orderby' => 'desc', 'category_name' => 'recent-stories')); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="editor-link"><?php edit_post_link('Edit', '<p>', '</p>'); ?></div>
				<div class="news-item-holder" id="news-item-holder-<?php the_ID(); ?>">
					<div class="news-title" id="news-titlee-<?php the_ID(); ?>"><?php the_title(); ?></div>
					<div class="news-dump" id="news-dump-<?php the_ID(); ?>"><?php the_content('Read the rest of this entry »'); ?></div>
				</div>
				<?php endwhile; else: ?>
				<?php endif; ?>
			</div>
	</div>
</div>

<?php get_footer(); ?>
