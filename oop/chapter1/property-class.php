<?php

// Membuat Class
class Student
{
    // property
    var $name;
    var $country = 'None';
}

// Membuat instance Class
$student1 = new Student;
$student2 = new Student;

// Set Variabel
$student1->name = "Hakim";
$student2->name = "Lina";

// menampilkan isi variable dalam class
echo $student1->name . "<br />";
echo $student2->name . "<br /><br />";

// cek variabel yang ada di Class Student
$class_vars = get_class_vars('Student');
echo "Properti milik Student: ";
echo "<pre>";
print_r($class_vars);
echo "</pre>";

// cek properti berdasarkan nama variabel
if (property_exists('Student', 'name')) {
    echo "Properti tersedia";
} else {
    echo "Properti tidak tersedia";
}
