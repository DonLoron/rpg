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
  public static $time;
  public static $gameData;
  public $action;

  public function __construct()
  {

    $this->state = new State();
    $this->story = new Story();

    self::$time = new Time();

  }

  private function doTurn() {

    switch ($this->state->currentState) {
      case State::INIT:
        $this->initGameData();
        $this->state->currentState = State::CHARACTER_SELECTION;
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

    self::$gameData = GameGenerator::generateBaseData();

    $s = $this->story->addStoryPoint(new StoryPoint("The game, has started, choose your character.","Game initialized"));

    $charcterChooseAction = new Action("character_choose_name", "Wähle deinen Namen.");

    $charcterChooseAction->addField(new ActionField("player_name", "text", "Player Name"));

    $this->action = $charcterChooseAction;

  }

  public static function init() {

    $rpg = null;

    if(!isset($_GET["reset"])) $rpg = self::restore();

    if($rpg === null) {
      $rpg = new RPG();
    }

    $rpg->doTurn();

    return $rpg;
  }
}