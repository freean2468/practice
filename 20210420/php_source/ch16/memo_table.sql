CREATE TABLE IF NOT EXISTS memo (
	me_id int(11) NOT NULL AUTO_INCREMENT,
	me_recv_mb_id varchar(20) NOT NULL DEFAULT '',
	me_send_mb_id varchar(20) NOT NULL DEFAULT '',
	me_send_datetime datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
	me_read_datetime datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
	me_memo text NOT NULL,
	PRIMARY KEY (me_id),
	KEY me_recv_mb_id (me_recv_mb_id)
);