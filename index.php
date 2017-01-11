<?php
/**
 * Created by PhpStorm.
 * User: jasonlee
 * Date: 2017-01-11
 * Time: 10:43 AM
 */

include_once('Student.php');

// Initializing an empty array of students
$students = array();

// Creating the first student
$first = new Student();
$first->surname = "Doe";
$first->first_name = "John";
$first->add_email('home','john@doe.com');
$first->add_email('work','jdoe@mcdonalds.com');
$first->add_grade(65);
$first->add_grade(75);
$first->add_grade(55);
// Adding first student to the array of students
$students['j123'] = $first;

// Creating the second student
$second = new Student();
$second->surname = "Einstein";
$second->first_name = "Albert";
$second->add_email('home','albert@braniacs.com');
$second->add_email('work1','a_einstein@bcit.ca');
$second->add_email('work2','albert@physics.mit.edu');
$second->add_grade(95);
$second->add_grade(80);
$second->add_grade(50);
// Adding second student to the array of students
$students['a456'] = $second;

// Creating me
$third = new Student();
$third->surname = "Lee";
$third->first_name = "Jason";
$third->add_email('home', 'jasonlee1054@gmail.com');
$third->add_grade(100); // COMP4711 Lab mark
$third->add_grade(100); // COMP4711 Assignment mark
$third->add_grade(100); // COMP4711 Exam mark
// Adding me to the array of students
$students['a009'] = $third;

// Sorts the array of students
ksort($students);

// Looping through students and displaying their info
foreach ($students as $student)
    echo $student->toString();