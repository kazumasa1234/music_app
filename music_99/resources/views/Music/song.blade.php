@extends('layouts.layout')
@section('title', 'マイページ')

@section('content')


    <div class="position-relative vh-100">
        <p class="vh-100 overflow-hidde">
            <img class="w-100 h-100 hero" src="https://picsum.photos/500/300" alt="">
        </p>
        <div class="position-absolute top-50 start-50 translate-middle">
            <p class="text-white display-1" >Song</p>
        </div>
    </div>


    <div class="text-center">
        <div class="pt-5">
            <img class="w-50 h-50" src="https://picsum.photos/400/400" alt="">
        </div>
    </div>

    <div class="text-center pt-5">
        <p class="h1 pt-3">曲名: イエスタディ</p>
        <p class="h3 pt-3">アーティスト:ビートルズ</p>

        <p class="h4 text-black-50">ジャンル:　ロック</p>
    </div>




    <div class="p-5">
        <div class="row ">

            <p class="col-md-3">
                <i class="bi bi-caret-right-square display-4 text-danger "></i>
            </p>

            <p class="col-md-3">再生回数</p>
            <p class="col-md-3">いいね</p>
            <p class="col-md-3">ダウンロード</p>
        </div>
    </div>


@endsection

{{--メイン部分大枠--}}
{{--    <div class="d-flex justify-content-center justify-content-md-between pt-5">--}}
{{--<div class="row py-5 px-5">--}}
{{--    --}}{{--左辺--}}
{{--    <div class="col-md text-center">--}}
{{--        <img src=" https://picsum.photos/350" alt="">--}}
{{--    </div>--}}
{{--    --}}{{--右辺--}}
{{--    <div class=" col-md">--}}
{{--        <!--右辺-1-->--}}
{{--        <div class=" pt-5">--}}
{{--            <p class="h1 pt-3">曲名: イエスタディ</p>--}}
{{--            <p class="h3 pt-3">アーティスト:ビートルズ</p>--}}
{{--            <br><br>--}}
{{--            <p class="h4 text-black-50">ジャンル:　ロック</p>--}}
{{--        </div>--}}
{{--        <!--右辺-2-->--}}

{{--    </div>--}}

{{--        <div class="row text-center mt-5">--}}
{{--            <p class="col-2">--}}
{{--                <i class="bi bi-caret-right-square display-4 text-danger "></i>--}}
{{--            </p>--}}
{{--            <div class="row col-md-10 ">--}}
{{--                <p class="col-md-3">再生回数</p>--}}
{{--                <p class="col-md-3">いいね</p>--}}
{{--                <p class="col-md-3">ダウンロード</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--</div>--}}
<!--1のrow終わり-->










