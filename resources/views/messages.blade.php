@extends('layout/master')

@section('title', 'Mini Twitter')

@section('content')


<form action="/create" method="post">
    <input type="text" name="title" placeholder="Title">
    <input type="text" name="content" placeholder="Content">

    @csrf 
    <button type="submit">Submit</button>
</form>


<h2>Recent messages:</h2>

<ul>

@foreach ($messages as $message)
<li


<!-- <h2>Create a new message: </h2>



    <li>
        <b>{{$message->title}}: <b><br>
        {{$message->content}}<br>
        {{$message->created_at->diffForHumans()}}
    </li>
@endforeach -->
</ul>


@endsection