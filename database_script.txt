-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2023 at 03:59 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doanphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `MaDon` int(11) NOT NULL,
  `MaThucAn` int(11) NOT NULL,
  `SoLuong` int(150) NOT NULL,
  `Gia` decimal(18,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `MaDon` int(11) NOT NULL,
  `ThanhToan` bit(64) NOT NULL,
  `GiaoHang` bit(64) NOT NULL,
  `NgayDat` date NOT NULL,
  `NgayGiao` date NOT NULL,
  `DiaChiGiao` varchar(150) NOT NULL,
  `MaKH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` int(11) NOT NULL,
  `TenKH` varchar(150) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `MatKhau` varchar(150) NOT NULL,
  `DiaChi` varchar(150) NOT NULL,
  `DienThoai` int(11) NOT NULL,
  `LoaiTV` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `TenKH`, `Email`, `MatKhau`, `DiaChi`, `DienThoai`, `LoaiTV`) VALUES
(1, 'Admin', '4thangngoc@gmail.com', '123', 'DakLak', 909686868, 1);

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE `theloai` (
  `MaLoai` int(11) NOT NULL,
  `TenLoai` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`MaLoai`, `TenLoai`) VALUES
(1, 'Thức Ăn Cho Chó'),
(2, 'Thức Ăn Cho Mèo'),
(3, 'Phụ Kiện Cho Chó'),
(4, 'Phụ Kiện Cho Mèo');

-- --------------------------------------------------------

--
-- Table structure for table `thucan`
--

CREATE TABLE `thucan` (
  `MaThucAn` int(11) NOT NULL,
  `MaLoai` int(11) NOT NULL,
  `TenThucAn` varchar(150) NOT NULL,
  `MoTa` varchar(500) NOT NULL,
  `Hinh` varchar(500) NOT NULL,
  `GiaBan` decimal(18,0) NOT NULL,
  `SoLuongTon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `thucan`
--

INSERT INTO `thucan` (`MaThucAn`, `MaLoai`, `TenThucAn`, `MoTa`, `Hinh`, `GiaBan`, `SoLuongTon`) VALUES
(1, 1, 'Hạt Cho Chó Trưởng Thành SMARTHEART ADULT ROAST Vị Bò', 'Dành cho chó trưởng thành.Tăng cường phát triển trí não và hệ thần kinh. Hệ thống tiêu hóa khỏe mạnh. Da và Lông khỏe', 'public/images/cho1.png', '250000', 20),
(2, 1, 'Thức ăn cho chó con SmartHeart Puppy – Vị thịt bò và sữa Beef & Milk Flavor 400G', 'Chó con trải qua thời kì phát triển nhanh nhất ở những năm tháng đầu đời. Bao gồm các hoạt động và quá trình tìm hiểu những thách thức mới. Một nguồn dinh dưỡng cân bằng và đầy đủ là sự cần thiết đối với sự phát triển cho cơ thể chúng.', 'public/images/cho2.jfif', '280000', 30),
(3, 1, 'Thức ăn cho chó Royal Canin Poodle Adult 1,5kg', 'Duy trì sức khoẻ của lông. Hình dạng hạt độc quyền giúp chó dễ dàng nhai. Hỗ trợ tiêu hóa khỏe mạnh. Hỗ trợ sức khỏe hệ thống miễn dịch', 'public/images/cho3.jpg', '390000', 25),
(4, 1, 'NT Original cho Chó con - Thịt gà và rau củ quả tự nhiên (Dưới 12 tháng tuổi)', 'Thức Ăn Chó Con Khỏe Mạnh Nutrience Original - Thịt Gà, Rau Củ Và Trái Cây Tự Nhiên có thịt gà chất lượng cao là nguyên liệu chủ yếu nhằm đảm bảo sự phát triển tối ưu của chó con.', 'public/images/cho4.png', '450000', 23),
(5, 1, 'Thức Ăn Hạt Khô Ganador 400g', 'Thức ăn Hỗn Hợp Ganador Thịt Gà với Thịt Cừu có công thức được pha chế và thiết kế từ Pháp đảm bảo giá trị dinh dưỡng cao nhằm duy trì hợp lí giai đoạn trưởng thành dài nhất của Chó cưng cho nhiều giống loài và kích cỡ.', '/public/images/cho5.jfif', '450000', 23),
(6, 1, 'Thức ăn hạt cho chó DOBY ADULT', 'DOBY ADULT Có Thành Phần Dinh Dưỡng Cao. Giúp Chó Phát Triển Cơ Bắp', 'public/images/cho6.png', '450000', 23),
(7, 1, 'Thức ăn cho chó Nutrience Original', 'sản phẩm đảm bảo cung cấp rất tốt nguồn dinh dưỡng cho các Pet nhà bạn phát triển sức khỏe.', 'public/images/cho7.png', '450000', 23),
(8, 1, 'Pedigree Vị Thịt Bò và Rau củ', 'Sản phẩm cung cấp dinh dưỡng hoàn hảo, giúp cún cưng của bạn có thể phát triển một cách toàn diện. Vị bò thơm ngon sẽ kích thích vị giác của cún, giúp chúng ngon miệng hơn và sẽ tiêu thụ thức ăn một cách dễ dàng.', 'public/images/cho8.png', '450000', 23),
(9, 2, 'Thức ăn Whiskas vị cá biển bao 7kg', 'Có mùi vị cá biển, đầy đủ các dưỡng chất và vitamin thiết yếu, giúp bé mèo của bạn phát triển toàn diện.', 'public/images/meo1.jpg', '625000', 30),
(10, 2, 'Thức ăn whiskas vị cá ngừ túi 12 kg', 'Sản phẩm chứa nhiều chất dinh dưỡng có trong cá và thịt như protein, chất béo, giúp cơ thể mèo hấp thu được một lượng chất vừa đủ cho quá trình phát triển. Sản phẩm đồng thời không có chất bảo quản, đảm bảo an toàn cho sức khỏe của những chú mèo.', 'public/images/meo2.jpg', '160000', 20),
(11, 2, 'Thức ăn cho mèo KitCat 5kg', 'đầy đủ các dưỡng chất và vitamin thiết yếu, giúp bé mèo của bạn phát triển toàn diện.', 'public/images/meo3.png', '240000', 25),
(12, 2, 'Thức ăn cho mèo con ROYAL CANIN Kitten', 'Thức ăn cho mèo con ROYAL CANIN Kitten bao gồm protein từ lòng trắng trứng + Probiotic, chất chống oxy hóa giúp nâng cao sức khỏe, tăng sức đề kháng, bổ sung dinh dưỡng cho mèo, giúp cơ thể mèo phát triển đầy đủ.', 'public/images/meo4.jpg', '110000', 31),
(13, 2, 'Hạt MISTER DONUT INDOOR 2kg', 'Đảm bảo dinh dưỡng cân bằng nhờ nhiều loại thịt Bột yến mạch: có thể làm giảm cholesterol trong cơ thể của con mèo trưởng thành. Tiêu thụ yến mạch thường xuyên có thể ngăn ngừa các vẫn đề tim mạch và mạch máu não.', 'public/images/meo5.jpg', '290000', 38),
(14, 2, 'Thức ăn cho mèo con Me-O Kitten vị cá biển', 'Thức ăn cho mèo con Me-O Kitten cung cấp đầy đủ các loại dinh dưỡng giúp mèo cưng luôn khỏe mạnh, vui tươi và lanh lợi, cùng với chi phí hợp lý, ổn định thì đây là một sự lựa chọn hợp lý cho mèo cưng của bạn.', 'public/images/meo6.jpg', '110000', 27),
(15, 2, 'Thức ăn cho mèo Royal Canin', 'Dinh dưỡng phù hợp với sức khoẻ vật nuôi, cung cấp năng lượng cần thiết và phòng bệnh, nâng cao sự phát triển thể trạng vật nuôi, cuối cùng là những sản phẩm chuyên sâu phù hợp với từng loại bệnh cụ thể của thú cưng.', 'public/images/meo7.jpg', '320000', 31),
(16, 2, 'Thức ăn hạt khô cho mèo Cat Eye 5kg', 'Dành cho mèo trên 3 tháng tuổi. Tiêu hóa tốt. Hỗ trợ, tăng cường hệ miễn dịch. Chất xơ tự nhiên, kiểm soát rụng lông. Giúp da khỏe, lông bóng mượt và giảm chứng rụng lông', 'public/images/meo8.jpg', '270000', 31),
(17, 3, 'Đồ Chơi Quả Tạ Gai Có Chuông', 'Sản phẩm có chiều dài 14cm, độ dày là 4.5cm', 'public/images/pkcho1.jpg', '30000', 40),
(18, 3, 'Lồng chuồng chó', 'Chuồng được làm từ Sắt, sơn tĩnh điện cẩn thận, tỉ mỉ để chống oxy hóa mài mòn, không dẫn điện, có khay đựng chất thải chó mèo, bạn dễ dàng vệ sinh lau chùi hằng ngày.', 'public/images/pkcho2.jpg', '230000', 20),
(19, 3, 'Nhà cho thú cưng có thể gập lại', 'Mềm mại, ấm áp và thoải mái và đi khắp mọi nơi . Ngôi nhà dành cho chó sang trọng mà bạn có thể mang theo bên mình! Các nếp gấp phẳng để di chuyển hoặc cất giữ và được đệm hoàn toàn để tạo sự thoải mái tối đa', 'public/images/pkcho3.jpg', '170000', 25),
(20, 3, 'BỘ CẤP NƯỚC TỰ ĐỘNG HÌNH TRỤ CHO CHÓ MÈO 3.5L', 'Chất liệu an toàn, có để đặt bộ bình cấp nước ở bất cứ nơi đâu. Nước sẽ chảy ra khi thú cúng uống vơi nước trong bát nhưng đảm bảo không tràn ra ngoài. Sản phẩm được thiết kế chống trượt giúp thú cưng dễ dàng sử dụng', 'public/images/pkcho4.jpg', '110000', 31),
(21, 3, 'Nệm cho chó BOBBY PET DS14OB', 'Bao gồm lớp vải mỏng bên ngoài, bên trong được cấu tạo bởi một lớp lông cừu dày và ấm áp. Chất liệu bền và dễ dàng vệ sinh sạch sẽ. Ổ đệm hình tròn có thành cao tạo cảm giác thoải mái nhất cho thú cưng khi nằm. Phần đệm dưới tạo cảm giác êm ái nằm. Cún cưng sẽ ngủ ngon giấc hơn.', 'public/images/pkcho5.jpg', '450000', 21),
(22, 3, 'ÁO MƯA HÌNH THÚ DÀNH CHO CHÓ', 'Áo giúp bảo vệ bộ lông các bé không bị lấm bẩn, cũng như giữ gìn sức khỏe cho các bé thật tốt.', 'public/images/pkcho6.jpg', '110000', 27),
(23, 3, 'Dây xích bằng vải qua cổ cho chó', 'Chất liệu chắc chắn và thiết kế dày dặn cho độ bền cao, đồng thời tạo cảm giác êm ái khi đeo. Dạng vòng cổ cực kỳ chắc chắn giúp bạn “quản lý” các chú cún hiếu động và tinh nghịch dễ hơn.', 'public/images/pkcho7.jfif', '12000', 31),
(24, 3, 'Đồ dùng khay vệ sinh cho chó', 'Thường thì chó mèo đực thường đi vệ sinh vào gốc cây hoặc bức tường cho nên các nhà sản xuất đã cho ra sản phẩm khay vệ sinh cho chó mèo đực có cọc và có tường để giúp chúng ta dễ dàng hướng dẫn chó mèo đực đi vệ sinh đúng chỗ.', 'public/images/pkcho8.jpeg', '180000', 31),
(25, 4, 'Balo Cho Chó Mèo Phi Hành Gia', 'Chất liệu balo bằng nhựa và bền, không thấm nước và dễ làm vệ sinh làm sạch. Dễ dàng tháo gấp gọn lại khi cần.', 'public/images/pkmeo1.jfif', '180000', 30),
(26, 4, 'Vòng Chống Liếm Cho Mèo Hình Mũ Phi Hành Gia', 'Chất liệu nhựa PVC cùng với các lỗ thở thoáng khí. ó thể mở đôi và đeo vào 1 cách dễ dàng, khóa cổ dạng dây dán dính chắc chắn.', 'public/images/pkmeo2.jfif', '210000', 20),
(27, 4, 'Phụ kiện cho thú cưng- khay đôi tự động cho mèo', 'Chiếc bát này là một công cụ tuyệt vời để nuôi thú cưng của bạn.Bát ăn 2 trong 1, một là cho thức ăn, một là cho nước.Chỉ cần đặt một chai lộn ngược, và bát sẽ tự động cung cấp nước.', 'public/images/pkmeo3.jpg', '80000', 25),
(28, 4, 'Nhà vệ sinh cho mèo có nắp đây tiền lợi - Khay chậu cát lớn vệ sinh cho mèo', 'Chất liệu nhựa cao cấp, màu sắc tươi sáng, bề mặt sáng bóng, rất dễ vệ sinh. Phù hợp với mèo dưới 10 kg ', 'public/images/pkmeo4.jfif', '165000', 31),
(29, 4, 'Vòng cổ chuông cho mèo xinh xắn', 'Vòng cổ chuông cho chó mèo có hoa văn đáng yêu, màu sắc dạ quang cực đẹp kết hợp với chuông dễ nhận biết thú cưng đang ở đâu. Đặc biệt, bạn có thể điều chỉnh độ dài từ 19,5cm-33cm.', 'public/images/pkmeo5.jpg', '15000', 38),
(30, 4, 'Bàn cào móng hình cá cho mèo', 'Làm từ chất liệu an toàn, màu sắc thu hút, giúp thú cưng hăng say chơi với quả bóng, tạo sự vận động khỏe mạnh và nhanh nhẹn. Sản phẩm thiết kế phù hợp cho mèo yêu của bạn cào móng.', 'public/images/pkmeo6.jpg', '80000', 27),
(31, 4, 'Tai Thỏ Nón Tai Cho Mèo', 'Làm bằng ngắn sang trọng chất liệu, mềm mại, trọng lượng nhẹ và thoải mái cho nhỏ của bạn thú cưng để mặc. Thích hợp cho mèo', 'public/images/pkmeo7.jpg', '23000', 31),
(32, 4, 'Dây dắt chó mèo đi dạo', 'Dây dắt chó đi dạo, dây buộc mèo được làm bằng chất liệu vải bền', 'public/images/pkmeo8.jpg', '55000', 31);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`MaThucAn`),
  ADD KEY `MaDon` (`MaDon`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`MaDon`),
  ADD KEY `MaKH` (`MaKH`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`);

--
-- Indexes for table `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`MaLoai`);

--
-- Indexes for table `thucan`
--
ALTER TABLE `thucan`
  ADD PRIMARY KEY (`MaThucAn`,`MaLoai`),
  ADD KEY `MaLoai` (`MaLoai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `MaDon` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `theloai`
--
ALTER TABLE `theloai`
  MODIFY `MaLoai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `thucan`
--
ALTER TABLE `thucan`
  MODIFY `MaThucAn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`MaDon`) REFERENCES `donhang` (`MaDon`) ON DELETE CASCADE,
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`MaThucAn`) REFERENCES `thucan` (`MaThucAn`) ON DELETE CASCADE;

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`) ON DELETE CASCADE;

--
-- Constraints for table `thucan`
--
ALTER TABLE `thucan`
  ADD CONSTRAINT `thucan_ibfk_1` FOREIGN KEY (`MaLoai`) REFERENCES `theloai` (`MaLoai`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
