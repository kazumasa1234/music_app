@extends('layouts.layout')
@section('title', 'マイページ')

{{--@section('test','testです')--}}

@section('content')


    <!-- メインコンテンツ -->




    <div class="position-relative vh-100">
        <p class="vh-100 overflow-hidde">
            <img class="w-100 h-100 hero" src="https://picsum.photos/500/300" alt="">
        </p>
        <div class="position-absolute top-50 start-50 translate-middle">
            <p class="text-white display-1" >Mypage</p>
        </div>
    </div>


            <!--曲-->
            <div>


                <div class="d-flex align-items-end flex-wrap pt-5 justify-content-center">

                    <p class=""><img class="img-fluid ms-md-5" src="https://picsum.photos/200/200" alt=""></p>

                    <ul class="mx-5 list-unstyled">
                        <li class="h1">ビートルズ</li>
                        <li class="h4">イエスタディ</li>
                    </ul>

                    <ul class="d-flex ms-md-auto list-unstyled">
                        <li class="">投稿日:</li>
                        <li>2020年7月7日</li>

                    </ul>

                </div>

                <hr>


                <div class="d-flex align-items-end flex-wrap pt-5 justify-content-center">

                    <figure class=""><img class="img-fluid ms-md-5" src="https://picsum.photos/200/200" alt=""></figure>

                    <ul class="mx-5 list-unstyled">
                        <li class="h2">ビートルズ</li>
                        <li class="h3">イエスタディ</li>
                    </ul>

                    <ul class="d-flex ms-md-auto list-unstyled">
                        <li class="">投稿日:</li>
                        <li>2020年7月7日</li>
                    </ul>
                </div>
                <hr>
                <div class="d-flex align-items-end flex-wrap pt-5 justify-content-center">

                    <figure class=""><img class="img-fluid ms-md-5" src="https://picsum.photos/200/200" alt=""></figure>

                    <ul class="mx-5 list-unstyled">
                        <li class="h2">ビートルズ</li>
                        <li class="h3">イエスタディ</li>
                    </ul>

                    <ul class="d-flex ms-md-auto list-unstyled">
                        <li class="">投稿日:</li>
                        <li>2020年7月7日</li>
                    </ul>
                </div>
                <hr>
                <div class="d-flex align-items-end flex-wrap pt-5 justify-content-center">

                    <figure class=""><img class="img-fluid ms-md-5" src="https://picsum.photos/200/200" alt=""></figure>

                    <ul class="mx-5 list-unstyled">
                        <li class="h2">ビートルズ</li>
                        <li class="h3">イエスタディ</li>
                    </ul>

                    <ul class="d-flex ms-md-auto list-unstyled">
                        <li class="">投稿日:</li>
                        <li>2020年7月7日</li>
                    </ul>
                </div>
                <hr>
                <div class="row offset-md-9 my-5">
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
            </div>





@endsection

