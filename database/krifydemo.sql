-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2024 at 11:40 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `krifydemo`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(55) NOT NULL,
  `user_id` int(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `user_id`, `image_path`, `created_at`) VALUES
(1, 19, 'uploads/photo_peggy.png', '2023-08-30 08:02:21'),
(5, 20, 'uploads/airtag__b5lt0bcbd9ua_large.jpg', '2023-08-30 09:06:48'),
(6, 20, 'uploads/airtag__b5lt0bcbd9ua_large.jpg', '2023-08-30 09:07:20'),
(7, 20, 'uploads/visionSlider.png', '2023-08-30 10:13:46'),
(8, 20, 'uploads/photo_peggy.png', '2023-08-30 10:13:56'),
(9, 20, 'uploads/privacy_update__cc6s1lqakkk2_large.jpg', '2023-08-30 11:21:21'),
(10, 25, 'uploads/photo_peggy.png', '2023-08-31 07:09:31'),
(21, 26, 'uploads/privacy_update__cc6s1lqakkk2_large.jpg', '2023-08-31 07:59:28'),
(22, 27, 'uploads/airtag__b5lt0bcbd9ua_large.jpg', '2023-08-31 08:22:41'),
(23, 28, 'uploads/photo_peggy.png', '2023-09-01 07:42:50'),
(24, 29, 'uploads/photo_peggy.png', '2023-09-01 08:02:50'),
(25, 35, 'uploads/photo_peggy.png', '2023-09-04 07:03:12'),
(26, 41, 'uploads/IMG_1969.JPG', '2024-05-07 11:32:48');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `email` varchar(55) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `email`, `username`, `password`) VALUES
(4, 'rameshpilli1428@gmail.com', 'zz', '$2y$10$vrDv3VehOzFRyTVBuIlZ7OKltQ0gAkWkTZYwFXW8nFwLdCO0kONc.'),
(5, 'rameshpilli1428@gmail.com', 'zz', '$2y$10$INc6yXJ4rMpIJZqdziXTe./s43WNGaB7O9Ja/4E.kRtTWPbxzeLF.'),
(6, 'rameshpilli1428@gmail.com', 'dd', '$2y$10$ml1/2DYlwdMKKHoo9Na5yuD7X9q.dcxQ5fkrpzK1JHsMu5it4QCNq'),
(7, 'ravi@gmail.com', 'ravi', '$2y$10$/jEL2Ig7VEmejIkvpQ2q.emOXzARfasssK0218z0C67OoGnaiPV2i'),
(8, 'ravi@gmail.com', 'ravi', '$2y$10$0LhGahFvCvWIK28oCpWX8.K42aD0Hmd3tihbsAWVLrBhlWsScQmcS'),
(9, 'aasdasds@gmail.com', 'qq', '$2y$10$TthbWFBvd.CVS5kmd9R1e.anNMQb6bwBf8iENi/UeYY8p4tqV/ndG'),
(10, 'rameshpilli1428@gmail.com', 'bb', '$2y$10$4n0Bpe0dvrqrhA1fRl5/hOcaKHjQvx2zsNi8WIJALx4jVR4UIOwd2'),
(11, 'sdsf@gmail.com', 'oo', '$2y$10$yUqYNlREkA.hJRynwdlCT.crEiaYnp4gOn.m4TcNkDmkyE.IAlbSu'),
(12, 'rameshpilli1428@gmail.com', 'jj', '$2y$10$lTTCSern.G7yjIBIJ7dwzeQArsli3xelG7fvDy/XT6Zv/T7rEdyfa'),
(13, 'rameshpilli1428@gmail.com', 'ppp', 'pppppp'),
(14, 'rameshpilli1428@gmail.com', 'ppp', '$2y$10$FLlBFQKHD5aBe7smhsVSYuyNTSyqgZir1O.kyfxCuFpvAq0O8bwQG'),
(15, 'rameshpilli1428@gmail.com', 'mmmm', '$2y$10$5wQgcn0JR7ZGx5q5ZdhxBe6tnGEeO8WevqO6HFawlX6YDBrFJnmnW'),
(16, 'rameshpilli1428@gmail.com', 'll', '$2y$10$fV09Qr/OCQqa6kEpXV4vHOz9.HGpJnHgCqfAfhMFwYgYZ3nA3O8o6'),
(17, 'zetr@gmail.com', 'zz', '$2y$10$xIkYKjNauwsXzQHxcF862O.izgcrcXODmWSWX4ldkbW.LxCJ879li'),
(18, 'zetr@gmail.com', 'zz', '$2y$10$Z5JNxI./a4nR4dUv/uhhhuvyiFH9P6/texlZfsJoDtjYAEQAT7pWa'),
(20, 'zetr@gmail.com', 'nagesh', '$2y$10$ipbPuTE2A.w0EIkWWpQRIuTsPwSC.v7XUGj/XIgYfRKwUrM3eLdMu'),
(21, 'zetr@gmail.com', 'vv', '$2y$10$dQMoXaFS9ZRQFHrPaVgmGu8IW4Bqh6fm3hWoFVofycQ6GN3akHL42'),
(22, 'zetr@gmail.com', 'vv', '$2y$10$/iURy1s8Cr1ZcD/WUDKZIO/yojVtBCJ9OFCRArEOtgeCsZH67hOEm'),
(23, 'zetr@gmail.com', 'vv', '$2y$10$91yZJ4KV80eQhNJEqSI0T.BLBiZuGIMkpcYaqQOskNV.FqXClqILy'),
(24, 'zetr@gmail.com', 'qq', '$2y$10$e.aymn8UADvrXxRND5t3M.rgoV.ETTxg0hGglgrzSsa/zlfMK24v6'),
(25, 'vdsgvdsfds@gmail.com', 'yy', '$2y$10$iMTqxeogJpr9Zm8s/8NCXeN5XBUotFN.fqIpKG4jLyEO.Zyx0yH1m'),
(26, 'nagesh@gmail.com', 'nagesh123', '$2y$10$Ev1YKugGBMdoINTmuD8tjeDXfIe.w9PEzhF81jAIynSjn.21cvXY2'),
(27, 'nage@gmail.com', 'nani123', '$2y$10$cAEDSH/hqGgb9XZqNa4DUemv24svuXp.ql5brjkEkLjcbt/7wnGvS'),
(28, 'rameshpilli1428@gmail.com', 'aa', '$2y$10$hwn8/cbtDuuuyaqP3Z8Mb.AsW81ndrTiPBHhgt0u.e/KqEN9T616i'),
(29, 'rameshpilli1428@gmail.com', 'aaa', '$2y$10$TUkAyt1Ar/ZJYE9X2S8mEuRF8t6BPbnUV80etoYlYaAkw9kSiZkMW'),
(30, 'zetr@gmail.com', 'qq', '$2y$10$wUExHpiDfNuoAPQcdJxCjuNdbkJ.b2XkIG17MfY9XC0gpSGl7WhK2'),
(31, 'jhvgjgvjgv@gmail.com', 'pop', '$2y$10$JnP2lfgnaZQ7s/e9o9.1P.NYWLD5aeXPEce64RmeyAxd5j5GcAxg.'),
(32, 'rameshpilli1428@gmail.com', 'ww', '$2y$10$pteda3VzthaH38As83eRuemE43Gv7tig0NdEUduoDOY2ZJB4n8.DO'),
(33, 'rameshpilli1428@gmail.com', 'ww', '$2y$10$IQ5Z4y06.OG1FQqCPe6xIuoe1kXOWmJVk1FmBIs0ixO1XhWMPtpgy'),
(34, 'etahabfd@gmail.com', 'ee', '$2y$10$PAmIUHpIS9.0stsaDy065OeZ36vgMyXrwZgOdpWV4BFHbRIL96peq'),
(35, 'etahabfd@gmail.com', 'aqa', '$2y$10$xeG1yVIAmpg6G0wG4WSHEeJ1KtA3cuWvMSsLAQg2ZYJR0rzR2pCli'),
(36, 'rameshpilli1428@gmail.com', 'nagesh', '$2y$10$r5cltnN89kbhYgpsQP9VaeA/bydmRPgQfiNWAF.Pp.DNbKs4RWoRO'),
(37, 'rameshpilli1428@gmail.com', 'lol', '$2y$10$FpFfx.94oOSzBvDuhBGRouumwwAb1SudvvK68uTIErsa1SRDZ6EBi'),
(38, 'rameshpilli1428@gmail.com', 'ramesh', '$2y$10$1rS79kIRaLLt6AzUHFqbLuOthBzO3Xk9dWWw6DZatUMYrGHmo83iK'),
(39, 'rameshpilli1428@gmail.com', 'ramesh', '$2y$10$6bShylAlQ2dYJk54EslEVuXyOzS1JTBk9gubpvfM.h5ceZ8TITvHi'),
(40, 'rameshpilli14@gmail.com', 'ramesh', '$2y$10$Z4Sf6q0sNslL6vl8Gs8UqujPK26yvdZdDLXpelKXboAqWd8DQko1i'),
(41, 'bhavicreations2022@gmail.com', 'rameshpilli', '$2y$10$ZLvVqa9OyyG0rVOGDCRobeYQI6wq1y0qDNt6geepOYVLQAvg7bT4a'),
(42, 'wefew@gmail.com', 'rameshpilli', '$2y$10$lHEKQ6VKFbSWBuEB9xeFxeFKAPXX82ieVgx/vYCHW6L3YnIADXuje');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
