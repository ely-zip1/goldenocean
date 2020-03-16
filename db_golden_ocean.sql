-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2020 at 07:23 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_golden_ocean`
--

-- --------------------------------------------------------

--
-- Table structure for table `td_account_type`
--

CREATE TABLE `td_account_type` (
  `id` int(11) NOT NULL,
  `account_type` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `td_account_type`
--

INSERT INTO `td_account_type` (`id`, `account_type`) VALUES
(1, 'administrator'),
(2, 'mere user'),
(3, 'root');

-- --------------------------------------------------------

--
-- Table structure for table `td_banks`
--

CREATE TABLE `td_banks` (
  `id` int(11) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `account_name` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `member_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `td_btc`
--

CREATE TABLE `td_btc` (
  `id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `member_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `td_deposits`
--

CREATE TABLE `td_deposits` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `date_approved` datetime DEFAULT NULL,
  `amount` decimal(10,0) NOT NULL,
  `deposit_options_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `is_pending` tinyint(1) NOT NULL,
  `is_expired` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `td_deposit_options`
--

CREATE TABLE `td_deposit_options` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `account` varchar(255) NOT NULL,
  `rule` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `td_deposit_options`
--

INSERT INTO `td_deposit_options` (`id`, `name`, `account`, `rule`) VALUES
(1, 'Bitcoin', '1MsR76wjdzqPV7KNHMBD2H1mVWoy5rdL8T', ''),
(2, 'Ethereum', '0x5658440dCE0482f0BB88Aad75D70f0E36cAe9bb3', ''),
(3, 'Bitcoin Cash', 'rjwkmu0n7sj2khj3dnk6ujlzjqkcnw7uqtgmef4ts', ''),
(4, 'GCash', '09677737515', 'minimim of P2,500 max P25,000'),
(5, 'Paypal', 'turkizoilphilippines@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `td_gcash`
--

CREATE TABLE `td_gcash` (
  `id` int(11) NOT NULL,
  `phone_number` varchar(200) NOT NULL,
  `member_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `td_members`
--

CREATE TABLE `td_members` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `referral_code_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `password` varchar(255) NOT NULL,
  `account_type_id` int(11) NOT NULL DEFAULT 2,
  `contact_number` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `td_packages`
--

CREATE TABLE `td_packages` (
  `id` int(11) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `daily_rate` float NOT NULL,
  `minimum_amount` float NOT NULL,
  `maximum_amount` float NOT NULL,
  `duration_in_days` int(11) NOT NULL,
  `expected_profit` decimal(10,0) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `td_referrals`
--

CREATE TABLE `td_referrals` (
  `id` int(11) NOT NULL,
  `referrer_id` int(11) NOT NULL,
  `referee_id` int(11) NOT NULL,
  `referral_bonus` decimal(10,0) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `td_referral_bonus`
--

CREATE TABLE `td_referral_bonus` (
  `id` int(11) NOT NULL,
  `deposit_id` int(11) NOT NULL,
  `referrer_id` int(11) NOT NULL,
  `amount` decimal(10,5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `td_referral_codes`
--

CREATE TABLE `td_referral_codes` (
  `id` int(11) NOT NULL,
  `code` varchar(10) NOT NULL,
  `is_taken` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `td_remittance`
--

CREATE TABLE `td_remittance` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` int(12) NOT NULL,
  `remittance_center` varchar(255) NOT NULL,
  `member_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `td_withdrawals`
--

CREATE TABLE `td_withdrawals` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `date_approved` datetime NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `payment_method_id` int(11) NOT NULL,
  `is_pending` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `td_withdrawal_mode`
--

CREATE TABLE `td_withdrawal_mode` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `td_withdrawal_mode`
--

INSERT INTO `td_withdrawal_mode` (`id`, `description`) VALUES
(1, 'bitcoin'),
(2, 'gcash'),
(3, 'bank'),
(4, 'remittance');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `td_account_type`
--
ALTER TABLE `td_account_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `td_banks`
--
ALTER TABLE `td_banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `td_btc`
--
ALTER TABLE `td_btc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `td_deposits`
--
ALTER TABLE `td_deposits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `td_deposit_options`
--
ALTER TABLE `td_deposit_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `td_gcash`
--
ALTER TABLE `td_gcash`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `td_members`
--
ALTER TABLE `td_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `td_packages`
--
ALTER TABLE `td_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `td_referrals`
--
ALTER TABLE `td_referrals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `td_referral_bonus`
--
ALTER TABLE `td_referral_bonus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `td_referral_codes`
--
ALTER TABLE `td_referral_codes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `td_remittance`
--
ALTER TABLE `td_remittance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `td_withdrawals`
--
ALTER TABLE `td_withdrawals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `td_withdrawal_mode`
--
ALTER TABLE `td_withdrawal_mode`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `td_account_type`
--
ALTER TABLE `td_account_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `td_banks`
--
ALTER TABLE `td_banks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `td_btc`
--
ALTER TABLE `td_btc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `td_deposits`
--
ALTER TABLE `td_deposits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `td_deposit_options`
--
ALTER TABLE `td_deposit_options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `td_gcash`
--
ALTER TABLE `td_gcash`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `td_members`
--
ALTER TABLE `td_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `td_packages`
--
ALTER TABLE `td_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `td_referrals`
--
ALTER TABLE `td_referrals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `td_referral_bonus`
--
ALTER TABLE `td_referral_bonus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `td_referral_codes`
--
ALTER TABLE `td_referral_codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `td_remittance`
--
ALTER TABLE `td_remittance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `td_withdrawals`
--
ALTER TABLE `td_withdrawals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `td_withdrawal_mode`
--
ALTER TABLE `td_withdrawal_mode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
