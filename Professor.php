<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Professor
 *
 * @author mccla
 */
class Professor {
    public $id;
    public $firstName;
    public $lastName;
    public $subject;

    function __construct($id, $firstName, $lastName, $subject) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->subject = $subject;
    }
}
?>