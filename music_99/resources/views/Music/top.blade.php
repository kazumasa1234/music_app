
@extends('layouts.layout')
@section('title', 'トップページ')

{{--@section('test','testです')--}}

@section('content')
    <!--メインエリア-->
    <div class="position-relative vh-100">
        <p class="vh-100 overflow-hidde">
            <img class="w-100 h-100 hero" src="https://picsum.photos/500/300" alt="">
        </p>
        <div class="position-absolute top-50 start-50 translate-middle">
            <p class="text-white display-1" >Home</p>
        </div>
    </div>



    <div class="container-fluid px-5">
        <!-- ここに中身-->
        <!--選択-->
        <div class="pt-5">
            <p class="mx-3 h4">曲順並べ替え</p>
            <select class="ms-2 form-control" name="example">
                <option value="サンプル1">新しい順</option>
                <option value="サンプル2">古い順</option>
            </select>
            <select class="mx-2 form-control" name="example">
                <option value="サンプル1">再生回数　多い</option>
                <option value="サンプル2">再生回数　少ない</option>
            </select>

        </div>
        <p class="row offset-md-10">
            <button class="btn btn-danger my-3" type="submit">ALL PLAY</button>
        </p>

        <hr>
        <!--曲-->
        <div>
            <!--グリッドでやるやり方-->
            <!--                    <div class="item_box row">-->
            <!--                        <figure class="item_box__img_box col-3">-->
            <!--                            <img class="img-fluid" src="https://picsum.photos/200/200" alt="">-->
            <!--                        </figure>-->
            <!--                        <div class="item_box__info_box col-9">-->
            <!--                            <div class="item_box__info_box&#45;&#45;left float-start h-100">-->
            <!--                                <span class="item_artist d-block fs-1">ビートルズ</span>-->
            <!--                                <span class="item_title d-block fs-2">イエスタディ</span>-->
            <!--                            </div>-->
            <!--                            <div class="item_box__info_box&#45;&#45;right float-end d-flex justify-content-center align-items-center h-100">-->
            <!--                                <span>再生回数</span>-->
            <!--                                <span>いいね</span>-->
            <!--                                <span>ダウンロード</span>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    </div>-->

            <div class="d-flex align-items-end flex-wrap pt-5 justify-content-center">

                <p class=""><img class="img-fluid" src="https://picsum.photos/200/200" alt=""></p>

                <ul class="mx-5 list-unstyled">
                    <li class="h2">ビートルズ</li>
                    <li class="h3">イエスタディ</li>
                </ul>

                <ul class="d-flex push list-unstyled">
                    <li class="mx-2">再生回数</li>
                    <li class="mx-2">いいね</li>
                    <li class="mx-2">ダウンロード</li>
                </ul>

            </div>
            <hr>

            @foreach($song as $row)
            <div class="d-flex align-items-end flex-wrap pt-5 justify-content-center">

                <p class=""><img class="img-fluid w-25 h-25" src="{{$row->img_file_name}}" alt=""></p>

                <ul class="mx-5 list-unstyled">
                    <li class="h1">{{ $row->artist }}</li>
                    <li class="h4">{{ $row->song_name }}</li>
                </ul>

                <ul class="d-flex push list-unstyled">
                    <li class="mx-2">再生回数</li>
                    <li class="mx-2">いいね</li>
                    <li class="mx-2">ダウンロード</li>
                </ul>

            </div>

            <hr>
            @endforeach
        </div>



        <div class="row offset-md-9">
            <nav aria-label="Page navigation">
                <ul class="pagination d-flex justify-content-center">
                    <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next<</a></li>
                </ul>
            </nav>
        </div>


        <ul class="d-flex list-unstyled justify-content-sm-between flex-wrap justify-content-center mt-5">
            <a href="{{route('rock')}}">
            <li class="my-2 card"><img class="card-img" src="https://picsum.photos/200" alt="">
                <div class="card-img-overlay">
                    <p class="text-white h2">Rock</p>
                </div>
            </li>
            </a>

            <a href="{{route('pop')}}">
                <li class="my-2 card"><img class="card-img" src="https://picsum.photos/200/200" alt="">
                    <div class="card-img-overlay">
                        <p class="text-white h2">Pop</p>
                    </div>
                </li>
            </a>


            <a href="{{route('punk')}}">
                <li class="my-2 card"><img class="card-img" src="https://picsum.photos/200" alt="">
                    <div class="card-img-overlay">
                        <p class="text-white h2">Punk</p>
                    </div>
                </li>
            </a>


            <a href="{{route('jazz')}}">
                <li class="my-2 card"><img class="card-img" src="https://picsum.photos/200/200" alt="">
                    <div class="card-img-overlay">
                        <p class="text-white h2">Jazz</p>
                    </div>
                </li>
            </a>
        </ul>


    </div>

@endsection
