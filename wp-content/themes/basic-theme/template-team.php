<?php

/* Template Name: Team */
get_header(); ?>


<section class="page">
    <div class="container">



        <h1><?php the_title(); ?></h1>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>

        <?php endwhile;
        else : endif; ?>

        <?php if (have_rows('team')) : ?>
            <ul class="list-group">
                <?php while (have_rows('team')) : the_row();
                    $image = get_sub_field('profile_picture');
                    $link = get_sub_field('link');
                    $heading = get_sub_field('name');
                    $biography = get_sub_field('biography');
                ?>
                    <li class="list-group-item">
                        <?php if ($image) : ?>
                            <img src="<?php echo ($image['sizes']['medium']); ?>" style="width: 100%; height: auto;" alt="<?php echo ($image['alt']); ?>" />
                        <?php endif; ?>
                        <?php if ($heading) : ?>
                            <h4><?php echo $heading; ?></h4>
                        <?php endif; ?>
                        <?php if ($biography) : ?>
                            <?php the_sub_field('biography'); ?>
                        <?php endif; ?>
                        <?php if ($link) : ?>
                            <a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
                        <?php endif; ?>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>

    </div>
</section>

<?php get_footer(); ?>