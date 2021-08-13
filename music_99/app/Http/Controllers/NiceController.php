<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use宣言追加
use App\Models\Song;
use App\Models\Nice;
use Illuminate\Support\Facades\Auth;

class NiceController extends Controller
{
    public function nice(Song $song, Request $request){
        $nice=New Nice();
        $nice->song_id=$song->id;
        $nice->user_id=Auth::user()->id;
        $nice->save();
        return back();
    }


    public function unnice(Song $song, Request $request){
        $user=Auth::user()->id;
        $nice=Nice::where('song_id', $song->id)->where('user_id', $user)->first();
        $nice->delete();
        return back();
    }
}
