<?php

/**
 * Class SchoolclassCollection
 */
class StoryPointCollection extends Collection {

  public function add(StoryPoint $item) {
    $this->data[] = $item;
  }

}