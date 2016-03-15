	create table posts
	(
		id int not null auto_increment,
		author varchar(255),
		content text,

		primary key (id)
	);