<?php


class Movie {
  public $title;
  public $language;
  public $vote;
  public $genre;


  function __construct($_title, $_language, $_vote, $_genre)
  {
    $this->title = $_title;

    if (is_nan($_language)) {
      $this->language = $_language;
    }

    if (!is_nan($_vote)) {
      $this->vote = $_vote;
    }

    if (is_nan($_genre)) {
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

$star_wars = new Movie('star wars', 'eng', 9,3, 'sci-fi');

var_dump($star_wars);

echo $star_wars->getTitle();
echo $star_wars->getLanguage();
echo $star_wars->getVote();
echo $star_wars->getGenre();



?>
