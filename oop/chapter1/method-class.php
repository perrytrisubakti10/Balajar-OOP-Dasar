<?php

// Membuat Class
class Student
{
    // method
    function sayHello()
    {
        return "Hello World!";
    }
}

// Membuat instance Class
$student1 = new Student;
$student2 = new Student;

// menampilkan nilai balik dari method dalam class
echo $student1->sayHello() . "<br />";
echo $student2->sayHello() . "<br />";

// cek method yang ada di Class Student
$class_methods = get_class_methods('Student');
echo "Method milik Student: ";
echo "<pre>";
print_r($class_methods);
echo "</pre>";

// cek method berdasarkan nama variabel
if (method_exists('Student', 'sayHello')) {
    echo "Method tersedia";
} else {
    echo "Method tidak tersedia";
}
