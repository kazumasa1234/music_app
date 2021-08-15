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
            <p class="text-white display-1">Home</p>
        </div>
    </div>



    <div class="container-fluid px-5">
        <!-- ここに中身-->
        <!--選択-->
        <div class="pt-5">
            <form action="{{route('top')}}" method="get">
                @csrf

                <p class="mx-3 h4">曲順並べ替え</p>

                <select class="ms-2 form-control" name="date">

                    <option value="asc" @if($date ?? '' == 'asc') selected @endif>新しい順</option>

                    <option value="desc" @if($date ?? '' == 'desc') selected @endif>古い順</option>

                </select>
                <select class="mx-2 form-control" name="playnum">
                    <option value="asc">再生回数　多い</option>
                    <option value="desc">再生回数　少ない</option>
                </select>
                <br>
                <p class="row offset-md-10">
                    <button class="btn btn-secondary" type="submit">並び変え</button>
                </p>

            </form>
        </div>
        <p class="row offset-md-10">
            <button class="btn btn-danger my-3" type="submit">ALL PLAY</button>
        </p>

        <hr>
        <!--曲-->
        <div>


            {{--            <div class="d-flex align-items-end flex-wrap pt-5 justify-content-center">--}}

            {{--                <p class=""><img class="img-fluid" src="https://picsum.photos/200/200" alt=""></p>--}}

            {{--                <ul class="mx-5 list-unstyled">--}}
            {{--                    <li class="h2">ビートルズ</li>--}}
            {{--                    <li class="h3">イエスタディ</li>--}}
            {{--                </ul>--}}

            {{--                <ul class="d-flex push list-unstyled">--}}
            {{--                    <li class="mx-2">再生回数</li>--}}
            {{--                    <li class="mx-2">いいね</li>--}}
            {{--                    <li class="mx-2">ダウンロード</li>--}}
            {{--                </ul>--}}

            {{--            </div>--}}
            {{--            <hr>--}}


            @foreach($songs as $row)




                <div class="d-flex align-items-end flex-wrap pt-5 justify-content-md-between justify-content-center">

                    <p class="w-50 h-50"><img class="img-fluid" src="{{$row->img_file_name}}" alt="img"></p>

                    <ul class="mx-5 list-unstyled  h-25 w-25">
                        <i class="fas fa-male"></i>
                        <li class="h1">{{ $row->artist }}</li>
                        <i class="fas fa-record-vinyl"></i>
                        <li class="h4">{{ $row->song_name }}</li>
                        {{--                        <i class="fas fa-guitar"></i>--}}
                        {{--                        <li class="h6">{{ $row->category}}</li>--}}

                        <li class="">投稿日:</li>
                        <li>{{$row->created_at}}</li>
                    </ul>


                </div>

                <span class="row">
                    <!-- もし$niceがあれば＝ユーザーが「いいね」をしていたら -->
            @if($row->nices()->where('user_id', '=', Auth::id())->get()->count())
                <!-- 「いいね」取消用ボタンを表示 -->
                    <a href="{{ route('unnice', $row) }}" class="btn btn-success btn-sm">
		    いいね
                        <!-- 「いいね」の数を表示 -->
		<span class="badge">
			{{ $row->nices->count() }}
		</span>
	</a>
            @else
                <!-- まだユーザーが「いいね」をしていなければ、「いいね」ボタンを表示 -->
                    <a href="{{ route('nice', $row) }}" class="btn btn-secondary btn-sm">
		いいね
                        <!-- 「いいね」の数を表示 -->
		<span class="badge">
			{{ $row->nices->count() }}
		</span>
	</a>
                @endif
    </span>
                <hr>

            @endforeach
        </div>

        {{ $songs->links() }}



        {{--        <div class="row offset-md-9">--}}
        {{--            <nav aria-label="Page navigation">--}}
        {{--                <ul class="pagination d-flex justify-content-center">--}}
        {{--                    <li class="page-item"><a class="page-link" href="#">Prev</a></li>--}}
        {{--                    <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
        {{--                    <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
        {{--                    <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
        {{--                    <li class="page-item"><a class="page-link" href="#">Next<</a></li>--}}
        {{--                </ul>--}}
        {{--            </nav>--}}
        {{--        </div>--}}


        <ul class="d-flex list-unstyled justify-content-sm-between flex-wrap justify-content-center mt-5">

            <a href="{{route('category',['category' => 'rock'])}}">
                <li class="my-2 card"><img class="card-img" src="https://picsum.photos/200" alt="">
                    <div class="card-img-overlay">
                        <p class="text-white h2">Rock</p>
                    </div>
                </li>
            </a>

            <a href="{{route('category',['category' => 'pop'])}}">
                <li class="my-2 card"><img class="card-img" src="https://picsum.photos/200/200" alt="">
                    <div class="card-img-overlay">
                        <p class="text-white h2">Pop</p>
                    </div>
                </li>
            </a>


            <a href="{{route('category',['category' => 'punk'])}}">
                <li class="my-2 card"><img class="card-img" src="https://picsum.photos/200" alt="">
                    <div class="card-img-overlay">
                        <p class="text-white h2">Punk</p>
                    </div>
                </li>
            </a>


            <a href="{{route('category',['category' => 'jazz'])}}">
                <li class="my-2 card"><img class="card-img" src="https://picsum.photos/200/200" alt="">
                    <div class="card-img-overlay">
                        <p class="text-white h2">Jazz</p>
                    </div>
                </li>
            </a>
        </ul>


    </div>

@endsection



