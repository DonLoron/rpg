<?php

/**
 * Created by PhpStorm.
 * User: walderwerber
 * Date: 19.07.18
 * Time: 16:32
 */

class PersonCollection extends Collection {

  public function append(Person $item) {
    $this->data[] = $item;
  }

}