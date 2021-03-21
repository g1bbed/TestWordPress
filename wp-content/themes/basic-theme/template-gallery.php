<?php

/* Template Name: Gallery Template */

$images = get_field('gallery');

get_header(); ?>

<section class="page">
    <div class="container">

        <h1><?php the_title(); ?></h1>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>

        <?php endwhile;
        else : endif; ?>
        <?php if ($images) : ?>
            <div class="gallery">
                <div class="row">
                    <?php foreach ($images as $image) : ?>
                        <div class="col-lg-3">
                            <a href="<?php echo $image['sizes']['large']; ?>" title="<?php echo $image['title']; ?>">
                                <img src="<?php echo $image['sizes']['thumbnail']; ?>" class="img-fluid" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>