@extends('layouts.main')

@section('title', 'HDC Eventes')

@section('content')

@foreach($events as $event)

     <p>{{$event->title}}</p><br>
     <p>{{$event->description}}</p>

@endforeach

      
@endsection
       


  
