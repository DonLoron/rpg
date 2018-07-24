<?php

/**
 * Created by PhpStorm.
 * User: walderwerber
 * Date: 24.07.18
 * Time: 16:45
 */
class Story
{

  private $story;

  public function __construct()
  {
    $this->story = new Collection();
  }

  public function addStoryPoint() {

  }

  public function getStory () {
    return $this->story;
  }

}