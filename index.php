<?php


class Movie {

  public $title;
  public $language;
  public $vote;
  public $genre;


  function __construct($_title, $_language, $_vote, $_genre)
  {
    $this->title = $_title;

    if (!is_numeric($_language)) {
      $this->language = $_language;
    }

    if (is_numeric($_vote)) {
      $this->vote = $_vote;
    }

    if (!is_numeric($_genre)) {
      $this->genre = $_genre;
    }

  }

  public function getTitle() {
    return $this->title;
  }

  public function getLanguage() {
    return $this->language;
  }

  public function getVote() {
    return $this->vote;
  }

  public function getGenre() {
    return $this->genre;
  }

}

$star_wars = new Movie('Star Wars', 'Eng', 9.3, 'Sci-Fi');

var_dump($star_wars);

echo '<strong>' . $star_wars->getTitle() . '</strong>' . '<br>';
echo $star_wars->getLanguage() . '<br>';
echo $star_wars->getVote() . '<br>';
echo $star_wars->getGenre() . '<br>';


$dead_poets_society = new Movie('Dead Poet Society', 'Eng', 8.8, 'Drama');

var_dump($dead_poets_society);

echo '<strong>' . $dead_poets_society->getTitle() . '</strong>' . '<br>' ;
echo $dead_poets_society->getLanguage() . '<br>';
echo $dead_poets_society->getVote() . '<br>';
echo $dead_poets_society->getGenre() . '<br>';




?>
