<section>
    <?php foreach ($posts as $post) : ?>
        <div class="post">
            <div class="header-post">
                <div class="title-sign">
                    <div class="title">
                        <h2><?=$post['title']?></h2>
                    </div>
                    <div class="sign">
                        <p>by <?=$post['username']?></p>
                    </div>
                </div>
                <div class="post-edit">
                    <form action="">
                        <input type="submit" value="edit">
                        <input type="hidden" value="<?=$post['user_id'] ?>">
                    </form>
                </div>
            </div>
            <div class="body">
                <p><?=$post['body'] ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</section>