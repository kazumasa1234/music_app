<?php

namespace App\Http\Controllers;


use App\Models\Nice;
use Illuminate\Http\Request;
use App\Models\Song;
class ViewController extends Controller
{
    /**
     * top
     */
    public function top(Request $request )
    {
        $date = $request->input('date') ?? 'asc';
      //$songs = Song::all();
        $query = Song::query();
        //$query->where('user_id', '=', 1);
        $query->orderBy('song_name', $date);
        $tmp = $query->paginate(3);

//       $tmp = Song::paginate(4);
    //$songs = Song::table(songs)->orderBy('song_name','desc')->get();
//dump($songs);exit;
//ここの['songs'=>$songs])ここは配列のなかでも特別な書き方;　　のsongが　@foreach($songs as $row)ここの$songになる
      //return view('Music/top',['songs'=>$tmp,],compact('song','nice'))->with('date', $date);
        return view('Music/top',['songs'=>$tmp]);
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
        $songs = Song::where('user_id', '=', $id)->simplepaginate(2);
//dump($songs);exit;
        $category = config('category');
        //$test = ['songs' => $songs] じゃないのが不思議
        return view('Music/mypage', ['songs' => $songs, 'category' => $category]);
    }

    public function uplode()
    {
        return view('Music/uplode');
    }

//
//    public function show(Post $post)
//    {
//
//        $like=Nice::where('post_id', $post->id)->where('user_id', auth()->user()->id)->first();
//        return view('post.show', compact('post', 'like'));
//    }



}
