<?php
require '../partials/quotes.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap');
  </style>
  <link rel="stylesheet" href="CSS/styles.css">
  <title>Just Do It</title>
</head>

<body>
  <header>
    <h1 class="hero-text">JUST DO IT</h1>
    <h2>Find motivation when you need it most</h2>
  </header>
  <main>
    <div class="quote-container">
      <?php displayQuote($quote1) ?>
      <?php displayAuthor($quote1) ?>
    </div>
    <div class="quote-container">
      <?php displayQuote($quote2) ?>
      <?php displayAuthor($quote2) ?>
    </div>
    <div class="quote-container">
      <?php displayQuote($quote3) ?>
      <?php displayAuthor($quote3) ?>
    </div>
    <div class="quote-container">
      <?php displayQuote($quote4) ?>
      <?php displayAuthor($quote4) ?>
    </div>
  </main>
  <footer>
    <div>
      <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/5-sfG8BV8wU?si=39JLLn7iI7642AVn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
  </footer>
</body>

</html>