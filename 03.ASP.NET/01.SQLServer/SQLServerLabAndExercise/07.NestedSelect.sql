select * from Users
where id in (select AuthorId from Posts)