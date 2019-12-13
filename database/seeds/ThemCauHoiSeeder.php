<?php

use Illuminate\Database\Seeder;

class ThemCauHoiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cauhoi')->insert([
         ['noi_dung' =>'Mèo máy Doraemon đến từ thế kỷ thứ mấy', 'linh_vuc_id' =>'1', 'phuong_an_a' =>'21', 'phuong_an_b' =>'22', 'phuong_an_c' =>'23', 'phuong_an_d' =>'24', 'dap_an' =>'A'],

        ['noi_dung' =>'Doraemon thích ăn món gì', 'linh_vuc_id' =>'1', 'phuong_an_a' =>'Bánh Trứng', 'phuong_an_b' =>'Sushi', 'phuong_an_c' =>'Bánh rán', 'phuong_an_d' =>'Bánh qui', 'dap_an' =>'C'],

        ['noi_dung' =>'Doraemon sợ nhất con gì ', 'linh_vuc_id' =>'1', 'phuong_an_a' =>'Chó', 'phuong_an_b' =>'Mèo', 
        'phuong_an_c' =>'Chuột', 'phuong_an_d' =>'Gián', 'dap_an' =>'C'],

        ['noi_dung' =>'Ngày sinh của Doraemon', 'linh_vuc_id' =>'1', 'phuong_an_a' =>'3/9/2112', 'phuong_an_b' =>'4/9/2112', 'phuong_an_c' =>'5/9/2112', 'phuong_an_d' =>'6/9/2112', 'dap_an' =>'A'],

        ['noi_dung' =>' Doraemon cao bao nhiêu', 'linh_vuc_id' =>'1', 'phuong_an_a' =>'129,3 mm', 'phuong_an_b' =>'129,3 cm', 'phuong_an_c' =>'129,3 m', 'phuong_an_d' =>'129,3 dm', 'dap_an' =>'B'],

        ['noi_dung' =>'Cân nặng của Doraemon ', 'linh_vuc_id' =>'1', 'phuong_an_a' =>'129,3 kg', 'phuong_an_b' =>'129,3 pound', 'phuong_an_c' =>'12,93 tạ', 'phuong_an_d' =>'129,3 yến ', 'dap_an' =>'B'],

        ['noi_dung' =>'Vòng bụng của Doraemon', 'linh_vuc_id' =>'1', 'phuong_an_a' =>'129,3 mm', 'phuong_an_b' =>'129,3 cm', 'phuong_an_c' =>'129,3 m', 'phuong_an_d' =>'129,3 dm', 'dap_an' =>'B'], 

        ['noi_dung' =>'Tại sao Doraemon có màu xanh', 'linh_vuc_id' =>'1', 'phuong_an_a' =>'Bị chuột cắn tai nên buồn, đổi màu', 'phuong_an_b' =>'Tự sơn', 'phuong_an_c' =>'Có thể đổi nhiều màu nhưng thích màu xanh', 'phuong_an_d' =>'Tất cả đều sai ', 'dap_an' =>'A'],

        ['noi_dung' =>'Doraemon có mấy bộ phận bị hư?', 'linh_vuc_id' =>'1', 'phuong_an_a' =>'1', 'phuong_an_b' =>'2', 'phuong_an_c' =>'3', 'phuong_an_d' =>'0', 'dap_an' =>'C'],

        ['noi_dung' =>'Tốc độ chạy của Doraemon khi gặp chuột là bao nhiêu ', 'linh_vuc_id' =>'1', 'phuong_an_a' =>'129,3 km/h', 'phuong_an_b' =>'129,3 km/s', 'phuong_an_c' =>'129,3 m/s', 'phuong_an_d' =>'129,3 m/h' , 'dap_an' =>'A'],

        ['noi_dung' =>'Ngày sinh của Nobita', 'linh_vuc_id' =>'2', 'phuong_an_a' =>'4/8/1964', 'phuong_an_b' =>'5/8/1964', 'phuong_an_c' =>'6/8/1964', 'phuong_an_d' =>'7/8/1964', 'dap_an' =>'D'],

        ['noi_dung' =>'Đâu là sở trường của Nobita', 'linh_vuc_id' =>'2', 'phuong_an_a' =>'Học', 'phuong_an_b' =>'Hát', 'phuong_an_c' =>'Ngủ', 'phuong_an_d' =>'Nấu ăn ', 'dap_an' =>'C'],

        ['noi_dung' =>' Những bài kiểm tra của Nobita thường được bao nhiêu điểm', 'linh_vuc_id' =>'2', 'phuong_an_a' =>'0', 'phuong_an_b' =>'8', 'phuong_an_c' =>'4', 'phuong_an_d' =>'10', 'dap_an' =>'A'],

        ['noi_dung' =>'Tính cách nổi bật  của Nobita là gì', 'linh_vuc_id' =>'2', 'phuong_an_a' =>'Ích kỷ , thông minh', 'phuong_an_b' =>'Tốt bụng , thông minh', 'phuong_an_c' =>'Ích kỷ , hậu đậu', 'phuong_an_d' =>'Tốt bụng, hậu đậu', 'dap_an' =>'D'],

        ['noi_dung' =>' Ai là vợ tương lai của Nobita', 'linh_vuc_id' =>'2', 'phuong_an_a' =>'Dorami', 'phuong_an_b' =>'Shizuka', 'phuong_an_c' =>'Jaiko', 'phuong_an_d' =>'Jaian', 'dap_an' =>'B'],

        ['noi_dung' =>'Tình địch của Nobita là ai', 'linh_vuc_id' =>'2', 'phuong_an_a' =>'Suneo', 'phuong_an_b' =>'Jaian', 'phuong_an_c' =>'Doraemon', 'phuong_an_d' =>'Dekisugi ', 'dap_an' =>'D'],

        ['noi_dung' =>'Mẹ của Nobita tên gì', 'linh_vuc_id' =>'2', 'phuong_an_a' =>'Tamako', 'phuong_an_b' =>'Shizuka', 'phuong_an_c' =>'Sumi', 'phuong_an_d' =>'Tamiko', 'dap_an' =>'A'],

        ['noi_dung' =>'Ba của Nobita tên gì', 'linh_vuc_id' =>'2', 'phuong_an_a' =>'Nobisuke', 'phuong_an_b' =>'Nobitake', 'phuong_an_c' =>'NobiEbisu', 'phuong_an_d' =>'Tất cả đều sai ', 'dap_an' =>'A'],

        ['noi_dung' =>'Đâu không phải nỗi sợ của Nobita?', 'linh_vuc_id' =>'2', 'phuong_an_a' =>'Ngủ', 'phuong_an_b' =>'Học', 'phuong_an_c' =>'Mẹ', 'phuong_an_d' =>'Jaian', 'dap_an' =>'A'],
        
        ['noi_dung' =>'Ý nghĩa tên Nobita ?', 'linh_vuc_id' =>'2', 'phuong_an_a' =>'Cậu bé thông minh ', 'phuong_an_b' =>'Cậu bé khỏe mạnh ', 'phuong_an_c' =>'Cậu bé hay hờn ', 'phuong_an_d' =>'Cậu bé đi lạc', 'dap_an' =>'A'],
        
        ['noi_dung' =>'Shizuka thích chơi loại nhạc cụ nào', 'linh_vuc_id' =>'3', 'phuong_an_a' =>'Sáo', 'phuong_an_b' =>'Vĩ cầm ', 'phuong_an_c' =>'Guitar', 'phuong_an_d' =>'Saxophone', 'dap_an' =>'B'],

        ['noi_dung' =>' Ý nghĩa tên Shizuka là gì?', 'linh_vuc_id' =>'3', 'phuong_an_a' =>'Yên tĩnh, êm đềm', 'phuong_an_b' =>'Hay hờn dỗi', 'phuong_an_c' =>'Làm tốt mọi việc', 'phuong_an_d' =>'Khoẻ mạnh', 'dap_an' =>'A'],

        ['noi_dung' =>' Món ăn yêu thích của Shizuka?', 'linh_vuc_id' =>'3', 'phuong_an_a' =>'Mì tôm', 'phuong_an_b' =>'Bánh rán', 'phuong_an_c' =>'Bánh mì', 'phuong_an_d' =>'Khoai lang nướng', 'dap_an' =>'D'],

        ['noi_dung' =>'Sở thích lớn nhất của Shizuka là gì?', 'linh_vuc_id' =>'3', 'phuong_an_a' =>'Tắm', 'phuong_an_b' =>'Ngủ', 'phuong_an_c' =>'Hát', 'phuong_an_d' =>'Đi chơi', 'dap_an' =>'A'],

        ['noi_dung' =>' Cung hoàng đạo của Shizuka ?', 'linh_vuc_id' =>'3', 'phuong_an_a' =>'Song Tử', 'phuong_an_b' =>'Kim Ngưu', 'phuong_an_c' =>'Bọ Cạp', 'phuong_an_d' =>'Bảo Bình', 'dap_an' =>'B'],

        ['noi_dung' =>'Ước mơ thầm kín của Shizuka là gì?', 'linh_vuc_id' =>'3', 'phuong_an_a' =>'Trở thành nhà văn', 'phuong_an_b' =>'Thành nhà thiết kế thời trang', 'phuong_an_c' =>'Trở thành con trai', 'phuong_an_d' =>'Trở thành võ sĩ', 'dap_an' =>'C'],

        ['noi_dung' =>'Shizuka sợ gì nhất?', 'linh_vuc_id' =>'3', 'phuong_an_a' =>'Điểm thấp', 'phuong_an_b' =>'Ma', 'phuong_an_c' =>'Mẹ', 'phuong_an_d' =>'Jaian', 'dap_an' =>'B'],

        ['noi_dung' =>'Ngoài thích tắm Shizuka còn thích gì?', 'linh_vuc_id' =>'3', 'phuong_an_a' =>'Làm bánh', 'phuong_an_b' =>'Hát', 'phuong_an_c' =>'Ngủ', 'phuong_an_d' =>'Đọc sách', 'dap_an' =>'A'],

        ['noi_dung' =>'Cháu  trai của Shizuka và Nobita  tên gì?', 'linh_vuc_id' =>'3', 'phuong_an_a' =>'Nobi', 'phuong_an_b' =>'Sewashi', 'phuong_an_c' =>'Jaichibi', 'phuong_an_d' =>'Mimi', 'dap_an' =>'B'],

        ['noi_dung' =>'Ngày sinh của Shizuka?', 'linh_vuc_id' =>'3', 'phuong_an_a' =>'1/5 ', 'phuong_an_b' =>'2/5 ', 'phuong_an_c' =>'5/1', 'phuong_an_d' =>'5/2', 'dap_an' =>'B'],

        ['noi_dung' => 'Ước mơ lớn nhất của Jaian?', 'linh_vuc_id' => '4', 'phuong_an_a' => ' Trở thành võ sĩ', 'phuong_an_b' =>' Trở thành ca sĩ','phuong_an_c' =>'Trở thành nhạc sĩ', 'phuong_an_d' =>'Trở thành nhà văn', 'dap_an'=>'B'],
        
        ['noi_dung' =>' Jaian  sợ gì nhất?', 'linh_vuc_id'=> '4', 'phuong_an_a' =>'Ma', 'phuong_an_b' => 'Bố', 'phuong_an_c' =>'Mẹ', 'phuong_an_d' =>'Bóng tối','dap_an'=>'C'],
        
        ['noi_dung' => 'Ý nghĩa tên Jaian ?', 'linh_vuc_id' => '4', 'phuong_an_a' => 'Khổng lồ', 'phuong_an_b' => 'Giỏi võ', 'phuong_an_c' => 'Mạnh khỏe ','phuong_an_d'=>'Thông minh','dap_an'=>'B'],
        
        ['noi_dung' => 'Đam mê lớn nhất của Jaian ?', 'linh_vuc_id' => '4', 'phuong_an_a' => 'Hát', 'phuong_an_b' => 'Ngủ', 'phuong_an_c' => 'Đọc sách', 'phuong_an_d' => 'Đan dây ', 'dap_an' =>'A'],
        
        ['noi_dung' => 'Ngày sinh của Jaian  ?', 'linh_vuc_id' => '4', 'phuong_an_a' => '12/3', 'phuong_an_b' => '13/4', 'phuong_an_c' => '14/5', 'phuong_an_d' => '15/6', 'dap_an' =>'D'],
        
        ['noi_dung' => ' Điều ít ai biết về Jaian?', 'linh_vuc_id' => '4', 'phuong_an_a' => 'Yêu thương, nuông chiều em gái hết mức', 'phuong_an_b' => 'Hay tự khen mình', 'phuong_an_c' => 'Âm thầm bảo vệ bạn bè', 'phuong_an_d' => 'Cả 3 đều sai', 'dap_an' =>'A'],
        
        ['noi_dung' => ' Người mà Jaian  yêu thương nhất truyện?', 'linh_vuc_id' => '4', 'phuong_an_a' => 'Jaiko', 'phuong_an_b' => 'Nobita', 'phuong_an_c' => 'Shizuka', 'phuong_an_d' => 'Mimi', 'dap_an' =>'A'],
        
        ['noi_dung' => ' Con trai của Jaian  tên gì ?', 'linh_vuc_id' => '4', 'phuong_an_a' => 'Dorami', 'phuong_an_b' => ' Suneki', 'phuong_an_c' => 'Jaichibi', 'phuong_an_d' => 'Mimi', 'dap_an' =>'C'],
        
        ['noi_dung' => 'Đặc điểm nổi bật nhất của Jaian', 'linh_vuc_id' => '4', 'phuong_an_a' => 'Hát hay', 'phuong_an_b' => 'Chơi đàn giỏi', 'phuong_an_c' => 'Học giỏi', 'phuong_an_d' => 'Lồi trốn', 'dap_an' =>'D'],
        
        ['noi_dung' => 'Tên thật của Jaian', 'linh_vuc_id' => '4', 'phuong_an_a' => 'Goda Takeshi', 'phuong_an_b' => 'Nobi Takeshi', 'phuong_an_c' => 'Honekawa Takeshi', 'phuong_an_d' => 'Goda Jaian', 'dap_an' =>'A'],

        ['noi_dung' =>'Ý nghĩa tên Suneo ?', 'linh_vuc_id' =>'5', 'phuong_an_a' =>'Cậu bé hay hờn', 'phuong_an_b' =>'Cậu bé đi lạc', 'phuong_an_c' =>'Cậu bé khóc nhè', 'phuong_an_d' =>'Cậu bé hậu đậu', 'dap_an' =>'A'],

        ['noi_dung' =>'Đặc điểm quen thuộc để nhận ra Suneo ?', 'linh_vuc_id' =>'5', 'phuong_an_a' =>' Mắt', 'phuong_an_b' =>'Mũi', 'phuong_an_c' =>'Miệng', 'phuong_an_d' =>'Tai', 'dap_an' =>'C'],

        ['noi_dung' =>' Ước mơ của Suneo ?', 'linh_vuc_id' =>'5', 'phuong_an_a' =>'Trở thành nhà thiết kế thời trang', 'phuong_an_b' =>'Trở thành nhà văn', 'phuong_an_c' =>'Trở thành nhà khoa học', 'phuong_an_d' =>'Trở thành ca sĩ', 'dap_an' =>'A'],

        ['noi_dung' =>'Tính cách nổi bật của Suneo ?', 'linh_vuc_id' =>'5', 'phuong_an_a' =>'Hậu đậu', 'phuong_an_b' =>'Lười biếng', 'phuong_an_c' =>'Khoác lác', 'phuong_an_d' =>'Vui vẻ', 'dap_an' =>'C'],

        ['noi_dung' =>' Điểm đặc biệt của Suneo ?', 'linh_vuc_id' =>'5', 'phuong_an_a' =>'Ước mơ', 'phuong_an_b' =>'Sinh nhật', 'phuong_an_c' =>'A,B đúng', 'phuong_an_d' =>'A,B sai', 'dap_an' =>'B'],

        ['noi_dung' =>'Khi ở 1 mình,  Suneo thường làm gì?', 'linh_vuc_id' =>'5', 'phuong_an_a' =>'Nói xấu Chaien', 'phuong_an_b' =>'Đọc sách', 'phuong_an_c' =>'Tự soi mình trước gương và tự khen', 'phuong_an_d' =>'Ngủ', 'dap_an' =>'C'],

        ['noi_dung' =>'Tài lẻ của Suneo ?', 'linh_vuc_id' =>'5', 'phuong_an_a' =>'Hiểu biết công nghệ', 'phuong_an_b' =>'Bắn súng', 'phuong_an_c' =>'Hát', 'phuong_an_d' =>'Đàn', 'dap_an' =>'A'],

        ['noi_dung' =>'Đâu là câu cửa miệng của Suneo khi bế tắc?', 'linh_vuc_id' =>'5', 'phuong_an_a' =>'Bố ơi!', 'phuong_an_b' =>'Mẹ ơi!', 'phuong_an_c' =>'Doraemon ơi!', 'phuong_an_d' =>'Trời ơi !', 'dap_an' =>'B'],

        ['noi_dung' =>'Con trai của Suneo tên gì?', 'linh_vuc_id' =>'5', 'phuong_an_a' =>'Nobi', 'phuong_an_b' =>'Sewashi', 'phuong_an_c' =>'Jaichibi', 'phuong_an_d' =>'Suneki', 'dap_an' =>'D'],

        ['noi_dung' =>'Bí mật Suneo sợ bạn bè biết nhất?', 'linh_vuc_id' =>'5', 'phuong_an_a' =>'Mộng du', 'phuong_an_b' =>' Đái dầm', 'phuong_an_c' =>'Trở thành con gái', 'phuong_an_d' =>'Thích Jaian', 'dap_an' =>'B']
         ]);
    }
    
}
