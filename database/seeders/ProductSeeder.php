<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'スタンダードプラン1曲',
            'content' => '思い出の場所、大切な記念日等、ご自身のエピソードや希望の音楽スタイルを事前にヒアリングさせていただき、世界に一つのあなただけの楽曲を制作いたします。',
            'price' => 100000,
        ]);
    }
}
