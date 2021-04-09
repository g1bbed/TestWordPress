<?php

/* Template Name: CV Page */
$intro_profile_image = get_field('profile_image');
$intro_about_me = get_field('intro_about_me');
$intro_title = get_field('intro_title');
$intro_content = get_field('intro_content');
$my_experiences = get_field('my_experiences');
$my_education = get_field('education');
$my_abilities = get_field('my_abilities');
$skills = get_field('skills');
$tools = get_field('tools');

get_header(); ?>


<section class="page">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>

        <?php endwhile;
        else : endif; ?>
        <!-- Start Intro Block -->
        <div class="my-intro">
            <div class="intro-grid-container">
                <div class="grid-column-1">
                    <?php if ($intro_about_me) : ?>
                        <h1><?php echo ($intro_about_me); ?></h1>
                    <?php endif; ?>
                    <?php if ($intro_content) : ?>
                        <h4><?php echo ($intro_title); ?></h4>
                    <?php endif; ?>
                    <?php if ($intro_content) : ?>
                        <?php echo ($intro_content); ?>
                    <?php endif; ?>
                    <?php if (have_rows('intro_call_to_action_repeater')) : ?>
                        <?php while (have_rows('intro_call_to_action_repeater')) : the_row();
                            $call_to_action = get_sub_field('call_to_action');
                        ?>
                            <?php if ($call_to_action) : ?>
                                <a class="button" href="<?php echo $call_to_action['url'] ?>"><?php echo $call_to_action['title'] ?></a>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="grid-column-2">
                    <?php if ($intro_profile_image) : ?>
                        <img src="<?php echo $intro_profile_image['sizes']['medium']; ?>" alt="<?php echo $intro_profile_image['alt']; ?>" title="<?php echo $intro_profile_image['title']; ?>">
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- End Intro Block -->
        <!-- Start My Experiences -->
        <div class="my-experiences">
            <div id="gallery">
                <?php if ($my_experiences) : ?>
                    <h1 class="c"><?php echo ($my_experiences); ?></h1>
                <?php endif; ?>
                <?php if (have_rows('career')) : ?>
                    <?php while (have_rows('career')) : the_row();
                        $slideshow_images = get_sub_field('slideshow_images');
                        $workplace = get_sub_field('workplace');
                        $position = get_sub_field('position');
                        $time_period = get_sub_field('time_period');
                        $description = get_sub_field('description');
                        $examples_of_work = get_sub_field('examples_of_work');
                    ?>
                        <!-- Start Swiper -->
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <?php foreach ($slideshow_images as $image) : ?>
                                    <div class="swiper-slide">
                                        <a class="item" href="<?php echo $image['url']; ?>">
                                            <img class="img-responsive" src="<?php echo $image['url']; ?>" class="img-fluid" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <!-- End Swiper -->
                        <div class="myexperiences-grid-container">
                            <div class="grid-column-1">
                                <?php if ($workplace) : ?>
                                    <h3><?php echo $workplace ?></h3>
                                <?php endif; ?>
                                <?php if ($time_period) : ?>
                                    <p><?php echo $time_period ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="grid-column-2">
                                <?php if ($position) : ?>
                                    <h3><?php echo $position ?></h3>
                                <?php endif; ?>
                                <?php if ($description) : ?>
                                    <?php echo $description ?>
                                <?php endif; ?>
                                <?php foreach ($examples_of_work as $example) : ?>
                                    <?php foreach ($example as $link) : ?>
                                        <a class="button" href="<?php echo $link['url'] ?>"><?php echo $link['title'] ?></a>
                                    <?php endforeach; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <!-- End My Experiences -->
        <!-- Start My Education -->
            <?php if (have_rows('my_education')) : ?>
                <?php while (have_rows('my_education')) : the_row();
                    $place_of_study = get_sub_field('place_of_study');
                    $certification = get_sub_field('certification');
                    $time_period = get_sub_field('time_period');
                    $description = get_sub_field('description');
                ?>
                    <div class="myeducation-grid-container">
                        <div class="grid-column-1">
                            <?php if ($place_of_study) : ?>
                                <h3><?php echo $place_of_study ?></h3>
                            <?php endif; ?>
                            <?php if ($time_period) : ?>
                                <p><?php echo $time_period ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="grid-column-2">
                            <?php if ($certification) : ?>
                                <h3><?php echo $certification ?></h3>
                            <?php endif; ?>
                            <?php if ($description) : ?>
                                <?php echo $description ?>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <!-- End My Education -->
        <!-- Start My Abilities -->
        <div class="my-abilities">
            <?php if ($my_abilities) : ?>
                <h1 class="c"><?php echo ($my_abilities); ?></h1>
            <?php endif; ?>
            <div class="myabilities-grid-container">
                <div class="grid-column-1">
                    <?php if ($skills) : ?>
                        <h2><?php echo ($skills); ?></h2>
                    <?php endif; ?>
                </div>
            </div>
            <div class="myabilities-grid-container">
                <?php if (have_rows('my_skills')) : ?>
                    <?php while (have_rows('my_skills')) : the_row();
                        $type_of_skill = get_sub_field('type_of_skill');
                        $level_of_skill = get_sub_field('level_of_skill');
                        $years_of_exp = get_sub_field('years_of_exp');
                    ?>
                        <div class="grid-column-1">
                            <?php if ($type_of_skill) : ?>
                                <div class="title"><?php echo $type_of_skill ?></div>
                            <?php endif; ?>
                            <?php if ($level_of_skill) : ?>
                                <div class="abilities-bar">
                                    <div class="percentage" style="width:<?php echo $level_of_skill ?>%;"><?php echo $level_of_skill ?>%</span></div>
                                </div>
                            <?php endif; ?>
                            <div class="label c"> <?php
                                                    $i = $years_of_exp;
                                                    switch ($i) {
                                                        case ($i >= 0 && $i < 1.01):
                                                            echo  $i, ' Year';
                                                            break;
                                                        case ($i >= 2 && $i < 9):
                                                            echo  $i, ' Years';
                                                            break;
                                                        case ($i >= 10):
                                                            echo '10+ Years';
                                                            break;
                                                    }
                                                    ?></div>
                        </div>
                    <?php endwhile; ?>
            </div>
        <?php endif; ?>
        <div class="myabilities-grid-container">
            <div class="grid-column-1">
                <?php if ($tools) : ?>
                    <h2><?php echo ($tools); ?></h2>
                <?php endif; ?>
            </div>
        </div>
        <div class="myabilities-grid-container">
            <?php if (have_rows('my_tools')) : ?>
                <?php while (have_rows('my_tools')) : the_row();
                    $type_of_tool = get_sub_field('type_of_tool');
                    $level_of_skill = get_sub_field('level_of_skill');
                    $years_of_exp = get_sub_field('years_of_exp');
                ?>
                    <div class="grid-column-1">
                        <?php if ($type_of_tool) : ?>
                            <div class="title"><?php echo $type_of_tool ?></div>
                        <?php endif; ?>
                        <?php if ($level_of_skill) : ?>
                            <div class="abilities-bar">
                                <div class="percentage" style="width:<?php echo $level_of_skill ?>%;"><?php echo $level_of_skill ?>%</div>
                            </div>
                        <?php endif; ?>
                        <?php if ($years_of_exp) : ?>
                            <div class="label c"> <?php
                                                    $i = $years_of_exp;
                                                    switch ($i) {
                                                        case ($i >= 0 && $i < 1.01):
                                                            echo  $i, ' Year';
                                                            break;
                                                        case ($i >= 2 && $i < 9):
                                                            echo  $i, ' Years';
                                                            break;
                                                        case ($i >= 10):
                                                            echo '10+ Years';
                                                            break;
                                                    }
                                                    ?></div>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        </div>
        <!-- End My Abilities -->
</section>
<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 2,
        spaceBetween: 20,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 0,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 0,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 0,
            },
        }
    });
</script>

<?php get_footer(); ?>