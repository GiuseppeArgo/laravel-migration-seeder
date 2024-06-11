@extends('layouts.app')

@section('content')
    <h1>Lista Treni</h1>
    <ul>
        @foreach ($trains as $train)
            <li>{{ $train->codice_treno}}</li>
        @endforeach 
    </ul>
@endsection