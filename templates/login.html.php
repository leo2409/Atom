<section>
    <div class="form">
        <?php if(isset($error['notLogged'])): ?>
            <div class="error">
            <h3>You must be logged in to view this page.</h3>
            </div>
        <?php endif; ?>
            <h1 class="form-title">Log In!</h1>
        <?php if(isset($error['authentication'])): ?>
            <div class="error">
                <?=$error['authentication'] ?>
            </div>
        <?php endif; ?>
        <form action="" method="POST">
            <div class="grid-form">
                 <div class="input-box">
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" class="normal-input" placeholder="email" value="<?=$user['email'] ?? '' ?>">
                </div>
                <div class="input-box">
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" class="normal-input" placeholder="password">
                </div>
            </div>
            <div class="input-box">
                <input class="submit" type="submit" value="Log In">
            </div>
        </form>
    <p>Don't have an account?  
    <a href="index.php?route=user/register">Click here to register an account ></a></p>
    </div>
</section>