<?php

// 328/pets/pet.php
// Note that class name does not to match file name

class Pet {
    private $_name;
    private $_color;

    // Set the pet's name
    function setName($name) {
        $this -> _name = $name;
    }

    function __construct($name="unknown", $color="???") {
        $this -> _name = $name;
        $this-> _color = $color;
    }

    function getName() {
        return $this->_name;
    }

    function eat() {
        echo "<p>". $this->_name . " is eating</p>";
    }

    function sleep() {
        echo "<h1>Pet is now sleeping, be quiet</p>";
    }

    function talk() {
        echo "<h2>Pet is talking</p>";
    }
}