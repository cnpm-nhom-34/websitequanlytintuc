{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Wellcome')

@section('content_header')
<h2>Danh sách những kiệt tác của chúng ta</h2>

@stop

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Tên tác phẩm</th>
      <th scope="col">Tác giả</th>
      <th scope="col">Time</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($posts as $post)
    <tr>
      <th scope="row">{{ $post->id}}</th>
      <td><a href="{{url('chi-tiet-bai-viet')}}/{{$post->id}}}">{{ $post->title }}</a></td>
      <td>{{ $post->author }}</td>
      <td>{{ $post->created_at }}</td>
      <td><a href="xoa-bai-viet/{{ $post->id}}">Xóa</a></td>
    </tr>
    @endforeach
</table>
{!! $posts->links() !!}
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
  console.log('Hi!');
</script>
@stop