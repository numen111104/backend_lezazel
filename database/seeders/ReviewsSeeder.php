<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Contoh data ulasan
        $reviews = [];
        $names = ['John Doe', 'Jane Smith', 'Michael Johnson', 'Emily Brown', 'David Lee', 'Sarah Wilson', 'Chris Taylor', 'Amanda Clark', 'Robert Martinez', 'Jennifer Hall'];
        $comments = [
            'Rasa ayam tulang lunaknya luar biasa, rekomendasi!',
            'Saya sangat suka ayam tulang lunak Lezazel Food, pelayanannya juga ramah.',
            'Kualitas ayam tulang lunaknya sangat baik, tetapi harganya agak mahal.',
            'Ayam tulang lunaknya lezat, tetapi porsi bisa diperbesar.',
            'Saya sangat kecewa dengan ayam tulang lunaknya, rasanya tidak sesuai harapan.',
            'Harga ayam tulang lunaknya terlalu mahal untuk rasa yang biasa saja.',
            'Pelayanannya buruk, makanan pun tidak sesuai harapan.',
            'Ayam tulang lunak Lezazel Food adalah favorit saya sekarang!',
            'Rasanya enak, tapi saya harap porsi bisa lebih besar.',
            'Saya menyukai ayam tulang lunaknya, tapi saya pikir harganya cukup tinggi.'
        ];

        for ($i = 0; $i < 15; $i++) {
            $reviews[] = [
                'user_id' => 1, 
                'name' => $names[array_rand($names)],
                'ratings' => rand(1, 5),
                'comment' => $comments[array_rand($comments)],
                'position' => 'Customer'
            ];
        }

        // Masukkan data ulasan ke dalam tabel reviews
        foreach ($reviews as $review) {
            DB::table('reviews')->insert($review);
        }
    }
}
