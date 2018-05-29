-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2018 at 02:49 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `hello_langs`
--

CREATE TABLE `hello_langs` (
  `id` int(11) NOT NULL,
  `lang_id` int(11) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `quest_headone` varchar(200) DEFAULT NULL,
  `quest_headtwo` varchar(200) DEFAULT NULL,
  `quest_headthree` varchar(200) DEFAULT NULL,
  `quest_headfour` varchar(200) DEFAULT NULL,
  `quest_headfive` varchar(200) DEFAULT NULL,
  `example_quest` varchar(300) DEFAULT NULL,
  `example` varchar(10000) DEFAULT NULL,
  `output` varchar(1000) DEFAULT NULL,
  `features_one_question` varchar(500) DEFAULT NULL,
  `features_one_ans` varchar(500) DEFAULT NULL,
  `features_two_question` varchar(500) DEFAULT NULL,
  `features_two_ans` varchar(500) DEFAULT NULL,
  `features_three_question` varchar(500) DEFAULT NULL,
  `features_three_ans` varchar(500) DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hello_langs`
--

INSERT INTO `hello_langs` (`id`, `lang_id`, `title`, `description`, `quest_headone`, `quest_headtwo`, `quest_headthree`, `quest_headfour`, `quest_headfive`, `example_quest`, `example`, `output`, `features_one_question`, `features_one_ans`, `features_two_question`, `features_two_ans`, `features_three_question`, `features_three_ans`, `updated_at`, `created_at`) VALUES
(1, 30, 'java', 'this is a java language', '', 'Java is a high level,object oriented programming language.', 'Java is most popular and widely used secured and robust technology.', 'java is high level language.', 'java is high level language.', 'Let''s see a simple Hello world! in java programming.', 'public class First\n{\n  public static void main(String args[])\n  {\n    System.out.println("Hello, welcome in java!");\n  }\n}', 'hello, welcome', 'Object-oriented Language', 'Platform Independent', '', '', NULL, NULL, '2018-03-13', '2018-03-16'),
(3, 27, 'C', 'C is the mother language of other language. ', 'Mother language', 'System programming language', 'Procedure-oriented programming language', NULL, NULL, 'Hello C', '#include<stdio.h>    \nint main(){    \nprintf("Hello C Language");    \nreturn 0;   \n} ', 'Hello C', 'Machine Independent or Portable', 'Mid-level programming language', 'structured programming language', 'line by line execution', NULL, NULL, '2018-05-09', '2018-05-09'),
(4, 28, 'C++', '&lt;p style="font-family:verdana, helvetica, arial, sans-serif;font-size:13px;text-align:justify;background-color:#ffffff;"&gt;C++ is a general purpose, case-sensitive, free-form programming language that supports object-oriented, procedural and generic programming.&lt;/p&gt;&lt;p style="font-family:verdana, helvetica, arial, sans-serif;font-size:13px;text-align:justify;background-color:#ffffff;"&gt;C++ is a middle-level language, as it encapsulates both high and low level language features.&lt;/p&gt;', 'C++ is a middle-level language, as it encapsulates both high and low level language features.', 'C++ supports the object-oriented programming.', 'The core library includes the data types, variables and literals, etc.', NULL, NULL, 'Welcome to C++ Programming', '&lt;ol class="dp-cpp" style="margin:0px;padding:0px;border:none;font-family:verdana;font-size:13px;text-align:justify;background-color:#ffffff;"&gt;&lt;li class="alt" style="width:870px;margin:4px 0px 0px;border:none;line-height:23px;padding:0px 3px 0px 10px !important;"&gt;&lt;span style="margin:0px;padding:0px;border:none;background-color:inherit;"&gt;&lt;span class="preprocessor" style="margin:0px;padding:0px;border:none;color:blue;background-color:inherit;"&gt;#include&amp;nbsp;&amp;lt;iostream.h&amp;gt;&lt;/span&gt;&lt;span style="margin:0px;padding:0px;border:none;background-color:inherit;"&gt;&amp;nbsp;&amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/li&gt;&lt;li style="margin:4px 0px 0px;border:none;line-height:23px;padding:0px 3px 0px 10px !important;"&gt;&lt;span style="margin:0px;padding:0px;border:none;background-color:inherit;"&gt;&lt;span class="preprocessor" style="margin:0px;padding:0px;border:none;color:blue;background-color:inherit;"&gt;#include&amp;lt;conio.h&amp;gt;&lt;/span&gt;&lt;span style="margin:0px;padding:0px;border:none;background-color:inherit;"&gt;&amp;nbsp;&amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/li&gt;&lt;li class="alt" style="width:870px;margin:4px 0px 0px;border:none;line-height:23px;padding:0px 3px 0px 10px !important;"&gt;&lt;span style="margin:0px;padding:0px;border:none;background-color:inherit;"&gt;&lt;span class="keyword" style="margin:0px;padding:0px;border:none;color:#006699;background-color:inherit;font-weight:700;"&gt;void&lt;/span&gt;&lt;span style="margin:0px;padding:0px;border:none;background-color:inherit;"&gt;&amp;nbsp;main()&amp;nbsp;{&amp;nbsp;&amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/li&gt;&lt;li style="margin:4px 0px 0px;border:none;line-height:23px;padding:0px 3px 0px 10px !important;"&gt;&lt;span style="margin:0px;padding:0px;border:none;background-color:inherit;"&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;clrscr();&amp;nbsp;&amp;nbsp;&lt;/span&gt;&lt;/li&gt;&lt;li class="alt" style="width:870px;margin:4px 0px 0px;border:none;line-height:23px;padding:0px 3px 0px 10px !important;"&gt;&lt;span style="margin:0px;padding:0px;border:none;background-color:inherit;"&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;cout&amp;nbsp;&amp;lt;&amp;lt;&amp;nbsp;&lt;span class="string" style="margin:0px;padding:0px;border:none;color:blue;background-color:inherit;"&gt;"Welcome&amp;nbsp;to&amp;nbsp;C++&amp;nbsp;Programming."&lt;/span&gt;&lt;span style="margin:0px;padding:0px;border:none;background-color:inherit;"&gt;;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/li&gt;&lt;li style="margin:4px 0px 0px;border:none;line-height:23px;padding:0px 3px 0px 10px !important;"&gt;&lt;span style="margin:0px;padding:0px;border:none;background-color:inherit;"&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;getch();&amp;nbsp;&amp;nbsp;&lt;/span&gt;&lt;/li&gt;&lt;li class="alt" style="width:870px;margin:4px 0px 0px;border:none;line-height:23px;padding:0px 3px 0px 10px !important;"&gt;&lt;span style="margin:0px;padding:0px;border:none;background-color:inherit;"&gt;}&amp;nbsp;&amp;nbsp;&lt;/span&gt;&lt;/li&gt;&lt;/ol&gt;', 'Welcome to C++ Programming', 'Machine Independent or Portable', 'Machine Independent or Portable', 'Machine Independent or Portable', NULL, NULL, NULL, '2018-05-09', '2018-05-09'),
(5, 32, 'HTML', '&lt;p style="box-sizing:inherit;font-family:Verdana, sans-serif;font-size:16px;"&gt;With HTML you can create your own Website.&lt;/p&gt;&lt;p style="box-sizing:inherit;font-family:Verdana, sans-serif;font-size:16px;"&gt;This tutorial teaches you everything about HTML.&lt;/p&gt;&lt;p style="box-sizing:inherit;font-family:Verdana, sans-serif;font-size:16px;"&gt;HTML is easy to learn - You will enjoy it.&lt;/p&gt;', 'HTML stands for Hyper Text Markup Language', 'HTML describes the structure of Web pages using markup', 'HTML elements are the building blocks of HTML pages', NULL, NULL, 'Welcome in html', '&lt;span style="box-sizing:inherit;font-family:Consolas, ''courier new'';font-size:16px;color:brown;"&gt;&lt;span style="box-sizing:inherit;color:mediumblue;"&gt;&amp;lt;&lt;/span&gt;html&lt;span style="box-sizing:inherit;color:mediumblue;"&gt;&amp;gt;&lt;/span&gt;&lt;/span&gt;&lt;br style="box-sizing:inherit;font-family:Consolas, ''courier new'';font-size:16px;" /&gt;&lt;span style="box-sizing:inherit;font-family:Consolas, ''courier new'';font-size:16px;color:brown;"&gt;&lt;span style="box-sizing:inherit;color:mediumblue;"&gt;&amp;lt;&lt;/span&gt;head&lt;span style="box-sizing:inherit;color:mediumblue;"&gt;&amp;gt;&lt;/span&gt;&lt;/span&gt;&lt;br style="box-sizing:inherit;font-family:Consolas, ''courier new'';font-size:16px;" /&gt;&lt;span style="box-sizing:inherit;font-family:Consolas, ''courier new'';font-size:16px;color:brown;"&gt;&lt;span style="box-sizing:inherit;color:mediumblue;"&gt;&amp;lt;&lt;/span&gt;title&lt;span style="box-sizing:inherit;color:mediumblue;"&gt;&amp;gt;&lt;/span&gt;&lt;/span&gt;&lt;span style="font-family:Consolas, ''courier new'';font-size:16px;background-color:#ffffff;"&gt;Page Title&lt;/span&gt;&lt;span style="box-sizing:inherit;font-family:Consolas, ''courier new'';font-size:16px;color:brown;"&gt;&lt;span style="box-sizing:inherit;color:mediumblue;"&gt;&amp;lt;&lt;/span&gt;/title&lt;span style="box-sizing:inherit;color:mediumblue;"&gt;&amp;gt;&lt;/span&gt;&lt;/span&gt;&lt;br style="box-sizing:inherit;font-family:Consolas, ''courier new'';font-size:16px;" /&gt;&lt;span style="box-sizing:inherit;font-family:Consolas, ''courier new'';font-size:16px;color:brown;"&gt;&lt;span style="box-sizing:inherit;color:mediumblue;"&gt;&amp;lt;&lt;/span&gt;/head&lt;span style="box-sizing:inherit;color:mediumblue;"&gt;&amp;gt;&lt;/span&gt;&lt;/span&gt;&lt;br style="box-sizing:inherit;font-family:Consolas, ''courier new'';font-size:16px;" /&gt;&lt;span style="box-sizing:inherit;font-family:Consolas, ''courier new'';font-size:16px;color:brown;"&gt;&lt;span style="box-sizing:inherit;color:mediumblue;"&gt;&amp;lt;&lt;/span&gt;body&lt;span style="box-sizing:inherit;color:mediumblue;"&gt;&amp;gt;&lt;/span&gt;&lt;/span&gt;&lt;br style="box-sizing:inherit;font-family:Consolas, ''courier new'';font-size:16px;" /&gt;&lt;br style="box-sizing:inherit;font-family:Consolas, ''courier new'';font-size:16px;" /&gt;&lt;span style="box-sizing:inherit;font-family:Consolas, ''courier new'';font-size:16px;color:brown;"&gt;&lt;span style="box-sizing:inherit;color:mediumblue;"&gt;&amp;lt;&lt;/span&gt;h1&lt;span style="box-sizing:inherit;color:mediumblue;"&gt;&amp;gt;&lt;/span&gt;&lt;/span&gt;&lt;span style="font-family:Consolas, ''courier new'';font-size:16px;background-color:#ffffff;"&gt;This is a Heading&lt;/span&gt;&lt;span style="box-sizing:inherit;font-family:Consolas, ''courier new'';font-size:16px;color:brown;"&gt;&lt;span style="box-sizing:inherit;color:mediumblue;"&gt;&amp;lt;&lt;/span&gt;/h1&lt;span style="box-sizing:inherit;color:mediumblue;"&gt;&amp;gt;&lt;/span&gt;&lt;/span&gt;&lt;br style="box-sizing:inherit;font-family:Consolas, ''courier new'';font-size:16px;" /&gt;&lt;span style="box-sizing:inherit;font-family:Consolas, ''courier new'';font-size:16px;color:brown;"&gt;&lt;span style="box-sizing:inherit;color:mediumblue;"&gt;&amp;lt;&lt;/span&gt;p&lt;span style="box-sizing:inherit;color:mediumblue;"&gt;&amp;gt;&lt;/span&gt;&lt;/span&gt;&lt;span style="font-family:Consolas, ''courier new'';font-size:16px;background-color:#ffffff;"&gt;This is a paragraph.&lt;/span&gt;&lt;span style="box-sizing:inherit;font-family:Consolas, ''courier new'';font-size:16px;color:brown;"&gt;&lt;span style="box-sizing:inherit;color:mediumblue;"&gt;&amp;lt;&lt;/span&gt;/p&lt;span style="box-sizing:inherit;color:mediumblue;"&gt;&amp;gt;&lt;/span&gt;&lt;/span&gt;&lt;br style="box-sizing:inherit;font-family:Consolas, ''courier new'';font-size:16px;" /&gt;&lt;br style="box-sizing:inherit;font-family:Consolas, ''courier new'';font-size:16px;" /&gt;&lt;span style="box-sizing:inherit;font-family:Consolas, ''courier new'';font-size:16px;color:brown;"&gt;&lt;span style="box-sizing:inherit;color:mediumblue;"&gt;&amp;lt;&lt;/span&gt;/body&lt;span style="box-sizing:inherit;color:mediumblue;"&gt;&amp;gt;&lt;/span&gt;&lt;/span&gt;&lt;br style="box-sizing:inherit;font-family:Consolas, ''courier new'';font-size:16px;" /&gt;&lt;span style="box-sizing:inherit;font-family:Consolas, ''courier new'';font-size:16px;color:brown;"&gt;&lt;span style="box-sizing:inherit;color:mediumblue;"&gt;&amp;lt;&lt;/span&gt;/html&lt;span style="box-sizing:inherit;color:mediumblue;"&gt;&amp;gt;&lt;/span&gt;&lt;/span&gt;', 'This is a Heading, This is a paragraph.', 'Browsers do not display the HTML tags, but use them to render the content of the page', 'HTML elements are the building blocks of HTML pages', 'HTML elements are represented by tags', NULL, NULL, NULL, '2018-05-09', '2018-05-09'),
(6, 33, 'CSS', '&lt;p&gt;CSS describes&amp;nbsp;&lt;strong style="box-sizing:inherit;"&gt;how HTML elements are to be displayed on screen, paper, or in other media&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;CSS&amp;nbsp;&lt;strong style="box-sizing:inherit;"&gt;saves a lot of work&lt;/strong&gt;. It can control the layout of multiple web pages all at once&lt;/p&gt;&lt;p&gt;External stylesheets are stored in&amp;nbsp;&lt;strong&gt;CSS files&lt;/strong&gt;&lt;/p&gt;&lt;strong&gt;CSS&lt;/strong&gt;&amp;nbsp;stands for&amp;nbsp;&lt;strong&gt;C&lt;/strong&gt;ascading&amp;nbsp;&lt;strong&gt;S&lt;/strong&gt;tyle&amp;nbsp;&lt;strong&gt;S&lt;/strong&gt;heets', 'CSS is a language that describes the style of an HTML document', 'CSS describes how HTML elements should be displayed.', 'CSS saves a lot of work. It can control the layout of multiple web pages all at once', NULL, NULL, 'Apply color on paragraph tag', '&lt;p&gt;&lt;span style="box-sizing:inherit;font-family:Consolas, ''courier new'';font-size:16px;color:brown;"&gt;&lt;span style="box-sizing:inherit;color:mediumblue;"&gt;&amp;lt;&lt;/span&gt;p&lt;span style="box-sizing:inherit;color:red;"&gt;&amp;nbsp;class&lt;span style="box-sizing:inherit;color:mediumblue;"&gt;="center large"&lt;/span&gt;&lt;/span&gt;&lt;span style="box-sizing:inherit;color:mediumblue;"&gt;&amp;gt;&lt;/span&gt;&lt;/span&gt;&lt;span style="font-family:Consolas, ''courier new'';font-size:16px;background-color:#ffffff;"&gt;This paragraph refers to two classes.&lt;/span&gt;&lt;span style="box-sizing:inherit;font-family:Consolas, ''courier new'';font-size:16px;color:brown;"&gt;&lt;span style="box-sizing:inherit;color:mediumblue;"&gt;&amp;lt;&lt;/span&gt;/p&lt;span style="box-sizing:inherit;color:mediumblue;"&gt;&amp;gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style="box-sizing:inherit;font-family:Consolas, ''courier new'';font-size:16px;color:brown;"&gt;&lt;span style="box-sizing:inherit;color:mediumblue;"&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style="color:#a52a2a;font-family:Consolas, ''courier new'';font-size:16px;background-color:#ffffff;"&gt;p&amp;nbsp;&lt;/span&gt;&lt;span style="box-sizing:inherit;font-family:Consolas, ''courier new'';font-size:16px;background-color:#ffffff;"&gt;{&lt;/span&gt;&lt;span style="box-sizing:inherit;font-family:Consolas, ''courier new'';font-size:16px;background-color:#ffffff;color:red;"&gt;&lt;br style="box-sizing:inherit;" /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp; text-align&lt;span style="box-sizing:inherit;color:mediumblue;"&gt;&lt;span style="box-sizing:inherit;color:black;"&gt;:&lt;/span&gt;&amp;nbsp;center&lt;span style="box-sizing:inherit;color:black;"&gt;;&lt;/span&gt;&lt;/span&gt;&lt;br style="box-sizing:inherit;" /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp; color&lt;span style="box-sizing:inherit;color:mediumblue;"&gt;&lt;span style="box-sizing:inherit;color:black;"&gt;:&lt;/span&gt;&amp;nbsp;red&lt;span style="box-sizing:inherit;color:black;"&gt;;&lt;/span&gt;&lt;/span&gt;&lt;br style="box-sizing:inherit;" /&gt;&lt;/span&gt;&lt;span style="box-sizing:inherit;font-family:Consolas, ''courier new'';font-size:16px;background-color:#ffffff;"&gt;}&lt;/span&gt;&lt;/p&gt;', 'This paragraph will be red and center-aligned.', 'CSS is a language that describes the style of an HTML document', 'This tutorial will teach you CSS from basic to advanced.', NULL, NULL, NULL, NULL, '2018-05-09', '2018-05-09'),
(7, 43, 'muku', 'hiii', 'muku is a unique name', 'amit friend is muku', 'muku ful name is ambani', NULL, NULL, 'hello...', '&lt;pre style="box-sizing:border-box;overflow:auto;font-size:13px;color:#333333;font-family:Menlo, Monaco, Consolas, ''Courier New'', monospace;padding:9.5px;margin-top:0px;margin-bottom:10px;line-height:1.42857;word-break:break-all;word-wrap:break-word;background-color:#f5f5f5;border:1px solid rgb(204, 204, 204);border-radius:4px;box-shadow:0px 0px 11px;"&gt; #include&lt;stdio.h style="box-sizing:border-box;"&gt;    \r\nint main(){    \r\nprintf("Hello C Language");    \r\nreturn 0;   \r\n} \r\n&lt;/stdio.h&gt;&lt;/pre&gt;&lt;div&gt;&lt;stdio.h style="box-sizing:border-box;"&gt;&lt;br /&gt;&lt;/stdio.h&gt;&lt;/div&gt;', 'hello c language', 'no featcher', 'featcher', 'muku featcher', NULL, NULL, NULL, '2018-05-10', '2018-05-10');

-- --------------------------------------------------------

--
-- Table structure for table `langs`
--

CREATE TABLE `langs` (
  `id` int(11) NOT NULL,
  `langname` varchar(50) DEFAULT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `langs`
--

INSERT INTO `langs` (`id`, `langname`, `updated_at`, `created_at`) VALUES
(27, 'C', '2018-02-20', '2018-02-20'),
(28, 'C++', '2018-02-20', '2018-02-20'),
(30, 'Java', '2018-02-20', '2018-02-20'),
(32, 'HTML', '2018-02-20', '2018-02-20'),
(33, 'CSS', '2018-02-20', '2018-02-20'),
(34, 'JavaScript', '2018-02-20', '2018-02-20'),
(36, 'Sql', '2018-02-20', '2018-02-20'),
(37, 'Android', '2018-02-20', '2018-02-20'),
(40, 'puython', '2018-05-23', '2018-03-07'),
(45, 'php laravel', '2018-05-23', '2018-05-23');

-- --------------------------------------------------------

--
-- Table structure for table `loginusers`
--

CREATE TABLE `loginusers` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginusers`
--

INSERT INTO `loginusers` (`id`, `username`, `password`, `updated_at`, `created_at`) VALUES
(1, 'admin', '12345', '2018-03-14', '2018-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_topics`
--

CREATE TABLE `sub_topics` (
  `id` int(11) NOT NULL,
  `topics_id` int(11) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `quest_headone` varchar(500) DEFAULT NULL,
  `quest_headtwo` varchar(500) DEFAULT NULL,
  `quest_headthree` varchar(500) DEFAULT NULL,
  `quest_headfour` varchar(500) DEFAULT NULL,
  `quest_headfive` varchar(500) DEFAULT NULL,
  `example_quest` varchar(500) DEFAULT NULL,
  `example` varchar(10000) DEFAULT NULL,
  `output` varchar(500) DEFAULT NULL,
  `features_one_question` varchar(500) DEFAULT NULL,
  `features_one_ans` varchar(500) DEFAULT NULL,
  `features_two_question` varchar(500) DEFAULT NULL,
  `features_two_ans` varchar(500) DEFAULT NULL,
  `features_three_question` varchar(500) DEFAULT NULL,
  `features_three_ans` varchar(500) DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_topics`
--

INSERT INTO `sub_topics` (`id`, `topics_id`, `title`, `description`, `quest_headone`, `quest_headtwo`, `quest_headthree`, `quest_headfour`, `quest_headfive`, `example_quest`, `example`, `output`, `features_one_question`, `features_one_ans`, `features_two_question`, `features_two_ans`, `features_three_question`, `features_three_ans`, `updated_at`, `created_at`) VALUES
(1, 6, 'Array', 'Java Tutorial or Java Programming Tutorial provides you basic knowledge of Core Java or Java Technology.If you want to learn java or core java tutorial then this tutorial provides you java basics concept.', 'Java is widely used robust technology in the world.', 'Java is a high level,object oriented programming language.', 'Java is most popular and widely used secured and robust technology.', 'java is high level language.', 'java is high level language.', 'Let''s see a simple Hello world! in java programming.', '&lt;p&gt;public class First &lt;/p&gt;&lt;p&gt;{&amp;nbsp; &amp;nbsp;&lt;/p&gt;&lt;p&gt;public static void main(String args[])&amp;nbsp; &amp;nbsp;&lt;/p&gt;&lt;p&gt;{&amp;nbsp; &amp;nbsp; &lt;/p&gt;&lt;p&gt;&amp;nbsp;System.out.println("Hello, welcome in java!");&amp;nbsp; &lt;/p&gt;&lt;p&gt;&amp;nbsp;} &lt;/p&gt;&lt;p&gt;}&lt;/p&gt;', 'hello, welcome', NULL, NULL, NULL, NULL, NULL, NULL, '2018-03-06', '0000-00-00'),
(4, 39, 'string', '&lt;p&gt;sfhuwhfuw&lt;/p&gt;&lt;p&gt;fkhsdjfgs&lt;/p&gt;', 'sdjhfhsdshgd', 'svdfhgsdyh', 'hsgdfgds', NULL, NULL, 'hello string', '&lt;p&gt;jxjsdg&lt;/p&gt;&lt;p&gt;jsdhfgs&lt;/p&gt;&lt;p&gt;bsdhv&lt;/p&gt;', 'hello string', 'dfgfr', 'dfgfdg', 'dfe', NULL, NULL, NULL, '2018-05-10', '2018-05-10'),
(5, 2, 'string', '&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;p style="font-family:verdana, helvetica, arial, sans-serif;font-size:13px;text-align:justify;background-color:#ffffff;"&gt;&lt;strong&gt;String&lt;/strong&gt;&amp;nbsp;in C language is an&amp;nbsp;&lt;em&gt;array of characters&lt;/em&gt;&amp;nbsp;that is terminated by \\0 (null character).&lt;/p&gt;&lt;p style="font-family:verdana, helvetica, arial, sans-serif;font-size:13px;text-align:justify;background-color:#ffffff;"&gt;There are two ways to declare string in c language.&lt;/p&gt;&lt;ol style="font-family:verdana, helvetica, arial, sans-serif;font-size:13px;text-align:justify;background-color:#ffffff;"&gt;&lt;li style="line-height:23px;margin-top:4px;"&gt;By char array&lt;/li&gt;&lt;li style="line-height:23px;margin-top:4px;"&gt;By string literal&lt;/li&gt;&lt;/ol&gt;&lt;p&gt;&lt;/p&gt;', 'String in C language is an array of characters that is terminated by \\0 (null character).', 'The only difference is that string literal cannot be changed whereas string declared by char array can be changed', 'Let''s see a simple example to declare and print string. The ''%s'' is used to print string in c language.', NULL, NULL, 'hello string', '&lt;p&gt;&lt;/p&gt;&lt;ol class="dp-cpp" style="padding:0px;margin:0px;border:none;font-family:verdana;font-size:13px;text-align:justify;background-color:#ffffff;"&gt;&lt;li class="alt" style="width:748px;margin:4px 0px 0px;border:none;line-height:23px;padding:0px 3px 0px 10px !important;"&gt;&lt;span style="margin:0px;padding:0px;border:none;background-color:inherit;"&gt;&lt;span class="preprocessor" style="margin:0px;padding:0px;border:none;color:blue;background-color:inherit;"&gt;#include&amp;lt;stdio.h&amp;gt;&lt;/span&gt;&lt;span style="margin:0px;padding:0px;border:none;background-color:inherit;"&gt;&amp;nbsp;&amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/li&gt;&lt;li style="margin:4px 0px 0px;border:none;line-height:23px;padding:0px 3px 0px 10px !important;"&gt;&lt;span style="margin:0px;padding:0px;border:none;background-color:inherit;"&gt;&lt;span class="preprocessor" style="margin:0px;padding:0px;border:none;color:blue;background-color:inherit;"&gt;#include&amp;nbsp;&amp;lt;string.h&amp;gt;&amp;nbsp;&amp;nbsp;&lt;/span&gt;&lt;span style="margin:0px;padding:0px;border:none;background-color:inherit;"&gt;&amp;nbsp;&amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/li&gt;&lt;li class="alt" style="width:748px;margin:4px 0px 0px;border:none;line-height:23px;padding:0px 3px 0px 10px !important;"&gt;&lt;span style="margin:0px;padding:0px;border:none;background-color:inherit;"&gt;&lt;span class="datatypes" style="margin:0px;padding:0px;border:none;color:#2e8b57;background-color:inherit;font-weight:bold;"&gt;int&lt;/span&gt;&lt;span style="margin:0px;padding:0px;border:none;background-color:inherit;"&gt;&amp;nbsp;main(){&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/li&gt;&lt;li style="margin:4px 0px 0px;border:none;line-height:23px;padding:0px 3px 0px 10px !important;"&gt;&lt;span style="margin:0px;padding:0px;border:none;background-color:inherit;"&gt;&amp;nbsp;&amp;nbsp;&lt;span class="datatypes" style="margin:0px;padding:0px;border:none;color:#2e8b57;background-color:inherit;font-weight:bold;"&gt;char&lt;/span&gt;&lt;span style="margin:0px;padding:0px;border:none;background-color:inherit;"&gt;&amp;nbsp;ch[11]={&lt;/span&gt;&lt;span class="string" style="margin:0px;padding:0px;border:none;color:blue;background-color:inherit;"&gt;''j''&lt;/span&gt;&lt;span style="margin:0px;padding:0px;border:none;background-color:inherit;"&gt;,&amp;nbsp;&lt;/span&gt;&lt;span class="string" style="margin:0px;padding:0px;border:none;color:blue;background-color:inherit;"&gt;''a''&lt;/span&gt;&lt;span style="margin:0px;padding:0px;border:none;background-color:inherit;"&gt;,&amp;nbsp;&lt;/span&gt;&lt;span class="string" style="margin:0px;padding:0px;border:none;color:blue;background-color:inherit;"&gt;''v''&lt;/span&gt;&lt;span style="margin:0px;padding:0px;border:none;background-color:inherit;"&gt;,&amp;nbsp;&lt;/span&gt;&lt;span class="string" style="margin:0px;padding:0px;border:none;color:blue;background-color:inherit;"&gt;''a''&lt;/span&gt;&lt;span style="margin:0px;padding:0px;border:none;background-color:inherit;"&gt;,&amp;nbsp;&lt;/span&gt;&lt;span class="string" style="margin:0px;padding:0px;border:none;color:blue;background-color:inherit;"&gt;''t''&lt;/span&gt;&lt;span style="margin:0px;padding:0px;border:none;background-color:inherit;"&gt;,&amp;nbsp;&lt;/span&gt;&lt;span class="string" style="margin:0px;padding:0px;border:none;color:blue;background-color:inherit;"&gt;''p''&lt;/span&gt;&lt;span style="margin:0px;padding:0px;border:none;background-color:inherit;"&gt;,&amp;nbsp;&lt;/span&gt;&lt;span class="string" style="margin:0px;padding:0px;border:none;color:blue;background-color:inherit;"&gt;''o''&lt;/span&gt;&lt;span style="margin:0px;padding:0px;border:none;background-color:inherit;"&gt;,&amp;nbsp;&lt;/span&gt;&lt;span class="string" style="margin:0px;padding:0px;border:none;color:blue;background-color:inherit;"&gt;''i''&lt;/span&gt;&lt;span style="margin:0px;padding:0px;border:none;background-color:inherit;"&gt;,&amp;nbsp;&lt;/span&gt;&lt;span class="string" style="margin:0px;padding:0px;border:none;color:blue;background-color:inherit;"&gt;''n''&lt;/span&gt;&lt;span style="margin:0px;padding:0px;border:none;background-color:inherit;"&gt;,&amp;nbsp;&lt;/span&gt;&lt;span class="string" style="margin:0px;padding:0px;border:none;color:blue;background-color:inherit;"&gt;''t''&lt;/span&gt;&lt;span style="margin:0px;padding:0px;border:none;background-color:inherit;"&gt;,&amp;nbsp;&lt;/span&gt;&lt;span class="string" style="margin:0px;padding:0px;border:none;color:blue;background-color:inherit;"&gt;''\\0''&lt;/span&gt;&lt;span style="margin:0px;padding:0px;border:none;background-color:inherit;"&gt;};&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/li&gt;&lt;li class="alt" style="width:748px;margin:4px 0px 0px;border:none;line-height:23px;padding:0px 3px 0px 10px !important;"&gt;&lt;span style="margin:0px;padding:0px;border:none;background-color:inherit;"&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;span class="datatypes" style="margin:0px;padding:0px;border:none;color:#2e8b57;background-color:inherit;font-weight:bold;"&gt;char&lt;/span&gt;&lt;span style="margin:0px;padding:0px;border:none;background-color:inherit;"&gt;&amp;nbsp;ch2[11]=&lt;/span&gt;&lt;span class="string" style="margin:0px;padding:0px;border:none;color:blue;background-color:inherit;"&gt;"javatpoint"&lt;/span&gt;&lt;span style="margin:0px;padding:0px;border:none;background-color:inherit;"&gt;;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/li&gt;&lt;li style="margin:4px 0px 0px;border:none;line-height:23px;padding:0px 3px 0px 10px !important;"&gt;&lt;span style="margin:0px;padding:0px;border:none;background-color:inherit;"&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;/span&gt;&lt;/li&gt;&lt;li class="alt" style="width:748px;margin:4px 0px 0px;border:none;line-height:23px;padding:0px 3px 0px 10px !important;"&gt;&lt;span style="margin:0px;padding:0px;border:none;background-color:inherit;"&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;printf(&lt;span class="string" style="margin:0px;padding:0px;border:none;color:blue;background-color:inherit;"&gt;"Char&amp;nbsp;Array&amp;nbsp;Value&amp;nbsp;is:&amp;nbsp;%s\\n"&lt;/span&gt;&lt;span style="margin:0px;padding:0px;border:none;background-color:inherit;"&gt;,&amp;nbsp;ch);&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/li&gt;&lt;li style="margin:4px 0px 0px;border:none;line-height:23px;padding:0px 3px 0px 10px !important;"&gt;&lt;span style="margin:0px;padding:0px;border:none;background-color:inherit;"&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;printf(&lt;span class="string" style="margin:0px;padding:0px;border:none;color:blue;background-color:inherit;"&gt;"String&amp;nbsp;Literal&amp;nbsp;Value&amp;nbsp;is:&amp;nbsp;%s\\n"&lt;/span&gt;&lt;span style="margin:0px;padding:0px;border:none;background-color:inherit;"&gt;,&amp;nbsp;ch2);&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/li&gt;&lt;li class="alt" style="width:748px;margin:4px 0px 0px;border:none;line-height:23px;padding:0px 3px 0px 10px !important;"&gt;&lt;span style="margin:0px;padding:0px;border:none;background-color:inherit;"&gt;&amp;nbsp;&lt;span class="keyword" style="margin:0px;padding:0px;border:none;color:#006699;background-color:inherit;font-weight:700;"&gt;return&lt;/span&gt;&lt;span style="margin:0px;padding:0px;border:none;background-color:inherit;"&gt;&amp;nbsp;0;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/li&gt;&lt;li style="margin:4px 0px 0px;border:none;line-height:23px;padding:0px 3px 0px 10px !important;"&gt;&lt;span style="margin:0px;padding:0px;border:none;background-color:inherit;"&gt;}&amp;nbsp;&lt;/span&gt;&lt;/li&gt;&lt;li&gt;&lt;/li&gt;&lt;/ol&gt;&lt;p&gt;&lt;/p&gt;', 'hello string', 'dsaddsa', 'sfsd', 'sd', NULL, NULL, NULL, '2018-05-10', '2018-05-10'),
(6, 4, 'Varibales', '&lt;p style="font-family:verdana, helvetica, arial, sans-serif;font-size:13px;text-align:justify;background-color:#ffffff;"&gt;A&amp;nbsp;&lt;strong&gt;variable&lt;/strong&gt;&amp;nbsp;is a name of memory location. It is used to store data. Its value can be changed and it can be reused many times.&lt;/p&gt;&lt;p style="font-family:verdana, helvetica, arial, sans-serif;font-size:13px;text-align:justify;background-color:#ffffff;"&gt;It is a way to represent memory location through symbol so that it can be easily identified.&lt;/p&gt;&lt;p style="font-family:verdana, helvetica, arial, sans-serif;font-size:13px;text-align:justify;background-color:#ffffff;"&gt;Let''s see the syntax to declare a variable:&lt;/p&gt;', 'A variable is a name of memory location. It is used to store data', 'It is a way to represent memory location through symbol so that it can be easily identified.', 'It is used to store data. Its value can be changed and it can be reused many times.', NULL, NULL, 'Variables in c', '&lt;ol style="font-family:verdana, helvetica, arial, sans-serif;font-size:13px;text-align:justify;background-color:#ffffff;"&gt;&lt;li style="line-height:23px;margin-top:4px;"&gt;local variable&lt;/li&gt;&lt;li style="line-height:23px;margin-top:4px;"&gt;global variable&lt;/li&gt;&lt;li style="line-height:23px;margin-top:4px;"&gt;static variable&lt;/li&gt;&lt;li style="line-height:23px;margin-top:4px;"&gt;automatic variable&lt;/li&gt;&lt;li style="line-height:23px;margin-top:4px;"&gt;external variable&lt;/li&gt;&lt;/ol&gt;', 'local variable global variable static variable automatic variable external variable', 'Local Variables', 'A variable that is declared inside the function or block is called local variable.', NULL, NULL, NULL, NULL, '2018-05-10', '2018-05-10');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `lang_id` int(11) DEFAULT NULL,
  `topic` varchar(100) DEFAULT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `lang_id`, `topic`, `updated_at`, `created_at`) VALUES
(1, 27, 'function', '2018-05-08', '2018-02-14'),
(2, 27, 'string', '2018-02-13', '2018-02-14'),
(4, 27, 'Variables', '2018-02-13', '2018-02-13'),
(5, 27, 'Operator', '2018-02-13', '2018-02-13'),
(6, 27, 'Array', '2018-02-13', '2018-02-13'),
(7, 27, 'Data type', '2018-02-13', '2018-02-13'),
(8, 27, 'Constants', '2018-02-13', '2018-02-13'),
(9, 27, 'If statements', '2018-02-13', '2018-02-13'),
(10, 27, 'Else-if statements', '2018-02-13', '2018-02-13'),
(11, 27, 'Goto statements', '2018-02-13', '2018-02-14'),
(12, 27, 'Switch statements', '2018-02-13', '2018-02-13'),
(13, 27, 'For loop', '2018-02-13', '2018-02-13'),
(14, 27, 'While loop', '2018-02-13', '2018-02-13'),
(15, 27, 'Do-while', '2018-02-13', '2018-02-13'),
(16, 30, 'function', '2018-02-13', '2018-02-13'),
(18, 30, 'For loop', '2018-02-13', '2018-02-13'),
(21, NULL, 'functiondgdf', '2018-05-08', '2018-05-08'),
(22, 28, 'Function', '2018-05-09', '2018-05-09'),
(23, 28, 'String', '2018-05-09', '2018-05-09'),
(25, 27, 'Keyword', '2018-05-09', '2018-05-09'),
(26, 32, 'HTML Elements', '2018-05-09', '2018-05-09'),
(27, 32, 'HTML Attributes', '2018-05-09', '2018-05-09'),
(28, 32, 'HTML Headings', '2018-05-09', '2018-05-09'),
(29, 32, 'HTML Paragraphs', '2018-05-09', '2018-05-09'),
(30, 32, 'HTML Text Formatting', '2018-05-09', '2018-05-09'),
(31, 33, 'CSS Syntax', '2018-05-09', '2018-05-09'),
(32, 33, 'CSS Padding', '2018-05-09', '2018-05-09'),
(33, 33, 'CSS Text', '2018-05-09', '2018-05-09'),
(34, 33, 'CSS Lists', '2018-05-09', '2018-05-09'),
(35, 33, 'CSS Tables', '2018-05-09', '2018-05-09'),
(36, 33, 'Align', '2018-05-09', '2018-05-09'),
(37, 33, 'Forms', '2018-05-09', '2018-05-09'),
(38, 37, 'zzzzzz', '2018-05-10', '2018-05-10'),
(39, 43, 'string', '2018-05-10', '2018-05-10'),
(40, 44, 'function', '2018-05-11', '2018-05-11'),
(41, 44, 'string', '2018-05-11', '2018-05-11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hello_langs`
--
ALTER TABLE `hello_langs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `langs`
--
ALTER TABLE `langs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loginusers`
--
ALTER TABLE `loginusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_topics`
--
ALTER TABLE `sub_topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hello_langs`
--
ALTER TABLE `hello_langs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `langs`
--
ALTER TABLE `langs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `loginusers`
--
ALTER TABLE `loginusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sub_topics`
--
ALTER TABLE `sub_topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
