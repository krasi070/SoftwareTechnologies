USE [master]
GO
/****** Object:  Database [Blog]    Script Date: 23.07.2016 г. 19:30:46 ******/
CREATE DATABASE [Blog]
GO
ALTER DATABASE [Blog] SET COMPATIBILITY_LEVEL = 120
GO
IF (1 = FULLTEXTSERVICEPROPERTY('IsFullTextInstalled'))
begin
EXEC [Blog].[dbo].[sp_fulltext_database] @action = 'enable'
end
GO
ALTER DATABASE [Blog] SET ANSI_NULL_DEFAULT OFF 
GO
ALTER DATABASE [Blog] SET ANSI_NULLS OFF 
GO
ALTER DATABASE [Blog] SET ANSI_PADDING OFF 
GO
ALTER DATABASE [Blog] SET ANSI_WARNINGS OFF 
GO
ALTER DATABASE [Blog] SET ARITHABORT OFF 
GO
ALTER DATABASE [Blog] SET AUTO_CLOSE OFF 
GO
ALTER DATABASE [Blog] SET AUTO_SHRINK OFF 
GO
ALTER DATABASE [Blog] SET AUTO_UPDATE_STATISTICS ON 
GO
ALTER DATABASE [Blog] SET CURSOR_CLOSE_ON_COMMIT OFF 
GO
ALTER DATABASE [Blog] SET CURSOR_DEFAULT  GLOBAL 
GO
ALTER DATABASE [Blog] SET CONCAT_NULL_YIELDS_NULL OFF 
GO
ALTER DATABASE [Blog] SET NUMERIC_ROUNDABORT OFF 
GO
ALTER DATABASE [Blog] SET QUOTED_IDENTIFIER OFF 
GO
ALTER DATABASE [Blog] SET RECURSIVE_TRIGGERS OFF 
GO
ALTER DATABASE [Blog] SET  DISABLE_BROKER 
GO
ALTER DATABASE [Blog] SET AUTO_UPDATE_STATISTICS_ASYNC OFF 
GO
ALTER DATABASE [Blog] SET DATE_CORRELATION_OPTIMIZATION OFF 
GO
ALTER DATABASE [Blog] SET TRUSTWORTHY OFF 
GO
ALTER DATABASE [Blog] SET ALLOW_SNAPSHOT_ISOLATION OFF 
GO
ALTER DATABASE [Blog] SET PARAMETERIZATION SIMPLE 
GO
ALTER DATABASE [Blog] SET READ_COMMITTED_SNAPSHOT OFF 
GO
ALTER DATABASE [Blog] SET HONOR_BROKER_PRIORITY OFF 
GO
ALTER DATABASE [Blog] SET RECOVERY SIMPLE 
GO
ALTER DATABASE [Blog] SET  MULTI_USER 
GO
ALTER DATABASE [Blog] SET PAGE_VERIFY CHECKSUM  
GO
ALTER DATABASE [Blog] SET DB_CHAINING OFF 
GO
ALTER DATABASE [Blog] SET FILESTREAM( NON_TRANSACTED_ACCESS = OFF ) 
GO
ALTER DATABASE [Blog] SET TARGET_RECOVERY_TIME = 0 SECONDS 
GO
ALTER DATABASE [Blog] SET DELAYED_DURABILITY = DISABLED 
GO
USE [Blog]
GO
/****** Object:  Table [dbo].[Comments]    Script Date: 23.07.2016 г. 19:30:46 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Comments](
	[ID] [int] IDENTITY(1,1) NOT NULL,
	[Text] [nvarchar](max) NOT NULL,
	[AuthorID] [int] NULL,
	[AuthorName] [nvarchar](100) NULL,
	[PostID] [int] NOT NULL,
 CONSTRAINT [PK_Comments] PRIMARY KEY CLUSTERED 
(
	[ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]

GO
/****** Object:  Table [dbo].[Posts]    Script Date: 23.07.2016 г. 19:30:46 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Posts](
	[ID] [int] IDENTITY(1,1) NOT NULL,
	[Title] [varchar](200) NOT NULL,
	[Body] [varchar](max) NOT NULL,
	[Date] [datetime] NOT NULL,
	[AuthorID] [int] NULL,
 CONSTRAINT [PK_Posts] PRIMARY KEY CLUSTERED 
(
	[ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Posts_Tags]    Script Date: 23.07.2016 г. 19:30:46 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Posts_Tags](
	[PostID] [int] NOT NULL,
	[TagID] [int] NOT NULL,
 CONSTRAINT [PK_Posts_Tags] PRIMARY KEY CLUSTERED 
(
	[PostID] ASC,
	[TagID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[Tags]    Script Date: 23.07.2016 г. 19:30:46 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Tags](
	[ID] [int] IDENTITY(1,1) NOT NULL,
	[Name] [nvarchar](50) NOT NULL,
 CONSTRAINT [PK_Tags] PRIMARY KEY CLUSTERED 
(
	[ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[Users]    Script Date: 23.07.2016 г. 19:30:46 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Users](
	[ID] [int] IDENTITY(1,1) NOT NULL,
	[Username] [varchar](50) NOT NULL,
	[PasswordHash] [varbinary](64) NULL,
	[FullName] [varchar](100) NULL,
 CONSTRAINT [PK_Users] PRIMARY KEY CLUSTERED 
(
	[ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
SET IDENTITY_INSERT [dbo].[Comments] ON 

INSERT [dbo].[Comments] ([ID], [Text], [AuthorID], [AuthorName], [PostID]) VALUES (1, N'Very much! A lot WOW!!!!!!', NULL, N'Doge', 1)
INSERT [dbo].[Comments] ([ID], [Text], [AuthorID], [AuthorName], [PostID]) VALUES (2, N'Notice me, senpai!', 5, NULL, 2)
SET IDENTITY_INSERT [dbo].[Comments] OFF
SET IDENTITY_INSERT [dbo].[Posts] ON 

INSERT [dbo].[Posts] ([ID], [Title], [Body], [Date], [AuthorID]) VALUES (1, N'First Title', N'wowowooowowowowwowoowowowoowowowowowoowoowowowowoowow', CAST(N'2016-07-23T18:37:22.200' AS DateTime), 1)
INSERT [dbo].[Posts] ([ID], [Title], [Body], [Date], [AuthorID]) VALUES (2, N'Secind Title', N'ahahahhahaahhahahahahhahahahahahhahahahhahahahahahahahahahahahha', CAST(N'2012-07-23T18:38:21.250' AS DateTime), 1)
INSERT [dbo].[Posts] ([ID], [Title], [Body], [Date], [AuthorID]) VALUES (3, N'New Post', N'postpostpostpostpostpostspostpostspostspostspostpostpostpostpostpostpots', CAST(N'2016-07-23T18:43:34.567' AS DateTime), 4)
INSERT [dbo].[Posts] ([ID], [Title], [Body], [Date], [AuthorID]) VALUES (4, N'JoJonium', N'it''s awesome', CAST(N'2016-07-23T19:15:44.310' AS DateTime), 4)
INSERT [dbo].[Posts] ([ID], [Title], [Body], [Date], [AuthorID]) VALUES (5, N'CATS', N'catsactasctastctascatscatsacatscatscats', CAST(N'2016-07-23T19:16:21.900' AS DateTime), 6)
SET IDENTITY_INSERT [dbo].[Posts] OFF
INSERT [dbo].[Posts_Tags] ([PostID], [TagID]) VALUES (1, 8)
INSERT [dbo].[Posts_Tags] ([PostID], [TagID]) VALUES (1, 9)
INSERT [dbo].[Posts_Tags] ([PostID], [TagID]) VALUES (1, 10)
INSERT [dbo].[Posts_Tags] ([PostID], [TagID]) VALUES (2, 2)
INSERT [dbo].[Posts_Tags] ([PostID], [TagID]) VALUES (2, 3)
INSERT [dbo].[Posts_Tags] ([PostID], [TagID]) VALUES (3, 4)
INSERT [dbo].[Posts_Tags] ([PostID], [TagID]) VALUES (3, 7)
INSERT [dbo].[Posts_Tags] ([PostID], [TagID]) VALUES (4, 1)
INSERT [dbo].[Posts_Tags] ([PostID], [TagID]) VALUES (4, 2)
INSERT [dbo].[Posts_Tags] ([PostID], [TagID]) VALUES (5, 5)
INSERT [dbo].[Posts_Tags] ([PostID], [TagID]) VALUES (5, 6)
SET IDENTITY_INSERT [dbo].[Tags] ON 

INSERT [dbo].[Tags] ([ID], [Name]) VALUES (1, N'jojo')
INSERT [dbo].[Tags] ([ID], [Name]) VALUES (2, N'anime')
INSERT [dbo].[Tags] ([ID], [Name]) VALUES (3, N'memes')
INSERT [dbo].[Tags] ([ID], [Name]) VALUES (4, N'programming')
INSERT [dbo].[Tags] ([ID], [Name]) VALUES (5, N'cats')
INSERT [dbo].[Tags] ([ID], [Name]) VALUES (6, N'dogs')
INSERT [dbo].[Tags] ([ID], [Name]) VALUES (7, N'java')
INSERT [dbo].[Tags] ([ID], [Name]) VALUES (8, N'sql server')
INSERT [dbo].[Tags] ([ID], [Name]) VALUES (9, N'c#')
INSERT [dbo].[Tags] ([ID], [Name]) VALUES (10, N'cpp')
SET IDENTITY_INSERT [dbo].[Tags] OFF
SET IDENTITY_INSERT [dbo].[Users] ON 

INSERT [dbo].[Users] ([ID], [Username], [PasswordHash], [FullName]) VALUES (1, N'pesho', NULL, N'Peho Peshov')
INSERT [dbo].[Users] ([ID], [Username], [PasswordHash], [FullName]) VALUES (2, N'gosho', NULL, N'Gosho Goshkov')
INSERT [dbo].[Users] ([ID], [Username], [PasswordHash], [FullName]) VALUES (3, N'kiril', NULL, N'Kiril Ivanov')
INSERT [dbo].[Users] ([ID], [Username], [PasswordHash], [FullName]) VALUES (4, N'krasi070', NULL, N'Krasimir Balchev')
INSERT [dbo].[Users] ([ID], [Username], [PasswordHash], [FullName]) VALUES (5, N'ivan009', NULL, N'Ivan Stoqnov')
INSERT [dbo].[Users] ([ID], [Username], [PasswordHash], [FullName]) VALUES (6, N'Brainko', NULL, N'Konstantin Filosofov')
INSERT [dbo].[Users] ([ID], [Username], [PasswordHash], [FullName]) VALUES (7, N'shirdor', NULL, N'Antonio Buyukliev')
SET IDENTITY_INSERT [dbo].[Users] OFF
SET ANSI_PADDING ON

GO
/****** Object:  Index [UK_Users_Username]    Script Date: 23.07.2016 г. 19:30:46 ******/
CREATE UNIQUE NONCLUSTERED INDEX [UK_Users_Username] ON [dbo].[Users]
(
	[Username] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, IGNORE_DUP_KEY = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
ALTER TABLE [dbo].[Posts] ADD  CONSTRAINT [DF_Posts_Date]  DEFAULT (getdate()) FOR [Date]
GO
ALTER TABLE [dbo].[Comments]  WITH CHECK ADD  CONSTRAINT [FK_Comments_Posts] FOREIGN KEY([PostID])
REFERENCES [dbo].[Posts] ([ID])
GO
ALTER TABLE [dbo].[Comments] CHECK CONSTRAINT [FK_Comments_Posts]
GO
ALTER TABLE [dbo].[Comments]  WITH CHECK ADD  CONSTRAINT [FK_Comments_Users] FOREIGN KEY([AuthorID])
REFERENCES [dbo].[Users] ([ID])
GO
ALTER TABLE [dbo].[Comments] CHECK CONSTRAINT [FK_Comments_Users]
GO
ALTER TABLE [dbo].[Posts]  WITH CHECK ADD  CONSTRAINT [FK_Posts_Users] FOREIGN KEY([AuthorID])
REFERENCES [dbo].[Users] ([ID])
GO
ALTER TABLE [dbo].[Posts] CHECK CONSTRAINT [FK_Posts_Users]
GO
ALTER TABLE [dbo].[Posts_Tags]  WITH CHECK ADD  CONSTRAINT [FK_Posts_Tags_Posts] FOREIGN KEY([PostID])
REFERENCES [dbo].[Posts] ([ID])
GO
ALTER TABLE [dbo].[Posts_Tags] CHECK CONSTRAINT [FK_Posts_Tags_Posts]
GO
ALTER TABLE [dbo].[Posts_Tags]  WITH CHECK ADD  CONSTRAINT [FK_Posts_Tags_Tags] FOREIGN KEY([TagID])
REFERENCES [dbo].[Tags] ([ID])
GO
ALTER TABLE [dbo].[Posts_Tags] CHECK CONSTRAINT [FK_Posts_Tags_Tags]
GO
USE [master]
GO
ALTER DATABASE [Blog] SET  READ_WRITE 
GO
