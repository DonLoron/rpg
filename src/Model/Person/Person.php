<?php

/**
 * Created by PhpStorm.
 * User: walderwerber
 * Date: 19.07.18
 * Time: 16:39
 */

class Person {

  private $klasse;

  public $vorname;
  public $nachname;

  public function __construct($vorname, $nachname)
  {
    $this->vorname = $vorname;
    $this->nachname= $nachname;
  }

  /**
   * @return mixed
   */
  public function getKlasse()
  {
    return $this->klasse;
  }

  /**
   * @return mixed
   */
  public function setKlasse(Schoolclass $klasse)
  {
    $this->klasse = $klasse;
  }
}