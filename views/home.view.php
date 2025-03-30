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
    <h1 class="ibm-plex-sans-header">JUST DO IT</h1>
  </header>
  <main>
    <div>
      <?php displayQuote($quote1) ?>
    </div>
    <div>
      <?php displayAuthor($quote1) ?>
    </div>
    <div>
      <?php displayQuote($quote2) ?>
    </div>
    <div>
      <?php displayAuthor($quote2) ?>
    </div>
    <div>
      <?php displayQuote($quote3) ?>
    </div>
    <div>
      <?php displayAuthor($quote3) ?>
    </div>
    <div>
      <?php displayQuote($quote4) ?>
    </div>
    <div>
      <?php displayAuthor($quote4) ?>
    </div>
  </main>
</body>

</html>