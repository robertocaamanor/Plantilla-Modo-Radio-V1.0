<?php get_header(); ?>

<section id="main">
		<section id="articles_list">
		<?php query_posts("paged=$paged"); ?>
			<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post()
		 ?>
		<article>
			<div class="thumb"><a href="<?php the_permalink();?>">
					<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); } ?>
				</a></div>

			<hgroup><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></hgroup>
			<div class="date"><?php the_date(); ?> | <span><?php the_category(); ?> | <?php the_author(); ?></span></div>
			<div class="extract"><?php the_excerpt(); ?> </div>
		</article>
		<?php 
			endwhile; else:
		 ?>
		 <h1>No se encontraron artículos</h1>
		 <?php 
		 	endif;
		  ?>
		
		<div id="pagination">
			<p><?php next_posts_link('Siguiente') ?><?php previous_posts_link('Anterior') ?></p>
		</div>
	</section>

<?php get_sidebar(); ?>

</section>

<?php get_footer(); ?>