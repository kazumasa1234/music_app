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
            <p class="text-white display-1">Mypage</p>
        </div>
    </div>


    <!--曲-->
    <div>

        @foreach($songs as $row)

            <div class="d-flex align-items-end flex-wrap pt-5 justify-content-center justify-content-md-between">

                <p class="w-50 h-50"><img class="img-thumbnail" src="{{$row->img_file_name}}" alt="img"></p>

                <ul class="mx-5 list-unstyled h-25 w-25">
                    <i class="fas fa-male"></i>
                    <li class="h2">{{$row->artist}}</li>
                    <i class="fas fa-record-vinyl"></i>
                    <li class="h3">{{$row->song_name}}</li>
                    <i class="fas fa-guitar"></i>
                    <li class="h6">{{ $category[$row->category] }}</li>
                    <li class="">投稿日:</li>
                    <li>{{$row->created_at}}</li>
                </ul>

                <ul class="d-flex ms-md-auto list-unstyled">
                    <form action="{{route('delete',$row)}}" method="post">
                        @csrf

                        <li>
                            <button type="submit" class="btn btn-secondary">削除</button>
                        </li>
                    </form>

                    <form action="{{route('edit',$row)}}" method="get">
                        {{--                            {{dump($row)}} {{exit}}--}}
                        @csrf
                        <li >
                            <button type="submit" class="btn btn-secondary">編集</button>
                        </li>
                    </form>



                </ul>
            </div>
            <hr>
        @endforeach

        {{ $songs->links() }}
        {{--                ページネーション--}}
        {{--                <div class="row offset-md-9 my-5">--}}
        {{--                    <nav aria-label="Page navigation">--}}
        {{--                        <ul class="pagination d-flex justify-content-center">--}}
        {{--                            <li class="page-item"><a class="page-link" href="#">Prev</a></li>--}}
        {{--                            <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
        {{--                            <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
        {{--                            <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
        {{--                            <li class="page-item"><a class="page-link" href="#">Next<</a></li>--}}
        {{--                        </ul>--}}
        {{--                    </nav>--}}
        {{--                </div>--}}
    </div>





@endsection

