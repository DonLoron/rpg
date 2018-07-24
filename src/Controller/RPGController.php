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

  private $gameBoard;
  private $characterBoard;
  private $storyBoard;
  private $actionBoard;

  public function __construct()
  {
    //trigger turn
    $this->RPG = RPG::init();

    $this->gameBoard = new Board();
    $this->characterBoard = new Board();
    $this->storyBoard = new Board();
    $this->actionBoard = new Board();
  }

  public function parse() {
    return "Hello!";
  }

  public static function main() {

    $controller = new RPGController();

    return $controller->parse();

  }

}