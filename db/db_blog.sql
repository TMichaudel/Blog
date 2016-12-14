CREATE TABLE DB_BLOG.`articles` (
  `IDarticle` int(11) NOT NULL,
  `titreArticle` varchar(250) COLLATE utf8_bin NOT NULL,
  `contenuArticle` varchar(500) COLLATE utf8_bin NOT NULL,
  `imageArticle` longblob NOT NULL,
  `noteArticle` int(11) DEFAULT '5',
  `publieurArticle` varchar(200) COLLATE utf8_bin NOT NULL,
  `dateArticle` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE DB_BLOG.`users` (
  `firstName` varchar(200) COLLATE utf8_bin NOT NULL,
  `name` varchar(200) COLLATE utf8_bin NOT NULL,
  `login` varchar(200) COLLATE utf8_bin NOT NULL,
  `password` char(32) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

ALTER TABLE DB_BLOG.`articles`
  ADD PRIMARY KEY (`IDarticle`);

ALTER TABLE DB_BLOG.`users`
  ADD PRIMARY KEY (`login`),
  ADD UNIQUE KEY `login` (`login`);


ALTER TABLE DB_BLOG.`articles`
  MODIFY `IDarticle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
