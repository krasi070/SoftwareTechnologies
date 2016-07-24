insert into Posts (AuthorID, Title, Body, Date)
	values (2, 'Random Title', 'Random Content', CAST('2016-07-13T11:30:00' as datetime))
select * from Posts