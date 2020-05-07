<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-165634371-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-165634371-1');
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://kit.fontawesome.com/d6104b104e.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
    <title><?=$title?></title>
  </head>
  <body>
  <nav class="header">

      <!--NAV SMALL -->
      <div class="nav-small">
        <div class="nav-small-flex">
            <div class="burger_Btn">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <div class="logo">
                <a href="index.php?route=home">
                  <img src="svg/atom-logo.svg" alt="" class="logo-svg">
                </a>
            </div>
            <div class="edit_Btn">
                <a href="index.php?route=post/edit" class="nav-ul-li-a">
                    <i class="edit fas fa-pencil-alt"></i>
                </a>
            </div>
        </div>
        <div class="hide-ul">
          <div class="list">
            <ul>
              <li>
                  <a href="index.php?route=home"><i class="icon fas fa-skull"></i>Home</a>
              </li>
              <li>
                  <a href=""><i class="icon fas fa-search"></i>Search</a>
              </li>
              <li>
                  <a href=""><i class="icon fas fa-user-circle"></i>Profile</a>
              </li>
              <li>
                <?php if ($loggedIn) : ?>
                  <a href="index.php?route=logout"><i class="icon fas fa-sign-out-alt"></i>Logout</a>
                <?php else: ?>
                  <a href="index.php?route=login"><i class="icon fas fa-sign-in-alt"></i>Login</a>
                <?php endif; ?>
              </li>
            </div>
          </div>
      </div>

      <!--NAV LARGE -->
      <div class="nav-large">
          <div class="logo">
              <a href="index.php?route=home">
                <img src="svg/atom-logo.svg" alt="" class="logo-svg">
              </a>
          </div>
          <div class="ul-open">
              <ul>
                  <li>
                      <a href="index.php?route=home">Home</a>
                  </li>
                  <li>
                      <a href="">Search</a>
                  </li>
                  <li>
                      <a href="">Profile</a>
                  </li>
              </ul>
          </div>
          <div class="btn">
            <div class="logout">
              <?php if ($loggedIn) : ?>
                <a href="index.php?route=logout">Logout</a>
              <?php else: ?>
                <a href="index.php?route=login">Login</a>
              <?php endif; ?>
            </div>
            <div class="edit_Btn">
                <a href="index.php?route=post/edit" class="nav-ul-li-a">
                    <i class="edit fas fa-pencil-alt"></i>
                </a>
            </div>
          </div>
      </div>
  </nav>

  <!-- MAIN -->
  <main>
    <?=$output?>
  </main>
  
  <script src=".\js\main.js"></script>
  
  <!-- FOOTER -->
  <footer>
    <div class="footer-content">
      <p>
        Copyright © 2020 Leonardo Brunetti. All rights reserved.
      </p>
      <div>
        <a href="#">
          <img src=".\img\instalogowhite.png" alt="" class="social-logo">
        </a>
      </div>
    </div>
  </footer>

  </body>
</html>
