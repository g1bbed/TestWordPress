<?php

$locations = get_field('locations');
$related_posts = get_field('related_post');
get_header(); ?>


<section class="page">
    <div class="container">

        <?php if (has_post_thumbnail()) : ?>
            <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="img_fluid mb-3 img-thumbnail">
        <?php endif; ?>

        <h1><?php the_title(); ?></h1>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>

        <?php endwhile;
        else : endif; ?>


        <?php foreach ($locations as $post) : ?>
            <?php setup_postdata($post); ?>
            <h1><?php echo the_title(); ?></h1>
            <p><?php echo the_content(); ?></p>
            <a href="<?php echo get_page_link($post->ID); ?>">Learn More</a>
            <img src="<?php echo the_post_thumbnail_url('thumbnail'); ?>" style="width: 150px; height: auto;" />
            <?php the_field('address'); ?>
        <?php wp_reset_postdata();
        endforeach; ?>


        <?php if ($related_posts) : ?>
            <pre><?php echo print_r($related_posts);?></pre>
            <?php foreach ($related_posts as $p) : ?>
                <a href="<?php echo get_the_permalink($p->ID); ?>">
                    <?php echo $p->post_title; ?>
                </a>
            <?php endforeach; ?>
        <?php endif; ?>


    </div>
</section>

<?php get_footer(); ?>