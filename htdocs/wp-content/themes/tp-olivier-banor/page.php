<h2>PAGE.PHP</h2>
<?php
get_header();

if (have_posts()):
    while(have_posts()):
        the_post();
?>
<div>
    <header>
        <!-- titre du post 
         <a href="<?php the_permalink();?>">
            <h1><?php the_title('<h1>', '</h1>'); ?></h1>
         </a> -->

    </header>
    <article class="montheme-article"> 
        <h2><?php the_title(); ?></h2>
        <?php the_post_thumbnail('thumbnail'); ?>
        <div>
            <a href="https://github.com/darkb1967/eval-wordpress-20260318-OB">Regarde mon super GitHub</a>
            <?php the_content();  ?> 
            <div>écrit par <?php the_author(); ?> le <?php the_date();?></div>
        </div>
        
    </article>

    <aside>
        <!-- commentaire -->
          <h3> Cette partie est un aside !!!</h3>
         <?php comments_template(); ?>
    </aside>
    </div>
<?php 
    endwhile;
endif;

wp_footer();