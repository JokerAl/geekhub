<?php get_header();
if (have_posts()):
    while (have_posts()):the_post();?>
       <article class="post">
        <h2><a href="<?php the_permalink();?>"><?PHP the_title()?></a></h2>
       <?php the_content();?>
    </article>
   <?php endwhile;
    else:
        echo '<p>No content found</p>';
        endif;
get_footer();
?>