<?php 
   require 'config.php';
   try {
      $conn = new PDO("mysql:host=localhost;dbname=simonj10-websyslab9", $config['DB_USERNAME'], $config['DB_PASSWORD']);
      $insertResults1 = $conn->query("INSERT INTO `courses` (`crn`,`number`,`prefix`,`section`,`title`,`year`) VALUES (12145,1100,'CSCI',4,'Computer Science 1',2011);
                              INSERT INTO `courses` (`crn`,`number`,`prefix`,`section`,`title`,`year`) VALUES (12146,1100,'PSYC',2,'General Psychology',2015);
                              INSERT INTO `courses` (`crn`,`number`,`prefix`,`section`,`title`,`year`) VALUES (22468,4150,'MATH',1,'Graph Theory',2016);
                              INSERT INTO `courses` (`crn`,`number`,`prefix`,`section`,`title`,`year`) VALUES (11223,2220,'PHYS',6,'Quantum Physics II',2015);
                              INSERT INTO `courses` (`crn`,`number`,`prefix`,`section`,`title`,`year`) VALUES (13124,1010,'BIO',10,'Introduction to Biology',2012);
                              INSERT INTO `courses` (`crn`,`number`,`prefix`,`section`,`title`,`year`) VALUES (21935,2963,'CSCI',3,'Introduction to Open Source',2016);
                              INSERT INTO `courses` (`crn`,`number`,`prefix`,`section`,`title`,`year`) VALUES (20037,2100,'ITWS',1,'Web Systems Development',2015);
                              INSERT INTO `courses` (`crn`,`number`,`prefix`,`section`,`title`,`year`) VALUES (19450,1200,'MATH',8,'Calculus II',2014);
                              INSERT INTO `courses` (`crn`,`number`,`prefix`,`section`,`title`,`year`) VALUES (34334,4100,'CHEM',2,'Instrumental Methods of Analysis',2015);
                              INSERT INTO `courses` (`crn`,`number`,`prefix`,`section`,`title`,`year`) VALUES (12400,1200,'IHSS',3,'IT and Society',2013);
                              INSERT INTO `students` (`alias`,`city`,`first name`,`last name`,`phone`,`rcsID`,`rin`,`st`,`street`,`zip`) VALUES ('Jeremy','Montvale','Jeremy','Simon',5515790491,'simonj10',661482693,'NJ','Myrtle Street',07645);
                              INSERT INTO `students` (`alias`,`city`,`first name`,`last name`,`phone`,`rcsID`,`rin`,`st`,`street`,`zip`) VALUES ('Austin','Latham','Austin','Smith',6017775637,'smitha25',661479752,'UT','Pauls Ave',42185);
                              INSERT INTO `students` (`alias`,`city`,`first name`,`last name`,`phone`,`rcsID`,`rin`,`st`,`street`,`zip`) VALUES ('Dave','Columbus','David','Depoy',3094129945,'depoyd1',661472335,'OH','5th Street',22139);
                              INSERT INTO `students` (`alias`,`city`,`first name`,`last name`,`phone`,`rcsID`,`rin`,`st`,`street`,`zip`) VALUES ('Soli','Troy','Solomon','Mori',2004552312,'moriso2',661471239,'NY','Pawling Ave',12180);
                              INSERT INTO `students` (`alias`,`city`,`first name`,`last name`,`phone`,`rcsID`,`rin`,`st`,`street`,`zip`) VALUES ('Sassy','Boston','Stephan','Steenstrup',1152014636,'steens4',661481012,'MA','Hayward Street',06452);
                              INSERT INTO `students` (`alias`,`city`,`first name`,`last name`,`phone`,`rcsID`,`rin`,`st`,`street`,`zip`) VALUES ('Ben','Metuchen','Ben','Gruber',2215369304,'gruberb6',661479945,'NJ','Lally Court',06221);
                              INSERT INTO `students` (`alias`,`city`,`first name`,`last name`,`phone`,`rcsID`,`rin`,`st`,`street`,`zip`) VALUES ('Sean','Chatham','Sean','Maltby',5219385593,'maltbys12',661481112,'NJ','Lakeside Ave',05463);
                              INSERT INTO `students` (`alias`,`city`,`first name`,`last name`,`phone`,`rcsID`,`rin`,`st`,`street`,`zip`) VALUES ('Tony','Basking Ridge','Tony','Zheng',1183943845,'zhengt6',661490452,'NJ','Main Street',07453);
                              INSERT INTO `students` (`alias`,`city`,`first name`,`last name`,`phone`,`rcsID`,`rin`,`st`,`street`,`zip`) VALUES ('Brian','Harvard','Brian','Maeder',4017848872,'maederb3',661481635,'CT','Troy Street',046233);
                              INSERT INTO `students` (`alias`,`city`,`first name`,`last name`,`phone`,`rcsID`,`rin`,`st`,`street`,`zip`) VALUES ('Tom','Philadelphia','Tom','Wagner',9028787744,'wagnert10',661479645,'PA','18 Ave',06453);
                              INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (12146,89,661482693);
                              INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (11223,74,661479752);
                              INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (19450,92,661472335);
                              INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (12145,95,661479645);
                              INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (12145,86,661481012);
                              INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (12145,90,661471239);
                              INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (12400,88,661482693);
                              INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (34334,78,661472335);
                              INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (21935,86,661481112);
                              INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (21935,76,661479645);
                              INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (34334,82,661481635);
                              INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (11223,89,661479945);
                              INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (22468,96,661471239);
                              INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (20037,95,661482693);
                              INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (22468,93,661479645);
                              INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (19450,85,661481635);
                              INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (19450,79,661482693);
                              INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (13124,84,661472335);
                              INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (12400,86,661481012);
                              INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (21935,76,661479752);
                              INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (20037,82,661471239);
                              INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (19450,62,661481112);
                              INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (11223,67,661481012);
                              INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (12146,45,661479752);
                              INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (20037,83,661481112);
                              ");

     

   } catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
   }
 ?>