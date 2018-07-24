<?php

/**
 * Created by PhpStorm.
 * User: walderwerber
 * Date: 24.07.18
 * Time: 14:44
 */
class Board
{

  public static $templateDir = "templates/";

  protected $data;

  public function parse($template) {

    ob_start();
    include self::$templateDir . "$template";
    return ob_get_clean();
  }

}