@extends('layout')
@section('title')
게시글 보기
@endsection

@section('content')
<form action="{{ route('post.delete', $post->id) }}" method='POST'>
    <button class='bg-indigo-300' type='button' onClick="location.href='{{ route('post.updateView', $post->id) }}'">수정</button>
    @method('DELETE')
    @csrf
    <button class='bg-indigo-300' type='submit'>삭제</button>
</form>
<div class='shadow-2xl border border-slate-400'>
<h3 class='text-xl border-b border-slate-400 p-2'>{{$post->title}}</h3>
<p class='border-b border-slate-400 p-2'>작성자: {{$post->writer}}님</p>
<p class='border-b border-slate-400 p-2'>{{$post->created_at}}</p>
<p class='border-slate-400 min-h-[500px] p-2'>{{$post->content}}</p>
</div>

@endsection