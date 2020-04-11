<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="layout.css">
    <title><?=$title?></title>
  </head>
  <body>
    <header>
      <div class="title">
        <h1>Atom</h1>
      </div>
      <nav>
        <ul class="nav">
          <li>
            <a class="nav-link" href="index.php">Post</a>
          </li>
          <li>
            <a class="nav-link" href="index.php?route=book/list">Books list</a>
          </li>
          <li>
            <a class="nav-link" href="index.php?route=book/edit">Add post</a>
          </li>
        </ul>
      </nav>
      <div class="box-login">
        <a class="nav-link" href="#">sign in</a>
        <a class="login" href="index.php?route=user/register">register</a>
      </div>
    </header>
    <main>
      <?=$output?>
    </main>
    <footer>
      <div class="footerstring">
        <p>
          Copyright © 2020 Leonardo Brunetti. All rights reserved.
        </p>
        <div>
          <a href="#">
            <img src="/../../../img/instalogowhite.png" alt="" class="sociallogo">
          </a>
        </div>
      </div>
    </footer>
  </body>
</html>
