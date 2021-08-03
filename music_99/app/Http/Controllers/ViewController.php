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

      return view('Music/top',['song'=>$songs]);

        //return view('Music/top');
    }

    public function mypage()
    {
        $user = \Auth::user();
        $id = $user->id;
        $songs = Song::where('user_id', '=', $id)->get();
        return view('Music/mypage', ['songs' => $songs]);
    }
    public function uplode()
    {
        return view('Music/uplode');
    }

    public function rock()
    {

        return view('Music/rock');
    }

    public function pop()
    {

        return view('Music/pop');
    }
    public function punk()
    {

        return view('Music/punk');
    }
    public function jazz()
    {

        return view('Music/jazz');
    }

    public function song()
    {
        return view('Music/song');

        //
    }


}
