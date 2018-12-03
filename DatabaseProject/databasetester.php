
<?php

/**
 * Create a database and table for the information in the web site
 * 
 * Adjust this to add additional variables that need to be stored
 */
class MyDB extends SQLite3 {

    function __construct() {
        $this->open('rating.db');
    }

}

$db = new MyDB();


//Prof table
$db->exec('CREATE TABLE IF NOT EXISTS Prof (fname TEXT, lname TEXT, pid TEXT)');
$db->exec("INSERT INTO Prof VALUES ('John', 'Goettsche', '0')");

//Course table
$db->exec('CREATE TABLE IF NOT EXISTS Course (cname TEXT, cid TEXT)');
$db->exec("INSERT INTO Course VALUES ('Computer Programming 1', 'CSCI161')");
$db->exec("INSERT INTO Course VALUES ('Computer Programming 2', 'CSCI261')");
$db->exec("INSERT INTO Course VALUES ('Software Engineering', 'CSCI240')");

//teaches table
$db->exec('CREATE TABLE IF NOT EXISTS Teaches (pid TEXT, cid TEXT)');
$db->exec("INSERT INTO Teaches VALUES ('0', 'CSCI161')");
$db->exec("INSERT INTO Teaches VALUES ('0', 'CSCI261')");
$db->exec("INSERT INTO Teaches VALUES ('0', 'CSCI240')");

//Topic table
$db->exec('CREATE TABLE IF NOT EXISTS Topic (tname TEXT, tid TEXT)');
$db->exec("INSERT INTO Topic VALUES ('Lecture', '0')");
$db->exec("INSERT INTO Topic VALUES ('Assignment', '1')");
$db->exec("INSERT INTO Topic VALUES ('Project', '2')");

//Feed table
$db->exec('CREATE TABLE IF NOT EXISTS Feed (week_fid TEXT)');
$db->exec("INSERT INTO Feed VALUES ('1')");
$db->exec("INSERT INTO Feed VALUES ('2')");
$db->exec("INSERT INTO Feed VALUES ('3')");
$db->exec("INSERT INTO Feed VALUES ('4')");
$db->exec("INSERT INTO Feed VALUES ('5')");
$db->exec("INSERT INTO Feed VALUES ('6')");
$db->exec("INSERT INTO Feed VALUES ('7')");
$db->exec("INSERT INTO Feed VALUES ('8')");
$db->exec("INSERT INTO Feed VALUES ('9')");
$db->exec("INSERT INTO Feed VALUES ('10')");
$db->exec("INSERT INTO Feed VALUES ('11')");
$db->exec("INSERT INTO Feed VALUES ('12')");
$db->exec("INSERT INTO Feed VALUES ('13')");
$db->exec("INSERT INTO Feed VALUES ('14')");
$db->exec("INSERT INTO Feed VALUES ('15')");

//Comment table
$db->exec('CREATE TABLE IF NOT EXISTS Comment (pid TEXT, cid TEXT, tid TEXT, week_fid TEXT, comment TEXT)');
$db->exec("INSERT INTO Comment VALUES ('0', 'CSCI240', '1', '8', 'This assignment really assisted in my understanding of the material')");
$db->exec("INSERT INTO Comment VALUES ('0', 'CSCI240', '1', '4', 'This assignment was pointless')");
$db->exec("INSERT INTO Comment VALUES ('0', 'CSCI261', '0', '7', 'Lecture was confusing')");
$db->exec("INSERT INTO Comment VALUES ('0', 'CSCI261', '0', '13', 'Topics covered in class were interesting and your delivery made it easy to understand')");

//Joining the tables
$db->exec('SELECT fname, lname FROM Prof INNER JOIN Teaches on Teaches.pid = Prof.pid');
$db->exec('SELECT cname FROM Course INNER JOIN Teaches on Teaches.cid = Course.cid');
$db->exec('SELECT fname, lname FROM Prof INNER JOIN Comment on Comment.pid = Prof.pid');
$db->exec('SELECT cname FROM Course INNER JOIN Comment on Comment.cid = Course.cid');
$db->exec('SELECT tname FROM Topic INNER JOIN Comment on Comment.tid = Topic.tid');
$db->exec('SELECT * FROM Feed INNER JOIN Comment on Comment.week_fid = Feed.week_fid');


$result = $db->query('SELECT * FROM Comment');
var_dump($result->fetchArray());

while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
    echo $row['comment'];
    echo $row['cid'];
}
?>
