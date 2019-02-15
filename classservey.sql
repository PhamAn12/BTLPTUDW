-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2019 at 03:15 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `classservey`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id` int(10) UNSIGNED NOT NULL,
  `point` int(11) NOT NULL,
  `idrespond` int(10) UNSIGNED NOT NULL,
  `idform` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `point`, `idrespond`, `idform`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 39, NULL, NULL),
(2, 2, 1, 40, NULL, NULL),
(3, 3, 1, 41, NULL, NULL),
(4, 3, 1, 42, NULL, NULL),
(5, 3, 1, 43, NULL, NULL),
(6, 3, 1, 44, NULL, NULL),
(7, 2, 1, 45, NULL, NULL),
(8, 2, 1, 46, NULL, NULL),
(9, 3, 1, 47, NULL, NULL),
(10, 4, 1, 48, NULL, NULL),
(11, 3, 1, 49, NULL, NULL),
(12, 1, 1, 50, NULL, NULL),
(13, 1, 1, 51, NULL, NULL),
(14, 2, 1, 52, NULL, NULL),
(15, 3, 1, 53, NULL, NULL),
(16, 3, 1, 54, NULL, NULL),
(17, 3, 1, 55, NULL, NULL),
(18, 2, 1, 56, NULL, NULL),
(19, 1, 1, 57, NULL, NULL),
(20, 2, 2, 58, NULL, NULL),
(21, 2, 2, 59, NULL, NULL),
(22, 1, 2, 60, NULL, NULL),
(23, 1, 2, 61, NULL, NULL),
(24, 2, 2, 62, NULL, NULL),
(25, 2, 2, 63, NULL, NULL),
(26, 3, 2, 64, NULL, NULL),
(27, 3, 2, 65, NULL, NULL),
(28, 3, 2, 66, NULL, NULL),
(29, 3, 2, 67, NULL, NULL),
(30, 3, 2, 68, NULL, NULL),
(31, 3, 2, 69, NULL, NULL),
(32, 2, 2, 70, NULL, NULL),
(33, 1, 2, 71, NULL, NULL),
(34, 1, 2, 72, NULL, NULL),
(35, 2, 2, 73, NULL, NULL),
(36, 2, 2, 74, NULL, NULL),
(37, 2, 2, 75, NULL, NULL),
(38, 4, 2, 76, NULL, NULL),
(39, 2, 3, 58, NULL, NULL),
(40, 2, 3, 59, NULL, NULL),
(41, 1, 3, 60, NULL, NULL),
(42, 1, 3, 61, NULL, NULL),
(43, 2, 3, 62, NULL, NULL),
(44, 2, 3, 63, NULL, NULL),
(45, 3, 3, 64, NULL, NULL),
(46, 3, 3, 65, NULL, NULL),
(47, 3, 3, 66, NULL, NULL),
(48, 3, 3, 67, NULL, NULL),
(49, 3, 3, 68, NULL, NULL),
(50, 3, 3, 69, NULL, NULL),
(51, 2, 3, 70, NULL, NULL),
(52, 1, 3, 71, NULL, NULL),
(53, 1, 3, 72, NULL, NULL),
(54, 2, 3, 73, NULL, NULL),
(55, 2, 3, 74, NULL, NULL),
(56, 2, 3, 75, NULL, NULL),
(57, 4, 3, 76, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `idform` int(10) UNSIGNED NOT NULL,
  `idquestion` int(10) UNSIGNED NOT NULL,
  `idsurvey` int(10) UNSIGNED NOT NULL,
  `M` decimal(5,2) NOT NULL DEFAULT '0.00',
  `STD` decimal(5,2) NOT NULL DEFAULT '0.00',
  `M1` decimal(5,2) NOT NULL DEFAULT '0.00',
  `STD1` decimal(5,2) NOT NULL DEFAULT '0.00',
  `M2` decimal(5,2) NOT NULL DEFAULT '0.00',
  `STD2` decimal(5,2) NOT NULL DEFAULT '0.00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`idform`, `idquestion`, `idsurvey`, `M`, `STD`, `M1`, `STD1`, `M2`, `STD2`, `created_at`, `updated_at`) VALUES
(39, 267, 7, '1.00', '2.40', '2.20', '2.90', '4.30', '3.30', NULL, NULL),
(40, 268, 7, '2.00', '3.40', '2.40', '3.30', '3.30', '3.60', NULL, NULL),
(41, 269, 7, '3.00', '3.10', '3.00', '3.30', '3.10', '3.50', NULL, NULL),
(42, 270, 7, '3.00', '1.20', '3.20', '2.60', '3.30', '3.30', NULL, NULL),
(43, 271, 7, '3.00', '3.20', '4.00', '2.20', '3.50', '3.50', NULL, NULL),
(44, 272, 7, '3.00', '1.00', '3.20', '2.20', '2.90', '3.29', NULL, NULL),
(45, 273, 7, '2.00', '1.00', '2.98', '2.30', '3.50', '3.50', NULL, NULL),
(46, 274, 7, '2.00', '1.20', '2.87', '2.90', '2.40', '3.30', NULL, NULL),
(47, 275, 7, '3.00', '1.00', '3.40', '2.80', '2.13', '3.50', NULL, NULL),
(48, 276, 7, '4.00', '0.00', '3.60', '2.98', '3.20', '1.90', NULL, NULL),
(49, 277, 7, '3.00', '0.00', '0.00', '0.00', '3.40', '1.30', NULL, NULL),
(50, 278, 7, '1.00', '0.00', '0.00', '0.00', '3.40', '2.90', NULL, NULL),
(51, 279, 7, '1.00', '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL),
(52, 280, 7, '2.00', '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL),
(53, 281, 7, '3.00', '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL),
(54, 282, 7, '3.00', '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL),
(55, 283, 7, '3.00', '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL),
(56, 284, 7, '2.00', '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL),
(57, 285, 7, '1.00', '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL),
(58, 267, 8, '1.50', '0.87', '0.00', '0.00', '0.00', '0.00', NULL, NULL),
(59, 268, 8, '1.50', '0.87', '0.00', '0.00', '0.00', '0.00', NULL, NULL),
(60, 269, 8, '0.75', '0.43', '0.00', '0.00', '0.00', '0.00', NULL, NULL),
(61, 270, 8, '0.75', '0.43', '0.00', '0.00', '0.00', '0.00', NULL, NULL),
(62, 271, 8, '1.50', '0.87', '0.00', '0.00', '0.00', '0.00', NULL, NULL),
(63, 272, 8, '1.50', '0.87', '0.00', '0.00', '0.00', '0.00', NULL, NULL),
(64, 273, 8, '2.25', '1.30', '0.00', '0.00', '0.00', '0.00', NULL, NULL),
(65, 274, 8, '2.25', '1.30', '0.00', '0.00', '0.00', '0.00', NULL, NULL),
(66, 275, 8, '2.25', '1.30', '0.00', '0.00', '0.00', '0.00', NULL, NULL),
(67, 276, 8, '2.25', '1.30', '0.00', '0.00', '0.00', '0.00', NULL, NULL),
(68, 277, 8, '2.25', '1.30', '0.00', '0.00', '0.00', '0.00', NULL, NULL),
(69, 278, 8, '2.25', '1.30', '0.00', '0.00', '0.00', '0.00', NULL, NULL),
(70, 279, 8, '1.50', '0.87', '0.00', '0.00', '0.00', '0.00', NULL, NULL),
(71, 280, 8, '0.75', '0.43', '0.00', '0.00', '0.00', '0.00', NULL, NULL),
(72, 281, 8, '0.75', '0.43', '0.00', '0.00', '0.00', '0.00', NULL, NULL),
(73, 282, 8, '1.50', '0.87', '0.00', '0.00', '0.00', '0.00', NULL, NULL),
(74, 283, 8, '1.50', '0.87', '0.00', '0.00', '0.00', '0.00', NULL, NULL),
(75, 284, 8, '1.50', '0.87', '0.00', '0.00', '0.00', '0.00', NULL, NULL),
(76, 285, 8, '3.00', '1.73', '0.00', '0.00', '0.00', '0.00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_11_21_075825_user_student', 1),
(4, '2018_11_22_225535_user_lecturer', 1),
(5, '2018_12_10_212955_create_subject_table', 1),
(6, '2018_12_10_224909_create_student-subject_table', 1),
(7, '2018_12_11_084951_create_survey_table', 1),
(8, '2018_12_11_085636_create_question_table', 1),
(9, '2018_12_11_094615_create_respond_table', 2),
(10, '2018_12_11_094817_create_answer_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(10) UNSIGNED NOT NULL,
  `question_text` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `version` int(11) NOT NULL,
  `idgroupname` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `question_text`, `version`, `idgroupname`) VALUES
(267, 'Giảng đường đáp ứng yêu cầu của môn học', 1, 1),
(268, 'Các trang thiết bị tại giảng đường đáp ứng yêu cầu giảng dạy và học tập', 1, 1),
(269, 'Bạn được hỗ trợ kịp thời trong quá trình học môn này', 1, 2),
(270, 'Mục tiêu của môn học nêu rõ kiến thức và kỹ năng người học cần đạt được ', 1, 2),
(271, 'Thời lượng của môn học được phân bổ hợp lý cho các hình thức học tập', 1, 2),
(272, 'Các tài liệu phục vụ môn học được cập nhật', 1, 2),
(273, 'Môn học góp phần trang bị kiến thức kỹ năng nghề nghiệp cho bạn', 1, 3),
(274, 'Giảng viên thực hiện đầy đủ nội dung và thời lượng của môn học theo kế hoạch', 1, 3),
(275, 'Giảng viên hướng dẫn bạn phương pháp học tập khi bắt đầu môn học', 1, 3),
(276, 'Phương pháp giảng dạy của giảng viên giúp bạn phát triển tư duy', 1, 3),
(277, 'Giảng viên tạo cơ hội để bạn chủ động tham gia vào quá trình học tập', 1, 3),
(278, 'Giảng viên giúp bạn phát triển kỹ năng làm việc độc lập', 1, 3),
(279, 'Giảng viên rèn luyện cho bạn phương pháp liên hệ giữa các vấn đề trong môn học với thực tiễn', 1, 3),
(280, 'Giảng viên sử dụng hiệu quả phương tiện dạy học', 1, 3),
(281, 'Giảng viên quan tâm giáo dục tư cách phẩm chất nghề nghiệp của người học', 1, 3),
(282, 'Bạn hiểu những vấn đề được truyền tải trên lớp', 1, 4),
(283, 'Kết quả học tập của người học được đánh giá bằng nhiều hình thức phù hợp với tính chất và đặc thù môn học', 1, 4),
(284, 'Nội dung kiểm tra đánh giá tổng hợp được các kỹ năng mà người học phải đạt theo yêu cầu', 1, 4),
(285, 'Thông tin phản hồi thừ kiểm tra đánh giá giúp bạn cải thiện kết quả học tập', 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `question_group`
--

CREATE TABLE `question_group` (
  `id` int(11) NOT NULL,
  `group_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `question_group`
--

INSERT INTO `question_group` (`id`, `group_name`) VALUES
(1, 'Cơ sở vật chất'),
(2, 'Môn học'),
(3, 'Hoạt động giảng dạy của giáo viên'),
(4, 'Kết quả học tập');

-- --------------------------------------------------------

--
-- Table structure for table `question_sheet`
--

CREATE TABLE `question_sheet` (
  `id` int(10) NOT NULL,
  `question_text` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `idgroupname` int(10) NOT NULL,
  `version` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `question_sheet`
--

INSERT INTO `question_sheet` (`id`, `question_text`, `idgroupname`, `version`) VALUES
(115, 'Giảng đường đáp ứng yêu cầu của môn học', 1, 1),
(116, 'Các trang thiết bị tại giảng đường đáp ứng yêu cầu giảng dạy và học tập', 1, 1),
(117, 'Bạn được hỗ trợ kịp thời trong quá trình học môn này', 2, 1),
(118, 'Mục tiêu của môn học nêu rõ kiến thức và kỹ năng người học cần đạt được ', 2, 1),
(119, 'Thời lượng của môn học được phân bổ hợp lý cho các hình thức học tập', 2, 1),
(120, 'Các tài liệu phục vụ môn học được cập nhật', 2, 1),
(121, 'Môn học góp phần trang bị kiến thức kỹ năng nghề nghiệp cho bạn', 3, 1),
(122, 'Giảng viên thực hiện đầy đủ nội dung và thời lượng của môn học theo kế hoạch', 3, 1),
(123, 'Giảng viên hướng dẫn bạn phương pháp học tập khi bắt đầu môn học', 3, 1),
(124, 'Phương pháp giảng dạy của giảng viên giúp bạn phát triển tư duy', 3, 1),
(125, 'Giảng viên tạo cơ hội để bạn chủ động tham gia vào quá trình học tập', 3, 1),
(126, 'Giảng viên giúp bạn phát triển kỹ năng làm việc độc lập', 3, 1),
(127, 'Giảng viên rèn luyện cho bạn phương pháp liên hệ giữa các vấn đề trong môn học với thực tiễn', 3, 1),
(128, 'Giảng viên sử dụng hiệu quả phương tiện dạy học', 3, 1),
(129, 'Giảng viên quan tâm giáo dục tư cách phẩm chất nghề nghiệp của người học', 3, 1),
(130, 'Bạn hiểu những vấn đề được truyền tải trên lớp', 4, 1),
(131, 'Kết quả học tập của người học được đánh giá bằng nhiều hình thức phù hợp với tính chất và đặc thù môn học', 4, 1),
(132, 'Nội dung kiểm tra đánh giá tổng hợp được các kỹ năng mà người học phải đạt theo yêu cầu', 4, 1),
(133, 'Thông tin phản hồi thừ kiểm tra đánh giá giúp bạn cải thiện kết quả học tập', 4, 1),
(134, 'Giảng đường đáp ứng yêu cầu của môn học không', 1, 2),
(135, 'Các trang thiết bị tại giảng đường đáp ứng yêu cầu giảng dạy và học tập', 1, 2),
(136, 'Bạn được hỗ trợ kịp thời trong quá trình học môn này', 2, 2),
(137, 'Mục tiêu của môn học nêu rõ kiến thức và kỹ năng người học cần đạt được ', 2, 2),
(138, 'Thời lượng của môn học được phân bổ hợp lý cho các hình thức học tập', 2, 2),
(139, 'Các tài liệu phục vụ môn học được cập nhật', 2, 2),
(140, 'Môn học góp phần trang bị kiến thức kỹ năng nghề nghiệp cho bạn', 3, 2),
(141, 'Giảng viên thực hiện đầy đủ nội dung và thời lượng của môn học theo kế hoạch', 3, 2),
(142, 'Giảng viên hướng dẫn bạn phương pháp học tập khi bắt đầu môn học', 3, 2),
(143, 'Phương pháp giảng dạy của giảng viên giúp bạn phát triển tư duy', 3, 2),
(144, 'Giảng viên tạo cơ hội để bạn chủ động tham gia vào quá trình học tập', 3, 2),
(145, 'Giảng viên giúp bạn phát triển kỹ năng làm việc độc lập', 3, 2),
(146, 'Giảng viên rèn luyện cho bạn phương pháp liên hệ giữa các vấn đề trong môn học với thực tiễn', 3, 2),
(147, 'Giảng viên sử dụng hiệu quả phương tiện dạy học', 3, 2),
(148, 'Giảng viên quan tâm giáo dục tư cách phẩm chất nghề nghiệp của người học', 3, 2),
(149, 'Bạn hiểu những vấn đề được truyền tải trên lớp', 4, 2),
(150, 'Kết quả học tập của người học được đánh giá bằng nhiều hình thức phù hợp với tính chất và đặc thù môn học', 4, 2),
(151, 'Nội dung kiểm tra đánh giá tổng hợp được các kỹ năng mà người học phải đạt theo yêu cầu', 4, 2),
(152, 'Thông tin phản hồi thừ kiểm tra đánh giá giúp bạn cải thiện kết quả học tập', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `respond`
--

CREATE TABLE `respond` (
  `idrespond` int(10) UNSIGNED NOT NULL,
  `idsurvey` int(10) UNSIGNED NOT NULL,
  `idstudent-subject` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `respond`
--

INSERT INTO `respond` (`idrespond`, `idsurvey`, `idstudent-subject`, `created_at`, `updated_at`) VALUES
(1, 7, 400, NULL, NULL),
(2, 8, 485, NULL, NULL),
(3, 8, 485, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student-subject`
--

CREATE TABLE `student-subject` (
  `id` int(10) UNSIGNED NOT NULL,
  `idstudent` int(10) UNSIGNED NOT NULL,
  `idsubject` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student-subject`
--

INSERT INTO `student-subject` (`id`, `idstudent`, `idsubject`, `created_at`, `updated_at`) VALUES
(341, 787, 5, NULL, NULL),
(342, 788, 5, NULL, NULL),
(343, 789, 5, NULL, NULL),
(344, 790, 5, NULL, NULL),
(345, 791, 5, NULL, NULL),
(346, 792, 5, NULL, NULL),
(347, 793, 5, NULL, NULL),
(348, 794, 5, NULL, NULL),
(349, 795, 5, NULL, NULL),
(350, 796, 5, NULL, NULL),
(351, 797, 5, NULL, NULL),
(352, 798, 5, NULL, NULL),
(353, 799, 5, NULL, NULL),
(354, 800, 5, NULL, NULL),
(355, 801, 5, NULL, NULL),
(356, 802, 5, NULL, NULL),
(357, 803, 5, NULL, NULL),
(358, 804, 5, NULL, NULL),
(359, 805, 5, NULL, NULL),
(360, 806, 5, NULL, NULL),
(361, 807, 5, NULL, NULL),
(362, 808, 5, NULL, NULL),
(363, 809, 5, NULL, NULL),
(364, 810, 5, NULL, NULL),
(365, 811, 5, NULL, NULL),
(366, 812, 5, NULL, NULL),
(367, 813, 5, NULL, NULL),
(368, 814, 5, NULL, NULL),
(369, 815, 5, NULL, NULL),
(370, 816, 5, NULL, NULL),
(371, 817, 5, NULL, NULL),
(372, 818, 5, NULL, NULL),
(373, 819, 5, NULL, NULL),
(374, 820, 5, NULL, NULL),
(375, 821, 5, NULL, NULL),
(376, 822, 5, NULL, NULL),
(377, 823, 5, NULL, NULL),
(378, 824, 5, NULL, NULL),
(379, 825, 5, NULL, NULL),
(380, 826, 5, NULL, NULL),
(381, 827, 5, NULL, NULL),
(382, 828, 5, NULL, NULL),
(383, 829, 5, NULL, NULL),
(384, 830, 5, NULL, NULL),
(385, 831, 5, NULL, NULL),
(386, 832, 5, NULL, NULL),
(387, 833, 5, NULL, NULL),
(388, 834, 5, NULL, NULL),
(389, 835, 5, NULL, NULL),
(390, 836, 5, NULL, NULL),
(391, 837, 5, NULL, NULL),
(392, 838, 5, NULL, NULL),
(393, 839, 5, NULL, NULL),
(394, 840, 5, NULL, NULL),
(395, 841, 5, NULL, NULL),
(396, 842, 5, NULL, NULL),
(397, 843, 5, NULL, NULL),
(398, 844, 5, NULL, NULL),
(399, 845, 5, NULL, NULL),
(400, 846, 5, NULL, NULL),
(401, 847, 5, NULL, NULL),
(402, 848, 5, NULL, NULL),
(403, 849, 5, NULL, NULL),
(404, 850, 5, NULL, NULL),
(405, 851, 5, NULL, NULL),
(406, 852, 5, NULL, NULL),
(407, 853, 5, NULL, NULL),
(408, 854, 5, NULL, NULL),
(409, 855, 5, NULL, NULL),
(410, 856, 5, NULL, NULL),
(411, 857, 5, NULL, NULL),
(412, 858, 5, NULL, NULL),
(413, 859, 5, NULL, NULL),
(414, 860, 5, NULL, NULL),
(415, 861, 5, NULL, NULL),
(416, 862, 5, NULL, NULL),
(417, 863, 5, NULL, NULL),
(418, 864, 5, NULL, NULL),
(419, 865, 5, NULL, NULL),
(420, 866, 5, NULL, NULL),
(421, 867, 5, NULL, NULL),
(422, 868, 5, NULL, NULL),
(423, 869, 5, NULL, NULL),
(424, 870, 5, NULL, NULL),
(425, 870, 5, NULL, NULL),
(426, 787, 6, NULL, NULL),
(427, 788, 6, NULL, NULL),
(428, 789, 6, NULL, NULL),
(429, 790, 6, NULL, NULL),
(430, 791, 6, NULL, NULL),
(431, 792, 6, NULL, NULL),
(432, 793, 6, NULL, NULL),
(433, 794, 6, NULL, NULL),
(434, 795, 6, NULL, NULL),
(435, 796, 6, NULL, NULL),
(436, 797, 6, NULL, NULL),
(437, 798, 6, NULL, NULL),
(438, 799, 6, NULL, NULL),
(439, 800, 6, NULL, NULL),
(440, 801, 6, NULL, NULL),
(441, 802, 6, NULL, NULL),
(442, 803, 6, NULL, NULL),
(443, 804, 6, NULL, NULL),
(444, 805, 6, NULL, NULL),
(445, 806, 6, NULL, NULL),
(446, 807, 6, NULL, NULL),
(447, 808, 6, NULL, NULL),
(448, 809, 6, NULL, NULL),
(449, 810, 6, NULL, NULL),
(450, 811, 6, NULL, NULL),
(451, 812, 6, NULL, NULL),
(452, 813, 6, NULL, NULL),
(453, 814, 6, NULL, NULL),
(454, 815, 6, NULL, NULL),
(455, 816, 6, NULL, NULL),
(456, 817, 6, NULL, NULL),
(457, 818, 6, NULL, NULL),
(458, 819, 6, NULL, NULL),
(459, 820, 6, NULL, NULL),
(460, 821, 6, NULL, NULL),
(461, 822, 6, NULL, NULL),
(462, 823, 6, NULL, NULL),
(463, 824, 6, NULL, NULL),
(464, 825, 6, NULL, NULL),
(465, 826, 6, NULL, NULL),
(466, 827, 6, NULL, NULL),
(467, 828, 6, NULL, NULL),
(468, 829, 6, NULL, NULL),
(469, 830, 6, NULL, NULL),
(470, 831, 6, NULL, NULL),
(471, 832, 6, NULL, NULL),
(472, 833, 6, NULL, NULL),
(473, 834, 6, NULL, NULL),
(474, 835, 6, NULL, NULL),
(475, 836, 6, NULL, NULL),
(476, 837, 6, NULL, NULL),
(477, 838, 6, NULL, NULL),
(478, 839, 6, NULL, NULL),
(479, 840, 6, NULL, NULL),
(480, 841, 6, NULL, NULL),
(481, 842, 6, NULL, NULL),
(482, 843, 6, NULL, NULL),
(483, 844, 6, NULL, NULL),
(484, 845, 6, NULL, NULL),
(485, 846, 6, NULL, NULL),
(486, 847, 6, NULL, NULL),
(487, 848, 6, NULL, NULL),
(488, 849, 6, NULL, NULL),
(489, 850, 6, NULL, NULL),
(490, 851, 6, NULL, NULL),
(491, 852, 6, NULL, NULL),
(492, 853, 6, NULL, NULL),
(493, 854, 6, NULL, NULL),
(494, 855, 6, NULL, NULL),
(495, 856, 6, NULL, NULL),
(496, 857, 6, NULL, NULL),
(497, 858, 6, NULL, NULL),
(498, 859, 6, NULL, NULL),
(499, 860, 6, NULL, NULL),
(500, 861, 6, NULL, NULL),
(501, 862, 6, NULL, NULL),
(502, 863, 6, NULL, NULL),
(503, 864, 6, NULL, NULL),
(504, 865, 6, NULL, NULL),
(505, 866, 6, NULL, NULL),
(506, 867, 6, NULL, NULL),
(507, 868, 6, NULL, NULL),
(508, 869, 6, NULL, NULL),
(509, 870, 6, NULL, NULL),
(510, 870, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idlecturer` int(10) UNSIGNED NOT NULL,
  `idsurvey` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `hocky` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namhoc` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `subject_name`, `code_subject`, `idlecturer`, `idsurvey`, `created_at`, `updated_at`, `hocky`, `namhoc`) VALUES
(5, 'Phát triển ứng dụng Web', 'INT3306 1', 13, 7, NULL, NULL, 'Năm học 2018-2019 học kỳ I', NULL),
(6, 'Toán rời rạc', 'INT3106 5', 18, 8, NULL, NULL, 'Năm học 2018-2019 học kỳ I', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`id`, `name`, `active`, `created_at`, `updated_at`) VALUES
(7, 'Phát triển ứng dụng Web', 1, '2018-12-27 08:05:51', NULL),
(8, 'Toán rời rạc', 1, '2018-12-27 08:44:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL DEFAULT '0',
  `img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `role`, `img`, `remember_token`, `created_at`, `updated_at`) VALUES
('111d', '$2y$10$ugEK5bmK7cPJzssuYxkcYe1TPM1TpNLAye7JSDaSUJ1USE297t/22', 0, '', NULL, '2018-12-23 14:41:57', '2018-12-23 14:41:57'),
('1212', '$2y$10$53WlCQVbYDifsBDTCB5epeM82nreQgHhHzbdN2EaR1zuNQ/TldlF.', 0, '', NULL, '2018-12-23 13:20:46', '2018-12-23 13:20:46'),
('123', '$2y$10$hZrT8ILVYfGwMtps0rYSX.BNtCT8QqUmuMPcl2PyYBk1UpChFJOB6', 0, 'img/b3ai.jpg', 'YV6SBgJo25S3Khk3Kxo31ahakSRkvzHiFnO4gWK1kQ6RCu7UB2mFfJAFTylk', '2018-12-23 09:38:57', '2018-12-23 09:38:57'),
('1234', '$2y$10$m7l5EiiOW9ru6X4Zt0jC.eEK4eEPpYiVP9ALFbvgHoTjXGKqNg.YS', 0, '', NULL, '2018-12-23 09:39:22', '2018-12-23 09:39:22'),
('13020176', '$2y$10$.3KE4VitLi2XTL3Vf3.2m.xnR9.qFQhfchK8U52QlFYE6dTOSsZLe', 2, 'img/user2.png', NULL, '2018-12-27 07:26:41', NULL),
('14020602', '$2y$10$PHkNmlKpL8118sWgwhl2FeSvnPjsqPQN8YeC9TtX9B/nIrbmwQeum', 2, 'img/user2.png', NULL, '2018-12-27 07:26:43', NULL),
('14020774', '$2y$10$Wykth/6UGM29FCCJnJEnPOPqrjwbL0lLhRkppVzLcHCBFXNS0.iou', 2, 'img/user2.png', NULL, '2018-12-27 07:26:45', NULL),
('14020797', '$2y$10$VmPhSYkb/./ySyIDhpBn4OckRpzQzn2GkNQi.T1j0c67cgG.IpB6.', 2, 'img/user2.png', NULL, '2018-12-27 07:26:45', NULL),
('15021135', '$2y$10$gpcoaezi68x0lJa3SpDgVOyzZk.pWVU6nP1yTKmCEiYyeb9JvqbSq', 2, 'img/user2.png', NULL, '2018-12-27 07:26:41', NULL),
('15021318', '$2y$10$EvxZxOiRjEE9sYTylp6/q.N.3VoIVhUHwTmHSrtlzZ51RIh8Jr61m', 2, 'img/user2.png', NULL, '2018-12-27 07:26:44', NULL),
('15021366', '$2y$10$nKzKmY5i/2u8MwSc9vzvWOrLnwwahxLi2LKvCQPk5fDkjHhAhwVmi', 2, 'img/user2.png', NULL, '2018-12-27 07:26:44', NULL),
('15021437', '$2y$10$.nBwQWiFA.L5K00fawudEOpsMH5lTAUWOhx8J.eNkoUnWBFg1tHba', 2, 'img/user2.png', NULL, '2018-12-27 07:26:41', NULL),
('15021490', '$2y$10$W8TTBYR7IvJUea5L9JbR8Ofq0LbhvpamS/zv5BqidjvUpt8CjCr1i', 2, 'img/user2.png', NULL, '2018-12-27 07:26:41', NULL),
('15021834', '$2y$10$JjOfyEJ18QjCnzk9lFH0dehMvFkWz8RugPSsFgLKk8DANlO8yaGn6', 2, 'img/user2.png', NULL, '2018-12-27 07:26:45', NULL),
('15021973', '$2y$10$6tPG3vxGvs3dMnBlW1LeyeMSIjaDYMruYJzXKLV97PXb2BjCP/0/O', 2, 'img/user2.png', NULL, '2018-12-27 07:26:43', NULL),
('15022848', '$2y$10$Rjz944ez6XRynbb1hjnaP.a0zcZH8QhDuvUR3MSYudSadEkZs8iCi', 2, 'img/user2.png', NULL, '2018-12-27 07:26:42', NULL),
('15022850', '$2y$10$FJjxYhRDD0GSZtg0TBnOYOIeOpMJe9APce4tfshbPBQY2D.XWG6TO', 2, 'img/user2.png', NULL, '2018-12-27 07:26:44', NULL),
('16020028', '$2y$10$mktgXSI95tiWvC0ayg40wehjG.CXBlU5mMpYjz8hCTp8TVZfA4CNW', 2, 'img/user2.png', NULL, '2018-12-27 07:26:45', NULL),
('16020029', '$2y$10$VlCfrQR8IdiCAjnoXitiyu/M1.oC8GV/xlX/M5Nqe/otXQgGSBnR.', 2, 'img/user2.png', NULL, '2018-12-27 07:26:45', NULL),
('16020030', '$2y$10$Czl62XqGThW7k/itXJV1se3Ejiif8IJ9qFfQDN0w.Ahm8F4mqVFWm', 2, 'img/user2.png', NULL, '2018-12-27 07:26:40', NULL),
('16020057', '$2y$10$ukh2qZQE5vEX1gt8d.JS2.foBvH8wHDTvWC/9hqLXFS3.YesF94W6', 2, 'img/user2.png', NULL, '2018-12-27 07:26:42', NULL),
('16020074', '$2y$10$ug/lIpmM.DzQ4t7Kh7xQweyMtXkTEohVE2W6SzKGmxQZl46baQE7a', 2, 'img/user2.png', NULL, '2018-12-27 07:26:40', NULL),
('16020077', '$2y$10$L.q0wzzIeLwpGv5b1q4nHeBCoPR3p.snMI4H77UZBMKxlHNt61RDm', 2, 'img/user2.png', NULL, '2018-12-27 07:26:39', NULL),
('16020078', '$2y$10$7laufvqv2plxETOtWXJGP.amKKRKA4.WSvdEkgq7G5we3K5L3Wpqu', 2, 'img/user2.png', NULL, '2018-12-27 07:26:44', NULL),
('16020839', '$2y$10$i1pD3.zb35QkSSGBU0rZ8eHdaDZRkyYhuA8BkTpqMtfzKjR87wjoK', 2, 'img/user2.png', NULL, '2018-12-27 07:26:39', NULL),
('16020855', '$2y$10$TK2xpZNb.pCw2UU3BYx46OblesywRxolabsqasxJsNvJgxUesaGPC', 2, 'img/user2.png', NULL, '2018-12-27 07:26:39', NULL),
('16020869', '$2y$10$ZiifKCkL0/5Ft4swMMfKKesaPmkJq5GNs2Ezk4AXwkbBgI2.qW0T.', 2, 'img/user2.png', NULL, '2018-12-27 07:26:39', NULL),
('16020875', '$2y$10$..rtgKC.W4AIVaqZZrN9cem6N8biMVYtjQ7GWp74VhH1EX5adsGxq', 2, 'img/user2.png', NULL, '2018-12-27 07:26:39', NULL),
('16020897', '$2y$10$C8nNputZPmOf23WbG6TNGOAtJvsu7Ewl5QTg/PWLxJya7eV83HHha', 2, 'img/user2.png', NULL, '2018-12-27 07:26:39', NULL),
('16020898', '$2y$10$50AbmEGwC2uFz/wSmD3vteRJQb78mvOVV1k3gk0oT6HiDAFG5faaC', 2, 'img/user2.png', NULL, '2018-12-27 07:26:39', NULL),
('16020913', '$2y$10$YEQs1pRkPU.7BstSGfQEwe.m96fQeMQBghccNchqYRNGMp3Td0XX.', 2, 'img/user2.png', NULL, '2018-12-27 07:26:39', NULL),
('16020934', '$2y$10$Q5X2IMDGD.V/NXNZC9eQqezYHKb/9HzNqIEVxFHIp10cEhOWXlTzK', 2, 'img/user2.png', NULL, '2018-12-27 07:26:40', NULL),
('16020936', '$2y$10$mQK4nBUDtiV05id69zh9R.YY451S/IAV1kzcuq.smgmaeEbegFA.C', 2, 'img/user2.png', NULL, '2018-12-27 07:26:40', NULL),
('16020948', '$2y$10$chnCy60KXqWvq5.M2qlVjulE49DSFpVOMpAdHTnWVkfrLRfqs82o6', 2, 'img/user2.png', NULL, '2018-12-27 07:26:40', NULL),
('16020950', '$2y$10$xeuFnTznQfee2kGaRBhTh.qE3v9NHkpXWFqoW8eJy8lN8DVLy4O3W', 2, 'img/user2.png', NULL, '2018-12-27 07:26:40', NULL),
('16020952', '$2y$10$21U5PtecQ1rkf/wYv.YBgOooEtASu7Fe48mXc6ghXOkc9H71YX53u', 2, 'img/user2.png', NULL, '2018-12-27 07:26:40', NULL),
('16020973', '$2y$10$tHUPnihFKP1SKerHW8Djb.L0W5q9PH68Qy2ft1MoyW9w4QMcGpRxm', 2, 'img/user2.png', NULL, '2018-12-27 07:26:40', NULL),
('16020974', '$2y$10$sVAiiYXl5IHg39drqltVPO2BzPojzf6ZHpq.5KG0wESmJJDOBeTke', 2, 'img/user2.png', NULL, '2018-12-27 07:26:41', NULL),
('16020978', '$2y$10$s17nheFUo2JXGRZOzHdHaO/ERgd.UfCcd0uYCKk2TO85DqLDMFJGa', 2, 'img/user2.png', NULL, '2018-12-27 07:26:41', NULL),
('16020980', '$2y$10$kwpF2GWxhe/NhXcrAcLo8eQ.C3Gp4p6AxVvC9WdMjAQuO4oViL5Se', 2, 'img/user2.png', NULL, '2018-12-27 07:26:41', NULL),
('16020999', '$2y$10$ITja6vcBXwSJUn1qvQ.ZqeFEPFJH3a8He02I2Bd7VTIjV1jEbvzUu', 2, 'img/user2.png', NULL, '2018-12-27 07:26:41', NULL),
('16021000', '$2y$10$YAr8FUQcK0Xcg1yTp.g79OTugHqIKLJg07U6ftJM0St5797fZjSa.', 2, 'img/user2.png', NULL, '2018-12-27 07:26:41', NULL),
('16021006', '$2y$10$n2dhRJRsL8qJbs.OVeuU0.zG6gR9pLXm2NflYhpvQgEvqp/PWvG2O', 2, 'img/user2.png', NULL, '2018-12-27 07:26:42', NULL),
('16021008', '$2y$10$JGqg89LCQkJlIhZ.atDHEOmH2lz5dVTRLC7exewMWOyaqiot.83T.', 2, 'img/user2.png', NULL, '2018-12-27 07:26:42', NULL),
('16021020', '$2y$10$v2uYTrKlLG6efRzTUhRVGOlAgwFFgn5jRoDSez3pUp2TYffSmdXRu', 2, 'img/user2.png', NULL, '2018-12-27 07:26:42', NULL),
('16021024', '$2y$10$2XqwlQ3VuFMWr5pK7WuMf.JdvdA7gNpU.slxTa002W8ilAqBpnUHK', 2, 'img/user2.png', NULL, '2018-12-27 07:26:42', NULL),
('16021042', '$2y$10$B7xHCUTi/24JbfdYItoZ0OQXtiCxzN0MWT3Ec/uxpBJU/zyO8WZVi', 2, 'img/user2.png', NULL, '2018-12-27 07:26:42', NULL),
('16021043', '$2y$10$UaBfZmJgn14iUw0XNTu9tulvwTKEaeXqfYiDspk2yiM6M5jbauY2m', 2, 'img/user2.png', NULL, '2018-12-27 07:26:42', NULL),
('16021057', '$2y$10$.brB4PZtvnF6SsiKXTJCPe5.0BsRbjL0vtbcuE6IlBIGV//FirxFm', 2, 'img/user2.png', NULL, '2018-12-27 07:26:42', NULL),
('16021087', '$2y$10$OAW/av08AiRMTQiDtYQDrOPgW.JVM5oVncIKm3Vf6HXtIdl8/ZHCG', 2, 'img/user2.png', NULL, '2018-12-27 07:26:42', NULL),
('16021090', '$2y$10$ANxH2aUPdr4e5sG8JRnJyenak5IblNlGSw9h7mOu1aOYJ9sjoJUqq', 2, 'img/user2.png', NULL, '2018-12-27 07:26:43', NULL),
('16021102', '$2y$10$gI1Jvcrx6C2HsJm64kXd8e63c71EvYtIg2D0ZDymboGNwdTfKwxga', 2, 'img/user2.png', NULL, '2018-12-27 07:26:43', NULL),
('16021103', '$2y$10$MThvWjaSIYvggtJmxK5Gj.yQTeNobQktpDSdWJ5UWq9BOMzVdBgV6', 2, 'img/user2.png', NULL, '2018-12-27 07:26:43', NULL),
('16021121', '$2y$10$PqKs6La6iBs2mHb2RdLq..1MslapUla7tLFCKEb9OUwzSAHnq..hy', 2, 'img/user2.png', NULL, '2018-12-27 07:26:43', NULL),
('16021125', '$2y$10$9Fsf7WF2rbFFdrNG79GLH.OdpvWy1l1Q88Va4wyBm/Zmv8FodRgKS', 2, 'img/user2.png', 'JGCXoR9CY5KC0aZrdflvoeVRQJQT7VVQ95kabJiwd3OkRsdEDVkQAVEPnCj1', '2018-12-27 07:26:43', NULL),
('16021138', '$2y$10$dkEQx/l4jbQ5h6akahlBNewmimduF1cnRQNUEjv.o5VegTRw3s5kS', 2, 'img/user2.png', NULL, '2018-12-27 07:26:43', NULL),
('16021139', '$2y$10$uyRoljvyBSvdCv0xO8CFfeRRNkxP4K.0rD2k2SDGs7bXyMugB66mW', 2, 'img/user2.png', NULL, '2018-12-27 07:26:43', NULL),
('16021145', '$2y$10$w/Tgs1qUeb5XtFXZ9cnOb.iuKWiBwAbEmXtWNd5FLD0w0n2smpH62', 2, 'img/user2.png', NULL, '2018-12-27 07:26:43', NULL),
('16021163', '$2y$10$MpgMwQtWA84OXu2r5oDNV.LumaZAqSqSYbP3b6t/RuYRWwMr0xyMO', 2, 'img/user2.png', NULL, '2018-12-27 07:26:43', NULL),
('16021175', '$2y$10$a1FR8S/Y39LO02Nzy0gAqedtHwWma3yh7OGNlz6u0Pd62x0R5.fkm', 2, 'img/user2.png', NULL, '2018-12-27 07:26:44', NULL),
('16021182', '$2y$10$mdiR4ODySaxlfAJZZmyKCex1PWoWqy4PXbhsx6dEMAljktAkTLTn2', 2, 'img/user2.png', NULL, '2018-12-27 07:26:44', NULL),
('16021199', '$2y$10$CbQb64Rt69cAXQomueu6/uIY5MvGK2dv720FYfUWpdRZMeTAdL9DO', 2, 'img/user2.png', NULL, '2018-12-27 07:26:44', NULL),
('16021201', '$2y$10$3N1qW65ir7IxXaH0nrqBTuTdPT4xRQ7.3uAFNPkMdYM6DaoWK5Nm6', 2, 'img/user2.png', NULL, '2018-12-27 07:26:44', NULL),
('16021204', '$2y$10$pZuWUyw5ugmw75tW7voAieVczAFI9Bb71V1n8zYxIsch6MHclikrG', 2, 'img/user2.png', NULL, '2018-12-27 07:26:44', NULL),
('16021205', '$2y$10$NmTxJwTXOxZJ0taJNwZfE.03MFKwbBK1M9AuXYFxwraUdMsJXkZUq', 2, 'img/user2.png', NULL, '2018-12-27 07:26:44', NULL),
('16021209', '$2y$10$DzSB/5KRqaT8hI/pn/N3Pui/FAdjN75fDBT17sBVdIwtRTaBmZaOi', 2, 'img/user2.png', NULL, '2018-12-27 07:26:44', NULL),
('16021229', '$2y$10$zqe5jH0amQzYbTyM5bpFwOtTy/hvz9d1mNO3GI5QSUbwzKrWjVvju', 2, 'img/user2.png', NULL, '2018-12-27 07:26:44', NULL),
('16021235', '$2y$10$41uNRv4345XL9c1CoQOYJOOGBTwOWmM4KIav3e57AAM4bg2iWZO2a', 2, 'img/user2.png', NULL, '2018-12-27 07:26:45', NULL),
('16021276', '$2y$10$wp1x4voSpjqarhBfHK9lbuzI7GnWHCIgWg.eTm0yWxBQEOSasJm/u', 2, 'img/user2.png', NULL, '2018-12-27 07:26:39', NULL),
('16021292', '$2y$10$W03muhV6ajiueb00RAodnumzqqPdJNukCLF/Uh0heTKsZpvmClVl2', 2, 'img/user2.png', NULL, '2018-12-27 07:26:41', NULL),
('16021369', '$2y$10$d9WN8XnxsfNn5h.JHDA4WulOkg.9M44igGQzyAc0vNc6WAIks5VKO', 2, 'img/user2.png', NULL, '2018-12-27 07:26:39', NULL),
('16021388', '$2y$10$7mbJuXNJh4ZMmmiWN7zp9ur.PaBQ6ZmezJCmayPHOyji3Zc610zAK', 2, 'img/user2.png', NULL, '2018-12-27 07:26:41', NULL),
('16021409', '$2y$10$2nzHw4Nq/Gdh1S097.Fntecfkqik25n8RtI0X.Z8H8VPUBk3rmMFm', 2, 'img/user2.png', NULL, '2018-12-27 07:26:43', NULL),
('16021424', '$2y$10$E.1kRm4xDz1U6y.QgOK2SOpVpaz/MRNIK7oGJbsOQh3J/qorWumZ.', 2, 'img/user2.png', NULL, '2018-12-27 07:26:44', NULL),
('16021554', '$2y$10$bWHtIZouuC8di2VTE2mltea90KWD6fei4v4EiPjGpFT6Pq6oRpOLm', 2, 'img/user2.png', NULL, '2018-12-27 07:26:39', NULL),
('16021577', '$2y$10$FxjWcSXYZZXHOh4/pbnWCeDYyEILqCjhaRTEDZCrwb4Pr4YRHsDK.', 2, 'img/user2.png', NULL, '2018-12-27 07:26:40', NULL),
('16021591', '$2y$10$4g89.qpMU5xqy5vgahGRoeAcCWqRA8K.9i6OD2k6EdF8fy3fEb2iW', 2, 'img/user2.png', NULL, '2018-12-27 07:26:41', NULL),
('16021824', '$2y$10$inxYXpHkJYptf4jK8fPQU.m5hsEPXa/q/r9e/pVY/SNtiilTgEV5q', 2, 'img/user2.png', NULL, '2018-12-27 07:26:40', NULL),
('16022069', '$2y$10$eBo4AGOGEjWRCQGdS6gtM.zv6cepRW5T22c.5iWW4oTguzU0VLu.W', 2, 'img/user2.png', NULL, '2018-12-27 07:26:40', NULL),
('16022075', '$2y$10$o33UvRkar9RFg2WbnYiO1u9PWMeixtAnPDE21dclHWDdOMrJIa0yi', 2, 'img/user2.png', NULL, '2018-12-27 07:26:40', NULL),
('16022164', '$2y$10$21DNFWFbeAKmyxmCkq2c5OrRtv8G4Pof02LVkAnLbnE8IijIi9j0q', 2, 'img/user2.png', NULL, '2018-12-27 07:26:40', NULL),
('16022193', '$2y$10$aUcIlMEVmKwNBACINrfEP.gH2fgGFTlu276nAeoDjC5YijdOofvA.', 2, 'img/user2.png', NULL, '2018-12-27 07:26:42', NULL),
('16022363', '$2y$10$hJA5eCSDWBASRl1zwIcJOe95oT0KaN2QkFcFJEDCb1QlhBPyF3Jei', 2, 'img/user2.png', NULL, '2018-12-27 07:26:39', NULL),
('16022374', '$2y$10$2fm4DCIzr8.4KhMN/pdQZem9ALiCDkqSWuWmPALauAkmv2DrvoOom', 2, 'img/user2.png', NULL, '2018-12-27 07:26:41', NULL),
('16022440', '$2y$10$hl4N79qL3ytsvS52/FfSS.ja/.XPBe0xCDfgNHfKFhe3xleUkWGZe', 2, 'img/user2.png', NULL, '2018-12-27 07:26:41', NULL),
('16022443', '$2y$10$vtIVw70zSxQ0oE/CSuVcUe2qUZeOtCk3iWa4ocuMTSJobk8kJnV6S', 2, 'img/user2.png', NULL, '2018-12-27 07:26:42', NULL),
('16022450', '$2y$10$65XfFIXsbR3.VsJEN1iOG.QR.77m.X4LK0zFM.MbJAtdeT8l3/Qpy', 2, 'img/user2.png', NULL, '2018-12-27 07:26:43', NULL),
('16022492', '$2y$10$xRtV60.PxPhAIdaeK5wiju3Eyb0LuItEi.dqIWuY0vT0Eqtdr7qjW', 2, 'img/user2.png', NULL, '2018-12-27 07:26:42', NULL),
('17020039', '$2y$10$W8y7Hxj6fnEY13pvlwL2VeTMPs9H4u/3pRUNUWqT3owwmPJAUh5cK', 2, 'img/user2.png', NULL, '2018-12-27 07:26:43', NULL),
('anhbc', '$2y$10$S7lr2dCiJuiHl3Kikvc9.edqgIQYusyZ3IQ7UgUat3lX6zZo8qU.G', 2, 'img/user2.png', NULL, '2018-12-27 07:31:08', NULL),
('anhlv', '$2y$10$B4kHhVncvNmB5aFh/NX0TeHQVtAcMWpWrMO2UuH99FqvlapCUQ8HK', 2, 'img/user2.png', NULL, '2018-12-27 07:31:08', NULL),
('anhnd', '$2y$10$Ef6kmTy79q4DfX3Grl0S2.eOKdo/JUdMvU7xY.Le1j4xgH2Pl20Pq', 2, 'img/user2.png', NULL, '2018-12-27 07:31:08', NULL),
('anhnq', '$2y$10$RMkreAkQtE2m3IOUxB3KSuS7P4qd2XOogyGmDoKaQx9AhXJmR8xkO', 2, 'img/user2.png', NULL, '2018-12-27 07:31:09', NULL),
('anhnt', '$2y$10$gqnRHhkpVEDiQu/VAp/9EesqKzx3cGGBnsXnQ3RPHzgxmXgzmOfLW', 2, 'img/user2.png', NULL, '2018-12-27 07:31:09', NULL),
('anhntp', '$2y$10$2gMSkU3nLpGsF6xZStxvAOla1YWd.2FMrbi39FRk3aljgO/4YyEb6', 2, 'img/user2.png', NULL, '2018-12-27 07:31:09', NULL),
('anhntv', '$2y$10$z1oHWvhQ9vIuMOaoHb6JGe7VYzs/MDXgLnTWwxz6.BuLdyRF0Bifm', 2, 'img/user2.png', NULL, '2018-12-27 07:31:09', NULL),
('anpkl', '$2y$10$DWCYozRCJmBUC0ix0B19lu88Y35HWVVMGXbcH9IzJ.7BSw62JH1n.', 0, 'img/user2.png', 'bdrBB1hmR6yWaXtl417iqmv60wjzcX8qjXuNk65I7crzEj4ApSWLrJ2kfcAu', '2018-12-27 06:22:34', '2018-12-27 06:22:34'),
('anth', '$2y$10$wTjLZUuCixsYNW7wOOtrr.qooM0RBRKcC9PCFwJZjY4sJCgJR8Ouq', 2, 'img/user2.png', NULL, '2018-12-27 07:31:08', NULL),
('chiennc', '$2y$10$7FOhUdw5Li6y2utWNsweDeBsnqbUd.jVed/7cwu4oCImvwDa0Oph2', 2, 'img/user2.png', NULL, '2018-12-27 07:31:09', NULL),
('chientm', '$2y$10$K8v4NVNa62HdXQn8pcdunOfReOj07QhI3m5nSkvKQ6NlDrcessNaW', 2, 'img/user2.png', NULL, '2018-12-27 07:31:09', NULL),
('d', '$2y$10$ViVgbaaj02TuseNPOR242uzzWkjyMd0RlaP2cWE3MnDvwEeJamCE2', 0, '', NULL, '2018-12-23 14:41:21', '2018-12-23 14:41:21'),
('ddd', '$2y$10$5RdFHdktCa53zHTUUQQq1.rihl8P/MNG2nKzFmp6Jp/vaM6rroO2C', 0, '', NULL, '2018-12-23 09:27:15', '2018-12-23 09:27:15'),
('fffff', '$2y$10$xeJw62DqM58VPsiWRhw3AeVMsZqifGdjalZceTm7m3Hx4Z0Grg..2', 0, '', NULL, '2018-12-23 15:17:08', '2018-12-23 15:17:08'),
('haidt', '$2y$10$RTaok0GI/3MfQ.nHlf2eXu/NHErd7biO9baLVp56GovzKMTivDSYG', 1, 'img/user2.png', NULL, '2018-12-27 07:31:25', NULL),
('kdfd', '$2y$10$RF7tFf.IFECPiNiZy8QtxufNBEWPQJZtFW09/rM.Fslq1mLKCtMhy', 0, 'img/user2.png', NULL, '2018-12-27 05:26:59', '2018-12-27 05:26:59'),
('kdkdfjd', '$2y$10$UGr/DnoHBad.cjGZASPbnOGrXiWzF1z7nD0vMBoBW8QfCwzNInX9C', 0, '', NULL, '2018-12-23 15:17:56', '2018-12-23 15:17:56'),
('maitt', '$2y$10$xrHTe26Lqa1o5AGfiHxYYOoZiPwhpThbVNuZcpBr6lvmI0naF5W0.', 1, 'img/user2.png', NULL, '2018-12-27 07:31:25', NULL),
('root1', '$2y$10$3Pf.u3kyESXj6IE4gEUR3O33Xr89c8L/3E0Oo1c.Dc8BLy.HAkirG', 0, '', NULL, '2018-12-23 14:40:16', '2018-12-23 14:40:16'),
('root123', '$2y$10$PlctsFidU1xRNXXP2bZUfu5jaokJtxSfacG/ZqnR/Jd8MmOfmxhVO', 0, 'img/user2.png', NULL, '2018-12-27 05:25:36', '2018-12-27 05:25:36'),
('root21', '$2y$10$DeipnJ0IkWv0aUT/vcKsYebWh8POJ3hKb/B5RKyJr3okZLdGo8GYy', 0, '', NULL, '2018-12-23 14:56:05', '2018-12-23 14:56:05'),
('root333', '$2y$10$gPyBFoEsg6I0fQImcf7H9uKiYXtNIaTcjf4skRu/lI2GkpPzYJF6i', 0, '', NULL, '2018-12-23 15:58:12', '2018-12-23 15:58:12'),
('rootroot', '$2y$10$VA.uhHsu3YaRwctyP82cAuPS2uHTtw7Y84kQxrk6iQFanJIqf4kxG', 0, '', NULL, '2018-12-23 15:23:25', '2018-12-23 15:23:25'),
('sonnh', '$2y$10$Oh82/WdxkA7ha1kjFHb9t.6.PBdcJAsk.YyIFGr3bVDdoXaSre1kq', 1, 'img/user2.png', NULL, '2018-12-27 07:31:25', NULL),
('thanhld', '$2y$10$ZP5x7tm6hVovKHarf3M8yu2ILUQ5j9YMsgBadU1EjwTpavIbOH9Ci', 1, 'img/user2.png', 'UsrsD2rYNdabfQ9IKrRuV8Rb3O8xVAPoLcDTKCfPp3brvNBVPafiquRsbb0k', '2018-12-27 07:31:24', NULL),
('thudm', '$2y$10$zZq9n2X0Y87ds07V.wL8Ge8VXcBec/2Yh6mTUBdibk9q/EqsA2sVy', 1, 'img/user2.png', NULL, '2018-12-27 07:31:25', NULL),
('tunghx', '$2y$10$CpiaPsYwqltPqICAGcsMD.QA/3xghrGYdP1XPRFvCqjASgAKSNuaC', 1, 'img/user2.png', NULL, '2018-12-27 07:31:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE `user_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `img` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(160) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`id`, `name`, `email`, `user_id`, `remember_token`, `updated_at`, `img`, `address`, `phone`) VALUES
(35, ' Nhữ Văn Chiến', 'jdjddj@kfkfk', 'ddd', NULL, NULL, '', '', ''),
(36, ' Triệu Hoàng Ân', 'anc@gmail.com', '123', NULL, NULL, 'img/b3ai.jpg', 'Hà Nội', '0909848489'),
(37, ' Triệu Hoàng Ân', 'jdjddj@kfkfk', '1234', NULL, NULL, '', '', ''),
(38, 'Khá Văn Bảnh', 'phamkhacan1903@gmail.com', '1212', NULL, NULL, '', '', ''),
(40, 'Lê Đình Thanh', 'ddd@dd', 'd', NULL, NULL, '', '', ''),
(41, 'Lê Đình Thanh', 'ddd@dd', '111d', NULL, NULL, '', '', ''),
(42, ' Nhữ Văn Chiến', 'ddd@dd', 'root21', NULL, NULL, '', '', ''),
(44, 'Lê Đình Thanh', 'ddd@dd', 'fffff', NULL, NULL, '', '', ''),
(45, 'ddudud', 'ddd@dd', 'kdkdfjd', NULL, NULL, '', '', ''),
(46, 'fdf', 'ddd@dd', 'rootroot', NULL, NULL, '', '', ''),
(47, 'Lê Đình Thanh Kien', 'jdjddj@kfkfk', 'root333', NULL, NULL, '', '', ''),
(48, 'Lê Đình Thanh', 'ddd@dd', 'kdfd', NULL, NULL, 'img/user2.png', NULL, NULL),
(49, 'Phạm Khắc Ân', 'an123@gmail.com', 'anpkl', NULL, NULL, 'img/user2.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_lecturer`
--

CREATE TABLE `user_lecturer` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `modified_at` timestamp(6) NULL DEFAULT NULL,
  `magv` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diachi` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(123) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_lecturer`
--

INSERT INTO `user_lecturer` (`id`, `name`, `email`, `user_id`, `remember_token`, `updated_at`, `modified_at`, `magv`, `sdt`, `diachi`, `img`) VALUES
(13, 'Lê Đình Thanh', 'thanhld@vnu.edu.vn', 'thanhld', NULL, NULL, NULL, '25212211', NULL, NULL, 'img/user2.png'),
(14, 'Hoàng Xuân Tùng', 'tunghx@vnu.edu.vn', 'tunghx', NULL, NULL, NULL, '222', NULL, NULL, 'img/user2.png'),
(15, 'Nguyễn Hoài Sơn', 'sonnh@vnu.edu.vn', 'sonnh', NULL, NULL, NULL, '333', NULL, NULL, 'img/user2.png'),
(16, 'Đào Minh Thư', 'thudm@vnu.edu.vn', 'thudm', NULL, NULL, NULL, '444', NULL, NULL, 'img/user2.png'),
(17, 'Trần Trúc Mai', 'maitt@vnu.edu.vn', 'maitt', NULL, NULL, NULL, '555', NULL, NULL, 'img/user2.png'),
(18, 'Đặng Thanh Hải', 'haidt@vnu.edu.vn', 'haidt', NULL, NULL, NULL, '123123', NULL, NULL, 'img/user2.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_student`
--

CREATE TABLE `user_student` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `modified_at` timestamp(6) NULL DEFAULT NULL,
  `img` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_student`
--

INSERT INTO `user_student` (`id`, `name`, `email`, `course`, `user_id`, `remember_token`, `updated_at`, `modified_at`, `img`, `phone`, `address`) VALUES
(787, 'Phạm Công Anh', '16020839@vnu.edu.vn', 'QH-2016-I/CQ-C-C', '16020839', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(788, 'Phạm Tuấn Anh', '16021554@vnu.edu.vn', 'QH-2016-I/CQ-N', '16021554', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(789, 'Hoàng Văn Chính', '16020855@vnu.edu.vn', 'QH-2016-I/CQ-C-C', '16020855', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(790, 'Đinh Thị Thùy Dung', '16021369@vnu.edu.vn', 'QH-2016-I/CQ-C-A-C', '16021369', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(791, 'Đậu Trọng Dũng', '16020897@vnu.edu.vn', 'QH-2016-I/CQ-C-B', '16020897', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(792, 'Đỗ Đức Dũng', '16020898@vnu.edu.vn', 'QH-2016-I/CQ-C-B', '16020898', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(793, 'Nguyễn Khánh Duy', '16021276@vnu.edu.vn', 'QH-2016-I/CQ-T', '16021276', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(794, 'Phạm Văn Duy', '16020913@vnu.edu.vn', 'QH-2016-I/CQ-T', '16022363', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(795, 'Nguyễn Bình Dương', '16020913@vnu.edu.vn', 'QH-2016-I/CQ-C-B', '16020913', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(796, 'Hoàng Văn Đại', '16020077@vnu.edu.vn', 'QH-2016-I/CQ-C-C', '16020077', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(797, 'Nguyễn Thành Đại', '16020869@vnu.edu.vn', 'QH-2016-I/CQ-C-B', '16020869', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(798, 'Lê Quang Đạo', '16020875@vnu.edu.vn', 'QH-2016-I/CQ-C-C', '16020875', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(799, 'Đỗ Thành Đạt', '16021824@vnu.edu.vn', 'QH-2016-I/CQ-N', '16021824', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(800, 'Kiều Quốc Đạt', '16020030@vnu.edu.vn', 'QH-2016-I/CQ-C-C', '16020030', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(801, 'Lê Quang Đạt', '16022164@vnu.edu.vn', 'QH-2016-I/CQ-N', '16022164', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(802, 'Phan Minh Đức', '16022069@vnu.edu.vn', 'QH-2016-I/CQ-T', '16022069', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(803, 'Trương Hà Anh Đức', '16020074@vnu.edu.vn', 'QH-2016-I/CQ-C-B', '16020074', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(804, 'Dương Thanh Hải', '16020934@vnu.edu.vn', 'QH-2016-I/CQ-C-C', '16020934', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(805, 'Lê Viết Hải', '16020936@vnu.edu.vn', 'QH-2016-I/CQ-C-B', '16020936', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(806, 'Đoàn Trung Hiếu', '16022075@vnu.edu.vn', 'QH-2016-I/CQ-T', '16022075', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(807, 'Đỗ Minh Hiếu', '16021577@vnu.edu.vn', 'QH-2016-I/CQ-N', '16021577', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(808, 'Hà Minh Hiếu', '16020948@vnu.edu.vn', 'QH-2016-I/CQ-C-C', '16020948', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(809, 'Hoàng Minh Hiếu', '16020950@vnu.edu.vn', 'QH-2016-I/CQ-C-C', '16020950', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(810, 'Lê Trung Hiếu', '16020952@vnu.edu.vn', 'QH-2016-I/CQ-C-C', '16020952', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(811, 'Nguyễn Đức Hoàng', '16020973@vnu.edu.vn', 'QH-2016-I/CQ-C-B', '16020973', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(812, 'Nguyễn Minh Hoàng', '16020974@vnu.edu.vn', 'QH-2016-I/CQ-C-C', '16020974', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(813, 'Nguyễn Xuân Hoàng', '13020176@vnu.edu.vn', 'QH-2013-I/CQ-C-C', '13020176', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(814, 'Vũ Huy Hoàng', '16020978@vnu.edu.vn', 'QH-2016-I/CQ-C-C', '16020978', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(815, 'Trần Đức Học', '16020980@vnu.edu.vn', 'QH-2016-I/CQ-C-C', '16020980', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(816, 'Nguyễn Thị Hợp', '16021292@vnu.edu.vn', 'QH-2016-I/CQ-T', '16021292', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(817, 'Cao Đức Huân', '16021388@vnu.edu.vn', 'QH-2016-I/CQ-C-A-C', '16021388', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(818, 'Nguyễn Mậu Đức Huy', '16022374@vnu.edu.vn', 'QH-2016-I/CQ-T', '16022374', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(819, 'Nguyễn Quang Huy', '16021000@vnu.edu.vn', 'QH-2016-I/CQ-C-C', '16021000', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(820, 'Nguyễn Quang Huy', '16020999@vnu.edu.vn', 'QH-2016-I/CQ-C-C', '16020999', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(821, 'Nguyễn Văn Huy', '16021490@vnu.edu.vn', 'QH-2015-I/CQ-C-C', '15021490', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(822, 'Trịnh Ngọc Huy', '16022440@vnu.edu.vn', 'QH-2016-I/CQ-N', '16022440', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(823, 'Lê Duy Hưng', '16021135@vnu.edu.vn', 'QH-2015-I/CQ-C-B', '15021135', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(824, 'Lê Duy Hưng', '16021591@vnu.edu.vn', 'QH-2016-I/CQ-N', '16021591', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(825, 'Vũ Văn Hưng', '16021437@vnu.edu.vn', 'QH-2015-I/CQ-C-C', '15021437', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(826, 'Nguyễn Văn Khải', '16021006@vnu.edu.vn', 'QH-2016-I/CQ-C-B', '16021006', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(827, 'Lê Duy Khánh', '16021108@vnu.edu.vn', 'QH-2016-I/CQ-C-C', '16021008', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(828, 'Nguyễn Ngọc Lâm', '16022193@vnu.edu.vn', 'QH-2016-I/CQ-N', '16022193', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(829, 'Nguyễn Văn Lâm', '16022492@vnu.edu.vn', 'QH-2016-I/CQ-T', '16022492', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(830, 'Bùi Quang Linh', '16021020@vnu.edu.vn', 'QH-2016-I/CQ-C-B', '16021020', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(831, 'Bùi Thị Diệu Linh', '16022848@vnu.edu.vn', 'QH-2015-I/CQ-C-B', '15022848', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(832, 'Lê Quang Linh', '16021024@vnu.edu.vn', 'QH-2016-I/CQ-C-C', '16021024', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(833, 'Cao Đức Mạnh', '16021042@vnu.edu.vn', 'QH-2016-I/CQ-C-B', '16021042', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(834, 'Đào Tiến Mạnh', '16021043@vnu.edu.vn', 'QH-2016-I/CQ-C-B', '16021043', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(835, 'Lê Hà My', '16021057@vnu.edu.vn', 'QH-2016-I/CQ-C-B', '16021057', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(836, 'Kiều Thanh Nam', '16022443@vnu.edu.vn', 'QH-2016-I/CQ-N', '16022443', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(837, 'Phạm Thị Oanh', '16020057@vnu.edu.vn', 'QH-2016-I/CQ-C-B', '16020057', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(838, 'Phạm Văn Oánh', '16021087@vnu.edu.vn', 'QH-2016-I/CQ-C-B', '16021087', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(839, 'Hoàng Văn Phú', '16021090@vnu.edu.vn', 'QH-2016-I/CQ-C-C', '16021090', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(840, 'Phan Văn Phước', '16020602@vnu.edu.vn', 'QH-2014-I/CQ-C-D', '14020602', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(841, 'Nguyễn Anh Phương', '16021409@vnu.edu.vn', 'QH-2016-I/CQ-C-A-C', '16021409', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(842, 'Phạm Ngọc Quang', '16021973@vnu.edu.vn', 'QH-2015-I/CQ-N', '15021973', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(843, 'Ngô Hồng Quân', '16021102@vnu.edu.vn', 'QH-2016-I/CQ-C-B', '16021102', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(844, 'Nguyễn Hồng Quân', '16021103@vnu.edu.vn', 'QH-2016-I/CQ-C-C', '16021103', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(845, 'Nguyễn Thái San', '16021121@vnu.edu.vn', 'QH-2016-I/CQ-C-B', '16021121', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(846, 'Đinh Quang Sơn', '16021125@vnu.edu.vn', 'QH-2016-I/CQ-C-B', '16021125', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(847, 'Nguyễn Thị Thanh Tân', '16021138@vnu.edu.vn', 'QH-2016-I/CQ-C-B', '16021138', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(848, 'Nguyễn Hoàng Thạch', '16021139@vnu.edu.vn', 'QH-2016-I/CQ-C-B', '16021139', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(849, 'Vương Hải Thanh', '17020039@vnu.edu.vn', 'QH-2017-I/CQ-C-A-C', '17020039', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(850, 'Tưởng Công Thành', '16022450@vnu.edu.vn', 'QH-2016-I/CQ-N', '16022450', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(851, 'Đỗ Việt Thắng', '16021145@vnu.edu.vn', 'QH-2016-I/CQ-C-B', '16021145', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(852, 'Đỗ Mạnh Thế', '16021163@vnu.edu.vn', 'QH-2016-I/CQ-C-B', '16021163', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(853, 'Hoàng Vĩnh Thịnh', '16020078@vnu.edu.vn', 'QH-2016-I/CQ-C-C', '16020078', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(854, 'Bùi Thị Hoài Thu', '16021424@vnu.edu.vn', 'QH-2016-I/CQ-C-A-C', '16021424', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(855, 'Lê Thị Thúy', '16021175@vnu.edu.vn', 'QH-2016-I/CQ-C-B', '16021175', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(856, 'Nguyễn Đức Tiến', '16021182@vnu.edu.vn', 'QH-2016-I/CQ-C-B', '16021182', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(857, 'Đỗ Xuân Toàn', '15022850@vnu.edu.vn', 'QH-2015-I/CQ-C-D', '15022850', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(858, 'Nguyễn Thị Thu Trang', '15021318@vnu.edu.vn', 'QH-2015-I/CQ-T', '15021318', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(859, 'Hà Công Trung', '16021199@vnu.edu.vn', 'QH-2016-I/CQ-C-D', '16021199', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(860, 'Nguyễn Duy Trường', '16021201@vnu.edu.vn', 'QH-2016-I/CQ-C-B', '16021201', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(861, 'Hà Văn Tú', '16022069@vnu.edu.vn', 'QH-2016-I/CQ-C-B', '16021204', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(862, 'Nghiêm Anh Tú', '16022069@vnu.edu.vn', 'QH-2016-I/CQ-C-B', '16021205', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(863, 'Đỗ Quốc Tuấn', '16022069@vnu.edu.vn', 'QH-2016-I/CQ-C-B', '16021209', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(864, 'Nguyễn Văn Tùng', '16022069@vnu.edu.vn', 'QH-2015-I/CQ-C-A-C', '15021366', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(865, 'Đặng Thị Tuyết', '16022069@vnu.edu.vn', 'QH-2016-I/CQ-C-B', '16021229', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(866, 'Nguyễn Tiến Việt', '16022069@vnu.edu.vn', 'QH-2016-I/CQ-C-B', '16021235', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(867, 'Đỗ Quốc Vương', '16022069@vnu.edu.vn', 'QH-2014-I/CQ-C-A', '14020774', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(868, 'Nguyễn Đức Vượng', '16022069@vnu.edu.vn', 'QH-2014-I/CQ-C-A-C', '14020797', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(869, 'Nguyễn Tuấn Vượng', '16022069@vnu.edu.vn', 'QH-2015-I/CQ-T', '15021834', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(870, 'Nguyễn Tiến Xuân', '16022069@vnu.edu.vn', 'QH-2016-I/CQ-C-B', '16020028', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(871, 'unn X', '16022069@vnu.edu.vn', 'QH-2016-I/CQ-C-B', '16020029', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(872, ' Triệu Hoàng An', 'anth@vnu.edu.vn', 'QH-2015-I/CQ-CLC', 'anth', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(873, ' Bùi Châu Anh', 'anhbc@vnu.edu.vn', 'QH-2015-I/CQ-CLC', 'anhbc', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(874, ' Lưu Việt Anh', 'anhlv@vnu.edu.vn', 'QH-2015-I/CQ-CLC', 'anhlv', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(875, ' Nguyễn Đức Anh', 'anhnd@vnu.edu.vn', 'QH-2015-I/CQ-CLC', 'anhnd', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(876, ' Nguyễn Quang Anh', 'anhnq@vnu.edu.vn', 'QH-2015-I/CQ-CLC', 'anhnq', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(877, ' Nguyễn Thị Phương Anh', 'anhntp@vnu.edu.vn', 'QH-2015-I/CQ-CLC', 'anhntp', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(878, ' Nguyễn Thị Vân Anh', 'anhntv@vnu.edu.vn', 'QH-2015-I/CQ-CLC', 'anhntv', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(879, ' Nguyễn Tuấn Anh', 'anhnt@vnu.edu.vn', 'QH-2015-I/CQ-CLC', 'anhnt', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(880, ' Nguyễn Chu Chiến', 'chiennc@vnu.edu.vn', 'QH-2015-I/CQ-CLC', 'chiennc', NULL, NULL, NULL, 'img/user2.png', NULL, NULL),
(881, ' Trần Minh Chiến', 'chientm@vnu.edu.vn', 'QH-2015-I/CQ-CLC', 'chientm', NULL, NULL, NULL, 'img/user2.png', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answer_idrespond_foreign` (`idrespond`),
  ADD KEY `idform` (`idform`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`idform`),
  ADD KEY `question_idsurvey_foreign` (`idsurvey`),
  ADD KEY `idquestion_2` (`idquestion`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idgroupname` (`idgroupname`);

--
-- Indexes for table `question_group`
--
ALTER TABLE `question_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_sheet`
--
ALTER TABLE `question_sheet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idgroup` (`idgroupname`);

--
-- Indexes for table `respond`
--
ALTER TABLE `respond`
  ADD PRIMARY KEY (`idrespond`),
  ADD KEY `respond_idsurvey_foreign` (`idsurvey`),
  ADD KEY `respond_idstudent_subject_foreign` (`idstudent-subject`);

--
-- Indexes for table `student-subject`
--
ALTER TABLE `student-subject`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_subject_idstudent_foreign` (`idstudent`),
  ADD KEY `student_subject_idsubject_foreign` (`idsubject`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subject_idsurvey_unique` (`idsurvey`),
  ADD KEY `subject_idlecturer_foreign` (`idlecturer`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_admin_user_id_unique` (`user_id`);

--
-- Indexes for table `user_lecturer`
--
ALTER TABLE `user_lecturer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_lecturer_user_id_unique` (`user_id`);

--
-- Indexes for table `user_student`
--
ALTER TABLE `user_student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_student_user_id_unique` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `idform` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=286;

--
-- AUTO_INCREMENT for table `question_group`
--
ALTER TABLE `question_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `question_sheet`
--
ALTER TABLE `question_sheet`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT for table `respond`
--
ALTER TABLE `respond`
  MODIFY `idrespond` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student-subject`
--
ALTER TABLE `student-subject`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=511;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `user_lecturer`
--
ALTER TABLE `user_lecturer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_student`
--
ALTER TABLE `user_student`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=882;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `answer_ibfk_1` FOREIGN KEY (`idform`) REFERENCES `form` (`idform`),
  ADD CONSTRAINT `answer_idrespond_foreign` FOREIGN KEY (`idrespond`) REFERENCES `respond` (`idrespond`) ON DELETE CASCADE;

--
-- Constraints for table `form`
--
ALTER TABLE `form`
  ADD CONSTRAINT `form_ibfk_1` FOREIGN KEY (`idquestion`) REFERENCES `question` (`id`),
  ADD CONSTRAINT `question_idsurvey_foreign` FOREIGN KEY (`idsurvey`) REFERENCES `survey` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`idgroupname`) REFERENCES `question_group` (`id`);

--
-- Constraints for table `question_sheet`
--
ALTER TABLE `question_sheet`
  ADD CONSTRAINT `question_sheet_ibfk_1` FOREIGN KEY (`idgroupname`) REFERENCES `question_group` (`id`);

--
-- Constraints for table `respond`
--
ALTER TABLE `respond`
  ADD CONSTRAINT `respond_idstudent_subject_foreign` FOREIGN KEY (`idstudent-subject`) REFERENCES `student-subject` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `respond_idsurvey_foreign` FOREIGN KEY (`idsurvey`) REFERENCES `survey` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `student-subject`
--
ALTER TABLE `student-subject`
  ADD CONSTRAINT `student_subject_idstudent_foreign` FOREIGN KEY (`idstudent`) REFERENCES `user_student` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_subject_idsubject_foreign` FOREIGN KEY (`idsubject`) REFERENCES `subject` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`idsurvey`) REFERENCES `survey` (`id`),
  ADD CONSTRAINT `subject_idlecturer_foreign` FOREIGN KEY (`idlecturer`) REFERENCES `user_lecturer` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD CONSTRAINT `user_admin_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`username`) ON DELETE CASCADE;

--
-- Constraints for table `user_lecturer`
--
ALTER TABLE `user_lecturer`
  ADD CONSTRAINT `user_lecturer_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`username`) ON DELETE CASCADE;

--
-- Constraints for table `user_student`
--
ALTER TABLE `user_student`
  ADD CONSTRAINT `user_student_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`username`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
