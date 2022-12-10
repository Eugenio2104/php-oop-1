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
   * @param String $year
   * @param String $genre
   */


  public function __construct($_title, $_year, $_genre)
  {
    $this->title = $_title;
    $this->year = $_year;
    $this->genre = $_genre;
  }
}
