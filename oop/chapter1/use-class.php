<?php

// Membuat Class
class Student
{
    var $firstName;
    var $lastName;

    function fullName()
    {
        // $this untuk memanggil classnya sendiri
        return $this->firstName . " " . $this->lastName;
    }
}

// Instance Class Student
$student = new Student;

// $student untuk memanggil class student yang sudah di instance 
$student->firstName = "Viky";
$student->lastName = "Rabani";

echo $student->firstName . "<br />";
echo $student->lastName . "<br />";

echo $student->fullName() . "<br />";
