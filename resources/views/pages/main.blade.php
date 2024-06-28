@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center align-items-center min-vw-100 min-vh-100">
        <a href="{{route('pages.sql')}}" class="btn btn-primary mx-2">Задача SQL</a>
        <a href="{{route('pages.php')}}" class="btn btn-primary">Задача PHP</a>
    </div>
@endsection
