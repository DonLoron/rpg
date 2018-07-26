<?php

/**
 * Created by PhpStorm.
 * User: Laurin
 * Date: 22.07.2018
 * Time: 20:18
 */
class RPGController
{

  private $RPG;

  private $characterBoard;
  private $storyBoard;
  private $actionBoard;

  public function __construct()
  {

    //trigger turn
    $this->RPG = RPG::init();

    $this->characterBoard = new Board();
    $this->storyBoard = new StoryBoard($this->RPG->story);
    $this->actionBoard = new Board();

  }

  public function parse() {

    $gameBoard = new GameBoard($this->characterBoard, $this->storyBoard, $this->actionBoard);

    return $gameBoard->parse("gameBoard.php");
  }

  public static function main() {

    $controller = new RPGController();

    return $controller->parse();

  }

}