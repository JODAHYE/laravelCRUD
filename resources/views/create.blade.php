@extends('layout')
@section('title')
게시글 작성
@endsection

@section('content')
<h1>게시글 작성</h1>
<form class='flex flex-col gap-1' method='POST' action='/create'>
    @csrf
    <input type='text' name='title' placeholder='제목' />
    <input type='text' name='writer' placeholder='작성자' />
    <textarea class='h-[500px]' name='content' placeholder='내용'></textarea>
    <div class='flex justify-center gap-2'>
    <button class='bg-indigo-300' type='button' onClick="location.href='/'">취소</button>
    <button class='bg-indigo-300' type='submit'>완료</button>
    </div>
</form>
@endsection