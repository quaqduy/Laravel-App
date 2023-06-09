@extends('layouts.layout')

@section('content')
{{-- <ul>
    @foreach($data as $item)
        <li>
            <div>Name : {{ $item['name'] }}</div>
            <div>Price : {{ $item['price'] }}</div>
        </li>
    @endforeach
</ul> --}}

@if(isset($data))
    {{dd($data)}}
@endif
@endsection
