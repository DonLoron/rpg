<?php

/**
 * Created by PhpStorm.
 * User: Laurin
 * Date: 22.07.2018
 * Time: 15:56
 */
class State
{
  const INIT = 1;
  const CHARACTER_SELECTION = 2;
  const IN_GAME = 3;

  public $currentState = self::INIT;

}