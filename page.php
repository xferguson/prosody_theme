<?php get_header(); ?>

<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>

    <div class="main">
        <div class="content">
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </div>
    </div>

<?php endwhile; endif ?>
