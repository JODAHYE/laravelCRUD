@extends('layout')
@section('title')
게시글 목록
@endsection

@section('style')
<style>
.post-list{
    width: 100%;
}
.post-list-header{
    border: 1px solid #ddd;
}
#post-list-header-title{
    width: 60%;
}
.post-item{
    cursor: pointer;
}
.post-item:hover{
    background: #eee;
}
.post-info{
    border: 1px solid #ddd;
}
</style>
@endsection('style')

@section('content')
<h1>게시글 리스트</h1>

<table class='post-list'>
    <tr>
        <th class='post-list-header' id='post-list-header-title'>제목</th>
        <th class='post-list-header'>작성자</th>
        <th class='post-list-header'>작성일</th>
    </tr>
    @foreach($posts as $post)
    <tr class='post-item' onClick="location.href='/show/{{ $post->id }}'">
        <td class='post-info'>{{ $post->title }}</td>
        <td class='post-info'>{{ $post->writer }}</td>
        <td class='post-info'>{{ $post->created_at }}</td>
    </tr>  
    @endforeach
</table>
@endsection