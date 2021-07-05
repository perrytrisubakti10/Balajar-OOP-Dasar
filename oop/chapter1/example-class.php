<?php

// Membuat Class
class Student
{ }

class User
{ }

// Melihat seluruh Class yang ada
$classes = get_declared_classes();
echo "Seluruh class yang ada: " . implode(", ", $classes) . "<br /><br />";

// Coba cek class ada atau tidak
$classNames = ['Product', 'Student', 'student', 'User'];
foreach ($classNames as $className) {
    if (class_exists($className)) {
        echo "{$className} class ada <br />";
    } else {
        echo "{$className} class tidak ada <br />";
    }
}
