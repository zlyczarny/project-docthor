-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Czas generowania: 31 Maj 2022, 19:09
-- Wersja serwera: 10.4.24-MariaDB-cll-lve
-- Wersja PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `cskekrnyhv_docthor`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20220401075209', '2022-04-01 09:52:21', 283),
('DoctrineMigrations\\Version20220401122651', '2022-04-01 14:26:56', 30),
('DoctrineMigrations\\Version20220402092802', '2022-04-02 11:28:07', 25),
('DoctrineMigrations\\Version20220403102002', '2022-04-03 12:20:15', 25),
('DoctrineMigrations\\Version20220403151022', '2022-04-03 17:11:21', 105),
('DoctrineMigrations\\Version20220504095222', '2022-05-04 11:54:33', 313),
('DoctrineMigrations\\Version20220504123520', '2022-05-04 14:35:31', 65);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `inn_kat1`
--

CREATE TABLE `inn_kat1` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opis` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `autor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `aktualny` tinyint(1) NOT NULL,
  `werja` int(11) NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_size` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `inn_kat1`
--

INSERT INTO `inn_kat1` (`id`, `nazwa`, `opis`, `autor`, `data`, `aktualny`, `werja`, `image_name`, `image_size`) VALUES
(5, 'Wniosek o urlop okolicznościowy', '<div>Wniosek o urlop okolicznościowy</div>', 'Lucyna Żbik', '2021-04-18', 0, 1, '7de9046d402bc31cd59079de686d8bb24c38bd0f.pdf', NULL),
(6, 'Wniosek o urlop wypoczynkowy', '<div>Wniosek o urlop wypoczynkowy</div>', 'Lucyna Żbik', '2022-03-16', 1, 1, 'ef4c7a34bb045e0cf53c7435a119406f327c8672.pdf', NULL),
(7, 'Wniosek o urlop okolicznościowy', '<div>Wniosek o urlop okolicznościowy</div>', 'Lucyna Żbik', '2022-05-04', 1, 2, '129b6f13a62b2044c2b7d77e31749b5dbd49e8b6.pdf', NULL),
(8, 'Wniosek o opiekę nad dzieckiem', '<div>Wniosek o opiekę nad dzieckiem&nbsp;</div>', 'Lucyna Żbik', '2022-05-03', 1, 1, '2174f2bf7db0ca66cb1420e27059a40b0a172667.pdf', NULL),
(9, 'Wniosek o pożyczkę', '<div>Wniosek o pożyczkę</div>', 'Lucyna Żbik', '2022-05-11', 0, 1, '9fd6db3bfc61e35883a8a2bd6fba0c6bfd31e361.pdf', NULL),
(10, 'Wniosek o pożyczkę', '<div>Wniosek o pożyczkę</div>', 'Lucyna Żbik', '2022-05-24', 1, 2, '727e8afe416ad7722061d9a1eae9ec4f779a4ba5.pdf', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `inn_kat2`
--

CREATE TABLE `inn_kat2` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opis` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `autor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `aktualny` tinyint(1) NOT NULL,
  `wersja` int(11) NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_size` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `inn_kat2`
--

INSERT INTO `inn_kat2` (`id`, `nazwa`, `opis`, `autor`, `data`, `aktualny`, `wersja`, `image_name`, `image_size`) VALUES
(2, 'PIT 11', '<div>PIT 11</div>', 'Lucyna Żbik', '2022-04-20', 1, 1, 'c81a17c7eeb8b7f1efd0fcca80738f19d1dc37a9.pdf', 0),
(3, 'Szablon pisma firmowego', '<div>Szablon pisma firmowego</div>', 'Katarzyna Drzewiecka', '2022-05-03', 1, 1, 'acc869003f28e61347acf42bb6420f9e5be7bf56.pdf', NULL),
(4, 'Szablon oferty na system PZP', '<div>Szablon oferty na system PZP</div>', 'Krzysztof Zaniewski', '2022-04-20', 1, 1, 'f95b1473091d311fda6a60a9ec8885a2fa3842fe.pdf', NULL),
(5, 'Szablon Oferty na system EOD', '<div>Szablon Oferty na system EOD</div>', 'Katarzyna Drzewiecka', '2022-05-04', 1, 1, 'e6538889f5dcfefe511234ec4fda8efe0a21051e.pdf', NULL),
(6, 'Szablon Oferty na dostawę sprzętu komputerowego', '<div>Szablon Oferty na dostawę sprzętu komputerowego</div>', 'Bartosz Tomaszkiewicz', '2022-05-06', 1, 1, '92e34db6b4c5cc3d1df86c2cd819fddd7a00903c.pdf', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `inn_kat3`
--

CREATE TABLE `inn_kat3` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opis` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `autor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `aktualny` tinyint(1) NOT NULL,
  `wersja` int(11) NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_size` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `inn_kat3`
--

INSERT INTO `inn_kat3` (`id`, `nazwa`, `opis`, `autor`, `data`, `aktualny`, `wersja`, `image_name`, `image_size`) VALUES
(1, 'Instrukcja korzystania z systemu EOD Docthor', '<div>Instrukcja korzystania z systemu EOD Docthor</div>', 'Bartosz Tomaszewski', '2022-05-10', 1, 1, '29511b1607c7b5aeb83331f1f17e95f304e8fc35.pdf', NULL),
(2, 'Instrukcja korzystania z systemu Platformy Zamówień Publicznych', '<div>Instrukcja korzystania z systemu Platformy Zamówień Publicznych</div>', 'Kornel Zalewski', '2022-04-19', 1, 1, '0920e00d8a3de92414d282ace6183a8e02af0015.pdf', NULL),
(3, 'Instrukcja korzystania z Portalu Pracownika', '<div>Instrukcja korzystania z Portalu Pracownika</div>', 'Lucyna Żbik', '2022-05-03', 1, 1, 'd5b27e256998638dfa86e4e72b94b540acb8a06e.pdf', NULL),
(4, 'Instrukcja zakupów pracowniczych', '<div>Instrukcja zakupów pracowniczych</div>', 'Lucyna Żbik', '2022-05-04', 1, 1, '8e4ad7aefcd56fbdfbe6ffe469325a5d6939ae94.pdf', NULL),
(5, 'Instrukcja składania wniosku o zapomogę', '<div>Instrukcja składania wniosku o zapomogę</div>', 'Lucyna Żbik', '2022-05-04', 1, 1, '90622ede13185406ab1aa51bdd36db589263f9ce.pdf', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `inn_kat4`
--

CREATE TABLE `inn_kat4` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opis` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `autor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `aktualny` tinyint(1) NOT NULL,
  `wersja` int(11) NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_size` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `inn_kat4`
--

INSERT INTO `inn_kat4` (`id`, `nazwa`, `opis`, `autor`, `data`, `aktualny`, `wersja`, `image_name`, `image_size`) VALUES
(1, 'Certyfikat podpisywania profilem zaufanym w systemie EOD Docthor', '<div>Certyfikat podpisywania profilem zaufanym w systemie EOD Docthor</div>', 'Bartosz Tomaszkiewicz', '2022-05-04', 1, 1, 'f82e58010e72fef45be07ee6d068dbb6a7384110.pdf', NULL),
(2, 'Certyfikat podpisywania podpisem kwalifikowanym w systemie EOD Docthor', '<div>Certyfikat podpisywania podpisem kwalifikowanym w systemie EOD Docthor</div>', 'Bartosz Tomaszkiewicz', '2022-05-17', 1, 1, 'd45e91cef28173ef3fe0e9d26138d100d1f742b5.pdf', NULL),
(3, 'Certyfikat podpisywania e-Dowodem w systemie EOD Docthor', '<div>Certyfikat podpisywania e-Dowodem w systemie EOD Docthor</div>', 'Katarzyna Drzewiecka', '2022-05-04', 1, 1, 'e9d8c347ce0eb7ef4f0f1add4be33139c8b56ffb.pdf', NULL),
(4, 'Certyfikat Integracji z ePUAP', '<div>Certyfikat Integracji z ePUAP</div>', 'Bartosz Tomaszkiewicz', '2022-05-04', 1, 1, 'a02662820fed80cf7e9fc245e547cbdcf9ac4127.pdf', NULL),
(5, 'Certyfikat ISO 27001', '<div>Certyfikat ISO 27001</div>', 'Dział Prawny', '2022-05-11', 1, 1, 'bc1c5d9f3ac32f680c462e64d5d4ae8e0ba88956.pdf', NULL),
(6, 'Certyfikat ISO 9001', '<div>Certyfikat ISO 9001<br><br></div>', 'Dział Prawny', '2022-05-04', 1, 1, '050b2a42a607818867eb4c1e5a3ec47560095c67.pdf', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kadr_kat1`
--

CREATE TABLE `kadr_kat1` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opis` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `autor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `aktualny` tinyint(1) NOT NULL,
  `wersja` int(11) NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_size` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `kadr_kat1`
--

INSERT INTO `kadr_kat1` (`id`, `nazwa`, `opis`, `autor`, `data`, `aktualny`, `wersja`, `image_name`, `image_size`) VALUES
(1, 'Oferta w zakresie systemu kadrowego', '<div>Oferta w zakresie systemu kadrowego</div>', 'Zeto Lublin', '2022-04-23', 1, 1, '18313bc1503f0b20f2c79d2a09faad32c710d49b.pdf', NULL),
(2, 'Oferta w zakresie systemu kadrowego', '<div>Oferta w zakresie systemu kadrowego</div>', 'ASSECO', '2022-04-12', 1, 1, '83318812cd985efd8e04c7165d76834d5947314a.pdf', NULL),
(3, 'Oferta w zakresie Portalu Pracownika', '<div>Oferta w zakresie Portalu Pracownika</div>', 'BIT S.A', '2022-03-14', 1, 1, '90401608c3e4af8e5e5ded9091332cb1ab2ceac6.pdf', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kadr_kat2`
--

CREATE TABLE `kadr_kat2` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opis` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `autor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `aktualny` tinyint(1) NOT NULL,
  `wersja` int(11) NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_size` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kadr_kat3`
--

CREATE TABLE `kadr_kat3` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opis` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `autor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `aktualny` tinyint(1) NOT NULL,
  `wersja` int(11) NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_size` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `kadr_kat3`
--

INSERT INTO `kadr_kat3` (`id`, `nazwa`, `opis`, `autor`, `data`, `aktualny`, `wersja`, `image_name`, `image_size`) VALUES
(1, 'Umowa z pracownikiem Katarzyna Drzewiecka', '<div>Umowa z pracownikiem Katarzyna Drzewiecka</div>', 'Lucyna Żbik', '2021-04-06', 1, 1, '7064d7f5562514a04aae47fd3224f018061711b0.pdf', NULL),
(2, 'Umowa z pracownikiem Bartosz Tomaszewski', '<div>Umowa z pracownikiem Bartosz Tomaszewski&nbsp;</div>', 'Lucyna Żbik', '2014-04-04', 1, 1, '0cc66bb9181a3fa3391770e3e4f3da6aa49df44e.pdf', NULL),
(3, 'Umowa z Pracownikiem Kornel Zalewski', '<div>Umowa z Pracownikiem Kornel Zalewski&nbsp;</div>', 'Lucyna Żbik', '2005-04-01', 0, 1, '81bea8d6ebacc83ef2492de0039eb3fb3a4944a7.pdf', NULL),
(4, 'Umowa z Pracownikiem Kornel Zalewski', '<div>&nbsp;Umowa z Pracownikiem Kornel Zalewski &nbsp;</div>', 'Lucyna Żbik', '2013-06-01', 0, 2, 'f208cb4067128bbf0ac87f71ce812f2e96bdce04.pdf', NULL),
(5, 'Umowa z Pracownikiem Kornel Zalewski', '<div>&nbsp;Umowa z Pracownikiem Kornel Zalewski &nbsp;</div>', 'Lucyna Żbik', '2021-05-01', 1, 3, '63051f84a9ed2a5efe676f22a78e548dcb3953cc.pdf', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kadr_kat4`
--

CREATE TABLE `kadr_kat4` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opis` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `autor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `aktualny` tinyint(1) NOT NULL,
  `wersja` int(11) NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_size` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `kadr_kat4`
--

INSERT INTO `kadr_kat4` (`id`, `nazwa`, `opis`, `autor`, `data`, `aktualny`, `wersja`, `image_name`, `image_size`) VALUES
(1, 'Wzór oświadczenia o przystąpieniu do PPK', '<div>Wzór oświadczenia o przystąpieniu do PPK</div>', 'Lucyna Żbik', '2022-01-03', 1, 1, '2a4d87b3fd2324fd3586f55994e6e304d573a6cc.pdf', NULL),
(2, 'Wzór oświadczenia PIT -2A', '<div>Wzór oświadczenia PIT -2A</div>', 'Lucyna Żbik', '2022-03-22', 1, 1, '78f2e245b4c54ca55f646f7d9cd45e3c15338bc2.pdf', NULL),
(3, 'Wzór oświadczenia o wysokości zarobków za rok 2021 celem wypłaty świadczenia socjalnego', '<div>Wzór oświadczenia o wysokości zarobków za rok 2021 celem wypłaty świadczenia socjalnego</div>', 'Lucyna Żbik', '2022-05-02', 1, 1, 'fd148636c4ef60ad9ce2ca50c65b6538a589f4b2.pdf', NULL),
(4, 'Wzór oświadczenia o uldze dla klasy średniej', '<div>Wzór oświadczenia o uldze dla klasy średniej&nbsp;</div>', 'Lucyna Żbik', '2022-02-14', 1, 1, '1c76cff6ec1baad50018ce4eab15d5c0829f42e7.pdf', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ksie_kat1`
--

CREATE TABLE `ksie_kat1` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opis` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `autor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `aktualny` tinyint(1) NOT NULL,
  `wersja` int(11) NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_size` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `ksie_kat1`
--

INSERT INTO `ksie_kat1` (`id`, `nazwa`, `opis`, `autor`, `data`, `aktualny`, `wersja`, `image_name`, `image_size`, `updated_at`) VALUES
(2, 'Oferta na system finansowo-księgowy', '<div>Oferta na system finansowo-księgowy</div>', 'Softres', '2022-03-15', 1, 1, '540a10b7a297e18335f5d42febb17271d20b63c9.pdf', NULL, NULL),
(3, 'Oferta na system finansowo-księgowy', '<div>Oferta na system finansowo-księgowy <br><br></div>', 'COMARCH', '2022-02-08', 1, 1, '29040410f63e00355ab007acac3c4c7cabc86268.pdf', NULL, NULL),
(4, 'Oferta na PPK - Bank PEKAO SA', '<div>Oferta na PPK - Bank PEKAO SA</div>', 'PEKAO S.A', '2022-03-15', 1, 1, '1eb6f951ac37a9d8ae800c17a1c87f2b705e9035.pdf', NULL, NULL),
(5, 'Oferta na PPK - Bank mBANK', '<div>Oferta na PPK - Bank mBANK</div>', 'mBANK', '2022-01-18', 1, 1, '8705db3c9eb43b3979d1ccf35326bf8fd79ee5fd.pdf', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ksie_kat2`
--

CREATE TABLE `ksie_kat2` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opis` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `autor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `aktualny` tinyint(1) NOT NULL,
  `wersja` int(11) NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_size` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `ksie_kat2`
--

INSERT INTO `ksie_kat2` (`id`, `nazwa`, `opis`, `autor`, `data`, `aktualny`, `wersja`, `image_name`, `image_size`) VALUES
(1, 'Procedura obiegu umów', '<div>Procedura obiegu umów&nbsp;</div>', 'Dział Księgowości', '2009-10-10', 0, 1, 'f15570f5b9beca7aeec83dc75bbad5e07358f10c.pdf', NULL),
(2, 'Procedura obiegu umów', '<div>Procedura obiegu umów</div>', 'Dział Księgowości', '2021-01-14', 1, 1, '7eb4587dcdd50d71bd6cc9ab11e6d6e357c09a7b.pdf', NULL),
(3, 'Procedura akceptacji formalnej faktur', '<div>Procedura akceptacji formalnej faktur</div>', 'Dział Księgowości', '2002-04-16', 1, 1, 'db9da857428cf3fc0959fe540aa37e49696375c6.pdf', NULL),
(4, 'Procedura akceptacji merytorycznej faktury', '<div>Procedura akceptacji merytorycznej faktury</div>', 'Dział Księgowości', '2022-01-03', 1, 1, '3826a20113b6a3ad4e85ed95d419220ed80db146.pdf', NULL),
(5, 'Procedura wyliczania potrąceń PPK', '<div>Procedura wyliczania potrąceń PPK</div>', 'Dział Księgowości', '2022-05-09', 1, 1, '2b73931210ed6b32c5c90ab826065d42bb84ac28.pdf', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ksie_kat3`
--

CREATE TABLE `ksie_kat3` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opis` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `autor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `aktualny` tinyint(1) NOT NULL,
  `wersja` int(11) NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_size` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `ksie_kat3`
--

INSERT INTO `ksie_kat3` (`id`, `nazwa`, `opis`, `autor`, `data`, `aktualny`, `wersja`, `image_name`, `image_size`) VALUES
(1, 'Wzór rozliczenie delegacji - 2022', '<div>Wzór rozliczenie delegacji - 2022</div>', 'Dział Księgowości', '2022-01-03', 1, 6, 'c770ca751cd8ef8643041e9aa07a23421f6fb4e5.pdf', NULL),
(2, 'Wzór rozliczenie delegacji - 2021', '<div>&nbsp;Wzór rozliczenie delegacji - 2021</div>', 'Dział Księgowości', '2021-01-04', 0, 5, '29160ee3d6e2c368d5e72afe7cdc7b4cb889e521.pdf', NULL),
(3, 'Wzór rozliczenie delegacji - 2020', '<div>&nbsp; Wzór rozliczenie delegacji - 2020</div>', 'Dział Księgowości', '2020-01-04', 0, 4, '40498a52bb27a2b968b476df61e07c437ff5670a.pdf', NULL),
(4, 'Wzór rozliczenie delegacji - 2019', '<div>Wzór rozliczenie delegacji - 2019</div>', 'Dział Księgowości', '2019-01-04', 0, 3, '11fafaabf1a9b39bb09d4d3e3bb35f8b4256a470.pdf', NULL),
(5, 'Wzór rozliczenie delegacji - 2018', '<div>Wzór rozliczenie delegacji - 2018</div>', 'Dział Księgowości', '2018-01-04', 0, 2, '39eccc76e19bd6280cc3d66e4281c790a5523f27.pdf', NULL),
(6, 'Wzór rozliczenie delegacji - 2017', '<div>Wzór rozliczenie delegacji - 2017</div>', 'Dział Księgowości', '2017-01-04', 0, 1, 'efd17c3e3ae1d67a3d7a679ee237ae0bd58e65cd.pdf', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `mar_kat1`
--

CREATE TABLE `mar_kat1` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opis` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `autor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `aktualny` tinyint(1) NOT NULL,
  `wersja` int(11) NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_size` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `mar_kat1`
--

INSERT INTO `mar_kat1` (`id`, `nazwa`, `opis`, `autor`, `data`, `aktualny`, `wersja`, `image_name`, `image_size`) VALUES
(4, 'Umowa z hotelem Europeana', '<div>Umowa z hotelem Europeana w zakresie imprezy organizacyjnej dla klientów.&nbsp;</div>', 'Krzysztof Zaniewski', '2022-05-23', 1, 1, 'e65bd0f30b8a8fab4007f3a20fdc90003c2b2eac.pdf', NULL),
(5, 'Umowa w zakresie pozycjonowania strony internetowej', '<div>Umowa w zakresie pozycjonowania strony internetowej</div>', 'Kornel Zalewski', '2022-05-25', 1, 1, 'ca9cbf3d6657deeff43189249b5012a59ec5867f.pdf', NULL),
(6, 'Umowa IT w Administracji', '<div>Umowa w zakresie stoiska w imprezie IT w administracji edycja ogólnopolska 2022</div>', 'Andżelika Cichocka', '2022-04-06', 1, 1, '3604251df7d8cc656d882f51aab0bfb70e138991.pdf', NULL),
(7, 'Umowa w zakresie nowej strony internetowej', '<div>Umowa w zakresie nowej strony internetowej&nbsp;</div>', 'Kornel Zalewski', '2022-03-08', 1, 1, '8fe17330da14bcdc9c0e65be1ee6fc8cf149db3e.pdf', NULL),
(8, 'Umowa w zakresie kampanii internetowej Google Ads', '<div>Umowa w zakresie kampanii internetowej Google Ads<br><br></div>', 'Andżelika Cichocka', '2022-04-19', 1, 1, 'ddc7239a5cf35631a338c5f8c0f5410b7f704b13.pdf', NULL),
(9, 'Umowa w zakresie przygotowania ścianki reklamowej – ścianki wystawienniczej', '<div>Umowa w zakresie przygotowania ścianki reklamowej – ścianki wystawienniczej<br><br></div>', 'Krzysztof Zaniewski', '2022-04-20', 1, 1, 'aa7c80e1402df5392deef1864c92471d7933da83.pdf', NULL),
(10, 'Umowa w zakresie starej strony internetowej', '<div>Umowa w zakresie starej strony internetowej</div>', 'Kornel Zalewski', '2006-12-12', 0, 1, 'd0f8d1899882c99a32a8992231e2592674d6dbf3.pdf', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `mar_kat2`
--

CREATE TABLE `mar_kat2` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opis` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `autor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `aktualny` tinyint(1) NOT NULL,
  `wersja` int(11) NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_size` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `mar_kat2`
--

INSERT INTO `mar_kat2` (`id`, `nazwa`, `opis`, `autor`, `data`, `aktualny`, `wersja`, `image_name`, `image_size`) VALUES
(1, 'Oferta hotelu Europeana', '<div>Oferta hotelu Europeana</div>', 'Hotel Europeana', '2022-02-22', 1, 1, '4ec46696002fceb629907b85dddfab47d989d7db.pdf', NULL),
(2, 'Oferta w zakresie pozycjonowania strony internetowej', '<div>Oferta w zakresie pozycjonowania strony internetowej</div>', 'Grupa Tense', '2022-04-12', 0, 1, 'b0ea1605ccf6e23ac35e0ec467634acc0c8ded5b.pdf', NULL),
(3, 'Oferta w zakresie pozycjonowania strony internetowej', '<div>Oferta w zakresie pozycjonowania strony internetowej po negocjacjach</div>', 'Grupa Tense', '2022-04-28', 1, 2, 'beff65d55e3c6d49e33f2e793541ac381a6cdc04.pdf', NULL),
(4, 'Oferta IT w Administracji w zakresie uczestnictwa w \"Forum Kierowników IT w Administracji\"', '<div>Oferta IT w Administracji w zakresie uczestnictwa w \"Forum Kierowników IT w Administracji\" w Hotel Mercure w Zakopanem.&nbsp;</div>', 'Presscom', '2022-02-16', 0, 1, '4d3e0eb951e391101d0a77aa84f3b4047b48e174.pdf', NULL),
(5, 'Oferta uczestnictwa w konferencji „Forum Kierowników IT w Administracji”', '<div>Oferta uczestnictwa w konferencji „Forum Kierowników IT w Administracji” po ngocjacjach<br><br></div>', 'Presscom', '2022-03-16', 1, 2, '4c87289e625211c0a1ea1e0e609e6a71ca8a1c7c.pdf', NULL),
(6, 'Oferta w zakresie kampanii internetowej Google Ads', '<div>Oferta w zakresie kampanii internetowej Google Ads</div>', 'Wedo', '2022-02-16', 1, 1, '299676f31e7b42041297bfe5682cb9835b689f4e.pdf', NULL),
(7, 'Oferta w zakresie ścianki reklamowej - ścianki wystawienniczej', '<div>Oferta w zakresie ścianki reklamowej - ścianki wystawienniczej</div>', 'Retio', '2022-03-24', 1, 1, '572ee28e6d6cf4b0fa8863422c4e0e1d8b3bd0ef.pdf', NULL),
(8, 'Oferta w zakresie przygotowania strony internetowej', '<div>Oferta w zakresie przygotowania strony internetowej</div>', 'COMKAT', '2022-01-19', 1, 1, 'a40a44e6c82b50406004719126555f13c69f325b.pdf', NULL),
(9, 'Oferta w zakresie przygotowania strony internetowej', '<div>Oferta w zakresie przygotowania strony internetowej<br><br></div>', 'Octamedia', '2022-02-16', 1, 1, '8179114a3397a02b66f0ecdcf7d24d2c09ec8067.pdf', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `mar_kat3`
--

CREATE TABLE `mar_kat3` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opis` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `autor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `aktualny` tinyint(1) NOT NULL,
  `wersja` int(11) NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_size` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `mar_kat3`
--

INSERT INTO `mar_kat3` (`id`, `nazwa`, `opis`, `autor`, `data`, `aktualny`, `wersja`, `image_name`, `image_size`) VALUES
(1, 'Procedura Zamówień powyżej 5000 złotych', '<div>Procedura Zamówień powyżej 5000 złotych</div>', 'Dział Prawny', '2020-11-12', 0, 1, '9edb0eefb896507ab622bd9dd9f3c23eb4b346b8.pdf', NULL),
(2, 'Procedura Zamówień powyżej 5000 złotych', '<div>Procedura Zamówień powyżej 5000 złotych</div>', 'Dział Prawny', '2022-01-03', 1, 2, 'c2b2e81511c92bff29426de020d660135506b46c.pdf', NULL),
(3, 'Procedura zamówień powyżej 50000 złotych', '<div>Procedura zamówień powyżej 50000 złotych</div>', 'Dział Prawny', '2021-01-04', 1, 1, '8cf8a4abffbf470880efedde577c455e1b67ce08.pdf', NULL),
(4, 'Procedura uczestnictwa w konferencjach zewnętrznych', '<div>Procedura uczestnictwa w konferencjach zewnętrznych</div>', 'Kornel Zalewski', '2010-04-04', 0, 1, '89cfd0710da7d864a4992714b3ac20eae9ace97f.pdf', NULL),
(5, 'Procedura uczestnictwa w konferencjach zewnętrznych – stan na rok 2020', '<div>Procedura uczestnictwa w konferencjach zewnętrznych – stan na rok 2020<br><br></div>', 'Krzysztof Zaniewski', '2020-05-06', 1, 2, '9d4a8827d9fc59992c45ac10bef2aed2145355bf.pdf', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `reset_password_request`
--

CREATE TABLE `reset_password_request` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `selector` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hashed_token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requested_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `expires_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `reset_password_request`
--

INSERT INTO `reset_password_request` (`id`, `user_id`, `selector`, `hashed_token`, `requested_at`, `expires_at`) VALUES
(5, 2, 'J6fXCoykIfPOe9zF2PTo', 'TNY0a4HLIklDblhsIlf6LBQvK3FSrN8WPjj5JIKJHxI=', '2022-05-25 21:45:49', '2022-05-25 22:45:49'),
(6, 2, 'Q2x4DSDnhNMtgcOEeSox', '+tyZDFzJAMEBWReRdNcXhXR4VSesNxWQ+jFX+8gvYKY=', '2022-05-26 11:19:40', '2022-05-26 12:19:40'),
(7, 2, 'boKtjKmo9ixQ0Knaxhp7', 'lEGgxvYLgdFVpiBbSTnidgk00rQ5Gkfll+Zx0UBFaPg=', '2022-05-26 12:23:08', '2022-05-26 13:23:08'),
(8, 1, 'BvrO9aF0PdTk5HZ4wJsX', 'CsqHa4kJfLB2SMhnsF778he34JOt6rm4rUwa65MrxBo=', '2022-05-26 13:54:41', '2022-05-26 14:54:41');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sprz_kat1`
--

CREATE TABLE `sprz_kat1` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opis` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `autor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `aktualny` tinyint(1) NOT NULL,
  `wersja` int(11) NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_size` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `sprz_kat1`
--

INSERT INTO `sprz_kat1` (`id`, `nazwa`, `opis`, `autor`, `data`, `aktualny`, `wersja`, `image_name`, `image_size`) VALUES
(3, 'Umowa na wdrożenie Platformy Zamówień Publicznych w UG Pcim', '<div>Umowa na wdrożenie Platformy Zamówień Publicznych w UG Pcim</div>', 'Marcjanna Lejek', '2022-04-12', 1, 1, 'f04aa6fe3719b8f2938010d6524634b6fdf3ecd6.pdf', NULL),
(4, 'Umowa na dostawę macierzy dyskowej wraz z wdrożeniem dla Anwil', '<div>Umowa na dostawę macierzy dyskowej wraz z wdrożeniem dla Anwil&nbsp;</div>', 'Katarzyna Drzewiecka', '2022-05-18', 1, 1, '1ab33c9e8a6ad932ca5d167da6f39489d879059b.pdf', NULL),
(5, 'Umowa  na dostawę komputerów stacjonarnych dla Bebiko', '<div>Umowa na dostawę komputerów stacjonarnych dla Bebiko</div>', 'Zbigniew Kozłowski', '2022-05-26', 1, 1, '5bd0c953f3b8b4c38e64207d223a1062efdd9557.pdf', NULL),
(6, 'Umowa na dostawę urządzeń peryferyjnych dla WSB Poznań', '<div>Oferta na dostawę urządzeń peryferyjnych dla WSB Poznań</div>', 'Katarzyna Drzewiecka', '2022-05-09', 1, 1, 'b1c8dbc2a3f6cbb588990e59d3ca4cd10879fb94.pdf', NULL),
(7, 'Umowa na konfigurację Active Directory WSB Chorzów', '<div>Umowa na konfigurację Active Directory WSB Chorzów</div>', 'Bartosz Tomaszewski', '2022-05-23', 0, 1, '71fcd21965e5fdec24daa71deb5cd284f5f6f196.pdf', NULL),
(8, 'Umowa na konfigurację Active Directory WSB Chorzów', '<div>Umowa na konfigurację Active Directory WSB Chorzów po negocjacjach</div>', 'Bartosz Tomaszewski', '2022-05-27', 1, 2, 'c77a6a8c57dd5f34f4faebb446e7dae9af20606c.pdf', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sprz_kat2`
--

CREATE TABLE `sprz_kat2` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opis` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `autor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `aktualny` tinyint(1) NOT NULL,
  `wersja` int(11) NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_size` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `sprz_kat2`
--

INSERT INTO `sprz_kat2` (`id`, `nazwa`, `opis`, `autor`, `data`, `aktualny`, `wersja`, `image_name`, `image_size`) VALUES
(1, 'Oferta na sprzedaż Platformy Zamówień Publicznych UG Pcim', '<div>Oferta na sprzedaż Platformy Zamówień Publicznych UG Pcim</div>', 'Marcjanna Lejek', '2021-11-09', 0, 1, '42067c1f8c97f6ea4dfd5e8a202d734fc80a46b2.pdf', NULL),
(2, 'Oferta na sprzedaż Platformy Zamówień Publicznych UG Pcim', '<div>Oferta na sprzedaż Platformy Zamówień Publicznych UG Pcim</div>', 'Marcjanna Lejek', '2022-03-15', 1, 2, '4e94e17bab990e837d144cc29200e5fd6b513d9d.pdf', NULL),
(3, 'Oferta na dostawę laptopów dla firmy Amica', '<div>Oferta na dostawę laptopów dla firmy Amica</div>', 'Zbigniew Kozłowski', '2022-03-08', 1, 1, 'e2edc3a6920f8e8109edac1923a6b183efa86947.pdf', NULL),
(4, 'Oferta na dostawę macierzy dyskowej wraz z wdrożeniem dla Anwil', '<div>Oferta na dostawę macierzy dyskowej wraz z wdrożeniem dla Anwil&nbsp;</div>', 'Katarzyna Drzewiecka', '2022-02-08', 0, 1, '503ddb4a3882b6165fa990b004b6a6c287d411f2.pdf', NULL),
(5, 'Oferta na dostawę macierzy dyskowej wraz z wdrożeniem dla Anwil', '<div>Oferta na dostawę macierzy dyskowej wraz z wdrożeniem dla Anwil&nbsp;</div>', 'Katarzyna Drzewiecka', '2022-05-05', 1, 2, 'a0322219e4594e1f1da8fc338adcff5032cb6e9e.pdf', NULL),
(6, 'Oferta na dostawę komputerów stacjonarnych dla Bebiko', '<div>Oferta na dostawę komputerów stacjonarnych dla Bebiko</div>', 'Zbigniew Kozłowski', '2022-05-11', 1, 1, 'd6cbb82749e877ea0edfdf6cb4fea3a3b22cd133.pdf', NULL),
(7, 'Oferta na dostawę urządzeń peryferyjnych dla WSB Poznań', '<div>Oferta na dostawę urządzeń peryferyjnych dla WSB Poznań</div>', 'Katarzyna Drzewiecka', '2022-03-08', 1, 1, 'c4b6546cc71bdcd91d50777dca1cc05831eb3baf.pdf', NULL),
(8, 'Oferta na konfigurację Active Directory WSB Chorzów', '<div>Oferta na konfigurację Active Directory WSB Chorzów</div>', 'Bartosz Tomaszewski', '2022-03-15', 1, 1, '842c5814619bc9587b61ad9579a839c0233e015c.pdf', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sprz_kat3`
--

CREATE TABLE `sprz_kat3` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opis` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `autor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `aktualny` tinyint(1) NOT NULL,
  `wersja` int(11) NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_size` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `sprz_kat3`
--

INSERT INTO `sprz_kat3` (`id`, `nazwa`, `opis`, `autor`, `data`, `aktualny`, `wersja`, `image_name`, `image_size`) VALUES
(1, 'Wzór oferty na dostawę Platformy Zamówień Publicznych', '<div>Wzór oferty na dostawę Platformy Zamówień Publicznych<br><br></div>', 'Katarzyna Drzewiecka', '2021-12-14', 1, 1, '847fd268c6a1aef9c05d59fe8e27ceec7921dc28.pdf', NULL),
(2, 'Wzór oferty na dostawę Elektronicznego Biura Obsługi Interesanta', '<div><br>Wzór oferty na dostawę Elektronicznego Biura Obsługi Interesanta</div>', 'Bartosz Tomaszewski', '2022-02-09', 1, 1, '05f6228862b18ee9aef2e9b07796f39e808679be.pdf', NULL),
(3, 'Wzór oferty na dostawę laptopów', '<div>Wzór oferty na dostawę laptopów</div>', 'Zbigniew Kozłowski', '2019-03-15', 0, 1, 'bc79eebf659d6a07740f22b16bef6da354fe39e2.pdf', NULL),
(4, 'Wzór oferty na dostawę laptopów', '<div>&nbsp;Wzór oferty na dostawę laptopów aktualizacja 2</div>', 'Zbigniew Kozłowski', '2021-05-24', 0, 2, 'a5d0d4b5db342c58341fa4b38e2128f979ec36a2.pdf', NULL),
(5, 'Wzór oferty na dostawę laptopów', '<div>Wzór oferty na dostawę laptopów</div>', 'Zbigniew Kozłowski', '2022-05-16', 1, 3, 'e4bf1733f9d0539b3976f9121089d443e2b990bf.pdf', NULL),
(6, 'Wzór umowy na dostawę laptopów', '<div>Wzór umowy na dostawę laptopów</div>', 'Marcjanna Lejek', '2022-02-16', 1, 1, 'ed04a15ecc16ffebbfdbd01217512be9b99d61f7.pdf', NULL),
(7, 'Wzór umowy na dostawę EBOM', '<div>Wzór umowy na dostawę EBOM</div>', 'Katarzyna Drzewiecka', '2021-04-24', 1, 1, '4318f8d7aa4d39eefbc733953f4169b93f300f20.docx', NULL),
(8, 'Wzór umowy na dostawę Platformy Zamówień Publicznych', '<div>Wzór umowy na dostawę Platformy Zamówień Publicznych</div>', 'Katarzyna Drzewiecka', '2020-05-26', 1, 1, 'cee97e5ce53ee6576eb6f00800ae849a15c128d4.pdf', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sprz_kat4`
--

CREATE TABLE `sprz_kat4` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opis` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `autor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `aktualny` tinyint(1) NOT NULL,
  `wersja` int(11) NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_size` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `sprz_kat4`
--

INSERT INTO `sprz_kat4` (`id`, `nazwa`, `opis`, `autor`, `data`, `aktualny`, `wersja`, `image_name`, `image_size`) VALUES
(1, 'Procedura Zamówień powyżej 5000 złotych', '<div>Procedura Zamówień powyżej 5000 złotych</div>', 'Dział Prawny', '2020-11-12', 0, 1, 'e0e3e10290588c3583f67bb0464109086ad58d92.pdf', NULL),
(2, 'Procedura Zamówień powyżej 5000 złotych', '<div>Procedura Zamówień powyżej 5000 złotych</div>', 'Dział Prawny', '2022-01-03', 1, 2, 'cdd1ef602e6f40d0c340ce1645c0bb2c711ea269.pdf', NULL),
(3, 'Procedura zamówień powyżej 50000 złotych', '<div>Procedura zamówień powyżej 50000 złotych</div>', 'Dział Prawny', '2021-01-04', 1, 1, 'abef9b5bc3c92ebe24bf05e94081d471402b41d4.pdf', NULL),
(4, 'Regulamin pracy zdalnej', '<div>Regulamin pracy zdalnej</div>', 'Dział Prawny', '2020-04-15', 0, 1, '67cfb82335565d3de6dceeb01afd55f9110520f3.docx', NULL),
(5, 'Regulamin Pracy Zdalnej rok 2021', '<div>Regulamin Pracy Zdalnej rok 2021</div>', 'Dział Prawny', '2021-01-16', 1, 2, '69db3cd2f88ac1b3fa3ad4375a9c65e7cd36f89f.pdf', NULL),
(6, 'Procedura Przygotowywania ofert powyżej 10 000 złotych', '<div>Procedura Przygotowywania ofert powyżej 10 000 złotych</div>', 'Dyrektor Działu Sprzedaży', '2022-02-02', 1, 1, '58fc4c5e2d7527ece3d9356faffd4b84f4777035.pdf', NULL),
(7, 'Procedura Przygotowywania ofert powyżej 100 000 złotych', '<div>Procedura Przygotowywania ofert powyżej 100 000 złotych</div>', 'Dyrektor Działu Sprzedaży', '2020-03-14', 1, 1, '4704fda4eb99d1b87743f3c1d95da20bff3f519f.docx', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:json)',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aktywny` tinyint(1) NOT NULL,
  `rejestracja` date NOT NULL,
  `imie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nazwisko` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stanowisko` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dzial` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `username`, `roles`, `password`, `email`, `aktywny`, `rejestracja`, `imie`, `nazwisko`, `stanowisko`, `dzial`) VALUES
(1, 'admin', '[\"ROLE_ADMIN\"]', '$2y$13$LSY0D4/aw0Fl23MS/lJ3HO67Z4DDaHuzZnZ85/3GLgFgblN6mH/xm', 'zlyczarus@int.pl', 1, '2022-04-01', 'admin', 'admin', 'IT specialist', 'IT'),
(2, 'tbartoszewski', '[\"ROLE_MARKEDIT\"]', '$2y$13$AKsrXOLOIvlexEAxJB.7ju/hCRgovf2B3BBqVN4W1WdDk1ldvAYjK', 'czarny-nt@o2.pl', 1, '2022-03-31', 'Tomasz', 'Bartoszewski', 'Markom', 'Marketing'),
(3, 'bmaciejewska', '[\"ROLE_KADREDIT\",\"ROLE_MARK\"]', '$2y$13$e9YyY5NTft3A.asKSNobXu1tlS07fDo0pFKLZdYuJZDH6A/Eqw15S', 'b.maciej@poczta.pl', 1, '2022-02-02', 'Bożena', 'Maciejewska', 'Dyrektor Kadr', 'Kadry'),
(4, 'bmaciejewska2', '[\"ROLE_BLOK\"]', '$2y$13$ZDDOTov4lNHhtMsTc5xBheeYbsOypARE.wJDeaDZSbc55VGNLgM2G', 'bkowal@pocz.pl', 0, '2022-04-02', 'Bożena', 'Maciejewska', 'Sprzedawca', 'Sprzedaz'),
(5, 'akrzyzanowski', '[\"ROLE_KSIE\"]', '$2y$13$hQjnPn0MYllRbcYQ4.E.3ObzOWslnxqXUs5Ea4Qb.5.f8Jcm.9nZO', 'akrzyzan@poczta.pl', 1, '2022-05-03', 'Adam', 'Krzyżanowski', 'Specjalista ds Księgowości', 'Ksiegowosc'),
(7, 'mdudziak', '[\"ROLE_SPRZ\"]', '$2y$13$1VcyCrGVAHIGJcqKiwWhVuIe12lrjlaD/3a1Ry6uYWw4ETzEeaJQW', 'mdudziak@poczta.pl', 1, '2022-05-03', 'Mikołaj', 'Dudziak', 'Sprzedawca', 'Sprzedaz'),
(8, 'Katarzyna Drzewiecka', '[\"ROLE_ADMIN\"]', '$2y$13$Wt0q8lOs0YaYZ1JIqwSwAu/mwNCmnvBPvX2HDubvyPhFh49urnM8W', 'katarzynadrzewiecka.poznan@gmail.com', 1, '2022-05-16', 'Katarzyna', 'Drzewiecka', 'Administrator', 'IT');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indeksy dla tabeli `inn_kat1`
--
ALTER TABLE `inn_kat1`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `inn_kat2`
--
ALTER TABLE `inn_kat2`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `inn_kat3`
--
ALTER TABLE `inn_kat3`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `inn_kat4`
--
ALTER TABLE `inn_kat4`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `kadr_kat1`
--
ALTER TABLE `kadr_kat1`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `kadr_kat2`
--
ALTER TABLE `kadr_kat2`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `kadr_kat3`
--
ALTER TABLE `kadr_kat3`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `kadr_kat4`
--
ALTER TABLE `kadr_kat4`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `ksie_kat1`
--
ALTER TABLE `ksie_kat1`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `ksie_kat2`
--
ALTER TABLE `ksie_kat2`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `ksie_kat3`
--
ALTER TABLE `ksie_kat3`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `mar_kat1`
--
ALTER TABLE `mar_kat1`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `mar_kat2`
--
ALTER TABLE `mar_kat2`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `mar_kat3`
--
ALTER TABLE `mar_kat3`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `reset_password_request`
--
ALTER TABLE `reset_password_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_7CE748AA76ED395` (`user_id`);

--
-- Indeksy dla tabeli `sprz_kat1`
--
ALTER TABLE `sprz_kat1`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `sprz_kat2`
--
ALTER TABLE `sprz_kat2`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `sprz_kat3`
--
ALTER TABLE `sprz_kat3`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `sprz_kat4`
--
ALTER TABLE `sprz_kat4`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_1483A5E9F85E0677` (`username`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `inn_kat1`
--
ALTER TABLE `inn_kat1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT dla tabeli `inn_kat2`
--
ALTER TABLE `inn_kat2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `inn_kat3`
--
ALTER TABLE `inn_kat3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `inn_kat4`
--
ALTER TABLE `inn_kat4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `kadr_kat1`
--
ALTER TABLE `kadr_kat1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `kadr_kat2`
--
ALTER TABLE `kadr_kat2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `kadr_kat3`
--
ALTER TABLE `kadr_kat3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `kadr_kat4`
--
ALTER TABLE `kadr_kat4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `ksie_kat1`
--
ALTER TABLE `ksie_kat1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `ksie_kat2`
--
ALTER TABLE `ksie_kat2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `ksie_kat3`
--
ALTER TABLE `ksie_kat3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `mar_kat1`
--
ALTER TABLE `mar_kat1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT dla tabeli `mar_kat2`
--
ALTER TABLE `mar_kat2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `mar_kat3`
--
ALTER TABLE `mar_kat3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `reset_password_request`
--
ALTER TABLE `reset_password_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT dla tabeli `sprz_kat1`
--
ALTER TABLE `sprz_kat1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `sprz_kat2`
--
ALTER TABLE `sprz_kat2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `sprz_kat3`
--
ALTER TABLE `sprz_kat3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `sprz_kat4`
--
ALTER TABLE `sprz_kat4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `reset_password_request`
--
ALTER TABLE `reset_password_request`
  ADD CONSTRAINT `FK_7CE748AA76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
