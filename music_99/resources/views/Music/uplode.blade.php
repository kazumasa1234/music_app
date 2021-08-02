@extends('layouts.layout')
@section('title', 'マイページ')

@section('content')



    <div class="position-relative vh-100">
        <p class="vh-100 overflow-hidde">
            <img class="w-100 h-100 hero" src="https://picsum.photos/500/300" alt="">
        </p>
        <div class="position-absolute top-50 start-50 translate-middle">
            <p class="text-white display-1" >Upload</p>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="text-center">
        <div class="pt-5">
            <img class="w-50 h-50" src="https://picsum.photos/400/400" alt="">
        </div>
                    <form class="mt-5 mx-3" method="post" action="{{route('uplode_post')}}" enctype="multipart/form-data">
                        @csrf
                        <label for="formFile" class="form-label ">曲名</label>
                        <input class="form-control form-control-lg" type="text" placeholder="曲名を入れて下さい"
                               aria-label=".form-control-lg example" name="song_name" value="{{ old('song_name') }}">
                        @if ($errors->has('song_name'))
                            @foreach($errors->get('song_name') as $message)
                                   <p class="text-danger">  {{ $message }} </p>
                                @endforeach
                        @endif
                        <label for="formFile" class="form-label mt-3 mb-0">アーティスト</label>
                        <input class="form-control form-control-lg" type="text" placeholder="アーティスト名を入れて下さい"
                               aria-label=".form-control-lg example" name="artist" value="{{ old('artist') }}">
                        @if ($errors->has('artist'))
                            @foreach($errors->get('artist') as $message)
                                <p class="text-danger">  {{ $message }} </p>
                            @endforeach
                        @endif
                        <label for="formFile" class="form-label mt-3">ジャンル</label>
                        <input class="form-control form-control-lg" type="text" placeholder="ジャンルを入れて下さい"
                               aria-label=".form-control-lg example" name="category" value="{{ old('category') }}">
                        @if($errors->has('category'))
                            <p class="text-danger">{{ $errors->first('category') }}</p>
                        @endif
                        <div class="mt-5">
                            <label for="formFile" class="form-label mb-3">写真をえらんでください</label>
                            <input class="form-control" type="file" id="formFile" name="img_file_name" value="{{ old('img_file_name') }}">
                        </div>
                        @if($errors->has('img_file_name'))
                            <p class="text-danger">{{ $errors->first('img_file_name') }}</p>
                        @endif


                        <div class="mt-5">
                            <label for="formFile" class="form-label mb-3">曲を選んで下さい</label>
                            <input class="form-control" type="file" id="formFile" name="mp3_file_name" value="{{ old('mp3_file_name') }}" >
                        </div>
                        @if($errors->has('mp3_file_name'))
                            <p class="text-danger">{{ $errors->first('mp3_file_name') }}</p>
                        @endif
                        <div class="d-grid  mx-3 mt-5 mb-5">
                            <button class="btn btn-primary" type="submit" name="submit">アップロード</button>
                        </div>

                    </form>
    </div>



@endsection




