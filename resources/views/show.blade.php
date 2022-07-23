@extends('layout')
@section('title')
게시글 보기
@endsection

@section('style')
<style>
#post-show p {
    border: 1px solid #eee;
    padding: 4px;
    margin: 0;
}
#post-show-content {
    min-height: 500px;
}
</style>
@endsection('style')

@section('content')
<h3>{{$post->title}}</h3>
<form id='post-show-control' action="{{ route('post.delete', $post->id) }}" method='POST'>
    <button type='button' onClick="location.href='{{ route('post.updateView', $post->id) }}'">수정</button>
    @method('DELETE')
    @csrf
    <button type='submit'>삭제</button>
</form>
<div id='post-show'>
<p>작성자: {{$post->writer}}님</p>
<p>{{$post->created_at}}</p>
<p id='post-show-content'>{{$post->content}}</p>
</div>

@endsection