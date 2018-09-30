<?php

/**
 * This is a Default StoryPoint.
 * User: walderwerber
 * Date: 26.07.18
 * Time: 15:19
 */
class StoryPoint
{

  public $title;
  public $text;
  public $data;
  public $time;

  private $isArchived = false;

  public function __construct($text = "", $title = "", $data = [])
  {
    $this->text = $text;
    $this->title = $title;
    $this->data = $data;
    $this->time = RPG::$time;
  }

  public function isArchived() {
    return $this->isArchived;
  }

  public function __wakeup()
  {
    $this->isArchived = true;
  }

}