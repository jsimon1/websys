<?php
  if(isset($_GET['install'])){
    include('install.php');
    echo("Installation complete");
  }
  if(isset($_GET['migrate'])){
    $conn = new PDO("mysql:host=localhost;dbname=simonj10-websyslab9", "root", "test_pass");
    $prepQuery = $conn->prepare("SELECT * FROM `courses`");
    $prepQuery->execute();
    $result = $prepQuery->fetchAll();
    $prepQuery1 = $conn->prepare("SELECT * FROM `courses`");
    $prepQuery1->execute();
    $result1 = $prepQuery1->fetchAll();
    $result1 = $conn->query("SELECT * FROM `students`");
    $result2 = $conn->query("SELECT * FROM `grades`");

    pg_close($conn);

    $conn1 = pg_connect("host=localhost dbname=simonj10-websyslab10 user=postgres password=ilikepie85");
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
      $row = pg_fetch_array($result, $i);
      $queryBuild = "INSERT INTO `courses` (`crn`,`number`,`prefix`,`section`,`title`,`year`) VALUES ('".$row['crn']."','".$row['number']."','".$row['prefix']."','".$row['section']."','".$row['title']."','".$row['year']."'');";
      $resultLoop = pg_execute($conn, $queryBuild);
    }
    for($i = 0; $i < $numrows1; $i++) {
      $row = pg_fetch_array($result1, $i);
      $queryBuild = "INSERT INTO `students` (`alias`,`city`,`first name`,`last name`,`phone`,`rcsID`,`rin`,`st`,`street`,`zip`) VALUES ('".$row['alias']."','".$row['city']."','".$row['first name']."','".$row['last name']."','".$row['phone']."','".$row['rcsID']."','".$row['rin']."','".$row['st']."','".$row['street']."','".$row['zip'].");";
      $resultLoop = pg_execute($conn, $queryBuild);
    }
    for($i = 0; $i < $numrows2; $i++) {
      $row = pg_fetch_array($result2, $i);
      $queryBuild = "INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (".$row['crn'].",".$row['grade'].",".$row['rin'].");";
      $resultLoop = pg_execute($conn, $queryBuild);
    }
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
    <a href = "index.php?migrate" class = "button">Migrate</a>
  </body>
</html>