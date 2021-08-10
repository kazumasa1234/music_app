<?php

namespace App\Http\Controllers;

use App\Http\Requests\SongAddRequest;
use App\Http\Requests\SongEditRequest;
use Illuminate\Http\Request;
use App\Models\Song;
use Illuminate\Support\Facades\Auth;

class OperationController extends Controller
{
    //App\Models\Song取得
    public function delete(Song $song )
    {
        //論理削除
        //削除してあるかどうか1or0のフラグで表す
//        $song->delete_flag = 1;
//        $song->save();
//物理削除
        $song->delete();

         return redirect(route('mypage'));

    }

    /**編集
     * @param $song
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
//パラメーターモデル送信
    public function edit(Song $song)
    {

        //return view('Music/edit', ['song' => $song]);
        return view('Music/edit', ['song' => $song]);
    }





    /**投稿
     * @param SongAddRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */

    public function update(SongEditRequest $request, Song $song)
    {

//Song::create();
        $song_name = $request->input('song_name');
        $artist = $request->input('artist');

        $category = $request->input('category');
//アップロード入るを奥の階層からストアで'public/images'にいどうしている
        if ( $request->file('img_file_name') ) {
            $path = $request->file('img_file_name')->store('public/images');
            $path = asset(str_replace('public', 'storage', $path));
            $song->img_file_name = $path;
        }


        if ( $request->file('mp3_file_name') ) {
            $path2 = $request->file('mp3_file_name')->store('public/songs');
            $path2 = asset(str_replace('public', 'storage', $path2));
            $song->mp3_file_name = $path2;
        }


        //ログインしているユーザーIDを取得
        $user_id = Auth::id();
//        dump($path);exit;
        $song->song_name = $song_name;
        $song->artist = $artist;
        $song->category = $category;

        $song->save();

        return redirect(route('mypage'));
    }
}
