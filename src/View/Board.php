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

  public function __construct($data = null)
  {
    if(isset($data)) $this->data = $data;
  }

  public function parse($template) {
    ob_start();
    include self::$templateDir . "$template";
    return ob_get_clean();
  }

  public function addData($key, $val) {
    $this->data[$key] = $val;
  }
}