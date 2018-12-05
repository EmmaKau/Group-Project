<?php

/*
 * This is the professor class which creates an object of a professor. It takes in an id, first name, last name and subject
 */

/**
 * Description of Professor
 *
 * @author Sarah McClain
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
