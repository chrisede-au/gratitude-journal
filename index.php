<html lang="en" data-bs-theme="dark">
  <head>
    <script src="https://getbootstrap.com/docs/5.3/assets/js/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Chris Ede, ChatGPT">
    <meta name="generator" content="Hugo 0.111.3">
    <title>My Gratitude Journal</title>

    <link rel="canonical" href="">

    <link href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link href="css/style.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="./img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="./img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="./img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="https://getbootstrap.com/docs/5.3/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="https://getbootstrap.com/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="./img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">
   
    <?php include "connect.php"; ?>
  </head>
  <body>
    <main class="container py-5">
      <header class="text-center">

      
        <h1>What are you grateful for today?</h1>
        <p>It could be something you did, thought about, or even something that DIDN'T happen.</p>
        <p>Think using a <strong>growth</strong> mindset.</p>
      </header>

      <!-- Greatful Prompt Starts Here -->
      <div class="row">
        <div class="col">
          <textarea class="form-control mb-3" id="textareaGratefulForToday" rows="3" placeholder="Tell us about it"></textarea><br/>
        </div>
        <div class="col-md-3">
          <p class="text-center">
            <a onclick="" class="btn btn-outline-success" href="#" role="button">I'm greatful for this</a>
          </p>
        </div>
      </div>
      <!-- Greatful Prompt Ends Here -->

      <hr class='my-3'>

      <!-- Gratitude Feed Starts Here -->
        <?php include "get_gratitudes.php"; ?>
      <!-- Gratitude Feed Ends Here -->

    </main>

    <nav class="navbar fixed-bottom bg-body-tertiary">
      <div class="container">
        <a class="navbar-brand" href="#">Created by Chris Ede</a>
        <a href="https://www.buymeacoffee.com/chrisede" target="_blank"><img src="https://img.buymeacoffee.com/button-api/?text=Buy me a coffee&emoji=&slug=chrisede&button_colour=BD5FFF&font_colour=ffffff&font_family=Cookie&outline_colour=000000&coffee_colour=FFDD00" /></a>
      </div>
    </nav>
    
    <script src="https://getbootstrap.com/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script async="" src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <?php include "disconnect.php"; ?>
  </body>
</html>