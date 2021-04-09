<?php wp_footer(); ?>
<div class="footer footer-grid-container">
    <div class="grid-column-1">
        <?php $content1 = get_field('content', 'options'); ?>
        <?php echo $content1 ?>
    </div>
</div>
</body>

</html>