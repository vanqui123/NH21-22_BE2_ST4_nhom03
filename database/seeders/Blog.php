<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Blog extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
  
    public function run()
    {
        $categories = [
          
            [
            'title'=>'Chuối',
            'slug' =>'Loại chuối được nhiều khách hàng ưa chuộng. 
            Chuối chứa nhiều chất dinh dưỡng như kali, chất xơ, vitamin,... nên chuối có tác dụng tốt cho sức khoẻ như hỗ trợ giảm cân, hỗ trợ sức khoẻ tim mạch, cải thiện sức khoẻ của thận,...Cam kết đúng khối lượng, bao bì kín đáo, an toàn và bảo đảm hợp vệ sinh.
            Chuối là loại trái cây được nhiều người yêu thích và có rất nhiều loại chuối khác nhau như: chuối tiêu, chuối sứ, chuối tây,... Trong đó, chuối già giống Nam Mỹ là loại đang được nhiều người ưa chuộng hiện nay. Chuối già Nam Mỹ là giống chuối cấy mô, có nguồn gốc từ Nam Mỹ nên có chất lượng tốt và hương vị ngon, ngọt hơn hẳn so với các sản phẩm chuối khác.
            
            Loại trái cây nội địa này chứa nhiều chất dinh dưỡng như kali, chất xơ, vitamin,... nên chuối có tác dụng tốt cho sức khoẻ như: hỗ trợ giảm cân, hỗ trợ sức khoẻ tim mạch, cải thiện sức khoẻ của thận,... Bên cạnh đó, vỏ chuối còn có nhiều công dụng làm đẹp được nhiều chị em phụ nữ áp dụng
            Lợi ích của việc ăn chuối trước khi ngủ
            Ăn chuối trước khi ngủ sẽ mang đến những lợi ích vô cùng tốt cho sức khoẻ, chẳng hạn như:
            Dễ dàng vào giấc ngủ hơn
            
            Kiểm soát axit dạ dày
            
            Kiềm chế cơn thèm ngọt
            
            Tăng cường chất xơ,...
            Ngoài những lợi ích trên chuối còn được dùng để chế biến thành nhiều món ăn hấp dẫn khác nhau như:
             bánh chuối, chè chuối, bánh nậm nhân chuối,...
            Lưu ý: Sản phẩm nhận được có thể khác với hình ảnh về màu sắc và số lượng nhưng vẫn đảm bảo về mặt khối lượng và chất lượng.',
            'image' =>'chuoi.jpg',
            'created_at' =>'2022-4-1',
            
            ],
            [
            'title' => 'Dưa Hấu Đỏ',
            'slug' =>'Dưa hấu đỏ với thành phần chủ yếu là nước và các vitamin, khoáng chất cần thiết đặc biệt là ít calo và chất béo nên dưa hấu được xem là một sản phẩm thay thế cho nước uống thông thường. Giúp giải khát thanh nhiệt mà còn bổ sung nhiều chất dinh dưỡng cho cơ thể, giúp bạn tràn đầy năng lượng.
            Dưa hấu đỏ là loại trái cây với vị ngọt thanh mát và rất giàu các chất dinh dưỡng cần thiết cho cơ thể. Dưa hấu chứa hàm lượng nước rất cao khoảng 91% trong thành phần và đặc biệt là gần như không có các chất như protein, chất béo. Dưa hấu chứa một lượng lớn các loại vitamin như vitamin C, B5, A,.. có tác dụng chống oxy hoá, hỗ trợ điều trị các vấn đề về đường tiêu hoá, các vấn đề về da, ngăn ngừa tiểu đường, ung thư và tăng cường chức năng của hệ miễn dịch.
            Xem thêm: Cách chọn và phân biệt các loại dưa hấu
            Các lợi ích của dưa hấu với sức khỏe
            Dưa hấu còn rất giàu các loại axit amin như citrulline và lycopene. Thành phần citrulline có trong vỏ màu trắng bao quanh ruột dưa hấu có tác dụng làm giảm huyết áp và là chất cần thiết có các cơ quan như: thận, phổi, gan, hệ thống miễn dịch,...Còn với lycopene là một thành phần tạo ra màu đỏ tươi của dưa hấu và có tác dụng chống oxy hóa mạnh. Nó có tác dụng làm giảm nguy cơ mắc bệnh ung thư, ngăn ngừa nguy cơ mắc bệnh tim, mang lại nhiều lợi ích cho não bộ và góp phần trong việc cải thiện làn da và tóc của bạn.
            Thưởng thức dưa hấu đúng cách
            Trà dưa hấu mát lạnh
            Bingsu dưa hấu
            Salad dưa hấu
            Kem dưa hấu,...
            Dưa hấu là loại quả rất thích hợp để thưởng thức trong những ngày nắng nóng oi bức, chúng cung cấp hàm lượng nước và chất xơ dồi dào, giúp cơ thể xua tan cơn nóng, bù nước nhanh chóng. Tuy nhiên, ăn quá nhiều dưa hấu lại khiến cơ thể trở nên nóng trong người, khan tiếng,...
            
            Lưu ý: Sản phẩm nhận được có thể khác với hình ảnh về màu sắc và số lượng nhưng vẫn đảm bảo về mặt khối lượng và chất lượng.',
            'image' =>'duahaudo.jpg',
            'created_at' =>'2022-4-1',
            ],
            [
            'title' => 'Ôỉ',
            'slug' => 'Ổi Đà Loan là giống ổi này có vị ngọt man mát, hơi xốp, giòn, thơm nhè nhẹ,
             đặc biệt rất ít hạt cho cảm giăc ăn vô cùng thích thú. Trong ổi chứa nhiều vitamin giúp tăng cường miễn dịch, đẹp da, giảm cân,...Cam kết bán đúng khối lượng, chất lượng và an toàn, bao bì kín đáo sạch sẽ vệ sinh
            Ổi Đài Loan là một giống ổi vừa du nhập vào nước ta vài năm trở lại đây và mang nhiều ưu điểm nổi trội hơn so với những giống trái cây tươi ngon hiện có như quả to sáng bóng ăn rất giòn và ngọt đặc biệt là rất ít hạt. Giống ổi này có vị ngọt man mát, hơi xốp, giòn, thơm nhè nhẹ, ăn rất là thích thú. 
            Ổi ngon nhất là khi để lạnh, chấm muối ớt ăn giòn giòn rộp rộp đã miệng vô cùng.
            Loài trái cây này không những ngon mà lại còn ổi còn có rất nhiều lợi ích cho sức khoẻ, ổi rất giàu chất chống oxy hóa, 
            Vitamin C, Kali và chất xơ. Các dưỡng chất này sẽ là yếu tố làm nên lợi ích nhiều mặt về sức khỏe dành cho chúng ta. 
            Có thể kể đến một vài công dụng của ổi đối với sức khoẻ như: giảm đường huyết, giúp tim khoẻ mạnh, giảm cân, tăng cường hệ miễn dịch, đẹp da,...
            Cách chọn ổi cũng vô cùng quan trọng để bạn có thể chọn những quả ngon ngọt đó nha. Ổi sau khi mua về thì bạn có thể ăn ngay hoặc làm nước ép uống cũng rất mát.
            Mua ngay trái cây Bách Hóa XANH các loại với vô số sản phẩm giá tốt, chất lượng và an toàn
            Lưu ý: Sản phẩm nhận được có thể khác với hình ảnh về màu sắc và số lượng nhưng vẫn đảm bảo về mặt khối lượng và chất lượng.',
            'image' =>'oi.jpg',
            'created_at' =>'2022-4-1',
            ],
            [
            'title' =>'Cóc',
            'slug' => 'Là loại trái cây nhiệt đới có quả giòn, ngọt dịu, pha ít vị chua nhẹ nhàng dễ chịu,
             ăn trực tiếp hoặc làm ước ép đều rất thơm ngon và bổ dưỡng. Cóc lớn túi 500g tại Bách Hóa XANH được đóng gói cẩn thận, hợp vệ sinh giúp giữ nguyên chất lượng và bề ngoài sản phẩm. Cam kết bán đúng khối lượng
            Cóc là loại trái cây xích đạo và phát triển tốt ở vùng khí hậu nhiệt đới. 
            Quả cóc có vị chua chua thanh thanh là món ăn vặt yêu thích của nhiều chị em phụ nữ.',
            'image' =>'coc.jpg',
            'created_at' =>'2022-4-1',

            ],
            [
            'title' =>'Bơ',
            'slug' =>'Là một trong những loại bơ thuộc hàng ngon và chất lượng cao nhất. 
            Bơ sáp 034 cho quả to dài từ 20 đến 38cm, hạt nhỏ, thịt quả chắc có màu đẹp mắt, chứa nhiều dưỡng chất tốt cho sức khỏe. Ngoài ăn trực tiếp bơ cũng có thể dùng làm nguyên liệu chế biến ra nhiều món ăn ngon hấp dẫn
            Bơ 034 là loại trái cây cho năng suất cao, chất lượng quả vào loại ngon nhất trong những giống bơ sáp hiện nay. Vỏ quả có màu xanh bóng, láng. Quả có hình dáng thuôn dài với chiều dài từ 20- 27cm. Trọng lượng mỗi quả từ 300 đến 800g, hình dáng quả thon dài, hạt nhỏ. Quả thường có chiều dài từ 20- 38 cm. Một số vùng chăm sóc tốt quả có thể dài hơn. Vỏ quả cứng nên có thể dễ dàng bảo quản sau thu hoạch. Tỷ lệ thịt quả của bơ đạt 85%, thịt quả vàng, vị béo và không có xơ. Hạt quả nhỏ nên tỷ lệ thịt quả chiếm cao giúp hàm lượng chất béo trong quả đạt tối đa. Bơ dễ ăn, 
            có vị nhạt nhạt béo ngậy và tan trong miệng, dầm đường, đá ăn ngon vô cùng, giải nhiệt mùa hè.
            Cách sơ chế bơ 
            Mẹo bóc vỏ quả bơ để lấy được hết thịt bơ đơn giản, dễ làm.

            - Bơ rửa sạch với nước.
            - Dùng dao cắt một đoạn từ phần đỉnh quả bơ xuống dưới đáy. Tách đôi 2 miếng ra.
            - Khía một đường dao vào hột của bơ, xoay nhẹ dao để có thể nhấc được hột bơ lên.
            - Lột vỏ để lấy phần ruột.Các món ăn, đồ uống với bơ
            Làm món ăn dặm với bơ cho bé.
            Đổi vị bữa sáng với bánh mì nướng sốt bơ và sa tế tôm.
            Sinh tố bơ chuối, bơ mãng cầu, bơ sữa chua thơm ngon.
            Đầy đủ dưỡng chất với salad bơ cá hồi.
            Salad bơ thơm ngon, thích hợp cho người giảm cân
            Lưu ý: Sản phẩm nhận được có thể khác với hình ảnh về màu sắc và số lượng nhưng vẫn đảm bảo về mặt khối lượng và chất lượng.',
            'image' =>'bo.jpg',
            'created_at' =>'2022-4-1',
            
           
            ],
            [ 
            'title' => 'Bưởi Năm Roi',
            'slug' =>'Bưởi 5 roi là một trong những đặc sản nổi tiếng của Việt Nam. Loại bưởi này không chỉ ngon, ngọt mà còn mang lại cho con người nhiều công dụng tốt cho sức khoẻ như cung cấp nguồn vitamin dồi dào. Bưởi năm roi tại Bách hoá XANH thích hợp cho những ngày nắng nóng với nhiều cách chế biến khác nhau.
            Khác với bưởi da xanh, bưởi Năm Roi khoác lên mình vỏ ngoài hình trái lê có màu xanh ngả vàng khi chín rất đẹp mắt, đây là giống trái cây nổi tiếng được trồng nhiều ở một số tỉnh miền Tây Nam Bộ. Khi tách ra, bên trong múi có màu vàng khá bắt mắt, mang vị ngọt thanh và hơi chua nhẹ, một đặc điểm khác của loại bưởi này là tép tróc khỏi vách múi và bó chặt vào nhau. Giống bưởi Năm Roi thường không có hạt hoặc rất ít, đây chính là điểm đặc biệt khiến bưởi Năm Roi này là giống bưởi quý hiếm hơn so với các loại khác.
            
            CÔNG DỤNG CỦA BƯỞI
            Giúp thông mũi, miệng, sảng khoái
            Giúp long đờm, giữ ấm bụng
            Nguồn cung cấp vitamin C dồi dào
            Giảm lượng cholesterol, phòng chống ung thư
            Dưỡng tóc, trị gàu và trị rụng tóc, hói đầu
            Dưỡng ẩm cho da, trị mụn, chống nắng, chống lão hóa
            Đuổi muỗi và làm sạch nhà cửa
            CÁC MÓN NGON TỪ BƯỞI
            Bưởi không chỉ là loại trái cây ăn trực tiếp mà còn có thể làm nguyên liệu cho việc chế biến nhiều món ăn ngon như
            - Gỏi bưởi tôm khô
            - Chè bưởi miền Tây
            - Mứt vỏ bưởi,...
            Lưu ý: Sản phẩm nhận được có thể khác với hình ảnh về màu sắc và số lượng nhưng vẫn đảm bảo về mặt khối lượng và chất lượng.',
            'image' => 'buoinamroi.jpg',
            'created_at' =>'2022-4-1',
             ],
            [
            'title' =>'Khoai Tây',
            'slug' => 'Khoai tây trồng tại Lâm Đồng đã quá quen thuộc với mỗi chúng ta. Loại củ này được xuất hiện thường xuyên trên mâm cơm này có rất nhiều công dụng hữu ích. Nó không chỉ tốt cho sức khỏe, làm đẹp hiệu quả mà còn có rất nhiều tác dụng bổ ích khác. Khoai tây có thể chế biến thành canh, súp, hoặc chiên
            Khoai tây thuộc họ cà, là một loại củ đa năng có hàm lượng chất dinh dưỡng cao, vì vậy nhiều hộ gia đình tại Việt Nam đã lựa chọn khoai tây như một món ăn chính trong các bữa ăn hàng ngày. Sở hữu nguồn vitamin và khoáng chất phong phú, khoai tây mang lại nhiều lợi ích cho sức khỏe như kháng viêm, giảm đau, tăng cường hệ miễn dịch, kích thích tiêu hóa,...
             Khoai tây có vị bột bột, hầm lên ăn rất ngon, phù hợp cho các món ăn dặm của bé yêu.
             Cách sơ chế khoai tây
            Để lột vỏ khoai tây nhanh, bạn chỉ cần khứa 1 đường vòng quanh khoai tây, luộc sơ và lột vỏ.
            - Đầu tiên, bạn cần rửa sạch bùn bẩn trên củ khoai tây, sau đó dùng dao khứa nhẹ 1 đường vòng quanh vỏ, tốt nhất bạn nên chọn vị trí khứa ở ngay chính giữa khoai tây như trong hình 1 để lột vỏ dễ dàng hơn.
            - Sau khi khứa, bạn cho khoai tây vào nồi nước, luộc sơ trong 2 – 3 phút hoặc lâu hơn, luộc cho tới khi thấy vỏ hơi bong ra thì bạn tắt bếp.
            - Lấy khoai ra ngoài, chờ khoai nguội bớt thì lấy 1 tay giữ cố định củ trên thớt/kệ bếp và 1 tay nhẹ nhàng lột 1/2 vỏ củ khoai tây ra, sau đó, bạn lột tiếp ½ vỏ còn lại.
            - Sau khi lột vỏ, bạn nên cắt nhỏ, chế biến khoai tây ngay, không để lâu để tránh khoai tây chuyển màu vàng nâu, thâm đen.

            Các món ăn ngon với khoai tây
        - Súp gà khoai tây nhẹ nhàng với bữa sáng.
        - Bổ dưỡng, giảm cân với salad khoai tây.
        - Bánh khoai tây nướng phô mai nóng hổi, giòn rụm.
        - Lạ vị với khoai tây chiên bơ.
        Ngoài việc dùng để làm món ăn, khoai tây còn có công dụng chăm sóc da, đắp mặt nạ.
        Lưu ý: Sản phẩm nhận được có thể khác với hình ảnh về màu sắc và số lượng nhưng vẫn đảm bảo về mặt khối lượng và chất lượng.',
        'image' =>'khoaitay.jpg',
        'created_at' =>'2022-4-1',
            ],
            [
                'title' =>'Ớt Chuông Đỏ',
                'slug' =>'Ớt chuông đỏ trồng tại Lâm Đồng có kích thước to và có nhiều màu sắc khác nhau như: xanh, vàng, đỏ... Ớt chuông đỏ này không có vị cay gắt như các loại ớt thông thường khác mà có vị giòn nên thích hợp cho các món xào, ăn sống. Loại ớt này còn chứa nhiều khoáng chất và vitamin tốt cho cơ thể.
                Ớt chuông là giống ớt có quả to, phần thịt dày và giòn xốp. 
                Đặc biệt, ớt chuông là loại rau củ có sự đa dạng về màu sắc (gồm xanh, vàng, cam, đỏ và đen) cũng như hương vị và độ cay nồng khác nhau. Ớt chuông xanh có hương vị hăng khá đặc trưng, trong khi đó ớt màu đỏ và vàng thường có vị ngọt hơn. 
                Ớt chuông đỏ được sử dụng để làm dầu thơm và tương ớt khi bạn muốn giảm bớt vị cay.
                GIÁ TRỊ DINH DƯỠNG
            - Ớt chuông có 92% là nước, còn lại là các chất dinh dưỡng như Carb, Protein, Chất béo cùng các khoáng chất và vitamin như: Vitamin A, C, K1, Folate và Kali cùng nhiều chất chống oxy hóa khác.
             - Với hàm lượng vitamin A dồi dào cùng Lutein và Zeaxanthin, ớt chuông hỗ trợ giúp bảo vệ võng mạc khỏi các tác động oxy hóa, tránh khỏi các bệnh thoái hóa võng mạc, thoái hóa điểm vàng.
            - Ngoài ra ớt chuông sinh nhiệt và làm tăng tỷ lệ trao đổi chất, giúp đốt cháy calo, hỗ trợ giảm cân.
            Các vitamin A, C, K cùng hàm lượng lưu huỳnh có trong ớt chuông hỗ trợ hệ thống miễn dịch, bảo vệ tế bào khỏi quá trình oxy hoá, tăng cường khả năng hấp thụ và bổ sung chất sắt, ngăn ngừa ung thư.
            Với hàm lượng giá trị dinh dưỡng cao, ớt chuông mang đến rất nhiều lợi ích cho sức khoẻ.CÁC MÓN ĂN VỚI ỚT CHUÔNG
             Ớt chuông xào thịt bò.
            Mực xào ớt chuông.
            Trứng ốp la ớt chuông.
            Thêm vào các món salad
            Lưu ý: Sản phẩm nhận được có thể khác với hình ảnh về màu sắc và số lượng nhưng vẫn đảm bảo về mặt khối lượng và chất lượng.  ',
             'image' =>'otchuongdo.jpg',
            'created_at' =>'2022-4-1',
            ],
            [
                'title' =>'Bông Cải Xanh',
                'slug' =>'Bông cải xanh là một loại rau xanh quen thuộc và được rất nhiều người ưa chuộng.
                 Bông cải xanh được trồng tại Lâm Đồng không chỉ thơm ngon, dễ ăn mà còn mang lại rất nhiều lợi ích cho sức khoẻ. Bạn có thể tham khảo các món như bông cải xanh hấp, bông cải xanh xào hải sải, súp bông cải xanh,...
                Lợi ích dinh dưỡng
                Bên cạnh những tác dụng giảm viêm và chống oxy hóa, một số hợp chất trong bông cải xanh có thể giúp giảm tổn thương mãn tính của một số mô trong cơ thể. 
                Ngoài giàu dưỡng chất và vitamin, bông cải xanh hay còn được gọi là súp lơ, là loại rau xanh được nghiên cứu cho thấy tác dụng giảm nguy cơ ung thư ở một số cơ quan như ung thư vú, tuyến tiền liệt, dạ dày, thận, bàng quang.
                Cách sơ chế bông cải
                Chế biến bông cải không khó nhưng không phải ai cũng biết, sau đây là tuyệt chiêu tách bông cải chỉ bằng vài nhát dao

                Bước 1: Đầu tiên bạn cắt bỏ phần lá xanh của bông cải, tiếp đó bạn dùng dao cắt đôi búp bông cải, tiếp tục cắt chúng thành 4 phần bằng nhau.

                Bước 2: Đặt 1/4 bông cải lên thớt, dùng dao cắt rời phần cuống, bây giờ bạn đã có thể tách rời các búp nhỏ của bông cải ra nhanh chóng.

                Bước 3: Tương tự bạn tiếp tục với các phần còn lại. Bạn nhớ phải rửa bông cải trước khi bắt đầu cắt tránh sâu bọ cũng như bụi bẩn còn bám trên bông.

                Các món ngon từ bông cải
                Cùng Bách Hóa Xanh khám phá những món ăn từ loại rau đầy dinh dưỡng này nhé

                Soup bông cải dinh dưỡng cho bé
                Hàu xào bông cải xanh mướt
                Thịt bò xào bông cải đầy bổ dưỡng,...
                Tuy nhiên để chế biến súp lơ đúng chuẩn thì chúng ta nên hấp cách thủy để khoáng chất có lợi không bị hao hụt nhé.',
                'image' =>'bongcaixanh.jpg',
                'created_at' =>'2022-4-1',
            ],
            [
                'title' =>'Đậu Bắp',
                'slug' => 'Đậu bắp là loại quả chứa nhiều chất xơ, giàu dinh dưỡng, nhiều vitamin,…Đậu bắp luôn rất được ưa chuộng để chế biến những món ăn hàng ngày. Những thành phần dưỡng chất trong đậu bắp rất hữu ích cho hệ tiêu hóa, tim mạch, chống ung thư, tốt cho da và mắt,...
                Đậu bắp là một loại quả với tên gọi khác mướp tây hay bắp còi, là một trong loại thực phẩm quen thuộc được sử dụng trong các bữa ăn hằng ngày. Đậu bắp dễ ăn, chứa nhiều chất xơ, giàu dinh dưỡng, nhiều vitamin,…đều là những thành phần dưỡng chất hữu ích cho hệ tiêu hóa, tim mạch, chống ung thư, tốt cho da và mắt,... 
                Ngoài việc trở thành món ăn trong các bữa ăn hằng ngày thì đậu bắp còn được chế biến thành nước để uống. Nước đậu bắp rất tốt cho các bà bầu, hạn chế khả năng dị tật của thai nhi tốt.Cách sơ chế đậu bắp không bị nhớt
                Nên chọn quả non.
                Cắt qua 2 đầu của cuống đậu.
                Ngâm nước muối loãng và rửa sạch nhiều lần.
                Luộc xong ngâm nước lạnh cho hết nhớt.
                Một số món ăn đủ chất và dinh dưỡng
                Ngoài món luộc thì đậu bắp còn được chế biến nhiều món ngon đa dạng như: 
                Giải nhiệt mát người với canh chua đậu bắp.
                Đậu bắp muối chua.
                Ngon bổ dưỡng với đậu bắp xào thịt bò.
                Đậu bắp xào bún khô đơn giản, thanh tịnh.
                Lưu ý: Sản phẩm nhận được có thể khác với hình ảnh về màu sắc và số lượng nhưng vẫn đảm bảo về mặt khối lượng và chất lượng.',
                'image' =>'daubap.jpg',
                'created_at' =>'2022-4-1',
            ],
            [
                'title' =>'Bạc Hà',
                'slug' =>'Môn to, dọc mùng, ráy dọc mùng là những tên gọi khác của môn bạc hà, một loại cây rau gia vị không thể thiếu trong những bát canh chua đậm vị, thơm ngon. Vị ngọt, giòn giòn, tính mát của bạc hà giúp tạo cảm giác ngon miệng, kích thích vị giác người ăn.
                Bạc hà hay còn gọi là dọc mùng, môn bạc hà. Phần bẹ lá được dùng làm rau để chế biến món ăn hay làm thuốc. Trong bữa ăn, dọc mùng giúp đỡ ngán thịt cá trong canh, các món xào. Các món ăn từ dọc mùng rất thích hợp đối với bệnh nhân béo phì, tăng huyết áp, đái tháo đường, gút...
                
                Cách sơ chế bạc hà
                Do bạc hà có thành phần gây gứa, nên để ăn bạc hà không bị ngứa chúng ta phải sơ chế bạc hà đúng cách:
                
                - Đầu tiên, bạn cần rửa sạch bẹ bạc hà để loại bỏ bùn đất. Bạn tước bỏ hết phần xơ bên ngoài. Sau đó cắt hết phần cong bên trong của bạc hà.
                - Tiếp theo, bạn thái bạc hà thành miếng vừa ăn và trộn đều với một thìa muối hạt để khoảng 15 phút.
                - Sau đó, bạn cho nước lạnh vào chậu đựng bạc hà ngâm muối và rửa sạch rồi dùng tay vò, vắt nhẹ cho ráo nước (nên dùng găng tay nilon để vắt). Tiếp theo, bạn đun nước sôi và chần bạc hà.
                - Bạc hà ngâm 2 lần với nước muối đậm rồi ngâm xả vài lần với nước lạnh đảm bảo sẽ hết ngứa.
                - Ăn sống, nấu chín tùy theo món bạn chế biến.
                
                Một số món ngon với bạc hà
                Bạn có thể dùng bẹ lá bạc hà để làm nộm, gỏi, luộc, xào, hầm, nấu canh chua, lẩu chua, muối chua…đều rất ngon.
                - Bún thịt heo dọc mùng.
                - Bạc hà muối chua.
                - Canh chua dọc mùng.
                - Nộm bạc hà bóp lá chanh.
                Lưu ý: Sản phẩm nhận được có thể khác với hình ảnh về màu sắc và số lượng nhưng vẫn đảm bảo về mặt khối lượng và chất lượng.',
                'image' =>'bacha.jpg',
                'created_at' =>'2022-4-1',
            ],
            [
                'title' => 'Cần Tây',
                'slug' => 'Cần tây của Bách hóa Xanh được nuôi trồng tại 
                Đà Lạt và đóng gói theo những tiêu chuẩn nghiêm ngặt, bảo đảm các tiêu chuẩn xanh - sach, chất lượng và an toàn. Vị giòn ngọt, có chút hăng nhẹ nhưng cần tây hỗ trợ rất tốt cho người đang ăn kiêng giảm cân. Thường dùng trong các món xào hoặc ép lấy nước.
                Cần tây là loại rau quen thuộc trong bữa ăn hàng ngày, không chỉ giúp món ăn thêm phần thơm ngon mà còn mang lại nhiều lợi ích cho sức khỏe. Cần tây có một mùi thơm vô cùng đặc trưng, giúp làm dậy mùi nhiều món ăn. Theo chuyên gia dinh dưỡng Megan Ware, trong cần tây chứa gần 95% nước cùng nhiều vitamin, protein và chất khoáng. Đặc biệt, hàm lượng vitamin K trong cần tây rất cao. Bên cạnh đó, cần tây chứa hàm lượng chất xơ phong phú, 
                giúp ích cho quá trình đào thải độc tố ra ngoài cơ thể.Sơ chế cần tây
                Cần tây sau khi mua về mang đi rửa sạch, rồi cắt thành từng khúc nhỏ to tùy theo sở thích hoặc tùy theo yêu cầu của món cần chế biến.
                
                Món ngon từ cần tây
                Detox ngon miệng với nước ép cần tây táo xanh
                Da đẹp với nước ép cần tây, cà rốt và táo
                Mực xào cần tây đơn giản thơm ngon
                Thịt bò xào cần tây dinh dưỡng
                Sinh tố cần tây cực dễ uống
                Cần tây gói 500g 1
                
                Lưu ý: Sản phẩm nhận được có thể khác với hình ảnh về màu sắc và số lượng nhưng vẫn đảm bảo về mặt khối lượng và chất lượng',
                'image' => 'cantay.jpg',
                'created_at' =>'2022-4-1',
            ]
        ];
    
        foreach($categories as $value){
            DB::table('blog')->insert([
                'title'=>$value['title'],
                'slug'=>$value['slug'],
                'image'=>$value['image'],
                'created_at'=>$value['created_at'],
            ],
            );
        }
    }
}
    