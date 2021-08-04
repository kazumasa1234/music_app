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
        return view('Music/mypage', ['songs' => $songs]);


    }
    public function uplode()
    {
        return view('Music/uplode');
    }

    public function rock()
    {
        //$members = Member::where('カラム名',条件)->get();

        $songs = Song::where('category', '=',1)->get();
        //dump($songs);exit;
        return view('Music/rock', ['songs' => $songs]);
    }

    public function pop()
    {
        //$members = Member::where('カラム名',条件)->get();

        $songs = Song::where('category', '=',2)->get();
        //dump($songs);exit;
        return view('Music/pop', ['songs' => $songs]);
    }
    public function punk()
    {
        //$members = Member::where('カラム名',条件)->get();

        $songs = Song::where('category', '=',3)->get();
        dump($songs);exit;
        return view('Music/punk', ['songs' => $songs]);
    }
    public function jazz()
    {
        //$members = Member::where('カラム名',条件)->get();

        $songs = Song::where('category', '=',4)->get();
        //dump($songs);exit;
        return view('Music/jazz', ['songs' => $songs]);
    }

    public function song()
    {
        return view('Music/song');

        //
    }


}
