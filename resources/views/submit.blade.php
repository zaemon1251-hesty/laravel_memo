@extends('layout')

@section('content')


    <form method="POST" action="{{ route('submit', ['id'=> $memo-> id])}}">
      @csrf
        <div>
        <label for="title">タイトル</label>
        <input name="title" id="title" class="form-control mt-4" value="{{$memo->title}}"></input>
        </div>
        <div>
        <label for="content">内容</label>
        <input name="content" id="content" class="form-control mt-4" value="{{$memo->content}}"></input>
        </div>

       
        <div class="text-right mt-4">
          <button type="submit" class="btn btn-outline-secondary btn-sm">追加</button>
          <a href="{{route('home')}}" class="btn btn-outline-secondary btn-sm">キャンセル</a>
        </div>

    </form>

@endsection