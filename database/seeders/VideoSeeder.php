<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "youtube_url" => "https://www.youtube.com/embed/rAv8C0Nf9uk?si=U4r6GgNPeM4pF6zT",
            ],
            [
                "youtube_url" => "https://www.youtube.com/embed/K2p6Mtz5P20?si=uu_mtBscuFvscb8_",
            ],
            [
                "youtube_url" => "https://www.youtube.com/embed/K2p6Mtz5P20?si=IDuDYGui3o8TGg6U",
            ],
            [
                "youtube_url" => "https://www.youtube.com/embed/MCVkMmYL-aY?si=VCSHT_1UNGUiB5OE",
            ],
            [
                "youtube_url" => "https://www.youtube.com/embed/TanFwAcHBqE?si=5V-QKh_8ctAxownO",
            ],
            [
                "youtube_url" => "https://www.youtube.com/embed/00o1vJYTp4I?si=bbaWdAgfJve5ZooX",
            ],
            [
                "youtube_url" => "https://www.youtube.com/embed/vHTwXTHpuCg?si=YN9xgFDYYATZsyTJ",
            ],
            [
                "youtube_url" => "https://www.youtube.com/embed/8Ea4oq8qFtM?si=r_JzukoWpDM9YUzr",
            ],
            [
                "youtube_url" => "https://www.youtube.com/embed/G892z8Toyg8?si=XUQkmoO16x_mtImV",
            ],
            [
                "youtube_url" => "https://www.youtube.com/embed/DsqMUJ7rbXg?si=t4jX-ASt_wvWgZAQ",
            ],
            [
                "youtube_url" => "https://www.youtube.com/embed/_Rilfm4kAeY?si=NGTrYnDgV0X97Nst",
            ],
            [
                "youtube_url" => "https://www.youtube.com/embed/9Z968ibkbmc?si=8nUlN7rv2VS7sBDf",
            ],
            [
                "youtube_url" => "https://www.youtube.com/embed/tJtrDZ4ZieA?si=PsyCB-tozIIi7WAJ",
            ],
            [
                "youtube_url" => "https://www.youtube.com/embed/44bzvE0VLug?si=3NFsxwd9I-ySupoU",
            ],
            [
                "youtube_url" => "https://www.youtube.com/embed/Zw6kc6dd7Dc?si=skx5xpvhs8bSYNjA",
            ],
        ];
        foreach ($data as $data) {
            Video::create($data);
        }
    }
}
