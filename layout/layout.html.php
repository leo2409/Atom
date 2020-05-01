<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://kit.fontawesome.com/d6104b104e.js" crossorigin="anonymous"></script>
    <title><?=$title?></title>
  </head>
  <body>
  <nav class="header">
      <div class="nav-small">
          <div class="burger_Btn">
              <div class="line1"></div>
              <div class="line2"></div>
              <div class="line3"></div>
          </div>
          <div class="logo">
              <a href="">
                <img src="svg/atom-logo.svg" alt="" class="logo-svg">
              </a>
          </div>
          <div class="edit_Btn">
              <a href="" class="nav-ul-li-a">
                  <i class="edit fas fa-pencil-alt"></i>
              </a>
          </div>
      </div>
      <div class="nav-large">
          <div class="logo">
              <a href="">
                <img src="svg/atom-logo.svg" alt="" class="logo-svg">
              </a>
          </div>
          <div class="ul-open">
              <ul>
                  <li>
                      <a href="">Home</a>
                  </li>
                  <li>
                      <a href="">Search</a>
                  </li>
                  <li>
                      <a href="">Profile</a>
                  </li>
              </ul>
          </div>
          <div class="edit_Btn">
              <a href="" class="nav-ul-li-a">
                  <i class="edit fas fa-pencil-alt"></i>
              </a>
          </div>
      </div>
  </nav>
  <main>
    <?=$output?>
  </main>
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
