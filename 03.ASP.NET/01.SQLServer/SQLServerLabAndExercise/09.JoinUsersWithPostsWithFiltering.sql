select username, fullname from Users
where id in (select authorid from Posts
				where id = 4)