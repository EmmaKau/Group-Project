
<!DOCTYPE html>
    
<!-- 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
-->

<html>
<body bgcolor="#FFDEAD">
    <form action ="StoragePage.php" >
        If you are comfortable with your professor reaching out, <br> please provide your contact info here: <br> <br> <br>
        Name: <input type="text" name="name"><br> <br> 
        Email: <input type="text" name="email"><br> <br>
    <input type="submit">
    <!-- Here is where this info will be stored as a user bio or something, maybe generate an automatic email to the prof-->
        </form>

  <center>   
        <form action = "CommentFeed2.php" method ="get">
        <center> Please Give Your Constructive Comment Here: <br> <br>
        <textarea name="comment" rows="6" cols="30"> </textarea>  <br> <br>
        <input type="submit" class="btn btn-default" value="Submit"> <br> <br> <br>
    </form>

    
        You can also reach out directly to your professor by email, just click here: 
        <a href="mailto:jgoettsche@pugetsound.edu"> <input type = "submit" value= "Send Email" >  </a> 
       
         
 </center>

    


</body>
</html>

