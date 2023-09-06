<!DOCTYPE html>

<?php
session_start();
?>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Sections</title>
    <link rel="stylesheet" type="text/css" href="section.css" />
</head>
<body>
    
    <div class="split left">
        <div class="centered">  
            <h1>Students Section</h1>
            <p>This is the students sections , click the button to access the students portal</p>
            <button class="stbutton" onclick="window.open('students.html');">Click here</button>
                
            </div>
    </div>

    <div class="split right">
        <div class="centered">
            <h1>Teachers Section</h1>
            <p>This is the teachers section , click the button to access the teachers portal</p>
            <button class="tbutton" onclick="window.open('teachers.html');">Click here</button>
            </div>
        </div>
       

</body>
</html>