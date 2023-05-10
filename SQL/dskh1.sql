-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 28, 2022 lúc 06:36 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dskh1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chart`
--

CREATE TABLE `chart` (
  `id` int(255) NOT NULL,
  `date` date NOT NULL,
  `sold` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chart`
--

INSERT INTO `chart` (`id`, `date`, `sold`) VALUES
(1, '2022-03-01', 5),
(2, '2022-04-01', 10),
(3, '2022-05-24', 2),
(4, '2022-05-23', 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dskh`
--

CREATE TABLE `dskh` (
  `id` int(20) NOT NULL,
  `firstName` varchar(200) NOT NULL,
  `lastName` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `code` int(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dskh`
--

INSERT INTO `dskh` (`id`, `firstName`, `lastName`, `email`, `password`, `gender`, `code`, `status`, `user_type`) VALUES
(3, 'NGUYÊN', 'TRẦN', 'tranthainguyen1106@gmail.com', '9d4424980e14b65faaed72a653decdcd', 'Khác', 0, 'Đã xác minh', 'user'),
(4, 'Phạm', 'Hiền', 'wdw@gmail.com', '1217a9a7d29aee6701f5ca21a9c705c0', 'Nam', 0, 'Chưa xác minh', 'user'),
(5, 'Phạm', 'Anh', 'nguyetanh.23112002@gmail.com', '1217a9a7d29aee6701f5ca21a9c705c0', 'Nữ', 0, 'Đã xác minh', 'admin'),
(6, 'ssss', 'sfsfs', 'fad@gmail.com', '1217a9a7d29aee6701f5ca21a9c705c0', 'Nữ', 0, 'Chưa xác minh', 'user'),
(7, 'Ali', 'BA', 'sfa@gmail.com', '1217a9a7d29aee6701f5ca21a9c705c0', 'Nam', 0, 'Chưa xác minh', 'user'),
(8, 'edcgyhn', 'fvbhytrdf', 'adwd@gmail.com', '1217a9a7d29aee6701f5ca21a9c705c0', 'Nam', 0, 'Chưa xác minh', 'user'),
(9, 'âfa', 'âfa', 'ada@gmail.com', '1217a9a7d29aee6701f5ca21a9c705c0', 'Nữ', 0, 'Chưa xác minh', 'user'),
(10, 'Huy', 'Nguyễn', 'huy129a5@gmail.com', '44cf3fe35f3d1d03461479799bedf166', 'Nam', 0, 'Đã xác minh', 'user'),
(11, 'anh', 'vưvw', 'cfw@gmail.com', '1217a9a7d29aee6701f5ca21a9c705c0', 'Khác', 0, 'Chưa xác minh', 'user'),
(12, 'Mai', 'Huy', 'mainanghuy@gmail.com', '1217a9a7d29aee6701f5ca21a9c705c0', 'Nam', 0, 'Đã xác minh', 'user'),
(16, 'Lê', 'Chúc', 'thanhchucnaalun02@gmail.com', '1217a9a7d29aee6701f5ca21a9c705c0', 'Nữ', 0, 'Đã xác minh', 'user'),
(18, 'Phạm', 'Nguyệt', 'nguyettran790@gmail.com', '1217a9a7d29aee6701f5ca21a9c705c0', 'Nữ', 0, 'Đã xác minh', 'user');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lib`
--

CREATE TABLE `lib` (
  `id_pro` int(200) NOT NULL,
  `id_img` int(255) NOT NULL,
  `img_lib` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `lib`
--

INSERT INTO `lib` (`id_pro`, `id_img`, `img_lib`) VALUES
(2, 1, 'dam8.1.webp'),
(2, 2, 'dam8.1.webp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(255) NOT NULL,
  `title` mediumtext NOT NULL,
  `status` longtext NOT NULL,
  `ngaytao` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ngaycapnhat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `status`, `ngaytao`, `ngaycapnhat`, `img`) VALUES
(1, 'Bỏ túi ngay một số kiểu túi xách “không thể thiếu” trong tủ đồ của nàng', '<B>1.Túi Tote dáng to</B><br>\r\nTúi Tote được biết đến là một kiểu túi cân hết tất cả những vật dụng mà nàng cần mang theo vì form dáng rộng đặc trưng. Với thiết kế vô cùng đơn giản song túi vẫn mang trong mình một sức cuốn hút khó có thể cưỡng lại được.Túi tuy chỉ có một phom dáng nhưng lại rất đa dạng về mẫu mã, màu sắc. Nằm trong tops đầu lựa chọn khi đi cùng outfits của quý cô, Tote bag có thể đồng hành cùng bạn dù là đến văn phòng hay những chuyến đi du lịch trong mùa hè. Với màu sắc đa dạng cùng chất liệu khác nhau, bạn có thể tha hồ lựa chọn chiếc túi phù hợp với bộ trang phục của mình để làm nổi bật lên phong cách riêng.<br>\r\n<B>2.Túi hộp dáng trung</B><br>\r\nChiếc túi có kích thước trung rất thích hợp cho mọi loại outfit của nàng. Thiết kế dáng túi hình chữ nhật, có phần thân vừa vặn, không qúa lớn hơn những chiếc túi thông thường, túi phù hợp cho các bản phối thời trang công sở hay dự tiệc. Phần đáy túi vững chắc, nhiều ngăn chứa bên trong sẽ giúp bạn sắp xếp đều những vật dụng mà mình cần mang theo. Đường nét bo viền túi được thiết kế chắc chắn, góc cạnh tạo cảm giác hoàn hảo góp phần tăng nét sang trọng cho ai sở hữu kiểu dáng túi này.<br>\r\n<B>3.Balo màu sắc nổi bật</B><br>\r\nBalo giờ đây không còn dừng lại ở tính năng đựng tài liệu hay vật dụng cá nhân mà nó còn là một phụ kiện thời trang không thể thiếu của một cô gái năng động. Đặc biệt, trong thời tiết của mùa hè thì những chiếc balo với màu sắc nổi bật, chất liệu mềm mịn sẽ là lựa chọn tuyệt vời đi cùng bản phối của nàng. Không những sở hữu nhiều thiết kế và kích cỡ đa dạng, balo là lựa chọn tiện lợi nếu bạn phải di chuyển nhiều. Diện tích rộng rãi của balo cho phép bạn “gói ghém” tất cả vật dụng cần thiết cho ngày dài. Sở hữu một chiếc balo tiện dụng cần thiết cho chuyến đi dã ngoại hoặc công tác ngắn ngày.<br>\r\n<B>4.Túi đeo chéo quai ngắn</B><br>\r\nXu hướng thời trang về túi xách năm nay thiên về những chiếc túi có phần quai ngắn, thời thượng. Túi kẹp nách hay còn gọi là shoulder bag được xem như món phụ kiện thời trang từng được phái nữ ưa chuộng vào những năm 2000. Tuy nhiên, túi xách đeo quai chéo dần chiếm lĩnh thị trường suốt thời gian sau. Từ cuối năm ngoái, mẫu túi xách kẹp nách trở lại với sự lăng xê của dàn chân dài đình đám. Chiếc túi xách kẹp nách với thiết kế đeo vai, phần dây quai ngắn tạo hiệu ứng \"hack\" chiều cao một cách dễ dàng. Mẫu túi này thường có kích cỡ vừa phải, phom dáng cổ điển hình chữ nhật hoặc biến tấu dựa trên phiên bản cũ kết hợp với trang phục đơn giản như quần legging, jeans hay áo phông trắng chắc chắn là bản phối hoàn hảo.', '2022-05-25 18:22:26', '2022-05-26 09:30:29', 'tintuc5.jpg'),
(2, 'Cập nhật ngay 4 Combo phụ kiện với màu sắc trend nhất hiện nay', '<b>1 Tím Lilac</b><br>\r\nChắc hẳn các cô nàng cũng biết Tím Lilac đang là màu sắc trend nhất trong năm 2020. Không cần phải bàn cãi về độ nữ tính và dịu dàng khi diện sắc màu này, tím lilac còn dễ dàng đi cùng với các màu sắc khác. Sắc tím này khá nhạt, được pha thêm chút màu phấn và màu khói nên tạo cảm giác rất thanh lịch, dịu dàng mà không hề “dừ” hay sến sẩm gì cả.<br>\r\nChỉ cần bạn nắm vững được những quy tắc kết hợp trang phục, phụ kiện với màu tím thì bạn chính là “cô em trendy” nhất năm 2020 rồi đấy.Nếu bạn chưa tự tin có thể “xử lý” ổn thỏa được gam màu tím thì hãy bắt đầu bằng những phụ kiện nhỏ như túi xách, giày màu tím, vòng tay, đồng hồ…để mix-match với trang phục. Điều này giúp bạn vừa “chuẩn trend” mà vừa an toàn.<br>\r\n<b>2. Hồng San hô</b><br>\r\nMang đến cho nàng một hình ảnh nữ tính, ngọt ngào thì không thể không nhắc tới sắc hồng, đặc biệt là hồng san hô. Không quá nổi bật như họ hàng của mình là hồng Salmon hay Fuschia, Hồng san hô (living coral) có phần ấm áp, nhẹ nhàng hơn mang đến cảm giác thoải mái, êm dịu cho người mặc. Gợi tới cảm giác ấm áp, tinh tế với sắc hồng và một chút màu cam, đây là màu sẽ phù hợp với những chị em thuộc “hội bánh bèo”. Hồng san hô trông dịu dàng nhưng không uỷ mị, mạnh mẽ, thời thượng khi kết hợp với những màu trung tính.<br>\r\n<b>3. Xanh cổ điển</b><br>\r\nViện Pantone công bố màu sắc năm nay gọi tên xanh cổ điển (classic blue) đã tạo ra sự bùng nổ màu sắc. Đây là sắc màu luôn mang đến cảm giác thoải mái và nguồn năng lượng tích cực cho mọi người. Xanh cổ điển có thể đi cùng với tất cả các phong cách thiết kế khác nhau, từ xu hướng đơn sắc (monochrome) đến đa sắc (color block) đều mang đến cảm giác sang trọng, thanh lịch. Không chỉ là gam màu quen thuộc trên sàn diễn, classic blue còn trở thành gam màu gắn liền với thời trang của các thành viên hoàng gia, chính vì thế khi diện sắc màu này sẽ tạo cho bạn cảm giác tinh tế sang trọng.<br>\r\n<b>4. Xanh olive</b><br>\r\nSẽ không khó nhận ra, các thương hiệu thời trang nổi tiếng đang cập nhật các thiết kế của mình sang màu xanh olive tại cửa hàng thay thế dần cho sắc tím. Được mệnh danh là màu của quân đội, màu của các chàng lính, tuy nhiên xanh olive cũng đã chiếm được sự tin tưởng không ít từ phía những cô nàng fashionista khó tính. Là Gam màu không bao giờ tụt khỏi top những màu sắc quyền lực, chúng cũng dễ dàng kết hợp với nhiều màu sắc khác nhau, những items xanh olive hứa hẹn mang đến cho bạn hình ảnh một quý cô cá tính, quyền lực.', '2022-05-25 18:22:26', '2022-05-26 09:30:29', 'tintuc2.jpg'),
(3, 'BIUTYPHUNSHOP kết hợp cùng các NTK tên tuổi trong FASHION VOYAGE', 'Đừng bao giờ lãng quên những giá trị ban đầu, với chiếc lắc tay với phần khóa chốt nổi bật bằng bạc tiêu chuẩn cao cấp này. Là một phần của di sản Pandora lâu đời - chiếc khóa chốt dã góp mặt trong những thiết kế đầu tiên nhất, đó là lí do tại sao chúng t', '2022-05-25 18:22:26', '2022-05-26 09:30:29', 'tintuc3.jpg'),
(5, '“F5” tủ đồ của nàng bằng những Items không thể thiếu trong mùa này', '<b>1.Giày đế xuồng</b><br>\r\nLà một trong những items cực kỳ thích hợp dành cho nàng trong mùa hè, <b>giày đế xuồng</b> mang đến cảm giác vừa nhẹ nhàng, nữ tính nhưng không kém phần phóng khoáng. <b>Giày đế xuồng</b> thường được làm bằng những chất liệu như cói kết cùng màu sắc nổi bật nên không tạo cảm giác quá nặng nề. Không những thế, giày còn giúp nàng ăn gian chiều cao thêm một tí,phù hợp với nhiều cô nàng muốn “hack” dáng. Một combo phối đồ chuẩn giày đế xuồng đi cùng đầm hoa hay chân váy maxi dài sẽ mang đến vẻ ngoài đầy màu sắc và dịu dàng cho nàng.<br>\r\n<b>2.Dép quai ngang</b><br>\r\nMột trong những Item đình đám trong hè này dành cho nàng đó chính là dép quai ngang. Những kiểu <b>dép quai ngang</b> có phần quai cách điệu sẽ phù hợp trang phục dạo phố của bạn. Đặc biệt với items dép có gót sẽ cực kỳ dễ mix đồ và giúp bạn ăn gian chiều cao. Trong hè, thời tiết nắng nóng thì bàn về độ thoải mái, dép quai ngang sẽ là lựa chọn không hề tồi dành cho bạn. Nhiều cô nàng thời trang đã sở hữu kiểu dáng này trong tủ giày dép, còn bạn thì sao?<br>\r\n<b>3.Giày họa tiết thổ cẩm</b><br>\r\nLựa chọn trang phục thoải mái trong thời tiết nắng nóng luôn được nàng ưu tiên hơn hẳn. Giày dây với phần quai mảnh tạo cho người mặc cảm giác nhẹ nhàng, thanh thoát. Bản phối giày dép của nàng sẽ trông nổi bật nếu như phần quai được cách điệu theo hướng đa màu sắc hay thổ cẩm. Ít ai biết, chỉ cần kết hợp một bộ trang phục theo phong cách tối giản cùng đôi giày sandal quai cách điệu thôi cũng tạo ra sự sang chảnh cho nàng rồi.<br>\r\n<b>4.Giày Sneaker</b><br>\r\nNếu như trước đây, nói đến giày Sneaker chúng ta sẽ nghĩ ngay đến sự hầm hố mà kiểu giày này mang đến. Tuy nhiên, sneaker đã được nhiều fashionista trên thế giới hóa phép thành mẫu giày “must - have” trong tủ đồ của nàng khi minh chứng rằng sneaker có thể đi cùng với nhiều kiểu trang phục nữ tính khác nhau, thậm chí là đầm hoa. <b>Giày sneaker</b> đặc biệt là màu trắng đang được nhiều quý cô săn đón cho mọi style từ nữ tính đến cá tính. Độ tiện dụng của kiểu giày này không cần phải bàn cãi thêm, sneaker trắng khiến bạn cảm thấy thoải mái và trở nên tự tin hơn khi kết hợp cùng trang phục thường ngày cho đến thời trang tiệc tùng cùng bạn bè.<br>\r\nĐây là những kiểu giày đa dạng dành cho mọi loại trang phục của nàng. Đặc biệt, trong những chuyến du lịch sắp tới, việc sở hữu một trong những kiểu giày trên với chi phí hấp dẫn cũng là lựa chọn hoàn hảo của nàng. Hiện tại, thương hiệu nổi tiếng về giày dép và túi xách - Vascara đang áp dụng chương trình ưu đãi giảm giá cho tất cả sản phẩm từ ngày 24/06 đến 05/07 tại hệ thống cửa hàng trên toàn quốc.', '2022-05-26 11:46:15', '2022-05-26 09:51:06', 'tintuc4.jpg'),
(9, 'LỰA CHỌN PHỤ KIỆN DU LỊCH CHO NÀNG', '<i>Với thiết kế mang đậm sắc màu của những ngày hạ, niềm cảm hứng từ những bí ẩn dưới đại dương khi bắt đầu một ngày mới. Chiếc túi trở thành phụ kiện tô điểm thêm cho nàng khi phối cùng các style thời trang du lịch.</i><br>\r\nCảm hứng từ biển khơi gợi đến nhiều xu hướng thời trang cho mùa hè sôi động. Những bộ trang phục thoải mái, tiện dụng hay những bộ bikini quyến rũ luôn là lựa chọn của nhiều cô nàng. Phụ kiện đi cùng túi hay giày, dép cũng là điều mà nhiều nàng tìm kiếm cho chuyến đi của mình. <br>\r\nĐi cùng phong cách thời trang mà nàng mong muốn, Vascara giới thiệu đến nàng một chiếc túi xách đeo chéo nắp gập vô cùng tinh tế. Không thể phủ nhận sự xuất hiện của chiếc túi <b>Pearl Shell SAT 0275</b> mô phỏng vỏ sòi trên sàn diễn thời trang BST<b> “Like The Sunshine” </b>của NTK Lê Thanh Hòa chính là một trong điểm sáng đầy ấn tượng.<br>\r\nKhông có gì toát ra hương vị mùa hè hơn bảng màu sáng và đậm. Thiết kế SAT 0275 với hai phiên bản màu sắc đen và cam sẽ là người bạn đồng hành tuyệt vời dành cả cho cô nàng yêu thích sự phá cách táo bạo hay quý cô nhẹ nhàng, trẻ trung.  Diện những màu sắc tương phản với nhau cho một cái nhìn sôi động và đầy ấn tượng. Những chiếc túi xách màu sắc nổi bật sẽ là lựa chọn tuyệt vời khi đi cùng các trang phục du lịch. <br>\r\nXu hướng thời trang bãi biển đang làm nóng và thổi tung Instagram của bạn. Từ chiếc khăn, vòng cổ hay khuyên tai phù hợp với các kiểu mix style khác nhau luôn nằm trong top tìm kiếm hàng đầu. Vì thế, đừng bỏ qua thiết kế đáng chú ý trong dịp hè này từ Biutyphunshop <br>\r\n\r\n\r\n\r\n\r\n\r\n\r\n ', '2022-05-18 10:26:00', '0000-00-00 00:00:00', 'tintuc6.jpg'),
(16, '4', '1.Giày đế xuồng\r\nLà một trong những items cực kỳ thích hợp dành cho nàng trong mùa hè, giày đế xuồng mang đến cảm giác vừa nhẹ nhàng, nữ tính nhưng không kém phần phóng khoáng. Giày đế xuồng thường được làm bằng những chất liệu như cói kết cùng màu sắc nổi bật nên không tạo cảm giác quá nặng nề. Không những thế, giày còn giúp nàng ăn gian chiều cao thêm một tí,phù hợp với nhiều cô nàng muốn “hack” dáng. Một combo phối đồ chuẩn giày đế xuồng đi cùng đầm hoa hay chân váy maxi dài sẽ mang đến vẻ ngoài đầy màu sắc và dịu dàng cho nàng.\r\n2.Dép quai ngang\r\nMột trong những Item đình đám trong hè này dành cho nàng đó chính là dép quai ngang. Những kiểu dép quai ngang có phần quai cách điệu sẽ phù hợp trang phục dạo phố của bạn. Đặc biệt với items dép có gót sẽ cực kỳ dễ mix đồ và giúp bạn ăn gian chiều cao. Trong hè, thời tiết nắng nóng thì bàn về độ thoải mái, dép quai ngang sẽ là lựa chọn không hề tồi dành cho bạn. Nhiều cô nàng thời trang đã sở hữu kiểu dáng này trong tủ giày dép, còn bạn thì sao?\r\n3.Giày họa tiết thổ cẩm\r\nLựa chọn trang phục thoải mái trong thời tiết nắng nóng luôn được nàng ưu tiên hơn hẳn. Giày dây với phần quai mảnh tạo cho người mặc cảm giác nhẹ nhàng, thanh thoát. Bản phối giày dép của nàng sẽ trông nổi bật nếu như phần quai được cách điệu theo hướng đa màu sắc hay thổ cẩm. Ít ai biết, chỉ cần kết hợp một bộ trang phục theo phong cách tối giản cùng đôi giày sandal quai cách điệu thôi cũng tạo ra sự sang chảnh cho nàng rồi.\r\n4.Giày Sneaker', '2022-05-26 22:58:35', '0000-00-00 00:00:00', 'tintuc6.jpg'),
(19, '9', '4', '2022-05-28 23:20:59', '0000-00-00 00:00:00', 'ava.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id` int(255) NOT NULL,
  `id_user` int(20) NOT NULL,
  `name_user` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `total` int(255) NOT NULL,
  `created_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `last_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`id`, `id_user`, `name_user`, `phone`, `address`, `total`, `created_time`, `last_update`) VALUES
(79, 0, 'chuc', '946352422', 'Nam Định', 3117997, '2022-03-07 08:32:39', '2022-03-29 15:32:39'),
(80, 0, 'nguyen', '7957464', 'Thai Nguyen', 1250500, '2022-05-24 08:33:50', '2022-05-24 15:33:50'),
(81, 0, 'anh2', '96746331', 'ha noi', 500000, '2022-04-01 08:48:53', '2022-04-01 15:48:53'),
(82, 0, 'huuy', '47685763', 'tphcm', 21400000, '2022-05-24 09:29:56', '2022-05-24 16:29:56'),
(83, 0, 'anh', '96536373', 'TPHCM', 1622000, '2022-05-24 15:51:26', '2022-05-24 22:51:26'),
(84, 0, 'LAN', '93536363', 'THÁI BÌNH', 901000, '2022-05-24 15:53:13', '2022-05-24 22:53:13'),
(85, 0, 'huy', '93647477', 'thái nguyên', 1700000, '2022-02-01 16:34:41', '2022-02-01 23:34:41'),
(86, 0, 'nguyen', '924264777', 'Cà Mau', 3795000, '2022-01-03 08:55:13', '2022-01-03 15:55:13'),
(87, 0, 'Như', '908468222', 'Gia Lai', 1400000, '2022-05-25 14:02:37', '2022-05-25 21:02:37'),
(88, 0, 'Mai', '79574633', 'TPHCM', 700000, '2022-05-25 14:03:26', '2022-05-25 21:03:26'),
(89, 0, 'Mai', '79574633', 'TPHCM', 700000, '2022-05-25 14:03:52', '2022-05-25 21:03:52'),
(90, 0, 'Mai', '79574633', 'TPHCM', 700000, '2022-05-25 14:04:36', '2022-05-25 21:04:36'),
(91, 0, 'aaaa', '096857463', 'HA NOI', 1590000, '2022-05-25 14:21:12', '2022-05-25 21:21:12'),
(92, 0, 'mai', '096746353', 'Sao hỏa', 560000, '2022-05-25 16:10:48', '2022-05-25 23:10:48'),
(93, 0, 'mai', '096746353', 'Sao hỏa', 560000, '2022-05-25 16:11:02', '2022-05-25 23:11:02'),
(94, 0, 'duc', '099574746', 'Nga', 4500000, '2022-05-25 16:13:51', '2022-05-25 23:13:51'),
(95, 0, 'Chuc', '097857444', 'Nam Định', 4500000, '2022-05-25 16:20:25', '2022-05-25 23:20:25'),
(96, 0, 'fk', '06957474747', 'sgsg', 450500, '2022-05-26 10:13:35', '2022-05-26 17:13:35'),
(97, 0, 'huy', '097857464', 'tphcm', 1380000, '2022-05-26 13:49:28', '2022-05-26 20:49:28'),
(98, 0, 'chúc', '07968557', 'hà nội', 33600000, '2022-05-27 01:12:37', '2022-05-27 08:12:37'),
(99, 0, 'chúc', '06854747', 'ha noi', 800000, '2022-05-27 01:17:32', '2022-05-27 08:17:32'),
(100, 0, 'A', '0847373', 'Andhsg', 9000000, '2022-05-28 16:22:34', '2022-05-28 23:22:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(255) NOT NULL,
  `order_id` int(255) NOT NULL,
  `pro_id` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `pro_id`, `quantity`, `price`, `created`, `updated`) VALUES
(94, 79, 30, 3, 700999, '2022-03-07 15:32:39', '2022-03-29 15:32:39'),
(95, 79, 32, 1, 345000, '2022-03-07 15:32:39', '2022-03-29 15:32:39'),
(96, 79, 59, 1, 670000, '2022-03-07 15:32:39', '2022-03-29 15:32:39'),
(97, 80, 24, 1, 450500, '2022-05-24 15:33:50', '2022-05-24 15:33:50'),
(98, 80, 71, 2, 400000, '2022-05-24 15:33:50', '2022-05-24 15:33:50'),
(99, 81, 56, 2, 500000, '2022-04-01 15:48:53', '2022-04-01 15:48:53'),
(100, 82, 26, 2, 7900000, '2022-05-24 16:29:56', '2022-05-24 16:29:56'),
(101, 82, 85, 1, 5600000, '2022-05-24 16:29:56', '2022-05-24 16:29:56'),
(102, 83, 57, 2, 686000, '2022-05-24 22:51:26', '2022-05-24 22:51:26'),
(103, 83, 84, 1, 250000, '2022-05-24 22:51:26', '2022-05-24 22:51:26'),
(104, 84, 24, 2, 450500, '2022-05-24 22:53:13', '2022-05-24 22:53:13'),
(105, 85, 73, 2, 700000, '2022-02-01 23:34:42', '2022-02-01 23:34:42'),
(106, 85, 74, 1, 300000, '2022-02-01 23:34:42', '2022-02-01 23:34:42'),
(107, 86, 32, 11, 345000, '2022-01-03 15:55:13', '2022-01-03 15:55:13'),
(108, 87, 69, 2, 700000, '2022-05-25 21:02:37', '2022-05-25 21:02:37'),
(109, 88, 69, 1, 700000, '2022-05-25 21:03:26', '2022-05-25 21:03:26'),
(110, 89, 69, 1, 700000, '2022-05-25 21:03:52', '2022-05-25 21:03:52'),
(111, 90, 69, 1, 700000, '2022-05-25 21:04:36', '2022-05-25 21:04:36'),
(112, 91, 72, 1, 470000, '2022-05-25 21:21:12', '2022-05-25 21:21:12'),
(113, 91, 77, 2, 560000, '2022-05-25 21:21:12', '2022-05-25 21:21:12'),
(114, 92, 75, 1, 560000, '2022-05-25 23:10:48', '2022-05-25 23:10:48'),
(115, 93, 75, 1, 560000, '2022-05-25 23:11:02', '2022-05-25 23:11:02'),
(116, 94, 61, 1, 4500000, '2022-05-25 23:13:51', '2022-05-25 23:13:51'),
(117, 95, 86, 1, 4500000, '2022-05-25 23:20:25', '2022-05-25 23:20:25'),
(118, 96, 24, 1, 450500, '2022-05-26 17:13:35', '2022-05-26 17:13:35'),
(119, 97, 32, 4, 345000, '2022-05-26 20:49:28', '2022-05-26 20:49:28'),
(120, 98, 67, 6, 5600000, '2022-05-27 08:12:37', '2022-05-27 08:12:37'),
(121, 99, 70, 1, 800000, '2022-05-27 08:17:32', '2022-05-27 08:17:32'),
(122, 100, 86, 2, 4500000, '2022-05-28 23:22:34', '2022-05-28 23:22:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `price` double(11,0) NOT NULL,
  `sale` int(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `mota` varchar(255) NOT NULL,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL,
  `sold` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `image`, `image2`, `name`, `type`, `price`, `sale`, `amount`, `color`, `size`, `mota`, `create_at`, `update_at`, `sold`) VALUES
(21, 'dam1.1.jfif', 'dam1.2.jfif', 'Đầm dự tiệc Sleeveless', 'Đầm/Váy', 45000, 230000, 557, 'Trắng', 'L', 'Những mẫu đầm màu trơn gợi cảm với độ dài thướt tha rất được lòng các quý cô khi mùa hè đến. Thật tuyệt nếu nàng lựa chọn thiết kế này cho kỳ nghỉ bên bãi biển Phú Quốc hay chuyến du lịch Hội An của bản thân.', '2022-05-04', '0000-00-00', 0),
(22, 'dam2.1.jpg', 'dam2.2.jpg', 'Đầm công sở Kaela', 'Đầm/Váy', 509000, 50000, 34, 'Trắng', 'S', 'Đầm lụa trơn, độ dài qua gối. Dáng cổ cách điệu cầu kỳ với phía trước là cổ chữ V. Đầm sở hữu form cơ bản với độ ôm nhẹ nhàng, chất lụa cao cấp chảy tự nhiên trên vóc dáng nàng.', '2022-05-11', '0000-00-00', 0),
(23, 'dam3.1.jfif', 'dam3.2.jfif', 'Đầm công sở Petri', 'Đầm/Váy', 945000, 2000, 35, 'Đen', 'L', 'Đầm lụa trơn, độ dài qua gối. Dáng cổ cách điệu cầu kỳ với phía trước là cổ chữ V. Đầm sở hữu form cơ bản với độ ôm nhẹ nhàng, chất lụa cao cấp chảy tự nhiên trên vóc dáng nàng.', '2022-05-04', '0000-00-00', 0),
(24, 'dam4.1.jpg', 'dam4.2.jpg', 'Đầm maxi in hoa CREPE', 'Đầm/Váy', 450500, 1000, 19, 'Hồng nhạt', 'L', 'Đầm lụa trơn, độ dài qua gối. Dáng cổ cách điệu cầu kỳ với phía trước là cổ chữ V. Đầm sở hữu form cơ bản với độ ôm nhẹ nhàng, chất lụa cao cấp chảy tự nhiên trên vóc dáng nàng.', '2022-05-11', '0000-00-00', 10),
(25, 'dam5.1.jfif', 'dam5.2.jfif', ' Đầm maxi Hoa Cotton ', 'Đầm/Váy', 600999, 0, 30, 'Trắng', 'L', 'Đầm lụa trơn, độ dài qua gối.<br> Dáng cổ cách điệu cầu kỳ với phía trước là cổ chữ V.<br> Đầm sở hữu form cơ bản với độ ôm nhẹ nhàng, chất lụa cao cấp chảy tự nhiên trên vóc dáng nàng.', '2022-05-12', '0000-00-00', 2),
(26, 'dam6.1.webp', 'dam6.2.png', 'Đầm dự tiệc đen trơn ', 'Đầm/Váy', 7900000, 0, 5, 'Trắng', 'L', 'Đầm lụa trơn, độ dài qua gối. Dáng cổ cách điệu cầu kỳ với phía trước là cổ chữ V. Đầm sở hữu form cơ bản với độ ôm nhẹ nhàng, chất lụa cao cấp chảy tự nhiên trên vóc dáng nàng.', '2022-05-17', '0000-00-00', 2),
(27, 'dam7.1.jfif', 'dam7.2.jfif', ' Đầm sơ mi Chambray ', 'Đầm/Váy', 900999, 0, 5, 'Xanh', 'L', 'Đầm lụa trơn, độ dài qua gối. Dáng cổ cách điệu cầu kỳ với phía trước là cổ chữ V. Đầm sở hữu form cơ bản với độ ôm nhẹ nhàng, chất lụa cao cấp chảy tự nhiên trên vóc dáng nàng.', '2022-05-14', '0000-00-00', 0),
(28, 'dam8.1.webp', 'dam8.2.jpg', 'Chân váy Midi', 'Đầm/Váy', 1345000, 0, 2, 'Trắng', 'S', 'Đầm lụa trơn, độ dài qua gối. Dáng cổ cách điệu cầu kỳ với phía trước là cổ chữ V. Đầm sở hữu form cơ bản với độ ôm nhẹ nhàng, chất lụa cao cấp chảy tự nhiên trên vóc dáng nàng.', '2022-05-12', '0000-00-00', 0),
(29, 'giaysale1.webp', 'giaysale2.webp', 'Sneakers bê trắng', 'Giày', 225000, 0, 34, 'Trắng', '37', 'Giày sneakers kiểu dáng năng động, trẻ trung Phần đế phối màu bắt mắt, tông màu nổi bật mang lại nét cá tính Chất liệu microfiber và polyester cao cấp, phù hợp mang nhiều dịp: đi làm, đi học hay dạo phố', '2022-05-11', '0000-00-00', 0),
(30, 'giay3.1.webp', 'giay3.2.webp', 'Sandals cao su xốp', 'Giày', 700999, 0, 16, 'Hồng', '38', 'Sandal lấy cảm hứng từ thể thao thời thượng. Quai phối kẻ sọc năng động.', '2022-05-13', '0000-00-00', 0),
(31, 'giaybc1.jpg', 'giaybc2.webp', 'Sneakers thêu hình xiên', 'Giày', 679000, 0, 6, 'Trắng', '38', 'Sandal lấy cảm hứng từ thể thao thời thượng. Quai phối kẻ sọc năng động. Gót trụ cao 7cm và đế có rãnh chống trượt. Chất liệu da cao cấp tổng hợp. Giày phù hợp đi mọi dịp, như đi làm, đi chơi, đi tiệc', '2022-05-13', '0000-00-00', 0),
(32, 'giay4.1.jpg', 'giay4.2.webp', 'Giày cao gót DWAY', 'Giày', 345000, 0, 385, 'Trắng', '37', 'Thiết kế giày cao gót đắp chéo phối quai tinh tế, thanh lịch. Chất liệu da tổng hợp bền đẹp, dễ vệ sinh. Gót hình học cách điệu, cao 7cm, cùng rãnh chống trượt dưới đế cho bước chân tự tin, thoải mái', '2022-05-12', '0000-00-00', 15),
(56, 'giay5.1.webp', 'giay5.2.webp', 'Giày cao gót JADIOR', 'Giày', 500000, 100000, 400, 'Trắng', '37', 'Thiết kế giày cao gót đắp chéo phối quai tinh tế, thanh lịch. Chất liệu da tổng hợp bền đẹp, dễ vệ sinh. ', '2022-05-19', '0000-00-00', 1),
(57, 'AO2.1.jpeg', 'AO2.0.jpeg', 'Áo khoác jeans kiểu bombe', 'Áo', 686000, 686000, 4, 'Đen', 'L', 'Đặc tính: Trẻ trung, Năng động.\r\nThể loại: Trang phục dạo phố.\r\nChất liệu: Jeans.\r\n', '2022-05-19', '0000-00-00', 2),
(58, 'AO1.3.jpeg', 'AO1.0.jpeg', 'Áo kiểu peplum tay phồng', 'Áo', 670000, 670000, 3, 'Vàng', 'S', 'Thanh lịch - Sang trọng.Thể loại: Trang phục công sở, tiệc nhẹ. Chất liệu: Vải bố sợi linen.\r\n', '2022-05-19', '0000-00-00', 1),
(59, 'AO3.0.jpeg', 'AO3.2.jpeg', 'Áo Blazer form suông', 'Áo', 670000, 670000, 7, 'Đen', 'L', 'Đặc tính: Cổ điển - Nữ tính.\r\nThể loại: Trang phục dạo phố, tiệc, du lịch.\r\nChất liệu: Chiffon.\r\n', '2022-05-19', '0000-00-00', 1),
(60, 'AO4.1.jpeg', 'AO4.2.jpeg', 'Áo croptop hai dây', 'Áo', 700000, 300000, 6, 'Trắng', 'S', 'Đặc tính: Trẻ trung- năng động- hiện đại.\r\nThể loại: Trang phục dạo phố.\r\nChất liệu: Sọc cam, lụa T1 trắng, voan bi hồng.\r\n', '2022-05-20', '0000-00-00', 0),
(61, 'AO5.2.jpeg', 'AO5.0.jpeg', 'Áo thun kiểu yếm ôm', 'Áo', 4500000, 4500000, 88, 'Trắng', 'L', 'Đặc tính: Năng động - Trẻ trung - Hiện đại.\r\nThể loại: Trang phục dạo phố.\r\nChất liệu: Thun Rib-knit.\r\n', '2022-05-20', '0000-00-00', 1),
(62, 'AO6.2.jpeg', 'AO6.3.jpeg', 'Áo sơ mi form rộng', 'Áo', 450000, 450000, 3, 'Vàng', 'S', 'Sản phẩm thể hiện lên sự sang trọng, thanh lịch. Phù hợp cho trang phục công sở và tiệc nhẹ với chất liệu là vải bố sợi linen đem lại cảm giác thoải mái khi mặc.', '2022-05-20', '0000-00-00', 0),
(63, 'AO7.0.jpeg', 'AO7.1.jpeg', 'Áo kiểu tay búp', 'Áo', 300000, 300000, 7, 'Trắng', 'L', 'Sản phẩm thể hiện lên sự sang trọng, thanh lịch. Phù hợp cho trang phục công sở và tiệc nhẹ với chất liệu là vải bố sợi linen đem lại cảm giác thoải mái khi mặc.', '2022-05-20', '0000-00-00', 0),
(64, 'AO8.2.jpeg', 'AO8.3.jpeg', 'Áo xẻ vai cài nút', 'Áo', 560000, 560000, 6, 'Đen', 'L', 'Sản phẩm mang đặc tính năng động, trẻ trung và hiện đại nên phù hợp mặc lúc dạo phố, với chất liệu là thun Rib-knit tạo cảm giác thông thoáng mát mẻ khi mặc.\r\n\r\n', '2022-05-20', '0000-00-00', 0),
(65, 'AO9.0-removebg-preview (1).png', 'AO9.1.jpeg', 'Áo Croptop cổ vuông', 'Áo', 700000, 700000, 398, 'Trắng', 'L', 'Sản phẩm thể hiện lên sự sang trọng, thanh lịch. Phù hợp cho trang phục công sở và tiệc nhẹ với chất liệu là vải bố sợi linen đem lại cảm giác thoải mái khi mặc.', '2022-05-20', '0000-00-00', 0),
(67, 'Quần tây 1.2.jpeg', 'Quần tây 1.3.jpeg', 'Quần tây form rộng', 'Quần', 5600000, 5600000, 24, 'Trắng', 'L', 'Đặc tính: Thanh lịch - Sang trọng.\r\nThể loại: Trang phục dạo phố, công sở, tiệc.', '2022-05-20', '0000-00-00', 6),
(68, 'Quần short 1.2.jpeg', 'Quần short 1.0.jpeg', 'Quần short lai lật', 'Quần', 456000, 456000, 5, 'Be', 'L', 'Đặc tính: Trẻ trung - hiện đại.\r\nThể loại: Trang phục đi làm và dạo phố.\r\nChất liệu: Khaki chéo', '2022-05-20', '0000-00-00', 0),
(69, 'Quần jeans 1.0.jpeg', 'Quần jeans 1.1.jpeg', 'Quần jeans ống loe', 'Quần', 700000, 700000, 60, 'Trắng', 'L', 'Quần Jean ống loe thiết kế trẻ trung, năng động\r\nTrang phục phù hợp dạo phố, thường ngày,đi làm...', '2022-05-20', '0000-00-00', 15),
(70, 'Quần tây 2.0.jpeg', 'Quần tây 2.2.jpeg', 'Quần tây ống đứng', 'Quần', 800000, 800000, 2, 'Be', 'L', 'Đặc tính: Thanh lịch - Sang trọng.\r\nThể loại: Trang phục dạo phố, công sở, tiệc.\r\nChất liệu: Vải bố sợi linen.', '2022-05-20', '0000-00-00', 3),
(71, 'Quần short 2.0.jpeg', 'Quần short 2.2.jpeg', 'Quần short form a có belt', 'Quần', 400000, 400000, 3, 'Xanh', 'L', 'Quần short form A có belt hiện đại, cá tính\r\nTrang phục phù hợp dạo phố, thường ngày,...', '2022-05-20', '0000-00-00', 2),
(72, 'Quần jeans 2.3.jpeg', 'Quần jeans 2.0 .jpeg', 'Quần jeans Skinny xước gối', 'Quần', 470000, 470000, 6, 'Xanh', 'L', 'Quần Jean Skinny xước gối thiết kế phong cách, cá tính\r\nTrang phục phù hợp dạo phố, thường ngày,đi làm...', '2022-05-20', '0000-00-00', 1),
(73, 'Quần tây 3.1.jpeg', 'Quần Tây 3.0.jpeg', 'Quần tây ống thẳng', 'Quần', 700000, 600000, 70, 'Vàng', 'L', 'Đặc tính: Thanh lịch - Hiện đại.\r\nThể loại: Trang phục công sở, tiệc.\r\nChất liệu: Poly tổng hợp.', '2022-05-20', '0000-00-00', 2),
(74, 'Quần short 3.3.jpeg', 'Quần short 3.1.jpeg', 'Quần short linen', 'Quần', 300000, 300000, 5, 'Xanh', 'L', 'Quần short linen thiết kế thời trang, cá tính\r\nTrang phục phù hợp dạo phố, thường ngày,đi làm...', '2022-05-20', '0000-00-00', 1),
(75, 'Quần jeans 3.1.jpeg', 'Quần jeans 3.2.jpeg', 'Quần jeans Skinny basic trơn', 'Quần', 560000, 200000, 1, 'Đen', 'L', 'Quần Jean Skinny basic trơn thiết kế đơn giản, tôn dáng\r\nTrang phục phù hợp dạo phố, thường ngày,đi làm...\r\n', '2022-05-20', '0000-00-00', 2),
(76, 'Túi Xách Nhỏ Hình Thang Phối Viền-1.webp', 'Túi Xách Nhỏ Hình Thang Phối Viền-2.webp', 'Túi Xách Hình Thang ', 'Phụ kiện', 4560000, 4560000, 4, 'Trắng', 'S', 'Kiểu dáng: Túi xách thời trang\r\nChất liệu: Da tổng hợp\r\nXuất xứ: Trung Quốc', '2022-05-20', '0000-00-00', 2),
(77, 'Túi Xách Lớn Top Handle Phối Nắp Giả Trang Trí-1.webp', 'Túi Xách Lớn Top Handle Phối Nắp Giả Trang Trí-2.webp', 'Túi Xách Nắp Giả Trang Trí', 'Phụ kiện', 560000, 560000, 1, 'Trắng', 'S', 'Kiểu dáng: Túi xách thời trang<br>\r\nChất liệu: Da tổng hợp<br>\r\nXuất xứ: Trung Quốc', '2022-05-20', '0000-00-00', 5),
(78, 'Túi Xách Lớn Phối Khoá Tối Giản-1.webp', 'Túi Xách Lớn Phối Khoá Tối Giản-2.webp', 'Túi Xách Khoá Tối Giản', 'Phụ kiện', 700000, 700000, 7, 'Hồng', 'S', 'Kiểu dáng: Túi xách thời trang\r\nChất liệu: Da tổng hợp\r\nXuất xứ: Trung Quốc', '2022-05-20', '0000-00-00', 0),
(79, 'Kính Wayfarer gọng phối viền kim loại-1.jpg', 'Kính Wayfarer gọng phối viền kim loại-2.jpg', 'Mắt kính Wayfarer gọng ', 'Phụ kiện', 900000, 900000, 9, 'Trắng', 'S', 'Chất liệu gọng kínhPlastic & Kim loại\r\nCông nghệ tròng kính Chống tia UV\r\nKiểu kính: Kính tròn', '2022-05-20', '0000-00-00', 0),
(80, 'Vòng cổ nhiều lớp mặt dây chuyền trái tim-2.webp', 'Vòng cổ nhiều lớp mặt dây chuyền trái tim-1.webp', 'Vòng cổ dây chuyền trái tim', 'Phụ kiện', 40000, 40000, 4, 'Vàng', 'S', 'Vật liệu:Vàng\r\nSố lượng:1 mảnh\r\nChi tiết:Tim', '2022-05-20', '0000-00-00', 0),
(81, 'Vòng cổ trang trí ngọc trai-1.webp', 'Vòng cổ trang trí ngọc trai-2.webp', 'Vòng cổ ngọc trai', 'Phụ kiện', 50000, 50000, 5, 'Trắng', 'S', 'Vật liệu:Vàng\r\nSố lượng:1 mảnh\r\nChi tiết:Ngọc trai\r\n', '2022-05-20', '0000-00-00', 0),
(82, 'Bông tai vàng thả ngọc trai nhân tạo-2.webp', 'Bông tai vàng thả ngọc trai nhân tạo-1.webp', 'Bông tai ngọc trai nhân tạo', 'Phụ kiện', 70000, 70000, 7, 'Trắng', 'S', 'Chi tiết:Ngọc trai, Pha lê kim cương\r\nKiểu:Theo\r\nSố lượng:2 chiếc', '2022-05-20', '0000-00-00', 0),
(83, 'Mũ bóng chày thêu chữ-1.webp', 'Mũ bóng chày thêu chữ-2.webp', 'Nón bóng chày thêu chữ', 'Phụ kiện', 20000, 20000, 2, 'Trắng', 'L', 'Phong cách: Giải trí\r\nKiểu:Mũ bóng chày\r\nVật liệu: Bông', '2022-05-20', '0000-00-00', 0),
(84, 'chanvayxeply.jfif', 'chanvayxeply2.jfif', 'Chân váy xếp ly', 'Đầm/Váy', 250000, 200000, 68, 'Trắng', 'S', 'chân váy dáng a chất umi co dãn cạp chun\r\nĐảm bảo sẽ nổ tung ib luôn ý , mix với áo sơ mi cổ hoa tơ thật sự sang sịn mịn  đẹp  vô cùng🥰\r\nChất liệu: tuyết mưa, mặc thoải mái, mát.', '2022-05-23', '0000-00-00', 1),
(85, 'sandals1.jpg', 'sandals.jpg', 'Sandals GÓT TRỤ ', 'Giày', 5600000, 5600000, 6, 'Be', '37', 'Sandal cao gót nữ quai ngang phối màu độc đáo kiểu dáng basic gót vuông 6cm mang đi làm đi chơi Cillie 1205 \r\nChất liệu da tổng hợp cao cấp, êm mềm\r\nThiết kế quai ngang basic, gót vuông 7cm vừa phải dễ đi \r\nCông sở đi làm / Dự tiệc/ Dạo phố', '2022-05-23', '0000-00-00', 3),
(86, 'vong1.webp', 'vong2.webp', 'Bông tai Kim Cương', 'Phụ kiện', 4500000, 4500000, 552, 'Trắng', 'S', 'Đừng bao giờ lãng quên những giá trị ban đầu, với chiếc lắc tay với phần khóa chốt nổi bật bằng bạc tiêu chuẩn cao cấp này. Là một phần của di sản Pandora lâu đời - chiếc khóa chốt dã góp mặt trong những thiết kế đầu tiên nhất', '2022-05-25', '0000-00-00', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product2`
--

CREATE TABLE `product2` (
  `id` int(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `image2` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `price` int(200) NOT NULL,
  `sale` int(200) NOT NULL,
  `mota` varchar(200) NOT NULL,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL,
  `sold` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product2`
--

INSERT INTO `product2` (`id`, `image`, `image2`, `name`, `type`, `price`, `sale`, `mota`, `create_at`, `update_at`, `sold`) VALUES
(2, 'giay.png', 'giay.png', 'Đầm công sở Kaela', 'Đầm/Váy', 5600000, 34000, '', '2022-05-03', '2022-05-12', 2),
(34, 'dam5.2.jfif', 'dam7.1.jfif', '5', 'Quần', 5, 5, '5', '2022-05-15', '0000-00-00', 0),
(35, 'dam5.2.jfif', 'dam7.1.jfif', '5', 'Quần', 5, 5, '5', '2022-05-15', '0000-00-00', 0),
(36, 'dam5.2.jfif', 'dam7.1.jfif', '5', 'Quần', 5, 5, '5', '2022-05-15', '0000-00-00', 0),
(37, 'dam5.2.jfif', 'dam7.1.jfif', '5', 'Quần', 5, 5, '5', '2022-05-15', '0000-00-00', 0),
(38, 'dam5.2.jfif', 'dam7.1.jfif', '5', 'Quần', 5, 5, '5', '2022-05-15', '0000-00-00', 0),
(39, '', '', '3', 'Quần', 3, 3, '3', '2022-05-15', '0000-00-00', 0),
(69, '', '', '7', 'Quần', 7, 7, '7', '2022-05-15', '0000-00-00', 0),
(70, 'icon.png', 'dam5.1.jfif', '7', 'Quần', 7, 7, '7', '2022-05-15', '0000-00-00', 0),
(87, '', '', '87', 'Quần', 87, 87, '87', '2022-05-15', '0000-00-00', 0),
(88, '', '', '88', 'Quần', 88, 88, '88', '2022-05-15', '0000-00-00', 0),
(89, '', '', '88', 'Quần', 88, 88, '88', '2022-05-15', '0000-00-00', 0),
(90, '', '', '90', 'Quần', 90, 90, '90', '2022-05-15', '0000-00-00', 0),
(91, '', '', '88', 'Quần', 88, 88, '88', '2022-05-15', '0000-00-00', 0),
(92, '', '', '88', 'Quần', 88, 88, '88', '2022-05-15', '0000-00-00', 0),
(93, '', '', '94', 'Quần', 94, 94, '93', '2022-05-15', '0000-00-00', 0),
(94, '', '', '93', 'Quần', 93, 893, '93', '2022-05-15', '0000-00-00', 0),
(95, '', '', '93', 'Quần', 93, 893, '93', '2022-05-15', '0000-00-00', 0),
(96, '', '', '93', 'Quần', 93, 893, '93', '2022-05-15', '0000-00-00', 0),
(97, '', '', '94', 'Quần', 94, 94, '94', '2022-05-15', '0000-00-00', 0),
(98, '', '', '94', 'Quần', 94, 94, '94', '2022-05-15', '0000-00-00', 0),
(99, '', '', '9', 'Quần', 9, 9, '9', '2022-05-15', '0000-00-00', 0),
(100, '', '', '9', 'Quần', 9, 9, '9', '2022-05-15', '0000-00-00', 0),
(101, '', '', '101', 'Quần', 101, 101, '101', '2022-05-15', '0000-00-00', 0),
(102, '', '', '101', 'Quần', 101, 101, '1012', '2022-05-15', '0000-00-00', 0),
(103, '', '', '103', 'Quần', 103, 103, '103', '2022-05-15', '0000-00-00', 0),
(104, '', '', '104', 'Quần', 104, 104, '104', '2022-05-15', '0000-00-00', 0),
(105, '', '', '105', 'Quần', 105, 105, '105', '2022-05-15', '0000-00-00', 0),
(106, '', '', '35', 'Quần', 35, 35, '35', '2022-05-15', '0000-00-00', 0),
(107, '', '', '35', 'Quần', 35, 35, '35', '2022-05-15', '0000-00-00', 0),
(108, '', '', '35', 'Quần', 35, 35, '35', '2022-05-15', '0000-00-00', 0),
(109, '', '', '35', 'Quần', 35, 35, '35', '2022-05-15', '0000-00-00', 0),
(110, '', '', '23', 'Quần', 23, 23, '11', '2022-05-15', '0000-00-00', 0),
(111, '', '', '67', 'Quần', 67, 67, '67', '2022-05-15', '0000-00-00', 0),
(112, '', '', '112', 'Quần', 112, 112, '112', '2022-05-15', '0000-00-00', 0),
(113, '', '', '113', 'Quần', 113, 113, '113', '2022-05-15', '0000-00-00', 0),
(114, '', '', '777', 'Đầm/Váy', 777, 77, '7777', '2022-05-15', '0000-00-00', 0),
(115, 'dam7.1.jfif', 'dam7.2.jfif', 'Chân váy Midi', 'Đầm/Váy', 456900, 3000, 'HAHA', '2022-05-15', '0000-00-00', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chart`
--
ALTER TABLE `chart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dskh`
--
ALTER TABLE `dskh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lib`
--
ALTER TABLE `lib`
  ADD PRIMARY KEY (`id_img`),
  ADD KEY `pk_pro2_lib` (`id_pro`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `order_detail_ibfk_2` (`pro_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product2`
--
ALTER TABLE `product2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chart`
--
ALTER TABLE `chart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `dskh`
--
ALTER TABLE `dskh`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `lib`
--
ALTER TABLE `lib`
  MODIFY `id_img` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT cho bảng `product2`
--
ALTER TABLE `product2`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`pro_id`) REFERENCES `product` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
