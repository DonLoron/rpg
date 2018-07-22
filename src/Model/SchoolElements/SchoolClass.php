<?php

/**
 * Created by PhpStorm.
 * User: walderwerber
 * Date: 19.07.18
 * Time: 16:41
 */

class Schoolclass {

  public $name;
  public $stufe;

  protected $schulhaus;
  protected $schueler;
  protected $lehrer;

  public function __construct($name, $stufe)
  {

    $this->name = $name;
    $this->stufe = $stufe;

    $this->schueler = new PersonCollection();
    $this->lehrer = new PersonCollection();
  }

  /**
   * @param mixed $schulhaus
   */
  public function setSchulhaus($schulhaus)
  {
    $this->schulhaus = $schulhaus;
  }

  /**
   * @return mixed
   */
  public function getLehrer()
  {
    return $this->lehrer;
  }

  /**
   * @return mixed
   */
  public function getSchueler()
  {
    return $this->schueler;
  }

  /**
   * @param Teacher $lehrer
   */
  public function addLehrer(Teacher $lehrer) {
    $this->lehrer->append($lehrer);
    $lehrer->setKlasse($this);
  }

  /**
   * @param Student $schueler
   */
  public function addSchueler(Student $schueler) {
    $this->schueler->append($schueler);
    $schueler->setKlasse($this);
  }
}