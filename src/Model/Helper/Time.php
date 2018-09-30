<?php

/**
 * Created by PhpStorm.
 * User: Laurin
 * Date: 08.08.2018
 * Time: 18:22
 */
class Time
{

  private $time;

  public function __construct()
  {

    //set to current monday
    $this->time = new DateTime();

  }

  public function getTime() {
    return "Week " . $this->time->format("W, Y");
  }

  public function __wakeup()
  {
    $this->time->modify("+1 week");
  }

}