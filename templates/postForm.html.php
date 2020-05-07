<section>
    <?php if (!isset($post['user_id']) or $userid == $post['user_id']) : ?>
    <div class="form">
            <h1 class="form-title">Post</h1>
            <form action="" method="POST">
                <div class="grid-form-post">
                    <div class="input-box">
                        <label for="title">Title</label>
                        <input type="text" id="title" name="post[title]" class="normal-input" value="<?=$post['title'] ?? '' ?> ">
                    </div>
                    <div class="input-box">
                        <label for="body">Body</label>
                        <textarea id="joketext" name="post[body]" class="textarea-input" rows="3" cols="30"><?=$post['body'] ?? ''?></textarea>
                    </div>
                    <input type="hidden" name="post[id]" value="<?=$post['id'] ?? '' ?>">
                </div>
                <div class="input-box">
                    <input class="submit" type="submit" value="public">
                </div>
            </form>
    </div>
    <?php else: ?>
            <div class="error-box">
                <h1 class="error"><i class="icon fas fa-exclamation-circle"></i>Error</h1>
                <p>You may only edit post that you posted.</p>
            </div>
    <?php endif; ?>  
</section>