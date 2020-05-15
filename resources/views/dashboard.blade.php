@extends('layouts.app')

@section('head')
<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container"> 
    <div class="row justify-content-center">
    <h1 class="title">Legisladores</h1>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ordenar por:</button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="{{route('display.votes')}}">Mas Votado</a>
          <a class="dropdown-item" href="{{route('display.ending')}}">Fecha de Mandato</a>
        </div>
    </div>
    </div>
    <div class="row justify-content-around ">
        @foreach ($legislators as $legislator)
        <div class="jumbotron col-xl-3 col-lg-4 col-md-5 col-sm-8">
            <h1 class="display-4">{{$legislator->name}} {{$legislator->surname}}</h1>
            <p class="lead">Email: <a href="mailto:{{$legislator->email}}">{{$legislator->email}}</a> </p>
            <p class="lead">Telefono: {{$legislator->cellphone}}</p>
            <span class="lead">{{$legislator->party}}, {{$legislator->votes}} votos</span>
                <hr class="my-4">
                @if ($legislator->address != null)
                    <p class="lower">{{$legislator->address}}, {{$legislator->country}}</p>   
                @else
                    <p class="lower">{{$legislator->country}}</p>   
                @endif
                <p class="lower">El {{$legislator->ending}} termina su mandato</p>
            <div class="buttons row justify-content-around">
                <a class="btn btn-warning btn-lg" href="{{route('edit', $legislator->id)}}" role="button"><svg class="bi bi-pencil-square" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.502 1.94a.5.5 0 010 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 01.707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 00-.121.196l-.805 2.414a.25.25 0 00.316.316l2.414-.805a.5.5 0 00.196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 002.5 15h11a1.5 1.5 0 001.5-1.5v-6a.5.5 0 00-1 0v6a.5.5 0 01-.5.5h-11a.5.5 0 01-.5-.5v-11a.5.5 0 01.5-.5H9a.5.5 0 000-1H2.5A1.5 1.5 0 001 2.5v11z" clip-rule="evenodd"/>
                </svg></a>
            <a class="btn btn-danger btn-lg" href="{{route('destroy', $legislator->id)}}" role="button"><svg class="bi bi-trash-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2.5 1a1 1 0 00-1 1v1a1 1 0 001 1H3v9a2 2 0 002 2h6a2 2 0 002-2V4h.5a1 1 0 001-1V2a1 1 0 00-1-1H10a1 1 0 00-1-1H7a1 1 0 00-1 1H2.5zm3 4a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7a.5.5 0 01.5-.5zM8 5a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7A.5.5 0 018 5zm3 .5a.5.5 0 00-1 0v7a.5.5 0 001 0v-7z" clip-rule="evenodd"/>
                </svg></a>
            </div>
        </div>  
        
        @endforeach
    </div>
    <div class="row justify-content-center">
    {{$legislators->links()}}
    </div>

</div>
@endsection
@section('scripts')
<script>
    var points = [40, 100, 1, 5, 25, 10];
    document.getElementById("demo").innerHTML = points;  
    
    function myFunction1() {
      points.sort();
      document.getElementById("demo").innerHTML = points;
    }
    function myFunction2() {
      points.sort(function(a, b){return a - b});
      document.getElementById("demo").innerHTML = points;
    }
    </script>
@endsection