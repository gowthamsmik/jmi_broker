-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2023 at 05:41 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digitalwebtestde_jmi_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `question` longtext NOT NULL,
  `answer` longtext NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `type`) VALUES
(1, 'What is the procedure for opening an account with JMI?', 'Two Ways to Open Your JMI Brokers trading Account <br> <br>\r\nThe fastest and easiest account opening method available. Complete your application online. (Recommended)\r\n<br><br>\r\nOpen your Real Account (Documents Required) : <br>\r\n1. Download the Customer Account Agreement. <br>\r\n2. Read complete and sign the Agreement, ensuring you have fully understood all terms and conditions. <br>\r\n3. Please send the following pages either by fax +971 26594 258 Or scan the documents and email them to support@jmibrokers.com Pages 3, 4,5, 6,7,10, 19 and 24 from the customer account agreement For Individual accounts you need to enclose a clear copy of your valid passport and a utility bill (ex. telephone or electricity) as proof of residence. <br>\r\n4, When we receive the requested documents we will check your applications, once accepted our staff will set up an account for you and they will send you a confirmation letter containing your username and your password , you must sign it and send it either by fax +971 26594 258 or scan it and email to support@jmibrokers.com  <br>\r\n5. Once we receive the signed confirmation letter your account will be ready and you can wire the Funds to our Bank Account.', 'general'),
(2, 'WHEN CAN I START TRADING?', '1. Upon receiving your application, our compliance department checks and validates it for approval. The approval and set up process required approx. 2 business days for Individual Accounts and approx. 3 days for Corporate Accounts to be completed. <br>\r\n2. Once approved, our Back Office will then set up your account and contact you with your Account Number (login and password) and wiring instructions to fund your account. <br>\r\n3. Before you can begin trading, you will need to fund your Trading Account by wiring payment to our bank with the requisite funds. Third party transfers are not acceptable. Learn how to fund your account. <br>\r\n4. Once we have received your wire transfer, we will immediately credit your Trading Account. This process may take up to 2-3 days depending on how long the wire transfer takes. <br>\r\n5. You can start trading as soon as your Trading Account has been credited.\r\n', 'general'),
(3, 'How do I transfer my funds?', 'JMI Brokers can only accept funds that have been wired from an account that carries the name of the client. In conformity with Anti-Money laundering laws', 'general'),
(4, 'Can I transfer funds from my trading account to another client trading account?', 'No, it prevents the transfer of funds between different clients accounts , it also prevents the conversion of any third party .', 'general'),
(5, 'Is it possible to open more than one account with the JMI?', 'Yes , in fact you can open several sub-accounts belonging to the main your account , and open a sub account , simply print and fill the sub-account application form and send it to us via fax or e-mail .', 'general'),
(6, 'Are you managing money ?', 'JMI Brokers only excutes online service , we do not provide account management service .', 'other'),
(7, 'Is documents to open the account with JMI Brokers available in different languages â€‹â€‹?', 'At present , the model account agreement is only available in English , this service will be available soon in German , Spanish , Portuguese , Italian, Russian , Chinese , Japanese , and Arabic.', 'other'),
(8, 'Are you take any fee or commission when you open an account with JMI?', 'JMI does not charge any commission at the moment', 'other'),
(9, 'Why should I provide you with documented with a copy of my passport?', 'This is a control measure required by the Anti-Money Laundering Authority , so as to ensure make sure the person who wants to open an account and seriousness in it.', 'other'),
(10, 'Why should I provide you with documented with a copy of my passport?', 'This is a control measure required by the Anti-Money Laundering Authority , so as to ensure make sure the person who wants to open an account and seriousness in it.', 'contact'),
(11, 'Why should I provide you with documented with a copy of my passport?', 'This is a control measure required by the Anti-Money Laundering Authority , so as to ensure make sure the person who wants to open an account and seriousness in it.', 'contact'),
(12, 'Why should I provide you with documented with a copy of my passport?', 'This is a control measure required by the Anti-Money Laundering Authority , so as to ensure make sure the person who wants to open an account and seriousness in it.', 'contact'),
(13, 'Why should I provide you with documented with a copy of my passport?', 'This is a control measure required by the Anti-Money Laundering Authority , so as to ensure make sure the person who wants to open an account and seriousness in it.', 'contact'),
(14, 'Why should I provide you with documented with a copy of my passport?', 'This is a control measure required by the Anti Money Laundering Authority , so as to ensure make sure the person who wants to open an account and seriousness in it.', 'contact'),
(15, 'Why should I provide you with documented with a copy of my passport?', 'This is a control measure required by the Anti-Money Laundering Authority , so as to ensure make sure the person who wants to open an account and seriousness in it.', 'refund'),
(16, 'Why should I provide you with documented with a copy of my passport?', 'This is a control measure required by the Anti Money Laundering Authority , so as to ensure make sure the person who wants to open an account and seriousness in it.', 'refund'),
(17, 'Can I withdraw my money whenever you want it?', 'Yeah! Just send a request to withdraw money to us by fax , and we will transfer the funds to your bank account .', 'refund'),
(18, 'Is JMI Brokers entry and exit strategies of the deal accepted in a short time (Scalping)?', 'JMI does not accept (Scalping) strategies.', 'refund'),
(19, 'Does JMI Brokers accept arbitrage strategies (arbitrage)?', 'JMI does not accept arbitrage strategies (arbitrage) and any account uses these strategies will lead to a suspension of the account .', 'refund'),
(20, 'Does JMI Brokers accept High Frequency Trading?', 'JMI does not accept High Frequency Trading and any account uses these strategies will lead to a suspension of the account .', 'other'),
(21, 'Are there any guarantees on your part with respect to the pending orders profit or loss orders ?', 'Yes , your will take it into account when the price referred to before, except when the market opened after the weekend , or any other holiday , or in the period of the usual market break , then you will take your order at the opening price .', 'other'),
(22, 'What is the minimum to open an account with JMI?', '\r\nThe minimum to open an account with JMI Brokers is US $ 100 .', 'other'),
(23, 'Can I trade deals with small JMI Brokers procedure ?', 'Yes , the JMI Brokers allows small trading transactions for all accounts . The minimum is 0.1 points, and the deal ( $ 10,000 ) .', 'services'),
(24, 'Does the JMI Brokers to impose interest on the outstanding balance of my account ?', 'No, there is not any interest on your account.', 'services'),
(25, 'What is the policy of \" do not save the margin \" ?', 'Intended not save our own margin policy that our clients can go below the margin requirements and without the JMI Brokers to close their positions. This week, these centers can fluctuate and do JMI Brokers without taking any action on its part, we only ask that you keep the margin requirements for accounts of more than $ 500,000 by Friday evening. The Do not save the margin policy also means we do not make a margin call as we do not close the centers automatically if you go below the margin requirements of your positions, however, if your stock has reached to zero you should stop and your positions will be closed. The implementation of the suspension will be only when it is required of the abandoned stocks in less than 1% margin account level.', 'services'),
(26, 'When it became without the margin ?', 'When the margin level up to less than 1% or less from scratch .', 'services'),
(27, 'In the event I covered my position on a certain pair , will my margin will be zero on this pair ?', 'Yeah! When covering the center will turn your margin to zero on this pair .', 'payments'),
(28, 'Does the platform allow the coverage ?', 'Yes ( you can use long and short positions of the same pair )', 'services'),
(29, 'Do you increase margins in volatile market?', 'Yes, that is possible according to our liquidity providers margin policy.', 'payments'),
(30, 'Do you increase margins in volatile market?', 'Yes, that is possible according to our liquidity providers margin policy.', 'other'),
(31, 'Do you increase margins in volatile market?', 'Yes, that is possible according to our liquidity providers margin policy.', 'payments'),
(32, 'Do you increase margins in volatile market?', 'Yes, that is possible according to our liquidity providers margin policy.', 'payments'),
(33, 'Do you increase margins in volatile market?', 'Yes, that is possible according to our liquidity providers margin policy.', 'payments'),
(34, 'Do you increase margins in volatile market?', 'Yes, that is possible according to our liquidity providers margin policy.', 'payments'),
(35, 'Do you increase margins in volatile market?', 'Yes, that is possible according to our liquidity providers margin policy.', 'payments'),
(36, 'Do you increase margins in volatile market?', 'Yes, that is possible according to our liquidity providers margin policy.', 'payments'),
(37, 'What is the leverage provided by JMI Brokers ratio ?', 'Accounts of up to $ 4,000 offer leverage of 1: 500 , which accounts for up to $ 10,000 offer leverage of 1 : 200 , and for accounts in excess of $ 10,000 be leverage by 1 : 100 .', 'payments'),
(38, 'What is the leverage provided by JMI Brokers ratio ?', 'Accounts of up to $ 4,000 offer leverage of 1: 500 , which accounts for up to $ 10,000 offer leverage of 1 : 200 , and for accounts in excess of $ 10,000 be leverage by 1 : 100 .', 'payments'),
(39, 'What is the leverage provided by JMI Brokers ratio ?', 'Accounts of up to $ 4,000 offer leverage of 1: 500 , which accounts for up to $ 10,000 offer leverage of 1 : 200 , and for accounts in excess of $ 10,000 be leverage by 1 : 100 .', 'general');

-- --------------------------------------------------------

--
-- Table structure for table `fundamental_analysis`
--

CREATE TABLE `fundamental_analysis` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `posted_by` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `posted_on` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fundamental_analysis`
--

INSERT INTO `fundamental_analysis` (`id`, `heading`, `description`, `posted_by`, `image`, `posted_on`) VALUES
(1, 'Oil', 'Oil continues its gains despite the increase in US inventories\r\nOil prices rose during trading today, Wednesday, continuing their gains, in light of optimism about Chinese demand, despite the increase in US inventories.\r\n\r\n\r\nThe government agency revealed that oil stocks in America increased by 2.4 million barrels to 455.1 million barrels, while expectations indicated an increase of two million barrels.\r\n\r\n\r\nGasoline stocks rose by five million barrels to 239.6 million barrels, while distillate stocks rose by about 2.9 million barrels to 120.5 million barrels.\r\n\r\n\r\nIn terms of transactions, US NYMEX crude futures for March delivery rose by 20:34 GMT, by 1.7%, to $78.4 a barrel.\r\n\r\n\r\nBrent crude futures for April delivery rose 1.7% to $85.1 a barrel.\r\n\r\n\r\nWhat\'s next for oil prices?\r\n\r\n\r\nIt is expected that oil prices will continue to rise in the coming period, especially after expectations made by the International Energy Agency, led by its director, Fatih Birol, who predicted that China’s reopening of its economy would revive demand, and therefore, producers would be forced to reconsider their production policies.', '', 'uploads/1697954136_image.jpg', '1697929842'),
(2, 'GOLD', 'Gold is rising for the fourth consecutive day based on the decline in the US dollar\r\nGold prices rose in the European market on Thursday, to continue their gains for the fourth day in a row, with recovery operations continuing from the lowest level in five weeks, and based on the decline in US dollar levels against a basket of global currencies.\r\n\r\n \r\n\r\nIn contrast to corrections and profit-taking, US currency levels are declining, following less hawkish statements by Federal Reserve Chairman Jerome Powell at the Economic Club in Washington, which slightly reduced the pricing of futures contracts for the possibility of raising interest rates next March.\r\n\r\n \r\n\r\nGold prices today\r\n\r\nGold metal prices rose by more than 0.5% to $1,885.46, from the opening level of trading at $1,975.58, and recorded the lowest level at $1,972.04.\r\n\r\n \r\n\r\nYesterday, gold prices increased by 0.1%, the third consecutive daily gain, with recovery operations continuing from the lowest level in five weeks, at $1,860.17 an ounce.\r\n\r\n \r\n\r\nU.S. dollar\r\n\r\nOn Thursday, the dollar index fell by about 0.5%, moving away from its highest level in a month at 103.96 points, reflecting the decline in the levels of the US currency against a basket of major and minor currencies, which is in favor of the rise in the prices of gold and other metals priced in US dollars.\r\n\r\n \r\n\r\nFederal Reserve Chairman Jerome Powell reiterated at the Economic Club of Washington on Tuesday that inflation is beginning to decline, but he warned that last week\'s jobs report shows why the battle against inflation will take so long, and that interest rates may need to move higher than expected.\r\n\r\n \r\n\r\nFederal interest\r\n\r\nBased on Powell\'s comments and other comments by some Federal Reserve officials, the futures contract pricing for the possibility of raising US interest rates by 25 basis points in next March decreased from about 94% to 90%.\r\n\r\n \r\n\r\nIn order to re-price those contracts, traders are awaiting next week the release of key inflation data in the United States during January, which, if it shows a slowdown in prices for the seventh month in a row, will lower the pricing of contracts above.\r\n\r\n \r\n\r\nSPDR Fund\r\n\r\nGold holdings of the SPDR Gold Trust, the largest global index fund backed by gold, increased yesterday by about 0.28 metric tons, in the second consecutive daily increase, bringing the total to 921.1 metric tons, which is the highest level since last October 28.\r\n\r\n \r\n\r\nWill gold prices rise above the $1,900 mark again?\r\n\r\nIt is not excluded that gold prices will rise above the $1,900 barrier, especially if the decline in the dollar and US bond yields continues, following the less aggressive statements of Federal Reserve Chairman Jerome Powell.', '', 'uploads/1697954149_image.jpg', '1697930769'),
(3, 'USD', 'The dollar is heading lower amid corporate earnings flow\r\nThe dollar declined against most of the major currencies during trading today, Wednesday, amid the continued issuance of corporate business results and the evaluation of the statements of Federal Reserve Chairman Jerome Powell.\r\n\r\n\r\nIn the same statements he made yesterday, Powell confirmed that the jobs report was stronger than expectations for January.\r\n\r\n\r\nHe reported that the message from the Monetary Policy Committee at last week\'s meeting is that the slowdown in inflation has already begun, but there is still a long way to go.\r\n\r\n\r\nIn this regard, the head of the Federal Reserve believes that the US central bank may be forced to make more interest-raising decisions\r\n\r\n\r\nThe Federal Reserve announced in a decision on Wednesday that it will raise the interest rate by 25 basis points to 4.75% from 4.50%.\r\n\r\n\r\nThe Fed\'s slowdown in the rate hike came in light of the emergence of signs of slowing inflationary pressures in the US economy\r\n\r\n\r\nIn the past few hours, the results of the business of Uber Technologies were released, through which it recorded strong revenues\r\n\r\n\r\nIn terms of trading, the dollar index fell by 19:09 GMT by 0.1% to 103.3 points, recording the highest level at 103.4 points and the lowest level at 103.00 points.', '', 'uploads/1697954173_image.jpg', '1697954252'),
(4, 'EUR/USD', 'The euro rises before the economic outlook report in Europe\r\nThe euro rose in the European market on Thursday against a basket of global currencies, as part of the recovery process from its lowest level in four weeks against the US dollar, on its way to achieving its first gain in the last six days, before the quarterly report of the European Commission, which includes economic expectations in the eurozone. for two years.\r\n\r\n \r\n\r\nThe strong expectations will help the single currency to continue its recovery, and enhance the possibility of the European Central Bank continuing to raise interest rates at a significant pace, after the expected increase in next March by about 50 basis points.\r\n\r\n \r\n\r\nEuro exchange rate today\r\n\r\nThe euro rose against the dollar by about 0.4% to $1.0750, from the opening price of trading at $1.0710, and recorded the lowest level today at $1.0706.\r\n\r\n \r\n\r\nThe euro ended yesterday\'s trading down by 0.15% against the dollar, its fifth daily loss in a row, and recorded the previous day its lowest level in four weeks at $1.0669 due to European interest speculation.\r\n\r\n \r\n\r\nEuropean interest\r\n\r\nThe meeting of the European Central Bank last week increased speculation about the bank\'s halt in raising European interest rates at a large pace, after the increase he referred to in March next by about 50 basis points.\r\n\r\n \r\n\r\nThe ECB has been firm in stressing that interest rates will certainly rise further at the March meeting and are likely to rise again in the following months, albeit in as yet unspecified increments.\r\n\r\n \r\n\r\nEconomic forecasts\r\n\r\nBy 10:00 GMT, the European Commission publishes its quarterly economic outlook report, which includes forecasts for growth and inflation in Europe over the years 2023 and 2024.\r\n\r\n \r\n\r\nA strong economic outlook in the eurozone could allow the European Central Bank to raise interest rates more aggressively as it tackles high inflation in the old continent.', '', 'uploads/1697954302_image.jpg', '1697954322'),
(5, 'GBP/USD', ' \r\n\r\nThe sterling and the franc are at the top of the list of the most valuable currencies for these reasons!\r\n\r\n \r\n\r\nThe pound sterling recorded clear gains during the currency market trading today, Wednesday, to top the list of winning currencies by an estimated rate of 1.89%, benefiting from some positive developments that boosted the demand for sterling compared to some other major currencies, led by the mini-ministerial reshuffle in Britain.\r\n\r\nBritish Prime Minister Rishi Sunak has made minor cabinet reshuffles, including dismantling two ministries, to better fit his pledges to stimulate the economy and improve the Conservative Party\'s popularity ahead of elections expected next year. Sunak also established a new Ministry of Energy Security, as the British Prime Minister is trying to steer the economy through a long period of inflation that exceeded 10% and stagnation, a situation that was exacerbated by the increase in the cost of energy, and these amendments reinforced optimism in the markets about the British economy and the government\'s ability to deal with Difficult conditions, which led to sterling gains against other currencies.', '', 'uploads/1697954302_image.jpg', '1697954322');

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`id`, `f_name`, `l_name`, `email`, `message`, `created_at`) VALUES
(1, 'test', 'dasd', 'xzczxcxzc@gmail.com', 'as das. qwe qwe', '2023-10-13 09:14:08');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `posted_by` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `posted_on` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `heading`, `description`, `posted_by`, `image`, `posted_on`) VALUES
(1, 'What is Forex Trading and How does it Work ', 'What is Forex Trading and How does it Work111What is Forex Trading and How does it Work111What is Forex Trading and How does it Work111What is Forex Trading and How does it Work111', 'Marisha Movsesyan', 'uploads/1697954136_image.jpg', '1697929842'),
(2, 'What is Forex Trading and How does it Work', 'What is Forex Trading and How does it Work111What is Forex Trading and How does it Work111What is Forex Trading and How does it Work111What is Forex Trading and How does it Work111', 'Marisha Movsesyan', 'uploads/1697954149_image.jpg', '1697930769'),
(3, 'What is Forex Trading and How does it Work', 'What is Forex Trading and How does it Work111What is Forex Trading and How does it Work111What is Forex Trading and How does it Work111What is Forex Trading and How does it Work111', 'Marisha Movsesyan', 'uploads/1697954173_image.jpg', '1697954252'),
(4, 'What is Forex Trading and How does it Work', 'What is Forex Trading and How does it Work111What is Forex Trading and How does it Work111What is Forex Trading and How does it Work111What is Forex Trading and How does it Work111', 'Marisha Movsesyan', 'uploads/1697954302_image.jpg', '1697954322');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `tag_line` varchar(255) NOT NULL,
  `discount_line` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `price` float(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `name`, `tag_line`, `discount_line`, `description`, `price`) VALUES
(1, 'MINIMUM FUNDING', 'Benefit from industry-leading entry prices', 'FIXED SPREAD ACCOUNT', '1 PIP fixed spread\r\nUp To 1:500 Leverage\r\n100$ Minimum funding\r\nUSD is the main currency\r\nIslamic account - No Swap\r\nMinimum lot 0.01\r\nExpert advisor\r\nHeading is available\r\n4 Digits\r\nScalping is not available', 100.00),
(2, 'MINIMUM FUNDING 3', 'Benefit from industry-leading entry prices', 'FIXED SPREAD ACCOUNT', '1 PIP fixed spread\r\nUp To 1:500 Leverage\r\n100$ Minimum funding\r\nUSD is the main currency\r\nIslamic account - No Swap\r\nMinimum lot 0.01\r\nExpert advisor\r\nHeading is available\r\n4 Digits\r\nScalping is not available', 125.00),
(3, 'MINIMUM FUNDING', 'Benefit from industry-leading entry prices', 'FIXED SPREAD ACCOUNT', '1 PIP fixed spread\r\nUp To 1:500 Leverage\r\n100$ Minimum funding\r\nUSD is the main currency\r\nIslamic account - No Swap\r\nMinimum lot 0.01\r\nExpert advisor\r\nHeading is available\r\n4 Digits\r\nScalping is not available', 150.00),
(4, 'MINIMUM FUNDING', 'Benefit from industry-leading entry prices', 'FIXED SPREAD ACCOUNT', '1 PIP fixed spread\r\nUp To 1:500 Leverage\r\n100$ Minimum funding\r\nUSD is the main currency\r\nIslamic account - No Swap\r\nMinimum lot 0.01\r\nExpert advisor\r\nHeading is available\r\n4 Digits\r\nScalping is not available', 200.00);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` int(11) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `page_slug` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `page_name`, `page_slug`, `is_active`) VALUES
(1, 'Home', '/', 1),
(2, 'About', 'about-us.php', 1),
(3, 'Licenses and\r\nRegulations', 'licenses.php', 1),
(4, 'Brokers\r\nIntroduction', 'brokers.php', 1),
(5, 'CFD Commodities', 'commodities.php', 1),
(6, 'Meta Trader', 'metatrader.php', 1),
(7, 'MT4 Platform Overview', 'mt4-platform-overview.php', 1),
(8, 'Forex Platform', 'forex-platform.php', 1),
(9, 'Iphone Ipad', 'iphone-ipad.php', 1),
(10, 'Android', 'android.php', 1),
(11, 'Become Our Partner', 'how-to-become.php', 1),
(12, 'Why To Make Business With JMI', 'business.php', 1),
(13, 'Career', 'career.php', 1),
(14, 'Money Manager Program', 'money-manager.php', 1),
(15, 'How To Become A Money Mangers', 'how-to-become-money-managers.php', 1),
(16, 'White Labels', 'white-label.php', 1),
(17, 'Economic Calendar', 'calendar.php', 1),
(18, 'Pip Calculator', 'pip-calculator.php', 1),
(19, 'Fundamental Analysis', 'dailyfundamental.php', 1),
(20, 'Download Files', 'download-file.php', 1),
(21, 'Complete Package', 'complete-package.php', 1),
(22, 'Contact US', 'contact-us.php', 1),
(23, 'Become Our\r\nPartner', 'partnership-programs.php', 1),
(24, 'Pip', 'pip.php', 1),
(25, 'Policy', 'policy.php', 1),
(26, 'Term', 'term.php', 1),
(27, 'FAQ\'s', 'faq.php', 1),
(28, 'Stock', 'stock.php', 1),
(29, 'Stock CFDs', 'stock-cfds.php', 1),
(30, 'Precious Metals', 'precious-metal.php', 1),
(31, 'Forex', 'forex.php', 1),
(32, 'Forex Trading', 'forex-trading.php', 1),
(33, 'Future', 'future.php', 1),
(34, 'Future OTC Energies', 'future-otc-energies.php', 1);

-- --------------------------------------------------------

--
-- Table structure for table `page_meta`
--

CREATE TABLE `page_meta` (
  `id` int(11) NOT NULL,
  `field_name` varchar(255) NOT NULL,
  `field_value` longtext NOT NULL,
  `field_type` varchar(255) NOT NULL,
  `page_id` int(11) NOT NULL,
  `group_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page_meta`
--

INSERT INTO `page_meta` (`id`, `field_name`, `field_value`, `field_type`, `page_id`, `group_name`) VALUES
(1, 'Banner Background', 'uploads/1695037733_image.jpg', 'file', 1, 'Banner'),
(2, 'Banner Image', 'uploads/1695037742_image.png', 'file', 1, 'Banner'),
(3, 'Banner Heading 1', 'For deposits up to', 'text', 1, 'Banner'),
(4, 'Banner Heading 2', '500,000', 'text', 1, 'Banner'),
(5, 'Banner Description', 'JMI Brokers ensures clients with a full advance and guaranteed protection through an insurance policy.', 'textarea', 1, 'Banner'),
(6, 'Banner Button Text', 'Demo Account', 'text', 1, 'Banner'),
(7, 'Banner Button URL', '#', 'text', 1, 'Banner'),
(9, 'Image', 'uploads/1695037747_image.png', 'file', 1, 'Analytics'),
(10, 'Heading 1', 'Bitcon', 'text', 1, 'Analytics'),
(11, 'Heading 2', 'BTC', 'text', 1, 'Analytics'),
(13, 'Price Heading 1', 'Last Price', 'text', 1, 'Analytics'),
(14, 'Price Amount 1', '$ 623.78', 'text', 1, 'Analytics'),
(15, 'Price Heading 2', 'Last Price', 'text', 1, 'Analytics'),
(16, 'Price Amount 2', '$ 623.78', 'text', 1, 'Analytics'),
(17, 'Price Heading 3', 'Last Price', 'text', 1, 'Analytics'),
(18, 'Price Chart', 'uploads/1695037861_image.png', 'file', 1, 'Analytics'),
(19, 'Banner Button Text', 'Lets Get Started', 'text', 1, 'Analytics'),
(20, 'Banner Button URL', '#', 'text', 1, 'Analytics'),
(21, 'Heading', 'Full Range Of Investment Choices', 'text', 1, 'Investment Choices'),
(22, 'Description', 'Get ultra-competitive spreads and commissions across all asset classes. Receive even better rates as your volume increases.', 'text', 1, 'Investment Choices'),
(23, 'Heading 1', 'Forex, CFDs on Cryptos, Commodities and Stocks Instruments.', 'text', 1, 'Statistics'),
(24, 'Stats 1', '1000+', 'text', 1, 'Statistics'),
(26, 'Heading 2', 'Personalized Customer Support', 'text', 1, 'Statistics'),
(27, 'Stats 2', '24/7', 'text', 1, 'Statistics'),
(28, 'Heading 3', 'Cutting-Edge Trading Technology', 'text', 1, 'Statistics'),
(29, 'Stats 3', '100%', 'text', 1, 'Statistics'),
(30, 'Heading 4', 'Bonus up', 'text', 1, 'Statistics'),
(31, 'Stats 4', '$5,000', 'text', 1, 'Statistics'),
(35, 'Heading', 'Alternative Investments', 'text', 1, 'Alternative Investments'),
(36, 'Description', 'Explore diverse investment opportunities beyond traditional options with JMI Brokers. Discover alternative investments that can potentially diversify your portfolio and unlock new avenues for growth and profitability', 'text', 1, 'Alternative Investments'),
(37, 'Heading', 'Fundamental Analysis', 'text', 1, 'Fundamental Analysis'),
(38, 'Description', 'The dollar is heading lower amid corporate earnings flowThe dollar declined against most of the major currencies during trading today, Wednesday, amid the continued issuance of corporate business results and the evaluation of the statements of Federal Reserve Chairman Jerome Powell.', 'textarea', 1, 'Fundamental Analysis'),
(39, 'Gold prices Heading', 'Gold prices today', 'text', 1, 'Fundamental Analysis'),
(40, 'Gold prices Description', 'Gold metal prices rose by more than 0.5% to $1, .46, from the opening level of trading at $1,975.58, and recorded the lowest level at $1,972.04.', 'textarea', 1, 'Fundamental Analysis'),
(41, 'Gold prices Image', 'uploads/1695038026_image.png', 'file', 1, 'Fundamental Analysis'),
(42, 'US dollar Heading', 'U.S. dollar', 'text', 1, 'Fundamental Analysis'),
(43, 'US dollar Description', 'On Thursday, the dollar index fell by about 0.5%, moving away from its highest level in a month at 103.96 points, reflecting the decline in the levels of the US currency against a basket of major and minor currencies, which is in favor of the rise in the prices of gold and other metals priced in US dollars.', 'textarea', 1, 'Fundamental Analysis'),
(44, 'US dollar', 'uploads/1695040496_image.png', 'file', 1, 'Fundamental Analysis'),
(45, 'Image', 'uploads/1695038064_image.png', 'file', 1, 'Fundamental Analysis'),
(48, 'Heading', 'Social Trading', 'text', 1, 'Social Trading'),
(49, 'Description', 'Experience the power of social trading with JMI Brokers. Connect with a community of traders, follow successful strategies, and automatically replicate trades from top-performing investors. Social trading empowers you to learn, collaborate, and potentially enhance your trading results through the wisdom of the crowd', 'textarea', 1, 'Social Trading'),
(50, 'Free Copy Account Heading', 'Free Copy Account with preferred portfolio ratio', 'text', 1, 'Social Trading'),
(51, 'Free Copy Account Description', 'Gold metal prices rose by more than 0.5% to $1, .46, from the opening level of trading at $1,975.58, and recorded the lowest level at $1,972.04.', 'textarea', 1, 'Social Trading'),
(52, 'Free Copy Account Image', 'uploads/1695040509_image.png', 'file', 1, 'Social Trading'),
(53, 'Instant intertransfer Heading', 'Instant intertransfer between all your accounts .', 'text', 1, 'Social Trading'),
(54, 'Instant intertransfer Description', 'On Thursday, the dollar index fell by about 0.5%, moving away from its highest level in a month at 103.96 points, reflecting the decline in the levels of the US currency against a basket of major and minor currencies, which is in favor of the rise in the prices of gold and other metals priced in US dollars.', 'textarea', 1, 'Social Trading'),
(55, 'Instant intertransfer Image', 'uploads/1695040514_image.png', 'file', 1, 'Social Trading'),
(56, 'Image', 'uploads/1695038166_image.png', 'file', 1, 'Social Trading'),
(57, 'Heading', 'Complete Package For Every Trader', 'text', 1, 'Package'),
(58, 'Description 1', '', 'text', 1, 'Package'),
(59, 'Description 2', '', 'text', 1, 'Package'),
(60, 'Banner Button Text', 'Lets Get Started', 'text', 1, 'Package'),
(61, 'Banner Button URL', '#', 'text', 1, 'Package'),
(62, 'Heading', 'Mobile App Support Software', 'text', 1, 'Mobile App Support'),
(63, 'Description', 'Stay connected to the financial markets and seize trading opportunities directly from your mobile device with JMI Brokers\' reliable mobile app support software.', 'textarea', 1, 'Mobile App Support'),
(64, 'Image', 'uploads/1695040245_image.png', 'file', 1, 'Mobile App Support'),
(65, 'Point 1 Image', 'uploads/1695040271_image.png', 'file', 1, 'Mobile App Support'),
(66, 'Point 1 Text', 'Free account opening and 100% online.', 'text', 1, 'Mobile App Support'),
(67, 'Point 2 Image', 'uploads/1695040294_image.png', 'file', 1, 'Mobile App Support'),
(68, 'Point 2 Text', 'Free account opening and 100% online.', 'text', 1, 'Mobile App Support'),
(69, 'Point 3 Image', 'uploads/1695040298_image.png', 'file', 1, 'Mobile App Support'),
(70, 'Point 3 Text', 'Free account opening and 100% online.', 'text', 1, 'Mobile App Support'),
(71, 'Point 4 Image', 'uploads/1695040306_image.png', 'file', 1, 'Mobile App Support'),
(72, 'Point 4 Text', 'Free account opening and 100% online.', 'text', 1, 'Mobile App Support'),
(73, 'Point 5 Image', 'uploads/1695040312_image.png', 'file', 1, 'Mobile App Support'),
(74, 'Point 5 Text', 'Free account opening and 100% online.', 'text', 1, 'Mobile App Support'),
(75, 'Heading', 'FX Spread as low as', 'text', 1, 'Investment Choices Box 1'),
(76, 'Heading 2', '$0 Per Trade', 'text', 1, 'Investment Choices Box 1'),
(77, 'Small Text', '0.1 PIP', 'text', 1, 'Investment Choices Box 1'),
(78, 'Description', 'Trade 182 FX spot pairs and 140 forwards across majors, minors, exotics and metals.', 'textarea', 1, 'Investment Choices Box 1'),
(79, 'Image', 'uploads/1695040356_image.png', 'file', 1, 'Investment Choices Box 1'),
(80, 'Read More Link', '#', 'text', 1, 'Investment Choices Box 1'),
(81, 'Heading', 'Future Energies Trading', 'text', 1, 'Investment Choices Box 2'),
(82, 'Heading 2', '$0.2 Per Share', 'text', 1, 'Investment Choices Box 2'),
(83, 'Small Text', '0.1 PIP', 'text', 1, 'Investment Choices Box 2'),
(84, 'Description', 'Future (OTC) Energies traded at JMI Brokers are: Light Sweet Crude Oil, Natural Gas.\r\non US500 Go long or short on 9,000+ instruments with tight spreads & low commissions.', 'textarea', 1, 'Investment Choices Box 2'),
(85, 'Image', 'uploads/1695040450_image.png', 'file', 1, 'Investment Choices Box 2'),
(86, 'Read More Link', '#', 'text', 1, 'Investment Choices Box 2'),
(87, 'Heading', 'Commodities', 'text', 1, 'Investment Choices Box 3'),
(88, 'Heading 2', '$0.3 Per Share', 'text', 1, 'Investment Choices Box 3'),
(89, 'Small Text', '0.1 PIP', 'text', 1, 'Investment Choices Box 3'),
(90, 'Description', 'Diversify your portfolio with a wide ranges of commodities.\r\n\r\nTrade a wide range of commodities as CFDs, futures, options, spot pairs, & more.\r\non US stocks, Access 19,000+ stocks across core and emerging markets on 36 exchanges worldwide.', 'textarea', 1, 'Investment Choices Box 3'),
(91, 'Image', 'uploads/1695040444_image.png', 'file', 1, 'Investment Choices Box 3'),
(92, 'Read More Link', '#', 'text', 1, 'Investment Choices Box 3'),
(93, 'Heading', 'Stocks CFDs', 'text', 1, 'Investment Choices Box 4'),
(94, 'Heading 2', '$0.2 Per Share', 'text', 1, 'Investment Choices Box 4'),
(95, 'Small Text', '0.1 PIP', 'text', 1, 'Investment Choices Box 4'),
(96, 'Description', 'Invest in global equities.\r\n\r\non US500 Go long or short on 9,000+ instruments with tight spreads & low commissions.', 'textarea', 1, 'Investment Choices Box 4'),
(97, 'Image', 'uploads/1695040439_image.png', 'file', 1, 'Investment Choices Box 4'),
(98, 'Read More Link', '#', 'text', 1, 'Investment Choices Box 4'),
(99, 'Heading', 'Precious Metals Trading', 'text', 1, 'Investment Choices Box 5'),
(100, 'Heading 2', '$0.2 Per Share', 'text', 1, 'Investment Choices Box 5'),
(101, 'Small Text', '0.1 PIP', 'text', 1, 'Investment Choices Box 5'),
(102, 'Description', 'Trade Gold, Silver, Copper, Platinum, and Palladium against the main currencies.\r\n\r\non US stocks, Access 19,000+ stocks across core and emerging markets on 36 exchanges worldwide.', 'textarea', 1, 'Investment Choices Box 5'),
(103, 'Image', 'uploads/1695040434_image.png', 'file', 1, 'Investment Choices Box 5'),
(104, 'Read More Link', '#', 'text', 1, 'Investment Choices Box 5'),
(105, 'Heading', 'Indices Trading', 'text', 1, 'Investment Choices Box 6'),
(106, 'Heading 2', '$0.2 Per Share', 'text', 1, 'Investment Choices Box 6'),
(107, 'Small Text', '0.1 PIP', 'text', 1, 'Investment Choices Box 6'),
(108, 'Description', 'JMI Brokers offers trading in the most traded stock indices world wide The Dow Jones index, E-mini S&P 500 and E-mini NASDAQ 100.', 'textarea', 1, 'Investment Choices Box 6'),
(109, 'Image', 'uploads/1695040430_image.png', 'file', 1, 'Investment Choices Box 6'),
(110, 'Read More Link', '#', 'text', 1, 'Investment Choices Box 6'),
(111, 'Heading 5', 'DEPOSIT BONUS UP TO $5,000', 'text', 1, 'Statistics'),
(112, 'Stats 5', '20%', 'text', 1, 'Statistics'),
(113, 'Description', 'Lorem ipsum dolor sit amet consectetur. Elementum risus tempor at vivamus curabitur viverra diam nec.', 'text', 1, 'Statistics'),
(114, 'Banner Button Text', 'Lets Get Started', 'text', 1, 'Statistics'),
(115, 'Banner Button URL', '#', 'text', 1, 'Statistics'),
(116, 'Packages', '[\"1\",\"2\",\"3\"]', 'list', 1, 'Package'),
(117, 'Banner Background', 'uploads/1695037733_image.jpg', 'file', 2, 'Banner'),
(118, 'Banner Heading', 'About Us', 'text', 2, 'Banner'),
(119, 'Banner Description', 'At JMI Brokers, we are committed to your success. We strive to exceed your expectations by delivering unparalleled <br> financial services that drive your growth, protect your assets, and help you navigate the complexities of the financial world.', 'textarea', 2, 'Banner'),
(120, 'Banner Description 2', 'Join us on this <span class=\'tx-gd\'>journey and experience</span> the difference of <br> working with a leading financial services provider.', 'textarea', 2, 'Banner'),
(121, 'Banner Button Text 1', 'DEMO ACCOUNT', 'text', 2, 'Banner'),
(122, 'Banner Button URL 1', '#', 'text', 2, 'Banner'),
(123, 'Banner Button Text 2', 'Open Live Account', 'text', 2, 'Banner'),
(124, 'Banner Button URL 2', '#', 'text', 2, 'Banner'),
(125, 'Heading', 'Leading the Way in Financial Services: </br> JMI Brokers', 'text', 2, 'Leading the Way'),
(126, 'Description', 'At JMI Brokers, we are committed to providing our clients with exceptional financial services that meet their unique needs and goals. With years of experience in the industry, we have established ourselves as a trusted and reliable partner for individuals and businesses alike. Our team of dedicated professionals is driven by a passion for delivering excellence and ensuring our clients\' success in the dynamic world of finance.', 'textarea', 2, 'Leading the Way'),
(127, 'Heading', 'Vision:', 'text', 2, 'Vision'),
(128, 'Description', 'Our vision is to be the leading provider of innovative financial solutions, empowering our clients to achieve their financial objectives with confidence. We strive to stay at the forefront of industry trends and leverage cutting-edge technologies to offer exceptional services that exceed our clients\' expectations.\r\n\r\n', 'textarea', 2, 'Vision'),
(129, 'Heading', 'Mission:', 'text', 2, 'Mission'),
(130, 'Description', 'Our mission is to establish JMI Brokers LTD as the world\'s preferred online FX broker. We are committed to building a long-term relationship with all of our clients by nurturing our corporate values and strengthening trust.\r\nWe are dedicated to offering our clients the most competitive and best Market conditions and believe we can achieve the optimal trading environment, unparalleled in quality and function. Our priority is to constantly provide new advantages and seek out innovation. Doing this ensures our clients always get the best from their trading.\r\n', 'textarea', 2, 'Mission'),
(131, 'Heading 1', '99k', 'text', 2, 'Statistics'),
(132, 'Stats 1', 'Lorem ipsum dolor sit amet consectetur. Elementum risus', 'text', 2, 'Statistics'),
(133, 'Heading 2', '12%', 'text', 2, 'Statistics'),
(134, 'Stats 2', 'Lorem ipsum dolor sit amet consectetur. Elementum risus', 'text', 2, 'Statistics'),
(135, 'Heading 3', '99k', 'text', 2, 'Statistics'),
(136, 'Stats 3', 'Lorem ipsum dolor sit amet consectetur. Elementum risus', 'text', 2, 'Statistics'),
(137, 'Heading 4', '12%', 'text', 2, 'Statistics'),
(138, 'Stats 4', 'Lorem ipsum dolor sit amet consectetur. Elementum risus', 'text', 2, 'Statistics'),
(139, 'Heading 5', '99k', 'text', 2, 'Statistics'),
(140, 'Stats 5', 'Lorem ipsum dolor sit amet consectetur. Elementum risus', 'text', 2, 'Statistics'),
(141, 'Description', 'Lorem ipsum dolor sit amet consectetur. Elementum risus tempor at vivamus curabitur viverra diam nec.', 'text', 2, 'Statistics'),
(142, 'Banner Button Text', 'Lets Get Started', 'text', 2, 'Statistics'),
(143, 'Banner Button URL', '#', 'text', 2, 'Statistics'),
(144, 'Heading', 'Corporate Values:', 'text', 2, 'How It Works'),
(145, 'Description', '', 'textarea', 2, 'How It Works'),
(146, 'Image', '', 'file', 2, 'How It Works'),
(147, 'Heading 1', 'INTEGRITY', 'text', 2, 'How It Works'),
(148, 'Description 1', 'Our word is our bond. Through delivering on our promises we build a bridge of trust with our clients. This is the philosophy we instill in our professional workforce and we believe this will help drive our growth as we expand our operations in the financial services sector.', 'textarea', 2, 'How It Works'),
(149, 'Heading 2', 'COMMITMENT TO THE CLIENT', 'text', 2, 'How It Works'),
(150, 'Description 2', 'JMI Brokers LTD aims to exceed our clients expectations by placing a high priority on excellence in execution and we are committed to providing the most professional and individualized service possible. We recognize that the client is at the core of our existence and we aspire to achieve an intimate level of understanding as to their professional needs and objectives and then doing our utmost to accommodate them.', 'textarea', 2, 'How It Works'),
(151, 'Heading 3', 'INNOVATION', 'text', 2, 'How It Works'),
(152, 'Description 3', 'We believe that innovation is an intrinsic element for competitiveness and growth in todays markets. Our dedication to finding new ways of creating and delivering value is a major reason why our clients choose to trade with us. By providing the latest tools, products and services, JMI Brokers LTD is establishing itself as a leader rather than an operator in the industry.', 'textarea', 2, 'How It Works'),
(153, 'Heading 4', 'SOCIAL RESPONSIBILITY', 'text', 2, 'How It Works'),
(154, 'Description 4', 'It is our goal to grow not only our business but also our level of social responsibility. We have set ourselves ethical standards and believe it is part of our professional duty to give back to society. One of our goals is to develop a sound philanthropic foundation to support our corporate philosophy.', 'textarea', 2, 'How It Works'),
(155, 'Heading 5', '', 'text', 2, 'How It Works'),
(156, 'Description 5', '', 'textarea', 2, 'How It Works'),
(157, 'Heading', 'How It Works', 'text', 2, 'How It Works 2'),
(158, 'Description', '', 'textarea', 2, 'How It Works 2'),
(159, 'Background Image', '', 'file', 2, 'How It Works 2'),
(160, 'Heading 1', 'Consultation:', 'text', 2, 'How It Works 2'),
(161, 'Description 1', 'We begin by understanding your financial goals, risk tolerance, and investment preferences. Our dedicated team of professionals will guide you through the process, ensuring that we have a clear understanding of your needs.\r\n\r\n', 'textarea', 2, 'How It Works 2'),
(162, 'Image 1', 'uploads/1695547034_image.png', 'file', 2, 'How It Works 2'),
(163, 'Heading 2', 'Customized Solutions', 'text', 2, 'How It Works 2'),
(164, 'Description 2', 'Based on the information gathered during the consultation, we develop a personalized financial strategy that aligns with your objectives. We take into account various factors such as market conditions, investment products, and risk management.\r\n\r\n', 'textarea', 2, 'How It Works 2'),
(165, 'Image 2', 'uploads/1695547048_image.png', 'file', 2, 'How It Works 2'),
(166, 'Heading 3', 'Execution', 'text', 2, 'How It Works 2'),
(167, 'Description 3', 'Once the strategy is finalized, our team will help you execute the plan efficiently. We provide access to a wide range of investment products and trading platforms, allowing you to implement your investment decisions seamlessly.\r\n\r\n', 'textarea', 2, 'How It Works 2'),
(168, 'Image 3', 'uploads/1695547089_image.png', 'file', 2, 'How It Works 2'),
(169, 'Heading 4', ' Ongoing Support:', 'text', 2, 'How It Works 2'),
(170, 'Description 4', 'Our commitment doesn\'t end with execution. We offer continuous support and monitoring to ensure your portfolio remains on track. Our team regularly reviews your investments, provides market updates, and suggests adjustments when necessary.\r\n\r\n', 'textarea', 2, 'How It Works 2'),
(171, 'Image 4', 'uploads/1695547128_image.png', 'file', 2, 'How It Works 2'),
(172, 'Banner Background', 'uploads/1695037733_image.jpg', 'file', 3, 'Banner'),
(173, 'Banner Heading', 'Licenses and <br> Regulations', 'text', 3, 'Banner'),
(174, 'Heading 1', 'Licenses and Regulations', 'text', 3, 'Licenses and Regulations'),
(175, 'Description 1', 'It is essential when selecting a broker to make sure that they are licensed & regulated by a credible governmental body. Each licensing authority monitors the working practices of financial companies, ensuring that all regulations are strictly adhered to.', 'text', 3, 'Licenses and Regulations'),
(176, 'Description 2', 'Vanuatu Financial Services <br> Commission (VFSC)', 'text', 3, 'Licenses and Regulations'),
(177, 'Image 1', '', 'text', 3, 'Licenses and Regulations'),
(178, 'Heading', 'Registration Number 15010', 'text', 3, 'Licenses and Regulations Left Box'),
(179, 'Description', 'Founded 2009. A Commonwealth licensed company with 3 licenses from the Financial Securities Authority VFSC Licence No. 15010 for trading in currencies, metals, shares of United States companies listed on the New York and Nasdaq exchanges, shares of British companies listed on the London Stock Exchange, goods, energy, and crypto cryptocurrencies and other CFDs . The company and all its shares are wholly owned by the Swiss European company JMI Brokers Holding AG , registered in Swiss commercial register CHE-334.229.499. Zug - Switzerland ðŸ‡¨ðŸ‡­. Most importantly, it is JMI Brokers with a full advance and guaranteed client deposits up to $500,000 through an insurance policy advertised on the company\'s official website.\r\n\r\n', 'textarea', 3, 'Licenses and Regulations Left Box'),
(180, 'Button text', '$500,000 Financial Protection for Traders', 'text', 3, 'Licenses and Regulations Left Box'),
(181, 'Heading 2', 'AML & CTF Procedure Manual', 'text', 3, 'Licenses and Regulations Left Box'),
(182, 'Description 2', 'VFSC strictly follows the international legal regulation and adhere to all anti-money laundering laws.\r\n\r\n', 'textarea', 3, 'Licenses and Regulations Left Box'),
(183, 'Heading', '(VFSC) License Benefits', 'text', 3, 'Licenses and Regulations Right Box'),
(184, 'Description', '<p class=\'tx-grey300 p-fs3\'>\r\n                                 Financial protection of customer deposits up to $500,000. The bond of 5 million VATU must be deposited with and kept by the VFSC. A license must have adequate insurance cover, including professional indemnity insurance indemnity for partners and employees, former partners and employees, and consultants, to serve as a protection for the investorâ€™s funds in the event of financial loss. The minimum insurance cover for each licensee has been revised in January 2019 and must be:\r\n                              </p>\r\n\r\n<ol>\r\n                                 <li class=\'tx-grey300 p-fs3 first\'>5.000.000 VT (+/- 50.000 USD) for each claim,</li>\r\n                                 <li class=\'tx-grey300 p-fs3\'>with an aggregate cover of not lessthan 50.000.000 VT (+/- 500.000 USD) and,</li>\r\n                               <li class=\'tx-grey300 p-fs3 last\'>a maximum deductible amount of 10.000.000 VT (+/- 100.000 USD)</li> </ol>\r\n                             ', 'textarea', 3, 'Licenses and Regulations Right Box'),
(185, 'Banner Background', 'uploads/1695037733_image.jpg', 'file', 5, 'Banner'),
(186, 'Banner Heading 1', 'CFD Commodities', 'text', 5, 'Banner'),
(187, 'Banner Description', 'Discover the world of forex trading with JMI Brokers, a leading online broker offering a wide range of currency trading\r\nservices. With our robust platform and cutting-edge technology, you can access the global forex market, trade major and\r\nexotic currency pairs, and take advantage of market fluctuations to maximize your investment potential.', 'textarea', 5, 'Banner'),
(188, 'Banner Button Text', 'DEMO ACCOUNT', 'text', 5, 'Banner'),
(189, 'Banner Button URL', '#', 'text', 5, 'Banner'),
(190, 'Banner Button Text 2', 'Open Live Account', 'text', 5, 'Banner'),
(191, 'Banner Button URL 2', '', 'text', 5, 'Banner'),
(192, 'Heading', 'CFDs Commodities', 'text', 5, 'Commodities'),
(193, 'Description', 'Trade stock CFDs with JMI Brokers for profit potential without owning the underlying assets. Take advantage of rising and falling markets with long and short positions. Choose from a wide range of US and UK stock CFDs for flexibility, liquidity, and competitive pricing. Remember, trading CFDs involves risksâ€”evaluate goals and risk tolerance carefully. Maximize opportunities with JMI Brokers\' stock CFDs today.', 'textarea', 5, 'Commodities'),
(194, 'Short Text', 'CFDs/Energy', 'text', 5, 'Commodities'),
(195, 'Short Text 2', 'CFDs Commodity', 'text', 5, 'Commodities'),
(196, 'Banner Background', 'uploads/1695037733_image.jpg', 'file', 6, 'Banner'),
(197, 'Banner Heading 1', 'Trading with Meta Trader 4', 'text', 6, 'Banner'),
(198, 'Banner Button Text', 'Open Live Account', 'text', 6, 'Banner'),
(199, 'Banner Button URL', '#', 'text', 6, 'Banner'),
(200, 'Image', 'uploads/1695037733_image.jpg', 'file', 6, 'Trading with Meta Trader'),
(201, 'Heading', 'Trading with Meta Trader 4', 'text', 6, 'Trading with Meta Trader'),
(202, 'Description', 'MetaTrader 4 is the worldâ€™s most popular trading platform. With MT4, you will have a wide selection of charting tools at your disposal as well as the ability to completely customize the platform to meet your personal specifications. And with a built-in programming language, you can even add additional functionality to the platform, including trading strategies, scripts and indicators. At JMI Brokers we have been working with the developers of this software for years, giving our clients exclusive access to a level of trading terms that canâ€™t be found elsewhere.\r\n\r\n', 'textarea', 6, 'Trading with Meta Trader'),
(203, 'Heading 2', 'Trading with Meta Trader 4', 'text', 6, 'Trading with Meta Trader'),
(204, 'Description 2', 'More than 50 customizable analytical tools, with the ability to apply one tool on top of another Trade your MT4 accounts on the go, with apps for your smartphone, tablet or Pocket PC Connect to the inter bank market with ECN Bridge technology Financial news from Dow Jones and technical analysis from Trading Central\r\n\r\n', 'textarea', 6, 'Trading with Meta Trader'),
(205, 'Buton text', 'Download Meta Trader 4 FX Demo', 'text', 6, 'Trading with Meta Trader'),
(206, 'Buton URL', '#', 'text', 6, 'Trading with Meta Trader'),
(207, 'Banner Background', 'uploads/1695548796_image.png', 'file', 7, 'Banner'),
(208, 'Banner Heading 1', 'JMI Trading Platform', 'text', 7, 'Banner'),
(209, 'Banner Button Text', 'DEMO ACCOUNT', 'text', 7, 'Banner'),
(210, 'Banner Button URL', '#', 'text', 7, 'Banner'),
(211, 'Image', 'uploads/1695548870_image.png', 'file', 7, 'JMI Trading'),
(212, 'Heading', 'JMI Trading Platform', 'text', 7, 'JMI Trading'),
(213, 'Description', 'Our FREE trading platform is the cornerstone of our customer offering. We are constantly looking to improve our offering to include as much free information and tools as possible to make your trading decisions easier. The JMI Brokers Trader allows you to trade from a streaming quote feed using advanced technical analysis tools, and all in real time.\r\n\r\n', 'textarea', 7, 'JMI Trading'),
(214, 'Buton text', 'Download Meta Trader 4 FX Demo', 'text', 7, 'JMI Trading'),
(215, 'Buton URL', '#', 'text', 7, 'JMI Trading'),
(216, 'Image', 'uploads/1695548889_image.png', 'file', 7, 'Overview'),
(217, 'Heading', 'Overview', 'text', 7, 'Overview'),
(218, 'Description', 'This is the JMI Brokers MT4 Trader program window. The windows are anchored to each other by default but you can manipulate them in a variety of ways. Most windows are easily positioned anywhere on the screen.\r\n\r\n', 'textarea', 7, 'Overview'),
(219, 'Image', 'uploads/1695549120_image.png', 'file', 7, 'Market Watch'),
(220, 'Heading', 'Market Watch', 'text', 7, 'Market Watch'),
(221, 'Description', 'The Market Watch window, also referred to as the Quotes Window, is a floating palette. You can drag it anywhere on the screen (even over other windows). You can toggle through the Market Watch window item by using the menu items View > Market Watch or by pressing the Ctrl + M key combination. The Market Watch button on the toolbar also shows or hides the Market Watch window.The Market Watch shows current prices of the traded currency pairs and also allows you to make quick transactions on any currency pair. To initiate a trade, double click the selected vehicle and the Order Form will open up. You can also access the Order Form by right-clicking your chosen currency pair and then choosing New Order.\r\nHelpful Hints- Right click the Market Watch window to add or remove currency pairs from your list, or to show High/Low and Time.- Press F10 to get a popup price window', 'textarea', 7, 'Market Watch'),
(222, 'Image', 'uploads/1695549196_image.png', 'file', 7, 'Charts'),
(223, 'Heading', 'Charts', 'text', 7, 'Charts'),
(224, 'Description', 'The charts are the heart of the JMI Brokers Trader. To open a new chart you can:- Right-click the Market Watch window, then choose the Chart Window option- Using the Ctrl + W key combination- Using the menu options File > New Chart- Or clicking on the New Chart button on the toolbar.Each chart is highly customizable. Charts can be manipulated to appear in many different ways. Choose from three chart styles; Candlestick, Bar Chart or Line . Easily apply one of our standard indicators or download one from our library. Choose your own custom Chart Theme.\r\n\r\n', 'textarea', 7, 'Charts'),
(225, 'Image', 'uploads/1695549299_image.png', 'file', 7, 'Navigator'),
(226, 'Heading', 'Navigator', 'text', 7, 'Navigator'),
(227, 'Description', 'The Market Watch window, also referred to as the Quotes Window, is a floating palette. You can drag it anywhere on the screen (even over other windows). You can toggle through the Market Watch window item by using the menu items View > Market Watch or by pressing the Ctrl + M key combination. The Market Watch button on the toolbar also shows or hides the Market Watch window.The Market Watch shows current prices of the traded currency pairs and also allows you to make quick transactions on any currency pair. To initiate a trade, double click the selected vehicle and the Order Form will open up. You can also access the Order Form by right-clicking your chosen currency pair and then choosing New Order.\r\nHelpful Hints- Right click the Market Watch window to add or remove currency pairs from your list, or to show High/Low and Time.- Press F10 to get a popup price window', 'textarea', 7, 'Navigator'),
(228, 'Image', 'uploads/1695550279_image.png', 'file', 7, 'Trade Terminal'),
(229, 'Heading', 'Trade Terminal', 'text', 7, 'Trade Terminal'),
(230, 'Description', 'The Trade Terminal allows you to make trades and control your open positions in real-time. You can activate it through the menu opens View > Terminal or by pressing the Ctrl + T key combination. You can also use the Trade Terminal button on your toolbar.The Trade Terminal can be positioned anywhere on the screen. To move it, click the title bar and hold the left mouse button down to drag the window to where you want it', 'textarea', 7, 'Trade Terminal'),
(231, 'Trade Tab Heading', 'Trade Tab', 'text', 7, 'Trade Terminal'),
(232, 'Trade Tab Description', '', 'textarea', 7, 'Trade Terminal'),
(233, 'Trade Terminal List Left', '-\r\nNew Order : will open order form window\r\n-\r\nClose Order : will open the close order form window\r\n-\r\nModify or Delete Order : use this option to edit your stop-loss and take-profit orders\r\n-\r\nTrailing Stop : you can select a predefined trailing stop or set up a custom one.\r\n-\r\nProfit : Choose to show your profit as points, as term currency or as deposit currency', 'textarea', 7, 'Trade Terminal'),
(234, 'Trade Terminal List Right', '-\r\nCommissions : This toggles the Commissions fields on and off in your trade terminal\r\n-\r\nTaxes : This toggles the Taxes field on and off in your trade terminal\r\n-\r\nComments : This toggles your Comments field on and off in your trade terminal\r\n-\r\nAuto Arrange : When off, this allows you to rearrange your trade columns however you like (width, placement, etc.)\r\n-\r\nGrid : show and hide the grid to separate the columns.', 'textarea', 7, 'Trade Terminal'),
(235, 'Image', 'uploads/1695550380_image.png', 'file', 7, 'Order Form'),
(236, 'Heading', 'Order Form', 'text', 7, 'Order Form'),
(237, 'Description', 'A position can be opened in several ways:\r\n\r\n-\r\nFrom the menu options Tools > New Order\r\n-\r\nBy pressing the F9 key on your keyboard\r\n-\r\nBy double-clicking a currency pair in your Market Watch window.\r\n-\r\nBy right-clicking the Trade Terminal window and choosing New Order', 'textarea', 7, 'Order Form'),
(238, 'Banner Background', 'uploads/1695037733_image.jpg', 'file', 8, 'Banner'),
(239, 'Banner Heading 1', 'Trade Global Currencies with JMI Brokers', 'text', 8, 'Banner'),
(240, 'Banner Button Text', 'DEMO ACCOUNT', 'text', 8, 'Banner'),
(241, 'Banner Button URL', '#', 'text', 8, 'Banner'),
(242, 'Heading', 'Meta Trader 4 FX Platform', 'text', 8, 'Meta Trader 4 FX'),
(243, 'Description LEFT', 'On-line news from Dow Jones.\r\nMulti-language program interface;\r\nHistory database management and real time data import/export facility;\r\nIn-built help guides for MetaTrader 4 and MetaQuotes Language 4.', 'textarea', 8, 'Meta Trader 4 FX'),
(244, 'Description RIGHT', 'Instant execution and request-for-quote execution (RFQ)\r\nTrailing stops\r\nComplete technical analysis package: 30+ in-built indicators and charting tools, the ability to create various custom indicators, different time periods (from minutes to months);\r\nSignals of system and trading actions;\r\nInternal e-mail;\r\nComprehensive trading statements.\r\nMobile Trading: MetaTrader 4 Mobile for PDA\'s and suitable mobile phones', 'textarea', 8, 'Meta Trader 4 FX'),
(245, 'Banner Button Text', 'Download Meta Trader 4 FX Demo', 'text', 8, 'Meta Trader 4 FX'),
(246, 'Banner Button URL', '#', 'text', 8, 'Meta Trader 4 FX'),
(247, 'Image', 'uploads/1695562717_image.png', 'file', 8, 'Meta Trader 4 FX'),
(248, 'Banner Background', 'uploads/1695037733_image.jpg', 'file', 9, 'Banner'),
(249, 'Banner Heading 1', ' Iphone & Ipad', 'text', 9, 'Banner'),
(250, 'Banner Button Text', 'DEMO ACCOUNT', 'text', 9, 'Banner'),
(251, 'Banner Button URL', '#', 'text', 9, 'Banner'),
(252, 'Heading', 'Overview', 'text', 9, 'Overview'),
(253, 'Description 1', 'Trading Platforms </br>\r\nJMI offers a variety of trading platforms, each of which offers its own distinct advantages. Browse our selection of trading software (including our mobile apps) and find the platform that\'s best suited to you', 'textarea', 9, 'Overview'),
(254, 'Description 2', 'MetaTrader 4 for iPhone and iPad </br>\r\nTrading Platform : MetaTrader 4\r\nSystem Requirements : iPhone 3GS, 4, 4S, iPod touch, iPad1, iOS 4.0 and later, 3G / Wi-Fi', 'textarea', 9, 'Overview'),
(255, 'Ios Link', '', 'text', 9, 'Overview'),
(256, 'Android Link', '', 'text', 9, 'Overview'),
(257, 'Button Text', 'Download Meta Trader 4 FX Demo', 'text', 9, 'Overview'),
(258, 'Button URL', '#', 'text', 9, 'Overview'),
(259, 'Banner Background', 'uploads/1695037733_image.jpg', 'file', 10, 'Banner'),
(260, 'Banner Heading 1', 'Android', 'text', 10, 'Banner'),
(261, 'Banner Button Text', 'DEMO ACCOUNT', 'text', 10, 'Banner'),
(262, 'Banner Button URL', '#', 'text', 10, 'Banner'),
(263, 'Heading', 'Android', 'text', 10, 'Overview'),
(264, 'Description 1', 'Trading Platforms </br>\r\nJMI offers a variety of trading platforms, each of which offers its own distinct advantages. Browse our selection of trading software (including our mobile apps) and find the platform that\'s best suited to you', 'textarea', 10, 'Overview'),
(265, 'Description 2', 'Trading Platform : MetaTrader 4System Requirements : iPhone 3GS, 4, 4S, iPod touch, iPad1, iOS 4.0 and later, 3G / Wi-Fi', 'textarea', 10, 'Overview'),
(266, 'Ios Link', '', 'text', 10, 'Overview'),
(267, 'Android Link', '', 'text', 10, 'Overview'),
(268, 'Button Text', 'Download Meta Trader 4 FX Demo', 'text', 10, 'Overview'),
(269, 'Button URL', '#', 'text', 10, 'Overview'),
(270, 'Banner Background', 'uploads/1697010534_image.png', 'file', 11, 'Banner'),
(271, 'Banner Heading 1', 'Become Our </br> Partner', 'text', 11, 'Banner'),
(272, 'Banner Button Text', 'DEMO ACCOUNT', 'text', 11, 'Banner'),
(273, 'Banner Button URL', '#', 'text', 11, 'Banner'),
(274, 'Banner Button Text 2', 'Open Live Account', 'text', 11, 'Banner'),
(275, 'Banner Button URL 2', '#', 'text', 11, 'Banner'),
(276, 'Heading', 'Introducing Broker Services', 'text', 11, 'Manager Programme'),
(277, 'Description', 'We have built up a strong reputation for fairness, efficiency and responsiveness with IBs from around the world. We are constantly looking to forge partnerships with new, reputable Introducing Brokers who are looking to grow their business. We offer a fast and cost-efficient route to market, flexible commercial terms and superior personalized service from a team who know the business well. </br>\r\nWe offer partners the broadest range of forex, equity and derivatives products, both exchange-traded and over-the-counter (OTC). </br>\r\n</br>\r\n\r\nOur specialist IB Team has many years experience in servicing the precise needs of IBs and they understand the global FX market. They are approachable and easily contactable day or night. As an appointed IB you will have your own account manager. Their role is to help you develop your business and to ensure we provide the highest levels of service - and also to make sure your customers\' needs are met.', 'textarea', 11, 'Manager Programme'),
(278, 'Image', 'uploads/1697010639_image.png', 'file', 11, 'Manager Programme'),
(279, 'Heading', 'How it works - </br>in outline', 'text', 11, 'Label Program'),
(280, 'Description 1', 'Our Introducing Broker (IB) Service allows you to be remunerated for introducing new clients to us. As an IB you can introduce your clients to JMI Brokers and will receive commission on an ongoing basis via volume rebates or spreads. </br>\r\nWe offer a total solution, from provision of the trading platforms, account opening, to execution and settlement of transactions, to issuing trading statements to your clients. Under this arrangement, for administrative purposes, your clients would be disclosed to JMI Brokers and deal directly with us, although we would not approach your clients directly. This leaves you free to concentrate on customer acquisition and the management of your own business.', 'textarea', 11, 'Label Program'),
(281, 'Description 2', '<li>A dedicated, friendly and experienced multilingual support team;</li>\r\n                           <li>Extensive support with legal documentation</li>\r\n                           <li>A tailored service to accommodate the processing and calculation of management/performance fees;</li>\r\n                           <li>Commissions* paid in real-time to your Agent account as trades are executed;</li>\r\n                           <li>Stress-free and smooth client on boarding;</li>\r\n                           <li>24/7 access to your Agent account and online statements;</li>\r\n                           <li>A personalised link to facilitate the identification of clients you introduce to JMI</li>\r\n                           <li>Comprehensive weekly report to assist you in keeping track of the introduced clients</li>\r\n                           <li>Back office administrative support</li>', 'textarea', 11, 'Label Program'),
(282, 'Heading', '</br>Other types of partner', 'text', 11, 'Depending on platform'),
(283, 'Description 1', 'Introducing Agents </br>\r\nUnder this arrangement your clients would be introduced to JMI Brokers and trade our products in exchange for a fee. The client would become a customer of JMI. This method allows financial intermediaries to efficiently offer on exchange and off exchange (OTC) products to their client base. </br>\r\n</br>\r\nFund Managers </br>\r\nWe welcome partnerships with Fund Managers. After necessary appraisal of your fund we will be happy for you to trade on behalf of your clients on an undisclosed or disclosed basis and recommend your services to suitable existing clients of JMI Brokers .', 'textarea', 11, 'Depending on platform'),
(284, 'Description 2', '', 'textarea', 11, 'Depending on platform'),
(285, 'Banner Background', 'uploads/1697011859_image.png', 'file', 12, 'Banner'),
(286, 'Banner Heading 1', 'Business <br>With JMI </h2>', 'text', 12, 'Banner'),
(287, 'Banner Button Text', 'DEMO ACCOUNT ', 'text', 12, 'Banner'),
(288, 'Banner Button URL', '#', 'text', 12, 'Banner'),
(289, 'Banner Button Text 2', 'Open Live Account', 'text', 12, 'Banner'),
(290, 'Banner Button URL 2', '#', 'text', 12, 'Banner'),
(291, 'Heading', 'Partnerships', 'text', 12, 'Partnerships'),
(292, 'Description', ' AS JMI Brokers We offer a full range of Introducing Broker Partnership Services Tailored to each client\'s individual needs\r\n                           <br>\r\n                           <br>\r\n                           Each partner has different requirements, therefore we are flexible both in the solutions we provide and in the commercial terms we agree.\r\n                           <br>\r\n                           <br>\r\n                           For IB partnership details or If you would like further information about our partnership services please contact us <a class=\'business-email-btn\' href=\'mailto:partners@jmibrokers.com\'>partners@jmibrokers.com</a> or call us <a class=\'business-call-btn\' href=\'tel:+97144096705\'>+97144096705</a> We would be delighted to help.', 'textarea', 12, 'Partnerships'),
(293, 'Image', 'uploads/1697011948_image.png', 'file', 12, 'Partnerships'),
(294, 'Banner Button Text', 'Become Our Partner', 'text', 12, 'Partnerships'),
(295, 'Banner Button URL', 'how-to-become.php', 'text', 12, 'Partnerships'),
(296, 'Heading', 'JMI Group Clients', 'text', 12, 'Group Clients'),
(297, 'Description', 'Internationally we offer a full service approach to trading financial products for clients such as small banks and hedge funds, brokers, private offices, high net worth individuals and private retail clients. Our aim is to deliver the best platforms, transparent, competitive pricing and higher levels of service than the traditional service providers.', 'textarea', 12, 'Group Clients'),
(298, 'Heading', 'Introducing Brokers', 'text', 12, 'Introducing Brokers'),
(299, 'Description', 'Our Introducing Broker (IB) programme allows organizations around the world to be remunerated for introducing new clients to us. We offer a total solution, from provision of the trading platforms to execution and settlement of transactions. An account manager is appointed to each IB to help them develop their business and to ensure we provide the highest levels of service.', 'textarea', 12, 'Introducing Brokers'),
(300, 'Heading', 'Institutional Clients', 'text', 12, 'Institutional Clients'),
(301, 'Description', 'Our bespoke institutional services meet the needs of small and medium sized financial institutions and banks looking to widen their product offering, with full professional support.', 'textarea', 12, 'Institutional Clients'),
(302, 'Heading', 'Global Partnerships', 'text', 12, 'Global Partnerships'),
(303, 'Description', 'Even with increasing use of the internet, the world is a very large place! We actively seek mutually beneficial partnerships with organizations across the globe. We are there to provide', 'textarea', 12, 'Global Partnerships'),
(304, 'Banner Button Text', 'Become Our Partner', 'text', 12, 'Global Partnerships'),
(305, 'Banner Button URL', 'how-to-become.php', 'text', 12, 'Global Partnerships'),
(306, 'Banner Background', 'uploads/1695037733_image.jpg', 'file', 13, 'Banner'),
(307, 'Banner Heading 1', 'Work With Us', 'text', 13, 'Banner'),
(308, 'Banner Button Text', 'Apply For Job', 'text', 13, 'Banner'),
(309, 'Banner Button URL', '#', 'text', 13, 'Banner'),
(310, 'Banner Description', 'Join us on this <span class=\'tx-gd bld\'> journey and experience </span> the difference of <br> working with a leading financial services provider.', 'textarea', 13, 'Banner'),
(312, 'Heading', 'At JMI Brokers LTD, <br> it\'s all about people & careers', 'text', 13, 'At JMI Brokers LTD'),
(313, 'Description', 'The JMI Brokers LTD believes that its business develops in line with its employees\' personal and professional growth. For this reason, JMI Brokers invests continuously in courses, workshops, leadership and skills-training programs and formal educational qualifications; all designed to ensure that its people are at the forefront of their professions and are able to deliver the kind of service that clients and partners expect.', 'textarea', 13, 'At JMI Brokers LTD'),
(317, 'Heading', 'JMI University - Excel professionally <br> and reach personal goals', 'text', 13, 'JMI University'),
(318, 'Description', 'The JMI Brokers University is an internal development initiative that offers programs and courses to all JMI Brokers employees. Courses cover topics which JMI Brokers feels promote success by further developing individual competencies and helping employees meet personal and professional career goals.', 'textarea', 13, 'JMI University'),
(319, 'Description 2', 'JMI Brokers runs a structured employee development program - the \'Personal Development Plan\' - and a leadership development program through the Leadership Pipeline model. JMI Brokers also has a role model program, which is a personal development program for specialists and leaders who demonstrate consistent role model behavior and live up to the Corporate Statement and JMI Brokers seven values.JMI Brokers uses an internal developmental model as a framework for describing the three major career development phases at JMI: the introduction phase, the high performance phase and the role modeling phase.JMI Brokers likes to train and develop its own managers and leaders and has adopted a leadership pipeline approach for development of competencies. This supports the establishment of an ongoing organizational process that produces leadership on all levels of the organization. Leaders develop their own skills and work values according to their pipeline level, and strive towards developing their direct reports to the next level of the organization.', 'textarea', 13, 'JMI University'),
(320, 'Heading', 'JMI\'s goal', 'text', 13, 'JMIs goal'),
(321, 'Description', 'JMI\'s goal is to be the world\'s most profitable and professional facilitator in the global capital markets.\r\n                                 <br><br>\r\n                                 Its stakeholders include shareholders, employees, clients and partners who support the Bank in generating results, motivating and developing staff and building...', 'textarea', 13, 'JMIs goal'),
(322, 'Description 2', '', 'textarea', 13, 'JMIs goal'),
(323, 'Button Text', 'Read More', 'text', 13, 'JMIs goal'),
(324, 'Button URL', '#', 'text', 13, 'JMIs goal'),
(325, 'Banner Background', 'uploads/1697013151_image.png', 'file', 14, 'Banner'),
(326, 'Banner Heading 1', 'Money <br> Manager', 'text', 14, 'Banner'),
(327, 'Banner Button Text', 'DEMO ACCOUNT', 'text', 14, 'Banner'),
(328, 'Banner Button URL', '#', 'text', 14, 'Banner'),
(329, 'Banner Button Text 2', 'Open Live Account', 'text', 14, 'Banner'),
(330, 'Banner Button URL 2', '#', 'text', 14, 'Banner'),
(331, 'Heading', 'Our Money Managers', 'text', 14, 'Our Money Managers'),
(332, 'Description', 'Managers looking for competitive pricing and consistent execution should look no further. With JMI Brokers Money Managers you can trade on multiple accounts from one trading platform. JMI Brokers handles all of the post-trade allocations for you so you can focus solely on trading and customer acquisition.', 'textarea', 14, 'Our Money Managers'),
(333, 'Description 2', 'Managers seeking competitive pricing and consistent execution need look no further. With JMI Brokers Money Managers, you can conveniently trade on multiple accounts through a single trading platform. JMI Brokers handles all post-trade allocations, allowing you to focus exclusively on trading and customer acquisition.', 'textarea', 14, 'Our Money Managers'),
(334, 'Heading', 'We offer various allocation methods:', 'text', 14, 'We offer various allocation methods'),
(335, 'Description', '<li class=\'p-fs5 tx-grey300 paraPdR\'>Percent Allocation: Allocate funds based on a percentage of the total investment.</li>\r\n                           <li class=\'p-fs5 tx-grey300 paraPdR\'>Lot Allocation: Allocate funds based on predefined lot sizes.</li>', 'textarea', 14, 'We offer various allocation methods'),
(336, 'Heading', 'Our comprehensive reporting system ensures transparency and accessibility:', 'text', 14, 'Our comprehensive reporting system'),
(337, 'Description', '<li class=\'p-fs5 tx-grey300 paraPdR\'>Your clients can access their reports 24/7, providing them with real-time information.</li>\r\n                           <li class=\'p-fs5 tx-grey300 paraPdR\'>Daily statements are generated, detailing trade allocations for effective tracking.</li>', 'textarea', 14, 'Our comprehensive reporting system'),
(338, 'Button Text', 'Become Our Partner', 'text', 14, 'Our comprehensive reporting system'),
(339, 'Button URL', 'how-to-become.php', 'text', 14, 'Our comprehensive reporting system'),
(340, 'Heading', '', 'text', 14, 'Our dedicated Back Office support'),
(341, 'Description', 'Our dedicated Back Office support team handles all end-of-month calculations for you and your clients. By taking care of administrative hassles, we free up your time to identify the next profitable trade for your clients.\r\n                           <br>\r\n                           <br>\r\n                           Contact one of our professional sales representatives today to discuss how JMI Brokers can assist in growing your managed business. Reach us at <a href=\'tel:+97144096705\' class=\'moneySec1-btn\'>+97144096705</a>.\r\n                           <br>\r\n                           <br>\r\n                           Call one of our professional sales representatives to learn how JMI Brokers can help enhance your brand through our Money Manager Program. Dial <a href=\'tel:+97144096705\' class=\'moneySec1-btn\'>+97144096705</a>.', 'textarea', 14, 'Our dedicated Back Office support'),
(342, 'Image', 'uploads/1697013291_image.png', 'file', 14, 'Our dedicated Back Office support'),
(343, 'Button Text', 'Become Our Partner', 'text', 14, 'Our dedicated Back Office support'),
(344, 'Button URL', 'how-to-become.php', 'text', 14, 'Our dedicated Back Office support'),
(345, 'Banner Background', 'uploads/1697013895_image.png', 'file', 15, 'Banner'),
(346, 'Banner Heading 1', 'Become a <br> Money Manager', 'text', 15, 'Banner'),
(347, 'Banner Button Text', 'DEMO ACCOUNT', 'text', 15, 'Banner'),
(348, 'Banner Button URL', '#', 'text', 15, 'Banner'),
(349, 'Banner Button Text 2', 'Open Live Account', 'text', 15, 'Banner'),
(350, 'Banner Button URL 2', '#', 'text', 15, 'Banner'),
(351, 'Heading', 'Money Manager Programme', 'text', 15, 'Money Managers');
INSERT INTO `page_meta` (`id`, `field_name`, `field_value`, `field_type`, `page_id`, `group_name`) VALUES
(352, 'Description', 'The JMI Brokers Money Manager Programme is for qualifying established individuals, brokers, asset managers and financial institutions worldwide. The objective is that Money Managers continue to focus on their trading strategies and maximising their clients profits as well as their own, while JMI Brokers takes care of all the back office and administrative workload. Our partners operate in accordance with their region\'s regulations in addition to those applying in the UAE and are committed to continuously generating profitable business through a sustainable business plan. As a registered Money Manager with JMI Brokers you can benefit from:', 'textarea', 15, 'Money Managers'),
(353, 'Image', 'uploads/1697013939_image.png', 'file', 15, 'Money Managers'),
(354, 'Heading', 'White Label Program', 'text', 15, 'Label Program'),
(355, 'Description 1', 'Leverage our technological expertise in the MT4 and institutional market space to grow your brand. JMI Brokers can help you expand with our cost-effective turnkey solutions. Our white label solutions are designed for flexibility so you can maximize your earning potential faster.', 'textarea', 15, 'Label Program'),
(356, 'Description 2', '<li>A dedicated, friendly and experienced multilingual support team;</li>\r\n                           <li>Extensive support with legal documentation</li>\r\n                           <li>A tailored service to accommodate the processing and calculation of management/performance fees;</li>\r\n                           <li>Commissions* paid in real-time to your Agent account as trades are executed;</li>\r\n                           <li>Stress-free and smooth client on boarding;</li>\r\n                           <li>24/7 access to your Agent account and online statements;</li>\r\n                           <li>A personalised link to facilitate the identification of clients you introduce to JMI</li>\r\n                           <li>Comprehensive weekly report to assist you in keeping track of the introduced clients</li>', 'textarea', 15, 'Label Program'),
(357, 'Heading', '* Depending on platform.', 'text', 15, 'Depending on platform'),
(358, 'Description 1', 'Whatever your business requirements, JMI Brokers will work to find the right solution for you. To find out more about our Money Manager Programme, call us at <a class=\'business-call-btn\' href=\'tel:+97144096705\'>+97144096705</a> (Mon-Fri 06:00-18:00 GMT time)\r\n                           <br>\r\n                           Alternatively, if you have any questions and/or wish to be contacted by our team to learn more about our Money Manager Programme, please request a call back below:\r\n                           <br>\r\n                           <br>\r\n                           Call one of our professional sales representatives to discuss how JMI Brokers can help grow your brand using our White Label Program. <a class=\'business-call-btn\' href=\'tel:+97144096705\'>+97144096705</a>', 'textarea', 15, 'Depending on platform'),
(359, 'Description 2', '', 'textarea', 15, 'Depending on platform'),
(360, 'Banner Background', 'uploads/1697014401_image.png', 'file', 16, 'Banner'),
(361, 'Banner Heading 1', 'White Label <br> Program', 'text', 16, 'Banner'),
(362, 'Banner Button Text', 'DEMO ACCOUNT', 'text', 16, 'Banner'),
(363, 'Banner Button URL', '#', 'text', 16, 'Banner'),
(364, 'Banner Button Text 2', 'Open Live Account', 'text', 16, 'Banner'),
(365, 'Banner Button URL 2', '#', 'text', 16, 'Banner'),
(366, 'Heading', 'White Labels', 'text', 16, 'White Labels'),
(367, 'Description', 'JMI Brokers LTD can help grow your brand with our cost-effective turn-key solutions. Our White Label products are designed for flexibility so you can maximise your earning potential faster.\r\n', 'textarea', 16, 'White Labels'),
(368, 'Image', 'uploads/1697014426_image.png', 'file', 16, 'White Labels'),
(369, 'Button Text', 'Become Our Partner', 'text', 16, 'White Labels'),
(370, 'Button URL', 'how-to-become.php', 'text', 16, 'White Labels'),
(371, 'Heading', 'Offering access to multiple platforms, including:', 'text', 16, 'JMI Brokers benefit'),
(372, 'Description', '<li>1. Multilingual products and support</li>\r\n                           <li>2. Advanced charting;</li>\r\n                           <li>3. Algorithmic trading solutions;</li>\r\n                           <li>4. Educational services;</li>', 'textarea', 16, 'JMI Brokers benefit'),
(373, 'Description 2', '<li>5. Complete back office solution;</li>\r\n                           <li> 6. Money Manager allocation solution.</li>\r\n                           <li>7. Advanced dealing solutions;</li> </br>\r\n                           Call one of our professional sales representatives to discuss how JMI Brokers can help grow your brand using our White Label Program. +97144096705', 'textarea', 16, 'JMI Brokers benefit'),
(374, 'Heading', 'White Label Program', 'text', 16, 'Depending on trading platform'),
(375, 'Description', 'Leverage our technological expertise in the MT4 and institutional market space to grow your brand. JMI Brokers can help you expand with our cost-effective turnkey solutions. Our white label solutions are designed for flexibility so you can maximize your earning potential faster.\r\n', 'textarea', 16, 'Depending on trading platform'),
(376, 'Description 2', '', 'textarea', 16, 'Depending on trading platform'),
(377, 'Button Text', 'Become Our Partner', 'text', 16, 'Depending on trading platform'),
(378, 'Button URL', 'how-to-become.php', 'text', 16, 'Depending on trading platform'),
(379, 'Banner Background', 'uploads/1695037733_image.jpg', 'file', 17, 'Banner'),
(380, 'Banner Heading 1', 'Economic Calendar', 'text', 17, 'Banner'),
(381, 'Banner Button Text', 'DEMO ACCOUNT', 'text', 17, 'Banner'),
(382, 'Banner Button URL', '#', 'text', 17, 'Banner'),
(383, 'Description', 'Discover the world of forex trading with JMI Brokers, a leading online broker offering a wide range of currency trading <br> services. With our robust platform and cutting-edge technology, you can access the global forex market, trade major and <br> exotic currency pairs, and take advantage of market fluctuations to maximize your investment potential.', 'textarea', 17, 'Banner'),
(384, 'Banner Background', 'uploads/1695037733_image.jpg', 'file', 18, 'Banner'),
(385, 'Banner Heading 1', 'JMI Brokers | Pip Calculator', 'text', 18, 'Banner'),
(386, 'Banner Button Text', 'DEMO ACCOUNT', 'text', 18, 'Banner'),
(387, 'Banner Button URL', '#', 'text', 18, 'Banner'),
(388, 'Description', 'Discover the world of forex trading with JMI Brokers, a leading online broker offering a wide range of currency trading <br> services. With our robust platform and cutting-edge technology, you can access the global forex market, trade major and <br> exotic currency pairs, and take advantage of market fluctuations to maximize your investment potential.', 'textarea', 18, 'Banner'),
(389, 'Banner Background', 'uploads/1695037733_image.jpg', 'file', 19, 'Banner'),
(390, 'Banner Heading 1', 'Fundamental Analysis', 'text', 19, 'Banner'),
(391, 'Banner Button Text', 'DEMO ACCOUNT', 'text', 19, 'Banner'),
(392, 'Banner Button URL', '#', 'text', 19, 'Banner'),
(393, 'Description', 'Discover the world of forex trading with JMI Brokers, a leading online broker offering a wide range of currency trading services. With our robust platform and cutting-edge technology, you can access the global forex market, trade major and exotic currency pairs, and take advantage of market fluctuations to maximize your investment potential.', 'textarea', 19, 'Banner'),
(394, 'Banner Background', 'uploads/1695037733_image.jpg', 'file', 20, 'Banner'),
(395, 'Banner Heading 1', 'Download Center JMI Brokers', 'text', 20, 'Banner'),
(396, 'Banner Button Text', 'DEMO ACCOUNT', 'text', 20, 'Banner'),
(397, 'Banner Button URL', '#', 'text', 20, 'Banner'),
(398, 'Description', 'Discover the world of forex trading with JMI Brokers, a leading online broker offering a wide range of currency trading services. With our robust platform and cutting-edge technology, you can access the global forex market, trade major and exotic currency pairs, and take advantage of market fluctuations to maximize your investment potential.', 'textarea', 20, 'Banner'),
(399, 'Heading', 'A focus on employees', 'text', 13, 'A focus on employees'),
(400, 'Description', '\r\n                                 JMI Brokers employees are passionate about what they do and driven to achieve results. In fact, a recent internal survey showed that 92.3% of employees are proud to work for JMI. In general, job satisfaction, team spirit and passion for work are rated highly by JMI Brokers staff.\r\n                                 <br>\r\n                                 ...\r\n                              ', 'textarea', 13, 'A focus on employees'),
(401, 'Description 2', '', 'textarea', 13, 'A focus on employees'),
(402, 'Button Text', 'Read More', 'text', 13, 'A focus on employees'),
(403, 'Button URL', '#', 'text', 13, 'A focus on employees'),
(404, 'Heading', 'International career opportunities', 'text', 13, 'International career opportunities'),
(405, 'Description', '\r\n                                 As JMI Brokers continues to expand globally, employees can realize career aspirations in a variety of international settings. Outstanding employees who are offered opportunities to represent JMI Brokers abroad can gain valuable knowledge and develop many new competencies which can benefit their future in the Bank....\r\n                              ', 'textarea', 13, 'International career opportunities'),
(406, 'Description 2', '', 'textarea', 13, 'International career opportunities'),
(407, 'Button Text', 'Read More', 'text', 13, 'International career opportunities'),
(408, 'Button URL', '#', 'text', 13, 'International career opportunities'),
(409, 'Heading', 'JMI Health', 'text', 13, 'JMI Health'),
(410, 'Description', '\r\n                              JMI Brokers places strong emphasis on health, and wants to make it easy for employees to choose a healthy life-style both in their professional and in their private lives. JMI\'s canteen provides a variety of healthy food throughout the day. Various fitness activities are also encouraged, and the Bank believ...\r\n                              ', 'textarea', 13, 'JMI Health'),
(411, 'Description 2', '', 'textarea', 13, 'JMI Health'),
(412, 'Button Text', 'Read More', 'text', 13, 'JMI Health'),
(413, 'Button URL', '#', 'text', 13, 'JMI Health'),
(414, 'Banner Background', 'uploads/1697019468_image.png', 'file', 21, 'Banner'),
(415, 'Banner Heading 1', 'Complete Package For Every Trader', 'text', 21, 'Banner'),
(416, 'Banner Button Text', 'DEMO ACCOUNT', 'text', 21, 'Banner'),
(417, 'Banner Button URL', '#', 'text', 21, 'Banner'),
(418, 'Banner Description', 'Join us on this <span class=\'tx-gd\'>journey and experience</span> the difference of working with a leading financial services provider.', 'textarea', 21, 'Banner'),
(419, 'Banner Button Text 2', 'Open Live Account', 'text', 21, 'Banner'),
(420, 'Banner Button URL 2', '#', 'text', 21, 'Banner'),
(421, 'Heading', 'Complete Package For Every Trader', 'text', 21, 'Package'),
(422, 'Description 1', 'Lorem ipsum dolor sit amet consectetur. Elementum risus tempor at vivamus curabitur viverra diam nec.', 'text', 21, 'Package'),
(423, 'Description 2', 'Lorem ipsum dolor sit amet consectetur. Elementum risus tempor at vivamus curabitur viverra diam nec.', 'text', 21, 'Package'),
(424, 'Banner Button Text', 'Lets Get Started', 'text', 21, 'Package'),
(425, 'Banner Button URL', '#', 'text', 21, 'Package'),
(426, 'Banner Background', 'uploads/1695037733_image.jpg', 'file', 22, 'Banner'),
(427, 'Banner Heading 1', 'Contact JMI Brokers', 'text', 22, 'Banner'),
(428, 'Location Map', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d173266.29976519282!2d8.3616985191799!3d47.269664793611206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479aabf84bc1915d%3A0x49082f5616e9941!2sJMI%20Brokers!5e0!3m2!1sen!2s!4v1697910389675!5m2!1sen!2s', 'text', 22, 'Locations 1'),
(429, 'Location Heading', 'Headquarters in Switzerland <span class=\'subHd\'> The city of Zug - Zurich <span>', 'text', 22, 'Locations 1'),
(430, 'Address', 'JMI Brokers AG - Swiss Asset and Funds Management Company - Bahnhofstrasse 21-6300', 'text', 22, 'Locations 1'),
(431, 'Phone', '+678 24404', 'text', 22, 'Locations 1'),
(432, 'Email', 'support@jmibrokers.com.', 'text', 22, 'Locations 1'),
(433, 'Location Map', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3610.0927614359503!2d55.27025602832288!3d25.200094073940544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f42816493e4a1%3A0x9991d05586e972fd!2sBoulevard%20Plaza%2C%20Tower%201%20-%20Downtown%20Dubai%20-%20Dubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2s!4v1697910339800!5m2!1sen!2s', 'text', 22, 'Locations 2'),
(434, 'Location Heading', 'Middle East Regional Office <span class=\'subHd\'> Dubai Down Town Area Sheikh Zayed</span>', 'text', 22, 'Locations 2'),
(435, 'Address', 'Boulevard Plaza Towers - Commercial Tower 24th Floor', 'text', 22, 'Locations 2'),
(436, 'Phone', '+971 44096705', 'text', 22, 'Locations 2'),
(437, 'Email', 'backoffice@jmibrokers.com', 'text', 22, 'Locations 2'),
(438, 'Location Map', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3311.6473971164505!2d35.50139201268745!3d33.89873382570627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f16e6436961d3%3A0x7fa33f675cb5e821!2sBeirut%20Souks!5e0!3m2!1sen!2s!4v1697910218462!5m2!1sen!2s', 'text', 22, 'Locations 3'),
(439, 'Location Heading', 'Lebanon  <span class=\'subHd\'> Down Town, Beirut Souks Suite 2029 </span>', 'text', 22, 'Locations 3'),
(440, 'Address', 'Levels 2&3 Louis Vuitton, Allenby Str.', 'text', 22, 'Locations 3'),
(441, 'Phone', '00961 1 957597', 'text', 22, 'Locations 3'),
(442, 'Email', 'backoffice@jmibrokers.com', 'text', 22, 'Locations 3'),
(443, 'Location Map', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3456.010977339636!2d31.335789912609435!3d29.979114521556102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458394355208adf%3A0x816fc655ab9ffe7a!2sMaadi%20Towers!5e0!3m2!1sen!2s!4v1697910274991!5m2!1sen!2s', 'text', 22, 'Locations 4'),
(444, 'Location Heading', 'The Egyptian Arabic Republic <span class=\'subHd\'>Cairo - Maadi </span>', 'text', 22, 'Locations 4'),
(445, 'Address', 'AlMaadi ', 'text', 22, 'Locations 4'),
(446, 'Phone', '+20225166835', 'text', 22, 'Locations 4'),
(447, 'Email', ' egypt.office@jmibrokers.com', 'text', 22, 'Locations 4'),
(448, 'Location Map', '', 'text', 22, 'Locations 5'),
(449, 'Location Heading', '', 'text', 22, 'Locations 5'),
(450, 'Address', '', 'text', 22, 'Locations 5'),
(451, 'Phone', '', 'text', 22, 'Locations 5'),
(452, 'Email', '', 'text', 22, 'Locations 5'),
(453, 'Banner Background', 'uploads/1697020698_image.png', 'file', 23, 'Banner'),
(454, 'Banner Heading 1', 'Become Our <br> Partner', 'text', 23, 'Banner'),
(455, 'Banner Button Text', 'DEMO ACCOUNT', 'text', 23, 'Banner'),
(456, 'Banner Button URL', '#', 'text', 23, 'Banner'),
(457, 'Banner Button Text 2', 'Open Live Account', 'text', 23, 'Banner'),
(458, 'Banner Button URL 2', '#', 'text', 23, 'Banner'),
(459, 'Heading', 'Introducing Broker Services', 'text', 23, 'Introducing Broker'),
(460, 'Description 1', 'We have built up a strong reputation for fairness, efficiency and responsiveness with IBs from around the world. We are constantly looking to forge partnerships with new, reputable Introducing Brokers who are looking to grow their business. We offer a fast and cost-efficient route to market, flexible commercial terms and superior personalized service from a team who know the business well.', 'text', 23, 'Introducing Broker'),
(461, 'Description 2', ' We offer partners the broadest range of forex, equity and derivatives products, both exchange-traded and over-the-counter (OTC).                            <br>                            <br>                            Our specialist IB Team has many years experience in servicing the precise needs of IBs and they understand the global FX market. They are approachable and easily contactable day or night. As an appointed IB you will have your own account manager. Their role is to help you develop your business and to ensure we provide the highest levels of service - and also to make sure your customers\' needs are met.', 'text', 23, 'Introducing Broker'),
(462, 'Banner Button Text', 'Become Our Partner', 'text', 23, 'Introducing Broker'),
(463, 'Banner Button URL', 'how-to-become.php', 'text', 23, 'Introducing Broker'),
(464, 'Heading', 'How it works - in outline', 'text', 23, 'Introducing Broker Services'),
(465, 'Description 1', 'Our Introducing Broker (IB) Service allows you to be remunerated for introducing new clients to us. As an IB you can introduce your clients to JMI Brokers and will receive commission on an ongoing basis via volume rebates or spreads.', 'text', 23, 'Introducing Broker Services'),
(466, 'Description 2', 'We offer a total solution, from provision of the trading platforms, account opening, to execution and settlement of transactions, to issuing trading statements to your clients. Under this arrangement, for administrative purposes, your clients would be disclosed to JMI Brokers and deal directly with us, although we would not approach your clients directly. This leaves you free to concentrate on customer acquisition and the management of your own business.', 'text', 23, 'Introducing Broker Services'),
(467, 'Heading', 'Other types of partner', 'text', 23, 'Other types of partner'),
(468, 'Heading 1', 'Introducing Agents', 'text', 23, 'Other types of partner'),
(469, 'Description 1', 'Under this arrangement your clients would be introduced to JMI Brokers and trade our products in exchange for a fee. The client would become a customer of JMI. This method allows financial intermediaries to efficiently offer on exchange and off exchange (OTC) products to their client base.', 'text', 23, 'Other types of partner'),
(470, 'Heading 2', 'Fund Managers', 'text', 23, 'Other types of partner'),
(471, 'Description 2', 'We welcome partnerships with Fund Managers. After necessary appraisal of your fund we will be happy for you to trade on behalf of your clients on an undisclosed or disclosed basis and recommend your services to suitable existing clients of JMI Brokers .', 'text', 23, 'Other types of partner'),
(472, 'Banner Button Text', 'Become Our Partner', 'text', 23, 'Other types of partner'),
(473, 'Banner Button URL', 'how-to-become.php', 'text', 23, 'Other types of partner'),
(474, 'Banner Background', 'uploads/1695037733_image.jpg', 'file', 24, 'Banner'),
(475, 'Banner Heading 1', 'JMI Brokers | Pip Calculator', 'text', 24, 'Banner'),
(476, 'Banner Button Text', 'Open Live Account', 'text', 24, 'Banner'),
(477, 'Banner Button URL', '#', 'text', 24, 'Banner'),
(478, 'Description', 'Discover the world of forex trading with JMI Brokers, a leading online broker offering a wide range of currency trading <br> services. With our robust platform and cutting-edge technology, you can access the global forex market, trade major and <br> exotic currency pairs, and take advantage of market fluctuations to maximize your investment potential.', 'textarea', 24, 'Banner'),
(479, 'Banner Background', 'uploads/1695037733_image.jpg', 'file', 25, 'Banner'),
(480, 'Banner Heading 1', 'Privacy policy', 'text', 25, 'Banner'),
(481, 'Heading', 'JMIBrokers LTD Conflicts of Interest Policy', 'text', 25, 'Our Policies'),
(482, 'Description', 'The purpose of the Policy is to set out the requirements for the company in respect of the potential conflicts of interest.</br>\r\n\r\n\r\nThe Policy is designed to give guidance on expected behaviors in relation to conflicts and may need to be read in conjunction with other documents, such as the Personal Account Dealing Policy, as indicated from time to time.</br>\r\n</br>\r\n\r\nWho does the Guidance Apply to?</br>\r\nIt applies to all staff employed or seconded to JMI Brokers LTD (JMI). </br>It also applies to all management and those working on long term contracting arrangements. </br>It may also apply to JMI Brokers personnel where a conflict arises involving the Group.</br>\r\nOther Documents Which Need to be Considered.</br>\r\n\r\nIn order to have a comprehensive understanding of your requirements to manage conflicts of interest you should also refer to: </br>\r\n\r\n\r\n\r\nPersonal Account Dealing Policy</br>\r\nCompliance Manual</br>\r\nPrinciples and Approved Persons</br>\r\nTrading Guidelines</br>\r\nRelevant Rules & Regulations</br>\r\nCompany Approach</br>\r\nThe company respects its employees\' privacy and therefore does not normally take an interest in personal conduct outside of work.</br>\r\n However, when there is a potential conflict between and employee\'s personal conduct has the potential of interfering with the employee\'s loyalty and objectivity towards the group, a \'conflict of interest\' may exist that must be satisfactorily resolved.</br> You need to consider if the appearance of a conflict of interest can be harmful to you or the group.</br>\r\n\r\nWe would remind you that you should always treat our counterparties, brokers and other third parties fairly, professionally and with integrity.</br>\r\n</br>\r\nMitigations/Controls</br>\r\n\r\nIt is a mitigating factor through identification and management of the potential conflicts both senior management and individual employees. </br>\r\nIt is therefore essential that you read and consider the material presented to you and if you are in any doubt seek advice from you line manager or compliance.</br>\r\nYou should also ensure you document and keep records of any training you receive whether internal or external.', 'textarea', 25, 'Our Policies'),
(483, 'Heading', 'Conflicts of Interest', 'text', 25, 'Information We Collect'),
(484, 'Description', 'What is a conflict of interest? </br>\r\nIn the widest sense, a conflict of interest occurs where one person (A) owes a duty to another party such as a counterparty or employer (B) and that duty is compromised by either A\'s own interests or by a duty owes a third party. Such duties may arise, for example, where A acts as an agent for B, where A owes fiduciary obligations to B or as a result of a regulator imposing such duties.', 'textarea', 25, 'Information We Collect'),
(485, 'Description 2', '', 'textarea', 25, 'Information We Collect'),
(486, 'Heading', 'Main types of conflict to consider:', 'text', 25, 'Use of Information'),
(487, 'Description', '\'Employee conflicts\' where the personal interests of any employee conflict with the interests of the company itself or with a counterparty;\r\nJMI counterparty conflicts where the interests of an JMI Brokers company and its counterparties either directly conflict or are more generally incompatible;\r\n\'Counterparty conflicts\' where the interests of two or more counterparties either directly or are generally incompatible;\r\n\'Internal conflicts\' where the interests of one internal entity conflicts with another internal entity.', 'textarea', 25, 'Use of Information'),
(488, 'Description 2', '', 'textarea', 25, 'Use of Information'),
(489, 'Description 3', '', 'textarea', 25, 'Use of Information'),
(490, 'Description 4', '', 'textarea', 25, 'Use of Information'),
(491, 'Heading', 'Information Sharing', 'text', 25, 'Information Sharing'),
(492, 'Description', 'We understand the importance of safeguarding your personal information and do not sell, trade, or otherwise transfer it to third parties without your consent, except as described in this Privacy Policy. We may share your information in the following circumstances:', 'textarea', 25, 'Information Sharing'),
(493, 'Description 2', '3.1 Service Providers: We may engage trusted third-party service providers to assist us in operating our Website and providing our services. These service providers have access to your personal information only to perform specific tasks on our behalf and are obligated to protect your information.', 'textarea', 25, 'Information Sharing'),
(494, 'Description 3', '3.2 Business Transfers: If JMIBrokers undergoes a merger, acquisition, or sale of all or a portion of its assets, your personal information may be transferred as part of the transaction. We will notify you via email and/or a prominent notice on our Website of any change in ownership or uses of your personal information.', 'textarea', 25, 'Information Sharing'),
(495, 'Description 4', '3.3 Legal Requirements: We may disclose your personal information if required to do so by law or if we believe in good faith that such disclosure is necessary to:', 'textarea', 25, 'Information Sharing'),
(496, 'Description 5', 'Comply with legal obligations or respond to lawful requests and legal processes.', 'textarea', 25, 'Information Sharing'),
(497, 'Description 6', 'Protect and defend our rights, property, or safety, or the rights, property, or safety of our users or others.', 'textarea', 25, 'Information Sharing'),
(498, 'Description 7', '1. Data Security', 'textarea', 25, 'Information Sharing'),
(499, 'Description 8', 'We employ industry-standard security measures to protect the personal information you provide to us. However, please note that no method of transmission over the internet or electronic storage is completely secure. While we strive to use commercially acceptable means to protect your personal information, we cannot guarantee its absolute security.', 'textarea', 25, 'Information Sharing'),
(500, 'Description 9', '1. Your Choices', 'textarea', 25, 'Information Sharing'),
(501, 'Description 10', '5.1 Accessing and Updating Information: You have the right to access, update, or delete your personal information. If you would like to do so, please contact us using the information provided at the end of this Privacy Policy.', 'textarea', 25, 'Information Sharing'),
(502, 'Description 11', '5.2 Cookies: You can manage your cookie preferences by adjusting the settings in your web browser. Please refer to our \'Cookie Policy\' for more information on how to manage cookies.', 'textarea', 25, 'Information Sharing'),
(503, 'Heading', 'Third-Party Websites', 'text', 25, 'Third-Party Websites'),
(504, 'Description', 'Our Website may contain links to third-party websites. This Privacy Policy does not apply to those websites, and we encourage you to review their respective privacy policies. We have no control over, and assume no responsibility for the content, privacy policies, or practices of any third-party websites or services.', 'textarea', 25, 'Third-Party Websites'),
(505, 'Heading', 'Children\'s Privacy', 'text', 25, 'Children Privacy'),
(506, 'Description', 'Our Website is not intended for individuals under the age of 18. We do not knowingly collect personal information from children. If you believe that we have inadvertently collected personal information from a child, please contact us, and we will take immediate steps to delete the information from our records.', 'textarea', 25, 'Children Privacy'),
(507, 'Heading', 'Changes to this Privacy Policy', 'text', 25, 'Changes to this Privacy Policy'),
(508, 'Description', 'We may update this Privacy Policy from time to time to reflect changes in our information practices. We will notify you of any material changes by posting the updated Privacy Policy on our Website and updating the effective date at the top. We encourage you to review this Privacy Policy periodically for any updates.', 'textarea', 25, 'Changes to this Privacy Policy'),
(509, 'Heading', 'Contact Us', 'text', 25, 'Contact Us'),
(510, 'Description', 'If you have any questions, concerns, or requests regarding this Privacy Policy or our privacy practices, please contact us at: JJMI Brokers Holding AG Company - the city of zug - Bahnhofstrasse - - 21-6300 ZUG - Downtown United Arab Emirates. +971 44096705 Fax: +971 44096740 Thank you for taking the time to read our Privacy Policy.', 'textarea', 25, 'Contact Us'),
(511, 'Banner Background', 'uploads/1695037733_image.jpg', 'file', 26, 'Banner'),
(512, 'Banner Heading 1', 'Term & Conditions', 'text', 26, 'Banner'),
(513, 'Heading', 'Term & Condition', 'text', 26, 'Our Terms'),
(514, 'Description', 'Thank you for visiting JMIBrokers.com (the \"Website\"). At JMIBrokers, we prioritize the privacy and security of your personal information. This Privacy Policy outlines how we collect, use, disclose, and protect the information you provide to us when using our Website. By accessing or using our Website, you agree to the terms of this Privacy Policy.', 'textarea', 26, 'Our Terms'),
(515, 'Heading', 'Information We Collect', 'text', 26, 'Information We Collect'),
(516, 'Description', '1.1 Personal Information: When you visit our Website, we may collect personal information that you voluntarily provide to us, such as your name, email address, phone number, and any other information you choose to provide. We may collect this information when you fill out contact forms, subscribe to our newsletters, request information, or interact with our Website\'s features and services.', 'textarea', 26, 'Information We Collect'),
(517, 'Description 2', '1.2 Automatically Collected Information: We may also automatically collect certain information when you visit our Website, such as your IP address, browser type, referring/exit pages, operating system, and date/time stamps. This information is collected through cookies, web beacons, and other tracking technologies. Please refer to our \"Cookie Policy\" for more details on the information collected through these technologies.', 'textarea', 26, 'Information We Collect'),
(518, 'Heading', 'Use of Information', 'text', 26, 'Use of Information'),
(519, 'Description', '2.1 Provide Services and Respond to Inquiries: We use the information collected to provide you with the services and information you request, including responding to your inquiries, processing transactions, and delivering requested materials.', 'textarea', 26, 'Use of Information'),
(520, 'Description 2', '2.2 Communication: We may use your personal information to communicate with you, such as sending newsletters, updates, promotional offers, and other relevant information about our services. You can opt-out of receiving such communications at any time by following the instructions provided in the communication.', 'textarea', 26, 'Use of Information'),
(521, 'Description 3', '2.3 Analytics and Improvement: We may use the information collected to analyze and improve our Website\'s performance and functionality, understand user preferences, and enhance user experiences.', 'textarea', 26, 'Use of Information'),
(522, 'Description 4', '2.4 Legal Compliance and Protection: We may disclose your personal information to comply with applicable laws, regulations, or legal processes. We may also disclose information to protect and defend our rights, property, or safety, or the rights, property, or safety of our users or others.', 'textarea', 26, 'Use of Information'),
(523, 'Heading', 'Information Sharing', 'text', 26, 'Information Sharing'),
(524, 'Description', 'We understand the importance of safeguarding your personal information and do not sell, trade, or otherwise transfer it to third parties without your consent, except as described in this Privacy Policy. We may share your information in the following circumstances:', 'textarea', 26, 'Information Sharing'),
(525, 'Description 2', '3.1 Service Providers: We may engage trusted third-party service providers to assist us in operating our Website and providing our services. These service providers have access to your personal information only to perform specific tasks on our behalf and are obligated to protect your information.', 'textarea', 26, 'Information Sharing'),
(526, 'Description 3', '3.2 Business Transfers: If JMIBrokers undergoes a merger, acquisition, or sale of all or a portion of its assets, your personal information may be transferred as part of the transaction. We will notify you via email and/or a prominent notice on our Website of any change in ownership or uses of your personal information.', 'textarea', 26, 'Information Sharing'),
(527, 'Description 4', '3.3 Legal Requirements: We may disclose your personal information if required to do so by law or if we believe in good faith that such disclosure is necessary to:', 'textarea', 26, 'Information Sharing'),
(528, 'Description 5', 'Comply with legal obligations or respond to lawful requests and legal processes.', 'textarea', 26, 'Information Sharing'),
(529, 'Description 6', 'Protect and defend our rights, property, or safety, or the rights, property, or safety of our users or others.', 'textarea', 26, 'Information Sharing'),
(530, 'Description 7', 'Data Security', 'textarea', 26, 'Information Sharing'),
(531, 'Description 8', 'We employ industry-standard security measures to protect the personal information you provide to us. However, please note that no method of transmission over the internet or electronic storage is completely secure. While we strive to use commercially acceptable means to protect your personal information, we cannot guarantee its absolute security.', 'textarea', 26, 'Information Sharing'),
(532, 'Description 9', 'Your Choices', 'textarea', 26, 'Information Sharing'),
(533, 'Description 10', '5.1 Accessing and Updating Information: You have the right to access, update, or delete your personal information. If you would like to do so, please contact us using the information provided at the end of this Privacy Policy.', 'textarea', 26, 'Information Sharing'),
(534, 'Description 11', '5.2 Cookies: You can manage your cookie preferences by adjusting the settings in your web browser. Please refer to our \"Cookie Policy\" for more information on how to manage cookies.', 'textarea', 26, 'Information Sharing'),
(535, 'Heading', 'Third-Party Websites', 'text', 26, 'Third-Party Websites'),
(536, 'Description', 'Our Website may contain links to third-party websites. This Privacy Policy does not apply to those websites, and we encourage you to review their respective privacy policies. We have no control over, and assume no responsibility for the content, privacy policies, or practices of any third-party websites or services.', 'textarea', 26, 'Third-Party Websites'),
(537, 'Heading', 'Children\'s Privacy', 'text', 26, 'Children Privacy'),
(538, 'Description', 'Our Website is not intended for individuals under the age of 18. We do not knowingly collect personal information from children. If you believe that we have inadvertently collected personal information from a child, please contact us, and we will take immediate steps to delete the information from our records.', 'textarea', 26, 'Children Privacy'),
(539, 'Heading', 'Changes to this Privacy Policy', 'text', 26, 'Changes to this Privacy Policy'),
(540, 'Description', 'We may update this Privacy Policy from time to time to reflect changes in our information practices. We will notify you of any material changes by posting the updated Privacy Policy on our Website and updating the effective date at the top. We encourage you to review this Privacy Policy periodically for any updates.', 'textarea', 26, 'Changes to this Privacy Policy'),
(541, 'Heading', 'Contact Us', 'text', 26, 'Contact Us'),
(542, 'Description', 'If you have any questions, concerns, or requests regarding this Privacy Policy or our privacy practices, please contact us at: JJMI Brokers Holding AG Company - the city of zug - Bahnhofstrasse - - 21-6300 ZUG - Downtown United Arab Emirates. +971 44096705 Fax: +971 44096740 Thank you for taking the time to read our Privacy Policy.', 'textarea', 26, 'Contact Us'),
(543, 'Banner Background', 'uploads/1695037733_image.jpg', 'file', 27, 'Banner'),
(544, 'Banner Heading 1', 'Frequently Asked <br> Questions: JMI Brokers', 'text', 27, 'Banner'),
(545, 'Description', 'Find answers to commonly asked questions about JMI Brokers, where our dedicated team of professionals will guide you through modern <br> digital solutions in the industrial sector. Connect with us to discover how we can support your needs in the ever-evolving digital landscape.', 'text', 27, 'Banner'),
(546, 'Banner Background', 'uploads/1695037733_image.jpg', 'file', 28, 'Banner'),
(547, 'Banner Heading 1', 'Stock CFDs', 'text', 28, 'Banner'),
(548, 'Banner Description', 'Discover the world of forex trading with JMI Brokers, a leading online broker offering a wide range of currency trading <br> services. With our robust platform and cutting-edge technology, you can access the global forex market, trade major and <br> exotic currency pairs, and take advantage of market fluctuations to maximize your investment potential.', 'textarea', 28, 'Banner'),
(549, 'Banner Button Text', 'Demo Account', 'text', 28, 'Banner'),
(550, 'Banner Button URL', '#', 'text', 28, 'Banner'),
(551, 'Heading', 'Stock CFDs', 'text', 28, 'Stock CFDs'),
(552, 'Description', 'Diversify your trading portfolio with JMI Brokers\' Stock CFDs. Speculate on the price movements of individual stocks without owning the underlying assets. Benefit from rising and falling markets with long and short positions. Choose from a variety of prominent US and UK stocks for flexible trading options. Capitalize on market opportunities with JMI Brokers\' Stock CFDs, while carefully considering the associated risks. Start trading today for potential gains.', 'textarea', 28, 'Stock CFDs'),
(553, 'Heading', 'How to Calculate your Profit or Loss', 'text', 28, 'Calculate Profit Loss'),
(554, 'Description', '<li>The formula for working out your profit or loss for any CFD share is as follows:</li>                             <li>Long: (Buying) profit or loss = (exit price â€“ entry price) * lots traded</li>                             <li>Short: (Selling) profit or loss = (entry price â€“ exit price) * lots traded</li>', 'text', 28, 'Calculate Profit Loss'),
(555, 'Example 1', 'Example A:', 'text', 28, 'Calculate Profit Loss'),
(556, 'Description 1', '<li>1. You decide to buy 100 AAPL CFDs at $45 ,</li>\r\n                                            <li>2. The share price rises to $50 based on the companyâ€™s quarterly earnings.</li>\r\n                                            <li>3. You sell 100 AAPL CFDs at $50</li>\r\n                                            <li>4. Using the formula above for a long trade:</li>\r\n                                            <li>5. Profit or loss = (exit price â€“ entry price) * lots traded</li>\r\n                                            <li>6. The result would be +$500</li>', 'textarea', 28, 'Calculate Profit Loss'),
(557, 'Example 2', 'Example B:', 'text', 28, 'Calculate Profit Loss'),
(558, 'Description 2', '<li>1. You decide to sell 5 Amazon CFDs at $1,900 as you are expecting the price to fall.</li>\r\n                                            <li>2. However, the price goes up based on increasing company sales.</li>\r\n                                            <li>3. Therefore, you decide to close your position at the price of $1,919.</li>\r\n                                            <li>4. Using the formula above for a short trade:</li>\r\n                                            <li>5. Profit or loss = (entry price â€“ exit price ) * lots traded</li>\r\n                                            <li>6. The result would be -$95.</li>', 'textarea', 28, 'Calculate Profit Loss'),
(559, 'Heading 1', 'Corporate Actions Formula', 'text', 28, 'Corporate Actions'),
(560, 'Description 1', '<li>1. The basic formula used is d = p x n</li>\r\n                                            <li>2. d = dividend</li>\r\n                                            <li>3. p = position</li>\r\n                                            <li>4. n = dividend declared/number of index points (dividend amount)</li>\r\n                                            <li>5. Hereâ€™s the calculation we use for the dividend for equities:</li>\r\n                                            <li>6. A client opens a long (buy) position on 10,000 CFD shares of Apple (AAPL.OQ), with a net dividend declared at 2p.</li>', 'textarea', 28, 'Corporate Actions'),
(561, 'Description 2', '<li>The calculation is:</li>\r\n                                            <li>1. d = 10,000 x 0.02 = $200 (credited).</li>\r\n                                            <li>2. Another example we can look at is that a client opens a short (sell) position on 5,000 CFD shares of Deutsche Bank (DBKGn.DE), with a net dividend declared at 5p.</li>', 'textarea', 28, 'Corporate Actions'),
(562, 'Heading', 'Commission on Stock CFDs*:', 'text', 28, 'Commission on Stock'),
(563, 'Description 1', '*JMI Brokers is running â€˜0 Commissions Promotionâ€™ across all stock CFDs. This promotion is valid on Starter Accounts for a limited time only. The commission applicable on shares is 0.0016 based on the notional value of the number of shares traded as following.', 'textarea', 28, 'Commission on Stock'),
(564, 'Button Text 1', 'Demo Account', 'text', 28, 'Commission on Stock'),
(565, 'Button URL 1', '#', 'text', 28, 'Commission on Stock'),
(566, 'Button Text 2', 'Open Live Account', 'text', 28, 'Commission on Stock'),
(567, 'Button URL 2', '#', 'text', 28, 'Commission on Stock'),
(568, 'Banner Background', 'uploads/1695037733_image.jpg', 'file', 29, 'Banner'),
(569, 'Banner Heading 1', 'Stock CFDs', 'text', 29, 'Banner'),
(570, 'Banner Description', 'Discover the world of forex trading with JMI Brokers, a leading online broker offering a wide range of currency trading <br> services. With our robust platform and cutting-edge technology, you can access the global forex market, trade major and <br> exotic currency pairs, and take advantage of market fluctuations to maximize your investment potential.', 'textarea', 29, 'Banner'),
(571, 'Banner Button Text', 'Demo Account', 'text', 29, 'Banner'),
(572, 'Banner Button URL', '#', 'text', 29, 'Banner'),
(573, 'Heading', 'Stock CFDs', 'text', 29, 'Stock CFDs'),
(574, 'Description', 'JMI Brokers is proud to offer a wide range of the most traded US & EU Stock CFDs, with a leverage of up to 1:5 and zero commissions*. Stock trading involves the buying and selling of shares in a particular asset or company. A stock trader will purchase shares, own them, then sell them, depending on the market value of the stock. Stock CFDs, on the other hand, allow you to trade the price movements of a particular asset or company, without the purchase of the physical shares themselves. With stock CFDs on MetaTrader4, traders can open a long (buy) position if the belief is that the value of the stock will go up, or a short (sell) position, if the belief is that the value of a stock will go down.', 'textarea', 29, 'Stock CFDs'),
(575, 'Heading', 'How to Calculate your Profit or Loss', 'text', 29, 'Calculate Profit Loss'),
(576, 'Description', '<li>The formula for working out your profit or loss for any CFD share is as follows:</li>                             <li>Long: (Buying) profit or loss = (exit price â€“ entry price) * lots traded</li>                             <li>Short: (Selling) profit or loss = (entry price â€“ exit price) * lots traded</li>', 'textarea', 29, 'Calculate Profit Loss'),
(577, 'Example 1', 'Example A:', 'text', 29, 'Calculate Profit Loss'),
(578, 'Description 1', '<li>1. You decide to buy 100 AAPL CFDs at $45 ,</li>\r\n                                            <li>2. The share price rises to $50 based on the companyâ€™s quarterly earnings.</li>\r\n                                            <li>3. You sell 100 AAPL CFDs at $50</li>\r\n                                            <li>4. Using the formula above for a long trade:</li>\r\n                                            <li>5. Profit or loss = (exit price â€“ entry price) * lots traded</li>\r\n                                            <li>6. The result would be +$500</li>', 'textarea', 29, 'Calculate Profit Loss'),
(579, 'Example 2', 'Example B:', 'text', 29, 'Calculate Profit Loss'),
(580, 'Description 2', '<li>1. You decide to sell 5 Amazon CFDs at $1,900 as you are expecting the price to fall.</li>\r\n                                            <li>2. However, the price goes up based on increasing company sales.</li>\r\n                                            <li>3. Therefore, you decide to close your position at the price of $1,919.</li>\r\n                                            <li>4. Using the formula above for a short trade:</li>\r\n                                            <li>5. Profit or loss = (entry price â€“ exit price ) * lots traded</li>\r\n                                            <li>6. The result would be -$95.</li>', 'textarea', 29, 'Calculate Profit Loss'),
(581, 'Heading 1', 'Corporate Actions Formula', 'text', 29, 'Corporate Actions'),
(582, 'Description 1', '<li>1. The basic formula used is d = p x n</li>\r\n                                            <li>2. d = dividend</li>\r\n                                            <li>3. p = position</li>\r\n                                            <li>4. n = dividend declared/number of index points (dividend amount)</li>\r\n                                            <li>5. Hereâ€™s the calculation we use for the dividend for equities:</li>\r\n                                            <li>6. A client opens a long (buy) position on 10,000 CFD shares of Apple (AAPL.OQ), with a net dividend declared at 2p.</li>', 'textarea', 29, 'Corporate Actions'),
(583, 'Description 2', '<li>The calculation is:</li>\r\n                                            <li>1. d = 10,000 x 0.02 = $200 (credited).</li>\r\n                                            <li>2. Another example we can look at is that a client opens a short (sell) position on 5,000 CFD shares of Deutsche Bank (DBKGn.DE), with a net dividend declared at 5p.</li>', 'textarea', 29, 'Corporate Actions'),
(584, 'Heading', 'Commission on Stock CFDs*:', 'text', 29, 'Commission on Stock'),
(585, 'Description 1', '*JMI Brokers is running â€˜0 Commissions Promotionâ€™ across all stock CFDs. This promotion is valid on Starter Accounts for a limited time only. The commission applicable on shares is 0.0016 based on the notional value of the number of shares traded as following.', 'textarea', 29, 'Commission on Stock'),
(586, 'Button Text 1', 'Demo Account', 'text', 29, 'Commission on Stock'),
(587, 'Button URL 1', '#', 'text', 29, 'Commission on Stock'),
(588, 'Button Text 2', 'Open Live Account', 'text', 29, 'Commission on Stock'),
(589, 'Button URL 2', '#', 'text', 29, 'Commission on Stock'),
(590, 'Banner Background', 'uploads/1695037733_image.jpg', 'file', 30, 'Banner'),
(591, 'Banner Heading 1', 'Precious Metals', 'text', 30, 'Banner'),
(592, 'Banner Description', 'Unlock the allure of Precious Metals. Invest in the timeless value of gold, silver, platinum, and other precious metals. <br> Diversify your portfolio and hedge against economic uncertainties with these sought-after assets. Discover the potential <br> for long-term growth and stability with Precious Metals.', 'textarea', 30, 'Banner'),
(593, 'Banner Button Text', 'Demo Account', 'text', 30, 'Banner'),
(594, 'Banner Button URL', '#', 'text', 30, 'Banner'),
(595, 'Heading', 'Spot Precious <br> Metals traded at <br> JMI: Gold & Silver', 'text', 30, 'Spot Precious Metals'),
(596, 'Description', 'Nations around the world embraced gold and silver as a store of wealth and a medium of international exchange. Individuals have sought to possess precious metals as insurance against the day-to-day uncertainties of paper money. Gold, silver, platinum and palladium constitute the majority of trading in precious metals.', 'textarea', 30, 'Spot Precious Metals'),
(597, 'Description 2', 'Trading in precious metal futures market or spot market in a speculative manner provides an important alternative to traditional means of investing in precious metals such as gold bullion, coins, and mining stocks, and where substantial profits, as well as losses can be made. Trading contracts in precious metals also provide valuable trading tools for commercial producers and the users of these metals <br> <br>\r\n\r\n                                Precious metals are traded on the futures and spot markets in contracts (a contract of gold is 100oz while a contract of silver is 5000oz). On the spot market, precious metals are usually bought or sold based on a value date of 48 hours which can be rolled over on a daily basis thereafter. Trading on the futures market is done by buying or selling precious metal for a specific settlement date in the future. For example July Gold, can be bought in March for July settlement.Trade with JMI Brokers now the most traded, liquid and easily understood precious metals products on earth: Gold and Silver.We offer our clients very tight spread on spot gold and silver with uninterrupted live pricing on our platform JMI Brokers Trading as well as trading precious metals futures with market spreads.', 'textarea', 30, 'Spot Precious Metals'),
(598, 'Description 3', 'Benefits of trading with Precious Metals:', 'textarea', 30, 'Spot Precious Metals'),
(599, 'Description 4', '<li class=\'p-fs5 first\'>Precious metals have been a solid hedge against a declining U.S. dollar</li>\r\n                                <li class=\'p-fs5\'>Precious metals have been a proven safe-haven in times of war, political strife and uncertainty</li>\r\n                                <li class=\'p-fs5 last\'>Precious metals can offer outstanding price appreciation and profit potential</li>', 'textarea', 30, 'Spot Precious Metals'),
(600, 'Image', 'uploads/1697145308_image.png', 'file', 30, 'Spot Precious Metals'),
(601, 'Heading', 'Major Currencies', 'text', 30, 'Major Currencies'),
(602, 'Description', 'Profit from all market movements - With forex, the market is continuously moving, so there are always trading opportunities, whether a currency <br> is strengthening or weakening in relation to another currency. Thus, a trader has the ability to profit on both short and long trading strategies.', 'textarea', 30, 'Major Currencies');
INSERT INTO `page_meta` (`id`, `field_name`, `field_value`, `field_type`, `page_id`, `group_name`) VALUES
(613, 'Banner Background', 'uploads/1695037733_image.jpg', 'file', 31, 'Banner'),
(614, 'Banner Heading 1', 'Trade Global Currencies <br> with JMI Brokers', 'text', 31, 'Banner'),
(615, 'Banner Description', 'Discover the world of forex trading with JMI Brokers, a leading online broker offering a wide range of currency trading <br> services. With our robust platform and cutting-edge technology, you can access the global forex market, trade major and <br> exotic currency pairs, and take advantage of market fluctuations to maximize your investment potential.', 'textarea', 31, 'Banner'),
(616, 'Banner Button Text', 'Demo Account', 'text', 31, 'Banner'),
(617, 'Banner Button URL', '#', 'text', 31, 'Banner'),
(618, 'Heading', 'Trade Global <br> Currencies with JMI Brokers', 'text', 31, 'Trade Global'),
(619, 'Description', 'At JMI Brokers, we provide a secure and transparent trading environment, ensuring the safety of your funds and the integrity of your trades. Our experienced team of forex professionals is dedicated to assisting you every step of the way, offering personalized support, educational resources, and market insights to help you make informed trading decisions.', 'textarea', 31, 'Trade Global'),
(620, 'Heading', 'How It Works:', 'text', 31, 'How It Works'),
(621, 'Description', 'Our experienced team of forex professionals is dedicated to assisting you every step of the way, offering <br> personalized support, educational resources, and market insights to help you make informed trading decisions.', 'textarea', 31, 'How It Works'),
(622, 'Heading 1', 'Account Setup', 'text', 31, 'How It Works'),
(623, 'Description 1', 'Open an account with JMI Brokers by completing a simple registration process. Choose the account type that suits your trading needs.', 'textarea', 31, 'How It Works'),
(624, 'Heading 2', 'Deposit Funds:', 'text', 31, 'How It Works'),
(625, 'Description 2', 'Fund your trading account using a variety of secure payment methods. Select your preferred deposit option and follow the instructions provided.', 'textarea', 31, 'How It Works'),
(626, 'Heading 3', 'Platform Access', 'text', 31, 'How It Works'),
(627, 'Description 3', 'Once your account is funded, you\'ll gain access to our user-friendly trading platform. Download our platform or trade directly on the web and mobile versions.', 'textarea', 31, 'How It Works'),
(628, 'Heading 4', 'Execute Trades:', 'text', 31, 'How It Works'),
(629, 'Description 4', 'Use the platform\'s tools and features to analyze the market, place trades, set stop-loss and take-profit levels, and monitor your positions in real-time.', 'textarea', 31, 'How It Works'),
(630, 'Heading 5', 'Manage Your Account:', 'text', 31, 'How It Works'),
(631, 'Description 5', 'Monitor your account balance, track your trading performance, and make withdrawals or additional deposits as needed.', 'textarea', 31, 'How It Works'),
(632, 'Image', 'uploads/1697137224_image.jpg', 'file', 31, 'How It Works'),
(633, 'Heading', 'Major Currencies', 'text', 31, 'Major Currencies'),
(634, 'Description', 'Profit from all market movements - With forex, the market is continuously moving, so there are always trading opportunities, whether a currency <br> is strengthening or weakening in relation to another currency. Thus, a trader has the ability to profit on both short and long trading strategies.', 'textarea', 31, 'Major Currencies'),
(635, 'Heading', 'Major Currencies', 'text', 31, 'Major Currencies 1'),
(636, 'Description', 'Profit from all market movements - With forex, the market is continuously moving, so there are always trading opportunities, whether a currency <br> is strengthening or weakening in relation to another currency. Thus, a trader has the ability to profit on both short and long trading strategies.', 'textarea', 31, 'Major Currencies 1'),
(637, 'Heading', 'Cross Rates', 'text', 31, 'Cross Rates'),
(638, 'Description', 'Profit from all market movements - With forex, the market is continuously moving, so there are always trading opportunities, whether a currency <br> is strengthening or weakening in relation to another currency. Thus, a trader has the ability to profit on both short and long trading strategies.', 'textarea', 31, 'Cross Rates'),
(639, 'Heading', 'Example 1: Buying EUR / USD Contract', 'text', 30, 'Example 1'),
(640, 'Description', '<li>1.(Close price - open price) - (1.3810 - 1.3743 = 67 points)</li>\r\n                                    <li>2.(points * pip value * number of lots) - (67 * 10 * 2 = 1340 US$) </li>\r\n                                    <li>3.So the gross profit for the previous transaction is 1340 $. </li>', 'textarea', 30, 'Example 1'),
(641, 'Description 2', 'A client believes that the EUR is due to rise in the future against US dollar, to get benefit of the situation the client intends to buy EURUSD. EURUSD is quoted at 1.3740 - 1.3743, the client buys 2 lots at 1.3743, the client requires minimum deposit of 1000 $ for each lot.EURUSD prices rise to 1.3810 - 1.3813, the client is satisfied with his profit and wants to close his positions, he therefore sells 2 lots of EURUSD at 1.3810, so the client has made profit of 67 points (1.3810 - 1.3743 = 0.0067) . To calculate the profit we will do the following:\r\n                           <br>       <span class=\'bld\'>*Commission charges are NOT included in the above calculations</span>', 'textarea', 30, 'Example 1'),
(642, 'Heading', 'Example 2: Buying USD/JPY Contract', 'text', 30, 'Example 2'),
(643, 'Description', '<li>1.(Close price - open price) - (112.95 - 112.53 = 0.42 points)</li>\r\n                                    <li>2.(points * Contract Size * one lot / Closing Price) - (42 * 100.000 * 1/112.95 = 371.84 US$) </li>\r\n                                    <li>3.(profit for one lot * Number of lots) - (371.84 * 4 = 1487.36$) </li>\r\n                                    <li>4.So the gross profit for the previous transaction is 1487.36 $. </li>', 'textarea', 30, 'Example 2'),
(644, 'Description 2', 'A client believes that the JPY will weaken in the future against US dollar, to get benefit of the situation the client intends to buy USDJPY. (Buying USD & selling JPY) USDJPY is quoted at 112.50- 112.53, the client buys 4 lots at 112.53, the client requires minimum deposit of 1000 $ for each lot.USDJPY prices rise to 112.95- 112.98, the client is satisfied with his profit and wants to close his positions, he therefore sells 4 lots of USDJPY at 112.95, so the client has made profit of 42 points (112.95 - 112.53 = 0.42). To calculate the profit we will do the following:*Commission charges are NOT included in the above calculations', 'textarea', 30, 'Example 2'),
(645, 'Button Text 1', 'Demo Account', 'text', 30, 'Bottom Buttons'),
(646, 'Button URL 1', '#', 'text', 30, 'Bottom Buttons'),
(647, 'Button Text 2', 'Open Live Account', 'text', 30, 'Bottom Buttons'),
(648, 'Button URL 2', '#', 'text', 30, 'Bottom Buttons'),
(649, 'Heading', 'Example 1: Buying EUR / USD Contract', 'text', 31, 'Example 1'),
(650, 'Description', '<li>1.(Close price - open price) - (1.3810 - 1.3743 = 67 points)</li>\r\n                                    <li>2.(points * pip value * number of lots) - (67 * 10 * 2 = 1340 US$) </li>\r\n                                    <li>3.So the gross profit for the previous transaction is 1340 $. </li>', 'textarea', 31, 'Example 1'),
(651, 'Description 2', 'A client believes that the EUR is due to rise in the future against US dollar, to get benefit of the situation the client intends to buy EURUSD. EURUSD is quoted at 1.3740 - 1.3743, the client buys 2 lots at 1.3743, the client requires minimum deposit of 1000 $ for each lot.EURUSD prices rise to 1.3810 - 1.3813, the client is satisfied with his profit and wants to close his positions, he therefore sells 2 lots of EURUSD at 1.3810, so the client has made profit of 67 points (1.3810 - 1.3743 = 0.0067) . To calculate the profit we will do the following:\r\n               <br>                 <span class=\'bld\'>*Commission charges are NOT included in the above calculations</span>', 'textarea', 31, 'Example 1'),
(652, 'Heading', 'Example 2: Buying USD/JPY Contract', 'text', 31, 'Example 2'),
(653, 'Description', '<li>1.(Close price - open price) - (112.95 - 112.53 = 0.42 points)</li>\r\n                                    <li>2.(points * Contract Size * one lot / Closing Price) - (42 * 100.000 * 1/112.95 = 371.84 US$) </li>\r\n                                    <li>3.(profit for one lot * Number of lots) - (371.84 * 4 = 1487.36$) </li>\r\n                                    <li>4.So the gross profit for the previous transaction is 1487.36 $. </li>', 'textarea', 31, 'Example 2'),
(654, 'Description 2', 'A client believes that the JPY will weaken in the future against US dollar, to get benefit of the situation the client intends to buy USDJPY. (Buying USD & selling JPY) USDJPY is quoted at 112.50- 112.53, the client buys 4 lots at 112.53, the client requires minimum deposit of 1000 $ for each lot.USDJPY prices rise to 112.95- 112.98, the client is satisfied with his profit and wants to close his positions, he therefore sells 4 lots of USDJPY at 112.95, so the client has made profit of 42 points (112.95 - 112.53 = 0.42). To calculate the profit we will do the following:*Commission charges are NOT included in the above calculations', 'textarea', 31, 'Example 2'),
(655, 'Button Text 1', 'Demo Account', 'text', 31, 'Bottom Buttons'),
(656, 'Button URL 1', '#', 'text', 31, 'Bottom Buttons'),
(657, 'Button Text 2', 'Open Live Account', 'text', 31, 'Bottom Buttons'),
(658, 'Button URL 2', '#', 'text', 31, 'Bottom Buttons'),
(659, 'Banner Background', 'uploads/1695037733_image.jpg', 'file', 32, 'Banner'),
(660, 'Banner Heading 1', 'Trade Global Currencies <br> with JMI Brokers', 'text', 32, 'Banner'),
(661, 'Banner Description', 'Discover the world of forex trading with JMI Brokers, a leading online broker offering a wide range of currency trading <br> services. With our robust platform and cutting-edge technology, you can access the global forex market, trade major and <br> exotic currency pairs, and take advantage of market fluctuations to maximize your investment potential.', 'textarea', 32, 'Banner'),
(662, 'Banner Button Text', 'Demo Account', 'text', 32, 'Banner'),
(663, 'Banner Button URL', '#', 'text', 32, 'Banner'),
(664, 'Heading', 'Trade Global <br> Currencies with JMI Brokers', 'text', 32, 'Trade Global'),
(665, 'Description', 'At JMI Brokers, we provide a secure and transparent trading environment, ensuring the safety of your funds and the integrity of your trades. Our experienced team of forex professionals is dedicated to assisting you every step of the way, offering personalized support, educational resources, and market insights to help you make informed trading decisions.', 'textarea', 32, 'Trade Global'),
(666, 'Heading', 'How It Works:', 'text', 32, 'How It Works'),
(667, 'Description', 'Our experienced team of forex professionals is dedicated to assisting you every step of the way, offering <br> personalized support, educational resources, and market insights to help you make informed trading decisions.', 'textarea', 32, 'How It Works'),
(668, 'Heading 1', 'Account Setup', 'text', 32, 'How It Works'),
(669, 'Description 1', 'Open an account with JMI Brokers by completing a simple registration process. Choose the account type that suits your trading needs.', 'textarea', 32, 'How It Works'),
(670, 'Heading 2', 'Deposit Funds:', 'text', 32, 'How It Works'),
(671, 'Description 2', '', 'textarea', 3, 'How It Works'),
(672, 'Heading 3', 'Platform Access', 'text', 32, 'How It Works'),
(673, 'Description 3', 'Once your account is funded, you\'ll gain access to our user-friendly trading platform. Download our platform or trade directly on the web and mobile versions.', 'textarea', 32, 'How It Works'),
(674, 'Heading 4', 'Execute Trades:', 'text', 32, 'How It Works'),
(675, 'Description 4', 'Use the platform\'s tools and features to analyze the market, place trades, set stop-loss and take-profit levels, and monitor your positions in real-time.', 'textarea', 32, 'How It Works'),
(676, 'Heading 5', 'Manage Your Account:', 'text', 32, 'How It Works'),
(677, 'Description 5', 'Monitor your account balance, track your trading performance, and make withdrawals or additional deposits as needed.', 'textarea', 32, 'How It Works'),
(678, 'Image', 'uploads/1697138306_image.jpg', 'file', 32, 'How It Works'),
(679, 'Heading', 'Major Currencies', 'text', 32, 'Major Currencies'),
(680, 'Description', 'Profit from all market movements - With forex, the market is continuously moving, so there are always trading opportunities, whether a currency <br> is strengthening or weakening in relation to another currency. Thus, a trader has the ability to profit on both short and long trading strategies.', 'textarea', 32, 'Major Currencies'),
(681, 'Heading', 'Major Currenciesa', 'text', 32, 'Major Currencies 1'),
(682, 'Description', 'Profit from all market movements - With forex, the market is continuously moving, so there are always trading opportunities, whether a currency <br> is strengthening or weakening in relation to another currency. Thus, a trader has the ability to profit on both short and long trading strategies.', 'textarea', 32, 'Major Currencies 1'),
(683, 'Heading', 'Cross Rates', 'text', 32, 'Cross Rates'),
(684, 'Description', 'Profit from all market movements - With forex, the market is continuously moving, so there are always trading opportunities, whether a currency <br> is strengthening or weakening in relation to another currency. Thus, a trader has the ability to profit on both short and long trading strategies.', 'textarea', 32, 'Cross Rates'),
(685, 'Heading', 'Example 1: Buying EUR / USD Contract', 'text', 32, 'Example 1'),
(686, 'Description', '<li>1.(Close price - open price) - (1.3810 - 1.3743 = 67 points)</li>\r\n                                    <li>2.(points * pip value * number of lots) - (67 * 10 * 2 = 1340 US$) </li>\r\n                                    <li>3.So the gross profit for the previous transaction is 1340 $. </li>', 'textarea', 32, 'Example 1'),
(687, 'Description 2', 'A client believes that the EUR is due to rise in the future against US dollar, to get benefit of the situation the client intends to buy EURUSD. EURUSD is quoted at 1.3740 - 1.3743, the client buys 2 lots at 1.3743, the client requires minimum deposit of 1000 $ for each lot.EURUSD prices rise to 1.3810 - 1.3813, the client is satisfied with his profit and wants to close his positions, he therefore sells 2 lots of EURUSD at 1.3810, so the client has made profit of 67 points (1.3810 - 1.3743 = 0.0067) . To calculate the profit we will do the following:\r\n               <br>                 <span class=\'bld\'>*Commission charges are NOT included in the above calculations</span>', 'textarea', 32, 'Example 1'),
(688, 'Heading', 'Example 2: Buying USD/JPY Contract', 'text', 32, 'Example 2'),
(689, 'Description', '<li>1.(Close price - open price) - (112.95 - 112.53 = 0.42 points)</li>\r\n                                    <li>2.(points * Contract Size * one lot / Closing Price) - (42 * 100.000 * 1/112.95 = 371.84 US$) </li>\r\n                                    <li>3.(profit for one lot * Number of lots) - (371.84 * 4 = 1487.36$) </li>\r\n                                    <li>4.So the gross profit for the previous transaction is 1487.36 $. </li>', 'textarea', 32, 'Example 2'),
(690, 'Description 2', 'A client believes that the JPY will weaken in the future against US dollar, to get benefit of the situation the client intends to buy USDJPY. (Buying USD & selling JPY) USDJPY is quoted at 112.50- 112.53, the client buys 4 lots at 112.53, the client requires minimum deposit of 1000 $ for each lot.USDJPY prices rise to 112.95- 112.98, the client is satisfied with his profit and wants to close his positions, he therefore sells 4 lots of USDJPY at 112.95, so the client has made profit of 42 points (112.95 - 112.53 = 0.42). To calculate the profit we will do the following:*Commission charges are NOT included in the above calculations', 'textarea', 32, 'Example 2'),
(691, 'Button Text 1', 'Demo Account', 'text', 32, 'Bottom Buttons'),
(692, 'Button URL 1', '#', 'text', 32, 'Bottom Buttons'),
(693, 'Button Text 2', 'Open Live Account', 'text', 32, 'Bottom Buttons'),
(694, 'Button URL 2', '#', 'text', 32, 'Bottom Buttons'),
(695, 'Banner Background', 'uploads/1695037733_image.jpg', 'file', 33, 'Banner'),
(696, 'Banner Heading 1', 'Future (OTC) Energies', 'text', 33, 'Banner'),
(697, 'Banner Description', 'Power your investments with Future (OTC) Energies. Explore the exciting opportunities in renewable energy, oil, gas, and <br> other energy sources. Benefit from the over-the-counter (OTC) market, where customized energy contracts offer flexibility <br> and tailored solutions. Tap into the potential of this dynamic sector and maximize your returns with Future (OTC) Energies.', 'textarea', 33, 'Banner'),
(698, 'Banner Button Text', 'Demo Account', 'text', 33, 'Banner'),
(699, 'Banner Button URL', '#', 'text', 33, 'Banner'),
(700, 'Heading', 'Future (OTC) <br>Energies ', 'text', 33, 'Future OTC'),
(701, 'Description', 'Nations around the world embraced gold and silver as a store of wealth and a medium of international exchange. Individuals have sought to possess precious metals as insurance against the day-to-day uncertainties of paper money. Gold, silver, platinum and palladium constitute the majority of trading in precious metals.', 'textarea', 33, 'Future OTC'),
(702, 'Description 2', 'Crude oil serves as the primary raw material for the production of gasoline, heating oil, jet fuel, propane, petrochemicals, and various other products. The price of crude oil is determined by the movements on three major international petroleum exchanges: the New York Mercantile Exchange, the International Petroleum Exchange in London, and the Singapore International Monetary Exchange.', 'textarea', 33, 'Future OTC'),
(703, 'Description 3', 'Crude oil prices have historically exhibited high volatility and are heavily influenced by the forces of supply and demand. Similar to other commodities, crude oil prices experience significant fluctuations during periods of scarcity, oversupply, and political instability. The price cycle of crude oil can extend over several years.', 'textarea', 33, 'Future OTC'),
(704, 'Description 4', 'There are two main types of crude oil: sour crude, primarily originating from OPEC countries, and West Texas Intermediate (WTI) or sweet crude. The price of WTI is traded on the New York Mercantile Exchange (NYMEX). Crude oil futures trading on the NYMEX began in 1983, and it is currently one of the most actively traded commodities.', 'textarea', 33, 'Future OTC'),
(705, 'Description 5', 'The contracts are quoted in dollars and cents per barrel, with each contract representing 1,000 US barrels (42,000 US gallons). The minimum price fluctuation for crude oil is US$0.001 per barrel (US$10 per contract).', 'textarea', 33, 'Future OTC'),
(706, 'Image', 'uploads/1697138688_image.png', 'file', 33, 'Future OTC'),
(707, 'Heading', 'Crude oil is the raw material', 'text', 33, 'Crude oil is the raw material'),
(708, 'Description', 'Crude oil Futures trading has always been of tremendous interest to speculators who hope to profit from the ever changing price of this\r\ncommodity.JMI Brokers offers (OTC) Light Sweet Crude Oil and Natural Gas Contracts. Crude Oil and Natural Gas are the world\'s most actively\r\ntraded Energy contracts. Both contracts have Transparent pricing and deep liquidity and easy-to-access industry informatio', 'textarea', 33, 'Crude oil is the raw material'),
(709, 'Heading', 'Example 1: Buying EUR / USD Contract', 'text', 33, 'Example 1'),
(710, 'Description', '<li>1.(Close price - open price) - (1.3810 - 1.3743 = 67 points)</li>\r\n                                    <li>2.(points * pip value * number of lots) - (67 * 10 * 2 = 1340 US$) </li>\r\n                                    <li>3.So the gross profit for the previous transaction is 1340 $. </li>', 'textarea', 33, 'Example 1'),
(711, 'Description 2', ' A client believes that the EUR is due to rise in the future against US dollar, to get benefit of the situation the client intends to buy EURUSD. EURUSD is quoted at 1.3740 - 1.3743, the client buys 2 lots at 1.3743, the client requires minimum deposit of 1000 $ for each lot.EURUSD prices rise to 1.3810 - 1.3813, the client is satisfied with his profit and wants to close his positions, he therefore sells 2 lots of EURUSD at 1.3810, so the client has made profit of 67 points (1.3810 - 1.3743 = 0.0067) . To calculate the profit we will do the following:\r\n                                <span class=\'bld\'>*Commission charges are NOT included in the above calculations</span>', 'textarea', 33, 'Example 1'),
(712, 'Heading', 'Example 2: Buying USD/JPY Contract', 'text', 33, 'Example 2'),
(713, 'Description', '<li>1.(Close price - open price) - (112.95 - 112.53 = 0.42 points)</li>\r\n                                    <li>2.(points * Contract Size * one lot / Closing Price) - (42 * 100.000 * 1/112.95 = 371.84 US$) </li>\r\n                                    <li>3.(profit for one lot * Number of lots) - (371.84 * 4 = 1487.36$) </li>\r\n                                    <li>4.So the gross profit for the previous transaction is 1487.36 $. </li>', 'textarea', 33, 'Example 2'),
(714, 'Description 2', 'A client believes that the JPY will weaken in the future against US dollar, to get benefit of the situation the client intends to buy USDJPY. (Buying USD & selling JPY) USDJPY is quoted at 112.50- 112.53, the client buys 4 lots at 112.53, the client requires minimum deposit of 1000 $ for each lot.USDJPY prices rise to 112.95- 112.98, the client is satisfied with his profit and wants to close his positions, he therefore sells 4 lots of USDJPY at 112.95, so the client has made profit of 42 points (112.95 - 112.53 = 0.42). To calculate the profit we will do the following:*Commission charges are NOT included in the above calculations', 'textarea', 33, 'Example 2'),
(715, 'Button Text 1', 'Demo Account', 'text', 33, 'Bottom Buttons'),
(716, 'Button URL 1', '#', 'text', 33, 'Bottom Buttons'),
(717, 'Button Text 2', 'Open Live Account', 'text', 33, 'Bottom Buttons'),
(718, 'Button URL 2', '#', 'text', 33, 'Bottom Buttons'),
(719, 'Banner Background', 'uploads/1695037733_image.jpg', 'file', 34, 'Banner'),
(720, 'Banner Heading 1', 'Future (OTC) Energies', 'text', 34, 'Banner'),
(721, 'Banner Description', 'Power your investments with Future (OTC) Energies. Explore the exciting opportunities in renewable energy, oil, gas, and <br> other energy sources. Benefit from the over-the-counter (OTC) market, where customized energy contracts offer flexibility <br> and tailored solutions. Tap into the potential of this dynamic sector and maximize your returns with Future (OTC) Energies.', 'textarea', 34, 'Banner'),
(722, 'Banner Button Text', 'Demo Account', 'text', 34, 'Banner'),
(723, 'Banner Button URL', '#', 'text', 34, 'Banner'),
(724, 'Heading', 'Future (OTC) <br>Energies ', 'text', 34, 'Future OTC'),
(725, 'Description', 'Nations around the world embraced gold and silver as a store of wealth and a medium of international exchange. Individuals have sought to possess precious metals as insurance against the day-to-day uncertainties of paper money. Gold, silver, platinum and palladium constitute the majority of trading in precious metals.', 'textarea', 34, 'Future OTC'),
(726, 'Description 2', 'Crude oil serves as the primary raw material for the production of gasoline, heating oil, jet fuel, propane, petrochemicals, and various other products. The price of crude oil is determined by the movements on three major international petroleum exchanges: the New York Mercantile Exchange, the International Petroleum Exchange in London, and the Singapore International Monetary Exchange.', 'textarea', 34, 'Future OTC'),
(727, 'Description 3', 'Crude oil prices have historically exhibited high volatility and are heavily influenced by the forces of supply and demand. Similar to other commodities, crude oil prices experience significant fluctuations during periods of scarcity, oversupply, and political instability. The price cycle of crude oil can extend over several years.', 'textarea', 34, 'Future OTC'),
(728, 'Description 4', 'There are two main types of crude oil: sour crude, primarily originating from OPEC countries, and West Texas Intermediate (WTI) or sweet crude. The price of WTI is traded on the New York Mercantile Exchange (NYMEX). Crude oil futures trading on the NYMEX began in 1983, and it is currently one of the most actively traded commodities.', 'textarea', 34, 'Future OTC'),
(729, 'Description 5', 'The contracts are quoted in dollars and cents per barrel, with each contract representing 1,000 US barrels (42,000 US gallons). The minimum price fluctuation for crude oil is US$0.001 per barrel (US$10 per contract).', 'textarea', 34, 'Future OTC'),
(730, 'Image', 'uploads/1697139430_image.png', 'file', 34, 'Future OTC'),
(731, 'Heading', 'Crude oil is the raw material', 'text', 34, 'Crude oil is the raw material'),
(732, 'Description', 'Crude oil Futures trading has always been of tremendous interest to speculators who hope to profit from the ever changing price of this\r\ncommodity.JMI Brokers offers (OTC) Light Sweet Crude Oil and Natural Gas Contracts. Crude Oil and Natural Gas are the world\'s most actively\r\ntraded Energy contracts. Both contracts have Transparent pricing and deep liquidity and easy-to-access industry information', 'textarea', 34, 'Crude oil is the raw material'),
(733, 'Heading', 'Buying Crude Oil contract', 'text', 34, 'Example 1'),
(734, 'Description', '<li>(Opening price - closing price) - (67.125 - 66.40=0.725 points)</li>\r\n                                    <li>Loss = (0.725*Contract Size* No. of lots) = (0.725*1000*5=3625$) </li>\r\n                                    <li>Gross loss = 3625 $ </li>', 'textarea', 34, 'Example 1'),
(735, 'Description 2', 'A client believes that the price of light sweet crude oil contract will rise according to political reasons, the market now is 67.10/67.125. The client buys 5 lots of oil at 67.125. Out of expectations the oil price falls to 66.40/66.45. The client decides to sell 5 lots (close current positions) at 66.40. To calculate the loss of this client we should do the following:\r\n*Commission charges are NOT included in the above calculations.', 'textarea', 34, 'Example 1'),
(736, 'Heading', '', 'text', 34, 'Example 2'),
(737, 'Description', '', 'textarea', 34, 'Example 2'),
(738, 'Description 2', '', 'textarea', 34, 'Example 2'),
(739, 'Button Text 1', 'Demo Account', 'text', 34, 'Bottom Buttons'),
(740, 'Button URL 1', '#', 'text', 34, 'Bottom Buttons'),
(741, 'Button Text 2', 'Open Live Account', 'text', 34, 'Bottom Buttons'),
(742, 'Button URL 2', '#', 'text', 34, 'Bottom Buttons');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `section_id` int(11) NOT NULL,
  `section_name` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`section_id`, `section_name`, `is_active`) VALUES
(1, 'Footer', 1);

-- --------------------------------------------------------

--
-- Table structure for table `section_meta`
--

CREATE TABLE `section_meta` (
  `id` int(11) NOT NULL,
  `field_name` varchar(255) NOT NULL,
  `field_value` longtext NOT NULL,
  `field_type` varchar(255) NOT NULL,
  `section_id` int(11) NOT NULL,
  `group_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section_meta`
--

INSERT INTO `section_meta` (`id`, `field_name`, `field_value`, `field_type`, `section_id`, `group_name`) VALUES
(1, 'Stats Text 1', 'Trade Forex, CFDs & Crypto', 'text', 1, 'Trade Section'),
(2, 'Stats Image 1', 'uploads/1695136482_image.png', 'file', 1, 'Trade Section'),
(119, 'Stats Text 2', 'Copy Trading', 'text', 1, 'Trade Section'),
(120, 'Stats Image 2', 'uploads/1695136485_image.png', 'file', 1, 'Trade Section'),
(121, 'Stats Text 3', 'Up to 60% Revenue Share', 'text', 1, 'Trade Section'),
(122, 'Stats Image 3', 'uploads/1695136489_image.png', 'file', 1, 'Trade Section'),
(123, 'Stats Text 4', 'Up to 200% deposit bonus', 'text', 1, 'Trade Section'),
(124, 'Stats Image 4', 'uploads/1695136493_image.png', 'file', 1, 'Trade Section'),
(125, 'Stats Heading 1', 'No Obligation Quote', 'text', 1, 'Stats Data Bar'),
(126, 'Stats Description 1', 'Letâ€™s Get Started', 'text', 1, 'Stats Data Bar'),
(127, 'Stats Image 1', '', 'file', 1, 'Stats Data Bar'),
(128, 'Stats Heading 2', 'Talk to a Sales Rep', 'text', 1, 'Stats Data Bar'),
(129, 'Stats Description 2', '24/7 Consultancy', 'text', 1, 'Stats Data Bar'),
(130, 'Stats Image 2', '', 'file', 1, 'Stats Data Bar'),
(131, 'Stats Heading 3', 'Existing Customer?', 'text', 1, 'Stats Data Bar'),
(132, 'Stats Description 3', 'Contact Customer Support', 'text', 1, 'Stats Data Bar'),
(133, 'Stats Image 3', '', 'file', 1, 'Stats Data Bar'),
(134, 'Stats Heading 4', 'Not sure where to begin?', 'text', 1, 'Stats Data Bar'),
(135, 'Stats Description 4', 'Let us help start your project', 'text', 1, 'Stats Data Bar'),
(136, 'Stats Image 4', '', 'file', 1, 'Stats Data Bar'),
(137, 'Heading 1', 'Take Your Trading On The Go', 'text', 1, 'Take Your Trading'),
(138, 'Heading 2', 'Get Instant Access To The Global Markets With The JMI Traders App.', 'text', 1, 'Take Your Trading'),
(139, 'Ios Link', '#', 'text', 1, 'Take Your Trading'),
(140, 'Android Link', '#', 'text', 1, 'Take Your Trading'),
(141, 'Heading 1', 'JMI Brokers LTD is a licensed Financial Services Provider from Vanuatu Financial Services Commission and authorized to carry business on Dealing in Securities under Vanuatu Financial Services Commission (VFSC ) -', 'text', 1, 'Bottom'),
(142, 'Image 1', 'uploads/1695137138_image.png', 'file', 1, 'Bottom'),
(143, 'Description 1', 'Founded 2009. A Commonwealth licensed company with 3 licenses from the Financial Securities Authority VFSC License No. 15010 for trading in currencies, metals, shares of United States companies listed on the New York and Nasdaq exchanges, shares of British companies listed on the London Stock Exchange, goods, energy, and crypto cryptocurrencies and other CFDs . The company and all its shares are wholly owned by the Swiss European company JMI Brokers Holding AG , registered in Swiss commercial register CHE-334.229.499. Zug - Switzerland ðŸ‡¨ðŸ‡­. Most importantly, it is JMI Brokers with a full advance and guaranteed client deposits up to $500,000 through an insurance policy advertised on the company\'s official website.', 'textarea', 1, 'Bottom'),
(144, 'Heading 2', 'Risk warning', 'text', 1, 'Bottom'),
(145, 'Image 2', 'uploads/1695137142_image.png', 'file', 1, 'Bottom'),
(146, 'Description 2', 'High Risk Investment Warning: Trading foreign exchange and/or contracts for differences on margin carries a high level of risk, and may not be suitable for all investors. The possibility exists that you could sustain a loss in excess of your deposited funds and therefore, you should not speculate with capital that you cannot afford to lose. Before deciding to trade the products offered by JMI Brokers you should carefully consider your objectives, financial situation, needs and level of experience. You should be aware of all the risks associated with trading on margin. JMI Brokers provides general advice that does not take into account your objectives, financial situation or needs. The content of this Website must not be construed as personal advice. JMI Brokers recommends you seek advice from a separate financial advisor.All opinions, news, analysis, prices or other information contained on this website are provided as general market commentary and does not constitute investment advice, nor a solicitation or recommendation for you to buy or sell any over-the-counter product or other financial instrument.', 'textarea', 1, 'Bottom'),
(147, 'Copyright', 'This website is owned and operated by JMI Brokers LTD - All right reserved Â© 2023.', 'text', 1, 'Bottom'),
(148, 'Logo 1', 'uploads/1695137431_image.png', 'file', 1, 'Logos'),
(149, 'Logo 2', 'uploads/1695137434_image.png', 'file', 1, 'Logos'),
(150, 'Logo 3', 'uploads/1695137437_image.png', 'file', 1, 'Logos'),
(151, 'Logo 4', 'uploads/1695137450_image.png', 'file', 1, 'Logos'),
(152, 'Logo 5', 'uploads/1695137453_image.png', 'file', 1, 'Logos'),
(153, 'Logo 6', 'uploads/1695137457_image.png', 'file', 1, 'Logos'),
(154, 'Logo 7', 'uploads/1695137463_image.png', 'file', 1, 'Logos');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_role` int(11) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_role`, `is_active`) VALUES
(1, 'admin', 'admin@jmi.com', '202cb962ac59075b964b07152d234b70', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fundamental_analysis`
--
ALTER TABLE `fundamental_analysis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `page_meta`
--
ALTER TABLE `page_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `section_meta`
--
ALTER TABLE `section_meta`
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
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `fundamental_analysis`
--
ALTER TABLE `fundamental_analysis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `page_meta`
--
ALTER TABLE `page_meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=743;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section_meta`
--
ALTER TABLE `section_meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
