<?php get_header(); ?>
<div class="container">
	
	<div class="row">
		<div class="span7">
			<h1><span style="color: #465263";>Recent Stories</span></h1>
			<p><span style="color: #c8c8c8;">This is a glance of our company, our clients and the things that we care about.</span></p>
			<div id="top-separator"></div>
		</div>
	</div>
	
	<div class="container">
		<ul class="inline">
  			<li>Applications</li>
  			<li>Clients</li>
  			<li>Photographs</li>
  			<li>News</li>
		</ul>
	</div>
	

  		<div id="tile-wrapper" class="clearfix">
  			
  			<div class="isotope-elements clearfix photograph">
  				<div class="picture-information-holder">
  					<div class="picture-title" id="picture-title-01">Damper Manufacturing.</div>
  					<div class="picture-learn-more"><a class="btn btn-primary btn-small btn-blue">Read More</a></div>
  				</div>
		<div class="picture-background"><img src="http://distilleryimage3.s3.amazonaws.com/ca72d51e973511e28fba22000a1fb1a7_7.jpg" />
		</div>
	</div>
	
	<div class="isotope-elements clearfix photograph">
		<div class="picture-information-holder">
			<div class="picture-title" id="picture-title-02">Welding at FLUTEC</div>
			<div class="picture-learn-more"><a class="btn btn-primary btn-small btn-blue">Read More</a></div>
		</div>
		<div class="picture-background"><img src="http://distilleryimage2.s3.amazonaws.com/7540cb76973711e2ba2d22000a1f97cd_7.jpg" /></div>
	</div>
	
	<?php query_posts(array('showposts' => 20, 'orderby' => 'desc', 'category_name' => 'glance')); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php $card_id = get_post_meta($post->ID, "Card_Identifier", true); ?>
	<div class="isotope-elements clearfix <?php echo $card_id; ?>" id="tile-id-<?php get_the_ID(); ?>">
		<div class="picture-information-holder">
			<div class="picture-title" id="picture-title-<?php get_the_ID(); ?>"><?php the_title(); ?></div>
			<div class="picture-learn-more"><a class="btn btn-primary btn-small btn-blue" href="<?php the_permalink(); ?>">Read More</a></div>
		</div>
		<div class="picture-background"><?php if ( has_post_thumbnail() ) {the_post_thumbnail();} ?></div>
	</div>
	<?php endwhile; else: ?>
	<?php endif; ?>
	
  			
	<!--<?php query_posts(array('showposts' => 20, 'orderby' => 'desc', 'category_name' => 'glance')); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php $card_id = get_post_meta($post->ID, "Card_Identifier", true); ?>
    <div class="isotope-elements clearfix <?php echo $card_id; ?>" id="<?php get_the_ID(); ?>">
        <div class="card-picture-removethisforfinal1">
        	<div class="picture-link"><a href="<?php the_permalink(); ?>"></a></div>
        	<div class="picture-background"><?php if ( has_post_thumbnail() ) {the_post_thumbnail();} ?></div>
            <!--<div class="content-background">-->
        	<!--<div class="element-title"><?php the_title(); ?></div>
        	<!--<div class="element-text"><?php the_content(); ?></div>-->
        	<!--</div>-->
        <!--</div>
        <!--<div class="element-footer">
        	<?php edit_post_link('Edit'); ?>
            <div class="like-icon"></div>
            <div class="like-counter">5</div>
        </div>-->
    <!--</div>
    <?php endwhile; else: ?>
	<?php endif; ?>-->
	
</div>
</div>

<?php get_footer(); ?>
