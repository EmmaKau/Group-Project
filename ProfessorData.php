<?php

/*
 * This class is ProfessorData which constucts an array of professor objects. For this project we simplified it by only having 
 * one professor, John Goettsche.
 */

 * @author Sarah McClain
 */
require "Professor.php";

class ProfessorData {
    public $professors;

    function __construct() {
        $this->professors = array(
            new Professor("1", "John", "Goettsche", "Computer Science"),
        );
    }
}

?>
