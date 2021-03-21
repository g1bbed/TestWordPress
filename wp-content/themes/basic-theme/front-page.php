<?php get_header(); ?>

<?php
$title = get_field('page_title');
$desc = get_field('description');
$other_description = get_field('other_description');
$my_input = get_field('my_input');
$my_email = get_field('my_email');
?>

<section class="page">
    <div class="container">

    <?php the_field('phone', 'options');?>
        <h1><?php the_title(); ?></h1>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>

        <?php endwhile;
        else : endif; ?>
        <?php
        $title = get_field('page_title');
        ?>
        <?php if ($title) : ?>
            <h1><?php echo $title; ?></h1>
        <?php endif; ?>
        <?php if ($desc) : ?>
            <p><?php echo nl2br($desc); ?></p>
        <?php endif; ?>
        <?php if ($other_description) : ?>
            <div><?php echo ($other_description); ?></div>
        <?php endif; ?>
        <?php if ($my_input) : ?>
            <?php var_dump((int)$my_input); ?>
        <?php endif; ?>
        <?php if ($my_email) : ?>
            <a href="mailto:<?php echo ($my_email); ?>"><?php echo ($my_email); ?></a>
        <?php endif; ?>

        <?php if (have_rows('content')) : ?>
            <?php while (have_rows('content')) : the_row(); ?>
                <?php if (get_row_layout() == 'columns_section') :
                    $columns = get_sub_field('columns'); ?>

                    <?php get_template_part('parts/section', 'columns'); ?>

                <?php endif; ?>


                <?php if (get_row_layout() == 'text_with_image') :
                    $title = get_sub_field('title');
                    $content = get_sub_field('text');
                    $image = get_sub_field('image');
                    $picture = $image['sizes']['large'];
                    $side = get_sub_field('image_side');
                ?>

                    <?php get_template_part('parts/section', 'textwithimage'); ?>

                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>




    </div>
</section>

<?php get_footer(); ?>