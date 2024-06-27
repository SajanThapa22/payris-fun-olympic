
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


--creating table for archery sports

CREATE TABLE `archerycomment` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `date` varchar(50) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `rate` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--inserting some comments in `archerycomment` table

INSERT INTO `archerycomment` (`id`, `user`, `date`, `comment`, `rate`) VALUES
(18, 'ali111', '2024/06/06', 'Very good videos', 5);


--creating table for table tennis sports comments

CREATE TABLE `ttcomment` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `date` varchar(50) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `rate` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


--inserting some comments in `ttcomment` table
INSERT INTO `ttcomment` (`id`, `user`, `date`, `comment`, `rate`) VALUES
(18, 'ali111', '2024/06/06', 'Very good tabletennis', 5);



--creating table for swimming sports comments

CREATE TABLE `swimmingcomment` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `date` varchar(50) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `rate` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


--inserting some comments in `swimmingcomment` table
INSERT INTO `swimmingcomment` (`id`, `user`, `date`, `comment`, `rate`) VALUES
(18, 'ali111', '2024/06/06', 'Very good swimming', 5);



--creating table for boxing sports comments

CREATE TABLE `boxingcomment` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `date` varchar(50) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `rate` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


--inserting some comments in `boxingcomment` table
INSERT INTO `boxingcomment` (`id`, `user`, `date`, `comment`, `rate`) VALUES
(18, 'ali111', '2024/06/06', 'Very good boxing', 5);



--creating table for reset password tokens
CREATE TABLE `password_reset_tokens` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(100) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `password_reset_tokens` (`id`, `email`, `token`, `timestamp`) VALUES
(22, 'sazanthapa123456@gmail.com', '77c36127926b4309af42e049891f78cfde3d8599c3ad24a03cf5ca22b02ef172', '0000-00-00 00:00:00');


--creating table for registered users

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `sports` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


--inserting some default users in the `users` table
INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `phone_number`, `country`, `sports`, `password`, `status`) VALUES
(16, 'Dipshan Bhatta', 'dcsixer', 'dipshandc@gmail.com', '9801315535', 'India', 'volleyball', '$2y$10$swTd4tUU.591ctVSI7HH6uZ.WnO946kcFXz425iTb7LVEI556jtr6', '1'),
(17, 'Sailesh Dhakal', 'Sailesh96', 'goblin619@gmail.com', '9801315555', 'Bhutan', 'swimming', '$2y$10$hb97h4iECM1k/d9C35HBE.WjL0WkDXl9N5bY9Emp0uQN1YAnZ3mta', '1'),
(18, 'Nabin Thapa', 'Nabin96', 'noobnabin@gmail.com', '9813513515', 'Nepal', 'boxing', '$2y$10$7MNJNebwVVZTnRoOgfV1LObEs4WIKPVjVjKUUXj7fKGdqY0AqkJEi', '0');


ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `archerycomment`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `ttcomment`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `swimmingcomment`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `boxingcomment`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`id`);




ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


--
-- AUTO_INCREMENT for all the tables
--

ALTER TABLE `archerycomment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
ALTER TABLE `ttcomment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
ALTER TABLE `swimmingcomment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
ALTER TABLE `boxingcomment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;


ALTER TABLE `password_reset_tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;


ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

