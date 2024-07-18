@extends('testBlade.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent
    <p>Đây là sidebar của trang con.</p>
@endsection

@section('content')
    <p>Đây là nội dung của trang con.</p>
@endsection
