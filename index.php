<?php get_header(); ?>
<div class="container">
	
	<div class="row">
		<div class="span7"><span style="color: #08c";><h2>Flutec at a</span><span style="color: #393e46";> Glance</span></h2></div>
	</div>

  		<div id="tile-wrapper">
  			
  			<div class="isotope-elements clearfix photograph">
  				<div class="picture-information-holder">
  					<div class="picture-title" id="picture-title-01">FLUTEC goes to California.</div>
  					<div class="picture-learn-more"><a class="btn btn-primary btn-small btn-blue">Read More</a></div>
  				</div>
		<div class="picture-background"><img src="http://distilleryimage4.ak.instagram.com/b370e484e91311e2b31922000a9e5b22_7.jpg" />
		</div>
	</div>
	
	<div class="isotope-elements clearfix photograph">
		<div class="picture-information-holder">
			<div class="picture-title" id="picture-title-02">FLUTEC goes green.</div>
			<div class="picture-learn-more"><a class="btn btn-primary btn-small btn-blue">Read More</a></div>
		</div>
		<div class="picture-background"><img src="http://distilleryimage10.ak.instagram.com/a39b5ea8e8c911e2a2ad22000a9e17ad_7.jpg" /></div>
	</div>
	
  			
	<?php query_posts(array('showposts' => 20, 'orderby' => 'desc', 'category_name' => 'glance')); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php $card_id = get_post_meta($post->ID, "Card_Identifier", true); ?>
    <div class="isotope-elements clearfix <?php echo $card_id; ?>" id="<?php get_the_ID(); ?>">
        <div class="card-picture-removethisforfinal1">
        	<div class="picture-link"><a href="<?php the_permalink(); ?>"></a></div>
        	<div class="picture-background"><?php if ( has_post_thumbnail() ) {the_post_thumbnail();} ?></div>
            <!--<div class="content-background">-->
        	<div class="element-title"><?php the_title(); ?></div>
        	<!--<div class="element-text"><?php the_content(); ?></div>-->
        	<!--</div>-->
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
