@extends('layout.app')
@section('kichwa','Gita')
@section('content')

<div>
    @foreach($guiters as $guiter)
      <h3>

      <a href="{{route('guiters.show', ['guiter' => $guiter['id']])}}"> {{$guiter["name"]}}</a>
       
    </h3>
      <ul>
        <li>{{$guiter["brand"]}}</li>
      </ul>
    @endforeach
    <h3>createted by {{$userinput}}</h3>
<h3></h3>
  

@foreach($comment as $com)
  <h5>{{$com["comment"]}}</h5>
@endforeach
</div>
@endsection