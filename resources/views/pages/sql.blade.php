@extends('layouts.app')

@section('content')
    <div class="p-4">
        <a href="{{route('pages.main')}}" class="btn btn-primary mb-2">Назад</a>
        <table class="table">
            <tr>
                <td>#</td>
                <td>Артикул</td>
                <td>Поставщик</td>
                <td>Цена</td>
            </tr>
            @foreach($shops as $shop)
                <tr>
                    <td>{{$shop->id}}</td>
                    <td>{{$shop->article}}</td>
                    <td>{{$shop->dealer}}</td>
                    <td>{{$shop->price}}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
