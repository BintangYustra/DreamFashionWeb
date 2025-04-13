<!doctype html>
<html lang="en" data-bs-theme="auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $judul;?></title>
    <link rel="icon" type="image/x-icon" href="IMG/favicon.ico">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Inline:opsz,wght@10..72,100..900&family=Londrina+Solid:wght@100;300;400;900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nanum+Pen+Script&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Boldonse&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css"/>
    <style>
        body {
        padding-bottom: 20px;
        }

        .navbar {
        background-color: #071e2e;
        }
        
        .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        }

        .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(255, 0, 0, 0.1);
        border: solid rgba(255, 255, 255, 0.15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
        }

        .bi {
        vertical-align: -.125em;
        fill: currentColor;
        }

        @media only screen and (max-width: 600px) {
        #content{
        flex-direction: column;
        }
        }
        </style>
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="<?php base_url()?>Home"><img src="images/dreamfashio_blank_logo.png" alt="" style="max-width: 100%;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample07">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="<?php base_url() ?>About">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php base_url() ?>OurProduct">Our Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php base_url() ?>Contact">Contact</a>
          </li>
        </ul>
      </div>
      <a href="<?php base_url() ?>Login" style="float: right; justify-content: end; margin: auto;" target="_blank"><button type="button" class="btn btn-light">Login</button></a>  
    </div>
  </nav>
