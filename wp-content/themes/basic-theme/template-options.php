<?php

/* Template Name: Options */

$colours = get_field('choose');
$flavours = get_field('choose_a_flavour');
$consent = get_field('do_you_consent');
$question = get_field('are_you_learning_anything');

get_header(); ?>


<section class="page">
    <div class="container">

        <h1><?php the_title(); ?></h1>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>

        <?php endwhile;
        else : endif; ?>

        <h1>hi</h1>

        <?php if ($colours) : ?>
            <strong>COLOURS</strong> <?php echo implode($colours, ', '); ?>
        <?php endif; ?><br /><br />

        <?php if ($flavours) : ?>
        <?php var_dump($flavours); ?>
        <br /><br />
        <?php echo implode($flavours, ', '); ?> <br /><br />
        <?php endif; ?><br /><br />

        <?php if ($consent) : ?>
            <?php echo $consent; ?> <br /><br />
        <?php endif; ?><br /><br />
        
        <?php if ($question) : ?>
            yes, i am a learner
        <?php else : ?>
            nope not here point dexter
        <?php endif; ?>

    </div>
</section>

<?php get_footer(); ?>