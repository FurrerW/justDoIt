<?php

class Quote
{
  public $quote = "";
  public $author = "";

  public function __construct($quote, $author)
  {
    $this->quote = $quote;
    $this->author = $author;
  }

  // public function displayQuote($quote)
  // {

  // }

  // public function displayAuthur($author)
  // {
  //   echo $author;
  // }
}

$quote1 = new Quote("Keep building, keep failing, keep learning. Rinse and repeat.", "Shashi Lo");
$quote2 = new Quote("If you look for balance you won't find it. Just create the balance instead or leave things unbalanced for a bit and once you make good progress balance it once again.", "Danny Thompson");
$quote3 = new Quote("Have your fun and once you have your fill, let those fingers dance on that keyboard!", "Danny Thompson");
