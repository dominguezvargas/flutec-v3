<?php get_header(); ?>

<div id="body-background" style= "background: url(<?php bloginfo('stylesheet_directory'); ?>/img/bg/<?php echo $selectedBg; ?>); background-repeat:no-repeat; background-color:#000;">
	<div class="container">
		<div id="activities-descr">
  			<div id="descr-title"><h1>The ideas that drive us.</h1></div>
  			<div id="descr-text">At Flutec we follow our passion to innovate by heart. We are always exploring new frontiers to make our products efficient and effective. Explore and click the following boxes to take part in the discussions that happen at Flutec and the HVAC industry.</div>
  			<div id="filters">
  				<ul id="filter-elements" class="inline">
  					<li class="products-filter"><a href="#" data-filter=".products">Products</a></li>
            		<li class="clients-filter"><a href="#" data-filter=".clients">Clients</a></li>
            		<li class="facts-filter"><a href="#" data-filter=".facts">Facts</a></li>
            		<li class="applications-filter"><a href="#" data-filter=".applications">Applications</a></li>
            		<li class="show-all"><a href="#" data-filter="*">Show All</a></li>
  				</ul>
  			</div>
  		</div>
  		
  		<div id="masonry-tiles" class="clearfix">
				<?php query_posts(array('showposts' => 20, 'orderby' => 'desc', 'category_name' => 'glance')); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
					<?php $card_id = get_post_meta($post->ID, "Card_Identifier", true); ?>
					
				<div class="discover-tiles <?php echo $card_id; ?>">
					<div class="optional-titel"></div>	
					<?php
   					$video_thumb = get_post_meta($post->ID, "Video_section", true);
   					if ($video_thumb) { ?>
      					<?php echo $video_thumb; ?>
   					<?php } else { ?>
      					<div><a href="<?php the_permalink() ?>"><?php if ( has_post_thumbnail() ) {the_post_thumbnail();} ?></a></div>
					<?php } ?>
				<div class="discover-tile-titel"><?php the_title(); ?></div>
				<div class="tile-excerpt-info"><?php the_content(); ?></div>
				<div class="editor-link"><?php edit_post_link('Edit'); ?></div>
				</div>
				<?php endwhile; else: ?>
				<?php endif; ?>
        		</div> <!-- End masonry titles --------------------------------------------------------- -->
  		
	</div>
</div>

<?php get_footer(); ?>
