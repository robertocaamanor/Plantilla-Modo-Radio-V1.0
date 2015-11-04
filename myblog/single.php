<?php get_header(); ?>

<section id="main">
		<section id="articles_list">
			<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post()
		 ?>
		<article>
			

			<hgroup><h2><?php the_title(); ?></h2></hgroup>
			<div class="date"><?php the_date(); ?> | <span><?php the_category(); ?> | <?php the_author(); ?></span></div>
			<div class="thumb"><a href="<?php the_permalink();?>">
					<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); } ?>
				</a></div>
			<div class="extract"><?php the_content(); ?> </div>
			<div class="tags"><?php the_tags('Etiquetas: ', ', ', ''); ?> </div>
			<div class="autor-biografia">
    <div class="autor-info">
        <?php echo get_avatar( get_the_author_meta('email'), '80' ); ?>
        <h3 class="autor-nombre">Autor: <?php the_author_link(); ?></h3>
        <p class="autor-descripcion"><?php the_author_meta('description'); ?></p>
        <ul class="autor-enlaces">
            <li class="autor_web">Web: <a href="<?php the_author_meta('user_url');?>"><?php the_author_meta('user_url');?></a></li><?php
                 
                // TWITTER          
                $perfil_twitter = get_the_author_meta( 'perfil_twitter' );
                if ( $perfil_twitter && $perfil_twitter != '' ) {
                    echo '<li class="autor_tw">Twitter: <a href="' . esc_url($perfil_twitter) . '">' . esc_url($perfil_twitter) . '</a></li>';
                }
                 
                // FACEBOOK
                $perfil_facebook = get_the_author_meta( 'perfil_facebook' );
                if ( $perfil_facebook && $perfil_facebook != '' ) {
                    echo '<li class="autor_fb">Facebook: <a href="' . esc_url($perfil_facebook) . '">' . esc_url($perfil_facebook) . '</a></li>';
                }
     
                // RSS
                $perfil_rss = get_the_author_meta( 'perfil_rss' );
                if ( $perfil_rss && $perfil_rss != '' ) {
                    echo '<li class="autor_rss">RSS: <a href="' . esc_url($perfil_rss) . '">' . esc_url($perfil_rss) . '</a></li>';
                } 

                // YOUTUBE
                $perfil_youtube = get_the_author_meta( 'perfil_youtube' );
                if ( $perfil_youtube && $perfil_youtube != '' ) {
                    echo '<li class="autor_youtube">YouTube: <a href="' . esc_url($perfil_youtube) . '">' . esc_url($perfil_youtube) . '</a></li>';
                } 
                
                // INSTAGRAM
                $perfil_instagram = get_the_author_meta( 'perfil_instagram' );
                if ( $perfil_instagram && $perfil_instagram != '' ) {
                    echo '<li class="autor_instagram">Instagram: <a href="' . esc_url($perfil_instagram) . '">' . esc_url($perfil_instagram) . '</a></li>';
                } 

                // LAST.FM
                $perfil_lastfm = get_the_author_meta( 'perfil_lastfm' );
                if ( $perfil_lastfm && $perfil_lastfm != '' ) {
                    echo '<li class="autor_lastfm">LastFm: <a href="' . esc_url($perfil_lastfm) . '">' . esc_url($perfil_lastfm) . '</a></li>';
                } 

                // LINKEDIN
                $perfil_linkedin = get_the_author_meta( 'perfil_linkedin' );
                if ( $perfil_linkedin && $perfil_linkedin != '' ) {
                    echo '<li class="perfil_linkedin">Linkedin: <a href="' . esc_url($perfil_linkedin) . '">' . esc_url($perfil_linkedin) . '</a></li>';
                } 
                ?>
     
        </ul>
    </div><!-- .autor-info-->
</div><!-- .autor-biografia-->
		</article>

		<?php 
			endwhile; else:
		 ?>
		 <h1>No se encontraron artículos</h1>
		 <?php 
		 	endif;
		  ?>
		<div id="entry-post-nav">
    <?php $prev_post = get_previous_post(); ?>

    <?php if ( !empty( $prev_post ) ) : ?>  
        <div class="post-prev">
            <span>Anterior </span>
            <h4><a href="<?php echo get_permalink( $prev_post->ID ); ?>"><?php echo $prev_post->post_title; ?></a></h4>
        </div>
    <?php endif; ?>

    <?php $next_post = get_next_post(); ?>

    <?php if ( !empty( $next_post ) ) : ?>  
        <div class="post-next">
            <span>Siguiente </span>
            <h4><a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo $next_post->post_title; ?></a></h4>
        </div>
    <?php endif; ?>
</div>
		<div id="comentarios">
			<h3>Comentarios</h3>
			<div id="caja_comentarios">
				<div id="fb-root"></div>
<script src="http://connect.facebook.net/es_LA/all.js#appId=APP_ID&amp;xfbml=1"></script>
<fb:comments href="<?php the_permalink(); ?>" num_posts="6" width="100%"></fb:comments>
</div>
			</div>
		</div>
	</section>

<?php get_sidebar(); ?>

</section>

<?php get_footer(); ?>