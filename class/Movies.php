<?php
class Movie
{
  public $title;
  public $img;
  public $genre;
  public $year;
  public $addInfo;



  /**
   * @param String $title
   */


  public function __constructor($_title, $_year, $_genre)
  {
    $this->title = $_title;
    $this->year = $_year;
    $this->genre = $_genre;
  }
}
