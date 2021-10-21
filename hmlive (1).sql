-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 12, 2020 at 08:01 AM
-- Server version: 5.5.65-MariaDB
-- PHP Version: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmlive`
--

-- --------------------------------------------------------

--
-- Table structure for table `another_videos`
--

CREATE TABLE IF NOT EXISTS `another_videos` (
  `id` int(10) unsigned NOT NULL,
  `source_id` text COLLATE utf8mb4_unicode_ci,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class_id` int(11) NOT NULL,
  `schoolblock_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `another_videos`
--

INSERT INTO `another_videos` (`id`, `source_id`, `title`, `url`, `duration`, `class_id`, `schoolblock_id`, `subject_id`, `created_at`, `updated_at`) VALUES
(2, 'https://stream2.hocmai.vn/live/Lesson_2_Where_my_book.mp4/index.m3u8', 'Livestream demo cho HOCMAI', 'https://stream2.hocmai.vn/live/Lesson_2_Where_my_book.mp4/index.m3u8', '793', 1, 1, 1, '2020-04-09 21:21:45', '2020-04-24 21:19:07'),
(3, 'https://stream2.hocmai.vn/live/Lesson_2_Where_my_book.mp4/index.m3u8', 'video hướng dẫn làm bánh mì', 'https://stream2.hocmai.vn/live/Lesson_2_Where_my_book.mp4/index.m3u8', '793', 1, 2, 1, '2020-04-21 20:30:43', '2020-04-23 23:27:00'),
(5, 'https://stream2.hocmai.vn/live/Lesson_2_Where_my_book.mp4/index.m3u8', 'LiveStream tiếng anh', 'https://stream2.hocmai.vn/live/Lesson_2_Where_my_book.mp4/index.m3u8', '793', 10, 3, 2, '2020-04-22 09:58:09', '2020-04-22 09:58:09'),
(6, 'https://stream2.hocmai.vn/live/Lesson_2_Where_my_book.mp4/index.m3u8', 'Video link up host HM - tiếng anh', 'https://stream2.hocmai.vn/live/Lesson_2_Where_my_book.mp4/index.m3u8', '793', 8, 3, 2, '2020-04-23 20:06:04', '2020-04-23 20:06:04'),
(7, 'https://wowzaec2demo.streamlock.net/live/bigbuckbunny/playlist.m3u8', 'LiveStream hoạt hình thử nghiệm', 'https://wowzaec2demo.streamlock.net/live/bigbuckbunny/playlist.m3u8', '2720', 12, 3, 3, '2020-08-05 09:00:10', '2020-08-05 09:00:10'),
(8, 'https://live-vncdn.hocmai.vn/hocmai/test_manifest.m3u8?vhost=__defaultVhost__', 'Link live thử', 'https://live-vncdn.hocmai.vn/hocmai/test_manifest.m3u8?vhost=__defaultVhost__', '3600', 10, 3, 3, '2020-08-06 09:45:56', '2020-08-06 09:45:56'),
(9, 'https://live-vncdn.hocmai.vn/hocmai/test_demo_thi_tot_nghiep_thpt_2020_manifest.m3u8?vhost=__defaultVhost__', 'Live test thpt quốc gia', 'https://live-vncdn.hocmai.vn/hocmai/test_demo_thi_tot_nghiep_thpt_2020_manifest.m3u8?vhost=__defaultVhost__', '600', 1, 1, 1, '2020-08-08 08:58:27', '2020-08-08 08:58:27'),
(10, 'https://stream2.hocmai.vn/live/Truyen_thong_giai_de/Ky_thi_TNTHPT_2020/01.Ngu_van/01.Giai_de_thi_TNTHPT_2020_mon_Ngu_van_co_Tuyet.mp4/index.m3u8', 'Giải đề tốt nghiệp môn văn 2020', 'https://stream2.hocmai.vn/live/Truyen_thong_giai_de/Ky_thi_TNTHPT_2020/01.Ngu_van/01.Giai_de_thi_TNTHPT_2020_mon_Ngu_van_co_Tuyet.mp4/index.m3u8', '4981', 1, 1, 2, '2020-08-08 10:21:17', '2020-08-09 16:20:13'),
(11, 'https://stream2.hocmai.vn/live/Truyen_thong_giai_de/Ky_thi_TNTHPT_2020/02.Toan/01.Giai_de_thi_TNTHPT_2020_mon_Toan.mp4/index.m3u8', 'Giải đề tốt nghiệp môn Toán 2020', 'https://stream2.hocmai.vn/live/Truyen_thong_giai_de/Ky_thi_TNTHPT_2020/02.Toan/01.Giai_de_thi_TNTHPT_2020_mon_Toan.mp4/index.m3u8', '13413', 1, 1, 1, '2020-08-08 10:22:42', '2020-08-10 10:03:32'),
(12, 'https://live-vncdn.hocmai.vn/hocmai/de_thi_tot_nghiep_khtn_khxh_2020_manifest.m3u8?vhost=__defaultVhost__', 'Livestream nhận định tổ hợp môn KHTN và KHXH', 'https://live-vncdn.hocmai.vn/hocmai/de_thi_tot_nghiep_khtn_khxh_2020_manifest.m3u8?vhost=__defaultVhost__', '4800', 1, 1, 4, '2020-08-08 10:23:56', '2020-08-10 03:49:00'),
(13, 'https://stream2.hocmai.vn/live/Truyen_thong_giai_de/Ky_thi_TNTHPT_2020/03.Tieng_Anh/03.Giai_de_thi_TNTHPT_2020_mon_Tieng_Anh.mp4/index.m3u8', 'Giải đề tốt nghiệp Tiếng Anh', 'https://stream2.hocmai.vn/live/Truyen_thong_giai_de/Ky_thi_TNTHPT_2020/03.Tieng_Anh/03.Giai_de_thi_TNTHPT_2020_mon_Tieng_Anh.mp4/index.m3u8', '4659', 1, 1, 3, '2020-08-08 10:24:55', '2020-08-11 09:27:50'),
(14, 'https://stream2.hocmai.vn/live/Truyen_thong_giai_de/Ky_thi_TNTHPT_2020/01.Ngu_van/01.Giai_de_thi_TNTHPT_2020_mon_Ngu_van_co_Tuyet.mp4/index.m3u8', 'Giải đề tốt nghiệp môn văn - phát lại', 'https://stream2.hocmai.vn/live/Truyen_thong_giai_de/Ky_thi_TNTHPT_2020/01.Ngu_van/01.Giai_de_thi_TNTHPT_2020_mon_Ngu_van_co_Tuyet.mp4/index.m3u8', '4981', 1, 1, 2, '2020-08-09 15:22:50', '2020-08-09 15:22:50'),
(15, 'https://stream2.hocmai.vn/live/Truyen_thong_giai_de/Ky_thi_TNTHPT_2020/04.Vat_li/04.Giai_de_thi_TNTHPT_2020_mon_Vat_li.mp4/index.m3u8', 'Livestream nhận định tổ hợp môn Vật Lí', 'https://stream2.hocmai.vn/live/Truyen_thong_giai_de/Ky_thi_TNTHPT_2020/04.Vat_li/04.Giai_de_thi_TNTHPT_2020_mon_Vat_li.mp4/index.m3u8', '4030', 1, 1, 5, '2020-08-11 10:02:04', '2020-08-11 10:02:04'),
(16, 'https://live-vncdn.hocmai.vn/hocmai/doc_hieu_ky_thi_dh_bkhn_manifest.m3u8?vhost=__defaultVhost__', 'Livestream môn Đọc hiểu thầy Tiến', 'https://live-vncdn.hocmai.vn/hocmai/doc_hieu_ky_thi_dh_bkhn_manifest.m3u8?vhost=__defaultVhost__', '14400', 1, 1, 6, '2020-08-12 10:37:00', '2020-08-12 10:37:00'),
(17, 'https://live-vncdn.hocmai.vn/hocmai/toan_ky_thi_dh_bkhn_manifest.m3u8?vhost=__defaultVhost__', 'Toán - Kỳ thi ĐH Bách Khoa HN', 'https://live-vncdn.hocmai.vn/hocmai/toan_ky_thi_dh_bkhn_manifest.m3u8?vhost=__defaultVhost__', '10800', 1, 1, 1, '2020-08-13 11:39:56', '2020-08-13 11:39:56'),
(18, 'https://stream2.hocmai.vn/live/cung_con_chuan_bi_cho_nam_hoc_cuoi_cap.mp4/index.m3u8', 'Video Cùng con chuẩn bị cho năm học lớp 9', 'https://stream2.hocmai.vn/live/cung_con_chuan_bi_cho_nam_hoc_cuoi_cap.mp4/index.m3u8', '4688', 4, 2, 1, '2020-08-14 11:56:21', '2020-08-14 11:56:21'),
(19, 'https://live-vncdn.hocmai.vn/hocmai/thi_bach_khoa_ha_noi_2020_manifest.m3u8?vhost=__defaultVhost__', 'Livestream thi Bách khoa Hà Nội 15/08/2002', 'https://live-vncdn.hocmai.vn/hocmai/thi_bach_khoa_ha_noi_2020_manifest.m3u8?vhost=__defaultVhost__', '4200', 1, 1, 8, '2020-08-15 08:28:08', '2020-08-15 10:06:19'),
(20, 'https://live-vncdn.hocmai.vn/hocmai/cung_con_chuan_bi_lop_6_manifest.m3u8?vhost=__defaultVhost__', 'Cùng con chuẩn bị cho năm học lớp 6', 'https://live-vncdn.hocmai.vn/hocmai/cung_con_chuan_bi_lop_6_manifest.m3u8?vhost=__defaultVhost__', '1905', 7, 2, 7, '2020-08-15 10:26:49', '2020-08-15 10:26:49'),
(21, 'https://live-vncdn.hocmai.vn/hocmai/nhan_dinh_va_chua_doc_hieu_bk_2020_manifest.m3u8?vhost=__defaultVhost__', 'Nhận định và chữa chi tiết phần thi đọc hiểu trong bài kiểm tra tư duy ĐH Bách Khoa Hà Nội', 'https://live-vncdn.hocmai.vn/hocmai/nhan_dinh_va_chua_doc_hieu_bk_2020_manifest.m3u8?vhost=__defaultVhost__', '6600', 1, 1, 6, '2020-08-15 10:31:04', '2020-08-15 10:31:04'),
(22, 'https://live-vncdn.hocmai.vn/hocmai/tu_van_lo_trinh_va_khoa_hoc_vao_10_2020_manifest.m3u8?vhost=__defaultVhost__', 'Livestream tư vấn khối học và lộ trình chinh phục lớp 10 dành riêng cho 2K5', 'https://live-vncdn.hocmai.vn/hocmai/tu_van_lo_trinh_va_khoa_hoc_vao_10_2020_manifest.m3u8?vhost=__defaultVhost__', '5400', 3, 1, 7, '2020-08-17 12:20:39', '2020-08-17 12:20:39'),
(23, 'https://stream2.hocmai.vn/live/Tong_quan_kien_thuc_va_dinh_huong_phuong_phap_hoc_tot_mon_Tieng_Anh_lop_6.mp4/index.m3u8', 'Tổng quan kiến thức và định hướng phương pháp học tốt môn Tiếng Anh lớp 6', 'https://stream2.hocmai.vn/live/Tong_quan_kien_thuc_va_dinh_huong_phuong_phap_hoc_tot_mon_Tieng_Anh_lop_6.mp4/index.m3u8', '2865', 7, 2, 3, '2020-08-28 09:38:00', '2020-08-28 09:38:00'),
(24, 'https://stream2.hocmai.vn/live/video_L7.mp4/index.m3u8', 'Tổng quan kiến thức và định hướng phương pháp học tốt môn Tiếng Anh lớp 7', 'https://stream2.hocmai.vn/live/video_L7.mp4/index.m3u8', '2670', 6, 2, 3, '2020-08-29 04:42:10', '2020-08-29 04:42:10'),
(25, 'https://stream2.hocmai.vn/live/video_L8.mp4/index.m3u8', 'Định hướng phương pháp và kỹ năng giúp học sinh học tốt môn Hóa học lớp 8', 'https://stream2.hocmai.vn/live/video_L8.mp4/index.m3u8', '3124', 5, 2, 9, '2020-08-29 04:47:32', '2020-08-29 04:47:32'),
(26, 'https://stream2.hocmai.vn/live/Video_Lviestream_thay_Cuong.mp4/index.m3u8', 'Định hướng lộ trình tự học môn Toán 9 và chuẩn bị thi vào 10', 'https://stream2.hocmai.vn/live/Video_Lviestream_thay_Cuong.mp4/index.m3u8', '3234', 4, 2, 1, '2020-08-30 13:15:34', '2020-08-30 13:15:34'),
(27, 'https://stream2.hocmai.vn/live/Video_live_Van_6_1.mp4/index.m3u8', 'Tổng quan kiến thức và định hướng phương pháp học tốt Ngữ văn 6', 'https://stream2.hocmai.vn/live/Video_live_Van_6_1.mp4/index.m3u8', '3739', 7, 2, 2, '2020-08-30 13:21:54', '2020-08-30 13:21:54'),
(28, 'https://stream2.hocmai.vn/live/video_L8.mp4/index.m3u8', 'Tổng quan kiến thức và định hướng phương pháp học tốt môn Tiếng Anh lớp 8', 'https://stream2.hocmai.vn/live/video_L8.mp4/index.m3u8', '3124', 5, 2, 3, '2020-08-30 13:23:03', '2020-08-30 13:23:03'),
(29, 'https://stream2.hocmai.vn/live/Video_live_Van_9.mp4/index.m3u8', 'Lộ trình tự học môn Ngữ văn 9 và định hướng ôn thi vào 10', 'https://stream2.hocmai.vn/live/Video_live_Van_9.mp4/index.m3u8', '3320', 4, 2, 2, '2020-08-30 13:23:42', '2020-08-30 13:23:42'),
(30, 'https://stream2.hocmai.vn/live/dinh_huong_on_thi_vao_10.mp4/index.m3u8', 'Phân tích cấu trúc đề thi và định hướng phương pháp ôn thi Tiếng Anh vào 10 đạt hiệu quả', 'https://stream2.hocmai.vn/live/dinh_huong_on_thi_vao_10.mp4/index.m3u8', '2038', 4, 2, 3, '2020-08-30 13:25:43', '2020-08-30 13:25:43'),
(31, 'https://stream2.hocmai.vn/live/20200921/Live_Thanh_Lan_1.mp4/index.m3u8', 'Tư vấn lập kế hoạch học tập đầu năm môn Toán lớp 2', 'https://stream2.hocmai.vn/live/20200921/Live_Thanh_Lan_1.mp4/index.m3u8', '1562', 11, 3, 1, '2020-09-21 11:37:38', '2020-09-21 11:37:38'),
(32, 'https://stream2.hocmai.vn/live/20200921/Live_Huong_Omega_1_5.mp4/index.m3u8', 'Tư vấn lập kế hoạch học tập đầu năm môn Tiếng Anh lớp 5', 'https://stream2.hocmai.vn/live/20200921/Live_Huong_Omega_1_5.mp4/index.m3u8', '3148', 8, 3, 3, '2020-09-21 11:44:49', '2020-09-21 11:44:49'),
(33, 'https://stream2.hocmai.vn/live/20200921/Live_1.mp4/index.m3u8', 'Tư vấn lập kế hoạch học tập đầu năm môn Tiếng Anh cho học sinh lớp 6-9', 'https://stream2.hocmai.vn/live/20200921/Live_1.mp4/index.m3u8', '3639', 7, 2, 3, '2020-09-28 11:23:03', '2020-09-28 11:23:03'),
(34, 'https://stream2.hocmai.vn/live/20200921/done_1.mp4/index.m3u8', 'Tư vấn lập kế hoạch học tập đầu năm môn Toán cho học sinh lớp 6-9 theo chương trình tinh giản', 'https://stream2.hocmai.vn/live/20200921/done_1.mp4/index.m3u8', '3733', 4, 2, 1, '2020-10-06 09:19:43', '2020-10-06 09:19:43'),
(35, 'https://stream2.hocmai.vn/live/20200921/Live_Thuy_Ngoc_1.mp4/index.m3u8', 'Tư vấn lập kế hoạch học tập đầu năm môn Hóa học lớp 8-9 theo chương trình tinh giản', 'https://stream2.hocmai.vn/live/20200921/Live_Thuy_Ngoc_1.mp4/index.m3u8', '4694', 4, 2, 9, '2020-10-10 07:13:55', '2020-10-10 07:13:55'),
(36, 'https://stream2.hocmai.vn/live/20200921/co_trang_1.mp4/index.m3u8', 'Tư vấn lập kế hoạch học tập đầu năm môn Ngữ văn lớp 6-9 theo chương trình tinh giản', 'https://stream2.hocmai.vn/live/20200921/co_trang_1.mp4/index.m3u8', '2822', 4, 2, 2, '2020-10-10 07:56:22', '2020-10-10 07:56:22');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE IF NOT EXISTS `classes` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci,
  `schoolblock_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `name`, `desc`, `schoolblock_id`, `created_at`, `updated_at`) VALUES
(1, 'Lớp 12', '<p>lớp 12</p>', 1, '2020-04-09 20:30:31', '2020-04-16 09:51:58'),
(2, 'Lớp 11', 'Lớp 11', 1, '2020-04-09 20:47:15', '2020-04-09 20:47:15'),
(3, 'Lớp 10', 'Lớp 10', 1, '2020-04-09 20:47:26', '2020-04-09 20:47:26'),
(4, 'Lớp 9', 'Lớp 9', 2, '2020-04-09 20:47:36', '2020-04-09 20:47:36'),
(5, 'Lớp 8', 'Lớp 8', 2, '2020-04-09 20:47:47', '2020-04-09 20:47:47'),
(6, 'Lớp 7', 'Lớp 7', 2, '2020-04-09 20:47:58', '2020-04-09 20:47:58'),
(7, 'Lớp 6', 'Lớp 6', 2, '2020-04-09 20:48:08', '2020-04-09 20:48:08'),
(8, 'Lớp 5', 'Lớp 5', 3, '2020-04-09 20:48:17', '2020-04-09 20:48:17'),
(9, 'Lớp 4', 'Lớp 4', 3, '2020-04-09 20:48:25', '2020-04-09 20:48:25'),
(10, 'Lớp 3', 'Lớp 3', 3, '2020-04-09 20:48:33', '2020-04-09 20:48:33'),
(11, 'Lớp 2', 'Lớp 2', 3, '2020-04-09 20:48:40', '2020-04-09 20:48:40'),
(12, 'Lớp 1', 'Lớp 1', 3, '2020-04-09 20:48:48', '2020-04-09 20:48:48');

-- --------------------------------------------------------

--
-- Table structure for table `comment_fakes`
--

CREATE TABLE IF NOT EXISTS `comment_fakes` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment_fakes`
--

INSERT INTO `comment_fakes` (`id`, `name`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'LiveStream thật là tuyệt vời', 'LiveStream thật l&agrave; tuyệt vời', '2020-05-14 10:18:56', '2020-05-14 10:18:56');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(10) unsigned NOT NULL,
  `deep_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_adjust` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_time` datetime DEFAULT NULL,
  `start_time` datetime DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urlWebView` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullScreen` tinyint(1) NOT NULL,
  `login_require` tinyint(1) NOT NULL,
  `is_public` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `deep_link`, `event_adjust`, `end_time`, `start_time`, `name`, `banner`, `urlWebView`, `fullScreen`, `login_require`, `is_public`, `created_at`, `updated_at`) VALUES
(2, NULL, 'tb35dg', '2020-10-28 10:00:00', '2020-10-08 10:06:00', 'Game đấu trường lắc não 2020 ver 2', '/uploads/admin/event/2/banner/Banner-game.jpg', 'https://gameportal-dev.hocmai.vn/', 1, 1, 0, '2020-09-29 03:54:07', '2020-10-11 13:25:45');

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE IF NOT EXISTS `footers` (
  `id` int(10) unsigned NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '125',
  `status` int(11) DEFAULT NULL,
  `start_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `image`, `status`, `start_time`, `end_time`, `created_at`, `updated_at`) VALUES
(4, '/uploads/admin/footer/4/image/footer_app.jpg', 1, '00:00', '23:59', '2020-09-15 14:34:35', '2020-09-16 15:20:43');

-- --------------------------------------------------------

--
-- Table structure for table `headers`
--

CREATE TABLE IF NOT EXISTS `headers` (
  `id` int(10) unsigned NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '125',
  `start_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci COMMENT 'câu chào buổi sáng',
  `status` int(11) DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `headers`
--

INSERT INTO `headers` (`id`, `image`, `start_time`, `end_time`, `desc`, `status`, `color`, `created_at`, `updated_at`) VALUES
(1, '/uploads/admin/header/1/image/Chào buổi sáng.png', '05:00', '11:59', '<p>#Good Morning,</p>', 1, '#000000', '2020-04-21 15:11:48', '2020-09-16 15:23:26'),
(2, '/uploads/admin/header/2/image/Chào Buổi chiều.png', '12:00', '17:59', '<p>#Học&nbsp;ở nh&agrave; nh&eacute;,</p>', 1, '#000000', '2020-04-21 15:30:01', '2020-10-10 07:04:06'),
(4, '/uploads/admin/header/4/image/Chào buổi tối.png', '18:00', '23:59', '<p>#C&ugrave;ng học online,</p>', 1, '#FFFFFF', '2020-04-21 15:31:56', '2020-10-10 07:03:31'),
(5, '/uploads/admin/header/5/image/Chào cú đêm.png', '00:00', '04:59', '<p>C&uacute; đ&ecirc;m chăm học,</p>', 1, '#FFFFFF', '2020-04-21 15:32:52', '2020-08-05 04:01:31');

-- --------------------------------------------------------

--
-- Table structure for table `hocmai_videos`
--

CREATE TABLE IF NOT EXISTS `hocmai_videos` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scorm_id` int(11) NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_id` int(11) NOT NULL,
  `schoolblock_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `livestreams`
--

CREATE TABLE IF NOT EXISTS `livestreams` (
  `id` int(10) unsigned NOT NULL,
  `image_medium` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_livestreams` int(11) DEFAULT NULL,
  `start_comment` int(11) DEFAULT NULL,
  `per_comment` int(11) DEFAULT NULL,
  `is_comment` int(11) DEFAULT NULL,
  `status_time` int(11) DEFAULT NULL,
  `schoolblock_id` int(11) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `teacher_id` text COLLATE utf8mb4_unicode_ci,
  `repeat` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `require_login` int(11) DEFAULT NULL,
  `name` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_small` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_big` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `timer_clock` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=171 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `livestreams`
--

INSERT INTO `livestreams` (`id`, `image_medium`, `is_livestreams`, `start_comment`, `per_comment`, `is_comment`, `status_time`, `schoolblock_id`, `subject_id`, `class_id`, `teacher_id`, `repeat`, `description`, `require_login`, `name`, `image_small`, `image_big`, `created_at`, `updated_at`, `timer_clock`, `end_time`) VALUES
(106, NULL, 1, NULL, 1, 0, 0, 3, 3, 12, '7', 1, 'Hoạt h&igrave;nh về ch&uacute; thỏ vui nhộn', 1, 'Live Streaming Rabbit Funny', '/uploads/another_video/106/small/tho 1.jpg', '/uploads/another_video/106/big/Screen Shot 2020-08-05 at 4.02.17 PM.png', '2020-08-05 09:03:10', '2020-08-14 17:31:05', '2020-08-05 09:03:10', '2020-08-05 09:30:00'),
(107, NULL, 1, NULL, 1, 0, 0, 3, 3, 12, '6', 1, 'Test để hot fix', 1, 'Funny Rabbit LiveStream', '/uploads/another_video/107/small/tho 1.jpg', '/uploads/another_video/107/big/Screen Shot 2020-08-05 at 4.02.17 PM.png', '2020-08-05 10:01:19', '2020-08-14 17:31:05', '2020-08-05 10:01:19', '2020-08-05 11:00:00'),
(108, NULL, 1, NULL, 1, 0, 0, 3, 3, 11, '6', 1, 'Funny Rabbit Cartoon<br /><br />HOCMAI copyright', 1, 'Funny Rabbit Cartoon', '/uploads/another_video/108/small/coverr nho.JPG', '/uploads/another_video/108/big/cover to.JPG', '2020-08-05 13:54:04', '2020-08-14 17:31:05', '2020-08-05 13:54:04', '2020-08-05 15:00:00'),
(109, NULL, 1, NULL, 1, 0, 0, 3, 3, 12, '7', 1, 'Funny Rabbit Cartoon 2', 0, 'Funny Rabbit Cartoon 2', '/uploads/another_video/109/small/coverr nho.JPG', '/uploads/another_video/109/big/cover to.JPG', '2020-08-05 14:49:01', '2020-08-14 17:31:05', '2020-08-05 14:49:01', '2020-08-05 15:30:00'),
(110, NULL, 1, NULL, 1, 0, 0, 3, 3, 12, '7', 1, 'Funny Fat Rabbit&nbsp; - For Class 1', 1, 'Funny Fat Rabbit', '/uploads/another_video/110/small/tho 1.jpg', '/uploads/another_video/110/big/Screen Shot 2020-08-05 at 4.02.17 PM.png', '2020-08-06 07:45:54', '2020-08-14 17:31:05', '2020-08-06 07:45:54', '2020-08-06 08:30:00'),
(111, NULL, 1, NULL, 1, 0, 0, 3, 3, 12, '7', 1, 'Funny Rabbit Video 2020', 0, 'Funny Rabbit Video', '/uploads/another_video/111/small/tho 1.jpg', '/uploads/another_video/111/big/Screen Shot 2020-08-05 at 4.02.17 PM.png', '2020-08-06 09:11:23', '2020-08-14 17:31:05', '2020-08-06 09:11:23', '2020-08-06 09:50:00'),
(112, NULL, 1, NULL, 1, 0, 0, 3, 2, 11, '7', 1, 'Test cho đại ca Lanh', 0, 'Test Live của Mr LANH', '/uploads/another_video/112/small/tho 1.jpg', '/uploads/another_video/112/big/Screen Shot 2020-08-05 at 4.02.17 PM.png', '2020-08-06 10:09:24', '2020-08-14 17:31:05', '2020-08-06 10:09:24', '2020-08-06 10:40:00'),
(113, NULL, 1, NULL, 1, 0, 0, 3, 1, 12, '7', 1, 'test thử lỗi', 0, 'test thử lỗi', '/uploads/another_video/113/small/tho 1.jpg', '/uploads/another_video/113/big/Screen Shot 2020-08-05 at 4.02.17 PM.png', '2020-08-06 11:17:32', '2020-08-14 17:31:05', '2020-08-06 11:17:32', '2020-08-06 11:40:00'),
(114, NULL, 1, NULL, 1, 0, 0, 3, 3, 12, '7', 1, 'Funny Rabbit 2020<br />HOCMAI Copyright', 1, 'Funny Rabbit 2020', '/uploads/another_video/114/small/coverr nho.JPG', '/uploads/another_video/114/big/cover to.JPG', '2020-08-07 16:31:47', '2020-08-14 17:31:05', '2020-08-07 16:31:47', '2020-08-07 16:59:00'),
(115, NULL, 1, NULL, 1, 0, 0, 1, 1, 1, '4', 1, '<p><strong>HỆ THỐNG GI&Aacute;O DỤC TRỰC TUYẾN CỦA HỌC SINH VIỆT NAM</strong><br />Gần&nbsp;<strong>4 triệu th&agrave;nh vi&ecirc;n</strong>&nbsp;tham gia học tậpGần&nbsp;<strong>200</strong>&nbsp;th&agrave;y c&ocirc; gi&aacute;o giỏi, uy t&iacute;n tr&ecirc;n to&agrave;n quốc<br />H&agrave;ng năm c&oacute; h&agrave;ng trăm học sinh đạt từ 28 điểm trở l&ecirc;n l&agrave; th&agrave;nh vi&ecirc;n của&nbsp;<strong>HOCMAI</strong>&nbsp;đỗ v&agrave;o c&aacute;c trường đại học h&agrave;ng đầu<br />C&ugrave;ng h&agrave;ng trăm ngh&igrave;n học sinh tiến bộ vượt trội l&agrave; th&agrave;nh vi&ecirc;n của HOCMAI.</p>', 0, 'LiveStream Test Thi THPT 2020', '/uploads/another_video/115/small/400x400.png', '/uploads/another_video/115/big/hmlive.JPG', '2020-08-08 09:28:53', '2020-08-14 17:31:05', '2020-08-08 09:28:53', '2020-08-08 09:40:00'),
(116, NULL, 1, NULL, 1, 0, 1, 1, 2, 1, '6', 1, 'Hệ thống gi&aacute;o dục HOCMAI<br />Livestream nhận định v&agrave; chữa chi tiết đề thi m&ocirc;n Văn THPT 2020', 0, 'Livestream nhận định và chữa chi tiết đề thi môn Văn THPT 2020', '/uploads/another_video/116/small/324X284 Back chờ livestream môn Văn.png', '/uploads/another_video/116/big/670X308 Back chờ livestream môn Văn.png', '2020-08-08 14:23:13', '2020-08-14 17:31:05', '2020-08-09 03:00:00', '2020-08-09 05:20:00'),
(118, NULL, 1, NULL, 1, 0, 0, 1, 4, 1, '8', 1, 'Hệ thống gi&aacute;o dục HOCMAI<br />Livestream nhận định tổ hợp m&ocirc;n KHTN v&agrave; KHXH&nbsp;<br /><br /><br /><br /><br /><br /><br />&nbsp;', 0, 'Livestream nhận định tổ hợp môn KHTN và KHXH', '/uploads/another_video/118/small/324x384 Back chờ livestream Tổ hợp.png', '/uploads/another_video/118/big/670x308 Back chờ livestream Tổ hợp.png', '2020-08-08 14:29:01', '2020-08-14 17:31:05', '2020-08-09 05:10:00', '2020-08-09 07:00:00'),
(119, NULL, 1, NULL, 1, 0, 1, 1, 1, 1, '4', 1, 'Hệ thống gi&aacute;o dục HOCMAI<br /><br />Livestream nhận định v&agrave; chữa chi tiết đề thi m&ocirc;n Tiếng Anh THPT 2020', 0, 'Livestream nhận định và chữa chi tiết đề thi môn Tiếng Anh THPT 2020', '/uploads/another_video/119/small/324x284 Back chờ livestream môn Anh.png', '/uploads/another_video/119/big/670x308 Back chờ livestream môn Anh.png', '2020-08-08 14:30:15', '2020-08-14 17:31:05', '2020-08-10 09:10:00', '2020-08-10 11:20:00'),
(120, NULL, 1, NULL, 1, 0, 0, 2, 1, 4, '8', 1, 'Fat Funny Rabbit', 0, 'Fat Funny Rabbit', '/uploads/another_video/120/small/324x284 Back chờ livestream môn Anh.png', '/uploads/another_video/120/big/670x308 Back chờ livestream môn Anh.png', '2020-08-08 14:34:49', '2020-08-14 17:31:05', '2020-08-08 14:34:49', '2020-08-09 02:50:00'),
(121, NULL, 1, NULL, 1, 0, 0, 1, 1, 1, '8', 1, 'Hệ thống gi&aacute;o dục HOCMAI<br /><br />Livestream nhận định v&agrave; chữa chi tiết đề thi m&ocirc;n To&aacute;n THPT 2020<br /><br /><em>Ch&uacute; &yacute;: H&atilde;y cập nhật ứng dụng phi&ecirc;n bản mới nhất để xem livestream ổn định.</em>', 0, 'Livestream nhận định và chữa chi tiết đề thi môn Toán THPT 2020', '/uploads/another_video/121/small/324X284 Back chờ livestream môn Toán.png', '/uploads/another_video/121/big/670X308 Back chờ livestream môn Toán.png', '2020-08-09 09:20:35', '2020-08-14 17:31:05', '2020-08-09 09:20:35', '2020-08-09 13:00:00'),
(123, NULL, 1, NULL, 1, 0, 1, 3, 2, 9, '6', 1, 'Giải đề THPT quốc gia m&ocirc;n Văn 2020', 1, 'Test livestream môn văn', '/uploads/another_video/123/small/324X284 Back chờ livestream môn Văn.png', '/uploads/another_video/123/big/670X308 Back chờ livestream môn Văn.png', '2020-08-09 13:11:05', '2020-08-14 17:31:05', '2020-08-09 09:00:00', '2020-08-09 14:00:00'),
(124, NULL, 1, NULL, 1, 0, 1, 3, 3, 11, '5', 1, 'H&atilde;y học chăm chỉ nh&eacute; c&aacute;c bạn', 1, 'Test Live', '/uploads/another_video/124/small/400x400.png', '/uploads/another_video/124/big/cover to.JPG', '2020-08-09 13:52:26', '2020-08-14 17:31:05', '2020-08-09 10:00:00', '2020-08-09 14:30:00'),
(127, NULL, 1, NULL, 1, 0, 1, 1, 2, 1, '6', 1, 'Livestream Nhận định v&agrave; chữa đề thi m&ocirc;n Ngữ Văn THPT 2020<br /><br /><em>Ch&uacute; &yacute;: C&aacute;c bạn cập nhật ứng dụng bản mới nhất để xem livestream được ổn định</em>', 0, 'Livestream Nhận định và chữa đề thi môn Ngữ Văn THPT 2020', '/uploads/another_video/127/small/324X284 Back chờ livestream môn Văn.png', '/uploads/another_video/127/big/670X308 Back chờ livestream môn Văn.png', '2020-08-09 15:25:33', '2020-08-14 17:31:05', '2020-08-09 09:00:00', '2020-08-25 16:00:00'),
(128, NULL, 1, NULL, 1, 0, 0, 1, 3, 1, '7', 1, 'test ipad', 0, 'test ipad', '/uploads/another_video/128/small/400x400.png', '/uploads/another_video/128/big/cover to.JPG', '2020-08-09 15:39:14', '2020-08-14 17:31:05', '2020-08-09 15:39:14', '2020-08-09 16:30:00'),
(129, NULL, 1, NULL, 1, 0, 0, 3, 3, 10, '5', 1, 'test ipad', 0, 'test ipad', '/uploads/another_video/129/small/400x400.png', '/uploads/another_video/129/big/cover to.JPG', '2020-08-09 15:59:39', '2020-08-14 17:31:05', '2020-08-09 15:59:39', '2020-08-08 19:00:00'),
(130, NULL, 1, NULL, 1, 0, 0, 3, 2, 12, '6', 1, 'test live văn', 0, 'test live văn', '/uploads/another_video/130/small/324X284 Back chờ livestream môn Văn.png', '/uploads/another_video/130/big/670X308 Back chờ livestream môn Văn.png', '2020-08-09 16:18:38', '2020-08-14 17:31:05', '2020-08-09 16:18:38', '2020-08-09 17:45:00'),
(131, NULL, 1, NULL, 1, 0, 0, 3, 3, 12, '8', 1, 'Livestream Tiếng Anh', 0, 'Livestream Tiếng Anh', '/uploads/another_video/131/small/tho 1.jpg', '/uploads/another_video/131/big/Screen Shot 2020-08-05 at 4.02.17 PM.png', '2020-08-10 03:09:53', '2020-08-14 17:31:05', '2020-08-10 03:09:53', '2020-08-10 03:30:00'),
(132, NULL, 1, NULL, 1, 0, 0, 1, 4, 1, '8', 1, 'Livestream nhận định tổ hợp m&ocirc;n KHTN v&agrave; KHXH<br /><br /><em>Ch&uacute; &yacute;: H&atilde;y cập nhật ứng dụng phi&ecirc;n bản mới nhất để xem livestream được ổn định</em>', 0, 'Livestream nhận định tổ hợp môn KHTN và KHXH', '/uploads/another_video/132/small/324x384 Back chờ livestream Tổ hợp.png', '/uploads/another_video/132/big/670x308 Back chờ livestream Tổ hợp.png', '2020-08-09 05:10:44', '2020-08-14 17:31:05', '2020-08-09 05:10:44', '2020-08-09 07:00:00'),
(133, NULL, 1, NULL, 1, 0, 0, 3, 3, 9, '5', 1, 'Livestream b&agrave;i giảng tiếng Anh', 1, 'Livestream bài giảng tiếng Anh', '/uploads/another_video/133/small/Screen Shot 2020-08-10 at 1.43.29 PM.png', '/uploads/another_video/133/big/english-for-kids-2.jpg', '2020-08-10 06:44:41', '2020-08-14 17:31:05', '2020-08-10 06:44:41', '2020-08-10 07:05:00'),
(134, NULL, 1, NULL, 1, 0, 1, 1, 1, 1, '8', 1, 'Livestream nhận định v&agrave; chữa chi tiết đề thi m&ocirc;n To&aacute;n THPT 2020<br /><br /><em>Ch&uacute; &yacute;: H&atilde;y cập nhật ứng dụng phi&ecirc;n bản mới nhất để xem livestream ổn định</em>', 0, 'Livestream nhận định và chữa chi tiết đề thi môn Toán THPT 2020', '/uploads/another_video/134/small/324X284 Back chờ livestream môn Toán.png', '/uploads/another_video/134/big/670X308 Back chờ livestream môn Toán.png', '2020-08-10 10:07:03', '2020-08-14 17:31:05', '2020-08-10 12:00:00', '2020-08-25 16:00:00'),
(135, NULL, 1, NULL, 1, 0, 1, 1, 3, 1, '7', 1, 'Livestream nhận định v&agrave; chữa chi tiết đề thi m&ocirc;n Tiếng Anh THPT 2020<br /><br /><em>Ch&uacute; &yacute;: H&atilde;y cập nhật ứng dụng phi&ecirc;n bản mới nhất để xem livestream được ổn định</em>', 0, 'Livestream nhận định và chữa chi tiết đề thi môn Tiếng Anh THPT 2020', '/uploads/another_video/135/small/324x284 Back chờ livestream môn Anh.png', '/uploads/another_video/135/big/670x308 Back chờ livestream môn Anh.png', '2020-08-11 09:29:59', '2020-08-14 17:31:05', '2020-08-11 03:00:00', '2020-08-25 16:00:00'),
(136, NULL, 1, NULL, 1, 0, 1, 1, 5, 1, '9', 1, 'Livestream nhận định tổ hợp m&ocirc;n Vật L&iacute;<br /><br /><em>Ch&uacute; &yacute;: H&atilde;y cập nhật ứng dụng HOCMAI phi&ecirc;n bản mới nhất để xem livestream ổn định</em>', 0, 'Livestream nhận định tổ hợp môn Vật Lí', '/uploads/another_video/136/small/Back chờ livestream môn Lí copy.png', '/uploads/another_video/136/big/Back chờ livestream môn Lí.png', '2020-08-11 10:03:58', '2020-08-14 17:31:05', '2020-08-11 03:00:00', '2020-08-25 16:00:00'),
(137, NULL, 1, NULL, 1, 0, 1, 1, 1, 1, '4', 1, '- Giải th&iacute;ch cấu tr&uacute;c đề thi<br />- Hướng dẫn những mẹo l&agrave;m b&agrave;i quan trọng nhất<br />- Chữa một số b&agrave;i tập điển h&igrave;nh<br /><br /><em>Ch&uacute; &yacute;: C&aacute;c bạn h&atilde;y cập nhật ứng dụng phi&ecirc;n bản mới nhất để xem livestream ổn định</em>', 0, 'Tư vấn chiến thuật làm bài ĐỌC HIỂU, bài Kiểm tra tư duy - ĐHBK HN', '/uploads/another_video/137/small/1597229242324x284 .png', '/uploads/another_video/137/big/1597229242670x308 .png', '2020-08-12 10:47:22', '2020-08-14 17:31:05', '2020-08-12 13:20:00', '2020-08-12 15:00:00'),
(139, NULL, 1, NULL, 1, 0, 0, 1, 1, 1, '10', 1, '- Giải th&iacute;ch cấu tr&uacute;c đề thi To&aacute;n - tự luận<br />- Hướng dẫn c&aacute;ch l&agrave;m b&agrave;i v&agrave; một số mẹo l&agrave;m b&agrave;i quan trọng<br />- Chữa một số dạng b&agrave;i điển h&igrave;nh (mục n&agrave;y thầy c&oacute; thể c&acirc;n nhắc.)<br /><br /><em>Ch&uacute; &yacute;: H&atilde;y cập nhật ứng dụng phi&ecirc;n bản mới nhất để xem livestream ổn định</em>', 0, 'Livestream Toán - Kỳ thi ĐH Bách Khoa HN', '/uploads/another_video/139/small/1597331195324x284 Back chờ Live (thầy Tùng).png', '/uploads/another_video/139/big/1597331195670x308 Back chờ Live (thầy Tùng).png', '2020-08-13 15:06:35', '2020-08-14 17:31:05', '2020-08-13 15:06:35', '2020-08-13 16:50:00'),
(140, NULL, 1, NULL, 1, 0, 1, 2, 7, 4, '8', 1, '<strong>1. Gi&aacute;o vi&ecirc;n livestream:</strong><br />- Thầy Nguyễn Mạnh Cường - Gi&aacute;o vi&ecirc;n m&ocirc;n To&aacute;n tại HOCMAI<br />- C&ocirc; Đỗ Kh&aacute;nh Phượng - Gi&aacute;o vi&ecirc;n m&ocirc;n Ngữ văn tại HOCMAI<br /><br /><strong>2. Nội dung livestream</strong><br />- Tư vấn cho phụ huynh, học sinh sắp l&ecirc;n lớp 9 về phương ph&aacute;p học hiệu quả<br />- Lộ tr&igrave;nh &ocirc;n thi v&agrave;o 10 năm 2021', 0, 'Cùng con chuẩn bị cho năm học lớp 9 và những điều phụ huynh, học sinh cần lưu ý', '/uploads/another_video/140/small/1597406516324x284-(-lớp-9).png', '/uploads/another_video/140/big/1597406516670x308-(lớp-9).png', '2020-08-14 12:01:56', '2020-08-14 17:31:05', '2020-08-14 13:00:00', '2020-08-30 16:00:00'),
(141, NULL, 1, NULL, 1, 0, 0, 3, 3, 11, '5', 1, 'Test Livestream', 0, 'Test Livestream', '/uploads/another_video/141/small/1597424760400x400.png', '/uploads/another_video/141/big/1597424760cover to.JPG', '2020-08-14 17:06:00', '2020-08-14 17:06:00', '2020-08-14 17:06:00', '2020-08-14 17:30:00'),
(142, NULL, 0, NULL, 1, 0, 1, 1, 8, 1, '11', 1, 'Livestream phỏng vấn th&iacute; sinh thi B&aacute;ch khoa H&agrave; Nội 15/08/2020', 0, 'Livestream thi Bách khoa Hà Nội 15/08/2020', '/uploads/another_video/142/small/1597480377324x284 Banner phỏng vấn.png', '/uploads/another_video/142/big/1597480377670x308 Banner phỏng vấn.png', '2020-08-15 08:32:57', '2020-08-15 10:05:57', '2020-08-15 09:00:00', '2020-08-15 10:00:00'),
(143, NULL, 0, NULL, 1, 0, 0, 3, 8, 11, '11', 1, 'Test Live phỏng vấn', 0, 'Test Live phỏng vấn', '/uploads/another_video/143/small/1597480461324x284 Banner phỏng vấn.png', '/uploads/another_video/143/big/1597480461670x308 Banner phỏng vấn.png', '2020-08-15 08:34:21', '2020-08-15 08:34:21', '2020-08-15 08:34:21', '2020-08-15 08:40:00'),
(145, NULL, 1, NULL, 1, 0, 1, 2, 7, 1, '12', 1, '- Tư vấn cho phụ huynh chuẩn bị sớm cho con trong năm học đầu cấp lớp 6.<br />- Lập kế hoạch v&agrave; thay đổi phương ph&aacute;p học ph&ugrave; hợp với cấp THCS.<br />- Những thay đổi về t&acirc;m sinh l&iacute; cha mẹ cần biết để hiểu con hơn.', 0, 'Cùng con chuẩn bị cho năm học lớp 6 - Những điều phụ huynh, học sinh cần lưu ý', '/uploads/another_video/145/small/1597488406324x284-(lớp-6).png', '/uploads/another_video/145/big/1597488406670x308-(-lớp-6-).png', '2020-08-15 10:46:46', '2020-08-15 11:57:15', '2020-08-15 12:00:00', '2020-08-30 16:00:00'),
(146, NULL, 1, NULL, 1, 0, 0, 3, 3, 12, '11', 1, 'Test Live Tiếng Anh', 0, 'Test Live Tiếng Anh', '/uploads/another_video/146/small/1597594895400x400.png', '/uploads/another_video/146/big/1597594895cover to.JPG', '2020-08-16 16:21:35', '2020-08-16 16:21:35', '2020-08-16 16:21:35', '2020-08-16 16:40:00'),
(147, NULL, 1, NULL, 1, 0, 0, 3, 2, 8, '6', 1, 'Test Live', 0, 'Test Live', '/uploads/another_video/147/small/1597595938400x400.png', '/uploads/another_video/147/big/1597595938Trivia-360-screenshot-2019-1200x675.jpg', '2020-08-16 16:38:58', '2020-08-16 16:38:58', '2020-08-16 16:38:58', '2020-08-16 18:00:00'),
(148, NULL, 1, NULL, 1, 0, 0, 3, 3, 11, '11', 1, 'livestream thật', 0, 'livestream thật', '/uploads/another_video/148/small/1597596613400x400.png', '/uploads/another_video/148/big/1597596613cover to.JPG', '2020-08-16 16:50:10', '2020-08-16 16:50:13', '2020-08-16 16:50:10', '2020-08-15 18:40:00'),
(149, NULL, 0, NULL, 1, 0, 0, 3, 3, 11, '11', 1, 'Live thật 2', 0, 'Live thật 2', '/uploads/another_video/149/small/1597596843400x400.png', '/uploads/another_video/149/big/1597596843cover to.JPG', '2020-08-16 16:54:03', '2020-08-16 16:54:03', '2020-08-16 16:54:03', '2020-08-16 18:50:00'),
(150, NULL, 1, NULL, 1, 0, 0, 1, 7, 2, '11', 1, '🔥🔥 [CỰC HOT] - Livestream tư vấn khối học v&agrave; lộ tr&igrave;nh chinh phục lớp 10 d&agrave;nh ri&ecirc;ng cho 2K5<br />&nbsp;', 0, '[CỰC HOT] - Livestream tư vấn khối học và lộ trình chinh phục lớp 10 dành riêng cho 2K5', '/uploads/another_video/150/small/15976671397-04.png', '/uploads/another_video/150/big/15976671397-03.png', '2020-08-17 12:25:39', '2020-08-17 12:25:39', '2020-08-17 12:25:39', '2020-08-17 13:40:00'),
(151, NULL, 1, NULL, 1, 0, 0, 3, 3, 10, '5', 1, 'Test Live Tiếng Anh', 0, 'Test Live Tiếng Anh', '/uploads/another_video/151/small/1597674684400x400.png', '/uploads/another_video/151/big/1597674684cover to.JPG', '2020-08-17 14:31:24', '2020-08-17 14:31:24', '2020-08-17 14:31:24', '2020-08-17 14:45:00'),
(152, NULL, 1, NULL, 1, 0, 0, 3, 3, 8, '5', 1, 'test live video', 0, 'test live video', '/uploads/another_video/152/small/1597681278400x400.png', '/uploads/another_video/152/big/1597681278cover to.JPG', '2020-08-17 16:21:18', '2020-08-17 16:21:18', '2020-08-17 16:21:18', '2020-08-17 16:40:00'),
(153, NULL, 0, NULL, 1, 0, 0, 3, 3, 11, '4', 1, 'Live hoạt h&igrave;nh', 0, 'Live hoạt hình', '/uploads/another_video/153/small/1597681319coverr nho.JPG', '/uploads/another_video/153/big/1597681319cover to.JPG', '2020-08-17 16:21:56', '2020-08-17 16:21:59', '2020-08-17 16:21:56', '2020-08-17 16:40:00'),
(154, '/uploads/another_video/154/big/1598635089670x308.png', 1, NULL, 1, 0, 1, 2, 3, 7, '13', 1, '- Tổng quan kiến thức trọng t&acirc;m m&ocirc;n Tiếng Anh 6<br />- Sự kh&aacute;c biệt giữa Tiếng Anh lớp 6 so với Tiểu học<br />- Định hướng phương ph&aacute;p v&agrave; kỹ năng gi&uacute;p học sinh học tốt m&ocirc;n Tiếng Anh 6<br /><br /><em>Ch&uacute; &yacute;: C&aacute;c bạn update l&ecirc;n ứng dụng phi&ecirc;n bản mới nhất để xem livestream</em>', 0, 'Tổng quan kiến thức và định hướng phương pháp học tốt môn Tiếng Anh lớp 6', '/uploads/another_video/154/small/1598635089324x284.png', '/uploads/another_video/154/big/1598635089670x308.png', '2020-08-28 17:18:08', '2020-08-28 17:18:09', '2020-08-29 13:00:00', '2020-09-10 16:00:00'),
(155, '/uploads/another_video/155/big/1598635400670x308.png', 1, NULL, 1, 0, 0, 3, 3, 8, '5', 1, 'test thử', 0, 'test live', '/uploads/another_video/155/small/1598635400324x284.png', '/uploads/another_video/155/big/1598635400670x308.png', '2020-08-28 17:23:19', '2020-08-28 17:23:20', '2020-08-28 17:23:19', '2020-08-28 17:40:00'),
(156, '/uploads/another_video/156/big/1598676248670x308.png', 1, NULL, 1, 0, 1, 2, 3, 6, '14', 1, '- Tổng quan kiến thức trọng t&acirc;m m&ocirc;n Tiếng Anh 7<br />- Phương ph&aacute;p gi&uacute;p học sinh học tốt m&ocirc;n Tiếng Anh 7', 0, 'Tổng quan kiến thức và định hướng phương pháp học tốt môn Tiếng Anh lớp 7', '/uploads/another_video/156/small/1598676248324x284.png', '/uploads/another_video/156/big/1598676248670x308.png', '2020-08-29 04:44:08', '2020-08-29 04:44:08', '2020-08-30 13:00:00', '2020-09-11 16:59:00'),
(158, '/uploads/another_video/158/big/1598794099670x308.png', 1, NULL, 1, 0, 1, 2, 1, 4, '16', 1, '- Kiến thức trọng t&acirc;m m&ocirc;n To&aacute;n lớp 9<br />- Lộ tr&igrave;nh tự học m&ocirc;n To&aacute;n v&agrave; định hướng &ocirc;n thi v&agrave;o 10', 0, 'Định hướng lộ trình tự học môn Toán 9 và chuẩn bị thi vào 10', '/uploads/another_video/158/small/1598794099324x284.png', '/uploads/another_video/158/big/1598794099670x308.png', '2020-08-30 13:28:19', '2020-08-30 13:28:19', '2020-09-01 13:00:00', '2020-09-12 16:59:00'),
(159, '/uploads/another_video/159/big/1598794191670x308 (1).png', 1, NULL, 1, 0, 1, 2, 2, 7, '17', 1, '- Sự kh&aacute;c biệt giữa Ngữ văn 6 so với Tiếng Việt lớp 5<br />- Hệ thống kiến thức trọng t&acirc;m Ngữ văn 6<br />- Phương ph&aacute;p học Ngữ văn 6 đạt hiệu quả', 0, 'Tổng quan kiến thức và định hướng phương pháp học tốt Ngữ văn 6', '/uploads/another_video/159/small/1598794191324x284 (1).png', '/uploads/another_video/159/big/1598794191670x308 (1).png', '2020-08-30 13:29:51', '2020-08-30 13:29:51', '2020-09-02 13:00:00', '2020-09-13 16:59:00'),
(160, '/uploads/another_video/160/big/1598794293670x308 (2).png', 1, NULL, 1, 0, 1, 2, 3, 5, '14', 1, '- Trọng t&acirc;m kiến thức Tiếng Anh 8.<br />- Phương ph&aacute;p học Tiếng Anh 8 hiệu quả.<br />- Điểm mới của Tiếng Anh 8 so với lớp 6 v&agrave; lớp 7.<br />- Một số dạng b&agrave;i tập cơ bản trong Tiếng Anh 8.<br />- Những lỗi sai thường gặp v&agrave; c&aacute;ch xử l&yacute; khi học Tiếng Anh 8.', 0, 'Tổng quan kiến thức và định hướng phương pháp học tốt môn Tiếng Anh lớp 8', '/uploads/another_video/160/small/1598794293324x284 (2).png', '/uploads/another_video/160/big/1598794293670x308 (2).png', '2020-08-30 13:31:33', '2020-08-30 13:31:33', '2020-09-03 13:00:00', '2020-09-14 16:59:00'),
(161, '/uploads/another_video/161/big/1598794362670x308 (3).png', 1, NULL, 1, 0, 1, 2, 2, 4, '17', 1, '- Tổng quan kiến thức m&ocirc;n Ngữ văn lớp 9.<br />- Lộ tr&igrave;nh tự học m&ocirc;n Ngữ văn lớp 9 v&agrave; thi v&agrave;o 10 đạt kết quả cao.<br />- Những lưu &yacute; để học tốt m&ocirc;n Ngữ văn lớp 9 v&agrave; &ocirc;n thi v&agrave;o 10 hiệu quả.', 0, 'Lộ trình tự học môn Ngữ văn 9 và định hướng ôn thi vào 10', '/uploads/another_video/161/small/1598794362324x284 (3).png', '/uploads/another_video/161/big/1598794362670x308 (3).png', '2020-08-30 13:32:42', '2020-08-30 13:32:42', '2020-09-04 13:00:00', '2020-09-14 16:59:00'),
(162, '/uploads/another_video/162/big/1598794491670X308 (4).png', 1, NULL, 1, 0, 1, 2, 3, 1, '18', 1, '- Ph&acirc;n t&iacute;ch cấu tr&uacute;c v&agrave; dạng b&agrave;i trong đề thi Tiếng Anh v&agrave;o 10.<br />- Định hướng c&aacute;c bước học Tiếng Anh 9 v&agrave; &ocirc;n thi v&agrave;o 10 đạt hiệu quả.<br />- Lời khuy&ecirc;n d&agrave;nh cho học sinh lớp 9.', 0, 'Phân tích cấu trúc đề thi và định hướng phương pháp ôn thi Tiếng Anh vào 10 đạt hiệu quả', '/uploads/another_video/162/small/1598794491324x284 (4).png', '/uploads/another_video/162/big/1598794491670X308 (4).png', '2020-08-30 13:34:51', '2020-08-30 13:34:51', '2020-09-05 13:00:00', '2020-09-15 16:59:00'),
(163, '/uploads/another_video/163/big/159888235476394959-design-concept-of-word-english-website-banner-.jpg', 1, NULL, 1, 0, 0, 3, 3, 8, '5', 1, 'Học Tiếng Anh&nbsp;', 0, 'Học Tiếng Anh', '/uploads/another_video/163/small/1598882354400x400.png', '/uploads/another_video/163/big/1598882354banner-main-page-07-modif.jpg', '2020-08-31 13:59:14', '2020-08-31 13:59:14', '2020-08-31 13:59:14', '2020-08-31 14:15:00'),
(164, '/uploads/another_video/164/big/1600688550670x308.png', 1, NULL, 1, 0, 1, 3, 1, 11, '19', 1, '<br />- Lập kế hoạch học tập chương tr&igrave;nh To&aacute;n lớp 2 hiệu quả năm học 2020 - 2021.<br />-Trọng t&acirc;m kiến thức chương tr&igrave;nh To&aacute;n lớp 2 Học k&igrave; I.<br />- Phương ph&aacute;p, b&iacute; k&iacute;p gi&uacute;p con học tốt chương tr&igrave;nh To&aacute;n lớp 2.<br />- Nội dung cần phải lưu &yacute; v&agrave; thường gặp trong c&aacute;c b&agrave;i kiểm tra m&ocirc;n To&aacute;n lớp 2.', 0, 'Livestream tư vấn phụ huynh - học sinh lập kế hoạch học tập đầu năm môn Toán lớp 2', '/uploads/another_video/164/small/1600688550324x284.png', '/uploads/another_video/164/big/1600688550670x308.png', '2020-09-21 11:42:30', '2020-09-21 11:42:30', '2020-09-21 13:00:00', '2020-10-10 16:00:00'),
(165, '/uploads/another_video/165/big/1600688871670x308 (1).png', 1, NULL, 1, 0, 1, 3, 3, 8, '20', 1, '<br />- Lập kế hoạch học tập chương tr&igrave;nh Tiếng Anh lớp 5 - HK1.<br />- Những kiến thức trọng t&acirc;m trong chương tr&igrave;nh Tiếng Anh lớp 5 HK1.<br />- Những phần kiến thức kh&oacute;, học sinh dễ nhầm lẫn.<br />- Giải đ&aacute;p thắc mắc của phụ huynh, học sinh về phương ph&aacute;p học Tiếng Anh hiệu quả với học sinh tiểu học, &ocirc;n thi v&agrave;o lớp 6.', 0, 'Livestream tư vấn phụ huynh - học sinh lập kế hoạch học tập đầu năm môn Tiếng Anh lớp 5', '/uploads/another_video/165/small/1600688871324x284 (1).png', '/uploads/another_video/165/big/1600688871670x308 (1).png', '2020-09-21 11:47:51', '2020-09-21 11:47:51', '2020-09-22 13:00:00', '2020-10-10 16:00:00'),
(166, '/uploads/another_video/166/big/1601292388670x308.png', 1, NULL, 1, 0, 1, 2, 3, 7, '8', 1, '- X&acirc;y dựng kế hoạch học tập m&ocirc;n Tiếng Anh lớp 6-9 hiệu quả ngay từ đầu năm học.<br />- Hệ thống kiến thức trọng t&acirc;m chương tr&igrave;nh Tiếng Anh lớp 6-9.<br />- Phương ph&aacute;p học tốt c&aacute;c kỹ năng trong m&ocirc;n Tiếng Anh lớp 6-9.', 0, 'Tư vấn lập kế hoạch học tập đầu năm môn Tiếng Anh cho học sinh lớp 6-9', '/uploads/another_video/166/small/1601292388324x284.png', '/uploads/another_video/166/big/1601292388670x308.png', '2020-09-28 11:26:28', '2020-09-28 11:26:28', '2020-09-28 13:00:00', '2020-11-20 13:00:00'),
(168, '/uploads/another_video/168/big/1601976411324x284 (1).png', 1, NULL, 1, 0, 1, 2, 1, 4, '8', 1, '- Đ&aacute;nh gi&aacute; về nội dung chương tr&igrave;nh tinh giản m&ocirc;n To&aacute;n lớp 6-9.<br />- X&acirc;y dựng kế hoạch học tập m&ocirc;n To&aacute;n hiệu quả theo chương tr&igrave;nh tinh giản.<br />- Tư vấn phương ph&aacute;p học tốt m&ocirc;n To&aacute;n trong năm học mới.', 1, 'Tư vấn lập kế hoạch học tập đầu năm môn Toán cho học sinh lớp 6-9 theo chương trình tinh giản', '/uploads/another_video/168/small/1601976411324x284 (1).png', '/uploads/another_video/168/big/1601976411670x308 (1).png', '2020-10-06 09:26:51', '2020-10-06 09:26:51', '2020-10-06 13:00:00', '2020-11-20 13:00:00'),
(169, '/uploads/another_video/169/big/1602314664324x284.png', 1, NULL, 1, 0, 1, 2, 9, 4, '12', 1, 'Tư vấn lập kế hoạch học tập đầu năm m&ocirc;n H&oacute;a học lớp 8-9 theo chương tr&igrave;nh tinh giản<br />- Những lưu &yacute; chung về nội dung chương tr&igrave;nh tinh giản m&ocirc;n H&oacute;a học lớp 8-9<br />- X&acirc;y dựng kế hoạch học tập m&ocirc;n H&oacute;a học hiệu quả theo chương tr&igrave;nh tinh giản<br />- Định hướng phương ph&aacute;p học tốt m&ocirc;n H&oacute;a học trong năm học mới', 1, 'Tư vấn lập kế hoạch học tập đầu năm môn Hóa học lớp 8-9 theo chương trình tinh giản', '/uploads/another_video/169/small/1602314664300x300.png', '/uploads/another_video/169/big/1602314664670x308.png', '2020-10-10 07:24:24', '2020-10-10 07:24:24', '2020-10-10 13:00:00', '2021-01-10 13:00:00'),
(170, '/uploads/another_video/170/big/1602316821324x284 (1).png', 1, NULL, 1, 0, 1, 2, 2, 4, '8', 1, 'Tư vấn lập kế hoạch học tập đầu năm m&ocirc;n Ngữ văn lớp 6-9 theo chương tr&igrave;nh tinh giản<br />- Đ&aacute;nh gi&aacute; về nội dung chương tr&igrave;nh tinh giản m&ocirc;n Ngữ văn lớp 6-9.<br />- X&acirc;y dựng kế hoạch học tập m&ocirc;n Ngữ văn hiệu quả theo chương tr&igrave;nh tinh giản.<br />- Tư vấn phương ph&aacute;p học tốt m&ocirc;n Ngữ văn trong năm học mới.', 1, 'Tư vấn lập kế hoạch học tập đầu năm môn Ngữ văn lớp 6-9 theo chương trình tinh giản', '/uploads/another_video/170/small/1602316821300x300 (1).png', '/uploads/another_video/170/big/1602316821670x308 (1).png', '2020-10-10 08:00:21', '2020-10-10 08:00:21', '2020-10-11 13:00:00', '2021-01-11 13:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `livestream_another_videos`
--

CREATE TABLE IF NOT EXISTS `livestream_another_videos` (
  `id` int(10) unsigned NOT NULL,
  `livestream_id` int(11) NOT NULL,
  `another_video_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=156 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `livestream_another_videos`
--

INSERT INTO `livestream_another_videos` (`id`, `livestream_id`, `another_video_id`, `created_at`, `updated_at`) VALUES
(1, 14, 2, '2020-04-12 13:59:11', '2020-04-12 13:59:11'),
(2, 14, 2, '2020-04-12 13:59:11', '2020-04-12 13:59:11'),
(3, 15, 2, '2020-04-19 23:17:47', '2020-04-19 23:17:47'),
(4, 18, 2, '2020-04-21 16:29:46', '2020-04-21 16:29:46'),
(5, 19, 2, '2020-04-21 16:30:21', '2020-04-21 16:30:21'),
(6, 20, 2, '2020-04-21 20:35:37', '2020-04-21 20:35:37'),
(7, 21, 5, '2020-04-22 10:00:56', '2020-04-22 10:00:56'),
(8, 22, 5, '2020-04-22 10:53:29', '2020-04-22 10:53:29'),
(9, 23, 5, '2020-04-22 10:56:37', '2020-04-22 10:56:37'),
(10, 24, 5, '2020-04-22 10:58:13', '2020-04-22 10:58:13'),
(11, 25, 3, '2020-04-22 10:59:59', '2020-04-22 10:59:59'),
(12, 26, 3, '2020-04-22 11:01:53', '2020-04-22 11:01:53'),
(13, 27, 3, '2020-04-22 11:05:12', '2020-04-22 11:05:12'),
(14, 28, 6, '2020-04-23 21:03:30', '2020-04-23 21:03:30'),
(15, 29, 6, '2020-04-23 21:06:52', '2020-04-23 21:06:52'),
(16, 30, 6, '2020-04-23 21:22:18', '2020-04-23 21:22:18'),
(17, 31, 6, '2020-04-23 21:24:17', '2020-04-23 21:24:17'),
(18, 33, 2, '2020-04-23 23:42:51', '2020-04-23 23:42:51'),
(19, 34, 2, '2020-04-23 23:44:12', '2020-04-23 23:44:12'),
(20, 35, 2, '2020-04-23 23:46:15', '2020-04-23 23:46:15'),
(21, 36, 2, '2020-04-24 09:15:25', '2020-04-24 09:15:25'),
(22, 37, 6, '2020-04-24 09:21:20', '2020-04-24 09:21:20'),
(23, 38, 2, '2020-04-24 09:43:31', '2020-04-24 09:43:31'),
(24, 39, 6, '2020-04-24 09:46:01', '2020-04-24 09:46:01'),
(25, 40, 6, '2020-04-24 10:11:11', '2020-04-24 10:11:11'),
(26, 41, 6, '2020-04-24 10:47:37', '2020-04-24 10:47:37'),
(27, 42, 6, '2020-04-24 11:10:38', '2020-04-24 11:10:38'),
(28, 43, 6, '2020-04-24 13:43:50', '2020-04-24 13:43:50'),
(29, 44, 6, '2020-04-24 14:09:08', '2020-04-24 14:09:08'),
(30, 45, 6, '2020-04-24 14:11:28', '2020-04-24 14:11:28'),
(31, 46, 2, '2020-04-24 17:54:51', '2020-04-24 17:54:51'),
(32, 47, 2, '2020-04-24 17:57:17', '2020-04-24 17:57:17'),
(33, 48, 5, '2020-05-05 18:00:08', '2020-05-05 18:00:08'),
(34, 49, 5, '2020-05-05 23:12:50', '2020-05-05 23:12:50'),
(35, 50, 5, '2020-05-05 23:14:14', '2020-05-05 23:14:14'),
(36, 51, 5, '2020-05-05 23:17:40', '2020-05-05 23:17:40'),
(37, 52, 5, '2020-05-05 23:32:55', '2020-05-05 23:32:55'),
(38, 53, 5, '2020-05-06 00:07:37', '2020-05-06 00:07:37'),
(39, 54, 5, '2020-05-06 11:08:39', '2020-05-06 11:08:39'),
(40, 55, 5, '2020-05-08 15:20:54', '2020-05-08 15:20:54'),
(41, 56, 5, '2020-05-08 15:52:39', '2020-05-08 15:52:39'),
(42, 57, 5, '2020-05-08 15:55:26', '2020-05-08 15:55:26'),
(43, 58, 5, '2020-05-08 17:04:58', '2020-05-08 17:04:58'),
(44, 59, 5, '2020-05-08 19:47:26', '2020-05-08 19:47:26'),
(45, 60, 5, '2020-05-08 22:14:31', '2020-05-08 22:14:31'),
(46, 61, 5, '2020-05-08 22:30:42', '2020-05-08 22:30:42'),
(47, 62, 5, '2020-05-08 23:11:20', '2020-05-08 23:11:20'),
(48, 63, 5, '2020-05-08 23:23:07', '2020-05-08 23:23:07'),
(49, 64, 5, '2020-05-08 23:25:13', '2020-05-08 23:25:13'),
(50, 65, 5, '2020-05-08 23:51:16', '2020-05-08 23:51:16'),
(51, 66, 5, '2020-05-09 00:29:43', '2020-05-09 00:29:43'),
(52, 67, 5, '2020-05-09 00:49:11', '2020-05-09 00:49:11'),
(53, 68, 5, '2020-05-09 01:16:33', '2020-05-09 01:16:33'),
(54, 69, 5, '2020-05-09 09:58:40', '2020-05-09 09:58:40'),
(55, 70, 5, '2020-05-09 22:51:32', '2020-05-09 22:51:32'),
(56, 71, 5, '2020-05-09 23:08:46', '2020-05-09 23:08:46'),
(57, 72, 5, '2020-05-09 23:29:04', '2020-05-09 23:29:04'),
(58, 73, 5, '2020-05-09 23:44:35', '2020-05-09 23:44:35'),
(59, 74, 5, '2020-05-10 00:01:36', '2020-05-10 00:01:36'),
(60, 75, 5, '2020-05-10 12:59:20', '2020-05-10 12:59:20'),
(61, 76, 5, '2020-05-10 13:19:38', '2020-05-10 13:19:38'),
(62, 77, 5, '2020-05-10 23:33:43', '2020-05-10 23:33:43'),
(63, 78, 5, '2020-05-11 22:40:57', '2020-05-11 22:40:57'),
(64, 79, 5, '2020-05-11 23:35:10', '2020-05-11 23:35:10'),
(65, 80, 5, '2020-05-12 11:14:00', '2020-05-12 11:14:00'),
(66, 81, 5, '2020-05-12 17:08:45', '2020-05-12 17:08:45'),
(67, 82, 5, '2020-05-13 11:25:55', '2020-05-13 11:25:55'),
(68, 83, 5, '2020-05-13 11:30:16', '2020-05-13 11:30:16'),
(69, 84, 5, '2020-05-13 23:23:19', '2020-05-13 23:23:19'),
(70, 85, 5, '2020-05-14 00:40:09', '2020-05-14 00:40:09'),
(71, 86, 2, '2020-05-14 00:46:00', '2020-05-14 00:46:00'),
(72, 87, 5, '2020-05-14 00:49:33', '2020-05-14 00:49:33'),
(73, 88, 5, '2020-05-14 00:59:23', '2020-05-14 00:59:23'),
(74, 89, 3, '2020-05-18 23:09:36', '2020-05-18 23:09:36'),
(75, 90, 5, '2020-05-18 23:12:47', '2020-05-18 23:12:47'),
(76, 91, 5, '2020-05-18 23:16:14', '2020-05-18 23:16:14'),
(77, 92, 5, '2020-05-20 10:02:58', '2020-05-20 10:02:58'),
(78, 93, 5, '2020-05-20 10:18:23', '2020-05-20 10:18:23'),
(79, 94, 5, '2020-05-20 10:19:26', '2020-05-20 10:19:26'),
(80, 95, 5, '2020-05-20 11:17:32', '2020-05-20 11:17:32'),
(81, 96, 5, '2020-05-27 07:30:29', '2020-05-27 07:30:29'),
(82, 97, 5, '2020-05-29 04:38:18', '2020-05-29 04:38:18'),
(83, 98, 5, '2020-06-03 06:49:28', '2020-06-03 06:49:28'),
(84, 99, 5, '2020-06-21 09:14:59', '2020-06-21 09:14:59'),
(85, 100, 5, '2020-06-21 15:10:32', '2020-06-21 15:10:32'),
(86, 101, 5, '2020-06-21 15:18:35', '2020-06-21 15:18:35'),
(87, 102, 5, '2020-06-21 16:13:57', '2020-06-21 16:13:57'),
(88, 103, 5, '2020-06-22 03:36:48', '2020-06-22 03:36:48'),
(89, 104, 5, '2020-06-22 06:47:33', '2020-06-22 06:47:33'),
(90, 105, 5, '2020-06-22 07:35:30', '2020-06-22 07:35:30'),
(91, 106, 7, '2020-08-05 09:03:14', '2020-08-05 09:03:14'),
(92, 107, 7, '2020-08-05 10:01:19', '2020-08-05 10:01:19'),
(93, 108, 7, '2020-08-05 13:54:04', '2020-08-05 13:54:04'),
(94, 109, 7, '2020-08-05 14:49:01', '2020-08-05 14:49:01'),
(95, 110, 7, '2020-08-06 07:45:54', '2020-08-06 07:45:54'),
(96, 111, 7, '2020-08-06 09:11:23', '2020-08-06 09:11:23'),
(97, 112, 8, '2020-08-06 10:09:24', '2020-08-06 10:09:24'),
(98, 113, 7, '2020-08-06 11:17:32', '2020-08-06 11:17:32'),
(99, 114, 7, '2020-08-07 16:31:47', '2020-08-07 16:31:47'),
(100, 115, 9, '2020-08-08 09:28:53', '2020-08-08 09:28:53'),
(101, 116, 10, '2020-08-08 14:23:13', '2020-08-08 14:23:13'),
(103, 118, 12, '2020-08-08 14:29:01', '2020-08-08 14:29:01'),
(104, 119, 13, '2020-08-08 14:30:15', '2020-08-08 14:30:15'),
(105, 120, 7, '2020-08-08 14:34:49', '2020-08-08 14:34:49'),
(106, 121, 11, '2020-08-09 09:20:35', '2020-08-09 09:20:35'),
(108, 123, 10, '2020-08-09 13:11:05', '2020-08-09 13:11:05'),
(109, 124, 3, '2020-08-09 13:52:26', '2020-08-09 13:52:26'),
(112, 127, 14, '2020-08-09 15:25:34', '2020-08-09 15:25:34'),
(113, 128, 5, '2020-08-09 15:39:14', '2020-08-09 15:39:14'),
(114, 129, 5, '2020-08-09 15:59:39', '2020-08-09 15:59:39'),
(115, 130, 10, '2020-08-09 16:18:38', '2020-08-09 16:18:38'),
(116, 131, 5, '2020-08-10 03:09:53', '2020-08-10 03:09:53'),
(117, 132, 12, '2020-08-10 05:10:44', '2020-08-10 05:10:44'),
(118, 133, 5, '2020-08-10 06:44:41', '2020-08-10 06:44:41'),
(119, 134, 11, '2020-08-10 10:07:03', '2020-08-10 10:07:03'),
(120, 135, 13, '2020-08-11 09:29:59', '2020-08-11 09:29:59'),
(121, 136, 15, '2020-08-11 10:03:58', '2020-08-11 10:03:58'),
(122, 137, 16, '2020-08-12 10:47:22', '2020-08-12 10:47:22'),
(124, 139, 17, '2020-08-13 15:06:35', '2020-08-13 15:06:35'),
(125, 140, 18, '2020-08-14 12:01:56', '2020-08-14 12:01:56'),
(126, 141, 5, '2020-08-14 17:06:00', '2020-08-14 17:06:00'),
(127, 142, 19, '2020-08-15 08:32:57', '2020-08-15 08:32:57'),
(128, 143, 19, '2020-08-15 08:34:21', '2020-08-15 08:34:21'),
(130, 145, 20, '2020-08-15 10:46:46', '2020-08-15 10:46:46'),
(131, 146, 5, '2020-08-16 16:21:35', '2020-08-16 16:21:35'),
(132, 147, 10, '2020-08-16 16:38:58', '2020-08-16 16:38:58'),
(133, 148, 7, '2020-08-16 16:50:13', '2020-08-16 16:50:13'),
(134, 149, 7, '2020-08-16 16:54:03', '2020-08-16 16:54:03'),
(135, 150, 22, '2020-08-17 12:25:39', '2020-08-17 12:25:39'),
(136, 151, 5, '2020-08-17 14:31:24', '2020-08-17 14:31:24'),
(137, 152, 5, '2020-08-17 16:21:18', '2020-08-17 16:21:18'),
(138, 153, 7, '2020-08-17 16:21:59', '2020-08-17 16:21:59'),
(139, 154, 23, '2020-08-28 17:18:09', '2020-08-28 17:18:09'),
(140, 155, 5, '2020-08-28 17:23:20', '2020-08-28 17:23:20'),
(141, 156, 24, '2020-08-29 04:44:08', '2020-08-29 04:44:08'),
(143, 158, 26, '2020-08-30 13:28:19', '2020-08-30 13:28:19'),
(144, 159, 27, '2020-08-30 13:29:51', '2020-08-30 13:29:51'),
(145, 160, 28, '2020-08-30 13:31:33', '2020-08-30 13:31:33'),
(146, 161, 29, '2020-08-30 13:32:42', '2020-08-30 13:32:42'),
(147, 162, 30, '2020-08-30 13:34:51', '2020-08-30 13:34:51'),
(148, 163, 5, '2020-08-31 13:59:14', '2020-08-31 13:59:14'),
(149, 164, 31, '2020-09-21 11:42:30', '2020-09-21 11:42:30'),
(150, 165, 32, '2020-09-21 11:47:51', '2020-09-21 11:47:51'),
(151, 166, 33, '2020-09-28 11:26:28', '2020-09-28 11:26:28'),
(153, 168, 34, '2020-10-06 09:26:51', '2020-10-06 09:26:51'),
(154, 169, 35, '2020-10-10 07:24:24', '2020-10-10 07:24:24'),
(155, 170, 36, '2020-10-10 08:00:21', '2020-10-10 08:00:21');

-- --------------------------------------------------------

--
-- Table structure for table `livestream_details`
--

CREATE TABLE IF NOT EXISTS `livestream_details` (
  `id` int(10) unsigned NOT NULL,
  `livestream_id` int(11) NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `livestream_hocmai_videos`
--

CREATE TABLE IF NOT EXISTS `livestream_hocmai_videos` (
  `id` int(10) unsigned NOT NULL,
  `livestream_id` int(11) NOT NULL,
  `hocmai_video_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_07_26_060620_add_field_user_admin', 1),
(9, '2019_07_29_032725_create_role_tables', 1),
(10, '2019_07_29_034102_default_role_database', 1),
(11, '2019_07_30_085924_create_user_shop_table', 1),
(12, '2020_04_01_154104_create_class_table', 1),
(13, '2020_04_02_082443_create_schoolblocks_table', 1),
(14, '2020_04_02_091957_create_school_subjects_table', 1),
(15, '2020_04_02_092315_create_teachers_table', 1),
(16, '2020_04_02_092641_create_livestreams_table', 1),
(17, '2020_04_02_093528_create_livestream_details_table', 1),
(18, '2020_04_07_134403_create_hocmai_videos_table', 1),
(19, '2020_04_07_134934_create_another_videos_table', 1),
(20, '2020_04_07_140356_create_livestream_another_videos_table', 1),
(21, '2020_04_07_141134_create_livestream_hocmai_videos_table', 1),
(22, '2020_04_10_030138_create_subject_class_table', 1),
(23, '2020_04_10_030153_create_teacher_class_table', 1),
(24, '2020_04_10_030204_create_teacher_subject_table', 1),
(25, '2020_04_10_040035_add_source_id_another_video_table', 2),
(26, '2020_04_10_072135_add_fields_livestreams', 3),
(27, '2020_04_10_084818_change_type_livestreams', 4),
(28, '2020_04_10_090405_add_repeat_livestream', 4),
(29, '2020_04_10_093506_add_more_field_livestream', 4),
(30, '2020_04_12_123028_add_avatar_to_teachers', 5),
(31, '2020_04_12_125716_change_type_publish_time', 5),
(32, '2020_04_12_140811_add_fields_livestreams', 5),
(33, '2020_04_12_225501_add_is_publish_time', 5),
(34, '2020_04_13_014114_add_avatar_to_users', 6),
(35, '2020_04_13_110251_add_duration_to_another_videos', 6),
(36, '2020_04_13_145722_add_duration_to_avatar_schoolbooks', 6),
(37, '2020_04_18_161909_change_column_name_livestream', 7),
(38, '2020_04_18_162138_change_column_publish_livestream', 7),
(39, '2020_04_20_201657_create_headers_table', 8),
(40, '2020_04_20_202808_create_footers_table', 8),
(41, '2020_04_20_225150_updateheadertable', 8),
(42, '2020_04_20_235658_add_status_to_header_and_footer', 8),
(43, '2020_04_21_002145_add_status_to_footer', 8),
(44, '2020_04_24_171236_change_type_end_time', 9),
(45, '2020_04_25_122954_update_desc_table', 10),
(46, '2020_05_06_205317_add_color_to_headers', 11),
(47, '2020_05_06_233624_create_user_fakes_table', 11),
(48, '2020_05_07_141048_create_comment_fakes_table', 11),
(49, '2020_05_11_084246_remove_', 12),
(50, '2020_05_11_085641_create_user_comment_fake_table', 12),
(51, '2020_05_12_234935_create_rate_app_table', 13),
(52, '2020_05_13_001053_add_user_name_rate', 14),
(53, '2020_05_25_233204_add_more_field_rate', 15),
(54, '2020_06_04_140850_add_more_field_in_user_comment_fake', 16),
(55, '2020_06_04_222424_add_is_comment_in_livestreams', 16),
(56, '2020_08_14_211017_add__is_livestreams_to_livestreams_table', 17),
(57, '2020_08_15_140822_add_image_medium_to_livestreams_table', 18),
(58, '2020_09_23_223836_create_events_table', 19),
(59, '2020_09_24_211116_add_time_to_events_table', 19),
(60, '2020_09_24_233300_add_deep_link_to_events_table', 19),
(61, '2020_10_06_214955_add_event_adjust_to_events_table', 20);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE IF NOT EXISTS `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `client_id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE IF NOT EXISTS `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `client_id` int(10) unsigned NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE IF NOT EXISTS `oauth_clients` (
  `id` int(10) unsigned NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE IF NOT EXISTS `oauth_personal_access_clients` (
  `id` int(10) unsigned NOT NULL,
  `client_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE IF NOT EXISTS `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rate_apps`
--

CREATE TABLE IF NOT EXISTS `rate_apps` (
  `id` int(10) unsigned NOT NULL,
  `version` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `os` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_comment` text COLLATE utf8mb4_unicode_ci,
  `rate` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1348 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rate_apps`
--

INSERT INTO `rate_apps` (`id`, `version`, `os`, `customer_username`, `customer_id`, `customer_name`, `customer_comment`, `rate`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'trantung', 2111, 'tran thanh tung', 'comment', 4, '2020-05-13 14:06:51', '2020-05-13 14:06:51'),
(2, NULL, NULL, '0374330565', 4471566, 'APP HOCMAI', 'Dfdsfds', 5, '2020-05-13 16:39:23', '2020-05-13 16:39:23'),
(3, NULL, NULL, '0374330565', 4471566, 'APP HOCMAI', 'Aoppp tut tvoi', 3, '2020-05-13 17:29:53', '2020-05-13 17:29:53'),
(4, NULL, NULL, '0374330565', 4471566, 'APP HOCMAI', 'Fdsfdsfsdf', 3, '2020-05-13 17:31:57', '2020-05-13 17:31:57'),
(5, NULL, NULL, '0374330565', 4471566, 'APP HOCMAI', 'Dfdsfds', 3, '2020-05-13 17:32:12', '2020-05-13 17:32:12'),
(6, NULL, NULL, NULL, 4636125, 'anh hoang', 'Dfdsfsdfdf', 4, '2020-05-13 17:38:49', '2020-05-13 17:38:49'),
(7, NULL, NULL, NULL, 4623792, 'Hoàng Anh', 'Dsfsdfsdfdsfdsfds', 2, '2020-05-13 17:41:12', '2020-05-13 17:41:12'),
(8, NULL, NULL, '0374330565', 4360094, 'App Dev', 'Hello world chúng tôi đánh giá cao ứng dụng', 4, '2020-05-19 17:48:10', '2020-05-19 17:48:10'),
(9, NULL, NULL, '0392235167', 4626181, 'Nguyễn  Hoàng Anh', 'Fhhhhjhfff', 2, '2020-05-20 10:32:05', '2020-05-20 10:32:05'),
(10, NULL, NULL, NULL, 4661224, 'ds a', 'Ghjhggfff', 3, '2020-05-22 08:56:47', '2020-05-22 08:56:47'),
(11, '1.4.4', '1', NULL, 4636125, 'anh hoang', 'Hjhgj', 3, '2020-05-27 07:29:58', '2020-05-27 07:29:58'),
(12, '1.4.1', '2', NULL, 4644924, 'Bùi Thị Khánh Hoà', 'Kkkkkmnnnnnn', 4, '2020-05-27 10:42:22', '2020-05-27 10:42:22'),
(13, '1.4.1', '2', NULL, 4636125, 'anh hoang', NULL, 4, '2020-05-27 15:07:13', '2020-05-27 15:07:13'),
(14, '1.4.4', '1', '0374330565', 4471566, 'APP HOCMAI', 'Tuyệt vời lắm', 4, '2020-06-02 15:34:51', '2020-06-02 15:34:51'),
(15, '1.4.4', '1', '0374330565', 4360094, 'App Dev', 'Quá xịn', 4, '2020-06-03 02:38:10', '2020-06-03 02:38:10'),
(16, '1.4.1', '2', '0868908934', 4456503, 'Nga  Nguyễn Thị Thúy', 'Hello world', 4, '2020-06-03 08:30:07', '2020-06-03 08:30:07'),
(17, '1.4.2', '2', '0982076696', 1232979, 'kithuat hocmai', 'Khá hay ho', 4, '2020-06-08 14:42:27', '2020-06-08 14:42:27'),
(18, '1.4.2', '2', '0902417684', 4471924, 'HOCMAI  Test app', 'Ứng dụng quá tuyệt vời', 4, '2020-06-17 04:14:19', '2020-06-17 04:14:19'),
(19, '1.4.4', '1', '0374330566', 2612295, 'Nguyễn Thăng', 'Hay', 4, '2020-06-19 14:08:06', '2020-06-19 14:08:06'),
(20, '1.4.2', '2', '0868908934', 4711982, 'Test Chú Voi', NULL, 5, '2020-06-20 09:15:07', '2020-06-20 09:15:07'),
(21, '2.0.0', '2', '0374330565', 4711591, 'gomozi Kenz', 'Quá tốt luôn', 5, '2020-06-20 14:53:04', '2020-06-20 14:53:04'),
(22, '2.0.0', '2', '0919013311', 2611036, 'Linh Phạm Giang', NULL, 5, '2020-06-21 02:20:55', '2020-06-21 02:20:55'),
(23, '2.0.0', '2', '0982419254', 4468977, 'Lan Nguyễn Hoàng', NULL, 5, '2020-06-21 05:02:12', '2020-06-21 05:02:12'),
(24, '2.0.0', '2', '0889737752', 4345579, 'Văn Phan Vỹ', NULL, 5, '2020-06-21 11:48:29', '2020-06-21 11:48:29'),
(25, '2.0.0', '2', '0825900274', 4154464, 'Anh Trần Nguyễn', NULL, 5, '2020-06-21 12:09:56', '2020-06-21 12:09:56'),
(26, '2.0.0', '2', '0967101700', 4385869, 'Anh  Tuấn Dương', NULL, 5, '2020-06-21 18:33:33', '2020-06-21 18:33:33'),
(27, '2.0.0', '2', '0902417684', 4471924, 'HOCMAI  Test app', '5 sao ạ', 5, '2020-06-22 04:08:26', '2020-06-22 04:08:26'),
(28, '2.0.0', '2', '0968429776', 4218430, '0968429776', NULL, 5, '2020-06-22 06:49:33', '2020-06-22 06:49:33'),
(29, '2.0.0', '2', '0978089923', 3635218, 'Nguyễn Ngọc Phương', 'Quá tuyệt', 5, '2020-06-22 07:49:36', '2020-06-22 07:49:36'),
(30, '2.0.0', '2', '0834279248', 4520897, 'nguyen viet trinh', NULL, 5, '2020-06-22 08:32:20', '2020-06-22 08:32:20'),
(31, '2.0.1', '2', '0979434349', 3379768, 'Hào Doãn Nhật', NULL, 3, '2020-06-22 14:47:37', '2020-06-22 14:47:37'),
(32, '1.4.4', '1', '0587718775', 4360902, 'App Account Test', NULL, 1, '2020-06-22 15:56:17', '2020-06-22 15:56:17'),
(33, '1.4.4', '1', '0799187144', 4702499, 'Trần  Nga Linh', NULL, 5, '2020-06-23 04:09:06', '2020-06-23 04:09:06'),
(34, '2.0.1', '2', '0357849569', 4510303, '0357849569', NULL, 5, '2020-06-23 04:59:41', '2020-06-23 04:59:41'),
(35, '2.0.1', '2', '0899918867', 4617224, 'Linh  Ngoc', NULL, 5, '2020-06-23 07:20:18', '2020-06-23 07:20:18'),
(36, '2.0.1', '2', '0855042044', 4715363, '0855042044', NULL, 4, '2020-06-23 08:12:13', '2020-06-23 08:12:13'),
(37, '2.0.1', '2', '0337140663', 4711456, 'Nguyễn Thanh Đăng', NULL, 5, '2020-06-23 12:32:15', '2020-06-23 12:32:15'),
(38, '2.0.1', '2', '0787446781', 4429287, 'Anh Thu', NULL, 5, '2020-06-23 13:55:45', '2020-06-23 13:55:45'),
(39, '1.4.4', '1', '0763069789', 2758565, 'Sun Shine', NULL, 5, '2020-06-23 15:25:54', '2020-06-23 15:25:54'),
(40, '1.4.4', '1', '0915491090', 3922208, 'Huỳnh Sía', 'tốt', 5, '2020-06-23 23:42:14', '2020-06-23 23:42:14'),
(41, '1.4.4', '1', '0901243150', 3377280, 'Hòa Lê Thái', 'Good', 5, '2020-06-24 02:18:09', '2020-06-24 02:18:09'),
(42, '2.0.2', '2', '0363617465', 2868748, 'Ngọc Kiều', NULL, 5, '2020-06-24 02:19:26', '2020-06-24 02:19:26'),
(43, '2.0.2', '2', '0838685100', 2997704, 'Giang Trần', 'Giao diện chuyên nghiệp', 5, '2020-06-24 02:29:02', '2020-06-24 02:29:02'),
(44, '2.0.0', '1', '0374330565', 4360094, 'Dev App', 'Quá xịn', 5, '2020-06-24 02:36:37', '2020-06-24 02:36:37'),
(45, '2.0.2', '2', '0868908934', 4456503, 'Nga  Nguyễn Thị Thúy', NULL, 5, '2020-06-24 04:07:55', '2020-06-24 04:07:55'),
(46, '2.0.2', '2', '0582449523', 4680052, 'Kil Trần Văn', NULL, 5, '2020-06-24 04:43:35', '2020-06-24 04:43:35'),
(47, '2.0.2', '2', '0333894522', 3889444, 'Huệ Nguyễn Như', 'Tốt', 5, '2020-06-24 04:50:44', '2020-06-24 04:50:44'),
(48, '1.4.4', '1', '0868665135', 2971928, 'Linh Phạm Mai', 'Giao diện đẹp nên update thêm để e có thể làm bài ktra và hỏi đáp luôn trên app', 5, '2020-06-24 04:54:37', '2020-06-24 04:54:37'),
(49, '2.0.2', '2', '0777329483', 4194932, 'Quang Tuấn Nghĩa Nguyễn', NULL, 4, '2020-06-24 07:17:05', '2020-06-24 07:17:05'),
(50, '1.4.4', '1', '0943819048', 4391523, 'Khoa Lê', NULL, 5, '2020-06-24 07:54:37', '2020-06-24 07:54:37'),
(51, '2.0.2', '2', '0866684457', 4718699, 'Hằng Bùi Thị', NULL, 5, '2020-06-24 07:56:40', '2020-06-24 07:56:40'),
(52, '2.0.2', '2', '0982076696', 1232979, 'kithuat hocmai', NULL, 5, '2020-06-24 08:30:49', '2020-06-24 08:30:49'),
(53, '2.0.2', '2', '0987272857', 3021955, 'Bop36', NULL, 5, '2020-06-24 09:20:39', '2020-06-24 09:20:39'),
(54, '2.0.2', '2', '0936902380', 3522402, 'Pham Phong', 'Ứng dụng vừa cập nhật chưa xem đc pen M', 2, '2020-06-24 10:33:36', '2020-06-24 10:33:36'),
(55, '2.0.2', '2', '0354897073', 4719469, 'Trần Hiên', NULL, 5, '2020-06-24 14:31:31', '2020-06-24 14:31:31'),
(56, '2.0.2', '2', '0354645917', 4719502, 'Phượng Nguyễn', 'Rất hay học dễ hiểu', 5, '2020-06-24 14:36:42', '2020-06-24 14:36:42'),
(57, '2.0.2', '2', '0383062578', 4696470, 'Thư Đổng Anh', 'Tuyệt vời quá điii ạ', 5, '2020-06-24 15:38:00', '2020-06-24 15:38:00'),
(58, '2.0.2', '2', '0985904428', 4184904, 'Anh Phạm Nhật', NULL, 5, '2020-06-24 15:59:09', '2020-06-24 15:59:09'),
(59, '2.0.2', '2', '0949441544', 2113436, 'VO Nguyen Sang', NULL, 3, '2020-06-24 16:01:48', '2020-06-24 16:01:48'),
(60, '1.4.4', '1', '0762932617', 4639997, 'Huỳnh  Khương', NULL, 5, '2020-06-25 00:59:22', '2020-06-25 00:59:22'),
(61, '2.0.2', '2', '0355860593', 3050849, 'Tuấn Trương', NULL, 5, '2020-06-25 01:22:50', '2020-06-25 01:22:50'),
(62, '2.0.0', '1', '0901465448', 2952308, 'Toàn Hồ Đắc', 'App xài ổn. Mong nhà phát triển app cải tiến app ngày càng nhiều hơn nữa', 5, '2020-06-25 12:10:50', '2020-06-25 12:10:50'),
(63, '2.0.2', '2', '0844108995', 4719308, 'Nguyễn Huyến', NULL, 5, '2020-06-25 13:36:05', '2020-06-25 13:36:05'),
(64, '2.0.2', '2', '0345103764', 3750054, 'D H Đ', NULL, 5, '2020-06-25 13:59:38', '2020-06-25 13:59:38'),
(65, '2.0.2', '2', '0965355269', 4721155, 'Nga Nhung', NULL, 3, '2020-06-25 15:01:46', '2020-06-25 15:01:46'),
(66, '2.0.2', '2', '0975307221', 4501318, 'Linh Lương Hà', 'Chương trình học của hocmai thực su tốt. Mình rất tin tưởng ở hocmai', 5, '2020-06-25 15:09:07', '2020-06-25 15:09:07'),
(67, '2.0.2', '2', '0979576119', 4453840, 'Ngô Quân', 'Tuyệt vời', 5, '2020-06-25 15:16:13', '2020-06-25 15:16:13'),
(68, '2.0.0', '1', '0948708963', 4048108, 'Hatsuki  Zin', NULL, 4, '2020-06-25 16:19:58', '2020-06-25 16:19:58'),
(69, '2.0.2', '2', '0886258467', 2810596, 'Moon Lê', 'Phần tài liệu của tôi hiện trong app nhưng không có trong web', 4, '2020-06-25 16:53:20', '2020-06-25 16:53:20'),
(70, '2.0.2', '2', '0916294113', 4721513, 'Nguyễn Phương Thanh', NULL, 1, '2020-06-25 18:43:42', '2020-06-25 18:43:42'),
(71, '2.0.2', '2', '0335151375', 4466194, 'Hoa Thanh', NULL, 5, '2020-06-26 01:03:55', '2020-06-26 01:03:55'),
(72, '2.0.2', '2', '0949956297', 4391422, 'Hòa Trần Văn', NULL, 4, '2020-06-26 03:42:36', '2020-06-26 03:42:36'),
(73, '2.0.0', '1', '0359509924', 4683600, 'Quân Đặng Anh', NULL, 5, '2020-06-26 07:47:30', '2020-06-26 07:47:30'),
(74, '2.0.2', '2', '0917793661', 4358951, 'bình', 'Bài giảng các môn hay quá', 5, '2020-06-26 10:30:46', '2020-06-26 10:30:46'),
(75, '2.0.2', '2', '0986065213', 2303315, 'Tú Nguyễn Phan Trường', NULL, 5, '2020-06-26 12:56:51', '2020-06-26 12:56:51'),
(76, '2.0.0', '1', '0776111138', 3880028, 'Nam Đào Khoa', 'Tuyệt vời, xuất sắc', 5, '2020-06-26 15:04:55', '2020-06-26 15:04:55'),
(77, '2.0.2', '2', '0838473825', 1600413, 'Linh Phương', NULL, 5, '2020-06-27 02:27:03', '2020-06-27 02:27:03'),
(78, '2.0.2', '2', '0832579423', 4689342, 'Quang  Bao', NULL, 5, '2020-06-27 04:14:12', '2020-06-27 04:14:12'),
(79, '2.0.2', '2', '0388965830', 4480633, 'Nhật Trần Minh', NULL, 5, '2020-06-27 14:22:13', '2020-06-27 14:22:13'),
(80, '2.0.2', '2', '0388965830', 4480633, 'Nhật Trần Minh', NULL, 5, '2020-06-27 14:22:14', '2020-06-27 14:22:14'),
(81, '2.0.0', '1', '0389345315', 4699852, 'Hoa Đào Thanh', NULL, 1, '2020-06-27 14:30:12', '2020-06-27 14:30:12'),
(82, '2.0.2', '2', '0978114555', 4696692, 'Minh Bùi Mai', NULL, 5, '2020-06-27 14:57:42', '2020-06-27 14:57:42'),
(83, '2.0.2', '2', '0906868423', 4724472, 'Tân Minh', NULL, 5, '2020-06-28 01:43:00', '2020-06-28 01:43:00'),
(84, '2.0.2', '2', '0337097113', 4435352, 'Hồng Kim', 'Good', 5, '2020-06-28 13:14:01', '2020-06-28 13:14:01'),
(85, '2.0.2', '2', '0858987532', 3879394, 'Hằng Đỗ Thị', NULL, 5, '2020-06-28 13:26:20', '2020-06-28 13:26:20'),
(86, '2.0.0', '1', '0383912779', 4725683, '001835 1451', NULL, 5, '2020-06-28 14:54:18', '2020-06-28 14:54:18'),
(87, '2.0.2', '2', '0762809390', 4570727, 'Nguyen Linh', NULL, 5, '2020-06-28 16:46:43', '2020-06-28 16:46:43'),
(88, '2.0.2', '2', '0976676379', 4424530, '0976676379', NULL, 5, '2020-06-29 00:47:04', '2020-06-29 00:47:04'),
(89, '2.0.2', '2', '0329330187', 4720891, 'Tâm Đồ Thị', NULL, 5, '2020-06-29 01:12:28', '2020-06-29 01:12:28'),
(90, '2.0.0', '1', '0978089923', 3808138, 'Phuong Nguyen', 'Tuyệt vời', 5, '2020-06-29 03:33:15', '2020-06-29 03:33:15'),
(91, '2.0.2', '2', '0373176018', 4712670, 'Thúy  Ngân Nguyễn', NULL, 5, '2020-06-29 14:04:58', '2020-06-29 14:04:58'),
(92, '2.0.0', '1', '0868719664', 3284958, 'Tú Phùng Thị Cẩm', 'Không thể xem bài tập tự luyện trực tiếp được', 3, '2020-06-29 15:40:09', '2020-06-29 15:40:09'),
(93, '2.0.0', '1', '0364755779', 4694421, 'Ngân Thu', NULL, 3, '2020-06-30 01:37:55', '2020-06-30 01:37:55'),
(94, '2.0.2', '2', '0399898643', 3418682, 'Nguyen  Ton', NULL, 4, '2020-06-30 02:09:19', '2020-06-30 02:09:19'),
(95, '2.0.0', '1', '0988296107', 4460629, 'Tâm4T', 'Hệ thống giáo dục HOCMAI rất đáng tin cậy ,nhiệt tình với học sinh chúng em.Em gửi lời cảm ơn đến thầy , cô , các anh chị CTV mà trợ giảng nhiệt huyết ,tốt bụng.❤️', 5, '2020-06-30 04:30:21', '2020-06-30 04:30:21'),
(96, '2.0.0', '1', '0383282814', 4729097, 'tu nguyễn huu', NULL, 1, '2020-06-30 12:57:39', '2020-06-30 12:57:39'),
(97, '2.0.2', '2', '0838735008', 4728219, '0838735008', NULL, 5, '2020-06-30 15:56:36', '2020-06-30 15:56:36'),
(98, '2.0.2', '2', '0932065198', 4517989, 'An Phạm', NULL, 5, '2020-06-30 16:23:08', '2020-06-30 16:23:08'),
(99, '2.0.2', '2', '0977856735', 4624753, 'Thảo Lê Thị', NULL, 4, '2020-07-01 00:42:47', '2020-07-01 00:42:47'),
(100, '2.0.2', '2', '0773564656', 4538355, 'Minh Đức Hứa', 'good', 5, '2020-07-01 05:05:05', '2020-07-01 05:05:05'),
(101, '2.0.2', '2', '0919013311', 2611036, 'Linh Phạm Giang', 'Xịn', 5, '2020-07-01 12:09:22', '2020-07-01 12:09:22'),
(102, '2.0.0', '1', '0395328647', 4475929, 'Kim  Hoa', NULL, 2, '2020-07-01 12:51:30', '2020-07-01 12:51:30'),
(103, '2.0.0', '1', '0385090036', 4685757, 'Đỗ  Huyền', NULL, 5, '2020-07-01 14:02:31', '2020-07-01 14:02:31'),
(104, '2.0.2', '2', '0396051402', 4592761, 'Phạm  Thảo', 'Xuất sắc ạ 🍍🍍🍍', 5, '2020-07-01 17:40:33', '2020-07-01 17:40:33'),
(105, '2.0.2', '2', '0357810999', 3380966, 'Huy Nguyễn', NULL, 5, '2020-07-02 15:36:25', '2020-07-02 15:36:25'),
(106, '2.0.0', '1', '0889969161', 4322794, 'Hoàng Phan Văn', NULL, 5, '2020-07-03 00:51:33', '2020-07-03 00:51:33'),
(107, '2.0.2', '2', NULL, 4734843, 'PHẠM NGỌC ÁNH OFFICIAL', NULL, 3, '2020-07-03 02:44:02', '2020-07-03 02:44:02'),
(108, '2.0.2', '2', '0399733729', 3921230, 'Anh Dieu', NULL, 5, '2020-07-03 05:04:16', '2020-07-03 05:04:16'),
(109, '2.0.2', '2', '0942249232', 4557045, 'Anh Đỗ Vân', NULL, 5, '2020-07-03 11:41:35', '2020-07-03 11:41:35'),
(110, '2.0.2', '2', '0912336218', 4736071, 'Linh Nguyen', 'Nên có phần đổi thông tin cá nhân', 1, '2020-07-03 12:59:09', '2020-07-03 12:59:09'),
(111, '2.0.2', '2', '0978369998', 4271968, 'Thụy Đặng', NULL, 5, '2020-07-03 13:55:32', '2020-07-03 13:55:32'),
(112, '1.4.4', '1', '0939489620', 2641907, 'Đăng Trần Hải', NULL, 5, '2020-07-04 07:53:03', '2020-07-04 07:53:03'),
(113, '2.0.2', '2', '0343394127', 4737765, 'Ngan Quang', NULL, 5, '2020-07-04 10:53:18', '2020-07-04 10:53:18'),
(114, '2.0.0', '1', '0913583546', 3543160, '0913583546', NULL, 5, '2020-07-04 14:12:01', '2020-07-04 14:12:01'),
(115, '2.0.2', '2', '0886273523', 4667806, 'Tuấn Nguyễn', NULL, 5, '2020-07-04 14:34:50', '2020-07-04 14:34:50'),
(116, '2.0.2', '2', '0942050558', 2573204, 'Mai Thái Kim', NULL, 5, '2020-07-04 14:39:08', '2020-07-04 14:39:08'),
(117, '2.0.0', '1', '0987464371', 3975084, 'nam Hoàng hải', NULL, 2, '2020-07-05 02:00:56', '2020-07-05 02:00:56'),
(118, '2.0.2', '2', '0934539920', 2294957, 'Chi Nguyễn Linh', NULL, 5, '2020-07-05 04:05:17', '2020-07-05 04:05:17'),
(119, '2.0.2', '2', '0868062482', 4464076, 'Thảo Nguyễn Phương', NULL, 5, '2020-07-05 09:40:27', '2020-07-05 09:40:27'),
(120, '2.0.2', '2', '0795915784', 3997990, 'Nhi Đặng', NULL, 5, '2020-07-05 13:06:13', '2020-07-05 13:06:13'),
(121, '2.0.2', '2', '0777848959', 4740074, 'Kim Dung Nguyễn', NULL, 5, '2020-07-05 13:30:45', '2020-07-05 13:30:45'),
(122, '2.0.0', '1', '0773785817', 1791183, 'Đức Vũ Ngọc', NULL, 2, '2020-07-06 00:01:47', '2020-07-06 00:01:47'),
(123, '2.0.2', '2', '0369415282', 4740278, 'Anh Pham', NULL, 5, '2020-07-06 01:38:41', '2020-07-06 01:38:41'),
(124, '2.0.2', '2', '0357849569', 4510303, '0357849569', NULL, 5, '2020-07-06 03:25:21', '2020-07-06 03:25:21'),
(125, '2.0.0', '1', '0972134966', 4374885, 'Quân Nguyễn Anh', 'Ứng dụng có nhiều lỗi ạ', 1, '2020-07-06 07:51:51', '2020-07-06 07:51:51'),
(126, '2.0.2', '2', '0981591276', 4580368, 'Ngọc Nguyễn Minh', NULL, 5, '2020-07-06 08:32:38', '2020-07-06 08:32:38'),
(127, '2.0.2', '2', '0363841208', 2015227, 'Lân Nguyễn Ngọc', 'Rất hữu ích', 4, '2020-07-06 11:00:37', '2020-07-06 11:00:37'),
(128, '2.0.2', '2', '0977368815', 4741302, 'Triệu Phạm Quang', 'Còn nhiều tính năng chưa được phát triển', 2, '2020-07-06 14:39:22', '2020-07-06 14:39:22'),
(129, '2.0.0', '1', '0918007100', 3472656, 'Nguyen ngochan', NULL, 5, '2020-07-07 00:16:37', '2020-07-07 00:16:37'),
(130, '2.0.0', '1', '0762932617', 4639997, 'Huỳnh  Khương', NULL, 5, '2020-07-07 02:16:52', '2020-07-07 02:16:52'),
(131, '2.0.0', '1', '0972194818', 2967969, 'Quan Van', NULL, 5, '2020-07-07 05:12:22', '2020-07-07 05:12:22'),
(132, '2.0.2', '2', '0378112924', 4112496, 'Nguyễn  Mỹ', NULL, 5, '2020-07-07 05:14:43', '2020-07-07 05:14:43'),
(133, '2.0.2', '2', '0937360029', 4683417, 'Huỳnh  Duy', NULL, 5, '2020-07-07 09:29:33', '2020-07-07 09:29:33'),
(134, '2.0.0', '1', '0828188190', 4283862, 'Anh Lê Ngọc', NULL, 5, '2020-07-07 13:51:00', '2020-07-07 13:51:00'),
(135, '2.0.0', '1', '0828188190', 4283862, 'Anh Lê Ngọc', NULL, 5, '2020-07-07 13:51:01', '2020-07-07 13:51:01'),
(136, '2.0.2', '2', '0962573396', 4648479, 'Ngân Kim', 'Rất hay', 5, '2020-07-07 15:39:51', '2020-07-07 15:39:51'),
(137, '2.0.0', '1', '0983253802', 4564020, 'Lâm Phạm Huy', NULL, 5, '2020-07-07 16:21:44', '2020-07-07 16:21:44'),
(138, '2.0.2', '2', '0961692622', 4743900, 'Tuan Tran', NULL, 1, '2020-07-08 04:48:48', '2020-07-08 04:48:48'),
(139, '2.0.2', '2', '0939409080', 4282268, 'Khôi Trần', NULL, 5, '2020-07-08 06:14:14', '2020-07-08 06:14:14'),
(140, '2.0.2', '2', '0356557091', 4585701, 'Hằng Nguyễn', NULL, 3, '2020-07-08 07:28:01', '2020-07-08 07:28:01'),
(141, '2.0.2', '2', '0935348459', 3536138, '0935348459', NULL, 5, '2020-07-08 14:50:30', '2020-07-08 14:50:30'),
(142, '2.0.2', '2', '0338332330', 4699575, 'Trang  Yến', NULL, 5, '2020-07-08 16:30:13', '2020-07-08 16:30:13'),
(143, '2.0.0', '1', '0708601754', 4637315, 'thông lê quốc', NULL, 5, '2020-07-08 20:11:16', '2020-07-08 20:11:16'),
(144, '2.0.2', '2', '0965418997', 4623792, 'Hoàng Anh', 'Hhjjjkkk', 4, '2020-07-09 02:56:12', '2020-07-09 02:56:12'),
(145, '2.0.0', '1', '0974453777', 4743701, '0974453777', NULL, 5, '2020-07-09 03:51:17', '2020-07-09 03:51:17'),
(146, '2.0.2', '2', '0988998079', 4748035, 'Mien Nguyen Huu', NULL, 5, '2020-07-09 05:24:27', '2020-07-09 05:24:27'),
(147, '2.0.2', '2', '0968317889', 2761018, 'Trongquang Vu', NULL, 5, '2020-07-09 05:49:06', '2020-07-09 05:49:06'),
(148, '2.0.2', '2', '0388552226', 4537912, 'Linh Phùng Thị Khánh', 'App khá oke ạ ( :\nMong app có giao diện tối và check được đáp án bài tập tự luyện ạ *hoping*', 4, '2020-07-09 07:50:20', '2020-07-09 07:50:20'),
(149, '2.0.2', '2', '0775427009', 4748730, 'Thư Trần', NULL, 5, '2020-07-09 11:54:37', '2020-07-09 11:54:37'),
(150, '2.0.0', '1', '0915927348', 4212412, 'minh Do tuan', NULL, 5, '2020-07-09 13:16:58', '2020-07-09 13:16:58'),
(151, '2.0.2', '2', '0978923172', 4504793, 'Linh Linh', NULL, 2, '2020-07-09 14:52:43', '2020-07-09 14:52:43'),
(152, '2.0.2', '2', '0365817834', 4331161, '0365817834', NULL, 5, '2020-07-09 15:06:26', '2020-07-09 15:06:26'),
(153, '2.0.2', '2', '0834862528', 2941805, 'Liên Vũ', NULL, 5, '2020-07-09 15:46:48', '2020-07-09 15:46:48'),
(154, '2.0.2', '2', '0939027898', 4240848, 'Le Bui Thi', 'Tốt', 5, '2020-07-10 02:30:48', '2020-07-10 02:30:48'),
(155, '2.0.0', '1', '0374386393', 4408528, 'Lượng Đức', 'tuyệt', 5, '2020-07-10 11:36:22', '2020-07-10 11:36:22'),
(156, '2.0.0', '1', '0854597966', 3399052, '01254597966', NULL, 5, '2020-07-10 13:55:20', '2020-07-10 13:55:20'),
(157, '2.0.0', '1', '0914271362', 4714095, 'Thu Chu Thị Phương', NULL, 5, '2020-07-10 23:49:57', '2020-07-10 23:49:57'),
(158, '2.0.2', '2', '0922333675', 4751656, 'Nhi Trần', NULL, 3, '2020-07-11 02:24:50', '2020-07-11 02:24:50'),
(159, '2.0.2', '2', '0374111034', 4752715, 'Xuân Thành Đinh', NULL, 5, '2020-07-11 13:10:17', '2020-07-11 13:10:17'),
(160, '2.0.2', '2', '0399642185', 4751638, 'Thao Phan', NULL, 5, '2020-07-11 13:39:56', '2020-07-11 13:39:56'),
(161, '2.0.2', '2', '0979220406', 2788189, 'Hồng  Nguyễn Thị', NULL, 5, '2020-07-12 03:29:11', '2020-07-12 03:29:11'),
(162, '2.0.2', '2', '0919402998', 4754106, 'Khôi Hoàng', 'rất tuyệt vời <3', 5, '2020-07-12 08:15:23', '2020-07-12 08:15:23'),
(163, '2.0.0', '1', '0937560420', 4754392, 'duyên duyên', NULL, 5, '2020-07-12 11:26:18', '2020-07-12 11:26:18'),
(164, '2.0.2', '2', '0837180934', 4466810, 'Phan Hân', '❤❤❤❤❤❤❤', 5, '2020-07-12 14:20:21', '2020-07-12 14:20:21'),
(165, '2.0.1', '1', '0832374202', 4065490, 'Dương Lê Xuân', NULL, 5, '2020-07-13 05:27:59', '2020-07-13 05:27:59'),
(166, '2.0.2', '2', '0382742686', 4756018, 'Thịnh Phạm', NULL, 4, '2020-07-13 05:33:36', '2020-07-13 05:33:36'),
(167, '2.0.2', '2', '0822336478', 4746060, 'Thương Phạm Minh', NULL, 5, '2020-07-13 05:46:08', '2020-07-13 05:46:08'),
(168, '2.0.2', '2', '0978804897', 4756754, 'Linh Đào Thùy', NULL, 4, '2020-07-13 12:31:24', '2020-07-13 12:31:24'),
(169, '2.0.2', '2', '0798666203', 2615781, 'Hằng Lê Võ Thúy', 'App hay bị out tài khoản mỗi lần vào phải đăng nhập lại . Tải tài liệu cũng bắt đăng nhập lại , nói chung là không ổn ạ', 2, '2020-07-13 13:23:01', '2020-07-13 13:23:01'),
(170, '2.0.1', '1', '0834715623', 4715164, 'Lan Nguyễn Thị', NULL, 5, '2020-07-13 14:50:04', '2020-07-13 14:50:04'),
(171, '2.0.2', '2', '0862719204', 4734114, 'Vân Nguyễn Trang', NULL, 5, '2020-07-13 15:19:01', '2020-07-13 15:19:01'),
(172, '2.0.1', '1', '0971776418', 3821350, 'Ngân Trần Kim', 'Giao diện app đẹp và hiện đại, nhìn chung dễ cho việc truy cập và xem video nhưng việc làm bt online phải liên kết với web và đăng nhập lại 1 lần nữa thì ở chỗ đó em thấy còn chưa tiện ạ <3', 4, '2020-07-13 16:37:14', '2020-07-13 16:37:14'),
(173, '2.0.1', '1', '0905251556', 4757592, 'Thảo Nguyễn Thị Bích', NULL, 5, '2020-07-13 17:20:18', '2020-07-13 17:20:18'),
(174, '2.0.2', '2', '0342260686', 4730226, 'Phuong Bui', NULL, 5, '2020-07-13 23:06:11', '2020-07-13 23:06:11'),
(175, '2.0.2', '2', '0705756628', 4757989, 'Hang Nguyen', NULL, 5, '2020-07-14 02:37:31', '2020-07-14 02:37:31'),
(176, '2.0.2', '2', '0928146457', 4758559, 'Ngân Bùi', NULL, 5, '2020-07-14 06:59:54', '2020-07-14 06:59:54'),
(177, '2.0.1', '1', '0779543986', 2723908, 'Thảo Phương', NULL, 5, '2020-07-14 07:37:38', '2020-07-14 07:37:38'),
(178, '2.0.1', '1', '0912040338', 4758778, 'Hân Đinh Gia', NULL, 5, '2020-07-14 08:42:52', '2020-07-14 08:42:52'),
(179, '2.0.2', '2', '0327085502', 4630695, 'Tâm Minh', NULL, 3, '2020-07-14 09:27:22', '2020-07-14 09:27:22'),
(180, '2.0.2', '2', '0988455382', 4759813, 'Hue Pham', 'Tốt', 5, '2020-07-14 15:09:56', '2020-07-14 15:09:56'),
(181, '2.0.1', '1', '0385168017', 4492185, '0385168017', NULL, 5, '2020-07-14 16:57:26', '2020-07-14 16:57:26'),
(182, '2.0.2', '2', '0925797068', 4753769, 'Hân Hân', NULL, 5, '2020-07-14 17:38:48', '2020-07-14 17:38:48'),
(183, '2.0.4', '2', '0357359318', 2563656, 'Quân Võ Hoàng', NULL, 5, '2020-07-14 18:49:24', '2020-07-14 18:49:24'),
(184, '2.0.4', '2', '0969264339', 3356796, 'Ngân Nguyễn Thị Thu', NULL, 5, '2020-07-15 01:49:00', '2020-07-15 01:49:00'),
(185, '2.0.1', '1', '0967248172', 3339450, 'Thành Nguyễn', NULL, 5, '2020-07-15 08:11:59', '2020-07-15 08:11:59'),
(186, '2.0.4', '2', '0971707946', 4700382, 'Hoàng Nhất', 'Cho app 4* vì 1* còn lại ở trong đầu em nhé', 4, '2020-07-15 08:51:12', '2020-07-15 08:51:12'),
(187, '2.0.4', '2', '0979923137', 4522626, 'Chi Lê Thị Linh', NULL, 5, '2020-07-15 10:28:09', '2020-07-15 10:28:09'),
(188, '2.0.4', '2', '0837180934', 4466810, 'Phan Hân', 'App rất tốt, thầy cô dạy hay và anh chị ad rất nhiệt tình. Nhưng mình có thể lưu tài khoản của em khi đăng nhập qua face được không ạ? Đăng nhập lại nhiều lầm nên hơi phiền.', 5, '2020-07-15 13:36:46', '2020-07-15 13:36:46'),
(189, '2.0.4', '2', '0886258467', 2810596, 'Moon Lê', 'Có những phần', 2, '2020-07-16 06:33:54', '2020-07-16 06:33:54'),
(190, '2.0.1', '1', '0866656663', 2936346, 'Nhật Minh Lê', 'app hay tuyệt vời nhưng cần cải thiện thêm về tốc độ ạ', 4, '2020-07-16 07:24:19', '2020-07-16 07:24:19'),
(191, '2.0.4', '2', '0762809390', 4570727, 'Nguyen Linh', NULL, 5, '2020-07-16 09:59:52', '2020-07-16 09:59:52'),
(192, '2.0.1', '1', '0373429887', 3706940, 'Đức Đỗ Minh', NULL, 4, '2020-07-16 10:23:14', '2020-07-16 10:23:14'),
(193, '2.0.4', '2', '0974019075', 4332382, 'Phú Trương', NULL, 5, '2020-07-16 15:44:47', '2020-07-16 15:44:47'),
(194, '2.0.4', '2', '0774101067', 3468912, 'Phát Tấn', NULL, 5, '2020-07-16 16:08:58', '2020-07-16 16:08:58'),
(195, '2.0.1', '1', '0917322671', 4122540, 'Đạt Lê Đăng', NULL, 5, '2020-07-16 23:54:04', '2020-07-16 23:54:04'),
(196, '2.0.4', '2', '0376713063', 4765676, 'Nguyễn Thị Thu Huyền', NULL, 5, '2020-07-17 10:38:10', '2020-07-17 10:38:10'),
(197, '2.0.4', '2', '0378507823', 2915591, 'Hưng Trần', NULL, 5, '2020-07-17 14:27:45', '2020-07-17 14:27:45'),
(198, '2.0.1', '1', '0889969161', 4322794, 'Hoàng Phan Văn', NULL, 5, '2020-07-17 17:19:17', '2020-07-17 17:19:17'),
(199, '2.0.1', '1', '0978089923', 3808138, 'Phuong Nguyen', NULL, 5, '2020-07-18 06:40:28', '2020-07-18 06:40:28'),
(200, '2.0.1', '1', '0978089923', 3808138, 'Phuong Nguyen', NULL, 5, '2020-07-18 06:40:30', '2020-07-18 06:40:30'),
(201, '2.0.4', '2', '0949822518', 3731916, 'huyen nguyen minh', NULL, 5, '2020-07-18 07:33:25', '2020-07-18 07:33:25'),
(202, '2.0.4', '2', '0839435996', 4768835, 'Nam Vũ Văn', NULL, 4, '2020-07-18 14:10:39', '2020-07-18 14:10:39'),
(203, '2.0.1', '1', '0961993688', 3554510, 'Hoa Nguyễn Hồng', NULL, 5, '2020-07-18 14:26:22', '2020-07-18 14:26:22'),
(204, '2.0.1', '1', '0828470536', 4428780, 'Thương Nguyễn Quang', NULL, 5, '2020-07-18 15:19:51', '2020-07-18 15:19:51'),
(205, '2.0.1', '1', '0854597966', 3399052, '01254597966', NULL, 5, '2020-07-19 11:22:12', '2020-07-19 11:22:12'),
(206, '2.0.4', '2', '0968940801', 3290530, 'Đức Phạm', NULL, 5, '2020-07-19 11:28:38', '2020-07-19 11:28:38'),
(207, '2.0.4', '2', '0399733729', 3921230, 'Anh Dieu', NULL, 5, '2020-07-19 15:25:50', '2020-07-19 15:25:50'),
(208, '2.0.4', '2', '0927453658', 4770498, 'Linh Nguyễn', NULL, 5, '2020-07-20 01:15:37', '2020-07-20 01:15:37'),
(209, '2.0.4', '2', '0815473694', 3655816, 'Thùy Trần Thị Thanh', NULL, 4, '2020-07-20 16:43:24', '2020-07-20 16:43:24'),
(210, '2.0.4', '2', '0783661258', 4768368, 'Lan Anh Nguyễn', NULL, 5, '2020-07-21 01:08:36', '2020-07-21 01:08:36'),
(211, '2.0.4', '2', '0705756628', 4766057, '0705756628', NULL, 5, '2020-07-21 02:26:11', '2020-07-21 02:26:11'),
(212, '2.0.4', '2', '0389933602', 2654499, 'Ken Pham', NULL, 3, '2020-07-21 04:27:35', '2020-07-21 04:27:35'),
(213, '2.0.4', '2', '0763079609', 3601286, 'Anh Thái nguyễn Nhật', NULL, 5, '2020-07-21 07:53:17', '2020-07-21 07:53:17'),
(214, '1.4.4', '1', '0352364607', 3725472, 'Hanh Trương Thị Hồng', NULL, 5, '2020-07-21 08:55:22', '2020-07-21 08:55:22'),
(215, '2.0.1', '1', '0937211109', 4673529, 'Hà Phạm Thái Ngọc', NULL, 5, '2020-07-21 12:19:27', '2020-07-21 12:19:27'),
(216, '2.0.4', '2', '0941674389', 4773389, 'Anh Lê Quang', 'Đáng nhẽ ra phải là 10 sao mới đáng', 5, '2020-07-21 13:24:42', '2020-07-21 13:24:42'),
(217, '2.0.4', '2', '0928146457', 4758559, 'Ngân Bùi', NULL, 4, '2020-07-21 14:01:09', '2020-07-21 14:01:09'),
(218, '2.0.1', '1', '0936287669', 4774819, 'Linh Nguyễn Hà', NULL, 5, '2020-07-21 14:41:42', '2020-07-21 14:41:42'),
(219, '2.0.2', '1', '0397929246', 4422569, 'Hải Huỳnh Chí', 'Cải thiện tốt, yêu hocmai <3', 5, '2020-07-21 23:14:32', '2020-07-21 23:14:32'),
(220, '2.0.4', '2', '0964173603', 4359778, 'Duy Tran', NULL, 5, '2020-07-22 02:31:29', '2020-07-22 02:31:29'),
(221, '2.0.2', '1', '0389644017', 4777142, 'Quỳnh Nguyễn', NULL, 5, '2020-07-23 01:55:50', '2020-07-23 01:55:50'),
(222, '2.0.2', '1', '0868239355', 3919842, 'Trần Tiến', 'App còn bị lỗi xoay ngang màn hình', 1, '2020-07-23 03:03:07', '2020-07-23 03:03:07'),
(223, '2.0.4', '2', '0378161529', 4773852, '0378161529', NULL, 5, '2020-07-23 03:34:16', '2020-07-23 03:34:16'),
(224, '2.0.4', '2', '0333270015', 1935815, 'Tý Mộng Mơ', NULL, 5, '2020-07-23 05:42:46', '2020-07-23 05:42:46'),
(225, '2.0.2', '1', '0333007007', 4763018, 'Hân Lê Ngọc Bảo', NULL, 5, '2020-07-23 17:30:12', '2020-07-23 17:30:12'),
(226, '2.0.2', '1', '0889969161', 4322794, 'Hoàng Phan Văn', NULL, 5, '2020-07-23 21:13:43', '2020-07-23 21:13:43'),
(227, '2.0.2', '1', '0973475758', 4773524, '0973475758', NULL, 5, '2020-07-24 00:05:07', '2020-07-24 00:05:07'),
(228, '2.0.4', '2', '0942401625', 3879394, 'Hằng Đỗ Thị', NULL, 5, '2020-07-24 03:02:14', '2020-07-24 03:02:14'),
(229, '2.0.2', '1', '0399219894', 4780431, 'Trang Hoàng', NULL, 5, '2020-07-24 10:07:04', '2020-07-24 10:07:04'),
(230, '2.0.4', '2', '0985343222', 3321022, 'hà Trần ngọc', NULL, 5, '2020-07-24 13:23:26', '2020-07-24 13:23:26'),
(231, '2.0.2', '1', '0909314536', 3301792, 'Thông Nguyễn Minh', NULL, 5, '2020-07-24 19:36:48', '2020-07-24 19:36:48'),
(232, '2.0.4', '2', '0935348459', 3536138, '0935348459', 'Bài giảng quá hay !', 5, '2020-07-25 00:20:40', '2020-07-25 00:20:40'),
(233, '2.0.4', '2', '0795925597', 2705325, 'Quỳnh Cao Lê Thúy', NULL, 5, '2020-07-25 02:29:12', '2020-07-25 02:29:12'),
(234, '2.0.4', '2', '0777848959', 4740074, 'Kim Dung Nguyễn', NULL, 5, '2020-07-25 05:57:31', '2020-07-25 05:57:31'),
(235, '2.0.4', '2', '0378983015', 4742637, 'Nhungg Lưuu', NULL, 5, '2020-07-25 07:38:53', '2020-07-25 07:38:53'),
(236, '2.0.4', '2', '0919377342', 4742286, 'Tiên Lê Mỹ', NULL, 5, '2020-07-25 07:52:14', '2020-07-25 07:52:14'),
(237, '2.0.4', '2', '0963037085', 4718674, 'Tuyet Pham', NULL, 5, '2020-07-25 09:04:41', '2020-07-25 09:04:41'),
(238, '2.0.4', '2', '0358416765', 4782298, 'Quynh Đang', 'Ứng dụng rất hay .cảm ơn giúp hiểu thêm bài học', 5, '2020-07-25 14:30:45', '2020-07-25 14:30:45'),
(239, '2.0.4', '2', '0966577359', 4782417, 'hoài thu nguyễn', 'ứng dụng này rất tiện lợi, có thể học hết cả những năm làm học sinh và sinh viên', 4, '2020-07-25 14:33:17', '2020-07-25 14:33:17'),
(240, '2.0.2', '1', '0976397648', 4375236, 'hà nguyễn trong', NULL, 5, '2020-07-25 16:06:30', '2020-07-25 16:06:30'),
(241, '2.0.2', '1', '0984073217', 4556072, 'lethanhmai', NULL, 5, '2020-07-26 08:08:00', '2020-07-26 08:08:00'),
(242, '2.0.4', '2', '0764999676', 4612322, 'Dung  Nguyễn Kim', NULL, 1, '2020-07-26 08:32:24', '2020-07-26 08:32:24'),
(243, '2.0.4', '2', '0903438932', 2465422, 'Tài Nguyễn Đức', 'Cố gắng phát triển những tính năng trong ứng dụng', 5, '2020-07-26 09:36:19', '2020-07-26 09:36:19'),
(244, '2.0.4', '2', '0362625664', 4625281, 'Tơ Lụa BBắp', NULL, 5, '2020-07-26 11:21:21', '2020-07-26 11:21:21'),
(245, '2.0.4', '2', '0374330565', 4471566, 'HOCMAI APP', NULL, 5, '2020-07-26 12:58:46', '2020-07-26 12:58:46'),
(246, '2.0.4', '2', '0352055086', 4782318, '0352055086', NULL, 5, '2020-07-26 13:35:49', '2020-07-26 13:35:49'),
(247, '2.0.4', '2', '0964160719', 4119360, '0964160719', NULL, 5, '2020-07-27 00:36:39', '2020-07-27 00:36:39'),
(248, '2.0.4', '2', '0919199685', 4785351, 'Trần Vy', NULL, 5, '2020-07-27 12:13:00', '2020-07-27 12:13:00'),
(249, '2.0.4', '2', '0907873979', 2955183, 'Na Trần Lê', 'Tốt', 5, '2020-07-27 16:12:09', '2020-07-27 16:12:09'),
(250, '2.0.4', '2', '0977626135', 4775619, 'Tú Hoàng', 'Thầy dạy hay, nhưng việc vào nhóm kín sao em vẫm chưa được vào được dù em đã có mã đồ đành hoàng hết rồi, gửi yêu cầu nhưng vẫn chưa xác nhận ạ.', 4, '2020-07-28 02:14:39', '2020-07-28 02:14:39'),
(251, '2.0.2', '1', '0979781014', 4748848, 'Anh Vũ Châu', NULL, 5, '2020-07-28 09:31:52', '2020-07-28 09:31:52'),
(252, '2.0.4', '2', NULL, 4787310, 'Phụng Nguyệt', NULL, 5, '2020-07-28 10:24:13', '2020-07-28 10:24:13'),
(253, '2.0.4', '2', '0978696601', 4361885, '0978696601', NULL, 5, '2020-07-28 10:27:52', '2020-07-28 10:27:52'),
(254, '2.0.2', '1', '0988085042', 4784860, '0988085042', NULL, 5, '2020-07-28 15:32:01', '2020-07-28 15:32:01'),
(255, '2.0.4', '2', '0357827593', 4712026, 'Thu Nguyễn Thị Hoài', NULL, 5, '2020-07-29 02:19:27', '2020-07-29 02:19:27'),
(256, '2.0.2', '1', '0336691189', 4781770, '0336691189', NULL, 5, '2020-07-29 02:59:18', '2020-07-29 02:59:18'),
(257, '2.0.4', '2', '0845651226', 4789567, 'Nguyen Maria', NULL, 5, '2020-07-29 13:02:55', '2020-07-29 13:02:55'),
(258, '2.0.4', '2', '0382439203', 4763339, 'Lý  Hoà', NULL, 4, '2020-07-29 13:03:11', '2020-07-29 13:03:11'),
(259, '2.0.2', '1', '0378998127', 4784267, 'Nhiên Thái', NULL, 1, '2020-07-29 14:20:06', '2020-07-29 14:20:06'),
(260, '2.0.4', '2', '0818122988', 3480600, 'Linh Lương Yến', NULL, 5, '2020-07-30 01:35:53', '2020-07-30 01:35:53'),
(261, '2.0.4', '2', '0898528203', 2466866, 'Nguyen Kieu', NULL, 5, '2020-07-30 03:43:29', '2020-07-30 03:43:29'),
(262, '2.0.4', '2', '0369497960', 4790388, 'chi Phạm yến', 'Thầy cô giảng bài rất dễ hiểu', 5, '2020-07-30 05:11:14', '2020-07-30 05:11:14'),
(263, '2.0.4', '2', '0865503147', 4717970, '0865503147', NULL, 5, '2020-07-30 05:29:53', '2020-07-30 05:29:53'),
(264, '2.0.4', '2', '0834239656', 4661725, 'Anh Ribi Thục', 'Hay, bổ ích', 5, '2020-07-30 05:32:28', '2020-07-30 05:32:28'),
(265, '2.0.2', '1', '0333958889', 4786889, 'Quốc Khánh Nguyễn', 'Ứng dụng khó dùng', 1, '2020-07-30 07:13:09', '2020-07-30 07:13:09'),
(266, '2.0.4', '2', '0383062578', 4696470, 'Thư Đổng Anh', NULL, 5, '2020-07-30 08:23:44', '2020-07-30 08:23:44'),
(267, '2.0.4', '2', '0917563271', 4791379, 'Nguyễn Trân', NULL, 5, '2020-07-30 10:11:55', '2020-07-30 10:11:55'),
(268, '2.0.2', '1', '0918016823', 4790862, 'Trần Minh Quân', NULL, 5, '2020-07-30 12:21:02', '2020-07-30 12:21:02'),
(269, '2.0.2', '1', '0911866999', 4546828, 'bebun', NULL, 3, '2020-07-30 16:04:14', '2020-07-30 16:04:14'),
(270, '2.0.4', '2', '0934331482', 4588686, 'trọng vương văn', 'giao diện mới rất là ok', 5, '2020-07-31 01:48:50', '2020-07-31 01:48:50'),
(271, '2.0.4', '2', '0972044675', 4782365, 'Lan phạm', NULL, 5, '2020-07-31 07:25:00', '2020-07-31 07:25:00'),
(272, '2.0.4', '2', '0397967943', 4719261, 'An Thành', NULL, 5, '2020-07-31 08:54:48', '2020-07-31 08:54:48'),
(273, '2.0.4', '2', '0973276181', 4534343, 'Trang Hà Huyền', 'Tải app về thật sự không tiện bằng học trên web nữa:)) hơi vô ích\nThứ 1: thông báo tải không được những thông báo cũ hơn, chỉ tải tầm 5 thông báo mới nhất( bất tiện cho mình khi đặt nhiều câu hỏi) \nThứ 2: dùng app thì không thể đặt câu hỏi nếu thắc mắc trong quá trình xem bài giảng \nThứ 3: không lưu tài khoản nên mỗi lần vào mình phải đăng nhập lại rất phiền\nThứ 4: không tải được tài liệu bài tập về máy\nNói chung đánh giá của mình là hãy học trên web đi, tải về tốn dung lượng mà vô dụng cực kì:((', 2, '2020-07-31 11:12:47', '2020-07-31 11:12:47'),
(274, '2.0.2', '1', '0868801519', 4509349, 'Anh Tran Thuc', NULL, 5, '2020-07-31 11:39:36', '2020-07-31 11:39:36'),
(275, '2.0.4', '2', '0338758075', 3064626, 'Tố Ngôn', NULL, 5, '2020-07-31 12:44:07', '2020-07-31 12:44:07'),
(276, '2.0.4', '2', '0373730252', 4794471, 'Phúc Phan Tô Đăng Hoàng', 'Tốt', 5, '2020-07-31 15:12:03', '2020-07-31 15:12:03'),
(277, '2.0.4', '2', '0867840432', 4710691, 'Diện Lại', NULL, 5, '2020-07-31 15:39:10', '2020-07-31 15:39:10'),
(278, '2.0.4', '2', '0902266345', 2434491, 'Phùng Tài', NULL, 5, '2020-07-31 22:47:45', '2020-07-31 22:47:45'),
(279, '2.0.4', '2', '0774433205', 4784279, '0774433205', NULL, 5, '2020-08-01 00:11:57', '2020-08-01 00:11:57'),
(280, '2.0.2', '1', '0909481575', 4784676, '0909481575', NULL, 3, '2020-08-01 00:39:34', '2020-08-01 00:39:34'),
(281, '2.0.4', '2', '0377134563', 3452216, 'Ngọc Anh Trần Thị', NULL, 3, '2020-08-01 02:32:37', '2020-08-01 02:32:37'),
(282, '2.0.2', '1', '0364676333', 4628454, 'My Phạm Thị Trà', NULL, 1, '2020-08-01 03:42:58', '2020-08-01 03:42:58'),
(283, '2.0.4', '2', '0986947003', 4703779, 'Hieu Trong', NULL, 5, '2020-08-01 05:31:21', '2020-08-01 05:31:21'),
(284, '2.0.4', '2', '0938479943', 3650190, 'n Jyn', NULL, 5, '2020-08-01 06:22:44', '2020-08-01 06:22:44'),
(285, '2.0.4', '2', '0358888072', 4703358, 'Nam Huỳnh', NULL, 5, '2020-08-01 06:57:25', '2020-08-01 06:57:25'),
(286, '2.0.4', '2', '0975134011', 4270514, 'Nguyễn Hiền', NULL, 5, '2020-08-01 09:32:27', '2020-08-01 09:32:27'),
(287, '2.0.4', '2', '0856604546', 4368381, 'Vũ  Hoàng Hải', NULL, 4, '2020-08-01 14:55:12', '2020-08-01 14:55:12'),
(288, '2.0.5', '2', '0348574376', 4748043, 'Phạm  Tuyết', NULL, 5, '2020-08-01 19:57:21', '2020-08-01 19:57:21'),
(289, '2.0.5', '2', '0984633794', 3589156, 'Bạch Cúc Yên', NULL, 5, '2020-08-02 01:08:09', '2020-08-02 01:08:09'),
(290, '2.0.3', '1', '0854597966', 3399052, '01254597966', NULL, 4, '2020-08-02 02:04:13', '2020-08-02 02:04:13'),
(291, '2.0.5', '2', '0983347135', 4797672, 'Lam Đỗ Trần Bảo', NULL, 5, '2020-08-02 02:55:06', '2020-08-02 02:55:06'),
(292, '2.0.5', '2', '0347915201', 4798051, 'Anna Kim', NULL, 3, '2020-08-02 06:47:35', '2020-08-02 06:47:35'),
(293, '2.0.5', '2', '0973611969', 4131372, 'Thành Hồ Thị Thái', NULL, 5, '2020-08-02 09:30:37', '2020-08-02 09:30:37'),
(294, '2.0.5', '2', '0776614609', 4798145, 'Công Pham Thi Phi', NULL, 5, '2020-08-02 09:38:37', '2020-08-02 09:38:37'),
(295, '2.0.3', '1', '0865779254', 4798347, 'Phương Nguyễn Minh', NULL, 4, '2020-08-02 09:56:46', '2020-08-02 09:56:46'),
(296, '2.0.5', '2', '0387302905', 3839970, 'Ngọc Đỗ Thị Bích', NULL, 5, '2020-08-02 10:31:08', '2020-08-02 10:31:08'),
(297, '2.0.5', '2', '0983224373', 3643082, 'bách dương', NULL, 1, '2020-08-02 13:59:41', '2020-08-02 13:59:41'),
(298, '2.0.3', '1', '0969582003', 4797159, 'Kristýna Nguyễn Thảo My -', NULL, 5, '2020-08-02 15:59:44', '2020-08-02 15:59:44'),
(299, '2.0.5', '2', '0359524207', 4618586, 'Vy Võ Triệu', NULL, 5, '2020-08-02 16:09:16', '2020-08-02 16:09:16'),
(300, '2.0.3', '1', '0948768070', 4201498, 'Vũ Nguyên', NULL, 5, '2020-08-03 10:08:36', '2020-08-03 10:08:36'),
(301, '2.0.5', '2', '0795543372', 4800857, 'nương Đào thị mỹ', NULL, 5, '2020-08-03 10:19:49', '2020-08-03 10:19:49'),
(302, '2.0.5', '2', '0949724137', 3463460, '0949724137', NULL, 5, '2020-08-03 12:07:03', '2020-08-03 12:07:03'),
(303, '2.0.5', '2', '0393342641', 4801591, 'Kiệt Phạm bá Tuấn', NULL, 4, '2020-08-03 13:51:17', '2020-08-03 13:51:17'),
(304, '2.0.5', '2', '0382417652', 2395080, 'Duy Trương', 'K thay đổi được ảnh đại diện ở ngoài.', 4, '2020-08-03 14:40:17', '2020-08-03 14:40:17'),
(305, '2.0.5', '2', '0963819902', 4367771, 'Ninh Yến', NULL, 5, '2020-08-03 14:52:00', '2020-08-03 14:52:00'),
(306, '2.0.3', '1', '0886168948', 3528666, 'Khang Nguyên', NULL, 5, '2020-08-03 16:12:53', '2020-08-03 16:12:53'),
(307, '2.0.5', '2', '0389094144', 4119604, 'ThanhTâm', 'Thầy thưởng là người truyền cảm hứng môn toán cho em rất nhiều', 5, '2020-08-04 00:47:59', '2020-08-04 00:47:59'),
(308, '2.0.5', '2', '0867840432', 4710691, 'Lê Nguyễn Xuân', NULL, 5, '2020-08-04 02:38:50', '2020-08-04 02:38:50'),
(309, '2.0.5', '2', '0945848855', 2601659, 'Long Trần', NULL, 5, '2020-08-04 06:41:39', '2020-08-04 06:41:39'),
(310, '2.0.5', '2', '0986205415', 4803281, 'Tang Nhiếp', NULL, 5, '2020-08-04 07:13:37', '2020-08-04 07:13:37'),
(311, '2.0.5', '2', '0899258511', 4794693, 'Thảo Đỗ Hà Ngọc', 'App học rất tốt giúp ích rất nhiều trong quá trình học', 5, '2020-08-04 07:22:56', '2020-08-04 07:22:56'),
(312, '2.0.3', '1', '0366796797', 4705675, 'Anh Quang', NULL, 5, '2020-08-04 09:06:44', '2020-08-04 09:06:44'),
(313, '2.0.3', '1', '0378998127', 4784267, 'Nhiên Thái', 'Chậm ko tả nổi', 1, '2020-08-04 10:18:31', '2020-08-04 10:18:31'),
(314, '2.0.5', '2', '0782528552', 4805015, 'Jane Lê', NULL, 5, '2020-08-04 14:55:10', '2020-08-04 14:55:10'),
(315, '2.0.5', '2', '0981924323', 4804999, 'Khanh Nguyễn Viết', 'Tốt', 5, '2020-08-04 15:16:02', '2020-08-04 15:16:02'),
(316, '2.0.5', '2', '0964154497', 4274272, 'Thanh Hà Thị Thanh', NULL, 5, '2020-08-05 02:19:39', '2020-08-05 02:19:39'),
(317, '2.0.5', '2', '0839435996', 4768835, 'Nam Vũ Văn', NULL, 3, '2020-08-05 02:35:28', '2020-08-05 02:35:28'),
(318, '2.0.5', '2', '0839435996', 4768835, 'Nam Vũ Văn', NULL, 3, '2020-08-05 02:35:28', '2020-08-05 02:35:28'),
(319, '2.0.5', '2', '0337109896', 4804186, '0337109896', NULL, 5, '2020-08-05 03:08:42', '2020-08-05 03:08:42'),
(320, '2.0.5', '2', '0916394581', 3061343, 'Hồng Hoàng', NULL, 2, '2020-08-05 04:22:50', '2020-08-05 04:22:50'),
(321, '2.0.5', '2', '0364753769', 4673566, 'Ny Nguyễn Hống', NULL, 5, '2020-08-05 05:42:22', '2020-08-05 05:42:22'),
(322, '2.0.5', '2', '0333017670', 4129192, 'Trinh Nguyễn Thị Kiều', NULL, 5, '2020-08-05 08:07:47', '2020-08-05 08:07:47'),
(323, '2.0.3', '1', '0962701272', 2936137, 'Bảo Trần Hoài', NULL, 5, '2020-08-05 08:36:15', '2020-08-05 08:36:15'),
(324, '2.0.5', '2', '0969783174', 4740794, 'Hương Lan', NULL, 5, '2020-08-05 10:41:55', '2020-08-05 10:41:55'),
(325, '2.0.3', '1', '0971181866', 4386833, '0971181866', NULL, 5, '2020-08-05 15:40:32', '2020-08-05 15:40:32'),
(326, '2.0.3', '1', '0868801519', 4509349, 'Anh Tran Thuc', NULL, 5, '2020-08-05 18:40:23', '2020-08-05 18:40:23'),
(327, '2.0.5', '2', '0977978236', 4806515, 'Linh Phương', NULL, 5, '2020-08-06 03:07:50', '2020-08-06 03:07:50'),
(328, '2.0.3', '1', '0983377582', 4491514, 'Quân Nguyễn Anh', NULL, 5, '2020-08-06 07:21:50', '2020-08-06 07:21:50'),
(329, '2.0.5', '2', '0348278146', 4776398, 'TUYẾN LÊ KIM', NULL, 4, '2020-08-06 07:47:41', '2020-08-06 07:47:41'),
(330, '2.0.3', '1', '0342872019', 4743976, 'Stormy', NULL, 5, '2020-08-06 10:07:10', '2020-08-06 10:07:10'),
(331, '2.0.5', '2', '0365397656', 4793830, 'Ly Lưu Khánh', NULL, 4, '2020-08-06 13:01:12', '2020-08-06 13:01:12'),
(332, '2.0.5', '2', '0977901795', 4783109, '0977901795', NULL, 5, '2020-08-06 13:41:02', '2020-08-06 13:41:02'),
(333, '2.0.5', '2', '0962461447', 4313448, 'Minh Lâm Phát', 'Great!', 5, '2020-08-06 14:34:11', '2020-08-06 14:34:11'),
(334, '2.0.3', '1', '0379089342', 4787269, 'Trọng Huy', NULL, 5, '2020-08-06 23:48:37', '2020-08-06 23:48:37'),
(335, '2.0.3', '1', '0986823448', 4781131, 'Anh Nông Trâm', NULL, 5, '2020-08-07 05:09:30', '2020-08-07 05:09:30'),
(336, '2.0.5', '2', '0764999676', 4612322, 'Dung  Nguyễn Kim', NULL, 5, '2020-08-07 09:49:28', '2020-08-07 09:49:28'),
(337, '2.0.3', '1', '0907382219', 4698486, 'Tiên Trần Cẩm', NULL, 5, '2020-08-07 10:16:14', '2020-08-07 10:16:14'),
(338, '2.0.3', '1', '0907382219', 4698486, 'Tiên Trần Cẩm', NULL, 5, '2020-08-07 10:16:16', '2020-08-07 10:16:16'),
(339, '2.0.3', '1', '0918036452', 4772470, '0918036452', NULL, 5, '2020-08-07 14:11:31', '2020-08-07 14:11:31'),
(340, '2.0.5', '2', '0382430157', 3584112, 'nghĩa trần đại', NULL, 5, '2020-08-07 15:43:42', '2020-08-07 15:43:42'),
(341, '2.0.8', '2', '0819813737', 4799059, 'Khánh Linh Phan', NULL, 5, '2020-08-08 00:18:03', '2020-08-08 00:18:03'),
(342, '2.0.5', '2', '0936813732', 4814230, 'Thắng Lợi Nguyễn', NULL, 4, '2020-08-08 02:00:19', '2020-08-08 02:00:19'),
(343, '2.0.4', '1', '0905207706', 4682044, 'Nguyên Hồ Thái Thảo', 'Xuất sắc😀😀😀', 5, '2020-08-08 05:22:59', '2020-08-08 05:22:59'),
(344, '2.0.8', '2', '0523129455', 4726589, 'Nguyễn Đức Tân', NULL, 5, '2020-08-08 05:48:10', '2020-08-08 05:48:10'),
(345, '2.0.8', '2', '0563345618', 4795992, 'Lợi Nguyễn', NULL, 5, '2020-08-08 06:47:42', '2020-08-08 06:47:42'),
(346, '2.0.4', '1', '0397929246', 4422569, 'Hải Huỳnh Chí', NULL, 5, '2020-08-08 10:18:42', '2020-08-08 10:18:42'),
(347, '2.0.4', '1', '0968440748', 4815391, 'Trang Nguyễn', NULL, 4, '2020-08-08 10:35:23', '2020-08-08 10:35:23'),
(348, '2.0.8', '2', '0787027524', 2732977, 'Nhi  Nguyễn', NULL, 5, '2020-08-08 12:03:55', '2020-08-08 12:03:55'),
(349, '2.0.8', '2', '0368172549', 4816907, 'dinhdang Truong', NULL, 5, '2020-08-09 02:36:57', '2020-08-09 02:36:57'),
(350, '2.0.8', '2', '0362277301', 2162560, 'Trung Hiếu Nguyễm', NULL, 5, '2020-08-09 02:37:53', '2020-08-09 02:37:53'),
(351, '2.0.4', '1', '0858071345', 4816951, 'Đạt Hà Xuan', NULL, 3, '2020-08-09 03:00:13', '2020-08-09 03:00:13'),
(352, '2.0.4', '1', '0399178432', 4817305, 'Hằng Thanh', NULL, 5, '2020-08-09 04:58:41', '2020-08-09 04:58:41'),
(353, '2.0.8', '2', '0964675638', 4817354, 'Quyên Nguyễn Lệ', NULL, 5, '2020-08-09 05:19:52', '2020-08-09 05:19:52'),
(354, '2.0.8', '2', '0777506669', 3522274, 'Nguyen Minh Huy Huynh', NULL, 5, '2020-08-09 10:59:04', '2020-08-09 10:59:04'),
(355, '2.0.8', '2', '0355779243', 3154345, 'Dũng Nguyễn Nho', NULL, 5, '2020-08-09 11:05:42', '2020-08-09 11:05:42'),
(356, '2.0.8', '2', '0923362770', 4817861, 'Anh Nguyễn minh', NULL, 5, '2020-08-09 12:37:06', '2020-08-09 12:37:06'),
(357, '2.0.8', '2', '0339741610', 4814315, 'Quynh Anh', NULL, 5, '2020-08-09 13:22:01', '2020-08-09 13:22:01'),
(358, '2.0.4', '2', '0978827408', 4779636, '0978827408', NULL, 5, '2020-08-09 13:42:41', '2020-08-09 13:42:41'),
(359, '2.0.4', '1', '0843475178', 4799664, 'Nam Trần Hoài', NULL, 5, '2020-08-09 13:45:29', '2020-08-09 13:45:29'),
(360, '2.0.8', '2', '0776584517', 4815769, 'Phan  Phương', NULL, 1, '2020-08-09 14:13:44', '2020-08-09 14:13:44'),
(361, '2.0.4', '1', '0868905254', 4787603, 'Huy Xa Đinh Vũ', NULL, 5, '2020-08-09 14:56:38', '2020-08-09 14:56:38'),
(362, '2.0.4', '2', '0372435352', 4554692, '0372435352', NULL, 5, '2020-08-09 18:02:42', '2020-08-09 18:02:42'),
(363, '2.0.4', '1', '0983550193', 4786013, 'Linh Diệu', NULL, 5, '2020-08-10 00:23:55', '2020-08-10 00:23:55'),
(364, '2.0.8', '2', '0818568562', 4818031, 'Vương Huỳnh Quốc', NULL, 5, '2020-08-10 02:57:33', '2020-08-10 02:57:33'),
(365, '2.0.8', '2', '0704615170', 4815512, 'long nguyen', 'Bổ ích', 5, '2020-08-10 03:20:54', '2020-08-10 03:20:54'),
(366, '2.0.8', '2', '0932653747', 4820391, 'Doominjoon', NULL, 4, '2020-08-10 04:33:57', '2020-08-10 04:33:57'),
(367, '2.0.4', '1', '0349320182', 4183466, 'Thảo Lê Nguyễn Thạch', NULL, 5, '2020-08-10 08:02:01', '2020-08-10 08:02:01'),
(368, '2.0.4', '2', '0373631300', 4821343, 'Vy Hồ', NULL, 5, '2020-08-10 09:58:28', '2020-08-10 09:58:28'),
(369, '2.0.8', '2', '0888176781', 4821438, 'Ngọc Ánh', NULL, 5, '2020-08-10 10:36:30', '2020-08-10 10:36:30'),
(370, '2.0.4', '1', '0335580447', 4815916, 'Yến Nhi', NULL, 5, '2020-08-10 11:05:02', '2020-08-10 11:05:02'),
(371, '2.0.8', '2', '0362625664', 4625281, 'Tơ Lụa BBắp', NULL, 5, '2020-08-10 11:34:33', '2020-08-10 11:34:33'),
(372, '2.0.8', '2', '0706235940', 4821967, 'Hoa Ánh', NULL, 4, '2020-08-10 12:10:30', '2020-08-10 12:10:30'),
(373, '2.0.8', '2', '0869172850', 4463925, 'Ngọc Trâm Thái Trần', NULL, 5, '2020-08-10 12:23:30', '2020-08-10 12:23:30'),
(374, '2.0.4', '1', '0393395582', 4819795, 'Luân Võ Lưu Duy', NULL, 5, '2020-08-10 13:00:36', '2020-08-10 13:00:36'),
(375, '2.0.8', '2', '0354897073', 4719469, 'Trần Hiên', NULL, 5, '2020-08-10 14:43:07', '2020-08-10 14:43:07'),
(376, '2.0.8', '2', '0962803717', 4822596, 'Linh Nguyễn Thị', NULL, 5, '2020-08-10 14:51:08', '2020-08-10 14:51:08'),
(377, '2.0.8', '2', '0849596988', 4006152, 'Sơn Nguyễn Hà', NULL, 3, '2020-08-10 15:22:59', '2020-08-10 15:22:59'),
(378, '2.0.8', '2', '0387015401', 4822734, 'Hưng Hoàng', NULL, 5, '2020-08-10 15:34:47', '2020-08-10 15:34:47'),
(379, '2.0.8', '2', '0969593753', 4822768, 'Giang Quỳnh', NULL, 4, '2020-08-10 15:45:27', '2020-08-10 15:45:27'),
(380, '2.0.3', '1', '0376456126', 2615392, 'Tùng Vũ Thanh', 'Rất hay, và bổ ích,các cô dậy rất hiểu', 5, '2020-08-10 17:36:00', '2020-08-10 17:36:00'),
(381, '2.0.4', '1', '0339928846', 3489912, '01639928846', NULL, 1, '2020-08-11 01:36:15', '2020-08-11 01:36:15'),
(382, '2.0.8', '2', '0357849569', 4510303, '0357849569', NULL, 5, '2020-08-11 03:07:29', '2020-08-11 03:07:29'),
(383, '2.0.8', '2', '0984202433', 4603135, 'Bình Nguyễn Đức', NULL, 5, '2020-08-11 03:28:51', '2020-08-11 03:28:51'),
(384, '2.0.8', '2', '0984202433', 4603135, 'Bình Nguyễn Đức', NULL, 5, '2020-08-11 03:28:53', '2020-08-11 03:28:53'),
(385, '2.0.4', '1', '0961687925', 4821263, '0961687925', NULL, 5, '2020-08-11 03:31:01', '2020-08-11 03:31:01'),
(386, '2.0.4', '1', '0961687925', 4821263, '0961687925', NULL, 5, '2020-08-11 03:31:03', '2020-08-11 03:31:03'),
(387, '2.0.8', '2', '0963531943', 4824070, 'Nguyễn Tuyết', NULL, 1, '2020-08-11 04:28:52', '2020-08-11 04:28:52'),
(388, '2.0.8', '2', '0977877856', 4824220, 'Hằng Bui thị thu', NULL, 4, '2020-08-11 05:20:45', '2020-08-11 05:20:45'),
(389, '2.0.8', '2', '0773564656', 4538355, 'Đức Hứa Minh', NULL, 5, '2020-08-11 07:39:55', '2020-08-11 07:39:55'),
(390, '2.0.8', '2', '0932653191', 4775831, 'Cherry Lê', NULL, 5, '2020-08-11 08:04:42', '2020-08-11 08:04:42'),
(391, '2.0.8', '2', '0853482140', 4615352, 'Trí Vũ Minh', NULL, 5, '2020-08-11 09:39:55', '2020-08-11 09:39:55'),
(392, '2.0.8', '2', '0364152539', 4810721, 'Hieu Pham', NULL, 1, '2020-08-11 09:43:34', '2020-08-11 09:43:34'),
(393, '2.0.4', '1', '0963035290', 4824131, 'Victoria Hiền', NULL, 5, '2020-08-11 10:38:11', '2020-08-11 10:38:11'),
(394, '2.0.8', '2', '0399853460', 4825485, 'Khôi Nguyễn', NULL, 5, '2020-08-11 10:51:37', '2020-08-11 10:51:37'),
(395, '2.0.8', '2', NULL, 4825508, 'Hằng Hoàng', NULL, 5, '2020-08-11 11:02:32', '2020-08-11 11:02:32'),
(396, '2.0.4', '1', '0989951688', 4825905, 'Phương Trần Khánh', NULL, 5, '2020-08-11 12:58:18', '2020-08-11 12:58:18'),
(397, '2.0.4', '1', '0934472381', 4826280, 'Quỳnh Nguyễn Thị Diễm', NULL, 3, '2020-08-11 13:41:20', '2020-08-11 13:41:20'),
(398, '2.0.4', '1', '0982179981', 2981133, 'linh lê phương', NULL, 5, '2020-08-11 13:59:05', '2020-08-11 13:59:05'),
(399, '2.0.4', '1', '0788586666', 4799867, '0788586666', NULL, 5, '2020-08-11 14:11:07', '2020-08-11 14:11:07'),
(400, '2.0.8', '2', '0352407634', 4826562, 'Thị Hồng Nghĩa Nguyễn', 'Tốt', 5, '2020-08-11 14:58:47', '2020-08-11 14:58:47'),
(401, '2.0.8', '2', '0815958844', 4791153, 'HD  Chapter', NULL, 5, '2020-08-11 15:47:10', '2020-08-11 15:47:10'),
(402, '2.0.4', '1', '0333787571', 4822508, '0333787571', NULL, 4, '2020-08-11 15:54:33', '2020-08-11 15:54:33'),
(403, '2.0.8', '2', NULL, 4826738, 'đức Chu thiên', NULL, 5, '2020-08-11 16:11:33', '2020-08-11 16:11:33'),
(404, '2.0.4', '1', '0817170958', 4827220, 'Hường Trần', NULL, 3, '2020-08-12 01:12:00', '2020-08-12 01:12:00'),
(405, '2.0.4', '1', '0817170958', 4827220, 'Hường Trần', NULL, 3, '2020-08-12 01:12:02', '2020-08-12 01:12:02'),
(406, '2.0.8', '2', '0817497701', 4827605, 'Luc Phan', NULL, 5, '2020-08-12 02:47:41', '2020-08-12 02:47:41'),
(407, '2.0.8', '2', '0947878820', 4827698, 'Hưng Trần', 'Rất hay, em xin cám ơn HOCMAI rất nhiều ạ', 5, '2020-08-12 03:14:00', '2020-08-12 03:14:00'),
(408, '2.0.8', '2', '0375382943', 3622274, 'Viet Tran', NULL, 5, '2020-08-12 04:11:38', '2020-08-12 04:11:38'),
(409, '2.0.8', '2', '0372872759', 4826201, 'Huong Mai thi', NULL, 5, '2020-08-12 04:34:57', '2020-08-12 04:34:57'),
(410, '2.0.8', '2', '0394430482', 4828361, 'Lập Thạch Duyênn', NULL, 5, '2020-08-12 06:13:00', '2020-08-12 06:13:00'),
(411, '2.0.8', '2', '0947492876', 4828469, 'Lú Sùng Thị', NULL, 5, '2020-08-12 06:46:20', '2020-08-12 06:46:20'),
(412, '2.0.4', '1', '0983122749', 4548289, 'Quý Nguyễn Bảo', NULL, 5, '2020-08-12 07:03:08', '2020-08-12 07:03:08'),
(413, '2.0.8', '2', '0332152095', 4828718, 'Nhi Nguyen', NULL, 4, '2020-08-12 07:45:31', '2020-08-12 07:45:31'),
(414, '2.0.8', '2', NULL, 4828754, 'oanh Nguyễn Thị Kiều', NULL, 5, '2020-08-12 07:55:20', '2020-08-12 07:55:20'),
(415, '2.0.8', '2', '0934712437', 4645642, 'Sky Anh', NULL, 4, '2020-08-12 08:02:43', '2020-08-12 08:02:43'),
(416, '2.0.4', '1', '0976654792', 4623742, 'Huynh Hai', 'Tốt', 5, '2020-08-12 08:47:17', '2020-08-12 08:47:17'),
(417, '2.0.4', '1', '0398087024', 4828816, 'Phúc  An', NULL, 5, '2020-08-12 09:04:30', '2020-08-12 09:04:30');
INSERT INTO `rate_apps` (`id`, `version`, `os`, `customer_username`, `customer_id`, `customer_name`, `customer_comment`, `rate`, `created_at`, `updated_at`) VALUES
(418, '2.0.8', '2', '0943974108', 4828077, 'Ngọc Đỗ Hồng', 'Tốt', 5, '2020-08-12 10:52:40', '2020-08-12 10:52:40'),
(419, '2.0.4', '1', '0921787869', 4829433, 'Trang Đoàn Huyền', NULL, 5, '2020-08-12 11:10:25', '2020-08-12 11:10:25'),
(420, '2.0.8', '2', '0941021703', 4821806, 'Lan Nguyễn Hương', NULL, 5, '2020-08-12 12:57:32', '2020-08-12 12:57:32'),
(421, '2.0.4', '1', '0977095105', 4829947, 'Hải Ngọc Nguyễn', NULL, 5, '2020-08-12 13:31:41', '2020-08-12 13:31:41'),
(422, '2.0.8', '2', '0971238656', 4586124, 'Dung Thùy', NULL, 4, '2020-08-12 15:13:39', '2020-08-12 15:13:39'),
(423, '2.0.8', '2', '0947230833', 4830765, 'Băng Như', 'Làm gì có miễn phí ,toàn mất tiền', 1, '2020-08-12 16:57:25', '2020-08-12 16:57:25'),
(424, '2.0.8', '2', '0823289158', 4678352, 'Chii Phươngg', NULL, 4, '2020-08-13 01:36:30', '2020-08-13 01:36:30'),
(425, '2.0.8', '2', '0982028461', 4828834, 'Khang Phan', NULL, 5, '2020-08-13 02:09:21', '2020-08-13 02:09:21'),
(426, '2.0.4', '1', '0907125506', 4697935, 'An Dương Phúc', NULL, 2, '2020-08-13 02:38:16', '2020-08-13 02:38:16'),
(427, '2.0.8', '2', '0327979536', 4814879, 'Đoàn Bùi', NULL, 5, '2020-08-13 03:46:59', '2020-08-13 03:46:59'),
(428, '2.0.8', '2', '0399075624', 4561935, 'Thuy Bich', 'Ứng dụng ok, nhưng lâu k vô lại tự đăng xuất, mong nhà phát triển có thể điều chỉnh lại. 🥰🥰', 5, '2020-08-13 04:06:27', '2020-08-13 04:06:27'),
(429, '2.0.8', '2', '0845012922', 4832008, 'Tâm Vũ Thị Thanh', 'Ứng dụng này rất tiện lợi mong ứng dụng có thêm nhiều chức năng hơn', 5, '2020-08-13 04:38:31', '2020-08-13 04:38:31'),
(430, '2.0.4', '1', '0936892223', 4826084, 'Dung Phương', NULL, 3, '2020-08-13 05:16:10', '2020-08-13 05:16:10'),
(431, '2.0.8', '2', '0986610669', 4829711, 'Xuân Mai Nguyễn Thị', NULL, 5, '2020-08-13 06:09:51', '2020-08-13 06:09:51'),
(432, '2.0.8', '2', '0862765116', 4834049, 'anhnguyencta anhnguyencta', NULL, 5, '2020-08-13 13:12:45', '2020-08-13 13:12:45'),
(433, '2.0.8', '2', '0925936458', 4833929, 'Đoan Lại', NULL, 5, '2020-08-13 13:29:35', '2020-08-13 13:29:35'),
(434, '2.0.8', '2', '0355733881', 4737291, 'Thọ  Hữu', NULL, 5, '2020-08-13 13:50:38', '2020-08-13 13:50:38'),
(435, '2.0.4', '1', '948323686', 4673457, 'Khánh Nguyễn Ngân', NULL, 4, '2020-08-13 15:28:43', '2020-08-13 15:28:43'),
(436, '2.0.8', '2', '0353912760', 4716434, 'Thuần Vũ Như', NULL, 5, '2020-08-13 15:44:34', '2020-08-13 15:44:34'),
(437, '2.0.8', '2', '0865657736', 4834491, 'Jawonee Sun', NULL, 5, '2020-08-13 15:58:54', '2020-08-13 15:58:54'),
(438, '2.0.4', '1', '0907644605', 3518198, 'Thông Nguyễn Trung', NULL, 5, '2020-08-13 16:48:38', '2020-08-13 16:48:38'),
(439, '2.0.8', '2', '0565259608', 4835102, 'Quả Bách', NULL, 5, '2020-08-14 00:41:23', '2020-08-14 00:41:23'),
(440, '2.0.8', '2', '0325489295', 4835143, 'Ngọc Minh', NULL, 5, '2020-08-14 01:02:12', '2020-08-14 01:02:12'),
(441, '2.0.8', '2', '0363934713', 4745289, 'Đạt Nguyễn Tấn Thành', NULL, 4, '2020-08-14 01:24:27', '2020-08-14 01:24:27'),
(442, '2.0.8', '2', '0328189447', 4835308, 'Phương Nhi Nguyễn Thị', NULL, 5, '2020-08-14 02:00:01', '2020-08-14 02:00:01'),
(443, '2.0.4', '1', '0336691189', 4781770, 'Thuong Nguyen Ha', NULL, 5, '2020-08-14 03:44:42', '2020-08-14 03:44:42'),
(444, '2.0.8', '2', '0395769212', 4716865, 'Hoa Nguyễn Diệu', 'Hay nhưng thi thoảng video hay bị lỗi', 4, '2020-08-14 04:05:13', '2020-08-14 04:05:13'),
(445, '2.0.4', '1', '0353772887', 4836125, 'Diệu Diệu', NULL, 5, '2020-08-14 05:05:52', '2020-08-14 05:05:52'),
(446, '2.0.4', '1', '0929220065', 4013248, 'Long Phan Quang Minh', NULL, 5, '2020-08-14 06:20:52', '2020-08-14 06:20:52'),
(447, '2.0.8', '2', '0339971322', 4835357, 'Trúc Ly Nguyễn', NULL, 5, '2020-08-14 06:29:04', '2020-08-14 06:29:04'),
(448, '2.0.8', '2', '0392895159', 4836378, 'Huỳnh Như', NULL, 4, '2020-08-14 06:38:15', '2020-08-14 06:38:15'),
(449, '2.0.4', '1', '0374603106', 4836443, 'Hạnh Nguyên Phan', NULL, 5, '2020-08-14 06:40:21', '2020-08-14 06:40:21'),
(450, '2.0.8', '2', '0392355549', 4836454, 'Hoàng Kim Nguyễn', NULL, 3, '2020-08-14 06:51:04', '2020-08-14 06:51:04'),
(451, '2.0.8', '2', '0979843055', 3114233, 'Linh Phùng Khánh', NULL, 5, '2020-08-14 07:41:41', '2020-08-14 07:41:41'),
(452, '2.0.4', '1', '0964832231', 2902470, 'Bùi Phong', NULL, 5, '2020-08-14 08:01:11', '2020-08-14 08:01:11'),
(453, '2.0.4', '1', '0964832231', 2902470, 'Bùi Phong', NULL, 5, '2020-08-14 08:01:13', '2020-08-14 08:01:13'),
(454, '2.0.8', '2', '0372435352', 4554692, '0372435352', NULL, 5, '2020-08-14 08:04:54', '2020-08-14 08:04:54'),
(455, '2.0.8', '2', '0392419422', 4837524, 'Hoàng Hải', NULL, 5, '2020-08-14 11:28:11', '2020-08-14 11:28:11'),
(456, '2.0.8', '2', '0988525680', 4013926, 'An Nguyễn Đinh Hà', NULL, 5, '2020-08-14 11:51:19', '2020-08-14 11:51:19'),
(457, '2.0.8', '2', '0376795242', 4692205, '0376795242', NULL, 5, '2020-08-14 12:19:39', '2020-08-14 12:19:39'),
(458, '2.0.4', '1', '0913747356', 4827704, '0913747356', NULL, 5, '2020-08-14 12:42:16', '2020-08-14 12:42:16'),
(459, '2.0.8', '2', '0383496939', 2983030, 'huyền phạm khánh', NULL, 5, '2020-08-14 12:49:05', '2020-08-14 12:49:05'),
(460, '2.0.8', '2', '0332953603', 3541598, '01632953603', NULL, 5, '2020-08-14 13:18:58', '2020-08-14 13:18:58'),
(461, '2.0.8', '2', '0393353699', 4828955, 'Vân Nguyễn', 'Rất hữu dụng', 5, '2020-08-14 13:32:21', '2020-08-14 13:32:21'),
(462, '2.0.8', '2', '0332927971', 4838332, 'Em GáI BảO ThÙy', NULL, 5, '2020-08-14 14:05:41', '2020-08-14 14:05:41'),
(463, '2.0.4', '1', '0839764959', 4837699, 'Thảo Thanh', NULL, 1, '2020-08-14 14:06:26', '2020-08-14 14:06:26'),
(464, '2.0.4', '2', '0945316208', 4295420, 'Tuấn Nguyễn Thanh', NULL, 5, '2020-08-14 15:00:15', '2020-08-14 15:00:15'),
(465, '2.0.4', '2', '0945316208', 4295420, 'Tuấn Nguyễn Thanh', NULL, 5, '2020-08-14 15:00:17', '2020-08-14 15:00:17'),
(466, '2.0.9', '2', '0336179118', 4838975, 'Huong Le', NULL, 5, '2020-08-15 00:28:31', '2020-08-15 00:28:31'),
(467, '2.0.8', '2', '0962203593', 4839134, 'BẮp LiNh', 'Dạy cả lý thuyết nữa thì tuyệt', 5, '2020-08-15 01:50:41', '2020-08-15 01:50:41'),
(468, '2.0.9', '2', '0369704913', 4825891, 'Trang Đoàn', NULL, 5, '2020-08-15 02:05:57', '2020-08-15 02:05:57'),
(469, '2.0.4', '1', '0372123319', 4839297, 'Hường Nguyễn Thu', NULL, 5, '2020-08-15 02:37:21', '2020-08-15 02:37:21'),
(470, '2.0.8', '2', '0866437697', 4716679, 'Lê  Khánh', NULL, 5, '2020-08-15 04:17:28', '2020-08-15 04:17:28'),
(471, '2.0.9', '2', '0838685100', 2997704, 'Giang Trần', 'Đã khá hoàn chỉnh trong phần hỏi trợ giảng\nNhưng chưa xem được các câu hỏi trước đó', 4, '2020-08-15 04:44:49', '2020-08-15 04:44:49'),
(472, '2.0.9', '2', '0967479067', 4837808, 'Anh Nguyễn Hoàng', NULL, 5, '2020-08-15 05:10:02', '2020-08-15 05:10:02'),
(473, '2.0.9', '2', '0777454481', 4818683, 'Thảo Hoàng Nguyên', NULL, 2, '2020-08-15 06:30:39', '2020-08-15 06:30:39'),
(474, '2.0.9', '2', '0931978054', 4839035, 'Đinh Thị Diệu Phúc', NULL, 5, '2020-08-15 06:44:21', '2020-08-15 06:44:21'),
(475, '2.0.4', '1', '0372683091', 4770130, 'Lâm Nguyễn Thanh', NULL, 5, '2020-08-15 07:06:14', '2020-08-15 07:06:14'),
(476, '2.0.9', '2', '0388775253', 4840197, 'Hiền Đoàn', NULL, 5, '2020-08-15 07:20:30', '2020-08-15 07:20:30'),
(477, '2.0.8', '2', '0768525352', 4812697, 'Đức Ông Tấn', 'Như ccjsbisns bú k', 5, '2020-08-15 10:09:06', '2020-08-15 10:09:06'),
(478, '2.0.9', '2', '0838651680', 4812361, 'Nhân Nguyễn Hiền', NULL, 2, '2020-08-15 11:04:02', '2020-08-15 11:04:02'),
(479, '2.0.9', '2', '0983466641', 4841030, 'Hiêu Trung', NULL, 5, '2020-08-15 11:28:05', '2020-08-15 11:28:05'),
(480, '2.0.4', '1', '0912519254', 4806348, '0912519254', 'Các thầy cô giảng rất dễ hiểu', 4, '2020-08-15 11:48:51', '2020-08-15 11:48:51'),
(481, '2.0.9', '2', '0944932436', 4841086, 'Moon''s Love', NULL, 1, '2020-08-15 12:57:58', '2020-08-15 12:57:58'),
(482, '2.0.9', '2', '0396318205', 4841393, 'linh Nguyễn thị mai', NULL, 5, '2020-08-15 13:30:06', '2020-08-15 13:30:06'),
(483, '2.0.4', '1', '0965986537', 3453084, 'duong thoa', NULL, 5, '2020-08-15 16:21:31', '2020-08-15 16:21:31'),
(484, '2.0.4', '1', '0367018109', 4693441, 'Linh Trần Hải', NULL, 5, '2020-08-16 02:28:32', '2020-08-16 02:28:32'),
(485, '2.0.9', '2', '0866954032', 4842985, 'Quỳnh Trương Ngọc', 'Tuyệt vời', 5, '2020-08-16 04:21:03', '2020-08-16 04:21:03'),
(486, '2.0.9', '2', '0375911393', 4843061, 'Nguyen Phat', NULL, 5, '2020-08-16 04:51:50', '2020-08-16 04:51:50'),
(487, '2.0.9', '2', '0918134123', 4843133, 'Di Đà Tịnh Độ', 'Nội dung hay\nGiảng rõ từng chi tiết \nTôi thích ứng dụng này', 5, '2020-08-16 07:38:27', '2020-08-16 07:38:27'),
(488, '2.0.9', '2', '0917647293', 4842080, 'Trang Phương', 'Miễn phí cái đ** j', 1, '2020-08-16 07:41:53', '2020-08-16 07:41:53'),
(489, '2.0.9', '2', '0336467050', 4843576, 'Ngoc Bích Lương', 'Có thể nâng cấp nhận thông báo đc v thì tốt quá', 4, '2020-08-16 10:20:14', '2020-08-16 10:20:14'),
(490, '2.0.4', '1', '0967437173', 4831909, '0967437173', NULL, 5, '2020-08-16 10:38:22', '2020-08-16 10:38:22'),
(491, '2.0.9', '2', '0982114799', 4329186, 'trọng đồng phú', 'Hay', 5, '2020-08-16 11:14:26', '2020-08-16 11:14:26'),
(492, '2.0.9', '2', '0866886059', 4843830, 'Định Trần Bảo', 'Quá tệ, chức năng thanh toán lỗi, dữ liệu không đồng bộ với web. Đăng ký khoá học 1 năm không được', 1, '2020-08-16 11:47:33', '2020-08-16 11:47:33'),
(493, '2.0.9', '2', '0582449523', 4680052, 'Kil Trần Văn', 'Màn hình hiển thị bài giảng lần này nhìn khá khó chịu. Mong hãy trả lại hình ảnh hiển thị bài giảng như cũ', 2, '2020-08-16 13:11:13', '2020-08-16 13:11:13'),
(494, '2.0.4', '1', '0976397648', 4375236, 'hà nguyễn trong', NULL, 5, '2020-08-16 13:35:16', '2020-08-16 13:35:16'),
(495, '2.0.9', '2', '0582858170', 4844140, 'Thùy Linh Nguyễn', NULL, 5, '2020-08-16 13:39:16', '2020-08-16 13:39:16'),
(496, '2.0.9', '2', '0969676797', 4832627, '0969676797', NULL, 5, '2020-08-16 13:58:17', '2020-08-16 13:58:17'),
(497, '2.0.4', '1', '0344179015', 4723697, 'Anh Phạm Trâm', NULL, 4, '2020-08-16 14:12:09', '2020-08-16 14:12:09'),
(498, '2.0.4', '1', '0912665855', 3129126, 'Minh Pham', NULL, 5, '2020-08-16 14:30:28', '2020-08-16 14:30:28'),
(499, '2.0.4', '1', '0334287267', 4819093, 'Khánh''s Huyền''s Đỗ''s', NULL, 5, '2020-08-16 14:52:37', '2020-08-16 14:52:37'),
(500, '2.0.4', '1', '0353421235', 4843808, 'Yukimo Yukimoshita', 'Hay lắm', 5, '2020-08-16 15:33:09', '2020-08-16 15:33:09'),
(501, '2.0.9', '2', '0942062334', 4423710, 'Linh Đoàn Khánh', 'Thầy cô dạy có tâm và dễ hiểu quá uwu', 5, '2020-08-16 16:48:18', '2020-08-16 16:48:18'),
(502, '2.0.9', '2', '0844965657', 4599397, 'Mai Hoa Đặng', NULL, 5, '2020-08-16 17:16:06', '2020-08-16 17:16:06'),
(503, '2.0.9', '2', '0383221076', 4845409, 'Đường Nông Đinh Đương', NULL, 5, '2020-08-17 00:31:42', '2020-08-17 00:31:42'),
(504, '2.0.4', '1', '0989716159', 4375937, 'Ly Đoàn Khánh', NULL, 5, '2020-08-17 01:37:03', '2020-08-17 01:37:03'),
(505, '2.0.4', '1', '0935744530', 3476894, '0935744530', NULL, 5, '2020-08-17 01:39:51', '2020-08-17 01:39:51'),
(506, '2.0.4', '1', '0392258068', 4410490, '0392258068', NULL, 5, '2020-08-17 01:50:12', '2020-08-17 01:50:12'),
(507, '2.0.9', '2', '0342002412', 4841389, 'Nguyên Trần Ngọc Khánh', 'Quảng cáo có nói là mỗi môn có các khoá học nhưng tôi ko thấy cái nào , Quá TỆ', 1, '2020-08-17 02:10:03', '2020-08-17 02:10:03'),
(508, '2.0.9', '2', '0976612255', 4844981, 'Tuấn Hò Sỹ Anh', 'Tất cả họ tên thông tin giới tính cử tôi đều sai', 1, '2020-08-17 02:24:13', '2020-08-17 02:24:13'),
(509, '2.0.4', '1', '0988110781', 4844046, 'Dương Nhật', NULL, 5, '2020-08-17 02:39:55', '2020-08-17 02:39:55'),
(510, '2.0.9', '2', '0376562845', 4845056, 'Thị Nguyệt Nịnh', NULL, 5, '2020-08-17 02:59:20', '2020-08-17 02:59:20'),
(511, '2.0.9', '2', '0394349813', 4638865, 'Lương Lê', 'Không có bài giảng dạy free à,', 1, '2020-08-17 05:42:28', '2020-08-17 05:42:28'),
(512, '2.0.9', '2', NULL, 4846339, 'Đỗ Trung Hiếu', NULL, 5, '2020-08-17 06:06:48', '2020-08-17 06:06:48'),
(513, '2.0.9', '2', '0986715207', 3981818, 'Huỳnh Nguyễn Hữu', NULL, 5, '2020-08-17 06:51:32', '2020-08-17 06:51:32'),
(514, '2.0.9', '2', '0365696332', 4732174, 'Oanh Nguyễn', NULL, 4, '2020-08-17 08:06:42', '2020-08-17 08:06:42'),
(515, '2.0.9', '2', '0825603643', 4845735, 'Bách Nguyễn Xuân', NULL, 1, '2020-08-17 08:31:59', '2020-08-17 08:31:59'),
(516, '2.0.9', '2', '0388568903', 4723589, 'Nam Quyền Đình', NULL, 5, '2020-08-17 08:33:38', '2020-08-17 08:33:38'),
(517, '2.0.9', '2', '0393791457', 4846878, 'anh Nguyễn Kiều mai phương', 'Mình rất yêu 😍 thích ứng dụng này.', 5, '2020-08-17 09:15:46', '2020-08-17 09:15:46'),
(518, '2.0.9', '2', '0378467791', 4804918, 'huyền Lê thị', 'Rất bổ ích', 5, '2020-08-17 09:22:08', '2020-08-17 09:22:08'),
(519, '2.0.4', '1', '0363963063', 4496190, 'Dương Đoàn Mạnh', NULL, 5, '2020-08-17 11:39:34', '2020-08-17 11:39:34'),
(520, '2.0.9', '2', '0333836962', 4845568, 'An Nguyễn Văn', NULL, 5, '2020-08-17 12:39:20', '2020-08-17 12:39:20'),
(521, '2.0.9', '2', NULL, 4848189, 'Hang Duong', NULL, 5, '2020-08-17 17:36:36', '2020-08-17 17:36:36'),
(522, '2.0.9', '2', '0933999326', 4751219, 'Anh Phạm Thị Phương', NULL, 4, '2020-08-17 18:58:42', '2020-08-17 18:58:42'),
(523, '2.0.9', '2', '0346924715', 4848288, 'Kim Tuyến Võ Thị', NULL, 5, '2020-08-18 00:06:52', '2020-08-18 00:06:52'),
(524, '2.0.9', '2', '0946483428', 4665492, 'thiên Nguyễn hải', NULL, 5, '2020-08-18 01:44:00', '2020-08-18 01:44:00'),
(525, '2.0.4', '1', '0797374006', 4807631, 'Nhân Nguyễn Minh', NULL, 5, '2020-08-18 01:48:35', '2020-08-18 01:48:35'),
(526, '2.0.4', '1', '0908097145', 4833742, '0908097145', NULL, 5, '2020-08-18 02:25:50', '2020-08-18 02:25:50'),
(527, '2.0.4', '1', '0949086337', 4835253, 'Anh Tran Ha', 'Học rất vui', 5, '2020-08-18 02:56:05', '2020-08-18 02:56:05'),
(528, '2.0.9', '2', '0393737286', 3023702, 'Hau Pham', NULL, 5, '2020-08-18 04:07:14', '2020-08-18 04:07:14'),
(529, '2.0.9', '2', '0343172975', 4842071, 'Liên Tạ', NULL, 5, '2020-08-18 04:33:41', '2020-08-18 04:33:41'),
(530, '2.0.8', '2', '0363119675', 4827057, 'Trà Đào', NULL, 5, '2020-08-18 04:34:15', '2020-08-18 04:34:15'),
(531, '2.0.9', '2', '0947461759', 4849242, 'Thế giới toàn là đồ ăn', NULL, 4, '2020-08-18 05:28:09', '2020-08-18 05:28:09'),
(532, '2.0.9', '2', '0392662108', 4371242, 'Phương Xuân', NULL, 1, '2020-08-18 06:21:20', '2020-08-18 06:21:20'),
(533, '2.0.9', '2', '0325450887', 4849400, 'Hue Tran', NULL, 5, '2020-08-18 07:03:29', '2020-08-18 07:03:29'),
(534, '2.0.4', '1', '0355603100', 3507860, '01655603100', NULL, 5, '2020-08-18 07:46:48', '2020-08-18 07:46:48'),
(535, '2.0.4', '1', '0348902227', 4815642, '0348902227', NULL, 4, '2020-08-18 07:54:04', '2020-08-18 07:54:04'),
(536, '2.0.9', '2', '0835751631', 4849945, 'Pao Vu Pao', NULL, 5, '2020-08-18 09:27:22', '2020-08-18 09:27:22'),
(537, '2.0.4', '1', '0983024676', 3362896, '0983024676', NULL, 2, '2020-08-18 10:01:09', '2020-08-18 10:01:09'),
(538, '2.0.4', '1', '0355868594', 4847933, 'Cúc Trần', 'Rất hay và bổ ích', 5, '2020-08-18 11:14:44', '2020-08-18 11:14:44'),
(539, '2.0.9', '2', '0945630385', 4836972, '0945630385', NULL, 1, '2020-08-18 13:42:24', '2020-08-18 13:42:24'),
(540, '2.0.4', '1', '0985502355', 3669462, 'Linh Cao', 'chưa làm được bài tập online', 3, '2020-08-18 14:20:31', '2020-08-18 14:20:31'),
(541, '2.0.4', '2', '0384833981', 4701744, 'Nguyễn Vân Anh', NULL, 5, '2020-08-18 14:24:52', '2020-08-18 14:24:52'),
(542, '2.1.0', '2', '0326042204', 4850875, 'My Trà', NULL, 5, '2020-08-18 14:37:03', '2020-08-18 14:37:03'),
(543, '2.1.0', '2', '0939898274', 3875230, '0939898274', 'Màn hình khi phóng to nó cứ kiểu nữa màn hình không à( đây là trường hợp của ipad)', 2, '2020-08-18 15:01:55', '2020-08-18 15:01:55'),
(544, '2.1.0', '2', '0353291203', 4837494, 'Việt Quốc', NULL, 5, '2020-08-18 15:07:03', '2020-08-18 15:07:03'),
(545, '2.0.4', '1', '0915636636', 4797749, 'Phương Bùi Thị Minh', NULL, 5, '2020-08-18 15:28:46', '2020-08-18 15:28:46'),
(546, '2.1.0', '2', '0868042687', 4851129, 'Mát Phạm', NULL, 5, '2020-08-18 16:39:45', '2020-08-18 16:39:45'),
(547, '2.0.4', '1', '0979599008', 4726728, '0979599008', NULL, 5, '2020-08-19 01:32:03', '2020-08-19 01:32:03'),
(548, '2.1.0', '2', '0989898408', 4567077, 'HOANG', 'Nghe quảng cáo ngon lắm học thử bình thường', 1, '2020-08-19 01:36:08', '2020-08-19 01:36:08'),
(549, '2.0.9', '2', '0368742328', 4695409, 'Nguyễn  nga', NULL, 4, '2020-08-19 03:02:44', '2020-08-19 03:02:44'),
(550, '2.1.0', '2', '0963458871', 4836709, 'Hằng  Trần Thị', NULL, 5, '2020-08-19 04:24:38', '2020-08-19 04:24:38'),
(551, '2.1.0', '2', '0935068758', 4852343, 'Lê Thị Thuỷ Kiều', NULL, 2, '2020-08-19 05:18:40', '2020-08-19 05:18:40'),
(552, '2.1.0', '2', '0981965336', 4852424, 'Quyên Lê', NULL, 4, '2020-08-19 06:04:15', '2020-08-19 06:04:15'),
(553, '2.0.9', '2', '0824441496', 4832091, 'Thị  Như Ý Hồ', NULL, 5, '2020-08-19 06:22:30', '2020-08-19 06:22:30'),
(554, '2.1.0', '2', '0977820130', 4262326, 'Vinh Trần Vỹ Công', 'Rất tốt', 5, '2020-08-19 07:20:44', '2020-08-19 07:20:44'),
(555, '2.0.4', '1', '0886009859', 4850558, 'Vo Phuong', NULL, 1, '2020-08-19 08:54:11', '2020-08-19 08:54:11'),
(556, '2.0.4', '1', '0976565636', 4853030, 'linh Vũ Ngọc gia', NULL, 3, '2020-08-19 09:06:21', '2020-08-19 09:06:21'),
(557, '2.1.0', '2', '0849596988', 4006152, 'Sơn Nguyễn Hà', 'Có BTTL là quá OK', 4, '2020-08-19 09:56:19', '2020-08-19 09:56:19'),
(558, '2.1.0', '2', '0941870674', 3173089, 'Minh Đinh Thị Ngọc', NULL, 5, '2020-08-19 12:03:59', '2020-08-19 12:03:59'),
(559, '2.1.0', '2', '0944914416', 2938419, 'Hưng Nguyễn', NULL, 5, '2020-08-19 14:04:29', '2020-08-19 14:04:29'),
(560, '2.1.0', '2', '0985747051', 4854009, 'Van Chu', 'Hay lắm lun', 5, '2020-08-19 14:04:34', '2020-08-19 14:04:34'),
(561, '2.0.8', '2', '0837180934', 4466810, 'Phan Hân', 'App hơi khó trong việc đăng nhập sau mỗi lần cập nhật, nhưng đội ngũ bên học mãi vẫn đang cố gắng hoàn thiện qua từng ngày, mọi người hãy thông cảm. Các anh chị tư vấn nhiệt tình, và giải quyết các vấn đề nhanh nhất có thể. 👍👍❤', 5, '2020-08-19 14:31:24', '2020-08-19 14:31:24'),
(562, '2.0.4', '1', '0983897635', 4248614, 'Diệp Phạm Ngọc', NULL, 5, '2020-08-19 15:52:41', '2020-08-19 15:52:41'),
(563, '2.1.0', '2', '0378161529', 4773852, '0378161529', NULL, 5, '2020-08-20 00:20:04', '2020-08-20 00:20:04'),
(564, '2.1.0', '2', '0353773181', 4854611, 'Nga Bùi Thị', NULL, 5, '2020-08-20 00:25:42', '2020-08-20 00:25:42'),
(565, '2.1.0', '2', '0706191603', 4840735, 'Tuệ Hồ Khắc Bảo', NULL, 4, '2020-08-20 02:02:37', '2020-08-20 02:02:37'),
(566, '2.0.4', '1', '0909899244', 4839101, 'Như Thuỷ Hoàng Vũ', 'Học rất dễ hiểu giá cả cũng OK', 5, '2020-08-20 02:50:36', '2020-08-20 02:50:36'),
(567, '2.1.0', '2', '0398895316', 4743573, '0398895316', NULL, 5, '2020-08-20 03:08:12', '2020-08-20 03:08:12'),
(568, '2.1.0', '2', '0943060445', 4565440, 'Duc Hoang', NULL, 5, '2020-08-20 03:45:36', '2020-08-20 03:45:36'),
(569, '2.1.0', '2', '0943060445', 4565440, 'Duc Hoang', NULL, 5, '2020-08-20 03:45:37', '2020-08-20 03:45:37'),
(570, '2.1.0', '2', '0348033160', 4853279, 'Nguyệt Ánh', NULL, 1, '2020-08-20 04:56:53', '2020-08-20 04:56:53'),
(571, '2.1.0', '2', '0927063613', 4807151, 'Triết Nguyễn Minh', NULL, 5, '2020-08-20 07:11:27', '2020-08-20 07:11:27'),
(572, '2.1.0', '2', '0337985286', 4855922, 'Dung Đoàn Thị Thùy', NULL, 5, '2020-08-20 07:32:10', '2020-08-20 07:32:10'),
(573, '2.0.4', '1', '0916679940', 4806180, 'Quyên Vương Lệ', NULL, 5, '2020-08-20 08:04:23', '2020-08-20 08:04:23'),
(574, '2.1.0', '2', '0963789660', 4793081, 'Thủy Thu', NULL, 5, '2020-08-20 08:38:34', '2020-08-20 08:38:34'),
(575, '2.0.4', '1', '0938820580', 515513, 'Huỳnh Hà', NULL, 5, '2020-08-20 12:23:05', '2020-08-20 12:23:05'),
(576, '2.1.0', '2', '0971687208', 4846168, '0971687208', NULL, 5, '2020-08-20 13:17:17', '2020-08-20 13:17:17'),
(577, '2.0.0', '1', '0979641809', 3386286, 'Chi Phạm Vũ Khánh', NULL, 5, '2020-08-20 13:39:02', '2020-08-20 13:39:02'),
(578, '2.0.4', '1', '0777569862', 4679668, 'Loan Thái Thị', NULL, 5, '2020-08-20 14:08:39', '2020-08-20 14:08:39'),
(579, '2.0.4', '1', '0777569862', 4679668, 'Loan Thái Thị', NULL, 5, '2020-08-20 14:08:43', '2020-08-20 14:08:43'),
(580, '2.0.4', '1', '0818851430', 4850675, 'Thương Bùi Thị', NULL, 5, '2020-08-20 14:49:35', '2020-08-20 14:49:35'),
(581, '2.0.9', '2', '0916895989', 4046514, 'Lâm Ngô Hữu Bảo', NULL, 5, '2020-08-21 02:17:08', '2020-08-21 02:17:08'),
(582, '2.0.4', '1', '0392562836', 4858200, 'Thắm Hà', NULL, 5, '2020-08-21 02:28:43', '2020-08-21 02:28:43'),
(583, '2.1.0', '2', '0988383367', 4858262, 'Vy Vu', NULL, 5, '2020-08-21 02:40:56', '2020-08-21 02:40:56'),
(584, '2.1.0', '2', '0762298131', 4856834, 'My Nguyễn', NULL, 4, '2020-08-21 03:37:21', '2020-08-21 03:37:21'),
(585, '2.0.4', '1', '0905028660', 4839597, 'Bảo Bùi Gia', NULL, 4, '2020-08-21 04:02:21', '2020-08-21 04:02:21'),
(586, '2.1.0', '2', '0358143635', 4858606, 'Linh Pham', NULL, 5, '2020-08-21 04:17:21', '2020-08-21 04:17:21'),
(587, '2.1.0', '2', '0768939259', 4199388, 'Hân Trịnh Gia', NULL, 5, '2020-08-21 05:55:08', '2020-08-21 05:55:08'),
(588, '2.0.4', '1', '0825037556', 4859220, 'Nguyễn My', NULL, 2, '2020-08-21 07:28:39', '2020-08-21 07:28:39'),
(589, '2.0.4', '1', '0377032152', 4153080, 'Linh Lê Thị Thuỳ', NULL, 5, '2020-08-21 08:04:11', '2020-08-21 08:04:11'),
(590, '2.1.0', '2', '0818130804', 4777734, 'Louis Tan', 'Tôi chưa thay đổi lại đc tên tài khoản của mình.', 2, '2020-08-21 09:19:53', '2020-08-21 09:19:53'),
(591, '2.1.0', '2', NULL, 4859695, 'cuong do', NULL, 2, '2020-08-21 09:53:15', '2020-08-21 09:53:15'),
(592, '2.1.0', '2', '0397063453', 4859889, 'Giang Takuya', NULL, 5, '2020-08-21 10:24:45', '2020-08-21 10:24:45'),
(593, '2.0.4', '1', '0356164288', 4860218, 'Hà Tùng Lâm', 'Cũng đc', 4, '2020-08-21 12:37:03', '2020-08-21 12:37:03'),
(594, '2.0.9', '2', '0867531846', 4860330, 'An Ngụy', NULL, 1, '2020-08-21 13:21:30', '2020-08-21 13:21:30'),
(595, '2.1.0', '2', '0395392213', 4857893, 'Bùi Linh', NULL, 5, '2020-08-21 13:35:05', '2020-08-21 13:35:05'),
(596, '2.1.0', '2', '0369375408', 4858834, 'Van Đăng', NULL, 5, '2020-08-21 13:41:20', '2020-08-21 13:41:20'),
(597, '2.1.0', '2', '0898893509', 4860481, 'Lê Trương Gia Hân', 'Khi thắc mắc và đặt câu hỏi thì không trả lời ạ', 4, '2020-08-21 14:19:19', '2020-08-21 14:19:19'),
(598, '2.1.0', '2', '0975384209', 4828304, 'Kỳ Thiên', NULL, 5, '2020-08-21 14:47:07', '2020-08-21 14:47:07'),
(599, '2.1.0', '2', '0382586386', 4857014, 'Nguyên Đào', 'Rất tuyệt', 5, '2020-08-21 15:32:32', '2020-08-21 15:32:32'),
(600, '2.1.0', '2', '0344350578', 4587462, 'Khánh Quốc', NULL, 4, '2020-08-21 17:26:03', '2020-08-21 17:26:03'),
(601, '2.1.0', '2', '0356838606', 4860979, 'Vàng Hoa', NULL, 5, '2020-08-21 18:06:59', '2020-08-21 18:06:59'),
(602, '2.0.4', '1', '0914048165', 4816507, 'Mai Nguyễn Thị Tuyết', NULL, 5, '2020-08-22 00:22:29', '2020-08-22 00:22:29'),
(603, '2.1.0', '2', '0395107564', 4861276, 'Hai Bảo Ngọc', NULL, 5, '2020-08-22 01:29:40', '2020-08-22 01:29:40'),
(604, '2.1.0', '2', '0396741003', 4324322, 'Đăng Hải', NULL, 5, '2020-08-22 02:15:22', '2020-08-22 02:15:22'),
(605, '2.0.4', '1', '0359198965', 4808761, 'Xoan Nguyen Thanh', NULL, 1, '2020-08-22 02:53:53', '2020-08-22 02:53:53'),
(606, '2.1.0', '2', NULL, 4861546, 'Ngọc Định Dương', NULL, 5, '2020-08-22 03:20:42', '2020-08-22 03:20:42'),
(607, '2.1.0', '2', '0914174602', 2903898, 'Nhi Nguyễn Ngân', NULL, 5, '2020-08-22 03:34:41', '2020-08-22 03:34:41'),
(608, '2.1.0', '2', '0976463141', 4861352, 'Hoài Nguyễn', NULL, 1, '2020-08-22 05:49:25', '2020-08-22 05:49:25'),
(609, '2.1.0', '2', '0836462363', 4862017, 'Phat Trung', NULL, 1, '2020-08-22 06:36:45', '2020-08-22 06:36:45'),
(610, '2.1.0', '2', '0348531539', 4762100, '0348531539', NULL, 5, '2020-08-22 07:16:26', '2020-08-22 07:16:26'),
(611, '2.1.0', '2', '0382407218', 4822370, 'Mẫn Mẫn', NULL, 5, '2020-08-22 08:02:49', '2020-08-22 08:02:49'),
(612, '2.1.0', '2', '0568116747', 4861485, 'Linh Lyy', NULL, 5, '2020-08-22 08:56:43', '2020-08-22 08:56:43'),
(613, '2.1.0', '2', '0355547593', 4539797, 'ĐÌnh  Dũng Trần', NULL, 4, '2020-08-22 09:14:52', '2020-08-22 09:14:52'),
(614, '2.1.0', '2', '0377074856', 4862394, 'Milo Phanh', NULL, 5, '2020-08-22 09:20:00', '2020-08-22 09:20:00'),
(615, '2.1.0', '2', '0377074856', 4862394, 'Milo Phanh', NULL, 5, '2020-08-22 09:20:01', '2020-08-22 09:20:01'),
(616, '2.1.0', '2', '0967825337', 4862536, 'Bình Phan', NULL, 5, '2020-08-22 10:31:14', '2020-08-22 10:31:14'),
(617, '2.1.0', '2', '0987437535', 3376460, '0987437535', NULL, 4, '2020-08-22 12:33:21', '2020-08-22 12:33:21'),
(618, '2.1.0', '2', '0973025983', 4853414, '0973025983', NULL, 3, '2020-08-22 13:32:50', '2020-08-22 13:32:50'),
(619, '2.1.0', '2', '0387356160', 4863493, 'An Trần', NULL, 4, '2020-08-22 23:50:27', '2020-08-22 23:50:27'),
(620, '2.1.0', '2', '0383941341', 4661206, 'hiền Trần thúy', NULL, 4, '2020-08-23 03:17:08', '2020-08-23 03:17:08'),
(621, '2.1.0', '2', '0352677146', 4798176, 'Van Anh Nguyễn Thị', NULL, 5, '2020-08-23 04:20:36', '2020-08-23 04:20:36'),
(622, '2.1.0', '2', '0927193786', 4864182, 'Bình Thanh', NULL, 5, '2020-08-23 05:31:14', '2020-08-23 05:31:14'),
(623, '2.1.0', '2', '0399525767', 3156047, 'Trần Huyền', NULL, 2, '2020-08-23 05:47:46', '2020-08-23 05:47:46'),
(624, '2.0.4', '1', '0968534015', 3441692, 'Sơn Bùi Tuấn', NULL, 4, '2020-08-23 08:23:02', '2020-08-23 08:23:02'),
(625, '2.1.0', '2', '0908692670', 4796658, 'Đạt Nguyễn Thành', NULL, 5, '2020-08-23 09:09:36', '2020-08-23 09:09:36'),
(626, '2.1.1', '2', '0965418997', 4786291, 'Dsfsdfdsfdsfdsfdsf', 'fdsfdsfd', 4, '2020-08-23 09:22:15', '2020-08-23 09:22:15'),
(627, '2.0.4', '1', '0972400667', 2987659, 'Mai Khanh Nguyen', NULL, 5, '2020-08-23 10:51:56', '2020-08-23 10:51:56'),
(628, '2.0.9', '2', '0335151375', 4466194, 'Hoa Thanh', NULL, 5, '2020-08-23 11:01:15', '2020-08-23 11:01:15'),
(629, '2.1.0', '2', '0913440551', 4317692, 'Trí Trần Minh', NULL, 5, '2020-08-23 13:23:00', '2020-08-23 13:23:00'),
(630, '2.1.0', '2', '0987712405', 4865193, 'Canh Nguyen', NULL, 2, '2020-08-23 14:04:34', '2020-08-23 14:04:34'),
(631, '2.0.4', '1', '0377816855', 3475174, 'Hiền Nguyễn', 'Ứng dụng có gam màu rất dịu mắt. Tuy nhiên phần sắp xếp khoá học chưa được khoa học lắm.', 5, '2020-08-23 15:13:34', '2020-08-23 15:13:34'),
(632, '2.1.0', '2', '0378598769', 3665854, 'Quyền Nguyễn Khắc', NULL, 5, '2020-08-23 16:02:20', '2020-08-23 16:02:20'),
(633, '2.1.0', '2', '0916895989', 4046514, 'Lâm Ngô Hữu Bảo', NULL, 5, '2020-08-24 02:05:44', '2020-08-24 02:05:44'),
(634, '2.1.0', '2', '0395825648', 4865284, 'Phụng Trần', NULL, 4, '2020-08-24 03:04:27', '2020-08-24 03:04:27'),
(635, '2.1.0', '2', '0923166510', 4863603, 'hoa Cao thi', NULL, 1, '2020-08-24 03:44:25', '2020-08-24 03:44:25'),
(636, '2.1.0', '2', '0333185416', 4866446, 'Huong Nguyễn', NULL, 5, '2020-08-24 04:28:03', '2020-08-24 04:28:03'),
(637, '2.1.0', '2', '0333185416', 4866446, 'Huong Nguyễn', NULL, 5, '2020-08-24 04:28:04', '2020-08-24 04:28:04'),
(638, '2.1.0', '2', '0888323305', 4645440, 'bao yen nguyen', NULL, 3, '2020-08-24 04:57:50', '2020-08-24 04:57:50'),
(639, '2.1.0', '2', '0855911222', 4866831, 'Quỳnh Ngô Thị Diễm', NULL, 5, '2020-08-24 06:46:11', '2020-08-24 06:46:11'),
(640, '2.1.0', '2', '0377131625', 4849688, 'Hà An NT', 'App khá là tiện lợi khi học tập như này:3 nhưng mình mongg sẽ cải tiến được nhiều môn hơn nữa nhe.', 4, '2020-08-24 07:55:28', '2020-08-24 07:55:28'),
(641, '2.0.4', '1', '0904285680', 4835803, '0904285680', NULL, 4, '2020-08-24 08:28:17', '2020-08-24 08:28:17'),
(642, '2.1.0', '2', NULL, 4867294, 'Công Nguyễn', NULL, 5, '2020-08-24 09:02:11', '2020-08-24 09:02:11'),
(643, '2.1.0', '2', '0368274255', 3791946, 'Phúc Phạm Văn', NULL, 5, '2020-08-24 09:48:03', '2020-08-24 09:48:03'),
(644, '2.1.0', '2', '0983784905', 4820913, '0983784905', 'Dc', 5, '2020-08-24 12:45:07', '2020-08-24 12:45:07'),
(645, '2.0.4', '1', '0888525777', 3792744, 'Vy Trần Phương', NULL, 5, '2020-08-24 12:46:59', '2020-08-24 12:46:59'),
(646, '2.1.0', '2', '0814937974', 4868346, 'Xuân Phí Đình', NULL, 5, '2020-08-24 15:39:08', '2020-08-24 15:39:08'),
(647, '2.1.0', '2', NULL, 4868723, 'Quỳnh Trương', NULL, 5, '2020-08-25 01:11:25', '2020-08-25 01:11:25'),
(648, '2.1.0', '2', '0919757382', 4868775, 'Trương Giang', NULL, 4, '2020-08-25 01:40:09', '2020-08-25 01:40:09'),
(649, '2.0.4', '1', '0932051715', 2712780, 'Thùy Nguyễn Đỗ Thanh', NULL, 2, '2020-08-25 02:06:21', '2020-08-25 02:06:21'),
(650, '2.0.4', '1', '0834275900', 4808536, 'Lâm Nguyễn Tùng', NULL, 5, '2020-08-25 02:15:54', '2020-08-25 02:15:54'),
(651, '2.1.0', '2', '0967694459', 4861068, 'Dan Ha', '♡๖ۣۜc̸h̸ờ e̸m̸ t̸í♡๖ۣۜ', 5, '2020-08-25 02:51:43', '2020-08-25 02:51:43'),
(652, '2.1.0', '2', NULL, 4869460, 'Gia đình Đóm', NULL, 5, '2020-08-25 05:16:19', '2020-08-25 05:16:19'),
(653, '2.0.4', '1', '0365407517', 4047702, 'Anh Nguyen Nhat', NULL, 5, '2020-08-25 05:43:56', '2020-08-25 05:43:56'),
(654, '2.1.0', '2', '0834502889', 4869094, '0834502889', NULL, 5, '2020-08-25 05:58:28', '2020-08-25 05:58:28'),
(655, '2.0.4', '1', '0946661265', 3063742, 'Linh Nguyen Phuong', 'Em thấy nên có thêm phần bình luận bài giảng như lên web bằng máy tính. App dùng trên điện thoại vẫn còn hạn chế một số chức năng mà khi học e cần', 3, '2020-08-25 06:04:56', '2020-08-25 06:04:56'),
(656, '2.1.0', '2', '0387861874', 4869149, 'hằng Ngô thu', NULL, 5, '2020-08-25 07:02:20', '2020-08-25 07:02:20'),
(657, '2.1.0', '2', '0399075624', 4561935, 'Thuy Bich', NULL, 5, '2020-08-25 07:13:42', '2020-08-25 07:13:42'),
(658, '2.0.4', '1', '0982494777', 4442291, 'HÀ HƯƠNG', NULL, 5, '2020-08-25 08:43:14', '2020-08-25 08:43:14'),
(659, '2.1.0', '2', '0938621602', 4870275, 'Luân Thành', NULL, 5, '2020-08-25 10:30:13', '2020-08-25 10:30:13'),
(660, '2.1.0', '2', NULL, 4870589, 'Lịch Hoàng', NULL, 5, '2020-08-25 12:34:47', '2020-08-25 12:34:47'),
(661, '2.1.0', '2', '0383390469', 4870588, 'Hòa Nguyễn', 'Từ lúc mk tải app về học cảm thấy yêu thích môn toán hơn và chăm chỉ hơn. App rất tốt luôn!!👌👌👌', 5, '2020-08-25 12:46:03', '2020-08-25 12:46:03'),
(662, '2.1.0', '2', '0966362830', 3620360, 'tùng Đào xuân', 'tệ', 5, '2020-08-25 12:57:54', '2020-08-25 12:57:54'),
(663, '2.1.0', '2', '0961014484', 4870689, 'Ly Nguyễn', 'Mong là sẽ có video hướng dẫn sử dụng và học offline ạ', 5, '2020-08-25 13:06:57', '2020-08-25 13:06:57'),
(664, '2.1.0', '2', '0921893581', 4870737, 'Phước Lợi Lê', NULL, 4, '2020-08-25 13:23:22', '2020-08-25 13:23:22'),
(665, '2.1.0', '2', '0345979976', 4870781, 'Linh Hermione', NULL, 5, '2020-08-25 13:42:33', '2020-08-25 13:42:33'),
(666, '2.1.0', '2', '0375588825', 4777438, 'Thảo Phạm', NULL, 4, '2020-08-25 13:47:31', '2020-08-25 13:47:31'),
(667, '2.1.0', '2', '0983733368', 4115596, 'Bảo Đinh', 'Ngang dọc màn hình ko dùng đc', 3, '2020-08-25 14:54:52', '2020-08-25 14:54:52'),
(668, '2.1.1', '2', '0374330565', 4471566, 'Đăng Quang', 'Ok', 4, '2020-08-25 15:16:57', '2020-08-25 15:16:57'),
(669, '2.1.0', '2', '0909095051', 4869305, 'Ngọc Diễm Quỳnh Võ', NULL, 5, '2020-08-26 00:40:18', '2020-08-26 00:40:18'),
(670, '2.0.4', '1', '0707209827', 4871659, '0707209827', NULL, 4, '2020-08-26 02:38:13', '2020-08-26 02:38:13'),
(671, '2.1.0', '2', '0982198318', 4782008, 'thu dang anh', NULL, 5, '2020-08-26 03:41:32', '2020-08-26 03:41:32'),
(672, '2.1.0', '2', '0862254990', 4868909, 'Huyền Công Thị Khánh', NULL, 5, '2020-08-26 05:32:00', '2020-08-26 05:32:00'),
(673, '2.1.0', '2', '0384601790', 4872585, 'Anh Mai', NULL, 5, '2020-08-26 07:54:47', '2020-08-26 07:54:47'),
(674, '2.1.1', '2', '0374330565', 4360094, 'Dev App', 'Nnnana', 2, '2020-08-26 08:16:50', '2020-08-26 08:16:50'),
(675, '2.1.0', '2', '0981156258', 4514135, 'lâm lê tuệ', NULL, 5, '2020-08-26 09:19:12', '2020-08-26 09:19:12'),
(676, '2.0.5', '1', '0915833468', 3057772, '0915833468', NULL, 5, '2020-08-26 10:18:59', '2020-08-26 10:18:59'),
(677, '2.0.5', '1', '0986818259', 4579815, 'Linh Khánh', 'tốt lắm ạ', 5, '2020-08-26 11:33:27', '2020-08-26 11:33:27'),
(678, '2.0.5', '1', '0983464856', 4804482, 'ANH LAI NGUYEN TU', NULL, 4, '2020-08-26 14:15:41', '2020-08-26 14:15:41'),
(679, '2.1.0', '2', '0772757099', 4873797, 'Quỳnh Trần Như', 'App này xài miễn phí là quá tốt. Có nhìu người kh có tiền để đóng :)?', 2, '2020-08-26 17:05:13', '2020-08-26 17:05:13'),
(680, '2.1.0', '2', '0399828749', 4874036, 'Ngân Kim', NULL, 5, '2020-08-27 00:19:53', '2020-08-27 00:19:53'),
(681, '2.1.0', '2', '0977497473', 3018175, 'Hậu Hoàng', NULL, 4, '2020-08-27 00:52:30', '2020-08-27 00:52:30'),
(682, '2.1.0', '2', '0379857187', 4854202, 'Thành Nguyễn', NULL, 2, '2020-08-27 02:10:48', '2020-08-27 02:10:48'),
(683, '2.0.4', '1', '0967248172', 3339450, 'Thành Nguyễn', NULL, 5, '2020-08-27 02:24:02', '2020-08-27 02:24:02'),
(684, '2.1.0', '2', '0787696933', 4874383, 'Hà Ni Đào', NULL, 5, '2020-08-27 02:40:18', '2020-08-27 02:40:18'),
(685, '2.0.5', '1', '0947504270', 4863199, 'Trịnh Như Phương', NULL, 5, '2020-08-27 06:27:57', '2020-08-27 06:27:57'),
(686, '2.1.0', '2', '0978575967', 4866747, 'Pham  Thanhquedlk', NULL, 5, '2020-08-27 06:47:05', '2020-08-27 06:47:05'),
(687, '2.1.0', '2', '0961665774', 4875549, 'Thị Thu Uyên Nguyễn', NULL, 3, '2020-08-27 09:10:07', '2020-08-27 09:10:07'),
(688, '2.1.0', '2', '0344986418', 4670815, 'Cao Vân Thảo', NULL, 3, '2020-08-27 09:14:51', '2020-08-27 09:14:51'),
(689, '2.1.0', '2', '0344986418', 4670815, 'Cao Vân Thảo', NULL, 3, '2020-08-27 09:14:52', '2020-08-27 09:14:52'),
(690, '2.1.0', '2', '0982663011', 4874988, 'Linh Nguyễn Ngọc Phước', NULL, 5, '2020-08-27 09:21:36', '2020-08-27 09:21:36'),
(691, '2.1.0', '2', '0363887646', 4873385, 'Quỳnh Trang Phan', NULL, 5, '2020-08-27 09:35:06', '2020-08-27 09:35:06'),
(692, '2.1.0', '2', '0333527628', 4666040, 'Lan Phạm Thị', 'Gôd', 5, '2020-08-27 09:48:16', '2020-08-27 09:48:16'),
(693, '2.0.5', '1', '0983321307', 4875287, 'Ánh Vũ', NULL, 5, '2020-08-27 12:01:52', '2020-08-27 12:01:52'),
(694, '2.1.0', '2', '0945630385', 4836972, '0945630385', NULL, 5, '2020-08-27 13:39:48', '2020-08-27 13:39:48'),
(695, '2.1.0', '2', '0945630385', 4836972, '0945630385', NULL, 5, '2020-08-27 13:39:50', '2020-08-27 13:39:50'),
(696, '2.0.5', '1', '0915927348', 4212412, 'minh Do tuan', NULL, 5, '2020-08-28 01:37:44', '2020-08-28 01:37:44'),
(697, '2.0.5', '1', '0342320366', 4848428, '0342320366', 'Quá tốt', 5, '2020-08-28 01:46:36', '2020-08-28 01:46:36'),
(698, '2.1.0', '2', '0942017604', 3561538, 'Thanh Hoàng', NULL, 5, '2020-08-28 02:20:37', '2020-08-28 02:20:37'),
(699, '2.0.5', '1', '0947504270', 4818595, 'Phương Trịnh Như', NULL, 5, '2020-08-28 06:19:52', '2020-08-28 06:19:52'),
(700, '2.1.0', '2', '0976991905', 3993724, 'Chi Phan Thị Yến', NULL, 5, '2020-08-28 07:22:36', '2020-08-28 07:22:36'),
(701, '2.1.0', '2', NULL, 4875120, 'Phương Nguyễn', NULL, 5, '2020-08-28 08:04:31', '2020-08-28 08:04:31'),
(702, '2.1.0', '2', '0399733729', 3921230, 'Anh Dieu', NULL, 5, '2020-08-28 08:25:41', '2020-08-28 08:25:41'),
(703, '2.1.0', '2', '0907457651', 4784115, 'Như Bích', NULL, 5, '2020-08-28 09:38:16', '2020-08-28 09:38:16'),
(704, '2.1.0', '2', '0984501337', 4560120, 'Anh Nguyễn Thị Lan', NULL, 5, '2020-08-28 10:00:24', '2020-08-28 10:00:24'),
(705, '2.1.0', '2', '0836092544', 4347463, 'Nguyên Trần Thảo', NULL, 5, '2020-08-28 10:00:29', '2020-08-28 10:00:29'),
(706, '2.1.0', '2', '0906575369', 4864533, '0906575369', NULL, 5, '2020-08-28 12:59:24', '2020-08-28 12:59:24'),
(707, '2.0.5', '1', '0979368924', 4841847, 'Phi Lương Ngọc Minh', 'App khi dùng mà mở Full màn hình voi ipad 4 là làm biến dạng hình bài giảng khó xem yêu cầu điều chỉnh lại', 1, '2020-08-28 15:35:38', '2020-08-28 15:35:38'),
(708, '2.1.0', '2', '0903213238', 4866451, '0903213238', NULL, 5, '2020-08-28 16:36:29', '2020-08-28 16:36:29'),
(709, '2.1.0', '2', '0344399230', 4879668, 'Nhựt Nhân Nguyễn', NULL, 1, '2020-08-29 01:01:42', '2020-08-29 01:01:42'),
(710, '2.0.5', '1', '0986442781', 4345822, '0986442781', NULL, 3, '2020-08-29 01:54:21', '2020-08-29 01:54:21'),
(711, '2.1.0', '2', '0339154084', 4819900, 'Love Love', 'K hk đc j cả đăg nhập chỉ thấy mấy cái video vớ vẩn . Các bn lm tôi vô cùng thất vọng', 1, '2020-08-29 02:31:23', '2020-08-29 02:31:23'),
(712, '2.0.5', '1', '0799164603', 4879828, 'Trần Thị như ý', NULL, 5, '2020-08-29 02:47:14', '2020-08-29 02:47:14'),
(713, '2.1.0', '2', '0387459786', 4879929, 'Dũng Nguyễn Tấn', NULL, 5, '2020-08-29 02:50:25', '2020-08-29 02:50:25'),
(714, '2.0.5', '1', '0987030198', 3626216, 'Hằng Nguyễn Bùi Minh', NULL, 4, '2020-08-29 03:22:33', '2020-08-29 03:22:33'),
(715, '2.0.5', '1', '0905028660', 4839597, 'Bảo Bùi Gia', NULL, 1, '2020-08-29 03:35:03', '2020-08-29 03:35:03'),
(716, '2.1.0', '2', '0799053891', 4487283, 'Nguyên Vương', NULL, 5, '2020-08-29 04:35:18', '2020-08-29 04:35:18'),
(717, '2.1.0', '2', '0383058900', 4880147, 'Đoàn Thị Trang', NULL, 5, '2020-08-29 05:18:32', '2020-08-29 05:18:32'),
(718, '2.1.0', '2', '0826968938', 4856210, 'Ngọc Huyền Nguyễn', NULL, 1, '2020-08-29 07:49:14', '2020-08-29 07:49:14'),
(719, '2.0.5', '1', '0982034669', 4814753, '0982034669', NULL, 5, '2020-08-29 08:18:21', '2020-08-29 08:18:21'),
(720, '2.1.0', '2', '0338726024', 4875570, '0338726024', NULL, 4, '2020-08-29 08:19:24', '2020-08-29 08:19:24'),
(721, '2.1.0', '2', '0867996529', 4877153, 'Đinh Thùy Linh', NULL, 5, '2020-08-29 10:41:43', '2020-08-29 10:41:43'),
(722, '2.0.5', '1', '0946661265', 3063742, 'Linh Nguyen Phuong', 'E muốn app có thêm phần thông báo như web khi ad trả lời câu hỏi e thắc mắc ở bttl ạ', 3, '2020-08-29 10:51:13', '2020-08-29 10:51:13'),
(723, '2.1.0', '2', '0974999169', 4726092, 'Hưng Lê Bá Khánh', NULL, 4, '2020-08-29 12:59:36', '2020-08-29 12:59:36'),
(724, '2.1.0', '2', '0393247121', 4877756, 'Hà Hương', NULL, 5, '2020-08-29 12:59:37', '2020-08-29 12:59:37'),
(725, '2.1.0', '2', '0784249360', 4744568, 'X Professional', NULL, 5, '2020-08-29 13:20:20', '2020-08-29 13:20:20'),
(726, '2.1.0', '2', '0935348459', 3536138, '0935348459', NULL, 5, '2020-08-29 14:47:51', '2020-08-29 14:47:51'),
(727, '2.1.2', '2', '0978089923', 3635218, 'Nguyễn Ngọc Phương', NULL, 5, '2020-08-29 15:09:12', '2020-08-29 15:09:12'),
(728, '2.0.5', '1', '0962820465', 2805545, 'Trung Kiên Nguyễn', NULL, 5, '2020-08-29 18:33:51', '2020-08-29 18:33:51'),
(729, '2.1.1', '2', '0335797135', 4882243, 'Thái Le', NULL, 4, '2020-08-30 00:42:55', '2020-08-30 00:42:55'),
(730, '2.1.1', '2', '0349100407', 2098231, 'Pháp Đặng Đình', NULL, 5, '2020-08-30 01:55:52', '2020-08-30 01:55:52'),
(731, '2.1.1', '2', '0357114244', 4882681, 'PD NT', NULL, 5, '2020-08-30 04:18:44', '2020-08-30 04:18:44'),
(732, '2.0.5', '1', '0348597472', 4882946, 'Hanh Nguyen', NULL, 2, '2020-08-30 06:38:16', '2020-08-30 06:38:16'),
(733, '2.1.1', '2', '0396741003', 4324322, 'Đăng Hải', NULL, 5, '2020-08-30 06:48:58', '2020-08-30 06:48:58'),
(734, '2.1.1', '2', '0339005346', 4881532, 'Dung Trần Thùy', NULL, 2, '2020-08-30 07:43:15', '2020-08-30 07:43:15'),
(735, '2.1.1', '2', '0963408737', 4883153, 'Automata Ei', 'Scam', 1, '2020-08-30 08:11:05', '2020-08-30 08:11:05'),
(736, '2.1.1', '2', '0904110312', 4745647, '0904110312', NULL, 5, '2020-08-30 08:47:23', '2020-08-30 08:47:23'),
(737, '2.0.5', '1', '0813514738', 4883247, 'Phương Bùi', NULL, 5, '2020-08-30 08:50:06', '2020-08-30 08:50:06'),
(738, '2.0.5', '1', '0813514738', 4883247, 'Phương Bùi', NULL, 5, '2020-08-30 08:50:07', '2020-08-30 08:50:07'),
(739, '2.1.0', '2', '0394470382', 4843680, 'Hiền Nguyễn', NULL, 5, '2020-08-30 10:35:21', '2020-08-30 10:35:21'),
(740, '2.1.1', '2', '0837665752', 4883653, 'Con Meo', NULL, 5, '2020-08-30 12:07:10', '2020-08-30 12:07:10'),
(741, '2.1.1', '2', '0972181751', 4012364, 'Chi Phạm Khánh', 'Bài giảng hay, giải đáp dễ hiểu', 5, '2020-08-30 12:42:27', '2020-08-30 12:42:27'),
(742, '2.1.1', '2', '0913260103', 4802020, 'Nghiên Đàm', NULL, 5, '2020-08-30 12:58:07', '2020-08-30 12:58:07'),
(743, '2.1.1', '2', '0817366004', 4857341, 'Hậu Lê thúy', NULL, 5, '2020-08-30 13:11:43', '2020-08-30 13:11:43'),
(744, '2.1.1', '2', '0783860789', 4878347, 'Nhung Cẩm', NULL, 3, '2020-08-30 14:34:58', '2020-08-30 14:34:58'),
(745, '2.1.1', '2', '0345412172', 4882961, 'Minh Thành', NULL, 5, '2020-08-31 01:48:06', '2020-08-31 01:48:06'),
(746, '2.1.1', '2', '0857863399', 4884918, 'Huỳnh Vy', NULL, 5, '2020-08-31 04:04:28', '2020-08-31 04:04:28'),
(747, '2.1.1', '2', '0857863399', 4884918, 'Huỳnh Vy', NULL, 5, '2020-08-31 04:04:32', '2020-08-31 04:04:32'),
(748, '2.1.1', '2', '0354771618', 4884627, '0354771618', NULL, 3, '2020-08-31 04:16:02', '2020-08-31 04:16:02'),
(749, '2.1.1', '2', '0988002597', 4883877, 'Lệ Quỳnh', NULL, 2, '2020-08-31 06:52:35', '2020-08-31 06:52:35'),
(750, '2.1.1', '2', '0328505021', 4882744, 'Chuquoctuan', NULL, 5, '2020-08-31 07:07:39', '2020-08-31 07:07:39'),
(751, '2.1.1', '2', '0909274175', 4877968, '0909274175', NULL, 4, '2020-08-31 07:38:53', '2020-08-31 07:38:53'),
(752, '2.0.5', '1', '0944373738', 4861549, '0944373738', 'Quá xuất sắc', 5, '2020-08-31 10:25:54', '2020-08-31 10:25:54'),
(753, '2.1.1', '2', '0968086092', 4760733, 'Tài Vũ Trọng', NULL, 5, '2020-08-31 10:26:32', '2020-08-31 10:26:32'),
(754, '2.1.0', '2', '0961125401', 4886300, 'Ni Nu', NULL, 3, '2020-08-31 12:50:33', '2020-08-31 12:50:33'),
(755, '2.1.1', '2', '0387926240', 4886310, 'Xuân Ngọc', NULL, 4, '2020-08-31 12:55:12', '2020-08-31 12:55:12'),
(756, '2.1.1', '2', '0973366982', 2825914, 'Huệ  Trần Thị Mai', NULL, 5, '2020-08-31 12:56:56', '2020-08-31 12:56:56'),
(757, '2.0.5', '1', '0336907999', 4881488, 'Vũ Thị Xuân Mai', NULL, 3, '2020-08-31 13:02:27', '2020-08-31 13:02:27'),
(758, '2.1.1', '2', '0389933602', 2654499, 'Ken Pham', 'Abc', 5, '2020-08-31 13:29:03', '2020-08-31 13:29:03'),
(759, '2.1.0', '2', '0582065392', 4847698, 'Anh trần', NULL, 5, '2020-08-31 13:54:41', '2020-08-31 13:54:41'),
(760, '2.1.1', '2', '0776272583', 4840524, '0776272583', NULL, 5, '2020-08-31 14:07:33', '2020-08-31 14:07:33'),
(761, '2.1.1', '2', '0776272583', 4840524, '0776272583', NULL, 5, '2020-08-31 14:07:33', '2020-08-31 14:07:33'),
(762, '2.1.0', '2', '0907873979', 2955183, 'Na Trần Lê', 'Ok', 5, '2020-08-31 14:43:35', '2020-08-31 14:43:35'),
(763, '2.0.5', '1', '0988296107', 4460629, 'Mentan', 'E trân thành cảm ơn các thầy cô ,các ac ctv , các ac trợ giảng và HOCMAI đã cho e 1 môi trường học tập thật sự tuyệt vời😍Quyết định đặt niềm tin vào HOCMAI chưa bao giờ làm hối hận😻', 5, '2020-08-31 15:24:00', '2020-08-31 15:24:00'),
(764, '2.1.1', '2', '0961665774', 4875549, 'Thị Thu Uyên Nguyễn', NULL, 4, '2020-08-31 15:54:10', '2020-08-31 15:54:10'),
(765, '2.1.1', '2', '0896464401', 4887383, 'Anh Hồ Quỳnh', NULL, 5, '2020-09-01 03:14:43', '2020-09-01 03:14:43'),
(766, '2.1.1', '2', '0936597107', 4887579, 'Thị Kiều Oanh Lê', NULL, 5, '2020-09-01 04:29:52', '2020-09-01 04:29:52'),
(767, '2.0.5', '1', '0917322671', 4122540, 'Đạt Lê Đăng', NULL, 5, '2020-09-01 07:39:20', '2020-09-01 07:39:20'),
(768, '2.0.5', '1', '0394632117', 4886301, 'Cậu Vàng', NULL, 5, '2020-09-01 09:45:32', '2020-09-01 09:45:32'),
(769, '2.1.1', '2', '0919214453', 2898872, 'Vũ Cao Phát', NULL, 1, '2020-09-01 09:49:29', '2020-09-01 09:49:29'),
(770, '2.1.1', '2', '0798278263', 4560818, '0798278263', NULL, 5, '2020-09-01 10:56:42', '2020-09-01 10:56:42'),
(771, '2.1.1', '2', '0589102700', 4463580, 'Hồng Nguyên Nguyễn', 'Xuất sắc', 5, '2020-09-01 11:25:59', '2020-09-01 11:25:59'),
(772, '2.1.1', '2', '0963911009', 4888652, 'Lam Băng Nguyệt', NULL, 3, '2020-09-01 12:05:45', '2020-09-01 12:05:45'),
(773, '2.0.5', '1', '0865627221', 4888758, 'Linh Đào', NULL, 5, '2020-09-01 12:47:26', '2020-09-01 12:47:26'),
(774, '2.1.1', '2', '0962071813', 4889121, 'Thanhh Tiềnn Thanhh', NULL, 4, '2020-09-01 14:52:52', '2020-09-01 14:52:52'),
(775, '2.1.1', '2', '0386323307', 4363968, 'Lam Phan Hương', NULL, 3, '2020-09-01 15:25:24', '2020-09-01 15:25:24'),
(776, '2.1.1', '2', '0868827703', 3492442, 'Đức Huy Bùi', NULL, 5, '2020-09-01 19:44:49', '2020-09-01 19:44:49'),
(777, '2.1.1', '2', '0983461193', 4659117, '0983461193', 'Ứng dụng có lỗ hổng bảo mật lớn. Sau khi thay mật khẩu mới, tài khoản đăng nhập bằng mật khẩu cũ vẫn không bị thoát ra và vẫn có thể xem video bài giảng được. Tôi vô tình bị lộ mật khẩu, liên hệ tổng đài 2 ngày vẫn chưa được giải quyết.', 1, '2020-09-02 01:48:35', '2020-09-02 01:48:35'),
(778, '2.1.1', '2', '0352393429', 4889611, 'Cường Hạp Tiến Mạnh', 'Gooddd', 5, '2020-09-02 01:51:05', '2020-09-02 01:51:05'),
(779, '2.0.5', '1', '0792801079', 4203986, 'Nguyễn Gia Bảo', NULL, 5, '2020-09-02 02:49:37', '2020-09-02 02:49:37'),
(780, '2.0.5', '1', '0792801079', 4203986, 'Nguyễn Gia Bảo', NULL, 5, '2020-09-02 02:49:39', '2020-09-02 02:49:39'),
(781, '2.0.5', '1', '0988408999', 4867453, 'Nguyên Nguyễn Đăng Trí', NULL, 5, '2020-09-02 07:30:59', '2020-09-02 07:30:59'),
(782, '2.1.1', '2', '0918451473', 4531155, 'Phát Trần Minh', 'Ko có gì nhưng rất tuyệt =)))', 4, '2020-09-02 11:53:54', '2020-09-02 11:53:54'),
(783, '2.0.5', '1', '0706771559', 4890007, 'Lâm Nguyễn Thanh', NULL, 5, '2020-09-02 12:38:55', '2020-09-02 12:38:55'),
(784, '2.0.8', '2', '0363089877', 4826106, 'Pale Red Disambiguation', NULL, 5, '2020-09-02 14:10:09', '2020-09-02 14:10:09'),
(785, '2.1.1', '2', '0384480542', 3340932, '01684480542', NULL, 5, '2020-09-02 15:05:58', '2020-09-02 15:05:58'),
(786, '2.1.1', '2', '0967539200', 4697495, 'Nhung Tran', NULL, 5, '2020-09-02 15:08:31', '2020-09-02 15:08:31'),
(787, '2.1.0', '2', '0706656108', 4798529, 'Bích Nguyễn Kiều Ngọc', 'Phần mềm n', 5, '2020-09-03 02:06:13', '2020-09-03 02:06:13'),
(788, '2.1.1', '2', '0905562334', 2994211, 'Thinh Nguyen Tien', NULL, 4, '2020-09-03 03:39:13', '2020-09-03 03:39:13'),
(789, '2.1.1', '2', '0906575369', 4864533, 'Thiện Công Đặng', NULL, 3, '2020-09-03 03:45:24', '2020-09-03 03:45:24'),
(790, '2.1.0', '2', '0822917228', 4713111, 'My Hoàng Thảo', 'Thuận tiện hơn so với trên web', 5, '2020-09-03 07:40:47', '2020-09-03 07:40:47'),
(791, '2.1.1', '2', '0328996008', 4892305, 'Thi thanh Nguyen', 'Rất hay', 5, '2020-09-03 08:02:18', '2020-09-03 08:02:18'),
(792, '2.1.1', '2', '0353018374', 4892153, 'Hiếu Hồng', NULL, 5, '2020-09-03 09:45:42', '2020-09-03 09:45:42'),
(793, '2.1.1', '2', '0339832284', 4712544, 'Vi Trần Nguyên Huyền', NULL, 1, '2020-09-03 10:55:39', '2020-09-03 10:55:39'),
(794, '2.0.5', '1', '0365750509', 4880969, '0365750509', NULL, 5, '2020-09-03 12:11:37', '2020-09-03 12:11:37'),
(795, '2.1.1', '2', '0367259929', 4872210, '0367259929', NULL, 5, '2020-09-03 13:21:01', '2020-09-03 13:21:01'),
(796, '2.1.1', '2', '0353886436', 4648815, '0353886436', NULL, 5, '2020-09-03 13:31:16', '2020-09-03 13:31:16'),
(797, '2.0.5', '1', '0914828196', 4708764, '0914828196', NULL, 5, '2020-09-03 14:07:08', '2020-09-03 14:07:08'),
(798, '2.0.5', '1', '0901456390', 3336818, 'Trần David', NULL, 2, '2020-09-03 14:40:59', '2020-09-03 14:40:59'),
(799, '2.1.1', '2', '0354175606', 4741384, 'Lê Na', NULL, 5, '2020-09-03 15:10:48', '2020-09-03 15:10:48'),
(800, '2.1.1', '2', '0943726486', 4884642, '0943726486', NULL, 5, '2020-09-04 08:43:38', '2020-09-04 08:43:38'),
(801, '2.1.1', '2', '0707721137', 4892739, 'Phan Ngọc Minh Thư', NULL, 5, '2020-09-04 14:20:29', '2020-09-04 14:20:29'),
(802, '2.1.1', '2', '0794265015', 4893887, 'Ton Tai Toi', NULL, 5, '2020-09-05 03:55:45', '2020-09-05 03:55:45'),
(803, '2.1.1', '2', '0977535144', 4894095, 'Bắp B-', NULL, 4, '2020-09-05 04:27:01', '2020-09-05 04:27:01'),
(804, '2.1.1', '2', '0927341326', 4663013, 'Thanh Nguyễn Chí', NULL, 5, '2020-09-05 07:34:43', '2020-09-05 07:34:43'),
(805, '2.1.1', '2', '0963925202', 3929794, 'trang nguyễn thị kiều', 'Great!', 5, '2020-09-05 08:20:52', '2020-09-05 08:20:52'),
(806, '2.0.5', '1', '0963035290', 4824131, 'Victoria Hiền', NULL, 5, '2020-09-05 08:21:46', '2020-09-05 08:21:46'),
(807, '2.0.5', '1', '0917290532', 3464348, '0917290532', NULL, 5, '2020-09-05 09:47:06', '2020-09-05 09:47:06'),
(808, '2.1.1', '2', '0774481582', 4844293, 'Yến Nguyễn Thị Kim', 'Dạy học rất được', 5, '2020-09-05 12:22:17', '2020-09-05 12:22:17'),
(809, '2.1.1', '2', '0978075089', 4847725, '0978075089', NULL, 5, '2020-09-05 12:30:16', '2020-09-05 12:30:16'),
(810, '2.0.5', '1', '0393726168', 3984092, 'Thái Dương Bùi', NULL, 3, '2020-09-05 14:13:39', '2020-09-05 14:13:39'),
(811, '2.1.1', '2', '0905311331', 4893997, '0905311331', NULL, 5, '2020-09-05 14:14:09', '2020-09-05 14:14:09'),
(812, '2.1.1', '2', '0905311331', 4893997, '0905311331', NULL, 5, '2020-09-05 14:14:11', '2020-09-05 14:14:11'),
(813, '2.1.2', '2', '0943726486', 4884642, '0943726486', NULL, 5, '2020-09-06 00:44:03', '2020-09-06 00:44:03'),
(814, '2.1.1', '2', '0968172029', 4896929, 'Nhung Hằng', NULL, 5, '2020-09-06 01:57:14', '2020-09-06 01:57:14'),
(815, '2.1.1', '2', '0389256517', 4893256, 'Thuận Trần', NULL, 5, '2020-09-06 02:44:47', '2020-09-06 02:44:47'),
(816, '2.1.2', '2', '0764712866', 4897326, 'Nguyễn Thảo Ngọc', NULL, 5, '2020-09-06 06:09:50', '2020-09-06 06:09:50'),
(817, '2.1.1', '2', '0919175743', 4897345, 'Linh Đang Nguyễn', NULL, 5, '2020-09-06 06:32:21', '2020-09-06 06:32:21'),
(818, '2.1.2', '2', '0844725052', 4893494, 'Trọng Tú Lê', NULL, 5, '2020-09-06 07:43:11', '2020-09-06 07:43:11'),
(819, '2.0.5', '1', '0898105497', 4897406, 'Linh Nguyễn Kim Nhật', NULL, 5, '2020-09-06 08:43:44', '2020-09-06 08:43:44'),
(820, '2.1.1', '2', '0919234811', 4845899, '0919234811', NULL, 5, '2020-09-06 09:57:04', '2020-09-06 09:57:04'),
(821, '2.0.5', '1', '0978640571', 3051128, 'Lân Khuất Quang', NULL, 5, '2020-09-06 10:29:43', '2020-09-06 10:29:43'),
(822, '2.1.1', '2', '0974557426', 4864018, 'Nghi Trần Thụy Bảo', 'Quá oke', 5, '2020-09-06 12:01:27', '2020-09-06 12:01:27'),
(823, '2.0.5', '1', '0982710716', 4856488, '0982710716', NULL, 2, '2020-09-06 12:27:08', '2020-09-06 12:27:08'),
(824, '2.0.5', '1', '0934280860', 4895766, '0934280860', NULL, 5, '2020-09-06 13:35:12', '2020-09-06 13:35:12'),
(825, '2.0.5', '1', '0988453372', 4891915, '0988453372', 'Học miễn phí dc có vài phút thôi à ????', 1, '2020-09-07 02:04:23', '2020-09-07 02:04:23'),
(826, '2.0.5', '1', '0368307002', 4901168, 'Liên Hoàng', NULL, 5, '2020-09-07 10:44:46', '2020-09-07 10:44:46'),
(827, '2.0.5', '1', '0889978272', 4899950, '0889978272', NULL, 5, '2020-09-07 12:03:43', '2020-09-07 12:03:43'),
(828, '2.0.5', '1', '0924244204', 4829222, 'Dương Lâm', NULL, 5, '2020-09-07 12:46:44', '2020-09-07 12:46:44'),
(829, '2.1.2', '2', '0327499932', 3992778, 'doan  linh', NULL, 1, '2020-09-07 13:09:30', '2020-09-07 13:09:30'),
(830, '2.1.2', '2', '0378099073', 4900245, 'Sơn Trà', NULL, 5, '2020-09-07 13:12:51', '2020-09-07 13:12:51'),
(831, '2.1.2', '2', '0977686426', 4754425, 'Duyên Hoàng Mai', NULL, 5, '2020-09-07 13:44:44', '2020-09-07 13:44:44');
INSERT INTO `rate_apps` (`id`, `version`, `os`, `customer_username`, `customer_id`, `customer_name`, `customer_comment`, `rate`, `created_at`, `updated_at`) VALUES
(832, '2.0.5', '1', '0986709160', 4901763, 'Huy Nguyễn Quang', NULL, 5, '2020-09-07 13:58:36', '2020-09-07 13:58:36'),
(833, '2.1.1', '2', '0386427754', 4891826, 'phương channel', NULL, 5, '2020-09-07 14:03:26', '2020-09-07 14:03:26'),
(834, '2.1.2', '2', '0976493257', 4898659, 'Dung Phạm Thị Thùy', NULL, 5, '2020-09-07 14:07:18', '2020-09-07 14:07:18'),
(835, '2.1.2', '2', '0835630682', 4901936, 'Hằng Nt', NULL, 4, '2020-09-07 14:13:05', '2020-09-07 14:13:05'),
(836, '2.1.2', '2', '0367445486', 4688819, 'Thịnh Diệp Phúc', NULL, 5, '2020-09-07 14:38:35', '2020-09-07 14:38:35'),
(837, '2.0.6', '1', '0975853316', 4552603, 'Linh xinh', NULL, 4, '2020-09-08 03:27:37', '2020-09-08 03:27:37'),
(838, '2.0.8', '2', '0382774292', 4054024, 'Vũ  Thuỳ Trang Nguyễn', NULL, 5, '2020-09-08 04:31:20', '2020-09-08 04:31:20'),
(839, '2.1.2', '2', '0395271867', 4903788, 'Chanel Thiênn Ann', 'Rất hay ạ', 4, '2020-09-08 06:20:32', '2020-09-08 06:20:32'),
(840, '2.1.1', '2', '0948684030', 4858468, 'Anh Lưu Hải', NULL, 5, '2020-09-08 07:09:15', '2020-09-08 07:09:15'),
(841, '2.1.2', '2', '0347743534', 4903912, 'Hoa Nguyễn', NULL, 5, '2020-09-08 07:10:19', '2020-09-08 07:10:19'),
(842, '2.0.6', '1', '0973534706', 4904195, 'Duong Tran', NULL, 5, '2020-09-08 08:59:40', '2020-09-08 08:59:40'),
(843, '2.1.2', '2', '0913087986', 4871962, 'Trúc Phạm Văn', NULL, 5, '2020-09-08 09:52:28', '2020-09-08 09:52:28'),
(844, '2.1.2', '2', '0917672896', 3508506, 'Thảo Vân', NULL, 5, '2020-09-08 12:07:49', '2020-09-08 12:07:49'),
(845, '2.0.6', '1', '0915927348', 4212412, 'minh Do tuan', NULL, 5, '2020-09-08 12:37:05', '2020-09-08 12:37:05'),
(846, '2.0.6', '1', '0834275900', 4808536, 'Lâm Nguyễn Tùng', NULL, 5, '2020-09-08 12:48:37', '2020-09-08 12:48:37'),
(847, '2.1.2', '2', '0357849569', 4510303, '0357849569', NULL, 5, '2020-09-08 13:57:36', '2020-09-08 13:57:36'),
(848, '2.0.5', '1', '0799456639', 3349948, 'Cristal Viet', NULL, 4, '2020-09-08 13:59:13', '2020-09-08 13:59:13'),
(849, '2.1.2', '2', '0919175743', 4897345, 'Linh Đang Nguyễn', NULL, 5, '2020-09-08 14:04:20', '2020-09-08 14:04:20'),
(850, '2.1.2', '2', '0817687916', 4897515, 'Trang Nguyễn Huyền', NULL, 5, '2020-09-08 14:48:31', '2020-09-08 14:48:31'),
(851, '2.1.2', '2', '0817687916', 4897515, 'Trang Nguyễn Huyền', NULL, 5, '2020-09-08 14:48:31', '2020-09-08 14:48:31'),
(852, '2.1.2', '2', NULL, 4905231, 'Nguyễn Bảo linh', NULL, 5, '2020-09-08 14:53:42', '2020-09-08 14:53:42'),
(853, '2.1.2', '2', '0923430740', 4902285, 'Ngọc Mỹ Tiên Nguyễn', NULL, 5, '2020-09-08 22:45:39', '2020-09-08 22:45:39'),
(854, '2.1.2', '2', '0395049489', 4684457, 'phương Khuất', NULL, 5, '2020-09-09 08:49:23', '2020-09-09 08:49:23'),
(855, '2.1.2', '2', '0948443938', 4900916, 'Huế Hoàng', 'Cho tôi hỏi là cái này thì không có từng bài một hả? Phải xắp xếp từng bài một chứ :‹', 1, '2020-09-09 11:48:15', '2020-09-09 11:48:15'),
(856, '2.1.2', '2', '0904061177', 4802991, 'Quân Nguyen Anh', NULL, 4, '2020-09-09 12:35:52', '2020-09-09 12:35:52'),
(857, '2.1.2', '2', '0834239656', 4661725, 'Anh Ribi Thục', NULL, 5, '2020-09-09 13:49:46', '2020-09-09 13:49:46'),
(858, '2.1.2', '2', '0915920560', 4430268, 'CHIEN BUI XUAN', NULL, 5, '2020-09-09 13:54:13', '2020-09-09 13:54:13'),
(859, '2.1.2', '2', NULL, 4908275, 'Anh Đặng Thị Huyền', 'Tôi tải app hocmai.vn về điện thoại, nhưng cứ thoát khỏi app thì khi quay lại sẽ phải đăng nhập, rồi kích hoạt số điện thoại, hỏi lại thông tin cá nhân lại từ đầu, xong rồi thì tài khoản nó lại về như thông tin đầu tiên tôi đã cung cấp, rất mất thời gian', 2, '2020-09-09 14:32:00', '2020-09-09 14:32:00'),
(860, '2.1.2', '2', '0355371289', 4826286, 'Quý Đặng Thị', NULL, 5, '2020-09-09 14:48:54', '2020-09-09 14:48:54'),
(861, '2.1.2', '2', NULL, 4908637, 'Phương Cute', NULL, 3, '2020-09-09 17:17:00', '2020-09-09 17:17:00'),
(862, '2.0.6', '1', NULL, 4909417, 'Hồng Anh Killi', NULL, 5, '2020-09-10 05:31:34', '2020-09-10 05:31:34'),
(863, '2.1.2', '2', NULL, 4909746, 'Vy Huỳnh', 'Tốt', 5, '2020-09-10 07:35:58', '2020-09-10 07:35:58'),
(864, '2.0.6', '1', '0975353093', 1610344, 'Thủy Phạm Thị', 'Yêu Hm', 5, '2020-09-10 07:36:44', '2020-09-10 07:36:44'),
(865, '2.1.2', '2', '0347522566', 4672200, 'Hà Phạm Châu Hải', NULL, 4, '2020-09-10 08:20:08', '2020-09-10 08:20:08'),
(866, '2.1.2', '2', NULL, 4910274, 'Phương Nguyễn Thị Mai', NULL, 4, '2020-09-10 10:39:31', '2020-09-10 10:39:31'),
(867, '2.1.2', '2', NULL, 4910274, 'Phương Nguyễn Thị Mai', NULL, 5, '2020-09-10 10:41:20', '2020-09-10 10:41:20'),
(868, '2.1.2', '2', '0932063164', 2432741, 'Phuong Trinh', NULL, 5, '2020-09-10 12:13:26', '2020-09-10 12:13:26'),
(869, '2.1.2', '2', '0376136799', 3935036, 'Sơn Vũ Hùng', NULL, 5, '2020-09-10 12:56:44', '2020-09-10 12:56:44'),
(870, '2.1.2', '2', '0919074040', 4899866, 'Anh Nguyễn Đình Mai', NULL, 5, '2020-09-10 13:19:19', '2020-09-10 13:19:19'),
(871, '2.1.2', '2', '0936128443', 4909508, 'Quyên Vũ', NULL, 5, '2020-09-10 13:28:23', '2020-09-10 13:28:23'),
(872, '2.1.2', '2', '0792615950', 4909334, 'Trà My Phùng', NULL, 4, '2020-09-10 13:30:09', '2020-09-10 13:30:09'),
(873, '2.1.2', '2', NULL, 4911015, 'Thoa Thi', NULL, 5, '2020-09-10 13:41:07', '2020-09-10 13:41:07'),
(874, '2.0.5', '1', NULL, 4911027, 'Ánh Ngọc', NULL, 5, '2020-09-10 13:45:52', '2020-09-10 13:45:52'),
(875, '2.0.5', '1', NULL, 4911027, 'Ánh Ngọc', NULL, 5, '2020-09-10 13:45:57', '2020-09-10 13:45:57'),
(876, '2.0.5', '1', NULL, 4911027, 'Ánh Ngọc', NULL, 5, '2020-09-10 13:45:59', '2020-09-10 13:45:59'),
(877, '2.0.5', '1', NULL, 4911027, 'Ánh Ngọc', NULL, 5, '2020-09-10 13:45:59', '2020-09-10 13:45:59'),
(878, '2.0.5', '1', NULL, 4911027, 'Ánh Ngọc', NULL, 5, '2020-09-10 13:45:59', '2020-09-10 13:45:59'),
(879, '2.1.2', '2', '0386988033', 1983823, 'Nguyễn Trần Huy Khánh', 'Rất tốt rất hữu dụng', 5, '2020-09-10 14:53:26', '2020-09-10 14:53:26'),
(880, '2.1.2', '2', '0367423127', 4895831, 'Bùi Huy Hòa', 'Tuyệt vời', 5, '2020-09-10 14:56:51', '2020-09-10 14:56:51'),
(881, '2.0.6', '1', '0818516666', 4798469, 'Ngọc Nguyễn Bảo', NULL, 5, '2020-09-10 15:04:22', '2020-09-10 15:04:22'),
(882, '2.0.6', '1', '0818516666', 4798469, 'Ngọc Nguyễn Bảo', NULL, 5, '2020-09-10 15:04:23', '2020-09-10 15:04:23'),
(883, '2.0.6', '1', '0989363434', 4895420, 'Đỗ Quốc Minh', NULL, 5, '2020-09-10 15:13:01', '2020-09-10 15:13:01'),
(884, '2.0.6', '1', '0989363434', 4895420, 'Đỗ Quốc Minh', NULL, 5, '2020-09-10 15:13:04', '2020-09-10 15:13:04'),
(885, '2.0.6', '1', '0989363434', 4895420, 'Đỗ Quốc Minh', NULL, 5, '2020-09-10 15:13:04', '2020-09-10 15:13:04'),
(886, '2.0.6', '1', '0393726168', 3981968, 'Dương Thái', 'Lag,bản trên iPad nhiều bug', 1, '2020-09-10 15:49:31', '2020-09-10 15:49:31'),
(887, '2.0.6', '1', NULL, 4911850, 'Chuẩn Tòng', NULL, 5, '2020-09-11 01:41:04', '2020-09-11 01:41:04'),
(888, '2.0.6', '1', '0982710716', 4856488, '0982710716', NULL, 5, '2020-09-11 03:00:27', '2020-09-11 03:00:27'),
(889, '2.1.2', '2', '0856587331', 4741757, 'Hà Nguyễn Thanh', NULL, 4, '2020-09-11 07:20:34', '2020-09-11 07:20:34'),
(890, '2.0.6', '1', '0399923903', 1573043, 'Hiền Nguyễn Đặng Minh', 'good', 5, '2020-09-11 08:59:59', '2020-09-11 08:59:59'),
(891, '2.1.2', '2', '0348587068', 4900257, 'Kiên Quốc', 'Rất hay tuyệt vời', 5, '2020-09-11 10:32:27', '2020-09-11 10:32:27'),
(892, '2.1.2', '2', '0353730652', 4910568, 'Yến Nhi Nhi Yến', NULL, 5, '2020-09-11 11:49:58', '2020-09-11 11:49:58'),
(893, '2.0.6', '1', '0908687553', 4352858, NULL, NULL, 4, '2020-09-11 12:46:18', '2020-09-11 12:46:18'),
(894, '2.1.2', '2', NULL, 4913593, 'Moon Nguyệt', NULL, 5, '2020-09-11 12:58:24', '2020-09-11 12:58:24'),
(895, '2.1.2', '2', '0352976737', 4909686, 'Thị  Vân Phạm', NULL, 1, '2020-09-11 13:00:17', '2020-09-11 13:00:17'),
(896, '2.1.2', '2', NULL, 4913765, 'Uyên Chi', NULL, 4, '2020-09-11 13:25:55', '2020-09-11 13:25:55'),
(897, '2.1.2', '2', '0773656741', 4908144, 'tuong vi nguyen', 'Sao ko có môn công nghệ vậy HOCMAI', 4, '2020-09-11 14:02:58', '2020-09-11 14:02:58'),
(898, '2.0.6', '1', '0868538880', 4075410, 'Anh Minh', NULL, 5, '2020-09-11 14:21:34', '2020-09-11 14:21:34'),
(899, '2.0.6', '1', '0868538880', 4075410, 'Anh Minh', NULL, 5, '2020-09-11 14:21:36', '2020-09-11 14:21:36'),
(900, '2.0.6', '1', '0365128104', 4359848, 'Thư Minh', 'Rất tốt', 5, '2020-09-11 15:05:19', '2020-09-11 15:05:19'),
(901, '2.0.6', '1', '0983101219', 4328228, 'Trang Nguyễn Thị Minh', NULL, 5, '2020-09-12 02:03:33', '2020-09-12 02:03:33'),
(902, '2.1.2', '2', NULL, 4915767, 'cu kiều TV', NULL, 4, '2020-09-12 04:44:54', '2020-09-12 04:44:54'),
(903, '2.1.2', '2', NULL, 4916148, 'Trang Cát', NULL, 5, '2020-09-12 05:29:34', '2020-09-12 05:29:34'),
(904, '2.0.6', '1', '0961028724', 4257818, 'Nguyễn  Thị Hạnh', NULL, 5, '2020-09-12 05:30:49', '2020-09-12 05:30:49'),
(905, '2.1.2', '2', '0911093948', 4860532, 'Giang Phan Linh', NULL, 5, '2020-09-12 07:03:42', '2020-09-12 07:03:42'),
(906, '2.1.2', '2', '0917160274', 4894491, 'hương Nguyễn thu', NULL, 5, '2020-09-12 07:20:40', '2020-09-12 07:20:40'),
(907, '2.1.2', '2', '0374207053', 4691295, 'Quỳnh Phạm Lê Như', NULL, 3, '2020-09-12 07:56:57', '2020-09-12 07:56:57'),
(908, '2.0.6', '1', '0852349108', 4833157, 'Huyền Nguyễn', NULL, 5, '2020-09-12 09:12:04', '2020-09-12 09:12:04'),
(909, '2.1.2', '2', NULL, 4917062, 'Lanh Lương thuy', NULL, 4, '2020-09-12 11:34:16', '2020-09-12 11:34:16'),
(910, '2.1.2', '2', '0352537782', 4714893, 'Trang  Vui', NULL, 4, '2020-09-12 13:39:43', '2020-09-12 13:39:43'),
(911, '2.1.2', '2', NULL, 4917425, 'Phương Kim', NULL, 3, '2020-09-12 13:43:58', '2020-09-12 13:43:58'),
(912, '2.1.2', '2', '0983625541', 4716032, 'Hoa Trương Quỳnh', NULL, 5, '2020-09-12 14:27:13', '2020-09-12 14:27:13'),
(913, '2.0.6', '1', '0333286616', 4494400, 'Dương Thanh Vinh', 'Very good', 5, '2020-09-12 15:59:33', '2020-09-12 15:59:33'),
(914, '2.0.6', '1', '0367916483', 2982344, 'Tuyết Ánh', NULL, 5, '2020-09-12 17:22:56', '2020-09-12 17:22:56'),
(915, '2.1.2', '2', NULL, 4918050, 'Anh Tuấn Đinh', NULL, 1, '2020-09-12 19:45:10', '2020-09-12 19:45:10'),
(916, '2.1.2', '2', '0862587445', 4915277, 'huy tran', NULL, 5, '2020-09-13 01:26:07', '2020-09-13 01:26:07'),
(917, '2.1.2', '2', NULL, 4918336, 'Khánh Ngọc', NULL, 5, '2020-09-13 02:03:02', '2020-09-13 02:03:02'),
(918, '2.1.2', '2', '0966182659', 4363766, 'Oanh Trương', NULL, 5, '2020-09-13 02:55:19', '2020-09-13 02:55:19'),
(919, '2.1.2', '2', '0923343149', 4820596, 'Khoe Tran', 'Tốt', 5, '2020-09-13 03:05:30', '2020-09-13 03:05:30'),
(920, '2.1.2', '2', '0356630483', 4904178, 'Mỹ Hoàng', NULL, 5, '2020-09-13 03:44:59', '2020-09-13 03:44:59'),
(921, '2.1.2', '2', '0987403973', 4911915, 'Phúc Trần Vũ Hoàng', NULL, 4, '2020-09-13 04:34:37', '2020-09-13 04:34:37'),
(922, '2.0.6', '1', '0333201865', 4913299, 'Lý Trần', NULL, 5, '2020-09-13 08:13:11', '2020-09-13 08:13:11'),
(923, '2.0.6', '1', NULL, 4919442, 'Quỳnh Như Phan', NULL, 5, '2020-09-13 08:40:20', '2020-09-13 08:40:20'),
(924, '2.1.2', '2', NULL, 4919676, 'tâm Nguyên văn', NULL, 5, '2020-09-13 10:01:53', '2020-09-13 10:01:53'),
(925, '2.1.2', '2', '0352038002', 4906101, 'Lý Minh', NULL, 5, '2020-09-13 10:28:53', '2020-09-13 10:28:53'),
(926, '2.1.2', '2', NULL, 4920112, 'Nguyen Thanh Nguyen Thanh', NULL, 1, '2020-09-13 12:20:49', '2020-09-13 12:20:49'),
(927, '2.0.6', '1', '0905201279', 4894065, '0905201279', NULL, 5, '2020-09-13 13:09:12', '2020-09-13 13:09:12'),
(928, '2.1.2', '2', '0342946763', 4919278, 'Mùi Mùi', NULL, 5, '2020-09-13 13:42:15', '2020-09-13 13:42:15'),
(929, '2.0.6', '1', '0396904667', 4919022, 'Nga Phương', NULL, 1, '2020-09-13 13:56:51', '2020-09-13 13:56:51'),
(930, '2.0.6', '1', '0396904667', 4919022, 'Nga Phương', NULL, 1, '2020-09-13 13:56:52', '2020-09-13 13:56:52'),
(931, '2.1.2', '2', NULL, 4920873, 'Lan Ngọc', NULL, 3, '2020-09-13 14:17:57', '2020-09-13 14:17:57'),
(932, '2.0.6', '1', '0389308437', 4789846, 'Trang Nguyễn Kiều', NULL, 3, '2020-09-13 14:26:00', '2020-09-13 14:26:00'),
(933, '2.1.2', '2', '0375912766', 4920877, 'Hằng Nguyễn', NULL, 5, '2020-09-13 14:56:59', '2020-09-13 14:56:59'),
(934, '2.1.2', '2', '0377212010', 4913038, 'Nông tuấn kiệt', NULL, 3, '2020-09-13 15:20:07', '2020-09-13 15:20:07'),
(935, '2.1.2', '2', NULL, 4921217, 'An Nguyễn', NULL, 5, '2020-09-13 15:35:10', '2020-09-13 15:35:10'),
(936, '2.1.2', '2', NULL, 4921306, 'Dương Thùy', NULL, 5, '2020-09-13 15:39:48', '2020-09-13 15:39:48'),
(937, '2.0.6', '1', '0948766569', 4285180, 'duc mai', NULL, 5, '2020-09-13 16:41:01', '2020-09-13 16:41:01'),
(938, '2.0.6', '1', '0523528594', 4536998, 'Ý Phan', NULL, 5, '2020-09-13 22:30:51', '2020-09-13 22:30:51'),
(939, '2.1.2', '2', '0976020199', 2939428, '0976020199', NULL, 5, '2020-09-13 22:33:33', '2020-09-13 22:33:33'),
(940, '2.1.2', '2', NULL, 4921692, 'Mèo Xu', NULL, 5, '2020-09-14 01:41:47', '2020-09-14 01:41:47'),
(941, '2.1.2', '2', NULL, 4922269, 'Tuyền Bùi', NULL, 1, '2020-09-14 04:56:18', '2020-09-14 04:56:18'),
(942, '2.1.2', '2', '0988653712', 4900397, 'Thủy  Trịnh Thị Thanh', NULL, 5, '2020-09-14 06:42:09', '2020-09-14 06:42:09'),
(943, '2.0.6', '1', NULL, 4922839, 'Tú Phạm thị ngọc', NULL, 5, '2020-09-14 08:08:44', '2020-09-14 08:08:44'),
(944, '2.1.2', '2', '0393824174', 4817784, 'Thùy Trang', NULL, 5, '2020-09-14 08:32:07', '2020-09-14 08:32:07'),
(945, '2.1.2', '2', NULL, 4922982, 'Thuy nga pham', 'Tốt nhưng vẫn còn một số ít nhược điểm', 4, '2020-09-14 09:25:54', '2020-09-14 09:25:54'),
(946, '2.0.6', '1', '0911283393', 4867318, '0911283393', 'Cần phục hồi phần mềm , tốc độ quá chậm, thầy cô giảng vẫn hay , phần mềm hơi khó hiểu, mong dc phản hồi', 2, '2020-09-14 10:11:17', '2020-09-14 10:11:17'),
(947, '2.1.2', '2', '0833372018', 4688939, 'luyện  pen', 'Rất tốt', 5, '2020-09-14 10:40:41', '2020-09-14 10:40:41'),
(948, '2.1.2', '2', '0357329519', 4526171, 'Phan  Anh Vũ', NULL, 4, '2020-09-14 11:52:18', '2020-09-14 11:52:18'),
(949, '2.1.2', '2', '0398895316', 4743573, 'Lê Bắc', NULL, 5, '2020-09-14 12:02:27', '2020-09-14 12:02:27'),
(950, '2.1.2', '2', '0398895316', 4743573, 'Lê Bắc', NULL, 5, '2020-09-14 12:02:29', '2020-09-14 12:02:29'),
(951, '2.1.2', '2', '0398895316', 4743573, 'Lê Bắc', NULL, 5, '2020-09-14 12:02:30', '2020-09-14 12:02:30'),
(952, '2.1.2', '2', '0398895316', 4743573, 'Lê Bắc', NULL, 5, '2020-09-14 12:02:30', '2020-09-14 12:02:30'),
(953, '2.1.2', '2', '0398895316', 4743573, 'Lê Bắc', NULL, 5, '2020-09-14 12:02:30', '2020-09-14 12:02:30'),
(954, '2.1.2', '2', '0398895316', 4743573, 'Lê Bắc', NULL, 5, '2020-09-14 12:02:30', '2020-09-14 12:02:30'),
(955, '2.0.6', '1', '0982032022', 3393782, '0982032022', NULL, 5, '2020-09-14 12:52:56', '2020-09-14 12:52:56'),
(956, '2.1.0', '2', '0343213103', 4865338, 'Nhân Trần Trọng', NULL, 5, '2020-09-14 12:54:18', '2020-09-14 12:54:18'),
(957, '2.1.2', '2', NULL, 4924558, 'Bảo Vũ', 'Quá tuyệt vời,,,', 5, '2020-09-14 13:41:28', '2020-09-14 13:41:28'),
(958, '2.1.2', '2', NULL, 4925445, 'Khải Nguyễn Thị', NULL, 4, '2020-09-14 23:06:58', '2020-09-14 23:06:58'),
(959, '2.1.2', '2', NULL, 4925495, 'Trân Huỳnh', NULL, 2, '2020-09-14 23:51:38', '2020-09-14 23:51:38'),
(960, '2.1.2', '2', '0923114661', 4921778, 'Chiến Vương', NULL, 4, '2020-09-15 02:09:42', '2020-09-15 02:09:42'),
(961, '2.1.2', '2', NULL, 4926038, 'Thủy Lê', NULL, 5, '2020-09-15 04:38:30', '2020-09-15 04:38:30'),
(962, '2.1.2', '2', '0793889517', 3575302, 'Thiện Nguyễn', 'tốt', 5, '2020-09-15 04:43:05', '2020-09-15 04:43:05'),
(963, '2.1.2', '2', NULL, 4926082, 'Dol Danh', NULL, 5, '2020-09-15 04:54:35', '2020-09-15 04:54:35'),
(964, '2.1.2', '2', '0912436343', 4892199, 'Minh Nhat', 'Good.', 4, '2020-09-15 08:49:04', '2020-09-15 08:49:04'),
(965, '2.1.2', '2', '0376294793', 4828584, 'Thị Phan Yến Kim', NULL, 5, '2020-09-15 10:00:41', '2020-09-15 10:00:41'),
(966, '2.1.2', '2', '0978628720', 4925119, 'thùy Linh Phạm', 'Ứng dụng tiện ích nhưng phần trả lời thắc mắc hơi châm', 5, '2020-09-15 11:27:53', '2020-09-15 11:27:53'),
(967, '2.1.2', '2', '0987817507', 4813008, '0987817507', 'Tuyệt vời :-)', 5, '2020-09-15 11:35:17', '2020-09-15 11:35:17'),
(968, '2.1.2', '2', '0917793661', 4358951, 'bình', 'Học mãi giúp em học tập tốt hơn, giỏi hơn và đạt học sinh giỏi', 5, '2020-09-15 11:42:45', '2020-09-15 11:42:45'),
(969, '2.1.2', '2', '0398370203', 4915344, 'Thư Thư', NULL, 5, '2020-09-15 13:13:24', '2020-09-15 13:13:24'),
(970, '2.0.6', '1', '0983173532', 4916984, '0983173532', NULL, 5, '2020-09-15 13:33:19', '2020-09-15 13:33:19'),
(971, '2.1.2', '2', '0776272583', 4840524, '0776272583', NULL, 5, '2020-09-15 13:40:39', '2020-09-15 13:40:39'),
(972, '2.0.5', '1', '0917971283', 4925912, 'Huy Bùi Thái', NULL, 4, '2020-09-15 13:56:21', '2020-09-15 13:56:21'),
(973, '2.0.5', '1', '0917971283', 4925912, 'Huy Bùi Thái', NULL, 4, '2020-09-15 13:56:23', '2020-09-15 13:56:23'),
(974, '2.0.5', '1', '0917971283', 4925912, 'Huy Bùi Thái', NULL, 4, '2020-09-15 13:56:24', '2020-09-15 13:56:24'),
(975, '2.1.2', '2', '0933223894', 4794034, 'Phạm Hồng Hà', NULL, 5, '2020-09-15 14:50:35', '2020-09-15 14:50:35'),
(976, '2.0.6', '1', '0977788733', 4925903, '0977788733', NULL, 5, '2020-09-15 14:52:05', '2020-09-15 14:52:05'),
(977, '2.0.6', '1', '0977788733', 4925903, '0977788733', NULL, 5, '2020-09-15 14:52:07', '2020-09-15 14:52:07'),
(978, '2.1.2', '2', NULL, 4928378, 'Minh Dương', 'Tôi thít chính sách và các điều khoản với nội dung rất là phong phú .', 5, '2020-09-15 15:41:45', '2020-09-15 15:41:45'),
(979, '2.1.2', '2', NULL, 4928753, 'Phương Nguyễn', NULL, 5, '2020-09-16 02:00:48', '2020-09-16 02:00:48'),
(980, '2.1.2', '2', '0916800670', 2517004, 'Vinh Đỗ Xuân', NULL, 4, '2020-09-16 04:54:09', '2020-09-16 04:54:09'),
(981, '2.1.2', '2', '0858071286', 4928477, 'Lê Nguyễn', NULL, 1, '2020-09-16 05:31:46', '2020-09-16 05:31:46'),
(982, '2.0.6', '1', '0971715520', 4123626, 'Diệp Trịnh Quyền', NULL, 5, '2020-09-16 05:46:36', '2020-09-16 05:46:36'),
(983, '2.1.3', '2', NULL, 4930203, 'Hien Pham Minh Hien', NULL, 5, '2020-09-16 11:40:04', '2020-09-16 11:40:04'),
(984, '2.1.3', '2', '0948317111', 4926664, 'Kiên Quốc', 'Quá hay , tư vấn nhiệt tình,học dễ hiểu', 5, '2020-09-16 12:58:25', '2020-09-16 12:58:25'),
(985, '2.0.6', '1', NULL, 4930755, 'Gia Bảo Trần', 'Tốt lắm tiếp tục phát huy nhá', 5, '2020-09-16 13:23:07', '2020-09-16 13:23:07'),
(986, '2.1.3', '2', '0398895316', 4743573, 'Hoài Bắc Lê Đình', NULL, 5, '2020-09-16 13:33:48', '2020-09-16 13:33:48'),
(987, '2.1.3', '2', '0985565678', 4900331, '0985565678', NULL, 4, '2020-09-16 13:37:48', '2020-09-16 13:37:48'),
(988, '2.1.3', '2', NULL, 4930937, 'nha xe trung luyen 2008', NULL, 5, '2020-09-16 13:56:18', '2020-09-16 13:56:18'),
(989, '2.0.6', '1', '0915750579', 4922893, 'Quảng Tiến Trần', NULL, 5, '2020-09-16 14:10:03', '2020-09-16 14:10:03'),
(990, '2.0.6', '1', '0915750579', 4922893, 'Quảng Tiến Trần', NULL, 5, '2020-09-16 14:10:04', '2020-09-16 14:10:04'),
(991, '2.0.6', '1', '0915750579', 4922893, 'Quảng Tiến Trần', NULL, 5, '2020-09-16 14:10:04', '2020-09-16 14:10:04'),
(992, '2.0.6', '1', '0915750579', 4922893, 'Quảng Tiến Trần', NULL, 5, '2020-09-16 14:10:04', '2020-09-16 14:10:04'),
(993, '2.0.6', '1', '0915750579', 4922893, 'Quảng Tiến Trần', NULL, 5, '2020-09-16 14:10:05', '2020-09-16 14:10:05'),
(994, '2.0.6', '1', NULL, 4931074, '001477 1409', NULL, 5, '2020-09-16 14:11:59', '2020-09-16 14:11:59'),
(995, '2.1.3', '2', NULL, 4931512, 'mồn lèo cute', 'Ứng dụng quá tuyệt luôn,mong rằng tôi có thể là hs khá😁💖', 5, '2020-09-16 16:02:02', '2020-09-16 16:02:02'),
(996, '2.0.6', '1', '0332184255', 4926926, 'Phương Nguyễn Thu', NULL, 5, '2020-09-16 17:48:18', '2020-09-16 17:48:18'),
(997, '2.0.6', '1', '0396895398', 4756247, 'Ngô  Thuý', NULL, 5, '2020-09-16 21:02:49', '2020-09-16 21:02:49'),
(998, '2.0.6', '1', '0762932617', 4639997, 'Huỳnh  Khương', NULL, 5, '2020-09-17 06:14:11', '2020-09-17 06:14:11'),
(999, '2.0.6', '1', '0975353093', 4926590, 'Khoa Nguyễn Đăng', NULL, 5, '2020-09-17 07:03:48', '2020-09-17 07:03:48'),
(1000, '2.1.3', '2', '0816606677', 4700627, 'Anh Lê Bá Việt', NULL, 5, '2020-09-17 09:01:23', '2020-09-17 09:01:23'),
(1001, '2.1.3', '2', NULL, 4932667, 'Ánh Đỗ', NULL, 5, '2020-09-17 09:18:41', '2020-09-17 09:18:41'),
(1002, '2.1.3', '2', '0974483623', 4924233, 'Bích Lê', NULL, 5, '2020-09-17 12:16:41', '2020-09-17 12:16:41'),
(1003, '2.1.3', '2', '0333527628', 4666040, 'Lan Phạm Thị', 'Good', 5, '2020-09-17 12:36:21', '2020-09-17 12:36:21'),
(1004, '2.1.2', '2', '0972846829', 4800446, '0972846829', NULL, 4, '2020-09-17 13:34:54', '2020-09-17 13:34:54'),
(1005, '2.1.3', '2', '0362394348', 4892908, 'Hùng Dương Xuân', NULL, 4, '2020-09-17 14:36:26', '2020-09-17 14:36:26'),
(1006, '2.0.6', '1', NULL, 4935232, 'Hằng Ngô Thi Thu', NULL, 5, '2020-09-18 05:27:07', '2020-09-18 05:27:07'),
(1007, '2.1.3', '2', '0825033509', 4253740, 'NGOC DUNG NGUYEN THI', NULL, 5, '2020-09-18 07:40:39', '2020-09-18 07:40:39'),
(1008, '2.0.6', '1', '0939968689', 4399205, 'cúc Lê thị thu', NULL, 5, '2020-09-18 09:17:25', '2020-09-18 09:17:25'),
(1009, '2.1.3', '2', '0988841041', 4737229, 'Kaspersky Hoang', NULL, 5, '2020-09-18 09:57:17', '2020-09-18 09:57:17'),
(1010, '2.0.6', '1', '0373648688', 4919195, '000228 0718', NULL, 2, '2020-09-18 12:12:42', '2020-09-18 12:12:42'),
(1011, '2.1.3', '2', NULL, 4936303, 'An Nguyễn Thị', NULL, 4, '2020-09-18 12:58:32', '2020-09-18 12:58:32'),
(1012, '2.0.5', '1', '0979586209', 4860664, 'Dương Đặng Thái', NULL, 5, '2020-09-18 13:07:59', '2020-09-18 13:07:59'),
(1013, '2.1.3', '2', '0343637922', 4916928, '0343637922', NULL, 5, '2020-09-18 13:34:16', '2020-09-18 13:34:16'),
(1014, '2.0.6', '1', '0976383645', 1701539, 'Nam Nguyễn', NULL, 1, '2020-09-18 13:35:39', '2020-09-18 13:35:39'),
(1015, '2.0.6', '1', '0832867188', 4216048, 'Ngọc Nguyễn Hà Khánh', NULL, 4, '2020-09-18 13:50:01', '2020-09-18 13:50:01'),
(1016, '2.0.6', '1', '0971928669', 2654021, 'Trang Mai', NULL, 5, '2020-09-18 14:30:18', '2020-09-18 14:30:18'),
(1017, '2.0.6', '1', '0359067046', 4936982, 'Quỳnh  Trương', NULL, 5, '2020-09-18 14:47:32', '2020-09-18 14:47:32'),
(1018, '2.0.6', '1', NULL, 4936959, 'Phát Võ', NULL, 5, '2020-09-18 14:49:19', '2020-09-18 14:49:19'),
(1019, '2.1.3', '2', '0355698519', 4936195, 'Cv Hj', NULL, 5, '2020-09-18 14:49:37', '2020-09-18 14:49:37'),
(1020, '2.0.6', '1', '0964788036', 4921713, '0964788036', 'Học rất tốt', 5, '2020-09-18 14:54:34', '2020-09-18 14:54:34'),
(1021, '2.1.2', '2', '0523727427', 4755917, 'Hoàn Lê Ngọc Khải', NULL, 3, '2020-09-18 16:39:26', '2020-09-18 16:39:26'),
(1022, '2.0.6', '1', '0896679445', 4923385, 'Nhàn Nguyễn Thanh', 'Ok', 5, '2020-09-19 03:40:04', '2020-09-19 03:40:04'),
(1023, '2.1.3', '2', '0947838720', 4822258, 'Duyên Phạm Hoàng Khánh', NULL, 5, '2020-09-19 06:50:02', '2020-09-19 06:50:02'),
(1024, '2.0.8', '2', '0772594623', 4765487, 'Huy Trịnh Nguyễn Gia', NULL, 5, '2020-09-19 07:02:41', '2020-09-19 07:02:41'),
(1025, '2.1.3', '2', NULL, 4938279, 'Phương Thảo Lê T.', NULL, 5, '2020-09-19 08:50:49', '2020-09-19 08:50:49'),
(1026, '2.1.3', '2', NULL, 4938279, 'Phương Thảo Lê T.', NULL, 5, '2020-09-19 08:50:49', '2020-09-19 08:50:49'),
(1027, '2.1.3', '2', NULL, 4938578, 'Thủy Trần', NULL, 5, '2020-09-19 11:08:04', '2020-09-19 11:08:04'),
(1028, '2.1.3', '2', NULL, 4938671, 'Hằng Nguyễn Thị Thanh', NULL, 5, '2020-09-19 11:50:43', '2020-09-19 11:50:43'),
(1029, '2.1.3', '2', '0817687916', 4897515, 'Nguyễn Huyền Trang', NULL, 5, '2020-09-19 12:27:22', '2020-09-19 12:27:22'),
(1030, '2.1.3', '2', NULL, 4938945, 'Hòa nguyễn', NULL, 5, '2020-09-19 13:22:09', '2020-09-19 13:22:09'),
(1031, '2.1.3', '2', '0376064886', 4907866, 'Chiến Thắng Trần', NULL, 3, '2020-09-19 13:48:55', '2020-09-19 13:48:55'),
(1032, '2.1.3', '2', NULL, 4939021, 'Hien Le', NULL, 5, '2020-09-19 14:14:00', '2020-09-19 14:14:00'),
(1033, '2.1.3', '2', '0942454676', 4926103, '0942454676', NULL, 5, '2020-09-19 15:04:52', '2020-09-19 15:04:52'),
(1034, '2.1.2', '2', '0365298193', 4937229, 'Vux phương diệu', NULL, 5, '2020-09-19 15:42:18', '2020-09-19 15:42:18'),
(1035, '2.1.3', '2', '0374621438', 4861605, 'Linh Nguyễn Hoàng Trúc', NULL, 5, '2020-09-19 23:50:16', '2020-09-19 23:50:16'),
(1036, '2.1.3', '2', '0378597314', 4938417, 'Chi Hai Phan', NULL, 4, '2020-09-20 00:48:40', '2020-09-20 00:48:40'),
(1037, '2.1.3', '2', '0358238987', 4471940, 'Châu Bảo', NULL, 5, '2020-09-20 01:06:07', '2020-09-20 01:06:07'),
(1038, '2.0.5', '1', '0935152346', 4221040, 'BÁCH NGUYỄN THANH', NULL, 5, '2020-09-20 01:20:29', '2020-09-20 01:20:29'),
(1039, '2.1.3', '2', '0342267781', 4889571, 'Thảo Nguyễn', NULL, 5, '2020-09-20 02:29:36', '2020-09-20 02:29:36'),
(1040, '2.1.3', '2', NULL, 4939809, 'Thoa Kim', NULL, 5, '2020-09-20 02:48:04', '2020-09-20 02:48:04'),
(1041, '2.1.3', '2', NULL, 4939801, 'Nguyễn Sơn', NULL, 4, '2020-09-20 02:50:39', '2020-09-20 02:50:39'),
(1042, '2.1.3', '2', '0886273523', 4667806, 'Tuấn Nguyễn', NULL, 5, '2020-09-20 03:33:54', '2020-09-20 03:33:54'),
(1043, '2.1.3', '2', NULL, 4939867, 'Nguyễn Thị Nga', NULL, 5, '2020-09-20 03:37:19', '2020-09-20 03:37:19'),
(1044, '2.1.3', '2', '0352874080', 4266320, 'ngân  nguyễn thị hồng', NULL, 4, '2020-09-20 05:52:16', '2020-09-20 05:52:16'),
(1045, '2.1.3', '2', '0945618123', 4352501, '0945618123', NULL, 5, '2020-09-20 08:04:00', '2020-09-20 08:04:00'),
(1046, '2.1.3', '2', '0948593435', 4603710, 'Tuyết Lam Anobe''x', NULL, 1, '2020-09-20 08:52:05', '2020-09-20 08:52:05'),
(1047, '2.1.3', '2', '0988455382', 4628777, 'trang thu', NULL, 5, '2020-09-20 09:09:50', '2020-09-20 09:09:50'),
(1048, '2.1.3', '2', NULL, 4941384, 'Lê Ánh Phương', NULL, 5, '2020-09-20 12:46:35', '2020-09-20 12:46:35'),
(1049, '2.1.3', '2', NULL, 4941668, 'Ánh Hồng', NULL, 5, '2020-09-20 13:57:24', '2020-09-20 13:57:24'),
(1050, '2.1.3', '2', '0799053891', 4487283, 'Thục Nương', NULL, 5, '2020-09-20 14:18:39', '2020-09-20 14:18:39'),
(1051, '2.1.3', '2', '0865529783', 4737917, 'Ko Yuki', NULL, 1, '2020-09-20 14:43:52', '2020-09-20 14:43:52'),
(1052, '2.1.3', '2', '0862541475', 4935315, 'Oanh Trần Huỳnh Phương', NULL, 3, '2020-09-20 14:45:55', '2020-09-20 14:45:55'),
(1053, '2.1.3', '2', NULL, 4942105, 'hồ Nhan', NULL, 1, '2020-09-20 15:39:49', '2020-09-20 15:39:49'),
(1054, '2.1.3', '2', '0984803301', 4939887, NULL, 'Nếu thêm tính năng mới thì tuyệt!', 5, '2020-09-21 04:59:38', '2020-09-21 04:59:38'),
(1055, '2.1.3', '2', '0364738045', 4908173, 'Huy Lu Ca', NULL, 4, '2020-09-21 06:20:58', '2020-09-21 06:20:58'),
(1056, '2.1.3', '2', '0982622580', 4936705, 'Lý vy chơn Lý', NULL, 1, '2020-09-21 08:44:16', '2020-09-21 08:44:16'),
(1057, '2.0.6', '1', '0963035290', 2091560, 'vuthanhhien96@gmail.com vuthanhhien96@gmail.com', NULL, 5, '2020-09-21 09:57:32', '2020-09-21 09:57:32'),
(1058, '2.0.6', '1', '0963035290', 2091560, 'vuthanhhien96@gmail.com vuthanhhien96@gmail.com', NULL, 5, '2020-09-21 09:57:34', '2020-09-21 09:57:34'),
(1059, '2.0.6', '1', '0387101259', 3543214, 'Cẩm Tiên', NULL, 5, '2020-09-21 13:19:52', '2020-09-21 13:19:52'),
(1060, '2.1.3', '2', NULL, 4944987, 'thanh nhã ngô', 'Hay', 5, '2020-09-21 13:37:02', '2020-09-21 13:37:02'),
(1061, '2.1.3', '2', '0962418882', 4941737, 'Phương Minh', NULL, 1, '2020-09-21 13:45:14', '2020-09-21 13:45:14'),
(1062, '2.0.6', '1', '0787190222', 4780413, 'Mạnh Nguyễn Hữu', NULL, 5, '2020-09-21 15:02:38', '2020-09-21 15:02:38'),
(1063, '2.1.3', '2', '0964781937', 4944230, 'Minh Hồng', NULL, 4, '2020-09-21 16:19:03', '2020-09-21 16:19:03'),
(1064, '2.0.6', '1', NULL, 4945879, 'hương Bùi thị lan', NULL, 5, '2020-09-22 01:24:07', '2020-09-22 01:24:07'),
(1065, '2.1.3', '2', NULL, 4946536, 'Hương Đỗ', NULL, 4, '2020-09-22 05:50:58', '2020-09-22 05:50:58'),
(1066, '2.1.3', '2', '0971787136', 4943511, '0971787136', NULL, 5, '2020-09-22 07:04:08', '2020-09-22 07:04:08'),
(1067, '2.1.3', '2', '0357434428', 4945821, 'Tiền Nguyen', NULL, 5, '2020-09-22 07:34:17', '2020-09-22 07:34:17'),
(1068, '2.1.3', '2', '0983493233', 4931273, 'linh kim', NULL, 4, '2020-09-22 09:13:48', '2020-09-22 09:13:48'),
(1069, '2.1.3', '2', NULL, 4947013, 'Mai linh Phạm', NULL, 4, '2020-09-22 09:21:10', '2020-09-22 09:21:10'),
(1070, '2.0.6', '1', '0902261626', 4906624, NULL, NULL, 3, '2020-09-22 10:43:59', '2020-09-22 10:43:59'),
(1071, '2.1.0', '2', '0372126582', 3178317, 'Le Thanhduy', NULL, 2, '2020-09-22 11:26:33', '2020-09-22 11:26:33'),
(1072, '2.0.6', '1', NULL, 4947614, 'Em Tuân', NULL, 3, '2020-09-22 12:32:31', '2020-09-22 12:32:31'),
(1073, '2.0.6', '1', '0979939538', 4880423, 'Chiêm Hàng Nhật', NULL, 5, '2020-09-22 12:48:04', '2020-09-22 12:48:04'),
(1074, '2.1.3', '2', NULL, 4947685, 'Ly Vũ Thảo', NULL, 5, '2020-09-22 12:52:14', '2020-09-22 12:52:14'),
(1075, '2.1.3', '2', '0853210231', 3980090, 'Cơ Phạm Thiên', NULL, 5, '2020-09-22 12:58:44', '2020-09-22 12:58:44'),
(1076, '2.1.3', '2', NULL, 4947836, 'Nè Băng', NULL, 5, '2020-09-22 13:37:21', '2020-09-22 13:37:21'),
(1077, '2.0.6', '1', '0904011614', 4887544, '0904011614', NULL, 4, '2020-09-22 13:53:00', '2020-09-22 13:53:00'),
(1078, '2.1.3', '2', NULL, 4948077, 'Trọng Phúc', NULL, 5, '2020-09-22 14:10:53', '2020-09-22 14:10:53'),
(1079, '2.1.3', '2', NULL, 4948118, 'Hoa Trieu Thi', NULL, 5, '2020-09-22 14:23:21', '2020-09-22 14:23:21'),
(1080, '2.1.3', '2', NULL, 4948183, 'Dau Dang', NULL, 4, '2020-09-22 14:45:08', '2020-09-22 14:45:08'),
(1081, '2.1.3', '2', NULL, 4948267, 'Giang Hoàng Thị Hương', 'Như shit', 1, '2020-09-22 14:45:27', '2020-09-22 14:45:27'),
(1082, '2.0.6', '1', '0352858675', 4910325, 'Phạm Vương Quốc Anh', 'Hay và bổ ích', 5, '2020-09-22 14:52:09', '2020-09-22 14:52:09'),
(1083, '2.1.3', '2', '0973256320', 4801629, 'Giang Chu Thị Hương', NULL, 5, '2020-09-22 15:36:08', '2020-09-22 15:36:08'),
(1084, '2.0.6', '1', NULL, 4948557, '000712 2148', NULL, 5, '2020-09-22 22:07:38', '2020-09-22 22:07:38'),
(1085, '2.1.3', '2', NULL, 4948591, 'Giang Cầm', NULL, 3, '2020-09-22 22:44:47', '2020-09-22 22:44:47'),
(1086, '2.1.3', '2', '0935681646', 4927504, 'Tâm Nguyễn Đức', 'Nhờ app mà e học khá lên rất nhiều ạ e cảm ơn các thầy cô đã tạo một app tuyệt vời như v', 5, '2020-09-23 03:19:51', '2020-09-23 03:19:51'),
(1087, '2.1.3', '2', '0988284160', 4948840, 'Có Đỗ Thị', NULL, 5, '2020-09-23 03:50:07', '2020-09-23 03:50:07'),
(1088, '2.0.6', '1', '0917831174', 4558635, 'Vân Annh', NULL, 5, '2020-09-23 04:41:27', '2020-09-23 04:41:27'),
(1089, '2.1.3', '2', NULL, 4949355, 'Huy Nguyễn', NULL, 5, '2020-09-23 06:15:52', '2020-09-23 06:15:52'),
(1090, '2.1.3', '2', NULL, 4949453, 'Thoan Trần', NULL, 2, '2020-09-23 06:49:39', '2020-09-23 06:49:39'),
(1091, '2.1.3', '2', '0978089923', 3635218, 'Nguyễn Ngọc Phương', NULL, 5, '2020-09-23 07:38:04', '2020-09-23 07:38:04'),
(1092, '2.1.3', '2', '0944680997', 4399819, 'Long Lê Quốc', NULL, 5, '2020-09-23 11:00:59', '2020-09-23 11:00:59'),
(1093, '2.1.3', '2', NULL, 4950271, 'Quỳnh Trần An', 'Good', 5, '2020-09-23 12:42:53', '2020-09-23 12:42:53'),
(1094, '2.1.3', '2', '0913311789', 4260144, 'Ngọc Bảo', NULL, 5, '2020-09-23 12:49:59', '2020-09-23 12:49:59'),
(1095, '2.1.3', '2', '0365397656', 4018986, 'Giang Lưu Hương', NULL, 5, '2020-09-23 13:13:32', '2020-09-23 13:13:32'),
(1096, '2.0.6', '1', NULL, 4950570, 'Trung Tokuda', NULL, 3, '2020-09-23 13:16:04', '2020-09-23 13:16:04'),
(1097, '2.1.2', '2', NULL, 4950765, 'Thư Nguyễn', NULL, 5, '2020-09-23 13:51:43', '2020-09-23 13:51:43'),
(1098, '2.1.3', '2', '0366250764', 3786692, 'Thiện Nguyễn Ngọc', NULL, 5, '2020-09-23 14:54:56', '2020-09-23 14:54:56'),
(1099, '2.1.3', '2', NULL, 4951024, 'Nam Nguyen', NULL, 5, '2020-09-23 14:58:59', '2020-09-23 14:58:59'),
(1100, '2.1.3', '2', NULL, 4951083, 'Quang Phương Mạnh', 'Đròk', 5, '2020-09-23 15:01:20', '2020-09-23 15:01:20'),
(1101, '2.1.3', '2', '0976580178', 4847506, '0976580178', NULL, 5, '2020-09-23 15:02:56', '2020-09-23 15:02:56'),
(1102, '2.1.3', '2', '0355115277', 4788378, '0355115277', NULL, 5, '2020-09-23 15:31:12', '2020-09-23 15:31:12'),
(1103, '2.0.6', '1', '0979115157', 4945960, '0979115157', NULL, 5, '2020-09-23 20:44:02', '2020-09-23 20:44:02'),
(1104, '2.1.3', '2', '0965819898', 4758836, 'Xuân Cường Võ', 'Xuất sắc', 5, '2020-09-23 22:32:59', '2020-09-23 22:32:59'),
(1105, '2.1.3', '2', '0918452252', 4897869, 'Thịnh Ngô Trường', NULL, 5, '2020-09-23 23:49:43', '2020-09-23 23:49:43'),
(1106, '2.1.3', '2', '0917910111', 4903366, 'Hòa Ngọc', NULL, 5, '2020-09-24 02:22:38', '2020-09-24 02:22:38'),
(1107, '2.1.3', '2', '0917910111', 4903366, 'Hòa Ngọc', NULL, 5, '2020-09-24 02:22:41', '2020-09-24 02:22:41'),
(1108, '2.1.3', '2', '0816457496', 4950941, 'Ngoc Han Le thi', NULL, 5, '2020-09-24 03:33:11', '2020-09-24 03:33:11'),
(1109, '2.1.3', '2', '0383012878', 4749076, 'Lê Thư', NULL, 5, '2020-09-24 05:26:58', '2020-09-24 05:26:58'),
(1110, '2.1.3', '2', '0966970852', 3663716, 'Nam Trung', 'Very good', 5, '2020-09-24 07:25:35', '2020-09-24 07:25:35'),
(1111, '2.1.3', '2', '0354175606', 4741384, 'Lê Na', NULL, 5, '2020-09-24 08:15:50', '2020-09-24 08:15:50'),
(1112, '2.1.3', '2', '0979524859', 4947956, 'Thiết Kiếm', 'Không có soạn bài', 1, '2020-09-24 11:05:51', '2020-09-24 11:05:51'),
(1113, '2.0.6', '1', '0912848466', 4925622, 'Minh Nhat', NULL, 2, '2020-09-24 11:15:07', '2020-09-24 11:15:07'),
(1114, '2.1.3', '2', NULL, 4952601, 'Ha Hoang', NULL, 5, '2020-09-24 12:24:08', '2020-09-24 12:24:08'),
(1115, '2.1.3', '2', '0965633659', 4941101, 'Nga Kim', NULL, 5, '2020-09-24 12:44:10', '2020-09-24 12:44:10'),
(1116, '2.1.3', '2', NULL, 4953347, 'Vinh Trịnh', NULL, 5, '2020-09-24 13:02:07', '2020-09-24 13:02:07'),
(1117, '2.1.3', '2', NULL, 4953361, 'Truc Thanh', NULL, 5, '2020-09-24 13:02:22', '2020-09-24 13:02:22'),
(1118, '2.0.6', '1', '0397259911', 4883576, 'Nhi Nguyễn Đặng Phương', NULL, 5, '2020-09-24 14:29:58', '2020-09-24 14:29:58'),
(1119, '2.0.6', '1', '0914789878', 4916493, '0914789878', NULL, 5, '2020-09-24 15:11:10', '2020-09-24 15:11:10'),
(1120, '2.0.6', '1', '0914789878', 4916493, '0914789878', NULL, 5, '2020-09-24 15:11:11', '2020-09-24 15:11:11'),
(1121, '2.1.3', '2', '0346367503', 4931377, 'Liên Trần', NULL, 5, '2020-09-24 16:11:05', '2020-09-24 16:11:05'),
(1122, '2.1.3', '2', '0976343830', 4263174, 'DOdang Khoa', NULL, 4, '2020-09-24 23:47:07', '2020-09-24 23:47:07'),
(1123, '2.0.6', '1', '0942353992', 4904206, '0942353992', NULL, 5, '2020-09-25 01:15:55', '2020-09-25 01:15:55'),
(1124, '2.0.6', '1', '0971209812', 4910518, 'Lan Nguyễn Thị', NULL, 5, '2020-09-25 01:47:29', '2020-09-25 01:47:29'),
(1125, '2.0.6', '1', NULL, 4954515, 'Tina Vũ', NULL, 5, '2020-09-25 03:34:21', '2020-09-25 03:34:21'),
(1126, '2.1.3', '2', '0964498375', 4954333, 'Nhi Hoàng', NULL, 5, '2020-09-25 04:54:08', '2020-09-25 04:54:08'),
(1127, '2.0.6', '1', '0974954713', 4851772, 'Huyền Ngọc', NULL, 5, '2020-09-25 10:25:16', '2020-09-25 10:25:16'),
(1128, '2.1.3', '2', '0365298193', 4937229, 'Vux phương diệu', NULL, 5, '2020-09-25 11:51:02', '2020-09-25 11:51:02'),
(1129, '2.1.3', '2', '0334629945', 4892978, 'Ngo An Nha Phuong', NULL, 5, '2020-09-25 12:43:22', '2020-09-25 12:43:22'),
(1130, '2.1.3', '2', '0377861082', 4954068, 'Duyên Mỹ', NULL, 5, '2020-09-25 13:43:32', '2020-09-25 13:43:32'),
(1131, '2.1.3', '2', NULL, 4956326, 'Huy Trương', 'Quá thất vọng', 1, '2020-09-25 14:59:46', '2020-09-25 14:59:46'),
(1132, '2.1.3', '2', NULL, 4956882, 'Nga Lê', NULL, 5, '2020-09-26 02:44:50', '2020-09-26 02:44:50'),
(1133, '2.0.6', '1', '0909125045', 4839904, 'Văn Hào Thiên Phú', 'Chậm hay bay', 1, '2020-09-26 08:34:39', '2020-09-26 08:34:39'),
(1134, '2.1.3', '2', NULL, 4957928, 'Mai Đỗ Hà', NULL, 5, '2020-09-26 11:00:14', '2020-09-26 11:00:14'),
(1135, '2.0.6', '1', '0378998127', 4784267, 'Nhiên Thái', NULL, 1, '2020-09-26 11:38:13', '2020-09-26 11:38:13'),
(1136, '2.1.3', '2', NULL, 4958075, 'Linh Nguyễn', NULL, 3, '2020-09-26 12:09:04', '2020-09-26 12:09:04'),
(1137, '2.1.3', '2', NULL, 4958262, 'Hoa Đàm', NULL, 5, '2020-09-26 13:36:41', '2020-09-26 13:36:41'),
(1138, '2.0.6', '1', '0335589588', 3969612, 'Tạ Long', NULL, 5, '2020-09-26 13:56:18', '2020-09-26 13:56:18'),
(1139, '2.1.3', '2', '0843157535', 4810571, 'Quỳnh  Như', NULL, 5, '2020-09-26 15:19:58', '2020-09-26 15:19:58'),
(1140, '2.1.3', '2', '0827286724', 4688688, 'Diệu Nguyễn', NULL, 5, '2020-09-26 15:29:08', '2020-09-26 15:29:08'),
(1141, '2.1.3', '2', NULL, 4958951, 'Yến Nguyễn', NULL, 5, '2020-09-27 00:47:41', '2020-09-27 00:47:41'),
(1142, '2.1.3', '2', NULL, 4959031, 'Nguyễn Trí Dũng', NULL, 5, '2020-09-27 01:29:35', '2020-09-27 01:29:35'),
(1143, '2.1.3', '2', NULL, 4959201, 'Linh Nguyễn', NULL, 3, '2020-09-27 02:42:41', '2020-09-27 02:42:41'),
(1144, '2.1.3', '2', NULL, 4959338, 'Hà Phương', 'Sao tôi đăng nhập rồi mà thoát ra vào lại nó lại bắt đăng nhập tiếp vậy', 1, '2020-09-27 03:38:03', '2020-09-27 03:38:03'),
(1145, '2.1.3', '2', NULL, 4959675, 'Loan Cẩm', NULL, 5, '2020-09-27 06:37:46', '2020-09-27 06:37:46'),
(1146, '2.1.3', '2', '0838576542', 4959892, 'VâN Lý', NULL, 5, '2020-09-27 09:10:28', '2020-09-27 09:10:28'),
(1147, '2.1.3', '2', NULL, 4960221, 'Nami''z Hiền', 'Tại sao mỗi lần tôi vào lại phải đăng nhập lại từ đầu??', 3, '2020-09-27 10:10:36', '2020-09-27 10:10:36'),
(1148, '2.0.6', '1', NULL, 4960402, 'Tú Balen', 'tốt', 5, '2020-09-27 11:10:53', '2020-09-27 11:10:53'),
(1149, '2.0.6', '1', NULL, 4960669, 'vinh Nguyễn thị thành', NULL, 5, '2020-09-27 12:24:09', '2020-09-27 12:24:09'),
(1150, '2.1.3', '2', NULL, 4960765, 'Hải linh Phạm', 'Ok', 5, '2020-09-27 12:42:27', '2020-09-27 12:42:27'),
(1151, '2.1.3', '2', NULL, 4960765, 'Hải linh Phạm', NULL, 5, '2020-09-27 12:42:27', '2020-09-27 12:42:27'),
(1152, '2.0.6', '1', '0389074755', 3414142, 'Trâm Trần Mai Bảo', NULL, 5, '2020-09-27 12:53:59', '2020-09-27 12:53:59'),
(1153, '2.1.3', '2', NULL, 4960893, 'Sang Hoàng', NULL, 5, '2020-09-27 13:09:04', '2020-09-27 13:09:04'),
(1154, '2.0.6', '1', '0936992345', 4031618, 'huyền Chu thị thanh', 'Tôi rất thik khoá học này !', 5, '2020-09-27 13:22:59', '2020-09-27 13:22:59'),
(1155, '2.0.6', '1', '0905520369', 4835482, 'Đạt Trần Vũ Thành', NULL, 1, '2020-09-27 13:47:07', '2020-09-27 13:47:07'),
(1156, '2.0.6', '1', '0868719664', 3284958, 'Tú Phùng Thị Cẩm', NULL, 3, '2020-09-27 14:09:03', '2020-09-27 14:09:03'),
(1157, '2.0.6', '1', '0988085042', 4784860, '0988085042', NULL, 5, '2020-09-27 14:21:36', '2020-09-27 14:21:36'),
(1158, '2.0.6', '1', '0335522203', 4884209, 'Nguyen Dat', NULL, 3, '2020-09-27 21:30:57', '2020-09-27 21:30:57'),
(1159, '2.1.3', '2', '0962664620', 4000712, 'Hoa Trương Lê Quỳnh', 'Hi vọng có thêm tính năng batch download để tải học liệu và hiển thị tiến độ của BTTL mỗi bài ngay trong phần đề cương', 3, '2020-09-28 02:58:18', '2020-09-28 02:58:18'),
(1160, '2.1.3', '2', '0365915405', 4817622, 'Ninh Bùi Quang', NULL, 5, '2020-09-28 03:04:13', '2020-09-28 03:04:13'),
(1161, '2.1.3', '2', NULL, 4962196, 'Nhi Quàng Thị', NULL, 5, '2020-09-28 04:03:57', '2020-09-28 04:03:57'),
(1162, '2.1.3', '2', '0365568665', 4912703, 'Vu q', NULL, 5, '2020-09-28 04:41:27', '2020-09-28 04:41:27'),
(1163, '2.1.3', '2', '0395697817', 3396090, 'Minh Lê Hồng', NULL, 5, '2020-09-28 06:02:59', '2020-09-28 06:02:59'),
(1164, '2.1.3', '2', '0338772449', 4961789, 'Nhi Quàng Thị', NULL, 5, '2020-09-28 06:52:25', '2020-09-28 06:52:25'),
(1165, '2.1.3', '2', NULL, 4962949, 'khánh Phan thị bảo', NULL, 2, '2020-09-28 09:25:38', '2020-09-28 09:25:38'),
(1166, '2.1.3', '2', '0762950186', 4961168, 'Lê Thị Ngọc Thư Thư', NULL, 4, '2020-09-28 10:59:15', '2020-09-28 10:59:15'),
(1167, '2.1.3', '2', '0988797413', 3088895, 'Vũ An', NULL, 5, '2020-09-28 11:48:29', '2020-09-28 11:48:29'),
(1168, '2.1.3', '2', NULL, 4963613, 'Trinh Trinh', NULL, 5, '2020-09-28 12:28:49', '2020-09-28 12:28:49'),
(1169, '2.1.3', '2', NULL, 4963498, 'Nhi Phương', NULL, 2, '2020-09-28 12:46:24', '2020-09-28 12:46:24'),
(1170, '2.0.6', '1', '0902975346', 4884903, '0902975346', 'Rất ok', 5, '2020-09-28 12:52:15', '2020-09-28 12:52:15'),
(1171, '2.1.3', '2', '0378103508', 3597566, 'phan  thuy', NULL, 5, '2020-09-28 13:06:44', '2020-09-28 13:06:44'),
(1172, '2.1.3', '2', '0375639568', 3148640, 'Bảo Minh', NULL, 5, '2020-09-28 13:26:06', '2020-09-28 13:26:06'),
(1173, '2.1.3', '2', NULL, 4963980, 'Nguyen Nhi', NULL, 5, '2020-09-28 13:27:45', '2020-09-28 13:27:45'),
(1174, '2.1.3', '2', '0917793661', 4358951, 'Bình Đức', 'Khóa học ôn luyện toán 7 của thầy Trần Minh Mẫn có lúc bị dừng lại. Tặng em quà trung thu đi ạ', 1, '2020-09-28 13:51:25', '2020-09-28 13:51:25'),
(1175, '2.1.3', '2', '0948762065', 4923763, '0948762065', NULL, 5, '2020-09-28 14:12:47', '2020-09-28 14:12:47'),
(1176, '2.0.6', '1', '0964448683', 4921755, '0964448683', NULL, 5, '2020-09-28 15:01:34', '2020-09-28 15:01:34'),
(1177, '2.1.3', '2', '0976477554', 4378737, 'Bảo Nguyễn Quốc', NULL, 5, '2020-09-28 22:01:13', '2020-09-28 22:01:13'),
(1178, '2.0.6', '1', '0938159466', 3010978, '0938159466', NULL, 5, '2020-09-29 05:46:14', '2020-09-29 05:46:14'),
(1179, '2.1.3', '2', '0366980775', 4963669, '0366980775', NULL, 5, '2020-09-29 06:03:39', '2020-09-29 06:03:39'),
(1180, '2.1.3', '2', '0336814355', 4650929, 'Đinh Diệp', NULL, 5, '2020-09-29 06:40:28', '2020-09-29 06:40:28'),
(1181, '2.1.3', '2', '0336814355', 4650929, 'Đinh Diệp', NULL, 5, '2020-09-29 06:40:30', '2020-09-29 06:40:30'),
(1182, '2.1.3', '2', NULL, 4965880, 'Ngọc Huyền Lê', NULL, 5, '2020-09-29 08:46:26', '2020-09-29 08:46:26'),
(1183, '2.1.3', '2', NULL, 4966097, 'Khanh Le Quoc', NULL, 4, '2020-09-29 10:28:54', '2020-09-29 10:28:54'),
(1184, '2.1.3', '2', '0357849569', 4510303, '0357849569', NULL, 5, '2020-09-29 11:39:06', '2020-09-29 11:39:06'),
(1185, '2.0.6', '1', NULL, 4966749, 'Thao Phuong', NULL, 5, '2020-09-29 13:16:03', '2020-09-29 13:16:03'),
(1186, '2.1.3', '2', '0917550283', 4947647, 'Taehee Kim', NULL, 5, '2020-09-29 13:25:18', '2020-09-29 13:25:18'),
(1187, '2.1.3', '2', '0349600375', 4898215, 'Vy Nguyễn Thị Thúy', NULL, 5, '2020-09-29 13:54:59', '2020-09-29 13:54:59'),
(1188, '2.1.3', '2', NULL, 4967384, 'Thảo Nguyễn', NULL, 5, '2020-09-29 15:16:18', '2020-09-29 15:16:18'),
(1189, '2.1.3', '2', NULL, 4967655, 'Giang Hương', 'Rất hay và giúp bản thân nâng cao đc kiến thức', 5, '2020-09-29 21:56:42', '2020-09-29 21:56:42'),
(1190, '2.0.6', '1', '0352038002', 4906101, 'Lý Minh', NULL, 5, '2020-09-29 23:20:22', '2020-09-29 23:20:22'),
(1191, '2.1.3', '2', NULL, 4967870, 'Toàn Thắng Nguyễn Văn', NULL, 5, '2020-09-30 01:55:46', '2020-09-30 01:55:46'),
(1192, '2.1.3', '2', '0332234522', 4967803, 'Minh kiên', NULL, 2, '2020-09-30 04:28:51', '2020-09-30 04:28:51'),
(1193, '2.1.3', '2', NULL, 4968213, 'Tâm Tâm', NULL, 5, '2020-09-30 04:44:53', '2020-09-30 04:44:53'),
(1194, '2.1.3', '2', '0912644025', 4967863, 'ngọc đỗ', NULL, 5, '2020-09-30 11:15:13', '2020-09-30 11:15:13'),
(1195, '2.1.3', '2', NULL, 4969041, 'Tu Cam', NULL, 5, '2020-09-30 11:29:54', '2020-09-30 11:29:54'),
(1196, '2.1.3', '2', '0917422133', 4764107, 'Uyên Đoàn Phương', NULL, 5, '2020-09-30 11:33:42', '2020-09-30 11:33:42'),
(1197, '2.1.3', '2', '0389787907', 4966140, '0389787907', NULL, 4, '2020-09-30 12:28:35', '2020-09-30 12:28:35'),
(1198, '2.1.3', '2', NULL, 4969342, 'Văn Lại Thặng', 'Xuất sắc', 5, '2020-09-30 12:41:39', '2020-09-30 12:41:39'),
(1199, '2.1.3', '2', '0702913806', 4371913, '0702913806', NULL, 5, '2020-09-30 13:25:03', '2020-09-30 13:25:03'),
(1200, '2.1.3', '2', '0938175485', 4763086, 'Ngọc Nguyễn Như', NULL, 2, '2020-09-30 13:26:46', '2020-09-30 13:26:46'),
(1201, '2.0.6', '1', '0398435197', 4677632, '0398435197', 'That vong', 1, '2020-09-30 14:24:33', '2020-09-30 14:24:33'),
(1202, '2.1.3', '2', NULL, 4969926, 'Đệ Tử Diêm Vương', NULL, 3, '2020-09-30 14:55:18', '2020-09-30 14:55:18'),
(1203, '2.1.3', '2', NULL, 4969926, 'Đệ Tử Diêm Vương', NULL, 3, '2020-09-30 14:55:39', '2020-09-30 14:55:39'),
(1204, '2.0.6', '1', '0939980389', 4961974, '0939980389', NULL, 5, '2020-10-01 00:19:47', '2020-10-01 00:19:47'),
(1205, '2.0.6', '1', '0986704894', 4778299, 'Trang Kiều Huyền', NULL, 4, '2020-10-01 01:39:39', '2020-10-01 01:39:39'),
(1206, '2.1.3', '2', NULL, 4970718, 'Chiến Bùi', 'Được', 4, '2020-10-01 06:14:13', '2020-10-01 06:14:13'),
(1207, '2.1.3', '2', '0988174555', 4017216, 'quang đặng nguyễn xuân', NULL, 5, '2020-10-01 06:20:22', '2020-10-01 06:20:22'),
(1208, '2.1.3', '2', '0379189793', 4950048, 'Ngọc Nguyễn Kim', NULL, 4, '2020-10-01 09:03:49', '2020-10-01 09:03:49'),
(1209, '2.0.6', '1', NULL, 4971372, 'Nguyễn Thanh Hằng', NULL, 3, '2020-10-01 13:18:03', '2020-10-01 13:18:03'),
(1210, '2.0.6', '1', '0965942766', 2723897, 'Trần Phước Sang', NULL, 5, '2020-10-01 15:32:03', '2020-10-01 15:32:03'),
(1211, '2.1.3', '2', NULL, 4972020, 'Chí Thanh Nguyễn', 'Cảm ơn đã cho học sinh chúng em \nCó thêm nhu cầu đáp ứng đc vc học', 5, '2020-10-02 02:31:32', '2020-10-02 02:31:32'),
(1212, '2.1.3', '2', '0985749309', 3124251, 'Nguyễn Hiền', NULL, 5, '2020-10-02 07:30:15', '2020-10-02 07:30:15'),
(1213, '2.0.6', '1', '0903026789', 4790643, 'Ngọc Huỳnh Thiên', 'HOCMAI dạy rất hay, làm cho em đã cải thiện được điểm số rất nhiều', 5, '2020-10-02 08:59:44', '2020-10-02 08:59:44'),
(1214, '2.1.3', '2', '0865740738', 4958491, '0865740738', NULL, 5, '2020-10-02 09:51:05', '2020-10-02 09:51:05'),
(1215, '2.1.3', '2', '0908153678', 4935075, 'Lê Thị Phúc', 'Ứng dụng tốt nhưng phần chọn ngày tháng năm sinh còn khó sử dụng', 3, '2020-10-02 11:24:33', '2020-10-02 11:24:33'),
(1216, '2.1.3', '2', '0832498298', 4972826, 'nguyên Thảo', NULL, 3, '2020-10-02 13:12:33', '2020-10-02 13:12:33'),
(1217, '2.1.3', '2', '0376132044', 4973310, 'Phat Le', NULL, 5, '2020-10-03 00:56:04', '2020-10-03 00:56:04'),
(1218, '2.0.6', '1', '0975118704', 4597826, 'Hào Hán Anh', 'chỗ làm bài và đáp án em nghĩ thiết kế khá chán ko có bảng tra đáp án và file tài liệu thì ...', 3, '2020-10-03 01:39:10', '2020-10-03 01:39:10'),
(1219, '2.1.3', '2', NULL, 4973949, 'Thanh Tuyền Nguyễn', NULL, 4, '2020-10-03 01:59:47', '2020-10-03 01:59:47'),
(1220, '2.1.3', '2', '0935958505', 4898358, 'Trúc Hoàng Thị Thanh', NULL, 4, '2020-10-03 03:43:54', '2020-10-03 03:43:54'),
(1221, '2.0.6', '1', '0918779078', 4271210, 'Vy Ngô Khánh', NULL, 5, '2020-10-03 04:20:17', '2020-10-03 04:20:17'),
(1222, '2.1.3', '2', NULL, 4974193, 'Kim Ngân', NULL, 5, '2020-10-03 04:49:38', '2020-10-03 04:49:38'),
(1223, '2.1.3', '2', '0868168694', 4973272, 'Lý Xuân Thủy', NULL, 3, '2020-10-03 06:23:22', '2020-10-03 06:23:22'),
(1224, '2.1.3', '2', NULL, 4974420, 'Ngọc Mai Nguyễn', NULL, 5, '2020-10-03 07:05:08', '2020-10-03 07:05:08'),
(1225, '2.1.3', '2', NULL, 4974442, 'Mai Trinh Office', NULL, 5, '2020-10-03 07:23:01', '2020-10-03 07:23:01'),
(1226, '2.1.3', '2', '0977325606', 2787799, 'Phong Nguyễn Hải', NULL, 5, '2020-10-03 10:40:45', '2020-10-03 10:40:45'),
(1227, '2.1.3', '2', NULL, 4974800, 'Việt Hoàng', 'Ứng dụng này rất tốt, giảng bài rất dễ hiểu,ko có j đánh giá đc ngoài hai từ "hoàn hảo"', 5, '2020-10-03 11:12:57', '2020-10-03 11:12:57'),
(1228, '2.1.3', '2', '0974556445', 4970950, '0974556445', NULL, 5, '2020-10-03 14:05:05', '2020-10-03 14:05:05'),
(1229, '2.1.3', '2', '0378998127', 4784267, 'Nhiên Thái', NULL, 1, '2020-10-03 14:22:26', '2020-10-03 14:22:26'),
(1230, '2.1.3', '2', '0374051093', 4971067, 'Oanh Trần', NULL, 5, '2020-10-03 14:53:20', '2020-10-03 14:53:20'),
(1231, '2.1.3', '2', NULL, 4975760, 'Vi Tiên', NULL, 5, '2020-10-03 22:48:36', '2020-10-03 22:48:36'),
(1232, '2.1.3', '2', '0777329483', 4194932, 'Quang Tuấn Nghĩa Nguyễn', 'Không có thông tin về nội dung bài giảng như trên web,... Khi tải tài liệu học thì cần đăng nhập lại rất phiền,... Thà dùng Chrome trên điện thoại còn tốt hơn. Mong khắc phục sơm', 2, '2020-10-04 01:40:24', '2020-10-04 01:40:24'),
(1233, '2.1.3', '2', '0935348459', 3536138, NULL, 'Học dễ hiểu', 5, '2020-10-04 01:45:43', '2020-10-04 01:45:43'),
(1234, '2.1.3', '2', NULL, 4976328, 'Kem Thủy', NULL, 5, '2020-10-04 04:18:39', '2020-10-04 04:18:39'),
(1235, '2.1.3', '2', NULL, 4976406, 'Phương anh Vũ', NULL, 5, '2020-10-04 04:53:48', '2020-10-04 04:53:48'),
(1236, '2.1.3', '2', NULL, 4976621, 'Tham Nguyen', NULL, 1, '2020-10-04 06:22:11', '2020-10-04 06:22:11'),
(1237, '2.0.6', '1', '0367391810', 4341020, 'Vãn Vọng Thiên Trường', NULL, 1, '2020-10-04 06:24:04', '2020-10-04 06:24:04'),
(1238, '2.1.3', '2', '0373194783', 4486707, 'HUY LÊ QUANG', NULL, 5, '2020-10-04 06:55:45', '2020-10-04 06:55:45'),
(1239, '2.0.6', '1', NULL, 4976727, 'Trang Mon', NULL, 5, '2020-10-04 07:10:28', '2020-10-04 07:10:28'),
(1240, '2.1.3', '2', '0378002177', 4803234, '0378002177', 'Good', 5, '2020-10-04 08:00:09', '2020-10-04 08:00:09'),
(1241, '2.1.3', '2', '0774782852', 4643267, 'Như Nguyễn', NULL, 5, '2020-10-04 10:01:10', '2020-10-04 10:01:10'),
(1242, '2.1.3', '2', '0867644021', 4972864, 'Thủy Tiên Nguyễn Như', NULL, 5, '2020-10-04 10:55:48', '2020-10-04 10:55:48'),
(1243, '2.0.6', '1', '0787027524', 2732977, 'Nhi Nguyễn', NULL, 5, '2020-10-04 11:34:12', '2020-10-04 11:34:12'),
(1244, '2.1.3', '2', NULL, 4977580, 'Văn Hương', NULL, 5, '2020-10-04 12:30:31', '2020-10-04 12:30:31'),
(1245, '2.0.6', '1', '0378905423', 3592752, 'I''mahuman', NULL, 5, '2020-10-04 13:09:03', '2020-10-04 13:09:03'),
(1246, '2.1.3', '2', '0865939920', 4966725, 'hiếu Phan trần', NULL, 1, '2020-10-04 13:22:34', '2020-10-04 13:22:34'),
(1247, '2.1.3', '2', NULL, 4977840, 'Thanh Le', NULL, 4, '2020-10-04 13:24:20', '2020-10-04 13:24:20'),
(1248, '2.1.3', '2', NULL, 4977992, 'Giang Cẩm', NULL, 5, '2020-10-04 13:39:53', '2020-10-04 13:39:53'),
(1249, '2.1.3', '2', NULL, 4978001, 'Hồng Vũ', NULL, 5, '2020-10-04 14:13:20', '2020-10-04 14:13:20'),
(1250, '2.0.6', '1', NULL, 4978260, 'Khải Lê', NULL, 5, '2020-10-04 14:33:42', '2020-10-04 14:33:42'),
(1251, '2.1.3', '2', '0913415161', 4978232, 'Nguyen  Ngan', NULL, 5, '2020-10-04 14:38:05', '2020-10-04 14:38:05'),
(1252, '2.1.3', '2', '0972846829', 4800446, NULL, NULL, 5, '2020-10-04 15:08:38', '2020-10-04 15:08:38'),
(1253, '2.1.3', '2', '0911302920', 4358391, 'trang Kiêu', NULL, 5, '2020-10-04 15:30:12', '2020-10-04 15:30:12'),
(1254, '2.1.3', '2', NULL, 4978814, 'Hồng Đặng', 'good', 5, '2020-10-04 23:12:49', '2020-10-04 23:12:49'),
(1255, '2.0.6', '1', '0859064412', 4903922, 'Đức Đặng Minh', NULL, 5, '2020-10-05 01:24:25', '2020-10-05 01:24:25'),
(1256, '2.0.6', '1', '0903591899', 1003373, 'Chau Nguyen Ngoc Minh', NULL, 5, '2020-10-05 01:50:34', '2020-10-05 01:50:34'),
(1257, '2.1.3', '2', NULL, 4979444, 'Yên Bình', NULL, 5, '2020-10-05 05:14:35', '2020-10-05 05:14:35'),
(1258, '2.1.3', '2', '0983811033', 3095672, 'Thu Nguyen', NULL, 5, '2020-10-05 08:56:48', '2020-10-05 08:56:48'),
(1259, '2.1.3', '2', NULL, 4980324, 'Uyên Hàn', NULL, 5, '2020-10-05 10:16:41', '2020-10-05 10:16:41'),
(1260, '2.1.3', '2', NULL, 4980673, 'Luyến Mỹ', NULL, 5, '2020-10-05 11:52:03', '2020-10-05 11:52:03');
INSERT INTO `rate_apps` (`id`, `version`, `os`, `customer_username`, `customer_id`, `customer_name`, `customer_comment`, `rate`, `created_at`, `updated_at`) VALUES
(1261, '2.1.3', '2', NULL, 4980854, 'Thái Đặng Hoàng', NULL, 4, '2020-10-05 12:32:12', '2020-10-05 12:32:12'),
(1262, '2.0.6', '1', '0967036835', 4976075, 'Đạt Xìke', 'Ức dụng này rất là hay học rất là dễ hiểu', 5, '2020-10-05 13:00:40', '2020-10-05 13:00:40'),
(1263, '2.1.3', '2', '0908456060', 4903372, '0908456060', NULL, 1, '2020-10-05 13:26:02', '2020-10-05 13:26:02'),
(1264, '2.1.3', '2', '0779543986', 2723908, 'Thảo Phương', NULL, 5, '2020-10-05 13:51:12', '2020-10-05 13:51:12'),
(1265, '2.1.3', '2', '0855747124', 4741068, '0855747124', NULL, 5, '2020-10-05 14:19:44', '2020-10-05 14:19:44'),
(1266, '2.1.3', '2', '0333443078', 4962140, NULL, NULL, 4, '2020-10-05 14:19:52', '2020-10-05 14:19:52'),
(1267, '2.0.7', '1', '0963035290', 4823714, 'Hiền  Vũ Thanh', NULL, 5, '2020-10-06 04:23:11', '2020-10-06 04:23:11'),
(1268, '2.0.7', '1', '0963035290', 4823714, 'Hiền  Vũ Thanh', NULL, 5, '2020-10-06 04:23:12', '2020-10-06 04:23:12'),
(1269, '2.1.3', '2', '0866815247', 4983229, 'Nguyễn Ngân', NULL, 5, '2020-10-06 07:06:13', '2020-10-06 07:06:13'),
(1270, '2.1.3', '2', '0332935830', 4978811, 'Anh Quốc', NULL, 5, '2020-10-06 10:55:47', '2020-10-06 10:55:47'),
(1271, '2.0.6', '1', '0392323228', 4979762, 'Lê Thảo', NULL, 5, '2020-10-06 11:52:13', '2020-10-06 11:52:13'),
(1272, '2.0.6', '1', '0392323228', 4979762, 'Lê Thảo', NULL, 5, '2020-10-06 11:52:15', '2020-10-06 11:52:15'),
(1273, '2.1.3', '2', NULL, 4984331, 'Châm Lê', NULL, 2, '2020-10-06 12:42:51', '2020-10-06 12:42:51'),
(1274, '2.1.3', '2', NULL, 4984576, 'Nguyên Bii', NULL, 1, '2020-10-06 13:27:20', '2020-10-06 13:27:20'),
(1275, '2.1.3', '2', NULL, 4984576, 'Nguyên Bii', NULL, 1, '2020-10-06 13:27:20', '2020-10-06 13:27:20'),
(1276, '2.1.3', '2', '0328830952', 4977783, 'Hong Nguyen', NULL, 5, '2020-10-06 13:46:30', '2020-10-06 13:46:30'),
(1277, '2.1.3', '2', NULL, 4984740, 'Gioi Dang dinh', NULL, 1, '2020-10-06 14:02:49', '2020-10-06 14:02:49'),
(1278, '2.1.3', '2', NULL, 4984764, 'Nhâm Đặng', NULL, 5, '2020-10-06 14:05:49', '2020-10-06 14:05:49'),
(1279, '2.1.3', '2', '0365389638', 4766785, 'Bảo  Hoàng Ngọc', 'Rất hay và bổ ích!', 5, '2020-10-06 16:14:34', '2020-10-06 16:14:34'),
(1280, '2.1.3', '2', NULL, 4985402, 'Linh Phạm', NULL, 5, '2020-10-06 17:04:12', '2020-10-06 17:04:12'),
(1281, '2.1.3', '2', '0904004454', 4801504, 'Hàn Nguyễn Hoàng Phước', NULL, 4, '2020-10-07 09:16:35', '2020-10-07 09:16:35'),
(1282, '2.1.3', '2', '0338340370', 4985925, 'Vi Mạnh Dũng', NULL, 4, '2020-10-07 09:44:47', '2020-10-07 09:44:47'),
(1283, '2.1.3', '2', NULL, 4987850, 'Mon Thư', NULL, 5, '2020-10-07 13:21:40', '2020-10-07 13:21:40'),
(1284, '2.1.3', '2', NULL, 4987922, 'Nguyễn thị yến nhi', NULL, 4, '2020-10-07 13:29:13', '2020-10-07 13:29:13'),
(1285, '2.1.3', '2', '0366927157', 4932923, '0366927157', NULL, 1, '2020-10-07 13:44:06', '2020-10-07 13:44:06'),
(1286, '2.1.3', '2', NULL, 4988074, 'Thành Nguyen', NULL, 5, '2020-10-07 14:11:33', '2020-10-07 14:11:33'),
(1287, '2.1.3', '2', '0354737364', 2363741, 'Cloud Thanhh Vân', NULL, 5, '2020-10-07 14:25:32', '2020-10-07 14:25:32'),
(1288, '2.1.3', '2', '0987960788', 4734835, 'Phương Hoàng', NULL, 3, '2020-10-07 15:10:43', '2020-10-07 15:10:43'),
(1289, '2.1.3', '2', NULL, 4988716, 'Tân Vũ', 'Rất tốt', 5, '2020-10-07 15:56:21', '2020-10-07 15:56:21'),
(1290, '2.1.3', '2', '0338653163', 4747006, 'Tuyền Lê', NULL, 5, '2020-10-07 16:25:52', '2020-10-07 16:25:52'),
(1291, '2.1.3', '2', '0798587016', 4938077, 'Ngọc Kapella', NULL, 5, '2020-10-07 22:39:22', '2020-10-07 22:39:22'),
(1292, '2.1.3', '2', '0967625220', 4201280, 'Nguyên Hoàng Ngọc', 'Cần phần đáp án bài tập tự luyện và hỏi đáp trên bản app ạ', 3, '2020-10-08 02:22:51', '2020-10-08 02:22:51'),
(1293, '2.0.6', '1', '0946071167', 3464358, '0946071167', NULL, 4, '2020-10-08 02:32:10', '2020-10-08 02:32:10'),
(1294, '2.1.3', '2', NULL, 4989425, 'Hoài Thu', NULL, 5, '2020-10-08 03:47:05', '2020-10-08 03:47:05'),
(1295, '2.1.3', '2', NULL, 4989668, 'DũnG Tiến', NULL, 5, '2020-10-08 05:23:17', '2020-10-08 05:23:17'),
(1296, '2.1.3', '2', NULL, 4989860, 'Quý Nguyễn', NULL, 1, '2020-10-08 06:54:39', '2020-10-08 06:54:39'),
(1297, '2.1.3', '2', NULL, 4990006, '태형 김', 'Bình thường', 3, '2020-10-08 07:56:34', '2020-10-08 07:56:34'),
(1298, '2.1.3', '2', '0834871890', 4935517, NULL, NULL, 5, '2020-10-08 10:35:33', '2020-10-08 10:35:33'),
(1299, '2.1.3', '2', '0934792479', 4849996, 'Nguyễn Đặng Linh Đan', NULL, 5, '2020-10-08 10:42:12', '2020-10-08 10:42:12'),
(1300, '2.0.6', '1', '0365862318', 4833761, 'Huy Minh', NULL, 5, '2020-10-08 11:47:36', '2020-10-08 11:47:36'),
(1301, '2.1.3', '2', NULL, 4990755, 'Yến Hải', NULL, 5, '2020-10-08 11:58:57', '2020-10-08 11:58:57'),
(1302, '2.1.3', '2', NULL, 4990755, 'Yến Hải', NULL, 5, '2020-10-08 11:59:00', '2020-10-08 11:59:00'),
(1303, '2.1.3', '2', '0904299127', 4988954, 'Minh Anh Nguyễn', NULL, 1, '2020-10-08 12:32:56', '2020-10-08 12:32:56'),
(1304, '2.0.6', '1', NULL, 4991004, 'Phu Tiến Tôn Thất', 'App này cần phổ cập đến từng người dân và ko thu bất kỳ đồng tiền nào của nhân dân.', 4, '2020-10-08 13:08:52', '2020-10-08 13:08:52'),
(1305, '2.1.3', '2', '0924132190', 4966935, 'rang Vo Cong', NULL, 5, '2020-10-08 13:51:57', '2020-10-08 13:51:57'),
(1306, '2.1.3', '2', '0354867427', 4980939, 'Minion Truong', NULL, 4, '2020-10-08 14:01:54', '2020-10-08 14:01:54'),
(1307, '2.1.3', '2', NULL, 4991595, 'Long Idol', NULL, 5, '2020-10-08 14:26:06', '2020-10-08 14:26:06'),
(1308, '2.1.3', '2', '0335740826', 4953442, 'Ngọc Bảo', NULL, 5, '2020-10-08 14:30:27', '2020-10-08 14:30:27'),
(1309, '2.1.3', '2', NULL, 4991670, 'Ngọc Bảo', NULL, 3, '2020-10-08 14:45:56', '2020-10-08 14:45:56'),
(1310, '2.0.6', '1', '0989445817', 4547408, 'Lộc Nguyễn', NULL, 5, '2020-10-09 02:15:20', '2020-10-09 02:15:20'),
(1311, '2.1.3', '2', NULL, 4992906, 'Ly Nhật', 'Cx bth', 3, '2020-10-09 06:28:51', '2020-10-09 06:28:51'),
(1312, '2.0.6', '1', '0989832385', 4029492, 'văn  Nhâm Trương', NULL, 5, '2020-10-09 08:55:15', '2020-10-09 08:55:15'),
(1313, '2.1.3', '2', NULL, 4993342, 'Liz Vũ', NULL, 5, '2020-10-09 10:49:16', '2020-10-09 10:49:16'),
(1314, '2.1.3', '2', NULL, 4993719, 'Trâm Nguyễn Ngọc', NULL, 1, '2020-10-09 12:13:45', '2020-10-09 12:13:45'),
(1315, '2.1.3', '2', '0987547970', 3390564, 'Hà Nguyễn Thu', NULL, 4, '2020-10-09 12:28:02', '2020-10-09 12:28:02'),
(1316, '2.1.3', '2', '0362841255', 4993223, 'Vòong Duyên', NULL, 5, '2020-10-09 14:17:03', '2020-10-09 14:17:03'),
(1317, '2.1.3', '2', '0388057719', 3218128, 'Hoàng Nguyễn Việt', NULL, 5, '2020-10-09 15:23:03', '2020-10-09 15:23:03'),
(1318, '2.1.3', '2', NULL, 4994845, 'VânAnh Triệu', NULL, 2, '2020-10-10 00:23:23', '2020-10-10 00:23:23'),
(1319, '2.1.3', '2', NULL, 4994936, 'tu Nguyen van', NULL, 5, '2020-10-10 01:47:29', '2020-10-10 01:47:29'),
(1320, '2.1.3', '2', NULL, 4995070, 'Ly Đàm Khánh', NULL, 3, '2020-10-10 02:50:51', '2020-10-10 02:50:51'),
(1321, '2.1.3', '2', NULL, 4995085, 'Nhi Phan Thanh', NULL, 5, '2020-10-10 03:04:48', '2020-10-10 03:04:48'),
(1322, '2.0.6', '1', '0356223005', 4991811, 'Cường Bùi', NULL, 4, '2020-10-10 03:58:06', '2020-10-10 03:58:06'),
(1323, '2.1.3', '2', '0989459099', 4874781, 'Trình Yến', NULL, 5, '2020-10-10 06:39:44', '2020-10-10 06:39:44'),
(1324, '2.1.3', '2', NULL, 4995462, 'Thư Nguyễn', NULL, 5, '2020-10-10 06:48:43', '2020-10-10 06:48:43'),
(1325, '2.1.3', '2', '0976435098', 4895910, 'Nguyễn  Lan Anh', NULL, 4, '2020-10-10 08:13:19', '2020-10-10 08:13:19'),
(1326, '2.1.3', '2', '0393360070', 3127983, 'Thiện Vương', NULL, 5, '2020-10-10 08:51:23', '2020-10-10 08:51:23'),
(1327, '2.0.6', '1', '0908983778', 4972596, 'Thư Trần Tôn Anh', NULL, 5, '2020-10-10 09:40:55', '2020-10-10 09:40:55'),
(1328, '2.0.6', '1', '0378400322', 4845108, 'an nguyễn văn', NULL, 5, '2020-10-11 02:04:30', '2020-10-11 02:04:30'),
(1329, '2.1.3', '2', '0973240722', 4994788, 'Anh Hà Việt Ngọc', NULL, 4, '2020-10-11 04:35:13', '2020-10-11 04:35:13'),
(1330, '2.1.3', '2', NULL, 4997474, 'Nguyễn Vinh', 'Suất sắc', 5, '2020-10-11 05:13:30', '2020-10-11 05:13:30'),
(1331, '2.1.3', '2', '0394501092', 4950883, '0394501092', NULL, 5, '2020-10-11 05:48:33', '2020-10-11 05:48:33'),
(1332, '2.1.3', '2', '0385696723', 4993973, 'Huyền NT', NULL, 5, '2020-10-11 10:35:41', '2020-10-11 10:35:41'),
(1333, '2.0.4', '1', '0355221458', 4773359, '0355221458', NULL, 1, '2020-10-11 12:15:06', '2020-10-11 12:15:06'),
(1334, '2.0.6', '1', '0369286089', 4998145, 'Thùy Thu', NULL, 4, '2020-10-11 12:16:50', '2020-10-11 12:16:50'),
(1335, '2.1.3', '2', NULL, 4998470, 'Hiếu Út', NULL, 4, '2020-10-11 12:26:00', '2020-10-11 12:26:00'),
(1336, '2.1.3', '2', '0906818444', 4482018, 'Bigcitymoi', 'Hay', 5, '2020-10-11 12:57:29', '2020-10-11 12:57:29'),
(1337, '2.1.3', '2', '0906372452', 2960631, 'Như Trần Ngọc Khiết', 'Em rất thích ứng dụng này. App mới được cập nhật và đổi mới nên thực sự là rất hữu ích và nhiều tính năng ạ.', 5, '2020-10-11 13:16:57', '2020-10-11 13:16:57'),
(1338, '2.1.3', '2', NULL, 4998701, 'Hòa Nguyễn Thị', NULL, 3, '2020-10-11 13:19:47', '2020-10-11 13:19:47'),
(1339, '2.1.3', '2', NULL, 4998659, 'Nguyễn Thảo', NULL, 5, '2020-10-11 13:34:06', '2020-10-11 13:34:06'),
(1340, '2.1.3', '2', '0382592360', 4573502, 'Quyên Phạm', NULL, 5, '2020-10-11 13:40:01', '2020-10-11 13:40:01'),
(1341, '2.1.3', '2', '0395927557', 4879794, 'Trịnh huy thái', NULL, 1, '2020-10-11 13:53:43', '2020-10-11 13:53:43'),
(1342, '2.1.3', '2', '0395927557', 4879794, 'Trịnh huy thái', NULL, 1, '2020-10-11 13:53:44', '2020-10-11 13:53:44'),
(1343, '2.1.3', '2', '0918451092', 4271672, 'Giang Phạm Trà', NULL, 5, '2020-10-11 14:06:42', '2020-10-11 14:06:42'),
(1344, '2.1.3', '2', '0373838842', 4921217, 'An Nguyễn', NULL, 4, '2020-10-11 14:15:26', '2020-10-11 14:15:26'),
(1345, '2.1.3', '2', '0393597360', 4980779, 'Tiến Vũ', NULL, 5, '2020-10-11 16:08:03', '2020-10-11 16:08:03'),
(1346, '2.0.6', '1', '0905539727', 4468131, 'Cường Lê Phước', 'Tuyệt vời!', 5, '2020-10-12 04:33:56', '2020-10-12 04:33:56'),
(1347, '2.1.3', '2', '0328954981', 4981430, 'Tân Nguyễn', 'Tốt lắm á', 5, '2020-10-12 04:44:56', '2020-10-12 04:44:56');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'Admin quản trị hệ thống', '2020-04-09 20:05:11', '2020-04-09 20:05:11', NULL),
(2, 'THPT', 'Quản trị kênh THPT', '2020-04-09 20:05:11', '2020-05-12 12:48:42', NULL),
(3, 'THCS', 'Quản trị kênh THPT', '2020-04-09 20:05:11', '2020-05-12 12:49:02', NULL),
(4, 'TH', 'Quản trị kênh Tiểu học', '2020-04-09 20:05:11', '2020-05-12 12:49:28', NULL),
(5, 'Khác', 'Quản trị khác', '2020-04-09 20:05:11', '2020-05-12 12:49:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schoolblocks`
--

CREATE TABLE IF NOT EXISTS `schoolblocks` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schoolblocks`
--

INSERT INTO `schoolblocks` (`id`, `name`, `avatar`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'Trung học phổ thông', '/uploads/block/1/avatar/1597160878THPT.png', '<p>trung học phổ th&ocirc;ng</p>', '2020-04-09 20:17:11', '2020-08-11 15:47:58'),
(2, 'Trung học cơ sở', '/uploads/block/2/avatar/1597160849THCS.png', '<p>trung học cơ sở</p>', '2020-04-09 20:20:47', '2020-08-11 15:47:29'),
(3, 'Tiểu học', '/uploads/block/3/avatar/1597160900Tiểu học.png', '<p>tiểu học</p>', '2020-04-09 20:20:59', '2020-08-11 15:48:20');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'Toán', 'toán', '2020-04-09 20:27:07', '2020-04-09 20:29:28'),
(2, 'Ngữ Văn', 'văn', '2020-04-09 20:27:58', '2020-08-08 10:18:49'),
(3, 'Tiếng Anh', '<p>M&ocirc;n Tiếng Anh Quốc Tế</p>', '2020-05-05 23:35:07', '2020-05-05 23:35:07'),
(4, 'KHTN và KHXH', 'Khoa học tự nhi&ecirc;n v&agrave; khoa học x&atilde; hội', '2020-08-08 08:57:17', '2020-08-08 08:57:17'),
(5, 'Vật Lí', 'Vật L&iacute;', '2020-08-11 09:59:31', '2020-08-11 09:59:31'),
(6, 'Đọc Hiểu', 'Đọc Hiểu', '2020-08-12 10:35:29', '2020-08-12 10:35:29'),
(7, 'Tư Vấn', 'Tư Vấn', '2020-08-14 11:56:39', '2020-08-14 11:56:39'),
(8, 'Phỏng Vấn', 'Livestream mục đ&iacute;ch phỏng vấn', '2020-08-15 08:17:02', '2020-08-15 08:17:02'),
(9, 'Hóa Học', 'H&oacute;a Học', '2020-08-29 04:46:37', '2020-08-29 04:46:37');

-- --------------------------------------------------------

--
-- Table structure for table `subject_class`
--

CREATE TABLE IF NOT EXISTS `subject_class` (
  `id` int(10) unsigned NOT NULL,
  `subject_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `desc`, `avatar`, `created_at`, `updated_at`) VALUES
(4, 'Thầy Nguyễn Quý Tiến', '-&nbsp;Gi&aacute;o vi&ecirc;n m&ocirc;n Đọc hiểu tại hệ thống gi&aacute;o dục HOCMAI<br />-&nbsp;Thầy có tuổi đời kh&aacute; trẻ n&ecirc;n th&agrave;y c&oacute; phong c&aacute;ch rất thoải m&aacute;i khi giảng bài. Thầy biết c&aacute;ch gi&uacute;p cho học sinh cuốn h&uacute;t v&agrave;o b&agrave;i giảng m&agrave; th&agrave;y đang dạy.', '/uploads/teacher/4/avatar/150x150 Thầy Tiến.png', '2020-04-21 16:35:33', '2020-08-12 11:49:27'),
(5, 'Jenny Tú Anh', '<p>- Năng động, trẻ trung, s&ocirc;i nổi, nhiệt huyết, s&aacute;ng tạo - l&agrave; phong c&aacute;ch m&agrave; c&ocirc; hướng tới v&igrave; thế trong mỗi b&agrave;i giảng của m&igrave;nh c&ocirc; lu&ocirc;n biến h&oacute;a một c&aacute;ch sinh động với nhiều phong c&aacute;ch, v&agrave; nhiều hướng tiếp cận b&agrave;i học gi&uacute;p cho c&aacute;c em học sinh tiếp cận kiến thức 1 c&aacute;ch thoải m&aacute;i, r&egrave;n luyện v&agrave; củng cố kiến thức một c&aacute;ch tự nhi&ecirc;n.<br />- Lu&ocirc;n cập nhật c&ocirc;ng nghệ th&ocirc;ng tin để ứng dụng v&agrave; cải tiến v&agrave;o trong c&aacute;c b&agrave;i giảng, v&igrave; thế c&aacute;c b&agrave;i giảng của c&ocirc; lu&ocirc;n c&oacute; sự ph&aacute; c&aacute;ch v&agrave; tạo được ấn tượng với c&aacute;c em học sinh.<br />- Phong c&aacute;ch giảng dạy chuy&ecirc;n nghiệp, trẻ trung, nhiệt huyết đam m&ecirc; truyền động lực mạnh mẽ cho c&aacute;c em học sinh th&ocirc;ng qua mục ti&ecirc;u b&agrave;i học r&otilde; r&agrave;ng. C&aacute;ch tiếp cận b&agrave;i học th&ocirc;ng qua b&agrave;i h&aacute;t, hoạt động, tr&ograve; chơi .... ph&ugrave; hợp với tất cả c&aacute;c học sinh ở mọi tr&igrave;nh độ.</p>', '/uploads/teacher/5/avatar/avatar.JPG', '2020-04-24 13:41:03', '2020-06-21 09:09:36'),
(6, 'Cô Trịnh Thu Tuyết', '<p><strong>Đ&Ocirc;I N&Eacute;T VỀ C&Ocirc;<br />-&nbsp;</strong>Gi&aacute;o vi&ecirc;n m&ocirc;n Ngữ Văn đang giảng dạy tại Hệ thống gi&aacute;o dục HOCMAI</p><p>- C&ocirc; Tuyết như một cuốn từ điển sống kh&ocirc;ng chỉ về những kiến thức văn học m&agrave; c&ograve;n cả về vốn sống. Với c&ocirc;, văn học ch&iacute;nh l&agrave; cuộc sống, l&agrave; cầu nối truyền tải sự s&acirc;u lắng của cuộc sống, học văn cũng ch&iacute;nh l&agrave; học l&agrave;m người.</p><p>- Đối với bao thế hệ học tr&ograve; c&ocirc; kh&ocirc;ng chỉ l&agrave; một nh&agrave; gi&aacute;o đ&aacute;ng k&iacute;nh m&agrave; c&ograve;n l&agrave; một người mẹ, người bạn lu&ocirc;n lắng nghe, chia sẻ v&agrave; l&agrave; nh&agrave; tư vấn c&aacute;c vấn đề trong cuộc sống.</p><p>- Trong giảng dạy c&ocirc; l&agrave; người lu&ocirc;n đ&ograve;i hỏi sự s&aacute;ng tạo trong phương ph&aacute;p, đặc biệt l&agrave; sự chuẩn x&aacute;c trong văn học v&igrave; thế ở mỗi b&agrave;i giảng c&ocirc; lại c&oacute; những c&aacute;ch truyền đạt kh&aacute;c nhau gi&uacute;p học sinh vừa nắm chắc kiến thức đồng thời lại c&oacute; thể cảm thụ văn học tốt hơn.</p>', '/uploads/teacher/6/avatar/Cô Tuyết.png', '2020-05-05 23:34:14', '2020-08-08 10:09:47'),
(7, 'Cô Hương Fiona', '<p>- L&agrave; một người y&ecirc;u tiếng Anh, c&ocirc; rất mong muốn truyền tải những n&eacute;t đẹp, n&eacute;t hay của thứ ng&ocirc;n ngữ to&agrave;n cầu n&agrave;y cho c&aacute;c thế hệ học tr&ograve;. Điều n&agrave;y được thể hiện r&otilde; th&ocirc;ng qua qu&aacute; tr&igrave;nh tương t&aacute;c với c&aacute;c em học sinh. C&ocirc; Hương lu&ocirc;n sẵn s&agrave;ng trả lời mọi c&acirc;u hỏi của c&aacute;c em học sinh bất kể c&ocirc; đang bận hay cơ thể đang mệt mỏi.</p><p>- Với kinh nghiệm nhiều năm dạy tiếng Anh v&agrave; &ocirc;n luyện tiếng Anh, c&ocirc; đưa ra những kiến thức trọng t&acirc;m, ph&ugrave; hợp với xu hướng ra đề thi. Ch&iacute;nh v&igrave; thế, rất nhiều học sinh của c&ocirc; đ&atilde; đạt được th&agrave;nh t&iacute;ch cao trong k&igrave; thi THPT quốc gia, đỗ v&agrave;o c&aacute;c trường Đại học uy t&iacute;n tr&ecirc;n cả nước.</p><p>- C&aacute;ch truyền đạt r&otilde; r&agrave;ng, nhẹ nh&agrave;ng, lu&ocirc;n giữ hoạt b&aacute;t, năng động, tươi trẻ trong suốt b&agrave;i giảng gi&uacute;p duy tr&igrave; sự hứng th&uacute; của học sinh khiến học sinh kh&ocirc;ng c&ograve;n cảm gi&aacute;c sợ m&ocirc;n Tiếng Anh.</p>', '/uploads/teacher/7/avatar/Cô Hương.png', '2020-05-05 23:34:48', '2020-08-08 10:14:37'),
(8, 'Giáo viên HOCMAI', 'Đội ngũ c&aacute;c gi&aacute;o vi&ecirc;n đang giảng dạy tại Hệ thống gi&aacute;o dục HOCMAI', '/uploads/teacher/8/avatar/400x400.png', '2020-08-08 08:56:32', '2020-08-08 10:12:06'),
(9, 'Thầy Đỗ Ngọc Hà', '<p>- Th&agrave;y Đ&ocirc;̃ Ngọc Hà là m&ocirc;̣t gi&aacute;o vi&ecirc;n trẻ t&agrave;i năng, c&oacute; kinh nghiệm giảng dạy v&agrave; &ocirc;n luyện thi Đại học, cao đẳng với nhiều học sinh đạt điểm cao trong c&aacute;c kỳ thi ĐH, CĐ.</p><p>- Mặc dù có tuổi đời kh&aacute; trẻ, nhưng th&agrave;y lại rất chỉn chu, nghi&ecirc;m khắc khi giảng bài. Th&agrave;y lu&ocirc;n y&ecirc;u c&acirc;̀u sự t&acirc;̣p trung cao và đ&acirc;̀u tư nghi&ecirc;m túc của học sinh cho m&ocirc;̃i bài giảng.</p><p>- L&agrave; người y&ecirc;u Vật l&iacute; v&agrave; đam m&ecirc; kh&aacute;m ph&aacute; c&aacute;c hiện tượng Vật l&iacute;, th&agrave;y lu&ocirc;n muốn lan tỏa những kiến thức v&agrave; truyền t&igrave;nh y&ecirc;u Vật l&iacute; của m&igrave;nh đến c&aacute;c em học sinh.</p>', '/uploads/teacher/9/avatar/Screen Shot 2020-08-11 at 5.00.44 PM.png', '2020-08-11 10:01:04', '2020-08-11 10:08:05'),
(10, 'Thầy Nguyễn Thanh Tùng', '<p>- L&agrave; một kĩ sư tốt nghiệp trường Đại học B&aacute;ch khoa H&agrave; Nội, nhưng đam m&ecirc; với việc giảng dạy, th&agrave;y đ&atilde; từ bỏ ng&agrave;nh nghề được đ&agrave;o tạo b&agrave;i bản để trở th&agrave;nh một người th&agrave;y gi&aacute;o.</p><p>- B&agrave;i giảng của th&agrave;y được thiết kế theo h&igrave;nh thức sơ đồ tư duy v&igrave; thế học sinh y&ecirc;u thương gọi thầy l&agrave; &quot;TH&Agrave;Y T&Ugrave;NG MIND-MAP&quot;</p><p>- Th&agrave;y đặc biệt ch&uacute; trọng việc gi&uacute;p học sinh hiểu bản chất To&aacute;n học để từ đ&oacute; c&oacute; thể giải quyết v&agrave; xử l&iacute; tất cả c&aacute;c dạng b&agrave;i tập trong qu&aacute; tr&igrave;nh học tập v&agrave; &ocirc;n luyện. Đặc biệt, với c&aacute;c dạng b&agrave;i kh&oacute;, thầy sẽ tổng qu&aacute;t h&oacute;a v&agrave; hướng dẫn học sinh c&aacute;ch tư duy để giải quyết vấn đề chứ kh&ocirc;ng đơn thuần l&agrave; vẽ ra c&aacute;ch giải.</p><p>- Th&agrave;y l&agrave; người đam m&ecirc; ca h&aacute;t v&agrave; h&aacute;t rất hay, v&igrave; thế ngo&agrave;i việc gi&uacute;p c&aacute;c em hiểu r&otilde; bản chất của kiến thức, hiểu v&agrave; vận dụng kiến thức th&agrave;y c&ograve;n truyền cảm hứng v&agrave; động lực cho học sinh qua những b&agrave;i h&aacute;t hay v&agrave; &yacute; nghĩa.</p>', '/uploads/teacher/10/avatar/Screen Shot 2020-08-13 at 6.37.19 PM.png', '2020-08-13 11:37:54', '2020-08-13 13:39:19'),
(11, 'Admin HOCMAI', 'Đội ngũ quản trị vi&ecirc;n của Hệ thống gi&aacute;o dục HOCMAI', '/uploads/teacher/11/avatar/logo.png', '2020-08-15 08:16:14', '2020-08-15 08:16:14'),
(12, 'Cô Phạm Thị Thúy Ngọc', '<p>- Gi&aacute;o vi&ecirc;n m&ocirc;n Ho&aacute; học tại Hệ thống gi&aacute;o dục HOCMAI<br />- Với chất giọng nhẹ nh&agrave;ng, th&acirc;n thiện, gần gũi, c&aacute;ch truyền tải kiến thức tỉ mỉ, chi tiết, v&iacute; dụ minh họa thực tiễn, trực quan sinh động tạo cảm hứng v&agrave; sự say m&ecirc; học tập cho c&aacute;c em học sinh.</p><p>- C&oacute; chuy&ecirc;n m&ocirc;n vững, khả năng nắm bắt t&acirc;m l&yacute; học sinh nhạy b&eacute;n c&ocirc; kh&ocirc;ng chỉ gi&uacute;p c&aacute;c em nắm vững kiến thức m&agrave; c&ograve;n gi&uacute;p c&aacute;c em giải quyết c&aacute;c vấn đề kh&oacute; khăn trong cuộc sống, hỗ trợ c&aacute;c em x&acirc;y dựng kế hoạch học tập h&igrave;nh th&agrave;nh t&iacute;nh tự gi&aacute;c v&agrave; khả năng tự học.</p><p>- L&agrave; người đa t&agrave;i v&agrave; rất kh&eacute;o l&eacute;o, ngo&agrave;i c&ocirc;ng việc giảng dạy v&agrave; quản l&yacute; tại trường học, ngo&agrave;i sở th&iacute;ch nấu nướng v&agrave; nấu những bữa cơm ngon c&ocirc; c&ograve;n c&oacute; sở th&iacute;ch may v&aacute; v&agrave; c&oacute; thể may những bộ quần &aacute;o rất đẹp v&agrave; trang nh&atilde;.</p>', '/uploads/teacher/12/avatar/cô-ngọc.png', '2020-08-15 10:02:02', '2020-08-15 10:02:02'),
(13, 'Cô Đặng Bảo Vân', 'C&ocirc; Đặng Bảo V&acirc;n - Gi&aacute;o vi&ecirc;n m&ocirc;n Tiếng Anh tại HOCMAI', '/uploads/teacher/13/avatar/dangbaovan.png', '2020-08-28 09:38:44', '2020-08-28 09:38:44'),
(14, 'Cô Lê Thu Hà', 'Gi&aacute;o vi&ecirc;n m&ocirc;n Tiếng Anh tại HOCMAI', '/uploads/teacher/14/avatar/300x300.png', '2020-08-29 04:32:12', '2020-08-29 04:32:12'),
(15, 'Cô Phạm Thị Thúy Ngọc', 'Gi&aacute;o vi&ecirc;n m&ocirc;n H&oacute;a học tại HOCMAI', '/uploads/teacher/15/avatar/300x300 (1).png', '2020-08-29 04:37:37', '2020-08-29 04:37:37'),
(16, 'Thầy Nguyễn Mạnh Cường', 'Gi&aacute;o vi&ecirc;n m&ocirc;n To&aacute;n tại HOCMAI', '/uploads/teacher/16/avatar/300x300.png', '2020-08-29 04:38:03', '2020-08-29 04:38:03'),
(17, 'Thầy Nguyễn Phi Hùng', 'Gi&aacute;o vi&ecirc;n m&ocirc;n Ngữ Văn tại HOCMAI', '/uploads/teacher/17/avatar/300x300 (1).png', '2020-08-29 04:38:29', '2020-08-29 04:38:30'),
(18, 'Thầy Nguyễn Trung Nguyên', 'Gi&aacute;o vi&ecirc;n m&ocirc;n tiếng Anh tại HOCMAI', '/uploads/teacher/18/avatar/300x300.png', '2020-08-29 04:38:54', '2020-08-29 04:38:54'),
(19, 'Thanh Lan', 'C&ocirc; Nguyễn Thị Thanh Lan - Gi&aacute;o vi&ecirc;n m&ocirc;n To&aacute;n tại Hệ thống Gi&aacute;o dục HOCMAI', '/uploads/teacher/19/avatar/300x300.png', '2020-09-21 11:39:41', '2020-09-21 11:39:41'),
(20, 'Nguyễn Thị Mai Hương (Hương Omega)', 'C&ocirc; Nguyễn Thị Mai Hương (Hương Omega) - Gi&aacute;o vi&ecirc;n m&ocirc;n Tiếng Anh tại Hệ thống Gi&aacute;o dục HOCMAI.', '/uploads/teacher/20/avatar/300x300.png', '2020-09-21 11:46:29', '2020-09-21 11:46:29'),
(21, 'Hàn Thị Hải Huyền', 'C&ocirc; H&agrave;n Thị Hải Huyền (Hải Huyền)<br />-&nbsp;Gi&aacute;o vi&ecirc;n m&ocirc;n Tiếng Anh tại hệ thống Gi&aacute;o dục HOCMAI', '/uploads/teacher/21/avatar/300x300 (1).png', '2020-09-21 11:50:27', '2020-09-21 11:50:27');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_class`
--

CREATE TABLE IF NOT EXISTS `teacher_class` (
  `id` int(10) unsigned NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_subject`
--

CREATE TABLE IF NOT EXISTS `teacher_subject` (
  `id` int(10) unsigned NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `username` text COLLATE utf8mb4_unicode_ci,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `status`, `username`, `name`, `avatar`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 1, 'admin_thpt', 'Admin THPT', '/uploads/admin/Logo-hocmai-1.png', 'thpt@hocmai.vn', NULL, '$2y$10$04jWGEjMnMgw6IbH.23wz.yUZgvwR/U.PyCeu3nDSiy2cS4TJlEQa', NULL, '2020-04-09 20:05:31', '2020-09-28 14:05:48', '2020-09-28 14:05:48'),
(2, 1, 1, 'super_admin', 'Quản trị viên', '/uploads/admin/chân app.png', 'thangnt@hocmai.vn', NULL, '$2y$10$Py9Yx4ZkW57dNCdWYT1k/ulHQq24zzZwQNef5wv3LM6YhuvK2hSyK', 'Ntd7Loljlh9ofF1VG6H5dmVmKV5khC3HkmgdH3RCcjd42EoGeVJLkpTJJHjB', '2020-04-21 20:16:07', '2020-08-15 08:37:27', NULL),
(3, 3, 1, 'admin_thcs', 'Admin THCS', '/uploads/admin/Logo-hocmai-1.png', 'thcs@hocmai.vn', NULL, '$2y$10$SFvWJ3FEb.unw4u11zbGWuKrDgUbCNN8N4LsbEQIP7oLdHD.Qt4/W', NULL, '2020-04-27 13:54:42', '2020-09-28 14:05:45', '2020-09-28 14:05:45'),
(4, 4, 1, 'admin_th', 'Admin TH', '/uploads/admin/Logo-hocmai-1.png', 'th@hocmai.vn', NULL, '$2y$10$mO6sZd9L3rVWHtVyIfBukOJ.77uWyw/Ky68evDpNsO8FWq1D4G8HK', NULL, '2020-05-13 10:05:52', '2020-09-28 14:05:39', '2020-09-28 14:05:39'),
(5, 1, 1, 'designer', 'Nga', '/uploads/admin/Image.png', 'ngantt@hocmai.vn', NULL, '$2y$10$iG9LzvjCFFa6O2LoDanJze/0TZOHQb2WxVtHQTCVyNAxMUDg.vsaO', NULL, '2020-05-13 17:25:07', '2020-05-25 02:15:29', NULL),
(6, 3, 1, 'phuongnn', 'Nguyễn Ngọc Phương', '/uploads/admin/6/avatar/106332788_197421021704697_7793085140384445460_n (1).jpg', 'phuongnn@hocmai.vn', NULL, '$2y$10$pJd1ckiQhDN1YPk6/gMwiOPEnLwpgEbVA6PM5WmrX.m7yHGYakZzK', 'MFLNfNQpPJIyL0ICc5SkuyqWaNy9u8lmQTWxdgjSkA685FxT7ZXEiGNoy8xA', '2020-09-28 11:17:05', '2020-10-09 10:51:57', NULL),
(7, 2, 1, 'admin_thpt', 'THPT', '/uploads/admin/7/avatar/Logo-hocmai-1.png', 'thpt@hocmai.vn', NULL, '$2y$10$0f1fAOeMr58YAplnOcKXN.pgrlZAGZ1I1Duz1yIVGa4gJvaEBSyS.', 'POb5auEsH2i1GQkVTc54w5mrh51Y8AgaSL0h9NUcVfs5px3KUdJK0Zmbfzag', '2020-09-28 14:06:15', '2020-09-28 14:06:15', NULL),
(8, 3, 1, 'admin_thcs', 'THCS', '/uploads/admin/8/avatar/Logo-hocmai-1.png', 'thcs@hocmai.vn', NULL, '$2y$10$j99BlEGdx/hbunppOQ3CkOCYUtW79tD8X0OjBcvk.1A2VQf1RXFAC', 'AdHQY4NSn5rfdi21Fhibt5rpc55HF9w2HiunQ2jqz4wbnuIC2g5isQpHRW0n', '2020-09-28 14:08:08', '2020-09-28 14:08:08', NULL),
(9, 4, 1, 'admin_th', 'TH', '/uploads/admin/9/avatar/Logo-hocmai-1.png', 'tieuhoc@hocmai.vn', NULL, '$2y$10$Ye1CRg62e6UCcdDhZz4kUeXCSSsieLh8qD3x9oIGtPLdNnlHqq4dW', 'm6AOJ4x8ntkilARyiSd6TZssWQCNQtcAj0uYVKWf7awTLZaBrmE8gKdIRbkT', '2020-09-28 14:08:45', '2020-09-28 14:08:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_comment_fake`
--

CREATE TABLE IF NOT EXISTS `user_comment_fake` (
  `id` int(10) unsigned NOT NULL,
  `livestream_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userfake_id` int(11) NOT NULL,
  `commentfake_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_fakes`
--

CREATE TABLE IF NOT EXISTS `user_fakes` (
  `id` int(10) unsigned NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_fakes`
--

INSERT INTO `user_fakes` (`id`, `fullname`, `name`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn', 'Thắng', '/uploads/userFake/1/avatar/87449570_2145660542255856_3117446160046882816_o.jpg', '2020-05-10 21:02:17', '2020-05-10 21:02:17');

-- --------------------------------------------------------

--
-- Table structure for table `user_shop`
--

CREATE TABLE IF NOT EXISTS `user_shop` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `another_videos`
--
ALTER TABLE `another_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment_fakes`
--
ALTER TABLE `comment_fakes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headers`
--
ALTER TABLE `headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hocmai_videos`
--
ALTER TABLE `hocmai_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `livestreams`
--
ALTER TABLE `livestreams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `livestream_another_videos`
--
ALTER TABLE `livestream_another_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `livestream_details`
--
ALTER TABLE `livestream_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `livestream_hocmai_videos`
--
ALTER TABLE `livestream_hocmai_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `rate_apps`
--
ALTER TABLE `rate_apps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schoolblocks`
--
ALTER TABLE `schoolblocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_class`
--
ALTER TABLE `subject_class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_class`
--
ALTER TABLE `teacher_class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_subject`
--
ALTER TABLE `teacher_subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_comment_fake`
--
ALTER TABLE `user_comment_fake`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_fakes`
--
ALTER TABLE `user_fakes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_shop`
--
ALTER TABLE `user_shop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `another_videos`
--
ALTER TABLE `another_videos`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `comment_fakes`
--
ALTER TABLE `comment_fakes`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `headers`
--
ALTER TABLE `headers`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `hocmai_videos`
--
ALTER TABLE `hocmai_videos`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `livestreams`
--
ALTER TABLE `livestreams`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=171;
--
-- AUTO_INCREMENT for table `livestream_another_videos`
--
ALTER TABLE `livestream_another_videos`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=156;
--
-- AUTO_INCREMENT for table `livestream_details`
--
ALTER TABLE `livestream_details`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `livestream_hocmai_videos`
--
ALTER TABLE `livestream_hocmai_videos`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rate_apps`
--
ALTER TABLE `rate_apps`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1348;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `schoolblocks`
--
ALTER TABLE `schoolblocks`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `subject_class`
--
ALTER TABLE `subject_class`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `teacher_class`
--
ALTER TABLE `teacher_class`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `teacher_subject`
--
ALTER TABLE `teacher_subject`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user_comment_fake`
--
ALTER TABLE `user_comment_fake`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_fakes`
--
ALTER TABLE `user_fakes`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_shop`
--
ALTER TABLE `user_shop`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
