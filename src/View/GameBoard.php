<?php

/**
 * Created by PhpStorm.
 * User: walderwerber
 * Date: 24.07.18
 * Time: 16:36
 */
class GameBoard extends Board
{

  public function __construct(Board $characterBoard, Board $storyBoard, Board $actionBoard)
  {
    $this->data = [
      "characterBoard" => $characterBoard,
      "storyBoard" => $storyBoard,
      "actionBoard" => $actionBoard
    ];
  }
}