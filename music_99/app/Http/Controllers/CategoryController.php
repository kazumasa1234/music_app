<?php

namespace App\Http\Controllers;
use App\Models\Song;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //['category' => 'rock']受け取り　 public function category($category)に代入
    public function category($category)
    {
        //$members = Member::where('カラム名',条件)->get();
        //大文字に変換configを呼び出すため
        $category_big =  strtoupper($category);
        //configからROCKを探して取得
        $category_id = array_search($category_big, config('category'));
        $songs = Song::where('category', '=', $category_id)->get();
        //dump($songs);exit;
        return view("Music/$category", ['songs' => $songs]);

    }

//    public function pop()
//    {
//        //$members = Member::where('カラム名',条件)->get();
//
//        $songs = Song::where('category', '=',2)->get();
//        //dump($songs);exit;
//        return view('Music/pop', ['songs' => $songs]);
//    }
//    public function punk()
//    {
//        //$members = Member::where('カラム名',条件)->get();
//
//        $songs = Song::where('category', '=',3)->get();
//        dump($songs);exit;
//        return view('Music/punk', ['songs' => $songs]);
//    }
//    public function jazz()
//    {
//        //$members = Member::where('カラム名',条件)->get();
//
//        $songs = Song::where('category', '=',4)->get();
//        //dump($songs);exit;
//        return view('Music/jazz', ['songs' => $songs]);
//    }
}
