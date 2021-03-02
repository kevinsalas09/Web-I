<?php
require_once('Students.php');

$limit = $argv[1];

$students = Students::getStudents($limit);

foreach ($students as $stud) {
    $student = new Students($stud[0],$stud[1],$stud[2],$stud[3],$stud[4]);
    echo($student->to_string().PHP_EOL);
  }

?>