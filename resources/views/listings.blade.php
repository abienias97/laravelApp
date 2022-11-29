@extends('layout')

@section('content')

<h1>{{$heading;}}</h1>

@if(count($listings) == 0)
    <p>No listings</p>
@else
@foreach($listings as $listing)
     <h2><a href="/{{$listing['id']}}">{{$listing['title']}}</a></h2>
     <p>{{$listing['description']}}</p>
@endforeach

@endif

@endsection
