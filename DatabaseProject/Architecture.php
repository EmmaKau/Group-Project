<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Professor
 *
 * @author thalia barr-malec
 */

/**
 * Need to: add functions, merge code with Spencer.
 */

class Professor {
    private $name;
    private $courses = array();
    
    public function __construct($profName){
        $this->name = $profName;
    }
    
    //get function for name field variable
    public function getName() {
        return $this->name;
    }
    
    //set function for name field variable
   public function setName($proName){
      $this->name = $proName;
    }
    
   //get function for classSubject field variable
    public function getCourses(){
        return $this->courses;
    }
    
    //add 
    public function addCourse($course){
        $this->courses = $course;
    }
    
}

class Course {
    private $topics = array();
    private $name;
    
    //Constructor
    public function __construct($courseName){
        $this->name = $courseName;
    }
      //get function for name field variable
    public function getName() {
        return $this->name;
    }
    
    //set function for name field variable
   public function setName($courseName){
      $this->name = $courseName;
    }
    
    //get function for topics
    public function getTopics() {
       return $this->topics;
    }
    
    //adds topics
    public function addTopic($topic) {
        $this->topics = $topic; 
    }
}

class Topic {
    private $feeds = array();
    private $name;
    
    //Constructor
    public function __construct($topicName){
        $this->name = $topicName;
    }
      //get function for name field variable
    public function getName() {
        return $this->name;
    }
    
    //set function for name field variable
   public function setName($topicName){
      $this->name = $topicName;
    }
    
    //get function for feeds
    public function getFeeds() {
        return $this->feeds;
    }
    
    //adds new feeds
    public function addFeed($feed) {
        $this-> feeds = $feed;
    }
}

class Feed{
    private $name;
    private $database;
    
    //constructor
    public function __construct($feedName, $databaseName){
        $this->name = $feedName;
        $this->database = $databaseName;
    }
      //get function for name field variable
    public function getName() {
        return $this->name;
    }
    
    //get function for database
    public function getDatabase(){
        return $this->database;
    }
    
    //set function for name field variable
   public function setName($feedName){
      $this->name = $feedName;
      $this->name = $feedName;
    }
}