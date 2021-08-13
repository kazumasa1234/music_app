<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
//dd($keyword);
        $query = Song::query();
//ここの$keyword で検索された値受け取り
        if (!empty($keyword)) {
            $query->where('song_name', 'like', '%' . $keyword . '%')->orWhere('artist', 'like', '%' . $keyword . '%');
        }

        $songs = $query->paginate(3);
        //dd($songs);
        //return view('Music/top', compact("song_name","artist"));
        return view('Music/search',['songs'=>$songs]);
    }
}



