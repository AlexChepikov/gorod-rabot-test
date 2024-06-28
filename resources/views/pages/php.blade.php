@extends('layouts.app')

@section('content')
    <div class="p-4">
        <a href="{{route('pages.main')}}" class="btn btn-primary mb-2">Назад</a>
        <form>
            <div class="mb-3">
                <label class="form-label">Адрес:</label>
                <input type="text" class="form-control" name="address" value="{{$request->address ?? ''}}">
            </div>
            <button type="submit" class="btn btn-primary">Применить</button>
        </form>
        @if(!empty($results))
            <table class="table">
                <tr>
                    <td>Страна</td>
                    <td>Город(Область)</td>
                    <td>Улица</td>
                    <td>Дом</td>
                </tr>
                @foreach($results as $result)
                    <tr>
                        <td>{{$result['CountryName'] ?? '-'}}</td>
                        <td>{{$result['AdministrativeAreaName'] ?? '-'}}</td>
                        <td>{{$result['ThoroughfareName'] ?? '-'}}</td>
                        <td>{{$result['PremiseNumber'] ?? '-'}}</td>
                    </tr>
                @endforeach
            </table>
        @endif
    </div>
@endsection
