<?php

// Inheritance adalah class turunan, yang mana disini class User sebagai class perents

// Class Induk/perent
class User
{
    var $firstName;
    var $lastName;

    function fullName()
    {
        return $this->firstName . " " . $this->lastName;
    }
}

// Class turunan/Subclass dari class User
class Customer extends User
{ }

// class Customer menggunakan var dan function dari class User
$c = new Customer;
$c->firstName = "Irwan";
$c->lastName = "Setiawan";
echo $c->fullName() . "<br />";

// cek apakah customer adalah class user
if (is_subclass_of($c, 'user')) {
    echo "Instance Customer merupakan subclass dari class User <br />";
} else {
    echo "Instance Customer merupakan bukan subclass dari class User <br />";
}

// cek class perent mana yang dipakai oleh class Customer
$perents = class_parents($c);
echo implode(", ", $perents);
