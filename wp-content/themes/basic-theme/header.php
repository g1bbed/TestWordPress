<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>

</head>

<body <?php body_class();
        $logobackground = get_field('logo', 'options');
        ?>>
    <header class="main">
        <div class="header-grid-container">
            <div class="grid-column-1">
                <iframe src="https://editor.p5js.org/stephanieclaire/embed/nEtA2Kp-P"></iframe>
            </div>
            <div class="grid-column-2">
                <?php if (have_rows('quick_link', 'options')) : ?>
                    <?php while (have_rows('quick_link', 'options')) : the_row();
                        $icon = get_sub_field('icon');
                        $link = get_sub_field('link');
                    ?>
                        <div class="tooltip">
                            <a href="<?php echo $link['url'] ?>" target="_blank " class="round-button" role="button">
                                <?php echo $icon ?>
                            </a>
                            <div class="function bottom">
                                <i></i>
                                <?php echo $link['title'] ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </header>