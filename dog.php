<?php

class Dog extends Pet {
    function fetch() {
        echo "<p>" . $this->getNAme() . " is fetching.</p>";
    }

    function __construct($name = "unknown", $color="?", $breed="mutt") {
        // Pass the name and color to Pet constructor
        parent::__construct($name, $color);

        // Set breed
        $this->_breed = $breed;
    }
} // End of Dog class