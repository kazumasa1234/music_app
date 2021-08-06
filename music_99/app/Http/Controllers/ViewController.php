<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
class ViewController extends Controller
{
    /**
     * top
     */
    public function top()
    {
      $songs = Song::all();
//ここの['songs'=>$songs]);　　のsongが　@foreach($songs as $row)ここの$songになる
      return view('Music/top',['songs'=>$songs]);

        //return view('Music/top');
    }

    public function mypage()
    {
        //現在ログイン中のユーザー情報取得
        $user = \Auth::user();
//        dump($user);exit;
        //ユーザー情報からプライマルidのみ取得
        $id = $user->id;
//        dump($id);exit;
        //プライマルidとテーブルSongのuseridを照らし合わせ一致した行を取ってくる
        $songs = Song::where('user_id', '=', $id)->get();

        $category = config('category');
        return view('Music/mypage', ['songs' => $songs, 'category' => $category]);
    }

    public function uplode()
    {
        return view('Music/uplode');
    }




}
