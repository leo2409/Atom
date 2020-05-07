<section>
    <?php foreach ($posts as $post) : ?>
        <div class="post">
            <div class="title-sign">
                <div class="title">
                    <h2><?=$post['title']?></h2>
                </div>
                <div class="sign">
                    <p>by <?=$post['username']?></p>
                </div>
            </div>
            <div class="body">
                <p><?=$post['body'] ?></p>
            </div>
            <?php if ($post['user_id'] == $user['id']) : ?>
                <div class="post-edit">
                    <a class="edit-link" href="index.php?route=post/edit&id=<?=$post['id']?>">
                        edit
                    </a>
                    <a class="delete-link" href="index.php?route=post/delete&id=<?=$post['id']?>">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
</section>