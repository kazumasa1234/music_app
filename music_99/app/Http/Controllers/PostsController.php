<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\SongAddRequest;
use Illuminate\Http\Request;
use App\Models\Song;
class PostsController extends Controller
{

    /**
     * 曲投稿
     *
     * @param SongAddRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function uplode_post(SongAddRequest $request)
    {
//dd($request->all());
//Song::create();
        $song_name = $request->input('song_name');
        $artist = $request->input('artist');

        $category = $request->input('category');
//アップロード入るを奥の階層からストアで'public/images'にいどうしている
        $path = $request->file('img_file_name')->store('public/images');
        $path = asset(str_replace('public', 'storage', $path));


        $path2 = $request->file('mp3_file_name')->store('public/songs');
        $path2 = asset(str_replace('public', 'storage', $path2));
        //ログインしているユーザーIDを取得
        $user_id = Auth::id();
//        dump($path);exit;
        $song = new Song([
            'artist' => $artist,
            'song_name' => $song_name,
            'category' => $category,
            'img_file_name' => $path,
            'mp3_file_name' => $path2,
            "user_id" => $user_id
        ]);

        $song->save();

        return redirect(route('top'));
    }


    //middlewareによる認証制限を追加
    public function __construct()
    {
        $this->middleware('auth');
    }



}


