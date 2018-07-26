<?php

/**
 * Created by PhpStorm.
 * User: walderwerber
 * Date: 26.07.18
 * Time: 09:27
 */
class GameData
{

  private $schools;

  public function __construct()
  {
    $this->schools = new Collection();
  }

  public function getSchools() {
    return $this->schools;
  }

  public function addSchool(School $school) {
    $this->schools->add($school);
  }

}