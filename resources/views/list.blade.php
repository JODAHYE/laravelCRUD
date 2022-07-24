@extends('layout')
@section('title')
게시글 목록
@endsection

@section('content')
<h1>게시글 리스트</h1>
<table class='w-full'>
    <tr>
        <th class='w-3/5'>제목</th>
        <th>작성자</th>
        <th>작성일</th>
    </tr>
    @foreach($posts as $post)
    <tr class='cursor-pointer hover:bg-gray-100' onClick="location.href='/show/{{ $post->id }}'">
        <td>{{ $post->title }}</td>
        <td>{{ $post->writer }}</td>
        <td>{{ $post->created_at }}</td>
    </tr>  
    @endforeach
</table>
@endsection