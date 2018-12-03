
 
<!DOCTYPE html>

<html>
<body>
    
    <center>  Here is your constructive comment: </center> 
    <?php
    
        include_once 'connecttoserver.php';
        
        require "CommentPage.php";
        echo $_GET["comment"]; 
        
        $comment = $_GET['comment'];
        
    ?>
    

  
    

</body>
</html>

        