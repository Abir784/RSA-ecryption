-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2024 at 08:24 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `genre` varchar(200) NOT NULL,
  `isbn` varchar(200) NOT NULL,
  `language` varchar(500) NOT NULL,
  `author` varchar(255) NOT NULL,
  `publication_year` varchar(500) NOT NULL,
  `total_copies` varchar(500) NOT NULL DEFAULT '1',
  `available_copies` varchar(255) NOT NULL DEFAULT '1',
  `added_by` int(40) NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `title`, `genre`, `isbn`, `language`, `author`, `publication_year`, `total_copies`, `available_copies`, `added_by`, `added_date`) VALUES
(1, '[\"IDeq+b9QLX0GfmdqwkPUJeWD2RkwkWAdAemAMrg/t1SEm6bEruXSO+uLBp07BLmabLDqqKTu4XiOqKPXhu3QeK1XIvoD2yTVX0EDEuCsEa3ExGa6JBfJOSeNi9JB7peePh0S2EHSGYWcyKv5hCbE21pRYdZqzvWip196hhxD9UY=\"]', '[\"g9Ql88mh0zv7qOZuUkAtyxZX5aK/CdCmkaEhpvD7+AStKgVahkND4fU/+OIdh8HOCCzpjJXK845tV4cctmhzGluMqvA64JBxN2GQ4bRkfyU+dY0Xe7APjQt2a+fTtY+l1mthjhuXOsCpinh/e4FUKLMZjEOH2oOSX+O9BIbZsu0=\"]', '[\"KkLosZ7NLhqXKxeZJjDEJqWZ5QFnrkNRF+EcVc/N0x8OXmV+Eoi0jte5y6xlDL2OcaUltkqataMcIBR8T33TbBn/jYkpgqduUEhXY7B5SWiBt+CyeQf8yqbFBC3UNMFzUOmi7XUNw9YiOZqBg5z5UU+2HzOQcR/4xND5kZ31kF0=\"]', '[\"isMFuaNckpzcx3/F8g26s7vFFio690KGP0lIMMrnHu+zj9kPXgRXDXA6WeEYs6xfz3nwUxEoGd8CAoARNNd5FUw/CZ/OwJxe7kF5NZ7QPadmzOQ7ahYW3dUWFfuyKDrfNkZpY1So0GhLeTzlfIgsQdUdfQK8rd3+Zp//2UTck9Q=\"]', '[\"lYnj/X/yUX3qVxRekrAVt8CwIhTkCXKhC5xwdOn/mm5Q6BcA1/15+PkoWu1W02wFLSqv9UqyLhxJ9jR19YZWkmk7l2PUdidxv3u1+2frTcJjkeTrKIbd3j8/h689lFTj2zngAHViIk0WJD0inVX60nWCvYH4Ob8t5bLQtmXG7jQ=\"]', '[\"XsE9FjhDDmUdxiwqsW3mncFjDpFvG0UIOv2ssLGNm7+f3PAMaOtMIHHxDktaAS9hvyvM8Nl9SC/ZlJJkDX3ubPm3JoA7b4Z42CtRrsKCBufbsc/AHJcgdlBA22Gx+OihdWnHMmTOiFjJuONn9dA2/UZKVk586wB+3eRQLLTw0gw=\"]', '[\"hRoM/JSc+4wuWIwJ7s/UNmobqk89AnhxAdp3gXlTxH+fZrIAXN+qznM6MmI9KZHYV3AAmPpmFmXZ2tTuVAR5W+poPazk1URKjhO6epo+75FA6cYBH8JIgRP/3mb7z7zv0vP4ice5eQXcjmxttFU+l5O7m40+36+ODpmNWYPHg54=\"]', '[\"i/jCJo8td2Gcg6+5uEgDBZ8KIMfQPc3hjXi5jc0SnHJxjiNeanMTb+VHxDtIndHJ12OBn16W5Rv7oS7vHy5keeOfB19B0KNy+Yq3iF3ENqsNSHPkWRvoZDpVhDyD9ssVh3Qk81XsAmntG1A+aRc1344E03Xcdqp2gAroe5xIGvk=\"]', 1, '2024-12-24 19:09:44');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, '[\"CSuKpW7OOnGzWcd+t28PkuRH/qK9PMVbK2Un0Eyp35eejOrRUQXoarRu5yR8R29lEouxC9EIAuFf9sE71kOtEBdup7+C/W61KaOj9f5ZrkWIH8CDPekjoFUJeppU+iJzDv7EWKwoMEczykWbar48pTOZPO4l/VQ4dFGaEm1n7Tg=\"]', 'cafuhycik@mailinator.com', '$2y$10$e5pK.aILi/A3apnlfiG7XOnmAoQsncDCQ7KKFGN.2yisXiq6oyGYe', '2024-12-24 19:08:08.089092', '2024-12-24 19:08:08.089092');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
