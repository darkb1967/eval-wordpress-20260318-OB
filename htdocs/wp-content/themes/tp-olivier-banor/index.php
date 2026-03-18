<h2>Index.PHP</h2>
<?php
get_header();

if (have_posts()):
    while(have_posts()):
        the_post();
?>
<div>

    <article class="montheme-article"> 
        <h2><?php the_title(); // affichage du titre ?></h2>
        <?php the_post_thumbnail('thumbnail'); ?>
        <div>
            <?php the_excerpt(); // extrait du post ?> 
            <div>écrit par <?php the_author(); ?> le <?php the_date();?> catégorie : <?php the_category( ' ' ); ?></div>
        </div>
        
    </article>

    <aside>
        <!-- commentaire -->
         <?php comments_template(); ?>
    </aside>
    </div>
<?php 
    endwhile;
endif;

wp_footer();