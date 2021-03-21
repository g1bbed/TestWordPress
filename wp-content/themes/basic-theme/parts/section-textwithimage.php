<?php
$title = get_sub_field('title');
$content = get_sub_field('text');
$image = get_sub_field('image');
$picture = $image['sizes']['large'];
$side = get_sub_field('image_side');
?>
<div class="row">
    <?php if ($side == 'left') : ?>
        <div class="col-lg-6">
            <img src="<?php echo $picture; ?>" style="height: auto; width: 100%;">
        </div>
        <div class="col-lg-6">
            <h4><?php echo $title; ?></h4>
            <?php echo $content; ?>
        </div>
    <?php else : ?>
        <div class="col-lg-6">
            <h4><?php echo $title; ?></h4>
            <?php echo $content; ?>
        </div>
        <div class="col-lg-6">
            <img src="<?php echo $picture; ?>" style="height: auto; width: 100%;">
        </div>
    <?php endif; ?>
</div>