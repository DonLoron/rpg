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
  private $story;

  public function __construct()
  {

    $this->state = new State();
    $this->story = new Story();

  }

  private function doTurn() {

    switch ($this->state) {
      case State::INIT:
        break;
      case State::CHARACTER_SELECTION:
        break;
      case State::IN_GAME:
        break;
      case State::END:
        break;
    }

  }

  public static function init() {

    $rpg = self::restore();

    if($rpg === null) {
      $rpg = new RPG();
    }

    $rpg->doTurn();

    return $rpg;
  }
}