@extends('layout')
@section('title')
게시글 작성
@endsection

@section('style')
<style>
#post-form{
    display: flex;
    flex-direction: column;
    gap: 10px;
    width: 100%;
}
#post-form input, #post-form textarea {
    outline: none;
    border: 1px solid #5E34A1;
}
#post-form input:focus, #post-form textarea:focus{
    border: 1px solid #9D6CEC;
}
#post-form textarea{
    height: 500px;
}
#post-form div{
    display: flex;
    justify-content: center;
}
</style>
@endsection('style')

@section('content')
<h1>게시글 작성</h1>
<form id='post-form' method='POST' action='/create'>
    @csrf

    <input type='text' name='title' />
    <input type='text' name='writer' />
    <textarea name='content'></textarea>
    <div>
    <button type='button' onClick="location.href='/'">취소</button>
    <button type='submit'>완료</button>
    </div>
</form>
@endsection