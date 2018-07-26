<?php

/**
 * Created by PhpStorm.
 * User: walderwerber
 * Date: 26.07.18
 * Time: 09:24
 */
class GameGenerator
{

  public static $schools = 3;
  public static $classesPerSchool = 3;
  public static $peoplePerClass = 20;
  public static $teachersPerClass = 1;

  public static function generateBaseData() {

    $gameData = new GameData();

    for ($i = 0; $i < self::$schools; $i++) {

      $school = new School("School $i");

      for($c = 0; $c < self::$classesPerSchool; $c++) {

        $class = new Schoolclass("Class $c School $i", $c);

        for($p = 0; $p < self::$peoplePerClass; $p++) {
          $class->addStudent(new Student("Student s$i.c$c.st$p", "Surname"));
        }

        for($t = 0;$t < self::$teachersPerClass; $t++) {
          $class->addTeacher(new Teacher("Teacher s$i.c$c.st$t", "Surname", "Ein Fach!"));
        }

        $school->addSchoolclass($class);
      }

      $gameData->addSchool($school);
    }

    return $gameData;
  }
}