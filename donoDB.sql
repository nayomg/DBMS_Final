
-- Database: `donoDB`
--
-- --------------------------------------------------------
--
-- Table structure for table `donation`
--
CREATE TABLE donation (
    amount DECIMAL(10, 2),
    pledgeDate date,
    Payment_Method varchar(20),
    Payment_Plan varchar(10),
    ccName varchar(20),
    ccNum int(16),
    expire varchar(5),
    cvv int(3),
    donationid int(11),
    donorid int(11),

    primary key(donationid),

    foreign key(donorid) references donor(donorid)
    on delete set null
);

-- --------------------------------------------------------
--
-- Table structure for table `donor`
--
CREATE TABLE donor (
    donorid int(11) NOT NULL,
    firstName varchar(15) DEFAULT NULL,
    lastName varchar(20) DEFAULT NULL,
    email varchar(30) DEFAULT NULL,
    phoneNum varchar(15) DEFAULT NULL,
    street varchar(20) DEFAULT NULL,
    city varchar(20) DEFAULT NULL,
    stateA varchar(15) DEFAULT NULL,
    zip varchar(6) DEFAULT NULL,
    student int(1) DEFAULT NULL,
    graduate int(1) DEFAULT NULL,
    parent int(1) DEFAULT NULL,
    faculty int(1) DEFAULT NULL,
    admini int(1) DEFAULT NULL,
    corporation int(1) DEFAULT NULL,
    gradYear varchar(4) primary key(donorid)
);

