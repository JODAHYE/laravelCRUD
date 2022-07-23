@extends('layout')
@section('title')
게시글 목록
@endsection

@section('content')
<h1>게시글 리스트</h1>
<table class='post-list'>
    <tr>
        <th class='post-list-header'>제목</th>
        <th class='post-list-header'>작성자</th>
        <th class='post-list-header'>내용</th>
    </tr>
    @foreach($posts as $post)
    <tr class='post-item'>
        <td class='post-info'>{{ $post->title }}</td>
        <td class='post-info'>{{ $post->writer }}</td>
        <td class='post-info'>{{ $post->content }}</td>
    </tr>
    @endforeach
</table>
@endsection