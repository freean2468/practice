CREATE TABLE student (
	idx INT(11) NOT NULL AUTO_INCREMENT,
	name VARCHAR(20) NOT NULL,
	department VARCHAR(20) NOT NULL,
	gender VARCHAR(2) NULL DEFAULT NULL,
	subjects VARCHAR(20) NULL DEFAULT NULL,
	grade INT(11) NULL DEFAULT NULL,
	PRIMARY KEY (idx)
);

INSERT INTO student (idx, name, department, gender, subjects, grade) VALUES
	(1, '정동진', '컴퓨터공학과', 'M', 'MySQL', 90),
	(2, '윤성훈', '컴퓨터공학과', 'M', 'MySQL', 85),
	(3, '박성진', '컴퓨터공학과', 'M', 'MySQL', 75),
	(4, '홍길동', '컴퓨터공학과', 'F', 'MySQL', 65),
	(5, '임꺽정', '컴퓨터공학과', 'F', 'MySQL', 65),
	(6, '정동진', '컴퓨터공학과', 'M', 'PHP', 55),
	(7, '윤성훈', '컴퓨터공학과', 'M', 'PHP', 70),
	(8, '박성진', '컴퓨터공학과', 'M', 'PHP', 75),
	(9, '홍길동', '컴퓨터공학과', 'F', 'PHP', 85),
	(10, '임꺽정', '컴퓨터공학과', 'F', 'PHP', 65);