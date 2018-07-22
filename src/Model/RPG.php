<?php

/**
 * Created by PhpStorm.
 * User: walderwerber
 * Date: 19.07.18
 * Time: 16:38
 */
class RPG extends SessionStore
{

  private $state;
  public $test = 0;

  public function __construct()
  {
    $this->state = new State();
  }

  private function doTurn() {

    //echo 'lets go on!';

  }

  public static function main() {

    $rpg = self::restore();

    if($rpg === null) {
      $rpg = new RPG();
    }

    $rpg->doTurn();
  }
}