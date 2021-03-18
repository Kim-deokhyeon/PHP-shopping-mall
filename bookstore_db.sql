CREATE TABLE `ADMIN_tb` (
	`adminId`	varchar(20)	NOT NULL,
	`adminPw`	varchar(20)	NOT NULL
);

CREATE TABLE `MEMBER` (
	`memberNo`	int(4)	NOT NULL,
	`memberName`	varchar(20)	NOT NULL,
	`memberNick`	varchar(20)	NOT NULL,
	`memberPw`	varchar(20)	NOT NULL,
	`memberBirth`	varchar(8)	NOT NULL,
	`memberTel`	varchar(20)	NOT NULL,
	`memberId`	varchar(30)	NOT NULL,
	`memberGender`	varchar(20)	NOT NULL,
	`memberAdd`	varchar(20)	NOT NULL,
	`subcheck`	int(4)	NULL
);

CREATE TABLE `REVIEW_SNS` (
	`feedNo`	int(4)	NOT NULL,
	`memberNo`	int(4)	NOT NULL,
	`bookNo`	int(4)	NOT NULL,
	`review`	varchar(20)	NOT NULL,
	`privacy`	int(4)	NULL,
	`reviewDate`	varchar(20)	NOT NULL,
	`grade`	int(4)	NOT NULL
);

CREATE TABLE `DELIVERY` (
	`waybillNum`	int(4)	NOT NULL,
	`subName`	varchar(20)	NOT NULL,
	`subTel`	varchar(20)	NOT NULL,
	`subTerm`	varchar(20)	NOT NULL,
	`postCode`	varchar(20)	NOT NULL,
	`roadAddress`	varchar(20)	NOT NULL,
	`jibunAddress`	varchar(20)	NOT NULL,
	`detailAddress`	varchar(20)	NULL,
	`extraAddress`	varchar(20)	NULL
);

CREATE TABLE `PUBLISHER` (
	`publisherId`	int(4)	NOT NULL,
	`publisherName`	varchar(20)	NOT NULL,
	`Field4`	varchar(20)	NOT NULL,
	`publisherTel`	varchar(20)	NOT NULL,
	`publisherAdd`	varchar(20)	NOT NULL,
	`pubsliherSatis`	varchar(20)	NULL
);

CREATE TABLE `LIKE_TABLE` (
	`memberNo`	int(4)	NOT NULL,
	`bookNo`	int(4)	NOT NULL
);

CREATE TABLE `BOOK` (
	`bookNo`	int(4)	NOT NULL,
	`bookName`	varchar(20)	NOT NULL,
	`bookWriter`	varchar(20)	NOT NULL,
	`bookPublisher`	varchar(20)	NOT NULL,
	`publishingYear`	int(4)	NOT NULL,
	`bookContent`	varchar(300)	NOT NULL,
	`category`	int(4)	NOT NULL,
	`grade`	int(4)	NULL,
	`price`	int(4)	NOT NULL,
	`Field`	int(4)	NOT NULL
);

CREATE TABLE `SUPPLY` (
	`bookNo`	int(4)	NOT NULL,
	`publisherId`	int(4)	NOT NULL,
	`Field`	int(4)	NOT NULL,
	`Field2`	int(4)	NOT NULL
);

CREATE TABLE `PUBLISHERSATISFACTION` (
	`publisherId`	int(4)	NOT NULL,
	`question1`	int(4)	NULL,
	`question2`	int(4)	NULL,
	`question3`	int(4)	NULL,
	`opinion`	varchar(300)	NULL
);

CREATE TABLE `BESTSELLER` (
	`chartNum`	int(1)	NOT NULL,
	`bookNo`	int(4)	NOT NULL,
	`category`	int(4)	NOT NULL,
	`Field2`	int(5)	NOT NULL
);

CREATE TABLE `BUYLIST` (
	`purchaseNO`	int(5)	NOT NULL,
	`memberNo`	int(4)	NOT NULL,
	`Key`	int(4)	NOT NULL,
	`purchaseDate`	varchar(20)	NOT NULL,
	`paymenthistory`	varchar(20)	NOT NULL,
	`totalprice`	int(4)	NOT NULL
);

CREATE TABLE `BUY` (
	`purchaseNO`	int(5)	NOT NULL,
	`memberNo`	int(4)	NOT NULL,
	`bookNo`	int(4)	NOT NULL,
	`quantity`	int(4)	NOT NULL,
	`price`	int(4)	NOT NULL
);

CREATE TABLE `REGULARDELIVERY` (
	`chartNum`	int(1)	NOT NULL,
	`purchaseNO`	int(5)	NOT NULL,
	`memberNo`	int(4)	NOT NULL
);

ALTER TABLE `ADMIN_tb` ADD CONSTRAINT `PK_ADMIN` PRIMARY KEY (
	`adminId`
);

ALTER TABLE `MEMBER` ADD CONSTRAINT `PK_MEMBER` PRIMARY KEY (
	`memberNo`
);

ALTER TABLE `REVIEW_SNS` ADD CONSTRAINT `PK_REVIEW_SNS` PRIMARY KEY (
	`feedNo`
);

ALTER TABLE `DELIVERY` ADD CONSTRAINT `PK_DELIVERY` PRIMARY KEY (
	`waybillNum`
);

ALTER TABLE `PUBLISHER` ADD CONSTRAINT `PK_PUBLISHER` PRIMARY KEY (
	`publisherId`
);

ALTER TABLE `BOOK` ADD CONSTRAINT `PK_BOOK` PRIMARY KEY (
	`bookNo`
);

ALTER TABLE `BESTSELLER` ADD CONSTRAINT `PK_BESTSELLER` PRIMARY KEY (
	`chartNum`
);

ALTER TABLE `BUYLIST` ADD CONSTRAINT `PK_BUYLIST` PRIMARY KEY (
	`purchaseNO`
);

