create database  mes charset="utf8";
use mes;
create table mes_info (
	id int auto_increment comment 'id',
	title varchar(20) not null comment '标题',
	content text not null comment '内容',
	addtime varchar(20) not null comment '添加时间',
	primary key(id)
	)charset=utf8;