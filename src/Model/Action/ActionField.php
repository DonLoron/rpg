<?php

/**
 * Created by PhpStorm.
 * User: Laurin
 * Date: 09.08.2018
 * Time: 10:04
 */
class ActionField
{

  private $fieldName;
  private $fieldLabel;
  private $fieldType;

  public function __construct($fieldName, $fieldType, $fieldLabel = "")
  {
    $this->fieldName = $fieldName;
    $this->fieldType = $fieldType;
    $this->fieldLabel = $fieldLabel;
  }

  public function getField() {

    $input = "";

    switch ($this->fieldType) {
      case 'textarea':
        break;
      case 'submit':
        break;
      default:
        break;
    }

    return $input;

  }

}