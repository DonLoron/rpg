<?php

/**
 * Class SchoolclassCollection
 */
class SchoolclassCollection extends Collection {

  public function append(Schoolclass $item) {
    $this->data[] = $item;
  }

}