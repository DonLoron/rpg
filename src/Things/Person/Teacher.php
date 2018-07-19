<?php

/**
 * Created by PhpStorm.
 * User: walderwerber
 * Date: 19.07.18
 * Time: 16:39
 */

class Teacher extends Person {
  public $hauptfach;

  public function __construct($vorname, $nachname, $hauptfach)
  {
    parent::__construct($vorname, $nachname);
    $this->hauptfach = $hauptfach;
  }
}