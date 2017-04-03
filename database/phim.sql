-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2017 at 08:20 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phim`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dm_quocgia`
--

CREATE TABLE IF NOT EXISTS `dm_quocgia` (
  `id` int(11) NOT NULL,
  `ten_quocgia` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `stt` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dm_quocgia`
--

INSERT INTO `dm_quocgia` (`id`, `ten_quocgia`, `slug`, `stt`, `created_at`, `updated_at`) VALUES
(1, 'Mỹ', 'my', 1, '2017-02-09 14:42:48', '2017-02-09 07:42:48'),
(2, 'Việt Nam', 'viet-nam', 2, '2017-02-09 07:42:36', '2017-02-09 07:42:36'),
(3, 'Trung Quốc', 'trung-quoc', 3, '2017-02-09 07:42:56', '2017-02-09 07:42:56'),
(4, 'Hàn Quốc', 'han-quoc', 4, '2017-02-09 07:43:04', '2017-02-09 07:43:04'),
(5, 'Nhật Bản', 'nhat-ban', 5, '2017-02-09 07:43:14', '2017-02-09 07:43:14'),
(6, 'Thái Lan', 'thai-lan', 6, '2017-02-14 18:47:09', '2017-02-14 18:47:09');

-- --------------------------------------------------------

--
-- Table structure for table `dm_theloaiphim`
--

CREATE TABLE IF NOT EXISTS `dm_theloaiphim` (
  `id` int(11) NOT NULL,
  `ten_theloaiphim` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `stt` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dm_theloaiphim`
--

INSERT INTO `dm_theloaiphim` (`id`, `ten_theloaiphim`, `slug`, `stt`, `created_at`, `updated_at`) VALUES
(1, 'Hành động', 'hanh-dong', 1, '2017-02-09 07:41:47', '2017-02-09 07:41:47'),
(2, 'Kinh dị', 'kinh-di', 2, '2017-02-09 07:41:57', '2017-02-09 07:41:57'),
(3, 'Chiếu rạp', 'chieu-rap', 3, '2017-02-09 07:42:11', '2017-02-09 07:42:11'),
(4, 'Hoạt hình', 'hoat-hinh', 4, '2017-02-09 07:42:21', '2017-02-09 07:42:21'),
(5, 'Võ thuật', 'vo-thuat', 5, '2017-02-14 17:58:28', '2017-02-14 17:58:28'),
(6, 'Tâm lý', 'tam-ly', 6, '2017-02-14 18:46:32', '2017-02-14 18:46:32'),
(7, 'Tình cảm', 'tinh-cam', 7, '2017-02-14 18:46:43', '2017-02-14 18:46:43');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_01_12_090045_them_bang_admin', 1),
('2017_01_13_053654_them_bang_admins_baiviet', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner`
--

CREATE TABLE IF NOT EXISTS `tbl_banner` (
  `id` int(11) NOT NULL,
  `idphim` int(11) NOT NULL,
  `stt` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_banner`
--

INSERT INTO `tbl_banner` (`id`, `idphim`, `stt`) VALUES
(31, 11, 1),
(32, 466126, 2),
(33, 12, 3),
(34, 466125, 4),
(35, 466124, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chitietphim`
--

CREATE TABLE IF NOT EXISTS `tbl_chitietphim` (
  `id` int(11) NOT NULL,
  `ma_phim` int(11) NOT NULL,
  `tieude` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_chitietphim`
--

INSERT INTO `tbl_chitietphim` (`id`, `ma_phim`, `tieude`, `link`) VALUES
(1, 466124, '1', 'http://phim14.net/xem-phim/dai-duong-vinh-dieu_the-glory-of-tang-dynasty.8637.250015.html'),
(2, 466124, '2', 'http://phim14.net/xem-phim/dai-duong-vinh-dieu_the-glory-of-tang-dynasty.8637.250016.html'),
(3, 466124, '3', 'http://phim14.net/xem-phim/dai-duong-vinh-dieu_the-glory-of-tang-dynasty.8637.250017.html'),
(5, 12, '1', 'https://www.youtube.com/watch?v=V7GTAiUCHBQ'),
(6, 466126, '1', 'http://www.hayhaytv.vn/xem-phim/phim-dragon-ball-super-dragon-ball-chou-bay-vien-ngoc-rong-super-Tap-1-hd-31343837306E61.html'),
(7, 466126, '2', 'http://www.hayhaytv.vn/xem-phim/phim-dragon-ball-super-dragon-ball-chou-bay-vien-ngoc-rong-super-Tap-1-hd-31343837306E61.html'),
(8, 466127, '1', 'http://www.hayhaytv.vn/xem-phim/phim-love-and-lies-tro-ao-thuat-ai-tinh-Tap-1-hd-32333536366E61.html'),
(9, 466127, '2', 'http://www.hayhaytv.vn/xem-phim/phim-love-and-lies-tro-ao-thuat-ai-tinh-Tap-2-hd-32333536366E61.html'),
(10, 466128, '1', 'http://www.hayhaytv.vn/xem-phim/phim-guardian-of-beauty-bao-ho-my-nhan-Tap-1-hd-32333537326E61.html'),
(11, 466128, '2', 'http://www.hayhaytv.vn/xem-phim/phim-guardian-of-beauty-bao-ho-my-nhan-Tap-2-hd-32333537326E61.html'),
(12, 466128, '3', 'http://www.hayhaytv.vn/xem-phim/phim-guardian-of-beauty-bao-ho-my-nhan-Tap-3-hd-32333537326E61.html'),
(13, 466128, '4', 'http://www.hayhaytv.vn/xem-phim/phim-guardian-of-beauty-bao-ho-my-nhan-Tap-4-hd-32333537326E61.html'),
(14, 466128, '5', 'http://www.hayhaytv.vn/xem-phim/phim-guardian-of-beauty-bao-ho-my-nhan-Tap-5-hd-32333537326E61.html'),
(15, 11, '1', 'http://phim14.net/xem-phim/dai-duong-vinh-dieu_the-glory-of-tang-dynasty.8637.250014.html'),
(16, 10, '1', 'https://www.youtube.com/watch?v=izFnBP3lC3Q');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_phim`
--

CREATE TABLE IF NOT EXISTS `tbl_phim` (
  `id` int(11) NOT NULL,
  `ma_cap2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ten_phim` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `ten_tienganh` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `tieude` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `daodien` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dienvien` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nhasanxuat` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `namsanxuat` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `img_phim` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `banner_phim` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `linkimg` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `linkbanner` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `phimbo` int(1) DEFAULT NULL,
  `thoiluong` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `linkphim` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `luotxem` int(6) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=466157 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_phim`
--

INSERT INTO `tbl_phim` (`id`, `ma_cap2`, `ten_phim`, `slug`, `ten_tienganh`, `tieude`, `daodien`, `dienvien`, `nhasanxuat`, `namsanxuat`, `img_phim`, `banner_phim`, `linkimg`, `linkbanner`, `phimbo`, `thoiluong`, `linkphim`, `noidung`, `luotxem`, `created_at`, `updated_at`) VALUES
(10, '', 'Cướp biển vùng Caribbe (Phần 5): Chết không đối chứng', 'cuop-bien-vung-caribbe-phan-5-chet-khong-doi-chung', 'Đỗ Văn Hoàng', 'HDS', 'Đỗ Văn Hoàng', 'Đỗ Văn Hoàng', 'TSB', '2016', '/upload/anhdaidienphim/MP_10.jpg', '/upload/anhbannerphim/MP_10.jpg', '', '', 1, '1212', 'http://mp3.zing.vn/video-clip/Noi-Nay-Co-Anh-Son-Tung-M-TP/ZW79ZBE8.html', 'Vietnam eSports TV là kênh truyền hình thể thao điện tử số 1 tại Việt Nam phát sóng trực tiếp hàng ngày tại địa chỉ www.vetv.vn. VETV sở hữu bản quyền độc quyền toàn bộ giải đấu chuyên nghiệp Liên Minh Huyền Thoại trên thế giới tại VN. Youtube channel : http://youtube.com/garenavietnam', 1, '2017-02-28 07:16:24', '0000-00-00 00:00:00'),
(11, '', 'The Glory Of Tang Dynasty - Đại Đường Vinh Diệu', 'the-glory-of-tang-dynasty-dai-duong-vinh-dieu', 'The Glory Of Tang Dynasty', 'HD', 'Đang cập nhật', 'Cảnh Điềm, Thư Sướng, Mao Tử Tuấn, Tự Vạn Xuyến', 'ETC', '2016', '/upload/anhdaidienphim/MP_11.jpg', '/upload/anhbannerphim/MP_11.jpg', '', '', 1, '123', 'http://phim14.net/xem-phim/nhat-ky-ma-ca-rong-phan-8_the-vampire-diaries-season-8.8479.html', 'Phim Đại Đường Vinh Diệu 2016 kể về Trầm Trân Châu – tiểu thư khuê cát bị ép tham gia cuộc tuyển chọn phi tần của Quảng Bình Vương. Người con gái Giang Nam với tâm hồn lương thiện này luôn hết lòng giúp đỡ người xung quanh. Khi chiến tranh xảy ra, Trầm Trân Châu nguyện ở lại Trướng An Nam để đồng cam cộng khổ cùng dân chúng. Về sau, Trầm Trân Châu sinh ra con trai cả là Đường Đức Tông – Lý Thích. Khi Lý Thích lên ngôi, Trầm Trâu Châu đã được sắc phong và tôn vinh vì những cống hiến đã dành cho đất nước.', 0, '2017-02-26 06:29:52', '0000-00-00 00:00:00'),
(12, '', 'Giáng Ma Anh Hùng Truyện - Thạch Thiên Liệt Truyện ', 'giang-ma-anh-hung-truyen-thach-thien-liet-truyen', 'Giáng Ma Anh Hùng Truyện - Thạch', 'HD', 'Đường “thắt cổ chai” vì vướng nhà thờ họ chủ tịch tỉnh', 'Đường “thắt cổ chai” vì vướng nhà thờ họ chủ tịch tỉnh', 'fdfd', '2016', '/upload/anhdaidienphim/MP_12.jpg', '/upload/anhbannerphim/MP_12.jpg', '', '', 1, '123', 'https://www.youtube.com/watch?v=Llw9Q6akRo4', 'In this example, we search for the string "Hello World!", find the value "world" and then replace the value with "Peter".', 1, '2017-02-28 09:00:44', '0000-00-00 00:00:00'),
(466124, '', 'The Visioner ', 'the-visioner', 'Behind one Girl', '13/45', 'Soobin Hoàng Sơn', 'Soobin Hoàng Sơn', 'Soobin Hoàng Sơn', '2016', '\\upload\\anhdaidienphim\\MP_466124.jpg', '/upload/anhbannerphim/MP_466124.jpg', '', '', 1, '123', 'http://phim14.net/xem-phim/ngon-gio-doi-toi_blow-breeze.8365.html', 'Nhóm dịch: Son Go Ku Fanpage, Sida Team. Dragon Ball Super là phần tiếp theo của phần Dragon Ball Kai trong câu chuyện nổi tiếng trên toàn thế giới Dragon Ball, 7 Viên Ngọc Rồng. Chỉ một thời gian ngắn sau cuộc chiến với Buu, những đối thủ có sức mạnh khủng khiếp hơn nữa xuất hiện ... Nhóm dịch: Son Go Ku Fanpage, Sida Team', 0, '2017-02-26 06:36:57', '0000-00-00 00:00:00'),
(466125, '', 'Master Of The Drunken Fist : Beggar So - Đại Hiệp Túy Quyền : Tô Khất Nhi', 'master-of-the-drunken-fist-beggar-so-dai-hiep-tuy-quyen-to-khat-nhi', 'Master Of The Drunken Fist : Beggar So', 'HD', 'Jian Yong Guo', 'Zhi Hui Chen, Jun Cao, Mei Ying Wang', 'ESC', '2016', '\\upload\\anhdaidienphim\\MP_466125.jpg', '/upload/anhbannerphim/MP_10.jpg', '', '', 0, '95', 'http://www.hayhaytv.vn/xem-phim/phim-master-of-the-drunken-fist-beggar-so-dai-hiep-tuy-quyen-to-khat', 'Phim kể về cuộc đời của Tõ Xán từ lúc vào cung nhận chức Võ Trạng Nguyên nhưng vì bất cẩn nên bị phế võ công và gia đình bị giết. Sau này khi nhận bang chủ Cái Bang làm sư phụ và tập luyện túy quyền để trả thù xưa hận cũ thì anh cũng quyết định đổi tên thành Tô Khất Nhi', 4, '2017-02-28 07:09:53', '0000-00-00 00:00:00'),
(466126, '', 'Dragon Ball Super (Dragon Ball Chou) - Bảy Viên Ngọc Rồng - Super', 'phim-dragon-ball-super', 'Dragon Ball Super', 'HD', 'Kimitoshi Chioka', 'Masako Nozawa, Hiromi Tsuru, Kôichi Yamadera, Watanabe Naoko', 'Toie', '2016', '/upload/anhdaidienphim/MP_466126.jpg', '/upload/anhbannerphim/MP_10.jpg', '', '', 1, '24', 'http://www.hayhaytv.vn/xem-phim/phim-dragon-ball-super-dragon-ball-chou-bay-vien-ngoc-rong-super-Tap', 'Nhóm dịch: Son Go Ku Fanpage, Sida Team. Dragon Ball Super là phần tiếp theo của phần Dragon Ball Kai trong câu chuyện nổi tiếng trên toàn thế giới Dragon Ball, 7 Viên Ngọc Rồng. Chỉ một thời gian ngắn sau cuộc chiến với Buu, những đối thủ có sức mạnh khủng khiếp hơn nữa xuất hiện ... Nhóm dịch: Son Go Ku Fanpage, Sida Team', 0, '2017-02-26 06:29:52', '2017-02-23 02:18:07'),
(466127, '', 'Love And Lies - Trò Ảo Thuật Ái Tình', 'love-and-lies-tro-ao-thuat-ai-tinh', 'Love And Lies', 'HD', '', 'Jung Il Woo, Mild Wiraporn Jiravechsoontornkul Mild Wiraporn Ji', 'Hoàng', '2016', '\\upload\\anhdaidienphim\\MP_466127.jpg', '/upload/anhbannerphim/MP_10.jpg', '', '', 1, '45', 'http://www.hayhaytv.vn/xem-phim/phim-love-and-lies-tro-ao-thuat-ai-tinh-Tap-1-hd-32333536366E61.html', 'Phim Trò Ảo Thuật Ái Tình - Love And Lies hợp tác Thái - Hàn: Tim (Jung Il Woo) là trưởng bộ phận PR của công ty quản lý và truyền thông hàng đầu Thái Lan - L&S entertainment. Tim cũng như L&S entertainment có khả năng tạo dựng hình ảnh và xử lý scandal cho các nghệ sĩ bằng rất nhiều mánh khoé để đánh lừa khán giả. Trong thời gian này, L&S entertainment đang có dự án lấy lại tên tuổi của Bel với mục đích giúp Bel có được vai nữ chính trong một bộ phim Hollywood sản xuất sắp quay tại Thái Lan. Chính nhờ dự án lần này, Bel và Tim có cơ hội được tiếp xúc với nhau. Liệu những mánh khoé và sự giả dối sẽ tạo nên mối quan hệ thế nào giữa Tim và Bell. Mời các bạn theo dõi qua bộ phim "Trò ảo thuật ái tình - Love and lies"...\n', 0, '2017-02-26 06:29:52', '0000-00-00 00:00:00'),
(466128, '', 'Guardian Of Beauty - Bảo Hộ Mỹ Nhân', 'guardian-of-beauty-bao-ho-my-nhan', 'Guardian Of Beauty', 'HD', 'Đỗ Văn Hoàng', ' Lý Tiểu Lộ', 'ETC', '2016', '/upload/anhdaidienphim/MP_466128.jpg', '/upload/anhbannerphim/MP_466128.jpg', '', '', 1, '45', 'http://www.hayhaytv.vn/xem-phim/phim-guardian-of-beauty-bao-ho-my-nhan-Tap-1-hd-32333537326E61.html', 'Phim Bảo Hộ Mỹ Nhân: Thuở nhỏ, vì trong nhà xảy ra biến cố mà Lâm Giai được bố là Lâm Thế Uyên vất vả một mình nuôi lớn. Sau khi lớn lên, tính cách Lâm Giai vô cùng tuỳ ý, làm chuyện gì cũng không nghĩ đến hậu quả. Lâm Thế Uyên ý thức được vấn đề của con gái mình, vì muốn cứu vớt con gái mà đuổi cô ra khỏi nhà, cho cô làm việc từ những chức vụ thấp nhất mà lên, tiếp thu sự rèn luyện và cải tạo từ xã hội. Lâm Giai mất đi cuộc sống sung túc giận dỗi bỏ đi, lưu lạc ngoài đường, được Trần Hi - một nhân viên chuyển phát sinh ra và lớn lên trong những con phố nhỏ ở Bắc Kinh cứu giúp. Cuộc sống của những con người lao động bình thường khiến Lâm Giai khó thích nghi được, cô lại càng gây ra nhiều chuyện tai hoạ.', 0, '2017-02-26 06:29:52', '0000-00-00 00:00:00'),
(466129, '', 'Snow Girl - Khoảng Cách Năm Ánh Sáng Giữa Anh Và Em', 'snow-girl-khoang-cach-nam-anh-sang-giua-anh-va-em', '', 'HD', '', '', '', '2016', '/upload/anhdaidienphim/MP_466129.jpg', '', '', '', 0, '', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 0, '2017-02-26 06:29:52', '2017-02-22 01:37:09'),
(466130, '', 'Snow Girl - Khoảng Cách Năm Ánh Sáng Giữa Anh Và Em', 'snow-girl-khoang-cach-nam-anh-sang-giua-anh-va-em', '', 'HD', '', '', '', '2016', '/upload/anhdaidienphim/MP_466129.jpg', '', '', '', 0, '', '', '', 0, '2017-02-26 06:29:52', '0000-00-00 00:00:00'),
(466131, '', 'Snow Girl - Khoảng Cách Năm Ánh Sáng Giữa Anh Và Em', 'snow-girl-khoang-cach-nam-anh-sang-giua-anh-va-em', '', 'HD', '', '', '', '2016', '/upload/anhdaidienphim/MP_466129.jpg', '', '', '', 0, '', '', '', 0, '2017-02-26 06:29:52', '0000-00-00 00:00:00'),
(466132, '', 'Snow Girl - Khoảng Cách Năm Ánh Sáng Giữa Anh Và Em', 'snow-girl-khoang-cach-nam-anh-sang-giua-anh-va-em', '', 'HD', '', '', '', '2016', '/upload/anhdaidienphim/MP_466129.jpg', '', '', '', 0, '', '', '', 0, '2017-02-26 06:29:52', '0000-00-00 00:00:00'),
(466133, '', 'Snow Girl - Khoảng Cách Năm Ánh Sáng Giữa Anh Và Em', 'snow-girl-khoang-cach-nam-anh-sang-giua-anh-va-em', '', 'HD', '', '', '', '2016', '/upload/anhdaidienphim/MP_466129.jpg', '', '', '', 0, '', '', '', 0, '2017-02-26 06:29:52', '0000-00-00 00:00:00'),
(466134, '', 'Snow Girl - Khoảng Cách Năm Ánh Sáng Giữa Anh Và Em', 'snow-girl-khoang-cach-nam-anh-sang-giua-anh-va-em', '', 'HD', '', '', '', '2016', '/upload/anhdaidienphim/MP_466129.jpg', '', '', '', 0, '', '', '', 0, '2017-02-26 06:29:52', '0000-00-00 00:00:00'),
(466135, '', 'Snow Girl - Khoảng Cách Năm Ánh Sáng Giữa Anh Và Em', 'snow-girl-khoang-cach-nam-anh-sang-giua-anh-va-em', '', 'HD', '', '', '', '2016', '/upload/anhdaidienphim/MP_466129.jpg', '', '', '', 0, '', '', '', 0, '2017-02-26 06:29:52', '0000-00-00 00:00:00'),
(466136, '', 'Snow Girl - Khoảng Cách Năm Ánh Sáng Giữa Anh Và Em', 'snow-girl-khoang-cach-nam-anh-sang-giua-anh-va-em', '', 'HD', '', '', '', '2016', '/upload/anhdaidienphim/MP_466129.jpg', '', '', '', 0, '', '', '', 0, '2017-02-26 06:29:52', '0000-00-00 00:00:00'),
(466137, '', 'Snow Girl - Khoảng Cách Năm Ánh Sáng Giữa Anh Và Em', 'snow-girl-khoang-cach-nam-anh-sang-giua-anh-va-em', '', 'HD', '', '', '', '2016', '/upload/anhdaidienphim/MP_466129.jpg', '', '', '', 0, '', '', '', 0, '2017-02-26 06:29:52', '0000-00-00 00:00:00'),
(466138, '', 'Snow Girl - Khoảng Cách Năm Ánh Sáng Giữa Anh Và Em', 'snow-girl-khoang-cach-nam-anh-sang-giua-anh-va-em', '', 'HD', '', '', '', '2016', '/upload/anhdaidienphim/MP_466129.jpg', '', '', '', 0, '', '', '', 0, '2017-02-26 06:29:52', '0000-00-00 00:00:00'),
(466139, '', 'Snow Girl - Khoảng Cách Năm Ánh Sáng Giữa Anh Và Em', 'snow-girl-khoang-cach-nam-anh-sang-giua-anh-va-em', '', 'HD', '', '', '', '2016', '/upload/anhdaidienphim/MP_466129.jpg', '', '', '', 0, '', '', '', 0, '2017-02-26 06:29:52', '0000-00-00 00:00:00'),
(466140, '', 'Snow Girl - Khoảng Cách Năm Ánh Sáng Giữa Anh Và Em', 'snow-girl-khoang-cach-nam-anh-sang-giua-anh-va-em', '', 'HD', '', '', '', '2016', '/upload/anhdaidienphim/MP_466129.jpg', '', '', '', 0, '', '', '', 0, '2017-02-26 06:29:52', '0000-00-00 00:00:00'),
(466141, '', 'Snow Girl - Khoảng Cách Năm Ánh Sáng Giữa Anh Và Em', 'snow-girl-khoang-cach-nam-anh-sang-giua-anh-va-em', '', 'HD', '', '', '', '2016', '/upload/anhdaidienphim/MP_466129.jpg', '', '', '', 0, '', '', '', 0, '2017-02-26 06:29:52', '0000-00-00 00:00:00'),
(466142, '', 'Snow Girl - Khoảng Cách Năm Ánh Sáng Giữa Anh Và Em', 'snow-girl-khoang-cach-nam-anh-sang-giua-anh-va-em', '', 'HD', '', '', '', '2016', '/upload/anhdaidienphim/MP_466129.jpg', '', '', '', 0, '', '', '', 0, '2017-02-26 06:29:52', '0000-00-00 00:00:00'),
(466143, '', 'Snow Girl - Khoảng Cách Năm Ánh Sáng Giữa Anh Và Em', 'snow-girl-khoang-cach-nam-anh-sang-giua-anh-va-em', '', 'HD', '', '', '', '2016', '/upload/anhdaidienphim/MP_466129.jpg', '', '', '', 0, '', '', '', 0, '2017-02-26 06:29:52', '0000-00-00 00:00:00'),
(466144, '', 'Snow Girl - Khoảng Cách Năm Ánh Sáng Giữa Anh Và Em', 'snow-girl-khoang-cach-nam-anh-sang-giua-anh-va-em', '', 'HD', '', '', '', '2016', '/upload/anhdaidienphim/MP_466129.jpg', '', '', '', 0, '', '', '', 0, '2017-02-26 06:29:52', '0000-00-00 00:00:00'),
(466145, '', 'Snow Girl - Khoảng Cách Năm Ánh Sáng Giữa Anh Và Em', 'snow-girl-khoang-cach-nam-anh-sang-giua-anh-va-em', '', 'HD', '', '', '', '2016', '/upload/anhdaidienphim/MP_466129.jpg', '', '', '', 0, '', '', '', 0, '2017-02-26 06:29:52', '0000-00-00 00:00:00'),
(466146, '', 'Snow Girl - Khoảng Cách Năm Ánh Sáng Giữa Anh Và Em', 'snow-girl-khoang-cach-nam-anh-sang-giua-anh-va-em', '', 'HD', '', '', '', '2016', '/upload/anhdaidienphim/MP_466129.jpg', '', '', '', 0, '', '', '', 0, '2017-02-26 06:29:52', '0000-00-00 00:00:00'),
(466147, '', 'Snow Girl - Khoảng Cách Năm Ánh Sáng Giữa Anh Và Em', 'snow-girl-khoang-cach-nam-anh-sang-giua-anh-va-em', '', 'HD', '', '', '', '2016', '/upload/anhdaidienphim/MP_466129.jpg', '', '', '', 0, '', '', '', 0, '2017-02-26 06:29:52', '0000-00-00 00:00:00'),
(466148, '', 'Snow Girl - Khoảng Cách Năm Ánh Sáng Giữa Anh Và Em', 'snow-girl-khoang-cach-nam-anh-sang-giua-anh-va-em', '', 'HD', '', '', '', '2016', '/upload/anhdaidienphim/MP_466129.jpg', '', '', '', 0, '', '', '', 0, '2017-02-26 06:29:52', '0000-00-00 00:00:00'),
(466149, '', 'Snow Girl - Khoảng Cách Năm Ánh Sáng Giữa Anh Và Em', 'snow-girl-khoang-cach-nam-anh-sang-giua-anh-va-em', '', 'HD', '', '', '', '2016', '/upload/anhdaidienphim/MP_466129.jpg', '', '', '', 0, '', '', '', 0, '2017-02-26 06:29:52', '0000-00-00 00:00:00'),
(466150, '', 'Snow Girl - Khoảng Cách Năm Ánh Sáng Giữa Anh Và Em', 'snow-girl-khoang-cach-nam-anh-sang-giua-anh-va-em', '', 'HD', '', '', '', '2016', '/upload/anhdaidienphim/MP_466129.jpg', '', '', '', 0, '', '', '', 0, '2017-02-26 06:29:52', '0000-00-00 00:00:00'),
(466151, '', 'Snow Girl - Khoảng Cách Năm Ánh Sáng Giữa Anh Và Em', 'snow-girl-khoang-cach-nam-anh-sang-giua-anh-va-em', '', 'HD', '', '', '', '2016', '/upload/anhdaidienphim/MP_466129.jpg', '', '', '', 0, '', '', '', 0, '2017-02-26 06:29:52', '0000-00-00 00:00:00'),
(466152, '', 'Snow Girl - Khoảng Cách Năm Ánh Sáng Giữa Anh Và Em', 'snow-girl-khoang-cach-nam-anh-sang-giua-anh-va-em', '', 'HD', '', '', '', '2016', '/upload/anhdaidienphim/MP_466129.jpg', '', '', '', 0, '', '', '', 0, '2017-02-26 06:29:52', '0000-00-00 00:00:00'),
(466153, '', 'Snow Girl - Khoảng Cách Năm Ánh Sáng Giữa Anh Và Em', 'snow-girl-khoang-cach-nam-anh-sang-giua-anh-va-em', '', 'HD', '', '', '', '2016', '/upload/anhdaidienphim/MP_466129.jpg', '', '', '', 0, '', '', '', 0, '2017-02-26 06:29:52', '0000-00-00 00:00:00'),
(466154, '', 'Snow Girl - Khoảng Cách Năm Ánh Sáng Giữa Anh Và Em', 'snow-girl-khoang-cach-nam-anh-sang-giua-anh-va-em', '', 'HD', '', '', '', '2016', '/upload/anhdaidienphim/MP_466129.jpg', '', '', '', 0, '', '', '', 0, '2017-02-26 06:29:52', '0000-00-00 00:00:00'),
(466155, '', 'Snow Girl - Khoảng Cách Năm Ánh Sáng Giữa Anh Và Em', 'snow-girl-khoang-cach-nam-anh-sang-giua-anh-va-em', '', 'HD', '', '', '', '2016', '/upload/anhdaidienphim/MP_466129.jpg', '', '', '', 0, '', '', '', 0, '2017-02-26 06:29:52', '0000-00-00 00:00:00'),
(466156, '', 'Snow Girl - Khoảng Cách Năm Ánh Sáng Giữa Anh Và Em', 'snow-girl-khoang-cach-nam-anh-sang-giua-anh-va-em', '', 'HD', '', '', '', '2016', '/upload/anhdaidienphim/MP_466129.jpg', '', '', '', 0, '', '', '', 0, '2017-02-26 06:29:52', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quocgia_phim`
--

CREATE TABLE IF NOT EXISTS `tbl_quocgia_phim` (
  `idphim` int(11) NOT NULL,
  `idquocgia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_quocgia_phim`
--

INSERT INTO `tbl_quocgia_phim` (`idphim`, `idquocgia`) VALUES
(466128, 3),
(466125, 3),
(466127, 6),
(12, 2),
(12, 3),
(11, 2),
(11, 3),
(466129, 2),
(466130, 2),
(466131, 2),
(466132, 2),
(466133, 2),
(466134, 2),
(466135, 2),
(466136, 2),
(466137, 2),
(466138, 2),
(466139, 2),
(466140, 2),
(466141, 2),
(466142, 2),
(466143, 2),
(466144, 2),
(466145, 2),
(466146, 2),
(466147, 2),
(466148, 2),
(466149, 2),
(466150, 2),
(466151, 2),
(466152, 2),
(466153, 2),
(466154, 2),
(466155, 2),
(466156, 2),
(466126, 5),
(10, 2),
(10, 3),
(10, 4),
(466124, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_theloai_phim`
--

CREATE TABLE IF NOT EXISTS `tbl_theloai_phim` (
  `idphim` int(11) NOT NULL,
  `idtheloai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_theloai_phim`
--

INSERT INTO `tbl_theloai_phim` (`idphim`, `idtheloai`) VALUES
(466128, 6),
(466128, 7),
(466125, 5),
(466127, 6),
(466127, 7),
(12, 1),
(12, 2),
(12, 3),
(12, 4),
(11, 2),
(11, 3),
(11, 4),
(466129, 2),
(466130, 2),
(466131, 2),
(466132, 2),
(466133, 2),
(466134, 2),
(466135, 2),
(466136, 2),
(466137, 2),
(466138, 2),
(466139, 2),
(466140, 2),
(466141, 2),
(466142, 2),
(466143, 2),
(466144, 2),
(466145, 2),
(466146, 2),
(466147, 2),
(466148, 2),
(466149, 2),
(466150, 2),
(466151, 2),
(466152, 2),
(466153, 2),
(466154, 2),
(466155, 2),
(466156, 2),
(466126, 4),
(10, 1),
(10, 2),
(10, 3),
(466124, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', '12345', NULL, NULL, NULL),
(2, 'admin', 'admin@hohophim.com', '$2y$10$bCxsLsr7DcVRZCiwCBDf1eLr/W7bW3hpOPis2WQY4Sl7JAX3q4cYe', '4r6OfGTd3FNvFyUpJ9GnKhETEAbsOK3Fs1pZQGnvSGdLvjpNi6HXSon35hY3', '2017-02-28 01:09:01', '2017-02-28 01:58:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `dm_quocgia`
--
ALTER TABLE `dm_quocgia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dm_theloaiphim`
--
ALTER TABLE `dm_theloaiphim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD PRIMARY KEY (`id`), ADD KEY `idphim` (`idphim`);

--
-- Indexes for table `tbl_chitietphim`
--
ALTER TABLE `tbl_chitietphim`
  ADD PRIMARY KEY (`id`), ADD KEY `ma_phim` (`ma_phim`), ADD KEY `ma_phim_2` (`ma_phim`);

--
-- Indexes for table `tbl_phim`
--
ALTER TABLE `tbl_phim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_quocgia_phim`
--
ALTER TABLE `tbl_quocgia_phim`
  ADD KEY `idquocgia` (`idquocgia`), ADD KEY `idphim` (`idphim`);

--
-- Indexes for table `tbl_theloai_phim`
--
ALTER TABLE `tbl_theloai_phim`
  ADD KEY `idtheloai` (`idtheloai`), ADD KEY `idphim` (`idphim`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dm_quocgia`
--
ALTER TABLE `dm_quocgia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `dm_theloaiphim`
--
ALTER TABLE `dm_theloaiphim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `tbl_chitietphim`
--
ALTER TABLE `tbl_chitietphim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_phim`
--
ALTER TABLE `tbl_phim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=466157;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
ADD CONSTRAINT `tbl_banner_ibfk_1` FOREIGN KEY (`idphim`) REFERENCES `tbl_phim` (`id`);

--
-- Constraints for table `tbl_chitietphim`
--
ALTER TABLE `tbl_chitietphim`
ADD CONSTRAINT `tbl_chitietphim_ibfk_1` FOREIGN KEY (`ma_phim`) REFERENCES `tbl_phim` (`id`);

--
-- Constraints for table `tbl_quocgia_phim`
--
ALTER TABLE `tbl_quocgia_phim`
ADD CONSTRAINT `tbl_quocgia_phim_ibfk_2` FOREIGN KEY (`idquocgia`) REFERENCES `dm_quocgia` (`id`),
ADD CONSTRAINT `tbl_quocgia_phim_ibfk_3` FOREIGN KEY (`idphim`) REFERENCES `tbl_phim` (`id`);

--
-- Constraints for table `tbl_theloai_phim`
--
ALTER TABLE `tbl_theloai_phim`
ADD CONSTRAINT `tbl_theloai_phim_ibfk_2` FOREIGN KEY (`idtheloai`) REFERENCES `dm_theloaiphim` (`id`),
ADD CONSTRAINT `tbl_theloai_phim_ibfk_3` FOREIGN KEY (`idphim`) REFERENCES `tbl_phim` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
