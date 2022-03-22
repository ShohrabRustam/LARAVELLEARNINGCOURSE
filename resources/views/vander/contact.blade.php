@extends('layouts.app')
@section('content')
<h1>Contact Page </h1>
@if(count($people))
<ul>
    <li>The People are</li>
@foreach ($people as $person)
    <li>{{ $person }}</li>

@endforeach
</ul>
@endif
@endsection

@section('footer')
<center><h2>This is footer</h2></center>
@endsection
