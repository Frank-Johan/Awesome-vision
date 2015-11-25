<?php

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Awesome vision</title>
    
     <link rel="icon" href="img/favicon.png">
    <script src="jquery-2.1.1.js"></script>
    <a href="file:///Applications/MAMP/htdocs/awesome/form.html"><img src="http://images.cooltext.com/4504378.png" width="618" height="73" alt="Awesome Vision" /></a>
        
<?php
require('db_connect.php');
    
        
        // shows error messages i PHP-code on Mac
        error_reporting(E_ALL);
        ini_set('display_errors','ON');
        
        // Gets the function connect_db() and stores it in vector $mysql
        $mysql=connect_db();
        
        // query that selects everything from the table planet_awesome
        $sql="SELECT * FROM planet_awesome";
        
        //stores the result of the query and connection to the database in vector $result
        $result=$mysql->query($sql);
        
        // creates a split vector for looping trough the categories
        $split=0;
        
        ?>
        
        <!-- create a table -->
        <table class="awesomecategories">
        
        <?php
        
        while ($row=$result->fetch_assoc()){
            // creates a row for the table
            echo "<td class='awesomerow'>"
            // echoes the information from the db    
            . "<p>" . $row['category'] . "</p>"   
                
            . "<p>" . $row['definition'] . "</p>"
            
            . "<p>  <img src='." . $row['avatar'] . "' class='awesomeavatar'></p>";
        
        
        // Counts the split 
        $split++;
        
        // when the split is equal to 6 (started from 0), then a new row will be created
        if($split%6==0){
            echo "</tr><tr>";
        }   // finishes the split
    
    }   //end of while-loop

// end of table
echo "</tr></table>";
                
        ?>
        </style>
            
        </head>
        <body>
        <div id="edit">
       <a href="adminform.php"><img src="edit.png"></a> 
    
   </div>
  
<style>
#edit {
    position: relative;
    left: 700px;
    
    
}

    .awesomeavatar{
        height:50px;
        width:50px;
    }
    


</style> 


    </body>
</html>
