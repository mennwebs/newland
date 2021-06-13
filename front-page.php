<?php get_header();?>
<div class="s-container">
    <div id="primary" class="content-area">
        <main id="main" class="site-main -hide-title">
            <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'template-parts/content', 'page' ); ?>
            <?php endwhile;?>
        </main>
    </div>
</div>
<div class="_space"></div>
<div class="sec-news">
    <div class="s-container">
        <h2 class="s-title">Top 5 Articles<small>5 อันดับบทความยอดนิยม</small><a class="more" href="#">View more ›</a></h2>
        <div class="s-slider -m1.2 -center-m -d3">
            <?php 
			$args = array(
				'posts_per_page' => 5
			);
			$the_query = new WP_Query( $args );
			?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="slider">
                <?php get_template_part( 'template-parts/content', 'card' ); ?>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>