<?php

/**
 * Created by PhpStorm.
 * User: walderwerber
 * Date: 19.07.18
 * Time: 16:41
 */
class School {

  public $name;
  public $schoolclasses;

  public function __construct($name)
  {
    $this->name = $name;
    $this->schoolclasses = new Collection();
  }

  public function addSchoolclass(Schoolclass $schoolclass) {
    $this->schoolclasses->add($schoolclass);
    $schoolclass->setSchoolhouse($this);
  }

}