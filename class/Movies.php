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


  public function __construct($_title, $_year, $_genre, AddInfoData $_addinfo = null)
  {
    $this->title = $_title;
    $this->year = $_year;
    $this->genre = $_genre;
    $this->addInfo = $_addinfo;
  }


  public function Img($_img)
  {
    $this->img = $_img;
  }

  public function getImg()
  {
    $placeholder = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_Bj240l6FHX_bWhZ2obo_F49fohH582cxAA&usqp=CAU';
    if ($this->img) {
      return $this->img;
    } else {
      return $placeholder;
    }
  }
}
