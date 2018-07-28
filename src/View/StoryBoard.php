<?php

/**
 * Created by PhpStorm.
 * User: walderwerber
 * Date: 24.07.18
 * Time: 14:33
 */
class StoryBoard extends Board
{

  public function __construct(Story $story)
  {
    $this->addData('story', $story);
  }
}