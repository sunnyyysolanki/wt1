<!DOCTYPE html>
<html>
<head>
    <title>PHP Include, Require, and Date Example</title>
</head>
<body>
    <h1>PHP Include, Require, and Date Example</h1>
    
    <div id="header">
        <?php
        include "header.php";
        ?>
    </div>
    
    <div id="content">
        <p>This is the main content of the page.</p>
        
        <?php
        
        $currentDate = date("F j, Y");
        echo "Today's date is: $currentDate";
        ?>
    </div>
    
    <div id="footer">
        <?php
        require("footer.php");
        ?>
    </div>
</body>
</html>
