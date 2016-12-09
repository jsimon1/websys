<?php
  $conn = new PDO("mysql:host=localhost;dbname=simonj10-websyslab9", $config['DB_USERNAME'], $config['DB_PASSWORD']);
  try{
    if(isset($_GET['output1'])){
      $outputResult1 = $conn->query('SELECT * FROM `students` ORDER BY `last name` ASC');
      foreach ($outputResult1 as $row) {
             echo '<pre>';
             print_r($row);
             echo '</pre>';
      }

      $outputResult2 = $conn->query('SELECT * FROM `students` ORDER BY `first name` ASC');
      foreach ($outputResult2 as $row1) {
             echo '<pre>';
             print_r($row1);
             echo '</pre>';
      }
    }
    if(isset($_GET['output2'])){
      $outputResult3 = $conn->query('SELECT AVG(`grade`) FROM grades GROUP BY `rin`');

      $bracket1 = 0;
      $bracket2 = 0;
      $bracket3 = 0;
      $bracket4 = 0;
      $bracket5 = 0;
      foreach ($outputResult3 as $row2) {
             if($row2[0]>=90){
               $bracket1++;
             }
             if($row2[0]<90&&$row2[0]>=80){
               $bracket2++;
             }
             if($row2[0]<80&&$row2[0]>=70){
               $bracket3++;
             }
             if($row2[0]<70&&$row2[0]>=65){
               $bracket4++;
             }
             if($row2[0]<65){
               $bracket5++;
             }
      }
      echo("A: ".$bracket1."<br>");
      echo("B: ".$bracket2."<br>");
      echo("C: ".$bracket3."<br>");
      echo("D: ".$bracket4."<br>");
      echo("F: ".$bracket5."<br>");
    }
  } catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
   }
?>