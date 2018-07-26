<?php

/**
 * Class SchoolclassCollection
 */
class SchoolclassCollection extends Collection {

  public function add(Schoolclass $item) {
    $this->data[] = $item;
  }

}