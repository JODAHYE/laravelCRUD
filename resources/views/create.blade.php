@extends('layout')
@section('title')
게시글 작성
@endsection

@section('content')
<h1>게시글 작성</h1>
<form id='post-form'>
    <input type='text' name='title' />
    <input type='text' name='writer' />
    <textarea name='content'></textarea>
    <div>
    <button type='button'>취소</button>
    <button type='submit'>완료</button>
    </div>
</form>
@endsection