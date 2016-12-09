<?php
  require 'config.php';
  if(isset($_GET['install'])){
    include('install.php');
    echo("Installation complete");
  }

  else if(isset($_GET['insert'])){
    include('insert.php');
    echo("Data inserted");
  }

  else if(isset($_GET['output1'])||isset($_GET['output2'])){
    include('output.php');
  }
?>
<!DOCTYPE html>
  <head>
      <title>Lab 9</title>
      <link rel="stylesheet" type="text/css" href="styles.css">
  </head>
  <body>
      <h2>Welcome to Jeremy's Database</h2>
      <a href = "index.php?install" class = "button">Install</a>
      <a href = "index.php?insert" class = "button">Load</a>
      <a href = "index.php?output1" class = "button">Students</a>
      <a href = "index.php?output2" class = "button">Grade Distribution</a>
      <p>Install - Creates a database and student, courses, and grades tables.</p>
      <p>Load - Fills in the three tables with data</p>
      <p>Students - Lists all students as PDO objects</p>
      <p>Grade Distribution - Lists the number of students with each grade </p>
  </body>
</html>