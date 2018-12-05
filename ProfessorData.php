<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProfessorData
 *
 * @author mccla
 */
require "Professor.php";

class ProfessorData {
    public $professors;

    function __construct() {
        $this->professors = array(
            new Professor("1", "John", "Goettsche", "Computer Science"),
            //new Professor("2", "America", "Chambers", "Computer Science"),
        );
    }
}

?>