<?php echo $before_widget; ?>
    <?php if (!empty($instance['link'])) : ?>
    <a href="<?php echo $instance['link']; ?>" target="<?php echo $instance['linktarget']; ?>">
    <?php endif; ?>
    <img src="<?php echo $instance['imageurl']; ?>" alt="<?php echo $instance['alt']; ?>" class="responsive">

    <h3 class="box-title"><?php echo $title; ?></h3>

    <?php if (!empty($description)) : ?>
    <div class="box-content padding-x1-5">
        <?php echo wpautop($description); ?>
    </div>
    <?php endif; ?>

    <?php if (!empty($instance['link'])) : ?>
    </a>
    <?php endif; ?>
<?php echo $after_widget; ?>