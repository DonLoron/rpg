<?php

/**
 * Created by PhpStorm.
 * User: walderwerber
 * Date: 19.07.18
 * Time: 16:39
 */

class Person {

  private $schoolclass;

  public $firstname;
  public $lastname;

  public function __construct($firstname, $lastname)
  {
    $this->firstname = $firstname;
    $this->lastname= $lastname;
  }

  /**
   * @return mixed
   */
  public function getKlasse()
  {
    return $this->schoolclass;
  }

  /**
   * @return mixed
   */
  public function setKlasse(Schoolclass $schoolclass)
  {
    $this->schoolclass = $schoolclass;
  }
}