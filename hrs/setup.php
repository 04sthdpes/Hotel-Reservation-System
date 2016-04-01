<?php
//connection to localhost
mysql_connect("localhost","root","");

//to create database
mysql_query("create database hrs");

//selecting database
mysql_select_db("hrs");

//Table structure for table `comment`

mysql_query("CREATE TABLE IF NOT EXISTS `comment` (
`commentId` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  PRIMARY KEY (`commentId`)
);");

//Table structure for table `room`
mysql_query("CREATE TABLE IF NOT EXISTS `room` (
`roomId` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `rate` double NOT NULL,
  `qty` mediumint(9) NOT NULL,
  `image` varchar(300) NOT NULL,
  PRIMARY KEY (`roomId`)
);");

mysql_query("INSERT INTO `room` (`roomId`, `type`, `rate`, `qty`, `image`) VALUES
(1, 'Nasika Club Room', 35000, 20, 'Cr4tq_clubroom3.jpg'),
(2, 'Superior Room', 20000, 30, '9RF9U_superior-room.jpg'),
(3, 'Deluxe Room', 15000, 35, '536Pr_d4.jpg')
");



//Table structure for table `roominventory`
mysql_query("CREATE TABLE IF NOT EXISTS `roominventory` (
  `roominventoryId` int(11) NOT NULL AUTO_INCREMENT,
  `arrival` varchar(30) NOT NULL,
  `departure` varchar(30) NOT NULL,
  `qty_reserve` int(11) NOT NULL,
  `roomId` int(11) NOT NULL,
  `userId` int(10) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`roominventoryId`)
);");

//Table structure for table `user`
mysql_query("CREATE TABLE IF NOT EXISTS `user` (
`userId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `userType` int(11) NOT NULL,
  PRIMARY KEY (`userId`)
) ;");


//Dumping data for table `user`

mysql_query("INSERT INTO `user` (`userId`, `name`, `address`, `phone`, `email`, `username`, `password`, `userType`) VALUES
(1, 'Dipesh Shrestha', 'Sanga', 2147483647, 'dpessth@outlook.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 0)");

header('location:index.php');
?>