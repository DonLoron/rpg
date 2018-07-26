<?php

/**
 * Created by PhpStorm.
 * User: walderwerber
 * Date: 19.07.18
 * Time: 16:41
 */

class Schoolclass {

  public $name;
  public $tier;

  protected $schoolhouse;
  protected $students;
  protected $teachers;

  public function __construct($name, $tier)
  {

    $this->name = $name;
    $this->tier = $tier;

    $this->students = new PersonCollection();
    $this->teachers = new PersonCollection();
  }

  /**
   * @param mixed $schoolhouse
   */
  public function setSchoolhouse($schoolhouse)
  {
    $this->schoolhouse = $schoolhouse;
  }

  /**
   * @return mixed
   */
  public function getTeacher()
  {
    return $this->teachers;
  }

  /**
   * @return mixed
   */
  public function getStudents()
  {
    return $this->students;
  }

  /**
   * @param Teacher $lehrer
   */
  public function addTeacher(Teacher $lehrer) {
    $this->teachers->add($lehrer);
    $lehrer->setKlasse($this);
  }

  /**
   * @param Student $schueler
   */
  public function addStudent(Student $schueler) {
    $this->students->add($schueler);
    $schueler->setKlasse($this);
  }
}