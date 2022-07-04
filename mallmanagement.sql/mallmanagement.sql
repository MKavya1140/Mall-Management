--
-- Database: `mallmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `sno` int(11) NOT NULL,
  `userid` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `desig` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`sno`, `userid`, `password`, `desig`) VALUES
(1, 'admin', 'admin1', 'admin'),
(2, 'kavyamaddikunta29@gmail.com', 'kavya', 'owner'),
(3, 'lakky@gmail.com', 'lakky', 'owner'),
(4, 'vkcbata@gamil.com', 'vkcbata', 'owner'),
(5, 'lakmy', 'lakmy', 'owner'),
(6, 'supertoys@gmail.com', 'supertoys', 'owner'),
(7, 'prabha@gmail.com', 'prabha', 'owner'),
(8, 'khushi@gmail.com', 'khushi', 'owner');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `sno` int(11) NOT NULL,
  `whom` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`sno`, `whom`, `subject`, `date`, `path`) VALUES
(1, 'All', 'hlo everyone', '2018-04-26', 'Notifications/3669b9.jpg'),
(2, '200', 'Hi kavya', '2018-04-26', 'Notifications/4986b10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `sno` int(11) NOT NULL,
  `userid` varchar(30) NOT NULL,
  `shopnumber` int(11) NOT NULL,
  `category` varchar(30) NOT NULL,
  `shopname` varchar(30) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `address` varchar(250) NOT NULL,
  `floor` int(11) NOT NULL,
  `photo` varchar(30) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`sno`, `userid`, `shopnumber`, `category`, `shopname`, `mobile`, `address`, `floor`, `photo`, `description`, `fromdate`, `todate`) VALUES
(1, 'kavyamaddikunta29@gmail.com', 200, 'Clothing', 'kavya', '8585858585', 'vijayawada', 4, 'shops/435106.jpg', '50% OFF', '2018-04-26', '2018-05-04'),
(2, 'prabha@gmail.com', 208, 'Clothing', 'prabha', '9023568974', 'Vijayawada', 3, 'shops/599906.jpg', '65% OFF on dresses ', '2018-04-26', '2018-05-02'),
(3, 'supertoys@gmail.com', 206, 'Gifts & Toys', 'supertoys', '8523568974', 'Vijayawada', 1, 'shops/1775c1.jpg', '30%OFF ON GIFTS', '2018-04-26', '2018-05-05'),
(4, 'lakmy', 205, 'Cosmotics', 'lakmy', '7878525263', 'Vijayawada', 4, 'shops/7179c9.jpg', '40%OFF ON FACE CREAMS', '2018-04-27', '2018-05-06'),
(5, 'lakky@gmail.com', 201, 'Others', 'Lakky', '9095898989', 'Vijayawada', 1, 'shops/481b9.jpg', '60% OFF ON ELECTRONIC ITEMS', '2018-04-25', '2018-05-05'),
(6, 'vkcbata@gamil.com', 203, 'Footware', 'vkcbata', '9856239685', 'Guntur', 2, 'shops/5571f6.jpg', '25% OFF ON SHOES', '2018-04-19', '2018-05-10');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `sno` int(11) NOT NULL,
  `shopnumber` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `password` varchar(20) NOT NULL,
  `path` varchar(150) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `floor` int(11) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`sno`, `shopnumber`, `category`, `name`, `mobile`, `email`, `address`, `password`, `path`, `startdate`, `enddate`, `floor`, `status`) VALUES
(1, '200', 'Clothing', 'kavya', '8585858585', 'kavyamaddikunta29@gmail.com', 'vijayawada', 'kavya', 'Agreement/3544b8.jpg', '2017-05-01', '2018-05-27', 4, 'Allocated'),
(7, '202', 'Clothing', 'khushi', '5252585858', 'khushi@gmail.com', 'vijayawada', 'khushi', 'Agreement/2083b8.jpg', '2018-04-27', '2018-05-05', 2, 'Allocated'),
(2, '201', 'Others', 'Lakky', '9095898989', 'lakky@gmail.com', 'Vijayawada', 'lakky', 'Agreement/2910major index.docx', '2017-01-01', '2018-06-21', 1, 'Allocated'),
(4, '205', 'Cosmotics', 'lakmy', '7878525263', 'lakmy', 'Vijayawada', 'lakmy', 'Agreement/5260b9.jpg', '2018-04-13', '2020-06-24', 4, 'Allocated'),
(6, '208', 'Clothing', 'prabha', '9023568974', 'prabha@gmail.com', 'Vijayawada', 'prabha', 'Agreement/6747b5.png', '2018-04-21', '2019-04-28', 3, 'Allocated'),
(5, '206', 'Gifts & Toys', 'supertoys', '8523568974', 'supertoys@gmail.com', 'Vijayawada', 'supertoys', 'Agreement/5110b4.jpg', '2018-04-04', '2019-04-12', 1, 'Allocated'),
(3, '203', 'Footware', 'vkcbata', '9856239685', 'vkcbata@gamil.com', 'Guntur', 'vkcbata', 'Agreement/4847o4.jpg', '2018-04-27', '2019-02-06', 2, 'Allocated');

-- --------------------------------------------------------

--
-- Table structure for table `shopnotifications`
--

CREATE TABLE `shopnotifications` (
  `sno` int(11) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `date` varchar(20) NOT NULL,
  `path` varchar(100) NOT NULL,
  `shopnumber` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopnotifications`
--

INSERT INTO `shopnotifications` (`sno`, `subject`, `date`, `path`, `shopnumber`) VALUES
(1, 'Hi sir', '2018-04-27', 'Notifications/797b9.jpg', '200'),
(2, 'ha sir tomarrow i will meet u', '2018-04-26', 'Notifications/3015b9.jpg', '206');

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `sno` int(11) NOT NULL,
  `shopnumber` varchar(30) NOT NULL,
  `facing` varchar(30) NOT NULL,
  `sqfeet` varchar(30) NOT NULL,
  `floor` int(11) NOT NULL,
  `rent` varchar(30) NOT NULL,
  `advance` varchar(30) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `photo1` varchar(100) NOT NULL,
  `photo2` varchar(100) NOT NULL,
  `photo3` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`sno`, `shopnumber`, `facing`, `sqfeet`, `floor`, `rent`, `advance`, `photo`, `photo1`, `photo2`, `photo3`, `status`) VALUES
(13, '200', 'East', '600', 4, '20000', '40000', 'shops/435106.jpg', 'shops/4351b9.jpg', 'shops/4351b4.jpg', 'shops/4351b8.jpg', 'Leased'),
(14, '201', 'West', '300', 1, '20000', '40000', 'shops/481b9.jpg', 'shops/481b9.jpg', 'shops/481s1.jpg', 'shops/481shop11.jpg', 'Leased'),
(15, '202', 'North', '300', 2, '20000', '40000', 'shops/6069shop5.jpg', 'shops/6069shop12.jpg', 'shops/6069shop12.jpg', 'shops/6069t6.jpg', 'Leased'),
(16, '203', 'North', '400', 2, '30000', '60000', 'shops/5571f6.jpg', 'shops/5571f10.jpg', 'shops/5571o11.jpg', 'shops/5571shop1.jpg', 'Leased'),
(17, '204', 'South', '600', 4, '25000', '50000', 'shops/2411b6.jpg', 'shops/2411c7.jpg', 'shops/2411c4.png', 'shops/2411f9.jpg', 'available'),
(18, '205', 'North', '350', 4, '30000', '30000', 'shops/7179c9.jpg', 'shops/7179b2.jpg', 'shops/7179shop10.jpg', 'shops/7179f9.jpg', 'Leased'),
(19, '206', 'North', '400', 1, '30000', '30000', 'shops/1775c1.jpg', 'shops/1775b8.jpg', 'shops/1775o5.jpg', 'shops/1775o1.jpg', 'Leased'),
(20, '207', 'East', '600', 3, '35000', '70000', 'shops/735o6.jpg', 'shops/735t4.jpg', 'shops/735o14.jpg', 'shops/735t4.jpg', 'available'),
(21, '208', 'West', '350', 3, '30000', '60000', 'shops/599906.jpg', 'shops/599903.jpg', 'shops/5999b6.jpg', 'shops/5999f6.jpg', 'Leased'),
(22, '209', 'South', '250', 3, '20000', '20000', 'shops/6358b5.png', 'shops/6358shop10.jpg', 'shops/6358shop15.jpg', 'shops/6358shop2.jpg', 'available'),
(23, '210', 'West', '200', 1, '30000', '30000', 'shops/785403.jpg', 'shops/785406.jpg', 'shops/7854b1.jpg', 'shops/7854b2.jpg', 'available'),
(24, '211', 'North', '300', 2, '25000', '25000', 'shops/6350b8.jpg', 'shops/6350c4.png', 'shops/6350f7.jpg', 'shops/6350o10.jpg', 'available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD UNIQUE KEY `sno` (`sno`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD UNIQUE KEY `sno` (`sno`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD UNIQUE KEY `sno` (`sno`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `sno` (`sno`);

--
-- Indexes for table `shopnotifications`
--
ALTER TABLE `shopnotifications`
  ADD UNIQUE KEY `sno` (`sno`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`shopnumber`),
  ADD UNIQUE KEY `sno` (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `shopnotifications`
--
ALTER TABLE `shopnotifications`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
