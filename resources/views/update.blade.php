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
    padding: 6px;
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
    gap: 4px;
}
</style>
@endsection('style')

@section('content')
<h1>게시글 수정</h1>
<form id='post-form' method='POST' action="{{ route('post.update', $post->id) }}">
    @method('PUT')
    @csrf
    <input type='text' name='title' placeholder='제목' value='{{ $post->title }}'/>
    <input type='text' name='writer' placeholder='작성자' value='{{ $post->writer }}' />
    <textarea name='content' placeholder='내용'>{{ $post->content }}</textarea>
    <div>
    <button type='button' onClick="location.href='/show/{{ $post->id }}'">취소</button>
    <button type='submit'>완료</button>
    </div>
</form>
@endsection