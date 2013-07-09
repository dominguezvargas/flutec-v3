<?php get_header(); ?>
<div class="container">

  		<div id="tile-wrapper" class="container">
	<?php query_posts(array('showposts' => 20, 'orderby' => 'desc', 'category_name' => 'glance')); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php $card_id = get_post_meta($post->ID, "Card_Identifier", true); ?>
    <div class="isotope-elements <?php echo $card_id; ?>" id="<?php get_the_ID(); ?>">
        <div class="card-picture-removethisforfinal1">
            <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {the_post_thumbnail();} ?></a>
            <div class="content-background">
        	<div class="element-title"><?php the_title(); ?></div>
        	<!--<div class="element-text"><?php the_content(); ?></div>-->
        	</div>
        </div>
        <!--<div class="element-footer">
        	<?php edit_post_link('Edit'); ?>
            <div class="like-icon"></div>
            <div class="like-counter">5</div>
        </div>-->
    </div>
    <?php endwhile; else: ?>
	<?php endif; ?>
</div>
  		
  		<!--<div id="masonry-tiles" class="clearfix">
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

<?php get_footer(); ?>
