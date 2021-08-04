<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


//ここのSongがDBテーブルのsongs とつながっている。songsからsをとったものsong
class Song extends Model
{
//フィラブルないとエラーになる
    protected $fillable = ['title', 'artist', 'song_name','img_file_name','category','mp3_file_name','user_id'];
}
