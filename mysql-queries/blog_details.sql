 CREATE TABLE `blog_details` (
  `id` int(11) NOT NULL,
  `blog_title` varchar(300) DEFAULT NULL,
  `blog_short_desc` varchar(600) DEFAULT NULL,
  `blog_content` text,
  `blog_url` varchar(200) DEFAULT NULL,
  `blog_image` varchar(300) DEFAULT NULL,
  `blog_status` tinyint(1) DEFAULT '0',
  `created_by` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
)