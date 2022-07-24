@extends('layout')
@section('title')
게시글 작성
@endsection

@section('content')
<h1>게시글 수정</h1>
<form id='post-form' method='POST' action='{{ route('post.update', $post->id) }}'  class='flex flex-col gap-1'>
    @method('PUT')
    @csrf
    <input type='text' name='title' placeholder='제목' value='{{ $post->title }}' />
    <input type='text' name='writer' placeholder='작성자' value='{{ $post->writer }}' />
    <textarea class='h-[500px]' name='content' placeholder='내용'>{{ $post->content }}</textarea>
    <div class='flex justify-center gap-2'>
    <button class='bg-indigo-300' type='button' onClick="location.href='/show/{{ $post->id }}'">취소</button>
    <button class='bg-indigo-300' type='submit' >완료</button>
    </div>
</form>
@endsection