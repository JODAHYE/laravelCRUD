@extends('layout')
@section('title')
게시글 보기
@endsection

@section('content')
<h3>{{$post->title}}</h3>
<div id='post-show-control'>
    <button type='button'>수정</button>
    <button type='button'>삭제</button>
</div>
<div id='post-show'>
<p>작성자: {{$post->writer}}님</p>
<p>{{$post->created_at}}</p>
<p id='post-show-content'>{{$post->content}}</p>
</div>
<button type='button' id='list-button'>목록</button>
@endsection