<?php
session_start();
	$connection = mysql_connect("philippou.co.uk.mysql", "philippou_co_uk", "gyRxbHg3") or die(mysql_error());
		mysql_select_db("philippou_co_uk", $connection) or die(mysql_error());  
		


// Get the data collected from the user
   $Email =$_POST["email"];
   $Password =$_POST["password"];
//Check for errors
   if (empty($Email) or empty($Password )) 
   {
       $_SESSION["message"] = "Must enter Username and Password " ;
       header("Location: index.php"); //This sets the redirection information
       exit; //Ends the script and redirects to above
   }
  //NEED MORE SECURITY - ESCAPE BAD CHARACTERS AND ENCRYPT PASSWORD - SEE ADVANCED.
  
  //Create and run a query with the given details 
   $query = "SELECT * FROM register WHERE Email= '$Email' AND  Password = '$Password' "; 
   $result = mysql_query($query) or die ("Error in query: $query. ".mysql_error()); 
  
  // see if any rows were returned 
   if ($row = mysql_fetch_array($result)) { //Then we have a successful login 
    //Create a session variable to store the user name.
     $_SESSION["authenticatedUser"] = $Email;
    //We could also use information drawn from the database eg ID
     $_SESSION['Name']= $row['Surname'];
     // Relocate to the logged-in page
     header("Location: index_login.php");
   }
   else { //Login was unsuccesful
       $_SESSION["message"] = "Could not login.Please try again " ;
       header("Location: index.php"); //Go back to the login pages
    } //End else    
?> 