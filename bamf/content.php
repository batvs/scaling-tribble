<?php 
/**
 * content.php
 */
 ?>

<article>
    <header class="entry-header">
        <h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', '_s' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
    </header><!-- .entry-header -->
     
    <?php if ( is_search() || is_home() || is_front_page() ) : // Only display Excerpts for Search ?>
    <div class="entry-summary">
         <?php the_excerpt(); ?>
    </div><!-- .entry-summary -->
    <?php else : ?>
    <div class="entry-content">
         <?php the_content( __( 'Continue reading <span class="meta-nav">→</span>', 'shape' ) ); ?>
         <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'shape' ), 'after' => '</div>' ) ); ?>
    </div><!-- .entry-content -->
    <?php endif; ?>
</article>
<!-- article -->