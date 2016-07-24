select username, fullname from Users
where id in (select authorid from Posts)
order by id desc