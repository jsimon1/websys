<?php 
   require 'config.php';
   try {
      $conn = new PDO("mysql:host=localhost;", $config['DB_USERNAME'], $config['DB_PASSWORD']);
      $results1 = $conn->query("CREATE DATABASE IF NOT EXISTS `simonj10-websyslab9`;");
      $conn = new PDO("mysql:host=localhost;dbname=simonj10-websyslab9", $config['DB_USERNAME'], $config['DB_PASSWORD']);
      $results2 = $conn->query("CREATE TABLE IF NOT EXISTS `courses` (
                     `crn` int(11) NOT NULL,
                     `prefix` varchar(4) NOT NULL,
                     `number` smallint(4) NOT NULL,
                     `title` varchar(255) NOT NULL,
                     `section` int(2) NOT NULL,
                     `year` int(4) NOT NULL,
                     PRIMARY KEY (`crn`)
                     ) COLLATE utf8_unicode_ci;
         ");
      $results3 = $conn->query("CREATE TABLE IF NOT EXISTS `students` (
                    `rin` int(9),
                    `rcsID` character(7),
                    `first name` varchar(100) NOT NULL,
                    `last name` varchar(100) NOT NULL,
                    `alias` varchar(100) NOT NULL,
                    `phone` int(10),
                    `street` varchar(100),
                    `city` varchar(100),
                    `st` varchar(2),
                    `zip` varchar(5),
                    PRIMARY KEY (`rin`)
                    ) COLLATE utf8_unicode_ci;
         ");
      $results4 = $conn->query("CREATE TABLE IF NOT EXISTS `grades` ( 
                              `id` int(10) AUTO_INCREMENT,
                              `crn` int(11),
                              `rin` int(9),
                              FOREIGN KEY (`crn`) REFERENCES courses(`crn`),
                              FOREIGN KEY (`rin`) REFERENCES students(`rin`),
                              `grade` int(3) NOT NULL, PRIMARY KEY (`id`)
                              ) COLLATE utf8_unicode_ci
         ");


   } catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
   }
 ?>