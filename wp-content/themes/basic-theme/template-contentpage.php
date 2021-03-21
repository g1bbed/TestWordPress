<?php

/* Template Name: Content Page */

$image = get_field('feature_image');
$picture = $image['sizes']['my_custom_size'];
$file = get_field('upload_a_file');
$video = get_field('embed_a_video');


get_header(); ?>

<section class="page">
    <div class="container">

        <h1><?php the_title(); ?></h1>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>

        <?php endwhile;
        else : endif; ?>

        <?php var_dump($image); ?>
        <img src="<?php echo $picture; ?>" class="img-fluid" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">
        <?php if ($file) : ?>
            <?php var_dump($file); ?>
            <a href="<?php echo $file['url']?>" target="_blank"><?php echo $file['filename']?></a>
        <?php endif; ?>
        <?php if ($video) : ?>
            <?php echo($video); ?>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>