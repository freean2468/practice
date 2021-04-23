CREATE TABLE member ( 
	mb_no INT(11) NOT NULL AUTO_INCREMENT, 
	mb_id VARCHAR(20) NOT NULL DEFAULT '', 
	mb_password VARCHAR(255) NOT NULL DEFAULT '', 
	mb_name VARCHAR(255) NOT NULL DEFAULT '', 
	mb_email VARCHAR(255) NOT NULL DEFAULT '', 
	PRIMARY KEY (mb_no), 
	UNIQUE INDEX mb_id (mb_id) 
);

INSERT INTO member (mb_id, mb_password, mb_name, mb_email) VALUES('member01', '1234', '정동진', 'member01@email.com');
INSERT INTO member (mb_id, mb_password, mb_name, mb_email) VALUES('member02', '1234', '윤성훈', 'member02@email.com');
INSERT INTO member (mb_id, mb_password, mb_name, mb_email) VALUES('member03', '1234', '박성진', 'member03@email.com');
INSERT INTO member (mb_id, mb_password, mb_name, mb_email) VALUES('member04', '1234', '홍길동', 'member04@email.com');
INSERT INTO member (mb_id, mb_password, mb_name, mb_email) VALUES('member05', '1234', '임꺽정', 'member05@email.com');