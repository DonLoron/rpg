<?php

/**
 * Created by PhpStorm.
 * User: walderwerber
 * Date: 19.07.18
 * Time: 16:38
 */
class RPG extends SessionStore
{

  public $state;
  public $story;
  public $gameData;

  public function __construct()
  {

    $this->state = new State();
    $this->story = new Story();

  }

  private function doTurn() {

    switch ($this->state->currentState) {
      case State::INIT:
        $this->initGameData();
        break;
      case State::CHARACTER_SELECTION:
        break;
      case State::IN_GAME:
        break;
      case State::END:
        break;
    }

  }

  /**
   *
   */
  private function initGameData() {

    $this->gameData = GameGenerator::generateBaseData();

    $s = $this->story->addStoryPoint();

    $s->test = "B";

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