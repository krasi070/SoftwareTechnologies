namespace EntityFrameworkExercise
{
    using System;
    using System.Linq;

    public class Program
    {
        public static void Main()
        {
            //Problem01ListAllPosts();
            //Problem02ListAllUsers();
            //Problem03ListTitleAndBodyFromPosts();
            //Problem04OrderData();
            //Problem05OrderByTwoColumns();
            //Problem06SelectAuthors();
            //Problem07JoinAuthorWithTitle();
            //Problem08SelectAuthorOfSpecificPost();
            //Problem09OrderPostsAuthors();
            //Problem10CreateData();
            //Problem11UpdateData();
            //Problem12DeleteComment();
            //Problem13DeletePost();
        }

        private static void Problem01ListAllPosts()
        {
            var db = new BlogDbContext();
            var posts = db.Posts.Select(p => p).ToList();

            foreach (var post in posts)
            {
                Console.WriteLine("Title: {0}", post.Title);
                Console.WriteLine("Author ID: {0}", post.AuthorId);
                Console.WriteLine("Comments Count: {0}", post.Comments.Count);
                Console.WriteLine("Tags Count: {0}", post.Tags.Count);
                Console.WriteLine("----------------------------------------------------");
            }
        }

        private static void Problem02ListAllUsers()
        {
            var db = new BlogDbContext();
            var users = db.Users.Select(u => u).ToList();

            foreach (var user in users)
            {
                Console.WriteLine("Username: {0}", user.UserName);
                Console.WriteLine("ID: {0}", user.Id);
                Console.WriteLine("Name: {0}", user.FullName);
                Console.WriteLine("Comments Count: {0}", user.Comments.Count);
                Console.WriteLine("Posts Count: {0}", user.Posts.Count);
                Console.WriteLine("-------------------------------------------------");
            }
        }

        private static void Problem03ListTitleAndBodyFromPosts()
        {
            var db = new BlogDbContext();
            var posts = db.Posts
                .Select(p => new
                {
                    p.Title,
                    p.Body
                }).ToList();

            foreach (var post in posts)
            {
                Console.WriteLine("Title: {0}", post.Title);
                Console.WriteLine("Content: {0}", post.Body);
                Console.WriteLine("-------------------------------------------------------");
            }
        }

        private static void Problem04OrderData()
        {
            var db = new BlogDbContext();
            var users = db.Users
                .OrderBy(u => u.UserName)
                .ToList();

            foreach (var user in users)
            {
                Console.WriteLine("Username: {0}", user.UserName);
                Console.WriteLine("Full name: {0}", user.FullName);
                Console.WriteLine("---------------------------------------------------");
            }
        }

        private static void Problem05OrderByTwoColumns()
        {
            var db = new BlogDbContext();
            var users = db.Users
                .OrderByDescending(u => u.UserName)
                .ThenByDescending(u => u.FullName)
                .ToList();

            foreach (var user in users)
            {
                Console.WriteLine("Username: {0}", user.UserName);
                Console.WriteLine("Full name: {0}", user.FullName);
                Console.WriteLine("---------------------------------------------------");
            }
        }

        private static void Problem06SelectAuthors()
        {
            var db = new BlogDbContext();
            var users = db.Users
                .Where(u => u.Posts.Count > 0)
                .ToList();

            foreach (var user in users)
            {
                Console.WriteLine("Username: {0}", user.UserName);
                Console.WriteLine("Full name: {0}", user.FullName);
                Console.WriteLine("Posts Count: {0}", user.Posts.Count);
                Console.WriteLine("-------------------------------------------------------------");
            }
        }

        private static void Problem07JoinAuthorWithTitle()
        {
            var db = new BlogDbContext();
            var users = db.Users
                .SelectMany(u => u.Posts, (u, p) => new {u.UserName, p.Title});

            foreach (var user in users)
            {
                Console.WriteLine("Username: {0}", user.UserName);
                Console.WriteLine("Post Title: {0}", user.Title);
                Console.WriteLine("----------------------------------------------");
            }
        }

        private static void Problem08SelectAuthorOfSpecificPost()
        {
            var db = new BlogDbContext();
            var author = db.Users
                .SelectMany(u => u.Posts, (u, p) => new {u.UserName, u.FullName, p.Id})
                .Single(p => p.Id == 4);

            Console.WriteLine("Username: {0}", author.UserName);
            Console.WriteLine("Full name: {0}", author.FullName);
        }

        private static void Problem09OrderPostsAuthors()
        {
            var db = new BlogDbContext();
            var users = db.Users
                .Where(u => u.Posts.Count > 0)
                .OrderByDescending(u => u.Id)
                .ToList();

            foreach (var user in users)
            {
                Console.WriteLine("Username: {0}", user.UserName);
                Console.WriteLine("Full name: {0}", user.FullName);
                Console.WriteLine("----------------------------------------------------");
            }
        }

        private static void Problem10CreateData()
        {
            var db = new BlogDbContext();
            var post = new Posts()
            {
                Title = "Random Title",
                Body = "Random Content",
                Date = DateTime.Now,
                AuthorId = 2
            };

            db.Posts.Add(post);
            db.SaveChanges();

            Console.WriteLine("Post #{0} created!", post.Id);
        }

        private static void Problem11UpdateData()
        {
            var db = new BlogDbContext();
            var user = db.Users
                .Single(u => u.UserName == "GBotev");

            string oldName = user.FullName;
            user.FullName = "Georgi Botev";

            db.SaveChanges();

            Console.WriteLine("User \'{0}\' has been renamed to {1}.", oldName, user.FullName);
        }

        private static void Problem12DeleteComment()
        {
            var db = new BlogDbContext();
            var comment = db.Comments.Single(c => c.Id == 1);

            db.Comments.Remove(comment);

            db.SaveChanges();

            Console.WriteLine("Comment #{0} deleted!", comment.Id);
        }

        private static void Problem13DeletePost()
        {
            var db = new BlogDbContext();
            var post = db.Posts.Single(p => p.Id == 31);

            db.Comments.RemoveRange(post.Comments);
            post.Tags.Clear();
            db.Posts.Remove(post);

            db.SaveChanges();

            Console.WriteLine("Post #{0} deleted successfully!", post.Id);
        }
    }
}