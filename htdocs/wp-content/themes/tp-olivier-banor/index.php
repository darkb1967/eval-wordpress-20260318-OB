<h2>Index.PHP</h2>
<?php
get_header();

if (have_posts()):
    while(have_posts()):
        the_post();
?>
<article>
    <header>
        <!-- titre du post 
         <a href="<?php the_permalink();?>">
            <h1><?php the_title('<h1>', '</h1>'); ?></h1>
         </a> -->

    </header>
    <article class="montheme-article"> 
        <h2><?php the_title(); // affichage du titre ?></h2>
        <div>
            <?php the_excerpt(); // extrait du post ?> 
            <div>écrit par <?php the_author(); ?> le <?php the_date();?> catégorie : <?php the_category( ' ' ); ?></div>
        </div>
        
    </article>

    <aside>
        <!-- commentaire -->
         <?php comments_template(); ?>
    </aside>
</article>
<?php 
    endwhile;
endif;

wp_footer();