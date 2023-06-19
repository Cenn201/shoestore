<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('products')->insert([
            [
                'product_name' => 'BASAS BUMPER GUM EXT NE - LOW TOP - BLACK/GUM',
                'product_description' => 'Bumper Gum EXT (Extension) NE là bản nâng cấp được xếp vào dòng sản phẩm Basas, nhưng lại gây ấn tượng với diện mạo phá đi sự an toàn thường thấy. Với cách sắp xếp logo hoán đổi đầy ý tứ và mảng miếng da lộn (Suede) xuất hiện hợp lí trên chất vải canvas NE bền bỉ dày dặn nhấn nhá thêm bằng những sắc Gum dẻo dai. Tất cả làm nên 01 bộ sản phẩm với thiết kế đầy thoải mái trong trải nghiệm, đủ thanh lịch trong dáng vẻ',
                'product_price' => '599000',
                'product_photo' => 'item1.jpg',
                'product_status' => 'Còn hàng',
                'id_category' => '1'
            ],
            [
                'product_name' => 'VINTAS TEMPERATE - HIGH TOP - DUSTY OLIVE',
                'product_description' => 'Má ngoài Suede (da lộn), má trong phủ vải canvas kèm theo các chi tiết phối trộn chất da Nappa nâu trầm điềm đạm là ý đồ sắp xếp làm nên Vintas Temperate Pack. Với tông màu cảm hứng từ cỏ cây cùng khí hậu dịu mát rõ nét của vùng Ôn Đới. Điểm chốt hạ thuyết phục cho những con người sâu sắc, mang tâm hồn yêu thiên nhiên vô bờ bến.',
                'product_price' => '610000',
                'product_photo' => 'item11.jpg',
                'product_status' => 'Còn hàng',
                'id_category' => '2'
            ],
            [
                'product_name' => 'BASAS WORKADAY - HIGH TOP - BLACK',
                'product_description' => 'Gender: Unisex Size run: 35 – 46 Upper: Canvas NE Outsole: Rubber',
                'product_price' => '650000',
                'product_photo' => 'item3.jpg',
                'product_status' => 'Còn hàng',
                'id_category' => '3'
            ],
            [
                'product_name' => 'BASAS WORKADAY - HIGH TOP - BLACK',
                'product_description' => 'Gender: Unisex Size run: 35 – 46 Upper: Canvas NE Outsole: Rubber',
                'product_price' => '650000',
                'product_photo' => 'item4.jpg',
                'product_status' => 'Còn hàng',
                'id_category' => '1'
            ],
            [
                'product_name' => 'TRACK 6 CLASS E - LOW TOP - CRAFTSMAN BLUE',
                'product_description' => 'Track 6 Class E (Essential, Enthusiasm) là bộ sản phẩm mang trên mình những yếu tố cần thiết, đủ sức thú vị để “khơi dậy” niềm đam mê, sự phấn khích mạnh mẽ. Đặc biệt, Track 6 Class E là bộ sản phẩm lấy cảm hứng từ mô-tô, từ những chuyến hành trình “bốn bánh” của mô-tô đến những nỗi đam mê lớn mạnh.',
                'product_price' => '580000',
                'product_photo' => 'item5.jpg',
                'product_status' => 'Còn hàng',
                'id_category' => '1'
            ],
            [
                'product_name' => 'TRACK 6 CLASS E - LOW TOP - CRAFTSMAN BLUE',
                'product_description' => 'Track 6 Class E (Essential, Enthusiasm) là bộ sản phẩm mang trên mình những yếu tố cần thiết, đủ sức thú vị để “khơi dậy” niềm đam mê, sự phấn khích mạnh mẽ. Đặc biệt, Track 6 Class E là bộ sản phẩm lấy cảm hứng từ mô-tô, từ những chuyến hành trình “bốn bánh” của mô-tô đến những nỗi đam mê lớn mạnh.',
                'product_price' => '580000',
                'product_photo' => 'item6.jpg',
                'product_status' => 'Còn hàng',
                'id_category' => '1'
            ],
        ]);

        DB::table('categories')->insert([
            ['id_category' => 1, 'category_name' => 'Basas'],
            ['id_category' => 2, 'category_name' => 'Vintas'],
            ['id_category' => 3, 'category_name' => 'Urbas'],
            ['id_category' => 4, 'category_name' => 'Pattas'],
            ['id_category' => 5, 'category_name' => 'Creas'],
            ['id_category' => 6, 'category_name' => 'Track 6'],
        ]);
        DB::table('users')->insert([
            
            ['id_user' => 1, 'username' => 'Xuân Chiến','email'=>'xuannchienn201@gamil.com','password' => password_hash('Xuanchien@2001', PASSWORD_DEFAULT),'decentralization'=>'admin'],
            ['id_user' => 2, 'username' => 'a','email'=>'blabla@gamil.com','password' => password_hash('Xuanchien@2001', PASSWORD_DEFAULT),'decentralization'=>'customer'],
        ]);
    }
}
