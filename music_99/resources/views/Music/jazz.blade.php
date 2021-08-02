@extends('layouts.layout')
@section('title', 'マイページ')

{{--@section('test','testです')--}}

@section('content')


    <div class="position-relative vh-100">
        <p class="vh-100 overflow-hidde">
            <img class="w-100 h-100 hero" src="https://picsum.photos/500/300" alt="">
        </p>
        <div class="position-absolute top-50 start-50 translate-middle">
            <p class="text-white display-1" >Jazz</p>
        </div>
    </div>

    <div class="text-center">
        <div class="pt-5">
            <i class="bi bi-caret-right-square display-4 text-danger"></i>
        </div>

        <div class="my-5" >
            <p class="h4">ここはジャズチャンネルです。</p>
            <p class="h4">ジャズをお楽しみ下さい</p>
        </div>
    </div>





@endsection


