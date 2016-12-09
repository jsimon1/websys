<?
  $conn = pg_connect("host=localhost dbname=simonj10-websyslab10 user=postgres password=ilikepie85")
    or die("Could not connect to database");
  $result = pg_query($conn, "CREATE TABLE IF NOT EXISTS `courses` (
                     `crn` int(11) NOT NULL,
                     `prefix` varchar(4) NOT NULL,
                     `number` smallint(4) NOT NULL,
                     `title` varchar(255) NOT NULL,
                     `section` int(2) NOT NULL,
                     `year` int(4) NOT NULL,
                     PRIMARY KEY (`crn`)
                     ) COLLATE utf8_unicode_ci;");
  if(!$result){
    echo pg_last_error($conn);
  }else{
    echo "Table 'courses' created successfully\n";
  }
  $result1 = pg_query($conn, "CREATE TABLE IF NOT EXISTS `students` (
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
                    ) COLLATE utf8_unicode_ci;");
  if(!$result1){
    echo pg_last_error($conn);
  }else{
    echo "Table 'students' created successfully\n";
  }
  $result2 = pg_query($conn, "CREATE TABLE IF NOT EXISTS `grades` ( 
                              `id` int(10) AUTO_INCREMENT,
                              `crn` int(11),
                              `rin` int(9),
                              FOREIGN KEY (`crn`) REFERENCES courses(`crn`),
                              FOREIGN KEY (`rin`) REFERENCES students(`rin`),
                              `grade` int(3) NOT NULL, PRIMARY KEY (`id`)
                              ) COLLATE utf8_unicode_ci;");
  if(!$result2){
    echo pg_last_error($conn);
  }else{
    echo "Table 'grades' created successfully\n";
  }
  pg_close($conn);
  ?>