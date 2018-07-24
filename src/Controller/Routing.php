<?php

/**
 * Created by PhpStorm.
 * User: Laurin
 * Date: 22.07.2018
 * Time: 20:18
 */
class Routing
{

  const ACTION_KEY = 'action';

  private static $responseData = [];

  public static function route() {

    self::send();

  }

  public static function addDebugData($value, $key = null) {
    if($key !== null) self::$responseData['debugData'][$key] = $value;
    else self::$responseData['debugData'][] = $value;
  }

  private static function send() {
    echo json_encode(self::$responseData);
    die();
  }
}