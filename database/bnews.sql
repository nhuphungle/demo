-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2016 at 07:34 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bnews`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_cat` int(255) NOT NULL,
  `name` varchar(120) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_cat`, `name`) VALUES
(1, 'Thời sự '),
(2, 'Góc nhìn '),
(3, 'Thế giới'),
(4, 'Kinh doanh'),
(5, 'Tin24h.vn'),
(7, 'Tin bóng đá'),
(9, '"tin"');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_news` int(255) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `preview_text` text COLLATE utf8_unicode_ci NOT NULL,
  `detail_text` text COLLATE utf8_unicode_ci,
  `id_cat` int(255) NOT NULL,
  `picture` varchar(120) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `name`, `preview_text`, `detail_text`, `id_cat`, `picture`) VALUES
(1, 'Trung Quốc điều thêm 17 tàu đến khu vực giàn khoan', 'Để bảo vệ giàn khoan, Trung Quốc đã điều thêm 17 tàu các loại so với hôm trước, sẵn sàng đâm va vào tàu Việt Nam.', 'Để bảo vệ giàn khoan, Trung Quốc đã điều thêm 17 tàu các loại so với hôm trước, sẵn sàng đâm va vào tàu Việt Nam.Để bảo vệ giàn khoan, Trung Quốc đã điều thêm 17 tàu các loại so với hôm trước, sẵn sàng đâm va vào tàu Việt Nam.', 1, 'h1.jpg'),
(2, 'Trọng tài - vết đen của kỳ World Cup sôi động ', 'World Cup 2014 chưa đi hết lượt đầu vòng bảng nhưng các trọng tài đẳng cấp FIFA đã có tới bốn trận bị chỉ trích dữ dội.', 'World Cup 2014 chưa đi hết lượt đầu vòng bảng nhưng các trọng tài đẳng cấp FIFA đã có tới bốn trận bị chỉ trích dữ dội.World Cup 2014 chưa đi hết lượt đầu vòng bảng nhưng các trọng tài đẳng cấp FIFA đã có tới bốn trận bị chỉ trích dữ dội.', 1, ''),
(3, 'Nhóm phượt ''cứu người được khen thưởng''', 'Sáng 6/9, Ủy ban An toàn giao thông quốc gia cùng Trung ương Đoàn TNCS Hồ Chí Minh tặng bằng khen cho đoàn phượt Phong Vân vì tham gia cứu hàng chục nạn nhân vụ xe khách Sao Việt lao xuống vực tại dốc Tòng Sành (Bát Xát, Lào Cai).', 'Tại buổi trao tặng, Bộ trưởng Giao thông vận tải Đinh La Thăng cảm ơn đoàn phượt không ngại trời tối, vực sâu, là những người đầu tiên đưa hàng chục nạn nhân lên khỏi vực. "Tôi đánh giá cao tấm lòng và sự dũng cảm của các bạn, không quản hiểm nguy tham gia cứu hộ. Chính vì vậy mới giảm được thương vong", Bộ trưởng Thăng nói.\r\n\r\nNgoài bằng khen, nhóm được thưởng 12 triệu đồng và 16 chiếc mũ bảo hiểm cùng lời dặn "đi phượt thì an toàn phải là số một". Số tiền thưởng 500.000 đồng mỗi cá nhân trước đó từ Thành đoàn Hà Nội đã được Phong Vân ủng hộ lại cho quỹ từ thiện của Thành đoàn.', 2, 'h3.jpg'),
(4, 'Chuyển nhượng 17/6: Arsenal mua Balotelli, tráo hàng Man Utd', 'GS TS Nguyễn Hữu Khiển, nguyên Phó giám đốc Học viện Hành chính quốc gia cho rằng công chức thu nhập thấp, phải làm việc theo lề lối hành chính. Việc hàng nghìn thí sinh lao vào thi tuyển công chức là mâu thuẫn chứ không phải tốt.', '- Trung tuần tháng 8 vừa qua, khoảng 9.000 thí sinh xếp hàng nộp hồ sơ thi tuyển vào Cục Thuế Hà Nội, giáo sư đánh giá thế nào về việc đó?\r\n\r\n- Người ta đổ xô vào thi ngành thuế cũng dễ hiểu thôi. Không ai bảo nhân viên thuế là ăn trắng mặc trơn, họ rất vất vả. Nhưng đó là ngành rất nhạy cảm với tiêu cực. Một cửa hàng kinh doanh bị đánh thuế 3 triệu hay 5 triệu đồng có thể tùy vào doanh nghiệp và nhân viên thuế. Tuy nhiên, tôi rất mong rằng nhận định này là sai.\r\n\r\nNhưng việc đó cũng phản ánh thực tế đang diễn ra, đó là xu hướng thích vào làm các cơ quan nhà nước. Chuyện xếp hàng dự tuyển công chức diễn ra ở nhiều ngành chứ không riêng gì ngành thuế. Đây là biểu hiện không tốt trong mối quan hệ giữa lao động và việc làm.\r\n\r\nKhu vực đào tạo đại học, cao đẳng nhiều hơn khả năng cung ứng việc làm. Đây không phải lỗi của đào tạo vì tỷ lệ lao động chất lượng của ta còn thua các nước trong khu vực, mà do hạn chế của khu vực sản xuất xã hội. Khu vực tư phát triển ì ạch với rào cản của thủ tục, huy động vốn hay năng lực cạnh tranh. Các doanh nghiệp nhà nước thì năng suất thấp, chỗ làm việc trăm mối quan hệ đã chiếm hết chỗ.', 4, 'h4.jpg'),
(5, 'Sắc màu Trung thu ngập tràn ba miền', 'Trên khắp cả nước, từ Hà Nội cho tới Sài Gòn, sắc màu rộn ràng của Trung thu đã ngập tràn, sẵn sàng cho một đêm lễ hội đầy ý nghĩa.', 'Trên khắp cả nước, từ Hà Nội cho tới Sài Gòn, sắc màu rộn ràng của Trung thu đã ngập tràn, sẵn sàng cho một đêm lễ hội đầy ý nghĩa.Trên khắp cả nước, từ Hà Nội cho tới Sài Gòn, sắc màu rộn ràng của Trung thu đã ngập tràn, sẵn sàng cho một đêm lễ hội đầy ý nghĩa.Trên khắp cả nước, từ Hà Nội cho tới Sài Gòn, sắc màu rộn ràng của Trung thu đã ngập tràn, sẵn sàng cho một đêm lễ hội đầy ý nghĩa.Trên khắp cả nước, từ Hà Nội cho tới Sài Gòn, sắc màu rộn ràng của Trung thu đã ngập tràn, sẵn sàng cho một đêm lễ hội đầy ý nghĩa.Trên khắp cả nước, từ Hà Nội cho tới Sài Gòn, sắc màu rộn ràng của Trung thu đã ngập tràn, sẵn sàng cho một đêm lễ hội đầy ý nghĩa.Trên khắp cả nước, từ Hà Nội cho tới Sài Gòn, sắc màu rộn ràng của Trung thu đã ngập tràn, sẵn sàng cho một đêm lễ hội đầy ý nghĩa.Trên khắp cả nước, từ Hà Nội cho tới Sài Gòn, sắc màu rộn ràng của Trung thu đã ngập tràn, sẵn sàng cho một đêm lễ hội đầy ý nghĩa.Trên khắp cả nước, từ Hà Nội cho tới Sài Gòn, sắc màu rộn ràng của Trung thu đã ngập tràn, sẵn sàng cho một đêm lễ hội đầy ý nghĩa.Trên khắp cả nước, từ Hà Nội cho tới Sài Gòn, sắc màu rộn ràng của Trung thu đã ngập tràn, sẵn sàng cho một đêm lễ hội đầy ý nghĩa.Trên khắp cả nước, từ Hà Nội cho tới Sài Gòn, sắc màu rộn ràng của Trung thu đã ngập tràn, sẵn sàng cho một đêm lễ hội đầy ý nghĩa.', 1, 'h1.jpg'),
(17, 'Thẻ tín dụng của nạn nhân tại hiện trường MH17 bị lấy đi', 'Các quan sát viên châu Âu hôm qua lần đầu tiên chỉ ra rằng, thẻ tín dụng và thẻ ghi nợ của các nạn nhân thiệt mạng trong vụ máy bay Malaysia', 'Các quan sát viên châu Âu hôm qua lần đầu tiên chỉ ra rằng, thẻ tín dụng và thẻ ghi nợ của các nạn nhân thiệt mạng trong vụ máy bay MalaysiaCác quan sát viên châu Âu hôm qua lần đầu tiên chỉ ra rằng, thẻ tín dụng và thẻ ghi nợ của các nạn nhân thiệt mạng trong vụ máy bay MalaysiaCác quan sát viên châu Âu hôm qua lần đầu tiên chỉ ra rằng, thẻ tín dụng và thẻ ghi nợ của các nạn nhân thiệt mạng trong vụ máy bay Malaysia', 1, 'h9.jpg'),
(18, '2 nhà máy vàng đóng cửa chưa có phương án trả nợ thuế', '2 nhà máy vàng đóng cửa chưa có phương án trả nợ thuế2 nhà máy vàng đóng cửa chưa có phương án trả nợ thuế', '2 nhà máy vàng đóng cửa chưa có phương án trả nợ thuế2 nhà máy vàng đóng cửa chưa có phương án trả nợ thuế2 nhà máy vàng đóng cửa chưa có phương án trả nợ thuế2 nhà máy vàng đóng cửa chưa có phương án trả nợ thuế2 nhà máy vàng đóng cửa chưa có phương án trả nợ thuế2 nhà máy vàng đóng cửa chưa có phương án trả nợ thuế', 1, 'h6.jpg'),
(32, 'U19 Việt Nam 0-0 U19 Australia (hiệp hai)', 'U19 Việt Nam 0-0 U19 Australia (hiệp hai)U19 Việt Nam 0-0 U19 Australia (hiệp hai)', 'U19 Việt Nam 0-0 U19 Australia (hiệp hai)U19 Việt Nam 0-0 U19 Australia (hiệp hai)U19 Việt Nam 0-0 U19 Australia (hiệp hai)U19 Việt Nam 0-0 U19 Australia (hiệp hai)U19 Việt Nam 0-0 U19 Australia (hiệp hai)U19 Việt Nam 0-0 U19 Australia (hiệp hai)U19 Việt Nam 0-0 U19 Australia (hiệp hai)U19 Việt Nam 0-0 U19 Australia (hiệp hai)U19 Việt Nam 0-0 U19 Australia (hiệp hai)U19 Việt Nam 0-0 U19 Australia (hiệp hai)U19 Việt Nam 0-0 U19 Australia (hiệp hai)U19 Việt Nam 0-0 U19 Australia (hiệp hai)U19 Việt Nam 0-0 U19 Australia (hiệp hai)U19 Việt Nam 0-0 U19 Australia (hiệp hai)', 1, 'h1.jpg'),
(33, 'Sửa U19 Việt Nam 0-0 U19 Australia (hiệp hai)', 'U19 Việt Nam 0-0 U19 Australia (hiệp hai)U19 Việt Nam 0-0 U19 Australia (hiệp hai)', 'U19 Việt Nam 0-0 U19 Australia (hiệp hai)U19 Việt Nam 0-0 U19 Australia (hiệp hai)U19 Việt Nam 0-0 U19 Australia (hiệp hai)U19 Việt Nam 0-0 U19 Australia (hiệp hai)U19 Việt Nam 0-0 U19 Australia (hiệp hai)U19 Việt Nam 0-0 U19 Australia (hiệp hai)U19 Việt Nam 0-0 U19 Australia (hiệp hai)U19 Việt Nam 0-0 U19 Australia (hiệp hai)U19 Việt Nam 0-0 U19 Australia (hiệp hai)U19 Việt Nam 0-0 U19 Australia (hiệp hai)U19 Việt Nam 0-0 U19 Australia (hiệp hai)U19 Việt Nam 0-0 U19 Australia (hiệp hai)U19 Việt Nam 0-0 U19 Australia (hiệp hai)U19 Việt Nam 0-0 U19 Australia (hiệp hai)', 2, 'h2.jpg'),
(35, 'Ước gì con tôi không phải đi du học', 'Tôi ra sân bay Tân Sơn Nhất tiễn con đi Mỹ du học vào năm ngoái mà lòng nặng trĩu nỗi buồn. Sân bay đông nghẹt. Nhìn những em bé chỉ 15, 16 tuổi như con tôi một mình đẩy hành lý vào làm thủ tục ở sân bay mà rớt nước mắt.', 'Chuyến bay kéo dài 24 giờ đồng hồ, bao gồm cả transit ở Nhật Bản. Gia đình tôi chỉ còn biết cầu trời khấn Phật để mong bình an. Và tôi cũng như biết bao gia đình phải chờ đợi một năm học thì con mới về nghỉ hè. Không có gì có thể tả hết nỗi khổ của những người làm cha mẹ xa con. Cũng không có gì có thể nói hết về sự gian nan vất vả khi cha mẹ lao động cực nhọc kiếm tiền học phí cho con đi du học. Bởi cho một đứa con đi học xa nhà cần cả một tinh thần thép và một khả năng tài chính đủ mạnh. Cũng như chính đứa bé đó muốn thành công cũng phải vượt qua những thách thức không dễ dàng ở nơi chúng chưa bao giờ biết đến, trong môi trường học tập và cạnh tranh quốc tế.\r\n\r\nNhưng vì sao gia đình tôi và biết bao gia đình khác đã lựa chọn con đường này? Có lẽ vì chúng tôi muốn thoát ra khỏi nỗi lo lắng và buồn bực đã nặng trĩu trong lòng nhiều năm qua.', 2, 'h4.jpg'),
(36, 'Đầu tư cho giới trẻ', 'Chắc hẳn nhiều bạn còn nhớ năm 2003, Việt Nam đoạt chức vô địch Sea Games 22 với 158 huy chương vàng, bứt xa Á quân Thái Lan với 90 huy chương vàng.', 'Dường như mọi người đều nghĩ rằng, nếu chỉ trong một thời gian ngắn mà Việt Nam từ một vị trí khiêm tốn đã tiến lên nắm chức vô địch thể thao trong vùng thì chắc hẳn rồi đây chúng ta cũng có thể tạo được nhiều “phép lạ” khác. Điển hình nhất là có vài người bạn Singapore lúc ấy đã hỏi tôi rằng: “Liệu trong vòng 10 năm nữa Việt Nam có thể vượt qua Thái Lan được không?”.\r\n\r\nKhi so sánh mức độ phát triển kinh tế thì thước đo thường được dùng nhất là con số “Thu nhập bình quân đầu người” (lấy tổng sản lượng quốc nội GDP, chia cho dân số một nước). Theo thống kê của The Economist thì trong vòng 7 năm từ 1995 đến 2002, Việt Nam là nước đã tiến nhanh nhất khi từ vị trí 151 lên đến 128 (tăng 23 bậc), trong khi Thái Lan lại tụt từ 69 xuống 84 (giảm 15 bậc). Như vậy là trong vòng 7 năm từ 1995 đến 2002, khoảng cách giữa Việt Nam và Thái Lan đã thu ngắn 38 bậc và nếu tiếp tục cái đà rút ngắn 5 bậc mỗi năm này thì phải chăng chỉ cần 8 năm, nghĩa là đến 2010 thì kinh tế Việt Nam sẽ bắt kịp Thái Lan? Thực ra vấn đề không hề đơn giản như vậy vì nhiều lý do mà trước hết lúc bấy giờ Việt Nam và Trung Quốc chưa “nối mạng” với kinh tế thế giới nên đã không bị ảnh hưởng nặng bởi cuộc khủng hoảng tài chính 1997-1999 như các nước khác. \r\n\r\nThấm thoắt mười năm đã trôi qua từ SEA Games 22 và hiện tại thì kết quả cuộc chạy đua kinh tế ấy ra sao rồi? Theo thống kê của IMF năm 2013 thì VN được xếp hạng 134 và Thái Lan 92. Như thế có nghĩa là trong vòng 10 năm qua thì cả hai nước đều… đi thụt lùi: VN từ 128 xuống 134 (giảm 6 bậc) và Thái Lan từ 84 xuống 92 (giảm 8 bậc).\r\n\r\nTrong bối cảnh hội nhập hiện tại, khi nền kinh tế Việt Nam ngày càng gắn liền hơn với kinh tế toàn cầu, quả thật là chúng ta đã và sẽ không thể tránh được ảnh hưởng của những cú “sốc” kinh tế toàn cầu, như cuộc khủng hoảng 2008 vừa qua mà ảnh hưởng vẫn còn dai dẳng cho đến hôm nay.', 2, 'h5.jpg'),
(37, 'Mỹ hoài nghi về lệnh ngừng bắn ở Ukraine', 'Tổng thống Mỹ Barack Obama hôm qua nghi ngờ về lệnh ngừng bắn mới ở Ukraine và hứa hẹn về một lệnh trừng phạt mới để tiếp tục gây áp lực đối với Nga. ', '"Chúng tôi hy vọng, nhưng dựa trên những kinh nghiệm trong quá khứ, chúng tôi cũng hoài nghi về việc liệu phe ly khai có thực sự tuân thủ, và liệu Nga sẽ chấm dứt xâm phạm chủ quyền và toàn vẹn lãnh thổ Ukraine hay không", USA Today dẫn lời ông Obama hôm qua nói tại Wales, Anh. "Điều đó cần được kiểm tra". \r\n\r\nĐể duy trì áp lực của phương Tây, ông Obama cho biết Mỹ và châu Âu đang hoàn tất các biện pháp "nhằm mở rộng và tăng cường trừng phạt đối với các ngành ngân hàng, năng lượng và quốc phòng Nga". Những lệnh trừng phạt mới này có thể được dỡ bỏ nếu lệnh ngừng bắn và một thỏa thuận hòa bình thực sự có tác dụng chấm dứt chiến sự giữa quân đội Ukraine và phe ly khai thân Nga. \r\n\r\nTổng thống Mỹ cũng khen ngợi sự cứng rắn của liên minh phương Tây khi đối đầu với Nga, trong đó có việc thành lập lực lượng phản ứng nhanh để bảo vệ các nước thành viên NATO ở Đông Âu. Ông cho rằng nó thể hiện nguyên tắc "các nước lớn không thể dậm chân lên các nước nhỏ". \r\n\r\nTrong khi đó, Nga hôm qua cũng hoan nghênh việc ký kết thỏa thuận ngừng bắn. "Moscow hy vọng tất cả các điều kiện trong văn bản và các thỏa thuận đạt được sẽ được các bên tuân thủ triệt để, và quá trình đàm phán sẽ tiếp tục cho tới khi cuộc khủng hoảng ở Ukraine được giải quyết đầy đủ", ông Dmitry Peskov, phát ngôn viên của Tổng thống Nga Vladimir Putin, nói.\r\n\r\nÔng Peskov cũng nhấn mạnh thỏa thuận là kết quả của sáng kiến do ông Putin và người đồng cấp Ukraine Petro Poroshenko đề xuất. Moscow bác bỏ việc tham chiến ở Ukraine, nhưng Kiev và NATO cho rằng quân thường trực cũng như xe tăng Nga đang chiến đấu cùng lực lượng ly khai ở đông Ukraine.\r\n\r\nThỏa thuận ngừng bắn có điều kiện hôm qua được ký kết tại Minsk, Belarus và có hiệu lực từ 18h. Sự kiện có sự tham gia của Ukraine, Nga, phe ly khai thân Nga và Tổ chức Hợp tác và An ninh châu Âu (OSCE). ', 3, 'h6.jpg'),
(38, 'Nga tuyên bố đáp trả nếu EU tiếp tục áp trừng phạt', 'Nga hôm nay cảnh báo sẽ phản ứng lại nếu châu Âu áp đặt lệnh trừng phạt mới lên nước này với lý do can thiệp vào cuộc khủng hoảng ở Ukraine.', 'Moscow lên tiếng chỉ trích EU về việc vẫn tiếp tục soạn thảo biện pháp trừng phạt cứng rắn hơn với Nga mặc dù chính phủ Ukraine và lực lượng ly khai miền đông đã nhất trí về lệnh ngừng bắn từng được bàn luận ở Minsk trước đây.\r\n\r\nBằng cách công bố các trừng phạt mới, dự kiến chính thức phê duyệt vào ngày 8/9, lãnh đạo các nước EU "thực chất đang gửi đi tín hiệu thể hiện sự đồng thuận trực tiếp với ''nhóm ủng hộ chiến tranh'' ở Kiev, những người không hài lòng với kết quả của cuộc họp tại Minsk", bộ ngoại giao Nga cho biết.\r\n\r\n"Thay vì luống cuống tìm cách làm tổn thương nền kinh tế của chính mình và của Nga, EU tốt hơn hết nên thực thi những biện pháp hỗ trợ sự phục hồi của vùng Donbass" thuộc miền đông Ukraine, thông báo nói thêm.\r\n\r\nEU đưa ra biện pháp trừng phạt bổ sung với Moscow vào cuối ngày hôm qua nhưng cho biết sẽ đình chỉ lệnh này nếu Nga rút quân khỏi Ukraine và giám sát thực hiện ngừng bắn ở miền đông.\r\n\r\nLệnh trừng phạt mới bao gồm việc thêm tên của 24 người vào danh sách có tài sản bị đóng băng và cấm nhập cảnh vào 28 quốc gia, theo Reuters.\r\n\r\nPhương Tây và Mỹ vẫn cho rằng xung đột ở Ukraine trở nên trầm trọng do Nga hỗ trợ phe ly khai. Moscow phủ nhận hoàn toàn cáo buộc này.', 3, 'h7.jpg'),
(39, 'Mỹ hối thúc NATO tiêu diệt Nhà nước Hồi giáo', 'Hôm qua, Mỹ tuyên bố tiêu diệt ba thành viên cấp cao của Nhà nước Hồi giáo trong một cuộc không kích của Mỹ ở Iraq.', 'Theo AFP, ông Obama tin rằng một liên minh chống lại Nhà nước Hồi giáo tự xưng (IS) đã được thành lập, sau cuộc họp thượng đỉnh Tổ chức Hiệp ước Bắc Đại Tây Dương (NATO) hôm qua. \r\n\r\n"Tôi không thấy sự phản đối hay thoái lui nào về việc chúng ta có vai trò trọng yếu trong việc cản bước tổ chức tàn bạo này, chúng đang gây hỗn loạn trong khu vực và gây hại đến quá nhiều người. Chúng cũng gây nên mối đe dọa dài hạn tới an toàn và an ninh của các thành viên NATO. Vì thế chúng ta phải hành động để làm suy yếu và cuối cùng tiêu diệt được Nhà nước Hồi giáo tự xưng", AP dẫn lời ông Obama nói trong phiên kết thúc hội nghị.\r\n\r\nTrong họp báo sau đó, ông Obama cho hay các thành viên NATO đang sẵn sàng cùng tham dự chiến dịch quân sự của Mỹ ở Iraq để truy đuổi phiến quân Hồi giáo. Trong vài tuần gần đây, Mỹ thực hiện hơn 100 cuộc không kích ở phía bắc Iraq, giúp các lực lượng chính phủ Iraq và Kurd giành lại các khu vực bị phiến quân chiếm giữ. Mỹ cũng bày tỏ hy vọng một chính phủ mới của Iraq sẽ được thiết lập trong tuần tới.\r\n\r\nTuy nhiên các đối tác châu Âu tỏ vẻ thận trọng. Anh, nước được cho là có đông công dân đứng trong hàng ngũ IS, để ngỏ khả năng không kích ở Iraq. Tuy nhiên Thủ tướng Anh David Cameron không nêu cao việc có hành động ngay lập tức. "Điều này cần thời gian, kiên nhẫn và quyết tâm", ông nói. \r\n\r\nTổng thống Pháp Francois Hollande cho hay nước này sẵn sàng tham gia liên minh với Mỹ chống lại phiến quân ở Iraq, với điều kiện sự tham gia của Pháp không có lợi cho chính quyền của Tổng thống Bashar al- Assad.\r\n\r\nNgoại trưởng Đức Frank-Walter Steinmeier nhấn mạnh nỗ lực chống phiến quân Hồi giáo đang ở giai đoạn đầu, chưa có chiến lược dài hạn.\r\n\r\nTổng thư ký NATO Anders Fogh Rasmussen cho biết liên minh quân sự sẵn sàng trợ giúp nếu có yêu cầu từ Baghdad, như là hỗ trợ huấn luyện và hợp tác với các nước chống lại IS. Các nước NATO cũng nhất trí trao đổi thêm thông tin về các chiến binh nước ngoài có thể trở về châu Âu hoặc Mỹ để thực hiện các cuộc tấn công khủng bố tại quê nhà.\r\n\r\nHôm qua, Ngoại trưởng Mỹ John Kerry cũng họp với những người đồng cấp đến từ Australia, Canada, Đan Mạch, Pháp, Đức, Italy, Ba Lan và Thổ Nhĩ Kỳ nhằm kêu gọi hỗ trợ trong cuộc chiến chống lại Nhà nước Hồi giáo. Ông Kerry sẽ tới Trung Đông tuần tới với dự tính mở rộng liên minh bên ngoài các nước phương Tây. Các quan chức Mỹ cho biết thêm Washington sẽ nêu kế hoạch cụ thể tại cuộc họp Đại hội đồng Liên Hợp Quốc vào cuối tháng này.\r\n\r\nHôm qua, Mỹ tuyên bố tiêu diệt ba thành viên cấp cao của Nhà nước Hồi giáo trong một cuộc không kích của Mỹ ở Iraq.', 3, 'h8.jpg'),
(40, 'Nữ sinh Anh bỏ nhà sang Syria làm vợ phiến quân Hồi giáo', '"Bố mẹ nào cũng muốn tự hào về con, nhưng thật buồn là bây giờ chúng ta chẳng cảm thấy gì ngoài nỗi xấu hổ Aqsa ạ", thông cáo viết.', 'Tại một cuộc họp báo mới đây ở thành phố Glasgow, Scotland, bố mẹ Aqsa tuyệt vọng cầu xin con gái trở về sau khi IS tiết lộ đoạn video quay cảnh hành hình nhà báo Mỹ thứ hai, Steven Sotloff, trên sa mạc.\r\n\r\nTrong suốt cuộc họp, vợ chồng ông Muzaffar Mahmood ngồi lặng lẽ. Thỉnh thoảng bà Khalida Mahmood lấy tay lau nước mắt. Chia sẻ trong thông cáo, bố mẹ Aqsa cho biết, dù Aqsa đã "phản bội" gia đình nhưng họ vẫn mong con trở về.\r\n\r\n"Chúng ta vẫn yêu con, Aqsa ạ, nhưng bây giờ bố mẹ phải đặt gia đình, các anh chị em của con lên hàng đầu vì con đã phản bội chúng ta, phản bội người Anh khi quyết định làm việc đó. Con đã xé nát trái tim của gia đình ta và thay đổi cuộc sống của chúng ta mãi mãi. Làm ơn hãy về nhà đi con gái", Telegraph dẫn thông cáo.\r\n\r\nÔng bà Mahmood sợ hãi khi phát hiện cô con gái "thông minh, xinh đẹp và ít nói" gia nhập cuộc chiến của các nhóm phiến quân ở Syria. Theo ông Muzaffar, họ dành cho con mọi thứ có thể, từ tình yêu, sự tự do, tiền bạc để học trường tư thục, nhưng cuối cùng,Aqsa lại chọn con đường bố mẹ không bao giờ đồng ý.\r\n\r\n"Bố mẹ nào cũng muốn tự hào về con, nhưng thật buồn là bây giờ chúng ta chẳng cảm thấy gì ngoài nỗi xấu hổ Aqsa ạ", thông cáo viết.', 3, 'h9.jpg'),
(42, 'aaaaaaa', 'aaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 3, ''),
(46, 'tôi đi học', 'tôi đi họctôi đi họctôi đi họctôi đi học', 'tôi đi họctôi đi họctôi đi họctôi đi họctôi đi họctôi đi họctôi đi họctôi đi họctôi đi họctôi đi họctôi đi họctôi đi họctôi đi học', 1, 'toeic_1462982833.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(255) NOT NULL,
  `username` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `fullname`) VALUES
(1, 'admin', 'afdfdfffsf', 'Phung'),
(5, 'phungltn', 'phungltn', 'phungltn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_cat` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
