<?php

/**
 * Created by PhpStorm.
 * User: Laurin
 * Date: 09.08.2018
 * Time: 10:01
 */
class Action
{

  private $actionFields;
  private $actionName;
  private $actionText;

  public function __construct($actionName, $actionText = "")
  {
    $this->actionName = $actionName;
    $this->actionFields = new Collection();
  }

  public function addField(ActionField $field) {
    $this->actionFields->add($field);
  }

  public function parse() {

    $action = "";

    return $action;

  }
}