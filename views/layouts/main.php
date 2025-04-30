<?php

use gdev\phpmvc\Application;

 ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $this->title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/contact">Contact</a>
                    </li>
                </ul>
                <?php if (Application::isGuest()): ?>
                  <ul class="navbar-nav ms-auto">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/login">Login</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/register">Register</a>
                      </li>
                  </ul>
                <?php else: ?>
                  <ul class="navbar-nav ms-auto">
                      <li class="nav-item">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/profile">Profile</a>
                      </li>
                        <a class="nav-link active" aria-current="page" href="/logout"><?php echo Application::$app->user->getDisplayName() ?>
                            (Logout)
                        </a>
                      </li>
                  </ul>
                <?php endif; ?>
            </div>
        </div>
    </nav>
    <div class="container">
        <?php if (Application::$app->session->getFlash('success')): ?>
          <div class="alert alert-success">
            <?php echo Application::$app->session->getFlash('success') ?>
          </div>
        <?php endif; ?>
        {{content}}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>