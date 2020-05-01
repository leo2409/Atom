<section>
    <div class="form">
        <h1>Post</h1>
        <form action="" method="POST">
            <div class="grid-form">
                <div class="input-box">
                    <label for="title">Title</label>
                <input type="text" name="post[title]">
                </div>
                <div class="input-box">
                    <label for="body">Body</label>
                    <input type="text" name="post[body]">
                </div>
                <input type="hidden" name="post[id]">
            </div>
            <div class="input-box">
                <input class="submit" type="submit" value="public">
            </div>
        </form>
    </div>
</section>