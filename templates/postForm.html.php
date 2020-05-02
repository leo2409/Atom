<section>
    <div class="form">
        <h1 class="form-title">Post</h1>
        <form action="" method="POST">
            <div class="grid-form-post">
                <div class="input-box">
                    <label for="title">Title</label>
                    <input type="text" id="title" name="post[title]" class="normal-input">
                </div>
                <div class="input-box">
                    <label for="body">Body</label>
                    <textarea id="joketext" name="post[body]" class="textarea-input" rows="3" cols="30" placeholder="body" max> </textarea>
                </div>
                <input type="hidden" name="post[id]">
            </div>
            <div class="input-box">
                <input class="submit" type="submit" value="public">
            </div>
        </form>
    </div>
</section>