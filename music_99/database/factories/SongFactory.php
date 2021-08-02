<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Models\Song::class, function (Faker $faker) {
    return [

        // データをセット
        'song_name' => $faker->title(),
        'artist' => $faker->title(),
        //カテゴリー数値で設定してるのでこの書き方でないとエラーになる
        'category' => rand(1, 4),
        'img_file_name'  => $faker->imageUrl(),
        //この下おぼえ書き
        //mp3サンプルないのでデータパスを直書き　このコードは画像の時の場合
        'mp3_file_name' => '/Users/fukuikazuma/PhpstormProjects/laravel_6/music_99/storage/app/public/songs/eine.mp3'


        //この下おぼえ書き
        //mp3サンプルないのでデータパスを直書き　このコードは画像の時の場合
        // blog/storage/app/public/blog/
        //'file_name' => 'blog/storage/app/public/blog/5v1Tw8qvaeWQiTKiBUTqxJwl8tLjkgdNqIc1CNa8.jpg',


    ];
});
