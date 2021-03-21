<pre><?php echo print_r(get_sub_field('columns')); ?></pre>
<?php
$columns = get_sub_field('columns');
foreach ($columns as $column) : ?>
    <h1><?php echo $column['title'] ?></h1>
    <p><?php echo $column['content'] ?></p>
    <a href="<?php echo $column['link']['url'] ?>" target="<?php echo $column['link']['target'] ?>"><?php echo $column['link']['title'] ?></a>
<?php endforeach; ?>