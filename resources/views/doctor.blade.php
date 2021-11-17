@extends('main')

@section('title', 'Docotores')

@section('sidebar')
    @parent

    <p>This is appended to the main sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection