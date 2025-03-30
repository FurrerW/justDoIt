<?php

class Quote
{
  public $advice;
  public $author;

  public function __construct($advice, $author)
  {
    $this->advice = $advice;
    $this->author = $author;
  }
}

function displayQuote($quote)
{
  echo "<p class=\"quote\"><mark>$quote->advice</mark></p>";
}

function displayAuthor($quote)
{
  echo "<p class=\"author\"> - $quote->author</p>";
}

$quote1 = new Quote("Keep building, keep failing, keep learning. Rinse and repeat.", "Shashi Lo");
$quote2 = new Quote("If you look for balance you won't find it. Just create the balance instead or leave things unbalanced for a bit and once you make good progress balance it once again.", "Danny Thompson");
$quote3 = new Quote("Have your fun and once you have your fill, let those fingers dance on that keyboard!", "Danny Thompson");
$quote4 = new Quote(
  "Do it<br>
Just do it<br>
<br>
Don't let your dreams be dreams<br>
Yesterday you said tomorrow<br>
So just do it<br>
Make your dreams come true<br>
Just do it<br>
<br>
Some people dream of success<br>
While you're gonna wake up and work hard at it<br>
Nothing is impossible<br>
<br>
You should get to the point<br>
Where anyone else would quit<br>
And you're not going to stop there<br>
No, what are you waiting for?<br>
<br>
Do it<br>
Just do it<br>
Yes you can<br>
Just do it<br>
If you're tired of starting over<br>
Stop giving up",
  "Shia LeBeouf"
);
