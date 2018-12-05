<!DOCTYPE html>
<!--
This file is the the  main part of the search bar. It is how the autocomplete search bar works.

Author: Sarah McClain
-->
<?php

require_once("ProfessorData.php");

session_start();

$professorData = new ProfessorData();
$professors = $professorData->professors;

$results = array();
$namesAdded = false;

// simple matching for start of first or last name, or both
if(isset($_GET['action']) && $_GET['action'] == "complete") {
    foreach($professors as $professor) {
        if(!is_numeric($_GET['id']) &&

            // if id matches first name
            (stripos($professor->firstName, $_GET['id']) === 0 ||

            // if id matches last name
            stripos($professor->lastName, $_GET['id']) === 0) ||

            // if id matches full name
            stripos($professor->firstName." ".$professor->lastName, $_GET['id']) === 0) {

                $results[] = $professor;
        }
    }

    // prepare xml data
    if(sizeof($results) != 0) {
        header('Content-type: text/xml');
        echo "<professors>";
        foreach($results as $result) {
            echo "<professor>";
            echo "<id>" . $result->id . "</id>";
            echo "<firstName>" . $result->firstName . "</firstName>";
            echo "<lastName>" . $result->lastName . "</lastName>";
            echo "</professor>";
        }
        echo "</professors>";
    }
}

// if user chooses from pop-up box
if(isset($_GET['action']) && isset($_GET['id']) && $_GET['action'] == "lookup") {
    foreach($professors as $professor) {
        if($professor->id == $_GET['id']) {
            $_SESSION ["id"] = $professor->id;
            $_SESSION ["firstName"] = $professor->firstName;
            $_SESSION ["lastName"] = $professor->lastName;
            $_SESSION ["subject"] = $professor->subject;

            header("Location: ProfessorPage.php");
        }
    }
}

?>
