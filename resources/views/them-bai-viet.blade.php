{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Wellcome')

@section('content_header')
<h2>Tạo nên một kiệt tác</h2>
@stop

@section('content')
<form role="form" method="POST" action="{{url('admin/them-bai-viet')}}">
{{ csrf_field() }}
    <!-- text input -->
    <div class="form-group">
        <label>Tiêu đề</label>
        <input type="text" class="form-control" placeholder="..." name="title">
    </div>
    <div class="form-group">
        <label>Nội dung</label>
        <textarea class="form-control" rows="10" placeholder="..." name="content"></textarea>
    </div>
    <div class="form-group">
        <label>Tóm tắt</label>
        <textarea class="form-control" rows="3" placeholder="..." name="description"></textarea>
    </div>
    <div class="form-group">
        <label>Tag</label>
        <input type="text" class="form-control" placeholder="..." name="tag">
    </div>
    <div class="form-group">
        <label>Tác giả</label>
        <input type="text" class="form-control" placeholder="..." name="author">
    </div>

    <!-- textarea -->

    <input type="submit" name="submit" class="btn btn-primary" value="Thêm">

</form>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop