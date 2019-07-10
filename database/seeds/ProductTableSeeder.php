<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
            'name' => 'Áo Croptop Bo Eo',
            'slug' => 'Áo croptop bo eo',
            'description' => 'Áo kiểu croptop tay ngắn cổ tròn, eo rút dây trang trí.!!!',
            'price' => 320000,
            'sale' => 15,
            'status' => 1,
            'category_id' => 1,
            'brand_id' => 2,
            
        ],
        [
            'name' => 'ÁO LEN CHOÀNG CỰC CHẤT',
            'slug' => 'ÁO LEN CHOÀNG CỰC CHẤT',
            'description' => 'Chất liệu: len dệt kim mịn đẹp, Kiểu dáng: Như hình, Xuất xứ : Tô chau',
            'price' => 390000,
            'sale' => 15,
            'status' => 1,
            'category_id' => 1,
            'brand_id' => 1,
        ],
        [
            'name' => 'Đầm Suông Thời Trang',
            'slug' => 'Đầm Suông Thời Trang Eden In Hoa',
            'description' => 'Đầm suông thời trang Eden in hoa - chất liệu Tacke nhung dày dặn, phom suông che khuyết điểm, họa tiết hoa tinh tế',
            'price' => 320000,
            'sale' => 10,
            'status' => 1,
            'category_id' => 2,
            'brand_id' => 2,  
        ],
        [
            'name' => 'Đầm suông thời trang',
            'slug' => 'Đầm suông caro thời trang Eden',
            'description' => 'Đầm suông caro với thiết kế trẻ trung mà vẫn không làm mất đi sự thanh lịch nơi công sở; ngoài ra, các nàng đều có thể diện chúng đi dạo phố',
            'price' => 350000,
            'sale' => 15,
            'status' => 1,
            'category_id' => 1,
            'brand_id' => 1,
        ],
        [
            'name' => 'Áo Croptop Bo Eo',
            'slug' => 'Áo croptop bo eo',
            'description' => 'Áo kiểu croptop tay ngắn cổ tròn, eo rút dây trang trí.!!!',
            'price' => 300000,
            'sale' => 15,
            'status' => 1,
            'category_id' => 3,
            'brand_id' => 1,  
        ],
        [
            'name' => 'Đầm Ôm Công Sở Kèm Vest Thanh Lịch',
            'slug' => 'Đầm ôm công sở kèm vest thanh lịch',
            'description' => 'Chất liệu: Vải cát mềm mịn dày dặn, co giãn mặc thoải mái khi duy chuyển, vẫn động. Đặc biệt không ra màu khi giặt, thoải mái khi giặt máy',
            'price' => 250000,
            'sale' => 15,
            'status' => 1,
            'category_id' => 2,
            'brand_id' => 2,
        ],
        [
            'name' => 'Đầm Công Sở Tay Lỡ',
            'slug' => 'Đầm công sở tay lở sang trọng',
            'description' => 'Chất liệu: Vải Cát Hàn mềm mịn dày dặn, co giãn mặc thoải mái khi duy chuyển, vận động.',
            'price' =>250000,
            'sale' => 15,
            'status' => 1,
            'category_id' => 3,
            'brand_id' => 1,  
        ],
        [
            'name' => 'Áo Voan Cổ Tim Cột Eo',
            'slug' => 'Aó voan cổ tim cột eo',
            'description' => 'Áo kiểu cổ tròn tay ngắn, thân sau xếp ly và phối ren nhí.!',
            'price' => 350000,
            'sale' => 15,
            'status' => 1,
            'category_id' => 3,
            'brand_id' => 1,
        ]
    ]);
    }
}
