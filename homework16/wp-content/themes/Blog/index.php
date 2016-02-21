<?php get_header(); ?>
    <div class="container-fluid">
        <div class="content">
            <?php if (have_posts()):
                while (have_posts()):
                    the_post(); ?>
                    <article class="post clearfix">
                        <?php the_post_thumbnail(); ?>
                        <div class="description">
                            <h2><a href="<?php the_permalink(); ?>"><?PHP the_title() ?></a></h2>
                            <?php the_content(); ?>
                            <a href="<?php the_permalink(); ?>" class="button">Continue Reading</a>
                        </div>
                    </article>
                <?php endwhile;
            else:
                echo '<p>No content found</p>';
            endif; ?>
            <div class="pagination">
                <a href="" class="prev-page fa fa-long-arrow-left"><i class=""></i>  Previous</a>
                <a href="" class="next-page ">Next  <i class="fa fa-long-arrow-right"></i></a>
            </div>
        </div>

        <?php get_sidebar(); ?>

    </div>
<?php
get_footer();
?>