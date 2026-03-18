<?php
get_header();
?>

<h1>ARCHIVE.PHP</h1>
<section class="flex">

<?php 
    if(have_posts()): 
        while(have_posts()): 
            the_post(); 
    ?>
<div class="article-content">
        <article class=""> 
            <header>
                 <h1>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    
                </h1>
            <aside>
                <p>écrit par... <?php the_author_link() ?> le <?php the_date() ?>
                dans <?php the_category(', ') ?>
                </p>
                 <p> modifié le <?php the_modified_date() ?> par <?php the_author() ?></p>
            </aside>
            </header>        

            <?php the_post_thumbnail('thumbnail'); ?>
            <div>
                <?php the_excerpt(); ?> 
            </div>

            <div>
                <?php the_posts_pagination(); ?>
            </div>
            
        </article>
</div>
    <?php
        endwhile;
    else: 
        echo 'Aucun contenu';
    endif;

    posts_nav_link();
?>
<hr>
<div class ="pagination">
    <div class="pagination-previous">
        <?php previous_posts_link(); ?>
    </div>
    <div class="pagination-next">
        <?php next_posts_link(); ?>
    </div>    
</div>
<?php 

?>
</section>

<?php 
get_footer();