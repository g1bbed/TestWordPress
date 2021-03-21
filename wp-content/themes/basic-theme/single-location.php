<?php

$link = get_field('link');
$page_link = get_field('page_link');
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

        <pre><?php echo print_r($page_link); ?></pre>
        <?php if ($link) : ?>
            <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
        <?php endif; ?>

        <?php
        $args = [

            'post_type' => 'member',
            'meta_query' => [
                array(
                    'key' => 'locations',
                    'value' => '"' . get_the_ID() . '"',
                    'compare' => 'LIKE'

                )
            ],
        ];
        $team_members = get_posts($args);
        ?>
        <?php foreach ($team_members as $member) : ?>
            <pre><?php echo print_r($member); ?></pre>
            <a href="<?php echo get_permalink($member->ID); ?>"><?php echo $member->post_title; ?></a>
        <?php endforeach; ?>
    </div>
</section>

<?php get_footer(); ?>