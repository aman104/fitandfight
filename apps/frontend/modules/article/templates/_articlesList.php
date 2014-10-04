<h1><?php echo $category->getName(); ?></h1>

<?php if(count($posts) > 0): ?>
    <div class="infinite-scroll">
    <?php foreach($posts as $post): ?>
        <div class="post">
            <?php $date = $post->getCreatedAt(); ?>
    <div class="post-date"><?php echo date('d', strToTime($date)); ?><br/><?php echo date('M', strToTime($date)); ?></div>
            <div class="post-content">
                <h2><?php echo $post->getTitle(); ?></h2>
                <p><?php echo $post->getExcerpt(); ?></p>
                <a class="more" href="<?php echo url_for('article', $post) ?>">więcej &raquo;</a>
            </div>
            <div class="post-image">
                <?php $gallery = $post->getGallery(); ?>
                <?php if($gallery && $picture = $gallery->getDefaultPicture()): ?>
                    <a href="<?php echo url_for('article', $post) ?>"><img src="<?php echo $picture->getPath('min'); ?>" /></a>
                <?php else: ?>
                    <a href="<?php echo url_for('article', $post) ?>"><img src="/images/post.png" /></a>
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; ?>
    <a style="display: none;" href="<?php  ?>" class="jscroll-next"></a>
    </div>
<?php else: ?>
    <p>Brak wpisów</p>
<?php endif; ?>