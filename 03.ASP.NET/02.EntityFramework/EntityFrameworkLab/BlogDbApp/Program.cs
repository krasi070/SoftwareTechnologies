namespace BlogDbApp
{
    using System;
    using System.Collections.Generic;
    using System.Linq;

    class PostData
    {
        public int ID { get; set; }

        public string Title { get; set; }

        public DateTime Date { get; set; }
    }

    public class Program
    {
        public static void Main()
        {
            //Problem01QueryData();
            //Problem02CreateNewData();
            //Problem03CascadingInsert();
            //Problem04UpdateExistingData();
            //Problem05DeleteExistingData();
            //Problem06ExecuteNativeSQL();
        }

        private static void Problem01QueryData()
        {
            var db = new BlogDbContext();
            var posts = db.Posts.Select(p => new
            {
                p.Id,
                p.Title,
                Comments = p.Comments.Count,
                Tags = p.Tags.Count
            });

            Console.WriteLine("SQL Query:\n{0}\n", posts);

            foreach (var post in posts)
            {
                Console.WriteLine(
                    "{0} {1} ({2} comments, {3} tags)",
                    post.Id,
                    post.Title,
                    post.Comments,
                    post.Tags);
            }
        }

        private static void Problem02CreateNewData()
        {
            var db = new BlogDbContext();
            var post = new Posts()
            {
                Title = "New Title",
                Body = "New Post Body",
                Date = DateTime.Now
            };

            db.Posts.Add(post);
            db.SaveChanges();
            Console.WriteLine("Post #{0} created.", post.Id);
        }

        private static void Problem03CascadingInsert()
        {
            var db = new BlogDbContext();
            var post = new Posts()
            {
                Title = "New Post Title",
                Date = DateTime.Now,
                Body = "This posts has comments and tags.",
                Comments = new Comments[]
                {
                    new Comments() { Text = "Text 1", Date = DateTime.Now },
                    new Comments() { Text = "Text 2", Date = DateTime.Now, Users = db.Users.First() } 
                },
                Tags = db.Tags.Take(3).ToList() 
            };

            db.Posts.Add(post);
            db.SaveChanges();
        }

        private static void Problem04UpdateExistingData()
        {
            var db = new BlogDbContext();
            var user = db.Users
                .Where(u => u.UserName == "pesho")
                .First();
            user.PasswordHash = Guid.NewGuid().ToByteArray();

            db.SaveChanges();
            Console.WriteLine("User #{0} ({1}) has a new random password.", user.Id, user.UserName);
        }

        private static void Problem05DeleteExistingData()
        {
            var db = new BlogDbContext();
            var lastPost = db.Posts
                .OrderByDescending(p => p.Id)
                .First();

            db.Comments.RemoveRange(lastPost.Comments);
            lastPost.Tags.Clear();
            db.Posts.Remove(lastPost);
            db.SaveChanges();

            Console.WriteLine("Deleted post #{0}.", lastPost.Id);
        }

        private static void Problem06ExecuteNativeSQL()
        {
            var db = new BlogDbContext();
            var startDate = new DateTime(2016, 5, 19);
            var endDate = new DateTime(2016, 6, 14);

            var posts = db.Database.SqlQuery<PostData>(
                @"SELECT ID, Title, Date FROM Posts
                WHERE CONVERT(date, DATE)
                BETWEEN {0} AND {1}
                ORDER BY Date", startDate, endDate);

            foreach (var post in posts)
            {
                Console.WriteLine("#{0}: {1} ({2})", post.ID, post.Title, post.Date);
            }
        }
    }
}