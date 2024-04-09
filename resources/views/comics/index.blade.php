@extends('layouts.app')

@section('title')
DC laravel-comics
@endsection
    

@section('content')

<ul>

    @foreach ($comics as $comic)
        <li>
            <h3>
                {{$comic['title']}}
            </h3>
            <p>
                {{$comic['description']}}
            </p>
        </li>
    @endforeach

</ul>


@endsection