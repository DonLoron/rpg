<?php

/**
 * Created by PhpStorm.
 * User: Laurin
 * Date: 22.07.2018
 * Time: 15:13
 */
class SessionStore
{

  public static $STORE = "RPG";

  /**
   * Stores current obj into session
   * allways overrides store
   */
  protected function store() {

    self::startSession();

    $_SESSION[self::$STORE][session_id()] = serialize($this);

  }

  /**
   * restores element
   * @return mixed|null
   */
  protected function restore() {

    self::startSession();

    if(isset($_SESSION[self::$STORE][session_id()])) return unserialize($_SESSION[self::$STORE][session_id()]);
    else return null;

  }

  /**
   * starts session
   */
  private static function startSession() {
    if(!session_id()) {
      session_start();
    }
  }

  /**
   * allways save on destruct
   */
  public function __destruct()
  {
    $this->store();
  }
}