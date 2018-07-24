<?php

/**
 * Created by PhpStorm.
 * User: walderwerber
 * Date: 19.07.18
 * Time: 16:41
 */
class School {

  public $name;
  public $klassen;

  public function __construct($name)
  {
    $this->name = $name;
    $this->klassen = new SchoolclassCollection();
  }

  public function appendKlasse(Schoolclass $klasse) {
    $this->klassen->append($klasse);
    $klasse->setSchulhaus($this);
  }

}