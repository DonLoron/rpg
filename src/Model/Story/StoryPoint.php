<?php

/**
 * This is a Default StoryPoint.
 * User: walderwerber
 * Date: 26.07.18
 * Time: 15:19
 */
class StoryPoint
{

  public $test;

  private $isArchived = false;

  public function __construct($test = "")
  {
    $this->test = $test;
  }

  public function isArchived() {
    return $this->isArchived;
  }

  public function __wakeup()
  {
    $this->isArchived = true;
  }

}