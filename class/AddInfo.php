<?php

class AddInfoData
{
  public $country;
  public $plot;
  public $runtime;

  /**
   * @param String $country
   * @param String $plot
   * @param String $runtime
   */

  public function __construct($_country, $_plot, $_runtime)
  {
    $this->country = $_country;
    $this->plot = $_plot;
    $this->runtime = $_runtime;
  }
}
