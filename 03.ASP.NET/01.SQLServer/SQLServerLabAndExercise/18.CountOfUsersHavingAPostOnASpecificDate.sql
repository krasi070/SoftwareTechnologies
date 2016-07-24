select count(id) as Users_Count from Posts
where id in (select AuthorID from Posts where date = '2016-06-14')