<section>
    <div class="form">
        <h1 class="form-title">Profilo</h1>
        <?php if (isset($errors)):?>
            <div class="error">
                <p>You account could not be created, please check the following:</p>
                <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?=$error?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        <form action="" method="POST">
            <div class="grid-form">
                <div class="input-box">
                    <label for="email">Email</label>
                    <input id="email" type="email" name="user[email]" placeholder="email" value="<?=$user['email'] ?? '' ?>">
                </div>
                <div class="input-box">
                    <label for="name">Name</label>
                    <input id="name" type="text" name="user[name]" placeholder="Name" value="<?=$user['name'] ?? '' ?>">
                </div>
                <div class="input-box">
                    <label for="username">Username</label>
                    <input id="username" type="text" name="user[username]" placeholder="username" value="<?=$user['username'] ?? '' ?>">
                </div>
                <div class="input-box">
                    <label for="password">Password</label>
                    <input id="password" type="password" name="user[password]" placeholder="password" value="<?=$user['password'] ?? '' ?>">
                </div>
            </div>
            <div class="input-box">
                <input class="submit" type="submit" value="Register">
            </div>
        </form>
    </div>
</section>