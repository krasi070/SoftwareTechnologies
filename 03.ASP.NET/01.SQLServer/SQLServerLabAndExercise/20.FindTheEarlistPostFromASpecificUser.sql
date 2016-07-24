select * from Posts
where date in (select MIN(date) from Posts 
				where AuthorID = 2)