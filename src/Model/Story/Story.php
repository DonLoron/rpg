<?php

/**
 * Created by PhpStorm.
 * User: walderwerber
 * Date: 24.07.18
 * Time: 16:45
 */
class Story
{

  private $stories;

  public function __construct()
  {
    $this->stories = new StoryPointCollection();
  }

  public function addStoryPoint() {
    $storyPoint = new StoryPoint("A");
    $this->stories->add($storyPoint);
    return $storyPoint;
  }

  public function getStories () {
    return $this->stories;
  }

}
