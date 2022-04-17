<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = [
            [
                'name' => 'Ớt chuông đỏ túi 300gr',
                'description' => ' Thông tin sản phẩm
                Ớt chuông đỏ có kích thước to và có nhiều màu sắc khác nhau như: xanh, vàng, đỏ... Ớt chuông đỏ này không có vị cay gắt như các loại ớt thông thường khác mà có vị giòn nên thích hợp cho các món xào, ăn sống. Loại ớt này còn chứa nhiều khoáng chất và vitamin tốt cho cơ thể.
                Ớt chuông là giống ớt có quả to, phần thịt dày và giòn xốp. Đặc biệt, ớt chuông là loại rau củ có sự đa dạng về màu sắc (gồm xanh, vàng, cam, đỏ và đen) cũng như hương vị và độ cay nồng khác nhau. Ớt chuông xanh có hương vị hăng khá đặc trưng, trong khi đó ớt màu đỏ và vàng thường có vị ngọt hơn. Ớt chuông đỏ được sử dụng để làm dầu thơm và tương ớt khi bạn muốn giảm bớt vị cay.
                GIÁ TRỊ DINH DƯỠNG
                - Ớt chuông có 92% là nước, còn lại là các chất dinh dưỡng như Carb, Protein, Chất béo cùng các khoáng chất và vitamin như: Vitamin A, C, K1, Folate và Kali cùng nhiều chất chống oxy hóa khác.
                - Với hàm lượng vitamin A dồi dào cùng Lutein và Zeaxanthin, ớt chuông hỗ trợ giúp bảo vệ võng mạc khỏi các tác động oxy hóa, tránh khỏi các bệnh thoái hóa võng mạc, thoái hóa điểm vàng.
                - Ngoài ra ớt chuông sinh nhiệt và làm tăng tỷ lệ trao đổi chất, giúp đốt cháy calo, hỗ trợ giảm cân. Các vitamin A, C, K cùng hàm lượng lưu huỳnh có trong ớt chuông hỗ trợ hệ thống miễn dịch, bảo vệ tế bào khỏi quá trình oxy hoá, tăng cường khả năng hấp thụ và bổ sung chất sắt, ngăn ngừa ung thư.
                Với hàm lượng giá trị dinh dưỡng cao, ớt chuông mang đến rất nhiều lợi ích cho sức khoẻ.
                CÁC MÓN ĂN VỚI ỚT CHUÔNG
                •	Ớt chuông xào thịt bò.
                •	Mực xào ớt chuông.
                •	Trứng ốp la ớt chuông.
                •	Thêm vào các món salad
                Lưu ý: Sản phẩm nhận được có thể khác với hình ảnh về màu sắc và số lượng nhưng vẫn đảm bảo về mặt khối lượng và chất lượng.
                ',
                'type_id' => '1',
                'image' => 'otchuong.jpg',
                'price' => '19500',
                'discount' => '0',
                'product_quanity' => '30',
                'created_at' => '2022-4-1',
            ],
            [
                'name' => 'Khổ qua gói 500g (3-5 trái)',
                'description' => 'Thông tin sản phẩm
                Hay còn gọi là mướp đắng, là món ăn cực quen thuộc trong thực đơn hàng tuần của các bà nội trợ. Trong khổ qua chứa rất nhiều vitamin và khoáng chất tốt cho cơ thể, giúp nâng cao chức năng miễn dịch, thanh nhiệt giải độc. Khổ qua có thể chế biến thành canh hoặc các món xào đều rất ngon.
                Khổ qua còn được gọi là mướp đắng, là loại cây ăn quả có vị đắng, tính hàn, được sử dụng như một loại rau củ dùng trong chế biến món ăn. Khổ qua có nhiều công dụng tuyệt vời như thanh nhiệt, giải độc, giải sốt, giải cảm, tăng cường sức đề kháng. Mặc dù có vị đắng khó ăn nhưng khổ qua vẫn được nhiều người ưa chuộng trong việc chế biến món ăn hằng ngày.

                Cách sơ chế
                - Khổ qua sau khi mua về rửa sạch với nước, thái khổ qua làm đôi hoặc làm ba rồi dùng dao hoặc muỗng nạo bỏ phần lõi trắng bên trong vì đây là phần chứa nhiều vị đắng nhất.
                - Thái khổ qua thành từng miếng nhỏ vừa ăn rồi ngâm với thau đá lạnh và ít muối cho đến khi tan hết đá rồi rửa lại với nước. Nếu không có thời gian để ngâm đá thì có thể vừa xối nước vừa dùng tay bóp nhẹ khổ qua để bỏ bớt vị đắng.
                - Ngoài ra, bạn cũng có thể trụng sơ khổ qua trong nước sôi ở nhiệt độ cao. Sau đó rửa sơ với nước lạnh.
                Các món ăn chế biến từ khổ qua
                Khổ qua không chỉ chế biến thành nước ép, trà khổ qua,... mà còn kết hợp với trứng, thịt heo, chả cá,... để nấu thành những món ăn thơm ngon, giàu chất dinh dưỡng cho gia đình.
                - Canh khổ qua nhồi thịt heo
                - Khổ qua xào trứng
                - Khổ qua cà ớt
                Những lưu ý khi ăn khổ qua
                Mặc dù khổ qua là loại quả tốt cho sức khỏe, nhưng ăn nhiều khổ qua sẽ gây ra các triệu chứng như giảm huyết áp, đau đầu, chóng mặt, đầy hơi,...  Vì thế, những bệnh nhân mắc bệnh gan, huyết áp thấp, hệ tiêu hóa kém nên cân nhắc khi sử dụng. Đặc biệt, đối với phụ nữ mang thai, khổ qua được coi là tác nhân gây kích thích tử cung và sinh non. Ngoài ra, phụ nữ cho con bú cũng không nên dùng vì trong khổ qua có một số thành phần không tốt có thể bị truyền qua sữa mẹ.
                 Lưu ý: Sản phẩm khách hàng nhận được có thể khác với hình ảnh nhưng vẫn đảm bảo về mặt khối lượng và chất lượng.
                ',
                'type_id' => '1',
                'image' => 'khoqua.jpg',
                'price' => '14000',
                'discount' => '0',
                'product_quanity' => '40',
                'created_at' => '2022-4-2',
            ],

            [
                'name' => 'Khoai mỡ túi 1kg (1 - 2 củ)',
                'description' => 'Thông tin sản phẩm
                Là nguyên liệu khá quen thuộc của các chị em khi nấu ăn cho cả gia đình. Với hàm lượng khoáng chất và vitamin có trong khoai mỡ sẽ giúp cải thiện hệ tiêu hoá, giúp nhuận tràng, chữa táo bón rất tốt. Khoai mỡ có thể sử dụng để chế biến thành các món như: canh, bánh khoai mỡ, khoai mỡ chiên giòn,...
                Giá trị dinh dưỡng có trong khoai mỡ
                Trong khoai mỡ chứa rất nhiều tinh bột, chất xơ cùng hàm lượng vitamin và các khoáng chất dồi dào. Cứ 100g khoai mỡ sẽ có khoảng 5.3g chất xơ, 10mg vitamin C, vitamin B6, 0.31mg Kali, Magnesium và Phosphorus. Điểm đặc biệt của khoai mỡ so với các loại củ, quả khác chính là khả năng chuyển hóa tối đa lượng carbonhydrate và điều tiết, tối ưu quá trình chuyển hóa năng lượng nhờ hàm lượng Magnesium dồi dào của mình, hiệu quả trong việc duy trì cân nặng, giảm cân.

                Ngoài ra nguồn dinh dưỡng dồi dào trong khoai mỡ còn hỗ trợ trong việc điều trị rất nhiều bệnh, vitamin B6 là chất dinh dưỡng rất tốt hỗ trợ cải thiện sức khỏe tim mạch, đồng thời làm giảm huyết áp cho cơ thể, Ăn nhiều khoai mỡ còn giúp nhuận tràng, chống viêm ruột, hàm lượng chất xơ cao trong khoai mỡ còn giúp chữa táo bón rất tốt. Đặc biệt phụ nữ có thể tránh được các hội chứng khó chịu trong giai đoạn mãn kinh bằng cách sử dụng khoai mỡ.
                Các món ăn có thể chế biến với khoai mỡ
                Với vị béo ngọt đặc trưng, khoai mỡ thường được dùng để làm nguyên liệu chế biến thành nhiều món ăn ngon, bổ dưỡng, được cả nhà yêu thích
                •	Canh khoai mỡ thịt bằm
                •	Khoai mỡ nấu với tôm khô
                •	Bánh khoai mỡ hấp nước cốt dừa
                •	Khoai mỡ chiên giòn để các bé ăn vặt.
                Lưu ý: Sản phẩm nhận được có thể khác với hình ảnh về màu sắc và số lượng nhưng vẫn đảm bảo về mặt khối lượng và chất lượng.
                ',
                'type_id' => '1',
                'image' => 'khoaimo.jpg',
                'price' => '39000',
                'discount' => '0',
                'product_quanity' => '10',
                'created_at' => '2022-3-30',
            ],
            [
                'name' => 'Hành tây gói 500g (4 - 6 củ)',
                'description' => 'Thông tin sản phẩm
                Hành tây là một loại củ phổ biển được sử dụng trong rất nhiều món ăn của người Việt và trên toàn thế giới. Loại rau củ này chứa khá nhiều vitamin và khoáng chất có công dụng cho sức khỏe. Hành tây có thể dùng để chiên, xào, nướng hoặc có thể ăn sống đểu rất ngon.
                Hành tây là loại củ mọc dưới lòng đất, được trồng phổ biến trên toàn thế giới và có quan hệ gần với hẹ, tỏi và hành lá. Đây là nguyên liệu chủ yếu trong nhiều món ăn, được chế biến rất đa dạng, từ nướng, luộc, chiên, rang, xào, lăn bột hoặc thậm chí là ăn sống. Hành tây chứa khá nhiều vitamin và khoáng chất có công dụng cho sức khỏe như: giúp điều hòa đường huyết, cải thiện sức khỏe xương, ngăn ngừa ung thư, tăng cường hệ miễn dịch,...
                Cách sơ chế hành tây
                - Rửa sạch hành tây với nước.
                - Dùng dao lột vỏ.
                - Cắt hình múi cau, khoanh tròn, sắc nhỏ tùy theo món bạn chế biến.
                - Để giảm bớt vị hăng ngâm vào tô nước có pha một chút chanh hoặc giấm 15 phút.
                - Để hành tây giòn, ngâm hành tây trong nước lạnh 30 phút.
                Tham khảo: Những cách cắt hành không lo cay mắt.
                Món ăn được chế biến với hành tây
                - Gà xào hành tây lạ miệng, đưa cơm.
                - Giòn thơm với mực xào hành tây.
                - Bò xào hành tây thơm mềm, thơm ngon.
                - Súp hành tây kiểu Pháp.
                Ngoài việc sử dụng làm món ăn, hành tây còn sử dụng để vệ sinh nhà cửa, làm sạch vỉ nướng, tẩy mọi vết bẩn trên áo trắng,...
                Lưu ý: Sản phẩm nhận được có thể khác với hình ảnh về màu sắc và số lượng nhưng vẫn đảm bảo về mặt khối lượng và chất lượng.
                ',
                'type_id' => '1',
                'image' => 'hanhtay.jpg',
                'price' => '30000',
                'discount' => '0',
                'product_quanity' => '25',
                'created_at' => '2022-3-28',
            ],
            [
                'name' => 'Bí đỏ hồ lô túi 700g (1 trái)',
                'description' => 'Thông tin sản phẩm
                Còn gọi là bí đỏ hạt đậu, đây là giống bí có ruột rất đặc, ít hả ăn dẻo và ngọt. Bí hồ lô chứa nhiều chất dinh dưỡng và mang lại nhiều lợi ích cho sức khoẻ. Bí hồ lô có thể chế biến thành nhiều món ăn ngon như: sữa bí, canh bí, súp bí,... món nào cũng đều thơm ngon.
                Bí đỏ là loại củ chứa lượng calo tương đối thấp, do 94% bí đỏ là nước. Bí đỏ cũng chứa nhiều beta-caroten, một loại carotenoid mà cơ thể tổng hợp thành vitamin A. Hơn thế nữa, hạt bí đỏ cũng có thể được sử dụng bởi chúng chứa nhiều chất dinh dưỡng và mang lại nhiều lợi ích cho sức khoẻ.
                Bí đỏ hồ lô cùng họ nhà bí đỏ nhưng có hình dạng giống như hồ lô. Về mặt dinh dưỡng, bí đỏ hay bí đỏ hồ lô đều giống nhau. Bí đỏ hồ lô sẽ tăng thêm một sự lựa chọn cho những người nội trợ với nhu cầu trang trí món ăn thêm phần bắt mắt. Kĩ thuật trồng bí đỏ hồ lô cũng rất quan trọng trong việc quyết định chất lượng của bí đỏ, những trái bí đỏ dẻo ngọt, đầy dinh dưỡng.
                Hướng dẫn sơ chế
                Bách Hóa Xanh sẽ chia sẻ cho bạn mẹo để gọt vỏ bí đỏ nhanh và đẹp mắt nhưng không phải sợ bị đứt tay
                Gọt vỏ bí đỏ bằng dao thông thường
                Bước 1: Trước tiên bạn chẻ bí đỏ ra từng phần và tiến hành loại bỏ phần ruột và hạt của bí đỏ.
                Bước 2: Bạn cắt bí thành từng miếng nhỏ.
                Bước 3: Cuối cùng bạn chỉ cần cầm từng miếng bí nhỏ lên và dùng dao gọt bỏ phần vỏ bí đi.
                Gọt vỏ bí đỏ nhanh bằng dao bào
                Đối với bí đỏ dạng quả dài thì bạn có thể gọt bỏ 2 đầu chẻ đôi quả bí. Sau đó dựng đứng quả bí và dùng dao cắt hoặc dao bào gọt bỏ phần vỏ bí. Tuy nhiên, cách này sẽ gặp đôi chút khó khăn hình dáng quả bí khùm khoàm, khó thực hiện.
                ',
                'type_id' => '1',
                'image' => 'bido.jpg',
                'price' => '13000',
                'discount' => '0',
                'product_quanity' => '25',
                'created_at' => '2022-3-29',
            ],
            [
                'name' => 'Su su túi 500g (1 - 3 trái)',
                'description' => 'Thông tin sản phẩm
                Su su là một loại củ được nhiều chị em nội trợ chọn mua để chế biến thành các món ăn ngon cho gia đình. Quả su su có tính mát, lành tính, chứa nhiều chất dinh dưỡng có lợi cho sức khỏe như nước, protid, glucid, vitamin C,... Su su có thể chế biến thành nhiều món ăn ngon như: xào, súp, canh,...
                Su su (hay còn gọi là su le) là một loại thực phẩm thuộc lớp củ, quả thuộc họ Bầu, bí, cùng với dưa hấu, dưa chuột và bí. Cây su su thân leo có rễ phình thành củ. Lá to, bóng, hình chân vịt, có 5 thuỳ, tua cuốn chia 3-5 nhánh. Hoa nhỏ, đơn tính, cùng gốc, màu trắng vàng.

                Quả hình quả lê có cạnh lồi dọc và sần sùi, to bằng nắm tay, chứa một hạt lớn hình cầu. Quả su su có tính mát, lành tính, chứa nhiều chất dinh dưỡng có lợi cho sức khỏe như nước, protid, glucid, vitamin C. Trong quả và hạt su su giàu axit amino như axit aspartic axit glutamic, alanine, arginine, cysteine, phenylalanine, glycine, histidine, isoleucine, leucine, methionine (chỉ có ở quả), proline, serine, tyrosine, threonine và valine.
                Cách sơ chế su su
                Su su trước khi chế biến món ăn cần được gọt sạch vỏ, bổ làm đôi tách hạt cùng vùng cứng quanh hạt ra, rửa sạch lại với nước và tùy theo nhu cầu chế biến mà có thể cắt xu xu thành từng lát mỏng, khối vuông hay bào sợi.
                Các món ngon cùng với su su
                •	Thịt heo xào với su su và cà rốt.
                •	Su su xào lá lốt.
                •	Su su xào nghêu trứng.
                •	Cật heo xào su su và bông cải.
                •	Canh su su ngô ngọt hầm xương.
                •	Súp củ dền, su su, khoai tây.
                •	Su su xào ức gà.
                •	Su su xào tỏi.
                •	Su su luộc chấm chao
                Lưu ý: Sản phẩm nhận được có thể khác với hình ảnh về màu sắc và số lượng nhưng vẫn đảm bảo về mặt khối lượng và chất lượng.
                ',
                'type_id' => '1',
                'image' => 'susu.jpg',
                'price' => '10000',
                'discount' => '0',
                'product_quanity' => '35',
                'created_at' => '2022-3-29',
            ],
            [
                'name' => 'Khoai môn túi 500g (1 củ)',
                'description' => 'Thông tin sản phẩm
                Có hàm lượng chất xơ và nhiều loại vitamin, khoáng chất dồi dào rất cần thiết cho sức khỏe con người. Đặc biệt là nguồn cung cấp chất xơ, vitamin C, E, kali và magiê trong khoai môn đều có lợi mà hầu như mọi người đều thiếu các dưỡng chất này trong khẩu phần ăn hằng ngày.
                Khoai môn là một loại rau củ quen thuộc có thể chế biến thành nhiều món ăn mà chị em nội trợ nào cũng biết đến. Ban đầu, khoai môn chỉ được trồng nhiều ở châu Á nhưng càng ngày, với độ thơm ngon và bổ dưỡng, khoai môn đã lan rộng ra toàn thế giới.

                Khoai môn có lớp vỏ ngoài màu nâu, phần thịt bên trong màu trắng kết hợp với nhiều đốm màu tím nhạt.
                Công dụng của khoai môn
                Loài củ này giúp cung cấp nguồn chất xơ tuyệt vời dinh dưỡng tuyệt vời có thể kể đến như: chất xơ, Mangan, Vitamin B6, Vitamin E, Vitamin C, Đồng, Magnesium...
                Khoai môn có chứa nhiều Magnesium nên có khả năng chuyển hóa carbonhydrate và điều tiết quá trình sản xuất năng lượng, giúp cho cơ thể duy trì cân nặng. Bên cạnh đó, với lượng vitamin B6 dồi dào, đây là dưỡng chất có tác dụng ngăn ngừa các bệnh về tim mạch, đồng thời làm giảm huyết áp cho cơ thể. Điều đặc biệt ở loại khoai này là khả năng chống viêm nhiễm hiệu quả, phòng ngừa bệnh viêm đường tiểu.
                Các món ngon từ khoai môn
                Khoai môn có thể chế biến thành rất nhiều món ngon như: Sinh tố khoai môn, sườn non hầm khoai môn, chả giò nhân khoai môn, chè khoai môn nước cốt dừa, mứt khoai môn,…
                ',
                'type_id' => '1',
                'image' => 'khoaimon.jpg',
                'price' => '26500',
                'discount' => '0',
                'product_quanity' => '30',
                'created_at' => '2022-3-29',
            ],
            [
                'name' => 'Bắp mỹ túi 2 trái (từ 600g trở lên)',
                'description' => 'Thông tin sản phẩm
                Bắp Mỹ là một loại thực phẩm được trồng rất nhiều ở khắp nơi trên thế giới. Đây là một loại quả vừa ngon, lại có rất nhiều chất khoáng chất và vitamin. Bắp có thể chế biến thành nhiều món ăn ngon như: cơm bắp, chè bắp, sữa bắp,... bất kỳ món gì cũng tạo nên hương vị tuyệt hảo.
                Tổ chức Dinh dưỡng thế giới đã có công trình nghiên cứu và phân tích các thành phần dinh dưỡng trong bắp Mỹ. Theo đó, trong loại quả này có chứa đa dạng các khoáng chất và vitamin như protein, calo, đồng, sắt, selen, kẽm, niacin, A, E, C, B3, B1, thiamine…Ngoài ra, trong bắp Mỹ còn chứa cellulose, chất xơ rất tốt cho hệ tiêu hóa. Có thể nói đây là một loại ngũ cốc giàu dưỡng chất, hương vị lại thơm ngon, dễ ăn, dễ chế biến, cùng với màu sắc đẹp mang đến sự bắt mắt, hấp dẫn hơn rất nhiều cho món ăn.
                Sơ chế bắp
                Bắp mua về rửa sạch, tùy theo nhu cầu chế biến mà để nguyên trái hoặc tách hạt. Bách Hóa Xanh chỉ bạn mẹo tách hạt bắp cực nhanh, cùng tham khảo nào
                Bước 1: Chọn một chiếc thớt lớn để khi cắt hạt bắp, các hạt sẽ không bắn quá xa mà nằm gọn trong thớt để bạn dễ thu thập hạt bắp sau khi cắt.
                Bước 2: Dao nên chọn loại có kích cỡ vừa tay, được mài bén và bắp đã lột bỏ vỏ, râu.
                Bước 3: Đặt bắp nằm ngang trên thớt rồi 1 tay bạn giữ trái bắp, 1 tay cầm dao cắt tách hạt bắp khỏi cùi. Sau khi cắt 1 mặt của trái bắp, bạn đặt chính mặt đó nằm xuống thớt để tạo độ thăng bằng giúp việc cắt các mặt khác của bắp dễ dàng hơn.
                Bước 4: Sau khi cắt, trên dao thường dính sữa bắp, đừng rửa hoặc bỏ sữa này, bạn hãy dùng muỗng/đũa quét sữa bắp vào tô chứa hạt bắp và sử dụng luôn nó để nấu ăn, món ăn sẽ ngon, ngọt và bổ dưỡng hơn nhé.
                Món ngon từ bắp
                •	Cơm bắp thơm ngọt
                •	Chè bắp ngọt ngon
                •	Bắp luộc nhanh chóng tiện lợi
                •	Bánh phồng tôm nhân bắp đậu cà rốt lạ miệng
                •	Súp tôm bắp ngon ngất ngây
                •	Sữa bắp dinh dưỡng
                Lưu ý: Sản phẩm nhận được có thể khác với hình ảnh về màu sắc và số lượng nhưng vẫn đảm bảo về mặt khối lượng và chất lượng
                ',
                'type_id' => '1',
                'image' => 'bapmy.jpg',
                'price' => '1500',
                'discount' => '0',
                'product_quanity' => '20',
                'created_at' => '2022-3-28',
            ],
            [
                'name' => 'Củ sắn túi 1kg (3 - 5 củ)',
                'description' => 'Thông tin sản phẩm
                Củ sắn là một loại củ rất quen thuộc với mọi gia đình. Phần thịt của củ sẵn khá ngọt, nhiều nước và rất giòn, chứa nhiều khoáng chất như: sắt, photpho, canxi và các vitamin A, C, B…. Thông thường người ta sẽ dùng củ sắn để ăn sống hoặc chế biến thành nhiều món ăn như: xào, luộc hay nấu canh,...
                Củ sắn hay còn gọi là củ đậu, đây là một loại rau củ được trồng rất nhiều khắp thế giới. Củ sắn có kích thước to, tròn và trông khá giống với con quay, thịt chắc và nặng, có lớp vỏ xơ dai màu vàng. Phần thịt của củ sẵn khá ngọt, nhiều nước và rất giòn, chấm với muối tôm và ướp lạnh ngon vô cùng.

                Thông thường người ta sẽ dùng củ sắn để ăn sống hoặc chế biến thành nhiều món ăn khác nhau như: xào, luộc hay nấu canh,...
                Công dụng của củ sắn đối với sức khoẻ
                Củ sắn có vị ngọt nhẹ, thanh mát, có chứa nhiều tinh bột, đường glucose, protein và gần 90% là nước cùng các loại khoáng chất khác như sắt, photpho, canxi và các vitamin A, C, B…
                Củ sắn chứa rất nhiều chất dinh dưỡng tốt cho kể thể, mang lại lợi ích rất nhiều có thể kể đến như: tốt cho hệ tiêu hoá, bồi bổ sức khoẻ cho tim mạch và tăng cường hệ miễn dịch, hỗ trợ giảm cân và đẹp da,...
                Cách chọn mua củ sắn
                Để chọn được củ sắn ngon, ngọt, bạn nên lựa các củ có kích cỡ nhỏ và vừa, vỏ láng, màu nâu sáng, không có chỗ nào trên thân củ bị hư thối.
                Nếu bạn muốn ăn sống thì hãy chọn những củ to nhưng những củ này cũng khá cứng đấy.

                Kích thước của củ sắn sẽ tương ứng với trọng lượng, nếu củ sắn to nhưng nhẹ chắc chắn là củ này được nằm ở dưới đất lâu ngày khiến lượng nước bay hơi khá nhiều.
                ',
                'type_id' => '1',
                'image' => 'cusan.jpg',
                'price' => '16500',
                'discount' => '0',
                'product_quanity' => '20',
                'created_at' => '2022-4-3',
            ],
            [
                'name' => 'Cà chua bi hộp 300g',
                'description' => 'Thông tin sản phẩm
                Cà chua bi là loại thực phẩm dinh dưỡng, tốt cho sức khỏe được nhiều người chọn lựa. Cà chua bi hộp 300g to trái, căng mọng có thể dùng ăn chơi hoặc là nguyên liệu cho những món ăn ngon khác. Cà chua bi giúp đẹp da, sáng mắt là thực phẩm nên sử dụng thường xuyên
                Cà chua bi là giống cà chua có kích thước nhỏ, hình tròn hoặc hình oval, giàu chất xơ và dinh dưỡng. Khác với cà chua thông thường, cà chua bi có vị chua nhưng ngọt hơn, vì thế rất thích hợp để ăn sống hoặc chế biến các món salad hoặc nướng cùng với các món BBQ,... Đặc biệt, cà chua bi còn là một loại quả mang đến nhiều chất xơ, chất chống lão hóa, vitamin C cùng các khoáng chất rất có lợi cho sức khỏe và làm đẹp.

                Xem thêm: Lợi ích của cà chua đối với sức khỏe.
                Cách sơ chế cà chua bi
                Sau khi mua về, bạn mang cà chua rửa sạch với nước hoặc nước muối pha loãng để diệt vi khuẩn. Sau đó để ráo nước và chế biến thành các món ăn
                Cách bảo quản cà chua bi
                - Bảo quản cà chua trong tủ lạnh.
                - Chế biến thành món sốt cà để giữ lâu hơn
                Các món ăn chế biến từ cà chua bi
                •	Xiên cùng với thịt heo, thịt bò nướng, hải sản nướng và các loại củ khác.
                •	Canh chua cá tra chua cay, đúng vị miền Tây.
                •	Giảm cân cùng nước ép, sinh tố cà chua.

                Lưu ý: Sản phẩm nhận được có thể khác với hình ảnh về màu sắc và số lượng nhưng vẫn đảm bảo về mặt khối lượng và chất lượng. Tham khảo thêm sản phẩm: Cà chua beef túi lưới 500g.
                ',
                'type_id' => '1',
                'image' => 'cachua.jpg',
                'price' => '15000',
                'discount' => '0',
                'product_quanity' => '35',
                'created_at' => '2022-4-3',
            ],
            [
                'name' => 'Cam sành túi 1kg (3 - 4 trái)',
                'description' => 'Thông tin sản phẩm
                Cam sành túi 1kg (3-5 trái) trái to, cầm chắc tay, khi ăn sẽ cảm nhận được vị chua chua ngọt ngọt, giàu vitamin C tốt cho cơ thể. Cam sành là loại trái cây ưa thích của rất nhiều người
                Cam là loại trái cây được nhiều người yêu thích. Cam có rất nhiều loại khác nhau như: cam canh, cam xoàn, cam Vinh,.. trong đó cam sành là một trong những loại cam ngon và nổi tiếng ở Việt Nam.
                Cam sành có lớp vỏ dày, sần sùi giống như bề mặt mảnh sành và màu lục nhạt. Múi thịt có màu cam vị ngọt và thơm. Để chọn lựa được những quả cam sành ngon bạn nên lựa những quả cầm nặng tay, có màu xanh bóng. Ngoài ra, bạn cũng có thể tham khảo thêm bài viết cách chọn cam sành ngon.
                Cam có tác dụng tốt cho cơ thể do chứa nhiều thành phần như vitamin, các chất dinh dưỡng và khoáng chất. Ngoải ra, cam còn có nhiều công dụng làm đẹp thần kì được rất nhiều chị em phụ nữ áp dụng.
                Bên cạnh việc sử dụng cam làm nước cam ép hoặc ăn trực tiếp, cam còn được sử dụng trong nhiều món ăn khác nhau như: mứt cam, rau câu cam, salad cam,...
                Lưu ý: Sản phẩm nhận được có thể khác với hình ảnh về màu sắc và số lượng nhưng vẫn đảm bảo về mặt khối lượng và chất lượng.

                ',
                'type_id' => '2',
                'image' => 'camsanh.jpg',
                'price' => '39000',
                'discount' => '0',
                'product_quanity' => '40',
                'created_at' => '2022-4-4',
            ],
            [
                'name' => 'Táo Juliet Pháp hộp 1kg (5-7 trái)',
                'description' => 'Thông tin sản phẩm
                Táo Juliet Pháp với quả to vừa phải, hình tròn tròn bầu xinh xắn, với lớp vỏ đỏ xen vàng vô cùng sang trọng, thích hợp mua ăn, mua tặng biếu. Táo Juliet nhập khẩu với hương vị thơm ngon, giòn ngọt, được nhiều người ưa chuộng.
                Táo Juliet là loại táo có vỏ màu đỏ sậm trên nền vàng nhạt. Thịt táo màu trắng, sắc nét, độ ngọt cân bằng giữa đường và axit. Cây táo Juliet Organic có đặc tính rất khỏe mạnh, có khả năng tự nhiên chống lại căn bệnh đóng vảy, một bệnh thuộc dạng nấm nguy hại trong nông nghiệp. Do đó, đây là loại trái cây được nhiều người chọn lựa.
                Dinh dưỡng của táo Juliet
                Táo Juliet có chứa nhiều chất dinh dưỡng như vitamin C, kẽm, chất xơ… làm tăng cường hệ miễn dịch, tăng sức đề kháng. Bên cạnh đó, táo Juliet chất chống oxy hóa cũng có trong thành phần dinh dưỡng của táo, do đó ăn táo mỗi ngày cũng góp phần làm giảm nguy cơ mắc bệnh liên quan đến bệnh tim mạch, thần kinh, ngừa ung thư.
                THƯỞNG THỨC TÁO ĐÚNG CÁCH
                Táo là giống táo chứa hàm lượng dinh dưỡng cao, vì thế bạn nên thưởng thức cả phần vỏ và phần thịt. Táo sau khi mua về nên rửa sạch phần lớp vỏ bên ngoài bằng nước muối hoặc nước rửa rau củ quả đa năng để đảm bảo phần vỏ đã được làm sạch các dư lượng chất bảo quản,...
                Bên cạnh ăn trực tiếp, táo cũng có thể chế biến thành nhiều món khác nhau như: bánh pie táo, salad trái cây,...
                Lưu ý: Sản phẩm nhận được có thể khác với hình ảnh về màu sắc và số lượng nhưng vẫn đảm bảo về mặt khối lượng và chất lượng.
                ',
                'type_id' => '2',
                'image' => 'tao.jpg',
                'price' => '104000',
                'discount' => '0',
                'product_quanity' => '35',
                'created_at' => '2022-4-4',
            ],
            [
                'name' => 'Lê - ngọt (SINGO) hộp 1kg (3-5 trái)',
                'description' => 'Thông tin sản phẩm
                Giống lê Singo nhập khẩu Trung Quốc (có giấy chứng nhận nhập khẩu).Đảm bảo tiêu chuẩn xuất nhập khẩu toàn cầu. Bảo quản tươi ngon đến tận tay khách hàng. Quả to tròn, vỏ màu vàng đậm, thịt bên trong trắng phau, ít hạt Lê có vị ngọt thanh mát, rất giòn và mọng nước
                Lê Singo Trung Quốc từ lâu đã nổi tiếng về độ giòn, ngọt và kích thước "khủng". Mỗi quả lê có thể nặng từ 600g đến 1kg và rất được ưa chuộng tại nhiều nước trên thế giới.
                Loại lê này không chỉ là loại trái cây nhập khẩu thanh mát, thơm ngon mà còn có rất nhiều công dụng quý giá như:
                - Có lợi cho sức khoẻ nhờ giàu vitamin và chất xơ
                - Dùng làm gia vị nêm nhờ có vị ngọt thanh mát
                - Cũng là một vị thuốc chữa các bệnh về đường hô hấp, tiêu đờm, giảm ho, giải cảm hiệu quả
                •	Lê là loại trái cây chứa ít calo. Một quả lê Singo cỡ vừa (300 - 450g) chứa khoảng trên 50kcal tương đương với việc bạn đi bộ 1km
                •	Trong quả lê có chứa nhiều chất xơ, vitamin C và vitamin K, vitamin PP, canxi, phốt-phô, betacaroten, axit folic rất tốt cho hệ tiêu hoá và hệ xương
                •	Giúp làm giảm lượng cholesterol trong máu
                •	Giàu chất chống oxy hoá có khả năng ngăn ngừa bệnh tim mạch
                •	Tác dụng tiêu đờm, giảm ho, kháng viêm hiệu quả
                •	Lê có chỉ số đường huyết thấp (GI=38) và chứa chất anthocyanin, giúp hạ đường huyết và cân bằng lượng đường trong máu
                •	Ăn lê còn giúp thanh nhiệt cơ thể
                •	Lượng chất xơ và vitamin trong quả lê được xem là "thần dược" cho nhan sắc của phái đẹp
                Tìm hiểu: Nước ép lê có tác dụng gì với trẻ nhỏ?
                Bảo quản lê Singo
                - Đối với những quả lê chưa chín kỹ, bạn có thể bảo quản ở nhiệt độ phòng trong vài ngày để lê nhanh chín hơn.
                - Với lê đã chín ngon mà không dùng hết, bạn nên bảo quản trong ngăn mát tủ lạnh
                - Lê sau khi gọt vỏ cần dùng ngay hoặc bảo quản lạnh tối đa 24h
                Lưu ý: Do lê có tính hàn nên người bị bệnh đau lạnh bụng, đi lỏng không nên dùng, không nên ăn lê bị dập nát để tránh mắc bệnh đường ruột.
                Ngoài thưởng thức trực tiếp, bạn có thể chế biến lê Singo thành nhiều món như: salad lê rau quả, lê chưng đường phèn, ướp thịt ba chỉ nướng kiểu Hàn Quốc, nấu chè khúc bạch,…
                ',
                'type_id' => '2',
                'image' => 'le.jpg',
                'price' => '84000',
                'discount' => '0',
                'product_quanity' => '35',
                'created_at' => '2022-4-4',
            ],
            [
                'name' => 'Nho xanh nhập khẩu hộp 500g',
                'description' => 'Thông tin sản phẩm
                Nho xanh là loại trái cây tươi nhập khẩu cao cấp từ Nam Phi và Úc. Đạt tiêu chuẩn xuất khẩu toàn cầu. Bảo quản tươi ngon đến tận tay khách hàng. Quả nho màu xanh, dáng tròn, trái vừa ăn. Vỏ mỏng, không hạt, vị ngọt đậm, thịt chắc, giòn, tươi mát.

                ',
                'type_id' => '2',
                'image' => 'nhoxanh.jpg',
                'price' => '72000',
                'discount' => '0',
                'product_quanity' => '40',
                'created_at' => '2022-4-5',
            ],

            [
                'name' => 'Xoài cát Hoà Lộc túi 1kg (1-2 trái)',
                'description' => 'Thông tin sản phẩm
                Loại trái cây giàu chất xơ, vitamin, khoáng chất thiết yếu giúp cung cấp chất dinh dưỡng cho cơ thể con người và mang lại nhiều lợi ích tuyệt vời cho hệ tiêu hóa, tim mạch, giúp mắt sáng, làm đẹp da. Xoài cát Hòa Lộc có vị ngọt thanh dễ chịu, thịt dày, ít xơ và có độ dẻo lý tưởng
                Trong các loại xoài ngon ở nước ta thì không thể không nhắc đến xoài cát Hoà Lộc, đây được xem là loại trái cây nội địa đặc sản của miền Tây bởi hương vị thơm ngon, màu sắc bắt mắt, nguồn dinh dưỡng cao. Không chỉ nổi tiếng ở trong nước, xoài cát Hoà Lộc còn là loại trái cây xuất khẩu top đầu trong các loại hoa quả sạch trên thế giới.
                Xoài cát Hoà Lộc có kích thước cũng khá to, trung bình mỗi trái sẽ rơi vào khoảng 500 - 700g, khi chín vỏ sẽ vàng tươi, đầu nhọn và rất thơm. Khi chín, vị ngọt thơm cũng sẽ rất khác biệt với các loại xoài khác trên thị trường. Hạt xoài thì dẹp, phần thịt thì ngọt, không xơ mà lại rất chắc, chắc chắn khi thử qua một lần, bạn sẽ nhớ mãi hương vị này cho mà xem. Để chọn được những quả xoài ngon thì cách chọn xoài cũng rất là cần thiết đó nha.

                Xoài có tác dụng vàng cho cơ thể có thể kế đến như chứa hàm lượng dinh dưỡng và vitamin dồi dào như: Kali, Cacbohydrat, chất xơ, Đường, Protein, Vitamin, Vitamin, Canxi, Sắt , Vitamin B1, Vitamin B6, Magiê,...
                Khi mua về thì bạn có thể gọt vỏ và ăn ngay hoặc chế biến thành một số món ngon khác như: xoài dầm sữa chua, panna cotta xoài, nước ép xoài, chè xoài bột báng,...

                Mua ngay trái cây Bách Hóa XANH các loại với vô số sản phẩm giá tốt, chất lượng và an toàn
                Lưu ý: Sản phẩm nhận được có thể khác với hình ảnh về màu sắc và số lượng nhưng vẫn đảm bảo về mặt khối lượng và chất lượng.
                ',
                'type_id' => '2',
                'image' => 'xoaicat.jpg',
                'price' => '70000',
                'discount' => '0',
                'product_quanity' => '20',
                'created_at' => '2022-4-7',
            ],
            [
                'name' => 'Dưa lưới tròn ruột cam trái từ 1.3kg trở lên',
                'description' => 'Thông tin sản phẩm
                Là loại trái cây được rất nhiều người ưa thích vì màu sắc đẹp mắt và vị ngon ngọt, mang giá trị dinh dưỡng cao và nhiều công dụng tuyệt vời cho sức khỏe như ngừa ung thư, bổ mắt, chống viêm khớp và làm đẹp da… Dưa lưới tại Bách hoá XANH với vị ngọt vừa phải, giúp người dùng giải khát trong ngày hè.
                Dưa lưới tròn ruột cam là một trong những giống dưa lưới được nhiều người ưa chuộng. Đặc điểm của giống dưa này là quả có dáng tròn, vỏ dày có hình gân lưới bên ngoài. Bên trong có phần thịt và hạt dưa màu đỏ cam, giòn ngọt, thanh mát. Đây là loại trái cây được yêu thích bởi màu sắc đẹp mắt và vị ngon ngọt. Ngoài ra, dưa lưới có giá trị dinh dưỡng cao và nhiều công dụng tuyệt vời cho sức khỏe như ngừa ung thư, bổ mắt, chống viêm khớp và làm đẹp da…
                Xem thêm: Bí quyết chọn mua dưa lưới
                CÔNG DỤNG CỦA DƯA LƯỚI
                •	Chống oxy hóa ngừa ung thư và lão hóa
                •	Giàu folate và vitamin nhóm B, rất cần thiết cho sự phát triển của thai nhi và ngừa bệnh thiếu máu, giảm nguy cơ bệnh tật cho não, dị tật thần kinh bẩm sinh và chậm phát triển ở trẻ em.
                •	Giàu nước và chất xơ, giúp ngăn ngừa táo bón, thúc đẩy và duy trì hệ tiêu hóa khỏe mạnh.
                •	Ngăn ngừa sự oxy hóa các khớp xương, giảm viêm nhờ chất phytochemical có trong dưa.
                •	Giúp cơ thể giải độc, điều tiết tốt hơn, ngoài ra còn có tác dụng bảo vệ da khỏi tia UV.
                ',
                'type_id' => '2',
                'image' => 'dualuoi.jpg',
                'price' => '69000',
                'discount' => '0',
                'product_quanity' => '20',
                'created_at' => '2022-4-7',
            ],
            [
                'name' => 'Bưởi da xanh trái từ 1.7kg trở lên ',
                'description' => 'Thông tin sản phẩm
                Bưởi da xanh là một trong những đặc sản nổi tiếng của Việt Nam. Loại bưởi này không chỉ ngon, ngọt mà còn mang lại cho con người nhiều công dụng tốt cho sức khoẻ như cung cấp nguồn vitamin dồi dào. Bưởi da xanh thích hợp cho những ngày nắng nóng với nhiều cách chế biến khác nhau.
                Bưởi da xanh là loại trái cây được trồng phổ biến nhất ở tỉnh Bến Tre. Đúng với tên gọi của loại bưởi này, bưởi có hình cầu, vỏ màu xanh khi chín thì mới chuyển sang xanh hơi vàng một chút. Bưởi da xanh này là múi có màu hồng đỏ rất bắt mắt mang vị ngọt dịu, không chua và những tép bưởi rất dễ tróc vỏ, chính vì điều này làm cho loại bưởi này rất được nhiều người yêu thích.

                Xem thêm: Cách phân biệt bưởi da xanh và bưởi 5 roi
                CÔNG DỤNG CỦA BƯỞI
                •	Giúp thông mũi, miệng, sảng khoái
                •	Giúp long đờm, giữ ấm bụng
                •	Nguồn cung cấp vitamin C dồi dào
                •	Giảm lượng cholesterol, phòng chống ung thư
                •	Dưỡng tóc, trị gàu và trị rụng tóc, hói đầu
                •	Dưỡng ẩm cho da, trị mụn, chống nắng, chống lão hóa
                •	Đuổi muỗi và làm sạch nhà cửa
                CÁC MÓN NGON TỪ BƯỞI
                Bưởi không chỉ là loại trái cây ăn trực tiếp mà còn có thể làm nguyên liệu cho việc chế biến nhiều món ăn ngon như
                •	Gỏi bưởi tôm khô
                •	Chè bưởi miền Tây
                •	Mứt vỏ bưởi,...
                Lưu ý: Sản phẩm nhận được có thể khác với hình ảnh về màu sắc và số lượng nhưng vẫn đảm bảo về mặt khối lượng và chất lượng.
                ',
                'type_id' => '2',
                'image' => 'buoidanxanh.jpg',
                'price' => '68000',
                'discount' => '0',
                'product_quanity' => '25',
                'created_at' => '2022-4-7',
            ],
        
            [
                'name' => 'Nho đen ngon nhập khẩu 500g',
                'description' => 'Thông tin sản phẩm
                Là loại trái cây tươi cao cấp, có quả thuôn dài, vỏ mỏng, màu đen sẫm, không hạt, rất ngọt và giòn. Nho đen được nhập khẩu trực tiếp từ Úc, đạt tiêu chuẩn xuất khẩu toàn cầu, loại sản phẩm này có giá trị dinh dưỡng cao, được cả trẻ em và người lớn đều thích
                Nho đen nhập khẩu Úc là loại trái cây tươi nhập khẩu cao cấp, có quả thuôn dài, vỏ mỏng, màu đen sẫm, không hạt, rất ngọt và giòn. Sản phẩm nhập khẩu trực tiếp, đạt tiêu chuẩn xuất khẩu toàn cầu và được bảo quản tươi ngon đến tận tay khách hàng.

                Dinh dưỡng từ quả nho
                •	Nho chứa nhiều đường trái cây, chất xơ, vitamin C, A và B rất tốt cho sức khoẻ. Bổ sung quả nho vào thực đơn hàng ngày có thể giúp cải thiện một số vấn đề liên quan đến sức khoẻ như:
                •	Ngừa nguy cơ xơ cứng động mạch, giảm các triệu chứng viêm nhiễm, giảm huyết áp.
                •	Phòng chống các bệnh về tuổi già và ngăn ngừa ung thư.
                •	Loại trái cây này còn giúp tăng cường hệ miễn dịch, giảm nguy cơ mắc bệnh đường hô hấp.
                Lưu ý khi ăn nho
                •	Không nên ăn nho chung với sữa, cá...sẽ dễ gây đau bụng.
                •	Vì hàm lượng đường trong nho khá cao nên sử dụng quá nhiều.
                •	Nên rửa sạch bụi bẩn sau đó ngâm khoảng 20 - 30 phút rồi rửa sạch, nên ăn luôn vỏ để hấp thụ chất dinh dưỡng tối đa.
                •	Không rửa nho nếu không ăn ngay. Việc rửa nho sẽ làm mất lớp phấn tự nhiên bảo vệ quả, khiến nho nhanh chín, nước xâm nhập vào bên trong gây thối ủng quả.
                •	Cho nho vào túi nilong và buộc kín, cất trong ngăn mát tủ lạnh ở nhiệt độ từ 0 đến 5 độ C, tránh để gần các thực phẩm gây mùi như hành, tỏi
                ',
                'type_id' => '2',
                'image' => 'nhoden.jpg',
                'price' => '79500',
                'discount' => '0',
                'product_quanity' => '50',
                'created_at' => '2022-4-8',
            ],
            [
                'name' => 'Mận An Phước hộp 1kg (6-8 trái)',
                'description' => 'Thông tin sản phẩm
                Mận An Phước chín đỏ mọng đẹp mắt, màu sắc hấp dẫn, vị chua ngọt vừa phải dễ chịu . Mận An Phước chứa nhiều vitamin, chất xơ và khoáng chât nhưng không chứa thành phần chất béo tốt cho cơ thể. Cam kết bán đúng khối lượng, chất lượng và an toàn, bao bì kín đáo sạch sẽ vệ sinh
                Mận An Phước là giống mận được ghép từ mắt của giống Thongsamsri Thái Lan với gốc mận xanh đường Việt Nam. Mận An Phước có hình dạng cái chuông, đế to, màu vỏ đỏ sẫm không có gân xanh. Mận An Phước có vị ngon, ngọt, dễ ăn và chấm muối thì ngon tuyệt.
                Mận An Phước có vị rất ngon và hàm lượng dinh dưỡng cao không thua kém các loại trái cây khác. Mận có nhiều tác dụng tốt cho sức khoẻ như: tốt cho xương khớp, cải thiện trí nhớ, hỗ trợ tiêu hoá, ngăn ngừa ung thư,…
                Mận thường được sử dụng để ăn trực tiếp hoặc chế biến thành các món như: mận lắc, siro mận, kem mận sữa chua,...

                Mua ngay trái cây Bách Hóa XANH các loại với vô số sản phẩm giá tốt, chất lượng và an toàn
                Lưu ý: Sản phẩm nhận được có thể khác với hình ảnh về màu sắc và số lượng nhưng vẫn đảm bảo về mặt khối lượng và chất lượng.
                ',
                'type_id' => '2',
                'image' => 'man.jpg',
                'price' => '22500',
                'discount' => '0',
                'product_quanity' => '100',
                'created_at' => '2022-4-8',
            ],
            //
            [
                'name' => 'Nước ép mơ Nectar Rauch 200ml',
                'description' => 'Nước ép mơ Nectar Rauch 200ml với hương vị thơm ngon hấp dẫn, vị thanh ngọt, tươi mát từ quả mơ tươi giàu vitamin và dinh dưỡng cho cơ thể nguồn năng lượng sảng khoái. Sản phẩm nước ép chất lượng nhà Rauch nhập khẩu từ châu Âu cam kết an toàn và vệ sinh. Đóng chai 200ml tiện dụng
                ',
                'type_id' => '3',
                'image' => 'nuocepmo.jpg',
                'price' => '23.200',
                'discount' => '0',
                'product_quanity' => '100',
                'created_at' => '2022-4-10',
            ],
            [
                'name' => 'Nước ép ổi Juss 1 lít',
                'description' => 'Sản phẩm nước ép trái cây chất lượng thơm ngon của thương hiệu Juss đến từ Thổ Nhĩ Kỳ. Nước ép ổi Juss 1 lít từ quả ổi tươi ngon chứa nhiều vitamin và dinh dưỡng giúp giải khát nhanh chóng, cung cấp năng lượng cho cơ thể khỏe mạnh đồng thời mang lại hiệu quả làm đẹp da rất tốt
                ',
                'type_id' => '3',
                'image' => 'nuocepoi.jpg',
                'price' => '30000',
                'discount' => '0',
                'product_quanity' => '100',
                'created_at' => '2022-4-10',
            ],
            [
                'name' => 'Nước ép ổi hồng Rauch 1 lít',
                'description' => 'Nước ép ổi hồng Rauch 1 lít thơm ngon bổ dưỡng, giàu vitamin tốt cho sức khỏe. Sản phẩm nước ép chất lượng nhà Rauch nhập khẩu từ Áo, cam kết chính hãng và bảo đảm vệ sinh an toàn. Đóng hộp kín đáo, có nắp đậy, dễ dàng sử dụng và bảo quản
                ',
                'type_id' => '3',
                'image' => 'nuocoihong.jpg',
                'price' => '65000',
                'discount' => '0',
                'product_quanity' => '100',
                'created_at' => '2022-4-7',
            ],
            [
                'name' => 'Nước ép đào Rauch 1 lít',
                'description' => 'Nước ép đào Rauch 1 lít thơm ngon bổ dưỡng, giàu vitamin tốt cho sức khỏe với vị đào chua ngọt thanh mát, dễ chịu. Sản phẩm nước ép chất lượng nhà Rauch nhập khẩu từ Áo, cam kết chính hãng và bảo đảm vệ sinh an toàn. Đóng hộp kín đáo, có nắp đậy, dễ dàng sử dụng và bảo quản
                ',
                'type_id' => '3',
                'image' => 'nuocepdao.jpg',
                'price' => '78000',
                'discount' => '0',
                'product_quanity' => '100',
                'created_at' => '2022-4-7',
            ],
            [
                'name' => 'Nước ép táo Juss 1 lít ',
                'description' => 'Sản phẩm nước ép trái cây chất lượng thơm ngon của thương hiệu Juss đến từ Thổ Nhĩ Kỳ. Nước ép táo Juss 1 lít từ quả ổi tươi ngon chứa nhiều vitamin và dinh dưỡng giúp giải khát nhanh chóng, cung cấp năng lượng, có lợi cho sức khỏe đồng thời mang lại hiệu quả làm đẹp da rất tốt
                ',
                'type_id' => '3',
                'image' => 'nuoceptaojuss.jpg',
                'price' => '44000',
                'discount' => '0',
                'product_quanity' => '100',
                'created_at' => '2022-4-8',
            ],
            [
                'name' => 'Nước ép cam nguyên chất 100% Rauch 1 lít',
                'description' => 'Nước ép cam nguyên chất 100% Rauch 1 lít thơm ngon bổ dưỡng, giàu vitamin tốt cho sức khỏe với vị chua thanh mát sảng khoái cung cấp năng lượng cho ngày dài. Sản phẩm nước ép chất lượng nhà Rauch nhập khẩu từ Áo, cam kết chính hãng và bảo đảm vệ sinh an toàn.
                ',
                'type_id' => '3',
                'image' => 'nuocepcam.jpg',
                'price' => '75000',
                'discount' => '0',
                'product_quanity' => '100',
                'created_at' => '2022-4-8',
            ],
            [
                'name' => 'Nước ép táo cherry Naturalis Apple - Sour cherry 1 lít',
                'description' => 'Nước ép trái cây thơm ngon bổ dưỡng từ thương hiệu Naturalis được ưa thích tại Moldova. Nước ép táo cherry Naturalis Apple - Sour cherry 1 lít được làm từ những quả táo và cherry tươi ngon chứa nhiều vitamin và dinh dưỡng giúp giải khát nhanh chóng, bổ sung năng lượng cho cơ thể khỏe mạnh sảng khoái
                ',
                'type_id' => '3',
                'image' => 'nuoceptaocherry.jpg',
                'price' => '37000',
                'discount' => '0',
                'product_quanity' => '100',
                'created_at' => '2022-4-8',
            ],
            [
                'name' => 'Nước ép nho Juss 1 lít ',
                'description' => 'Sản phẩm nước ép trái cây chất lượng thơm ngon của thương hiệu Juss đến từ Thổ Nhĩ Kỳ. Nước ép nho Juss 1 lít từ quả nho tươi ngon chứa nhiều vitamin và dinh dưỡng giúp giải khát nhanh chóng, cung cấp năng lượng, có lợi cho sức khỏe đồng thời mang lại hiệu quả làm đẹp da rất tốt
                ',
                'type_id' => '3',
                'image' => 'nuocepnho.jpg',
                'price' => '30000',
                'discount' => '0',
                'product_quanity' => '100',
                'created_at' => '2022-4-8',
            ],
            [
                'name' => 'Nước ép lê Juss 1 lít ',
                'description' => 'Sản phẩm nước ép trái cây chất lượng thơm ngon của thương hiệu Juss đến từ Thổ Nhĩ Kỳ. Nước ép lê Juss 1 lít từ quả lê tươi ngon chứa nhiều vitamin và dinh dưỡng giúp giải khát nhanh chóng, cung cấp năng lượng cho cơ thể khỏe mạnh đồng thời mang lại hiệu quả làm đẹp da rất tốt
                ',
                'type_id' => '3',
                'image' => 'nuoceple.jpg',
                'price' => '30000',
                'discount' => '0',
                'product_quanity' => '100',
                'created_at' => '2022-4-7',
            ],

            [
                'name' => 'Hạt hướng dương vị dừa Chacheer gói 130g',
                'description' => 'Hạt hướng dương thơm ngon, với lớp vỏ ngoài được gia vị đậm đà, mặn mặn kích thích vị giác. Hương dừa khi ăn cũng khá là thơm. Hạt hướng dương vị dừa Chacheer gói 130g không bị hôi dầu, ăn vặt, giải trí rất phù hợp. Hạt khô Chacheer được sản xuất tại Thái Lan an toàn, chất lượng
                ',
                'type_id' => '4',
                'image' => 'hathuongduong.jpg',
                'price' => '20000',
                'discount' => '0',
                'product_quanity' => '50',
                'created_at' => '2022-4-6',
            ],
            [
                'name' => 'Hạt hạnh nhân tẩm wasabi Toms Farm túi 210g',
                'description' => 'Hạt hạnh nhân được tẩm wasabi lạ miệng, thơm thơm hấp dẫn. Hạt hạnh nhân tẩm wasabi Toms Farm gói 210g  khi ăn có vị béo béo của hạnh nhân cũng như chút the the của wasabi, kích thích vị giác. Hạt khô Toms Farm được sản xuất tại Hàn Quốc, phù hợp cho ăn vặt, thưởng trà
                ',
                'type_id' => '4',
                'image' => 'hathanhnhan.jpg',
                'price' => '124900',
                'discount' => '0',
                'product_quanity' => '50',
                'created_at' => '2022-4-5',
            ],
            [
                'name' => ': Hạt óc chó Chile Your Superfood gói 200g',
                'description' => 'Hạt khô các loại Your Superfood thơm ngon, tốt cho sức khỏe người dùng. Hạt óc chó Chile Your Superfood gói 200g được nhập khẩu từ Chile có tác dụng chống oxy hóa, giàu khoáng chất và vitamin tốt cho sức khỏe. Hạt mang vị béo đặc trưng mềm tan trong khỏe miệng ngay lần đầu chạm.
                ',
                'type_id' => '4',
                'image' => 'hatoccho.jpg',
                'price' => '126000',
                'discount' => '0',
                'product_quanity' => '60',
                'created_at' => '2022-4-6',
            ],
            [
                'name' => 'Hạt óc chó Chile Your Superfood gói 500g',
                'description' => 'Hạt khô Your Food an toàn chất lượng. Hạt óc chó Chile Your Superfood gói 500g mang giá trị dinh dưỡng cao, giúp ngăn ngừa các bệnh về tim mạch, tốt cho phụ nữ mang thai và em bé. Đặc biệt, đây là loại hạt khô giúp ngăn ngừa lão hóa da, giảm cân hiệu quả.
                ',
                'type_id' => '4',
                'image' => 'hatoccho500g.jpg',
                'price' => '326900',
                'discount' => '0',
                'product_quanity' => '30',
                'created_at' => '2022-4-6',
            ],
            [
                'name' => 'Hạt Macca Úc nứt vỏ Your Superfood hủ 360g',
                'description' => 'Hạt khô các loại Your Superfood thơm ngon, chất lượng là sự lựa hoàn hảo cho bạn. Hạt Macca Úc nứt vỏ Your Superfood hũ 360g với những hạt macca được chọn lựa kỹ và nhập khẩu từ Úc chất lượng, giàu dưỡng chất tốt cho sức khỏe. Hạt mang vị béo đặc trưng bùi bùi kích thích vị giác người dùng.

                ',
                'type_id' => '4',
                'image' => 'hatmaccauc.jpg',
                'price' => '130000',
                'discount' => '0',
                'product_quanity' => '25',
                'created_at' => '2022-4-6',
            ],
            [
                'name' => 'Hạt hạnh nhân tẩm yogurt Toms Farm túi 210g',
                'description' => 'Hạt hạnh nhân được tẩm yogurt lạ miệng, thơm thơm hấp dẫn. Hạt hạnh nhân tẩm yogurt Toms Farm túi 210g khi ăn có vị béo béo của hạnh nhân cũng như chút ngọt ngảo cảu yogurt, kích thích vị giác. Hạt khô Toms Farm được sản xuất tại Hàn Quốc, phù hợp cho ăn vặt, thưởng trà
                ',
                'type_id' => '4',
                'image' => 'hathanhnhantam.jpg',
                'price' => '142000',
                'discount' => '0',
                'product_quanity' => '30',
                'created_at' => '2022-4-5',
            ],
            [
                'name' => 'Đậu Hà Lan bao mực Tong Garden gói 50g',
                'description' => 'Hạt đậu Hà Lan ăn rất béo, thơm nhẹ và được bao bởi lớp bột hương mực thơm ăn không ngán. Đậu Hà Lan bao mực Tong Garden gói 50g tiện lợi, hấp dẫn thưởng thức, phù hợp cho xem phim, đọc sách và thưởng thức. Hạt Tong Garden có thể sử dụng trực tiếp hoặc làm nguyên liệu cho những món ăn khác.
                ',
                'type_id' => '4',
                'image' => 'dauhalan.jpg',
                'price' => '85000',
                'discount' => '0',
                'product_quanity' => '25',
                'created_at' => '2022-4-6',
            ],
            [
                'name' => 'Hạt dinh dưỡng Healthy Mix Your Superfood gói 500g',
                'description' => 'Hạt khô Your Superfood mang đến những loại hạt thơm ngon giàu dưỡng chất cần thiết, tốt cho sức khỏe người dùng. Hạt dinh dưỡng Healthy Mix Your Superfood gói 500g với sự kết hơp tuyệt vời của các loại hạt đã tạo nên một món ăn vặt ngon đúng điệu lại tốt cho sức khỏe người sử dụng. 
                ',
                'type_id' => '4',
                'image' => 'hatdinhduong.jpg',
                'price' => '298000',
                'discount' => '0',
                'product_quanity' => '25',
                'created_at' => '2022-4-6',
            ],
            [
                'name' => 'Hạnh nhân nguyên vỏ Noberasco gói 100g',
                'description' => 'Hạnh nhân béo thơm, giàu chất dinh dưỡng được giữ nguyên lớp vỏ lụa đem rang lên thơm phưng phức. Hạnh nhân nguyên vỏ Noberasco gói 100g có vị béo ngậy, rất hấp dẫn. Hạt khô Noberasco chất lượng, an toàn và tiện lợi, thích hợp ăn vặt hoặc làm bánh.
                ',
                'type_id' => '4',
                'image' => 'hanhnhan.jpg',
                'price' => '89000',
                'discount' => '0',
                'product_quanity' => '25',
                'created_at' => '2022-4-5',
            ],
            [
                'name' => 'BẠCH QUẢ TƯƠI 100G',
                'description' => 'Lá cây bạch quả chứa 2 loại chất hóa học: flavonoids và terpenoids là những chất có tiềm năng chống lại quá trình oxy hóa. Bạch quả là thuốc được lựa chọn để điều trị chóng mặt và ù tai, tổn thương võng mạc do căn nguyên thiếu máu, tắc nghẽn, chữa ho hen, đờm suyễn, đái đục, đái nhiều, đái són, đái dầm. Hoạt chất có trong Ginkgo biloba giúp cho máu chuyển lên não, giúp cho các tế bào thần kinh truyền thông với nhau, làm phục hồi trí nhớ, chống bệnh alzheimer.
                ',
                'type_id' => '4',
                'image' => 'bachqua.jpg',
                'price' => '24000',
                'discount' => '0',
                'product_quanity' => '25',
                'created_at' => '2022-4-5',
            ],

        ];

       
        foreach ($product as $value) {
            DB::table('product')->insert([
                'name' => $value['name'],
                'description' => $value['description'],
                'type_id' => $value['type_id'],
                'image' => $value['image'],
                'price' => $value['price'],
                'discount' => $value['discount'],
                'product_quanity' => $value['product_quanity'],
                'created_at' => $value['created_at'],

            ],

            );
        }
    }
}
